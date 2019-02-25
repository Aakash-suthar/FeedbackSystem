<?php

namespace App\students;

use Illuminate\Database\Eloquent\Model;

class Scollage extends Model
{

    protected function getDateFormat()
    {
        return 'd.m.Y';
    }  

}
