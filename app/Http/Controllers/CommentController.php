<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        Comment::create([
            'text'=>$request->text,
            'video_id'=>$request->video_id,
            'user_id'=>Auth::id(),
        ]);
        return back();
    }

    public function show(Comment $commment)
    {

    }

    public function edit(Comment $commment)
    {
        //
    }

    public function update(Request $request, Comment $commment)
    {

    }

    public function destroy(Comment $commment)
    {

    }
}
