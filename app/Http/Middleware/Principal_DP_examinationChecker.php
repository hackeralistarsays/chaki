<?php

namespace App\Http\Middleware;

use Closure;

class Principal_DP_examinationChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->session()->get('username') == null){
            return redirect('/');
        }

        if($request->session()->get('is_principal') || $request->session()->get('is_admin') || $request->session()->get('is_deputy_principal') || $request->session()->get('is_in_examination_and_student_admission') || $request->session()->get('is_parent')){
            return $next($request);
        } else{
            return redirect('/');
        }
    }
}
