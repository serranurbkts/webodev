<?php
session_start();

// Güvenlik: Eğer bu sayfaya form gönderilmeden direkt girilirse geri at
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: iletisim.php");
    exit();
}

// Formdan gelen verileri değişkenlere atayalım
// htmlspecialchars kullanarak güvenlik (XSS) önlemi alıyoruz
$ad = htmlspecialchars($_POST['ad'] ?? '');
$soyad = htmlspecialchars($_POST['soyad'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$mesaj = htmlspecialchars($_POST['mesaj'] ?? '');
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim Sonucu</title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .result-card {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-top: 50px;
            border-top: 5px solid #2d5a27;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 result-card">
            <h2 class="text-success fw-bold mb-4 text-center">Mesajınız Alındı!</h2>
            <p class="lead text-center text-muted mb-5">Formdan gönderdiğiniz bilgiler aşağıdadır:</p>

            <table class="table table-striped table-bordered">
                <tr>
                    <th width="30%">Adınız:</th>
                    <td><?php echo $ad; ?></td>
                </tr>
                <tr>
                    <th>Soyadınız:</th>
                    <td><?php echo $soyad; ?></td>
                </tr>
                <tr>
                    <th>E-Posta:</th>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <th>Mesajınız:</th>
                    <td><?php echo nl2br($mesaj); ?></td>
                </tr>
            </table>

            <div class="text-center mt-5">
                <a href="index.php" class="btn btn-dark px-5 py-2 rounded-pill">Anasayfaya Dön</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>