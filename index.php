<?php
include 'koneksi.php';
include 'includes/header.php';
?>

<!-- ===== HERO ===== -->
<section id="beranda" class="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>LPK Skillvora:<br />Wujudkan Karir Impian dengan Keahlian Praktis</h1>
        <p>Kami mendidik generasi profesional siap kerja dengan kurikulum berbasis industri terkini.</p>
    </div>
</section>

<!-- ===== PROFIL SINGKAT ===== -->
<section id="profil" class="section profil reveal">
    <div class="container">
        <h2 class="section-title">Profil LPK Skillvora</h2>
        <div class="profil-grid">
            <div class="profil-text">
                <p>Didirikan pada tahun 2010, LPK Skillvora telah menjadi pelopor dalam pendidikan vokasi yang berfokus
                    pada industri digital dan kreatif. Kami percaya bahwa setiap individu memiliki potensi untuk meraih
                    karir cemerlang jika dibekali dengan keahlian yang tepat dan praktis.</p>
                <div class="visi-misi">
                    <div>
                        <h3>Visi Kami</h3>
                        <p>Menjadi lembaga pendidikan vokasi terdepan yang menghasilkan tenaga profesional kompeten,
                            inovatif, dan berdaya saing global di era digital.</p>
                    </div>
                    <div>
                        <h3>Misi Kami</h3>
                        <ul>
                            <li>Menyediakan kurikulum berbasis kebutuhan industri terkini.</li>
                            <li>Membangun ekosistem belajar yang aplikatif dan kolaboratif.</li>
                            <li>Menjalin kemitraan strategis dengan berbagai perusahaan.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== GALERI ===== -->
<section id="galeri" class="section galeri reveal">
    <div class="container">
        <h2 class="section-title">Galeri Kegiatan</h2>
        <div class="galeri-grid">
            <div class="galeri-card">
                <img src="assets/img/workshop.jpg" alt="Workshop Desain">
                <h3>Workshop Desain</h3>
            </div>
            <div class="galeri-card">
                <img src="assets/img/seminar.jpg" alt="Seminar Industri">
                <h3>Seminar Industri</h3>
            </div>
            <div class="galeri-card">
                <img src="assets/img/sertifikat.jpg" alt="Sertifikasi Kelulusan">
                <h3>Sertifikasi Kelulusan</h3>
            </div>
        </div>
    </div>
</section>

<!-- ===== TESTIMONI ===== -->
<section id="testimoni" class="section testimoni reveal">
    <div class="container">
        <h2 class="section-title">Testimoni</h2>
        <div class="testimoni-list">
            <?php
            $query = "SELECT * FROM testimoni ORDER BY created_at DESC LIMIT 3";
            $result = mysqli_query($koneksi, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="testimoni-card">';
                echo '<div class="quote-icon"><i class="fas fa-quote-left"></i></div>';
                echo '<div class="isi">"' . htmlspecialchars($row['isi']) . '"</div>';
                echo '<div class="nama">' . htmlspecialchars($row['nama']) . '</div>';
                echo '<div class="kursus">' . htmlspecialchars($row['kursus']) . '</div>';
                echo '</div>';
            }
            ?>
        </div>
        <div style="text-align:center; margin-top:36px;">
            <a href="testimoni.php" class="btn btn-outline">Lihat Semua Testimoni</a>
        </div>
    </div>
</section>

<!-- ===== KONTAK + COUNTER + MAPS ===== -->
<section id="kontak" class="section kontak reveal">
    <div class="container">
        <h2 class="section-title">Kontak</h2>
        <div class="kontak-wrapper">
            <div class="kontak-info">
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h4>Alamat</h4>
                        <p>Jl. Pendidikan No. 123, Kawasan Bisnis Terpadu<br />Jakarta Selatan, 12345</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-phone-alt"></i>
                    <div>
                        <h4>Telepon / WhatsApp</h4>
                        <p>+62 812 3456 7890</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h4>Email</h4>
                        <p>info@skillvora.com</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="maps-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56246140374!2d107.57310268248252!3d-6.917494398258257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6396b4f4e8b%3A0x6b7b3b3b3b3b3b3b!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1623456789012"
                allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>