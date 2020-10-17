<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Teacher;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function index()
    {
      return view('mahasiswa.data_pkm');
    }

    public function create()
    {
      $teachers = Teacher::all();
      return view('mahasiswa.data_pkm_create', compact('teachers'));
    }

}
