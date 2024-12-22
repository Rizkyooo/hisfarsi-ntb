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
        Schema::create('pengurus_anggota', function (Blueprint $table) {
            $table->id(); // Kolom ID untuk pivot
            $table->foreignId('pengurus_id')->constrained()->onDelete('cascade'); // Foreign key pengurus
            $table->foreignId('anggota_id')->constrained()->onDelete('cascade'); // Foreign key anggota
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengurus_anggota');
    }
};
