<?php

namespace App\Http\Controllers\Merchandiser;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\LoginController;
use App\Models\User;
use App\Http\Middleware\Merchandiser;
use Illuminate\Http\Request;

use Session;

class MerchandiserMenuController extends Controller
{
    public function viewmerchandisermenu(){
    $data = array();
        if (Session::has('current_user_id')){
            $data = User::where('id', '=', Session::get('current_user_id'))->first();
        }
        return view('merchandiser.merchandisermenu', compact('data'));
    }
}
