@extends('layouts.app')

@section('content')
<div class="space-y-12">

    <!-- Header Profil -->
    <div class="border-b border-emerald-950 pb-8 relative overflow-hidden">
        <h1 class="text-4xl sm:text-5xl font-black text-white tracking-tight leading-tight">
            Profil <span class="text-emerald-500">Lengkap</span>
        </h1>
        <p class="text-gray-400 text-base sm:text-lg mt-3 max-w-2xl leading-relaxed font-light">
            Mengenal lebih dekat latar belakang, perjalanan pendidikan, serta kombinasi unik keahlian teknologi dan visual saya.
        </p>
    </div>

    <div class="grid lg:grid-cols-3 gap-8 items-start">
        
        <!-- Kartu Utama -->
        <div class="lg:col-span-1 bg-black border border-emerald-950 rounded-xl p-6 shadow-2xl sticky top-24">
            <div class="flex flex-col items-center text-center">
                <!-- Foto Profil (Bingkai Persegi Tajam) -->
                <div class="w-28 h-28 rounded-lg overflow-hidden mb-5 border-2 border-emerald-800 p-1 bg-zinc-950 shadow-lg">
                    <img 
                        src="{{ asset('images/profilezacky.jpg') }}" 
                        alt="Muhammad Zacky Zayyan" 
                        class="w-full h-full object-cover rounded-md"
                    >
                </div>

                <h2 class="text-2xl font-bold text-white tracking-tight">Muhammad Zacky Zayyan</h2>
                <p class="text-emerald-500 text-xs font-semibold uppercase tracking-wider mt-2 px-3 py-1 bg-emerald-950 border border-emerald-900 rounded-md">
                    Siswa SMK Telkom Makassar
                </p>
            </div>
            
            <hr class="border-zinc-900 my-6">

            <div class="space-y-4 text-sm">
                <div class="flex items-center justify-between gap-4">
                    <span class="text-gray-500 text-xs uppercase font-bold tracking-widest">Umur</span>
                    <span class="text-gray-200 font-medium text-base">17 Tahun</span>
                </div>
                <div class="flex items-center justify-between gap-4">
                    <span class="text-gray-500 text-xs uppercase font-bold tracking-widest">Pendidikan</span>
                    <span class="text-gray-200 font-medium text-base">Kelas XII SMK</span>
                </div>
                <div class="border-t border-zinc-900 pt-4">
                    <span class="text-gray-500 block text-xs uppercase font-bold tracking-widest mb-1">Kompetensi Keahlian</span>
                    <span class="text-gray-200 font-semibold text-base">Rekayasa Perangkat Lunak (RPL)</span>
                </div>
                <div class="border-t border-zinc-900 pt-4">
                    <span class="text-gray-500 block text-xs uppercase font-bold tracking-widest mb-2">Status</span>
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-md text-xs font-bold bg-emerald-950 text-emerald-500 border border-emerald-900">
                        <span class="relative flex h-2 w-2">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-500 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-600"></span>
                        </span>
                        Aktif / Freelance
                    </span>
                </div>
            </div>
        </div>

        <!-- Detail Bio, Keahlian & Hobi -->
        <div class="lg:col-span-2 space-y-8">
            
            <!-- Biografi Singkat -->
            <div class="bg-black border border-zinc-900 hover:border-emerald-950 rounded-xl p-7 transition-colors">
                <h3 class="text-lg font-bold text-white mb-4 flex items-center gap-2.5 tracking-wide">
                    <span class="w-2 h-2 bg-emerald-500"></span>
                    Tentang Saya
                </h3>
                <p class="text-gray-400 leading-relaxed text-base font-light">
                    Saya adalah siswa kelas XII SMK Telkom Makassar jurusan <strong class="font-semibold text-white">Rekayasa Perangkat Lunak (RPL)</strong> yang memiliki antusiasme tinggi terhadap pengembangan antarmuka web modern (<em class="text-emerald-500 not-italic">Front-End</em>) dan dunia <strong class="font-semibold text-white">fotografi</strong>. Saya terbiasa memadukan kreativitas visual dan logika pemrograman untuk menciptakan produk digital yang fungsional, intuitif, dan presisi.
                </p>
            </div>

            <!-- Tech Stack & Skills -->
            <div class="bg-black border border-zinc-900 hover:border-emerald-950 rounded-xl p-7 transition-colors">
                <h3 class="text-lg font-bold text-white mb-6 flex items-center gap-2.5 tracking-wide">
                    <span class="w-2 h-2 bg-emerald-500"></span>
                    Keahlian & Teknologi
                </h3>

                <div class="space-y-6">
                    <div>
                        <h4 class="text-xs font-bold uppercase tracking-widest text-gray-500 mb-3">Web Development</h4>
                        <div class="flex flex-wrap gap-2">
                            @php
                                $webSkills = ['HTML5 / CSS3', 'JavaScript', 'Laravel', 'React.js', 'Next.js', 'Git / GitHub'];
                            @endphp
                            @foreach ($webSkills as $skill)
                                <span class="px-3 py-1.5 bg-zinc-950 border border-zinc-800 hover:border-emerald-800 text-gray-300 hover:text-emerald-400 text-xs font-medium rounded-md transition-colors cursor-default">
                                    {{ $skill }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    <div class="border-t border-zinc-900 pt-6">
                        <h4 class="text-xs font-bold uppercase tracking-widest text-gray-500 mb-3">Visual & Media</h4>
                        <div class="flex flex-wrap gap-2">
                            @php
                                $visualSkills = ['Fotografi Komersial', 'Visual Lighting', 'Framing & Komposisi', 'Adobe Lightroom', 'Photo Editing'];
                            @endphp
                            @foreach ($visualSkills as $skill)
                                <span class="px-3 py-1.5 bg-zinc-950 border border-zinc-800 hover:border-emerald-800 text-gray-300 hover:text-emerald-400 text-xs font-medium rounded-md transition-colors cursor-default">
                                    {{ $skill }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kotak Hobi -->
            <div class="bg-black border border-zinc-900 hover:border-emerald-950 rounded-xl p-7 transition-colors">
                <h3 class="text-lg font-bold text-white mb-6 flex items-center gap-2.5 tracking-wide">
                    <span class="w-2 h-2 bg-emerald-500"></span>
                    Hobi & Minat
                </h3>

                <div class="grid sm:grid-cols-2 gap-4">
                    <!-- Hobi 1: Fotografi -->
                    <div class="bg-zinc-950 border border-zinc-900 hover:border-emerald-900 rounded-lg p-5 transition-all group">
                        <div class="text-2xl mb-2 text-emerald-500">📷</div>
                        <h4 class="text-base font-bold text-white group-hover:text-emerald-400 transition-colors">Fotografi</h4>
                        <p class="text-sm text-gray-400 mt-1 leading-relaxed font-light">Eksplorasi sudut gambar, teknik pencahayaan, dan menangkap momen visual unik.</p>
                    </div>

                    <!-- Hobi 2: Bermain Musik -->
                    <div class="bg-zinc-950 border border-zinc-900 hover:border-emerald-900 rounded-lg p-5 transition-all group">
                        <div class="text-2xl mb-2 text-emerald-500">🎸</div>
                        <h4 class="text-base font-bold text-white group-hover:text-emerald-400 transition-colors">Bermain Musik</h4>
                        <p class="text-sm text-gray-400 mt-1 leading-relaxed font-light">Mengeksplorasi nada, harmoni instrumen, dan berkolaborasi dalam format band.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection