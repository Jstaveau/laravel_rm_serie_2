<?php

use App\Http\Controllers\Pg1Controller;
use App\Http\Controllers\Pg2Controller;
use App\Http\Controllers\Pg3Controller;
use App\Http\Controllers\Pg4Controller;
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
Route::get('/pg1', [Pg1Controller::class, "index"])->name('page1');
Route::get('/pg2', [Pg2Controller::class, "index"])->name('page2');
Route::get('/pg3', [Pg3Controller::class, "index"])->name('page3');
Route::get('/pg4', [Pg4Controller::class, "index"])->name('page4');
