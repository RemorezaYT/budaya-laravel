<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Kuis Mudah • Peta Budaya Indonesia</title>

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
      padding: 26px 16px;
    }
    .container{width:min(950px, 100%); margin:0 auto;}
    .top{display:flex; justify-content:space-between; gap:12px; align-items:center; flex-wrap:wrap; margin-bottom:14px;}
    .title{display:flex; gap:12px; align-items:center;}
    .badge{
      width:44px;height:44px;border-radius:16px;
      background: linear-gradient(135deg, var(--accent2), rgba(255,255,255,.15));
      display:grid;place-items:center;font-weight:900;
      box-shadow: 0 14px 35px rgba(0,0,0,.35);
      border:1px solid rgba(255,255,255,.14);
    }
    h1{margin:0; font-size:20px; letter-spacing:-.02em;}
    .muted{color:var(--muted)}
    .chip{
      padding:10px 12px; border-radius:999px;
      border:1px solid rgba(255,255,255,.14);
      background: rgba(255,255,255,.04);
      color: var(--muted);
      font-weight:700; font-size:13px;
      display:inline-flex; gap:8px; align-items:center;
      text-decoration:none;
    }

    .card{
      background: var(--card);
      border: 1px solid var(--stroke);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      overflow:hidden;
      position:relative;
      backdrop-filter: blur(12px);
    }
    .card::before{
      content:"";
      position:absolute; inset:-2px;
      background: linear-gradient(120deg, rgba(124,92,255,.25), rgba(46,229,157,.18), rgba(255,255,255,0));
      filter: blur(22px);
      opacity:.6;
      pointer-events:none;
    }
    .card > *{position:relative}

    .head{padding:16px 16px 12px; display:flex; gap:12px; justify-content:space-between; align-items:center; flex-wrap:wrap;}
    .progressWrap{flex:1; min-width: 240px;}
    .progressRow{display:flex; justify-content:space-between; font-weight:800; font-size:13px;}
    .bar{height:10px; border-radius:999px; background: rgba(255,255,255,.08); border:1px solid rgba(255,255,255,.10); overflow:hidden; margin-top:8px;}
    .bar > div{height:100%; width:0%; background: linear-gradient(90deg, var(--accent), var(--accent2)); transition: width .25s ease;}
    .timer{
      padding:10px 12px; border-radius:14px;
      border:1px solid rgba(255,255,255,.14);
      background: rgba(0,0,0,.14);
      font-weight:900; letter-spacing:.02em;
      display:flex; gap:8px; align-items:center;
    }

    .body{padding: 16px;}
    .q{
      font-size:18px;
      font-weight:900;
      letter-spacing:-.01em;
      margin: 0 0 12px;
      line-height: 1.4;
      animation: fadeIn .22s ease;
    }
    @keyframes fadeIn {from{opacity:0; transform: translateY(4px)} to{opacity:1; transform:none}}

    .answers{display:grid; gap:10px; margin-top:10px;}
    .ans{
      border:1px solid rgba(255,255,255,.12);
      background: rgba(0,0,0,.12);
      border-radius: 16px;
      padding: 12px 12px;
      cursor:pointer;
      display:flex; gap:10px; align-items:flex-start;
      transition: transform .10s ease, border-color .10s ease;
    }
    .ans:hover{transform: translateY(-1px); border-color: rgba(255,255,255,.22);}
    .ans input{margin-top:4px}
    .ans strong{display:block}
    .ans.selected{border-color: rgba(124,92,255,.55); background: rgba(124,92,255,.08);}

    .feedback{
      margin-top: 12px;
      padding: 12px;
      border-radius: 16px;
      border: 1px solid rgba(255,255,255,.12);
      background: rgba(0,0,0,.12);
      display:none;
      animation: fadeIn .22s ease;
      line-height:1.55;
    }
    .feedback.good{border-color: rgba(46,229,157,.45); background: rgba(46,229,157,.10);}
    .feedback.bad{border-color: rgba(255,77,109,.55); background: rgba(255,77,109,.10);}

    .actions{display:flex; gap:10px; justify-content:space-between; flex-wrap:wrap; margin-top: 14px;}
    .btn{
      padding: 11px 14px;
      border-radius: 14px;
      border: 1px solid rgba(255,255,255,.14);
      background: rgba(255,255,255,.06);
      color: var(--text);
      font-weight: 900;
      cursor:pointer;
      transition: transform .08s ease;
    }
    .btn:active{transform: translateY(1px) scale(.99);}
    .btn-primary{
      border: 1px solid rgba(124,92,255,.55);
      background: linear-gradient(135deg, rgba(124,92,255,.55), rgba(46,229,157,.22));
    }
    .btn-danger{
      border: 1px solid rgba(255,77,109,.55);
      background: rgba(255,77,109,.12);
    }

    .result{
      display:none;
      padding: 18px;
    }
    .score{
      font-size:34px;
      font-weight: 900;
      letter-spacing:-.02em;
      margin: 0;
    }
    .review{
      margin-top:14px;
      display:grid;
      gap:10px;
    }
    .reviewItem{
      padding:12px;
      border-radius:16px;
      border:1px solid rgba(255,255,255,.12);
      background: rgba(0,0,0,.12);
    }
    .ok{color: rgba(46,229,157,.95); font-weight:900;}
    .no{color: rgba(255,77,109,.95); font-weight:900;}
  </style>
</head>
<body>
  <div class="container">
    <div class="top">
      <div class="title">
        <div class="badge">✅</div>
        <div>
          <h1>Kuis Mudah</h1>
          <div class="muted" style="font-size:13px;">Halo, <strong>{{ session('username','User') }}</strong> • Fokus & santai 😄</div>
        </div>
      </div>

      <div style="display:flex; gap:10px; flex-wrap:wrap;">
        <a class="chip" href="{{ route('questions') }}">⬅ Menu</a>
        <a class="chip" href="{{ route('peta-budaya') }}">🗺️ Peta</a>
      </div>
    </div>

    <div class="card" id="quizCard">
      <div class="head">
        <div class="progressWrap">
          <div class="progressRow">
            <div>Progress: <span id="idxText">1</span>/<span id="totalText">0</span></div>
            <div>Skor: <span id="scoreText">0</span></div>
          </div>
          <div class="bar"><div id="barFill"></div></div>
        </div>

        <div class="timer" title="Timer (opsional)">
          ⏱ <span id="timerText">--</span>
        </div>
      </div>

      <div class="body" id="play">
        <div class="q" id="qText">Memuat pertanyaan…</div>

        <div class="answers" id="answers"></div>

        <div class="feedback" id="feedback"></div>

        <div class="actions">
          <button class="btn btn-danger" id="resetBtn" type="button">Ulangi</button>
          <div style="display:flex; gap:10px; flex-wrap:wrap;">
            <button class="btn" id="skipBtn" type="button">Lewati</button>
            <button class="btn btn-primary" id="nextBtn" type="button">Lanjut →</button>
          </div>
        </div>
      </div>

      <div class="result" id="result">
        <p class="score">🎉 Skor kamu: <span id="finalScore">0</span></p>
        <p class="muted" style="margin:8px 0 0; line-height:1.6;">
          Ini ringkasan jawabanmu. Cek yang salah biar makin paham budaya Indonesia.
        </p>

        <div class="review" id="review"></div>

        <div class="actions" style="margin-top:16px;">
          <a class="btn" href="{{ route('questions') }}">⬅ Kembali ke Menu</a>
          <button class="btn btn-primary" id="playAgain" type="button">Main Lagi</button>
        </div>
      </div>
    </div>
  </div>

  <audio id="clickSfx" src="{{ asset('click.mp3') }}" preload="auto"></audio>

  <script>
    async function sendResultToServer(payload) {
  const token = document
    .querySelector('meta[name="csrf-token"]')
    .getAttribute('content');

  const res = await fetch("{{ route('quiz.results.store') }}", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      "X-CSRF-TOKEN": token,
      "Accept": "application/json"
    },
    body: JSON.stringify(payload)
  });

  if (!res.ok) {
    const txt = await res.text();
    console.error("Gagal simpan hasil kuis:", txt);
  }
}
    // =========================
    // SOAL MODE MUDAH (contoh — kamu boleh ganti)
    // =========================
    const questions = [
     { question: "Tari Piring berasal dari daerah…", options: ["Sumatera Barat","Bali","Jawa Tengah","Kalimantan Selatan"], answer: "Sumatera Barat", explanation: "Tari Piring merupakan tarian tradisional dari Minangkabau, Sumatera Barat." },
{ question: "Rumah adat Honai berasal dari…", options: ["Papua","NTT","Maluku","Sulawesi Tengah"], answer: "Papua", explanation: "Honai adalah rumah adat masyarakat Papua." },
{ question: "Alat musik Sasando berasal dari…", options: ["NTT","Bali","Sulawesi","Papua"], answer: "NTT", explanation: "Sasando adalah alat musik tradisional dari Nusa Tenggara Timur." },
{ question: "Pakaian adat Baju Bodo berasal dari…", options: ["Sulawesi Selatan","Sumatera Selatan","Kalimantan Barat","Maluku"], answer: "Sulawesi Selatan", explanation: "Baju Bodo merupakan pakaian adat suku Bugis dan Makassar." },
{ question: "Tari Jaipong berasal dari daerah…", options: ["Jawa Barat","Banten","Jawa Tengah","DKI Jakarta"], answer: "Jawa Barat", explanation: "Tari Jaipong berkembang di Jawa Barat dan Sunda." },
{ question: "Rumah adat Gadang berasal dari…", options: ["Sumatera Barat","Aceh","Jambi","Riau"], answer: "Sumatera Barat", explanation: "Rumah Gadang adalah rumah adat Minangkabau." },
{ question: "Alat musik Kolintang berasal dari…", options: ["Sulawesi Utara","Maluku","Papua","Bali"], answer: "Sulawesi Utara", explanation: "Kolintang merupakan alat musik khas Minahasa, Sulawesi Utara." },
{ question: "Tari Reog berasal dari daerah…", options: ["Ponorogo","Solo","Yogyakarta","Madiun"], answer: "Ponorogo", explanation: "Reog Ponorogo adalah kesenian khas dari Jawa Timur." },
{ question: "Pakaian adat Ulos berasal dari…", options: ["Sumatera Utara","Sumatera Barat","Aceh","Riau"], answer: "Sumatera Utara", explanation: "Ulos adalah kain adat masyarakat Batak." },
{ question: "Alat musik Tifa berasal dari…", options: ["Papua","NTB","Kalimantan Timur","Sulawesi Selatan"], answer: "Papua", explanation: "Tifa adalah alat musik tabuh khas Papua." },
{ question: "Tari Topeng berasal dari daerah…", options: ["Cirebon","Bali","Solo","Malang"], answer: "Cirebon", explanation: "Tari Topeng Cirebon terkenal dengan topeng berkarakter." },
{ question: "Rumah adat Lamin berasal dari…", options: ["Kalimantan Timur","Kalimantan Barat","Kalimantan Selatan","Kalimantan Tengah"], answer: "Kalimantan Timur", explanation: "Lamin adalah rumah adat suku Dayak Kenyah." },
{ question: "Alat musik Gamelan berasal dari…", options: ["Jawa","Papua","Sumatera","Sulawesi"], answer: "Jawa", explanation: "Gamelan berkembang di Jawa dan Bali." },
{ question: "Tari Zapin berasal dari daerah…", options: ["Riau","Aceh","Bengkulu","Jambi"], answer: "Riau", explanation: "Tari Zapin dipengaruhi budaya Melayu dan Arab." },
{ question: "Pakaian adat Cele berasal dari…", options: ["Maluku","Papua","NTT","Sulawesi Tenggara"], answer: "Maluku", explanation: "Baju Cele merupakan pakaian adat masyarakat Maluku." },
{ question: "Rumah adat Bolon berasal dari…", options: ["Sumatera Utara","Sumatera Barat","Riau","Aceh"], answer: "Sumatera Utara", explanation: "Rumah Bolon adalah rumah adat Batak Toba." },
{ question: "Alat musik Talempong berasal dari…", options: ["Sumatera Barat","Bali","NTT","Jawa Barat"], answer: "Sumatera Barat", explanation: "Talempong adalah alat musik khas Minangkabau." },
{ question: "Tari Cakalele berasal dari daerah…", options: ["Maluku","Papua","NTT","Sulawesi Utara"], answer: "Maluku", explanation: "Tari Cakalele adalah tarian perang tradisional Maluku." },
{ question: "Pakaian adat Payas Agung berasal dari…", options: ["Bali","Jawa Timur","NTB","Lombok"], answer: "Bali", explanation: "Payas Agung digunakan dalam upacara adat Bali." },
{ question: "Rumah adat Musalaki berasal dari…", options: ["NTT","Papua","Maluku","Sulawesi Selatan"], answer: "NTT", explanation: "Rumah Musalaki adalah rumah adat Ende, Flores." },
{ question: "Alat musik Serune Kale berasal dari…", options: ["Aceh","Minangkabau","Riau","Jambi"], answer: "Aceh", explanation: "Serune Kale adalah alat musik tiup khas Aceh." },
{ question: "Tari Kipas Pakarena berasal dari…", options: ["Sulawesi Selatan","Sulawesi Tengah","Sulawesi Barat","Sulawesi Utara"], answer: "Sulawesi Selatan", explanation: "Tari ini berasal dari Gowa, Sulawesi Selatan." },
{ question: "Pakaian adat Tapis berasal dari…", options: ["Lampung","Palembang","Bengkulu","Jambi"], answer: "Lampung", explanation: "Kain Tapis adalah kain adat masyarakat Lampung." },
{ question: "Rumah adat Sao Ria berasal dari…", options: ["NTT","Papua","Sulawesi Tengah","Maluku"], answer: "NTT", explanation: "Sao Ria merupakan rumah adat suku Ngada." },
{ question: "Alat musik Aramba berasal dari…", options: ["Nias","Papua","Bali","Aceh"], answer: "Nias", explanation: "Aramba adalah alat musik tabuh dari Pulau Nias." },
{ question: "Tari Perang berasal dari daerah…", options: ["Papua","Bali","NTB","Maluku"], answer: "Papua", explanation: "Tari Perang menggambarkan keberanian suku Papua." },
{ question: "Pakaian adat Beskap berasal dari…", options: ["Jawa Tengah","Jawa Barat","DIY","Jawa Timur"], answer: "Jawa Tengah", explanation: "Beskap adalah pakaian adat Jawa." },
{ question: "Rumah adat Baileo berasal dari…", options: ["Maluku","Papua","Sulawesi Utara","NTT"], answer: "Maluku", explanation: "Baileo digunakan sebagai rumah pertemuan adat." },
{ question: "Alat musik Gondang berasal dari…", options: ["Sumatera Utara","Aceh","Riau","Sumatera Barat"], answer: "Sumatera Utara", explanation: "Gondang merupakan alat musik tradisional Batak." },
{ question: "Tari Gending Sriwijaya berasal dari…", options: ["Sumatera Selatan","Jambi","Bengkulu","Lampung"], answer: "Sumatera Selatan", explanation: "Tari Gending Sriwijaya berasal dari Palembang." }
    ];

    // ====== SETTINGS ======
    const SCORE_PER_Q = 10;
    const TIMER_SECONDS = 25; // 0 = off, misal 20 untuk 20 detik/soal

    // ====== STATE ======
    let idx = 0;
    let score = 0;
    let selected = null;
    let locked = false;
    let answersLog = []; // {q, picked, correct, explanation}
    let tLeft = TIMER_SECONDS;
    let tInt = null;

    const el = (id) => document.getElementById(id);
    const qText = el('qText');
    const answersEl = el('answers');
    const feedbackEl = el('feedback');
    const idxText = el('idxText');
    const totalText = el('totalText');
    const scoreText = el('scoreText');
    const barFill = el('barFill');
    const timerText = el('timerText');
    const clickSfx = el('clickSfx');

    const play = el('play');
    const result = el('result');
    const finalScore = el('finalScore');
    const review = el('review');

    const nextBtn = el('nextBtn');
    const skipBtn = el('skipBtn');
    const resetBtn = el('resetBtn');
    const playAgain = el('playAgain');

    function sfx(){ try { clickSfx.currentTime = 0; clickSfx.play(); } catch(e){} }

    function setProgress(){
      totalText.textContent = questions.length;
      idxText.textContent = Math.min(idx + 1, questions.length);
      scoreText.textContent = score;
      const pct = questions.length ? (idx / questions.length) * 100 : 0;
      barFill.style.width = pct + '%';
    }

    function startTimer(){
      if (TIMER_SECONDS <= 0) { timerText.textContent = '--'; return; }
      stopTimer();
      tLeft = TIMER_SECONDS;
      timerText.textContent = tLeft + 's';
      tInt = setInterval(() => {
        tLeft--;
        timerText.textContent = tLeft + 's';
        if (tLeft <= 0){
          stopTimer();
          if (!locked){
            lockAndFeedback(null, false, "Waktu habis. Coba lebih cepat ya!");
          }
        }
      }, 1000);
    }

    function stopTimer(){ if (tInt) clearInterval(tInt); tInt = null; }

    function render(){
      if (idx >= questions.length){
        showResult();
        sendResultToServer({
  level: "mudah",
  score: score,
  total_questions: questions.length,
  correct: answersLog.filter(a => a.picked === a.correct).length,
  duration_seconds: null,
  answers: answersLog
});
        return;
      }

      locked = false;
      selected = null;
      feedbackEl.style.display = 'none';
      feedbackEl.className = 'feedback';
      feedbackEl.textContent = '';

      const q = questions[idx];
      qText.textContent = q.question;

      answersEl.innerHTML = '';
      q.options.forEach((opt) => {
        const div = document.createElement('div');
        div.className = 'ans';
        div.innerHTML = `
          <input type="radio" name="opt" />
          <div><strong>${opt}</strong></div>
        `;
        div.addEventListener('click', () => {
          if (locked) return;
          sfx();
          selected = opt;
          [...answersEl.children].forEach(c => c.classList.remove('selected'));
          div.classList.add('selected');
          div.querySelector('input').checked = true;
        });
        answersEl.appendChild(div);
      });

      setProgress();
      startTimer();
    }

    function lockAndFeedback(picked, isCorrect, extraMsg){
      locked = true;
      stopTimer();

      const q = questions[idx];
      const correct = q.answer;
      const explanation = q.explanation || '';

      [...answersEl.children].forEach((node) => {
        const text = node.querySelector('strong')?.textContent;
        if (text === correct){
          node.style.borderColor = 'rgba(46,229,157,.55)';
          node.style.background = 'rgba(46,229,157,.10)';
        }
        if (picked && text === picked && picked !== correct){
          node.style.borderColor = 'rgba(255,77,109,.55)';
          node.style.background = 'rgba(255,77,109,.10)';
        }
      });

      feedbackEl.style.display = 'block';
      feedbackEl.classList.add(isCorrect ? 'good' : 'bad');
      feedbackEl.innerHTML = isCorrect
        ? `✅ <strong>Benar!</strong>${explanation ? '<br><span class="muted">'+explanation+'</span>' : ''}`
        : `❌ <strong>Salah.</strong> Jawaban yang benar: <strong>${correct}</strong>.` +
          `${explanation ? '<br><span class="muted">'+explanation+'</span>' : ''}` +
          `${extraMsg ? '<br><span class="muted">'+extraMsg+'</span>' : ''}`;

      answersLog.push({ q: q.question, picked: picked ?? '(tidak menjawab)', correct, explanation });

      if (isCorrect) score += SCORE_PER_Q;
      scoreText.textContent = score;
    }

    function showResult(){
      stopTimer();
      play.style.display = 'none';
      result.style.display = 'block';
      finalScore.textContent = score;
      barFill.style.width = '100%';

      review.innerHTML = '';
      answersLog.forEach((item, i) => {
        const ok = item.picked === item.correct;
        const div = document.createElement('div');
        div.className = 'reviewItem';
        div.innerHTML = `
          <div style="font-weight:900; letter-spacing:-.01em; margin-bottom:6px;">
            ${ok ? '<span class="ok">✅ Benar</span>' : '<span class="no">❌ Salah</span>'}
            <span class="muted">• Soal ${i+1}</span>
          </div>
          <div style="font-weight:800; margin-bottom:6px;">${item.q}</div>
          <div class="muted">Jawaban kamu: <strong>${item.picked}</strong></div>
          <div class="muted">Jawaban benar: <strong>${item.correct}</strong></div>
          ${item.explanation ? `<div class="muted" style="margin-top:6px;">${item.explanation}</div>` : ''}
        `;
        review.appendChild(div);
      });
    }

    nextBtn.addEventListener('click', () => {
      if (idx >= questions.length) return;
      sfx();

      if (!locked) {
        if (!selected) {
          feedbackEl.style.display = 'block';
          feedbackEl.className = 'feedback bad';
          feedbackEl.innerHTML = '⚠️ <strong>Pilih jawaban dulu</strong> sebelum lanjut.';
          return;
        }
        lockAndFeedback(selected, selected === questions[idx].answer);
        return;
      }

      idx++;
      setProgress();
      render();
    });

    skipBtn.addEventListener('click', () => {
      if (idx >= questions.length) return;
      sfx();

      if (!locked) {
        lockAndFeedback(null, false, 'Kamu melewati soal ini.');
        return;
      }

      idx++;
      setProgress();
      render();
    });

    resetBtn.addEventListener('click', () => {
      sfx();
      idx = 0;
      score = 0;
      answersLog = [];
      play.style.display = 'block';
      result.style.display = 'none';
      barFill.style.width = '0%';
      setProgress();
      render();
    });

    playAgain.addEventListener('click', () => {
      sfx();
      idx = 0;
      score = 0;
      answersLog = [];
      play.style.display = 'block';
      result.style.display = 'none';
      barFill.style.width = '0%';
      setProgress();
      render();
    });

    // ✅ AUTO START
    document.addEventListener('DOMContentLoaded', () => {
      if (!Array.isArray(questions) || questions.length === 0) {
        qText.textContent = 'Pertanyaan belum ada / questions kosong.';
        totalText.textContent = '0';
        return;
      }
      render();
    });
  </script>
</body>
</html>
