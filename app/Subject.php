<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public  $primaryKey = 'id';
    public $incrementing = false;

    public function teacher(){
        return $this->belongsTo('App\Teacher');      
    }

    public function course(){
        return $this->belongsTo('App\Course');      
    }
}
