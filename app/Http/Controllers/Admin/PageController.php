<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dasbor(Request $request)
    {
        return view('admin.dasbor');
    }
}
