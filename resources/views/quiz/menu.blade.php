<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Menu Kuis • Peta Budaya Indonesia</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

  <style>
    :root{
      --bg1:#0b1020; --bg2:#141a33;
      --card: rgba(255,255,255,.06);
      --stroke: rgba(255,255,255,.12);
      --text:#f4f6ff;
      --muted: rgba(244,246,255,.74);
      --accent:#7c5cff;
      --accent2:#2ee59d;
      --danger:#ff4d6d;
      --shadow: 0 20px 50px rgba(0,0,0,.35);
      --radius: 18px;
    }
    *{box-sizing:border-box}
    body{
      margin:0;
      font-family:"Plus Jakarta Sans",system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;
      color:var(--text);
      min-height:100vh;
      background:
        radial-gradient(1200px 600px at 10% 10%, rgba(124,92,255,.35), transparent 60%),
        radial-gradient(900px 500px at 90% 20%, rgba(46,229,157,.22), transparent 60%),
        linear-gradient(135deg, var(--bg1), var(--bg2));
      padding: 28px 16px;
    }
    .container{width:min(1100px, 100%); margin:0 auto;}
    .top{display:flex; justify-content:space-between; gap:12px; align-items:center; flex-wrap:wrap; margin-bottom:14px;}
    .brand{display:flex; gap:12px; align-items:center;}
    .logo{
      width:44px;height:44px;border-radius:16px;
      background: linear-gradient(135deg, var(--accent), var(--accent2));
      display:grid;place-items:center;font-weight:900;
      box-shadow: 0 14px 35px rgba(0,0,0,.35);
    }
    h1{margin:0; font-size:20px; letter-spacing:-.02em;}
    .muted{color:var(--muted)}
    a{text-decoration:none;color:inherit}
    .chip{
      padding:10px 12px;
      border-radius:999px;
      border:1px solid rgba(255,255,255,.14);
      background: rgba(255,255,255,.04);
      color: var(--muted);
      font-weight:700;
      font-size: 13px;
      display:inline-flex; gap:8px; align-items:center;
    }
    .card{
      background: var(--card);
      border: 1px solid var(--stroke);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      overflow:hidden;
      backdrop-filter: blur(12px);
      padding:16px;
      margin-bottom:14px;
    }
    .row{display:grid; grid-template-columns: 1fr 1fr; gap:14px;}
    @media (max-width: 900px){ .row{grid-template-columns:1fr;} }

    .modeGrid{display:grid; grid-template-columns: repeat(3, 1fr); gap:12px;}
    @media (max-width: 900px){ .modeGrid{grid-template-columns:1fr;} }
    .mode{
      padding:14px;
      border-radius:16px;
      border:1px solid rgba(255,255,255,.12);
      background: rgba(0,0,0,.12);
      transition: transform .12s ease, border-color .12s ease;
      display:flex; justify-content:space-between; align-items:center; gap:10px;
    }
    .mode:hover{transform: translateY(-2px); border-color: rgba(255,255,255,.22);}
    .pill{font-size:12px;font-weight:900;padding:8px 10px;border-radius:999px;border:1px solid rgba(255,255,255,.14);background: rgba(255,255,255,.06);}
    .pill.good{border-color: rgba(46,229,157,.45);}
    .pill.mid{border-color: rgba(124,92,255,.55);}
    .pill.hard{border-color: rgba(255,77,109,.55);}

    input{
      padding:10px 12px;
      border-radius:12px;
      border:1px solid rgba(255,255,255,.14);
      background: rgba(255,255,255,.06);
      color:white;
      outline:none;
      width:min(320px, 100%);
    }
    button{
      padding:10px 14px;
      border-radius:12px;
      border:1px solid rgba(124,92,255,.55);
      background: rgba(124,92,255,.18);
      color:white;
      font-weight:900;
      cursor:pointer;
    }
    table{width:100%; border-collapse:collapse; font-size:14px;}
    th, td{padding:8px; text-align:left;}
    thead th{color: rgba(244,246,255,.74);}
    tbody tr{border-top:1px solid rgba(255,255,255,.10);}
    .tag{padding:6px 10px; border-radius:999px; background: rgba(0,0,0,.18); border:1px solid rgba(255,255,255,.10); display:inline-block;}
  </style>
</head>
<body>
  <div class="container">

    <div class="top">
      <div class="brand">
        <div class="logo">🇮🇩</div>
        <div>
          <h1>Menu Kuis Budaya</h1>
          <div class="muted" style="font-size:13px;">Halo, <strong>{{ session('username','User') }}</strong></div>
        </div>
      </div>

      <div style="display:flex; gap:10px; flex-wrap:wrap;">
        <a class="chip" href="{{ route('home') }}">🏠 Home</a>
        <a class="chip" href="{{ route('peta-budaya') }}">🗺️ Peta</a>
      </div>
    </div>

    {{-- NICKNAME --}}
    <div class="card">
      <h2 style="margin:0 0 10px; letter-spacing:-.02em;">👤 Nama panggilan untuk kuis</h2>

      <form method="POST" action="{{ route('quiz.nickname') }}" style="display:flex; gap:10px; flex-wrap:wrap; align-items:center;">
        @csrf
        <input name="nickname" value="{{ old('nickname', $nickname) }}" placeholder="Contoh: reza" maxlength="20" required>
        <button type="submit">Simpan</button>

        @if($nickname)
          <span class="tag">Aktif: <strong>{{ $nickname }}</strong></span>
        @else
          <span class="muted">Isi dulu supaya hasil kuis tersimpan.</span>
        @endif
      </form>

      @error('nickname')
        <div style="margin-top:8px; color:#ff9aa9;">{{ $message }}</div>
      @enderror
    </div>

    {{-- PILIH LEVEL --}}
    <div class="card">
      <h2 style="margin:0 0 12px; letter-spacing:-.02em;">🎯 Pilih Level</h2>

      <div class="modeGrid">
        <a class="mode" href="{{ route('quiz.mudah') }}">
          <div>
            <div style="font-weight:900;">Mudah</div>
            <div class="muted" style="font-size:13px;">Pemanasan untuk pemula</div>
          </div>
          <div class="pill good">START →</div>
        </a>

        <a class="mode" href="{{ route('quiz.normal') }}">
          <div>
            <div style="font-weight:900;">Normal</div>
            <div class="muted" style="font-size:13px;">Butuh fokus lebih</div>
          </div>
          <div class="pill mid">START →</div>
        </a>

        <a class="mode" href="{{ route('quiz.sulit') }}">
          <div>
            <div style="font-weight:900;">Sulit</div>
            <div class="muted" style="font-size:13px;">Tantangan maksimal</div>
          </div>
          <div class="pill hard">START →</div>
        </a>
      </div>
    </div>

    <div class="row">
      {{-- RIWAYAT HASIL (untuk nickname aktif) --}}
      <div class="card">
        <h2 style="margin:0 0 12px; letter-spacing:-.02em;">📌 Riwayat Hasil (Nickname aktif)</h2>

        @if(!$nickname)
          <div class="muted">Isi nickname dulu supaya riwayat bisa tampil.</div>
        @elseif($history->isEmpty())
          <div class="muted">Belum ada hasil. Main kuis dulu ya.</div>
        @else
          <div style="overflow:auto;">
            <table>
              <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Level</th>
                  <th>Skor</th>
                  <th>Benar</th>
                </tr>
              </thead>
              <tbody>
                @foreach($history as $r)
                  <tr>
                    <td>{{ $r->created_at->format('d M Y H:i') }}</td>
                    <td style="text-transform:capitalize;">{{ $r->level }}</td>
                    <td><strong>{{ $r->score }}</strong></td>
                    <td>{{ $r->correct }}/{{ $r->total_questions }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        @endif
      </div>

      {{-- LEADERBOARD GLOBAL --}}
      <div class="card">
        <h2 style="margin:0 0 12px; letter-spacing:-.02em;">🏆 Leaderboard (Top 20)</h2>

        @if($leaderboard->isEmpty())
          <div class="muted">Belum ada data. Main kuis dulu supaya leaderboard terisi.</div>
        @else
          <div style="overflow:auto;">
            <table>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nickname</th>
                  <th>Level</th>
                  <th>Best Skor</th>
                </tr>
              </thead>
              <tbody>
                @foreach($leaderboard as $i => $l)
                  <tr>
                    <td>{{ $i + 1 }}</td>
                    <td><strong>{{ $l->nickname }}</strong></td>
                    <td style="text-transform:capitalize;">{{ $l->level }}</td>
                    <td><strong>{{ $l->best_score }}</strong></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        @endif
      </div>
    </div>

    <div class="muted" style="font-size:12px; margin-top:10px;">
      © {{ now()->year }} • Peta Budaya Indonesia
    </div>
  </div>
</body>
</html>
