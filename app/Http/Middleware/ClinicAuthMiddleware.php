<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ClinicAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // verifica se a area da clinica foi autenticada na sessao
        if ($request->session()->get('clinic_authenticated') !== true) {
            return redirect()
                ->route('clinic.login')
                ->with('error', 'Acesse a area da clinica para continuar.');
        }

        return $next($request);
    }
}
