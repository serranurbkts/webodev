<?php
session_start();

// Eğer kullanıcı giriş yapmamışsa 
if (!isset($_SESSION['user_id'])) {
    // Kullanıcıyı giriş sayfasına geri döndür.
    header("Location: giris.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kültürel Dokusu ve Tarihi Mirasıyla Giresun</title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        /*  Renk Paleti */
        body { background-color: #f4f7f6; color: #333; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .timeline-section { border-left: 4px solid #2d5a27; padding-left: 20px; margin-bottom: 40px; }
        .period-title { color: #2d5a27; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; }
        .table-custom { background: white; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #212529 !important; border-bottom: 4px solid #2d5a27;">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">Kişisel Web Sitesi</a>
        <div class="collapse navbar-collapse" id="serraNav">
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">Anasayfa</a>
                <a class="nav-link" href="ozgecmis.php">Özgeçmiş</a>
                <a class="nav-link" href="sehrim.php">Şehrim</a>
                <a class="nav-link active" href="mirasimiz.php">Mirasımız</a>
                <a class="nav-link" href="iletisim.php">İletişim</a>
                <a class="nav-link" href="ilgi alanlarim.php">İlgi Alanlarım</a>
           
            </div>
        </div>
    </div>
</nav>
<header class="container mt-5 mb-5">
    <div class="row align-items-end">
        <div class="col-md-9">
            <div style="height: 2px; width: 50px; background-color: #2d5a27; margin-bottom: 15px;"></div>
            <h1 class="display-4 fw-bold" style="color: #1b263b; letter-spacing: -1.5px;"> GİRESUN'NUN TARİHİ VE KÜLTÜREL MİRASI</h1>
         
           <p class="lead text-muted mb-0" style="font-size: 1.1rem; max-width: 600px;"><b>
                Antik Çağ'dan günümüze Giresun'un tarihi ve kültürel mirasları.
            </b></p>
        </div>
        
        </div>
    </div>
    <hr class="mt-4 opacity-10">
</header>
        <section class="timeline-section">
            <h2 class="period-title">1. Antik Çağ ve Koloni Dönemi</h2>
            <div class="row align-items-center">
        <div class="col-md-7">
            <p>Yunan kolonizasyonu öncesinde bölgede Karadeniz'in yerli kabilelerinin varlığı bilinmekte olup Hitit kaynaklarında "Kaşka" adıyla geçen kendir ziraati yapan savaşçı bir halkın bahsi geçmektedir. MÖ 7. yüzyılda Kolhis ülkesinde Miletli koloniciler tarafından kurulan kent merkezinin çevresinde Kolh (Tzan) halkına ait köyler bulunmaktaydı.MÖ 6. yüzyılda Pers İmparatorluğu'nun eline geçen bölge, Büyük İskender'in Pers İmparatorluğu'nu yıkmasının ardından özgürlüğüne kavuşmuştur. Sonrasında Pontus Krallığı tarafından ilhak edilen yöre Antik çağlarda stratejik bir liman ve kirazın dünyaya yayıldığı merkez olarak bilinir. </p><br>
            <p>Zela Savaşı'nın ardından diğer Doğu Karadeniz şehirleri gibi Roma İmparatorluğu tarafından işgal edilmiş 1300 yıl sürecek Romalılaşma (Rumlaşma) sürecine girmiştir.</p>
            <ul class="list-group list-group-flush mb-4">
                <li class="list-group-item bg-transparent"><strong>Miletos Kolonileri:</strong> Deniz ticaretinin temelleri atılmıştır.</li>
                <li class="list-group-item bg-transparent"><strong>Roma ve Bizans Hakmiyeti:</strong> Stratejik kale ve savunma sistemlerinin inşası yapılmıştır.</li>
            </ul>
        </div>
        <div class="col-md-5 text-center">
            <figure class="figure">
                <img src="img/antik.jpg" class="img-fluid rounded shadow-sm" alt="Antik Giresun Limanı ve Kiraz Bahçeleri Temsili">
                <figcaption class="figure-caption mt-2 text-center">
                    Görsel 1:Antik Çağ ve Roma Dönemi'nde Giresun.
                </figcaption>
            </figure>
        </div>
    </div>
        </section>
         <section class="timeline-section">
            <h2 class="period-title">2. Roma Dönemi</h2><br>
            <p>Eski adı Yunanca: "Kerasounta" (Κερασούντα), "Pharnacia", "Choerades" olan şehrin adı daha sonraları Roma ve Bizans yönetiminde "Kerasous" veya "Cerasus" olarak değiştirilmiştir. Kerasus, Yunanca "boynuz" demektir ve yarımadayı tasvir etmek için kullanılmıştır, "ounta" son eki ile birlikte Kerasous olan şehrin adı zamanla "Kerasunt" olarak söylenilmiştir.Pontus Devleti'nin yıkılıp Roma hakimiyetinin başlamasından sonra Giresun yöresinin yerli kabileleri süratle asimile olarak tarih sahnesinden çekilmiştir. Bununla birlikte Roma ve Bizans kaynaklarında bölge halkı Can (Tzan) olarak adlandırılmaya devam etmiştir. Roma döneminde Giresun Karadeniz'in oldukça önemli bir şehri durumundaydı. Bu dönemde şehir kendi adına para basma yetkisine sahip olacak kadar gelişmiştir.</p>
        </section>    
        
        <section class="timeline-section">
            <h2 class="period-title">3. Orta Çağ Dönemi</h2><br>
            <div class="row align-items-center">
        <div class="col-md-5 order-2 order-md-1 text-center">
            <figure class="figure">
                <img src="img/pontusdonemi.jpg" class="img-fluid rounded shadow" alt="Giresun Kalesi Orta Çağ Temsili">
                <figcaption class="figure-caption mt-2 text-center">
                    Görsel 2:Giresun'nun Orta Çağ'da mimari dokusu.
                </figcaption>
            </figure>
        </div>

        <div class="col-md-7 order-1 order-md-2">
            <p>Giresun 1204 yılında Trabzon Rum İmparatorluğu'nun kurulmasıyla Komnenos'ların idaresi altına girdi. 1300'lü yıllarda imparatorluğun 2. büyük şehri olarak geçen Giresun yine bu yıllar boyunca birçok Türkmen akınına maruz kalmıştır. Bunlardan en kayda geçeni 1301'de Giresun çevresini bir süre zapteden Kuştoğan Bey, Mihail Panaretos'un kroniklerinde geçmektedir.Ayrıca 1348'de Cenevizliler Giresun'u İmparatorluk ile çıkan bir antlaşmazlık sırasında yakmıştır. Giresun 1397 yılında Türkmen Beyleri Emir oğlu Süleyman Bey ve Pir Kadem Çakır bey tarafından fethedilmiş olup <strong>o zamandan bu yana işgal görmemiştir</strong>.</p>
        </div>
    </div>
        </section>
        <section class="timeline-section">
            
            <h2 class="period-title">4. Osmanlı İmparatorluğu Dönemi</h2>
            <div class="row align-items-center">
        <div class="col-md-7">
            <p>Fatih Sultan Mehmet'in Trabzon İmparatorluğu'nu fethiyle (1461) Osmanlı topraklarına katılan Giresun, 1500'li yıllardaki tahrir defterlerinde Giresun ve civarının (Koyulhisar/Büyükliman/Vakfıkebir) arası " Vilayeti Çepni "olarak görünüyor ve özel bir yönetimle idare ediliyordu. Beylikler döneminden sonra (1461) Osmanlı İmparatorluğu'nun Trabzon Vilayeti'ne bağlanmış olan Giresun, 1920'de Ordu, Tirebolu ve Görele kazalarıyla birleştirilerek Giresun Sancağı kurulmuştur. 1923'te il olmuştur.</p><br>
            <p>Aynı zamanda Giresun, özellikle uluslararası düzeyde tanınan fındığı ile bilinir, şehrin sembolüdür. </p>
            <div class="p-3 bg-white border-start border-4 border-warning mb-4">
                <em>"Zeytinlik Semti, Osmanlı döneminin çok kültürlü yapısını ve mimari estetiğini günümüze taşıyan en önemli mirastır."</em>
            </div>
            </div>
        <div class="col-md-5 text-center">
            <figure class="figure">
                <img src="img/osmanlidonemi.jpg" class="img-fluid rounded shadow-sm" alt="Antik Giresun Limanı ve Kiraz Bahçeleri Temsili">
                <figcaption class="figure-caption mt-2 text-center">
                    Görsel 3:Osmanlı Dönemi'nde Giresun.
                </figcaption>
            </figure>
        </div>
    </div>
        </section>

      <section class="timeline-section mb-5">
    <h2 class="period-title">5. Milli Mücadele Dönemi</h2><br>
    
    <div class="row">
        <div class="col-md-5 text-center mb-4">
            <figure class="figure">
                <img src="img/topalosmanaga.jpg" class="img-fluid rounded shadow-lg" alt="Topal Osman Ağa">
                <figcaption class="figure-caption mt-2 text-center">
                    Görsel 4: Milli Mücadele Dönemi'nin en önemli kahramanlarından biri olan Topal Osman Ağa.
                </figcaption>
            </figure>
        </div> <div class="col-md-7">
            <p>
                Giresun, Anadolu’nun işgal girişimlerine karşı 1919 yılında "Giresun Müdafaa-i Hukuk Cemiyeti"ni kurarak ilk sivil direniş örgütlenmelerinden birini gerçekleştirmiştir. Şehir, işgal altında olmamasına rağmen, 1921 yılında <strong>Milis Yarbay Topal Osman Ağa</strong> ve <strong>Binbaşı Hüseyin Avni Alparslan</strong> önderliğinde tamamı gönüllülerden oluşan 42. ve 47. Gönüllü Alayları teşkil etmiştir.
            </p>
            <p>
                Bu askeri birimler, Sakarya Meydan Muharebesi’nde kritik bir nokta olan Haymana hattında savunma yapmış, Büyük Taarruz’da ise düşman hatlarının yarılmasında aktif rol oynamıştır. Alayların lojistik ihtiyaçları, merkezi hükümetten destek alınmadan Giresun halkının yerel kaynaklarıyla karşılanmıştır.
            </p>
            <p>
                Askeri açıdan bakıldığında; maaş veya düzenli ordu ikmali beklemeksizin gönüllülük esasıyla en ön saflarda yer alan bu birlikler, Türk istiklal harbinin insan kaynağı stratejisinde eşsiz bir model teşkil etmiştir.
            </p>

            <div class="p-3 rounded shadow-sm" style="background-color: #f0f0f0; border-left: 5px solid #6c757d;">
                <p class="mb-0 small text-muted italic">
                    <strong> Giresun, Milli Mücadele'de işgale uğramamasına rağmen dışarıya en çok gönüllü asker gönderen ve kendi imkanlarıyla alay kuran tek şehirdir.</strong>
                </p>
            </div>
        <p>
    <br><br>
    <a href="topalosmanaga.php" style="color: #2d5a27; font-weight: bold; text-decoration: underline;">
        Topal Osman Ağa  hakkında daha detaylı bilgiye ulaşmak için tıklayınız.
    </a> 
</p>
        </div>
    </div>

    <div class="mt-4">
        <h4 class="h5 fw-bold mb-3"><i class="bi bi-table"></i> Giresun'un Gönüllü Alayları Analiz Tablosu</h4>
        <div class="table-responsive">
            <table class="table table-custom table-hover shadow-sm border">
                <thead class="table-dark">
                    <tr>
                        <th style="width: 20%;">Birim</th>
                        <th style="width: 30%;">Liderlik</th>
                        <th style="width: 50%;">Kritik Başarı</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>42. Alay</strong></td>
                        <td>Hüseyin Avni Alparslan</td>
                        <td>Haymana Hattı Savunması (Ankara Kapısı)</td>
                    </tr>
                    <tr>
                        <td><strong>47. Alay</strong></td>
                        <td>Topal Osman Ağa</td>
                        <td>Dumlupınar ve Büyük Taarruz Yarması</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
        <section class="timeline-section">
            <h2 class="period-title">6. Cumhuriyet'ten Günümüze Giresun</h2>
            <div class="row align-items-center">
        <div class="col-md-7">
            <p>Cumhuriyet'in ilanıyla birlikte Giresun, 1923 yılında il statüsünü koruyarak idari yapısını sağlamlaştırmıştır. Şehrin ekonomik can damarı olan fındık ticareti, 1938 yılında kurulan Fiskobirlik (Fındık Tarım Satış Kooperatifleri Birliği) ile kurumsal bir kimlik kazanmış ve Giresun fındığı küresel piyasalarda bir marka haline gelmiştir. 2006 yılında kurulan Giresun Üniversitesi, şehrin sadece bir tarım kenti değil, aynı zamanda bir eğitim ve bilim merkezi olmasını sağlamıştır. Ulaşım alanında ise 2015 yılında hizmete giren ve deniz üzerine inşa edilen Türkiye'nin ilk havalimanı olan Ordu-Giresun Havalimanı, bölgenin lojistik ve stratejik değerini modernize etmiştir.Bugün Giresun, tarihi mirasını koruyarak akademik ve teknolojik yatırımlarla geleceğe yön veren dinamik bir Karadeniz kenti kimliğini sürdürmektedir.</p>
        </div>
        <div class="col-md-5 text-center">
            <figure class="figure">
                <img src="img/giresunn.jpg" class="img-fluid rounded shadow-sm" alt="Antik Giresun Limanı ve Kiraz Bahçeleri Temsili">
                <figcaption class="figure-caption mt-2 text-center">
                    Görsel 5: Günümüzde Giresun.
                </figcaption>
            </figure>
        </div>
    </div>
        </section>
    </section>
    
<section class="container my-5 pt-5 border-top">
    <div class="mb-4">
        <h2 class="fw-bold display-5" style="color: var(--koyu); letter-spacing: 1px;">GİRESUN'UN KÜLTÜREL MİRASI</h2>
        <div style="width: 80px; height: 5px; background-color: var(--ana-yesil); margin-top: 10px;"></div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p class="text-secondary" style="text-align: justify; font-size: 1.2rem; line-height: 1.9;">
                Giresun'un kültürel kimliği, Karadeniz’in zorlu coğrafyası ile binlerce yıllık yerleşik hayatın kurduğu stratejik bir dengenin ürünüdür. Bu bölümde; şehrin mutfağından haberleşme diline kadar tüm unsurların, bu zorlu coğrafyaya nasıl adapte olduğunu inceleyeceğiz. Aşağıda ,<b> Giresun'un eşsiz kültürünün</b> bir kısmı yer almaktadır.
            </p>
        </div>
    </div>
</section>
   
     <div class="row align-items-start mb-5 pb-5 border-bottom">
    
    <div class="col-md-5 mb-4">
        <img src="img/giresunmutfagi.jpg" class="img-fluid rounded-3" alt="Giresun Mutfak Kültürü">
        
        <p class="mt-2 text-muted small text-center italic">
            <strong>Görsel 6:</strong> Giresun mutfağının vazgeçilmezi olan Giresun diblesi.
        </p>
    </div>

    <div class="col-md-7 ps-md-5">
        <h3 class="fw-bold text-uppercase mb-3" style="color: var(--ana-yesil);">1. Mutfak Kültürü</h3>
        <div style="width: 50px; height: 4px; background: var(--ana-yesil); margin-bottom: 20px;"></div>
        <p class="text-secondary" style="text-align: justify; font-size: 1.1rem; line-height: 1.8;">
            Giresun mutfağı, Karadeniz’in dik yamaçlarında hayatta kalma sanatının sofraya yansımasıdır. Bu mutfak sadece yemekten ibaret değildir; <strong>"pancar"</strong> (karalahana) ile yapılan onlarca çeşit yemeğin, doğada kendiliğinden yetişen <strong>galdirik, sakarca ve mendek</strong> gibi yabani otların ustalığa dönüşmesidir. Dünyanın en kaliteli fındığının yağıyla lezzetlenen bu coğrafyada; kış hazırlığı olan <strong>kiraz tuzlusu kavurması</strong>, mısır ekmeğinin eşlik ettiği dumanı üstünde hamsi ve fırın kurusu fasulye, yerel halkın "yokluktan varlık yaratma" becerisini kanıtlar.
        </p>
    </div>

</div>
    <div class="row align-items-start mb-5 pb-5 border-bottom flex-column-reverse flex-md-row">
    
    <div class="col-md-7 pe-md-5">
        <h3 class="fw-bold text-uppercase mb-3" style="color: var(--ana-yesil);">2. Giresun'un Yayla Kültürü</h3>
        <div style="width: 50px; height: 4px; background: var(--ana-yesil); margin-bottom: 20px;"></div>
        <p class="text-secondary" style="text-align: justify; font-size: 1.1rem; line-height: 1.8;">
            Giresun’da yaylacılık, sadece serin bir nefes alma molası değil; binlerce yıllık bir gelenektir. Kümbet, Bektaş ve Sis Dağı gibi yaylalarda hayat bulan bu kültür; sahil şeridindeki yoğun rutubetten, dağların en üst rakımlarına yapılan zorunlu bir yolculuktur. Bu döngünün en güzel geleneklerinden olan <strong>"Otçu Göçü"</strong>, mısır tarlalarındaki son çapadan sonra halkın davul-zurna eşliğinde yaylalara doğru yaptığı bir yürüyüş ritüelidir. Yayla evlerindeki ocak başı sohbetleri ve kemençenin hırçın tınısı, dağınık yerleşim tipine sahip bölge insanını birbirine bağlayan en güçlü toplumsal bağlardandır.
        </p>
    </div>

    <div class="col-md-5 mb-4">
        <img src="img/otcugocufestivali.jpg" class="img-fluid rounded-3" alt="Giresun Yayla Kültürü">
        
        <p class="mt-2 text-muted small text-center italic">
            <strong>Görsel 7:</strong> Giresun'un sarp coğrafyasında geleneksel Otçu Göçü festivali.
        </p>
    </div>

</div>
    
   <div class="row align-items-start mb-5 pb-5 border-bottom">
    
    <div class="col-md-5 mb-4">
        <img src="img/kusdili.jpg" class="img-fluid rounded-3" alt="Kuşköy Islık Dili">
        
        <p class="mt-2 text-muted small text-center italic">
            <strong>Görsel 8:</strong> UNESCO Miras Listesi'nde yer alan ve "Kuş Dili" olarak bilinen Giresun-Çanakçı Islık Dili.
        </p>
    </div>

    <div class="col-md-7 ps-md-5">
        <h3 class="fw-bold text-uppercase mb-3" style="color: var(--ana-yesil);">3. Islık Dili</h3>
        <div style="width: 50px; height: 4px; background: var(--ana-yesil); margin-bottom: 20px;"></div>
        <p class="text-secondary" style="text-align: justify; font-size: 1.1rem; line-height: 1.8;">
            UNESCO Acil Koruma Gerektiren Somut Olmayan Kültürel Miras Listesi'nde yer alan <strong>"Islık Dili"</strong>, Giresun’un Çanakçı bölgesinde geliştirilmiş bir haberleşme dehasıdır. Dik yamaçlar ve derin vadiler arasında sesin yankılanarak kaybolduğu bu coğrafyada, köylülerin parmak ve dil yardımıyla oluşturduğu yüksek frekanslı ses dalgaları, dijital sinyal iletiminden yüzyıllar önce 5 kilometreye kadar veri aktarımı sağlamıştır. Sadece birer işaret değil; kelimelerin, hecelerin ve cümlelerin ıslık tonlarına büründüğü bu yapı, teknolojik imkansızlıkların yaratıcı zekayla nasıl aşıldığının dünyadaki en nadir örneklerinden biridir. Bugün modern haberleşme araçlarına rağmen bir gelenek olarak yaşayan Islık Dili, insanın doğayla kurduğu uyumun en saf yankısıdır.
        </p>
    </div>

</div>
<div class="row align-items-start mb-5 pb-5 border-bottom flex-column-reverse flex-md-row">
    
    <div class="col-md-7 pe-md-5">
        <h3 class="fw-bold text-uppercase mb-3" style="color: var(--ana-yesil);">4. Mayıs Yedisi </h3>
        <div style="width: 50px; height: 4px; background: var(--ana-yesil); margin-bottom: 20px;"></div>
        <p class="text-secondary" style="text-align: justify; font-size: 1.1rem; line-height: 1.8;">
            Miladi takvime göre 20 Mayıs’a tekabül eden <strong>"Mayıs Yedisi"</strong>, Giresun halkının binlerce yıldır denizle kurduğu kadim ve mistik bağın en güçlü sembolüdür. Aksu Deresi’nin Karadeniz’le birleştiği noktada düzenlenen bu ritüeller; bereketin artması, şifa bulma ve kötü enerjilerden arınma gibi duaların somutlaşmış halidir. Geleneğin temel taşlarını oluşturan <strong>sacayaktan geçme</strong>, suya yedi çift bir tek taş atma ve <strong>Giresun Adası</strong> etrafında atılan tur; şehrin tarih öncesi dönemlerden gelen mitolojik mirasının günümüze aktarılan şeklidir. Sadece bir bahar kutlaması değil, aynı zamanda bölge insanının doğanın döngüsüne duyduğu saygının bir ifadesi olan bu şenlikler, Giresun'un toplumsal hafızasını diri tutan en önemli kültürel mirastır.
        </p>
    </div>

    <div class="col-md-5 mb-4">
        <img src="img/mayisyedisi.jpg" class="img-fluid rounded-3" alt="Aksu Mayıs Yedisi Şenlikleri">
        
        <p class="mt-2 text-muted small text-center italic">
            <strong>Görsel 9:</strong> Geleneksel Mayıs Yedisi ritüellerinde sayacaktan geçme etkinliği.
        </p>
    </div>

</div>
    <div class="row align-items-start mb-5 pb-5">
    
    <div class="col-md-5 mb-4">
        <img src="img/findikhasadi.jpg" class="img-fluid rounded-3" alt="Giresun Fındık ve Deniz Kültürü">
        
        <p class="mt-2 text-muted small text-center italic">
            <strong>Görsel 10:</strong> Giresun kimliğinin iki temel unsuru olan Karadeniz ve kıyı şerinde kurutulan Giresun Fındığı.
        </p>
    </div>

    <div class="col-md-7 ps-md-5">
        <h3 class="fw-bold text-uppercase mb-3" style="color: var(--ana-yesil);">5. Giresun'un olmazsa olmazları: Fındık ve Deniz</h3>
        <div style="width: 50px; height: 4px; background: var(--ana-yesil); margin-bottom: 20px;"></div>
        <p class="text-secondary" style="text-align: justify; font-size: 1.1rem; line-height: 1.8;">
            Giresun'un kültürel kimliğinin temelinde, toprağın bereketi ile denizin hırçınlığı arasındaki o sarsılmaz denge yer alır. Dünyanın en kaliteli ve en yüksek yağ oranına sahip <strong>"Giresun Kalite"</strong> fındığının üretimi, bölgede sadece bir tarım faaliyeti değil; sosyal statüyü, yıllık iş gücü takvimini ve mimariyi şekillendiren ana sistemdir. Fındık bahçelerinin gölgesinde şekillenen bu yaşam, kıyı şeridine inildiğinde yerini kadim bir denizcilik mirasına bırakır. Karadeniz’in değişken yapısına uyum sağlayan balıkçılık kültürü, yerel halkın pratik zekasını ve tekne yapımından ağ teknolojilerine kadar uzanan teknik becerisini yansıtır. Bu iki unsur, Giresun insanının hem toprağa hem de denize olan sarsılmaz bağlılığının, şehrin ruhuna işlenmiş somut birer göstergesidir.
        </p>
    </div>

</div>
</section>

    <footer class="text-center py-4 bg-dark text-white">
        <p>Sakarya Üniversitesi | Web Teknolojileri Projesi &copy; 2026</p>
    </footer>

   <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>