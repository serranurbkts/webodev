<?php
session_start();

// Eğer kullanıcı giriş yapmamışsa 
if (!isset($_SESSION['user_id'])) {
    // Kullanıcıyı giriş sayfasına geri döndürür
    header("Location: giris.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giresun Kalesi | Şehrimizin Tarihi</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
   <link rel="stylesheet" href="css/style.css">
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