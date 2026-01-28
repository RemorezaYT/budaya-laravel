<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis Kebudayaan Indonesia</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <div class="container">
        <header>
            <h1>Selamat Datang di Kuis Kebudayaan Indonesia</h1>
            <p>Pilih tingkat kesulitan untuk memulai kuis:</p>
        </header>

        <section class="quiz-options">
            <button class="quiz-btn easy" onclick="startQuiz('easy')">Easy</button>
            <button class="quiz-btn normal" onclick="startQuiz('normal')">Normal</button>
            <button class="quiz-btn hard" onclick="startQuiz('hard')">Hard</button>
        </section>
    </div>

    <script>
        function startQuiz(difficulty) {
            sessionStorage.setItem('quizDifficulty', difficulty);
            window.location.href = "{{ url('/questions') }}";
        }
    </script>

</body>
</html>
