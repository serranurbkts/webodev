<?php
session_start();

// Eğer kullanıcı giriş yapmamışsa 
if (!isset($_SESSION['user_id'])) {
    // Kullanıcıyı giriş sayfasına geri döndür
    header("Location: giris.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giresun | Gezilmesi Gereken Yerler</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
   <style>
        :root {
            --ana-yesil: #2d5a27; 
            --yazi: #3d405b;
            --arka-plan: #f8f9fa;
        }

        body {
            background-color: var(--arka-plan);
            color: var(--yazi);
            font-family: 'Poppins', sans-serif;
            line-height: 1.8;
        }

        .navbar {
            background-color: #212529 !important;
            border-bottom: 4px solid var(--ana-yesil);
        }

        .hero-header {
            background-color: #ffffff;
            padding: 80px 0;
            border-bottom: 1px solid #eee;
            margin-bottom: 50px;
        }

        .header-accent {
            height: 3px;
            width: 60px;
            background-color: var(--ana-yesil);
            margin-bottom: 15px;
        }

        .hero-img {
            width: 100%;
            height: 450px !important; 
            object-fit: cover;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .place-row {
            background: #fff;
            padding: 40px;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            margin-bottom: 40px;
            align-items: center;
        }

        .place-img-container img {
            width: 100%;
            height: 380px !important;
            object-fit: cover;
            border-radius: 6px;
        }

        .place-content h3 {
            color: var(--ana-yesil);
            font-weight: 700;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .text-muted-bold {
            font-weight: 800;
            color: var(--ana-yesil);
            font-size: 1.1rem;
            margin-bottom: 5px;
        }

        footer {
            background-color: #212529;
            color: white;
            padding: 40px 0;
            border-top: 5px solid var(--ana-yesil);
        }
        /* Slider fotoğraflarını ilk fotoğrafın boyutuna getirir */
.slider-img {
    width: 100%;
    height: 500px; /* Tüm fotoğraflar artık bu yükseklikte sabitlenecek */
    object-fit: cover; /* Fotoğraflar sünmez, şekli bozulmaz, kutuya tam oturur */
    object-position: center; /* Fotoğrafın tam merkezini gösterir */
}

/* Telefonlarda slider çok uzun durmasın diye yükseklik ayarı */
@media (max-width: 768px) {
    .slider-img {
        height: 300px;
    }
}
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">Kişisel Web Sitesi</a>
            <div class="collapse navbar-collapse" id="serraNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="index.php">Anasayfa</a>
                    <a class="nav-link" href="ozgecmis.php">Özgeçmiş</a>
                    <a class="nav-link active" href="sehrim.php">Şehrim</a>
                    <a class="nav-link" href="mirasimiz.php">Mirasımız</a>
                    <a class="nav-link" href="iletisim.php">İletişim</a>
                    <a class="nav-link" href="ilgialanlarim.php">İlgi Alanlarım</a>
                </div>
            </div>
        </div>
    </nav>

<section class="container my-5">
    <h1 class="text-center mb-4"><strong>GİRESUN'U KEŞFETMEYE HAZIR OLUN</strong></h1><br>

    <div id="giresunSlider" class="carousel slide shadow rounded overflow-hidden" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#giresunSlider" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#giresunSlider" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#giresunSlider" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#giresunSlider" data-bs-slide-to="3"></button>
        </div>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <a href="sehrim.php">
                    <img src="img/giresun.jpg" class="d-block w-100 slider-img" alt="Gezilecek Yerler">
                </a>
                <div class="carousel-caption">
                    <h5 class="slider-title">Gezilecek Yerler</h5>
                </div>
            </div>

            <div class="carousel-item">
                <a href="mirasimiz.php">
                    <img src="img/giresunfindik.jpg" class="d-block w-100 slider-img" alt="Giresun Fındığı">
                </a>
                <div class="carousel-caption">
                    <h5 class="slider-title">Giresun Fındığı</h5>
                </div>
            </div>

            <div class="carousel-item">
                <a href="mirasimiz.php">
                    <img src="img/kusdili.jpg" class="d-block w-100 slider-img" alt="Kuş Dili">
                </a>
                <div class="carousel-caption">
                    <h5 class="slider-title">Kuş Dili</h5>
                </div>
            </div>

            <div class="carousel-item">
                <a href="giresunspor.php"> <img src="img/giresunspor.jpg" class="d-block w-100 slider-img" alt="Giresunspor">
                </a>
                <div class="carousel-caption">
                    <h5 class="slider-title">Giresunspor</h5>
                </div>
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#giresunSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#giresunSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>
</section>

        </div>
    </div>
</header>
<section class="container my-5 py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="intro-bridge p-4 p-md-5 shadow-sm rounded-4" style="background-color: #ffffff; border-left: 6px solid #2d5a27;">
                <h3 class="fw-bold mb-4" style="color: #212529;">Neden Giresun'nu Ziyaret Etmelisiniz?</h3>
                
                <p class="lead-text mb-4" style="font-size: 1.15rem; line-height: 1.9; color: #444;">
                     Giresun, size sadece bir manzara vaat etmez; size bir karakter sunar. Bu şehri rotanıza eklemek için binlerce yıllık bir tarihle, doğanın en saf halinin iç içe geçtiği o eşsiz dengeyi görmek yeterlidir.
                </p>
                
                <p style="font-size: 1.1rem; line-height: 1.8; color: #666;">
                    Kalenin burçlarına çıktığınızda, Milli Mücadele’nin sarsılmaz iradesini ve şehri bir zırh gibi kuşatan Karadeniz’i iliklerinize kadar hissedersiniz. Karadeniz’in tek adasına doğru açıldığınızda ise modern dünyadan kopup mitolojik anlatıların tam ortasına düşersiniz. Giresun, sadece turkuaz gölleriyle veya sisli yaylalarıyla değil; her bir köşesinde sakladığı yaşanmışlıklarla sizi çağırıyor. Eğer aradığınız şey sadece bir gezi değil, ruhu olan bir hikayeye ortak olmaksa; şu an tam olarak doğru yerdesiniz. </p>
                
                <div class="mt-4 d-flex align-items-center">
                    <div style="height: 1px; flex-grow: 1; background-color: #dee2e6;"></div>
                    <span class="mx-3 text-muted" style="font-size: 0.9rem; letter-spacing: 2px; text-transform: uppercase;">Keşfetmeye Hemen Şimdi Başlayın</span>
                    <div style="height: 1px; flex-grow: 1; background-color: #dee2e6;"></div>
                </div>
            </div>
        </div>
    </div>
</section>    <main class="container">
        
        <div class="row place-row">
            <div class="col-md-6">
                <div class="place-img-container">
                    <img src="img/kale.jpg" alt="Giresun Kalesi">
                </div>
            </div>
            <div class="col-md-6 ps-md-5">
                <h3><strong>Giresun Kalesi</strong></h3>
                <p>Giresun Kalesi, şehri ikiye bölen dik bir kayalığın tepesinde yer alan ve M.Ö. 2. yüzyılda Pontus Kralı I. Pharnakes tarafından yaptırılan çok eski bir savunma yapısıdır. Kalenin en büyük özelliği, devasa taşların harç kullanılmadan üst üste dizilmesiyle oluşturulan (Kyklopik) surlarıdır. İçerisinde antik çağlardan kalma saray kalıntıları, dehlizler ve sarnıçlar bulunur. Burayı Giresunlular için en özel kılan şey ise Milli Mücadele kahramanı Topal Osman Ağa'nın mezarının burada olmasıdır. Bugün kale, hem tarihi dokusuyla hem de sunduğu eşsiz şehir ve deniz manzarasıyla Giresun'un en popüler gezi noktasıdır.</p>
            </div>
            <div class="mt-2 text-end">
    <a href="giresunkalesi.php" class="text-success fw-bold text-decoration-none">
        Giresun Kalesi hakkında daha detaylı bilgi almak için tıklayın
    </a>
</div>
        </div>

        <div class="row place-row flex-md-row-reverse">
            <div class="col-md-6">
                <div class="place-img-container">
                    <img src="img/ada.jpg" alt="Giresun Adası">
                </div>
            </div>
            <div class="col-md-6 pe-md-5">
                <h3><strong>Giresun Adası</strong></h3>
                <p>Kıyıdan sadece 3 km uzaklıkta bulunan Giresun Adası, Karadeniz’in üzerinde antik harabeler bulunan tek adasıdır. Burası dünya mitolojisinde çok büyük bir yere sahiptir; efsaneye göre savaşçı Amazon Kadınlarının kalesi ve Herkül'ün "Altın Post"u ararken uğradığı duraklardan biridir. Adada yapılan kazılarda Bizans döneminden kalma manastır temelleri, devasa erzak küpleri (pithoslar) ve gözetleme kuleleri bulunmuştur. Aynı zamanda martıların ve karabatakların doğal yuvası olan ada, her yıl Mayıs ayında düzenlenen Aksu Festivali ile binlerce yıllık geleneklerin yaşatıldığı mistik bir duraktır.</p>
            </div>
        </div>

        <div class="row place-row">
            <div class="col-md-6">
                <div class="place-img-container">
                    <img src="img/mavigol.jpg" alt="Mavi Göl">
                </div>
            </div>
            <div class="col-md-6 ps-md-5">
                <h3><strong>Mavi Göl</strong></h3>
                <p>Dereli ilçesindeki Kuzalan Tabiat Parkı içerisinde bulunan Mavi Göl, alışılmış derelerden çok farklı bir görüntüye sahiptir. Gölün suyunun o büyüleyici turkuaz rengi, yer altından çıkan sodalı suyun kireç taşı kayalıklarıyla birleşmesi sonucu oluşan doğal bir kimyasal tepkimedir. Karadeniz bölgesinde "akarsu" şeklinde akan ve sodalı olma özelliği taşıyan tek yer burasıdır. Özellikle yaz aylarında suyun en berrak ve en parlak maviye büründüğü Mavi Göl, çevresindeki yemyeşil ormanlarla kontrast oluşturarak insana kendini bir masal diyarında hissettirir.</p>
            </div>
        </div>
        <div class="row place-row flex-md-row-reverse">
            <div class="col-md-6">
                <div class="place-img-container">
                    <img src="img/kulakkaya.jpg" alt="Kulakkaya Yaylası">
                </div>
            </div>
            <div class="col-md-6 pe-md-5">
                <h3><strong>Kulakkaya Yaylası</strong></h3>
                <p>Deniz seviyesinden 1500 metre yükseklikte yer alan Kulakkaya, Giresun'un en eski ve en karakteristik yaylalarından biridir. Burası sadece bir dinlenme yeri değil, geleneksel ahşap evleri ve otantik sokaklarıyla yayla kültürünün hala canlı olduğu bir yerleşimdir. Geniş meraları, "Zifin" çiçekleriyle süslü doğası ve tertemiz havasıyla bilinir. Kulakkaya'nın en meşhur özelliği, sis denizinin üzerinde kalmasıdır; buraya çıktığınızda bazen bulutların üzerinde yürüyormuşsunuz gibi bir hisse kapılırsınız. Aynı zamanda Giresun’un meşhur doğal tereyağı ve süt ürünlerinin merkezi olarak gastronomi açısından da çok değerlidir.</p>
            </div>
        </div>


        <div class="row place-row ">
            <div class="col-md-6">
                <div class="place-img-container">
                    <img src="img/traverten.jpg" alt="Göksu Travertenleri">
                </div>
            </div>
            <div class="col-md-6 pe-md-5">
                <h3><strong>Göksu Travertenleri</strong></h3>
                <p>Mavi Göl'ün hemen yakınında yer alan Göksu Travertenleri, mineralli suların etkisiyle oluşmuş, Karadeniz’in ortasında bembeyaz bir sürprizdir. Yer altından çıkan mineralli suların hava ile temas ederek kalsiyum karbonat çökeltisi bırakması sonucu bu beyaz teraslar ve turkuaz havuzlar meydana gelmiştir. "Karadeniz'in Pamukkale'si" olarak bilinen bu bölge, hem görsel güzelliğiyle hem de suyunun içerdiği minerallerle dikkat çeker. Modern peyzaj çalışmalarıyla ziyarete açılan travertenler, Giresun'un jeolojik açıdan ne kadar zengin olduğunu gösteren en estetik noktalardan biridir.</p>
        </div>
        </div>

        <div class="row place-row flex-md-row-reverse">
            <div class="col-md-6">
                <div class="place-img-container">
                    <img src="img/kuzalan.jpg" alt="Kuzalan Şelalesi">
                </div>
            </div>

            <div class="col-md-6 ps-md-5">
                <h3><strong>Kuzalan Şelalesi</strong></h3>
                <p>Kuzalan Tabiat Parkı'nın en görkemli köşesi olan bu şelale, yaklaşık 20 metrelik bir yükseklikten büyük bir coşkuyla dökülür. Şelaleyi özel kılan, suyunun döküldüğü dev kazanı ve etrafını saran çok zengin bitki örtüsüdür. Sarp kayalıkların arasından fışkıran su, etrafa yaydığı su buharıyla yazın en sıcak günlerinde bile buz gibi bir hava oluşturur. Doğanın binlerce yıllık aşındırma gücüyle şekillenen bu şelale, Giresun-Sivas yolu üzerinde geçen herkesin durup hayranlıkla izlediği bir tabiat harikasıdır.</p>
            </div>
        </div>
         <div class="row place-row">
            <div class="col-md-6">
                <div class="place-img-container">
                    <img src="img/kumbetyaylası.jpg" alt="Kümbet Yaylası">
                </div>
            </div>
            <div class="col-md-6 ps-md-5">
                <h3><strong>Kümbet Yaylası</strong></h3>
                <p>Deniz seviyesinden 1640 metre yükseklikte yer alan Kümbet Yaylası, Giresun’un en meşhur turizm merkezlerinden biridir. Uçsuz bucaksız çam ormanları, "Aymaç" mevkisindeki uçurum manzaraları ve Koçkayası Tabiat Parkı’ndaki bungalov evleriyle bilinir. Her yıl düzenlenen şenliklerle binlerce insanı ağırlayan Kümbet, modern yaşamın konforu ile doğanın vahşi güzelliğini birleştiren, Giresun’un en görkemli yayla rotasıdır.</p>
            </div>
        </div>
        <div class="row place-row flex-md-row-reverse">
            <div class="col-md-6">
                <div class="place-img-container">
                    <img src="img/zeytinlikevleri.jpg" alt="Tarihi Zeytinlik Evleri">
                </div>
            </div>
            <div class="col-md-6 pe-md-5">
                <h3><strong>Zeytinlik Semti (Tarihi Evler)</strong></h3>
                <p>Giresun Kalesi’nin eteklerinde yer alan tarihi Zeytinlik Semti, 19. yüzyılda Avrupa ile ticaret yapan ailelerin inşa ettirdiği özgün taş konaklarla doludur. Dar sokakları, geniş bahçeleri ve dönemin estetiğini yansıtan yüksek tavanlı evleriyle bu bölge, kentsel dönüşüme direnmiş tarihi bir adacık gibidir. Koruma altına alınan bu semt, Giresun’un geçmişteki zengin ticaret kültürünü ve günlük sosyal yaşamını en iyi yansıtan yerleşim alanıdır.</p>
            </div>
        </div>

        <div class="row place-row">
            <div class="col-md-6">
                <div class="place-img-container">
                    <img src="img/tirebolukalesi.jpg" alt="Tirebolu Kalesi">
                </div>
            </div>
            <div class="col-md-6 pe-md-5">
                <h3><strong>Tirebolu Kalesi</strong></h3>
                <p>Denizin içine bir gemi burnu gibi uzanan yüksek bir kaya kütlesi üzerine inşa edilen Tirebolu Kalesi, Giresun sahil şeridindeki en estetik yapılardan biridir. Cenevizliler dönemine kadar uzanan bir geçmişe sahip olan kale, içerisinde barındırdığı tarihi toplar ve taş odalarla dikkat çeker. Kalenin tepesinden izlenen deniz manzarası ve ilçenin karakteristik sahil dokusu, burayı bölgenin en önemli tarihi gözlem noktalarından biri yapar.</p>
            </div>
        </div>

        
    </main>

    <footer class="text-center">
        <p class="mb-0">Sakarya Üniversitesi | Web Teknolojileri Projesi &copy; 2026</p>
    </footer>

 <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>