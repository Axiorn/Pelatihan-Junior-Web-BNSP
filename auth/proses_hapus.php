<?php
include 'db.php';
$id = $_GET['id'];

$get = mysqli_query($conn, "SELECT gambar FROM kegiatan WHERE id = $id");
$row = mysqli_fetch_assoc($get);
$gambar = $row['gambar'];
$path = "uploads/" . $gambar;
if (file_exists($path)) {
  unlink($path);
}

mysqli_query($conn, "DELETE FROM kegiatan WHERE id = $id");
header("Location: ../galeri.php");
?>