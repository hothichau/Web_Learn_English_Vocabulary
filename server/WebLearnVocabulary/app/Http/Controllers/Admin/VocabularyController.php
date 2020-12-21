<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vocabulary;
use App\Topic;

class VocabularyController extends Controller
{

    function index(){
       $vocabularies = Vocabulary::all();
       foreach($vocabularies as $vocabulary){
        $vocabulary->getTopic->title;
    }
    	return view('admin.vocabularies.index',['vocabularies' =>$vocabularies]);
    }
    function destroyVocabulary($id){
        Vocabulary::find($id)->delete();
        return redirect('/admin/vocabularies');
    }
    function editVocabulary($id) {
       $vocabulary = Vocabulary::find($id);
       $topics = Topic::all();
       return view('admin.vocabularies.edit',['vocabularies' =>$vocabulary], ['topics'=>$topics]);
    }
    function updateVocabulary($id,Request $request){
        $word = $request->input('word');
        $pronunciation = $request->input('pronunciation');
        $verb_form = $request->input('verb_form');
        $meaning = $request->input('meaning');
        $image = $request->file("image")->store("public");
        $sound = $request->file("sound")->store("public");

       $vocabulary = Vocabulary::find($id);
       $vocabulary->word = $word;
       $vocabulary->image = $image;
       $vocabulary->pronunciation = $pronunciation;
       $vocabulary->verb_form = $verb_form;
       $vocabulary->meaning = $meaning;
       $vocabulary->sound = $sound;
       $vocabulary->save();

        return redirect('/admin/vocabularies');
    }
    function createVocabulary(){
        $topics = Topic::all();
        return view('admin.vocabularies.create',['topics'=>$topics]);
    }
    function storeVocabulary(Request $request){
        $word = $request->input('word');
        $topic_id = $request->input('topic_id');
        $pronunciation = $request->input('pronunciation');
        $verb_form = $request->input('verb_form');
        $meaning = $request->input('meaning');
        $image = $request->file("image")->store("public");
        $sound = $request->file("sound")->store("public");

       $vocabulary = new Vocabulary;
       $vocabulary->word = $word;
       $vocabulary->topic_id = $topic_id;
       $vocabulary->image = $image;
       $vocabulary->pronunciation = $pronunciation;
       $vocabulary->verb_form = $verb_form;
       $vocabulary->meaning = $meaning;
       $vocabulary->sound = $sound;
       $vocabulary->save();

        return redirect('/admin/vocabularies');
    }
}
