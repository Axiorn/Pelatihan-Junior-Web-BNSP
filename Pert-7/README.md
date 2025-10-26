# 🧾 PERSIAPAN UJI KOMPETENSI BNSP

## Junior Web Programmer

### 💻 1. PERSIAPAN TEKNIS PROJECT

Pastikan project web kamu sudah siap diuji secara fungsional dan teknis.

#### 🔧 Struktur Folder

Pastikan sudah rapi:

```pgsql
project/
├── app/
│   ├── auth.php
│   ├── db.php
│   ├── functions.php
│   ├── process_contact.php
│   ├── process_login.php
│   └── process_register.php
├── config/
│   └── config.php
├── public/
│   ├── index.php
│   ├── about.php
│   ├── articles.php
│   ├── contact.php
│   ├── login.php
│   ├── register.php
│   ├── admin/
│   │   ├── dashboard.php
│   │   ├── role_management.php
│   │   └── articles.php
└── assets/
    ├── css/
    ├── js/
    └── images/
```

### 🧠 Fungsi Minimal yang Harus Jalan

| Fitur                                       | Deskripsi                                     | Status |
| ------------------------------------------- | --------------------------------------------- | ------ |
| **Register & Login**                        | Menggunakan form, validasi, dan session       | ✅     |
| **Manajemen Artikel (CRUD)**                | Admin bisa tambah, edit, hapus artikel        | ✅     |
| **Tampilan Publik Blog**                    | Artikel bisa dilihat oleh user umum           | ✅     |
| **Halaman About & Contact**                 | Form contact tersimpan ke database            | ✅     |
| **Role Management (Admin/User)** (optional) | Hak akses dibedakan                           | ✅     |
| **Security** (optional)                     | CSRF Token, Prepared Statement, Session Check | ✅     |

### 🧱 2. PERSIAPAN DATABASE

#### 🗃 Struktur Database

Pastikan file .sql siap di-import:

- Nama database: kuliah_blog

- Minimal tabel:

  - users (id, name, email, password, role)

  - articles (id, title, content, created_at, author_id)

  - contacts (id, name, email, message, created_at)

  - (opsional) roles jika role disimpan terpisah

### 📄 3. PERSIAPAN DOKUMENTASI

BNSP akan menilai kemampuan dokumentasi dan penjelasan kode.

| Dokumen                               | Isi / Penjelasan                                       |
| ------------------------------------- | ------------------------------------------------------ |
| **Laporan Proyek**                    | Deskripsi project, fitur, dan teknologi yang digunakan |
| **ERD (Entity Relationship Diagram)** | Relasi antar tabel (users, articles, contacts)         |
| **DFD / Flowchart**                   | Alur sistem login, CRUD artikel, contact form          |
| **Struktur Folder**                   | Penjelasan tiap folder/file                            |
| **Screenshot Tampilan Web**           | Halaman utama, login, dashboard, CRUD                  |
| **Manual Book (User Guide)**          | Cara menjalankan web di localhost                      |
| **Instalasi Guide**                   | Langkah install XAMPP, import DB, buka `index.php`     |

### 🧑‍🏫 4. PERSIAPAN PRESENTASI

Biasanya ada sesi demonstrasi + tanya jawab.

✅ Latihan Presentasi:

1. Perkenalan diri dan proyek

- “Nama saya ..., saya membuat aplikasi Blog Kampus yang berfungsi untuk ...”

2. Demo langsung (5–7 menit)

- Login sebagai admin

- Tambah artikel

- Tampilkan di halaman publik

- Kirim pesan lewat contact form

- Logout

3. Penjelasan teknis

- Struktur folder

- Koneksi database (config.php)

- Contoh query menggunakan prepared statement

- Proteksi CSRF di admin panel

4. Q&A

Biasanya asesor akan tanya hal seperti:

- “Kenapa menggunakan prepared statement?”

- “Bagaimana membatasi akses admin dan user?”

- “Apa itu session?”

- “Bagaimana cara mengatasi SQL Injection?”

### 🧰 5. PERSIAPAN SOFTWARE

Pastikan semua alat bisa jalan di komputer uji.

| Software             | Fungsi                       |
| -------------------- | ---------------------------- |
| XAMPP / Laragon      | Server lokal                 |
| phpMyAdmin           | Database                     |
| Code Editor (VSCode) | Edit kode                    |
| Browser              | Uji tampilan                 |
| ZIP file project     | Cadangan jika butuh reimport |

### 🧠 6. MATERI TEORI YANG SERING DITANYA

- Perbedaan GET dan POST

- Konsep CRUD

- Fungsi mysqli_prepare dan bind_param

- Penggunaan session & cookie

- Validasi input user

- Struktur MVC sederhana

- Apa itu server-side dan client-side

- Pengertian require_once dan include

- Apa itu CSRF & SQL Injection
