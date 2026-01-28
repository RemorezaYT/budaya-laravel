<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizResult extends Model
{
    protected $table = 'quiz_results';

    protected $fillable = [
        'username',
        'nickname',
        'level',
        'score',
        'total_questions',
        'correct',
        'duration_seconds',
        'answers',
    ];

    protected $casts = [
        'answers' => 'array',
    ];
}
