<?php
session_start();

if(isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // --- KENDİ ÖĞRENCİ NUMARAM ---
    $ogrenciNo = "b251210035"; 
    $dogru_eposta = $ogrenciNo . "@sakarya.edu.tr"; 
    $dogru_sifre = $ogrenciNo; 
    // ------------------------------------------

    if ($email == $dogru_eposta && $password == $dogru_sifre) {
        $_SESSION['user_id'] = $ogrenciNo;
        // Başarı mesajı sayfası gösterilmesi istenmiş
        echo "<script>
                alert('Hoşgeldiniz " . $ogrenciNo . "'); 
                window.location.href='index.php';
              </script>";
        exit();
    } else {
        echo "<script>alert('Hatalı e-posta veya şifre!'); window.location.href='giris.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap | Serra Nur Bektaş</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  <style>
        :root {
            --ana-yesil: #2d5a27; /* Giresun Yeşili */
            --koyu: #212529;
            --arka-plan: #f8f9fa;
        }

        body {
            background-color: var(--arka-plan);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar { 
            background-color: var(--koyu) !important; 
            border-bottom: 4px solid var(--ana-yesil);
        }

        .login-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 0;
        }

        .login-card {
            background: #fff;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
            border-top: 5px solid var(--ana-yesil);
        }

        .form-control:focus {
            border-color: var(--ana-yesil);
            box-shadow: 0 0 0 0.25rem rgba(45, 90, 39, 0.15);
        }

        .btn-login {
            background-color: var(--ana-yesil);
            color: white;
            border-radius: 8px;
            padding: 12px;
            border: none;
            font-weight: 600;
            width: 100%;
            transition: 0.3s;
        }

        .btn-login:hover {
            background-color: var(--koyu);
            color: white;
        }

        .footer-full {
            background-color: var(--koyu);
            color: white;
            border-top: 4px solid var(--ana-yesil);
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">Kişisel Web Sitesi</a>
    </div>
</nav>

<div class="login-container">
    <div class="login-card">
        <div class="text-center mb-4">
            <i class="bi bi-person-circle fs-1 text-success"></i>
            <h3 class="fw-bold mt-2">Sistem Girişi</h3>
            <p class="text-muted small">Lütfen öğrenci e-postanızla giriş yapın.</p>
        </div>

        <form action="giris.php" method="POST" id="loginForm">
            <div class="mb-3">
                <label class="form-label small fw-bold">E-Posta Adresi</label>
                <input type="email" name="email" class="form-control" placeholder="b251210xxx@sakarya.edu.tr" required>
            </div>
            <div class="mb-4">
                <label class="form-label small fw-bold">Şifre</label>
                <input type="password" name="password" class="form-control" placeholder="Öğrenci Numaranız" required>
            </div>
            <button type="submit" class="btn-login">Giriş Yap</button>
        </form>
    </div>
</div>

<footer class="footer-full">
    <div class="container">
        <p class="mb-0 small">Sakarya Üniversitesi | Web Teknolojileri Projesi &copy; 2026</p>
    </div>
</footer>

</body>
</html>