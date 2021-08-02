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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
#Files Upload
Route::post('/upload', [App\Http\Controllers\user\FilesController::class, 'store'])->name('user.files.store');
#Files 
Route::get('/files', [App\Http\Controllers\user\FilesController::class, 'index'])->name('user.files.index');

