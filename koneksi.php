<?php
$host = "sql312.infinityfree.com";
$user = "if0_34387682";
$passwd = "MA0fPrOSjL7rKm";
$name = "if0_34387682_wiranata";

$conn = mysqli_connect($host, $user, $passwd, $name);

if (!$conn) {
    die("koneksi gagal terhubung : " . mysqli_connect_errno() . "-" . mysqli_connect_error());
} 