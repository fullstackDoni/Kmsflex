<?php

namespace App\Http\Controllers\Moderator;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Video;
use Illuminate\Http\Request;

class VideolarController extends Controller
{
    public function index(Request $request){
        $allvideo = Video::all();
        return view('moderator.videos.index',['video'=>$allvideo]);
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
        return redirect()->route('moderator.videos.index');
    }
    public function create()
    {
        return view('moderator.videos.create',['categories'=>Category::all(),'genres'=>Genre::all()]);
    }
}
