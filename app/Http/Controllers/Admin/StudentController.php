<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
      $users = User::whereRole('student')->get();
      return $users;
    }
}
