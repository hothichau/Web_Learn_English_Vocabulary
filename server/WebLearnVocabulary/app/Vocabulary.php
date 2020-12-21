<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Topic;
class Vocabulary extends Model
{
    public function getTopic(){
        return $this->belongsTo('App\Topic','topic_id','id');
    }
}
