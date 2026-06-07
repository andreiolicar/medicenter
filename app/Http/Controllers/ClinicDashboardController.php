<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Contracts\View\View;

class ClinicDashboardController extends Controller
{
    public function index(): View
    {
        $totalAppointments = Appointment::count();
        $pendingAppointments = Appointment::where('status', 'pendente')->count();
        $latestAppointment = Appointment::latest()->first();
        $recentAppointments = Appointment::latest()->limit(5)->get();

        return view('clinic.dashboard', [
            'totalAppointments' => $totalAppointments,
            'pendingAppointments' => $pendingAppointments,
            'latestAppointment' => $latestAppointment,
            'recentAppointments' => $recentAppointments,
        ]);
    }

    public function appointments(): View
    {
        $appointments = Appointment::latest()->get();

        return view('clinic.appointments', [
            'appointments' => $appointments,
        ]);
    }
}
