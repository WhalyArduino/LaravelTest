<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\instagram;
use App\Http\Controllers\PostsController;

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

Route::get('/Login', function () {
    return view('whaly.Login');
}) -> name('Login');

Route::get('/Register', function () {
    return view('whaly.Register');
}) -> name('Register');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/instagram', [instagram::class, 'index'])-> name('instagram.index');

Route::resource('instagram', instagram::class);

Route::get('/p', [PostsController::class, 'create']);

