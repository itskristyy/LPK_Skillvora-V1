<style>
.section.kontak {
    background: var(--bg);
}

.kontak-wrapper {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    margin-top: 10px;
}

.kontak-info .info-item {
    display: flex;
    gap: 18px;
    margin-bottom: 28px;
}

.kontak-info .info-item i {
    font-size: 1.4rem;
    color: var(--accent);
    width: 32px;
    margin-top: 4px;
}

.kontak-info .info-item h4 {
    font-size: 1.05rem;
    margin-bottom: 2px;
}

.kontak-info .info-item p {
    color: var(--text-muted);
}

.maps-container {
    margin-top: 50px;
    border-radius: 8px;
    overflow: hidden;
    border: 1px solid var(--border);
}

.maps-container iframe {
    width: 100%;
    height: 320px;
    border: 0;
    display: block;
}

.kontak-wrapper .maps-container {
    margin-top: 0;
}

@media (max-width: 768px) {
    .kontak-wrapper {
        grid-template-columns: 1fr;
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

<!-- KONTAK + MAPS -->
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

            <div class="maps-container">
                <iframe src="https://www.google.com/maps/embed?pb=..." allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
</section>