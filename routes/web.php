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
    Route::get('users/{role}', ['as' => 'users.index', 'uses' => 'Admin\UserController@index']);
    // Route::get('users/show', ['as' => 'users.show', 'uses' => 'Admin\UserController@show']);
    Route::post('users/store', ['as' => 'users.store', 'uses' => 'Admin\UserController@store']);
    Route::put('users/update', ['as' => 'users.update', 'uses' => 'Admin\UserController@update']);

    // major management
    // Route::get('major', ['as' => 'major.index', 'uses' => 'Admin\MajorController@index']);
    // Route::post('major/store', ['as' => 'major.store', 'uses' => 'Admin\MajorController@store']);
    // Route::put('major/update', ['as' => 'major.update', 'uses' => 'Admin\MajorController@update']);
    // Route::get('major/show/', ['as' => 'major.show', 'uses' => 'Admin\MajorController@show']);

    // student management
    Route::get('users/student', ['as' => 'student.index', 'uses' => 'Admin\StudentController@index']);
    Route::get('users/student/{id}', ['as' => 'student.edit', 'uses' => 'Admin\StudentController@edit']);
    Route::put('users/student', ['as' => 'student.update', 'uses' => 'Admin\StudentController@update']);
    
    // teacher management
    Route::get('users/teacher', ['as' => 'teacher.index', 'uses' => 'Admin\TeacherController@index']);
    Route::get('users/teacher/{id}', ['as' => 'teacher.edit', 'uses' => 'Admin\TeacherController@edit']);
    Route::put('users/teacher', ['as' => 'teacher.update', 'uses' => 'Admin\TeacherController@update']);

    // proposal management
    // Route::get('proposal', ['as' => 'proposal.index', 'uses' => 'Admin\ProposalController@index']);
    
    // Period Management
    Route::get('period', ['as' => 'period', 'uses' => 'Admin\PeriodController@index']);
    Route::get('period/edit/{id}',['as' => 'period.edit', 'uses' => 'Admin\PeriodController@edit']);
    Route::put('period/update',['as' => 'period.update', 'uses' => 'Admin\PeriodController@update']);
    Route::post('period', ['as' => 'period.store', 'uses' => 'Admin\PeriodController@store']);
    // export features
});

Route::group(['middleware' => ['auth','student','verified'], 'prefix' => 'student', 'as' => 'student.'], function () {

    // student dashboard
    Route::get('/', ['as' => 'index', 'uses' => 'Student\HomeController@index']);
    Route::get('settings', ['as' => 'settings', 'uses' => 'Student\HomeController@settings']);
    // Profile
    Route::get('profile', ['as' => 'profile', 'uses' => 'Student\HomeController@profile']);
    Route::get('profile/create', ['as' => 'profile.create', 'uses' => 'Student\HomeController@create']);
    Route::post('profile/store', ['as' => 'profile.store', 'uses' => 'Student\HomeController@store']);
    Route::get('profile/edit', ['as' => 'profile.edit', 'uses' => 'Student\HomeController@edit']);
    Route::put('profile/update', ['as' => 'profile.update', 'uses' => 'Student\HomeController@update']);

    // proposal_pkm management
    Route::get('proposal', ['as' => 'proposal', 'uses' => 'Student\ProposalController@index']);
    Route::get('proposal/create', ['as' => 'proposal.create', 'uses' => 'Student\ProposalController@create']);






});

// Route::group(['middleware' => ['auth','teacher'], 'prefix' => 'teacher', 'as' => 'teacher.'], function () {
//   // teacher dashboard
//   Route::get('/', ['as' => 'index', 'uses' => 'Teacher\HomeController@index']);
// });