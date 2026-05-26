<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest('id')->paginate(5);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $createSlug = Str::slug($request->category_name);

        Category::create([
            'category_name' => $request->category_name,
            'slug' => $createSlug,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('message', 'Category Created Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $createSlug = Str::slug($request->category_name);

        $category->update([
            'category_name' => $request->category_name,
            'slug' => $createSlug,
            'description' => $request->description
        ]);

        return redirect()->back()->with('message', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete($category);

        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }
}
