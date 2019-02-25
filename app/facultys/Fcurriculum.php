<?php

namespace App\facultys;

use Illuminate\Database\Eloquent\Model;

class Fcurriculum extends Model
{
    protected function getDateFormat()
    {
        return 'd.m.Y';
    }  
}
