<?php
$config = [
    'host' => 'localhost',
    'port' => 3306,
    'dbname' => 'myapp',
    'charset' => 'utf8mb4'
];

$dsn = "mysql:" . http_build_query($config, '', ';');
$username = '';
$password = '';
