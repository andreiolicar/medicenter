@extends('layouts.app')

@section('title', 'Medicenter | Login da Clinica')

@section('content')
    <section class="auth-section">
        <div class="auth-card">
            <p class="eyebrow">Area da clinica</p>
            <h1>Entrar</h1>
            <p class="lead">Acesse a area protegida para acompanhar os agendamentos recebidos.</p>

            @if (session('success'))
                <div class="alert success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert danger">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('clinic.authenticate') }}" method="POST">
                @csrf

                <div class="form-field">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" autocomplete="username">
                    @error('email')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-field">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" autocomplete="current-password">
                    @error('password')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <button class="button primary full-width" type="submit">Acessar dashboard</button>
            </form>
        </div>
    </section>
@endsection
