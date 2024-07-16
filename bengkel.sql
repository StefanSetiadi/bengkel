-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2024 at 12:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bengkel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', NULL, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` bigint(20) UNSIGNED NOT NULL,
  `id_customer` bigint(20) UNSIGNED NOT NULL,
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `no_kendaraan` varchar(255) NOT NULL,
  `status_booking` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `waktu` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id_customer` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id_customer`, `nama`, `email`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'customer', 'customer@gmail.com', '$2y$10$SDBgiVrhmGJ1f2VwMiUlce/.k0195flQX2NZtZZUqrXwlv6kENwWi', NULL, NULL, '2024-06-28 03:43:47', '2024-06-28 03:43:47'),
(7, 'test', 'test@gmail.com', '$2y$10$HThIb4N.1JTMe.Ho/XRMlu8l3n.w9rl1fGblZ7XklEdhEz6T2qgee', NULL, NULL, '2024-06-28 03:56:15', '2024-06-28 03:56:15'),
(8, 'stefan', 'stefan@gmail.com', '$2y$10$gCrwADJGd75NyKzjqtGAWO5YedMr2Nof2.Zg2TBNzGz88oinpGrPC', NULL, NULL, '2024-06-28 18:27:34', '2024-06-28 18:27:34'),
(9, 'ahmad', 'ahmad@gmail.com', '$2y$10$oh1H/nCgxMtcg8e4baPaeORrpT26u3p1259N9E.Anefsx2gq/dOjC', NULL, NULL, '2024-06-28 19:30:17', '2024-06-28 19:30:17');

-- --------------------------------------------------------

--
-- Table structure for table `detail_service`
--

CREATE TABLE `detail_service` (
  `id_detail_service` bigint(20) UNSIGNED NOT NULL,
  `id_service` bigint(20) UNSIGNED NOT NULL,
  `id_sparepart` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_service`
--

INSERT INTO `detail_service` (`id_detail_service`, `id_service`, `id_sparepart`, `jumlah`, `subtotal`, `created_at`, `updated_at`) VALUES
(22, 7, 1, 1, 210000, '2024-07-16 10:39:46', '2024-07-16 10:39:46'),
(23, 7, 4, 5, 180000, '2024-07-16 10:39:49', '2024-07-16 10:40:03');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` bigint(20) UNSIGNED NOT NULL,
  `id_sparepart` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail_transaksi`, `id_transaksi`, `id_sparepart`, `jumlah`, `subtotal`, `created_at`, `updated_at`) VALUES
(38, 24, 4, 1, 36000, '2024-07-16 10:36:37', '2024-07-16 10:36:37'),
(39, 25, 2, 1, 68000, '2024-07-16 10:38:14', '2024-07-16 10:38:14'),
(40, 26, 5, 1, 350000, '2024-07-16 10:38:23', '2024-07-16 10:38:23');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` bigint(20) UNSIGNED NOT NULL,
  `id_customer` bigint(20) UNSIGNED NOT NULL,
  `id_sparepart` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2024_06_24_064625_create_sparepart_table', 1),
(5, '2024_06_24_064708_create_customers_table', 1),
(6, '2024_06_24_064718_create_admin_table', 1),
(7, '2024_06_24_064723_create_booking_table', 1),
(8, '2024_06_27_062400_create_service', 1),
(9, '2024_06_27_062410_create_detail_service', 1),
(10, '2024_06_27_062437_create_transaksi', 1),
(11, '2024_06_27_062447_create_keranjang', 1),
(12, '2024_06_27_062457_create_detail_transaksi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id_service` bigint(20) UNSIGNED NOT NULL,
  `id_customer` bigint(20) UNSIGNED NOT NULL,
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `no_kendaraan` varchar(255) NOT NULL,
  `biaya_sparepart` int(11) DEFAULT NULL,
  `biaya_jasa` int(11) NOT NULL,
  `total_biaya` int(11) NOT NULL,
  `snap_token` varchar(255) DEFAULT NULL,
  `status_pembayaran` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id_service`, `id_customer`, `id_admin`, `no_kendaraan`, `biaya_sparepart`, `biaya_jasa`, `total_biaya`, `snap_token`, `status_pembayaran`, `created_at`, `updated_at`) VALUES
(7, 8, 1, 'Z 2804 HC', 390000, 100000, 490000, '654d514a-64e2-4b68-8ba4-201231fcf3ab', 1, '2024-07-16 10:39:39', '2024-07-16 10:40:39');

-- --------------------------------------------------------

--
-- Table structure for table `sparepart`
--

CREATE TABLE `sparepart` (
  `id_sparepart` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sparepart`
--

INSERT INTO `sparepart` (`id_sparepart`, `nama`, `harga`, `jumlah`, `deskripsi`, `image`, `created_at`, `updated_at`) VALUES
(1, 'OLI MOBIL SHELL HELIX HX6 10W-40 | HX6 4 LITER | BARCODE HIJAU', 210000, 49973, 'Shell Helix HX6 10W-40 dirancang untuk:\r\n- Mesin bensin, diesel, dan gas,\r\n- Cocok untuk mesin berbahan bakar biodiesel dan campuran bensin/etanol.\r\n\r\nKeunggulan:\r\n1. Active Cleansing Technology sebagai perlindungan mesin dari keausan dan lumpur yang dapat diandalkan,\r\n2. Membantu memperpanjang usia mesin dengan perlindungan terhadap keausan,\r\n3. Membantu menjaga perlindungan selama pengeringan oli.', 'img/sparepart/ZtFYAVV0cLPRt3BGkKT0nbxrwetID4nredudAdkS.jpg', '2024-06-28 01:04:31', '2024-07-16 09:40:47'),
(2, 'Oli Transmisi MOBIL Matic IDEMITSU ATF 1 Liter', 68000, 38, 'Oli Merk IDEMITSU ATF untuk Transmisi Mobil Matic, (Automatic Transmission) , kemasan 1 liter.\r\nmerupakan oli yang diformulasikan di Jepang.\r\n\r\nKeunggulan Oli Transmisi Automatic Idemitsu Multi Purpose ATF antara lain:\r\n\r\n- Cairan transmisi matic yang tahan lama\r\n- Perlindungan maksimal gearbox dari keausan pada saat mesin dihidupkan\r\n- Perlindungan dan performa maksimal pada suhu tinggi dan beban berat\r\n- Kesesuaian dengan hampir semua model kendaraan buatan jepang, eropa, amerika dan korea', 'img/sparepart/3fVI437Lh4gtIMPYHtVzJy84Hs5kSxabS6zGJon9.jpg', '2024-06-28 01:11:50', '2024-07-16 10:38:10'),
(3, 'Shell Rimula R4 Plus 15w40 5L Cocok buat semua mobil Diesel', 225040, 48, 'SHELL RIMULA\r\nR4X 5 L | 15W 40 5 LITER\r\nORIGINAL BARCODE ENGINE OIL | OLI MOBIL\r\nCara Cek KEASLIAN Oli :\r\n1. Scan Barcode diatas tutup botol saat barang diterima. Cara nya bisa tanya Seller / Tutorial Youtube\r\n2. Saat anda sudah Scan Barcode diatas tutup Botol Shell Helix, anda akan langsung masuk ke Web ac.shell.com, lalu bisa lanjutkan di slide / geser lalu continue.\r\n3. Setelah itu akan terlihat notifikasi Keaslian Produk & Centang Hijau\r\n4. Hati-Hati Oli Shell Palsu banyak beredar, walaupun ada barcode bisa saja bukan centang hijau tetapi silang merah. Selalu tes & scan Barcode Oli Shell Helix anda.', 'img/sparepart/xrf3EvPSiTmtgXcg4AfY2dGp0D6XkquGiHcmS9vp.jpg', '2024-06-28 01:13:24', '2024-07-16 10:36:02'),
(4, 'Bohlam Lampu Depan Agya Ayla Calya Sigra Brio Jazz Yaris H4 60 12 V', 36000, 48, 'Bohlam Lampu Depan Philips\r\n12V 60 55 Watt\r\ncocok untuk mobil\r\nAgya\r\nAyla\r\ncalya\r\nsigra\r\njazz\r\nyaris\r\nBRIO\r\ncahaya Warna Kuning\r\nmodel H4 12 V 60 / 55 Watt\r\nORI PHILIPS', 'img/sparepart/Ud60nNZiGLh4xItG7bsxhxZC88liT9QMHJXMVRvC.jpg', '2024-06-28 01:17:36', '2024-07-16 10:36:31'),
(5, 'Shockbreaker Shock Absorber Depan Avanza, Xenia 2004-2011 Original', 350000, 49, 'Harga per piece shock breaker\r\nBarang Original Toyota\r\nBarang baru\r\n\r\nBergaransi\r\n\r\nMonggo Diorder bosku', 'img/sparepart/WTQISFhup65jbDrYp6E2o81IK3wnGBr6vHyjCdYR.jpg', '2024-06-28 01:19:19', '2024-07-16 10:38:20'),
(6, 'Wiper Mobil Toyota New Avanza (2013-on) Sepasang Bosch Advantage', 72500, 50, 'Wiper Mobil Toyota New Avanza (2013-on) Ukuran 21\" & 14\" Sepasang (2pcs) Bosch Advantage\r\n\r\n- Cocok dengan 96% kendaraan\r\n- Bebas gangguan dengan mudah pemasangan\r\n- Performa penyadapan yang superior di daerah beriklim tropis\r\n- Struktur balok bebas korosi\r\n- Tetap seperti baru bahkan setelah 200.000 menghapus siklus\r\n- Inovatif, adaptor pre-mount klip cepat untuk instalasi mudah\r\n- Karet Alam dengan Perawatan Grafit eksklusif, potongan tepi yang presisi untuk iklim tropis\r\n- Konsisten menghapus kinerja yang diberikan oleh pegas baja\r\n- Aerodynamic Symmetrical Wind Spoiler yang menggunakan aliran udara untuk meningkatkan tekananan ke windscreen, sehingga dapat melawan angin kencang.', 'img/sparepart/8VpXVKGsE9t2fFwAbHW6JUqdNtyqi0LnYflbUclR.jpg', '2024-06-28 01:21:42', '2024-06-28 01:21:42'),
(8, 'Kampas Rem belakang TDW akebono Avanza - Xenia Brake shoe Original', 120900, 49, 'kanvas rem belakang TDW Original 100%\r\nAFTDW04-2-11\r\n(TDW Brake dibawah Lisensi Akebono Brake Industry CO., LTD. JAPAN) \r\n*1set= untuk 2roda belakang\r\n\r\nInterchange number:\r\n- 04495-YZZQ1\r\n\r\nUntuk Kendaraan :\r\nTOYOTA \r\n- Avanza - New Avanza - All new Avanza - Grand New Avanza \r\n2004-2021\r\n\r\nDAIHATSU\r\n- Xenia - New Xenia - All new Xenia - Great/Grand new Xenia \r\n2004-2021\r\n\r\nDIPRODUKSI Oleh:\r\nPT AKEBONO BRAKE ASTRA INDONESIA\r\nMADE IN INDONESIA original 100%\r\n\r\nkanvas berdaya cengkram tinggi \r\ndan tidak menimbulkan bunyi. \r\nKampas Rem dengan 3 keunggulan :\r\n- Tidak Berdecit\r\n- Pakem &Tidak Merusak Piringan/ Cakram\r\n- Kampas Rem Non Asbestos\r\n\r\ndistributor \r\nPT ASTRA OTOPART Tbk\r\n\r\n+ Best Friction\r\n+ Best Long Losting\r\n+ Less Dust \r\n+ No Noise / tidak bunyi', 'img/sparepart/qULyY9Z2oVChmjsqbYdpHLWy6iALIqX6DyV6WMTo.jpg', '2024-06-28 01:23:05', '2024-07-16 10:10:12'),
(9, 'ARSYLED Lampu Senja LED Mobil T10 24 Arrow - Innova Avanza Calya Sigra - Putih', 18500, 48, 'Harga Tertera adalah harga 1 buah, bukan 1  pasang\r\n\r\nKeistimewaan :\r\n- Merek ARSYLED (MEREK terdaftar di Direktorat Jenderal Kekayanan intelektual)\r\n- Model Arrow / Panah dengan nyala merata.\r\n- LED 3030 24 TITIK (Terkenal sangat Terang)\r\n- Pemasangan langsung Colok\r\n\r\nLED INI SUPER BRIGHT dan SUPPORT RPM TINGGI !!! (jadi lebih awet)\r\n\r\nSpesifikasi\r\n1. Untuk lampu senja, sein, rem (t10)\r\n2. Socket dan body berbahan metal (lebih tahan panas)\r\n3. Dilengkapi dengan lensa proyektor\r\n4. Jumlah LED :24 titik SMD 3030 (lebih terang)\r\n5. Pnp non polar (tidak perlu dibolak balik pada saat pemasangan)\r\n6. Tegangan 12V sd 24V\r\n7. Daya dan ukuran ada digambar\r\n\r\nTerdapat retail box atau kemasan\r\n\r\nsoket t10 seperti \r\n1. Lampu senja mobil honda mobilio, brio, toyota avanza, xenia, terios, rush, suzuki ertiga dll\r\n2. Lampu sein motor\r\n3. Lampu mundur mobil toyota rush terios, new veloz, mobilio, brio, freed dll\r\n\r\nKhusus untuk sein motor, harus menggunakan flasher led atau dengan tambahan load resistor / bohlam existing.\r\n\r\nJika dipasang ke Senja motor, hanya bisa utk motor yg injeksi atau kelistrikan dr aki, bukan dr putaran mesin', 'img/sparepart/eQKGOYUwpEPwfeERq41XWdTx3vzxExh6ma93PwPy.jpg', '2024-06-28 01:24:15', '2024-07-16 10:21:05'),
(10, 'Spark Plug/Busi XU22PR9 Avanza 2006-On|Rush|Granmax DENSO Original', 23000, 50, 'Produk resmi diimpor atau didistribusi oleh PT. TOMBORO CENTRADENSO. Dijamin 100% ori DENSO.\r\n\r\nSpark Plug / Busi XU22PR9 DENSO (JP)\r\n\r\nAplikasi kendaraan:\r\n\r\n- Avanza VVTi (Sebelum 2015)\r\n- Xenia 1.3 VVTi (Sebelum 2015)\r\n- Rush (F700)\r\n- Terios (F700)\r\n- Granmax 1.3/1.5', 'img/sparepart/diGvIsBmWh4dEzeWHarvHj8hIfcseLNpUMYsIeNb.jpg', '2024-06-28 01:25:55', '2024-06-28 01:25:55'),
(11, 'Filter AC / Kabin Bosch Premium Toyota Innova Zenix Aeristo', 175000, 50, 'Filter AC / Kabin Bosch Premium Toyota Innova Zenix Aeristo\r\n\r\n- Standard Filtrasi 2.5 PM : Memiliki kemampuan memfilter partikel hingga 2.5 microns atau sebesar 3% dari diameter rambut manusia, hal ini membuatnya mampu menyaring 98% dari seluruh partikel di dalam kabin mobil\r\n- Anti Virus & Anti Bateria : Layer polyphenol alami mampu membunuh virus dan bakteri dengan cara memecah protein nya\r\n- Menyerap Bau : Layer activated carbon alami terbuat dari cangkang kelapa yang mampu menyerap bau termasuk yang berasal dari polusi kendaraan atau bau yang timbul dari dalam mobil\r\n- Anti alergi dan Jamur : Layer terluar yang unik mampu memfilter partikel penyebab alergi dan jamur\r\n\r\nAplikasi :\r\n\r\nToyota Alphard Gen 3\r\nToyota Innova Reborn / Zenix\r\nToyota Vellfire\r\nToyota Voxy\r\nNissan Serena C24\r\nNissan X-Trail T30\r\nMitsubishi Pajero Sport Gen 2', 'img/sparepart/gqHc1rFsUjcVLp0rKzl78QpsH8h5JCIDqeSSnqsa.jpg', '2024-06-28 01:27:34', '2024-06-28 01:27:34'),
(12, 'Filter Oli / Oil Filter Jazz Brio Mobilio Freed Bosch', 32000, 50, 'Filter Oli / Oil Filter Jazz Brio Mobilio Freed Bosch\r\n\r\nBosch Premium Oil Filter\r\n\r\n- Menjaga partikel-partikel berbahaya dan kotoran keluar\r\n- Mmencegah keausan dini dan kegagalan mesin\r\n- Filter oil premium tidak hanya sesuai dengan cara yang sama seperti filter OE asli, mereka memanfaatkan campuran eksklusif dari bahan-bahan alami dan sintetis di media untuk penyaringan minyak unggul dan peningkatan perlindungan mesin.\r\n- Efisiensi penyaringan hingga skala micron\r\n- Mencegah kerusakan mesin yang mahal\r\n- Memaksimalkan proteksi mesin yang maksimal\r\n- Cocok dan tetap pada kendaraan dengan cara yang sama sebagai filter asli\r\n\r\nAplikasi :\r\nHonda Stream\r\nHonda CRV\r\nHonda City\r\nHonda Freed\r\nHonda New Civic\r\nHonda Civic 2001\r\nHonda Jazz\r\nHonda Brio\r\nHonda Mobilio', 'img/sparepart/mn9jRl6z2HR2u01nz9INnCehtZoFcRw3qpkX5Rwa.jpg', '2024-06-28 01:29:29', '2024-06-28 01:29:29'),
(13, 'Filter Oli / Oil Filter Evalia Juke Xtrail Serena Bosch', 32000, 50, 'Filter Oli / Oil Filter Evalia Juke Xtrail Serena Bosch\r\n\r\nBosch Premium Oil Filter\r\n\r\n- Menjaga partikel-partikel berbahaya dan kotoran keluar\r\n- Mmencegah keausan dini dan kegagalan mesin\r\n- Filter oil premium tidak hanya sesuai dengan cara yang sama seperti filter OE asli, mereka memanfaatkan campuran eksklusif dari bahan-bahan alami dan sintetis di media untuk penyaringan minyak unggul dan peningkatan perlindungan mesin.\r\n- Efisiensi penyaringan hingga skala micron\r\n- Mencegah kerusakan mesin yang mahal\r\n- Memaksimalkan proteksi mesin yang maksimal\r\n- Cocok dan tetap pada kendaraan dengan cara yang sama sebagai filter asli\r\n\r\nAplikasi :\r\nNissan Xtrail\r\nNissan Serena\r\nNissan Teana\r\nNissan Juke\r\nNissan Evalia\r\nNissan Almera\r\nNissan GO 1.2\r\nNissan March 1.5', 'img/sparepart/HZsaj26UJFZPFqTjolXHQubOsyaoB0DmnWpcBfpV.jpg', '2024-06-28 01:30:36', '2024-06-28 01:30:36'),
(14, 'Filter Oli / Oil Filter Innova Old/Reborn Fortuner Hilux Bosch', 35000, 50, 'Filter Oli / Oil Filter Innova Old/Reborn Fortuner Hilux Bosch\r\n\r\nBosch Premium Oil Filter\r\n\r\n- Menjaga partikel-partikel berbahaya dan kotoran keluar\r\n- Mmencegah keausan dini dan kegagalan mesin\r\n- Filter oil premium tidak hanya sesuai dengan cara yang sama seperti filter OE asli, mereka memanfaatkan campuran eksklusif dari bahan-bahan alami dan sintetis di media untuk penyaringan minyak unggul dan peningkatan perlindungan mesin.\r\n- Efisiensi penyaringan hingga skala micron\r\n- Mencegah kerusakan mesin yang mahal\r\n- Memaksimalkan proteksi mesin yang maksimal\r\n- Cocok dan tetap pada kendaraan dengan cara yang sama sebagai filter asli\r\n\r\nAplikasi :\r\nToyota Innova\r\nToyota Fortuner\r\nToyota Hilux\r\nToyota Kijang 1.8\r\nSuzuki Carry\r\nSuzuki Futura', 'img/sparepart/0JZMVBfxnHh1Lo4dTrmGj7ws0UsFz55AKSiNL5IJ.jpg', '2024-06-28 01:31:30', '2024-06-28 01:31:30'),
(15, 'Filter Oli / Oil Filter Pajero Old L200 Strada Triton Bosch', 58000, 50, 'Filter Oli / Oil Filter Pajero Old L200 Strada Triton Bosch\r\n\r\nBosch Premium Oil Filter\r\n\r\n- Menjaga partikel-partikel berbahaya dan kotoran keluar\r\n- Mmencegah keausan dini dan kegagalan mesin\r\n- Filter oil premium tidak hanya sesuai dengan cara yang sama seperti filter OE asli, mereka memanfaatkan campuran eksklusif dari bahan-bahan alami dan sintetis di media untuk penyaringan minyak unggul dan peningkatan perlindungan mesin.\r\n- Efisiensi penyaringan hingga skala micron\r\n- Mencegah kerusakan mesin yang mahal\r\n- Memaksimalkan proteksi mesin yang maksimal\r\n- Cocok dan tetap pada kendaraan dengan cara yang sama sebagai filter asli\r\n\r\nAplikasi :\r\nMitsubishi L-300\r\nMitsubishi L-200\r\nMitsubishi Strada\r\nMitsubishi Triton\r\nMitsubishi Pajero Sport\r\nMitsubishi Kuda Diesel', 'img/sparepart/qQ77YFbNqYRl7ERsKSCOZ7A5YLSVmNjKiBdtdEsI.jpg', '2024-06-28 01:32:13', '2024-06-28 01:32:13'),
(16, 'Wiper Frameless Honda All New BRV 2022 - On Sepasang Bosch', 126000, 50, 'Wiper Frameless Honda All New BRV Sepasang Bosch Ukuran 24\" & 16\"\r\n\r\n- Cocok dengan 96% kendaraan\r\n- Bebas gangguan dengan mudah pemasangan\r\n- Performa penyadapan yang superior di daerah beriklim tropis\r\n- Struktur balok bebas korosi\r\n- Tetap seperti baru bahkan setelah 200.000 menghapus siklus\r\n- Inovatif, adaptor pre-mount klip cepat untuk instalasi mudah\r\n- Karet Alam dengan Perawatan Grafit eksklusif, potongan tepi yang presisi untuk iklim tropis\r\n- Konsisten menghapus kinerja yang diberikan oleh pegas baja\r\n- Aerodynamic Symmetrical Wind Spoiler yang menggunakan aliran udara untuk meningkatkan tekananan ke windscreen, sehingga dapat melawan angin kencang.', 'img/sparepart/ewkMBPpmvY8U9hoMjAnCPFZ00ys250dv6xYeO4ZN.jpg', '2024-06-28 01:33:18', '2024-06-28 01:33:18'),
(17, 'Link Stabilizer Toyota Avanza Daihatsu Xenia | 555 Japan Original - 1 pcs', 50000, 20, 'Link Stabilizer Toyota Avanza Daihatsu Xenia\r\n\r\n555 Japan Original\r\n\r\nReady Stock!\r\n\r\nDipersilahkan untuk menanyakan informasi tentang produk-produk dan ketersediaan stok produk dalam toko kami, konsultasi via chat tokopedia / WA (082360777888).\r\n\r\nTerima Kasih!', 'img/sparepart/2PfEG8FNXpjvsbkj1XhALEJ7ipYdLY2aeHMTlBl2.jpg', '2024-06-28 06:57:12', '2024-06-28 06:57:12'),
(18, 'filter kabin ac all new rush terios', 37500, 0, 'asdf', 'img/sparepart/WS7FR6fo0upJbvSf2N3h8gkfU5zilo0iPGhtTjsu.jpg', '2024-06-28 19:33:21', '2024-06-28 19:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` bigint(20) UNSIGNED NOT NULL,
  `id_customer` bigint(20) UNSIGNED NOT NULL,
  `total_biaya` int(11) NOT NULL,
  `snap_token` varchar(255) DEFAULT NULL,
  `status_pembayaran` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_customer`, `total_biaya`, `snap_token`, `status_pembayaran`, `created_at`, `updated_at`) VALUES
(24, 8, 36000, '62bcd95c-ed81-4f23-ad4b-188992375ce4', 1, '2024-07-16 10:36:37', '2024-07-16 10:37:00'),
(25, 8, 68000, '1e7735e5-bc76-4e90-8527-b8cb95c476f8', 1, '2024-07-16 10:38:14', '2024-07-16 10:38:57'),
(26, 8, 350000, '0c2e2557-fdb4-45dd-8162-c357b1add0ad', 1, '2024-07-16 10:38:23', '2024-07-16 10:38:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `booking_id_customer_foreign` (`id_customer`),
  ADD KEY `booking_id_admin_foreign` (`id_admin`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `detail_service`
--
ALTER TABLE `detail_service`
  ADD PRIMARY KEY (`id_detail_service`),
  ADD KEY `detail_service_id_service_foreign` (`id_service`),
  ADD KEY `detail_service_id_sparepart_foreign` (`id_sparepart`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `detail_transaksi_id_transaksi_foreign` (`id_transaksi`),
  ADD KEY `detail_transaksi_id_sparepart_foreign` (`id_sparepart`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `keranjang_id_customer_foreign` (`id_customer`),
  ADD KEY `keranjang_id_sparepart_foreign` (`id_sparepart`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `sparepart`
--
ALTER TABLE `sparepart`
  ADD PRIMARY KEY (`id_sparepart`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `transaksi_id_customer_foreign` (`id_customer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id_customer` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `detail_service`
--
ALTER TABLE `detail_service`
  MODIFY `id_detail_service` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sparepart`
--
ALTER TABLE `sparepart`
  MODIFY `id_sparepart` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_id_admin_foreign` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `booking_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id_customer`);

--
-- Constraints for table `detail_service`
--
ALTER TABLE `detail_service`
  ADD CONSTRAINT `detail_service_id_service_foreign` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`),
  ADD CONSTRAINT `detail_service_id_sparepart_foreign` FOREIGN KEY (`id_sparepart`) REFERENCES `sparepart` (`id_sparepart`);

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_id_sparepart_foreign` FOREIGN KEY (`id_sparepart`) REFERENCES `sparepart` (`id_sparepart`),
  ADD CONSTRAINT `detail_transaksi_id_transaksi_foreign` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id_customer`),
  ADD CONSTRAINT `keranjang_id_sparepart_foreign` FOREIGN KEY (`id_sparepart`) REFERENCES `sparepart` (`id_sparepart`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_id_admin_foreign` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `service_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id_customer`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id_customer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
