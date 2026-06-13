<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin')</title>
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100 min-h-screen">
    <div id="app" class="flex">
        @include('admin.components.sidebar')
        <div class="flex-1 min-h-screen">
            @include('admin.components.navbar')
            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var btn = document.getElementById('sidebarToggle');
            var sb = document.getElementById('sidebar');
            if (btn && sb) {
                btn.addEventListener('click', function () {
                    sb.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>
</html>
