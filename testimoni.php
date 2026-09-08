<?php
include 'koneksi.php';
$query = "SELECT * FROM testimoni ORDER BY created_at DESC";
$result = mysqli_query($koneksi, $query);
include 'includes/header.php';
?>

<style>
.simple-testimoni-page {
    max-width: 720px;
    margin: 60px auto;
    padding: 0 20px 60px;
}

.simple-testimoni-page h1 {
    font-size: 1.8rem;
    margin-bottom: 24px;
    color: var(--text);
}

.simple-testimoni-page .form-group {
    margin-bottom: 20px;
}

.simple-testimoni-page label {
    display: block;
    font-size: 0.95rem;
    color: #444;
    margin-bottom: 6px;
}

.simple-testimoni-page input,
.simple-testimoni-page textarea {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #d0d0d0;
    border-radius: 4px;
    font-family: inherit;
    font-size: 0.95rem;
    background: #fff;
}

.simple-testimoni-page textarea {
    min-height: 90px;
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

.simple-btn-primary {
    background: var(--accent);
    color: #fff;
}

.simple-btn-primary:hover {
    background: var(--accent-dark);
}

.simple-divider {
    margin: 40px 0 20px;
    border-top: 1px solid #e5e5e5;
}

.simple-testimoni-item {
    padding: 16px 0;
    border-bottom: 1px solid #eee;
}

.simple-testimoni-item .t-nama {
    font-weight: 700;
    color: var(--text);
}

.simple-testimoni-item .t-kursus {
    font-size: 0.85rem;
    color: #777;
    margin-bottom: 6px;
}

.simple-testimoni-item .t-isi {
    margin-bottom: 6px;
    color: var(--text);
}

.simple-testimoni-item .t-tanggal {
    font-size: 0.78rem;
    color: #999;
    margin-bottom: 8px;
}

.simple-testimoni-item .t-aksi {
    display: flex;
    gap: 8px;
}

.simple-btn-sm {
    display: inline-block;
    padding: 5px 14px;
    border-radius: 4px;
    font-size: 0.8rem;
    font-weight: 600;
    text-decoration: none;
    color: #fff;
}

.simple-btn-edit {
    background: var(--accent);
}

.simple-btn-edit:hover {
    background: var(--accent-dark);
}

.simple-btn-hapus {
    background: #c0392b;
}

.simple-btn-hapus:hover {
    background: #a53125;
}
</style>

<div class="simple-testimoni-page">
    <h1>Testimoni Alumni</h1>

    <form action="proses/tambah.php" method="POST">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required />
        </div>
        <div class="form-group">
            <label for="kursus">Kursus</label>
            <input type="text" id="kursus" name="kursus" required />
        </div>
        <div class="form-group">
            <label for="isi">Testimoni</label>
            <textarea id="isi" name="isi" required></textarea>
        </div>
        <button type="submit" class="simple-btn simple-btn-primary">Kirim</button>
    </form>

    <div class="simple-divider"></div>

    <?php if (mysqli_num_rows($result) > 0): ?>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
    <div class="simple-testimoni-item">
        <div class="t-nama"><?= htmlspecialchars($row['nama']) ?></div>
        <div class="t-kursus"><?= htmlspecialchars($row['kursus']) ?></div>
        <div class="t-isi"><?= htmlspecialchars($row['isi']) ?></div>
        <div class="t-tanggal"><?= htmlspecialchars($row['created_at']) ?></div>
        <div class="t-aksi">
            <a href="edit_testimoni.php?id=<?= $row['id'] ?>" class="simple-btn-sm simple-btn-edit">Edit</a>
            <a href="proses/hapus.php?id=<?= $row['id'] ?>" class="simple-btn-sm simple-btn-hapus"
                onclick="return confirm('Yakin hapus?')">Hapus</a>
        </div>
    </div>
    <?php endwhile; ?>
    <?php else: ?>
    <p style="color:#999;">Belum ada testimoni.</p>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>