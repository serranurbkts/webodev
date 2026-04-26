<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkında | Web Teknolojileri Projesi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"> [cite: 15]
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">WebProjem</a>
            <div class="navbar-nav">
                <a class="nav-link active" href="index.php">Hakkında</a>
                <a class="nav-link" href="pages/ozgecmis.php">Özgeçmiş</a>
                <a class="nav-link" href="pages/sehrim.php">Şehrim</a>
                <a class="nav-link" href="pages/iletisim.php">İletişim</a>
                <a class="nav-link" href="login.php">Login</a>
            </div>
        </div>
    </nav>

    <main class="container mt-5">
        <section id="hakkinda" class="row">
            <div class="col-md-8">
                <header>
                    <h1>Hoş Geldiniz, Ben [Adın Soyadın]</h1> 
                </header>
                <article class="mt-4">
                    <p>
                        Merhaba! Ben bir mühendislik öğrencisiyim. Bu web sitesi, Web Teknolojileri 
                        dersi kapsamında öğrendiğim standartları sergilemek amacıyla geliştirilmiştir. 
                    </p>
                    <h3>Hobilerim ve Etkinliklerim</h3> 
                    <ul>
                        <li>Yazılım geliştirme ve yeni teknolojileri takip etmek.</li>
                        <li>Doğa yürüyüşleri ve fotoğrafçılık.</li>
                        <li>Strateji oyunları oynamak.</li>
                    </ul>
                </article>
            </div>
            
            <div class="col-md-4"> 
                <div class="card">
                    <img src="img/profil-resmi.jpg" class="card-img-top" alt="Profil Resmim">
                    <div class="card-body">
                        <p class="card-text text-center">Öğrenci No: [Numaran]</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-light text-center py-3 mt-5 border-top">
        <p>&copy; 2026 - Tüm Hakları Saklıdır.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>