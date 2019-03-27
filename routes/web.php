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


//students controller
Route::prefix('student')->group(function () {
    Route::get('/aboutcollage','StudentController@aboutcollage');
    // Route::get('/login','StudentController@login');
    Route::post('/submit','StudentController@submit');
    Route::post('/login','Auth\LoginController@login');
    Route::post('/tcsubmit','StudentController@tcsubmit')->middleware('auth');
    Route::get('/teacherandcurriculum','StudentController@teachercurriculum')->middleware('auth');
});


// Route::get('/students/teacherandcurriculum/{id}', function($id){
//     echo $id;
// });
//Auth::routes();


// facultys controller
Route::prefix('faculty')->group(function () {
    Route::post('/submit','FacultyController@submit');
    Route::get('/aboutcollage','FacultyController@aboutcollage');
});

// parent controller
Route::prefix('parent')->group(function () {
    Route::post('/submit','ParentController@submit');
    Route::get('/aboutcollage','ParentController@aboutcollage');
});
//Alumini form submission
Route::prefix('alumini')->group(function () {
    Route::post('/submit','AluminiController@submit');
    Route::get('/aboutcollage','AluminiController@aboutcollage');
});



Route::prefix('dashboard')->group(function () {
    Route::post('/login', 'Auth\AdminLoginController@Login');
    Route::get('/logout','Auth\AdminLoginController@Logout')->name('adminlogout');
    Route::post('/addcourse','AdminController@addcourse');
    Route::post('/addteacher','AdminController@addteacher');
    Route::post('/addsubject','AdminController@addsubject');
    Route::post('/addquestion','AdminController@addquestion');
    Route::post('/getdata','AdminController@Getdata');
    Route::post('/getteacher','AdminController@Getteacher');
    Route::get('','AdminController@dashboard')->name('dashboard');
});
// Route::get('/',function(){
//     // $title = 'hello';
//     // return view('welcome',compact('title'));
//     // return view('welcome')->with('title',$title);
//     return view('welcome');
// });

// Route::get('/home', 'StudentController@teachercurriculum')->name('home');
Route::get('/','WelcomeController@index')->name('/');
// Route::get('/home', 'HomeController@index')->name('home');

