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
            $table->string('file_rencana_aksi')->nullable()->after('file_dipa');
            $table->string('file_lkjip')->nullable()->after('file_rencana_aksi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kanwils', function (Blueprint $table) {
            $table->dropColumn(['file_rencana_aksi', 'file_lkjip']);
        });
    }
};
