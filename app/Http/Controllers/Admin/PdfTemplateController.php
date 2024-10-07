<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PdfTemplate;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class PdfTemplateController extends Controller
{
    // Display a listing of the PDF templates
    public function index()
    {
        return view('Admin.pdf_templates.index');
    }

    // Fetch all PDF templates for DataTables
    public function getPdfTemplates()
    {
        try {
            $query = PdfTemplate::select('id', 'header_name', 'footer_name', 'created_at', 'updated_at');

            return DataTables::of($query)
                ->addIndexColumn() // Add an index column
                ->editColumn('created_at', function ($pdfTemplate) {
                    return $pdfTemplate->created_at->format('d/m/Y');
                })
                ->editColumn('updated_at', function ($pdfTemplate) {
                    return $pdfTemplate->updated_at->format('d/m/Y');
                })
                ->make(true);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error fetching PDF templates: ' . $e->getMessage()], 500);
        }
    }


    // Show the form for creating a new PDF template
    public function create()
    {
        return view('Admin.pdf_templates.create');
    }

    // Store a newly created PDF template in storage
    public function store(Request $request)
    {
        try {
            // Validate the request data
            $this->validateRequest($request);

            // Set default values for header name and image if not provided
            $header_name = $request->header_name ?? 'Dummy Header';
            $header_img = $this->handleFileUpload($request, 'header_img', 'uploads/header') ?? 'dummy-header.png';

            // Handle footer image (no default for footer)
            $footer_img = $this->handleFileUpload($request, 'footer_img', 'uploads/footer');

            // Check if a template with the same header_name and footer_name already exists
            $existingTemplate = PdfTemplate::where('header_name', $header_name)
                ->where('footer_name', $request->footer_name)
                ->first();

            if ($existingTemplate) {
                // Overwrite the existing template
                $existingTemplate->update([
                    'header_img' => $header_img,
                    'footer_img' => $footer_img,
                ]);

                return redirect()->route('admin.pdfTemplates.index')
                    ->with('success', 'Existing PDF Template updated successfully.');
            } else {
                // Create a new template if it doesn't exist
                PdfTemplate::create([
                    'header_name' => $header_name,
                    'footer_name' => $request->footer_name,
                    'header_img' => $header_img,
                    'footer_img' => $footer_img,
                ]);

                return redirect()->route('admin.pdfTemplates.index')
                    ->with('success', 'PDF Template created successfully.');
            }
        } catch (\Exception $e) {
            return redirect()->back()
                ->withErrors(['error' => 'Error creating PDF template: ' . $e->getMessage()])
                ->withInput();
        }
    }


    // Display the specified PDF template
    public function show($id)
    {
        try {
            $pdfTemplate = PdfTemplate::findOrFail($id);
            return response()->json($pdfTemplate);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error fetching PDF template: ' . $e->getMessage()], 500);
        }
    }

    // Show the form for editing the specified PDF template
    public function edit($id)
    {
        try {
            $pdfTemplate = PdfTemplate::findOrFail($id);
            return view('Admin.pdf_templates.edit', compact('pdfTemplate'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.pdfTemplates.index')->with('error', 'PDF Template not found.');
        } catch (Exception $e) {

            log::error('Error preparing edit view for PDF template: ' . $e->getMessage());
            return redirect()->route('admin.pdfTemplates.index')->with('error', 'An error occurred while preparing the edit view: ' . $e->getMessage());
        }
    }



    // Update the specified PDF template in storage
    public function update(Request $request, $id)
    {
        try {
            $this->validateRequest($request);
            Log::info("Validation passed for updating PDF template with ID {$id}.");

            $pdfTemplate = PdfTemplate::findOrFail($id);
            Log::info("PDF Template found with ID {$id}.");

            // Handle file uploads if new files are provided
            try {
                $header_img = $this->handleFileUpload($request, 'header_img', 'header', $pdfTemplate->header_img);
                Log::info("Header image processed successfully.");
            } catch (\Exception $e) {
                Log::error("Error processing header image for PDF template ID {$id}: " . $e->getMessage());
                return redirect()->back()->withErrors(['error' => 'Error processing header image: ' . $e->getMessage()])->withInput();
            }

            try {
                $footer_img = $this->handleFileUpload($request, 'footer_img', 'footer', $pdfTemplate->footer_img);
                Log::info("Footer image processed successfully.");
            } catch (\Exception $e) {
                Log::error("Error processing footer image for PDF template ID {$id}: " . $e->getMessage());
                return redirect()->back()->withErrors(['error' => 'Error processing footer image: ' . $e->getMessage()])->withInput();
            }

            // Update the template
            try {
                $pdfTemplate->update([
                    'header_name' => $request->header_name,
                    'footer_name' => $request->footer_name,
                    'header_img' => $header_img,
                    'footer_img' => $footer_img,
                ]);
                Log::info("PDF Template with ID {$id} updated successfully.");
            } catch (\Exception $e) {
                Log::error("Error updating PDF template ID {$id}: " . $e->getMessage());
                return redirect()->back()->withErrors(['error' => 'Error updating PDF template: ' . $e->getMessage()])->withInput();
            }

            return redirect()->route('admin.pdfTemplates.index')->with('success', 'PDF Template updated successfully.');
        } catch (\Exception $e) {
            // Log the error message with additional context for the main try-catch block
            Log::error('General error updating PDF template with ID ' . $id, [
                'error' => $e->getMessage(),
                'request_data' => $request->all(),
            ]);
            return redirect()->back()->withErrors(['error' => 'Error updating PDF template: ' . $e->getMessage()])->withInput();
        }
    }





    protected function handleFileUpload(Request $request, $fieldName, $directory, $currentFile = null)
    {
        // Check if a file is being uploaded
        if ($request->hasFile($fieldName)) {
            Log::info("File upload initiated for field: {$fieldName}");

            // Delete the old file if it exists
            if ($currentFile) {
                Log::info("Deleting old file: {$currentFile}");
                if (Storage::delete($currentFile)) {
                    Log::info("Successfully deleted file from storage: {$currentFile}");
                } else {
                    Log::warning("Failed to delete file from storage: {$currentFile}");
                }

                // Also delete from the local filesystem (if necessary)
                $localFilePath = public_path("storage/{$currentFile}"); // Adjust this if your path differs
                if (File::exists($localFilePath)) {
                    Log::info("Deleting old file from local filesystem: {$localFilePath}");
                    if (File::delete($localFilePath)) {
                        Log::info("Successfully deleted local file: {$localFilePath}");
                    } else {
                        Log::warning("Failed to delete local file: {$localFilePath}");
                    }
                } else {
                    Log::info("No local file found to delete at: {$localFilePath}");
                }
            } else {
                Log::info("No current file to delete.");
            }

            try {
                // Store the new file with its original name
                $file = $request->file($fieldName);
                $fileName = $file->getClientOriginalName(); // Get the original file name
                Log::info("Storing new file with name: {$fileName}");

                $path = $file->storeAs("uploads/{$directory}", $fileName, 'public'); // Use storeAs to specify the name

                Log::info("File successfully uploaded to: {$path}");
                return $path; // Return the path of the uploaded file
            } catch (\Exception $e) {
                Log::error("Error storing file: {$e->getMessage()}");
                return $currentFile; // Return the current file in case of error
            }
        }

        Log::info("No new file uploaded for field: {$fieldName}");
        return $currentFile; // Return the current file if no new file is uploaded
    }


    // Remove the specified PDF template from storage
    public function destroy($id)
    {
        try {
            $pdfTemplate = PdfTemplate::findOrFail($id);
            $pdfTemplate->delete();

            return redirect()->route('admin.pdfTemplates.index')->with('success', 'PDF Template deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.pdfTemplates.index')->withErrors(['error' => 'Error deleting PDF template: ' . $e->getMessage()]);
        }
    }

    // Validate the request
    private function validateRequest(Request $request)
    {
        $request->validate([
            'header_name' => 'required|string|max:255',
            'footer_name' => 'required|string|max:255',
            'header_img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'footer_img' => 'nullable|image|mimes:jpeg,png|max:50',
        ]);
    }
}
