<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - Muhammad Zacky Zayyan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100 flex flex-col min-h-screen">

    <!-- Navbar -->
    <nav class="bg-gray-800 border-b border-gray-700">
        <div class="max-w-4xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="font-bold text-xl text-indigo-400">Zacky.dev</a>
            <div class="space-x-4">
                <a href="{{ route('home') }}" class="hover:text-indigo-400 font-medium">Tentang</a>
                <a href="{{ route('projects') }}" class="hover:text-indigo-400 font-medium">Proyek</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="flex-grow max-w-4xl w-full mx-auto p-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 border-t border-gray-700 text-center py-4 text-sm text-gray-400">
        © {{ date('Y') }} Muhammad Zacky Zayyan. All rights reserved.
    </footer>

</body>
</html>