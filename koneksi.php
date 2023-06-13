<?php
$host ="sql304.infinityfree.com";
$user = "if0_34388892";
$passwd = "YNRoaiuSfq";
$name = "if0_34388892_wrnata";

$conn = mysqli_connect($host, $user, $passwd, $name);

if (!$conn) {
    die("koneksi gagal terhubung : " . mysqli_connect_errno() . "-" . mysqli_connect_error());
} 