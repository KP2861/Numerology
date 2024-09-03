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
        // Assuming a User model and potentially related numerology names
        $query = User::select('id', 'name', 'email', 'created_at');

        // Modify this if you need to fetch related numerology names
        // For example: $query->with('numerologyNames');

        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('numerology_names', function ($user) {
                return 'Example Numerology';
            })
            ->make(true);
    }
}
