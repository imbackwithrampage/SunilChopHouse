<?php
session_start();
$servername = "localhost";
$server_user = "sachinsa";
$server_pass = "Sachin_@$12052003";
$dbname = "food";
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>