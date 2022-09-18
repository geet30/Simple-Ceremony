<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{User};
class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {

        // if (Auth::guard($guards)->check()) {
        //     if (Auth::user()->roles->first()->name == 'Admin') {
        //         return redirect('/locations/all-requests');
        //     }else{
        //         return redirect('/');
        //     }
        // }

        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            
            if (Auth::guard($guard)->check()) {
                if (Auth::user()->roles->first()->name == 'Admin') {
                    return redirect('/locations/all-requests');
                }else if (Auth::user()->roles->first()->name == 'Partner') {
                    return redirect('add-ons');
                }
                else if (Auth::user()->roles->first()->name == 'User') {
                    return redirect('user/overview');
                }
                else if (Auth::user()->roles->first()->name == 'Celebrant') {
                    return redirect('upcoming/all-records-tab');
                }
                else{
                    return redirect('/');
                }
                // return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
