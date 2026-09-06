<!-- New Logic -->
<?php
include 'koneksi.php';

// Redirect jika tidak ada ID di URL
isset($_GET['id']) or die(header("Location: testimoni.php"));
$id = (int) $_GET['id'];

// Handle POST: update data lalu redirect
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields = array_map(fn($v) => mysqli_real_escape_string($koneksi, $v), $_POST);
    mysqli_query($koneksi, "UPDATE testimoni SET nama='$fields[nama]', kursus='$fields[kursus]', isi='$fields[isi]' WHERE id=$id");
    header("Location: testimoni.php"); exit;
}

// Ambil data; redirect jika tidak ditemukan
$row = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM testimoni WHERE id=$id"))
    or die(header("Location: testimoni.php"));

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