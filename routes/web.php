<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*  dynamic routes
Route::get('/users/{id}{name}', function ($id,$name) {
    return "This is users".$id." name ".$name;
});
*/

// Route::get('/about', function () {
//     return view('pages.about');
// });

Route::get('/','WelcomeController@index');

//students forms
Route::get('/students/aboutcollage','WelcomeController@Saboutcollage');
Route::get('/students/aboutfacultys','WelcomeController@Saboutfacultys');
Route::get('/students/aboutcurriculum','WelcomeController@Saboutcurriculum');
Route::post('/Scollage','StudentsController@Scollage');
Route::post('/Scurriculum','StudentsController@Scurriculum');


// facultys form
Route::get('/facultys/aboutcollage','WelcomeController@Faboutcollage');
Route::get('/facultys/aboutcurriculum','WelcomeController@Faboutcurriculum');
Route::post('/Fcollage','FacultysController@Fcollage');
Route::post('/Fcurriculum','FacultysController@Fcurriculum');




Route::get('/',function(){
    // $title = 'hello';
    // return view('welcome',compact('title'));
    // return view('welcome')->with('title',$title);
    return view('welcome');
});
