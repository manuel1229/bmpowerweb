<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Middlware\SuperAdmin;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function viewsuperadmin(){

            return view('superadmin.superadmin', compact('data'));
        }
}
