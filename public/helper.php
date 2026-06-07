<?php
// Secure it with a secret key
if (($_GET['key'] ?? '') !== 'ditjenpas_secure_2026') {
    header('HTTP/1.1 403 Forbidden');
    die('Forbidden');
}

echo "<h2>Hosting Debugger</h2>";

// Handle symlink action
if (($_GET['action'] ?? '') === 'link') {
    $target = __DIR__ . '/../storage/app/public';
    $shortcut = __DIR__ . '/storage';
    
    // Check if target directory exists
    if (!file_exists($target)) {
        mkdir($target, 0755, true);
    }

    if (file_exists($shortcut)) {
        if (is_link($shortcut)) {
            unlink($shortcut);
        } else {
            rename($shortcut, $shortcut . '_old_' . time());
        }
    }
    
    if (symlink($target, $shortcut)) {
        echo "<p style='color:green; font-weight:bold;'>Storage symlink created successfully!</p>";
    } else {
        echo "<p style='color:red; font-weight:bold;'>Failed to create storage symlink.</p>";
    }
}

echo "<h3>Storage Symlink Check:</h3>";
$shortcut = __DIR__ . '/storage';
if (file_exists($shortcut)) {
    if (is_link($shortcut)) {
        echo "<p style='color:green;'>/storage exists and is a symlink pointing to: <strong>" . readlink($shortcut) . "</strong></p>";
    } else {
        echo "<p style='color:orange;'>/storage exists but is a <strong>PHYSICAL DIRECTORY</strong>. Please rename/remove it to create a symlink.</p>";
    }
} else {
    echo "<p style='color:red;'>/storage symlink does not exist.</p>";
}
echo "<p><a href='?key=ditjenpas_secure_2026&action=link' style='display:inline-block; padding:8px 15px; background:#007bff; color:#fff; text-decoration:none; border-radius:4px; font-weight:bold;'>Create / Recreate Symlink</a></p>";

echo "<h3>Directory Listing of __DIR__ (" . __DIR__ . "):</h3>";
$files = scandir(__DIR__);
echo "<pre style='background:#f4f4f4; pading:10px; border:1px solid #ccc;'>" . htmlspecialchars(implode("\n", $files)) . "</pre>";

echo "<h3>Directory Listing of Parent (" . dirname(__DIR__) . "):</h3>";
$parentFiles = scandir(dirname(__DIR__));
echo "<pre style='background:#f4f4f4; pading:10px; border:1px solid #ccc;'>" . htmlspecialchars(implode("\n", $parentFiles)) . "</pre>";

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
