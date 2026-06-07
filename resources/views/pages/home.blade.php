@extends('layouts.app')

@section('title', 'Medicenter | Home')

@section('content')
    <section class="hero">
        <div>
            <p class="eyebrow">Clinica medica</p>
            <h1>Cuidado simples, humano e organizado.</h1>
            <p class="lead">
                A Medicenter oferece atendimento medico ficticio com foco em clareza, conforto e facil acesso aos servicos.
            </p>
            <div class="actions">
                <a class="button primary" href="{{ route('appointments.create') }}">Agendar consulta</a>
                <a class="button secondary" href="{{ route('specialties') }}">Ver especialidades</a>
            </div>
        </div>
    </section>

    <section class="grid">
        <article class="card">
            <h2>Atendimento organizado</h2>
            <p>Formulario simples para registrar pedidos de consulta no banco SQLite.</p>
        </article>
        <article class="card">
            <h2>Equipe ficticia</h2>
            <p>Medicos e especialidades pensados para uma apresentacao escolar clara.</p>
        </article>
        <article class="card">
            <h2>Tema claro e escuro</h2>
            <p>Interface responsiva com preferencia salva no navegador.</p>
        </article>
    </section>
@endsection
