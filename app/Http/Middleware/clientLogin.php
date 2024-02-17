<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class clientLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $session_user = session()->get('user');
        $session_token = session()->get('token');
        $user = User::where('phone' , "$session_user")->where('remember_token' , "$session_token")->get();
        if(count($user) == 0){
            return redirect('/login');
        }
        return $next($request);
    }
}
