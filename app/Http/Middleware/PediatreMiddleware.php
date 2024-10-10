<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class PediatreMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Vérifie si l'utilisateur est connecté et si c'est un pédiatre (type_profil_id = 1)
        if (Auth::user() && Auth::user()->type_profil_id == 1) {
            return $next($request);
        }

        // Redirige sur la page du tableau de bord lui indiquant qu'il n'a pas accès
        return redirect()->route('dashboard')->with('error', 'Accès interdit. Vous devez être un pédiatre pour accéder à cette page.');
    }
}
