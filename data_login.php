<?php
require 'koneksi.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$query_sql = "INSERT INTO kereta VALUE (NULL,'$username','$email','$password')";

if (mysqli_query($conn, $query_sql)) {
    header("location:jadwal.php");
} else {
    die  ("jadwal tidak ditemukan : ". mysqli_connect_errno($conn)."-".mysqli_connect_error($conn));
}