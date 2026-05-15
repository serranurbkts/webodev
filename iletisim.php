<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: giris.php");
    exit();
}

$mesaj_sonuc = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adSoyad = htmlspecialchars($_POST['adSoyad']);
    $eposta = htmlspecialchars($_POST['eposta']);
    $telefon = htmlspecialchars($_POST['telefon']);
    $cinsiyet = isset($_POST['cinsiyet']) ? $_POST['cinsiyet'] : "Belirtilmemiş";
    $kvkk = isset($_POST['kvkkOnay']) ? true : false;
    $kullanici_mesaji = htmlspecialchars($_POST['mesaj']);

    if (!$kvkk) {
        $mesaj_sonuc = "<div class='alert alert-danger shadow-sm'>Lütfen KVKK metnini onaylayınız.</div>";
    } else {
        // Form başarıyla PHP'ye ulaştı
        $mesaj_sonuc = "<div class='alert alert-success shadow-sm'>
            <strong>Başarılı!</strong> Mesajınız PHP tarafına ulaştı.<br>
            İsim: $adSoyad | Tel: $telefon
        </div>";
    }
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
    <script src=js/vue.global.js></script>
    <style>
        :root { --giresun-yesili: #2d5a27; --koyu-gri: #212529; --arka-plan: #fdfdfd; }
        body { background-color: var(--arka-plan); font-family: 'Segoe UI', Tahoma, sans-serif; }
        .navbar { background-color: var(--koyu-gri) !important; border-bottom: 4px solid var(--giresun-yesili); }
        .contact-card { background: white; border-radius: 20px; padding: 40px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); border-top: 6px solid var(--giresun-yesili); }
        .form-label { font-weight: 600; color: #444; }
        .form-control { border-radius: 10px; padding: 12px; border: 1px solid #ddd; transition: 0.3s; }
        .form-control:focus { border-color: var(--giresun-yesili); box-shadow: 0 0 0 0.25rem rgba(45,90,39,0.1); }
        .sidebar-info { background: #fff; padding: 30px; border-radius: 20px; box-shadow: 0 5px 15px rgba(0,0,0,0.03); }
        .social-btn { transition: 0.3s; text-decoration: none; display: flex; align-items: center; padding: 10px; border-radius: 10px; margin-bottom: 10px; }
        .social-btn.li { background: #e7f1ff; color: #0a66c2; }
        .social-btn.gh { background: #f6f8fa; color: #24292f; }
        .social-btn:hover { transform: translateX(5px); filter: brightness(0.95); }
        footer { background: var(--koyu-gri); color: white; padding: 25px 0; border-top: 4px solid var(--giresun-yesili); margin-top: 60px; }
    .required-label::after {
    content: " *";
    color: #dc3545; /* Kırmızı renk */
    font-weight: bold;
}
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">Kişisel Web Sitesi</a>
        <div class="navbar-nav ms-auto">
             <a class="nav-link active fw-bold" href="index.php">Anasayfa</a>
                <a class="nav-link" href="ozgecmis.php">Özgeçmiş</a>
                <a class="nav-link" href="sehrim.php">Şehrim</a>
                <a class="nav-link" href="mirasimiz.php">Mirasımız</a>
                <a class="nav-link" href="iletisim.php">İletişim</a>
                <a class="nav-link" href="ilgialanlarim.php">İlgi Alanlarım</a>
             </div>
    </div>
</nav>

<main class="container py-5" id="app">
    <div class="row g-5">
        <div class="col-lg-4">
            <div class="sidebar-info h-100">
                <h2 class="fw-bold mb-4">İletişime Geç</h2>
                <p class="text-muted mb-5">Öneri, görüş veya projelerim hakkında bilgi almak için formu doldurarak benimle iletişime geçebilirsiniz.</p>
                
                <div class="mb-4 d-flex align-items-center">
                    <div class="icon-box bg-light p-3 rounded-circle me-3"><i class="bi bi-geo-alt text-success"></i></div>
                    <div><h6 class="mb-0 fw-bold">Konum</h6><small class="text-muted">İstanbul/Türkiye</small></div>
                </div>

                <div class="mb-5 d-flex align-items-center">
                    <div class="icon-box bg-light p-3 rounded-circle me-3"><i class="bi bi-envelope text-success"></i></div>
                    <div><h6 class="mb-0 fw-bold">E-Posta</h6><small class="text-muted">serra.bektas@sakarya.edu.tr</small></div>
                </div>

                <h6 class="text-uppercase fw-bold text-muted small mb-3">Sosyal Medya</h6>
                <a href="https://www.linkedin.com/feed/" target="_blank" class="social-btn li">
                    <i class="bi bi-linkedin fs-4 me-3"></i> <strong>LinkedIn'de Bağlan</strong>
                </a>
                <a href="https://github.com/serranurbkts" target="_blank" class="social-btn gh">
                    <i class="bi bi-github fs-4 me-3"></i> <strong>GitHub'da İncele</strong>
                </a>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="contact-card">
                <h3 class="fw-bold mb-4">Mesaj Formu</h3>
                <?php echo $mesaj_sonuc; ?>
<form id="contactForm" action="iletisimsonuc.php" method="POST">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label required-label">Ad Soyad</label>
            <input type="text" name="adSoyad" id="adSoyad" v-model="form.adSoyad" class="form-control" placeholder="Adınız Soyadınız">
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label required-label">E-Posta</label>
            <input type="email" name="eposta" id="eposta" v-model="form.email" class="form-control" placeholder="ornek@mail.com">
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label required-label">Telefon</label>
        <input type="tel" name="telefon" id="telefon" v-model="form.telefon" class="form-control" placeholder="05xx xxx xx xx">
    </div>

    <div class="mb-3">
        <label class="form-label required-label d-block">Cinsiyet</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="cinsiyet" value="Erkek" v-model="form.cinsiyet" id="erkek">
            <label class="form-check-label" for="erkek">Erkek</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="cinsiyet" value="Kadın" v-model="form.cinsiyet" id="kadin">
            <label class="form-check-label" for="kadin">Kadın</label>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Mesajınız (İsteğe Bağlı)</label>
        <textarea name="mesaj" id="mesaj" v-model="form.mesaj" class="form-control" rows="4"></textarea>
    </div>

    <div class="mb-4 form-check">
        <input type="checkbox" name="kvkkOnay" class="form-check-input" id="kvkk">
        <label class="form-check-label small" for="kvkk"><b>KVKK metnini okudum, onaylıyorum. *</b></label>
    </div>
    <div class="alert alert-light border-0 shadow-sm mb-4" style="background-color: #fcfcfc; border-left: 4px solid var(--ana-yesil) !important;">
    <h6 class="fw-bold text-success mb-2">KVKK Aydınlatma Metni</h6>
    <p class="small text-muted mb-0">
        Bu form üzerinden paylaştığınız kişisel veriler, 6698 sayılı KVKK kapsamında sadece bu web projesi örneği için işlenmekte olup, üçüncü taraflarla paylaşılmamaktadır. Gönder butonuna basarak bu verilerin işlenmesini kabul etmiş sayılırsınız.
    </p>
</div>

    <div class="row g-3">
        <div class="col-md-6">
            <button type="button" onclick="validateNativeJS()" class="btn btn-outline-dark w-100 btn-custom">Native JS ile Gönder</button>
        </div>
        <div class="col-md-6">
            <button type="button" @click="validateWithVue" class="btn btn-success w-100 btn-custom">Vue.js ile Gönder</button>
        </div>
    </div>
</form>

<script>
// --- NATIVE JS KONTROLÜ --- Tarayıcı özelliklerine bağlı kalmadan manuel kontrolü sağlar
function validateNativeJS() {
    //DOM üzerinden input verilerine erişim
    const ad = document.getElementById('adSoyad').value.trim();
    const eposta = document.getElementById('eposta').value.trim();
    const tel = document.getElementById('telefon').value.trim();
    const kvkk = document.getElementById('kvkk').checked;
    
    // Cinsiyet kontrolü (Radyo buton olduğu için özel kontrol gerekir)
    const cinsiyetErkek = document.getElementById('erkek').checked;
    const cinsiyetKadin = document.getElementById('kadin').checked;

    // HATA KONTROLÜ: Eğer boşsa uyarı ver ve dur
    if (ad === "" || eposta === "" || tel === "" || (!cinsiyetErkek && !cinsiyetKadin) || !kvkk) {
        alert("HATA: Lütfen mesaj dışındaki tüm zorunlu alanları doldurun ve KVKK'yı onaylayın!");
        return false;//Gönderimi durdur
    }

    // her şey tamamsa formu gönder
    document.getElementById('contactForm').submit();
}

// --- VUE.JS KONTROLÜ ---
// Vue.js kütüphanesinden "createApp" fonksiyonunu çekiyoruz
const { createApp } = Vue;

createApp({
    // data(): Sayfadaki form elemanları ile eşleşecek verilerin tanımlandığı yerdir.
    // HTML tarafındaki v-model="form.adSoyad" ifadesi buradaki değişkenle senkronize çalışır.
    data() {
        return {
            form: { 
                adSoyad: '', 
                email: '', 
                telefon: '', 
                cinsiyet: '', 
                mesaj: '' 
            }
        }
    },
    // methods: Sayfa üzerindeki olayların (tıklama vb.) tetikleyeceği fonksiyonları içerir.
    methods: {
        /**
         * v-on:click veya @click ile tetiklenen doğrulama fonksiyonu.
         * Vue'nun sunduğu reaktif veri yapısını kullanarak kontrol sağlar.
         */
        validateWithVue() {
            // KVKK checkbox'ı v-model ile bağlı değilse manuel DOM kontrolü yapılır
            const isKvkkChecked = document.getElementById('kvkk').checked;
            
            // "this.form" üzerinden anlık girilen verilere erişilir.
            if (!this.form.adSoyad || !this.form.email || !this.form.telefon || !this.form.cinsiyet || !isKvkkChecked) {
                alert("Vue.js Mesajı: Lütfen tüm zorunlu alanları eksiksiz doldurunuz!");
            } 
            // Regex yerine basit e-posta kontrolü (@ işareti )
            else if (!this.form.email.includes('@')) {
                alert("Vue.js Mesajı: Geçerli bir e-posta formatı giriniz!");
            }
            else {
                // Her şey başarılıysa JavaScript'in submit() metoduyla PHP sayfasına post edilir.
                alert("Vue.js Doğrulaması Başarılı! Veriler işlenmek üzere PHP'ye gönderiliyor...");
                document.getElementById('contactForm').submit();
            }
        },
        // Formu temizlemek için kullanılan yardımcı metod.
        resetForm() {
            this.form = { adSoyad: '', email: '', telefon: '', cinsiyet: '', mesaj: '' };
        }
    }
// id="app" olan HTML elementine bu Vue nesnesini bağlıyoruz (mount ediyoruz).
}).mount('#app');
</script>
<footer>
    <div class="container text-center">
        <p class="mb-0 fw-bold">Sakarya Üniversitesi | Web Teknolojileri Projesi &copy; 2026</p>
    </div>
</footer>

<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>