@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto space-y-16 py-10 font-sans relative">

    <!-- Ambient Glow Latar Belakang (Sangat Halus & Elegan) -->
    <div class="absolute -top-10 left-1/2 -translate-x-1/2 w-96 h-48 bg-emerald-500/5 blur-[120px] pointer-events-none rounded-full"></div>

    <!-- Hero Section -->
    <section class="space-y-8 relative z-10">
        
        <!-- Headline Utama -->
        <div class="space-y-2">
            <h1 class="text-5xl sm:text-7xl font-extrabold tracking-tight text-white leading-none">
                Muhammad Zacky<span class="text-emerald-500">.</span>
            </h1>
            <p class="text-xl sm:text-2xl text-zinc-400 font-light tracking-wide">
                Front-End Developer <span class="text-zinc-600 font-normal">&amp;</span> Photographer
            </p>
        </div>

        <!-- Short Subtitle -->
        <p class="text-base sm:text-lg text-zinc-400 font-light leading-relaxed max-w-lg">
            Siswa SMK Telkom Makassar yang memadukan presisi kode dengan seni visual fotografi.
        </p>

        <!-- CTA Links -->
        <div class="pt-2 flex items-center gap-5 text-sm font-semibold">
            <a href="{{ route('projects') }}" class="group px-6 py-3 bg-white hover:bg-zinc-200 text-black rounded-full transition-all duration-300 flex items-center gap-2 shadow-lg shadow-white/5">
                <span>Lihat Karya</span>
                <span class="inline-block transition-transform duration-300 group-hover:translate-x-1">→</span>
            </a>
            <a href="{{ route('profile') }}" class="px-6 py-3 text-zinc-400 hover:text-white transition-colors duration-200 border border-zinc-800 hover:border-zinc-700 rounded-full">
                Tentang Saya
            </a>
        </div>
    </section>

    <!-- Cards Section (Minimalist Grid) -->
    <section class="grid sm:grid-cols-2 gap-5 pt-8 border-t border-zinc-800/60 relative z-10">
        
        <!-- Front-End -->
        <div class="group p-6 rounded-2xl bg-zinc-900/30 border border-zinc-800/80 hover:border-emerald-500/40 hover:bg-zinc-900/60 transition-all duration-300 flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between mb-4">
                    <span class="text-xs font-mono text-emerald-500/80 tracking-widest uppercase">01 / Development</span>
                    <span class="text-zinc-600 group-hover:text-emerald-400 transition-colors duration-300">⚡</span>
                </div>
                <h2 class="text-lg font-bold text-white mb-2 group-hover:text-emerald-400 transition-colors duration-300">
                    Front-End Engineering
                </h2>
                <p class="text-xs text-zinc-400 leading-relaxed font-light">
                    Membangun web modern, cepat, dan responsif menggunakan Laravel, JavaScript, &amp; React.js.
                </p>
            </div>
        </div>

        <!-- Photography -->
        <div class="group p-6 rounded-2xl bg-zinc-900/30 border border-zinc-800/80 hover:border-emerald-500/40 hover:bg-zinc-900/60 transition-all duration-300 flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between mb-4">
                    <span class="text-xs font-mono text-emerald-500/80 tracking-widest uppercase">02 / Photography</span>
                    <span class="text-zinc-600 group-hover:text-emerald-400 transition-colors duration-300">📷</span>
                </div>
                <h2 class="text-lg font-bold text-white mb-2 group-hover:text-emerald-400 transition-colors duration-300">
                    Visual &amp; Framing
                </h2>
                <p class="text-xs text-zinc-400 leading-relaxed font-light">
                    Mengabadikan momen berharga melalui sudut pandang presisi dan pencahayaan estetik.
                </p>
            </div>
        </div>

    </section>

</div>
@endsection