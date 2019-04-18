<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ffeedback extends Model
{
    protected $fillable = [
        'faculty_id','comment','Q1','Q2','Q3','Q4','Q5','Q6','Q7','Q8','Q9','Q10','Q11','Q12','Q13','Q14','Q15','Q16','Q17','Q18','Q19','Q20','Q21'
    ];
}
