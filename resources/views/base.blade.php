<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>@yield('title', 'Page d\'Accueil - VaxGuard')</title>
    <title>@yield('title', 'Page de connexion - VaxGuard')</title>
    <title>@yield('title', 'Tableau de bord pediatre - VaxGuard')</title>

</head>
<body>
    @include('components.header')

    <main>
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>