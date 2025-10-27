<?php
include 'auth/db.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM kegiatan WHERE id = $id");
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Galeri Kegiatan</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="flex flex-col min-h-screen">
  <?php include 'layout/header.php'; ?>

  <main class="flex-grow p-6">

  <h2 class="text-2xl font-bold mt-6 mb-4">Edit Kegiatan</h2>

    <form action="auth/proses_edit.php" method="POST" enctype="multipart/form-data" class="space-y-4">
      <input type="hidden" name="id" value="<?= $row['id'] ?>">

      <textarea name="deskripsi" required class="w-full p-2 border rounded"><?= $row['deskripsi'] ?></textarea>

      <div class="space-x-4">
        <label><input type="radio" name="jenis" value="Internal" <?= $row['jenis'] == 'Internal' ? 'checked' : '' ?>> Internal</label>
        <label><input type="radio" name="jenis" value="Eksternal" <?= $row['jenis'] == 'Eksternal' ? 'checked' : '' ?>> Eksternal</label>
      </div>

      <p>Gambar saat ini:</p>
      <img src="uploads/<?= $row['gambar'] ?>" class="w-20">
      <input type="file" name="gambar" accept=".png,.jpg,.jpeg" class="w-full p-2 border rounded">

      <button type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded">Update</button>
    </form>
    </main>
  <?php include 'layout/footer.php'; ?>
</body>
</html>