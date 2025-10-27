CREATE DATABASE company_bnsp;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL,
  role ENUM('admin', 'user') DEFAULT 'user'
);

CREATE TABLE articles (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  content TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE kegiatan (
  id INT AUTO_INCREMENT PRIMARY KEY,
  deskripsi TEXT NOT NULL,
  tanggal DATE NOT NULL,
  jenis ENUM('Internal', 'Eksternal') NOT NULL,
  gambar VARCHAR(255)
);