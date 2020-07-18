<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    //
    public function form () {
        return view('form');
    }

    public function sapa () {
        return 'HALO';
    }
    public function sapa_post (Request $request) {
        $nama = $request['nama'];
        return 'OK ' . $nama;
    }
}
