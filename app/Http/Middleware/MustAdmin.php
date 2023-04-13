<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Finder\Exception\AccessDeniedException;

class MustAdmin
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
//        if(Auth::user()->id_status != 1 && Auth::user()->id_status != 4  ){
//            abort(404);
//        }
        if(Auth::user()->id_status !=1  ){
            session()->flash('error', 'Anda tidak memiliki akses.');
            return redirect()->back();
        }else{
            session()->flash('success', 'Anda telah berhasil masuk.');
//            return redirect()->route('dashboard');
        }
//        if(Auth::user()->id_status != 1 && Auth::user()->id_status != 4  ){
//            throw new AccessDeniedException('Anda tidak memiliki akses untuk mengakses halaman ini.');
//        }
//        dd(Auth::user());

        return $next($request);
    }
}
