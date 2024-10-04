<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticlesCategory;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Yajra\DataTables\DataTables;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Exception;


class ArticleController extends Controller
{
    //crate new articles

    public function create()
    {
        try {
            // Retrieve categories using the Category model
            $categories = ArticlesCategory::all();
            return view('Admin.article.create', compact('categories'));
        } catch (Exception $e) {
            return redirect()->route('admin.articles.list')->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }

    //store articles in db


    public function articleStore(Request $request)
    {
        try {
            // Validate the form data
            $request->validate([
                'title' => 'required|string|max:255',
                'category_id' => 'required|exists:articles_categories,id',
                'description' => 'required|string',
                'file' => 'required|image|mimes:jpg,jpeg,png|max:4048', // Image validation
            ]);

            // Handle the image upload and create the article
            $imagePath = $this->handleFileUpload($request, 'file', 'articles');

            // Check if the image upload was successful
            if (!$imagePath) {
                return redirect()->route('admin.articles.create')
                    ->with('error', 'Failed to upload image. Please try again.')
                    ->withInput();
            }

            // Create a new article using Eloquent
            // $article = Article::create([
            //     'title' => $request->input('title'),
            //     'category_id' => $request->input('category_id'),
            //     'description' => $request->input('description'),
            //     'file' => $imagePath, // Save the image path in the database
            // ]);

            // Alternatively, you can use DB facade for custom queries if needed:
            DB::table('articles')->insert([
                'title' => $request->input('title'),
                'category_id' => $request->input('category_id'),
                'description' => $request->input('description'),
                'file' => $imagePath,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()->route('admin.articles.list')->with('success', 'Article added successfully.');
        } catch (ValidationException $e) {
            // Log validation errors
            Log::error('Validation failed: ', $e->errors());

            // Redirect back with validation errors
            return redirect()->route('admin.articles.create')
                ->withErrors($e->errors())
                ->withInput();
        } catch (\Exception $e) {
            // Log unexpected errors
            Log::error('Failed to create article: ' . $e->getMessage());

            return redirect()->route('admin.articles.create')
                ->with('error', 'Failed to create article. Please try again.');
        }
    }

    protected function handleFileUpload(Request $request, $inputName, $directory)
    {
        // Check if the file exists in the request
        if ($request->hasFile($inputName)) {
            try {
                // Get the uploaded file
                $file = $request->file($inputName);

                // Generate a unique file name
                $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

                // Store the file in the specified directory
                $filePath = $file->storeAs($directory, $fileName, 'public');

                // Return the path relative to the storage disk
                return 'storage/' . $filePath; // Adjust this according to your storage configuration
            } catch (\Exception $e) {
                // Log the error message
                Log::error('File upload failed: ' . $e->getMessage());

                // Return null if there is an error
                return null;
            }
        }

        // Return null if the file is not uploaded
        return null;
    }

    // Display a listing of articles with DataTables
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                return $this->getArticleData();
            }
            return view('Admin.article.articles');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while loading the articles list.');
        }
    }

    // Fetch and format data for DataTables
    // private function getArticleData()
    // {
    //     try {
    //         $query = Article::with('category')->select('articles.*');

    //         return DataTables::of($query)
    //             ->addIndexColumn()
    //             ->addColumn('actions', function ($row) {
    //                 $title = htmlspecialchars($row->title, ENT_QUOTES, 'UTF-8'); // Ensure title is properly encoded for HTML
    //                 // $showButton = '<a href="' . route('admin.articles.show', $row->id) . '" class="btn btn-info btn-sm" title="View"><i class="fas fa-eye"></i></a>';
    //                 $editButton = '<a href="' . route('admin.articles.edit', $row->id) . '" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-edit"></i></a>';
    //                 // Delete button with confirmation
    //                 $deleteButton = '<button type="button" class="btn btn-danger btn-sm" title="Delete" data-toggle="modal" data-target="#confirmDeleteModal" data-id="' . $row->id . '" data-title="' . $title . '"><i class="fas fa-trash"></i></button>';

    //                 return $editButton . ' ' . $deleteButton;
    //             })
    //             ->editColumn('category.name', function ($row) {
    //                 return $row->category->name ?? 'N/A';
    //             })
    //             ->rawColumns(['actions'])
    //             ->make(true);
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => 'An error occurred while fetching article data.'], 500);
    //     }
    // }

    private function getArticleData()
    {
        try {
            // Fetch articles with their related category
            $query = Article::with('category')->select('articles.*');

            return DataTables::of($query)
                ->addIndexColumn()
                ->addColumn('actions', function ($row) {
                    $title = htmlspecialchars($row->title, ENT_QUOTES, 'UTF-8'); // Ensure title is properly encoded for HTML
                    $editButton = '<a href="' . route('admin.articles.edit', $row->id) . '" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-edit"></i></a>';
                    // Delete button with confirmation
                    $deleteButton = '<button type="button" class="btn btn-danger btn-sm" title="Delete" data-toggle="modal" data-target="#confirmDeleteModal" data-id="' . $row->id . '" data-title="' . $title . '"><i class="fas fa-trash"></i></button>';

                    return $editButton . ' ' . $deleteButton;
                })
                ->editColumn('category.name', function ($row) {
                    // Display the category name or 'N/A' if not available
                    return $row->category->name ?? 'N/A';
                })
                ->rawColumns(['actions'])
                ->make(true);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while fetching article data.'], 500);
        }
    }


    public function edit($id)
    {
        try {
            $article = Article::findOrFail($id);
            $categories = ArticlesCategory::all();

            return view('Admin.article.edit', compact('article', 'categories'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.articles.list')->with('error', 'Article not found.');
        } catch (\Exception $e) {
            return redirect()->route('admin.articles.list')->with('error', 'An error occurred while preparing the edit view.');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            // Step 1: Validate the form data
            $request->validate([
                'title' => 'required|string|max:255',
                'category_id' => 'required|exists:articles_categories,id',
                'description' => 'required|string',
                'file' => 'nullable|image|mimes:jpg,jpeg,png|max:4048', // Image validation (optional)
            ]);

            // Step 2: Find the article by ID
            try {
                $article = Article::findOrFail($id);
            } catch (ModelNotFoundException $e) {
                Log::error('Article not found: ' . $e->getMessage());
                return redirect()->route('admin.articles.list')->with('error', 'Article not found.');
            }

            // Step 3: Handle file upload if a new file is provided
            $imagePath = null;
            if ($request->hasFile('file')) {
                // Handle the image upload
                $imagePath = $this->handleFileUpload($request, 'file', 'articles');

                // Check if the image upload was successful
                if (!$imagePath) {
                    return redirect()->route('admin.articles.edit', $id)
                        ->with('error', 'Failed to upload image. Please try again.')
                        ->withInput();
                }
            }

            // Step 4: Update the article using DB facade
            try {
                DB::table('articles')->where('id', $id)->update([
                    'title' => $request->input('title'),
                    'category_id' => $request->input('category_id'),
                    'description' => $request->input('description'),
                    'file' => $imagePath ? $imagePath : $article->file, // Only update file if a new one is uploaded
                    'updated_at' => now(), // Ensure to update the timestamp
                ]);
            } catch (\Exception $e) {
                Log::error('Failed to update article ID ' . $id . ': ' . $e->getMessage());
                return redirect()->route('admin.articles.list')->with('error', 'Failed to update the article.');
            }

            // Step 5: Success message after successful update
            return redirect()->route('admin.articles.list')->with('success', 'Article updated successfully.');
        } catch (ValidationException $e) {
            // Log validation errors
            Log::error('Validation failed for article update: ', $e->errors());

            return redirect()->route('admin.articles.edit', $id)
                ->withErrors($e->errors())
                ->withInput();
        } catch (\Exception $e) {
            // Catch any other unexpected errors
            Log::error('Unexpected error occurred during article update: ' . $e->getMessage());
            return redirect()->route('admin.articles.list')->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }



    public function destroy($id)
    {
        try {
            $article = Article::findOrFail($id);

            $article->delete();


            return redirect()->back()->with('success', 'Article deleted successfully.');
        } catch (ModelNotFoundException $e) {

            return redirect()->back()->with('error', 'Article not found.');
        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'An error occurred while deleting the article.');
        }
    }
}
