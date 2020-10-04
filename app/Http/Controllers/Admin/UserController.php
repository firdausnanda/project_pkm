<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
	public function index()
	{
    	// ambil data dari table users
		$users = DB::table('users')->get();

    	//dd("ashdguasd");

    	//kirim data ke view
		return view('admin.akun',['users' => $users]);
	}

	public function store(Request $request)
	{
		// insert data ke table users
		DB::table('users')->insert([
			'email' => $request->email,
			'password' => bcrypt($request->password),
			'role' => $request->role,
			]);
		return redirect('admin/users');

	}
}
