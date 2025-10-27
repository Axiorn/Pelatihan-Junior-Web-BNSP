<?php
session_start();
$loggedIn = isset($_SESSION['user']);

include 'auth/db.php';

if ($loggedIn) {
  $id = $_GET['id'];
  $data = mysqli_query($conn, "SELECT * FROM kegiatan WHERE id = $id");
  $row = mysqli_fetch_assoc($data);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Edit Kegiatan</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="flex flex-col min-h-screen bg-gray-100">
  <?php include 'layout/header.php'; ?>

  <main class="flex-grow p-6">
    <?php if ($loggedIn): ?>
      <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-blue-700 mb-6 text-center">Edit Kegiatan</h2>

        <form action="auth/proses_edit.php" method="POST" enctype="multipart/form-data" class="space-y-6">
          <input type="hidden" name="id" value="<?= $row['id'] ?>">

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
            <textarea name="deskripsi" required class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"><?= $row['deskripsi'] ?></textarea>
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Jenis Kegiatan</label>
            <div class="flex space-x-6">
              <label class="inline-flex items-center">
                <input type="radio" name="jenis" value="Internal" <?= $row['jenis'] == 'Internal' ? 'checked' : '' ?> class="form-radio text-blue-600">
                <span class="ml-2 text-gray-700">Internal</span>
              </label>
              <label class="inline-flex items-center">
                <input type="radio" name="jenis" value="Eksternal" <?= $row['jenis'] == 'Eksternal' ? 'checked' : '' ?> class="form-radio text-blue-600">
                <span class="ml-2 text-gray-700">Eksternal</span>
              </label>
            </div>
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Gambar Saat Ini</label>
            <img src="uploads/<?= $row['gambar'] ?>" class="w-32 h-auto rounded shadow mb-4">
            <input type="file" name="gambar" accept=".png,.jpg,.jpeg" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>

          <div class="text-center">
            <button type="submit" class="bg-yellow-600 hover:bg-yellow-700 text-white px-6 py-2 rounded shadow">
              Simpan Perubahan
            </button>
          </div>
        </form>
      </div>
    <?php else: ?>
      <div class="max-w-xl mx-auto bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-6 rounded shadow-md mt-10">
        <h3 class="text-lg font-bold mb-2">Akses Ditolak</h3>
        <p>Anda belum login. Silakan login terlebih dahulu untuk mengedit data kegiatan.</p>
        <a href="auth/login.php" class="inline-block mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
          Login Sekarang
        </a>
      </div>
    <?php endif; ?>
  </main>

  <?php include 'layout/footer.php'; ?>
</body>
</html>