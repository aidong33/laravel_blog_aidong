<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HoempageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HoempageController::class, 'getPosts'])->name('home');
Route::get('/post/{post}', [HoempageController::class, 'show'])->name('singlepost');


Route::group(['middleware' =>['auth']], function(){

    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::resource('posts', PostController::class)->middleware('is_admin');

});


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/custom-login', [AuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('/registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('/custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 
Route::post('/login', [AuthController::class, 'signOut'])->name('signout');



