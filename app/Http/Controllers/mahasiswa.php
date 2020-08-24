<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswa extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
    	return view('mahasiswa.dashboard');
    }

    public function data_diri()
    {
    	return view('mahasiswa.data_diri');
    }

    public function data_pkm()
    {
    	return view('mahasiswa.data_pkm');
    }
}
