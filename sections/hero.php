<style>
.hero {
    position: relative;
    min-height: 90vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 80px 30px;
    background-size: cover;
    background-position: center;
}

.hero-overlay {
    position: absolute;
    inset: 0;
    background: rgba(66, 36, 13, 0.7);
    z-index: 0;
}

.hero-content {
    position: relative;
    z-index: 1;
    max-width: 900px;
}

.hero h1 {
    font-size: 3rem;
    color: #fff;
    margin-bottom: 20px;
}

.hero p {
    font-size: 1.15rem;
    color: rgba(255, 255, 255, 0.85);
    max-width: 600px;
    margin: 0 auto 32px;
}

.hero-buttons {
    display: flex;
    gap: 16px;
    justify-content: center;
    flex-wrap: wrap;
    margin-bottom: 50px;
}

.btn-glass {
    display: inline-block;
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(4px);
    -webkit-backdrop-filter: blur(4px);
    border: 1px solid rgba(255, 255, 255, 0.35);
    color: #fff;
    padding: 13px 32px;
    border-radius: 4px;
    font-weight: 600;
    font-size: 0.92rem;
    text-decoration: none;
}

@media (max-width: 768px) {
    .hero h1 {
        font-size: 2rem;
    }
}
</style>

<!-- HERO -->
<section id="beranda" class="hero" style="background-image: url('assets/img/hero.png');">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>LPK Skillvora:<br />Wujudkan Karir Impian dengan Keahlian Praktis</h1>
        <p>Kami mendidik generasi profesional siap kerja dengan kurikulum berbasis industri terkini.</p>
        <div class="hero-buttons">
            <a href="#profil" class="btn-glass">Pelajari Selengkapnya</a>
        </div>
    </div>
</section>