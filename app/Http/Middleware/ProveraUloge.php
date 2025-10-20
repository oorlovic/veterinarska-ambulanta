<?php
namespace App\Http\Middleware;
use Closure;

class ProveraUloge {
    public function handle($request, Closure $next, ...$uloge) {
        if (!auth()->check() || !in_array(auth()->user()->uloga, $uloge)) {
            abort(403, 'Nemate pristup ovoj stranici.');
        }
        return $next($request);
    }
}
