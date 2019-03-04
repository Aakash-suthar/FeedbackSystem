<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public  $primaryKey = 'id';

    // public function teacher(){
    //     return $this->hasOne('App\Teacher');      
    // }

    // public function course(){
    //     return $this->hasOne('App\Course');      
    // }
}
