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
Route::get('/pg1', function () {
    return view('pages.page1');
})->name('page1');
Route::get('/pg2', function () {
    return view('pages.page2');
})->name('page2');
Route::get('/pg3', function () {
    return view('pages.page3');
})->name('page3');