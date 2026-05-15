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
    <title>Topal Osman Ağa | Milli Mücadele</title>
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

        .navbar { 
            background-color: var(--koyu) !important; 
            border-bottom: 4px solid var(--ana-yesil);
        }

        /* Başlık Bölümü */
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

        /* Dönüş Butonu(Mirasımıza Geri Döner) */
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
            <a class="nav-link active" href="mirasimiz.php">Mirasımız</a>
            <a class="nav-link" href="iletisim.php">İletişim</a>
            <a class="nav-link" href="ilgialanlarim.php">İlgi Alanlarım</a>
        </div>
    </div>
</nav>

<header class="page-header">
    <div class="container">
        <h1 class="header-title">Milli Mücadele Kahramanı: Topal Osman Ağa</h1>
      </div>
</header>

<main class="container">
    <div class="content-body">
        <p><b>
           Topal Osman veya Hacı Topal Osman Ağa , Kurtuluş Savaşı'nda Doğu Karadeniz'de faaliyet gösteren mahallî milis güçlerinin reisi ve muhafız taburu komutanı ve Gazi Mustafa Kemal Paşa'nın Giresunlulardan oluşan muhafız kıtasının komutanıdır.  </b> </p>

        <div class="img-container">
            <img src="img/topalosmanaga.jpg" alt="Topal Osman Ağa">
            <p class="small text-muted mt-2">Giresun Gönüllü Alayları Komutanı Milis Yarbay <b>Topal Osman Ağa</b></p>
        </div>

        <h3 class="fw-bold mt-5 mb-3" style="color: var(--ana-yesil);">Hayatı</h3>
        <p>1883 yılında Giresun'da dünyaya geldi. Çepni kökenlidir.Babası fındık tüccarı Feridûnzâde Hacı Mehmet Efendi'dir. Gençliğinde aile işlerine yardımcı oldu, bir kereste fabrikasına ortak oldu; evlendi ve iki oğlu oldu. Babası askerlik bedelini ödemesine rağmen gönüllü birlik oluşturarak savaşa katıldı. Savaşta göstermiş olduğu başarılarından dolayı yarbaylık rütbesine kadar yükseldi.Balkan Harbi'nde Osmanlı Ordusu'na gönüllü olarak katıldı. Çatalca cephesinde savaştı. Bu savaş sırasında sağ diz kapağından yaralandı, topal kaldı ve böylece <strong>"Topal" </strong>lakabını edindi.Birinci Dünya Savaşı’nda Teşkilat-ı Mahsusa bünyesinde Batum ve Kafkas cephelerinde Ruslara karşı savaşan Osman Ağa, İstiklal Harbi döneminde ise kendi imkanlarıyla topladığı Giresunlu uşaklardan oluşan 42. ve 47. Gönüllü Alayları kurarak Sakarya Meydan Muharebesi, Büyük Taarruz ve Koçgiri İsyanı’nın bastırılmasında hayati roller üstlenmiştir. Mustafa Kemal Atatürk’ün güvenini kazanarak Ankara’daki ilk özel muhafız birliğini Giresun uşaklarından kuran bu efsanevi lider, hayatı boyunca Karadeniz’in bağımsızlık karakterini temsil etmiş ve vefatının ardından bizzat Atatürk’ün talimatıyla ebedi istirahatgahına defnedilmiştir.
        </p>
        
        <center><img src="img/topalosmanmezarı.jpg" alt="Topal Osman Ağa'nın Giresun kalesinde bulunan mezarı " height="400"></center>
        <center><p class="small text-muted mt-2">Topal Osman Ağa'nın günümüzde Giresun kalesinde bulunan mezarı</p></center>
       
        <h3 class="fw-bold mt-5 mb-3" style="color: var(--ana-yesil);">Ebedi İstirahatgah: Giresun Kalesi</h3>
<p>
    Milli Mücadele'nin bu keskin yürekli kahramanı, bugün ebedi uykusunu en çok sevdiği yerde, Giresun’un kalbinde sürdürmektedir. Osman Ağa'nın naaşı, bizzat Mustafa Kemal Atatürk'ün emirleriyle, şehrin her noktasından görülebilen ve adeta şehri selamlayan <strong>Giresun Kalesi</strong>'ndeki anıt mezarına defnedilmiştir. Kalenin en yüksek noktasında, dalgalanan Türk bayrağının gölgesinde yer alan bu anıt mezar, sadece bir kabir değil; Giresun halkının vatan sevgisinin, bağımsızlık tutkusunun ve vefa borcunun en somut nişanesidir. Şehre gelen her ziyaretçinin ilk durağı olan bu nokta, Karadeniz’in hırçın dalgalarına karşı vatan nöbetini sonsuza dek sürdüren bir kahramanın hatırasını yaşatmaktadır.
</p>

        <a href="mirasimiz.php" class="btn-back">
            <i class="bi bi-arrow-left me-2"></i> Mirasımız Sayfasına Geri Dön
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