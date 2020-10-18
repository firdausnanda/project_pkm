<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use App\Major;
use App\Student;
use App\User;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
      return view('mahasiswa.dashboard');
    }

    public function settings()
    {
      return view('mahasiswa.account_settings');
    }

    public function profile()
    {
      $majors = Major::all();
      $student = User::with('student')->find(Auth::user()->id)->student;
      if ($student) {
        return view('mahasiswa.data_diri', compact('majors','student'));
      }
        return redirect('student/profile/create');
    }

    public function create()
    {
      $majors = Major::all();
      $student = User::with('student')->find(Auth::user()->id)->student;
      if ($student) {
        return redirect('student/profile');
      }
      return view('mahasiswa.data_diri_create', compact('majors','student'));
    }

    public function store(StudentRequest $request)
    {
        $user = Auth::user();
        $user->student->create($request->validated());
        if ($user) {
          return redirect('student/profile');
        }
        return redirect()->back();
    }
    
    public function edit()
    {
      $majors = Major::all();
      $student = User::with('student')->find(Auth::user()->id)->student;
      if ($student) {
        return view('mahasiswa.data_diri_edit', compact('majors','student'));
      }
    }

    public function update(StudentRequest $request)
    {
        $user = Auth::user();
        $user->student->update($request->validated());
        if ($user) {
          return redirect('student/profile');
        }
        return redirect()->back();
    }
}
