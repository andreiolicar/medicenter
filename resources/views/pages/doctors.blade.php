@extends('layouts.app')

@section('title', 'Medicenter | Medicos')

@section('content')
    <section class="page-section">
        <p class="eyebrow">Equipe medica</p>
        <h1>Profissionais ficticios da Medicenter.</h1>
        <p class="lead">Esta pagina apresenta exemplos de medicos para compor o tema de clinica medica.</p>
    </section>

    <section class="grid">
        <article class="card">
            <h2>Dra. Ana Martins</h2>
            <p>Clinica geral</p>
        </article>
        <article class="card">
            <h2>Dr. Rafael Costa</h2>
            <p>Cardiologia</p>
        </article>
        <article class="card">
            <h2>Dra. Beatriz Lima</h2>
            <p>Pediatria</p>
        </article>
        <article class="card">
            <h2>Dr. Lucas Ferreira</h2>
            <p>Dermatologia</p>
        </article>
    </section>
@endsection
