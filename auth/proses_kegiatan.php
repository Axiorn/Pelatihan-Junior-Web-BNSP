<?php
include '../auth/db.php';
$tanggal = date("Y-m-d");

$deskripsi = $_POST['deskripsi'];
$jenis = $_POST['jenis'];

$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$folder = "../uploads/";
$path = $folder . basename($gambar);

// Validasi ekstensi
$ext = strtolower(pathinfo($gambar, PATHINFO_EXTENSION));
$allowed = ['png', 'jpg', 'jpeg'];

if (move_uploaded_file($tmp, $path)) {
  // simpan ke database
} else {
  echo "Gagal upload gambar.";
}

if (in_array($ext, $allowed)) {
  move_uploaded_file($tmp, $path);

  $query = "INSERT INTO kegiatan (deskripsi, tanggal, jenis, gambar)
            VALUES ('$deskripsi', '$tanggal', '$jenis', '$gambar')";
  mysqli_query($conn, $query);

  header("Location: ../galeri.php");
} else {
  echo "Format gambar tidak didukung.";
}
?>