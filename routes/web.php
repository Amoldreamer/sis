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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('aboutus','StudentController@aboutus');

Route::get('aboutus1','StudentController@aboutus1');

Route::get('welcome1','StudentController@welcome1');

Route::get('addStudent','StudentController@addStudent');

Route::POST('addStudentDetails','StudentController@addStudentDetails');

Route::get('showIndividualStudent','StudentController@showIndividualStudent');

Route::get('studentReport','StudentController@studentReport');

Route::get('editStudent','StudentController@editStudent');

Route::get('addGender','StudentController@addGender');

Route::get('addCourse','StudentController@addCourse');

Route::get('addYear','StudentController@addYear');

Route::get('addSemester','StudentController@addSemester');

Route::get('addState','StudentController@addState');

Route::get('insertGender','StudentController@insertGender');

Route::get('insertCourse','StudentController@insertCourse');

Route::get('insertYear','StudentController@insertYear');

Route::get('insertSemester','StudentController@insertSemester');

Route::get('insertState','StudentController@insertState');

Route::get('viewGender','StudentController@viewGender');

Route::get('viewCourse','StudentController@viewCourse');

Route::get('viewYear','StudentController@viewYear');

Route::get('viewSemester','StudentController@viewSemester');

Route::get('editGender','StudentController@editGender');

Route::get('deleteGender','StudentController@deleteGender');

Route::post('finalEditGender','StudentController@finalEditGender');

Route::post('finalDeleteGender','StudentController@finalDeleteGender');

Route::get('editCourse','StudentController@editCourse');

Route::get('deleteCourse','StudentController@deleteCourse');

Route::post('finalEditCourse','StudentController@finalEditCourse');

Route::get('allStudents','StudentController@allStudents');

Route::get('viewStudent','StudentController@viewStudent');

Route::get('showIndividualStudent1','StudentController@showIndividualStudent1');

Route::POST('editStudentDetails','StudentController@editStudentDetails');

Route::GET('deleteStudent','StudentController@deleteStudent');

Route::GET('searchStudent','StudentController@searchStudent');

Route::GET('home','HomeController@index');

Route::get('cities', function(){
    return view('cities');
});