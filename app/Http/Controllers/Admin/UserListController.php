<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Exception;

class UserListController extends Controller
{
    public function index(Request $request)
    {
        try {
            // Fetch users without numerology data
            $users = User::select('id', 'name', 'email', 'created_at')
                ->paginate(10);

            // Transform the data to format the created_at field
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
