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
        Schema::table('kanwils', function (Blueprint $table) {
            $table->string('file_renstra')->nullable()->after('file_renja');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kanwils', function (Blueprint $table) {
            $table->dropColumn('file_renstra');
        });
    }
};
