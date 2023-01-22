<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "user";

$conn = new mysqli($hostname,$username,$password,$database);

if ($conn -> connect_error) {
    die("Database Tidak Terkoneksi".$conn -> connect_error);
}

?>