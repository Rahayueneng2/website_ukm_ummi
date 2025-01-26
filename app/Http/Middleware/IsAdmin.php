<?php

namespace App\Http\Middleware;
// app/Http/Middleware/IsAdmin.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah pengguna telah login
        if (!auth()->check()) {
            abort(403, 'Unauthorized. Please login.');
        }

        // Periksa apakah pengguna memiliki role_id 1 (admin)
        if (auth()->user()->role_id !== 1) {
            abort(403, 'Access denied. Admins only.');
        }

        // Lanjutkan ke request berikutnya jika lolos pemeriksaan
        return $next($request);
    }
}

