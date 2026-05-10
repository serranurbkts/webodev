<?php
// Formdan gelen verileri alıyoruz
$email = $_POST['email'];
$password = $_POST['password'];

// Kullanıcı adı: g251210001@sakarya.edu.tr (Örnektir, kendi numaranı yazabilirsin)
// Şifre: g251210001 (Genelde numaranın kendisi istenir)

// Basit bir doğrulama mantığı:
// 1. E-posta boş mu?
// 2. Şifre doğru mu?

if ($email == "g251210001@sakarya.edu.tr" && $password == "g251210001") {
    // Giriş başarılıysa kullanıcıyı hoşgeldin sayfasına yönlendiriyoruz
    // Buradaki 'g251210001' kısmını e-postadan çekip dinamik de yapabiliriz
    echo "<script>alert('Hoşgeldiniz g251210001'); window.location.href='index.html';</script>";
} else {
    // Giriş hatalıysa uyarı verip tekrar login sayfasına gönderiyoruz
    echo "<script>alert('Hatalı kullanıcı adı veya şifre!'); window.location.href='login.html';</script>";
}
?>