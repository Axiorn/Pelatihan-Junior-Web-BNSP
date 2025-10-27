<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>
<head>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="assets/favicon.png" type="image/png">
</head>
<nav class="bg-blue-700 text-white px-8 py-4 flex justify-between items-center shadow">
  <div class="flex items-center space-x-3">
    <img src="assets/logo.png" alt="Logo" class="w-10 h-10 rounded-full">
    <a href="index.php">
      <span class="font-bold text-xl">Google Digital</span>
    </a>
  </div>

  <div class="flex items-center space-x-6">
    <span>Halo, <?php echo isset($_SESSION['user']) ? $_SESSION['user'] : 'Guest'; ?></span>

    <ul class="flex space-x-6 relative">
      <li><a href="index.php" class="hover:text-gray-200">Home</a></li>
      <li><a href="about.php" class="hover:text-gray-200">Profile</a></li>
      <li><a href="visi-misi.php" class="hover:text-gray-200">Visi & Misi</a></li>

      <!-- Dropdown Artikel -->
      <li class="relative group">
      <a href="#" class="hover:text-gray-200">Artikel ▾</a>
        <div class="absolute hidden group-hover:block bg-white text-black rounded shadow mt-2 z-10">
          <a href="pages/artikel.php#teknologi" class="block px-4 py-2 hover:bg-gray-200">Konsep Teknologi</a>
          <a href="pages/artikel.php#informasi" class="block px-4 py-2 hover:bg-gray-200">Informasi</a>
        </div>
      </li>

      <li><a href="galeri.php" class="hover:text-gray-200">Galeri</a></li>
      <li><a href="dashboard.php" class="hover:text-gray-200">Dashboard</a></li>

      <?php if (isset($_SESSION['user'])): ?>
        <li>
          <a href="auth/logout.php" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">Logout</a>
        </li>
      <?php else: ?>
        <li>
          <a href="auth/login.php" class="bg-white text-blue-700 px-3 py-1 rounded hover:bg-gray-100">Login</a>
        </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>