<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Request;
//home
Route::get('home', 'HomeController@index');
Route::get('/', 'HomeController@index');
//
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::group(array('before' => 'auth'), function(){
    Route::get('/', 'HomeController@index');
});
//admin
Route::group(array('before' => 'auth'), function(){
    Route::get('admin', 'Admin\AdminController@index');
});

///admin_test/////////////////
Route::get('admin/tests', 'Admin\AdminTestExamController@index');
Route::any('admin/addtest', 'Admin\AdminTestExamController@createTest');
Route::any('admin/addquestion', 'Admin\AdminTestExamController@createQuestion');
Route::get('addquestion','Admin\AdminTestExamController@viewForm');
//answers_admin
Route::get('admin/addanswers', 'Admin\AdminAnswerController@index');
Route::any('admin/createanswers', 'Admin\AdminAnswerController@createAnswer');
//task_admin
Route::get('admin/addtask', 'Admin\AdminTaskExamController@index');
Route::any('admin/create_task', 'Admin\AdminTaskExamController@createTask');
Route::any('admin/create_code', 'Admin\AdminTaskExamController@createCode');
Route::get('addcode', 'Admin\AdminTaskExamController@viewForm');
//testsexam_view///////////////////
Route::get('/tests/', 'TestsExamController@index');//
Route::get('tests/{id?}', 'TestsExamController@showItemTest');
Route::any('result/{testId?}', 'TestsExamController@result');

//taskexam_view///////////////////////////////////////////
Route::get('/tasks/', 'TaskExamController@index');//
Route::get('/task/{id?}', 'TaskExamController@showItemTask');


//buttons////////////////////////////
View::creator('admin.index', function($view){
    $view->with('buttons', \App\AdminButtons::all());
});
Route::any('admin/addbutton', 'Admin\AdminController@createButton');
//primer/////////////////////////////////////////////////////////////////////////
Route::get('contact', function()
{
return View::make('pages.contact');
});