<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Comment;

class UserController extends Controller
{
    function index(){
        $users = User::all();
    	return view('admin.users.index',['users' => $users]);
    }
    
    function destroyUser($id){
        User::find($id)->delete();
        return redirect('/admin/users');
    }

    function showComments(){
        $comments = Comment::all();
        return view('admin.comments.index',['comments' => $comments]);
    }
    function destroyComment($id){
        Comment::find($id)->delete();
        return redirect('/admin/comments');
    }

}
