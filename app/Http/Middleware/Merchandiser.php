<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

use Auth;

class Merchandiser
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
            
            if($user->user_type=="User"){
            return $next($request);
            }

            if($user->user_type=="Super Admin"){
                return redirect('/admin');
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
    }
}
