<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NameNumerology;
use App\Models\PhoneNumerology;
use App\Models\BusinessNumerology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Exception;
use Yajra\DataTables\Facades\DataTables as FacadesDataTables;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Storage;

class NumerologyListAdminController extends Controller
{
    //name numerology list
    public function nameNumerologyList(Request $request)
    {
        if ($request->ajax()) {
            $query = DB::table('name_numerology')
                ->leftJoin('users', 'name_numerology.user_id', '=', 'users.id')
                ->select(
                    'name_numerology.first_name',
                    'name_numerology.last_name',
                    'name_numerology.dob',
                    'name_numerology.gender',
                    'users.name as user_name',
                    'users.email as user_email',
                    'name_numerology.id',
                    'name_numerology.created_at' // Only select created_at for potential future use, not needed for expiration now
                );

            return FacadesDataTables::of($query)
                ->addIndexColumn() // Add index column for row numbers
                ->addColumn('action', function ($row) {
                    $encryptedId = $row->id;
                    $actionButtons = '<a href="' . url('admin/name-numerology/detail/' . $encryptedId) . '" class="btn btn-primary"> <i class="fa-solid fa-eye"></i></a>';

                    // Construct the download file path
                    $fileName = "{$row->first_name}_{$row->id}.pdf"; // Construct the file name
                    // $filePath = 'public/storage/uploads/NameNumerology/Akashdeep_3.pdf'; // Storage path

                    $filePath = 'NameNumerology/' . $fileName; // Storage path (no 'public/' or 'storage/' prefix)

                    // Check if the file exists in storage
                    if (Storage::disk('uploads')->exists($filePath)) {
                        // Show download button if file exists
                        $downloadUrl = Storage::disk('uploads')->url($filePath);
                        $actionButtons .= '<a href="' . $downloadUrl . '" class="btn btn-success"><i class="fa-solid fa-download"></i></a>';
                   
                    }
                     else {
                        // Show the button with the download icon and success color (without "Expired" text)
                        $actionButtons .= '
    <button class="btn btn-success expired-download-btn ms-1" data-id="' . $encryptedId . '">
        <i class="fa-solid fa-download"></i>
    </button>';
                    }
                    // Add delete button
                    $actionButtons .= ' <button class="btn btn-danger delete-btn" data-id="' . $encryptedId . '"><i class="fa-solid fa-trash"></i></button>';

                    return $actionButtons;
                })
                ->filterColumn('user_name', function ($query, $keyword) {
                    $query->where('users.name', 'like', "%{$keyword}%");
                })
                ->filterColumn('user_email', function ($query, $keyword) {
                    $query->where('users.email', 'like', "%{$keyword}%");
                })
                ->make(true);
        }

        try {
            // Fetch data for non-AJAX view rendering
            $nameNumerologies = DB::table('name_numerology')
                ->leftJoin('users', 'name_numerology.user_id', '=', 'users.id')
                ->leftJoin('numerology', 'name_numerology.numerology_type', '=', 'numerology.numerology_type') // Join to get expiry days
                ->select(
                    'name_numerology.first_name',
                    'name_numerology.last_name',
                    'name_numerology.dob',
                    'name_numerology.gender',
                    'users.name as user_name',
                    'users.email as user_email',
                    'name_numerology.created_at'
                )
                ->get();

            $nameNumerologyCount = $nameNumerologies->count();

            return view('Admin.numerology.list', [
                'nameNumerologies' => $nameNumerologies,
                'nameNumerologyCount' => $nameNumerologyCount
            ]);
        } catch (QueryException $e) {
            return response()->view('errors.general', [], 500);
        } catch (Exception $e) {
            return response()->view('errors.general', [], 500);
        }
    }




    //end

    // public function phoneNumerologyList(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $query = DB::table('phone_numerology')
    //             ->leftJoin('users', 'phone_numerology.user_id', '=', 'users.id')

    //             ->select(
    //                 'phone_numerology.phone_number',
    //                 'phone_numerology.dob',

    //                 'users.name as user_name',
    //                 'users.email as user_email',
    //                 'phone_numerology.id'
    //             )
    //             ->where('phone_numerology.numerology_type', 2);

    //         return FacadesDataTables::of($query)
    //             ->addIndexColumn() // Add index column for row numbers
    //             ->addColumn('action', function ($row) {
    //                 $encryptedId = Crypt::encrypt($row->id);
    //                 return '<a href="' . url('admin/phone-numerology/detail/' . $encryptedId) . '" class="btn btn-primary"> <i class="fa-solid fa-eye"></i></a>';
    //             })
    //             ->filterColumn('user_name', function ($query, $keyword) {
    //                 $query->where('users.name', 'like', "%{$keyword}%");
    //             })
    //             ->filterColumn('user_email', function ($query, $keyword) {
    //                 $query->where('users.email', 'like', "%{$keyword}%");
    //             })
    //             ->make(true);
    //     }

    //     try {
    //         // Fetch data for the view (not used in DataTables AJAX)
    //         $phoneNumerologies = DB::table('phone_numerology')
    //             ->leftJoin('users', 'phone_numerology.user_id', '=', 'users.id')

    //             ->select(
    //                 'phone_numerology.phone_number',
    //                 'phone_numerology.dob',

    //                 'users.name as user_name',
    //                 'users.email as user_email',
    //                 'phone_numerology.id'
    //             )
    //             ->where('phone_numerology.numerology_type', 2)
    //             ->get();

    //         $phoneNumerologyCount = $phoneNumerologies->count();
    //         return view('Admin.numerology.phone_numerology_list', [
    //             'phoneNumerologies' => $phoneNumerologies,
    //             'phoneNumerologyCount' => $phoneNumerologyCount
    //         ]);
    //     } catch (QueryException $e) {
    //         return response()->view('errors.general', [], 500);
    //     } catch (Exception $e) {
    //         return response()->view('errors.general', [], 500);
    //     }
    // }

    public function phoneNumerologyList(Request $request)
    {
        if ($request->ajax()) {
            $query = DB::table('phone_numerology')
                ->leftJoin('users', 'phone_numerology.user_id', '=', 'users.id')
                ->select(
                    'phone_numerology.phone_number',
                    'phone_numerology.dob',
                    'phone_numerology.first_name  as user_name',
                    'phone_numerology.email as user_email',
                    'phone_numerology.id'
                )
                ->where('phone_numerology.numerology_type', 2);

            return FacadesDataTables::of($query)
                ->addIndexColumn() // Add index column for row numbers
                ->addColumn('action', function ($row) {
                    $encryptedId = $row->id;
                    $actionButtons = '<a href="' . url('admin/phone-numerology/detail/' . $encryptedId) . '" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>';

                    // Construct the download file path
                    $fileName = "mobile_{$row->phone_number}_{$row->id}.pdf"; // Construct the file name

                    $filePath = 'MobileNumerology/' . $fileName; // Storage path (no 'public/' or 'storage/' prefix)

                    // Check if the file exists in storage
                    if (Storage::disk('uploads')->exists($filePath)) {
                        // Show download button if file exists
                        $downloadUrl = Storage::disk('uploads')->url($filePath); // Construct the download link
                        $actionButtons .= ' <a href="' . $downloadUrl . '" class="btn btn-success"><i class="fa-solid fa-download"></i></a>';
                    } else {
                        // Show the button with the download icon and success color (without "Expired" text)
                        $actionButtons .= '
                            <button class="btn btn-success expired-download-btn" data-id="' . $encryptedId . '">
                                <i class="fa-solid fa-download"></i>
                            </button>';
                    }

                    // Add delete button
                    $actionButtons .= ' <button class="btn btn-danger delete-btn" data-id="' . $encryptedId . '"><i class="fa-solid fa-trash"></i></button>';

                    return $actionButtons;
                })
                ->filterColumn('user_name', function ($query, $keyword) {
                    $query->where('users.name', 'like', "%{$keyword}%");
                })
                ->filterColumn('user_email', function ($query, $keyword) {
                    $query->where('users.email', 'like', "%{$keyword}%");
                })
                ->make(true);
        }

        try {
            // Fetch data for the view (not used in DataTables AJAX)
            $phoneNumerologies = DB::table('phone_numerology')
                ->leftJoin('users', 'phone_numerology.user_id', '=', 'users.id')
                ->select(
                    'phone_numerology.phone_number',
                    'phone_numerology.dob',
                    'phone_numerology.first_name  as user_name',
                    'phone_numerology.email as user_email',
                    'phone_numerology.id'
                )
                ->where('phone_numerology.numerology_type', 2)
                ->get();

            $phoneNumerologyCount = $phoneNumerologies->count();
            return view('Admin.numerology.phone_numerology_list', [
                'phoneNumerologies' => $phoneNumerologies,
                'phoneNumerologyCount' => $phoneNumerologyCount
            ]);
        } catch (QueryException $e) {
            return response()->view('errors.general', [], 500);
        } catch (Exception $e) {
            return response()->view('errors.general', [], 500);
        }
    }


    // advance 
    public function advanceNumerologyList(Request $request)
    {
        if ($request->ajax()) {
            $query = DB::table('phone_numerology')
                ->leftJoin('users', 'phone_numerology.user_id', '=', 'users.id')
                ->leftJoin('area_of_struggles', 'phone_numerology.area_of_concern', '=', 'area_of_struggles.id') // Join with area_of_struggles
                ->select(
                    'phone_numerology.phone_number',
                    'phone_numerology.dob',
                    'area_of_struggles.problem as area_of_concern', // Select the problem instead of area_of_concern ID
                    'phone_numerology.first_name  as user_name',
                    'phone_numerology.email as user_email',
                    'phone_numerology.id'
                )
                ->where('phone_numerology.numerology_type', 3);

            return FacadesDataTables::of($query)
                ->addIndexColumn() // Add index column for row numbers
                ->addColumn('action', function ($row) {
                    // $encryptedId = Crypt::encrypt($row->id);
                    $encryptedId = ($row->id);
                    $actionButtons = '<a href="' . url('admin/advance-numerology/detail/' . $encryptedId) . '" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>';

                    // Construct the download file path
                    $fileName = "advance_Mobile_{$row->phone_number}_{$row->id}.pdf";

                    $filePath = 'AdvanceNumerology/' . $fileName; // Storage path (no 'public/' or 'storage/' prefix)

                    // Check if the file exists in storage
                    if (Storage::disk('uploads')->exists($filePath)) {
                        // Show download button if file exists
                        $downloadUrl = Storage::disk('uploads')->url($filePath); // Construct the download link
                        $actionButtons .= ' <a href="' . $downloadUrl . '" class="btn btn-success"><i class="fa-solid fa-download"></i></a>';
                    } else {
                        $actionButtons .= '
                            <button class="btn btn-success expired-download-btn" data-id="' . $encryptedId . '">
                                <i class="fa-solid fa-download"></i>
                            </button>';
                    }

                    // Add delete button
                    $actionButtons .= ' <button class="btn btn-danger delete-btn" data-id="' . $encryptedId . '"><i class="fa-solid fa-trash"></i></button>';

                    return $actionButtons;
                })
                ->filterColumn('user_name', function ($query, $keyword) {
                    $query->where('users.name', 'like', "%{$keyword}%");
                })
                ->filterColumn('user_email', function ($query, $keyword) {
                    $query->where('users.email', 'like', "%{$keyword}%");
                })
                ->filterColumn('area_of_concern', function ($query, $keyword) {
                    $query->where('area_of_struggles.problem', 'like', "%{$keyword}%"); // Filter by the area_of_concern problem
                })
                ->make(true);
        }

        try {
            // Fetch data for the view (not used in DataTables AJAX)
            $phoneNumerologies = DB::table('phone_numerology')
                ->leftJoin('users', 'phone_numerology.user_id', '=', 'users.id')
                ->leftJoin('area_of_struggles', 'phone_numerology.area_of_concern', '=', 'area_of_struggles.id') // Join with area_of_struggles
                ->select(
                    'phone_numerology.phone_number',
                    'phone_numerology.dob',
                    'area_of_struggles.problem as area_of_concern', // Select the problem instead of area_of_concern ID
                    'phone_numerology.first_name  as user_name',
                    'phone_numerology.email as user_email',
                    'phone_numerology.id'
                )
                ->where('phone_numerology.numerology_type', 3)
                ->get();

            $phoneNumerologyCount = $phoneNumerologies->count();
            return view('Admin.numerology.advance_numerology_list', [
                'phoneNumerologies' => $phoneNumerologies,
                'phoneNumerologyCount' => $phoneNumerologyCount
            ]);
        } catch (QueryException $e) {
            return response()->view('errors.general', [], 500);
        } catch (Exception $e) {
            return response()->view('errors.general', [], 500);
        }
    }


    public function businessNumerologyList(Request $request)
    {
        if ($request->ajax()) {
            $query = DB::table('business_numerology')
                ->leftJoin('users', 'business_numerology.user_id', '=', 'users.id')
                ->select(
                    'business_numerology.first_name',
                    'business_numerology.last_name',
                    'business_numerology.dob',
                    'business_numerology.phone_number',
                    'business_numerology.type_of_business',
                    'business_numerology.first_name as user_name',
                    'business_numerology.email as user_email',
                    'business_numerology.id'
                );

            return FacadesDataTables::of($query)
                ->addIndexColumn() // Add index column for row numbers
                ->addColumn('action', function ($row) {
                    // $encryptedId = Crypt::encrypt($row->id);
                    $encryptedId = ($row->id);

                    // Initialize action buttons with the detail link
                    $actionButtons = '<a href="' . url('admin/bussiness-numerology/detail/' . $encryptedId) . '" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>';

                    // Construct the download file path
                    $fileName = "bussiness_{$row->phone_number}_{$row->id}.pdf";

                    $filePath = 'BussinessNumerology/' . $fileName; // Storage path (no 'public/' or 'storage/' prefix)

                    // Check if the file exists in storage
                    if (Storage::disk('uploads')->exists($filePath)) {
                        // Show download button if file exists
                        $downloadUrl = Storage::disk('uploads')->url($filePath); // Construct the download link
                        $actionButtons .= ' <a href="' . $downloadUrl . '" class="btn btn-success"><i class="fa-solid fa-download"></i></a>';
                    } else {
                        $actionButtons .= '
                            <button class="btn btn-success expired-download-btn" data-id="' . $encryptedId . '">
                                <i class="fa-solid fa-download"></i>
                            </button>';
                    }

                    // Add the delete button
                    $actionButtons .= ' <button class="btn btn-danger delete-btn" data-id="' . $encryptedId . '"><i class="fa-solid fa-trash"></i></button>';

                    return $actionButtons;
                })
                ->filterColumn('user_name', function ($query, $keyword) {
                    $query->where('users.name', 'like', "%{$keyword}%");
                })
                ->filterColumn('user_email', function ($query, $keyword) {
                    $query->where('users.email', 'like', "%{$keyword}%");
                })
                ->make(true);
        }

        try {
            // Fetch data for the view (not used in DataTables AJAX)
            $bussinessNumerologyList =  DB::table('business_numerology')
                ->leftJoin('users', 'business_numerology.user_id', '=', 'users.id')
                ->select(
                    'business_numerology.first_name',
                    'business_numerology.last_name',
                    'business_numerology.dob',
                    'business_numerology.phone_number',
                    'business_numerology.type_of_business',
                    'business_numerology.first_name as user_name',
                    'business_numerology.email as user_email',
                    'business_numerology.id'
                )
                ->get();

            $bussinessNumerologyCount = $bussinessNumerologyList->count();
            return view('Admin.numerology.bussiness_numerology_list', [
                'nameNumerologies' => $bussinessNumerologyList,
                'nameNumerologyCount' => $bussinessNumerologyCount
            ]);
        } catch (QueryException $e) {
            return response()->view('errors.general', [], 500);
        } catch (Exception $e) {
            return response()->view('errors.general', [], 500);
        }
    }

    public function nameNumerologyDetail($encryptedId)
    {
        // Decrypt the ID
        // $id = Crypt::decryptString($encryptedId);
        $id = $encryptedId;


        // Fetch the name numerology record with user details using a left join
        $details = NameNumerology::leftJoin('users', 'name_numerology.user_id', '=', 'users.id')
            ->where('name_numerology.id', $id)
            ->select(
                'name_numerology.*',
                'users.name as user_name',
                'users.email as user_email'
            )
            ->first();

        // Handle case where no record is found
        if (!$details) {
            abort(404, 'Name numerology detail not found.');
        }

        return view('Admin.numerology.name_numerology_detail', ['details' => $details]);
    }

    public function phoneNumerologyDetail($id)
    {
        // Decrypt the ID
        // $decryptedId = Crypt::decrypt($id);
        $decryptedId = $id;

        // Fetch phone numerology details with user and area of concern information using left joins
        $phoneNumerologyDetail = PhoneNumerology::leftJoin('users', 'phone_numerology.user_id', '=', 'users.id')
            ->leftJoin('area_of_struggles', 'phone_numerology.area_of_concern', '=', 'area_of_struggles.id') // Join with area_of_struggles
            ->where('phone_numerology.id', $decryptedId)
            ->select(
                'phone_numerology.*',
                'users.name as user_name',
                'users.email as user_email',
            )
            ->first();

        // Check if the record exists
        if (!$phoneNumerologyDetail) {
            return response()->view('errors.404', [], 404);
        }

        // Return the view with the data
        return view('Admin.numerology.phone_numerology_detail', ['phoneNumerologyDetail' => $phoneNumerologyDetail]);
    }


    public function advanceNumerologyDetail($id)
    {
        // Decrypt the ID
        // $decryptedId = Crypt::decrypt($id);
        $decryptedId = $id;
        // Fetch phone numerology details with user and area of concern information using left joins
        $phoneNumerologyDetail = PhoneNumerology::leftJoin('users', 'phone_numerology.user_id', '=', 'users.id')
            ->leftJoin('area_of_struggles', 'phone_numerology.area_of_concern', '=', 'area_of_struggles.id') // Join with area_of_struggles
            ->where('phone_numerology.id', $decryptedId)
            ->select(
                'phone_numerology.*',
                'users.name as user_name',
                'users.email as user_email',
                'area_of_struggles.problem as area_of_concern' // Select the problem instead of area_of_concern ID
            )
            ->first();

        // Check if the record exists
        if (!$phoneNumerologyDetail) {
            return response()->view('errors.404', [], 404);
        }

        // Return the view with the data
        return view('Admin.numerology.advance_numerology_detail', ['phoneNumerologyDetail' => $phoneNumerologyDetail]);
    }


    public function busssinessNumerologyDetail($id)
    {
        try {
            // Decrypt the ID
            // $decryptedId = Crypt::decrypt($id);
            $decryptedId = $id;

            // Fetch Business Numerology details and join with Users table
            $numerologyDetail = DB::table('business_numerology')
                ->leftJoin('users', 'business_numerology.user_id', '=', 'users.id')
                ->select(
                    'business_numerology.*',
                    'users.name as user_name',
                    'users.email as user_email'
                )
                ->where('business_numerology.id', $decryptedId)
                ->first();

            if (!$numerologyDetail) {
                return view('Admin.numerology.bussiness_numerology_detail', [
                    'error' => 'Business Numerology record not found.'
                ]);
            }

            // Return the view with the data
            return view('Admin.numerology.bussiness_numerology_detail', [
                'numerologyDetail' => $numerologyDetail
            ]);
        } catch (\Exception $e) {
            return view('Admin.numerology.phone_numerology_detail', [
                'error' => 'Invalid ID or decryption error.'
            ]);
        }
    }

    public function destroyName(Request $request, $encryptedId)
    {
        // Decrypt the ID if needed
        // $id = Crypt::decryptString($encryptedId);
        $id = $encryptedId;

        try {
            // Find and delete the record
            $record = NameNumerology::findOrFail($id);
            $record->delete();

            // Check if the request is AJAX
            if ($request->ajax()) {
                return response()->json(['success'  => 'Name Numerology record deleted successfully!']);
            }

            return redirect()->back()->with('success', 'Name Numerology record deleted successfully!');
        } catch (ModelNotFoundException $e) {
            if ($request->ajax()) {
                return response()->json(['success'  => 'Name Numerology record not found.'], 404);
            }
            return redirect()->back()->with('error', 'Name Numerology record not found.');
        } catch (QueryException $e) {
            if ($request->ajax()) {
                return response()->json(['success' => 'Error deleting Name Numerology record: ' . $e->getMessage()], 500);
            }
            return redirect()->back()->with('error', 'Error deleting Name Numerology record: ' . $e->getMessage());
        }
    }


    public function destroyPhone(Request $request, $encryptedId)
    {
        // $id = Crypt::decryptString($encryptedId);
        $id = $encryptedId;
        // dd($id);
        try {
            // Find and delete the record
            $record = PhoneNumerology::findOrFail($id);
            $record->delete();

            // Check if the request is AJAX
            if ($request->ajax()) {
                return response()->json(['success' => 'Phone Numerology record deleted successfully!']);
            }

            return redirect()->back()->with('success', 'Phone Numerology record deleted successfully!');
        } catch (ModelNotFoundException $e) {
            if ($request->ajax()) {
                return response()->json(['error' => 'Phone Numerology record not found.'], 404);
            }
            return redirect()->back()->with('error', 'Phone Numerology record not found.');
        } catch (QueryException $e) {
            if ($request->ajax()) {
                return response()->json(['error' => 'Error deleting Phone Numerology record: ' . $e->getMessage()], 500);
            }
            return redirect()->back()->with('error', 'Error deleting Phone Numerology record: ' . $e->getMessage());
        }
    }

    public function destroyBusiness(Request $request, $encryptedId)
    {
        // Decrypt the ID if needed
        // $id = Crypt::decryptString($encryptedId);
        $id = $encryptedId;

        try {
            // Find and delete the record
            $record = BusinessNumerology::findOrFail($id);
            $record->delete();

            // Check if the request is AJAX
            if ($request->ajax()) {
                return response()->json(['success' => 'Business Numerology record deleted successfully!']);
            }

            return redirect()->back()->with('success', 'Business Numerology record deleted successfully!');
        } catch (ModelNotFoundException $e) {
            if ($request->ajax()) {
                return response()->json(['error' => 'Business Numerology record not found.'], 404);
            }
            return redirect()->back()->with('error', 'Business Numerology record not found.');
        } catch (QueryException $e) {
            if ($request->ajax()) {
                return response()->json(['error' => 'Error deleting Business Numerology record: ' . $e->getMessage()], 500);
            }
            return redirect()->back()->with('error', 'Error deleting Business Numerology record: ' . $e->getMessage());
        }
    }


    public function destroyAdvance(Request $request, $encryptedId)
    {
        // Decrypt the ID if needed
        // $id = Crypt::decryptString($encryptedId);
        $id = $encryptedId;

        try {
            // Find and delete the record
            $record = PhoneNumerology::findOrFail($id);
            $record->delete();

            // Check if the request is AJAX
            if ($request->ajax()) {
                return response()->json(['success' => 'Advance Numerology record deleted successfully!']);
            }

            return redirect()->back()->with('success', 'Advance Numerology record deleted successfully!');
        } catch (ModelNotFoundException $e) {
            if ($request->ajax()) {
                return response()->json(['success'  => 'Advance Numerology record not found.'], 404);
            }
            return redirect()->back()->with('error', 'Advance Numerology record not found.');
        } catch (QueryException $e) {
            if ($request->ajax()) {
                return response()->json(['success'  => 'Error deleting Advance Numerology record: ' . $e->getMessage()], 500);
            }
            return redirect()->back()->with('error', 'Error deleting Advance Numerology record: ' . $e->getMessage());
        }
    }

    
}
