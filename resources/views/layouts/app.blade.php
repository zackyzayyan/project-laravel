<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - Muhammad Zacky Zayyan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-gray-100 font-sans flex flex-col min-h-screen antialiased">

    <!-- Navbar -->
    <header class="bg-black/90 backdrop-blur-md border-b border-emerald-950 sticky top-0 z-50">
        <div class="max-w-5xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="font-extrabold text-xl tracking-tight text-emerald-500 hover:text-emerald-400 transition">
                PORTOFOLIO
            </a>
            <nav class="flex items-center space-x-1 sm:space-x-4">
                <a href="{{ route('home') }}" class="px-3 py-2 rounded-lg text-sm font-medium transition {{ request()->routeIs('home') ? 'bg-emerald-950 text-emerald-500 border border-emerald-900' : 'text-gray-400 hover:text-white hover:bg-zinc-900' }}">
                    Beranda
                </a>
                <a href="{{ route('profile') }}" class="px-3 py-2 rounded-lg text-sm font-medium transition {{ request()->routeIs('profile') ? 'bg-emerald-950 text-emerald-500 border border-emerald-900' : 'text-gray-400 hover:text-white hover:bg-zinc-900' }}">
                    Profil
                </a>
                <a href="{{ route('projects') }}" class="px-3 py-2 rounded-lg text-sm font-medium transition {{ request()->routeIs('projects') ? 'bg-emerald-950 text-emerald-500 border border-emerald-900' : 'text-gray-400 hover:text-white hover:bg-zinc-900' }}">
                    Proyek
                </a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow max-w-5xl w-full mx-auto px-6 py-10">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-black border-t border-emerald-950 text-center py-6 text-sm text-gray-500">
        © {{ date('Y') }} <span class="text-emerald-600 font-medium">Muhammad Zacky Zayyan</span>. Built with Laravel 
    </footer>
    

</body>
</html>