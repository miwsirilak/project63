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

// user

Route::get('/', function () {
    return view('base');
});

// Route::get('/index', function () {
//     return view('page/index');
// });

Route::get('/cards', function () {
    return view('page_user/cards');
})->name('cards');

// Route::get('/', function () {
//     return view('loginadminuser/index');
// });

Route::get('/register', function () {
    return view('loginadminuser/register');
})->name('register');

Route::get('/index', function () {
    return view('loginadminuser/index');
})->name('index');

Route::get('/calen', function () {
    return view('page_user/calen');
})->name('calen');

Route::get('/appointment', function () {
    return view('page_user/appointment');
})->name('appointment');

Route::get('/cancle', function () {
    return view('page_user/cancle');
})->name('cancle');

Route::get('/chat', function () {
    return view('page_user/chat');
})->name('chat');

Route::get('/dermatologist', function () {
    return view('page_user/dermatologist');
})->name('dermatologist');

Route::get('/location', function () {
    return view('page_user/location');
})->name('location');

Route::get('/register', function () {
    return view('page_user/register');
})->name('register');

Route::get('/sliding', function () {
    return view('page_user/sliding');
})->name('sliding');

