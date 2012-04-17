<?php
    session_start();
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);

    include 'models/database.php';
    include 'models/login.php';
    include 'models/projects.php';
    header( 'Content-type: text/html; charset=utf8' );
?>
