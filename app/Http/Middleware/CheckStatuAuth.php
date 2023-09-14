<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use RealRashid\SweetAlert\Facades\Alert;
class CheckStatuAuth
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

        // Check if the user is authenticated
        if (Auth::check()) {
            $user = Auth::user();

            // Check the user's status
            if ($user->status === "Draft") {
                Auth::logout();
                return redirect('/')->with(['info' => 'Sorry! Your account has not been activated']);
            }
        }

        return $next($request);



    }
}
