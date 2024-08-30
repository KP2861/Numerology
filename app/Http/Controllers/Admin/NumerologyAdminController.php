<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NumerologyAdminController extends Controller
{
    public function index(Request $request)
    {
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
    }
}
