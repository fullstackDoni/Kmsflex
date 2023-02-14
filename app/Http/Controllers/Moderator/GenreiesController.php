<?php

namespace App\Http\Controllers\Moderator;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreiesController extends Controller
{
    public function index(Request $request){
        $allGenres = Genre::all();
        return view('moderator.genre.index',['genre'=>$allGenres]);
    }
    public function store(Request $request)
{
    $validated = $request->validate([
        'gname'=>'required|max:255',
    ]);
    Genre::create($validated);
    return redirect()->route('moderator.genres.index');
}
    public function create()
    {
        return view('moderator.genre.create');
    }
}
