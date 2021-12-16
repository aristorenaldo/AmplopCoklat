<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Loker;

use App\Http\Controllers\LokerController;
use App\Models\JenisDifabel;
use PhpParser\Node\Expr\FuncCall;

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

Route::get('/', [LokerController::class, 'index']);

// Route::get('/index', function () {
//     return view('AmplopCoklat.index');
// });

Route::get('/login1', function () {
    return view('AmplopCoklat.login');
});

Route::get('/register', function () {
    return view('AmplopCoklat.register');
});

// Route::get('/detail', function () {
//     return view('AmplopCoklat.detail');
// });

// Route::get('/statusloker', function () {
//     return view('AmplopCoklat.statusloker');
// });

Route::get('/search', [LokerController::class, 'cari'])->name('search');

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

Route::get('/loker/{id}', [LokerController::class, 'detail'])->name('loker.detail');

Route::middleware('auth')->group(function (){
    Route::get('loker/{id}/daftar',function ($id)
    {
        $jenisDifabel = JenisDifabel::all(); 
        $user = User::find(Auth::id());
        return view('AmplopCoklat.daftarloker', compact('user','jenisDifabel'));
    })->middleware('can:isPelamar')->name('loker.daftar');

    Route::post('loker/{id}/daftar',[LokerController::class, 'daftar'])->middleware('can:isPelamar');

    Route::get('/statusloker',function ()
    {
        $user = User::find(Auth::id());
        return view('AmplopCoklat.liststatus',compact('user'));
    })->middleware('can:isPelamar')->name('liststatus');
    Route::get('/statusloker/{idLoker}',function ($idLoker)
    {
        $user = User::find(Auth::id());
        
        // dd($user->pelamar->getLoker($idLoker)->first());
        return view('AmplopCoklat.statusloker',compact('user','idLoker'));
    })->middleware('can:isPelamar')->name('statusloker');
});


