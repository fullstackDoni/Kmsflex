<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(Request $request){
        $allCategories = Category::all();
        return view('admin.category.index',['categories'=>$allCategories]);
    }
    public function edit(Category $category)
    {
        return view('admin.category.edit',['categories'=>Category::all()]);
    }

    public function update(Request $request, Category $category)
    {
        $category->update([
            'cname'=>$request->input('cname'),
        ]);
        return redirect()->route('admin.category');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'cname'=>'required|max:255',
        ]);
        Category::create($validated);
        return redirect()->route('admin.categories.index');
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index');
    }
}
