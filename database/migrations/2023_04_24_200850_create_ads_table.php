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
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('short_description');
            $table->integer('price');
            $table->json('price_history');
            $table->string('status');
            $table->string('promotion_level');
            $table->string('tags')->nullable();
            $table->string('type')->nullable();
            $table->integer('number_of_views')->default(0);
            $table->integer('number_of_likes')->default(0);
            $table->integer('number_of_dislikes')->default(0);
            $table->foreignId('category_id')->nullable()->references('id')->on('ad_categories')->nullOnDelete();
            $table->foreignId('user_id')->nullable()->references('id')->on('users')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};
