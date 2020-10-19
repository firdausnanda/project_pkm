<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
use App\Major;
use App\User;
use App\Teacher;
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
      $user = User::whereId($id)->whereHas('teacher')->first();
      $majors = Major::all();
      if ($user == null) {
        return abort(404);
      }
      return view('admin.akun_teacher_edit', compact('user', 'majors'));
    }

    public function update(TeacherRequest $request)
    {
      $user = User::findOrFail($request->id);
      $user->teacher()->update($request->validated());
      if ($user) {
        return redirect()->back()->with('success', 'Data berhasil disimpan!');
      }
      return redirect()->back();
    }
}
