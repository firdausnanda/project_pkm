<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
	public function index($role)
	{
    // ambil data dari table users
    $users = User::whereRole($role)->get();
    if ($role == 'admin') {
      return view('admin.akun',['users' => $users]);
    } elseif ($role == 'teacher') {
      return view('admin.akun_teacher', compact('users'));
    } elseif ($role == 'student') {
      return view('admin.akun_student', compact('users'));
    }
	}

	public function store(Request $request)
	{
		// insert data ke table users
		DB::table('users')->insert([
			'email' => $request->email,
			'password' => Hash::make($request->password),
			'role' => $request->role,
			]);
		return redirect('admin/users');
	}
}
