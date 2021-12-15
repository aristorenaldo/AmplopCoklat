<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LokerController extends Controller
{
    //
    public function detail($id)
    {
        $loker = Loker::find($id);
        return view('AmplopCoklat.detail',compact('loker'));
    }

    public function index()
    {
        $loker = Loker::inRandomOrder()
                        ->limit(3)
                        ->get();
        return view('AmplopCoklat.index', compact('loker'));
    }

    public function cari(Request $request)
    {
        # code...
        $request->validate([
            'term' => ['required', 'string']
        ]);

        $term = $request->term;

        $idLoker = DB::table('lokers','l')
        ->join('perusahaans','l.perusahaan_id', '=', 'perusahaans.user_id')
        ->where('l.pekerjaan', 'LIKE', '%'.$term.'%')
        ->orWhere('perusahaans.nama', 'LIKE', '%' . $term . '%')
        ->orWhere('perusahaans.bidang', 'LIKE', '%' . $term . '%')
        ->select('l.id')
        ->get('l.id');
        $kosong = array();
        foreach ($idLoker->toArray() as $key => $value) {
            $kosong[$key] = $value->id;
        }
        $loker = Loker::whereIn('id',$kosong)->with('perusahaan')->get();
        $name = Auth::check() && Auth::user()->role == 0 ? User::find(Auth::id())->pelamar->nama : 'Guest';
        return view('AmplopCoklat.search',compact('loker','name'));

    }
}
