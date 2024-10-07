<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Consultant;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Exception;

class ConsultantController extends Controller
{
    // Display the list of consultants
    public function index()
    {
        return view('Admin.consultant.consultant');
    }

    // Fetch consultants for DataTables
    public function getConsultants(Request $request)
    {
        try {
            // Check if the request is AJAX
            if ($request->ajax()) {
                try {
                    // Fetch consultant data from the database
                    $data = Consultant::all();
                } catch (\Exception $e) {
                    return response()->json(['error' => 'Error fetching consultant data.'], 500);
                }

                try {
                    // Process data using DataTables
                    return Datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('actions', function ($row) {
                            try {
                                // Create action buttons (view more, delete)
                                return '
                                    <a href="/admin/consultants/' . $row->id . '" class="btn btn-info">View More</a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDeleteModal" data-id="' . $row->id . '" data-name="' . $row->name . '">Delete</button>';
                            } catch (\Exception $e) {
                                return response()->json(['error' => 'Error generating action buttons.'], 500);
                            }
                        })
                        ->rawColumns(['actions'])
                        ->make(true);
                } catch (\Exception $e) {
                    return response()->json(['error' => 'Error processing data for DataTables.'], 500);
                }
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'An unexpected error occurred.'], 500);
        }
    }

    public function show($id)
    {
        try {
            // Attempt to find the consultant by ID
            $consultant = Consultant::findOrFail($id);

            // Return the view with consultant details
            return view('Admin.consultant.show', compact('consultant'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {


            // Redirect back with an error message
            return redirect()->route('admin.consultants.index')->with('error', 'Consultant not found.');
        } catch (\Exception $e) {

            // Redirect back with a general error message
            return redirect()->route('admin.consultants.index')->with('error', 'An error occurred while fetching consultant details.');
        }
    }


    // Delete a consultant
    public function destroy($id)
    {
        try {
            $consultant = Consultant::findOrFail($id);
            $consultant->delete();
            return redirect()->route('admin.consultants.index')->with('success', 'Consultant deleted successfully.');
        } catch (Exception $e) {
            return redirect()->route('admin.consultants.index')->with('error', 'Failed to delete consultant.');
        }
    }
}
