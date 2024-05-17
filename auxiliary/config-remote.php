<?php
$db = mysqli_init();
mysqli_ssl_set($db, NULL, NULL, "/home/site/wwwroot/auxilary/DigiCertGlobalRootCA.pem", NULL, NULL);

$hostname = getenv("DB_HOST");
$username = getenv("DB_USER");
$password = getenv("DB_PASSWORD");
$database = getenv("DB_NAME");
$port = getenv("DB_PORT");

$db_connection = mysqli_real_connect($db, $hostname, $username, $password, $database, $port, MYSQLI_CLIENT_SSL);

if (!$db_connection) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
