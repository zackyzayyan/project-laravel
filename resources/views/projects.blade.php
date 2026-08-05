@extends('layouts.app')

@section('content')
<div class="space-y-12">

    <!-- Header Halaman Proyek -->
    <div class="border-b border-emerald-950 pb-8">
        <h1 class="text-3xl sm:text-4xl font-black text-white tracking-tight">Proyek Saya</h1>
        <p class="text-gray-400 text-sm sm:text-base mt-2 font-light">
            Kumpulan proyek dan pencapaian di bidang Musik, Film & Fotografi Freelance, serta Web Development.
        </p>
    </div>

    <!-- KATEGORI 1: FILM, MUSIK & FOTOGRAFI FREELANCE -->
    <div class="space-y-6">
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-emerald-950 text-emerald-500 rounded-lg flex items-center justify-center font-bold text-xl border border-emerald-900">
                🎬
            </div>
            <div>
                <h2 class="text-xl font-bold text-white tracking-wide">Musik, Film & Fotografi Freelance</h2>
                <p class="text-xs text-gray-500 font-light">Pencapaian kompetisi musik, penyutradaraan film pendek, dan dokumentasi yearbook</p>
            </div>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Proyek 1: Festival Lokaland -->
            <div class="bg-black border border-zinc-900 rounded-xl overflow-hidden hover:border-emerald-800 transition-all flex flex-col justify-between group">
                <div>
                    <div class="w-full h-48 overflow-hidden bg-zinc-950 border-b border-zinc-900">
                        <img src="{{ asset('images/lokaland.jpg') }}" alt="Juara 3 Festival Lokaland - The Figures" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="px-2.5 py-1 text-xs font-bold rounded-md bg-emerald-950 text-emerald-400 border border-emerald-900">
                                🥉 Juara 3 Festival
                            </span>
                            <span class="text-xs text-gray-500 font-medium">Band Competition</span>
                        </div>
                        <h3 class="text-lg font-bold text-white group-hover:text-emerald-400 transition-colors">
                            Festival Lokaland
                        </h3>
                        <p class="text-emerald-500 font-medium text-xs mt-1">
                            Band: The Figures
                        </p>
                        <p class="text-gray-400 text-sm mt-3 leading-relaxed font-light">
                            Berhasil meraih Juara 3 dalam kompetisi band Festival Lokaland yang diselenggarakan di Phinisi Point (Pipo) bersama grup band The Figures.
                        </p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-0">
                    <div class="pt-4 border-t border-zinc-900 flex items-center justify-between text-xs text-gray-500">
                        <span>Lokasi: Phinisi Point</span>
                        <span>Role: Band Member</span>
                    </div>
                </div>
            </div>

            <!-- Proyek 2: Film Pendek FLS2N -->
            <div class="bg-black border border-zinc-900 rounded-xl overflow-hidden hover:border-emerald-800 transition-all flex flex-col justify-between group">
                <div>
                    <div class="w-full h-48 overflow-hidden bg-zinc-950 border-b border-zinc-900">
                        <img src="{{ asset('images/fls2n.jpg') }}" alt="Juara 2 FLS2N Film Pendek" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>

                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="px-2.5 py-1 text-xs font-bold rounded-md bg-emerald-950 text-emerald-400 border border-emerald-900">
                                🥈 Juara 2 FLS3N
                            </span>
                            <span class="text-xs text-gray-500 font-medium">Film Pendek</span>
                        </div>
                        <h3 class="text-lg font-bold text-white group-hover:text-emerald-400 transition-colors">
                            Film Pendek FLS3N
                        </h3>
                        <p class="text-emerald-500 font-medium text-xs mt-1">
                            Peran: Sutradara (Director)
                        </p>
                        <p class="text-gray-400 text-sm mt-3 leading-relaxed font-light">
                            Memimpin dan mengarahkan proses produksi film pendek dalam ajang FLS3N, mulai dari konsep penceritaan, penyutradaraan adegan, hingga pengarahan alur sinematografi.
                        </p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-0">
                    <div class="pt-4 border-t border-zinc-900 flex items-center justify-between text-xs text-gray-500">
                        <span>Kompetensi: FLS3N</span>
                        <span>Role: Sutradara</span>
                    </div>
                </div>
            </div>

            <!-- Proyek 3: Yearbook Ischyros -->
            <div class="bg-black border border-zinc-900 rounded-xl overflow-hidden hover:border-emerald-800 transition-all flex flex-col justify-between group">
                <div>
                    <div class="w-full h-48 overflow-hidden bg-zinc-950 border-b border-zinc-900">
                        <img src="{{ asset('images/ischyros.jpg') }}" alt="Yearbook SMP 2 Sungguminasa - Ischyros" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>

                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="px-2.5 py-1 text-xs font-bold rounded-md bg-emerald-950 text-emerald-400 border border-emerald-900">
                                Yearbook Project
                            </span>
                            <span class="text-xs text-gray-500 font-medium">2025 - 2026</span>
                        </div>
                        <h3 class="text-lg font-bold text-white group-hover:text-emerald-400 transition-colors">
                            Yearbook SMP 2 Sungguminasa
                        </h3>
                        <p class="text-emerald-500 font-medium text-xs mt-1">
                            Angkatan Ischyros
                        </p>
                        <p class="text-gray-400 text-sm mt-3 leading-relaxed font-light">
                            Menggarap proyek dokumentasi dan pembuatan buku tahunan kelulusan angkatan Ischyros di SMP 2 Sungguminasa serta dokumentasi kegiatan Pentas Seni.
                        </p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-0">
                    <div class="pt-4 border-t border-zinc-900 flex items-center justify-between text-xs text-gray-500">
                        <span>Lokasi: Sungguminasa</span>
                        <span>Role: Photographer</span>
                    </div>
                </div>
            </div>

            <!-- Proyek 4: Yearbook L.NEXUS -->
            <div class="bg-black border border-zinc-900 rounded-xl overflow-hidden hover:border-emerald-800 transition-all flex flex-col justify-between group">
                <div>
                    <div class="w-full h-48 overflow-hidden bg-zinc-950 border-b border-zinc-900">
                        <img src="{{ asset('images/L.Nexus.jpeg') }}" alt="Yearbook SMP 2 Sungguminasa - L.NEXUS 25" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>

                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="px-2.5 py-1 text-xs font-bold rounded-md bg-emerald-950 text-emerald-400 border border-emerald-900">
                                Yearbook Project
                            </span>
                            <span class="text-xs text-gray-500 font-medium">2024 - 2025</span>
                        </div>
                        <h3 class="text-lg font-bold text-white group-hover:text-emerald-400 transition-colors">
                            Yearbook SMP 2 Sungguminasa
                        </h3>
                        <p class="text-emerald-500 font-medium text-xs mt-1">
                            Angkatan L.NEXUS
                        </p>
                        <p class="text-gray-400 text-sm mt-3 leading-relaxed font-light">
                            Menggarap proyek pengerjaan buku tahunan sekolah (yearbook) untuk kelulusan angkatan L.NEXUS di SMP 2 Sungguminasa.
                        </p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-0">
                    <div class="pt-4 border-t border-zinc-900 flex items-center justify-between text-xs text-gray-500">
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
            <div class="w-10 h-10 bg-emerald-950 text-emerald-500 rounded-lg flex items-center justify-center font-bold text-xl border border-emerald-900">
                💻
            </div>
            <div>
                <h2 class="text-xl font-bold text-white tracking-wide">Web Development</h2>
                <p class="text-xs text-gray-500 font-light">Pengembangan aplikasi web dan sistem antarmuka</p>
            </div>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Project SehatKu -->
            <div class="bg-black border border-zinc-900 rounded-xl p-6 hover:border-emerald-800 transition-all flex flex-col justify-between group">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="px-2.5 py-1 text-xs font-bold rounded-md bg-emerald-950 text-emerald-400 border border-emerald-900">
                            Web Health
                        </span>
                    </div>
                    <h3 class="text-lg font-bold text-white group-hover:text-emerald-400 transition-colors">SehatKu</h3>
                    <p class="text-gray-400 text-sm mt-2 leading-relaxed font-light">
                        Aplikasi layanan informasi kesehatan berbasis web dengan fokus pada antarmuka pengguna yang bersih dan ramah.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-zinc-900 flex items-center justify-between text-xs text-gray-500">
                    <span>Front-End</span>
                    <span>Web Application</span>
                </div>
            </div>

            <!-- Project Aplikasi Kasir -->
            <div class="bg-black border border-zinc-900 rounded-xl p-6 hover:border-emerald-800 transition-all flex flex-col justify-between group">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="px-2.5 py-1 text-xs font-bold rounded-md bg-emerald-950 text-emerald-400 border border-emerald-900">
                            Sistem Kasir
                        </span>
                    </div>
                    <h3 class="text-lg font-bold text-white group-hover:text-emerald-400 transition-colors">Aplikasi Kasir</h3>
                    <p class="text-gray-400 text-sm mt-2 leading-relaxed font-light">
                        Sistem manajemen transaksi penjualan dan pencatatan kasir yang efisien dan mudah digunakan.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-zinc-900 flex items-center justify-between text-xs text-gray-500">
                    <span>Point of Sale</span>
                    <span>System App</span>
                </div>
            </div>

            <!-- Project Kalkulator Sederhana -->
            <div class="bg-black border border-zinc-900 rounded-xl p-6 hover:border-emerald-800 transition-all flex flex-col justify-between group">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <span class="px-2.5 py-1 text-xs font-bold rounded-md bg-emerald-950 text-emerald-400 border border-emerald-900">
                            Utility Tool
                        </span>
                    </div>
                    <h3 class="text-lg font-bold text-white group-hover:text-emerald-400 transition-colors">Kalkulator Sederhana</h3>
                    <p class="text-gray-400 text-sm mt-2 leading-relaxed font-light">
                        Aplikasi kalkulator berbasis web untuk membantu operasi perhitungan cepat dan responsif.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-zinc-900 flex items-center justify-between text-xs text-gray-500">
                    <span>Utility</span>
                    <span>Web Tool</span>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection