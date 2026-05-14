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
    <title>İletişim </title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
   <style>
        :root {
            --giresun-yesili: #2d5a27;
            --koyu-gri: #212529;
            --arka-plan: #fdfdfd;
        }

        body {
            background-color: var(--arka-plan);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .navbar { 
            background-color: var(--koyu-gri) !important; 
            border-bottom: 4px solid var(--giresun-yesili);
        }

        .contact-card {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            border-top: 5px solid var(--giresun-yesili);
        }

        .form-control {
            border-radius: 8px;
            padding: 12px;
            border: 1px solid #eee;
            background-color: #f8f9fa;
        }

        .form-control:focus {
            border-color: var(--giresun-yesili);
            box-shadow: 0 0 0 0.25rem rgba(45, 90, 39, 0.15);
            background-color: #fff;
        }

        .btn-submit {
            background-color: var(--giresun-yesili);
            color: white;
            border-radius: 50px;
            padding: 12px 40px;
            border: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-submit:hover {
            background-color: var(--koyu-gri);
            transform: translateY(-2px);
            color: white;
        }

        .social-link {
            text-decoration: none;
            color: var(--koyu-gri);
            font-weight: 600;
            transition: 0.3s;
            display: inline-block;
            margin-right: 20px;
        }

        .social-link:hover {
            color: var(--giresun-yesili);
        }
    </style>
   <script src="js/vue.global.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">Kişisel Web Sitesi</a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#serraNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="serraNav">
            <div class="navbar-nav ms-auto">
                <a class="nav-link px-3" href="index.php">Anasayfa</a>
                <a class="nav-link px-3" href="ozgecmis.php">Özgeçmiş</a>
                <a class="nav-link px-3" href="sehrim.php">Şehrim</a>
                <a class="nav-link px-3" href="mirasimiz.php">Mirasımız</a>
                <a class="nav-link active px-3 fw-bold" href="iletisim.php">İletişim</a>
                <a class="nav-link" href="ilgialanlarim.php">İlgi Alanlarım</a>
           
            </div>
        </div>
    </div>
</nav>

<main class="container py-5 my-5" id="app">
    <div class="row g-5 align-items-center">
        <div class="col-lg-5">
            <h1 class="display-5 fw-bold mb-4" style="color: var(--koyu-gri);">Benimle İletişime Geçin</h1>
            <p class="lead mb-5 text-muted">Projelerim ve çalışmalarım hakkında görüşlerinizi sunmak ve önerilerde bulunmak için aşağıdaki kanallar yoluyla iletişime geçebilirsiniz. </p>
            
            <div class="mb-4">
                <h6 class="text-uppercase fw-bold text-muted small mb-2">Konum</h6>
                <p class="fs-5 fw-medium"><i class="bi bi-geo-alt-fill text-danger me-2"></i>İstanbul/Türkiye </p>
            </div>
            
            <div class="mb-4">
                <h6 class="text-uppercase fw-bold text-muted small mb-2">E-Posta</h6>
                <p class="fs-5 fw-medium"><i class="bi bi-envelope-at-fill text-primary me-2"></i>serranurr.bekk@gmail.com</p>
            </div>

            <div class="mt-5">
                <h6 class="text-uppercase fw-bold text-muted small mb-3">Diğer Hesaplarım</h6>
                <a href="https://www.linkedin.com/in/serra-nur-bekta%C5%9F-68648b402/" target="_blank" class="social-link"><i class="bi bi-linkedin me-1"></i> LinkedIn</a>
                <a href="https://github.com/serranurbkts/webodev" target="_blank" class="social-link"><i class="bi bi-github me-1"></i> GitHub</a>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="contact-card border-0 shadow">
                <h4 class="fw-bold mb-4">Mesaj Gönder</h4>
                <form action="#" method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            
                           <input type="text" name="ad" id="ad" class="form-control border-0" placeholder="Adınız" v-model="form.ad">
                        </div>
                        <div class="col-md-6 mb-3">
                            
                            <input type="text" name="soyad" id="soyad" class="form-control border-0" placeholder="Soyadınız" v-model="form.soyad">      
                    </div>
                    </div>
                    <div class="mb-3">
                        
                      <input type="email" name="email" id="email" class="form-control border-0" placeholder="E-Posta" v-model="form.email">
                    </div>
                   <div class="mb-4">
    <label class="form-label small fw-bold">Eklemek istediğiniz mesajınız</label>
    <textarea name="mesaj" class="form-control border-0" rows="5" placeholder="Mesajınız" v-model="form.mesaj"></textarea>     
</div>

<div class="d-grid gap-2">
    <button type="button" class="btn btn-primary rounded-pill py-2" onclick="validateWithJS()">
        JS ile Denetle ve Gönder
    </button>
    
    <button type="button" class="btn-submit w-100" @click="validateWithVue">
        Vue.js ile Denetle ve Gönder <i class="bi bi-send-fill ms-2"></i>
    </button>
    
    <button type="reset" class="btn btn-link text-muted btn-sm mt-1 text-decoration-none">
        Formu Temizle
    </button>
</div>
</form>
            </div>
        </div>
    </div>
</main>

<footer style="background-color: #212529; color: white; border-top: 4px solid #2d5a27; width: 100vw; position: relative; left: 50%; right: 50%; margin-left: -50vw; margin-right: -50vw; margin-top: 50px;">
    <div class="container-fluid text-center py-4">
        <p class="mb-0 fw-bold">Sakarya Üniversitesi | Web Teknolojileri Projesi &copy; 2026</p> </div>
</footer>

<script src="js/bootstrap.bundle.min.js"></script>
<script>
// --- 1. KLASİK JAVASCRIPT KONTROLÜ ---
function validateWithJS() {
    const ad = document.getElementById('ad').value;
    const email = document.getElementById('email').value;
    
    if (ad === "" || email === "") {
        alert("Klasik JS Hatası: Ad ve Email boş bırakılamaz!");
    } else if (!email.includes("@")) {
        alert("Klasik JS Hatası: Geçersiz e-posta formatı!");
    } else {
        alert("Klasik JS Başarılı! Form gönderiliyor...");
        document.getElementById('contactForm').submit();
    }
}

// --- 2. VUE.JS KONTROLÜ ---
const { createApp } = Vue;
createApp({
    data() {
        return {
            form: {
                ad: '',
                soyad: '',
                email: '',
                mesaj: ''
            }
        }
    },
    methods: {
        validateWithVue() {
            if (!this.form.ad || !this.form.soyad || !this.form.email) {
                alert("Vue.js Uyarısı: Lütfen tüm alanları doldurun!");
            } else if (!this.form.email.includes('.')) {
                alert("Vue.js Uyarısı: Email adresi bir nokta (.) içermelidir!");
            } else {
                alert("Vue.js Başarılı! PHP sayfasına yönlendiriliyorsunuz...");
                document.getElementById('contactForm').submit();
            }
        }
    }
}).mount('#app');
</script>
</body>
</html>