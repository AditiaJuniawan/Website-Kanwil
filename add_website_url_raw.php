<?php
$env = file_get_contents('.env');
preg_match('/DB_CONNECTION=(.*)/', $env, $connection);
preg_match('/DB_HOST=(.*)/', $env, $host);
preg_match('/DB_PORT=(.*)/', $env, $port);
preg_match('/DB_DATABASE=(.*)/', $env, $database);
preg_match('/DB_USERNAME=(.*)/', $env, $username);
preg_match('/DB_PASSWORD=(.*)/', $env, $password);

$host = trim($host[1]);
$port = trim($port[1]);
$db = trim($database[1]);
$user = trim($username[1]);
$pass = isset($password[1]) ? trim($password[1]) : '';

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("ALTER TABLE upt_profiles ADD COLUMN website_url VARCHAR(255) NULL");
    echo "Column website_url added successfully!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
