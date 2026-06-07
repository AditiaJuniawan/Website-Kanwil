<?php
// Secure it with a secret key
if (($_GET['key'] ?? '') !== 'ditjenpas_secure_2026') {
    header('HTTP/1.1 403 Forbidden');
    die('Forbidden');
}

echo "<h2>Hosting Debugger</h2>";

echo "<h3>Laravel Log (Last 50 lines):</h3>";
$logPath = __DIR__ . '/../storage/logs/laravel.log';
if (file_exists($logPath)) {
    $lines = file($logPath);
    $lastLines = array_slice($lines, -50);
    echo "<pre style='background:#f4f4f4; pading:10px; border:1px solid #ccc;'>" . htmlspecialchars(implode("", $lastLines)) . "</pre>";
} else {
    echo "Log file not found at " . $logPath;
}

echo "<h3>PHP Version:</h3>";
echo phpversion();

echo "<h3>Environment Configuration (Passwords masked):</h3>";
$envPath = __DIR__ . '/../.env';
if (file_exists($envPath)) {
    $env = file_get_contents($envPath);
    $env = preg_replace('/DB_PASSWORD=.*/', 'DB_PASSWORD=*****', $env);
    echo "<pre style='background:#f4f4f4; pading:10px; border:1px solid #ccc;'>" . htmlspecialchars($env) . "</pre>";
} else {
    echo ".env not found at " . $envPath;
}
