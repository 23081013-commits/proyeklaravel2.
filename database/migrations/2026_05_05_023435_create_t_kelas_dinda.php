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
        Schema::create('t_kelas_dinda', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelas'); // Sesuai gambar image_2adcdf.png
            $table->string('jurusan');    // Sesuai gambar image_2adcdf.png
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_kelas_dinda');
    }
};