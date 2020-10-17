<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PeriodRequest;
use App\Period;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    public function index()
    {
      $periods = Period::all();
      return view('admin.period', compact('periods'));
    }

    public function store(PeriodRequest $request)
    {
      $period = Period::create($request->validated());
      if ($period) {
        return redirect('admin/period');
      }
      return redirect()->back();
    }

    public function edit($id)
    {
      $period = Period::findOrFail($id);
      return view('admin.period_edit', compact('period'));
    }

    public function update(PeriodRequest $request)
    {
      $period = Period::whereId($request->id)->update($request->validated());
      if ($period) {
        return redirect('admin/period');
      }
      return redirect()->back();
    }
}
