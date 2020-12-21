<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vocabulary;
class VocabularyController extends Controller
{
    function getVocabulary(){
        $vocabularies = Vocabulary::all();
        return $vocabularies;
    }

    function getVocabularyByTopicID($id){
        $vocabularies = Vocabulary::where('topic_id',$id)->get();
        return $vocabularies;
    }

}
