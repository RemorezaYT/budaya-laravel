<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Awal - Kebudayaan Indonesia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root{
            --bg: #050814;
            --panel: rgba(17, 24, 39, 0.55);
            --border: rgba(255,255,255,0.12);
            --text: rgba(255,255,255,0.92);
            --muted: rgba(255,255,255,0.68);

            /* Brand */
            --brand1:#f97316; /* orange */
            --brand2:#facc15; /* yellow */
            --brand3:#6366f1; /* indigo */

            /* Accent per fitur */
            --acc-map-1: rgba(34, 211, 238, 0.26);   /* cyan */
            --acc-map-2: rgba(59, 130, 246, 0.20);   /* blue */
            --acc-lit-1: rgba(250, 204, 21, 0.26);   /* gold */
            --acc-lit-2: rgba(249, 115, 22, 0.18);   /* orange */
            --acc-quiz-1: rgba(244, 63, 94, 0.22);   /* rose */
            --acc-quiz-2: rgba(168, 85, 247, 0.20);  /* purple */
        }

        *{ box-sizing:border-box; margin:0; padding:0; }
        html, body{ height:100%; }
        body{
            font-family:"Plus Jakarta Sans", system-ui, -apple-system, "Segoe UI", sans-serif;
            min-height:100vh;
            background: var(--bg);
            color: var(--text);
            overflow-x:hidden;
        }

        /* Background glow + grid (animated, subtle) */
        .bg{
            position:fixed; inset:0; z-index:-3;
            background:
                radial-gradient(circle at 15% 20%, rgba(250,204,21,0.22), transparent 45%),
                radial-gradient(circle at 80% 25%, rgba(99,102,241,0.18), transparent 45%),
                radial-gradient(circle at 35% 90%, rgba(249,115,22,0.18), transparent 45%),
                linear-gradient(180deg, rgba(2,6,23,0.65), rgba(2,6,23,0.95));
            filter: saturate(1.05);
        }
        .bg::after{
            content:"";
            position:absolute;
            inset:-40%;
            background:
                radial-gradient(circle at 20% 25%, rgba(56,189,248,0.12), transparent 55%),
                radial-gradient(circle at 70% 60%, rgba(168,85,247,0.10), transparent 60%),
                radial-gradient(circle at 40% 85%, rgba(250,204,21,0.10), transparent 55%);
            animation: floatGlow 14s ease-in-out infinite;
            opacity:.9;
        }
        @keyframes floatGlow{
            0%   { transform: translate3d(-2%, -1%, 0) rotate(0deg); }
            50%  { transform: translate3d(2%, 1%, 0) rotate(2deg); }
            100% { transform: translate3d(-2%, -1%, 0) rotate(0deg); }
        }

        .grid{
            position:fixed; inset:0; z-index:-2;
            background-image:
                linear-gradient(rgba(255,255,255,0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.05) 1px, transparent 1px);
            background-size: 44px 44px;
            mask-image: radial-gradient(circle at 40% 15%, rgba(0,0,0,0.85), transparent 62%);
            opacity:.30;
            pointer-events:none;
        }

        /* Soft noise */
        .noise{
            position:fixed; inset:0; z-index:-1;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.9' numOctaves='2' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='120' height='120' filter='url(%23n)' opacity='.18'/%3E%3C/svg%3E");
            opacity:.18;
            mix-blend-mode: overlay;
            pointer-events:none;
        }

        .page-wrap{
            min-height:100vh;
            display:flex;
            flex-direction:column;
        }

        /* Header */
        header{
            position:sticky;
            top:0;
            z-index:10;
            padding: 14px 20px;
            border-bottom: 1px solid var(--border);
            background: rgba(2,6,23,0.55);
            backdrop-filter: blur(16px);
        }

        .header-inner{
            max-width: 1040px;
            margin:0 auto;
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:16px;
        }

        .brand{
            display:flex;
            align-items:center;
            gap:12px;
            min-width: 240px;
        }

        .brand-logo{
            width:42px;
            height:42px;
            border-radius: 14px;
            background: linear-gradient(135deg, var(--brand1), var(--brand2));
            box-shadow: 0 18px 50px rgba(249,115,22,0.25);
            display:grid;
            place-items:center;
            font-weight:900;
            color:#111827;
            user-select:none;
        }

        .brand-text b{
            display:block;
            letter-spacing:-0.01em;
        }
        .brand-text small{
            display:block;
            color: var(--muted);
            margin-top:2px;
            font-weight:700;
        }

        .user-mini{
            display:flex;
            flex-direction:column;
            align-items:flex-end;
            gap:8px;
        }

        .user-mini .welcome{
            text-align:right;
            font-size: .92rem;
            color: rgba(255,255,255,0.82);
        }
        .user-mini .welcome strong{
            color: rgba(250,204,21,0.95);
        }

        .status-row{
            display:flex;
            gap:8px;
            flex-wrap:wrap;
            justify-content:flex-end;
        }
        .pill{
            display:inline-flex;
            align-items:center;
            gap:8px;
            padding: 6px 10px;
            border-radius: 999px;
            border: 1px solid rgba(255,255,255,0.14);
            background: rgba(2,6,23,0.35);
            color: rgba(255,255,255,0.86);
            font-size: .78rem;
            font-weight: 800;
            letter-spacing:.02em;
        }
        .pill .dot{
            width:8px; height:8px; border-radius:999px;
            background: rgba(34,197,94,0.95);
            box-shadow: 0 0 0 6px rgba(34,197,94,0.10);
        }
        .pill.warn .dot{ background: rgba(250,204,21,0.95); box-shadow: 0 0 0 6px rgba(250,204,21,0.10); }
        .pill.quiz .dot{ background: rgba(244,63,94,0.95); box-shadow: 0 0 0 6px rgba(244,63,94,0.10); }

        /* Main */
        .main{
            flex:1;
            width: min(1040px, 100%);
            margin: 0 auto;
            padding: 26px 18px 28px;
        }

        .hero{
            border: 1px solid var(--border);
            background: rgba(17, 24, 39, 0.35);
            backdrop-filter: blur(14px);
            border-radius: 24px;
            padding: 22px 22px;
            box-shadow: 0 28px 90px rgba(0,0,0,0.35);
            overflow:hidden;
            position:relative;
        }
        .hero::before{
            content:"";
            position:absolute;
            inset:-30%;
            background:
                radial-gradient(circle at 18% 20%, rgba(250,204,21,0.16), transparent 55%),
                radial-gradient(circle at 85% 65%, rgba(99,102,241,0.14), transparent 55%),
                radial-gradient(circle at 40% 95%, rgba(249,115,22,0.12), transparent 55%);
            z-index:0;
        }
        .hero-inner{ position:relative; z-index:1; }

        .badge{
            display:inline-flex;
            align-items:center;
            gap:10px;
            padding: 8px 12px;
            border-radius: 999px;
            border: 1px solid rgba(255,255,255,0.14);
            background: rgba(2,6,23,0.30);
            color: rgba(255,255,255,0.80);
            font-size: .85rem;
            font-weight:800;
            letter-spacing:.06em;
            text-transform: uppercase;
            margin-bottom: 10px;
        }
        .badge .dot{
            width:10px;height:10px;border-radius:999px;
            background: linear-gradient(135deg, var(--brand1), var(--brand2));
            box-shadow: 0 0 0 6px rgba(250,204,21,0.10);
        }

        .headline-title{
            font-size: clamp(1.6rem, 3.5vw, 2.35rem);
            font-weight: 900;
            letter-spacing:-0.02em;
            margin-bottom: 6px;
        }
        .headline-subtitle{
            color: var(--muted);
            font-size: 1rem;
            max-width: 78ch;
            line-height:1.55;
        }

        .headline-subtitle b{
            color: rgba(255,255,255,0.92);
        }

        .grid-menu{
            margin-top: 18px;
            display:grid;
            grid-template-columns: repeat(2, minmax(0,1fr));
            gap: 18px;
        }

        /* Card */
        .menu-card{
            position:relative;
            overflow:hidden;
            border-radius: 24px;
            border: 1px solid rgba(255,255,255,0.14);
            background: rgba(17,24,39,0.45);
            backdrop-filter: blur(16px);
            box-shadow: 0 26px 80px rgba(0,0,0,0.35);
            transition: transform .18s ease, box-shadow .18s ease, border-color .18s ease;
            min-height: 220px;
        }
        .menu-card:hover{
            transform: translateY(-4px);
            border-color: rgba(255,255,255,0.22);
            box-shadow: 0 38px 120px rgba(0,0,0,0.55);
        }

        .menu-card::before{
            content:"";
            position:absolute;
            inset:-35%;
            opacity:.95;
            transition: opacity .20s ease;
        }
        .menu-card:hover::before{ opacity:1; }

        /* Accents per card */
        .menu-card.peta::before{
            background:
                radial-gradient(circle at 18% 20%, var(--acc-map-1), transparent 55%),
                radial-gradient(circle at 88% 65%, var(--acc-map-2), transparent 60%);
        }
        .menu-card.info::before{
            background:
                radial-gradient(circle at 18% 20%, var(--acc-lit-1), transparent 55%),
                radial-gradient(circle at 88% 65%, var(--acc-lit-2), transparent 60%);
        }
        .menu-card.quiz::before{
            background:
                radial-gradient(circle at 18% 20%, var(--acc-quiz-1), transparent 55%),
                radial-gradient(circle at 88% 65%, var(--acc-quiz-2), transparent 60%);
        }

        .menu-card-inner{
            position:relative;
            z-index:1;
            padding: 18px 18px 16px;
            display:flex;
            flex-direction:column;
            height:100%;
        }

        .menu-top{
            display:flex;
            align-items:flex-start;
            justify-content:space-between;
            gap:12px;
        }

        .menu-badge{
            display:inline-flex;
            gap:8px;
            align-items:center;
            padding: 7px 10px;
            border-radius: 999px;
            background: rgba(255,255,255,0.12);
            border: 1px solid rgba(255,255,255,0.16);
            font-size: .78rem;
            color: rgba(255,255,255,0.88);
            font-weight: 900;
            letter-spacing:.02em;
        }
        .menu-badge .mini-dot{
            width:8px; height:8px; border-radius:999px;
            background: rgba(255,255,255,0.85);
            opacity:.85;
        }

        .menu-icon{
            width:46px; height:46px;
            border-radius: 16px;
            display:grid;
            place-items:center;
            background: rgba(2,6,23,0.35);
            border: 1px solid rgba(255,255,255,0.14);
            box-shadow: inset 0 1px 0 rgba(255,255,255,0.10);
            font-size: 1.25rem;
            transition: transform .20s ease, filter .20s ease;
        }
        .menu-card:hover .menu-icon{
            transform: translateY(-1px) scale(1.03);
            filter: brightness(1.05);
        }

        .menu-title{
            margin-top: 12px;
            font-size: 1.18rem;
            font-weight: 900;
            letter-spacing:-0.01em;
            color: rgba(255,255,255,0.95);
        }

        /* Desc reveal effect */
        .menu-desc{
            margin-top: 8px;
            color: rgba(255,255,255,0.80);
            font-size: .93rem;
            line-height: 1.5;
            max-width: 62ch;
            opacity: .92;
            transform: translateY(0);
            transition: transform .20s ease, opacity .20s ease;
        }
        .menu-card:hover .menu-desc{
            transform: translateY(-2px);
            opacity: 1;
        }

        .menu-footer{
            margin-top:auto;
            padding-top: 14px;
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:12px;
            color: rgba(255,255,255,0.70);
            font-size: .88rem;
        }

        /* Button hover feels premium */
        .menu-btn{
            display:inline-flex;
            align-items:center;
            gap:10px;
            padding: 10px 14px;
            border-radius: 16px;
            border: 1px solid rgba(255,255,255,0.18);
            background: rgba(2,6,23,0.45);
            backdrop-filter: blur(10px);
            color: rgba(255,255,255,0.92);
            font-weight: 900;
            text-decoration:none;
            letter-spacing: .10em;
            text-transform: uppercase;
            transition: transform .14s ease, background .18s ease, border-color .18s ease, filter .18s ease;
            white-space: nowrap;
        }
        .menu-btn:hover{
            transform: translateY(-1px) translateX(4px);
            background: rgba(2,6,23,0.62);
            border-color: rgba(255,255,255,0.26);
            filter: brightness(1.03);
        }
        .menu-btn:active{ transform: translateY(1px); }

        /* Small hint line */
        .hint{
            display:flex;
            gap:10px;
            align-items:center;
            margin-top: 12px;
            color: rgba(255,255,255,0.62);
            font-size: .9rem;
        }
        .hint kbd{
            font-family: inherit;
            font-size: .78rem;
            padding: 5px 9px;
            border-radius: 10px;
            border: 1px solid rgba(255,255,255,0.14);
            background: rgba(2,6,23,0.35);
            color: rgba(255,255,255,0.82);
            font-weight: 800;
        }

        footer{
            padding: 12px 18px 18px;
            text-align:center;
            font-size: .82rem;
            color: rgba(255,255,255,0.58);
            border-top: 1px solid rgba(255,255,255,0.10);
            background: rgba(2,6,23,0.65);
            backdrop-filter: blur(16px);
        }
        footer .quote{
            margin-top: 6px;
            font-size: .86rem;
            color: rgba(255,255,255,0.70);
            max-width: 80ch;
            margin-left:auto;
            margin-right:auto;
            line-height:1.55;
        }

        @media (max-width: 860px){
            .grid-menu{ grid-template-columns: 1fr; }
            .brand{ min-width:unset; }
            .user-mini{ display:none; }
        }
    </style>
</head>

<body>
    <div class="bg"></div>
    <div class="grid"></div>
    <div class="noise"></div>

    <div class="page-wrap">
        <header>
            <div class="header-inner">
                <div class="brand">
                    <div class="brand-logo">KI</div>
                    <div class="brand-text">
                        <b>Kebudayaan Indonesia</b>
                        <small>Tugas Proyek Pemograman Lanjutan</small>
                    </div>
                </div>

                <div class="user-mini">
                    <div class="welcome">
                        Selamat datang, <strong>{{ $username }}</strong>
                    </div>
                    <div class="status-row">
                        <span class="pill"><span class="dot"></span> Akses: Aktif</span>
                        <span class="pill warn"><span class="dot"></span> Literasi: Nusantara</span>
                        <span class="pill quiz"><span class="dot"></span> Kuis: Siap</span>
                    </div>
                </div>
            </div>
        </header>

        <main class="main">
            <section class="hero">
                <div class="hero-inner">
                    <div class="badge"><span class="dot"></span> Halaman Utama</div>
                    <div class="headline-title">Jelajahi Nusantara, Kenali Budayanya</div>
                    <div class="headline-subtitle">
                        Setiap daerah menyimpan cerita. Mulai dari <b>peta budaya interaktif</b>, kumpulan literasi
                        “cerita nenek moyang”, sampai <b>kuis</b> untuk menguji ingatanmu tentang Indonesia.
                    </div>

                    <div class="hint">
                        <kbd>TIP</kbd>
                        <span>Kamu bisa mulai dari <b>Peta</b> untuk eksplor, lalu lanjut <b>Kuis</b> buat tantangan.</span>
                    </div>
                </div>
            </section>

            <section class="grid-menu">
                <!-- PETA -->
                <article class="menu-card peta">
                    <div class="menu-card-inner">
                        <div class="menu-top">
                            <div class="menu-badge"><span class="mini-dot"></span> Eksplorasi • Interaktif</div>
                            <div class="menu-icon">🗺️</div>
                        </div>
                        <div class="menu-title">Peta Kebudayaan Indonesia</div>
                        <div class="menu-desc">
                            Jelajahi budaya dari Aceh hingga Papua: tarian, rumah adat, makanan khas,
                            senjata tradisional, bahasa daerah, dan cerita singkat tiap provinsi.
                        </div>
                        <div class="menu-footer">
                            <span>Mode eksplorasi visual</span>
                            <a href="/peta-budaya" class="menu-btn">Buka Peta →</a>
                        </div>
                    </div>
                </article>

                <!-- LITERASI -->
                <article class="menu-card info">
                    <div class="menu-card-inner">
                        <div class="menu-top">
                            <div class="menu-badge"><span class="mini-dot"></span> Literasi • Cerita Rakyat</div>
                            <div class="menu-icon">📚</div>
                        </div>
                        <div class="menu-title">Literasi & Cerita Nusantara</div>
                        <div class="menu-desc">
                            Tempat membaca dan menulis ringkasan cerita nenek moyang, tradisi, fakta budaya,
                            dan catatan pelestarian budaya Indonesia.
                        </div>
                        <div class="menu-footer">
                            <span>Mode baca & tulis literasi</span>
                            <a href="/pemberitahuan" class="menu-btn">Buka Literasi →</a>
                        </div>
                    </div>
                </article>

                <!-- KUIS -->
                <article class="menu-card quiz">
                    <div class="menu-card-inner">
                        <div class="menu-top">
                            <div class="menu-badge"><span class="mini-dot"></span> Tantangan • Kuis</div>
                            <div class="menu-icon">🎯</div>
                        </div>
                        <div class="menu-title">Mode Kuis Budaya</div>
                        <div class="menu-desc">
                            Uji pengetahuanmu dengan soal yang bervariasi. Kejar skor tertinggi, lihat hasil,
                            dan jadikan kuis sebagai latihan rutin memahami budaya Indonesia.
                        </div>
                        <div class="menu-footer">
                            <span>Raih poin sebanyak-banyaknya</span>
                            <a href="/questions" class="menu-btn">Mulai Kuis →</a>
                        </div>
                    </div>
                </article>
            </section>
        </main>

        <footer>
            &copy; {{ date('Y') }} Kebudayaan Indonesia • Halaman utama
            <div class="quote">
                “Melestarikan budaya bukan hanya mengingat masa lalu, tapi memahami jati diri bangsa—agar kita tahu
                dari mana kita berasal, dan ke mana kita melangkah.”
            </div>
        </footer>
    </div>
</body>
</html>
