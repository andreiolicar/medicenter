<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ClinicAuthController extends Controller
{
    public function showLogin(): View|RedirectResponse
    {
        if (session('clinic_authenticated') === true) {
            return redirect()->route('clinic.dashboard');
        }

        return view('clinic.login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        // autenticacao simples da clinica usando credenciais locais do .env
        $validEmail = hash_equals((string) config('clinic.email'), $credentials['email']);
        $validPassword = hash_equals((string) config('clinic.password'), $credentials['password']);

        if (! $validEmail || ! $validPassword) {
            return back()
                ->withErrors(['email' => 'Credenciais invalidas.'])
                ->onlyInput('email');
        }

        $request->session()->regenerate();
        $request->session()->put('clinic_authenticated', true);

        return redirect()->route('clinic.dashboard');
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->forget('clinic_authenticated');
        $request->session()->regenerateToken();

        return redirect()
            ->route('clinic.login')
            ->with('success', 'Sessao encerrada com sucesso.');
    }
}
