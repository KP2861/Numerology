<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Exception;

class UserListController extends Controller
{
    public function index(Request $request)
    {
        try {
            // Fetch users with concatenated numerology names and paginate
            $users = DB::table('users')
                ->leftJoin('numerology', 'users.id', '=', 'numerology.user_id')
                ->select(
                    'users.id',
                    'users.name',
                    'users.email',
                    'users.created_at',
                    DB::raw('GROUP_CONCAT(numerology.name SEPARATOR ", ") as numerology_names')
                )
                ->groupBy('users.id', 'users.name', 'users.email', 'users.created_at')
                ->paginate(10) 
                ->onEachSide(1); 

            // Transform collection to format created_at as a Carbon instance
            $users->getCollection()->transform(function ($user) {
                $user->created_at = Carbon::parse($user->created_at);
                return $user;
            });

            return view('Admin.users.list', compact('users'));

        } catch (Exception $e) {
            Log::error('Error fetching user list: ' . $e->getMessage());

            return redirect()->route('error.page')->with('error', 'An error occurred while fetching the user list.');
        }
    }
}
