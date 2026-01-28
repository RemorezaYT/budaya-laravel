<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('quiz_results', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('nickname');
            $table->string('level'); // mudah|normal|sulit
            $table->unsignedInteger('score');
            $table->unsignedInteger('total_questions');
            $table->unsignedInteger('correct');
            $table->unsignedInteger('duration_seconds')->nullable();
            $table->json('answers')->nullable();
            $table->timestamps();

            $table->index(['nickname', 'level']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quiz_results');
    }
};
