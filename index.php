<?php
$brand = 'Arka Institute';
$phone = '6285287030246';
$phoneDisplay = '+62 852-8703-0246';
$whatsapp = 'https://wa.me/' . $phone;
$email = 'admin@arkainstitute.co.id';
$address = 'Jl. Raya Jatinangor No.54, Cibeusi, Kec. Jatinangor, Kabupaten Sumedang, Jawa Barat 45363, Indonesia';
$nib = '1103220012668';

$jurnals = [
    [
        'name' => 'Educenter',
        'full_name' => 'Educenter: Jurnal Ilmiah Pendidikan',
        'sinta' => 'Sinta 3',
        'scope' => 'Pengembangan Kurikulum, Teknologi Pendidikan & Pembelajaran',
        'freq' => 'Terbit 3x / Tahun',
        'image' => './assets/journal/educenter.webp',
    ],
    [
        'name' => 'Cessie',
        'full_name' => 'Cessie: Jurnal Ilmiah Hukum',
        'sinta' => 'Sinta 4',
        'scope' => 'Hukum Pidana, Perdata, Tata Negara & Isu Kontemporer',
        'freq' => 'Terbit 2x / Tahun',
        'image' => './assets/journal/cessie.webp',
    ],
    [
        'name' => 'Keynesia',
        'full_name' => 'Keynesia: Int. Journal of Economics and Business',
        'sinta' => 'Sinta 5',
        'scope' => 'Ilmu Ekonomi, Ekonomi Pembangunan, Manajemen & Akuntansi',
        'freq' => 'Terbit 2x / Tahun',
        'image' => './assets/journal/keynesia.webp',
    ],
    [
        'name' => 'Hexatech',
        'full_name' => 'Hexatech: Jurnal Ilmiah Teknik',
        'sinta' => 'Sinta 5',
        'scope' => 'Teknik Sipil, Arsitektur, Elektro, Mesin, Informatika & Biomedis',
        'freq' => 'Terbit 2x / Tahun',
        'image' => './assets/journal/hexatech.webp',
    ],
    [
        'name' => 'Co-Creation',
        'full_name' => 'Co-Creation: Jurnal Ilmiah Manajemen',
        'sinta' => 'Sinta 5',
        'scope' => 'Manajemen Bisnis, Pemasaran, Keuangan & SDM',
        'freq' => 'Terbit 2x / Tahun',
        'image' => './assets/journal/cocreation.webp',
    ],
    [
        'name' => 'Nautical',
        'full_name' => 'Nautical: Jurnal Multidisiplin',
        'sinta' => 'ISSN',
        'scope' => 'Multidisiplin, Terapan Sains, Teknologi & Sosial Humaniora',
        'freq' => 'Terbit Berkala',
        'image' => './assets/journal/nautical.webp',
    ],
    [
        'name' => 'Florona',
        'full_name' => 'Florona: Jurnal Ilmiah Kesehatan',
        'sinta' => 'ISSN',
        'scope' => 'Epidemiologi, Kebijakan Kesehatan, Keperawatan & Farmasi',
        'freq' => 'Terbit 2x / Tahun',
        'image' => './assets/journal/florona.webp',
    ],
    [
        'name' => 'Histeria',
        'full_name' => 'Histeria: Jurnal Ilmiah Sosial dan Humaniora',
        'sinta' => 'Sinta 5',
        'scope' => 'Sosial Humaniora, Kebijakan Publik, Ilmu Komunikasi & Budaya',
        'freq' => 'Terbit 2x / Tahun',
        'image' => './assets/journal/histeria.webp',
    ],
    [
        'name' => 'Scopus / WoS',
        'full_name' => 'International Reputable Journals (Fast Track)',
        'sinta' => 'Internasional',
        'scope' => 'Multidisiplin Global Q1 - Q4 (Scopus / Web of Science)',
        'freq' => 'Priority Review',
        'image' => './assets/journal/scopus.webp',
    ],
];

$filters = ['Semua' => 'all', 'Sinta 3' => 'Sinta 3', 'Sinta 4' => 'Sinta 4', 'Sinta 5' => 'Sinta 5', 'Non Sinta / ISSN' => 'ISSN', 'Scopus / WoS' => 'Internasional'];

$stats = [
    [
        'num' => '2.900+',
        'label' => 'Artikel Didampingi',
        'desc' => 'Rekam jejak publikasi nyata yang tersebar di puluhan kampus dan rumpun riset di Indonesia.'
    ],
    [
        'num' => '3 Hari',
        'label' => 'Percepatan LoA',
        'desc' => 'Opsi jalur prioritas fast track memangkas durasi review dengan kepastian status naskah.'
    ],
    [
        'num' => '100%',
        'label' => 'Legalitas & Terakreditasi',
        'desc' => 'Dikelola berbadan hukum resmi NIB 1103220012668 langsung terhubung dewan redaksi jurnal.'
    ],
    [
        'num' => '15+',
        'label' => 'Rumpun Ilmu Terlayani',
        'desc' => 'Mencakup ekonomi, pendidikan, hukum, teknik sipil, kesehatan, hingga multidisiplin.'
    ]
];

$services = [
    [
        'tag' => '01 / RESMI & LEGAL',
        'title' => 'Pengelolaan Jurnal Langsung',
        'sub' => 'Bukan perantara atau calo naskah.',
        'desc' => 'Arka Institute memiliki legalitas berbadan hukum resmi (NIB 1103220012668). Seluruh proses terhubung langsung dengan dewan redaksi jurnal.',
        'badge' => 'NIB Verified'
    ],
    [
        'tag' => '02 / EDITORIAL RIGOR',
        'title' => 'Review & Turnitin Similarity',
        'sub' => 'Standar ketat sesuai pedoman akreditasi.',
        'desc' => 'Pemeriksaan komprehensif atas substansi, referensi Mendeley, layout template, hingga uji kesamaan Turnitin agar naskah layak terbit.',
        'badge' => 'Zero Plagiarism Standard'
    ],
    [
        'tag' => '03 / FAST TRACK LOA',
        'title' => 'Percepatan LoA 3 Hari',
        'sub' => 'Kepastian status naskah secara transparan.',
        'desc' => 'Dukungan percepatan alur peer-review dengan laporan progress berkala dan LoA resmi bertanda tangan dewan redaksi.',
        'badge' => 'Priority Review'
    ],
    [
        'tag' => '04 / SISTEM BERTAHAP',
        'title' => 'Sistem Pembayaran Bertahap',
        'sub' => 'DP 50% di awal, pelunasan pasca LoA.',
        'desc' => 'Skema pembiayaan aman dan transparan. Penulis hanya melunasi biaya administrasi setelah Letter of Acceptance resmi diterbitkan.',
        'badge' => 'Transparan & Terjamin'
    ]
];

$faq = [
    ['q' => 'Apakah Arka Institute memiliki legalitas resmi?', 'a' => 'Ya. Arka Institute berbadan hukum resmi dengan NIB 1103220012668. Kami adalah lembaga penerbit resmi dengan dewan redaksi langsung, bukan sekadar perantara.'],
    ['q' => 'Bagaimana sistem pembayarannya?', 'a' => 'Penulis membayar DP sebesar 50% untuk memulai proses review dan editorial. Pelunasan dilakukan setelah naskah mendapatkan LoA resmi dari jurnal tujuan.'],
    ['q' => 'Berapa lama proses mendapatkan LoA?', 'a' => 'Untuk jalur prioritas atau fast track, LoA dapat terbit dalam waktu 3 hari kerja, disesuaikan dengan kelayakan naskah dan ketersediaan slot.'],
    ['q' => 'Apakah ada jaminan artikel pasti terbit?', 'a' => 'Arka Institute mengelola jurnal secara langsung. Tim editorial mendampingi perbaikan naskah hingga memenuhi parameter akreditasi sebelum diterbitkan dengan DOI aktif.'],
    ['q' => 'Apa saja layanan tambahan yang didapatkan?', 'a' => 'Pengecekan Turnitin, perapihan sitasi Mendeley, penyesuaian template jurnal, translate native, dan bantuan parafrase sudah tercakup dalam paket pendampingan.']
];
?>
<!doctype html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($brand) ?> — LoA 3 Hari. Legal. Tanpa Was-was</title>
    <meta name="description" content="2.900+ naskah sudah terbit, giliran Anda. Bayar bertahap, naskah aman, slot review terbatas. Layanan pendampingan publikasi jurnal ilmiah resmi Arka Institute.">
    <link rel="icon" type="image/png" href="./assets/favicon.png">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/png">
    <link rel="apple-touch-icon" href="./assets/favicon.png">
    
    <!-- Google Fonts: Plus Jakarta Sans & DM Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,400;0,500;1,400&family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        arka: {
                            yellow: '#F5B301',
                            yellowLight: '#FDE047',
                            yellowHover: '#E0A300',
                            dark: '#0C0E12',
                            darker: '#07080A',
                            surface: '#15181E',
                            borderDark: '#222630',
                            grayBg: '#F4F4F6',
                            grayCard: '#F4F4F6',
                            borderLight: '#E5E7EB',
                            textMuted: '#6B7280'
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'system-ui', '-apple-system', 'sans-serif'],
                        mono: ['"DM Mono"', 'monospace']
                    }
                }
            }
        }
    </script>
    
    <style>
        /* Halftone textures */
        .halftone-dots {
            background-image: radial-gradient(rgba(0, 0, 0, 0.12) 1.2px, transparent 1.2px);
            background-size: 8px 8px;
        }
        .halftone-dark {
            background-image: radial-gradient(rgba(255, 255, 255, 0.15) 1px, transparent 1px);
            background-size: 8px 8px;
        }

        /* Smooth Reveal Animation */
        .reveal {
            opacity: 0;
            transform: translateY(18px);
            transition: opacity .6s cubic-bezier(0.16, 1, 0.3, 1), transform .6s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Subtle scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #F4F4F6;
        }
        ::-webkit-scrollbar-thumb {
            background: #D1D5DB;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #F5B301;
        }
    </style>
</head>
<body class="font-sans bg-white text-arka-dark antialiased selection:bg-arka-yellow selection:text-arka-dark overflow-x-hidden">

    <!-- ==============================================
         NAVBAR (Identical to ILSE Layout: Logo, Center Menu, Search/Contact)
         ============================================== -->
    <header class="w-full bg-white border-b border-arka-borderLight sticky top-0 z-40 bg-white/95 backdrop-blur-md">
        <div class="max-w-7xl mx-auto flex h-20 items-center justify-between px-6 lg:px-12">
            
            <!-- Left: Brand Logo -->
            <a href="#hero" class="flex items-center gap-3 group">
                <img src="./assets/favicon ai.png" alt="<?= htmlspecialchars($brand) ?>" class="h-9 sm:h-10 w-auto object-contain transition-transform duration-200 group-hover:opacity-90">
            </a>

            <!-- Center: Navigation Links -->
            <nav class="hidden lg:flex items-center gap-8 text-sm font-semibold text-neutral-600">
                <a href="#hero" class="text-arka-dark hover:text-arka-dark flex items-center gap-1.5 font-bold">
                    <span class="w-1.5 h-1.5 rounded-full bg-arka-yellow"></span>
                    <span>Home</span>
                </a>
                <a href="#tentang" class="hover:text-arka-dark transition">Tentang</a>
                <a href="#layanan" class="hover:text-arka-dark transition">Layanan</a>
                <a href="#katalog" class="hover:text-arka-dark transition">Katalog</a>
                <a href="#testimoni" class="hover:text-arka-dark transition">Testimoni</a>
                <a href="#faq" class="hover:text-arka-dark transition">FAQ</a>
            </nav>

            <!-- Right: Search Box + Yellow CTA Button -->
            <div class="hidden sm:flex items-center gap-4">
                <a href="#katalog" class="flex items-center gap-2 text-xs font-semibold text-neutral-500 hover:text-arka-dark px-3 py-2 rounded-lg border border-transparent hover:border-neutral-200 transition">
                    <svg class="w-4 h-4 text-neutral-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    <span>Cari Jurnal</span>
                </a>
                <a href="<?= $whatsapp ?>" class="inline-flex items-center justify-center px-6 py-2.5 rounded-lg bg-arka-yellow hover:bg-arka-yellowHover text-arka-dark font-extrabold text-xs uppercase tracking-wider transition-all duration-200 shadow-sm active:scale-95">
                    Hubungi Kami
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <button id="menu-toggle" class="lg:hidden p-2 text-arka-dark focus:outline-none" aria-label="Toggle Menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden lg:hidden border-b border-arka-borderLight bg-white px-6 py-5">
            <div class="flex flex-col gap-4 text-sm font-bold text-neutral-700">
                <a href="#hero" class="text-arka-dark">Home</a>
                <a href="#tentang" class="hover:text-arka-dark">Tentang Arka Institute</a>
                <a href="#layanan" class="hover:text-arka-dark">Layanan & Keunggulan</a>
                <a href="#katalog" class="hover:text-arka-dark">Katalog Jurnal</a>
                <a href="#testimoni" class="hover:text-arka-dark">Testimoni</a>
                <a href="#faq" class="hover:text-arka-dark">FAQ</a>
                <div class="pt-2">
                    <a href="<?= $whatsapp ?>" class="w-full inline-flex items-center justify-center py-3 rounded-lg bg-arka-yellow text-arka-dark font-extrabold text-xs uppercase tracking-wider">
                        Hubungi Kami (WhatsApp)
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- ==============================================
             HERO SECTION (2-Column: LOA Text on Left, Visual Mockup on Right)
             ============================================== -->
        <section id="hero" class="pt-12 sm:pt-16 lg:pt-20 pb-16 lg:pb-24 bg-white overflow-hidden border-b border-neutral-200 relative">
            <div class="max-w-7xl mx-auto px-6 lg:px-12">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                    
                    <!-- LEFT COLUMN: Headline, Subtitle & Action Buttons -->
                    <div class="lg:col-span-6 reveal flex flex-col justify-center text-center lg:text-left items-center lg:items-start">
                        
                        <!-- Big Headline H1 -->
                        <h1 class="text-4xl sm:text-6xl lg:text-[4.25rem] font-extrabold tracking-tight text-arka-dark leading-[1.06]">
                            LoA 3 Hari.<br>
                            Legal. Tanpa Was-was
                        </h1>

                        <!-- Subtitle -->
                        <p class="mt-5 text-base sm:text-lg text-neutral-600 leading-relaxed font-normal max-w-xl">
                            2.900+ naskah sudah terbit, giliran Anda. Bayar bertahap, naskah aman, slot review terbatas.
                        </p>

                        <!-- Tagline Microcopy -->
                        <div class="mt-4 font-mono text-xs sm:text-sm font-bold text-neutral-500 uppercase tracking-[0.25em]">
                            CEPAT // LEGAL // TERPERCAYA
                        </div>

                        <!-- Action Buttons -->
                        <div class="mt-8 flex flex-wrap items-center justify-center lg:justify-start gap-3.5">
                            <a href="<?= $whatsapp ?>?text=Halo%20Admin%20Arka%20Institute,%20saya%20ingin%20mengamankan%20slot%20LoA%20dan%20konsultasi%20naskah." target="_blank" rel="noopener" class="px-8 py-3.5 rounded-full bg-arka-yellow hover:bg-arka-yellowHover text-arka-dark font-extrabold text-xs sm:text-sm uppercase tracking-wider transition-all duration-200 shadow-md hover:shadow-lg active:scale-95 flex items-center gap-2">
                                <span>Amankan Slot Saya</span>
                                <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                            <a href="#katalog" class="px-7 py-3.5 rounded-full bg-white hover:bg-neutral-50 text-neutral-800 border border-neutral-300 font-bold text-xs sm:text-sm uppercase tracking-wider transition-all duration-200 shadow-sm hover:shadow active:scale-95">
                                Lihat Katalog Jurnal ↓
                            </a>
                        </div>

                        <!-- 3 Trust Micro-points below CTA -->
                        <div class="mt-10 pt-6 border-t border-neutral-200/80 flex flex-wrap items-center justify-center lg:justify-start gap-5 sm:gap-6 text-xs text-neutral-500 font-medium">
                            <div class="flex items-center gap-1.5">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span>DP di Awal, Lunas Pasca-LoA</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span>Turnitin Bebas Repository</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="text-emerald-500 font-bold">✓</span>
                                <span>NIB: 1103220012668</span>
                            </div>
                        </div>

                    </div>

                    <!-- RIGHT COLUMN: Single Dynamic Rotating Journal Card with Floating Trust Badges -->
                    <div class="lg:col-span-6 relative flex items-center justify-center py-6 sm:py-10 overflow-visible min-h-[440px] sm:min-h-[500px]">
                        
                        <!-- Ambient Soft Glow Behind Card -->
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[340px] sm:w-[480px] h-[340px] sm:h-[480px] bg-gradient-to-tr from-amber-200/40 via-blue-200/30 to-purple-200/30 rounded-full blur-3xl pointer-events-none -z-10"></div>

                        <!-- 1. Floating Badge "3 Hari" (Top Left) -->
                        <div class="absolute -top-3 sm:top-2 left-2 sm:left-6 lg:left-6 z-30 flex items-center gap-2 sm:gap-2.5 px-3.5 sm:px-4 py-1.5 sm:py-2 rounded-full bg-white shadow-[0_12px_25px_-5px_rgba(0,0,0,0.12)] border border-neutral-100 select-none animate-bounce" style="animation-duration: 4.5s;">
                            <span class="w-6 h-6 sm:w-7 sm:h-7 rounded-full bg-[#FF8A00] text-white flex items-center justify-center shrink-0 shadow-sm">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="9"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7v5l3 2"/>
                                </svg>
                            </span>
                            <span class="text-xs sm:text-sm font-extrabold text-[#0B1E48] tracking-tight whitespace-nowrap">3 Hari</span>
                        </div>

                        <!-- 2. Floating Badge "Legal" (Top Right) -->
                        <div class="absolute -top-3 sm:top-2 right-2 sm:right-6 lg:right-6 z-30 flex items-center gap-2 sm:gap-2.5 px-3.5 sm:px-4 py-1.5 sm:py-2 rounded-full bg-white shadow-[0_12px_25px_-5px_rgba(0,0,0,0.12)] border border-neutral-100 select-none animate-bounce" style="animation-duration: 5s;">
                            <span class="w-6 h-6 sm:w-7 sm:h-7 rounded-full bg-[#00BA63] text-white flex items-center justify-center shrink-0 shadow-sm">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </span>
                            <span class="text-xs sm:text-sm font-extrabold text-[#0B1E48] tracking-tight whitespace-nowrap">Legal</span>
                        </div>

                        <!-- 3. Floating Badge "LoA Terbit" (Bottom Right) -->
                        <div class="absolute -bottom-4 sm:bottom-1 right-2 sm:right-6 lg:right-4 z-30 w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-[#FFB82E] shadow-[0_12px_25px_-5px_rgba(255,184,46,0.6)] border-2 border-white flex flex-col items-center justify-center text-center p-1 select-none animate-bounce" style="animation-duration: 6s;">
                            <span class="text-base sm:text-xl font-black text-[#0B1E48] leading-none tracking-tight">LoA</span>
                            <span class="text-[10px] sm:text-xs font-black text-[#0B1E48] leading-tight mt-0.5 tracking-tight">Terbit</span>
                        </div>

                        <!-- SINGLE DYNAMIC ROTATING JOURNAL CARD CONTAINER -->
                        <div id="hero-journal-slider" class="relative w-[280px] sm:w-[320px] lg:w-[350px] h-[400px] sm:h-[450px] lg:h-[480px] rounded-[30px] overflow-hidden shadow-[0_25px_60px_-15px_rgba(0,0,0,0.25)] border-4 border-white bg-white group select-none">
                            
                            <!-- SLIDES (All Journals in ./assets/journal) -->
                            <?php foreach ($jurnals as $idx => $jurnal): ?>
                            <div class="hero-slide absolute inset-0 transition-opacity duration-700 ease-in-out cursor-pointer poster-preview-trigger <?= $idx === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0 pointer-events-none' ?>" 
                                 data-slide-index="<?= $idx ?>"
                                 data-poster="<?= htmlspecialchars($jurnal['image']) ?>" 
                                 data-title="<?= htmlspecialchars($jurnal['full_name']) ?>">
                                
                                <img src="<?= htmlspecialchars($jurnal['image']) ?>" alt="<?= htmlspecialchars($jurnal['name']) ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                                <!-- Top Left Pill: Journal Name -->
                                <div class="absolute top-3.5 left-3.5 px-3 py-1 rounded-full bg-black/75 backdrop-blur-md text-white text-xs font-mono font-bold shadow-md">
                                    <span><?= htmlspecialchars($jurnal['name']) ?></span>
                                </div>

                                <!-- Top Right Pill: Indexation (Sinta / Scopus / ISSN) -->
                                <div class="absolute top-3.5 right-3.5 px-3 py-1 rounded-full bg-white text-neutral-900 text-[10px] font-mono font-black uppercase shadow-md">
                                    <?= htmlspecialchars($jurnal['sinta']) ?>
                                </div>

                                <!-- Bottom Frosted Overlay Card -->
                                <div class="absolute bottom-3.5 inset-x-3.5 p-3.5 sm:p-4 rounded-[20px] bg-black/70 backdrop-blur-md text-white border border-white/10 shadow-xl">
                                    <div class="flex items-center justify-between">
                                        <div class="text-xs sm:text-sm font-extrabold tracking-tight truncate pr-2">
                                            <?= htmlspecialchars($jurnal['full_name']) ?>
                                        </div>
                                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping shrink-0"></span>
                                    </div>
                                    <div class="mt-1 text-[11px] text-neutral-300 truncate">
                                        <?= htmlspecialchars($jurnal['scope']) ?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>

                            <!-- Top Slider Progress Dots -->
                            <div class="absolute top-4 inset-x-0 z-20 flex justify-center gap-1.5 pointer-events-none">
                                <?php foreach ($jurnals as $idx => $jurnal): ?>
                                <span class="hero-dot w-2 h-1 rounded-full transition-all duration-300 <?= $idx === 0 ? 'bg-arka-yellow w-5' : 'bg-white/60' ?>"></span>
                                <?php endforeach; ?>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>

        <!-- ==============================================
             TENTANG ARKA INSTITUTE (Matching Reference 2 Layout & Copywriting)
             ============================================== -->
        <section id="tentang" class="py-16 sm:py-20 lg:py-24 bg-white border-b border-neutral-200">
            <span id="statement" class="sr-only"></span>
            <div class="max-w-7xl mx-auto px-6 lg:px-12">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                    
                    <!-- LEFT COLUMN: Copywriting & Service Checklist (Reference 2 Layout) -->
                    <div class="lg:col-span-7 reveal">
                        
                        <h2 class="text-3xl sm:text-4xl lg:text-[2.65rem] font-extrabold text-arka-dark leading-tight tracking-tight">
                            Tentang Arka Institute
                        </h2>

                        <p class="mt-5 text-base sm:text-lg text-neutral-600 leading-relaxed font-normal">
                            <strong class="font-bold text-arka-dark">Arka Institute</strong> adalah lembaga resmi di bawah naungan <strong class="font-bold text-arka-dark">PT. Arka Mega Nusantara</strong>, yang berbadan hukum dan terdaftar resmi di kementerian. Kami siap melayani publikasi jurnal ilmiah meliputi :
                        </p>

                        <!-- Checklist with Circular Checkmarks (Matching Reference 2) -->
                        <div class="mt-6 space-y-3.5">
                            <div class="flex items-start sm:items-center gap-3">
                                <span class="w-5 h-5 rounded-full border border-blue-600 text-blue-600 flex items-center justify-center shrink-0 mt-0.5 sm:mt-0">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                <span class="text-sm sm:text-base font-semibold text-neutral-800">Publikasi Jurnal Nasional (ber-ISSN)</span>
                            </div>

                            <div class="flex items-start sm:items-center gap-3">
                                <span class="w-5 h-5 rounded-full border border-blue-600 text-blue-600 flex items-center justify-center shrink-0 mt-0.5 sm:mt-0">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                <span class="text-sm sm:text-base font-semibold text-neutral-800">Publikasi Jurnal Nasional Terakreditasi (SINTA)</span>
                            </div>

                            <div class="flex items-start sm:items-center gap-3">
                                <span class="w-5 h-5 rounded-full border border-blue-600 text-blue-600 flex items-center justify-center shrink-0 mt-0.5 sm:mt-0">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                <span class="text-sm sm:text-base font-semibold text-neutral-800">Publikasi Jurnal Internasional Non-Bereputasi (Copernicus, EBSCO, DOAJ)</span>
                            </div>

                            <div class="flex items-start sm:items-center gap-3">
                                <span class="w-5 h-5 rounded-full border border-blue-600 text-blue-600 flex items-center justify-center shrink-0 mt-0.5 sm:mt-0">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                <span class="text-sm sm:text-base font-semibold text-neutral-800">Publikasi Jurnal Internasional Bereputasi (Scopus, WoS)</span>
                            </div>
                        </div>

                        <p class="mt-6 text-sm sm:text-base text-neutral-600 leading-relaxed font-normal">
                            Dengan dukungan lebih dari <strong class="font-bold text-arka-dark">2.900 penulis</strong> dari seluruh dunia, Arka Institute hadir sebagai pionir dalam pengembangan publikasi ilmiah nasional dan internasional.
                        </p>

                        <!-- CTA Button (Matching Reference 2 Style) -->
                        <div class="mt-8">
                            <a href="<?= $whatsapp ?>?text=Halo%20Admin%20Arka%20Institute,%20saya%20ingin%20konsultasi%20mengenai%20layanan%20publikasi%20jurnal." target="_blank" rel="noopener" class="inline-flex items-center gap-2.5 px-8 py-3.5 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-bold text-sm tracking-wide shadow-md hover:shadow-lg transition-all active:scale-95">
                                <span>Konsultasi Sekarang</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                        </div>

                    </div>

                    <!-- RIGHT COLUMN: Photorealistic Official Corporate Identity Cards Mockup (Matching Reference 2 Image) -->
                    <div class="lg:col-span-5 reveal">
                        <div class="relative rounded-[28px] overflow-hidden shadow-2xl border border-neutral-200/90 bg-[#D5CEC2] p-6 sm:p-10 flex items-center justify-center min-h-[380px] sm:min-h-[440px] select-none group">
                            
                            <!-- Wood Plank Texture (Light Oak Desk Surface) -->
                            <svg class="absolute inset-0 w-full h-full object-cover opacity-70 mix-blend-multiply pointer-events-none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 400 300">
                                <defs>
                                    <linearGradient id="wood1" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0%" stop-color="#F5F2EB"/>
                                        <stop offset="25%" stop-color="#E8E2D2"/>
                                        <stop offset="50%" stop-color="#F2EDE2"/>
                                        <stop offset="75%" stop-color="#E2DAC6"/>
                                        <stop offset="100%" stop-color="#EDE6D7"/>
                                    </linearGradient>
                                    <pattern id="planks" width="400" height="75" patternUnits="userSpaceOnUse">
                                        <rect width="400" height="73" fill="url(#wood1)"/>
                                        <line x1="0" y1="74" x2="400" y2="74" stroke="#BFB59E" stroke-width="1.5"/>
                                        <path d="M0,16 Q200,12 400,18 M0,38 Q180,42 400,36 M0,56 Q220,52 400,58" stroke="#CEC4AA" stroke-width="0.75" fill="none" opacity="0.45"/>
                                    </pattern>
                                </defs>
                                <rect width="400" height="300" fill="url(#planks)"/>
                            </svg>
                            <div class="absolute inset-0 bg-gradient-to-tr from-black/20 via-transparent to-white/30 pointer-events-none"></div>

                            <!-- CARD 1 (Back / Top: Navy Blue Corporate NPWP Tax Card) -->
                            <div class="absolute w-[270px] sm:w-[310px] h-[170px] sm:h-[190px] rounded-[16px] bg-gradient-to-br from-[#0B1E48] via-[#081738] to-[#040C1E] text-white p-4 sm:p-5 shadow-2xl border border-white/20 -rotate-[14deg] -translate-x-6 sm:-translate-x-8 -translate-y-6 sm:-translate-y-8 transition-transform duration-300 group-hover:-rotate-[17deg]">
                                <div class="flex items-center justify-between text-[8px] sm:text-[9px] font-mono text-neutral-300">
                                    <span class="tracking-widest">www.pajak.go.id</span>
                                    <span class="font-bold uppercase tracking-wider text-amber-300">Kemenkeu RI</span>
                                </div>
                                <div class="mt-3 flex items-center gap-2">
                                    <div class="w-8 h-8 rounded-full bg-amber-400/20 border border-amber-300 flex items-center justify-center font-black text-amber-300 text-xs shadow-inner">
                                        NPWP
                                    </div>
                                    <div>
                                        <div class="text-[9px] font-mono uppercase tracking-widest text-neutral-300">Wajib Pajak Badan</div>
                                        <div class="text-xs sm:text-sm font-extrabold tracking-tight font-mono text-white">61.251.294.7-423.000</div>
                                    </div>
                                </div>
                                <div class="mt-4 pt-2.5 border-t border-white/15">
                                    <div class="text-[10px] sm:text-[11px] font-black uppercase tracking-wider text-amber-300 truncate">
                                        PT. ARKA MEGA NUSANTARA
                                    </div>
                                    <div class="text-[8px] text-neutral-300 truncate mt-0.5 font-mono">
                                        KPP PRATAMA BANDUNG • JAWA BARAT
                                    </div>
                                </div>
                            </div>

                            <!-- CARD 2 (Front / Bottom: Official Gold & White NIB Legal License Card) -->
                            <div class="relative z-10 w-[285px] sm:w-[325px] h-[178px] sm:h-[198px] rounded-[16px] bg-white text-neutral-900 shadow-[0_25px_50px_-10px_rgba(0,0,0,0.5)] border border-neutral-200 overflow-hidden rotate-[5deg] translate-x-4 sm:translate-x-6 translate-y-4 sm:translate-y-6 transition-transform duration-300 group-hover:rotate-[2deg]">
                                
                                <!-- Top Gold Gradient Header Bar -->
                                <div class="bg-gradient-to-r from-[#FFB82E] via-[#F5B301] to-[#E0A300] px-4 py-2 flex items-center justify-between text-arka-dark border-b border-amber-500/20">
                                    <div class="flex items-center gap-1.5">
                                        <span class="w-3.5 h-3.5 rounded-full bg-arka-dark text-arka-yellow flex items-center justify-center text-[9px] font-black">✓</span>
                                        <span class="text-[9px] sm:text-[10px] font-mono font-black uppercase tracking-wider">OSS BKPM • NIB RESMI</span>
                                    </div>
                                    <span class="text-[8px] font-mono font-bold text-neutral-800">REPUBLIK INDONESIA</span>
                                </div>

                                <!-- Body: Large Bold NIB Number & Company Details -->
                                <div class="p-4 sm:p-4.5 flex flex-col justify-between h-[calc(100%-35px)]">
                                    <div>
                                        <div class="text-[8px] sm:text-[9px] font-mono font-bold text-neutral-400 uppercase tracking-widest">
                                            NOMOR INDUK BERUSAHA (NIB)
                                        </div>
                                        <div class="text-base sm:text-lg font-black tracking-tight text-arka-dark font-mono mt-0.5">
                                            <?= htmlspecialchars($nib) ?>
                                        </div>
                                        <div class="mt-1 text-xs sm:text-[13px] font-extrabold text-neutral-900 tracking-tight">
                                            PT. ARKA MEGA NUSANTARA
                                        </div>
                                    </div>

                                    <!-- Bottom Row: Address, QR Code & Seal Badge -->
                                    <div class="pt-2 border-t border-neutral-100 flex items-center justify-between gap-2">
                                        <div class="text-[7.5px] sm:text-[8px] text-neutral-500 leading-tight truncate font-sans">
                                            Gedung Graha Pos Indonesia Lt. 3, Bandung<br>
                                            <span class="text-emerald-600 font-bold">Terdaftar Resmi Kemenkumham RI</span>
                                        </div>
                                        <div class="w-8 h-8 rounded bg-neutral-900 p-0.5 shrink-0 flex items-center justify-center shadow-xs">
                                            <!-- Mini QR Code Representation -->
                                            <svg class="w-full h-full text-white fill-current" viewBox="0 0 24 24">
                                                <path d="M2 2h8v8H2V2zm2 2v4h4V4H4zm10-2h8v8h-8V2zm2 2v4h4V4h-4zM2 14h8v8H2v-8zm2 2v4h4v-4H4zm14-2h4v2h-4v-2zm-4 0h2v4h-2v-4zm2 4h4v4h-4v-4zm2-2h2v2h-2v-2z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- ==============================================
                     4-COLUMN STATS SECTION (Matching Reference 2 Layout Exactly)
                     ============================================== -->
                <div class="mt-16 sm:mt-20 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php foreach ($stats as $stat): ?>
                    <div class="reveal p-7 sm:p-8 bg-[#F4F4F6] rounded-none border border-neutral-200/80 flex flex-col justify-between transition hover:border-neutral-400">
                        <div>
                            <div class="text-4xl sm:text-5xl font-extrabold text-arka-dark tracking-tight leading-none mb-4">
                                <?= $stat['num'] ?>
                            </div>
                            <div class="text-sm font-bold text-arka-dark mb-2">
                                <?= $stat['label'] ?>
                            </div>
                            <p class="text-xs text-neutral-500 leading-relaxed">
                                <?= $stat['desc'] ?>
                            </p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>

        <!-- ==============================================
             CAPABILITIES & SERVICES (Reference 1 & 3 Card Design)
             ============================================== -->
        <section id="layanan" class="py-20 sm:py-28 bg-[#F8F8FA] border-t border-neutral-200">
            <div class="max-w-7xl mx-auto px-6 lg:px-12">
                
                <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-6 pb-12 border-b border-neutral-200">
                    <div class="reveal">
                        <div class="font-mono text-xs text-neutral-500 uppercase tracking-widest font-semibold mb-2">LAYANAN KAMI</div>
                        <h2 class="text-3xl sm:text-5xl font-extrabold text-arka-dark tracking-tight">
                            Layanan Terarah,<br>
                            Standar Editorial Presisi.
                        </h2>
                    </div>
                    <p class="max-w-md text-sm text-neutral-600 leading-relaxed reveal">
                        Seluruh proses publikasi dirancang sesuai dengan kriteria akreditasi jurnal ilmiah nasional dan indeksasi bereputasi global.
                    </p>
                </div>

                <!-- 4 Editorial Cards (Reference 1 & 3) -->
                <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
                    <?php foreach ($services as $service): ?>
                    <div class="reveal bg-white border border-neutral-200 p-8 sm:p-10 flex flex-col justify-between transition hover:border-arka-yellow hover:shadow-lg">
                        <div>
                            <div class="flex items-center justify-between mb-6">
                                <span class="font-mono text-xs font-semibold text-neutral-400 uppercase tracking-wider"><?= $service['tag'] ?></span>
                                <div class="flex items-center gap-1">
                                    <span class="w-2 h-2 bg-arka-dark"></span>
                                    <span class="w-2 h-2 bg-arka-yellow"></span>
                                    <span class="w-2 h-2 bg-neutral-300"></span>
                                </div>
                            </div>

                            <h3 class="text-2xl sm:text-3xl font-extrabold text-arka-dark tracking-tight">
                                <?= $service['title'] ?>
                            </h3>
                            <p class="text-sm font-medium text-neutral-500 mt-1">
                                <?= $service['sub'] ?>
                            </p>

                            <p class="mt-5 text-sm sm:text-base text-neutral-600 leading-relaxed">
                                <?= $service['desc'] ?>
                            </p>
                        </div>

                        <div class="mt-8 pt-6 border-t border-neutral-100 flex items-center justify-between">
                            <span class="font-mono text-xs font-semibold px-2.5 py-1 bg-[#F4F4F6] text-arka-dark">
                                <?= $service['badge'] ?>
                            </span>

                            <a href="<?= $whatsapp ?>" class="inline-flex items-center gap-1 text-xs font-extrabold uppercase tracking-wider text-arka-dark hover:text-arka-yellowHover transition">
                                <span>Konsultasi</span>
                                <span>↗</span>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>

        <!-- ==============================================
             CALL FOR PAPER (Carousel with Blurred Edges)
             ============================================== -->
        <?php
        $cfpImages = glob('./assets/call for paper/*.{png,jpg,jpeg,webp}', GLOB_BRACE);
        ?>
        <?php if (!empty($cfpImages)): ?>
        <section id="call-for-paper" class="py-20 sm:py-28 bg-[#F8F8FA] overflow-hidden relative border-t border-neutral-200">
            
            <!-- Ambient Background Glow -->
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[400px] bg-gradient-to-b from-arka-yellow/15 via-amber-200/10 to-transparent rounded-full blur-3xl pointer-events-none"></div>
            
            <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10">
                
                <!-- Section Header -->
                <div class="text-center mb-14 reveal">
                    <div class="font-mono text-xs text-amber-600 uppercase tracking-widest font-semibold mb-3">OPEN SUBMISSION</div>
                    <h2 class="text-3xl sm:text-5xl font-extrabold text-arka-dark tracking-tight">
                        Call For Paper
                    </h2>
                    <p class="mt-4 text-base text-neutral-500 max-w-xl mx-auto leading-relaxed">
                        Kirimkan naskah terbaik Anda. Slot terbatas untuk setiap edisi terbitan jurnal kami.
                    </p>
                </div>

            </div>

            <!-- Full-Width Carousel Container with Blurred Edges -->
            <div class="relative reveal overflow-hidden py-4">
                
                <!-- Left Blur Gradient Mask -->
                <div class="absolute left-0 top-0 bottom-0 w-24 sm:w-48 lg:w-72 bg-gradient-to-r from-[#F8F8FA] via-[#F8F8FA]/90 to-transparent z-20 pointer-events-none"></div>
                
                <!-- Right Blur Gradient Mask -->
                <div class="absolute right-0 top-0 bottom-0 w-24 sm:w-48 lg:w-72 bg-gradient-to-l from-[#F8F8FA] via-[#F8F8FA]/90 to-transparent z-20 pointer-events-none"></div>

                <!-- 3D Carousel Stage (Center-aligned Stage) -->
                <div id="cfp-stage" class="relative w-full h-[460px] sm:h-[540px] lg:h-[620px] flex items-center justify-center">
                    <?php foreach ($cfpImages as $cfpIdx => $cfpImg): ?>
                    <?php $cfpName = pathinfo($cfpImg, PATHINFO_FILENAME); ?>
                    <div class="cfp-card absolute w-[280px] sm:w-[360px] lg:w-[420px] cursor-pointer select-none transition-all duration-500 ease-out will-change-transform"
                         data-cfp-index="<?= $cfpIdx ?>"
                         data-poster="<?= htmlspecialchars($cfpImg) ?>"
                         data-title="Call For Paper — <?= htmlspecialchars(ucwords(str_replace(['call for paper_', '_v2-1', '_v2', '_'], ['', '', '', ' '], $cfpName))) ?>">
                        <div class="relative rounded-2xl sm:rounded-3xl overflow-hidden shadow-2xl border border-neutral-200/90 group bg-white">
                            <img src="<?= htmlspecialchars($cfpImg) ?>" 
                                 alt="Call For Paper <?= htmlspecialchars(ucwords(str_replace(['call for paper_', '_v2-1', '_v2', '_'], ['', '', '', ' '], $cfpName))) ?>" 
                                 class="w-full aspect-[3/4] object-cover transition-transform duration-500 group-hover:scale-102"
                                 loading="lazy">
                            
                            <!-- Bottom Frosted Label -->
                            <div class="absolute bottom-0 inset-x-0 p-4 sm:p-5 bg-gradient-to-t from-black/85 via-black/40 to-transparent">
                                <div class="text-xs sm:text-sm font-extrabold text-white tracking-tight">
                                    <?= htmlspecialchars(ucwords(str_replace(['call for paper_', '_v2-1', '_v2', '_'], ['', '', '', ' '], $cfpName))) ?>
                                </div>
                                <div class="mt-1 text-[10px] sm:text-xs text-amber-300 font-semibold flex items-center gap-1.5">
                                    <span class="w-1.5 h-1.5 rounded-full bg-arka-yellow animate-pulse"></span>
                                    Open Submission • Slot Terbatas
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Carousel Navigation Dots -->
                <div class="flex justify-center gap-2 mt-6 sm:mt-8 relative z-30">
                    <?php foreach ($cfpImages as $cfpIdx => $cfpImg): ?>
                    <button class="cfp-dot w-2.5 h-2.5 rounded-full transition-all duration-300 <?= $cfpIdx === 0 ? 'bg-arka-yellow w-8' : 'bg-neutral-300 hover:bg-neutral-400' ?>" 
                            data-cfp-dot="<?= $cfpIdx ?>" 
                            aria-label="Go to slide <?= $cfpIdx + 1 ?>"></button>
                    <?php endforeach; ?>
                </div>

                <!-- Carousel Arrow Buttons -->
                <button id="cfp-prev" class="absolute left-3 sm:left-8 lg:left-14 top-1/2 -translate-y-1/2 z-30 w-11 h-11 sm:w-13 sm:h-13 rounded-full bg-white/90 hover:bg-white backdrop-blur-md border border-neutral-200 text-arka-dark flex items-center justify-center transition-all duration-200 active:scale-90 shadow-lg hover:shadow-xl hover:border-amber-400" aria-label="Previous">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button id="cfp-next" class="absolute right-3 sm:right-8 lg:right-14 top-1/2 -translate-y-1/2 z-30 w-11 h-11 sm:w-13 sm:h-13 rounded-full bg-white/90 hover:bg-white backdrop-blur-md border border-neutral-200 text-arka-dark flex items-center justify-center transition-all duration-200 active:scale-90 shadow-lg hover:shadow-xl hover:border-amber-400" aria-label="Next">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>

            <!-- CTA Below Carousel -->
            <div class="text-center mt-12 relative z-10 reveal">
                <a href="<?= $whatsapp ?>?text=Halo%20Admin%20Arka%20Institute,%20saya%20tertarik%20submit%20naskah%20untuk%20Call%20For%20Paper." target="_blank" rel="noopener" class="inline-flex items-center gap-2.5 px-8 py-3.5 rounded-full bg-arka-yellow hover:bg-arka-yellowHover text-arka-dark font-extrabold text-xs sm:text-sm uppercase tracking-wider transition-all duration-200 shadow-lg hover:shadow-xl active:scale-95">
                    <span>Submit Naskah Sekarang</span>
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
            
        </section>
        <?php endif; ?>

        <!-- ==============================================
             KATALOG JURNAL (Card Design with Filters)
             ============================================== -->
        <section id="katalog" class="py-20 sm:py-28 bg-white border-t border-neutral-200">
            <div class="max-w-7xl mx-auto px-6 lg:px-12">
                
                <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-8 pb-10 border-b border-neutral-200">
                    <div class="reveal">
                        <div class="font-mono text-xs text-neutral-500 uppercase tracking-widest font-semibold mb-2">JOURNAL CATALOGUE</div>
                        <h2 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-arka-dark">
                            Temukan Jurnal Tepat<br>
                            untuk Naskah Anda.
                        </h2>
                    </div>

                    <div id="catalog-filters" class="flex flex-wrap gap-2 reveal">
                        <?php foreach ($filters as $label => $value): ?>
                        <button data-filter="<?= $value ?>" class="filter-btn px-4 py-2 rounded-none border border-neutral-200 font-mono text-xs font-bold uppercase tracking-wider transition-all duration-200 <?= $value === 'all' ? 'active-filter bg-arka-yellow text-arka-dark border-arka-yellow' : 'bg-[#F4F4F6] text-neutral-600 hover:border-neutral-400 hover:text-arka-dark' ?>">
                            <?= $label ?>
                        </button>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Grid of Journals -->
                <div id="journal-grid" class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach ($jurnals as $jurnal): ?>
                    <article class="journal-card group bg-white border border-neutral-200 hover:border-arka-yellow flex flex-col justify-between transition-all duration-300 hover:shadow-xl overflow-hidden" data-sinta="<?= $jurnal['sinta'] ?>" data-name="<?= htmlspecialchars($jurnal['name']) ?>">
                        
                        <!-- Poster Preview Container (Mobile friendly & balanced) -->
                        <div class="relative bg-[#F8F8FA] overflow-hidden border-b border-neutral-200 h-56 sm:h-60 flex items-center justify-center p-3 sm:p-4 group/poster cursor-pointer poster-preview-trigger" data-poster="<?= htmlspecialchars($jurnal['image']) ?>" data-title="<?= htmlspecialchars($jurnal['full_name']) ?>">
                            <img src="<?= htmlspecialchars($jurnal['image']) ?>" alt="Call for Paper <?= htmlspecialchars($jurnal['name']) ?>" class="w-full h-full object-contain transition-transform duration-300 group-hover:scale-[1.02]" loading="lazy">
                            
                            <!-- Accreditation Badge Floating on Top Right -->
                            <div class="absolute top-3 right-3 z-10">
                                <span class="px-3 py-1 bg-white/95 backdrop-blur-sm border border-neutral-300 font-mono text-xs font-black text-arka-dark uppercase shadow-sm">
                                    <?= htmlspecialchars($jurnal['sinta']) ?>
                                </span>
                            </div>

                            <!-- Hover Overlay: Perbesar Poster -->
                            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover/poster:opacity-100 transition-opacity duration-200 flex items-center justify-center">
                                <span class="px-4 py-2 bg-white text-arka-dark text-xs font-bold font-mono uppercase tracking-wider shadow-lg flex items-center gap-1.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-arka-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3H7"/></svg>
                                    <span>Lihat Poster</span>
                                </span>
                            </div>
                        </div>

                        <!-- Card Body Details -->
                        <div class="p-6 flex flex-col flex-1 justify-between bg-white">
                            <div>
                                <div class="flex items-center justify-between gap-2">
                                    <span class="font-mono text-[11px] uppercase tracking-widest text-neutral-400 font-semibold">Official Journal</span>
                                    <span class="font-mono text-[11px] text-neutral-500 font-medium"><?= htmlspecialchars($jurnal['freq']) ?></span>
                                </div>

                                <h3 class="text-xl sm:text-2xl font-extrabold text-arka-dark tracking-tight mt-1">
                                    <?= htmlspecialchars($jurnal['name']) ?>
                                </h3>

                                <p class="text-xs text-neutral-500 mt-1 font-medium leading-relaxed">
                                    <?= htmlspecialchars($jurnal['full_name']) ?>
                                </p>

                                <div class="mt-4 pt-3 border-t border-neutral-100">
                                    <p class="text-xs sm:text-sm text-neutral-600 leading-relaxed">
                                        <strong class="text-neutral-700 font-semibold">Scope:</strong> <?= htmlspecialchars($jurnal['scope']) ?>
                                    </p>
                                </div>
                            </div>

                            <div class="mt-6 pt-5 border-t border-neutral-100">
                                <a href="<?= $whatsapp ?>?text=Halo%20Admin%20Arka%20Institute,%20saya%20ingin%20konsultasi%20publikasi%20di%20jurnal%20<?= urlencode($jurnal['name']) ?>" target="_blank" rel="noopener" class="w-full py-3 bg-[#F4F4F6] hover:bg-arka-yellow text-arka-dark border border-neutral-200 hover:border-arka-yellow font-extrabold text-xs uppercase tracking-wider flex items-center justify-center gap-2 transition duration-200 shadow-sm active:scale-[0.99]">
                                    <span>Konsultasi Publikasi ↗</span>
                                </a>
                            </div>
                        </div>

                    </article>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>

        <!-- ==============================================
             ALUR PUBLIKASI JURNAL NASIONAL (11-Step Flow)
             ============================================== -->
        <style>
            .alur-grid-row {
                display: flex;
                flex-direction: column;
                gap: 12px;
            }
            @media (min-width: 768px) {
                .alur-grid-row {
                    display: grid;
                    grid-template-columns: 1fr 48px 1fr 48px 1fr;
                    gap: 0;
                    align-items: center;
                }
            }
            .alur-card-box {
                background: #FFFFFF;
                border: 1.5px solid #E5E7EB;
                border-radius: 18px;
                padding: 18px 20px;
                display: flex;
                align-items: center;
                gap: 14px;
                transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
                box-shadow: 0 2px 8px -2px rgba(0, 0, 0, 0.04);
                min-height: 110px;
                position: relative;
            }
            .alur-card-box:hover {
                border-color: #F5B301;
                transform: translateY(-3px);
                box-shadow: 0 12px 28px -6px rgba(245, 179, 1, 0.18), 0 4px 12px -2px rgba(0, 0, 0, 0.04);
            }
            .alur-num-badge {
                width: 42px;
                height: 42px;
                border-radius: 50%;
                background: #FFFFFF;
                border: 2px solid #F5B301;
                color: #0C0E12;
                font-weight: 900;
                font-size: 17px;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-shrink: 0;
                box-shadow: 0 2px 6px rgba(245, 179, 1, 0.2);
            }
            .alur-icon-badge {
                width: 42px;
                height: 42px;
                border-radius: 12px;
                background: linear-gradient(135deg, #F5B301 0%, #E0A300 100%);
                color: #0C0E12;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-shrink: 0;
                box-shadow: 0 3px 8px rgba(245, 179, 1, 0.25);
            }
            .alur-curved-connector {
                display: none;
                position: absolute;
                pointer-events: none;
                z-index: 20;
            }
            @media (min-width: 768px) {
                .alur-curved-connector {
                    display: block;
                }
            }
        </style>

        <section id="alur" class="py-20 sm:py-28 bg-[#F8F9FA] border-t border-neutral-200 overflow-hidden">
            <div class="max-w-6xl mx-auto px-6 lg:px-8">
                
                <div class="text-center mb-16 sm:mb-20 reveal">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-100/70 border border-amber-300 text-amber-900 text-xs font-bold uppercase tracking-wider mb-4">
                        <span class="w-2 h-2 rounded-full bg-arka-yellow animate-pulse"></span>
                        Transparan & Terstruktur
                    </div>
                    <h2 class="text-3xl sm:text-5xl font-extrabold tracking-tight text-arka-dark">
                        Alur Publikasi <span class="text-arka-yellow">Jurnal Nasional</span>
                    </h2>
                    <p class="mt-4 text-sm sm:text-base text-neutral-500 max-w-2xl mx-auto leading-relaxed">
                        Proses transparan dan terukur dari pengiriman naskah awal hingga terbit resmi ber-DOI dan e-sertifikat.
                    </p>
                </div>

                <?php
                $alurSteps = [
                    1 => [
                        'num' => '1',
                        'title' => 'Artikel Masuk',
                        'desc' => 'Penulis mengirimkan artikel melalui WA admin/email. Artikel akan tercatat dan diverifikasi kelengkapannya.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>'
                    ],
                    2 => [
                        'num' => '2',
                        'title' => 'Screening & Cek',
                        'desc' => 'Tim melakukan pengecekan awal terkait kesesuaian fokus, ruang lingkup, dan kelengkapan naskah.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>'
                    ],
                    3 => [
                        'num' => '3',
                        'title' => 'Editing Template',
                        'desc' => 'Artikel disesuaikan dengan template jurnal (format, sitasi Mendeley, struktur) untuk standardisasi.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>'
                    ],
                    4 => [
                        'num' => '4',
                        'title' => 'Cek Plagiasi',
                        'desc' => 'Artikel dicek oleh Turnitin resmi 100% No Repository untuk memastikan orisinalitas karya.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>'
                    ],
                    5 => [
                        'num' => '5',
                        'title' => 'Submit Artikel',
                        'desc' => 'Artikel yang lolos pengecekan dikirim langsung ke editor dan reviewer untuk penelaahan ilmiah.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>'
                    ],
                    6 => [
                        'num' => '6',
                        'title' => 'Review Artikel',
                        'desc' => 'Reviewer independen menilai artikel secara keseluruhan sesuai kaidah standar IMRAD.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>'
                    ],
                    7 => [
                        'num' => '7',
                        'title' => 'Revisi Artikel',
                        'desc' => 'Tim khusus mendampingi proses revisi berdasarkan catatan dan saran perbaikan dari reviewer.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>'
                    ],
                    8 => [
                        'num' => '8',
                        'title' => 'Letter Accepted (LoA)',
                        'desc' => 'Setelah dinyatakan layak terbit, penulis menerima Letter of Acceptance resmi dari dewan redaksi jurnal.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>'
                    ],
                    9 => [
                        'num' => '9',
                        'title' => 'Review Akhir & Proofreading',
                        'desc' => 'Pemeriksaan mendalam dan proofreading akhir tata bahasa untuk kesempurnaan naskah sebelum publish.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>'
                    ],
                    10 => [
                        'num' => '10',
                        'title' => 'Revisi Akhir / Fiksasi',
                        'desc' => 'Admin mengirimkan naskah fiksasi final kepada penulis untuk konfirmasi sebelum terbit di sistem.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>'
                    ],
                    11 => [
                        'num' => '11',
                        'title' => 'Terbit & E-Sertifikat',
                        'desc' => 'Artikel terbit resmi pada volume & nomor aktif dengan DOI terindeks, dan e-sertifikat penulis dikirimkan.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>'
                    ]
                ];

                function renderAlurCard($step) {
                    ?>
                    <div class="alur-card-box">
                        <div class="alur-num-badge"><?= $step['num'] ?></div>
                        <div class="alur-icon-badge">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <?= $step['icon'] ?>
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0 pr-1">
                            <h4 class="text-xs sm:text-[13px] font-black text-arka-dark uppercase tracking-wider mb-1 line-clamp-1">
                                <?= htmlspecialchars($step['title']) ?>
                            </h4>
                            <p class="text-[11px] sm:text-xs text-neutral-500 leading-relaxed line-clamp-3">
                                <?= htmlspecialchars($step['desc']) ?>
                            </p>
                        </div>
                    </div>
                    <?php
                }

                function renderMobileDownArrow() {
                    ?>
                    <div class="flex md:hidden justify-center py-1">
                        <svg class="w-6 h-7" viewBox="0 0 24 28" fill="none">
                            <line x1="12" y1="2" x2="12" y2="18" stroke="#F5B301" stroke-width="2.5" stroke-dasharray="4 3" stroke-linecap="round"/>
                            <polygon points="6,17 12,26 18,17" fill="#F5B301"/>
                        </svg>
                    </div>
                    <?php
                }
                ?>

                <div class="space-y-8 sm:space-y-10">
                    
                    <!-- ==========================================
                         ROW 1: Step 1 -> Step 2 -> Step 3
                         ========================================== -->
                    <div class="alur-grid-row reveal relative">
                        <!-- Step 1 -->
                        <div>
                            <?php renderAlurCard($alurSteps[1]); ?>
                        </div>

                        <!-- Arrow 1 -> 2 (Desktop) -->
                        <div class="hidden md:flex items-center justify-center">
                            <svg class="w-12 h-6" viewBox="0 0 48 24" fill="none">
                                <line x1="2" y1="12" x2="36" y2="12" stroke="#F5B301" stroke-width="2.5" stroke-dasharray="5 4" stroke-linecap="round"/>
                                <polygon points="34,6 46,12 34,18" fill="#F5B301"/>
                            </svg>
                        </div>
                        <?php renderMobileDownArrow(); ?>

                        <!-- Step 2 -->
                        <div>
                            <?php renderAlurCard($alurSteps[2]); ?>
                        </div>

                        <!-- Arrow 2 -> 3 (Desktop) -->
                        <div class="hidden md:flex items-center justify-center">
                            <svg class="w-12 h-6" viewBox="0 0 48 24" fill="none">
                                <line x1="2" y1="12" x2="36" y2="12" stroke="#F5B301" stroke-width="2.5" stroke-dasharray="5 4" stroke-linecap="round"/>
                                <polygon points="34,6 46,12 34,18" fill="#F5B301"/>
                            </svg>
                        </div>
                        <?php renderMobileDownArrow(); ?>

                        <!-- Step 3 (Has curved connector on right side down to Step 4) -->
                        <div class="relative">
                            <?php renderAlurCard($alurSteps[3]); ?>

                            <!-- Curved Loop Down: Step 3 -> Step 4 (Desktop) -->
                            <div class="alur-curved-connector -right-12 top-1/2 w-12 h-[calc(100%+40px)]">
                                <svg class="w-full h-full" viewBox="0 0 48 150" fill="none" preserveAspectRatio="none">
                                    <path d="M 0,16 C 42,16 42,134 8,134" stroke="#F5B301" stroke-width="2.5" stroke-dasharray="6 4" fill="none"/>
                                    <polygon points="14,128 0,134 14,140" fill="#F5B301"/>
                                </svg>
                            </div>
                        </div>
                        <?php renderMobileDownArrow(); ?>
                    </div>


                    <!-- ==========================================
                         ROW 2: Step 6 <- Step 5 <- Step 4
                         On desktop: [Step 6] <-- [Step 5] <-- [Step 4]
                         On mobile:  Step 4 -> Step 5 -> Step 6
                         ========================================== -->
                    <div class="alur-grid-row reveal relative">
                        <!-- Step 6 (Desktop Col 1, Mobile 3rd) -->
                        <div class="order-3 md:order-1 relative">
                            <?php renderAlurCard($alurSteps[6]); ?>

                            <!-- Curved Loop Down: Step 6 -> Step 7 (Desktop) -->
                            <div class="alur-curved-connector -left-12 top-1/2 w-12 h-[calc(100%+40px)]">
                                <svg class="w-full h-full" viewBox="0 0 48 150" fill="none" preserveAspectRatio="none">
                                    <path d="M 48,16 C 6,16 6,134 40,134" stroke="#F5B301" stroke-width="2.5" stroke-dasharray="6 4" fill="none"/>
                                    <polygon points="34,128 48,134 34,140" fill="#F5B301"/>
                                </svg>
                            </div>
                        </div>

                        <!-- Arrow 5 <- 6 (Desktop: Left Arrow between 6 and 5) -->
                        <div class="order-3 md:order-2 hidden md:flex items-center justify-center">
                            <svg class="w-12 h-6" viewBox="0 0 48 24" fill="none">
                                <line x1="46" y1="12" x2="12" y2="12" stroke="#F5B301" stroke-width="2.5" stroke-dasharray="5 4" stroke-linecap="round"/>
                                <polygon points="14,6 2,12 14,18" fill="#F5B301"/>
                            </svg>
                        </div>

                        <!-- Step 5 (Desktop Col 3, Mobile 2nd) -->
                        <div class="order-2 md:order-3">
                            <?php renderAlurCard($alurSteps[5]); ?>
                            <?php renderMobileDownArrow(); ?>
                        </div>

                        <!-- Arrow 4 <- 5 (Desktop: Left Arrow between 5 and 4) -->
                        <div class="order-2 md:order-4 hidden md:flex items-center justify-center">
                            <svg class="w-12 h-6" viewBox="0 0 48 24" fill="none">
                                <line x1="46" y1="12" x2="12" y2="12" stroke="#F5B301" stroke-width="2.5" stroke-dasharray="5 4" stroke-linecap="round"/>
                                <polygon points="14,6 2,12 14,18" fill="#F5B301"/>
                            </svg>
                        </div>

                        <!-- Step 4 (Desktop Col 5, Mobile 1st) -->
                        <div class="order-1 md:order-5">
                            <?php renderAlurCard($alurSteps[4]); ?>
                            <?php renderMobileDownArrow(); ?>
                        </div>

                        <div class="order-4 md:hidden">
                            <?php renderMobileDownArrow(); ?>
                        </div>
                    </div>


                    <!-- ==========================================
                         ROW 3: Step 7 -> Step 8 -> Step 9
                         ========================================== -->
                    <div class="alur-grid-row reveal relative">
                        <!-- Step 7 -->
                        <div>
                            <?php renderAlurCard($alurSteps[7]); ?>
                        </div>

                        <!-- Arrow 7 -> 8 (Desktop) -->
                        <div class="hidden md:flex items-center justify-center">
                            <svg class="w-12 h-6" viewBox="0 0 48 24" fill="none">
                                <line x1="2" y1="12" x2="36" y2="12" stroke="#F5B301" stroke-width="2.5" stroke-dasharray="5 4" stroke-linecap="round"/>
                                <polygon points="34,6 46,12 34,18" fill="#F5B301"/>
                            </svg>
                        </div>
                        <?php renderMobileDownArrow(); ?>

                        <!-- Step 8 -->
                        <div>
                            <?php renderAlurCard($alurSteps[8]); ?>
                        </div>

                        <!-- Arrow 8 -> 9 (Desktop) -->
                        <div class="hidden md:flex items-center justify-center">
                            <svg class="w-12 h-6" viewBox="0 0 48 24" fill="none">
                                <line x1="2" y1="12" x2="36" y2="12" stroke="#F5B301" stroke-width="2.5" stroke-dasharray="5 4" stroke-linecap="round"/>
                                <polygon points="34,6 46,12 34,18" fill="#F5B301"/>
                            </svg>
                        </div>
                        <?php renderMobileDownArrow(); ?>

                        <!-- Step 9 (Has curved connector on right side down to Step 10) -->
                        <div class="relative">
                            <?php renderAlurCard($alurSteps[9]); ?>

                            <!-- Curved Loop Down: Step 9 -> Step 10 (Desktop) -->
                            <div class="alur-curved-connector -right-12 top-1/2 w-12 h-[calc(100%+40px)]">
                                <svg class="w-full h-full" viewBox="0 0 48 150" fill="none" preserveAspectRatio="none">
                                    <path d="M 0,16 C 42,16 42,134 8,134" stroke="#F5B301" stroke-width="2.5" stroke-dasharray="6 4" fill="none"/>
                                    <polygon points="14,128 0,134 14,140" fill="#F5B301"/>
                                </svg>
                            </div>
                        </div>
                        <?php renderMobileDownArrow(); ?>
                    </div>


                    <!-- ==========================================
                         ROW 4: [Empty] [Empty] Step 11 <- Step 10
                         On desktop: [Empty] | [Empty] | [Step 11] <-- [Step 10]
                         On mobile:  Step 10 -> Step 11
                         ========================================== -->
                    <div class="alur-grid-row reveal relative">
                        <!-- Desktop Spacer: Col 1 Empty -->
                        <div class="hidden md:block"></div>
                        <!-- Desktop Spacer: Col 2 Empty -->
                        <div class="hidden md:block"></div>

                        <!-- Step 11 (Desktop Col 3, Mobile 2nd) -->
                        <div class="order-2 md:order-3">
                            <?php renderAlurCard($alurSteps[11]); ?>
                        </div>

                        <!-- Arrow 10 <- 11 (Desktop: Left Arrow from 10 to 11) -->
                        <div class="hidden md:flex order-2 md:order-4 items-center justify-center">
                            <svg class="w-12 h-6" viewBox="0 0 48 24" fill="none">
                                <line x1="46" y1="12" x2="12" y2="12" stroke="#F5B301" stroke-width="2.5" stroke-dasharray="5 4" stroke-linecap="round"/>
                                <polygon points="14,6 2,12 14,18" fill="#F5B301"/>
                            </svg>
                        </div>

                        <!-- Step 10 (Desktop Col 5, Mobile 1st) -->
                        <div class="order-1 md:order-5">
                            <?php renderAlurCard($alurSteps[10]); ?>
                            <?php renderMobileDownArrow(); ?>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!-- ==============================================
             TESTIMONIAL SECTION (Explore Stories)
             ============================================== -->
        <style>
            .testi-scrollbar-hide::-webkit-scrollbar {
                display: none;
            }
            .testi-scrollbar-hide {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }
        </style>
        <section id="testimoni" class="py-20 sm:py-28 bg-white border-t border-neutral-200 overflow-hidden">
            <div class="max-w-7xl mx-auto px-6 lg:px-12">
                
                <!-- Section Header -->
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-10 reveal">
                    <div class="flex flex-wrap items-center gap-3.5">
                        <span class="px-4 py-1.5 rounded-full border border-neutral-300 text-xs font-bold uppercase tracking-wider text-neutral-700 bg-white shadow-xs">
                            Testimoni
                        </span>
                        <h2 class="text-2xl sm:text-4xl font-extrabold tracking-tight text-arka-dark">
                            Bukti Kepuasan Klien
                        </h2>
                    </div>

                    <div class="flex items-center gap-3">
                        <a href="<?= $whatsapp ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full bg-arka-dark text-white text-xs font-bold hover:bg-neutral-800 transition-all shadow-sm group">
                            <span>Konsultasi Publikasi</span>
                            <span class="text-arka-yellow group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">↗</span>
                        </a>
                    </div>
                </div>

                <?php
                $testimonials = [
                    [
                        'img' => 'assets/testi/testi ai.png',
                        'pill' => 'LoA Terbit',
                        'tag' => 'Fast Track',
                        'title' => 'LoA Resmi Terbit Cepat & Sesuai Target Deadline'
                    ],
                    [
                        'img' => 'assets/testi/testi ai-1.png',
                        'pill' => 'SINTA 2',
                        'tag' => 'Pendampingan',
                        'title' => 'Pendampingan Intensif Hingga Naskah Diterima'
                    ],
                    [
                        'img' => 'assets/testi/testi ai-2.png',
                        'pill' => 'Turnitin ORI',
                        'tag' => 'No Repository',
                        'title' => 'Turnitin Resmi 100% Aman & Bebas Plagiasi'
                    ],
                    [
                        'img' => 'assets/testi/testi ai-3.png',
                        'pill' => 'Reviewer IMRAD',
                        'tag' => 'Kualitas Teruji',
                        'title' => 'Reviewer Sangat Teliti dan Komunikatif'
                    ],
                    [
                        'img' => 'assets/testi/testi ai-4.png',
                        'pill' => 'Syarat Lulus',
                        'tag' => 'Pascasarjana',
                        'title' => 'Sangat Membantu Memenuhi Syarat Kelulusan'
                    ],
                    [
                        'img' => 'assets/testi/testi ai-5.png',
                        'pill' => 'Garansi Terbit',
                        'tag' => 'Amanah 100%',
                        'title' => 'Layanan Transparan, Ramah, dan Sangat Terpercaya'
                    ],
                    [
                        'img' => 'assets/testi/testi ai-6.png',
                        'pill' => 'Jurnal Nasional',
                        'tag' => 'Terakreditasi',
                        'title' => 'Naskah Terbit Tepat Waktu Tanpa Kendala'
                    ],
                    [
                        'img' => 'assets/testi/testi ai-7.png',
                        'pill' => 'Scopus / WoS',
                        'tag' => 'Bereputasi',
                        'title' => 'Pendampingan Standar Jurnal Internasional'
                    ],
                    [
                        'img' => 'assets/testi/testi ai-8.png',
                        'pill' => 'E-Sertifikat',
                        'tag' => 'Bukti Resmi',
                        'title' => 'DOI Langsung Aktif Beserta E-Sertifikat Lengkap'
                    ],
                    [
                        'img' => 'assets/testi/testi ai-9.png',
                        'pill' => 'Slot Terbatas',
                        'tag' => 'Fast Response',
                        'title' => 'Admin Responsif 24 Jam Memberi Solusi Cepat'
                    ],
                    [
                        'img' => 'assets/testi/testi ai-10.png',
                        'pill' => 'Biaya Transparan',
                        'tag' => 'Terjangkau',
                        'title' => 'Sistem Pembayaran Bertahap dan Sangat Jelas'
                    ],
                    [
                        'img' => 'assets/testi/testi ai-11.png',
                        'pill' => 'Rekomendasi Dosen',
                        'tag' => 'Mitra Kampus',
                        'title' => 'Pilihan Utama Dosen dan Peneliti se-Indonesia'
                    ]
                ];
                ?>

                <!-- Testimonials Track / Carousel -->
                <div id="testi-track" class="flex gap-5 sm:gap-6 overflow-x-auto testi-scrollbar-hide scroll-smooth snap-x snap-mandatory py-4 px-1 reveal">
                    <?php foreach ($testimonials as $idx => $item): ?>
                    <div class="testi-card-item shrink-0 w-[270px] sm:w-[320px] md:w-[340px] aspect-[4/5] rounded-[28px] overflow-hidden relative group cursor-pointer shadow-md hover:shadow-2xl transition-all duration-300 bg-neutral-900 border border-neutral-200/80 snap-start select-none"
                         onclick="openTestiModal('<?= htmlspecialchars($item['img']) ?>', '<?= htmlspecialchars($item['title']) ?>')">
                        
                        <!-- Poster Image -->
                        <img src="<?= htmlspecialchars($item['img']) ?>" 
                             alt="<?= htmlspecialchars($item['title']) ?>" 
                             class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105"
                             loading="lazy">

                        <!-- Dark Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-black/30 pointer-events-none"></div>

                        <!-- Top Right Pill Badge (like reference design) -->
                        <div class="absolute top-4 right-4 z-10">
                            <span class="inline-flex items-center px-3.5 py-1 rounded-full bg-white/20 backdrop-blur-md border border-white/30 text-white text-[11px] font-bold tracking-wide shadow-xs">
                                <?= htmlspecialchars($item['pill']) ?>
                            </span>
                        </div>

                        <!-- Bottom Glassmorphism Overlay Box (like reference design) -->
                        <div class="absolute bottom-4 left-4 right-4 p-4 rounded-2xl bg-white/15 backdrop-blur-xl border border-white/25 text-white transition-all duration-300 group-hover:bg-white/25 group-hover:border-white/40 shadow-lg z-10">
                            <div class="flex items-end justify-between gap-3">
                                <div class="flex-1 min-w-0">
                                    <span class="inline-block px-2.5 py-0.5 rounded-full bg-arka-yellow text-arka-dark text-[10px] font-black uppercase tracking-wider mb-1.5 shadow-xs">
                                        <?= htmlspecialchars($item['tag']) ?>
                                    </span>
                                    <p class="text-xs sm:text-sm font-bold text-white leading-snug line-clamp-2">
                                        <?= htmlspecialchars($item['title']) ?>
                                    </p>
                                </div>
                                <div class="w-9 h-9 rounded-full bg-white text-arka-dark flex items-center justify-center font-black text-sm shrink-0 shadow-md group-hover:bg-arka-yellow group-hover:scale-110 transition-all">
                                    ↗
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Bottom Navigation & Description (matching reference footer) -->
                <div class="flex flex-col sm:flex-row items-center justify-between gap-6 mt-8 sm:mt-10 reveal">
                    <!-- Left: Arrow Buttons -->
                    <div class="flex items-center gap-3">
                        <button id="testi-prev" aria-label="Previous Testimonial" class="w-12 h-12 rounded-full border border-neutral-300 bg-white text-arka-dark hover:bg-arka-dark hover:text-white hover:border-arka-dark transition-all flex items-center justify-center font-bold text-lg shadow-xs active:scale-95">
                            ←
                        </button>
                        <button id="testi-next" aria-label="Next Testimonial" class="w-12 h-12 rounded-full border border-neutral-300 bg-white text-arka-dark hover:bg-arka-dark hover:text-white hover:border-arka-dark transition-all flex items-center justify-center font-bold text-lg shadow-xs active:scale-95">
                            →
                        </button>
                    </div>

                    <!-- Right: Supporting Text -->
                    <p class="text-xs sm:text-sm text-neutral-500 max-w-md text-center sm:text-right leading-relaxed">
                        Bergabung bersama lebih dari 2.900+ dosen, peneliti, dan akademisi yang telah sukses mempublikasikan karya ilmiah mereka bersama Arka Institute.
                    </p>
                </div>

            </div>
        </section>

        <!-- Testimonial Lightbox Modal -->
        <div id="testi-modal" class="fixed inset-0 z-50 bg-black/80 backdrop-blur-sm hidden items-center justify-center p-4 transition-opacity duration-300" onclick="closeTestiModal(event)">
            <div class="relative max-w-md w-full bg-neutral-900 rounded-3xl overflow-hidden shadow-2xl border border-neutral-700" onclick="event.stopPropagation()">
                <button onclick="closeTestiModal()" class="absolute top-4 right-4 z-20 w-9 h-9 rounded-full bg-black/60 text-white hover:bg-black flex items-center justify-center font-bold text-sm transition-colors">
                    ✕
                </button>
                <div class="max-h-[80vh] overflow-y-auto">
                    <img id="testi-modal-img" src="" alt="Testimoni Client Arka Institute" class="w-full h-auto object-contain">
                </div>
                <div class="p-4 bg-neutral-900 border-t border-neutral-800 flex items-center justify-between gap-3">
                    <span id="testi-modal-title" class="text-xs text-neutral-300 font-medium line-clamp-1"></span>
                    <a href="<?= $whatsapp ?>" target="_blank" rel="noopener" class="px-4 py-2 rounded-full bg-arka-yellow text-arka-dark text-xs font-black hover:bg-arka-yellowHover transition-colors shrink-0">
                        Chat Admin WA ↗
                    </a>
                </div>
            </div>
        </div>

        <script>
            // Slider Controls
            (function() {
                const track = document.getElementById('testi-track');
                const prevBtn = document.getElementById('testi-prev');
                const nextBtn = document.getElementById('testi-next');

                if (track && prevBtn && nextBtn) {
                    prevBtn.addEventListener('click', () => {
                        const cardWidth = track.querySelector('.testi-card-item')?.offsetWidth || 340;
                        track.scrollBy({ left: -(cardWidth + 20) * 1.5, behavior: 'smooth' });
                    });
                    nextBtn.addEventListener('click', () => {
                        const cardWidth = track.querySelector('.testi-card-item')?.offsetWidth || 340;
                        track.scrollBy({ left: (cardWidth + 20) * 1.5, behavior: 'smooth' });
                    });
                }
            })();

            // Lightbox Modal functions
            function openTestiModal(imgSrc, title) {
                const modal = document.getElementById('testi-modal');
                const modalImg = document.getElementById('testi-modal-img');
                const modalTitle = document.getElementById('testi-modal-title');
                if (modal && modalImg) {
                    modalImg.src = imgSrc;
                    if (modalTitle) modalTitle.textContent = title;
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                    document.body.style.overflow = 'hidden';
                }
            }

            function closeTestiModal() {
                const modal = document.getElementById('testi-modal');
                if (modal) {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                    document.body.style.overflow = '';
                }
            }

            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') closeTestiModal();
            });
        </script>
        <section id="faq" class="py-20 sm:py-28 bg-[#F8F8FA] border-t border-neutral-200">
            <div class="max-w-7xl mx-auto px-6 lg:px-12">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
                    
                    <div class="lg:col-span-5 reveal">
                        <div class="font-mono text-xs text-neutral-500 uppercase tracking-widest font-semibold mb-2">FAQ</div>
                        <h2 class="text-3xl sm:text-5xl font-extrabold text-arka-dark tracking-tight">
                            Pertanyaan Umum.
                        </h2>
                        <p class="mt-4 text-sm sm:text-base text-neutral-600 leading-relaxed">
                            Penjelasan singkat mengenai alur, sistem pembayaran, dan jaminan penerbitan naskah di Arka Institute.
                        </p>

                        <div class="mt-8 p-6 bg-white border border-neutral-200">
                            <h4 class="font-bold text-sm text-arka-dark">Punya pertanyaan lain?</h4>
                            <p class="text-xs text-neutral-500 mt-1">Konsultasikan langsung bersama dewan redaksi via WhatsApp.</p>
                            <a href="<?= $whatsapp ?>" class="mt-4 inline-flex items-center gap-1 text-xs font-extrabold text-arka-dark uppercase hover:text-arka-yellowHover">
                                <span>Hubungi WhatsApp <?= $phoneDisplay ?></span>
                                <span>↗</span>
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-7 space-y-4 reveal">
                        <?php foreach ($faq as $item): ?>
                        <div class="faq-item border border-neutral-200 bg-white">
                            <button class="faq-trigger w-full p-6 text-left flex items-center justify-between gap-4 font-bold text-base text-arka-dark focus:outline-none" aria-expanded="false">
                                <span><?= htmlspecialchars($item['q']) ?></span>
                                <span class="faq-icon font-mono text-lg text-neutral-400">+</span>
                            </button>
                            <div class="faq-answer hidden px-6 pb-6 text-sm text-neutral-600 leading-relaxed border-t border-neutral-100 pt-4">
                                <?= htmlspecialchars($item['a']) ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </section>

        <!-- ==============================================
             CLOSING CTA BANNER
             ============================================== -->
        <section class="py-20 bg-white border-t border-neutral-200">
            <div class="max-w-7xl mx-auto px-6 lg:px-12">
                <div class="p-10 sm:p-16 bg-neutral-900 text-white flex flex-col lg:flex-row lg:items-center justify-between gap-8">
                    <div>
                        <div class="font-mono text-xs uppercase tracking-widest text-arka-yellow mb-2">SIAP PUBLIKASI</div>
                        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Naskah Anda pantas terbit di jurnal bereputasi.</h2>
                        <p class="text-sm text-neutral-400 mt-2">Dapatkan review kesesuaian scope dan cek Turnitin gratis dalam 1x24 jam.</p>
                    </div>
                    <div class="shrink-0">
                        <a href="<?= $whatsapp ?>" class="inline-flex items-center justify-center px-8 py-4 bg-arka-yellow hover:bg-arka-yellowHover text-arka-dark font-extrabold text-xs uppercase tracking-wider transition">
                            Konsultasi via WhatsApp ↗
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- ==============================================
         FOOTER (With Exact Address & Email)
         ============================================== -->
    <footer class="bg-white border-t border-neutral-200 pt-16 pb-12 text-arka-dark">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-10 pb-14 border-b border-neutral-200">
                
                <div class="md:col-span-5">
                    <a href="#hero" class="inline-flex items-center mb-1 group">
                        <img src="./assets/favicon ai.png" alt="<?= htmlspecialchars($brand) ?>" class="h-9 sm:h-10 w-auto object-contain transition-transform duration-200 group-hover:opacity-90">
                    </a>
                    <p class="mt-4 text-sm text-neutral-600 leading-relaxed max-w-sm">
                        Lembaga penerbit jurnal ilmiah resmi berbadan hukum yang mendampingi publikasi riset terpercaya, transparan, dan terakreditasi.
                    </p>
                    <div class="mt-5 font-mono text-xs text-neutral-500">
                        NIB RESMI: <span class="font-bold text-arka-dark"><?= $nib ?></span>
                    </div>
                </div>

                <div class="md:col-span-3">
                    <h5 class="font-mono text-xs uppercase tracking-widest font-bold text-neutral-500 mb-4">Navigasi</h5>
                    <ul class="space-y-2 text-xs font-semibold text-neutral-600">
                        <li><a href="#hero" class="hover:text-arka-dark transition">Home</a></li>
                        <li><a href="#statement" class="hover:text-arka-dark transition">About</a></li>
                        <li><a href="#layanan" class="hover:text-arka-dark transition">Capabilities</a></li>
                        <li><a href="#katalog" class="hover:text-arka-dark transition">Katalog Jurnal</a></li>
                        <li><a href="#faq" class="hover:text-arka-dark transition">FAQ</a></li>
                    </ul>
                </div>

                <div class="md:col-span-4">
                    <h5 class="font-mono text-xs uppercase tracking-widest font-bold text-neutral-500 mb-4">Kontak & Alamat</h5>
                    <div class="space-y-2.5 text-xs text-neutral-600 leading-relaxed">
                        <p><?= htmlspecialchars($address) ?></p>
                        <p>Email: <a href="mailto:<?= htmlspecialchars($email) ?>" class="text-arka-dark font-semibold hover:underline"><?= htmlspecialchars($email) ?></a></p>
                        <p>WhatsApp: <a href="<?= $whatsapp ?>" class="text-arka-dark font-semibold hover:underline"><?= $phoneDisplay ?></a></p>
                    </div>
                </div>

            </div>

            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs font-mono text-neutral-400">
                <p>© 2026 Arka Institute. All rights reserved.</p>
                <div class="flex items-center gap-4">
                    <span>Scientific Publishing</span>
                    <span>•</span>
                    <span>Jatinangor, Sumedang</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Button -->
    <div id="wa-floating" class="fixed bottom-6 right-6 z-50">
        <a href="<?= $whatsapp ?>?text=Halo%20Admin%20Arka%20Institute,%20saya%20ingin%20konsultasi%20publikasi%20jurnal" target="_blank" rel="noopener" aria-label="Chat WhatsApp Admin Arka Institute" class="relative grid h-14 w-14 place-items-center rounded-full bg-[#25D366] text-white shadow-xl transition hover:scale-110">
            <svg class="h-8 w-8 fill-current" viewBox="0 0 24 24">
                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
            </svg>
            <span class="absolute -top-1 -right-1 grid h-5 w-5 place-items-center rounded-full bg-red-600 text-[10px] font-bold text-white shadow">1</span>
        </a>
    </div>



    <!-- Poster Lightbox Modal -->
    <div id="poster-modal" class="fixed inset-0 z-50 hidden bg-black/80 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="relative max-w-2xl w-full max-h-[92vh] bg-white border border-neutral-200 shadow-2xl flex flex-col">
            <div class="flex items-center justify-between px-5 py-3.5 border-b border-neutral-200 bg-neutral-50">
                <span id="poster-modal-title" class="font-bold text-sm text-arka-dark truncate pr-4"></span>
                <button id="poster-modal-close" class="p-1 text-neutral-500 hover:text-arka-dark focus:outline-none" aria-label="Tutup">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <div class="overflow-auto p-4 flex items-center justify-center max-h-[calc(92vh-60px)] bg-neutral-100">
                <img id="poster-modal-img" src="" alt="Call for Paper" class="max-w-full max-h-[80vh] object-contain shadow-sm">
            </div>
        </div>
    </div>

    <!-- Main JS -->
    <script src="./script/main.js"></script>
</body>
</html>
