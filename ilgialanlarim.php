<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: giris.php");
    exit();
}

// Varsayılan arama terimi (Sayfa ilk açıldığında Human belgeselini getirir)
$searchQuery = "human";

// Eğer arama kutusuna bir şey yazıldıysa onu al
if (isset($_POST['filmAra']) && !empty($_POST['filmAra'])) {
    $searchQuery = $_POST['filmAra'];
}

// TVmaze API URL
$url = "https://api.tvmaze.com/singlesearch/shows?q=" . urlencode($searchQuery);

// Veriyi çekiyoruz (cURL ile )
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response);

//Eğer API cevap vermezse veya sonuç bulunamazsa
if (!$data || !isset($data->name)) {
    $data = (object) [
        'name' => 'Sonuç Bulunamadı',
        'genres' => ['-'],
        'summary' => '<p>Aradığınız isimde bir yapım bulunamadı. Lütfen tekrar deneyiniz.</p>',
        'rating' => (object) ['average' => '-'],
        'image' => (object) ['original' => 'img/human.jpg']
    ];
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İlgi Alanlarım</title>
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

        .search-container {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 15px;
            border: 1px solid #eee;
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
        <h1 class="display-5 fw-bold text-uppercase">İLGİ ALANLARIM</h1>
        <p class="lead text-muted">Benim Perspektifimden Dünyanın Görünmez Bağları</p>
    </div>
</div>

<main class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            <div class="manifesto-box">
                <p class="content-text mb-0 italic">
                    <?php // Senin manifesto metnin ?>
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

            <h3 class="interest-title text-success"><i class="bi bi-search"></i> Belgesel ve Sinema Keşif Alanı</h3>
            <p class="content-text mb-4">
                Sinema ve belgeseller, dünyayı anlamlandırma çabamda en etkileyici rehberlerimden ve yapmayı çok sevdiğim aktivitelerimden biri. Aşağıdaki arama motoru ile ilgi alanlarınıza giren yapımları keşfedebilirsiniz.
                     </p>

            <div class="search-container mb-5 shadow-sm">
                <form method="POST" class="input-group">
                    <input type="text" name="filmAra" class="form-control form-control-lg" placeholder="Belgesel/Dizi adı yazın... (Örn: Human, Cosmos)" required>
                    <button class="btn btn-success px-4" type="submit">
                        <i class="bi bi-search"></i> Keşfet
                    </button>
                </form>
            </div>

            <div class="card mb-5 shadow-sm border-0 bg-light overflow-hidden" style="border-radius: 15px;">
                <div class="row g-0">
                    <div class="col-md-3">

                        <?php 
                        $resim = (isset($data->image->original)) ? $data->image->original : "img/human.jpg";
                        ?>
                        <img src="<?php echo $resim; ?>" class="img-fluid h-100" alt="Afiş" style="object-fit: cover;" onerror="this.src='img/human.jpg';">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body p-4">
                            <h4 class="card-title fw-bold text-dark"><?php echo $data->name; ?></h4>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <?php echo is_array($data->genres) ? implode(', ', $data->genres) : $data->genres; ?> | TVmaze API Verisi
                            </h6>
                            <div class="card-text mt-3 text-secondary">
                                <?php echo $data->summary; ?>
                            </div>
                            <div class="d-flex align-items-center mt-4">
                                <span class="badge bg-warning text-dark me-2">Puan: <?php echo $data->rating->average ?? 'N/A'; ?> / 10</span>
                                <span class="text-muted small italic">Sistem Durumu: Aktif Sorgu</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
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