-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jul 2022 pada 14.08
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-comerce-buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `admin_name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'eyJpdiI6IkQ3TGNUbWhCY3VIcUtsUHdDY0NUaFE9PSIsInZhbHVlIjoiRkVwbTBJT0NYUDhaTTlKQzJZMzVOdz09IiwibWFjIjoiMWNiYjIzOGE4ODAxZmRmNmU1ZjlmYjU4OWYyZDg2OWI2MTU2OTViZGMwZGRiNWU2YjhjYWU4ZjhlOWI0YjRhOCIsInRhZyI6IiJ9', '2022-07-09 17:01:19', '2022-07-09 17:01:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buukus`
--

CREATE TABLE `buukus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `buukus`
--

INSERT INTO `buukus` (`id`, `judul`, `penulis`, `jenis`, `deskripsi`, `harga`, `cover`, `created_at`, `updated_at`) VALUES
(6, 'one peace', 'oda', 'manga', 'mengisahkan petualangan Monkey D. Luffy, seorang anak laki-laki yang memiliki kemampuan tubuh elastis seperti karet setelah memakan Buah Iblis secara tidak disengaja. Dengan kru bajak lautnya, yang dinamakan Bajak Laut Topi Jerami, Luffy menjelajahi Grand Line untuk mencari harta karun terbesar di dunia yang dikenal sebagai \"One Piece\" dalam rangka untuk menjadi Raja Bajak Laut yang berikutnya.', 65000, 'manga.jpg', '2022-07-09 15:44:38', '2022-07-09 15:44:38'),
(7, 'kimetsu no yaiba', 'Koyoharu Gotōge', 'manga', 'Berlatar di Jepang pada zaman Taisho, Tanjiro Kamado adalah seorang bocah lelaki baik hati dan cerdas yang tinggal bersama keluarganya dan mencari uang dengan cara menjual arang. Semuanya berubah ketika keluarganya diserang dan dibantai oleh iblis (oni). Tanjiro dan saudarinya Nezuko adalah satu-satunya yang selamat dari insiden tersebut, meskipun Nezuko sekarang telah berubah menjadi iblis—tetapi secara mengejutkan dia masih menunjukkan tanda-tanda emosi dan pemikiran layaknya seorang manusia. Tanjiro kemudian menjadi pembasmi iblis untuk mengembalikan Nezuko menjadi manusia lagi, dan untuk mencegah tragedi yang terjadi pada dia dan adiknya terulang pada orang lain.[9]', 56000, '3a0fbd3135000d3e93b82aa1235064961605525017_main.jpg', '2022-07-09 15:49:35', '2022-07-09 15:49:35'),
(8, 'NARASI', 'TenderLova', 'novel', 'Bulan Juni datang lagi. Padahal sisa-sisa Juni tahun lalu belum sepenuhnya selesai. Beberapa sedih dan sesal masih tertinggal dan membekas dengan jelas. Tapi setiap kali Nana mendongak dan menatap langit yang biru, ia selalu merasa. \"Aku pikir setelah dia pergi, dunia akan runtuh. Tapi ternyata langit masih tinggi, burung masih terbang, dan waktu masih berlalu.\"\r\n\r\nTahun depan, bulan Juni pasti akan datang lagi. Dan sebelum bulan itu datang lagi, Nana berharap, dia bisa menyelesaikan segala hal yang belum selesai.', 58000, '60123581._SX318_.jpg', '2022-07-09 15:50:52', '2022-07-09 15:50:52'),
(9, 'Naruto vol 12', 'masashi kishimoto', 'manga', 'Manga Naruto bercerita seputar kehidupan tokoh utamanya, Naruto Uzumaki, seorang ninja yang hiperaktif, periang, dan ambisius yang ingin mewujudkan keinginannya untuk mendapatkan gelar Hokage, pemimpin dan ninja terkuat di desanya.', 45000, 'BLK_N42020195743.jpg', '2022-07-09 16:10:49', '2022-07-09 16:10:49'),
(10, 'Naruto vol 70', 'masashi kishimoto', 'manga', 'Manga Naruto bercerita seputar kehidupan tokoh utamanya, Naruto Uzumaki, seorang ninja yang hiperaktif, periang, dan ambisius yang ingin mewujudkan keinginannya untuk mendapatkan gelar Hokage, pemimpin dan ninja terkuat di desanya.', 46000, '1.jpg', '2022-07-09 16:11:48', '2022-07-09 16:11:48'),
(11, 'Naruto vol 56', 'masashi kishimoto', 'manga', 'Manga Naruto bercerita seputar kehidupan tokoh utamanya, Naruto Uzumaki, seorang ninja yang hiperaktif, periang, dan ambisius yang ingin mewujudkan keinginannya untuk mendapatkan gelar Hokage, pemimpin dan ninja terkuat di desanya.', 45500, '58c7daef750ad76d7da87d16800efe28.jpg', '2022-07-09 16:13:11', '2022-07-09 16:13:11'),
(12, 'Naruto vol 26', 'masashi kishimoto', 'manga', 'Manga Naruto bercerita seputar kehidupan tokoh utamanya, Naruto Uzumaki, seorang ninja yang hiperaktif, periang, dan ambisius yang ingin mewujudkan keinginannya untuk mendapatkan gelar Hokage, pemimpin dan ninja terkuat di desanya.', 42000, 'naruto-vol-26-9781421518626_hr.jpg', '2022-07-09 16:14:26', '2022-07-09 16:14:26'),
(13, 'PULANG', 'Teere Liye', 'novel', 'Novel Pulang bercerita tentang shadow economy. Tokoh utamanya adalah Bujang, anak muda yang hidup di pedalaman Sumatra. Ia mewarisi darah ayahnya, Samad, yang merupakan seorang tukang pukul yang paling ditakuti di sebuah kerajaan shadow economy. Samad ingin agar Bujang meneruskan karir bapaknya.', 67000, '56459890._SY475_.jpg', '2022-07-09 16:17:56', '2022-07-09 16:17:56'),
(14, 'Bidadari Berbisik', 'Asma Nadia', 'novel', 'idadari Berbisik menceritakan kehidupan sepasang gadis kembar asal Tegal. Nama mereka Bidadari Ayuni (dipanggil Ayuni) dan Bidadari Ayuning (dipanggil Ning). Selepas sekolah menengah, Ayuni memutuskan berangkat ke ibukota, menjadi pekerja rumah tangga di sebuah rumah nyonya kaya.', 66000, 'BidadariBerbisik_dpn-600x923.jpg', '2022-07-09 16:20:05', '2022-07-09 16:20:05'),
(15, '101+ Pengetahuan Bikin Kamu Mahir IT', 'Feri Sulianta', 'IT', '101+ Pengetahun Bikin Kamu Mahir IT ini berisi kumpulan pengetahuan praktis dan paling penting dalam dunia IT. Berdasarkan pengalaman mengajar selama 13 tahun serta profesi sebagai IT Manager selama 8 tahun, maka dirangkum sebuah buku yang berisi pengetahuan yang tidak akan Anda dapatkan sekedar belajar sendiri atau di bangku kuliah. Orang awam pun akan banyak mendapatkan manfaat dari buku ini.\r\n\r\nPengetahuan pada buku ini digolongkan ke dalam beberapa kategori, yaitu Sejarah Teknologi Informasi, Internet, Perangkat Keras dan Lunak, Algoritma dan Pemrograman, Basis Data, Digital Imaging, Online Shop, Keamanan Komputer, dan Ergonomika IT.\r\n\r\nIsi buku ini dijamin akan membuka wawasan Anda dalam khazanah IT Modern!', 45000, 'ID_PBK2018MTH10PBK.jpg', '2022-07-09 16:22:08', '2022-07-09 16:22:08'),
(16, 'Buku Dasar- Dasar Teknik Informatika', 'Novega pratama adiputra', 'IT', 'Perkembangan di bidang TIK (Teknologi Informasi dan Komunikasi) saat ini sangat pesat dan berpengaruh signifikan  terhadap pribadi maupun komunitas, segala aktivitas, kehidupan, cara kerja, metode perkuliahan, gaya hidup maupun cara berpikir. Adapun jenis-jenis TIK yang kita kenal selama ini adalah radio; televisi; telepon (fixed dan mobile); faksimile; electronic recording (audio dan video); komputer dengan segala peripherals seperti software, hardware, dan useware (program atau isi informasi); dan jaringan (lokal, wilayah, dan global/internet).', 90000, 'download1.jpg', '2022-07-09 16:24:36', '2022-07-09 16:24:36'),
(17, 'Buku Pengantar Jaringan Komputer Pendekatan Praktis Untuk Pemula', 'Agung Suprapto, M.Eng.', 'IT', 'Jaringan komputer adalah cikal bakal munculnya teknologi internet yang saat ini sangat berpengaruh di kehidupan manusia modern. Pengetahuan tentang jaringan komputer menjadi fondasi penting untuk mengembangkan teknologi canggih masa depan yang berjalan di atas internet. Oleh karena itu, buku ini menjelaskan secara jelas dan padat tentang pengetahuan jaringan komputer.\r\n\r\nBuku ini berisikan uraian padat mengenai hal-hal terkait jaringan komputer, yang meliputi pengenalan jaringan, klasifikasi jenis dan macam-macam perangkat jaringan, virtual LAN, OSI model dan TCP/IP model, subneting, media jaringan komputer, IP routing, network address translation (NAT), networking tool, troubleshooting, kemananan jaringan, manajemen jaringan, dan pemahaman IP address serta mac address.', 106000, 'Jaringan-Komputer_Agung-Suprapto-rev-2.0-convert-cover-depan-scaled.jpg', '2022-07-09 16:26:42', '2022-07-09 16:26:42'),
(18, 'Buku Konsep Data Mining Buku Konsep Data Mining Dan Penerapan', 'Deny Jollyta, S.Kom, M.Kom, William Ramdhan , Muhammad Zarlis', 'IT', 'Data mining merupakan salah satu ilmu komputer yang mengalami perkembangan sangat pesat dan secara kontinu mampu memberikan solusi bagi berbagai permasalahan, seperti prediksi, klasifikasi, hingga optimasi. Jumlah data yang sangat besar dan tersimpan seolah tanpa arti dapat digali dan menghasilkan informasi yang jauh lebih besar manfaatnya bagi perusahaan maupun instansi.', 136000, 'Konsep-Data-Mining-dan-Penerapan_Deny-Jollyta-rev-1.0-depan-scaled-300x400.jpg', '2022-07-09 16:28:47', '2022-07-09 16:28:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_07_07_070500_create_pesanans_table', 1),
(3, '2022_07_07_070525_create_users_table', 1),
(4, '2022_07_07_070542_create_admins_table', 1),
(5, '2022_07_07_081903_create_buukus_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telpon` bigint(20) NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metod_bayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buku_pesanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_pesanan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buukus`
--
ALTER TABLE `buukus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `buukus`
--
ALTER TABLE `buukus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
