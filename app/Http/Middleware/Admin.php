<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->routeIs('kategori.*','gedung.*', 'lantai.*', 'petugas.*')&&Auth::user()->role !== 1 ) {
            abort(403, 'Tidak memiliki akses ke halaman ini');
        }
        
        return $next($request);
    }
}
