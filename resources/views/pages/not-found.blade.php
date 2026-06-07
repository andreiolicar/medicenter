@extends('layouts.app')

@section('title', 'Medicenter | Pagina nao encontrada')

@section('content')
    <section class="page-section center">
        <p class="eyebrow">404</p>
        <h1>Pagina nao encontrada.</h1>
        <p class="lead">A rota acessada nao existe no site Medicenter.</p>
        <div class="actions center-actions">
            <a class="button primary" href="{{ route('home') }}">Voltar para home</a>
        </div>
    </section>
@endsection
