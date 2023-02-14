<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $users=User::with('role')->get();
        return view('admin.users',['users'=>$users]);
    }
    public function comments(){
        $allComments=Comment::all();
        return view('admin.comments',['comments'=>$allComments]);
    }
}
