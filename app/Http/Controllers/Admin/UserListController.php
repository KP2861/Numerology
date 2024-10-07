<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Exception;
use Illuminate\Support\Facades\Log;

class UserListController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->getUserData();
        }

        // Render the main view
        return view('Admin.users.list');
    }

    private function getUserData()
    {
        // Query to fetch users with role_id 2
        $query = User::select('id', 'name', 'email', 'created_at')->where('role', 2);

        return DataTables::of($query)
            ->addIndexColumn()
            ->editColumn('created_at', function ($user) {
                return $user->created_at->format('d/m/Y');
            })
            ->make(true);
    }

    public function destroy($id)
    {
        try {
            // Find the user by ID
            $user = User::findOrFail($id);
            // Delete the user
            $user->delete();
            // Return a success response
            return response()->json(['success' => 'User deleted successfully']);
        } catch (Exception $e) {
            Log::error('Error deleting user: ' . $e->getMessage());
            return response()->json(['error' => 'Error deleting user: ' . $e->getMessage()], 500);
        }
    }
}
