<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LandingController extends Controller
{
    public function login()
    {
      if(Auth::check()){
        $user = Auth::user();

        if($user->user_type=="User"){
          return redirect('/merchandisermenu');
        }

      }else{
      return view('auth.login');
      }
    }

    public function home(){

      if(Auth::check()){
        $user = Auth::user();

        if($user->user_type=="User"){
          return redirect('/merchandisermenu');
        }

      }else{
        return view('landing.Home');
      }
     
    }


}
