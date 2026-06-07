@extends('layouts.app')

@section('title', 'Medicenter | Dashboard da Clinica')

@section('content')
    <section class="page-section dashboard-header">
        <div>
            <p class="eyebrow">Dashboard</p>
            <h1>Area da clinica.</h1>
            <p class="lead">Resumo dos agendamentos recebidos pelo site Medicenter.</p>
        </div>

        <form action="{{ route('clinic.logout') }}" method="POST">
            @csrf
            <button class="button secondary" type="submit">Sair</button>
        </form>
    </section>

    <section class="stats-grid">
        <article class="stat-card">
            <span>Total de agendamentos</span>
            <strong>{{ $totalAppointments }}</strong>
        </article>

        <article class="stat-card">
            <span>Agendamentos pendentes</span>
            <strong>{{ $pendingAppointments }}</strong>
        </article>

        <article class="stat-card">
            <span>Ultimo agendamento</span>
            <strong>{{ $latestAppointment?->patient_name ?? 'Nenhum' }}</strong>
        </article>

        <article class="stat-card action-stat">
            <span>Lista completa</span>
            <a class="button primary" href="{{ route('clinic.appointments') }}">Ver agendamentos</a>
        </article>
    </section>

    <section class="table-card dashboard-list">
        <div class="section-heading">
            <div>
                <p class="eyebrow">Recentes</p>
                <h2>Ultimos agendamentos cadastrados</h2>
            </div>
        </div>

        @if ($recentAppointments->isEmpty())
            <p class="empty-state">Nenhum agendamento cadastrado ainda.</p>
        @else
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Especialidade</th>
                            <th>Data preferida</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recentAppointments as $appointment)
                            <tr>
                                <td>{{ $appointment->patient_name }}</td>
                                <td>{{ $appointment->phone }}</td>
                                <td>{{ $appointment->specialty }}</td>
                                <td>{{ $appointment->preferred_date->format('d/m/Y') }}</td>
                                <td><span class="status">{{ $appointment->status }}</span></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </section>
@endsection
