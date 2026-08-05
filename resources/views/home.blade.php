@extends('layouts.app')

@section('content')
<!-- Container dibuat lebih luas dengan max-w-6xl dan padding yang lebih lapang -->
<div class="relative min-h-[88vh] flex flex-col justify-center overflow-hidden py-16 px-4 sm:px-8 font-sans">

    <!-- 1. Grid Pattern Overlay (Lebih Luas & Kontras) -->
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#3f3f4625_1px,transparent_1px),linear-gradient(to_bottom,#3f3f4625_1px,transparent_1px)] bg-[size:5rem_5rem] [mask-image:radial-gradient(ellipse_80%_60%_at_50%_50%,#000_70%,transparent_100%)] pointer-events-none -z-10"></div>

    <!-- 2. Ambient Glow Orbs (Efek Cahaya Membentang Lebih Lebar) -->
    <div class="absolute top-1/4 -left-32 w-[600px] h-[600px] bg-emerald-500/20 rounded-full blur-[130px] pointer-events-none -z-10 animate-pulse" style="animation-duration: 7s;"></div>
    <div class="absolute bottom-0 -right-32 w-[550px] h-[550px] bg-teal-400/15 rounded-full blur-[140px] pointer-events-none -z-10"></div>

    <!-- Main Content Container (Diubah dari max-w-4xl menjadi max-w-6xl) -->
    <div class="max-w-6xl mx-auto w-full space-y-24 relative z-10">

        <!-- Hero Section -->
        <section class="space-y-10">
            
            <!-- Headline Utama -->
            <div class="space-y-4">
                <h1 class="text-6xl sm:text-8xl font-extrabold tracking-tight text-white leading-none drop-shadow-md">
                    Muh Zacky Zayyan<span class="text-emerald-400 drop-shadow-[0_0_30px_rgba(52,211,153,0.8)]">.</span>
                </h1>
                <p class="text-2xl sm:text-3xl text-zinc-300 font-light tracking-wide">
                    Front-End Developer <span class="text-emerald-500 font-normal">&amp;</span> Photographer
                </p>
            </div>

            <!-- Short Subtitle -->
            <p class="text-lg sm:text-xl text-zinc-300 font-light leading-relaxed max-w-2xl">
                Siswa SMK Telkom Makassar yang memadukan presisi kode dengan seni visual fotografi.
            </p>

            <!-- CTA Links -->
            <div class="pt-4 flex items-center gap-6 text-base font-semibold">
                <a href="{{ route('projects') }}" class="group px-8 py-4 bg-white hover:bg-emerald-400 hover:text-black text-black rounded-full transition-all duration-300 flex items-center gap-3 shadow-[0_0_25px_rgba(255,255,255,0.25)] hover:shadow-[0_0_35px_rgba(52,211,153,0.6)]">
                    <span>Lihat Karya</span>
                    <span class="inline-block transition-transform duration-300 group-hover:translate-x-1.5">→</span>
                </a>
                <a href="{{ route('profile') }}" class="px-8 py-4 text-zinc-300 hover:text-white transition-colors duration-200 border border-zinc-700/80 hover:border-emerald-500/60 bg-zinc-950/70 backdrop-blur-xl rounded-full shadow-lg">
                    Tentang Saya
                </a>
            </div>
        </section>

        <!-- Cards Section (Grid Lebih Luas & Lapang) -->
        <section class="grid sm:grid-cols-2 gap-8 pt-12 border-t border-zinc-800/80">
            
            <!-- Front-End -->
            <div class="group p-8 sm:p-10 rounded-3xl bg-zinc-950/60 backdrop-blur-xl border border-zinc-800/90 hover:border-emerald-500/60 hover:shadow-[0_0_40px_rgba(16,185,129,0.18)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <span class="text-xs sm:text-sm font-mono text-emerald-400 tracking-widest uppercase font-bold">01 / Development</span>
                        <span class="text-emerald-400 text-xl group-hover:scale-125 transition-transform duration-300">⚡</span>
                    </div>
                    <h2 class="text-xl sm:text-2xl font-bold text-white mb-3 group-hover:text-emerald-400 transition-colors duration-300">
                        Front-End Engineering
                    </h2>
                    <p class="text-sm sm:text-base text-zinc-400 leading-relaxed font-light">
                        Membangun web modern, cepat, dan responsif menggunakan Laravel, JavaScript, &amp; React.js.
                    </p>
                </div>
            </div>

            <!-- Photography -->
            <div class="group p-8 sm:p-10 rounded-3xl bg-zinc-950/60 backdrop-blur-xl border border-zinc-800/90 hover:border-emerald-500/60 hover:shadow-[0_0_40px_rgba(16,185,129,0.18)] transition-all duration-300 flex flex-col justify-between min-h-[220px]">
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <span class="text-xs sm:text-sm font-mono text-emerald-400 tracking-widest uppercase font-bold">02 / Photography</span>
                        <span class="text-emerald-400 text-xl group-hover:scale-125 transition-transform duration-300">📷</span>
                    </div>
                    <h2 class="text-xl sm:text-2xl font-bold text-white mb-3 group-hover:text-emerald-400 transition-colors duration-300">
                        Visual &amp; Framing
                    </h2>
                    <p class="text-sm sm:text-base text-zinc-400 leading-relaxed font-light">
                        Mengabadikan momen berharga melalui sudut pandang presisi dan pencahayaan estetik.
                    </p>
                </div>
            </div>

        </section>

    </div>
</div>
@endsection