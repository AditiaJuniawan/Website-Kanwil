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
        Schema::create('surveis', function (Blueprint $table) {
            $table->id();
            $table->float('SPKP1')->default(0);
            $table->float('SPKP2')->default(0);
            $table->float('SPAK1')->default(0);
            $table->float('SPAK2')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('surveis', function (Blueprint $table) {
            //
        });
        
    }
};
