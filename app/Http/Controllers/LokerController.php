<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loker;

class LokerController extends Controller
{
    //
    public function detail($id)
    {
        $loker = Loker::find($id);
        return view('AmplopCoklat.detail',compact('loker'));
    }
}
