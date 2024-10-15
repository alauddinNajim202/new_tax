<?php

namespace App\Http\Controllers\Web\backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::all();
            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    $editBtn = '<button class="btn btn-primary btn-sm editCategory" data-id="'.$row->id.'">Edit</button>';
                    return $editBtn;
                })
                ->editColumn('status', function ($row) {
                    return $row->status ? 'Active' : 'Inactive';
                })
                ->make(true);
        }

        return view('backend.layouts.categories.index');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        try {
            Category::create([
                'name' => $request->name,
                'status' => 1, // default status is active
            ]);

            return response()->json(['success' => 'Category added successfully!']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong!'], 500);
        }
    }

    public function edit($id)
    {
        $category = Category::find($id);

        if ($category) {
            return response()->json($category);
        } else {
            return response()->json(['error' => 'Category not found!'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        try {
            $category = Category::find($id);
            if ($category) {
                $category->update([
                    'name' => $request->name,
                ]);

                return response()->json(['success' => 'Category updated successfully!']);
            } else {
                return response()->json(['error' => 'Category not found!'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong!'], 500);
        }
    }
}

