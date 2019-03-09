<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{

    public  $primaryKey = 'id';

    
    public function teacher(){
        return $this->belongsTo('App\Teacher');      
    }

    public function course(){
        return $this->belongsTo('App\Course');   
    }

    public function subject(){
        return $this->belongsTo('App\Subject');   
    }

    public function student(){
        return $this->belongsTo('App\User');   
    }
}
