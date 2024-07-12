<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            // Si l'utilisateur est authentifié et l'URL est vide, redirige vers l'accueil
            if ($request->is('/') || $request->is('home')) {
                return redirect('/home'); // Remplacez '/home' par votre URL d'accueil
            }
            // Sinon, redirige vers la page par défaut (généralement '/home' ou '/dashboard')
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
