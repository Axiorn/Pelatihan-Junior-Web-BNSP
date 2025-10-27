<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

$role = null;
if (isset($_SESSION['user'])) {
  include 'auth/db.php';
  $username = $_SESSION['user'];
  $result = mysqli_query($conn, "SELECT role FROM users WHERE username = '$username'");
  $userData = mysqli_fetch_assoc($result);
  $role = $userData['role'];
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
    <span>Halo, <?= isset($_SESSION['user']) ? $_SESSION['user'] : 'Guest'; ?></span>

    <ul class="flex space-x-6 items-center">
      <li><a href="index.php" class="hover:text-gray-200">Home</a></li>
      <li><a href="about.php" class="hover:text-gray-200">Profile</a></li>
      <li><a href="visi-misi.php" class="hover:text-gray-200">Visi & Misi</a></li>

      <!-- Dropdown Artikel dengan Select -->
      <li class="relative">
  <div class="flex items-center bg-blue-700 rounded-md hover:bg-blue-600 w-auto">
    <select onchange="if (this.value) window.location.href = this.value"
            class="bg-blue-700 text-white font-medium py-2 pl-3 pr-8 rounded-md appearance-none cursor-pointer focus:outline-none w-auto min-w-max">
      <option value="">Artikel</option>
      <option value="artikel.php#teknologi">Konsep Teknologi</option>
      <option value="artikel.php#informasi">Informasi</option>
    </select>
    <div class="pointer-events-none absolute right-3 top-1/2 transform -translate-y-1/2 text-white"> 
    </div>
  </div>
</li>


      <?php if ($role === 'admin'): ?>
        <li><a href="galeri.php" class="hover:text-gray-200">Galeri</a></li>
        <li><a href="dashboard.php" class="hover:text-gray-200">Dashboard</a></li>
      <?php elseif ($role === 'user'): ?>
        <li><a href="galeri.php" class="hover:text-gray-200">Galeri</a></li>
      <?php endif; ?>

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