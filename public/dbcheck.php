<?php
// Secure it with a secret key
if (($_GET['key'] ?? '') !== 'ditjenpas_secure_2026') {
    header('HTTP/1.1 403 Forbidden');
    die('Forbidden');
}

// Detect target path dynamically
$laravelRoot = __DIR__ . '/laravel';
if (!file_exists($laravelRoot)) {
    $laravelRoot = dirname(__DIR__);
}

require_once $laravelRoot . '/vendor/autoload.php';
$app = require_once $laravelRoot . '/bootstrap/app.php';
$kernel = $app->make(\Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

header('Content-Type: text/plain');
echo "Total Posts: " . \App\Models\Post::count() . "\n\n";
foreach (\App\Models\Post::all() as $p) {
    echo "ID: {$p->id}\n";
    echo "Title: {$p->title}\n";
    echo "Slug: {$p->slug}\n";
    echo "Published At: {$p->published_at}\n";
    echo "---------------------------------\n";
}
