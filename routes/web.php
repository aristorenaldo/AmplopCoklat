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

Route::get('/index', function () {
    return view('AmplopCoklat.index');
});

<<<<<<< HEAD
Route::get('/login', function () {
    return view('AmplopCoklat.login');
});
Route::get('/register', function () {
    return view('AmplopCoklat.register');
});

=======
Route::get('/detail', function () {
    return view('AmplopCoklat.detail');
});

Route::get('/statusloker', function () {
    return view('AmplopCoklat.statusloker');
});
>>>>>>> ff411beaf090116a6865f62a548bc5abf1b51344
