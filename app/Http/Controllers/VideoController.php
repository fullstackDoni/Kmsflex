<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Genre;
use App\Models\Role;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    public function videoByCategory(Category $category){
        return view('video.index',['videos'=>$category->videos,'genres' => Genre::all(),'categories' => Category::all()]);
    }
    public function videoByGenre(Genre $genre){
        return view('video.index',['videos'=>$genre->videos,'genres' => Genre::all(),'categories' => Category::all()]);
    }

    public function index()
    {
        $allCategory = Category::all();
        $allGenre = Genre::all();
        $allVideo = Video::all();
        return view('video.index', ['categories' => $allCategory, 'genres' => $allGenre, 'videos' => $allVideo]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show(Video $video)
    {
        return view('video.show', ['videos' => $video]);
    }

    public function edit(Video $video)
    {

    }

    public function update(Request $request, Video $video)
    {
    }

    public function destroy(Video $video)
    {
        $this->authorize('delete', $video);
        $video->delete();
        return redirect()->route('video.index');
    }
}
