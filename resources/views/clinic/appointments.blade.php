@extends('layouts.app')

@section('title', 'Medicenter | Agendamentos da Clinica')

@section('content')
    <section class="page-section dashboard-header">
        <div>
            <p class="eyebrow">Agenda privada</p>
            <h1>Agendamentos recebidos.</h1>
            <p class="lead">Listagem protegida dos pedidos salvos no banco SQLite.</p>
        </div>

        <div class="actions compact-actions">
            <a class="button secondary" href="{{ route('clinic.dashboard') }}">Dashboard</a>
            <form action="{{ route('clinic.logout') }}" method="POST">
                @csrf
                <button class="button secondary" type="submit">Sair</button>
            </form>
        </div>
    </section>

    <section class="table-card">
        @if ($appointments->isEmpty())
            <p class="empty-state">Nenhum agendamento cadastrado ainda.</p>
        @else
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Nome do paciente</th>
                            <th>Telefone</th>
                            <th>E-mail</th>
                            <th>Especialidade</th>
                            <th>Data preferida</th>
                            <th>Status</th>
                            <th>Criado em</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appointments as $appointment)
                            <tr>
                                <td>{{ $appointment->patient_name }}</td>
                                <td>{{ $appointment->phone }}</td>
                                <td>{{ $appointment->email ?? 'Nao informado' }}</td>
                                <td>{{ $appointment->specialty }}</td>
                                <td>{{ $appointment->preferred_date->format('d/m/Y') }}</td>
                                <td><span class="status">{{ $appointment->status }}</span></td>
                                <td>{{ $appointment->created_at->format('d/m/Y H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </section>
@endsection
