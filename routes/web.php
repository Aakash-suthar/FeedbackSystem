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
// Route::get('/','WelcomeController@index');
Route::get('/students/aboutcollage','WelcomeController@Saboutcollage');
Route::get('/facultys/aboutcollage','WelcomeController@Faboutcollage');
Route::get('/alumini/aboutcollage','WelcomeController@Aaboutcollage');


//students forms
Route::get('/students/login','StudentsController@login');
Route::post('/Scollage','StudentsController@Scollage');
Route::post('/students/login','Auth\LoginController@login');
Route::post('/students/tcsubmit','StudentsController@tcsubmit')->middleware('auth');
Route::get('/students/teacherandcurriculum','StudentsController@teachercurriculum')->middleware('auth');
// Route::get('/students/teacherandcurriculum/{id}', function($id){
//     echo $id;
// });


// facultys form submission
Route::post('/Fcollage','FacultysController@Fcollage');


//Alumini form submission
Route::post('/Acollage','AluminiController@Acollage');




Route::prefix('dashboard')->group(function () {
    Route::post('/login', 'Auth\AdminLoginController@Login');
    Route::get('/logout','Auth\AdminLoginController@Logout')->name('adminlogout');
    Route::post('/addcourse','AdminController@addcourse');
    Route::post('/addteacher','AdminController@addteacher');
    Route::post('/addsubject','AdminController@addsubject');
    Route::post('/addquestion','AdminController@addquestion');
    Route::get('','AdminController@dashboard')->name('dashboard');
});
// Route::get('/',function(){
//     // $title = 'hello';
//     // return view('welcome',compact('title'));
//     // return view('welcome')->with('title',$title);
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'StudentsController@teachercurriculum')->name('home');
Route::get('/','WelcomeController@index')->name('/');
// Route::get('/home', 'HomeController@index')->name('home');

