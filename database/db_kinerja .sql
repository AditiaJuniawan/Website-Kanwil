-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2025 at 03:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kinerja`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `absen_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `tanggal_out` varchar(20) DEFAULT NULL,
  `lokasi_id` int(11) DEFAULT NULL,
  `jam_kerja_id` int(11) DEFAULT NULL,
  `jam_kerja_in` varchar(20) DEFAULT NULL,
  `jam_kerja_toleransi` varchar(20) DEFAULT NULL,
  `jam_kerja_out` varchar(20) DEFAULT NULL,
  `absen_in` time NOT NULL,
  `absen_out` varchar(50) DEFAULT NULL,
  `foto_in` varchar(150) DEFAULT NULL,
  `foto_out` varchar(150) DEFAULT NULL,
  `status_masuk` varchar(30) DEFAULT NULL,
  `status_pulang` varchar(30) DEFAULT NULL,
  `kehadiran` varchar(20) DEFAULT NULL,
  `latitude_longtitude_in` varchar(150) DEFAULT NULL,
  `latitude_longtitude_out` varchar(150) DEFAULT NULL,
  `radius` varchar(10) DEFAULT NULL,
  `radius_out` varchar(10) DEFAULT NULL,
  `tipe` varchar(10) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `status` enum('DEFAULT','IN','OUT') DEFAULT 'DEFAULT'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`absen_id`, `user_id`, `tanggal`, `tanggal_out`, `lokasi_id`, `jam_kerja_id`, `jam_kerja_in`, `jam_kerja_toleransi`, `jam_kerja_out`, `absen_in`, `absen_out`, `foto_in`, `foto_out`, `status_masuk`, `status_pulang`, `kehadiran`, `latitude_longtitude_in`, `latitude_longtitude_out`, `radius`, `radius_out`, `tipe`, `keterangan`, `status`) VALUES
(46, 4, '2025-06-25', '', 2, 1, '02:00:00', '02:30:00', '06:00:00', '21:27:02', '', NULL, 'out_4_20250625_213055_685c081fe4758.png', 'Terlambat', 'Tepat Waktu', 'Hadir', '-6.170214, 106.722099', '-6.170214, 106.722099', '0', '0', 'qrcode', NULL, 'IN');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) DEFAULT NULL,
  `avatar` varchar(150) NOT NULL,
  `registrasi_date` date NOT NULL,
  `tanggal_login` datetime NOT NULL,
  `time` datetime NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `level` int(11) DEFAULT 0,
  `cabang_id` int(11) DEFAULT 0,
  `ip` varchar(40) DEFAULT NULL,
  `browser` varchar(40) DEFAULT NULL,
  `active` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `fullname`, `username`, `phone`, `email`, `password`, `avatar`, `registrasi_date`, `tanggal_login`, `time`, `status`, `level`, `cabang_id`, `ip`, `browser`, `active`) VALUES
(1, 'Coki Widodo', 'Widodo', '089666665781', 'swidodo.com@gmail.com', '$2y$10$PAMb/jASZhaD6UC7fLMRw.eIeNBqUkoHzZEfmKxi6qHQBnZhBAbb2', 'avatar-widodo-1748807258jpg', '2022-03-22', '2025-06-26 00:09:17', '2025-06-26 00:09:17', 'Offline', 1, 0, '1', 'Google Crome', 'Y'),
(4, 'admin', 'admin', NULL, 'admin@gmail.com', '$2y$10$m2ywFYdEYwPSZJ6fC3k2xuhCzd0wnftXciAQdeoAYlENMVQLlrt6u', '', '2025-08-06', '2025-08-06 08:56:45', '2025-08-06 08:56:45', 'Online', 1, 0, '1', NULL, 'Y'),
(6, 'Intan Permata sari', 'Intan', '089666665781', 'intanpermatasari@gmail.com', '$2y$10$lIKR1cqN8kNusBU45zqvAuINgD.g9X3/2rDBC6qvjT4oejy1jP53S', 'avatar.jpg', '2022-12-01', '2022-12-03 10:22:26', '2024-02-05 13:38:56', 'Offline', 3, NULL, '::1', 'Google Chrome 107.0.0.0', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `artikel_id` int(11) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `domain` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(150) NOT NULL,
  `kategori` varchar(40) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `statistik` varchar(10) NOT NULL,
  `active` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `penerbit`, `judul`, `domain`, `deskripsi`, `foto`, `kategori`, `time`, `date`, `statistik`, `active`) VALUES
(2, 'Widodo', 'Aplikasi Absensi Siswa Dengan Notifikasi ke Orang Tua Berbasis Web', 'aplikasi-absensi-siswa-dengan-notifikasi-ke-orang-tua-berbasis-web', '<p><span class=\"yt-core-attributed-string--link-inherit-color\" dir=\"auto\">Halo, Bapak/Ibu Guru dan Sobat Pendidikan! 📢 Pernah repot dengan absensi manual yang memakan waktu? Kini saatnya beralih ke AbsenSiswa! ✅ Solusi absensi digital yang cepat, akurat, dan anti-kecurangan. Pantau kehadiran siswa secara real-time dengan mudah! 🚀📊 Yuk, kenali fitur lengkapnya sekarang! </span><span class=\"yt-core-attributed-string--link-inherit-color\" dir=\"auto\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/hashtag/absensiswa\" target=\"\">#AbsenSiswa</a></span> <span class=\"yt-core-attributed-string--link-inherit-color\" dir=\"auto\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/hashtag/absensidigital\" target=\"\">#AbsensiDigital</a></span><span class=\"yt-core-attributed-string--link-inherit-color\" dir=\"auto\">\" Untuk Harga dan Pemesanan bisa langsung hub </span><span class=\"yt-core-attributed-string--link-inherit-color\" dir=\"auto\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbnhKOFN2YjVqcEJYOE9aQzZWaTRWWkllYnB1UXxBQ3Jtc0trV1Z0WDJXTVFPRXM5a29qSkdXb1JsQURjNE9STDVleHVZQU16cjZCMEZjT0dKZmtWSmV5akZDMDZfSDV1bVNIQTd2RDU3M05TSlBwYU16WEtzVGp6cU9RTXMteHRUcy13TDE3eVlwRzc2UmZQbEYwaw&amp;q=https%3A%2F%2Fwa.me%2F62083160901108&amp;v=IFpfp62F9_Y\" target=\"_blank\" rel=\"nofollow noopener\">https://wa.me/62083160901108</a></span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\" dir=\"auto\"><iframe title=\"YouTube video player\" src=\"//www.youtube.com/embed/IFpfp62F9_Y?si=8FvO1EbsfZVwP4pI\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></span></p>', 'file_685c28e93a19d9.58068809.jpg', 'berita', '16:53:10', '2022-11-29', '12', 'Y'),
(3, 'Widodo', 'Aplikasi Absensi V.5 Absen dengan Selfie Recognition &amp; QRCODE Radius', 'aplikasi-absensi-v5-absen-dengan-selfie-recognition-amp-qrcode-radius', '<div class=\"more_lessx\">\r\n<p>Aplikasi Absensi Online Berbasis Foto Selfie Recognition dan QRCODE. Website ini dibangun menggunakan framework bootstrap dan PHP (MYSQLi). Sekilas cara kerjanya dengan merekam absen menggunakan verifikasi foto selfie recognition dan QRCODE, serta mendetek lokasi pengguna saat mengisi absensi online. Pengguna hanya boleh melakukan absen masuk dan absen pulang 1 kali perhari di jam kerja nya.</p>\r\n<ins class=\"adsbygoogle\" data-ad-layout=\"in-article\" data-ad-format=\"fluid\" data-ad-client=\"ca-pub-9864620178233492\" data-ad-slot=\"8776392112\" data-adsbygoogle-status=\"done\" data-ad-status=\"unfilled\"></ins>\r\n<p>Di versi ke 5 ini Foto Selfienya sudah menggunakan Recognition dan&nbsp; Menggunakan QRCODE sebagai pengganti jadi ada 2 pilihan Tipe Absenya.</p>\r\n<p>- FREE Biaya Ongkos Kirim<br>- Dapat Source Kode dan Databasenya<br>- Lisensi Dijamin ORIGINAL Garansi Uang Kembali 100%<br>- BARANG SELALU READY<br>- TANPA ONGKOS KIRIM<br>- PRODUK ORIGINAL 100%</p>\r\n<p><br><strong>FITUR UNGGULAN</strong></p>\r\n<ol>\r\n<li>Absensi dengan foto wajah sudah menggunakan Recognition</li>\r\n<li>Absen Menggunakan QRCODE untuk pilihan ke 2</li>\r\n<li>Lokasi Radiusnya bias di aktifinkan dan non aktifkan</li>\r\n<li>Terdapat Api Notifikasi WhatsApp</li>\r\n<li>Absen masuk &amp; absen pulang</li>\r\n<li>Deteksi lokasi pengguna (geolocation)</li>\r\n<li>Laporan Absensi Lengkap</li>\r\n<li>Manajemen jam</li>\r\n<li>Fitur login dengan akun google</li>\r\n<li>Pengajuan Cuti</li>\r\n<li>Hadir, Izin, Sakit</li>\r\n<li>Terdapat Slider foto/untuk promo</li>\r\n<li>Terdapat Artikel/Informasi</li>\r\n<li>Terdapat Live Chat ke Admin</li>\r\n</ol>\r\n<p><br><strong>FITUR UMUM</strong><br>- Landing page &amp; web responsive<br>- Mudah di gunakan dan aplikasi ringan<br>- Rekap laporan berdasarkan bulan, Tanggal dan Hari<br>- Laporan absen dalam PDF, Excel dan Print<br>- Fitur print laporan langsung ke printer</p>\r\n<p>- Kelebihan Script / Source Code :<br>- Bersifat selamanya tanpa batas waktu<br>- Panduan Instalasi Lengkap<br>- Installasi Sangat Mudah<br>- Tidak akan di Banned<br>- Bisa Offline maupun Online<br>- Tidak boleh dijual kembali<br>- Tampilan Bisa di edit atau di custom sesuai yang dibutuhkan<br>- Konsultasi Free<br><br></p>\r\n<p><strong>DEMO APLIKASI</strong></p>\r\n<p><strong>Pegawai/User:</strong><br>- Url : https://absensiv5.s-widodo.com<br>- Email : swidodo.com@gmail.com<br>- Password : 123456</p>\r\n<p><strong>Admin</strong><br>-&nbsp;<a href=\"https://absensiv5.s-widodo.com/sw-admin\">https://absensiv5.s-widodo.com/sw-admin</a><br>- User : Widodo<br>- Password : 123456</p>\r\n<p><br><br><strong>UPDATE ICON TIDAK TAMPIL SILAHKAN DOWNLOAD LINK DIBAWAH INI</strong></p>\r\n<p><a title=\"DOWNLOAD\" href=\"https://drive.google.com/file/d/1PNxh960XAf2j7Dkdm2yRB6q6hMK6FW7J/view?usp=drive_link\" target=\"_blank\" rel=\"noopener\"><strong>Download</strong></a></p>\r\n<p><strong>*Bagi yang sudah order</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>*PRODUK ORIGINAL DIBUAT OLEH S-WIDODO.COM</strong></p>\r\n</div>', 'file_685c28bbef8856.56859555.jpg', 'berita', '10:41:55', '2022-11-30', '54', 'Y'),
(4, 'Coki Widodo', 'Aplikasi Absensi Siswa Dengan Scan Qrcode/Barcode V.1', 'aplikasi-absensi-siswa-dengan-scan-qrcodebarcode-v1', '<p><a class=\"google-anno\" href=\"https://s-widodo.com/product/19-aplikasi-absensi-siswa-dengan-scan-qrcodebarcode-v1.html#\" data-google-vignette=\"false\" data-google-interstitial=\"false\">&nbsp;<span class=\"google-anno-t\">Aplikasi</span></a>&nbsp;ini merecord absensi menggunakan QR CODE yang bisa di download oleh siswa beserta ID CARDnya. sudah support di Semua HP, Laptop dan bisa pakai Mesin&nbsp;<a class=\"google-anno\" href=\"https://s-widodo.com/product/19-aplikasi-absensi-siswa-dengan-scan-qrcodebarcode-v1.html#\" data-google-vignette=\"false\" data-google-interstitial=\"false\">&nbsp;<span class=\"google-anno-t\">scanner</span></a><br>.<br><br><strong>*SEMUA PRODUK FULL SOURCE CODE YA BISA LANGSUNG DIGUNAKAN</strong><br><br></p>\r\n<ul>\r\n<li><span data-preserver-spaces=\"true\">Dapat Source Kode dan Databasenya</span></li>\r\n<li><span data-preserver-spaces=\"true\">Lisensi Dijamin ORIGINAL Garansi Uang Kembali 100%</span></li>\r\n<li><span data-preserver-spaces=\"true\">BARANG SELALU READY</span></li>\r\n<li><span data-preserver-spaces=\"true\">PRODUK ORIGINAL 100%</span></li>\r\n</ul>\r\n<p><strong>FITUR UNGGULA</strong></p>\r\n<ul>\r\n<li><span data-preserver-spaces=\"true\">Tampilan Sudah Respoonsive</span></li>\r\n<li><span data-preserver-spaces=\"true\">Absen Scan qrcode menggunakan Hp, Laptop atau Mesin Scanner</span></li>\r\n<li><span data-preserver-spaces=\"true\">Mudah di Operasikan</span></li>\r\n<li><span data-preserver-spaces=\"true\">Terdapat ID Card yang bisa diubah Oleh siswa maupun Admin</span></li>\r\n<li><span data-preserver-spaces=\"true\">Terdapat Geo Location Absen masuk mencatat lokasi titik absen</span></li>\r\n<li><span data-preserver-spaces=\"true\">Memiliki Fitur Login Google</span></li>\r\n<li><span data-preserver-spaces=\"true\">Memiiliki Fitur Notifikasi WhatsApp ke Wali Murid/Siswa</span></li>\r\n<li><span data-preserver-spaces=\"true\">Laporan Lengkap per hari, siswa maupun bulan dengan output PDF, EXCEL dan PRINT</span></li>\r\n<li><span data-preserver-spaces=\"true\">Memiliki Fitur Izin dengan Approve Guru atau Admin</span></li>\r\n<li><span data-preserver-spaces=\"true\">Support PHP Versi 7.4</span></li>\r\n<li><span data-preserver-spaces=\"true\">Memiliki Radius Lokasi</span></li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<div id=\"aswift_1_host\"><iframe id=\"aswift_1\" tabindex=\"0\" title=\"Advertisement\" src=\"https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-9864620178233492&amp;output=html&amp;h=183&amp;slotname=8776392112&amp;adk=1194630350&amp;adf=2803266164&amp;pi=t.ma~as.8776392112&amp;w=730&amp;abgtt=6&amp;fwrn=4&amp;lmt=1742000165&amp;rafmt=11&amp;format=730x183&amp;url=https%3A%2F%2Fs-widodo.com%2Fproduct%2F19-aplikasi-absensi-siswa-dengan-scan-qrcodebarcode-v1.html&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTkuMC4wIiwieDg2IiwiIiwiMTM0LjAuNjk5OC44OSIsbnVsbCwwLG51bGwsIjY0IixbWyJDaHJvbWl1bSIsIjEzNC4wLjY5OTguODkiXSxbIk5vdDpBLUJyYW5kIiwiMjQuMC4wLjAiXSxbIkdvb2dsZSBDaHJvbWUiLCIxMzQuMC42OTk4Ljg5Il1dLDBd&amp;dt=1742000165348&amp;bpp=1&amp;bdt=403&amp;idt=115&amp;shv=r20250312&amp;mjsv=m202503130101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3Df224fe6f6d255e66%3AT%3D1730436363%3ART%3D1742000160%3AS%3DALNI_MYYMEXP2UdT586N_zS4X_sU7Xc1uA&amp;gpic=UID%3D00000f49832daf32%3AT%3D1730436363%3ART%3D1742000160%3AS%3DALNI_MYSp3REtreyD8M0nBXOjCeHduaFYw&amp;eo_id_str=ID%3Daf23020dfda5e9bc%3AT%3D1730436363%3ART%3D1742000160%3AS%3DAA-AfjZxApCm2sA4vbeTJeiOqK1L&amp;prev_fmts=0x0&amp;nras=1&amp;correlator=5183522587339&amp;frm=20&amp;pv=1&amp;rplot=4&amp;u_tz=420&amp;u_his=3&amp;u_h=1080&amp;u_w=1920&amp;u_ah=1032&amp;u_aw=1920&amp;u_cd=24&amp;u_sd=1&amp;dmc=8&amp;adx=400&amp;ady=1958&amp;biw=1910&amp;bih=911&amp;scr_x=0&amp;scr_y=0&amp;eid=31089628%2C31091052%2C95332590%2C95354310%2C95354338%2C95354598%2C31091039%2C31088250%2C31090357%2C95352178&amp;oid=2&amp;pvsid=4476553562543792&amp;tmod=1486444475&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fs-widodo.com%2Fproduct&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C1920%2C0%2C1920%2C1032%2C1920%2C911&amp;vis=1&amp;rsz=%7C%7CpoeEbr%7C&amp;abl=CS&amp;pfx=0&amp;fu=128&amp;bc=31&amp;bz=1&amp;td=1&amp;tdf=2&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=2&amp;uci=a!2&amp;btvi=1&amp;fsb=1&amp;dtd=124\" name=\"aswift_1\" width=\"730\" height=\"0\" frameborder=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\" sandbox=\"allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation\" data-google-container-id=\"a!2\" aria-label=\"Advertisement\" data-google-query-id=\"CJCbnajwiowDFfBynQkdWq4Oww\" data-load-complete=\"true\"></iframe></div>\r\n<p>&nbsp;</p>\r\n<p><br><br>FITUR UMUM</p>\r\n<ul>\r\n<li><span data-preserver-spaces=\"true\">Landing page &amp; web responsive</span></li>\r\n<li><span data-preserver-spaces=\"true\">Mudah di gunakan dan aplikasi ringan</span></li>\r\n<li><span data-preserver-spaces=\"true\">Rekap laporan berdasarkan bulan, Tanggal dan Siswa</span></li>\r\n<li><span data-preserver-spaces=\"true\">Laporan absen dalam PDF, EXCEL dan PRINT</span></li>\r\n<li><span data-preserver-spaces=\"true\">Fitur Print laporan langsung ke Printer</span></li>\r\n</ul>\r\n<p><br><br>Kelebihan Script / Source Code :<br>Bersifat selamanya tanpa batas waktu<br>Panduan Instalasi Lengkap<br>Installasi Sangat Mudah<br>Tidak akan di Banned<br>Bisa Offline maupun Online<br>Tidak boleh dijual kembali<br>Tampilan Bisa di edit atau di custom sesuai yang dibutuhkan<br>Konsultasi Free<br><br><br>DEMO APLIKASI<br>https://absensi-sekolah.s-widodo.com/<br>Email : swidodo.com@gmail.com<br>Password : 123456<br><br>ADMIN<br>https://absensi-sekolah.s-widodo.com/sw-admin<br>Username : Widodo<br>Password : 123456</p>', 'file_685c28780a0eb7.19604562.jpg', 'berita', '07:55:33', '2025-06-25', '2', 'Y'),
(7, 'Coki Widodo', 'Aplikasi PPDB (Pendaftaran Siswa baru) PHP V.8+', 'aplikasi-ppdb-pendaftaran-siswa-baru-php-v8', '<p><a class=\"google-anno\" href=\"https://s-widodo.com/product/22-aplikasi-ppdb-pendaftaran-siswa-baru-php-v8.html#\" data-google-vignette=\"false\" data-google-interstitial=\"false\">&nbsp;<span class=\"google-anno-t\">Aplikasi</span></a>&nbsp;PPDB (Penerimaan Peserta Didik Baru) adalah sebuah sistem digital yang dirancang untuk mempermudah proses pendaftaran siswa baru ke jenjang pendidikan tertentu, mulai dari tingkat SD, SMP, hingga SMA/SMK. Dengan memanfaatkan teknologi informasi,&nbsp;<a class=\"google-anno\" href=\"https://s-widodo.com/product/22-aplikasi-ppdb-pendaftaran-siswa-baru-php-v8.html#\" data-google-vignette=\"false\" data-google-interstitial=\"false\">&nbsp;<span class=\"google-anno-t\">aplikasi</span></a>&nbsp;ini memungkinkan proses seleksi, validasi data, dan pengumuman hasil dilakukan secara online.<br><br></p>\r\n<p class=\"\" data-start=\"542\" data-end=\"568\"><strong data-start=\"542\" data-end=\"568\">Manfaat Aplikasi PPDB:</strong></p>\r\n<ol data-start=\"570\" data-end=\"1550\">\r\n<li class=\"\" data-start=\"570\" data-end=\"819\">\r\n<p class=\"\" data-start=\"573\" data-end=\"819\"><strong data-start=\"573\" data-end=\"609\">Meningkatkan Efisiensi dan Waktu</strong><br>Proses pendaftaran yang sebelumnya harus dilakukan langsung di sekolah kini bisa dilakukan dari rumah, hanya dengan menggunakan komputer atau ponsel. Ini menghemat waktu dan tenaga bagi orang tua dan siswa.</p>\r\n<div class=\"google-anno-skip google-anno-sc\" tabindex=\"0\" role=\"link\" aria-label=\"Kursus online terbaik\" data-google-vignette=\"false\" data-google-interstitial=\"false\">Kursus online terbaik</div>\r\n<p>&nbsp;</p>\r\n</li>\r\n<li class=\"\" data-start=\"821\" data-end=\"1020\">\r\n<p class=\"\" data-start=\"824\" data-end=\"1020\"><strong data-start=\"824\" data-end=\"860\">Mengurangi Antrean dan Kerumunan</strong><br>Dengan sistem online, tak perlu lagi datang ke sekolah hanya untuk menyerahkan berkas. Ini sangat berguna terutama saat pandemi atau dalam kondisi terbatas.</p>\r\n</li>\r\n<li class=\"\" data-start=\"1022\" data-end=\"1218\">\r\n<p class=\"\" data-start=\"1025\" data-end=\"1218\"><strong data-start=\"1025\" data-end=\"1056\">Transparansi Proses Seleksi</strong><br>Aplikasi PPDB sering dilengkapi dengan sistem penilaian otomatis dan publikasi hasil secara real-time. Ini mengurangi potensi kecurangan atau manipulasi data.</p>\r\n</li>\r\n</ol>\r\n<h4 data-start=\"1609\" data-end=\"1847\">FITUR UNGGULAN</h4>\r\n<h4 data-start=\"1609\" data-end=\"1847\">✅Formulir Data diri lengkap<br>✅ Formulir Nilai (Fleksibel Bisa di aktifkan dan Nonaktifkan)<br>✅ Upload Berkas (Fleksibel Bisa di aktifkan dan Nonaktifkan)<br>✅ Pembayaran Payment Gateway (Fleksibel Bisa di aktifkan dan Nonaktifkan)<br>✅ Registrasi Ulang (Fleksibel Bisa di aktifkan dan Nonaktifkan)<br>✅ Login dengan Google<br>✅ Memiliki Notifikasi WhatsApp (jika di aktifkan)<br>✅ Laporan Lengkap.<br>✅ Tampilan Responsive<br>✅ Support Php Versi 8+</h4>\r\n<p><iframe src=\"https://www.youtube.com/embed/mabbQ7ZSTv4?si=beLZyfLCQawRgAjJ\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></p>', 'file_685c29475c27d0.48182116.jpg', 'berita', '23:51:09', '2025-06-25', '0', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `cabang_id` int(11) NOT NULL,
  `nama_cabang` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`cabang_id`, `nama_cabang`) VALUES
(1, 'Cabang 1'),
(2, 'cabang 2');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `parent_user_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `pesan` text NOT NULL,
  `datetime` datetime NOT NULL,
  `status` varchar(10) NOT NULL,
  `status_user` varchar(5) NOT NULL,
  `status_parent` varchar(5) NOT NULL,
  `status_admin` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `user_id`, `parent_user_id`, `admin_id`, `pesan`, `datetime`, `status`, `status_user`, `status_parent`, `status_admin`) VALUES
(25, 4, 0, 1, 'tes', '2024-02-05 15:00:55', 'user', 'Y', '-', '-'),
(26, 4, 0, 1, '😃🤣🤠', '2024-02-05 15:05:05', 'user', 'Y', '-', '-'),
(27, 4, 0, 1, 'Kerja kerja kerja', '2024-02-05 15:06:11', 'user', 'Y', '-', '-'),
(28, 4, 0, 1, 'tes', '2024-02-05 15:06:40', 'user', 'Y', '-', '-'),
(29, 4, 0, 1, '😌', '2024-02-05 15:09:18', 'user', 'Y', '-', '-'),
(30, 4, 0, 1, 'sfsfsf', '2024-02-05 15:43:23', 'user', 'Y', '-', '-'),
(32, 4, 0, 1, 'Balas', '2024-02-05 18:16:22', 'admin', '-', 'Y', 'Y'),
(33, 4, 0, 1, 'iya', '2024-02-05 19:36:08', 'user', 'Y', '-', '-'),
(34, 4, 0, 1, 'oke', '2024-02-05 19:36:21', 'user', 'Y', '-', '-'),
(35, 4, 0, 1, 'Tes', '2024-02-05 19:43:16', 'user', 'Y', '-', '-'),
(36, 4, 0, 1, 'Tes lagi', '2024-02-05 22:30:30', 'admin', '-', '-', 'Y'),
(37, 4, 0, 1, 'sdsd', '2024-02-06 00:57:53', 'admin', '-', '-', 'Y'),
(38, 4, 0, 1, 'Aku sayang kamu', '2024-02-06 03:51:04', 'user', 'Y', '-', '-'),
(39, 4, 0, 1, 'Halo kak', '2024-02-08 00:35:12', 'user', 'Y', '-', '-'),
(40, 4, 0, 1, 'iya', '2024-02-08 00:35:42', 'admin', '-', '-', 'Y'),
(41, 4, 0, 1, 'ada yg bisa di bantu', '2024-02-08 00:35:49', 'admin', '-', '-', 'Y'),
(42, 4, 0, 1, '😅', '2024-02-08 00:36:47', 'user', 'Y', '-', '-'),
(43, 4, 0, 1, 'ssdsd', '2024-02-08 01:09:46', 'user', 'Y', '-', '-'),
(44, 4, 0, 1, '😃', '2024-02-08 01:10:06', 'user', 'Y', '-', '-'),
(45, 4, 0, 1, '🤣', '2024-02-08 01:15:29', 'admin', '-', '-', 'Y'),
(46, 4, 0, 1, 'Udah malam', '2024-02-17 03:07:15', 'admin', '-', '-', 'Y'),
(47, 4, 0, 1, 'hallo', '2024-02-18 00:15:35', 'admin', '-', '-', 'Y'),
(48, 4, 0, 6, 'p', '2024-08-12 12:06:55', 'user', 'N', '-', '-'),
(49, 4, 0, 1, 'hallo', '2024-08-12 12:07:29', 'user', 'Y', '-', '-'),
(50, 4, 0, 1, 'oke', '2024-08-12 12:07:46', 'admin', '-', '-', 'Y'),
(51, 4, 0, 1, 'halo', '2025-03-14 15:17:44', 'user', 'Y', '-', '-'),
(52, 4, 0, 1, 'ok', '2025-03-14 15:18:08', 'admin', '-', '-', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `chat_list`
--

CREATE TABLE `chat_list` (
  `chat_list_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `parent_user_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chat_list`
--

INSERT INTO `chat_list` (`chat_list_id`, `user_id`, `parent_user_id`, `admin_id`, `datetime`) VALUES
(8, 4, 0, 1, '2025-03-14 15:15:19'),
(10, 5, 0, 1, '2024-02-05 17:27:07'),
(11, 4, 0, 0, '2024-02-08 00:49:31'),
(12, 4, 0, 6, '2024-02-18 02:20:25');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `cuti_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `jenis` varchar(40) DEFAULT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `jumlah` varchar(10) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `atasan` int(11) NOT NULL,
  `files` varchar(100) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` enum('-','Y','N') DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`cuti_id`, `user_id`, `nama_lengkap`, `jenis`, `tanggal_mulai`, `tanggal_selesai`, `jumlah`, `keterangan`, `atasan`, `files`, `date`, `time`, `status`) VALUES
(23, 8, 'Pegawai', 'Liburan', '2025-05-20', '2025-05-20', '1', 'Liburan aja', 6, 'cuti_682b70635bcea9.76979833.jpg', '2025-05-20', '00:54:43', 'Y'),
(24, 4, 'Widodo', 'Liburan', '2025-05-31', '2025-05-28', '4', 'Liburan aja', 6, 'cuti_68361052dd5a62.35986683.jpg', '2025-05-31', '23:50:12', '-');

-- --------------------------------------------------------

--
-- Table structure for table `hak_cuti`
--

CREATE TABLE `hak_cuti` (
  `hak_cuti_id` int(11) NOT NULL,
  `posisi_id` int(11) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `active` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hak_cuti`
--

INSERT INTO `hak_cuti` (`hak_cuti_id`, `posisi_id`, `jumlah`, `active`) VALUES
(1, 1, '10', 'Y'),
(2, 4, '10', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `izin`
--

CREATE TABLE `izin` (
  `izin_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `files` varchar(150) DEFAULT NULL,
  `jenis` varchar(30) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` enum('-','Y','N') NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `izin`
--

INSERT INTO `izin` (`izin_id`, `user_id`, `nama_lengkap`, `tanggal_mulai`, `tanggal_selesai`, `files`, `jenis`, `keterangan`, `date`, `time`, `status`) VALUES
(34, 8, 'Pegawai', '2025-05-20', '2025-05-20', '', 'Izin', 'Izin aja', '2025-05-20', '01:45:18', 'Y'),
(42, 4, 'Widodo', '2025-05-25', '2025-05-25', 'izin_683204505de786.51520301.jpg', 'Izin', 'Keterangan Izin', '2025-05-25', '00:43:21', '-');

-- --------------------------------------------------------

--
-- Table structure for table `jam_kerja`
--

CREATE TABLE `jam_kerja` (
  `jam_kerja_id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_telat` time NOT NULL,
  `jam_pulang` time NOT NULL,
  `mulai_absen` varchar(50) NOT NULL DEFAULT '60',
  `active` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jam_kerja`
--

INSERT INTO `jam_kerja` (`jam_kerja_id`, `nama`, `jam_masuk`, `jam_telat`, `jam_pulang`, `mulai_absen`, `active`) VALUES
(1, 'Shift Pagi', '02:00:00', '02:30:00', '06:00:00', '60', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `jam_kerja_master`
--

CREATE TABLE `jam_kerja_master` (
  `jam_kerja_master_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jam_kerja_master`
--

INSERT INTO `jam_kerja_master` (`jam_kerja_master_id`, `user_id`, `nama`) VALUES
(1, 0, 'Umum Senin - Sabtu');

-- --------------------------------------------------------

--
-- Table structure for table `jam_kerja_user`
--

CREATE TABLE `jam_kerja_user` (
  `jam_kerja_user_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jam_kerja_id` int(11) NOT NULL,
  `active` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jam_kerja_user`
--

INSERT INTO `jam_kerja_user` (`jam_kerja_user_id`, `user_id`, `jam_kerja_id`, `active`) VALUES
(14, 4, 1, 'Y'),
(15, 28, 1, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `kartu_nama`
--

CREATE TABLE `kartu_nama` (
  `kartu_nama_id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `foto` varchar(60) DEFAULT NULL,
  `active` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kartu_nama`
--

INSERT INTO `kartu_nama` (`kartu_nama_id`, `nama`, `foto`, `active`) VALUES
(1, 'Tema ID Card Blue', 'file_683b7041000df2.53227876.png', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `seotitle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `title`, `seotitle`) VALUES
(1, 'Pengumuman', 'pengumuman'),
(15, 'Berita', 'berita');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `kunjungan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lokasi_id` int(11) NOT NULL,
  `lokasi` varchar(70) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` enum('PENDING','Y','N') NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`kunjungan_id`, `user_id`, `lokasi_id`, `lokasi`, `keterangan`, `foto`, `date`, `time`, `status`) VALUES
(9, 4, 2, 'Kunjungan A', 'Keterangan', 'widodo1727756833.jpg', '2025-05-23', '11:27:12', 'Y'),
(10, 4, 2, 'Bandar Lampung', 'Kunjungan aja', 'widodo1748418664.jpg', '2025-05-28', '14:51:04', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `lain_lain`
--

CREATE TABLE `lain_lain` (
  `lain_lain_id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tipe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lain_lain`
--

INSERT INTO `lain_lain` (`lain_lain_id`, `nama`, `tipe`) VALUES
(1, 'Asia/Jakarta', 'timezone'),
(2, 'Asia/Makassar', 'timezone'),
(3, 'Asia/Jayapura', 'timezone'),
(4, 'Izin', 'izin'),
(5, 'Sakit', 'izin'),
(6, 'Dinas Dalam Kota', 'izin'),
(7, 'Dinas Keluar Kota', 'izin'),
(8, 'Sakit', 'cuti'),
(9, 'Liburan', 'cuti'),
(10, 'Menikah', 'cuti'),
(11, 'Melahirkan', 'cuti');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `level_id` int(11) NOT NULL,
  `level_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_id`, `level_nama`) VALUES
(1, 'Superadmin'),
(2, 'User'),
(3, 'Atasan');

-- --------------------------------------------------------

--
-- Table structure for table `libur`
--

CREATE TABLE `libur` (
  `libur_id` int(11) NOT NULL,
  `libur_hari` varchar(20) NOT NULL,
  `active` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `libur`
--

INSERT INTO `libur` (`libur_id`, `libur_hari`, `active`) VALUES
(1, 'Sabtu', 'Y'),
(2, 'Minggu', 'Y'),
(3, 'Jumat', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `libur_nasional`
--

CREATE TABLE `libur_nasional` (
  `libur_nasional_id` int(11) NOT NULL,
  `libur_tanggal` date NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `libur_nasional`
--

INSERT INTO `libur_nasional` (`libur_nasional_id`, `libur_tanggal`, `keterangan`) VALUES
(1, '2025-05-21', 'Libur Aja');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `lokasi_id` int(11) NOT NULL,
  `lokasi_nama` varchar(30) NOT NULL,
  `lokasi_alamat` text NOT NULL,
  `lokasi_latitude` varchar(100) NOT NULL,
  `lokasi_longitude` varchar(100) NOT NULL,
  `lokasi_radius` varchar(20) NOT NULL,
  `lokasi_qrcode` varchar(100) NOT NULL,
  `lokasi_tanggal` date NOT NULL,
  `lokasi_jam_mulai` time NOT NULL,
  `lokasi_jam_selesai` time NOT NULL,
  `lokasi_status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`lokasi_id`, `lokasi_nama`, `lokasi_alamat`, `lokasi_latitude`, `lokasi_longitude`, `lokasi_radius`, `lokasi_qrcode`, `lokasi_tanggal`, `lokasi_jam_mulai`, `lokasi_jam_selesai`, `lokasi_status`) VALUES
(2, 'Optik Modern', 'Kantor Lurah Duri Kosambi, Jalan Kosambi Baru, RW 01, Duri Kosambi, Cengkareng, Jakarta Barat, Daerah Khusus Ibukota Jakarta, Jawa, 11750, Indonesia', '-6.170214', '106.722099', '500', '1749388612', '2022-11-18', '16:48:53', '16:48:53', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_user`
--

CREATE TABLE `lokasi_user` (
  `lokasi_user_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lokasi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lokasi_user`
--

INSERT INTO `lokasi_user` (`lokasi_user_id`, `user_id`, `lokasi_id`) VALUES
(1, 7, 2),
(2, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `master_gaji`
--

CREATE TABLE `master_gaji` (
  `master_gaji_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `gaji_pokok` varchar(8) NOT NULL,
  `tunjangan` int(11) NOT NULL,
  `uang_makan` int(11) NOT NULL,
  `potongan_bpjs` int(11) NOT NULL,
  `potongan_alpha` int(11) NOT NULL,
  `potongan_telat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_gaji`
--

INSERT INTO `master_gaji` (`master_gaji_id`, `user_id`, `tahun`, `gaji_pokok`, `tunjangan`, `uang_makan`, `potongan_bpjs`, `potongan_alpha`, `potongan_telat`) VALUES
(5, 3, '2025', '60000', 2000, 200, 100, 100, 100),
(6, 4, '2025', '5000000', 10000, 0, 35000, 10000, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE `modul` (
  `modul_id` int(11) NOT NULL,
  `modul_nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`modul_id`, `modul_nama`) VALUES
(1, 'Artikel'),
(2, 'Pegawai'),
(3, 'Lokasi'),
(4, 'Jam Kerja'),
(5, 'Posisi/Jabatan'),
(6, 'Libur Kantor'),
(7, 'ID Card'),
(8, 'Izin'),
(9, 'Cuti'),
(10, 'Semua Laporan'),
(11, 'Pengaturan Aplikasi'),
(12, 'Slider'),
(13, 'Admin'),
(14, 'Hak Akses'),
(15, 'Hak Cuti'),
(16, 'Master Data'),
(17, 'Master Penggajian'),
(18, 'Recognition'),
(19, 'Cabang');

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `notifikasi_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` varchar(150) NOT NULL,
  `link` varchar(20) NOT NULL,
  `tanggal` varchar(40) NOT NULL,
  `datetime` datetime NOT NULL,
  `tipe` varchar(5) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`notifikasi_id`, `user_id`, `nama`, `keterangan`, `link`, `tanggal`, `datetime`, `tipe`, `status`) VALUES
(1, 4, 'Widodo', 'Baru saja megajukan cuti', 'cuti', '2023-10-02', '2023-10-02 08:00:00', '1', 'Y'),
(2, 4, 'Widodo', 'Baru saja megajukan izin', 'cuti', '2023-10-02', '0000-00-00 00:00:00', '1', 'Y'),
(3, 4, 'Widodo', 'Baru saja mengajukan cuti', 'cuti', '2023-10-05', '2023-10-02 23:21:01', '1', 'Y'),
(4, 4, 'Widodo', 'Baru saja megajukan izin', 'izin', '2023-10-14', '2023-10-02 23:24:11', '1', 'Y'),
(5, 4, 'Widodo', 'Baru saja megajukan izin', 'izin', '2024-01-28', '2024-01-28 02:10:45', '1', 'Y'),
(6, 4, 'Widodo', 'Baru saja mengajukan cuti', 'cuti', '2024-01-31', '2024-02-01 00:12:49', '1', 'Y'),
(7, 4, 'Widodo', 'Baru saja megajukan izin', 'izin', '2024-02-03', '2024-02-03 01:26:13', '1', 'Y'),
(8, 4, 'Widodo', 'Baru saja megajukan izin', 'izin', '2024-02-05', '2024-02-05 11:15:00', '1', 'Y'),
(9, 4, 'Widodo', 'Permohonan Izin Anda disetujui', 'izin', '2024-02-05', '2024-02-05 12:21:44', '2', 'Y'),
(10, 4, 'Widodo', 'Permohonan Izin Anda ditolak', 'izin', '2024-02-05', '2024-02-05 12:41:06', '2', 'Y'),
(11, 4, 'Widodo', 'Permohonan Izin Anda disetujui', 'izin', '2024-02-06', '2024-02-06 00:37:57', '2', 'Y'),
(12, 4, 'Widodo', 'Baru saja menambah Uraian kerja', 'uraian-kerja', '2024-06-20', '2024-06-20 09:21:05', '1', 'Y'),
(13, 4, 'Widodo', 'Baru saja menambah Uraian kerja', 'uraian-kerja', '2024-06-20', '2024-06-20 09:23:49', '1', 'Y'),
(14, 0, '', 'Baru saja menambah Uraian kerja', 'uraian-kerja', '2024-06-20', '2024-06-20 09:38:55', '1', 'Y'),
(15, 4, 'Widodo', 'Baru saja mengajukan cuti', 'cuti', '2024-07-03', '2024-07-03 08:47:02', '1', 'Y'),
(16, 0, 'Widodo', 'Permohonan Cuti Anda disetujui', 'cuti', '2024-07-03', '2024-07-03 08:50:41', '2', 'Y'),
(24, 4, 'Widodo', 'Baru saja megajukan izin', 'izin', '2024-07-25', '2024-07-25 15:30:15', '1', 'Y'),
(25, 4, 'Widodo', 'Baru saja mengajukan cuti', 'cuti', '1970-01-01', '2024-07-27 14:24:03', '1', 'Y'),
(26, 4, 'Widodo', 'Baru saja mengajukan cuti', 'cuti', '2024-07-29', '2024-07-27 14:31:48', '1', 'Y'),
(27, 4, 'Widodo', 'Baru saja mengajukan cuti', 'cuti', '2024-08-01', '2024-07-27 14:33:27', '1', 'Y'),
(28, 4, 'Widodo', 'Baru saja mengajukan cuti', 'cuti', '2024-07-29', '2024-07-27 14:48:27', '1', 'Y'),
(29, 0, 'Widodo', 'Permohonan Cuti Anda disetujui', 'cuti', '2024-07-27', '2024-07-27 14:49:15', '2', 'Y'),
(30, 4, 'Widodo', 'Baru saja megajukan izin', 'izin', '2024-08-01', '2024-08-01 11:44:08', '1', 'Y'),
(31, 4, 'Widodo', 'Permohonan Izin Anda ditolak', 'izin', '2024-08-01', '2024-08-01 11:44:30', '2', 'Y'),
(32, 4, 'Widodo', 'Baru saja mengajukan cuti', 'cuti', '2024-08-02', '2024-08-02 14:57:27', '1', 'Y'),
(33, 4, 'Widodo', 'Baru saja kunjungan', 'laporan-kunjungan', '2024-09-06', '2024-09-06 14:45:47', '1', 'Y'),
(34, 4, 'Widodo', 'Baru saja kunjungan', 'laporan-kunjungan', '2024-10-01', '2024-10-01 11:27:12', '1', 'Y'),
(35, 4, 'Widodo', 'Baru saja menambah Uraian kerja', 'uraian-kerja', '2024-10-01', '2024-10-01 12:49:44', '1', 'Y'),
(36, 4, 'Widodo', 'Baru saja menambah Uraian kerja', 'uraian-kerja', '2024-10-15', '2024-10-15 21:32:44', '1', 'Y'),
(37, 4, 'Widodo', 'Baru saja menambah Uraian kerja', 'uraian-kerja', '2024-10-15', '2024-10-15 21:41:08', '1', 'Y'),
(38, 4, 'Widodo', 'Permohonan Cuti Anda ditolak', 'cuti', '2024-12-13', '2024-12-13 15:08:46', '2', 'Y'),
(39, 4, 'Widodo', 'Baru saja menambah Laporan kerja', 'uraian-kerja', '2025-01-23', '2025-01-23 17:53:14', '1', 'Y'),
(40, 4, 'Widodo', 'Baru saja mengajukan cuti', 'cuti', '2025-01-24', '2025-01-24 01:03:30', '1', 'Y'),
(41, 4, 'Widodo', 'Baru saja mengajukan cuti', 'cuti', '2025-01-24', '2025-01-24 01:06:40', '1', 'Y'),
(42, 4, 'Widodo', 'Baru saja mengajukan cuti', 'cuti', '2025-01-24', '2025-01-24 01:11:02', '1', 'Y'),
(43, 4, 'Widodo', 'Baru saja megajukan izin', 'izin', '2025-01-24', '2025-01-24 01:15:26', '1', 'Y'),
(44, 4, 'Widodo', 'Baru saja menambah Laporan kerja', 'uraian-kerja', '2025-02-07', '2025-02-07 16:12:29', '1', 'Y'),
(45, 5, 'Coki Widodo', 'Permohonan Izin Anda ditolak', 'izin', '2025-05-16', '2025-05-16 03:53:19', '2', 'N'),
(46, 5, 'Coki Widodo', 'Permohonan Izin Anda disetujui', 'izin', '2025-05-16', '2025-05-16 03:53:23', '2', 'N'),
(47, 8, 'Pegawai', 'Permohonan Cuti Anda ditolak', 'cuti', '2025-05-20', '2025-05-20 01:03:50', '2', 'N'),
(48, 8, 'Pegawai', 'Permohonan Cuti Anda disetujui', 'cuti', '2025-05-20', '2025-05-20 01:15:21', '2', 'N'),
(49, 8, 'Pegawai', 'Permohonan Cuti Anda ditolak', 'cuti', '2025-05-20', '2025-05-20 01:17:03', '2', 'N'),
(50, 8, 'Pegawai', 'Permohonan Cuti Anda disetujui', 'cuti', '2025-05-20', '2025-05-20 01:21:20', '2', 'N'),
(51, 8, 'Pegawai', 'Permohonan Izin Anda disetujui', 'cuti', '2025-05-20', '2025-05-20 01:57:30', '2', 'N'),
(52, 8, 'Pegawai', 'Permohonan Izin Anda ditolak', 'cuti', '2025-05-20', '2025-05-20 02:01:28', '2', 'N'),
(53, 8, 'Pegawai', 'Permohonan Izin Anda disetujui', 'cuti', '2025-05-20', '2025-05-20 02:01:38', '2', 'N'),
(54, 4, 'Widodo', 'Baru saja megajukan izin', 'izin', '2025-05-26', '2025-05-24 17:18:59', '1', 'Y'),
(55, 4, 'Widodo', 'Baru saja megajukan izin', 'izin', '2025-05-28', '2025-05-24 17:46:14', '1', 'Y'),
(56, 4, 'Widodo', 'Baru saja megajukan izin', 'izin', '2025-05-24', '2025-05-24 23:07:52', '1', 'Y'),
(57, 4, 'Widodo', 'Baru saja megajukan izin', 'izin', '2025-05-26', '2025-05-24 23:10:41', '1', 'Y'),
(58, 4, 'Widodo', 'Baru saja megajukan izin', 'izin', '2025-05-26', '2025-05-24 23:11:01', '1', 'Y'),
(59, 4, 'Widodo', 'Baru saja megajukan izin', 'izin', '2025-05-26', '2025-05-24 23:12:36', '1', 'Y'),
(60, 4, 'Widodo', 'Baru saja megajukan izin', 'izin', '2025-05-26', '2025-05-24 23:33:25', '1', 'Y'),
(61, 4, 'Widodo', 'Baru saja megajukan izin', 'izin', '2025-05-26', '2025-05-24 23:37:41', '1', 'Y'),
(62, 4, 'Widodo', 'Baru saja mengajukan cuti', 'cuti', '2025-05-28', '2025-05-28 00:32:42', '1', 'Y'),
(63, 4, 'Widodo', 'Baru saja kunjungan', 'laporan-kunjungan', '2025-05-28', '2025-05-28 13:22:29', '1', 'Y'),
(64, 4, 'Widodo', 'Baru saja menambah Laporan kerja', 'uraian-kerja', '2025-05-31', '2025-05-31 21:24:35', '1', 'Y'),
(65, 4, 'Widodo', 'Baru saja menambah Laporan kerja', 'uraian-kerja', '2025-05-31', '2025-05-31 21:27:08', '1', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `overtime`
--

CREATE TABLE `overtime` (
  `overtime_id` int(11) NOT NULL,
  `overtime` enum('DEFAULT','IN','OUT') NOT NULL DEFAULT 'DEFAULT',
  `user_id` int(11) DEFAULT NULL,
  `lokasi_id` int(11) DEFAULT NULL,
  `tanggal_in` date NOT NULL,
  `tanggal_out` varchar(50) DEFAULT NULL,
  `absen_in` time DEFAULT NULL,
  `absen_out` varchar(50) DEFAULT NULL,
  `foto_in` varchar(100) DEFAULT NULL,
  `foto_out` varchar(100) DEFAULT NULL,
  `latitude_in` varchar(150) DEFAULT NULL,
  `latitude_out` varchar(50) DEFAULT NULL,
  `radius_in` varchar(150) DEFAULT NULL,
  `radius_out` varchar(150) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `status` enum('PENDING','Y','N') DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `overtime`
--

INSERT INTO `overtime` (`overtime_id`, `overtime`, `user_id`, `lokasi_id`, `tanggal_in`, `tanggal_out`, `absen_in`, `absen_out`, `foto_in`, `foto_out`, `latitude_in`, `latitude_out`, `radius_in`, `radius_out`, `keterangan`, `status`) VALUES
(5, 'OUT', 4, 2, '2025-05-29', '2025-05-29', '03:04:09', '03:50:00', 'in-4-1748462649.jpg', 'in-4-1748464016.jpg', '-5.383782, 105.240986', '-5.383782, 105.240986', NULL, NULL, NULL, 'PENDING'),
(6, 'OUT', 4, 2, '2025-05-29', '2025-05-30', '04:05:22', '11:22:30', 'in-4-1748466322.jpg', 'in-4-1748578950.jpg', '-5.383782, 105.240986', '-7.150975, 110.140259', NULL, NULL, NULL, 'PENDING'),
(7, 'OUT', 4, 2, '2025-05-30', '2025-05-30', '11:56:48', '11:58:22', 'in-4-1748581008.jpg', 'out-4-1748581102.jpg', '-5.372179, 105.271204', '-7.150975, 110.140259', NULL, NULL, 'Berikan keterangan', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `penugasan`
--

CREATE TABLE `penugasan` (
  `penugasan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `keterangan` text NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perangkat`
--

CREATE TABLE `perangkat` (
  `perangkat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `device_name` varchar(50) NOT NULL,
  `ip_address` varchar(40) NOT NULL,
  `browser` varchar(150) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perangkat`
--

INSERT INTO `perangkat` (`perangkat_id`, `user_id`, `device_name`, `ip_address`, `browser`, `tanggal`) VALUES
(16, 28, 'Windows 10/11 PC', '127.0.0.1', 'Google Chrome 136.0.0.0', '2025-06-03'),
(18, 4, 'Windows 10/11 PC', '127.0.0.1', 'Google Chrome 137.0.0.0', '2025-06-26');

-- --------------------------------------------------------

--
-- Table structure for table `posisi`
--

CREATE TABLE `posisi` (
  `posisi_id` int(11) NOT NULL,
  `posisi_nama` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posisi`
--

INSERT INTO `posisi` (`posisi_id`, `posisi_nama`) VALUES
(1, 'Admin'),
(2, 'Manager'),
(3, 'Marketing'),
(4, 'Acounting');

-- --------------------------------------------------------

--
-- Table structure for table `recognition`
--

CREATE TABLE `recognition` (
  `recognition_id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `photo` varchar(40) NOT NULL,
  `status` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recognition`
--

INSERT INTO `recognition` (`recognition_id`, `user_id`, `photo`, `status`) VALUES
(13, '4', 'image0.png', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `modul_id` int(11) NOT NULL,
  `lihat` varchar(5) NOT NULL,
  `modifikasi` varchar(5) NOT NULL,
  `hapus` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `level_id`, `modul_id`, `lihat`, `modifikasi`, `hapus`) VALUES
(1, 1, 1, 'Y', 'Y', 'Y'),
(2, 1, 2, 'Y', 'Y', 'Y'),
(3, 1, 3, 'Y', 'Y', 'Y'),
(4, 1, 4, 'Y', 'Y', 'Y'),
(5, 1, 5, 'Y', 'Y', 'Y'),
(6, 1, 6, 'Y', 'Y', 'Y'),
(7, 1, 7, 'Y', 'Y', 'Y'),
(8, 1, 8, 'Y', 'Y', 'Y'),
(9, 1, 9, 'Y', 'Y', 'Y'),
(10, 1, 10, 'Y', 'Y', 'Y'),
(11, 1, 11, 'Y', 'Y', 'Y'),
(12, 1, 12, 'Y', 'Y', 'Y'),
(13, 1, 13, 'Y', 'Y', 'Y'),
(14, 1, 14, 'Y', 'Y', 'Y'),
(15, 2, 1, 'Y', 'Y', 'Y'),
(16, 2, 2, 'N', 'Y', 'Y'),
(17, 2, 3, 'N', 'Y', 'Y'),
(18, 2, 4, 'N', 'Y', 'Y'),
(19, 2, 5, 'N', 'Y', 'Y'),
(20, 2, 6, 'N', 'Y', 'Y'),
(21, 2, 7, 'N', 'Y', 'Y'),
(22, 2, 8, 'N', 'Y', 'Y'),
(23, 2, 9, 'N', 'Y', 'Y'),
(24, 2, 10, 'N', 'Y', 'Y'),
(25, 2, 11, 'N', 'Y', 'Y'),
(26, 2, 12, 'N', 'Y', 'Y'),
(27, 2, 13, 'N', 'N', 'N'),
(28, 2, 14, 'N', 'N', 'N'),
(29, 1, 15, 'Y', 'Y', 'Y'),
(30, 1, 16, 'Y', 'Y', 'Y'),
(31, 3, 1, 'Y', 'Y', 'Y'),
(32, 3, 2, 'Y', 'Y', 'Y'),
(33, 1, 17, 'Y', 'Y', 'Y'),
(34, 1, 18, 'Y', 'Y', 'Y'),
(35, 1, 19, 'Y', 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `site_id` int(11) NOT NULL,
  `site_name` varchar(50) NOT NULL,
  `site_company` varchar(100) DEFAULT NULL,
  `site_pimpinan` varchar(100) DEFAULT NULL,
  `site_kota` varchar(100) DEFAULT NULL,
  `site_phone` char(12) DEFAULT NULL,
  `site_address` text DEFAULT NULL,
  `site_owner` varchar(50) DEFAULT NULL,
  `site_kop` varchar(100) DEFAULT NULL,
  `site_logo` varchar(100) DEFAULT NULL,
  `site_favicon` varchar(60) DEFAULT NULL,
  `site_url` varchar(100) DEFAULT NULL,
  `site_email` varchar(30) DEFAULT NULL,
  `gmail_host` varchar(50) DEFAULT NULL,
  `gmail_username` varchar(30) DEFAULT NULL,
  `gmail_password` varchar(50) DEFAULT NULL,
  `gmail_port` varchar(10) DEFAULT NULL,
  `gmail_active` varchar(5) DEFAULT NULL,
  `google_client_id` varchar(200) DEFAULT NULL,
  `google_client_secret` varchar(200) DEFAULT NULL,
  `google_client_active` varchar(5) DEFAULT NULL,
  `tipe_absen` varchar(30) DEFAULT NULL,
  `tipe_absen_layar` varchar(30) DEFAULT NULL,
  `active_absen` varchar(10) DEFAULT NULL,
  `timezone` varchar(50) DEFAULT NULL,
  `whatsapp_phone` varchar(30) DEFAULT NULL,
  `whatsapp_token` varchar(200) DEFAULT NULL,
  `secret_key` varchar(40) DEFAULT NULL,
  `whatsapp_domain` varchar(100) DEFAULT NULL,
  `whatsapp_tipe` varchar(20) DEFAULT NULL,
  `whatsapp_template` text DEFAULT NULL,
  `whatsapp_active` enum('Y','N') DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`site_id`, `site_name`, `site_company`, `site_pimpinan`, `site_kota`, `site_phone`, `site_address`, `site_owner`, `site_kop`, `site_logo`, `site_favicon`, `site_url`, `site_email`, `gmail_host`, `gmail_username`, `gmail_password`, `gmail_port`, `gmail_active`, `google_client_id`, `google_client_secret`, `google_client_active`, `tipe_absen`, `tipe_absen_layar`, `active_absen`, `timezone`, `whatsapp_phone`, `whatsapp_token`, `secret_key`, `whatsapp_domain`, `whatsapp_tipe`, `whatsapp_template`, `whatsapp_active`) VALUES
(1, 'App. Absensi V.5', 'S-widodo.com', 'Widodo', 'Bandar Lampung', '083160901108', 'Jl. Zainal Bidin Labuhan Ratu gg. Harapan 1 No 18', 'Widodo', '67ca328ddf51c6.42167590.jpg', '67927e01b4a057.74988986.png', '67927ee6a190a2.26402214.png', 'http://localhost/absensi-v5.3-recognition', 'swidodo.com@gmail.com', 'smtp.gmail.com', 'swidodo.com@gmail.com', 'cqpveixfqexoqfak', '465', 'N', '482205120603-hf6aqm1mgr29ubsi2qttcrmfhmm2uklb.apps.googleusercontent.com', '7EjMuD8XO88nR-5mtqYhh4Y3', 'Y', 'recognition', 'qrcode-webcame', 'Y', 'Asia/Jakarta', '083160901108', 'O0nfPFwfbpMAjbI5PMupXHIlXN8drNIGBro9UVi86J9Ozdm7H9o6rrfxD9oDYm4N', '435ew55', 'https://kudus.wablas.com/api/v2/send-message', 'POST', 'Assalamualaikum wr wb, Bapak/Ibu Kami  dari Perusahaan Menginformasikan bahwa :\r\n\r\nNama: {{nama}}\r\nHari/Tanggal: {{tanggal}}\r\n\r\n=========================\r\nTelah {{tipe}} Bekerja \r\nJam Kerja : {{jam_kerja}}\r\nJam Absen : {{jam_absen}}\r\nStatus : {{status}}\r\n=========================\r\nLokasi :  {{lokasi}}\r\n\r\nTerimakasih, Wassalamualaikum wr wb\r\nHormat kami,\r\nS-widodo.com', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `setting_absen`
--

CREATE TABLE `setting_absen` (
  `setting_absen_id` int(11) NOT NULL,
  `timezone` varchar(30) NOT NULL,
  `tipe_absen` varchar(20) NOT NULL,
  `radius` varchar(20) NOT NULL,
  `mulai_absen_masuk` time NOT NULL,
  `mulai_absen_pulang` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_absen`
--

INSERT INTO `setting_absen` (`setting_absen_id`, `timezone`, `tipe_absen`, `radius`, `mulai_absen_masuk`, `mulai_absen_pulang`) VALUES
(1, 'Asia/Jakarta', 'selfie', 'N', '06:00:00', '16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_nama` varchar(50) NOT NULL,
  `slider_url` varchar(50) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `active` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_nama`, `slider_url`, `foto`, `active`) VALUES
(1, 'Aplikasi Absensi Siswa', 'https://s-widodo.com', 'slider_685c2bf0350b06.08627464.jpg', 'Y'),
(3, 'Applikasi PPDB', 'https://s-widodo.com', 'slider_6830c44d6fc363.66895473.jpg', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `uraian_kerja`
--

CREATE TABLE `uraian_kerja` (
  `uraian_kerja_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `lokasi_id` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text DEFAULT NULL,
  `files` varchar(100) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` enum('PENDING','Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uraian_kerja`
--

INSERT INTO `uraian_kerja` (`uraian_kerja_id`, `user_id`, `lokasi_id`, `nama`, `tanggal`, `keterangan`, `files`, `date`, `time`, `status`) VALUES
(11, 4, 2, 'zdfsdf', '2024-10-15', 'sdfsdfsdf', '1729003268-5074ad7414847ab612bdc7fdd79b16fd.jpg', '2024-10-15', '21:41:08', 'Y'),
(14, 4, 2, 'Laporan kerja', '2025-05-31', 'Keterangan laporan kerja', '4683b112409e333.23249216.png', '2025-05-31', '21:24:35', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nip` varchar(40) DEFAULT NULL,
  `nik` varchar(40) DEFAULT NULL,
  `nama_lengkap` varchar(70) DEFAULT NULL,
  `tempat_lahir` varchar(40) DEFAULT NULL,
  `tanggal_lahir` varchar(20) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `jenis_pekerja` varchar(40) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `cabang_id` int(11) DEFAULT 0,
  `lokasi_id` int(11) DEFAULT 0,
  `posisi_id` int(11) DEFAULT 0,
  `qrcode` varchar(150) DEFAULT NULL,
  `avatar` varchar(160) DEFAULT NULL,
  `tanggal_registrasi` datetime NOT NULL,
  `tanggal_login` datetime NOT NULL,
  `ip` varchar(30) DEFAULT NULL,
  `browser` varchar(70) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `active` enum('Y','N') DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `nip`, `nik`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `jenis_pekerja`, `telp`, `alamat`, `cabang_id`, `lokasi_id`, `posisi_id`, `qrcode`, `avatar`, `tanggal_registrasi`, `tanggal_login`, `ip`, `browser`, `status`, `active`) VALUES
(3, 'cokiwidodo@gmail.com', '$2y$10$im7KEBeGgGAUAKMZAZjlXeAJIbcWW0qZCceTy3HJRCdWbMFe93aDC', '423423424', '', 'Coki Widodo', 'Kudus', '2022-12-22', 'Laki-laki', '', '089666665781', 'Bandar Lampung', 2, 2, 4, '2022/DA8C/2022/05', 'avatar.jpg', '2022-12-18 13:37:54', '2022-12-18 13:37:54', '::1', 'Google Chrome 108.0.0.0', 'Offline', 'Y'),
(4, 'swidodo.com@gmail.com', '$2y$10$v0gqxtJDUU0h3vhsbzQm3uIVHxpMxP4JfI8jCPdTGmPq6L/s1CRBW', '435438597', '35235225', 'Widodo', 'Kudus', '1991-07-30', 'Laki-laki', 'Tetap', '6283160901108', 'Bandar Lampung', 1, 2, 1, 'E5ECCAAAED', 'avatar_683c14f395cfc6.50967956.png', '2022-12-03 14:12:46', '2025-06-26 00:07:28', 'aaaa', 'Google Chrome 107.0.0.0', 'Offline', 'Y'),
(29, 'admin@gmail.com', '$2y$10$hmdZRWzhPqaNqNO8JYGHquSbRQypftWfc4eeRSgxWsA7NWfSmbx1m', NULL, NULL, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '70A810FA35', 'avatar.jpg', '2025-08-06 05:34:29', '2025-08-06 05:35:21', '127.0.0.1', 'Google Chrome 138.0.0.0', 'Offline', 'Y'),
(30, 'admin123@gmail.com', '$2y$10$m2ywFYdEYwPSZJ6fC3k2xuhCzd0wnftXciAQdeoAYlENMVQLlrt6u', NULL, NULL, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, '43AA225F11', 'avatar.jpg', '2025-08-06 05:34:39', '2025-08-06 05:34:39', '127.0.0.1', 'Google Chrome 138.0.0.0', 'Offline', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `waktu_id` int(11) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_telat` time NOT NULL,
  `jam_pulang` time NOT NULL,
  `tipe` int(11) NOT NULL,
  `active` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `whatsapp_api`
--

CREATE TABLE `whatsapp_api` (
  `whatsapp_api_id` int(11) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `token` varchar(200) NOT NULL,
  `secret_key` varchar(30) NOT NULL,
  `domain_server` varchar(150) NOT NULL,
  `whatsapp_tipe` varchar(20) NOT NULL,
  `template` text NOT NULL,
  `active` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `whatsapp_pesan`
--

CREATE TABLE `whatsapp_pesan` (
  `whatsapp_pesan_id` int(11) NOT NULL,
  `pembukaan` varchar(70) NOT NULL,
  `pesan_masuk` text NOT NULL,
  `penutupan` varchar(70) NOT NULL,
  `pesan_pulang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`absen_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`cabang_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `chat_list`
--
ALTER TABLE `chat_list`
  ADD PRIMARY KEY (`chat_list_id`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`cuti_id`);

--
-- Indexes for table `hak_cuti`
--
ALTER TABLE `hak_cuti`
  ADD PRIMARY KEY (`hak_cuti_id`);

--
-- Indexes for table `izin`
--
ALTER TABLE `izin`
  ADD PRIMARY KEY (`izin_id`);

--
-- Indexes for table `jam_kerja`
--
ALTER TABLE `jam_kerja`
  ADD PRIMARY KEY (`jam_kerja_id`);

--
-- Indexes for table `jam_kerja_master`
--
ALTER TABLE `jam_kerja_master`
  ADD PRIMARY KEY (`jam_kerja_master_id`);

--
-- Indexes for table `jam_kerja_user`
--
ALTER TABLE `jam_kerja_user`
  ADD PRIMARY KEY (`jam_kerja_user_id`) USING BTREE;

--
-- Indexes for table `kartu_nama`
--
ALTER TABLE `kartu_nama`
  ADD PRIMARY KEY (`kartu_nama_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`kunjungan_id`);

--
-- Indexes for table `lain_lain`
--
ALTER TABLE `lain_lain`
  ADD PRIMARY KEY (`lain_lain_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `libur`
--
ALTER TABLE `libur`
  ADD PRIMARY KEY (`libur_id`);

--
-- Indexes for table `libur_nasional`
--
ALTER TABLE `libur_nasional`
  ADD PRIMARY KEY (`libur_nasional_id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`lokasi_id`);

--
-- Indexes for table `lokasi_user`
--
ALTER TABLE `lokasi_user`
  ADD PRIMARY KEY (`lokasi_user_id`);

--
-- Indexes for table `master_gaji`
--
ALTER TABLE `master_gaji`
  ADD PRIMARY KEY (`master_gaji_id`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`modul_id`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`notifikasi_id`);

--
-- Indexes for table `overtime`
--
ALTER TABLE `overtime`
  ADD PRIMARY KEY (`overtime_id`);

--
-- Indexes for table `penugasan`
--
ALTER TABLE `penugasan`
  ADD PRIMARY KEY (`penugasan_id`);

--
-- Indexes for table `perangkat`
--
ALTER TABLE `perangkat`
  ADD PRIMARY KEY (`perangkat_id`);

--
-- Indexes for table `posisi`
--
ALTER TABLE `posisi`
  ADD PRIMARY KEY (`posisi_id`);

--
-- Indexes for table `recognition`
--
ALTER TABLE `recognition`
  ADD PRIMARY KEY (`recognition_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `setting_absen`
--
ALTER TABLE `setting_absen`
  ADD PRIMARY KEY (`setting_absen_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `uraian_kerja`
--
ALTER TABLE `uraian_kerja`
  ADD PRIMARY KEY (`uraian_kerja_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`waktu_id`);

--
-- Indexes for table `whatsapp_api`
--
ALTER TABLE `whatsapp_api`
  ADD PRIMARY KEY (`whatsapp_api_id`);

--
-- Indexes for table `whatsapp_pesan`
--
ALTER TABLE `whatsapp_pesan`
  ADD PRIMARY KEY (`whatsapp_pesan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `absen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `cabang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `chat_list`
--
ALTER TABLE `chat_list`
  MODIFY `chat_list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `cuti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `hak_cuti`
--
ALTER TABLE `hak_cuti`
  MODIFY `hak_cuti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `izin`
--
ALTER TABLE `izin`
  MODIFY `izin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `jam_kerja`
--
ALTER TABLE `jam_kerja`
  MODIFY `jam_kerja_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jam_kerja_master`
--
ALTER TABLE `jam_kerja_master`
  MODIFY `jam_kerja_master_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jam_kerja_user`
--
ALTER TABLE `jam_kerja_user`
  MODIFY `jam_kerja_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kartu_nama`
--
ALTER TABLE `kartu_nama`
  MODIFY `kartu_nama_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `kunjungan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lain_lain`
--
ALTER TABLE `lain_lain`
  MODIFY `lain_lain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `libur`
--
ALTER TABLE `libur`
  MODIFY `libur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `libur_nasional`
--
ALTER TABLE `libur_nasional`
  MODIFY `libur_nasional_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `lokasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lokasi_user`
--
ALTER TABLE `lokasi_user`
  MODIFY `lokasi_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_gaji`
--
ALTER TABLE `master_gaji`
  MODIFY `master_gaji_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `modul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `notifikasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `overtime`
--
ALTER TABLE `overtime`
  MODIFY `overtime_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penugasan`
--
ALTER TABLE `penugasan`
  MODIFY `penugasan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perangkat`
--
ALTER TABLE `perangkat`
  MODIFY `perangkat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `posisi`
--
ALTER TABLE `posisi`
  MODIFY `posisi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `recognition`
--
ALTER TABLE `recognition`
  MODIFY `recognition_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_absen`
--
ALTER TABLE `setting_absen`
  MODIFY `setting_absen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uraian_kerja`
--
ALTER TABLE `uraian_kerja`
  MODIFY `uraian_kerja_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `waktu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `whatsapp_api`
--
ALTER TABLE `whatsapp_api`
  MODIFY `whatsapp_api_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `whatsapp_pesan`
--
ALTER TABLE `whatsapp_pesan`
  MODIFY `whatsapp_pesan_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
