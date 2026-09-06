</main>

<style>
footer {
    background: var(--primary);
    color: #fff;
    padding: 60px 0 30px;
}

.footer-container {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr;
    gap: 40px;
}

.footer-col h4 {
    color: #fff;
    font-size: 1.1rem;
    margin-bottom: 16px;
}

.footer-col p {
    opacity: 0.8;
    font-size: 0.95rem;
}

.footer-col ul {
    list-style: none;
}

.footer-col ul li {
    margin-bottom: 10px;
}

.footer-col ul li a {
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
    transition: color 0.2s;
}

.footer-col ul li a:hover {
    color: var(--accent);
}

.footer-copy {
    margin-top: 16px;
    font-size: 0.85rem;
    opacity: 0.6;
}

.social-icons {
    margin-top: 20px;
}

.social-icons a {
    color: rgba(255, 255, 255, 0.8);
    margin-right: 16px;
    font-size: 1.3rem;
    transition: color 0.2s;
    text-decoration: none;
}

.social-icons a:hover {
    color: var(--accent);
}

.whatsapp-float {
    position: fixed;
    bottom: 26px;
    right: 26px;
    background: var(--accent);
    color: #fff;
    width: 56px;
    height: 56px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
    box-shadow: 0 8px 20px rgba(66, 36, 13, 0.3);
    transition: transform 0.2s, background 0.2s;
    z-index: 999;
    text-decoration: none;
}

.whatsapp-float:hover {
    transform: scale(1.08);
    background: var(--accent-dark);
    color: #fff;
}

@media (max-width: 768px) {
    .footer-container {
        grid-template-columns: 1fr;
        gap: 30px;
    }

    .whatsapp-float {
        width: 50px;
        height: 50px;
        font-size: 1.6rem;
        bottom: 18px;
        right: 18px;
    }
}
</style>

<!-- ===== FOOTER ===== -->
<footer>
    <div class="container footer-container">
        <div class="footer-col">
            <h4>LPK Skillvora</h4>
            <p>Mencetak generasi profesional melalui pendidikan vokasi berkualitas, aplikatif, dan berstandar industri.
            </p>
            <p class="footer-copy">&copy; <?= date('Y') ?> LPK Skillvora. All Rights Reserved.</p>
        </div>
        <div class="footer-col">
            <h4>Legal</h4>
            <ul>
                <li><a href="#">Kebijakan Privasi</a></li>
                <li><a href="#">Syarat &amp; Ketentuan</a></li>
            </ul>
            <div class="social-icons">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-tiktok"></i></a>
            </div>
        </div>
    </div>
</footer>

<!-- FLOATING WHATSAPP -->
<a href="https://wa.me/6281234567890?text=Halo%20Skillvora%2C%20saya%20ingin%20tahu%20lebih%20lanjut"
    class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<script src="assets/js/script.js"></script>
</body>

</html>