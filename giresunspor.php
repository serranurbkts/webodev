<?php
session_start();

// Eğer kullanıcı giriş yapmamışsa
if (!isset($_SESSION['user_id'])) {
    //Kullanıcıyı giriş sayfasına geri döndür
    header("Location: giris.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giresunspor </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root {
            --ana-yesil: #2d5a27; 
            --koyu: #212529;
        }

        body {
            background-color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--koyu);
            line-height: 1.7;
        }

        /* Navigasyon */
        .navbar { 
            background-color: var(--koyu) !important; 
            border-bottom: 4px solid var(--ana-yesil);
        }

        /* Başlık Alanı */
        .page-header {
            padding: 60px 0;
            background-color: #f8f9fa;
            border-bottom: 1px solid #eee;
            margin-bottom: 40px;
        }

        .header-title {
            border-left: 6px solid var(--ana-yesil);
            padding-left: 20px;
            font-weight: 800;
        }

        /* İçerik Alanı */
        .content-body {
            max-width: 900px;
            margin: 0 auto;
        }

        .img-container {
            margin: 30px 0;
            text-align: center;
        }

        .img-container img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        /* Dönüş Butonu */
        .btn-back {
            display: inline-flex;
            align-items: center;
            background-color: var(--ana-yesil);
            color: white;
            padding: 12px 25px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
            margin-top: 40px;
        }

        .btn-back:hover {
            background-color: var(--koyu);
            color: white;
            transform: translateX(-5px);
        }

        /* Footer */
        .footer-full {
            background-color: var(--koyu);
            color: white;
            border-top: 4px solid var(--ana-yesil);
            padding: 30px 0;
            margin-top: 80px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">Kişisel Web Sitesi</a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="index.php">Anasayfa</a>
            <a class="nav-link" href="ozgecmis.php">Özgeçmiş</a>
            <a class="nav-link" href="sehrim.php">Şehrim</a>
            <a class="nav-link active" href="giresunspor.php">Giresunspor</a>
            <a class="nav-link" href="iletisim.php">İletişim</a>
            <a class="nav-link" href="ilgialanlarim.php">İlgi Alanlarım</a>
        </div>
    </div>
</nav>

<header class="page-header">
    <div class="container">
        <h1 class="header-title">Yeşil-Beyaz Bir Karadeniz Efsanesi: Giresunspor</h1>
    </div>
</header>

<main class="container">
    <div class="content-body">
        <p><b>
            Giresunspor, 1967 yılında kurulan ve o günden bu yana "Çotanaklar" lakabıyla Türk futbolunda Karadeniz fırtınasını temsil eden, şehrin en büyük markası ve ortak paydasıdır.
        </b></p>

        <div class="img-container">
            <img src="img/logo.jpg" alt="Giresunspor Logosu" style="max-width: 250px;">
            <p class="small text-muted mt-2">Şehrimizin gururu <b>Giresunspor Kulübü</b></p>
        </div>

        <h3 class="fw-bold mt-5 mb-3" style="color: var(--ana-yesil);">Kuruluş ve İlk Adımlar</h3>
        <p>
            8 Nisan 1967 tarihinde, Giresun'daki mahalli kulüplerin (Giresunspor, Akıngençlik, Yeşiltepe ve Beşiktaşspor) tek bir çatı altında birleşmesiyle kurulmuştur. Kulübün renkleri olan yeşil ve beyaz, Karadeniz’in doğasını ve saflığını temsil ederken, logosundaki "Çotanak" figürü ise Giresun’un dünya çapındaki simgesi olan fındığı temsil etmektedir. Kurulduğu andan itibaren Karadeniz futbolunun en önemli temsilcilerinden biri olmayı başarmıştır.
        </p>

        <div class="img-container">
            <img src="img/cotanakstadyumu.jpg" alt="Çotanak Spor Kompleksi">
            <p class="small text-muted mt-2">Evimiz: <b>Çotanak Spor Kompleksi</b></p>
        </div>

        <h3 class="fw-bold mt-5 mb-3" style="color: var(--ana-yesil);">Başarılar ve Süper Lig Serüveni</h3>
        <p>
            Giresunspor, Türk futbol tarihinde önemli bir yere sahiptir. Özellikle 1970-1971 sezonundan itibaren Süper Lig'de (o dönemki adıyla 1. Lig) aralıksız 6 sezon mücadele ederek devrin büyük takımlarına karşı elde ettiği galibiyetlerle adından söz ettirmiştir. Uzun bir aradan sonra 2021-2022 sezonunda tekrar Süper Lig'e yükselerek şehrine büyük bir sevinç yaşatan kulübümüz, her zaman mücadelesi ve taraftarının sadakati ile tanınmıştır.
        </p>

        <div class="img-container">
            <img src="img/cotanaklartaraftargrubu.jpg" alt="Giresunspor Taraftarı" style="max-height: 400px;">
            <p class="small text-muted mt-2">Giresunspor'un en büyük gücü: <b>Çotanak Taraftarları</b></p>
        </div>

        <h3 class="fw-bold mt-5 mb-3" style="color: var(--ana-yesil);">Bir Giresunlu Olarak Giresunspor</h3>
        <center><p>
           <b> Giresunspor, bir şehrin sadece futbol takımı değil; tarihinin, doğasının ve insanının tek bir yürekte buluştuğu ortak paydasıdır.</b>
        </p></center>

        <a href="sehrim.php" class="btn-back">
            <i class="bi bi-arrow-left me-2"></i> Şehrim Sayfasına Geri Dön
        </a>
    </div>
</main>

<footer class="footer-full text-center">
    <div class="container">
        <p class="mb-0 fw-bold">Sakarya Üniversitesi | Web Teknolojileri Projesi &copy; 2026</p>
    </div>
</footer>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>