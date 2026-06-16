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
        Schema::create('upt_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('upt_id')->unique()->comment('ID dari tabel upt di database sultan');
            $table->string('foto')->nullable();
            $table->string('jenis_upt')->nullable();
            $table->text('informasi_singkat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upt_profiles');
    }
};
