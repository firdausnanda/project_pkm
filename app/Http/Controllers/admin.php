<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
    	return view('admin.dashboard');
    }

    public function data_diri()
    {
    	return view('admin.data_diri');
    }

    public function akun()
    {
    	return view('admin.akun');
    }
}
