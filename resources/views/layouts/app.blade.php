<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>

    <div class="fl-app">

        <x-sidebar />

        <main class="fl-app-screen">
            @yield('content')
        </main>
        <!-- /.app-main -->

    </div>

    <script>
        function copyToClipboard(button, text) {
            navigator.clipboard.writeText(text)
                .then(() => {
                    button.innerHTML = '<i class="bi bi-check-lg"></i> Copiato';
                    button.disabled = true;
                    button.classList.add('success');
                    setTimeout(() => {
                        button.innerHTML = '<i class="bi bi-clipboard"></i> Copia';
                        button.disabled = false;
                        button.classList.remove('success');
                    }, 2000);
                })
                .catch(err => {
                    console.error('Errore durante la copia del prompt: ', err);
                });
        }
    </script>
</body>

</html>