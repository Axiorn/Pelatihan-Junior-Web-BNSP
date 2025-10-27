<?php
session_start();
$loggedIn = isset($_SESSION['user']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Google Digital</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="flex flex-col min-h-screen">
    <?php include 'layout/header.php'; ?>
    <main class="flex-grow p-6">
        <?php if ($loggedIn): ?>
        <p class="mt-4 text-sm text-green-700">
            Selamat datang, <?php echo $_SESSION['user']; ?>
        </p>
        <h2 class="text-2xl font-bold mt-6 mb-4">Tambah Kegiatan</h2>

        <form action="auth/proses_kegiatan.php" method="POST" enctype="multipart/form-data" class="space-y-4">
            <textarea name="deskripsi" placeholder="Deskripsi kegiatan" required class="w-full p-2 border rounded"></textarea>

            <div class="space-x-4">
            <label><input type="radio" name="jenis" value="Internal" required> Internal</label>
            <label><input type="radio" name="jenis" value="Eksternal"> Eksternal</label>
            </div>

            <input type="file" name="gambar" accept=".png,.jpg,.jpeg" required class="w-full p-2 border rounded">

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </main>
    <?php else: ?>
      <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4" role="alert">
        <p class="font-bold">Akses Ditolak</p>
        <p>Anda belum login. Silakan login terlebih dahulu untuk mengakses halaman ini.</p>
      </div>
      <a href="auth/login.php" class="inline-block mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Login Sekarang
      </a>
    <?php endif; ?>
  </main>

  <?php include 'layout/footer.php'; ?>
</body>
</html>