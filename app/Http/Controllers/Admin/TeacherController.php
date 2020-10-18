<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Major;
use App\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
      $users = User::whereRole('teacher')->get();
      return view('admin.akun_teacher', compact('users'));
    }

    public function edit($id)
    {
      $user = User::with('teacher')->whereId($id)->first();
      $majors = Major::all();
      return view('admin.akun_teacher_edit', compact('user', 'majors'));
    }

    public function update(Request $request)
    {
      dd($request->all());
    }
}
