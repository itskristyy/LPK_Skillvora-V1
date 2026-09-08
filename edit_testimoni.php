<?php

// Menghubungkan program ke database
include 'koneksi.php';

// Mengecek apakah ada ID testimoni yang dipilih
// Kalau tidak ada ID, kembali ke halaman testimoni
isset($_GET['id']) or die(header("Location: testimoni.php"));

// Mengambil ID testimoni yang mau diedit
$id = (int) $_GET['id'];

// Mengecek apakah tombol Update sudah ditekan
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Mengambil data baru dari form
    $fields = array_map(fn($v) => mysqli_real_escape_string($koneksi, $v), $_POST);

    // Mengubah data testimoni di database sesuai ID
    mysqli_query($koneksi, "UPDATE testimoni SET nama='$fields[nama]', kursus='$fields[kursus]', isi='$fields[isi]' WHERE id=$id");

    // Setelah diupdate, kembali ke halaman testimoni
    header("Location: testimoni.php");
    exit;
}

// Mengambil data testimoni lama berdasarkan ID
// Data ini akan ditampilkan di form edit
$row = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM testimoni WHERE id=$id"))
    or die(header("Location: testimoni.php"));

// Menampilkan bagian atas halaman
include 'includes/header.php';
?>
<style>
.simple-edit-page {
    max-width: 640px;
    margin: 60px auto;
    padding: 0 20px 60px;
}

.simple-edit-page h1 {
    font-size: 1.8rem;
    margin-bottom: 24px;
    color: var(--text);
    font-family: inherit;
}

.simple-edit-page .form-group {
    margin-bottom: 20px;
}

.simple-edit-page label {
    display: block;
    font-size: 0.95rem;
    color: #444;
    margin-bottom: 6px;
}

.simple-edit-page input,
.simple-edit-page textarea {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #d0d0d0;
    border-radius: 4px;
    font-family: inherit;
    font-size: 0.95rem;
    background: #fff;
}

.simple-edit-page textarea {
    min-height: 100px;
    resize: vertical;
}

.simple-btn {
    display: inline-block;
    padding: 10px 22px;
    border-radius: 4px;
    font-weight: 600;
    text-decoration: none;
    border: none;
    cursor: pointer;
    font-size: 0.95rem;
}

.simple-btn-update {
    background: #16a34a;
    color: #fff;
}

.simple-btn-update:hover {
    background: #128a3e;
}

.simple-btn-cancel {
    background: #9ca3af;
    color: #fff;
    margin-left: 10px;
}

.simple-btn-cancel:hover {
    background: #7f8794;
}
</style>

<div class="simple-edit-page">
    <h1>Edit Pesan Tamu</h1>
    <form action="edit_testimoni.php?id=<?= $row['id'] ?>" method="POST">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" value="<?= htmlspecialchars($row['nama']) ?>" required />
        </div>
        <div class="form-group">
            <label for="kursus">Kursus</label>
            <input type="text" id="kursus" name="kursus" value="<?= htmlspecialchars($row['kursus']) ?>" required />
        </div>
        <div class="form-group">
            <label for="isi">Komentar</label>
            <textarea id="isi" name="isi" required><?= htmlspecialchars($row['isi']) ?></textarea>
        </div>
        <button type="submit" class="simple-btn simple-btn-update">Update</button>
        <a href="testimoni.php" class="simple-btn simple-btn-cancel">Batal</a>
    </form>
</div>

<?php include 'includes/footer.php'; ?>