document.addEventListener('DOMContentLoaded', function() {
    // Hamburger toggle
    const hamburger = document.getElementById('hamburger');
    const nav = document.getElementById('mainNav');
    if (hamburger) {
        hamburger.addEventListener('click', function() {
            nav.classList.toggle('show');
        });
    }

    // Confirm delete
    const hapusLinks = document.querySelectorAll('.btn-hapus');
    hapusLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            if (!confirm('Yakin ingin menghapus testimoni ini?')) {
                e.preventDefault();
            }
        });
    });

    // Reveal animation on scroll
    const reveals = document.querySelectorAll('.reveal');
    function checkReveal() {
        const windowHeight = window.innerHeight;
        reveals.forEach(el => {
            const rect = el.getBoundingClientRect();
            if (rect.top < windowHeight - 100) {
                el.classList.add('active');
            }
        });
    }
    window.addEventListener('scroll', checkReveal);
    checkReveal();
});