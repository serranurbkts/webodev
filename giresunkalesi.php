<?php
session_start();

// Eğer kullanıcı giriş yapmamışsa (oturum açılmamışsa)
if (!isset($_SESSION['user_id'])) {
    // Kullanıcıyı giriş sayfasına geri fırlat
    header("Location: giris.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giresun Kalesi | Şehrimizin Tarihi</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root {
            --ana-yesil: #2d5a27; /* Giresun Yeşili */
            --koyu: #212529;
        }

        body {
            background-color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--koyu);
            line-height: 1.7;
        }

        /* Navigasyon - Proje genel bütünlüğü için */
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
            <a class="nav-link active" href="sehrim.php">Şehrim</a>
            <a class="nav-link" href="mirasimiz.php">Mirasımız</a>
            <a class="nav-link" href="iletisim.php">İletişim</a>
            <a class="nav-link" href="ilgialanlarim.php">İlgi Alanlarım</a>
        </div>
    </div>
</nav>

<header class="page-header">
    <div class="container">
        <h1 class="header-title">Giresun'un Zirvesi: Tarihi Giresun Kalesi</h1>
      </div>
</header>

<main class="container">
    <div class="content-body">
        <p><b>
            Giresun Kalesi, Karadeniz’in incisi Giresun’un tam kalbinde, şehri ikiye bölen volkanik bir yarımada üzerinde yükselen, M.Ö. 2. yüzyıldan günümüze kadar ulaşmış en görkemli tarihi mirastır. </b> </p>

        <div class="img-container">
            <img src="img/kaleburclari.jpg" alt="Giresun Kalesi burçları">
            <p class="small text-muted mt-2">Giresun şehrinin incisi <b>Tarihi Giresun Kalesi</b></p>
        </div>

        <h3 class="fw-bold mt-5 mb-3" style="color: var(--ana-yesil);">Kalenin Tarihçesi ve Stratejik Önemi</h3>
        <p>
            Antik kaynaklarda "Kerasus" adıyla geçen kale, Pontus Kralı I. Pharnakes tarafından M.Ö. 2. yüzyılda inşa edilmiştir. Şehir merkezine hakim bir tepe üzerinde bulunması, kaleye Karadeniz’in hem batısını hem de doğusunu denetleyebilecek müthiş bir stratejik güç katmıştır. Yüzyıllar boyunca Pontus, Roma, Bizans, Selçuklu ve Osmanlı medeniyetlerine ev sahipliği yapmış olan bu tarihi yapı, her dönemde şehrin savunma merkezi olma özelliğini korumuştur.
        </p>
        
        <div class="img-container">
            <img src="img/kaledenmnzra.jpg" alt="Giresun Kalesi Manzarası" style="max-height: 400px;">
            <p class="small text-muted mt-2">Kalenin içinden bir manzara</p>
        </div>

        <h3 class="fw-bold mt-5 mb-3" style="color: var(--ana-yesil);">Mimari Özellikler ve Yaşam Alanları</h3>
<p>
    Giresun Kalesi; İç Kale ve Dış Kale olmak üzere iki ana bölümden oluşur. Surlar, büyük ve kaba blok taşlardan örülmüş olup güneybatı yönünden başlayarak tepeyi çevreler. Kale içerisinde Bizans döneminden kalma antik kilise temelleri, devasa sarnıçlar (su depoları) ve gizli geçitler bulunmaktadır. Kalenin en tepesinde, bugün hala dalgalanan şanlı Türk bayrağımız, bu antik yapının milli bir simgeye dönüşmesini sağlamıştır.
</p>

        <div class="img-container">
            <img src="img/topalosmanmezarı.jpg" alt="Topal Osman Ağa'nın mezarı" style="max-height: 400px;">
            <p class="small text-muted mt-2">Topal Osman Ağa'nın Giresun Kalesi'nde bulunan mezarı</p>
        </div>
        <h3 class="fw-bold mt-5 mb-3" style="color: var(--ana-yesil);">Manevi Değer: Kahramanın Nöbeti</h3>
<p>
    Giresun Kalesi'ni diğer kalelerden ayıran en önemli özellik, sadece askeri bir yapı olması değil, aynı zamanda Milli Mücadele kahramanı <a href="topalosmanaga.php" class="text-success fw-bold text-decoration-none border-bottom border-success"><strong>Topal Osman Ağa</strong></a>'nın anıt mezarına ev sahipliği yapmasıdır. Gazi Mustafa Kemal Atatürk'ün talimatıyla buraya defnedilen Osman Ağa, adeta bugün de kaleden şehri gözetlemeye ve vatan nöbetini sürdürmeye devam etmektedir. Kale, Giresun halkı için hem bir açık hava müzesi hem de bir sadakat abidesidir.
</p>

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