@extends('layouts.app')

@section('content')
<div class="space-y-6 py-6">
    <div>
        <h1 class="text-3xl font-bold text-white">Proyek Saya</h1>
        <p class="text-gray-400 text-sm mt-1">Beberapa aplikasi dan hasil karya yang pernah saya kerjakan.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-4">
        <!-- Project 1 -->
        <div class="bg-gray-800 border border-gray-700 rounded-lg p-5 hover:border-indigo-500 transition">
            <span class="text-xs font-semibold px-2 py-1 bg-indigo-900 text-indigo-300 rounded">Web App</span>
            <h2 class="text-xl font-bold mt-3 text-white">SehatKu</h2>
            <p class="text-sm text-gray-400 mt-2">Aplikasi layanan informasi kesehatan berbasis web dengan fokus pada kenyamanan antarmuka pengguna.</p>
        </div>

        <!-- Project 2 -->
        <div class="bg-gray-800 border border-gray-700 rounded-lg p-5 hover:border-indigo-500 transition">
            <span class="text-xs font-semibold px-2 py-1 bg-emerald-900 text-emerald-300 rounded">Sistem Kasir</span>
            <h2 class="text-xl font-bold mt-3 text-white">Aplikasi Kasir</h2>
            <p class="text-sm text-gray-400 mt-2">Sistem manajemen transaksi toko dan pencatatan kasir dengan antarmuka yang simpel dan intuitif.</p>
        </div>

        <!-- Project 3 -->
        <div class="bg-gray-800 border border-gray-700 rounded-lg p-5 hover:border-indigo-500 transition">
            <span class="text-xs font-semibold px-2 py-1 bg-amber-900 text-amber-300 rounded">Utility</span>
            <h2 class="text-xl font-bold mt-3 text-white">Kalkulator Sederhana</h2>
            <p class="text-sm text-gray-400 mt-2">Aplikasi kalkulator berbasis web untuk perhitungan matematika cepat dan akurat.</p>
        </div>
    </div>
</div>
@endsection