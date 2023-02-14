<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function index(Request $request){
        $allGenres = Genre::all();
        return view('admin.genre.index',['genre'=>$allGenres]);
    }
    public function edit(Genre $genre)
    {
        return view('admin.genre.edit',['genre'=>Genre::all()]);
    }

    public function update(Request $request, Genre $genre)
    {
        $genre->update([
            'gname'=>$request->input('gname'),
        ]);
        return redirect()->route('admin.genres.index');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'gname'=>'required|max:255',
        ]);
        Genre::create($validated);
        return redirect()->route('admin.genres.index');
    }
    public function create()
    {
        return view('admin.genres.create');
    }
    public function destroy(Genre $genre)
    {
        $genre->delete();
        return redirect()->route('admin.genres.index');
    }
}
