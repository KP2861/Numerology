<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

class NumerologyAdminController extends Controller
{
    public function index(Request $request)
    {
        try {
            // Fetch all numerologies with user counts and created_at timestamps
            $numerologies = DB::table('numerology')
                ->leftJoin('users', 'numerology.user_id', '=', 'users.id')
                ->select(
                    'numerology.name',
                    'numerology.created_at',
                    DB::raw('GROUP_CONCAT(users.name SEPARATOR ", ") as user_names'),
                    DB::raw('COUNT(users.id) as user_count')
                )
                ->groupBy('numerology.name', 'numerology.created_at')
                ->get();

            return view('Admin.numerology.list', compact('numerologies'));

        } catch (Exception $e) {
            // Log the exception details for debugging
            Log::error('Error fetching numerologies: ' . $e->getMessage());

            // Optionally, you can redirect to an error page or show a friendly message
            return redirect()->route('error.page')->with('error', 'An error occurred while fetching the numerologies.');
        }
    }
}
