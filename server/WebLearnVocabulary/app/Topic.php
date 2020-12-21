<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vocabulary;

class Topic extends Model
{
     public function getVocabulary(){
            return $this->hasMany('App\Vocabulary','topic_id','id');
        }
}