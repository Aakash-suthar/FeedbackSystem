<?php

namespace App\student;

use Illuminate\Database\Eloquent\Model;

class Scollage extends Model
{

    protected $fillable = [
        'Q1', 'Q2', 'Q3','Q4', 'Q5', 'Q6','Q7','year',
    ];
    // protected function getDateFormat()
    // {
    //     return 'd.m.Y';
    // }  

    // public function save(){
    //     insert into table(with data)
    // }

}
