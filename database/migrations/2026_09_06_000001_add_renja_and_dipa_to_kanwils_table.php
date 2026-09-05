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
            $table->string('file_renja')->nullable()->after('running_text');
            $table->string('file_dipa')->nullable()->after('file_renja');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kanwils', function (Blueprint $table) {
            $table->dropColumn(['file_renja', 'file_dipa']);
        });
    }
};
