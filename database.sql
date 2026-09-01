-- Import file ini lewat phpMyAdmin Laragon
CREATE DATABASE IF NOT EXISTS db_skillvora;
USE db_skillvora;

CREATE TABLE IF NOT EXISTS testimoni (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    kursus VARCHAR(100) NOT NULL,
    isi TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Data contoh biar halaman testimoni & preview di beranda tidak kosong
INSERT INTO testimoni (nama, kursus, isi) VALUES
('Dinda Ayu', 'Social Media Management', 'Setelah lulus dari Skillvora saya langsung dipercaya jadi admin sosial media di sebuah brand lokal. Materinya aplikatif banget.'),
('Rangga Saputra', 'Videografi & Editing Konten', 'Instrukturnya sabar dan praktik langsung dari hari pertama. Sekarang saya freelance sebagai video editor.'),
('Putri Wulandari', 'Copywriting & Digital Ads', 'Belajar bikin ads yang benar-benar convert, bukan cuma teori. Recommended buat yang mau kerja di digital agency.');
