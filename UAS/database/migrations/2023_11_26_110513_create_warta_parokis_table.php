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
        Schema::create('warta_parokis', function (Blueprint $table) {
            $table->id();
            $table->string('Judul');
            $table->date('TanggalUpload');
            $table->string('Isi');
            $table->binary('attachment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warta_parokis');
    }
};
