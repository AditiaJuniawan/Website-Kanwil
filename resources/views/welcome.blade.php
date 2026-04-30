<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanwil Ditjenpas Banten</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="images/logopas.png" rel="shortcut icon">
</head>
<body>

    <header class="header">
        <div class="container header-container">
            <a href="#">
            <div class="logo">
                
                <img src="{{ asset('images/logokementerian.png') }}">
                <h2>DITJENPAS<span>BANTEN</span></h2>
                
            </div>
            </a>
            <nav class="navbar">
                <a href="#">Beranda</a>
                <a href="#">Tentang Kami</a>
                <a href="#">Layanan</a>
                <a href="#">Berita</a>
                <a href="#">Kontak</a>
                <a href="https://wa.me/6282266662055" class="btn-pengaduan" target="_blank">Pengaduan</a>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container hero-content">
            <h1>Selamat Datang di Website<br>Kantor Wilayah Direktorat Jenderal Pemasyarakatan banten</h1>
            <p>Berkomitmen menghadirkan pelayanan pemasyarakatan yang profesional, transparan, dan berintegritas.</p>
            <a href="#" class="btn-primary">Lihat Lebih Detail</a>
        </div>
    </section>

    <section class="layanan container">
        <h2 class="section-title">Inovasi Layanan</h2>
        <div class="grid-layanan">
            <div class="card-layanan">
                <h3>Layanan Pengaduan</h3>
                <p>Pelayanan Terpadu Mengenai Pengaduan</p>
            </div>
            <div class="card-layanan">
                <h3>Layanan Informasi</h3>
                <p>Pelayanan Terpadu Informasi </p>
            </div>
            <div class="card-layanan">
                <h3>Peneliatian / Peliputan</h3>
                <p>Pelajanan Izin melakukan Penelitian / Peliputan</p>
            </div>
            
        </div>
    </section>

    <section class="berita">
        <div class="container">
            <h2 class="section-title">Kabar Terkini</h2>
            <div class="grid-berita">
                <div class="card-berita">
                    <div class="gambar-berita"></div>
                    <div class="konten-berita">
                        <span class="tanggal">26 Februari 2026</span>
                        <h4>Optimalkan Reintegrasi Sosial, Evaluasi Bapas Karangasem</h4>
                        <a href="#">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="card-berita">
                    <div class="gambar-berita"></div>
                    <div class="konten-berita">
                        <span class="tanggal">3 Maret 2026</span>
                        <h4>Persembahyangan Purnama, Momentum Penguatan Nilai Spiritual</h4>
                        <a href="#">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="card-berita">
                    <div class="gambar-berita"></div>
                    <div class="konten-berita">
                        <span class="tanggal">28 Februari 2026</span>
                        <h4>Perkuat Layanan Kesehatan, Tinjau Akreditasi Klinik Rutan</h4>
                        <a href="#">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container footer-grid">
            <div>
                <h3>Kanwil Ditjenpas Banten</h3>
                <p> Jl. Brigjen KH Samun, Kotabaru, Kec. Serang, Kota Serang, Banten 42112 <br>Senin - Jumat 09.00 - 15:00</p>
            </div>
            <div>
                <h3>Link Terkait</h3>
                <ul>
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Layanan</a></li>
                    <li><a href="#">Berita</a></li>
                </ul>
            </div>
            <div class="footerlink">
                <h3>Kontak</h3>
                <a href="https://wa.me/6282266662055" target="_blank">082266662055</a>
                <br><a href="mailto:Djpasbanten@gmail.com" >Djpasbanten@gmail.com</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Kanwil Ditjenpas Banten. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>