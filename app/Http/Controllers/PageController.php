<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function specialties(): View
    {
        return view('pages.specialties');
    }

    public function doctors(): View
    {
        return view('pages.doctors');
    }

    public function notFound(): Response
    {
        return response()->view('pages.not-found', [], 404);
    }
}
