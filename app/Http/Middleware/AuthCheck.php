<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //to prevent users from access to any pages without login
        if(!session()->has('loggedUser') && ($request->path() !=='login' && $request->path() !=='register')){
            return redirect('login')
            ->with('error','sorry you can`t access in this page without login');
        }
        if(session()->has('loggedUser') && ($request->path() == 'login' || $request->path() =='register')){
            return back();
        }
        return $next($request);
    }
}
