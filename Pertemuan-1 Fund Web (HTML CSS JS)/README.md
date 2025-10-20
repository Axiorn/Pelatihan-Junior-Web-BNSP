# 📘 Hari 1 — Fundamental Web & Setup

## 🎯 Tujuan Pembelajaran

Di akhir sesi ini, peserta mampu:

- Memahami konsep dasar Web Development (Frontend, Backend, Fullstack)
- Mengetahui arsitektur client-server dan cara kerja website
- Melakukan instalasi tools utama untuk web programming
- Mengenal dasar HTML, CSS, dan JavaScript
- Membuat halaman web sederhana
- Menggunakan Git untuk version control dasar

## 🧠 Web Development Dasar: HTML, CSS, dan JavaScript

### 1. HTML (HyperText Markup Language)

HTML adalah struktur dasar dari sebuah halaman web. Ibaratnya seperti tulang dan isi tubuh dari website.

HTML menentukan apa yang muncul di halaman, seperti:

- Teks, gambar, tautan, tabel, form, dan lainnya.

- HTML tidak mengatur tampilan (warna, ukuran, posisi).

- File HTML biasanya berekstensi `.html.`

Contoh HTML :

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Belajar HTML</title>
  </head>
  <body>
    <h1>Halo Dunia!</h1>
    <p>Ini adalah paragraf pertama saya.</p>
    <a href="https://www.google.com">Kunjungi Google</a>
  </body>
</html>
```

### 2. CSS (Cascading Style Sheets)

- CSS digunakan untuk mengatur tampilan dan gaya halaman web.

- Mengatur warna, font, ukuran, tata letak, animasi, dan responsif.

- CSS bisa ditulis langsung di HTML atau di file terpisah .css.

Contoh CSS :

```css
body {
  background-color: #f9fafb;
  font-family: Arial, sans-serif;
}

h1 {
  color: #1e3a8a;
  text-align: center;
}
```

Contoh HTML + CSS terhubung:

```html
<link rel="stylesheet" href="style.css" />
```

### 3. Javascript (JS)

JavaScript adalah bahasa pemrograman yang membuat website menjadi interaktif dan dinamis.

- Bisa digunakan untuk membuat tombol berfungsi, form validasi, animasi, atau update isi halaman tanpa reload.

- File JavaScript berekstensi .js.

Contoh Javascript :

```html
<button onclick="halo()">Klik Saya!</button>

<script>
  function halo() {
    alert("Halo Vanya! Ini JavaScript bekerja 🎉");
  }
</script>
```

### Bagaimana Hubungan Ketiganya ?

| Komponen   | Fungsi Utama                | Analogi         |
| ---------- | --------------------------- | --------------- |
| HTML       | Struktur dan konten website | Tulang & tubuh  |
| CSS        | Tampilan dan desain         | Pakaian & warna |
| JavaScript | Interaktivitas dan logika   | Otak & gerakan  |

## Apa Itu Website dan Bagaimana Cara Kerjanya?

### 1. Pengertian Website

Website adalah kumpulan halaman web yang saling terhubung dan dapat diakses melalui internet menggunakan browser (seperti Chrome, Edge, Safari).

Website bisa bersifat statis (isinya tetap) atau dinamis (berubah sesuai data pengguna).

### 2. Cara Kerja Website

- Pengguna mengetik alamat di browser (misalnya www.example.com).

- Browser mengirim permintaan (request) ke server.

- Server memproses permintaan, lalu mengirim file HTML, CSS, JS, atau data.

- Browser menampilkan hasilnya ke layar pengguna.

**💡 Singkatnya:
Browser (Client) ←→ Internet ←→ Server**

### 💻 Frontend vs Backend vs Fullstack

| Peran         | Penjelasan                                                       | Contoh Teknologi                  |
| ------------- | ---------------------------------------------------------------- | --------------------------------- |
| **Frontend**  | Bagian website yang dilihat dan digunakan oleh pengguna (UI/UX). | HTML, CSS, JavaScript, React, Vue |
| **Backend**   | Bagian belakang yang menangani logika, database, dan server.     | Node.js, PHP, Python, Go, MySQL   |
| **Fullstack** | Developer yang menguasai **frontend + backend**.                 | Menggabungkan semua hal di atas   |

## Install dan Setup

### 1. Install Visual Studio Code

Video Tutorial : https://www.youtube.com/watch?v=DoLYVXR9SSc

Langkah:

- Kunjungi https://code.visualstudio.com/

- Klik Download for Windows (atau OS kamu).

- Jalankan file .exe dan ikuti langkah instalasi.

- Setelah selesai, buka VS Code.

Extension yang disarankan:

- 🌈 Live Server — Menjalankan website secara langsung di browser.

- 🎨 Prettier — Merapikan kode otomatis.

- 🔤 HTML CSS Support — Membantu auto-complete.

- 🧩 JavaScript (ES6) Snippets — Shortcut JS modern.

- 📘 GitLens — Untuk melihat riwayat Git.

- 💡 Auto Rename Tag — Mengubah tag HTML otomatis.

### 2. Install Git

Video Tutorial : https://www.youtube.com/watch?v=t2-l3WvWvqg

Git digunakan untuk mengelola versi kode (version control).

Langkah:

- Buka https://git-scm.com/downloads

- Pilih sistem operasi kamu (Windows, macOS, Linux).

- Ikuti wizard instalasi hingga selesai.

- Cek instalasi dengan membuka Command Prompt:

```bash
git --version
```

### 3. Install Node JS

Video Tutorial : https://www.youtube.com/watch?v=lt5D2EWZMN0

Node.js digunakan untuk menjalankan JavaScript di luar browser (misalnya di backend).

Langkah:

- Kunjungi https://nodejs.org/

- Pilih versi LTS (Long Term Support).

- Jalankan installer dan ikuti langkah-langkahnya.

- Setelah selesai, cek di terminal:

```bash
node -v
npm -v
```

## Exercise (HTML, CSS & JS)

Latihan ini optional boleh dikerjakan boleh tidak buat temen2 latihan ya.
