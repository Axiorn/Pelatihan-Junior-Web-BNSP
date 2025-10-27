<?php
include('db.php');

$id = $_POST['id'];
$deskripsi = $_POST['deskripsi'];
$jenis = $_POST['jenis'];
$tanggal = date("Y-m-d");

$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$folder = "../uploads/";
$path = $folder . basename($gambar);

if (!empty($gambar)) {
  move_uploaded_file($tmp, $path);
  $query = "UPDATE kegiatan SET deskripsi='$deskripsi', jenis='$jenis', tanggal='$tanggal', gambar='$gambar' WHERE id=$id";
} else {
  $query = "UPDATE kegiatan SET deskripsi='$deskripsi', jenis='$jenis', tanggal='$tanggal' WHERE id=$id";
}

mysqli_query($conn, $query);
header("Location: ../galeri.php");
?>