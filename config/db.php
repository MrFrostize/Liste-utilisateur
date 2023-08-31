<?php
define('DB_HOST', 'localhost:8889');
define('DB_NAME', 'test');
define('DB_USER', 'diginamic');
define('DB_PASS', 'diginamic');
define('DB_CHARSET', 'utf8mb4');

define('DB_DSN', "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET);

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO(DB_DSN, DB_USER, DB_PASS, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

?>
