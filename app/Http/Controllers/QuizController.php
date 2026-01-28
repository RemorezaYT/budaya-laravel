<?php

namespace App\Http\Controllers;

use App\Models\QuizResult;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function menu()
    {
        $nickname = session('quiz_nickname');

        // Riwayat hasil untuk nickname aktif (kalau ada)
        $history = collect();
        if ($nickname) {
            $history = QuizResult::where('nickname', $nickname)
                ->orderByDesc('created_at')
                ->limit(20)
                ->get();
        }

        // Leaderboard global: top skor per nickname per level
        // (kita ambil skor tertinggi tiap nickname + level, lalu urutkan)
        $leaderboard = QuizResult::select('nickname', 'level')
            ->selectRaw('MAX(score) as best_score')
            ->selectRaw('MAX(correct) as best_correct')
            ->selectRaw('MAX(total_questions) as best_total')
            ->groupBy('nickname', 'level')
            ->orderByDesc('best_score')
            ->limit(20)
            ->get();

        return view('quiz.menu', [
            'nickname' => $nickname,
            'history' => $history,
            'leaderboard' => $leaderboard,
        ]);
    }

    public function setNickname(Request $request)
    {
        $data = $request->validate([
            'nickname' => ['required', 'string', 'min:2', 'max:20'],
        ]);

        session(['quiz_nickname' => $data['nickname']]);

        return redirect()->route('questions');
    }

    public function mudah()
    {
        if (!session('quiz_nickname')) return redirect()->route('questions');
        return view('quiz.mudah');
    }

    public function normal()
    {
        if (!session('quiz_nickname')) return redirect()->route('questions');
        return view('quiz.normal');
    }

    public function sulit()
    {
        if (!session('quiz_nickname')) return redirect()->route('questions');
        return view('quiz.sulit');
    }

    public function storeResult(Request $request)
    {
        $nickname = session('quiz_nickname');
        if (!$nickname) {
            return response()->json(['message' => 'Nickname belum di-set.'], 422);
        }

        $data = $request->validate([
            'level' => ['required', 'in:mudah,normal,sulit'],
            'score' => ['required', 'integer', 'min:0'],
            'total_questions' => ['required', 'integer', 'min:1'],
            'correct' => ['required', 'integer', 'min:0'],
            'duration_seconds' => ['nullable', 'integer', 'min:0'],
            'answers' => ['nullable', 'array'],
        ]);

        QuizResult::create([
            'username' => session('username'),
            'nickname' => $nickname,
            'level' => $data['level'],
            'score' => $data['score'],
            'total_questions' => $data['total_questions'],
            'correct' => $data['correct'],
            'duration_seconds' => $data['duration_seconds'] ?? null,
            'answers' => $data['answers'] ?? null,
        ]);

        return response()->json(['message' => 'Saved']);
    }
}
