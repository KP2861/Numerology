<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ArticlesCategory;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use Exception;
use Illuminate\Support\Facades\Log;
use App\Models\Article;
use Yajra\DataTables\DataTables;


class ArticleCategoryController extends Controller
{
    public function create()
    {
        try {
            return view('Admin.article-category.create');
        } catch (Exception $e) {
            return redirect()->route('admin.articles.category.list')->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
            ]);

            ArticlesCategory::create([
                'name' => $request->input('name'),
            ]);

            return redirect()->route('admin.articles.category.list')->with('success', 'Category added successfully.');
        } catch (ValidationException $e) {
            return redirect()->route('admin.articles.category.create')
                ->withErrors($e->errors())
                ->withInput();
        } catch (Exception $e) {
            return redirect()->route('admin.articles.category.list')->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                return $this->getCategoryData();
            }
            return view('Admin.article-category.articles-category');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while loading the categories list.');
        }
    }

    // Fetch and format data for DataTables
    public function getCategoryData()
    {
        try {
            Log::info('Fetching category data');
            $query = ArticlesCategory::select('id', 'name');

            $data = DataTables::of($query)
                ->addIndexColumn()
                ->addColumn('actions', function ($row) {
                    $editButton = '<a href="' . route('admin.articles.category.edit', $row->id) . '" class="btn btn-warning btn-sm" title="Edit"><i class="fas fa-edit"></i></a>';
                    $deleteButton = '<button type="button" class="btn btn-danger btn-sm" title="Delete" data-toggle="modal" data-target="#confirmDeleteModal" data-id="' . $row->id . '" data-name="' . htmlspecialchars($row->name, ENT_QUOTES, 'UTF-8') . '"><i class="fas fa-trash"></i></button>';
                    return $editButton . ' ' . $deleteButton;
                })
                ->rawColumns(['actions'])
                ->make(true);

            Log::info('Category data fetched successfully', ['data' => $data]);
            return $data;
        } catch (\Exception $e) {
            Log::error('Error fetching category data', ['error' => $e->getMessage()]);
            return response()->json(['error' => 'An error occurred while fetching category data.'], 500);
        }
    }


    public function edit($id)
    {
        try {
            $category = ArticlesCategory::findOrFail($id);
            return view('Admin.article-category.edit', compact('category'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.articles.category.list')->with('error', 'Category not found.');
        } catch (Exception $e) {
            return redirect()->route('admin.articles.category.list')->with('error', 'An error occurred while preparing the edit view.');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
            ]);

            $category = ArticlesCategory::findOrFail($id);
            $category->update([
                'name' => $request->input('name'),
            ]);

            return redirect()->route('admin.articles.category.list')->with('success', 'Category updated successfully.');
        } catch (ValidationException $e) {
            return redirect()->route('admin.articles.category.edit', $id)
                ->withErrors($e->errors())
                ->withInput();
        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.articles.category.list')->with('error', 'Category not found.');
        } catch (Exception $e) {
            return redirect()->route('admin.articles.category.list')->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $category = ArticlesCategory::findOrFail($id);
            $category->delete();

            return redirect()->back()->with('success', 'Category deleted successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->back()->with('error', 'Category not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while deleting the category.');
        }
    }
}
