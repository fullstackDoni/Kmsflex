<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function index(Request $request){
        $allvideo = Video::all();
        return view('admin.videos.index',['video'=>$allvideo]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|max:255',
            'description'=>'required|max:255',
            'image'=>'required',
            'directors'=>'required|max:255',
            'actors'=>'required|max:255',
            'year'=>'required|max:4',
            'country'=>'required|max:255',
            'video'=>'required|max:255',
            'category_id'=>'required|max:255',
            'genres_id'=>'required|max:255',
        ]);
        Video::create($validated);
        return redirect()->route('admin.videos.index');
    }
    public function create()
    {
        return view('admin.videos.create',['categories'=>Category::all(),'genres'=>Genre::all()]);
    }
    public function destroy(Video $video){
        $video->delete();
        return redirect()->route('admin.videos.index');
    }
}
