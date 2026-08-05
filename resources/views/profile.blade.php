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

        <!-- Header Profil -->
        <div class="border-b border-zinc-800/80 pb-8 relative overflow-hidden">
            <h1 class="text-4xl sm:text-6xl font-black text-white tracking-tight leading-tight">
                Profil <span class="text-emerald-400 drop-shadow-[0_0_25px_rgba(52,211,153,0.6)]">Lengkap</span>
            </h1>
            <p class="text-zinc-300 text-base sm:text-lg mt-3 max-w-2xl leading-relaxed font-light">
                Mengenal lebih dekat latar belakang, perjalanan pendidikan, serta kombinasi unik keahlian teknologi dan visual saya.
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8 items-start">
            
            <!-- Kartu Utama (Glassmorphism Transparan) -->
            <div class="lg:col-span-1 bg-zinc-950/60 backdrop-blur-xl border border-zinc-800/90 rounded-2xl p-6 shadow-2xl sticky top-24">
                <div class="flex flex-col items-center text-center">
                    <!-- Foto Profil -->
                    <div class="w-28 h-28 rounded-xl overflow-hidden mb-5 border-2 border-emerald-500/60 p-1 bg-zinc-950 shadow-lg">
                        <img 
                            src="{{ asset('images/profilezacky.jpg') }}" 
                            alt="Muhammad Zacky Zayyan" 
                            class="w-full h-full object-cover rounded-lg"
                        >
                    </div>

                    <h2 class="text-2xl font-bold text-white tracking-tight">Muhammad Zacky Zayyan</h2>
                    <p class="text-emerald-400 text-xs font-semibold uppercase tracking-wider mt-2 px-3 py-1 bg-emerald-950/80 border border-emerald-800/60 rounded-md">
                        Siswa SMK Telkom Makassar
                    </p>
                </div>
                
                <hr class="border-zinc-800/80 my-6">

                <div class="space-y-4 text-sm">
                    <div class="flex items-center justify-between gap-4">
                        <span class="text-zinc-500 text-xs uppercase font-bold tracking-widest">Umur</span>
                        <span class="text-zinc-200 font-medium text-base">17 Tahun</span>
                    </div>
                    <div class="flex items-center justify-between gap-4">
                        <span class="text-zinc-500 text-xs uppercase font-bold tracking-widest">Pendidikan</span>
                        <span class="text-zinc-200 font-medium text-base">Kelas XII SMK</span>
                    </div>
                    <div class="border-t border-zinc-800/80 pt-4">
                        <span class="text-zinc-500 block text-xs uppercase font-bold tracking-widest mb-1">Kompetensi Keahlian</span>
                        <span class="text-zinc-200 font-semibold text-base">Rekayasa Perangkat Lunak (RPL)</span>
                    </div>
                    <div class="border-t border-zinc-800/80 pt-4">
                        <span class="text-zinc-500 block text-xs uppercase font-bold tracking-widest mb-2">Status</span>
                        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-md text-xs font-bold bg-emerald-950/80 text-emerald-400 border border-emerald-800/60">
                            <span class="relative flex h-2 w-2">
                              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                              <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                            </span>
                            Aktif / Freelance
                        </span>
                    </div>
                </div>
            </div>

            <!-- Detail Bio, Keahlian & Hobi -->
            <div class="lg:col-span-2 space-y-8">
                
                <!-- Biografi Singkat -->
                <div class="bg-zinc-950/60 backdrop-blur-xl border border-zinc-800/90 hover:border-emerald-500/60 rounded-2xl p-7 transition-all duration-300 shadow-xl">
                    <h3 class="text-lg font-bold text-white mb-4 flex items-center gap-2.5 tracking-wide">
                        <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                        Tentang Saya
                    </h3>
                    <p class="text-zinc-300 leading-relaxed text-base font-light">
                        Saya adalah siswa kelas XII SMK Telkom Makassar jurusan <strong class="font-semibold text-white">Rekayasa Perangkat Lunak (RPL)</strong> yang memiliki antusiasme tinggi terhadap pengembangan antarmuka web modern (<em class="text-emerald-400 not-italic">Front-End</em>) dan dunia <strong class="font-semibold text-white">fotografi</strong>. Saya terbiasa memadukan kreativitas visual dan logika pemrograman untuk menciptakan produk digital yang fungsional, intuitif, dan presisi.
                    </p>
                </div>

                <!-- Tech Stack & Skills -->
                <div class="bg-zinc-950/60 backdrop-blur-xl border border-zinc-800/90 hover:border-emerald-500/60 rounded-2xl p-7 transition-all duration-300 shadow-xl">
                    <h3 class="text-lg font-bold text-white mb-6 flex items-center gap-2.5 tracking-wide">
                        <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                        Keahlian & Teknologi
                    </h3>

                    <div class="space-y-6">
                        <div>
                            <h4 class="text-xs font-bold uppercase tracking-widest text-zinc-500 mb-3">Web Development</h4>
                            <div class="flex flex-wrap gap-2">
                                @php
                                    $webSkills = ['HTML5 / CSS3', 'JavaScript', 'Laravel', 'React.js', 'Next.js', 'Git / GitHub'];
                                @endphp
                                @foreach ($webSkills as $skill)
                                    <span class="px-3 py-1.5 bg-zinc-900/90 border border-zinc-800 hover:border-emerald-500/50 text-zinc-300 hover:text-emerald-400 text-xs font-medium rounded-lg transition-colors cursor-default">
                                        {{ $skill }}
                                    </span>
                                @endforeach
                            </div>
                        </div>

                        <div class="border-t border-zinc-800/80 pt-6">
                            <h4 class="text-xs font-bold uppercase tracking-widest text-zinc-500 mb-3">Visual & Media</h4>
                            <div class="flex flex-wrap gap-2">
                                @php
                                    $visualSkills = ['Fotografi Komersial', 'Visual Lighting', 'Framing & Komposisi', 'Adobe Lightroom', 'Photo Editing'];
                                @endphp
                                @foreach ($visualSkills as $skill)
                                    <span class="px-3 py-1.5 bg-zinc-900/90 border border-zinc-800 hover:border-emerald-500/50 text-zinc-300 hover:text-emerald-400 text-xs font-medium rounded-lg transition-colors cursor-default">
                                        {{ $skill }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kotak Hobi -->
                <div class="bg-zinc-950/60 backdrop-blur-xl border border-zinc-800/90 hover:border-emerald-500/60 rounded-2xl p-7 transition-all duration-300 shadow-xl">
                    <h3 class="text-lg font-bold text-white mb-6 flex items-center gap-2.5 tracking-wide">
                        <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                        Hobi & Minat
                    </h3>

                    <div class="grid sm:grid-cols-2 gap-4">
                        <!-- Hobi 1: Fotografi -->
                        <div class="bg-zinc-900/60 border border-zinc-800/80 hover:border-emerald-500/50 rounded-xl p-5 transition-all duration-300 group">
                            <div class="text-2xl mb-2 text-emerald-400">📷</div>
                            <h4 class="text-base font-bold text-white group-hover:text-emerald-400 transition-colors">Fotografi</h4>
                            <p class="text-sm text-zinc-400 mt-1 leading-relaxed font-light">Eksplorasi sudut gambar, teknik pencahayaan, dan menangkap momen visual unik.</p>
                        </div>

                        <!-- Hobi 2: Bermain Musik -->
                        <div class="bg-zinc-900/60 border border-zinc-800/80 hover:border-emerald-500/50 rounded-xl p-5 transition-all duration-300 group">
                            <div class="text-2xl mb-2 text-emerald-400">🎸</div>
                            <h4 class="text-base font-bold text-white group-hover:text-emerald-400 transition-colors">Bermain Musik</h4>
                            <p class="text-sm text-zinc-400 mt-1 leading-relaxed font-light">Mengeksplorasi nada, harmoni instrumen, dan berkolaborasi dalam format band.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection