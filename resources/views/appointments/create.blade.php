@extends('layouts.app')

@section('title', 'Medicenter | Agendamento')

@section('content')
    <section class="page-section">
        <p class="eyebrow">Agendamento</p>
        <h1>Solicite uma consulta.</h1>
        <p class="lead">Preencha os dados abaixo para salvar o pedido de agendamento no banco SQLite.</p>
    </section>

    @if (session('success'))
        <div class="alert success">
            {{ session('success') }}
        </div>
    @endif

    <form class="form-card" action="{{ route('appointments.store') }}" method="POST">
        @csrf

        <div class="form-grid">
            <div class="form-field">
                <label for="patient_name">Nome do paciente</label>
                <input type="text" id="patient_name" name="patient_name" value="{{ old('patient_name') }}">
                @error('patient_name')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-field">
                <label for="phone">Telefone</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
                @error('phone')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-field">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-field">
                <label for="specialty">Especialidade</label>
                <select id="specialty" name="specialty">
                    <option value="">Selecione</option>
                    <option value="Clinica geral" @selected(old('specialty') === 'Clinica geral')>Clinica geral</option>
                    <option value="Cardiologia" @selected(old('specialty') === 'Cardiologia')>Cardiologia</option>
                    <option value="Pediatria" @selected(old('specialty') === 'Pediatria')>Pediatria</option>
                    <option value="Dermatologia" @selected(old('specialty') === 'Dermatologia')>Dermatologia</option>
                </select>
                @error('specialty')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-field">
                <label for="preferred_date">Data preferida</label>
                <input type="date" id="preferred_date" name="preferred_date" value="{{ old('preferred_date') }}">
                @error('preferred_date')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="form-field">
            <label for="message">Mensagem/observacoes</label>
            <textarea id="message" name="message" rows="5">{{ old('message') }}</textarea>
            @error('message')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <button class="button primary" type="submit">Salvar agendamento</button>
    </form>
@endsection
