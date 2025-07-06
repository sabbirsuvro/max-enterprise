<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class CheckType
{

    public function handle($request, Closure $next, ...$types)
    {
        $user = Auth::user();

        if (!$user || !in_array($user->type, $types)) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
