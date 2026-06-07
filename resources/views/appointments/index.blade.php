@extends('layouts.app')

@section('title', 'Medicenter | Agendamentos')

@section('content')
    <section class="page-section">
        <p class="eyebrow">Agendamentos</p>
        <h1>Registros salvos.</h1>
        <p class="lead">Lista de pedidos de consulta cadastrados no banco SQLite.</p>
    </section>

    <section class="table-card">
        @if ($appointments->isEmpty())
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
                        @foreach ($appointments as $appointment)
                            <tr>
                                <td>{{ $appointment->patient_name }}</td>
                                <td>{{ $appointment->phone }}</td>
                                <td>{{ $appointment->specialty }}</td>
                                <td>{{ $appointment->preferred_date->format('d/m/Y') }}</td>
                                <td>
                                    <span class="status">{{ $appointment->status }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </section>
@endsection
