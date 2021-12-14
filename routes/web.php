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

Route::get('/index', function () {
    return view('AmplopCoklat.index');
});

Route::get('/login1', function () {
    return view('AmplopCoklat.login');
});

Route::get('/register', function () {
    return view('AmplopCoklat.register');
});

Route::get('/detail', function () {
    return view('AmplopCoklat.detail');
});

Route::get('/statusloker', function () {
    return view('AmplopCoklat.statusloker');
});

Route::get('/search', function () {
    return view('AmplopCoklat.search');
});

Route::get('/daftarloker', function () {
    return view('AmplopCoklat.daftarloker');
});

Route::get('/splashpage', function () {
    return view('AmplopCoklat.splashpage');
});

Route::get('/melihatinfo', function () {
    return view('AmplopCoklat.melihatinfo');
});

Route::get('/seleksiberkas', function () {
    return view('AmplopCoklat.seleksiberkas');
});

Route::get('/editprofile', function () {
    return view('AmplopCoklat.editProfile');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
