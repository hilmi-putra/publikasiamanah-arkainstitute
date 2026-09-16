<?php
$brand = 'Publikasi Amanah Arka Institute';
$phone = '6281110000298';
$whatsapp = 'https://wa.me/' . $phone;

$jurnals = [
    ['name' => 'Keynesia', 'sinta' => 'Sinta 4', 'scope' => 'Ekonomi & Bisnis', 'status' => 'Sisa 3 Slot', 'quota' => 85, 'color' => 'coral', 'logo' => 'https://ik.imagekit.io/4blgb8vie/image634.webp?updatedAt=1775703625395'],
    ['name' => 'Educenter', 'sinta' => 'Sinta 3', 'scope' => 'Pendidikan', 'status' => 'Waiting List', 'quota' => 95, 'color' => 'blue', 'logo' => 'https://ik.imagekit.io/4blgb8vie/image1114.webp'],
    ['name' => 'Cessie', 'sinta' => 'Sinta 4', 'scope' => 'Hukum', 'status' => 'Open Slot', 'quota' => 40, 'color' => 'violet', 'logo' => 'https://ik.imagekit.io/4blgb8vie/image637.webp'],
    ['name' => 'Hexatech', 'sinta' => 'Sinta 5', 'scope' => 'Teknik Sipil & Arsitektur', 'status' => 'Open Slot', 'quota' => 30, 'color' => 'orange', 'logo' => 'https://ik.imagekit.io/4blgb8vie/image640.webp'],
    ['name' => 'Co-Creation', 'sinta' => 'Sinta 5', 'scope' => 'Manajemen', 'status' => 'Open Slot', 'quota' => 50, 'color' => 'green', 'logo' => 'https://ik.imagekit.io/4blgb8vie/image639.webp'],
    ['name' => 'Nautical', 'sinta' => 'ISSN', 'scope' => 'Multidisiplin', 'status' => 'Open Slot', 'quota' => 40, 'color' => 'blue', 'logo' => 'https://ik.imagekit.io/4blgb8vie/image635.webp'],
    ['name' => 'Histeria', 'sinta' => 'ISSN', 'scope' => 'Social', 'status' => 'Open Slot', 'quota' => 60, 'color' => 'blue', 'logo' => 'https://ik.imagekit.io/4blgb8vie/image1115.webp'],
    ['name' => 'Florona', 'sinta' => 'ISSN', 'scope' => 'Kesehatan', 'status' => 'Open Slot', 'quota' => 60, 'color' => 'blue', 'logo' => 'https://ik.imagekit.io/4blgb8vie/image638.webp'],
    ['name' => 'Scopus / WoS', 'sinta' => 'Q3 - Q4', 'scope' => 'Multidisiplin', 'status' => 'Fast Track', 'quota' => 70, 'color' => 'rose', 'logo' => 'https://ik.imagekit.io/4blgb8vie/inter.webp'],
];

$filters = ['Semua' => 'all', 'Sinta 3' => 'Sinta 3', 'Sinta 4' => 'Sinta 4', 'Sinta 5' => 'Sinta 5', 'Non Sinta' => 'ISSN', 'Scopus' => 'Internasional'];
$faq = [
    ['q' => 'Apakah Arka Institute memiliki legalitas resmi?', 'a' => 'Ya. Publikasi Amanah Arka Institute berbadan hukum resmi dengan NIB 1103220012668. Kami adalah lembaga penerbit resmi, bukan sekadar perantara.'],
    ['q' => 'Bagaimana sistem pembayarannya?', 'a' => 'Penulis membayar DP sebesar 50 persen untuk memulai proses review dan editing. Pelunasan dilakukan setelah naskah mendapatkan LoA resmi dari jurnal tujuan.'],
    ['q' => 'Berapa lama proses mendapatkan LoA?', 'a' => 'Jalur prioritas atau fast track dapat memperoleh LoA dalam waktu 3 hari, sesuai kelayakan naskah dan ketersediaan jurnal.'],
    ['q' => 'Apakah ada jaminan artikel pasti terbit?', 'a' => 'Kami mengelola jurnal secara langsung. Tim editorial memastikan naskah memenuhi standar sebelum disubmit untuk meminimalkan risiko penolakan.'],
    ['q' => 'Apa saja layanan tambahan yang didapatkan?', 'a' => 'Pengecekan Turnitin, perapihan sitasi Mendeley, penyesuaian template, translate native, dan bantuan parafrase termasuk dalam layanan publikasi.'],
];
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($brand) ?> | Penerbit Jurnal Resmi</title>
    <meta name="description" content="Publikasi jurnal yang aman, transparan, dan terarah bersama Publikasi Amanah Arka Institute.">
    <link rel="shortcut icon" href="https://ik.imagekit.io/4blgb8vie/2.arkainstitute.jpeg.webp" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,500;0,600;1,500;1,600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { ink: '#17212b', paper: '#f6f3ed', coral: '#e56b55', lime: '#c9d96f', mist: '#e7e2d8' },
                    fontFamily: { sans: ['Manrope', 'sans-serif'], display: ['Playfair Display', 'serif'], mono: ['DM Mono', 'monospace'] },
                    boxShadow: { soft: '0 22px 60px rgba(23,33,43,.10)' }
                }
            }
        }
    </script>
    <style>
        html { scroll-behavior: smooth; }
        body { background: #f6f3ed; color: #17212b; }
        .paper-grid { background-image: linear-gradient(rgba(23,33,43,.055) 1px, transparent 1px), linear-gradient(90deg, rgba(23,33,43,.055) 1px, transparent 1px); background-size: 34px 34px; }
        .display-outline { color: transparent; -webkit-text-stroke: 1px rgba(246,243,237,.55); }
        .reveal { opacity: 0; transform: translateY(24px); transition: opacity .7s ease, transform .7s ease; }
        .reveal.is-visible { opacity: 1; transform: translateY(0); }
        .journal-card[hidden] { display: none; }
    </style>
</head>
<body class="font-sans antialiased overflow-x-hidden">
    <header class="bg-ink text-paper relative overflow-hidden">
        <div class="absolute -right-20 -top-28 h-96 w-96 rounded-full border border-coral/30"></div>
        <div class="absolute right-0 top-0 h-72 w-72 bg-coral/20 blur-3xl"></div>
        <nav id="navbar" class="relative z-20 border-b border-white/10">
            <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-5 lg:px-10">
                <a href="#top" class="flex items-center">
                    <img src="https://ik.imagekit.io/4blgb8vie/logo-ai-white.webp" alt="Publikasi Amanah Arka Institute" class="w-44">
                </a>
                <div class="hidden items-center gap-8 text-xs font-bold uppercase tracking-[.14em] text-paper/65 lg:flex">
                    <a class="transition hover:text-lime" href="#katalog">Katalog</a><a class="transition hover:text-lime" href="#alur">Alur</a><a class="transition hover:text-lime" href="#bukti">Bukti Terbit</a><a class="transition hover:text-lime" href="#faq">FAQ</a>
                </div>
                <a href="<?= $whatsapp ?>" class="hidden rounded-full bg-lime px-5 py-3 text-xs font-extrabold uppercase tracking-wider text-ink transition hover:bg-white lg:inline-flex">Konsultasi Gratis <span class="ml-2">↗</span></a>
                <button id="menu-toggle" class="rounded-full border border-white/20 p-2 lg:hidden" aria-label="Buka menu"><span class="block h-px w-5 bg-white"></span><span class="my-1 block h-px w-5 bg-white"></span><span class="block h-px w-5 bg-white"></span></button>
            </div>
            <div id="mobile-menu" class="hidden border-t border-white/10 bg-ink px-5 py-8 lg:hidden"><div class="flex flex-col gap-6 text-sm font-bold uppercase tracking-widest"><a href="#katalog">Katalog Jurnal</a><a href="#alur">Alur Publikasi</a><a href="#bukti">Bukti Terbit</a><a href="#faq">FAQ</a><a class="text-lime" href="<?= $whatsapp ?>">Konsultasi Admin ↗</a></div></div>
        </nav>
        <div id="top" class="relative z-10 mx-auto grid max-w-7xl gap-12 px-5 pb-24 pt-20 lg:grid-cols-[1.08fr_.92fr] lg:items-end lg:px-10 lg:pb-32 lg:pt-28">
            <div class="reveal">
                <p class="mb-7 flex items-center gap-3 font-mono text-[11px] uppercase tracking-[.22em] text-lime"><span class="h-px w-10 bg-lime"></span> Journal publishing, made clear</p>
                <h1 class="max-w-3xl font-display text-5xl leading-[.98] sm:text-7xl lg:text-[7rem]">Publikasi yang <em class="text-coral">aman</em>,<br><span class="display-outline">arah yang jelas.</span></h1>
                <p class="mt-8 max-w-xl text-base leading-8 text-paper/65 sm:text-lg">Publikasi Amanah Arka Institute membantu akademisi mengubah naskah mentah menjadi karya ilmiah yang siap terbit, dengan proses transparan dari review sampai DOI.</p>
                <div class="mt-10 flex flex-wrap gap-4"><a href="#katalog" class="rounded-full bg-coral px-7 py-4 text-sm font-extrabold text-white transition hover:bg-white hover:text-ink">Jelajahi Katalog <span class="ml-3">↓</span></a><a href="<?= $whatsapp ?>" class="rounded-full border border-white/20 px-7 py-4 text-sm font-bold text-paper transition hover:border-lime hover:text-lime">Bicara dengan Admin ↗</a></div>
            </div>
            <div class="reveal relative mx-auto w-full max-w-md lg:pb-5">
                <div class="paper-grid absolute inset-5 rounded-[2rem] border border-white/20"></div>
                <div class="relative aspect-[4/5] overflow-hidden rounded-[2rem] bg-coral p-7 shadow-2xl shadow-black/30"><div class="absolute -right-16 -top-14 h-56 w-56 rounded-full border-[28px] border-lime/70"></div><div class="relative flex h-full flex-col justify-between"><div class="flex justify-between font-mono text-[10px] uppercase tracking-widest text-ink/60"><span>AA / 026</span><span>Since 2021</span></div><div><p class="font-mono text-xs uppercase tracking-widest text-ink/60">Amanah editorial house</p><p class="mt-3 font-display text-5xl leading-none text-ink">Naskah Anda,<br><em>lebih siap.</em></p></div><div class="flex items-end justify-between"><span class="rounded-full bg-ink px-4 py-2 font-mono text-[10px] uppercase tracking-widest text-lime">NIB verified</span><span class="font-display text-7xl italic text-ink/25">Aa</span></div></div></div>
                <div class="absolute -bottom-7 -left-5 rounded-2xl bg-paper px-5 py-4 text-ink shadow-soft"><p class="font-mono text-[10px] uppercase tracking-widest text-ink/50">Track record</p><p class="mt-1 text-2xl font-extrabold">2.9k<span class="text-coral">+</span></p><p class="text-xs text-ink/60">artikel terbit</p></div>
            </div>
        </div>
        <div class="border-t border-white/10"><div class="mx-auto grid max-w-7xl grid-cols-2 px-5 py-5 text-xs uppercase tracking-widest text-paper/45 sm:grid-cols-4 lg:px-10"><span>01 / Legalitas</span><span>02 / Editorial</span><span>03 / Transparan</span><span>04 / Tepat waktu</span></div></div>
    </header>

    <main>
        <section class="mx-auto max-w-7xl px-5 py-24 lg:px-10 lg:py-32"><div class="grid gap-14 lg:grid-cols-[.8fr_1.2fr] lg:items-end"><div class="reveal"><p class="font-mono text-xs uppercase tracking-[.2em] text-coral">Why Amanah</p><h2 class="mt-5 font-display text-5xl leading-none sm:text-6xl">Bukan sekadar<br><em class="text-coral">mengirim</em> naskah.</h2></div><div class="reveal grid gap-8 sm:grid-cols-3"><div class="border-t-2 border-ink pt-5"><p class="font-mono text-xs text-coral">01</p><h3 class="mt-4 font-bold">Penerbit resmi</h3><p class="mt-2 text-sm leading-6 text-ink/55">NIB 1103220012668 dan jurnal dikelola langsung.</p></div><div class="border-t-2 border-ink pt-5"><p class="font-mono text-xs text-coral">02</p><h3 class="mt-4 font-bold">Review terarah</h3><p class="mt-2 text-sm leading-6 text-ink/55">Scope, format, dan similarity diperiksa sejak awal.</p></div><div class="border-t-2 border-ink pt-5"><p class="font-mono text-xs text-coral">03</p><h3 class="mt-4 font-bold">Bayar bertahap</h3><p class="mt-2 text-sm leading-6 text-ink/55">DP 50%, pelunasan setelah LoA resmi terbit.</p></div></div></div></section>

        <section id="katalog" class="bg-ink px-5 py-24 text-paper lg:px-10 lg:py-32"><div class="mx-auto max-w-7xl"><div class="flex flex-col justify-between gap-8 border-b border-white/10 pb-10 lg:flex-row lg:items-end"><div class="reveal"><p class="font-mono text-xs uppercase tracking-[.2em] text-lime">01 / Katalog Jurnal</p><h2 class="mt-4 max-w-2xl font-display text-5xl leading-none sm:text-6xl">Temukan rumah<br><em class="text-coral">untuk riset Anda.</em></h2></div><div id="catalog-filters" class="flex max-w-xl flex-wrap gap-2"> <?php foreach ($filters as $label => $value): ?><button data-filter="<?= $value ?>" class="filter-btn rounded-full border border-white/15 px-4 py-2 text-xs font-bold transition hover:border-lime hover:text-lime <?= $value === 'all' ? 'active-filter bg-lime text-ink' : 'text-paper/60' ?>"><?= $label ?></button><?php endforeach; ?></div></div><div id="journal-grid" class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-3"><?php foreach ($jurnals as $jurnal): ?><article class="journal-card group flex min-h-[330px] flex-col justify-between rounded-2xl border border-white/10 bg-white/[.045] p-6 transition hover:-translate-y-1 hover:border-coral/60 hover:bg-white/[.08]" data-sinta="<?= $jurnal['sinta'] ?>" data-name="<?= $jurnal['name'] ?>"><div><div class="flex items-start justify-between"><div class="grid h-14 w-14 place-items-center rounded-xl bg-white p-2"><img src="<?= $jurnal['logo'] ?>" alt="Logo <?= htmlspecialchars($jurnal['name']) ?>" class="max-h-full max-w-full object-contain"></div><span class="rounded-full border border-white/15 px-3 py-1 font-mono text-[10px] uppercase tracking-widest text-paper/60"><?= $jurnal['sinta'] ?></span></div><p class="mt-8 font-mono text-[10px] uppercase tracking-widest text-coral">Official journal</p><h3 class="mt-2 font-display text-3xl"><?= htmlspecialchars($jurnal['name']) ?></h3><p class="mt-2 text-sm text-paper/55"><?= htmlspecialchars($jurnal['scope']) ?></p></div><div class="mt-8"><div class="mb-2 flex justify-between text-xs"><span class="text-paper/60"><?= htmlspecialchars($jurnal['status']) ?></span><span class="text-lime"><?= $jurnal['quota'] ?>% terisi</span></div><div class="h-1.5 rounded-full bg-white/10"><div class="h-full rounded-full bg-coral" style="width: <?= $jurnal['quota'] ?>%"></div></div><a href="<?= $whatsapp ?>?text=Halo%20Admin,%20saya%20ingin%20menanyakan%20slot%20jurnal%20<?= urlencode($jurnal['name']) ?>" class="mt-6 inline-flex text-xs font-extrabold uppercase tracking-widest text-paper transition group-hover:text-lime">Cek ketersediaan <span class="ml-2">↗</span></a></div></article><?php endforeach; ?></div></div></section>

        <section id="alur" class="paper-grid px-5 py-24 lg:px-10 lg:py-32"><div class="mx-auto max-w-7xl"><div class="max-w-2xl reveal"><p class="font-mono text-xs uppercase tracking-[.2em] text-coral">02 / Alur publikasi</p><h2 class="mt-4 font-display text-5xl leading-none sm:text-6xl">Dari draft ke<br><em>terbit.</em></h2><p class="mt-6 text-lg leading-8 text-ink/60">Satu partner untuk proses yang biasanya terasa rumit. Setiap langkah punya status dan arah yang jelas.</p></div><div class="mt-16 grid gap-0 border-t border-ink/20 md:grid-cols-4"><?php $steps = [['01','Kirim naskah','Draft mentah via WhatsApp, kami bantu sesuaikan format.'],['02','Review gratis','Cek scope, kelayakan, dan Turnitin dalam 1x24 jam.'],['03','Proses & LoA','Editing, translate, layout, lalu submit ke jurnal tujuan.'],['04','Publish','Pelunasan setelah LoA, artikel terbit dan DOI aktif.']]; foreach ($steps as $step): ?><div class="reveal border-b border-ink/20 py-8 md:border-b-0 md:border-r md:px-7 first:md:pl-0 last:md:border-r-0"><p class="font-mono text-sm text-coral"><?= $step[0] ?></p><h3 class="mt-12 font-display text-3xl"><?= $step[1] ?></h3><p class="mt-4 text-sm leading-6 text-ink/55"><?= $step[2] ?></p></div><?php endforeach; ?></div><div class="mt-14 flex flex-wrap items-center justify-between gap-5 rounded-2xl bg-lime p-6 text-ink"><p class="font-bold">Butuh SOP lengkap untuk kampus atau tim Anda?</p><a href="https://drive.google.com/file/d/1kgn5yUm0kFHEiOru5heE1hWG8ImtDG1F/view?usp=sharing" class="rounded-full bg-ink px-5 py-3 text-xs font-bold uppercase tracking-widest text-paper">Download PDF ↗</a></div></div></section>

        <section id="bukti" class="bg-paper px-5 py-24 lg:px-10 lg:py-32"><div class="mx-auto max-w-7xl"><div class="flex flex-col justify-between gap-7 sm:flex-row sm:items-end"><div class="reveal"><p class="font-mono text-xs uppercase tracking-[.2em] text-coral">03 / Bukti terbit</p><h2 class="mt-4 font-display text-5xl leading-none sm:text-6xl">Karya yang<br><em class="text-coral">sudah sampai.</em></h2></div><p class="max-w-sm text-sm leading-6 text-ink/55">Dokumentasi LoA dan bukti terbit dari akademisi yang mempercayakan publikasinya kepada Arka Institute.</p></div><div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-4"><?php for ($i = 1; $i <= 4; $i++): ?><button class="group overflow-hidden rounded-2xl border border-ink/10 bg-white p-2 text-left shadow-sm" data-lightbox="https://ik.imagekit.io/4blgb8vie/testi%20ai<?= $i > 1 ? '-' . $i : '' ?>.png"><div class="aspect-[3/4] overflow-hidden rounded-xl bg-mist"><img src="https://ik.imagekit.io/4blgb8vie/testi%20ai<?= $i > 1 ? '-' . $i : '' ?>.png" alt="Dokumentasi terbit <?= $i ?>" class="h-full w-full object-cover transition duration-500 group-hover:scale-105"></div><p class="px-2 py-4 font-mono text-[10px] uppercase tracking-widest text-ink/60">Dokumentasi / 0<?= $i ?></p></button><?php endfor; ?></div></div></section>

        <section id="faq" class="bg-white px-5 py-24 lg:px-10 lg:py-32"><div class="mx-auto grid max-w-7xl gap-14 lg:grid-cols-[.8fr_1.2fr]"><div class="reveal"><p class="font-mono text-xs uppercase tracking-[.2em] text-coral">04 / FAQ</p><h2 class="mt-4 font-display text-5xl leading-none sm:text-6xl">Yang sering<br><em>ditanyakan.</em></h2><p class="mt-6 max-w-sm text-sm leading-7 text-ink/55">Jawaban singkat untuk membantu Anda mengambil keputusan dengan tenang.</p></div><div class="space-y-3"><?php foreach ($faq as $item): ?><div class="faq-item border-b border-ink/15"><button class="faq-trigger flex w-full items-center justify-between gap-6 py-5 text-left font-bold" aria-expanded="false"><span><?= htmlspecialchars($item['q']) ?></span><span class="faq-icon grid h-8 w-8 shrink-0 place-items-center rounded-full bg-paper text-xl font-normal">+</span></button><div class="faq-answer hidden pb-5 pr-10 text-sm leading-7 text-ink/60"><?= htmlspecialchars($item['a']) ?></div></div><?php endforeach; ?></div></div></section>

        <section class="bg-coral px-5 py-20 lg:px-10"><div class="mx-auto flex max-w-7xl flex-col justify-between gap-10 md:flex-row md:items-end"><div><p class="font-mono text-xs uppercase tracking-[.2em] text-ink/60">Customer care center</p><h2 class="mt-4 max-w-3xl font-display text-5xl leading-none text-ink sm:text-7xl">Naskah Anda<br><em>layak didengar.</em></h2></div><a href="<?= $whatsapp ?>" class="inline-flex w-fit items-center rounded-full bg-ink px-7 py-4 text-sm font-extrabold text-paper transition hover:bg-white hover:text-ink">Chat admin sekarang <span class="ml-3">↗</span></a></div></section>
    </main>

    <footer class="bg-ink px-5 py-12 text-paper lg:px-10"><div class="mx-auto grid max-w-7xl gap-10 md:grid-cols-3"><div><img src="https://ik.imagekit.io/4blgb8vie/logo-ai-white.webp" alt="Publikasi Amanah Arka Institute" class="w-52"><p class="mt-6 max-w-xs text-sm leading-7 text-paper/50">Penerbit jurnal ilmiah resmi dengan standar editorial tinggi, layanan transparan, dan pendampingan yang amanah.</p></div><div><p class="font-mono text-xs uppercase tracking-widest text-lime">Kontak resmi</p><p class="mt-5 text-sm text-paper/65">Jatinangor, Sumedang, Jawa Barat</p><p class="mt-2 text-sm text-paper/65">admin@arkainstitute.co.id</p><p class="mt-2 text-sm text-paper/65">+62 811-1000-0298</p></div><div class="md:text-right"><p class="font-mono text-xs uppercase tracking-widest text-lime">Legalitas</p><p class="mt-5 text-sm text-paper/65">NIB: 1103220012668</p><p class="mt-8 text-xs text-paper/35">© 2026 Arka Institute. Seluruh hak cipta dilindungi.</p></div></div></footer>
    <div id="wa-floating" class="fixed bottom-6 right-6 z-40"><a href="<?= $whatsapp ?>?text=Halo%20Admin,%20saya%20ingin%20konsultasi%20publikasi%20jurnal" target="_blank" rel="noopener" aria-label="Chat WhatsApp dengan admin" class="group relative block"><span class="absolute inset-0 animate-ping rounded-full bg-lime/60"></span><span class="relative grid h-[68px] w-[68px] place-items-center rounded-full border-[6px] border-white bg-[#25D366] shadow-[0_8px_25px_rgba(37,211,102,.35)] transition duration-300 group-hover:scale-110"><img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="h-11 w-11"></span><span class="absolute -right-1 -top-2 grid h-7 w-7 place-items-center rounded-full border-2 border-white bg-[#ff334b] text-xs font-extrabold text-white shadow-md">1</span></a></div>
    <div id="lightbox" class="fixed inset-0 z-50 hidden items-center justify-center bg-ink/95 p-5"><button id="lightbox-close" class="absolute right-5 top-5 text-4xl text-paper">×</button><img id="lightbox-image" src="" alt="Perbesar dokumentasi terbit" class="max-h-[90vh] max-w-full rounded-xl object-contain"></div>
    <script src="./script/main.js"></script>
</body>
</html>
