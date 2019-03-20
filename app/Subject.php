<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public  $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id', 'name','sem','course_id','teacher_id',
    ];
    public function teacher(){
        return $this->belongsTo('App\Teacher');      
    }

    public function course(){
        return $this->belongsTo('App\Course');      
    }
}
