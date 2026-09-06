<style>
.section.profil {
    background: var(--bg-alt);
}

.profil-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    align-items: start;
}

.profil-text p {
    font-size: 1.05rem;
    color: var(--text-muted);
    margin-bottom: 28px;
}

.visi-misi {
    display: grid;
    gap: 24px;
}

.visi-misi h3 {
    font-size: 1.15rem;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.visi-misi h3 i {
    color: var(--accent);
}

.visi-misi ul {
    list-style: none;
    padding-left: 28px;
}

.visi-misi ul li {
    position: relative;
    margin-bottom: 6px;
}

.visi-misi ul li::before {
    content: "•";
    color: var(--accent);
    font-weight: 700;
    position: absolute;
    left: -20px;
}

@media (max-width: 768px) {
    .profil-grid {
        grid-template-columns: 1fr;
    }

    .section {
        padding: 56px 0;
    }

    .section-title {
        font-size: 1.6rem;
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
</style>

<!-- PROFIL SINGKAT -->
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
                </div>
            </div>

            <div class="profil-side">
                <div class="visi-misi">
                    <div>
                        <h3>Misi Kami</h3>
                        <ul>
                            <li>Menyediakan kurikulum berbasis kebutuhan industri terkini.</li>
                            <li>Membangun ekosistem belajar yang aplikatif dan kolaboratif.</li>
                            <li>Menjalin kemitraan strategis dengan berbagai perusahaan.</li>
                        </ul>
                    </div>
                    <div>
                        <h3>Kursus Kami</h3>
                        <ul>
                            <li>Social Media Management</li>
                            <li>Videografi &amp; Editing Konten</li>
                            <li>Copywriting &amp; Digital Ads</li>
                            <li>UI/UX Design</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>