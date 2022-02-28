<?php
$config = require(__DIR__ . "./DatabaseInfo.php");
global $DB_DATABASE, $DB_PASSWORD, $DB_USERNAME, $DB_HOST, $Statement;
$host = $DB_HOST;
$user = $DB_USERNAME;
$pass = $DB_PASSWORD;
$dbname = $DB_DATABASE;
$Dns = "mysql:host=$host;dbname=$dbname;charset=utf8";
$options = [
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];
try {
    global $Statement;
    $Statement = new PDO($Dns, $user, $pass, $options);

} catch (PDOException $error) {

    echo $error->getMessage();
    exit('</br>Database error');
}
