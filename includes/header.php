<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LPK Skillvora - Wujudkan Karir Impian</title>
    <link rel="shortcut icon" href="assets/img/logo.jpeg" type="image/jpeg">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700;900&family=Source+Sans+3:wght@400;600;700&display=swap"
        rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
    :root {
        --primary: #5C3A21;
        --primary-dark: #42240D;
        --accent: #C87941;
        --accent-dark: #A8632F;
        --bg: #F5EBDD;
        --bg-alt: #EBDDCB;
        --surface: #FFFFFF;
        --text: #2E1D10;
        --text-muted: #6B5B4F;
        --border: #D9C7B8;
        --shadow: 0 8px 24px rgba(66, 36, 13, 0.08);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: 'Source Sans 3', sans-serif;
        background-color: var(--bg);
        color: var(--text);
        line-height: 1.7;
    }

    h1,
    h2,
    h3,
    h4 {
        font-family: 'Merriweather', Georgia, serif;
        color: var(--primary);
        line-height: 1.3;
    }

    .container {
        max-width: 1140px;
        margin: 0 auto;
        padding: 0 30px;
    }

    img {
        max-width: 100%;
        display: block;
    }

    header {
        background: #FFFFFF;
        position: sticky;
        top: 0;
        z-index: 1000;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        height: 76px;
        display: flex;
        align-items: center;
    }

    .header-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .logo a {
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .logo-img {
        height: 40px;
        width: auto;
    }

    .logo-text {
        font-family: 'Merriweather', serif;
        font-size: 1.4rem;
        font-weight: 700;
        color: var(--primary);
        letter-spacing: -0.2px;
    }

    nav ul {
        display: flex;
        list-style: none;
        gap: 30px;
    }

    nav ul li a {
        font-weight: 600;
        font-size: 0.92rem;
        letter-spacing: 0.03em;
        color: var(--primary);
        opacity: 0.9;
        padding: 6px 0;
        transition: all 0.2s ease;
        text-decoration: none;
    }

    nav ul li a:hover {
        opacity: 1;
        color: var(--accent);
    }

    nav ul li a.active {
        opacity: 1;
        color: var(--accent);
    }

    .hamburger {
        display: none;
        font-size: 1.6rem;
        cursor: pointer;
        color: var(--primary);
    }

    @media (max-width: 768px) {
        nav {
            position: absolute;
            top: 76px;
            left: 0;
            width: 100%;
            background: var(--primary);
            display: none;
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.12);
        }

        nav.show {
            display: block;
        }

        nav ul {
            flex-direction: column;
            gap: 0;
            padding: 10px 30px 20px;
        }

        nav ul li a {
            display: block;
            padding: 14px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .hamburger {
            display: block;
        }
    }
    </style>
</head>

<body>

    <!-- STICKY HEADER -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <a href="index.php">
                    <img src="assets/img/logo.jpeg" alt="Logo Skillvora" class="logo-img">
                    <span class="logo-text">Skillvora</span>
                </a>
            </div>
            <nav id="mainNav">
                <ul>
                    <li><a href="#beranda" class="active">Beranda</a></li>
                    <li><a href="#profil">Profil</a></li>
                    <li><a href="#galeri">Galeri</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                    <li><a href="#testimoni">Testimoni</a></li>
                </ul>
            </nav>
            <div class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <main>