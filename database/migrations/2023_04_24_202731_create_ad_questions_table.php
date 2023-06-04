<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ad_questions', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->boolean('is_public')->default(0);
            $table->boolean('is_seen')->default(0);
            $table->boolean('is_closed')->default(0);
            $table->timestamps();

            $table->foreignId('question_id')->nullable()->references('id')->on('ad_questions')->nullOnDelete();
            $table->foreignId('user_id')->nullable()->references('id')->on('users')->cascadeOnDelete();
            $table->foreignId('ad_id')->nullable()->references('id')->on('ads')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ad_questions');
    }
};
