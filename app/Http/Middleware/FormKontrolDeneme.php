<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FormKontrolDeneme
{

    public function handle(Request $request, Closure $next): Response
    {
        if ($request->deneme == 'armut') {
            return redirect()->back();
        }
        return $next($request);
    }
}
