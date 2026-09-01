<?php
include 'koneksi.php';

if (!isset($_GET['id'])) {
    header("Location: testimoni.php");
    exit;
}

$id = (int) $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama   = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $kursus = mysqli_real_escape_string($koneksi, $_POST['kursus']);
    $isi    = mysqli_real_escape_string($koneksi, $_POST['isi']);
    $query = "UPDATE testimoni SET nama='$nama', kursus='$kursus', isi='$isi' WHERE id=$id";
    mysqli_query($koneksi, $query);
    header("Location: testimoni.php");
    exit;
}

$result = mysqli_query($koneksi, "SELECT * FROM testimoni WHERE id = $id");
$row = mysqli_fetch_assoc($result);
if (!$row) {
    header("Location: testimoni.php");
    exit;
}

include 'includes/header.php';
?>

<section class="page-banner">
    <h1>Edit Testimoni</h1>
    <p>Perbarui testimoni dari <?= htmlspecialchars($row['nama']) ?>.</p>
    <div class="title-underline"></div>
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