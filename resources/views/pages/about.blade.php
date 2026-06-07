@extends('layouts.app')

@section('title', 'Medicenter | Sobre')

@section('content')
    <section class="page-section">
        <p class="eyebrow">Sobre a clinica</p>
        <h1>Uma clinica ficticia criada para demonstrar Laravel.</h1>
        <p class="lead">
            A Medicenter e um projeto academico da disciplina PW II. O site apresenta paginas institucionais,
            especialidades, medicos e um fluxo basico de agendamento com persistencia em SQLite.
        </p>
    </section>

    <section class="grid two-columns">
        <article class="card">
            <h2>Missao</h2>
            <p>Apresentar uma experiencia simples para pacientes conhecerem a clinica e solicitarem atendimento.</p>
        </article>
        <article class="card">
            <h2>Organizacao</h2>
            <p>Separacao entre rotas, controllers, models, migrations e views Blade.</p>
        </article>
    </section>
@endsection
