<?php 

$dsn = 'mysql:host=bewellwithjoellecom.ipagemysql.com;dbname=newsite2020';
$username = 'reuben';
$password = 'Alicia2018!';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include 'errors.php';
    exit;
}

?>