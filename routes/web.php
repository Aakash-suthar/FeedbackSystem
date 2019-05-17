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
    Route::get('/aboutcollege','StudentController@aboutcollege');
    // Route::get('/login','StudentController@login');
    Route::post('/submit','StudentController@submit');
    Route::post('/login','Auth\LoginController@login');
    Route::post('/tcsubmit','StudentController@tcsubmit')->middleware('auth');
    Route::get('/teacherandcurriculum','StudentController@teachercurriculum')->name('student.teacherandcurriculum')->middleware('auth');
});


// Route::get('/students/teacherandcurriculum/{id}', function($id){
//     echo $id;
// });
//Auth::routes();
Route::group(['middleware' => ['web']], function () {

// facultys controller
Route::prefix('faculty')->group(function () {
    Route::post('/submit','FacultyController@Submit');
    Route::post('/login','Auth\FacultyLoginController@Login');
    Route::get('/logout','Auth\FacultyLoginController@Logout');
    Route::get('/aboutcollege','FacultyController@aboutcollege')->name('faculty.aboutcollege');
});

// parent controller
Route::prefix('parent')->group(function () {
    Route::post('/submit','ParentController@submit');
    Route::get('/aboutcollege','ParentController@aboutcollege');
});
//Alumini form submission
Route::prefix('alumini')->group(function () {
    Route::post('/submit','AluminiController@Submit');
    Route::get('/aboutcollege','AluminiController@Aboutcollege');
});

Route::get('/management/localmanagement','ParentController@Local');

    Route::prefix('dashboard')->group(function () {
        Route::post('/login', 'Auth\AdminLoginController@Login');
        Route::get('/logout','Auth\AdminLoginController@Logout')->name('adminlogout');
        Route::post('/addcourse','AdminController@addcourse');
        Route::post('/getcourse','AdminController@Getcourse');
        Route::post('/addfaculty','AdminController@Addfaculty');
        Route::post('/getfacultydata','AdminController@Getfacultydata');
        Route::post('/getteacher','AdminController@Getteacher');
        Route::post('/addsubject','AdminController@addsubject');
        Route::post('/getsubject','AdminController@Getsubject');
        Route::post('/addquestion','AdminController@addquestion');
        Route::post('/getquestion','AdminController@Getquestion');
        Route::post('/getdata','AdminController@Getdata');
        Route::post('/totalfeedback','AdminController@Totalfeedback');
        Route::get('/getpdfdata/{id}/{course}','AdminController@GetPDFdata');
        Route::post('/getalldata','AdminController@Getalldata');
        Route::get('','AdminController@dashboard')->name('dashboard');
        Route::post('/getcurriculumdata','AdminController@Getcurriculumdata');
        Route::post('/curriculumdata','AdminController@Getcurriculum');
        Route::post('/getsubject2','AdminController@Getsubject2');
        // Route::post('/addstudent','AdminController@Addstudent');

        Route::get('/course/{id}','AdminController@Editcourse');
        Route::post('/course/submit','AdminController@Editcoursesubmit');
        Route::get('/student/import','AdminController@Importstudent');
        Route::post('/import','AdminController@ImportExcel');

        Route::get('/faculty/import','AdminController@Importfaculty');
        Route::post('/importf','AdminController@ImportExcelf');

        Route::get('/subject/import','AdminController@Importsubject');
        Route::post('/imports','AdminController@ImportExcels');
       
        Route::get('/assign/import','AdminController@Importassign');
        Route::post('/importa','AdminController@ImportExcela');
       
        Route::post('/assigndata','AdminController@AssignData');

        Route::post('/getsubfac','AdminController@Getsubfac');

        Route::post('/addassign','AdminController@Addassign');

        // export to excel Route
        Route::get('/courseexport','AdminController@Coursexport');
        Route::get('/studentexport','AdminController@Studentexport');
        Route::get('/feedbackexport','AdminController@Feedbackexport');
        Route::get('/facultyexport','AdminController@Facultyexport');
        Route::get('/subjectexport','AdminController@Subjectexport');
        Route::get('/assignexport','AdminController@Assignexport');

    });
// Route::get('/',function(){
//     // $title = 'hello';
//     // return view('welcome',compact('title'));
//     // return view('welcome')->with('title',$title);
//     return view('welcome');
// });


Route::prefix('employee')->group(function () {
    Route::get('/aboutcollege','EmployeeController@Aboutcollege');
    Route::post('/submit','EmployeeController@Submit');

});
// Route::get('/home', 'StudentController@teachercurriculum')->name('home');
Route::get('/','WelcomeController@index')->name('/');
// Route::get('/home', 'HomeController@index')->name('home');

});