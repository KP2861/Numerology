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
                    'name_numerology.id' // Keep this for the action column
                );
    
            return FacadesDataTables::of($query)
                ->addIndexColumn() // Add index column for row numbers
                ->addColumn('action', function ($row) {
                    $encryptedId = Crypt::encryptString($row->id);
                    return '<a href="'. url('admin/name-numerology/detail/' . $encryptedId) .'" class="btn btn-primary">View More</a>';
                })
                ->filterColumn('user_name', function($query, $keyword) {
                    $query->where('users.name', 'like', "%{$keyword}%");
                })
                ->filterColumn('user_email', function($query, $keyword) {
                    $query->where('users.email', 'like', "%{$keyword}%");
                })
                ->make(true);
        }
    
        try {
            // Fetch data for the view (not used in DataTables AJAX)
            $nameNumerologies = DB::table('name_numerology')
                ->leftJoin('users', 'name_numerology.user_id', '=', 'users.id')
                ->select(
                    'name_numerology.first_name',
                    'name_numerology.last_name',
                    'name_numerology.dob',
                    'name_numerology.gender',
                    'users.name as user_name',
                    'users.email as user_email'
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
    
    public function phoneNumerologyList(Request $request)
    {
        if ($request->ajax()) {
            $query = DB::table('phone_numerology')
                ->leftJoin('users', 'phone_numerology.user_id', '=', 'users.id')
                ->select(
                    'phone_numerology.phone_number',
                    'phone_numerology.dob',
                    'phone_numerology.area_of_concern',
                    'users.name as user_name',
                    'users.email as user_email',
                    'phone_numerology.id'
                );
    
            return FacadesDataTables::of($query)
                ->addIndexColumn() // Add index column for row numbers
                ->addColumn('action', function ($row) {
                    $encryptedId = Crypt::encrypt($row->id);
                    return '<a href="'. url('admin/phone-numerology/detail/' . $encryptedId) .'" class="btn btn-primary">View More</a>';
                })
                ->filterColumn('user_name', function($query, $keyword) {
                    $query->where('users.name', 'like', "%{$keyword}%");
                })
                ->filterColumn('user_email', function($query, $keyword) {
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
                    'phone_numerology.area_of_concern',
                    'users.name as user_name',
                    'users.email as user_email',
                    'phone_numerology.id'
                )
                ->get();
            
            $phoneNumerologyCount = $phoneNumerologies->count();
            return view('Admin.numerology.phone_numerology_list', [
                'nameNumerologies' => $phoneNumerologies,
                'nameNumerologyCount' => $phoneNumerologyCount
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
                    'users.name as user_name',
                    'users.email as user_email',
                    'business_numerology.id'
                );
    
            return FacadesDataTables::of($query)
                ->addIndexColumn() // Add index column for row numbers
                ->addColumn('action', function ($row) {
                    $encryptedId = Crypt::encrypt($row->id);
                    return '<a href="'. url('admin/phone-numerology/detail/' . $encryptedId) .'" class="btn btn-primary">View More</a>';
                })
                ->filterColumn('user_name', function($query, $keyword) {
                    $query->where('users.name', 'like', "%{$keyword}%");
                })
                ->filterColumn('user_email', function($query, $keyword) {
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
                'users.name as user_name',
                'users.email as user_email',
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
 
    // bussiness numerology list
    // public function businessNumerologyList()
    // {
    //     try {
    //         // Fetch business numerologies with user details
    //         $businessNumerologies = DB::table('business_numerology')
    //             ->leftJoin('users', 'business_numerology.user_id', '=', 'users.id')
    //             ->select(
    //                 'business_numerology.id', // Select the id for encryption
    //                 'business_numerology.first_name',
    //                 'business_numerology.last_name',
    //                 'business_numerology.dob',
    //                 'business_numerology.phone_number',
    //                 'business_numerology.type_of_business',
    //                 'users.name as user_name',
    //                 'users.email as user_email'
    //             )
    //             ->get();

    //         return view('Admin.numerology.bussiness_numerology_list', compact('businessNumerologies'));
    //     } catch (QueryException $e) {
    //         Log::error('Database query error in businessNumerologyList: ' . $e->getMessage());

    //         return response()->view('errors.general', ['error' => 'A database error occurred.'], 500);
    //     } catch (Exception $e) {
    //         Log::error('General error in businessNumerologyList: ' . $e->getMessage());

    //         return response()->view('errors.general', ['error' => 'An unexpected error occurred.'], 500);
    //     }
    // }
    //end

    public function nameNumerologyDetail($encryptedId)
    {
        // Decrypt the ID
        $id = Crypt::decryptString($encryptedId);

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
        $decryptedId = Crypt::decrypt($id);

        // Fetch phone numerology details with user information using a left join
        $phoneNumerologyDetail = PhoneNumerology::select('phone_numerology.*', 'users.name', 'users.email')
            ->leftJoin('users', 'phone_numerology.user_id', '=', 'users.id')
            ->where('phone_numerology.id', $decryptedId)
            ->first();

        // Check if the record exists
        if (!$phoneNumerologyDetail) {
            return response()->view('errors.404', [], 404);
        }

        // Return the view with the data
        return view('Admin.numerology.phone_numerology_detail', ['phoneNumerologyDetail' => $phoneNumerologyDetail]);
    }

    public function busssinessNumerologyDetail($id)
    {
        try {
            // Decrypt the ID
            $decryptedId = Crypt::decrypt($id);

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
}
