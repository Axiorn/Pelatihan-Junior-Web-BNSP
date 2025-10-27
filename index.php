<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda | TechNova Digital</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="flex flex-col min-h-screen">
  <?php include 'layout/header.php'; ?>

  <main class="flex-grow p-6">
    <!-- Hero Section -->
    <section class="text-center py-16 bg-gradient-to-r from-blue-700 to-blue-400 text-white">
      <h1 class="text-4xl font-bold mb-4">Selamat Datang di Google Digital</h1>
      <p class="text-lg max-w-2xl mx-auto">
        Solusi inovatif untuk transformasi digital bisnis Anda.
      </p>
    </section>

    <!-- Konten -->
    <section class="max-w-6xl mx-auto py-12 px-6 grid md:grid-cols-3 gap-8">
      <div class="bg-white p-6 rounded-xl shadow">
        <h2 class="text-xl font-semibold mb-2">Tentang Kami</h2>
        <p>Kami adalah perusahaan teknologi yang bergerak di bidang solusi digital, pengembangan web, dan sistem informasi.</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow">
        <h2 class="text-xl font-semibold mb-2">Produk Kami</h2>
        <p>Website, aplikasi mobile, dan sistem ERP yang dirancang untuk efisiensi bisnis modern.</p>
      </div>
      <div class="bg-white p-6 rounded-xl shadow">
        <h2 class="text-xl font-semibold mb-2">Visi & Misi</h2>
        <p>Menghadirkan inovasi yang berdampak dan menjadi mitra digital terpercaya bagi klien kami.</p>
      </div>
    </section>
  </main>

  <?php include 'layout/footer.php'; ?>
</body>
</html>