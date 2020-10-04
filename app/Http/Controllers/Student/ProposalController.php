<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function index()
    {
      return view('mahasiswa.data_pkm');
    }
}
