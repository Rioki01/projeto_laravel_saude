<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CheckAccessMiddleware

{
    public function handle(Request $request, Closure $next)
    {
        $isAuthenticated = (Auth::check());
        if (!$isAuthenticated) {
    //  Se o usuário não estiver autenticado, redireciona para a página de login
        return redirect()->route('site.index')->with('error', 'Por favor, faça login para acessar esta página.');
    }
    // Se o usuário estiver autenticado, permite que a solicitação prossiga
    return $next($request);
    }
}


