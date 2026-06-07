@extends('layouts.app')

@section('title', 'Medicenter | Especialidades')

@section('content')
    <section class="page-section">
        <p class="eyebrow">Especialidades</p>
        <h1>Areas de atendimento.</h1>
        <p class="lead">Escolha uma especialidade no formulario de agendamento conforme a necessidade do paciente.</p>
    </section>

    <section class="grid">
        <article class="card">
            <h2>Clinica geral</h2>
            <p>Avaliacao inicial, orientacoes e acompanhamento de rotina.</p>
        </article>
        <article class="card">
            <h2>Cardiologia</h2>
            <p>Atendimento voltado a saude do coracao e acompanhamento preventivo.</p>
        </article>
        <article class="card">
            <h2>Pediatria</h2>
            <p>Cuidado medico para criancas e adolescentes.</p>
        </article>
        <article class="card">
            <h2>Dermatologia</h2>
            <p>Avaliacao de pele, cabelos e unhas.</p>
        </article>
    </section>
@endsection
