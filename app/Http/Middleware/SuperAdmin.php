<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Auth;

class SuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::check()){
        return redirect('/');
        }
        
        $user = Auth::user();
        if($user->user_type=="Super Admin"){
        return $next($request);
        }

        if($user->user_type=="Payroll Head"){
            return redirect('/payrollhead');
        }

        if($user->user_type=="Account Supervisor"){
            return redirect('/accountsupervisor');
        }

        if($user->user_type=="Payroll Officer"){
            return redirect('/payrollofficer');
        }

        if($user->user_type=="User"){
            return redirect('/merchandisermenu');
        }
       
        
     
        
    }
}
