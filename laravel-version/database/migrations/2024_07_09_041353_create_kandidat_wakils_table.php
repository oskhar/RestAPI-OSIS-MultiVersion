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
        Schema::create('kandidat_wakils', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kandidat_ketua_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('kandidat_ketua_id')->references('id')->on('kandidat_ketuas')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kandidat_wakils');
    }
};