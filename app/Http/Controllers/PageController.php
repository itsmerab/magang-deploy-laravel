<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function belajarForm(Request $request)
  {  
    return view('belajar-form');
  }
  public function belajarProsesForm(Request $request)
  {
    // validasi
    $validasi = $request->validate([
      'nama'      => 'required',
      'panggilan' => 'required|min:3',
    ]);

    // tampilan hasil, atau bisa juga tampilan view
    return "Hallo {$request->panggilan} ({$request->nama})";
  }
}