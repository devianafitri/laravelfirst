<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exController extends Controller
{
    public function beritaKSI()
    {
        return view('ex.beritaKSI');
    }
    public function profileKelulusanKSI()
    {
        return view('ex.profileKelulusanKSI');
    }
    public function profileDosen()
    {
        return view('ex.profileDosen');
    }
    public function home()
    {
        return view('ex.home');
    }

}