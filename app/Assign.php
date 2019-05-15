<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assign extends Model
{
    public  $primaryKey = 'id';
    protected $table = 'assigns';
    protected $fillable = [
     'subject_id','sem','course_id','div','faculty_id'
    ];
    public function faculty(){
        return $this->belongsTo('App\Faculty','faculty_id');      
    }

    public function course(){
        return $this->belongsTo('App\Course','course_id');      
    }
    public function subject(){
        return $this->belongsTo('App\Subject','subject_id');      
    }
}
