<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public  $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id', 'name',
    ];
    // public function subjects(){
    //     return $this.hasMany('App\Subject');
    // }

}
