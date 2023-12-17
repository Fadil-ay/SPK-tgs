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
        Schema::create('tb_data_sub_kriteria', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kriteria');
            $table->string('sub_kriteria');
            $table->string('jenis');
            $table->integer('kompetensi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_data_sub_kriteria');
    }
};
