<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Medicenter')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <header class="site-header">
        <nav class="navbar" aria-label="Navegacao principal">
            <a class="brand" href="{{ route('home') }}">Medicenter</a>

            <div class="nav-links">
                <a href="{{ route('home') }}">Inicio</a>
                <a href="{{ route('about') }}">Sobre</a>
                <a href="{{ route('specialties') }}">Especialidades</a>
                <a href="{{ route('doctors') }}">Medicos</a>
                <a href="{{ route('appointments.create') }}">Agendar consulta</a>
                <a href="{{ route('clinic.login') }}">Area da clinica</a>
            </div>

            <button class="theme-toggle" type="button" id="theme-toggle" aria-label="Alternar tema">
                Tema
            </button>
        </nav>
    </header>

    <main class="site-main">
        @yield('content')
    </main>

    <footer class="site-footer">
        <p>Medicenter - Clinica medica ficticia para PW II.</p>
    </footer>

    <script>
        const themeToggle = document.getElementById('theme-toggle');
        const savedTheme = localStorage.getItem('theme') || 'light';

        document.documentElement.setAttribute('data-theme', savedTheme);

        themeToggle.addEventListener('click', () => {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const nextTheme = currentTheme === 'dark' ? 'light' : 'dark';

            document.documentElement.setAttribute('data-theme', nextTheme);
            localStorage.setItem('theme', nextTheme);
        });
    </script>
</body>
</html>
