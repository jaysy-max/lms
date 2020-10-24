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
// Route::redirect('/', '/login');

Route::get('/', function () {
    if(Auth::user()) {
        if(Auth::user()->hasRole('admin')) {
            return redirect()->route('admin.index');
        } else if (Auth::user()->hasRole('teacher')) {
            return redirect()->route('teacher.index');
        } else {
            return redirect()->route('student.index');
        }
    }
    return redirect()->route('login');
});

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Auth::routes();

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:admin-content')->group(function(){
	Route::resource('/users', 'UsersController');
    Route::resource('/courses', 'CoursesController');
    Route::resource('/degrees', 'DegreesController');
    Route::resource('/rooms', 'RoomsController');
    Route::resource('/', 'AdminController');
});


Route::namespace('Teacher')->prefix('teacher')->name('teacher.')->middleware('can:teacher-content')->group(function(){
    Route::resource('/rooms', 'RoomsController');
    Route::resource('/uploadFile', 'FileController')->except('create', 'store');
    Route::resource('/', 'TeacherController');
});

Route::namespace('Student')->prefix('student')->name('student.')->middleware('can:student-content')->group(function(){
    Route::resource('/joins', 'JoinsController');
    Route::resource('/uploadFile', 'FileController');
    Route::resource('/', 'StudentController');
});


Route::get('download/{download}', 'Teacher\FileController@download')->name('downloadFile');

Route::get('teacher/rooms/{room}/uploadFile/create', 'Teacher\FileController@create')->middleware('can:teacher-content')->name('teacher.uploadFile.create');
Route::post('teacher/rooms/{room}/uploadFile', 'Teacher\FileController@store')->middleware('can:teacher-content')->name('teacher.uploadFile.store');

Route::resource('/profiles', 'ProfileController')->except('create','store');
Route::get('admin/users/{user}/profile/create', 'ProfileController@create')->name('profiles.create');
Route::post('admin/users/{user}/profile', 'ProfileController@store')->name('profiles.store');




