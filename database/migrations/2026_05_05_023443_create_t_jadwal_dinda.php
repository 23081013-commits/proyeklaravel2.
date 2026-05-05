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
        Schema::create('t_jadwal_dinda', function (Blueprint $table) {
            $table->id();
            $table->string('hari'); // Tambahkan kolom hari
            $table->time('jam');   // Tambahkan kolom jam
            $table->string('mata_pelajaran'); // Tambahkan kolom mata pelajaran
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_jadwal_dinda');
    }
};