<?php

namespace App\Http\Controllers\Moderator;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index()
    {
        $allComments=Comment::all();
        return view('moderator.comment.index',['comments'=>$allComments]);
    }
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('moderator.comments.index');
    }
}
