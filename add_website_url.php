<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
Illuminate\Support\Facades\Schema::table('upt_profiles', function($table) {
    if (!Illuminate\Support\Facades\Schema::hasColumn('upt_profiles', 'website_url')) {
        $table->string('website_url')->nullable();
    }
});
echo "Column website_url added!";
