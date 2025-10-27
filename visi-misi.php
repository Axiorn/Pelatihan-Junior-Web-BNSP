<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Visi & Misi</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen font-sans">
  <?php include 'layout/header.php'; ?>

  <main class="flex-grow container mx-auto px-6 py-10">
    <div class="bg-white rounded-lg shadow-md p-6 max-w-3xl mx-auto">
      <h1 class="text-3xl font-bold text-blue-700 mb-6 text-center">Visi & Misi Perusahaan</h1>

      <div class="mb-8">
        <h2 class="text-xl font-semibold text-blue-600 mb-2">Visi</h2>
        <p class="text-gray-700 leading-relaxed">
          Menjadi perusahaan teknologi terdepan yang memberikan dampak positif bagi masyarakat.
        </p>
      </div>

      <div>
        <h2 class="text-xl font-semibold text-blue-600 mb-2">Misi</h2>
        <ul class="space-y-3">
          <li class="flex items-start">
            <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414L8.414 15l-4.121-4.121a1 1 0 011.414-1.414L8.414 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            <span class="text-gray-700">Mengembangkan produk digital yang inovatif</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414L8.414 15l-4.121-4.121a1 1 0 011.414-1.414L8.414 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            <span class="text-gray-700">Memberikan layanan terbaik kepada klien</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-green-500 mt-1 mr-2" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414L8.414 15l-4.121-4.121a1 1 0 011.414-1.414L8.414 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
            <span class="text-gray-700">Mendorong pertumbuhan SDM di bidang teknologi</span>
          </li>
        </ul>
      </div>
    </div>
  </main>

  <?php include 'layout/footer.php'; ?>
</body>
</html>