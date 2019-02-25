<?php

namespace App\students;

use Illuminate\Database\Eloquent\Model;

class Scurriculum extends Model
{
    protected function getDateFormat()
    {
        return 'd.m.Y';
    } 
}
