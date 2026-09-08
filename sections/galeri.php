<style>
.section.galeri {
    background: var(--bg);
}

.galeri-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 14px;
}

.galeri-card {
    background: var(--surface);
    border-radius: 8px;
    overflow: hidden;
    border: 1px solid var(--border);
    transition: transform 0.25s;
}

.galeri-card img {
    width: 100%;
    height: 130px;
    object-fit: cover;
    display: block;
    transition: transform 0.5s;
}

@media (max-width: 600px) {
    .galeri-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

.section {
    padding: 90px 0;
}

.section-title {
    font-size: 2.1rem;
    font-weight: 700;
    text-align: center;
    margin-bottom: 12px;
}

.title-underline {
    width: 56px;
    height: 3px;
    background: var(--accent);
    margin: 0 auto 40px;
    border-radius: 2px;
}

.reveal {
    opacity: 0;
    transform: translateY(24px);
    transition: opacity 0.7s ease, transform 0.7s ease;
}

.reveal.active {
    opacity: 1;
    transform: translateY(0);
}

@media (max-width: 768px) {
    .section {
        padding: 56px 0;
    }

    .section-title {
        font-size: 1.6rem;
    }
}
</style>

<!-- GALERI -->
<section id="galeri" class="section galeri reveal">
    <div class="container">
        <h2 class="section-title">Galeri Kegiatan</h2>
        <div class="galeri-grid">
            <div class="galeri-card">
                <img src="assets/img/workshop.jpg" alt="Workshop Desain" />
            </div>
            <div class="galeri-card">
                <img src="assets/img/seminar.jpg" alt="Seminar Industri" />
            </div>
            <div class="galeri-card">
                <img src="assets/img/sertifikat.jpg" alt="Sertifikasi Kelulusan" />
            </div>
            <div class="galeri-card">
                <img src="assets/img/class.png" alt="Kelas Praktik" />
            </div>
            <div class="galeri-card">
                <img src="assets/img/diskus.png" alt="Diskusi Kelompok" />
            </div>
            <div class="galeri-card">
                <img src="assets/img/meeting.png" alt="Meeting/Mentoring" />
            </div>
        </div>
    </div>
</section>