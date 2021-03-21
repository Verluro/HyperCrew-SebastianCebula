<?php 
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'hypercrew');
define('DB_HOST', 'localhost');

try {
    $pdo = new PDO(
        'mysql:host='. DB_HOST .';
        dbname='. DB_NAME, DB_USER, DB_PASSWORD,
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        )
    );
} catch( PDOException $e ) { echo 'Błąd połączenia z bazą danych!' . $e->getMessage();}