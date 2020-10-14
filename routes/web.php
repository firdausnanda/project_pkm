<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

// ROUTE ADMIN
Route::group(['middleware' => ['auth','admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    
    // admin dashboard
    Route::get('/', ['as' => 'index', 'uses' => 'Admin\HomeController@index']);


    // user management
    Route::get('users', ['as' => 'users.index', 'uses' => 'Admin\UserController@index']);
    // Route::get('users/show', ['as' => 'users.show', 'uses' => 'Admin\UserController@show']);
    Route::post('users/store', ['as' => 'users.store', 'uses' => 'Admin\UserController@store']);
    // Route::put('users/update', ['as' => 'users.update', 'uses' => 'Admin\UserController@update']);

    // major management
    // Route::get('major', ['as' => 'major.index', 'uses' => 'Admin\MajorController@index']);
    // Route::post('major/store', ['as' => 'major.store', 'uses' => 'Admin\MajorController@store']);
    // Route::put('major/update', ['as' => 'major.update', 'uses' => 'Admin\MajorController@update']);
    // Route::get('major/show/', ['as' => 'major.show', 'uses' => 'Admin\MajorController@show']);

    // student management
    // Route::get('student', ['as' => 'student.index', 'uses' => 'Admin\StudentController@index']);
    
    // teacher management
    // Route::get('teacher', ['as' => 'teacher.index', 'uses' => 'Admin\TeacherController@index']);

    // proposal management
    // Route::get('proposal', ['as' => 'proposal.index', 'uses' => 'Admin\ProposalController@index']);
    
    // export features
});

Route::group(['middleware' => ['auth','student','verified'], 'prefix' => 'student', 'as' => 'student.'], function () {

    // student dashboard
    Route::get('/', ['as' => 'index', 'uses' => 'Student\HomeController@index']);
    Route::get('settings', ['as' => 'settings', 'uses' => 'Student\HomeController@settings']);

    // team management
    Route::get('team', ['as' => 'team', 'uses' => 'Student\TeamController@index']);

    // proposal_pkm management
    Route::get('proposal', ['as' => 'proposal', 'uses' => 'Student\ProposalController@index']);





});

// Route::group(['middleware' => ['auth','teacher'], 'prefix' => 'teacher', 'as' => 'teacher.'], function () {
//   // teacher dashboard
//   Route::get('/', ['as' => 'index', 'uses' => 'Teacher\HomeController@index']);
// });