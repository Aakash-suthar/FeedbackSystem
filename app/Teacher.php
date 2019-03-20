<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public  $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id', 'name',
    ];
    // public function subjects(){
    //     return hasMany('App\Subject');
    // }
}
