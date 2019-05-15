<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';
    public  $primaryKey = 'id';

    protected $fillable = [
        'subject_id','student_id','course_id','div','sem','teacher_id','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9','Q10','Q11','Q12','Q13','Q14','year',
    ];
    
    public function teacher(){
        return $this->belongsTo('App\Faculty','teacher_id');      
    }

    public function course(){
        return $this->belongsTo('App\Course','course_id');   
    }

    public function subject(){
        return $this->belongsTo('App\Subject','subject_id');   
    }

    public function student(){
        return $this->belongsTo('App\User','student_id');   
    }
}
