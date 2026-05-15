/**
 * FORM DOĞRULAMA SİSTEMİ
 * Bu script, form gönderilmeden önce kullanıcı hatalarını yakalar.
 */

document.addEventListener("DOMContentLoaded", function() {
    const contactForm = document.getElementById("contactForm");

    if (contactForm) {
        contactForm.addEventListener("submit", function(event) {
            // Form elemanlarını alalım
            const ad = document.getElementById("ad").value.trim();
            const soyad = document.getElementById("soyad").value.trim();
            const email = document.getElementById("email").value.trim();
            const mesaj = document.getElementById("mesaj").value.trim();
            const cinsiyet = document.querySelector('input[name="cinsiyet"]:checked');

            // 1. Boş Alan Kontrolü
            if (!ad || !soyad || !email || !mesaj || !cinsiyet) {
                alert("Lütfen tüm alanları doldurunuz!");
                event.preventDefault(); // Formun gönderilmesini engelle
                return false;
            }

            // 2. E-posta Format Kontrolü (Regex)
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert("Lütfen geçerli bir e-posta adresi giriniz!");
                event.preventDefault();
                return false;
            }

            // Her şey yolundaysa form gönderilir
            console.log("Form doğrulama başarılı, gönderiliyor...");
        });
    }
});

/**
 * API SAYFASI İÇİN EKSTRA FONKSİYONLAR
 * Görsel hatalarını terminale loglama veya dinamik efektler buraya eklenebilir.
 */
function handleImageError(image) {
    console.warn("Resim yüklenemedi, yedek resim devreye giriyor: " + image.src);
}