<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('word_examples', function (Blueprint $table) {
            $table->id();
            $table->foreignId('word_id')->constrained();
            $table->text('example');
            $table->text('translate');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('word_examples');
    }
};
