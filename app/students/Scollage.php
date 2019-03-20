<?php

namespace App\students;

use Illuminate\Database\Eloquent\Model;

class Scollage extends Model
{

    protected $fillable = [
        'Q1', 'Q2', 'Q3','Q4', 'Q5', 'Q6','Q7',
    ];
    // protected function getDateFormat()
    // {
    //     return 'd.m.Y';
    // }  

}
