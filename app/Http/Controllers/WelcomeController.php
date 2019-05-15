<?php

namespace App\Http\Controllers;
//use Mail;

class WelcomeController extends Controller
{
    public function index(){
        // $data = array('name'=>"Virat Gandhi");
        // Mail::send(['text'=>'mail'], $data, function($message) {
        //     $message->to('akashsuthar62@gmail.com', 'Tutorials Point')->subject
        //        ('Laravel Basic Testing Mail');
        //     $message->from('akashsuthar7866@gmail.com','Virat Gandhi');
        //  });
        return view("index");
    }


 
}
