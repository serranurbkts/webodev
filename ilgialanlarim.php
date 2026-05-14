<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: giris.php");
    exit();
}

// OMDb API Ayarları
$apiKey = "679c6762"; 
$filmIsmi = "Human"; 
$url = "http://www.omdbapi.com/?t=" . urlencode($filmIsmi) . "&apikey=$apiKey";

// Veriyi çekiyoruz
$response = @file_get_contents($url);
$data = json_decode($response);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İlgi Alanlarım </title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        /* DİĞER SAYFALARINDAKİ AYNI CSS BLOĞU */
        :root {
            --ana-yesil: #2d5a27; 
            --koyu: #212529;
        }

        body {
            background-color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }

        .navbar { 
            background-color: var(--koyu) !important; 
            border-bottom: 4px solid var(--ana-yesil);
        }

        .navbar-brand { font-weight: bold; }

        .header-bg {
            background-color: #f8f9fa;
            padding: 60px 0;
            border-bottom: 1px solid #dee2e6;
            margin-bottom: 40px;
        }

        /* Senin yazdığın metni diğer sayfalarındaki "Özet" veya "Hakkımda" kısımları gibi hizaladım */
        .manifesto-box {
            border-left: 5px solid var(--ana-yesil);
            padding: 20px 30px;
            background-color: #fff;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
            margin-bottom: 50px;
        }

        .interest-title {
            color: var(--ana-yesil);
            font-weight: 700;
            margin-top: 30px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .interest-title i {
            margin-right: 10px;
        }

        .content-text {
            font-size: 1.1rem;
            line-height: 1.8;
            text-align: justify;
        }

        footer {
            background-color: var(--koyu);
            color: white;
            padding: 30px 0;
            margin-top: 60px;
            border-top: 4px solid var(--ana-yesil);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Kişisel Web Sitesi</a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="index.php">Anasayfa</a>
            <a class="nav-link" href="ozgecmis.php">Özgeçmiş</a>
            <a class="nav-link" href="sehrim.php">Şehrim</a>
            <a class="nav-link" href="mirasimiz.php">Mirasımız</a>
            <a class="nav-link" href="iletisim.php">İletişim</a>
            <a class="nav-link active" href="ilgialanlarim.php">İlgi Alanlarım</a>
        </div>
    </div>
</nav>

<div class="header-bg text-center">
    <div class="container">
        <h1 class="display-5 fw-bold">İLGİ ALANLARIM</h1>
        <p class="lead text-muted">Benim Perspektifimden</p>
    </div>
</div>

<main class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            <div class="manifesto-box">
                <p class="content-text mb-0 italic">
                    Dünya, birbirine görünmez ağlarla bağlı devasa bir sistemdir. Benim ise bu görünmez ağları keşfetmem biraz zaman aldı. Her seferinde birbirinden çok farklı, alakasız alanlara ilgi duyduğuma inanıyordum. Ancak artık birbirinden farklı kulvarlarda denilebilecek ilgi alanlarımın arasındaki görünmez bağları keşfettim. 
                    <br><br>
                    İnsan zihninin karmaşıklığı ile bilgisayar sistemlerinin mantığı arasındaki benzerliği, uluslararası ilişkilerdeki dengelerin teknolojik gelişmeler ile dünya siyasetinde dengeleri değiştirebileceğini artık biliyorum. Bu görünmez bağları görmek için artık daha fazla çaba sarf ediyorum. Belki de bunun bir sebebi dünyanın karmaşık yüzünü anlamlandırma çabamdandır. 
                    <br><br>
                    Ayrıca yeni edindiğim <strong>mühendis kimliğinin</strong> bu duruma daha çok yardımcı olduğuna inanıyorum. Artık aynı zamanda bir mühendis gözünden de bakmaya çalışıyorum.
                </p>
            </div>

            <h3 class="interest-title"><i class="bi bi-shield-shaded"></i> Savunma Sanayii ve Siber Güvenlik</h3>
            <p class="content-text">
                Savunma sanayii ve siber güvenliği, sadece birer teknik alan olarak değil, uluslararası ilişkiler masasındaki en stratejik güç unsurları olarak görüyorum. Teknolojinin diplomasiyi nasıl şekillendirdiğini anlamak, mühendislik vizyonumun temelini oluşturuyor.
            </p>

            <h3 class="interest-title"><i class="bi bi-diagram-3"></i> İnsan Zihni ve İşleyişi</h3>
            <p class="content-text">
                İnsan davranışlarını ve karar alma mekanizmalarını çözmek; karmaşık sistemleri anlamlandırmakla aynı mantığa sahip. Psikolojik modeller üzerinden yaptığım analizler, mühendislikteki analitik düşünceyi insani bir derinlikle birleştirmemi sağlıyor.
            </p>

            <h3 class="interest-title"><i class="bi bi-globe-central-south-asia"></i> Farklı Kültürler ve Dinler</h3>
            <p class="content-text">
                Farklı kültürlerin, dinlerin ve tarihsel süreçlerin oluşturduğu o devasa sistemi çözmeye çalışmak; dünyanın işleyiş kodlarını okumak gibi. Bu merak, ürettiğim çözümlere global bir perspektif kazandırıyor.
            </p>
           <hr class="my-5">
<h3 class="interest-title text-success"><i class="bi bi-film"></i> Benden Bir Kesit: İlgi alanlarımı bütünüyle yansıtan bir belgesel</h3>
<p class="content-text mb-4">
    Sinema, insan zihnini ve toplumsal bağları anlamamda bana yardımcı olan en güçlü araçlardan biridir. Benim için ise dünyayı ve insanı anlamlandırma çabamda yoluma çıkan en etkileyici rehberlerden biri Human belgeseli oldu. Yönetmen Yann Arthus-Bertrand'ın bu çalışması, bana dünyanın sadece rakamlardan veya haritalardan ibaret olmadığını; aslında milyarlarca farklı hikayenin birleştiği devasa bir kalp atışı olduğunu gösterdi.
    60 farklı ülkede, 2000'den fazla insanın en saf haliyle kameraya bakıp; aşkı, acıyı, adaleti ve mutluluğu kendi dillerinde anlatması, aslında özümüzde ne kadar 'bir' olduğumuzu kanıtlıyor. Bir mühendis adayı olarak sistemleri çözmeye çalışırken, bu belgesel bana en karmaşık ve en kusursuz sistemin 'insan ruhu' olduğunu hatırlatıyor. Farklı kültürlerin ve hayatların o görünmez ağlarla birbirine nasıl bağlandığını görmek, benim perspektifimi global bir boyuta taşıyor. Benim için bu belgesel, sadece izlenen bir görüntü değil; insanlık ailesine yazılmış sessiz ve derin bir mektup niteliğinde.
</p>

<?php if(isset($data) && $data->Response == "True"): ?>
    <div class="card mb-5 shadow-sm border-0 bg-light">
        <div class="row g-0">
            <div class="col-md-3">
                <?php 
                // Öncelik API posterinde, ama bir hata olursa senin indirdiğin human.jpg devreye girsin
                $posterUrl = (!empty($data->Poster) && $data->Poster != "N/A") ? $data->Poster : "human.jpg";
                ?>
                <img src="<?php echo $posterUrl; ?>" class="img-fluid rounded-start w-100" alt="Film Afişi" onerror="this.src='human.jpg';">
            </div>
            <div class="col-md-9">
                <div class="card-body">
                    <h4 class="card-title fw-bold text-dark"><?php echo $data->Title; ?></h4>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $data->Year; ?> | <?php echo $data->Genre; ?></h6>
                    <p class="card-text mt-3"><?php echo $data->Plot; ?></p>
                    <div class="d-flex align-items-center mt-4">
                        <span class="badge bg-warning text-dark me-2">IMDB: <?php echo $data->imdbRating; ?></span>
                        <span class="text-muted small italic">Yönetmen: <?php echo $data->Director; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="alert alert-success border-0 shadow-sm text-center p-4">
        <div class="spinner-border text-success mb-3" role="status"></div>
        <p class="mb-0"><strong>Film verileri OMDb API üzerinden yükleniyor...</strong></p>
        <small class="text-muted">API anahtarı aktivasyon süreci devam ediyor olabilir.</small>
    </div>
<?php endif; ?>
    </div>
</main>

<footer class="text-center">
    <div class="container">
        <p class="mb-0 fw-bold">Sakarya Üniversitesi | Web Teknolojileri Projesi &copy; 2026</p>
    </div>
</footer>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>