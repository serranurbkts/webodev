<?php
session_start();
/**
 * session_start() ile oturum hatırlatılır. 
 * Güvenlik amacıyla, sisteme giriş yapmamış kullanıcıların bu özeti görmesi engellenir.
 */

// Eğer kullanıcı giriş yapmamışsa (giris.php)
if (!isset($_SESSION['user_id'])) {
    // Kullanıcıyı giriş sayfasına geri gönder
    header("Location: giris.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa | Serra Nur Bektaş</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
<style>
        :root {
            --ana-yesil: #2d5a27; 
            --koyu: #212529;
            --arka-plan: #fdfdfd;
        }

        body {
            background-color: var(--arka-plan);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--koyu);
        }

        /* Navigasyon - Diğer sayfalarla ortak yapılacaktır*/
        .navbar { 
            background-color: var(--koyu) !important; 
            border-bottom: 4px solid var(--ana-yesil);
        }

        /* Giriş Bölümü - Özgeçmiş Header stili ile aynı */
        .intro-header {
            background-color: #fff;
            border-bottom: 1px solid #eee;
            padding: 80px 0;
            margin-bottom: 40px;
        }

        .section-title {
            border-left: 5px solid var(--ana-yesil);
            padding-left: 15px;
            margin-bottom: 30px;
            font-weight: 700;
        }

        /* Özgeçmişteki cv-card yapısı */
        .cv-card {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 12px;
            padding: 30px;
            height: 100%;
            transition: all 0.3s ease;
        }

        .nav-link-card {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .nav-link-card:hover .cv-card {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.05);
            border-color: var(--ana-yesil);
        }

        .btn-giresun {
            background-color: var(--ana-yesil);
            color: white;
            border-radius: 50px;
            padding: 10px 30px;
            border: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-giresun:hover {
            background-color: var(--koyu);
            color: white;
        }

        /* Footer Koruması - Ekrana tam yayılan siyah bant */
        .footer-full {
            background-color: var(--koyu);
            color: white;
            border-top: 4px solid var(--ana-yesil);
            width: 100vw;
            position: relative;
            left: 50%;
            right: 50%;
            margin-left: -50vw;
            margin-right: -50vw;
            padding: 40px 0;
            margin-top: 60px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">Kişisel Web Sitesi</a>
        <div class="collapse navbar-collapse" id="serraNav">
            <div class="navbar-nav ms-auto">
                <a class="nav-link active fw-bold" href="index.php">Anasayfa</a>
                <a class="nav-link" href="ozgecmis.php">Özgeçmiş</a>
                <a class="nav-link" href="sehrim.php">Şehrim</a>
                <a class="nav-link" href="mirasimiz.php">Mirasımız</a>
                <a class="nav-link" href="iletisim.php">İletişim</a>
                <a class="nav-link" href="ilgialanlarim.php">İlgi Alanlarım</a>
           
            </div>
        </div>
    </div>
</nav>

<header class="intro-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">Merhaba, Ben <span style="color: var(--ana-yesil);">Serra Nur Bektaş</span></h1>
                <p class="lead text-muted mb-4">
                    <strong>Öncelikle siteme hoşgeldin! </strong>
                Ben, Sakarya Üniversitesi Bilgisayar Mühendisliği 1.sınıf öğrencisiyim. Bu web sitesi, Web Teknolojileri dersimin projesidir. Sitem içerisinde kendimden, proje ve çalışmalarımdan bahsettim. Ayrıca memleketim Giresun'u birçok açıdan tanıtmaya çalıştım. İçerisinde sana uygun fazlasıyla içerik bulacağından eminim😊</p>
                <a href="iletisim.php" class="btn btn-giresun">İletişime geçmek için tıklayın</a>
            </div>
           
        </div>
    </div>
</header>

<main class="container mb-5">
    <h2 class="section-title">İlginizi çekebilecek içerikler</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <a href="ozgecmis.php" class="nav-link-card">
                <div class="cv-card">
                    <i class="bi bi-file-earmark-person fs-1 text-success mb-3"></i>
                    <h4 class="fw-bold">Özgeçmiş</h4>
                    <p class="text-muted small">Eğitim hayatım, katıldığım eğitim, proje ve yarışmalardan haberdar olmak için tıklayın.</p>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="sehrim.php" class="nav-link-card">
                <div class="cv-card">
                    <i class="bi bi-map fs-1 text-success mb-3"></i>
                    <h4 class="fw-bold">Memleketim Giresun</h4>
                    <p class="text-muted small">Memleketim Giresun'un sahip olduğu eşsiz doğa harikaları ve biricik tarihi yapılarını detaylıca öğrenebilmek için tıklayın.</p>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="mirasimiz.php" class="nav-link-card">
                <div class="cv-card">
                    <i class="bi bi-mortarboard fs-1 text-success mb-3"></i>
                    <h4 class="fw-bold">Mirasımız: Giresun</h4>
                    <p class="text-muted small"></p>Giresun'nun tarihi ve kültürel mirasları hakkında detaylı bilgi sahibi olmak için tıklayınız.</p>
                </div>
            </a>
        </div>
          <center><div class="col-md-4">
            <a href="ilgialanlarim.php" class="nav-link-card">
                <div class="cv-card">
                    <i class="bi bi-map fs-1 text-success mb-3"></i>
                    <h4 class="fw-bold">İlgi Alanlarım</h4>
                    <p class="text-muted small">Birbirinden farklı alanlara olan ilgimi öğrenmek ve bakış açımı görmek için tıklayın.</p>
                </div>
            </a>
        </div></center>
    </div>
</main>

<footer class="footer-full text-center">
    <div class="container-fluid">
        <p class="mb-0 fw-bold">Sakarya Üniversitesi | Web Teknolojileri Projesi &copy; 2026</p>
         </div>
</footer>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>