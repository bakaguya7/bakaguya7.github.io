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
        Schema::create('program_sekolahs', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('tag');
            $table->string('uploadgambar');
            $table->string('isikonten');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_sekolahs');
    }
};
