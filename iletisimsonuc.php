<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: giris.php");
    exit();
}
//Sadece form verilerini kabul eder
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: iletisim.php");
    exit();
}

// Veri Alma
// htmlspecialchars(): XSS saldırılarını önlemek için karakterleri zararsız hale getirir.
//Veri gelmediyse "Belirtilmedi" yazarak hatayı önler.
$adSoyad  = !empty($_POST['adSoyad']) ? htmlspecialchars($_POST['adSoyad']) : "Belirtilmedi";
$eposta   = !empty($_POST['eposta'])  ? htmlspecialchars($_POST['eposta'])  : "Belirtilmedi";
$telefon  = !empty($_POST['telefon']) ? htmlspecialchars($_POST['telefon']) : "Belirtilmedi";
$cinsiyet = isset($_POST['cinsiyet']) ? htmlspecialchars($_POST['cinsiyet']) : "Belirtilmedi";
$mesaj    = (!empty($_POST['mesaj'])) ? htmlspecialchars($_POST['mesaj'])   : "Mesaj belirtilmedi.";
// Checkbox verisi varsa "Onaylandı" yoksa "Onaylanmadı" değişkenini atar.
$kvkk     = isset($_POST['kvkkOnay']) ? "Onaylandı" : "Onaylanmadı";
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Gönderim Özeti</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root { --ana-yesil: #2d5a27; --koyu: #212529; }
        body { background-color: #f4f7f6; font-family: 'Segoe UI', sans-serif; }
        .navbar { background-color: var(--koyu) !important; border-bottom: 4px solid var(--ana-yesil); }
        .card-result { border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.1); border: none; overflow: hidden; }
        .header-custom { background: var(--ana-yesil); color: white; padding: 30px; text-align: center; }
        .table th { background: #f8f9fa; width: 30%; }
        .btn-back { border-radius: 50px; background: var(--ana-yesil); color: white; padding: 10px 30px; text-decoration: none; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container"><a class="navbar-brand fw-bold" href="index.php">Kişisel Web Sitesi</a></div>
</nav>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card card-result bg-white">
                <div class="header-custom">
                    <i class="bi bi-check-circle-fill display-4 mb-2"></i>
                    <h2>Form Başarıyla Kaydedildi</h2>
                </div>
                <div class="card-body p-4">
                    <table class="table table-bordered">
                        <tbody>
                            <tr><th>Ad Soyad</th><td><strong><?php echo $adSoyad; ?></strong></td></tr>
                            <tr><th>E-Posta</th><td><?php echo $eposta; ?></td></tr>
                            <tr><th>Telefon</th><td><?php echo $telefon; ?></td></tr>
                            <tr><th>Cinsiyet</th><td><?php echo $cinsiyet; ?></td></tr>
                            <tr><th>Mesaj</th><td style="white-space: pre-wrap;"><?php echo $mesaj; ?></td></tr>
                            //pre-wrap metnin karışmasını önler
                            <tr><th>KVKK</th><td><?php echo $kvkk; ?></td></tr>
                        </tbody>
                    </table>
                    <div class="text-center mt-4">
                        <a href="iletisim.php" class="btn-back">Forma Geri Dön</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>