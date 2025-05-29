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
        Schema::create('petugas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sampah_id');
            $table->string('nama_lengkap');
            $table->string('nomor_hp',20)->nullable();
            $table->string('wilayah_tugas')->nullable();
            $table->timestamps();
            $table->foreign('sampah_id')->references('id')->on('regis')->onDelete('cascade');
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugas');
    }
};
