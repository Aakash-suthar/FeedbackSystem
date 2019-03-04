<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    public  $primaryKey = 'username';

    // protected function getDateFormat()
    // {
    //     return 'd.m.Y';
    // }
    // public function getCreatedAtAttribute($timestamp) {
    //     return Carbon\Carbon::parse($timestamp)->format('d m, Y');
    // }  
}
