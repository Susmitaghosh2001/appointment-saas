<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.jsdelivr.net/npm/@heroicons/vue@2.0.18/24/outline/index.min.js"></script>
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-lg hidden md:block">

        <div class="p-6 border-b">
            <h1 class="text-2xl font-bold text-indigo-600">
                AppointPro
            </h1>
        </div>

        <nav class="mt-6">

            <a href="#"
               class="flex items-center px-6 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">

                <span>Dashboard</span>
            </a>

            <a href="#"
               class="flex items-center px-6 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">

                <span>Businesses</span>
            </a>

            <a href="#"
               class="flex items-center px-6 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">

                <span>Services</span>
            </a>

            <a href="#"
               class="flex items-center px-6 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">

                <span>Appointments</span>
            </a>

            <a href="#"
               class="flex items-center px-6 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">

                <span>Payments</span>
            </a>

            <a href="#"
               class="flex items-center px-6 py-3 text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition">

                <span>Notifications</span>
            </a>

            <a href="#"
               class="flex items-center px-6 py-3 text-red-500 hover:bg-red-50 transition">

                <span>Logout</span>
            </a>

        </nav>

    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">

        <!-- Top Navbar -->
        <header class="bg-white shadow-sm">

            <div class="flex justify-between items-center px-8 py-4">

                <div>
                    <h2 class="text-2xl font-bold text-gray-800">
                        Dashboard
                    </h2>
                </div>

                <div class="flex items-center gap-4">

                    <!-- Search -->
                    <input type="text"
                           placeholder="Search..."
                           class="border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">

                    <!-- Notification -->
                    <button class="relative">

                        <span class="text-2xl">
                            🔔
                        </span>

                        <span class="absolute -top-1 -right-2 bg-red-500 text-white text-xs rounded-full px-1">
                            3
                        </span>

                    </button>

                    <!-- Profile -->
                    <div class="flex items-center gap-2">

                        <img src="https://ui-avatars.com/api/?name=Admin"
                             class="w-10 h-10 rounded-full">

                        <div>
                            <h4 class="font-semibold">
                                Admin
                            </h4>

                            <p class="text-sm text-gray-500">
                                Administrator
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </header>

        <!-- Page Content -->
        <main class="p-8">

            @yield('content')

        </main>

    </div>

</div>

</body>
</html>