<?php

namespace App\Http\Controllers;

class QuizController extends Controller
{
    public function menu()
    {
        return view('quiz.menu');
    }

    public function mudah()
    {
        return view('quiz.mudah');
    }

    public function normal()
    {
        return view('quiz.normal');
    }

    public function sulit()
    {
        return view('quiz.sulit');
    }
}
