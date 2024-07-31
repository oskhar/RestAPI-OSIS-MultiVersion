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
        Schema::create('kandidat_ketuas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('angkatan_id');
            $table->unsignedBigInteger('user_id');
            $table->string('poster_visimisi');
            $table->timestamps();

            $table->foreign('angkatan_id')->references('id')->on('angkatans')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kandidat_ketuas');
    }
};
