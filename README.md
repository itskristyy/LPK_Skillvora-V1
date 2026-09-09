<div align="center">

# LPK SKILLVORA

✦ Wujudkan Karir Impian dengan Keahlian Praktis ✦

⋆｡°✩ ⋆｡°✩ ⋆｡°✩ ⋆｡°✩ ⋆｡°✩ ⋆｡°✩ ⋆｡°✩

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)

</div>

<br>

── ✧ ──────────────────────────────

### ⟡ Tentang Project

**LPK Skillvora** adalah website profil untuk Lembaga Pelatihan Keterampilan (LPK) fiktif bernama *Skillvora*, yang berfokus pada pelatihan keahlian digital & kreatif — *Social Media Management*, *Videografi & Editing Konten*, *Copywriting & Digital Ads*, hingga *UI/UX Design*.

Project ini dibangun menggunakan **PHP native** + **MySQL (mysqli)**, tanpa framework, sebagai bagian dari tugas sekolah / uji kompetensi (serkom) jurusan Rekayasa Perangkat Lunak.

˖ Setiap file section punya `<style>` sendiri (tidak ada file CSS terpisah) — dibuat sengaja *self-contained* per file. ˖

<br>

── ✧ ──────────────────────────────

### ⟡ Fitur

✦ Beranda satu halaman — Hero, Profil, Program Kursus, Mitra Industri, Galeri, Testimoni, Kontak
✦ Program Kursus — daftar kursus lengkap dengan durasi & deskripsi
✦ Mitra Industri — showcase perusahaan mitra
✦ Galeri Kegiatan — dokumentasi foto kegiatan LPK
✦ Testimoni Alumni (CRUD) — tambah, lihat, edit, dan hapus testimoni langsung dari website
✦ Kontak & Peta Lokasi — informasi kontak lengkap dengan Google Maps
✦ Responsive — menyesuaikan tampilan mobile & desktop
✦ Tombol WhatsApp Mengambang — akses cepat untuk kontak lewat WhatsApp

<br>

── ✧ ──────────────────────────────

### ⟡ Tech Stack

| Kategori | Teknologi |
|---|---|
| Bahasa Pemrograman | PHP (native, tanpa framework) |
| Database | MySQL / MariaDB (`mysqli`) |
| Frontend | HTML5, CSS3 (vanilla), JavaScript (vanilla) |
| Local Server | [Laragon](https://laragon.org/) |
| Font | Merriweather & Source Sans 3 (Google Fonts) |
| Icon | Font Awesome 6 |

<br>

── ✧ ──────────────────────────────

### ⟡ Struktur Project

```
skillvora/
├── index.php                # Halaman beranda (memanggil semua section)
├── koneksi.php              # Koneksi ke database MySQL
├── database.sql             # Skema database + data contoh
├── testimoni.php            # Halaman kelola testimoni (tambah + lihat semua)
├── edit_testimoni.php       # Form edit testimoni
│
├── includes/
│   ├── header.php           # Navbar + CSS global (dipakai semua halaman)
│   └── footer.php           # Footer + tombol WhatsApp
│
├── sections/                # Potongan konten beranda
│   ├── hero.php             # Section hero
│   ├── profil.php           # Profil, visi & misi
│   ├── program.php          # Program kursus
│   ├── mitra.php            # Mitra industri
│   ├── galeri.php           # Galeri kegiatan
│   ├── testimoni.php        # Cuplikan testimoni terbaru
│   └── kontak.php           # Kontak & peta lokasi
│
├── proses/                  # Logika backend (tanpa tampilan)
│   ├── tambah.php           # Proses simpan testimoni baru
│   └── hapus.php            # Proses hapus testimoni
│
└── assets/
    ├── img/                 # Semua gambar (logo, hero, galeri, dll)
    └── js/
        └── script.js        # Menu mobile & animasi scroll
```

<br>

── ✧ ──────────────────────────────

### ⟡ Cara Menjalankan (Local Setup)

1. Clone repository ini ke folder `www` Laragon kamu:
   ```bash
   git clone https://github.com/itskristyy/LPK_Skillvora-V1.git
   ```
2. Buka Laragon, klik **Start All** untuk menjalankan Apache & MySQL.
3. Import database — buka phpMyAdmin, buat database baru, lalu import file `database.sql`.
4. Sesuaikan kredensial database di `koneksi.php` kalau perlu (default: host `localhost`, user `root`, password kosong).
5. Buka browser, akses:
   ```
   http://localhost/LPK_Skillvora-V1/
   ```

<br>

── ✧ ──────────────────────────────

### ⟡ Penyusun

**Adinda Kristiyani**
˖ Kelas XI RPL 3 — SMK Negeri 4 Kendal ˖

<br>

<div align="center">

⋆｡°✩ ⋆｡°✩ ⋆｡°✩ ⋆｡°✩ ⋆｡°✩

</div>
