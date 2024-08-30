<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserListController extends Controller
{
    public function index(Request $request)
    {
        // Fetch users with concatenated numerology names
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
            ->get()
            ->map(function ($user) {
                $user->created_at = Carbon::parse($user->created_at);
                return $user;
            });

        return view('Admin.users.list', compact('users'));
    }
}
