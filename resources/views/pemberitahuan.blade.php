<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Literasi Cerita Nenek Moyang • Kebudayaan Indonesia</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    :root{
      --bg:#020617;
      --card: rgba(255,255,255,.06);
      --stroke: rgba(255,255,255,.12);
      --text:#e5e7eb;
      --muted:#9ca3af;
      --accent:#7c5cff;
      --shadow: 0 20px 50px rgba(0,0,0,.35);
      --radius: 18px;
    }
    *{box-sizing:border-box;margin:0;padding:0}
    body{
      font-family: system-ui, -apple-system, "Segoe UI", sans-serif;
      min-height:100vh;
      background:
        radial-gradient(circle at top left, #111827, transparent 55%),
        radial-gradient(circle at bottom right, #020617, #020617 75%);
      color: var(--text);
      padding: 22px 14px;
    }
    .container{width:min(980px, 100%); margin:0 auto;}
    .top{
      display:flex; justify-content:space-between; align-items:center; gap:12px; flex-wrap:wrap;
      margin-bottom: 14px;
    }
    .title h1{font-size:22px; letter-spacing:-.02em; margin-bottom:4px;}
    .muted{color:var(--muted); line-height:1.6}
    .chip{
      display:inline-flex; gap:8px; align-items:center;
      padding:10px 12px; border-radius:999px;
      border:1px solid rgba(255,255,255,.14);
      background: rgba(255,255,255,.04);
      color: var(--text);
      text-decoration:none;
      font-weight:700;
      font-size:13px;
    }
    .card{
      background: var(--card);
      border: 1px solid var(--stroke);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      padding: 16px;
      margin-bottom: 14px;
      backdrop-filter: blur(12px);
    }
    input{
      width:100%;
      padding: 12px 14px;
      border-radius: 14px;
      border:1px solid rgba(255,255,255,.14);
      background: rgba(255,255,255,.06);
      color: var(--text);
      outline:none;
      font-size: 14px;
    }
    .grid{display:grid; grid-template-columns: 1fr; gap:12px; margin-top:12px;}
    details{
      border:1px solid rgba(255,255,255,.12);
      border-radius: 16px;
      background: rgba(0,0,0,.12);
      overflow:hidden;
    }
    summary{
      list-style:none;
      cursor:pointer;
      padding: 14px 14px;
      display:flex; justify-content:space-between; gap:12px; align-items:center;
    }
    summary::-webkit-details-marker{display:none}
    .badge{
      font-weight:900; font-size:12px;
      padding: 7px 10px;
      border-radius: 999px;
      border:1px solid rgba(124,92,255,.55);
      background: rgba(124,92,255,.16);
      color: var(--text);
      white-space:nowrap;
    }
    .content{
      padding: 0 14px 14px 14px;
      color: var(--muted);
      line-height: 1.75;
    }
    .footer{margin-top:10px; font-size:12px; color: var(--muted);}
  </style>
</head>
<body>
  <div class="container">

    <div class="top">
      <div class="title">
        <h1>📚 Literasi Cerita Nenek Moyang</h1>
        <div class="muted">Ketik nama daerah untuk menemukan cerita dan nilai budaya. (Berbasis folklore/inspirasi literasi)</div>
      </div>

      <div style="display:flex; gap:10px; flex-wrap:wrap;">
        <a class="chip" href="{{ route('home') }}">🏠 Home</a>
        <a class="chip" href="{{ route('peta-budaya') }}">🗺️ Peta Budaya</a>
        <a class="chip" href="{{ route('questions') }}">🎯 Kuis</a>
      </div>
    </div>

    <div class="card">
      <div style="font-weight:900; margin-bottom:10px;">🔎 Cari Daerah</div>
      <input id="search" placeholder="Contoh: Aceh / Bali / Papua / Maluku / NTT">
      <div class="footer" style="margin-top:8px;">
        Tips: ketik sebagian (misal “ja” untuk Jawa).
      </div>
    </div>

    <div class="card">
      <div style="font-weight:900;">📌 Daftar Cerita</div>

      <div id="list" class="grid">
        @foreach($stories as $s)
          <details class="item" data-region="{{ strtolower($s['region']) }}">
            <summary>
              <div>
                <div style="font-weight:900; letter-spacing:-.01em;">{{ $s['region'] }}</div>
                <div class="muted" style="font-size:13px; margin-top:2px;">{{ $s['title'] }}</div>
              </div>
              <span class="badge">Baca</span>
            </summary>
            <div class="content">
              {{ $s['story'] }}
            </div>
          </details>
        @endforeach
      </div>

      <div id="empty" class="muted" style="display:none; margin-top:12px;">
        Tidak ditemukan. Coba ketik: Aceh, Bali, Papua, Maluku, NTT, Kalimantan Timur.
      </div>

      <div class="footer">
        Catatan: Cerita ditulis untuk literasi budaya (folklore/inspirasi), bukan referensi sejarah akademik.
      </div>
    </div>

  </div>

  <script>
    const search = document.getElementById('search');
    const items = Array.from(document.querySelectorAll('.item'));
    const empty = document.getElementById('empty');

    function norm(s){ return (s||'').toLowerCase().trim(); }

    search.addEventListener('input', () => {
      const q = norm(search.value);
      let shown = 0;

      items.forEach(el => {
        const region = el.getAttribute('data-region');
        const title = norm(el.querySelector('.muted')?.textContent);
        const ok = !q || region.includes(q) || title.includes(q);

        el.style.display = ok ? '' : 'none';
        if (ok) shown++;
      });

      empty.style.display = (shown === 0) ? 'block' : 'none';
    });
  </script>
</body>
</html>
