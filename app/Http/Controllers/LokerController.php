<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;

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

    public function daftar(Request $request, $id)
    {
        $request->validate([
            'nama' => ['required', 'string'],
            'alamat' => ['required', 'string'],
            'jenis-kelamin' => ['required', 'boolean'],
            'jenis-disabilitas' => ['required', 'numeric', 'digits:1'],
            'resume' => ['required'],
            'tambahan' => ['required'],
        ]);

        if ($request->hasFile('resume') && $request->hasFile('tambahan') ) {
            $resumeFile = $request->file('resume');
            $tambahanFile = $request->file('tambahan');
            $nama_resume = Auth::id() . "_" . $id . "_" . $resumeFile->getClientOriginalName();
            $nama_tambahan = Auth::id() . "_" .  $id . "_" . $tambahanFile->getClientOriginalName();
            $tujuan_upload_resume = 'file/resume/';
            $tujuan_upload_tambahan = 'file/tambahan/';
            $resumeFile->move($tujuan_upload_resume, $nama_resume);
            $tambahanFile->move($tujuan_upload_tambahan, $nama_tambahan);
        }
        //update pelamar

        $user = User::find(Auth::id());
        $user->pelamar->nama = $request->input('nama');
        $user->pelamar->alamat = $request->input('alamat');
        $user->pelamar->jenis_kelamin = $request->input('jenis-kelamin');
        $user->pelamar->jenis_disabilitas = $request->input('jenis-disabilitas');
        $user->save();

        //tambah loker_pelamar
        DB::table('loker_pelamar')->insert([
            'pelamar_id' => Auth::id(),
            'loker_id'=> $id,
            'resume' => $tujuan_upload_resume . $nama_resume, 
            'dokumen_pendukung' => $tujuan_upload_tambahan . $nama_tambahan,
            'status' => 'mengunggu hasil',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        return redirect()->route('home');

    }

}
