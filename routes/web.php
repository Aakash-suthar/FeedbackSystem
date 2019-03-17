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

Auth::routes();

Route::get('/','WelcomeController@index');
Route::get('/students/aboutcollage','WelcomeController@Saboutcollage');
Route::get('/facultys/aboutcollage','WelcomeController@Faboutcollage');
Route::get('/alumini/aboutcollage','WelcomeController@Aaboutcollage');


//students forms
Route::get('/students/login','StudentsController@login');
Route::post('/Scollage','StudentsController@Scollage');
Route::post('/students/logincheck','StudentsController@logincheck');
Route::post('/students/tcsubmit','StudentsController@tcsubmit');
Route::get('/students/teacherandcurriculum/{id}','StudentsController@teachercurriculum');
// Route::get('/students/teacherandcurriculum/{id}', function($id){
//     echo $id;
// });


// facultys form submission
Route::post('/Fcollage','FacultysController@Fcollage');


//Alumini form submission
Route::post('/Acollage','AluminiController@Acollage');


Route::post('/register','AdminController@register');
Route::post('/login', 'Auth\LoginController@showAdminLoginForm');
Route::get('/signup','AdminController@signup');
Route::get('/dashboard','AdminController@dashboard');
Route::get('/dashboard/course','AdminController@course');
Route::get('/dashboard/teacher','AdminController@teacher');
Route::get('/dashboard/subject','AdminController@subject');
Route::get('/dashboard/question','AdminController@question');
Route::post('/dashboard/addcourse','AdminController@addcourse');
Route::post('/dashboard/addteacher','AdminController@addteacher');
Route::post('/dashboard/addsubject','AdminController@addsubject');
Route::post('/dashboard/addquestion','AdminController@addquestion');

// Route::get('/',function(){
//     // $title = 'hello';
//     // return view('welcome',compact('title'));
//     // return view('welcome')->with('title',$title);
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
