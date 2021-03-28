<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('role:manager')->get('/dashboardManager', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboardManager');
Route::middleware('role:supervisor')->get('/dashboardSupervisor', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboardSupervisor');
