<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // untuk menampilkan nama dari user yang telah login yang memiliki role pelamar 
        $name = Auth::check() && Auth::user()->role == 0 ? User::find(Auth::id())->pelamar->nama : 'Guest';
        return view('AmplopCoklat.search', compact('name',));
    }
}
