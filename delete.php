<?php
// INCLUDE KONEKSI KE DATABASE
include("config.php");

// AMBIL DATA ID DI URL
$id = $_GET['id'];

// AMBIL NAMA DATA GAJI SEBELUMNYA
$data = mysqli_query($mysqli, "SELECT gaji FROM users WHERE gaji poko='$gaji pokok'");
$datagaji = mysqli_fetch_assoc($data);
$oldgaji = $datagaji['data gaji'];

// DELETE DATA GAJI
$link = "gaji pokok/" . $oldgajipokok;
unlink($link);

// DELETE DATA DARI TABLE
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

// REDIRECT KE index.php
header("Location:index.php");
