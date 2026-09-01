<?php
include 'includes/header.php';
include 'koneksi.php';

$query = "SELECT * FROM testimoni ORDER BY created_at DESC";
$result = mysqli_query($koneksi, $query);
?>

<section class="page-banner">
    <h1>Testimoni Alumni</h1>
    <p>Cerita nyata dari mereka yang sudah lulus dari LPK Skillvora.</p>
    <div class="title-underline"></div>
</section>

<section class="section">
    <div class="container">
        <div class="testimoni-list">
            <?php if (mysqli_num_rows($result) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="testimoni-card">
                <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                <div class="isi">"<?= htmlspecialchars($row['isi']) ?>"</div>
                <div class="nama"><?= htmlspecialchars($row['nama']) ?></div>
                <div class="kursus"><?= htmlspecialchars($row['kursus']) ?></div>
                <div class="aksi">
                    <a href="edit_testimoni.php?id=<?= $row['id'] ?>" class="btn-edit">Edit</a>
                    <a href="proses/hapus.php?id=<?= $row['id'] ?>" class="btn-hapus"
                        onclick="return confirm('Yakin hapus?')">Hapus</a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
            <p style="text-align:center; grid-column:1/-1; color: var(--text-muted);">Belum ada testimoni.</p>
            <?php endif; ?>
        </div>

        <h2 class="section-title" style="margin-top:60px;">Tambah Testimoni</h2>
        <div class="title-underline"></div>
        <form action="proses/tambah.php" method="POST" class="form-testimoni">
            <input type="text" name="nama" placeholder="Nama Lengkap" required />
            <input type="text" name="kursus" placeholder="Nama Kursus" required />
            <textarea name="isi" placeholder="Isi testimoni..." required></textarea>
            <button type="submit" class="btn btn-primary" style="width:100%;">Kirim Testimoni</button>
        </form>
    </div>
</section>

<?php include 'includes/footer.php'; ?>