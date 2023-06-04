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
        Schema::create('ad_attributes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('attribute_key');
            $table->string('attribute_value');

            $table->foreignId('ad_id')->nullable()->references('id')->on('ads')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ad_attributes');
    }
};
