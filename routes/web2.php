<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoorController;
use App\Http\Controllers\TcController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/users/CoorIndex', [App\Http\Controllers\HomeController::class, 'CoorIndex'])->name('users.CoorIndex');
//Route::get('/users/TcIndex', [App\Http\Controllers\HomeController::class, 'TcIndex'])->name('users.TcIndex');
*/

Route::get('/', function () {
    return redirect()->route('login');
    //return view('welcome');
});

Auth::routes(); //['register'=>false]
//Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function ()
 {
        Route::get('/dashboard/admin', [AdminController::class, 'dashboard_admin'])->name('admin');
        Route::get('/dashboard/tc', [TcController::class, 'dashboard_tc'])->name('tc');
        Route::get('/dashboard/coordinator', [CoorController::class, 'dashboard_coor'])->name('coordinator');

        Route::resource('courses', [CourseController::class]);
        Route::resource('programmes', [ProgrammeController::class]);
        Route::resource('groups', [GroupController::class]);
        Route::resource('semesters', [SemesterController::class]);
        Route::resource('users', [UserController::class]);
});


//Route::group(['middleware' => 'auth'], function () {
        //Route::get('form', [PageController::class, 'form'])->name('pages.form');
        //Route::get('maps', [PageController::class, 'maps'])->name('pages.maps');
        //Route::get('notifications', [PageController::class, 'notifications'])->name('pages.notifications');
        //Route::get('rtl', [PageController::class, 'rtl'])->name('pages.rtl');
        //tables,typography,upgrade

//});

//Route::middleware('auth')->group(function () {
    //Route::resource('user', [UserController::class, 'user']);
    //Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
    //Route::put('profile/password', [ProfileController::class, 'password'])->name('profile.password');

	//Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	//Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	//Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	//Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
//});


