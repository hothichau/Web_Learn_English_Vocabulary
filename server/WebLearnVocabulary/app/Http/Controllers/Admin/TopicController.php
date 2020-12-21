<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Topic;

class TopicController extends Controller
{
    function index(){
        $topics = Topic::all();
    	return view('admin.topics.index',['topics' => $topics]);
    }
    function destroyTopic($id){
        Topic::find($id)->delete();
        return redirect('/admin/topics');
    }
    function editTopic($id) {
        $topics = Topic::find($id);
        return view('admin.topics.edit',['topics' => $topics]);
    }
    function updateTopic($id,Request $request){
        $title = $request->input('title');
        $image = $request->file("image")->store("public");

        $topic = Topic::find($id);
        $topic->title = $title;
        $topic->image = $image;
        $topic->save();

        return redirect('/admin/topics');
    }
    function createTopic(){
        return view('admin.topics.create');
    }
    function storeTopic(Request $request){
        $title = $request->input('title');
        $image = $request->file("image")->store("public");

        $topic = new Topic;
        $topic->title = $title;
        $topic->image = $image;
        $topic->save();

        return redirect('/admin/topics');
    }
}
