<?php
// 1. Memuat file koneksi database agar variabel $koneksi bisa digunakan
include 'koneksi.php';

// 2. Cek apakah parameter 'id' ada di URL ($_GET['id']).
//    Jika tidak ada, langsung alihkan (header Location) ke testimoni.php dan hentikan script (die).
isset($_GET['id']) or die(header("Location: testimoni.php"));

// 3. Konversi nilai $_GET['id'] menjadi tipe data integer (angka) untuk keamanan dari SQL Injection
$id = (int) $_GET['id'];

// 4. Memeriksa apakah halaman diakses via metode submit form (POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 4a. Mengamankan seluruh elemen data $_POST dari karakter berbahaya (SQL Injection) menggunakan fn & array_map
    $fields = array_map(fn($v) => mysqli_real_escape_string($koneksi, $v), $_POST);
    
    // 4b. Menjalankan perintah SQL UPDATE untuk memperbarui data di tabel 'testimoni' sesuai 'id'
    mysqli_query($koneksi, "UPDATE testimoni SET nama='$fields[nama]', kursus='$fields[kursus]', isi='$fields[isi]' WHERE id=$id");
    
    // 4c. Alihkan kembali ke halaman testimoni.php setelah berhasil simpan dan hentikan eksekusi script selanjutnya
    header("Location: testimoni.php"); 
    exit;
}

// 5. Mengambil 1 baris data (array asosiatif) dari database berdasarkan 'id'.
//    Jika data tidak ditemukan / query bernilai false, alihkan ke testimoni.php dan die.
$row = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM testimoni WHERE id=$id"))
    or die(header("Location: testimoni.php"));

// 6. Memuat file header HTML / tampilan bagian atas situs
include 'includes/header.php';
?>

<section class="page-banner">
    <h1>Edit Testimoni</h1>
    <p>Perbarui testimoni dari <?= htmlspecialchars($row['nama']) ?>.</p>
</section>

<section class="section">
    <div class="container">
        <form action="edit_testimoni.php?id=<?= $row['id'] ?>" method="POST" class="form-testimoni">
            <input type="text" name="nama" value="<?= htmlspecialchars($row['nama']) ?>" required />
            <input type="text" name="kursus" value="<?= htmlspecialchars($row['kursus']) ?>" required />
            <textarea name="isi" required><?= htmlspecialchars($row['isi']) ?></textarea>
            <button type="submit" class="btn btn-primary" style="width:100%;">Simpan Perubahan</button>
        </form>
        <div style="text-align:center; margin-top:20px;">
            <a href="testimoni.php" class="btn btn-outline">Batal, Kembali</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>