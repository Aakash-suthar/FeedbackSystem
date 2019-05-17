<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Faculty extends Authenticatable
{
    use Notifiable;
    protected $guard = 'faculty';
    protected $table = 'faculties';
    public  $primaryKey = 'id';
    public $incrementing = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'email', 'password','course_id','phoneno'
    ];
    
    public function course(){
        return $this->belongsTo('App\Course','course_id');      
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
