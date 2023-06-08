<?php
$host = "localhost";
$user = "root";
$passwd = "";
$name = "kereta_api";

$conn = mysqli_connect($host, $user, $passwd, $name);

if (!$conn) {
    die("koneksi gagal terhubung : " . mysqli_connect_errno() . "-" . mysqli_connect_error());
} 