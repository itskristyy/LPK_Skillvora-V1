<style>
.section.testimoni {
    background: var(--bg-alt);
}

.testimoni-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 28px;
}

.testimoni-card {
    background: var(--surface);
    border-radius: 8px;
    padding: 28px;
    border: 1px solid var(--border);
    box-shadow: var(--shadow);
    display: flex;
    flex-direction: column;
}

.testimoni-card .isi {
    font-style: italic;
    color: var(--text-muted);
    flex-grow: 1;
    margin-bottom: 16px;
}

.testimoni-card .nama {
    font-weight: 700;
    color: var(--primary);
    font-size: 1.02rem;
}

.testimoni-card .kursus {
    color: var(--text-muted);
    font-size: 0.85rem;
}

.testimoni-card .tanggal {
    font-size: 0.78rem;
    color: var(--text-muted);
    margin-top: 4px;
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

.btn {
    display: inline-block;
    padding: 13px 32px;
    border-radius: 4px;
    font-weight: 600;
    font-size: 0.92rem;
    transition: all 0.2s;
    border: none;
    cursor: pointer;
    text-decoration: none;
}

.btn-outline {
    background: transparent;
    border: 1.5px solid var(--primary);
    color: var(--primary);
}

.btn-outline:hover {
    background: var(--primary);
    color: #fff;
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

<!-- TESTIMONI -->
<section id="testimoni" class="section testimoni reveal">
    <div class="container">
        <h2 class="section-title">Testimoni</h2>
        <div class="testimoni-list">
            <?php
            // Logic get data testimoni sort by created_at
            $query = "SELECT * FROM testimoni ORDER BY created_at DESC";
            $result = mysqli_query($koneksi, $query);
            $total_testimoni = mysqli_num_rows($result);
            $index = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $extra_class = ($index >= 3) ? ' extra-testimoni' : '';
                $extra_style = ($index >= 3) ? ' style="display: none;"' : '';
                echo '<div class="testimoni-card' . $extra_class . '"' . $extra_style . '>';
                echo '<div class="isi">"' . htmlspecialchars($row['isi']) . '"</div>';
                echo '<div class="nama">' . htmlspecialchars($row['nama']) . '</div>';
                echo '<div class="kursus">' . htmlspecialchars($row['kursus']) . '</div>';
                echo '<div class="tanggal">' . htmlspecialchars($row['created_at']) . '</div>';
                echo '</div>';
                $index++;
            }
            ?>
        </div>
        <?php if ($total_testimoni > 3): ?>
        <div style="text-align:center; margin-top:36px;">
            <button type="button" id="btn-toggle-testimoni" class="btn btn-outline" onclick="toggleTestimoni()">Lihat Semua Testimoni</button>
        </div>
        <script>
        function toggleTestimoni() {
            var extras = document.querySelectorAll('.extra-testimoni');
            var btn = document.getElementById('btn-toggle-testimoni');
            if (!extras.length || !btn) return;
            
            var isHidden = extras[0].style.display === 'none';
            extras.forEach(function(card) {
                card.style.display = isHidden ? 'flex' : 'none';
            });
            btn.textContent = isHidden ? 'Sembunyikan Testimoni' : 'Lihat Semua Testimoni';
        }
        </script>
        <?php endif; ?>
    </div>
</section>