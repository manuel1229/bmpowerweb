<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function login()
    {
      return view('auth.login');
    }


}
