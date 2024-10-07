<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Numerology;
use App\Models\Product; // Ensure to import your Product model
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables; // Ensure you have Yajra DataTables package installed

class ProductController extends Controller
{
    // Display a listing of the products
    public function index()
    {
        return view('Admin.products.index');
    }

    // Fetch product data for DataTables
    public function list()
    {
        $products = Numerology::all();
        return DataTables::of($products)
            ->addIndexColumn()
            ->addColumn('actions', function ($row) {
                return '
                    <a href="' . route('admin.products.edit', $row->id) . '" class="btn btn-warning" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>
                    <button type="button" class="btn btn-danger" title="Delete" data-toggle="modal" data-target="#confirmDeleteModal" data-id="' . $row->id . '" data-name="' . $row->name . '">
                        <i class="fas fa-trash"></i>
                    </button>
                ';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    // // Show the form for creating a new product
    // public function create()
    // {
    //     return view('Admin.products.create'); // Adjust the view path as needed
    // }

    // // Store a newly created product in storage
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'price' => 'required|numeric',
    //         // Add more validation rules as needed
    //     ]);

    //     Numerology::create($request->all());

    //     return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    // }

    // Show the form for editing the specified product
    public function edit($id)
    {
        $product = Numerology::findOrFail($id);
        return view('Admin.products.edit', compact('product'));
    }

    // Update the specified product in storage
    public function update(Request $request, $id)
    {
        try {
            // Validate the request
            $request->validate([
                'packages_amount' => 'required|numeric|min:0',
                'expiry_day' => 'required|numeric|min:0',
            ]);

            // Find the product
            $product = Numerology::findOrFail($id);

            $product->update($request->all());


            return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Handle validation exceptions
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Handle model not found exception
            return redirect()->route('admin.products.index')->with('error', 'Product not found.');
        } catch (\Exception $e) {
            // Handle any other exceptions
            return redirect()->route('admin.products.index')->with('error', 'An error occurred while updating the product: ' . $e->getMessage());
        }
    }

    // Remove the specified product from storage
    // public function destroy($id)
    // {
    //     $product = Numerology::findOrFail($id);
    //     $product->delete();

    //     return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    // }
}
