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
      <?php
        include 'auth/db.php';
        $username = $_SESSION['user'];
        $result = mysqli_query($conn, "SELECT role FROM users WHERE username = '$username'");
        $userData = mysqli_fetch_assoc($result);
        $role = $userData['role'];
      ?>

      <?php if ($role !== 'admin'): ?>
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4" role="alert">
          <p class="font-bold">Akses Ditolak</p>
          <p>Halaman ini hanya dapat diakses oleh admin.</p>
        </div>
        <a href="galeri.php" class="inline-block mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
          Kembali ke Galeri
        </a>
      <?php else: ?>
        <p class="mt-4 text-sm text-green-700">
          Selamat datang, <?= $username ?> <span class="text-red-600">(<?= $role ?>)</span>
        </p>

        <?php
        $data = mysqli_query($conn, "SELECT * FROM kegiatan");
        ?>

        <div class="flex justify-between items-center mt-6 mb-4">
          <h2 class="text-2xl font-bold">Dashboard</h2>
          <a href="tambah_kegiatan.php">
            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Tambah Kegiatan</button>
          </a>
        </div>  

        <table class="table-auto w-full border mt-2">
          <thead>
            <tr class="bg-gray-200">
              <th class="px-4 py-2">No</th>
              <th class="px-4 py-2">Tanggal</th>
              <th class="px-4 py-2">Deskripsi</th>
              <th class="px-4 py-2">Jenis</th>
              <th class="px-4 py-2">Gambar</th>
              <th class="px-4 py-2">Aksi</th>
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
              <td class="border px-4 py-2">
                <a href="edit.php?id=<?= $row['id'] ?>" class="text-blue-600 hover:underline">Edit</a> |
                <a href="auth/proses_hapus.php?id=<?= $row['id'] ?>" class="text-red-600 hover:underline" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
              </td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      <?php endif; ?>

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