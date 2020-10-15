<?php
    error_reporting(E_ALL ^ E_NOTICE);
    date_default_timezone_set('America/New_York');

    $dsn = 'mysql:host=localhost;dbname=c2347a##test';
    $username = 'c2347a##';
    $password = 'use password here';

    try {
        $db = new PDO($dsn, $username, $password);
        echo 'Connect was successful';
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo 'Connect to '.$dsn.' failed.';
        require('database_error.php');
        exit();
    }    
?>

