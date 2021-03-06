<?php

namespace App\Http\Middleware;

use Closure;

class EmailVerifieldMiddleware
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
        // return $next($request);
        $user = auth()->user();
        // if($user->password != null && $user->email_verified_at != null){
        if($user->email_verified_at != null){
            return $next($request);
        }

        return response()->json([
            'message'=> 'Email Anda Belum Tervcerifikasi'
        ]);
    }
}