@extends('layouts.app')

@section('content')
<!-- Full-screen Canvas Wrapper -->
<div class="relative min-h-screen w-full flex flex-col justify-center overflow-x-hidden font-sans py-12">

    <!-- ==================== LATAR BELAKANG FULL SCREEN ==================== -->
    <div class="fixed inset-0 pointer-events-none -z-10 overflow-hidden">
        <!-- 1. Grid Pattern Overlay (Full Window) -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#3f3f4620_1px,transparent_1px),linear-gradient(to_bottom,#3f3f4620_1px,transparent_1px)] bg-[size:5rem_5rem] [mask-image:radial-gradient(ellipse_100%_100%_at_50%_50%,#000_60%,transparent_100%)]"></div>

        <!-- 2. Ambient Glow Orbs -->
        <!-- Glow Emerald Kiri Atas -->
        <div class="absolute -top-32 -left-32 w-[700px] h-[700px] bg-emerald-500/20 rounded-full blur-[160px] animate-pulse" style="animation-duration: 8s;"></div>
        
        <!-- Glow Teal Kanan Bawah -->
        <div class="absolute -bottom-32 -right-32 w-[700px] h-[700px] bg-teal-400/15 rounded-full blur-[160px]"></div>

        <!-- Glow Soft Center Accent -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[400px] bg-emerald-600/10 rounded-full blur-[180px]"></div>
    </div>
    <!-- ==================================================================== -->

    <!-- Main Content Container (Diselaraskan max-w-6xl) -->
    <div class="max-w-6xl mx-auto w-full px-4 sm:px-8 space-y-12 relative z-10">

        <!-- Header Halaman Proyek -->
        <div class="border-b border-zinc-800/80 pb-8">
            <h1 class="text-4xl sm:text-6xl font-black text-white tracking-tight leading-tight">
                Proyek <span class="text-emerald-400 drop-shadow-[0_0_25px_rgba(52,211,153,0.6)]">Saya</span>
            </h1>
            <p class="text-zinc-300 text-sm sm:text-base mt-3 font-light max-w-2xl leading-relaxed">
                Kumpulan proyek dan pencapaian di bidang Musik, Film & Fotografi Freelance, serta Web Development.
            </p>
        </div>

        <!-- KATEGORI 1: FILM, MUSIK & FOTOGRAFI FREELANCE -->
        <div class="space-y-6">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-emerald-950/80 text-emerald-400 rounded-xl flex items-center justify-center font-bold text-xl border border-emerald-800/60 shadow-lg">
                    🎬
                </div>
                <div>
                    <h2 class="text-xl font-bold text-white tracking-wide">Musik, Film & Fotografi Freelance</h2>
                    <p class="text-xs text-zinc-400 font-light">Pencapaian kompetisi musik, penyutradaraan film pendek, dan dokumentasi yearbook</p>
                </div>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Proyek 1: Festival Lokaland -->
                <div class="bg-zinc-950/60 backdrop-blur-xl border border-zinc-800/90 rounded-2xl overflow-hidden hover:border-emerald-500/60 hover:shadow-[0_0_30px_rgba(16,185,129,0.15)] transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-full h-48 overflow-hidden bg-zinc-900/80 border-b border-zinc-800/80">
                            <img src="{{ asset('images/lokaland.jpg') }}" alt="Juara 3 Festival Lokaland - The Figures" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                <span class="px-2.5 py-1 text-xs font-bold rounded-md bg-emerald-950/80 text-emerald-400 border border-emerald-800/60">
                                    🥉 Juara 3 Festival
                                </span>
                                <span class="text-xs text-zinc-400 font-medium">Band Competition</span>
                            </div>
                            <h3 class="text-lg font-bold text-white group-hover:text-emerald-400 transition-colors">
                                Festival Lokaland
                            </h3>
                            <p class="text-emerald-400 font-medium text-xs mt-1">
                                Band: The Figures
                            </p>
                            <p class="text-zinc-300 text-sm mt-3 leading-relaxed font-light">
                                Berhasil meraih Juara 3 dalam kompetisi band Festival Lokaland yang diselenggarakan di Phinisi Point (Pipo) bersama grup band The Figures.
                            </p>
                        </div>
                    </div>
                    <div class="px-6 pb-6 pt-0">
                        <div class="pt-4 border-t border-zinc-800/80 flex items-center justify-between text-xs text-zinc-400">
                            <span>Lokasi: Phinisi Point</span>
                            <span>Role: Band Member</span>
                        </div>
                    </div>
                </div>

                <!-- Proyek 2: Film Pendek FLS2N -->
                <div class="bg-zinc-950/60 backdrop-blur-xl border border-zinc-800/90 rounded-2xl overflow-hidden hover:border-emerald-500/60 hover:shadow-[0_0_30px_rgba(16,185,129,0.15)] transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-full h-48 overflow-hidden bg-zinc-900/80 border-b border-zinc-800/80">
                            <img src="{{ asset('images/fls2n.jpg') }}" alt="Juara 2 FLS2N Film Pendek" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>

                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                <span class="px-2.5 py-1 text-xs font-bold rounded-md bg-emerald-950/80 text-emerald-400 border border-emerald-800/60">
                                    🥈 Juara 2 FLS2N
                                </span>
                                <span class="text-xs text-zinc-400 font-medium">Film Pendek</span>
                            </div>
                            <h3 class="text-lg font-bold text-white group-hover:text-emerald-400 transition-colors">
                                Film Pendek FLS2N
                            </h3>
                            <p class="text-emerald-400 font-medium text-xs mt-1">
                                Peran: Sutradara (Director)
                            </p>
                            <p class="text-zinc-300 text-sm mt-3 leading-relaxed font-light">
                                Memimpin dan mengarahkan proses produksi film pendek dalam ajang FLS2N, mulai dari konsep penceritaan, penyutradaraan adegan, hingga pengarahan alur sinematografi.
                            </p>
                        </div>
                    </div>
                    <div class="px-6 pb-6 pt-0">
                        <div class="pt-4 border-t border-zinc-800/80 flex items-center justify-between text-xs text-zinc-400">
                            <span>Kompetensi: FLS2N</span>
                            <span>Role: Sutradara</span>
                        </div>
                    </div>
                </div>

                <!-- Proyek 3: Yearbook Ischyros -->
                <div class="bg-zinc-950/60 backdrop-blur-xl border border-zinc-800/90 rounded-2xl overflow-hidden hover:border-emerald-500/60 hover:shadow-[0_0_30px_rgba(16,185,129,0.15)] transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-full h-48 overflow-hidden bg-zinc-900/80 border-b border-zinc-800/80">
                            <img src="{{ asset('images/ischyros.jpg') }}" alt="Yearbook SMP 2 Sungguminasa - Ischyros" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>

                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                <span class="px-2.5 py-1 text-xs font-bold rounded-md bg-emerald-950/80 text-emerald-400 border border-emerald-800/60">
                                    Yearbook Project
                                </span>
                                <span class="text-xs text-zinc-400 font-medium">2025 - 2026</span>
                            </div>
                            <h3 class="text-lg font-bold text-white group-hover:text-emerald-400 transition-colors">
                                Yearbook SMP 2 Sungguminasa
                            </h3>
                            <p class="text-emerald-400 font-medium text-xs mt-1">
                                Angkatan Ischyros
                            </p>
                            <p class="text-zinc-300 text-sm mt-3 leading-relaxed font-light">
                                Menggarap proyek dokumentasi dan pembuatan buku tahunan kelulusan angkatan Ischyros di SMP 2 Sungguminasa serta dokumentasi kegiatan Pentas Seni.
                            </p>
                        </div>
                    </div>
                    <div class="px-6 pb-6 pt-0">
                        <div class="pt-4 border-t border-zinc-800/80 flex items-center justify-between text-xs text-zinc-400">
                            <span>Lokasi: Sungguminasa</span>
                            <span>Role: Photographer</span>
                        </div>
                    </div>
                </div>

                <!-- Proyek 4: Yearbook L.NEXUS -->
                <div class="bg-zinc-950/60 backdrop-blur-xl border border-zinc-800/90 rounded-2xl overflow-hidden hover:border-emerald-500/60 hover:shadow-[0_0_30px_rgba(16,185,129,0.15)] transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="w-full h-48 overflow-hidden bg-zinc-900/80 border-b border-zinc-800/80">
                            <img src="{{ asset('images/L.Nexus.jpeg') }}" alt="Yearbook SMP 2 Sungguminasa - L.NEXUS 25" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>

                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                <span class="px-2.5 py-1 text-xs font-bold rounded-md bg-emerald-950/80 text-emerald-400 border border-emerald-800/60">
                                    Yearbook Project
                                </span>
                                <span class="text-xs text-zinc-400 font-medium">2024 - 2025</span>
                            </div>
                            <h3 class="text-lg font-bold text-white group-hover:text-emerald-400 transition-colors">
                                Yearbook SMP 2 Sungguminasa
                            </h3>
                            <p class="text-emerald-400 font-medium text-xs mt-1">
                                Angkatan L.NEXUS
                            </p>
                            <p class="text-zinc-300 text-sm mt-3 leading-relaxed font-light">
                                Menggarap proyek pengerjaan buku tahunan sekolah (yearbook) untuk kelulusan angkatan L.NEXUS di SMP 2 Sungguminasa.
                            </p>
                        </div>
                    </div>
                    <div class="px-6 pb-6 pt-0">
                        <div class="pt-4 border-t border-zinc-800/80 flex items-center justify-between text-xs text-zinc-400">
                            <span>Lokasi: Sungguminasa</span>
                            <span>Role: Photographer</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- KATEGORI 2: WEB DEVELOPMENT -->
        <div class="space-y-6 pt-4">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-emerald-950/80 text-emerald-400 rounded-xl flex items-center justify-center font-bold text-xl border border-emerald-800/60 shadow-lg">
                    💻
                </div>
                <div>
                    <h2 class="text-xl font-bold text-white tracking-wide">Web Development</h2>
                    <p class="text-xs text-zinc-400 font-light">Pengembangan aplikasi web dan sistem antarmuka</p>
                </div>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Project SehatKu -->
                <div class="bg-zinc-950/60 backdrop-blur-xl border border-zinc-800/90 rounded-2xl p-6 hover:border-emerald-500/60 hover:shadow-[0_0_30px_rgba(16,185,129,0.15)] transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-2.5 py-1 text-xs font-bold rounded-md bg-emerald-950/80 text-emerald-400 border border-emerald-800/60">
                                Web Health
                            </span>
                        </div>
                        <h3 class="text-lg font-bold text-white group-hover:text-emerald-400 transition-colors">SehatKu</h3>
                        <p class="text-zinc-300 text-sm mt-2 leading-relaxed font-light">
                            Aplikasi layanan informasi kesehatan berbasis web dengan fokus pada antarmuka pengguna yang bersih dan ramah.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-zinc-800/80 flex items-center justify-between text-xs text-zinc-400">
                        <span>Front-End</span>
                        <span>Web Application</span>
                    </div>
                </div>

                <!-- Project Aplikasi Kasir -->
                <div class="bg-zinc-950/60 backdrop-blur-xl border border-zinc-800/90 rounded-2xl p-6 hover:border-emerald-500/60 hover:shadow-[0_0_30px_rgba(16,185,129,0.15)] transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-2.5 py-1 text-xs font-bold rounded-md bg-emerald-950/80 text-emerald-400 border border-emerald-800/60">
                                Sistem Kasir
                            </span>
                        </div>
                        <h3 class="text-lg font-bold text-white group-hover:text-emerald-400 transition-colors">Aplikasi Kasir</h3>
                        <p class="text-zinc-300 text-sm mt-2 leading-relaxed font-light">
                            Sistem manajemen transaksi penjualan dan pencatatan kasir yang efisien dan mudah digunakan.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-zinc-800/80 flex items-center justify-between text-xs text-zinc-400">
                        <span>Point of Sale</span>
                        <span>System App</span>
                    </div>
                </div>

                <!-- Project Kalkulator Sederhana -->
                <div class="bg-zinc-950/60 backdrop-blur-xl border border-zinc-800/90 rounded-2xl p-6 hover:border-emerald-500/60 hover:shadow-[0_0_30px_rgba(16,185,129,0.15)] transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-2.5 py-1 text-xs font-bold rounded-md bg-emerald-950/80 text-emerald-400 border border-emerald-800/60">
                                Utility Tool
                            </span>
                        </div>
                        <h3 class="text-lg font-bold text-white group-hover:text-emerald-400 transition-colors">Kalkulator Sederhana</h3>
                        <p class="text-zinc-300 text-sm mt-2 leading-relaxed font-light">
                            Aplikasi kalkulator berbasis web untuk membantu operasi perhitungan cepat dan responsif.
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-zinc-800/80 flex items-center justify-between text-xs text-zinc-400">
                        <span>Utility</span>
                        <span>Web Tool</span>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection