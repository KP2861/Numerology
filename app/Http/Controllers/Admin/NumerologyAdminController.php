<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Numerology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class NumerologyAdminController extends Controller
{
    public function index(Request $request)
    {
        try {
            $numerologies = Numerology::with('user')
                ->get()
                ->groupBy('name')
                ->map(function ($group) {
                    $first = $group->first();

                    // Ensure correct data types
                    $user_names = $group->pluck('user.name')->filter()->implode(', '); // Ensure user_names is a string
                    $user_count = $group->count(); // Ensure user_count is an integer

                    return [
                        'name' => $first->name,
                        'created_at' => $first->created_at->format('Y-m-d H:i:s'), // Format date to string
                        'user_names' => $user_names,
                        'user_count' => $user_count,
                    ];
                });

            // Convert the collection to a paginator
            $perPage = 10; // Number of items per page
            $page = $request->input('page', 1);
            $numerologiesPaginated = collect($numerologies)->forPage($page, $perPage);

            // Create a LengthAwarePaginator instance
            $numerologiesPaginator = new \Illuminate\Pagination\LengthAwarePaginator(
                $numerologiesPaginated,
                $numerologies->count(),
                $perPage,
                $page,
                ['path' => $request->url(), 'query' => $request->query()]
            );

            return view('Admin.numerology.list', ['numerologies' => $numerologiesPaginator]);

        } catch (Exception $e) {
            Log::error('Error fetching numerologies: ' . $e->getMessage());
            return redirect()->route('error.page')->with('error', 'An error occurred while fetching the numerologies.');
        }
    }
}
