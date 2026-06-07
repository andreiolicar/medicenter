<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function create(): View
    {
        return view('appointments.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // valida os dados antes de salvar o agendamento
        $validated = $request->validate([
            'patient_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'email' => ['nullable', 'email', 'max:255'],
            'specialty' => ['required', 'string', 'max:255'],
            'preferred_date' => ['required', 'date'],
            'message' => ['nullable', 'string'],
        ]);

        // salva o agendamento no banco sqlite
        Appointment::create($validated);

        return redirect()
            ->route('appointments.create')
            ->with('success', 'Agendamento cadastrado com sucesso.');
    }

    public function index(): View
    {
        $appointments = Appointment::latest()->get();

        return view('appointments.index', [
            'appointments' => $appointments,
        ]);
    }
}
