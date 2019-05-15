<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    public  $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = [
        'id', 'name','sem','course_id',
    ];
    // public function faculty(){
    //     return $this->belongsTo('App\Faculty');      
    // }

    public function course(){
        return $this->belongsTo('App\Course','course_id');      
    }
}
