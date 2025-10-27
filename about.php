<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Kami</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="flex flex-col min-h-screen">
  <?php include 'layout/header.php'; ?>

  <main class="flex-grow p-6">
    <div class="flex flex-col md:flex-row items-center gap-8">
      <div class="md:w-1/2">
        <img src="assets/company.jpg" alt="Foto Perusahaan"
            class="w-full max-w-sm md:max-w-md lg:max-w-lg h-auto object-cover rounded shadow-md mx-auto">
      </div>

      <div class="md:w-1/2">
        <h2 class="text-2xl font-bold mb-4 text-blue-700">PT Google Digital Indonesia</h2>
        <p class="text-gray-700 mb-4">
          PT Google Digital Indonesia adalah perusahaan teknologi yang bergerak di bidang pengembangan solusi digital, pelatihan teknologi, dan sertifikasi kompetensi. Kami berkomitmen untuk mendorong transformasi digital di Indonesia melalui inovasi dan edukasi.
        </p>

        <div class="bg-white p-4 rounded shadow">
          <h3 class="text-lg font-semibold text-blue-600 mb-2">Visi</h3>
          <p class="text-gray-700 mb-4">Menjadi pelopor transformasi digital yang inklusif dan berkelanjutan di Indonesia.</p>

          <h3 class="text-lg font-semibold text-blue-600 mb-2">Misi</h3>
          <ul class="list-disc list-inside text-gray-700 space-y-1">
            <li>Menyediakan layanan digital yang inovatif dan mudah diakses.</li>
            <li>Meningkatkan literasi teknologi masyarakat melalui pelatihan dan sertifikasi.</li>
            <li>Berperan aktif dalam pengembangan ekosistem digital nasional.</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="mt-10 bg-white p-6 rounded shadow">
      <h3 class="text-xl font-bold text-blue-700 mb-4">Informasi Kontak</h3>
      <p class="text-gray-700"><strong>Alamat:</strong> Jl. Teknologi No. 88, Yogyakarta</p>
      <p class="text-gray-700"><strong>Email:</strong> info@googledigital.id</p>
      <p class="text-gray-700"><strong>Telepon:</strong> (0274) 123456</p>
    </div>
  </main>
  
  <?php include 'layout/footer.php'; ?>
</body>
</html>