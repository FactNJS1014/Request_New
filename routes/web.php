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
    return view('Contents.request');
})->name('index');
Route::get('/sidebar', function () {
    return view('TemplateSidebar.sidebartemp');
});
Route::get('/myrequest', function () {
    return view('Contents.myrequest');
})->name('myrequest');


