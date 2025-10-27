<?php
session_start();
$loggedIn = isset($_SESSION['user']);
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
    <?php if ($loggedIn): ?>
      <?php
        include 'auth/db.php';
        $username = $_SESSION['user'];
        $result = mysqli_query($conn, "SELECT role FROM users WHERE username = '$username'");
        $userData = mysqli_fetch_assoc($result);
        $role = $userData['role'];
      ?>
      <p class="mt-4 text-sm text-green-700">
        Selamat datang, <?= $username ?> <span class="text-red-600">(<?= $role ?>)</span>
      </p>

      <?php
      include 'auth/db.php';
      $data = mysqli_query($conn, "SELECT * FROM kegiatan");
      ?>

      <h2 class="text-2xl font-bold mt-6 mb-4">Galeri Kegiatan</h2>

      <table class="table-auto w-full border mt-2">
        <thead>
          <tr class="bg-gray-200">
            <th class="px-4 py-2">No</th>
            <th class="px-4 py-2">Tanggal</th>
            <th class="px-4 py-2">Deskripsi</th>
            <th class="px-4 py-2">Jenis</th>
            <th class="px-4 py-2">Gambar</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_assoc($data)): ?>
          <tr>
            <td class="border px-4 py-2"><?= $row['id'] ?></td>
            <td class="border px-4 py-2"><?= $row['tanggal'] ?></td>
            <td class="border px-4 py-2"><?= $row['deskripsi'] ?></td>
            <td class="border px-4 py-2"><?= $row['jenis'] ?></td>
            <td class="border px-4 py-2">
              <img src="uploads/<?= $row['gambar'] ?>" class="w-20 h-auto rounded">
            </td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>

    <?php else: ?>
      <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4" role="alert">
        <p class="font-bold">Akses Ditolak</p>
        <p>Anda belum login. Silakan login terlebih dahulu untuk melihat galeri kegiatan.</p>
      </div>
      <a href="auth/login.php" class="inline-block mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Login Sekarang
      </a>
    <?php endif; ?>
  </main>

  <?php include 'layout/footer.php'; ?>
</body>
</html>