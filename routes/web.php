<?php

//Setiap Controller nak guna mesti declare dekat atas sini dulu.
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoorController;
use App\Http\Controllers\TCController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\MyRequestController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;



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
    return redirect()->route('login');
});


Auth::routes(); //login&register


Route::middleware('auth')->group(function () {

    Route::middleware('role:1')->group(function () {

    Route::get('/dashboard/admin', [AdminController::class, 'dashboard_admin'])->name('admin');
    Route::resource('courses', CourseController::class);
    Route::resource('programmes', ProgrammeController::class);
    Route::resource('groups', GroupController::class);
    Route::resource('semesters', SemesterController::class);
    Route::resource('users', UserController::class);

    });

    Route::middleware('role:2')->group(function () {
    Route::get('/myrequest', [CoorController::class, 'index'])->name('coor_req');
    Route::get('/myrequest/not', [CoorController::class, 'notcoor'])->name('notcoor_req');
    Route::get('/dashboard/coordinator', [CoorController::class, 'dashboard_coordinator'])->name('coordinator');
    Route::get('/myrequests/create', [MyRequestController::class, 'create'])->name('myrequests.create');
    Route::post('/myrequests', [MyRequestController::class, 'store'])->name('myrequests.store');
    Route::get('/myrequests/{myRequest}/edit', [MyRequestController::class, 'edit'])->name('myrequests.edit');
    Route::put('/myrequests/{myRequest}/edit', [MyRequestController::class, 'update'])->name('myrequests.update');
    Route::delete('/myrequests/{myRequest}', [MyRequestController::class, 'destroy'])->name('myrequests.destroy');
    });

    Route::middleware('role:3')->group(function () {
    Route::get('/dashboard/tc', [TCController::class, 'dashboard_tc'])->name('tc');
    });

    // Route::post('/myrequests', [MyRequestController::class, 'search'])->name('myrequests.search');
    Route::get('/search', [ProgrammeController::class, 'search'])->name('programmes.search');
    Route::get('/myrequests/{myRequest}/generate_pdf', [MyRequestController::class, 'generatePDF'])->name('myrequests.generate_pdf');
    Route::get('/myrequests', [MyRequestController::class, 'index'])->name('myrequests.index');
    Route::get('/myrequests/{myRequest}', [MyRequestController::class, 'show'])->name('myrequests.show');
    Route::get('user', [UserController::class, 'index'])->name('user.index');
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('profile/password', [ProfileController::class, 'password'])->name('profile.password');
});

Route::get('/error/no_permission', function(){ return view('error.no_permission'); })->name('error.no_permission');
