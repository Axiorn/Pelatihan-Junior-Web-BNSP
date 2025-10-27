<?php
session_start();
include 'db.php';

if (isset($_POST['signup'])) {
  $username = $_POST['username'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
  $result = mysqli_query($conn, $query);

  if ($result) {
    $_SESSION['signup_success'] = true;
    header("Location: signup.php");
    exit;
  } else {
    $_SESSION['signup_error'] = "Gagal: " . mysqli_error($conn);
    header("Location: signup.php");
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Sign Up</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
  <div class="bg-white p-6 rounded shadow-md w-96">
    <h2 class="text-xl font-bold mb-4 text-center">Sign Up</h2>
    <form method="POST" action="signup.php">
      <input type="text" name="username" placeholder="Username" class="w-full p-2 mb-4 border rounded" required>
      <input type="password" name="password" placeholder="Password" class="w-full p-2 mb-4 border rounded" required>
      <button type="submit" name="signup" class="w-full bg-green-600 text-white p-2 rounded">Sign Up</button>
    </form>
    <p class="mt-4 text-center text-sm">Sudah punya akun? <a href="login.php" class="text-blue-600">Login</a></p>
  </div>
  <script src="js/auth.js"></script>
</body>
</html>

<?php
if (isset($_SESSION['signup_success'])) {
  echo '<div id="popup" class="fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded shadow z-50">
          Registrasi berhasil!
        </div>';
  unset($_SESSION['signup_success']);
}
if (isset($_SESSION['signup_error'])) {
  echo '<div id="popup" class="fixed top-4 right-4 bg-red-500 text-white px-4 py-2 rounded shadow z-50">
          ' . $_SESSION['signup_error'] . '
        </div>';
  unset($_SESSION['signup_error']);
}
?>

<script>
  setTimeout(() => {
    const popup = document.getElementById('popup');
    if (popup) popup.remove();
  }, 5000);
</script>
