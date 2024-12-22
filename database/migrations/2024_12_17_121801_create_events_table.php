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
        Schema::dropIfExists('events'); 
        Schema::create('events', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama_event');
            $table->string('banner')->nullable();
            $table->text('deskripsi')->nullable();
            $table->dateTime('tanggal_mulai')->nullable();
            $table->dateTime('tanggal_selesai')->nullable();
            $table->string('lokasi');
            $table->enum('jenis_event', ['Seminar', 'Workshop', 'Webinar']);
            $table->integer('kuota_peserta')->nullable();
            $table->enum('status', ['Aktif', 'Ditutup', 'Selesai'])->default('Aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
