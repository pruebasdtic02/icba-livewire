<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Dashboard' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/css/dashboard.css'])
</head>
<body class="font-sans antialiased">
    <div class="flex h-screen bg-gray-100 text-gray-800">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white p-4 space-y-2">
            <h2>Sidebar</h2>
            <nav>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    Dashboard
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    Users
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 hover:text-white">
                    Settings
                </a>
            </nav>
        </div>

        <!-- Main content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <div class="bg-white shadow p-4">
                <h1>{{ $title ?? 'Dashboard' }}</h1>
            </div>

            <!-- Page Content -->
            <main class="p-6 overflow-auto">
                {{ $slot }}
            </main>

            <!-- Footer -->
            <div class="bg-white shadow p-4 mt-auto text-center text-sm text-gray-500">
                <p>&copy; {{ date('Y') }} Your Company</p>
            </div>
        </div>
    </div>
</body>
</html>
