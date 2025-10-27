<?php
session_start();
include 'db.php';

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM users WHERE username='$username'";
  $result = mysqli_query($conn, $query);
  $user = mysqli_fetch_assoc($result);

  if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user'] = $user['username'];
    header("Location: ../dashboard.php");
    exit;
  } else {
    $error = "Login gagal! Username atau password salah.";
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
  <div class="bg-white p-6 rounded shadow-md w-96">
    <h2 class="text-xl font-bold mb-4 text-center">Login</h2>

    <?php if (isset($error)): ?>
      <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4 text-sm">
        <?= $error ?>
      </div>
    <?php endif; ?>

    <form method="POST" action="login.php">
      <input type="text" name="username" placeholder="Username" class="w-full p-2 mb-4 border rounded" required>
      <input type="password" name="password" placeholder="Password" class="w-full p-2 mb-4 border rounded" required>
      <button type="submit" name="login" class="w-full bg-green-600 text-white p-2 rounded">Login</button>
    </form>

    <p class="mt-4 text-center text-sm">
      Belum punya akun? <a href="signup.php" class="text-blue-600 hover:underline">Sign Up</a>
    </p>
    <p class="mt-2 text-center text-sm">
      <a href="../dashboard.php" class="text-blue-600 hover:underline">Masuk ke Dashboard tanpa login</a>
    </p>
  </div>

  <script src="js/auth.js"></script>
</body>
</html>