<?php

namespace App\Http\Controllers\Moderator;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryiesController extends Controller
{
    public function index(Request $request){
        $allCategories = Category::all();
        return view('moderator.category.index',['categories'=>$allCategories]);
    }
    public function create()
    {
        return view('moderator.category.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'cname'=>'required|max:255',
        ]);
        Category::create($validated);
        return redirect()->route('moderator.categories.index');
    }
}
