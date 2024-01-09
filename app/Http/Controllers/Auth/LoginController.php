<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\Models\User;

use Session;
use Auth;

class LoginController extends Controller
{
    //

    // public function loq()
    // {
    //     return view('landing.login');
    // }

    public function registration()
    {
      return view('auth.registration');
    }

    protected function check(Request $request){


        $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
        ]);

        if(Auth::attempt($credentials))

        {
            $user_role = Auth::user()->user_type;
            if($user_role == "User"){
                $user = User::where('email' , '=' , $request->email) ->first();

                $request->session()->put('current_user_id', $user->id);

                return redirect(route('merchandiser.viewmerchandisermenu'));
            }else{
            return "<h2>Invalid User Type</h2>";
            }
        }else{
        return "<h2>Invalid Email or Password</h2>";
        }
    }

    function logout(){
        Session::flush();
        Auth:logout();
        return redirect(route('login'));
    }


}
