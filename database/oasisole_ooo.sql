-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 03:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oasisole_ooo`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahandasar`
--

CREATE TABLE `bahandasar` (
  `idbahan` bigint(20) UNSIGNED NOT NULL,
  `namabahan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambarbahan` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pantangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `manfaat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bahandasar`
--

INSERT INTO `bahandasar` (`idbahan`, `namabahan`, `gambarbahan`, `pantangan`, `created_at`, `updated_at`, `manfaat`) VALUES
(1, 'Kacang', 'https://cdn.discordapp.com/attachments/906163180328325130/906354771626176602/Kacang.jpg', 'penderita asma---Konsumsi kacang awalnya bisa menyebabkan sesak nafas, rasa panas di perut, mual dan muntah. Dalam waktu singkat racun dari kacang yang memicu alergi bisa membuat penderita asma tidak bisa bernafas.', NULL, NULL, '1. Membangun dan memperbaiki sel-sel tubuh---2. Mencegah kolesterol tinggi---3. Melancarkan pencernaan---4. Menurunkan berat badan---5. Mengelola kadar gula darah---6. Menjaga kesehatan jantung---7. Pencegahan batu empedu---8. Mencegah bayi lahir cacat---9. Mencegah anemia---10. Menjaga kesehatan kulit\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n'),
(2, 'Kopi', 'https://cdn.discordapp.com/attachments/906163180328325130/906354818346536960/Kopi.jpg', 'penderita asam lambung---Kopi dapat meningkatkan asam lambung dan memicu maag kronis, refluks asam dan iritasi lambung', NULL, NULL, '1. Menurunkan risiko kanker---2. Menurunkan berat badan---3. Murunkan risiko diabetes tipe 2---4. Mengurangi risiko terjangkit alzheimer---5. Melindungi organ hati---6. Meningkatkan energi dan fungsi otak---7. Meningkatkan suasana hati(mood)\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n'),
(3, 'Tepung', 'https://cdn.discordapp.com/attachments/906163180328325130/906354901368590447/Tepung.jpg', 'Bagi Penderita diabetes tipe 2---Apabila mengkonsumsi makanan dari tepung yang mengandung karbohidrat rafinasi, beberapa resiko kesehatan lain yang dapat terjadi adalah obesitas,  dan penyakit jantung', NULL, NULL, '1. membantu pembentukan gluten dan mempercepan pematangan---2. Membantu pembentukan energi dari karbohidrat dan lemak---3. Meningkatkan protein dan menghasilkan gluten dengan kualitas istimewa---4. Menaikkan level gula darah'),
(4, 'Talas', 'https://cdn.discordapp.com/attachments/906163180328325130/906354859547177040/Talas.jpg', 'Penderita obesitas---Dalam 100 gram talas terkandung 112 kalori sehingga bisa menjadi masalah buat mereka yang ingin menurunkan berat badan. Kadar karbohidrat talas juga lebih tinggi dari kentang. Jadi terlalu banyak makan talas bisa membuat gemuk.', NULL, NULL, '1. Menjaga kesehatan pencernaan---2. Membantu menurunkan berat badan---3. Meningkatkan kesehatan jantung---4. Mengendalikan tekanan darah---5. Mengontrol kadar gula darah---6. Kaya akan antioksidan---7. Membantu memenuhi kebutuhan seng'),
(5, 'Cabai', 'https://cdn.discordapp.com/attachments/906163180328325130/919055589697552404/Cabai.jpg', 'Penderita asam lambung---Konsumsi caba sebaiknya dilakukan setelah makan. Konsumsi cabai yang berlebihan dapat mengakibatkan maag dan peradangan pada usus.', NULL, NULL, '1. Meringankan rasa sakit---2. Menurunkan berat badan---3. Memelihara kesehatan pencernaan---4. Menjaga kadar gula darah---5. Mengurangi risiko penyakit jantung dan pembuluh darah---6. Menurunkan risiko kanker---7. Melancarkan pernapasan---8. Menjaga kesehatan mata'),
(6, 'Jahe', 'https://cdn.discordapp.com/attachments/906163180328325130/918198110935715921/Jahe.jpg', 'Ibu hami---Dosis yang aman mengonsumsi jahe bagi ibu hamil sebanyak 1500 mg dalam sehari. Jika dikonsumsi lebih dari itu, ahli kandungan memperingatkan bahwa jahe bisa menimbulkan risiko terjadinya pendarahan hingga keguguran\r\n', NULL, NULL, '1. Anti Penuaan dan Kanker---2. Meredakan Nyeri Haid---3. Menurunkan Glukosa Darah sampai Kolesterol---4. Memperkuat Sistem Imun---5. Menangkal Infeksi Bakteri dan Virus---6. Meredakan Sakit Otot---7. Meredakan Morning Sickness---8. Mengatasi Masalah Pencernaan'),
(7, 'Buah-buahan', 'https://cdn.discordapp.com/attachments/906163180328325130/918540381967233054/Buah.jpeg', 'Penderita asam lambung---Memakan buah-buahan yang masam dengan berlebih dapat menyebabkan peningkatan asam lambung', NULL, NULL, '1. Mengurangi terkena risiko penyakit jantung, diabetes tipe 2, obesitas, stroke, kanker, dan sebagainya---2. Memenuhi Asupan Vitamin, Nutrisi dan Mineral---3. Memerangi Radikal Bebas---4. Menjaga Tubuh Tetap Bugar---5. Menjaga Kesehatan Tulang---6. Meningkatkan Kinerja Otak---7. Menghidrasi Tubuh---8. Menjaga Kesehatan Kulit---9. Memberikan Energi---10. Menjaga Kesehatan Sistem Pencernaan---11. Menurunkan Berat Badan'),
(8, 'Jamur', 'https://cdns.klimg.com/merdeka.com/i/w/news/2020/12/06/1250450/670x335/15-jenis-jenis-jamur-yang-bisa-dikonsumsi-beserta-manfaatnya-bagi-kesehatan.jpeg', 'Penderita alergi jamur---Bagi orang-orng tertentu yng menderita lergi jamur, mengkonsumsi jamur dapat menyebabkan kelelahan, sakit perut, alergi kulit, sensasi kesemutan, sakit kepala dan perasaan cemas.', NULL, NULL, '1. Mencegah kanker---2. Menjaga kesehatan jantung---3. Meningkatkan kekebalan tubuh---4. Menurunkan kadar kolesterol dalam darah---5. Menjaga kesehatan otot dan saraf---6. Menjaga kesehatan tulang---7. Menurunkan risiko diabetes'),
(9, 'Tahu', 'https://cdn.discordapp.com/attachments/906163180328325130/917472030117490698/Tahu.jpg', 'Penderita asam urat---Pengidap asam urat pantang untuk mengonsumsi makanan yang terbuat dari kedelai, seperti tahu dan tempe. Kandungan purin dalam tahu dan tempe dapat memicu kekambuhan asam urat pada sendi.', NULL, NULL, '1. Mencegah risiko serangan jantung---2. Mengurangi risiko kanker---3. Menurunkan berat badan---4. Melancarkan pencernaan---5. Mencegah risiko diabetes tipe 2---6. Mengurangi gejala menopause---7. Mencegah osteoporosis---8. Menjaga fungsi kognitif otak---9. Mengurangi penuaan kulit---10. Menurunkan kolesterol---11. Menjaga fungsi ginjal'),
(10, 'Gandum', 'https://cdn.discordapp.com/attachments/906163180328325130/918198089418932224/Gandum.jpg', 'Penderita celiac---Memakan makanan yang mengandung gluten seperti gandum dengan berlebih dapat menyebabkan gangguan pada usus kecil serta gangguan pada otak seperti epilepsi', NULL, NULL, '1. Mencegah dan mengatasi sembelit---2. Mendukung fungsi sistem pencernaan yang sehat dengan membantu menghilangkan bakteri jahat di usus---3. Menurunkan risiko penyakit kronis, seperti jantung, stroke, obesitas, dan diabetes tipe 2---4. Mengurangi peradangan kronis---5. Mengurangi risiko terkena kanker usus besar---6. Mendukung program diet dan membuat tubuh merasa kenyang lebih lama'),
(11, 'Beras', 'https://cdn.discordapp.com/attachments/906163180328325130/918198065335246908/Beras.jpg', 'Penderita diabetes melitus---Penentuan jenis beras harus disesuaikan dengan kandungan amilosa tinggi dan Indeks Glikemik (IG) rendah.', NULL, NULL, '1. Menyediakan energi---2. Mencegah obesitas---3. Mengontrol tekanan darah---4. Mencegah penyakit kanker---5. Perawatan kulit---6. Mencegah penyakit Alzheimer---7. Meningkatkan kualitas diuretik dan digestif---8. Meningkatkan metabolisme---9. Meningkatkan kesehatan kardiovaskular'),
(12, 'Ubi', 'https://cdn.discordapp.com/attachments/906163180328325130/918205230171176970/Ubi.jpg', 'Penderita tipes---tekstur ubi yang berserat ini  akan berdampak buruk terhadap kelangsungan pemulihan kesehatan penyakit tipes. Jika penderita tipes tetap memaksa memakannya, dikhawatirkan penyakit bisa semakin parah.', NULL, NULL, '1. Mencegah penyakit jantung---2. Menjaga berat badan---3. Mencegah kanker---4. Menjaga kesehatan mata---5. Mengurangi risiko terjadinya peradangan'),
(13, 'Kepiting', 'https://cdn.discordapp.com/attachments/906163180328325130/917471931521970236/Kepiting.jpg', 'penderita hipertensi---kepiting mengandung kadar natrium yang tinggi, sehingga disarankan untuk membatasi makan kepiting agar tidak berlebihan.', NULL, NULL, '1. Baik bagi kesehatan tulang---2. Meningkatkan kognisi dan fungsi keseluruhan sistem saraf---3. Menghilangkan peradangan---4. Menetralisir radikal bebas---6. Meningkatkan fungsi keseluruhan ginjal dan hati---7. Meningkatkan produksi sel darah merah'),
(14, 'Ikan', 'https://cdn.discordapp.com/attachments/906163180328325130/918181325138178088/Ikan.jpg', 'Penderita asam urat---Ikan memiliki kandungan purin yang cukup tinggi sehingga tidak baik untuk dikonsumsi bagi penderta asam urat. ', NULL, NULL, '1. Baik untuk perkembangan mata dan otak---2. meningkatkan kesehatan otak---3. Mencegah sekaligus mengatasi depresi---4. Mengurangi risiko penyakit autoimun---5. Menurunkan risiko stroke dan serangan jantung---6. Mencegah asma pada anak---7. Meningkatkan kualitas tidur---8. Mengurangi risiko lahir prematur'),
(15, 'Pisang', 'https://cdn.discordapp.com/attachments/906163180328325130/917471964355002398/Pisang.jpg', 'Penderita diabetes---Pisang mengandung gula dan karbohidrat yang tinggi. Hal ini dapat membuat kadar gula penderita melewati batas normal apabila dikonsumsi berlebihan.---Penderita maag---Pisang termasuk makanan yang mengandung kadar gas tinggi sehingga dapat memicu asam lambung naik dan menyebabkan gejala maag.', NULL, NULL, '1. Menjaga kesehatan jantung---2. Melancarkan sistem pencernaan---3. Menurunkan tekanan darah tinggi---4. Baik untuk anemia---5. Menyembuhkan luka bekas jerawat---6. membuat pikiran bahagia---8. Menstabilkan gula darah---10. Meningkatkan sensitivitas insulin---11. Menghindari penyakit ginjal---12. Meredakan mual dan muntah selama kehamilan---13. Mendukung perkembangan sistem saraf bayi'),
(16, 'Singkong', 'https://cdn.discordapp.com/attachments/906163180328325130/918181308423884850/Singkong.jpg', 'Penderita penyakit ginjal---Kadar gula dan kadar protein yang tinggi dapat menimbulkan rasa haus setelah mengkonsumsinya.', NULL, NULL, '1. Meningkatkan kesehatan usus---2. Membuat tulang lebih kuat---3. Menurunkan tekanan darah---4. Mencegah diabetes---5. Sumber energi'),
(17, 'Susu', 'https://cdn.discordapp.com/attachments/906163180328325130/918181282259812392/Susu.jpg', 'Penderita autoimun---produk susu tidak baik untuk dikonsumsi karena dapat merangsang respons imun', NULL, NULL, '1. Menguatkan tulang dan gigi---2. Mengoptimalkan pertumbuhan anak---3. Menetralisir racun di dalam tubuh---4. Mengurangi stress---5. Menjaga berat badan---6. Mengendalikan tekanan darah---7. Meningkatkan kesuburan---8. Menjaga dan membentuk otot---9. Menambah energi---10. Menjaga kesehatan kulit'),
(18, 'Bawang', 'https://cdn.discordapp.com/attachments/906163180328325130/906805541655969822/bawang.jpg', 'Penderita asam lambung---Bawang mengandung asam sehingga dapat berdampak pada naiknya asam lambung', NULL, NULL, '1. Baik untuk jantung---2. Cegah kanker---3. Baik untuk tulang dan darah---4. Baik untuk sistem pencernaan'),
(19, 'Daging Merah', 'https://cdn.discordapp.com/attachments/906163180328325130/918181260915011684/DagingSapi.jpg', 'Bagi penderita penyakit ginjal---Daging merah mengadung protein hewani yang sangat tinggi sehingga sulit untuk disaring oleh tubuh penderita penyakit ginjal---Bagi penderita asam lambung---Daging merah tergolong ke bahan makanan tinggi lemak yang tidak baik dikonsumsi karena dapat memicu naiknya asam lambung', NULL, NULL, '1. Mengobati anemia---2. Menaikkan kadar hemoglobin---3. Mengurangi kelelahan---4. Mendorong imunitas---5. Membuat individu bisa beristirahat lebih baik'),
(20, 'Cokelat', 'https://cdn.discordapp.com/attachments/906163180328325130/917467933540773948/Cokelat.jpg', 'Penderita asam lambung---Cokelat dapat menyebabkan penderita asam lambung menjadi semakin rentan terhadap refluks asam karena mengandung banyak lemak dan kafein', NULL, NULL, '1. Meningkatkan mood---2. Mengendalikan nafsu makan---3. Menjaga kesehatan jantung dan pembuluh darah---4.Mengontrol kadar gula darah---5. Menurunkan kadar kolesterol---6. Memelihara fungsi dan kesehatan otak---7. Menghambat pertumbuhan sel kanker'),
(21, 'Telur', 'https://cdn.discordapp.com/attachments/906163180328325130/918335371119591444/Telur.jpg', 'Penderita penyakit ginjal---Telur kaya akan protein sehingga membuat ginjal sulit untuk menyaringnya. Makanan berprotein yang tidak dapat disaring akan menumpuk menjadi racun bagi organ ginjal---Penderita autoimun---Telur dapat memicu peradangan dan memperparah gejala autoimun', NULL, NULL, '1. Membentuk jaringan tubuh dan membantu fungsinya---2. Menjaga kesehatan mata---3.Menjaga kesehatan otak---4.Menurunkan kadar kolesterol jahat---5. Membantu menurunkan risiko penyakit jantung---6. Membantu menjaga berat badan---7. Menguatkan sistem imun');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorit`
--

CREATE TABLE `favorit` (
  `idfavorit` bigint(20) UNSIGNED NOT NULL,
  `idoleh` bigint(20) UNSIGNED NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorit`
--

INSERT INTO `favorit` (`idfavorit`, `idoleh`, `id`) VALUES
(5, 5, 2),
(8, 7, 2),
(13, 1, 2),
(14, 6, 2),
(15, 4, 2),
(17, 26, 5),
(18, 10, 6),
(19, 7, 6),
(20, 11, 6),
(25, 25, 9),
(26, 50, 11),
(27, 22, 13),
(28, 24, 13);

--
-- Triggers `favorit`
--
DELIMITER $$
CREATE TRIGGER `hapusfavorit` BEFORE DELETE ON `favorit` FOR EACH ROW UPDATE `varianoleh` SET favorit_count=favorit_count-1
            WHERE idoleh=OLD.idoleh
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tambahfavorit` BEFORE INSERT ON `favorit` FOR EACH ROW UPDATE `varianoleh` SET favorit_count=favorit_count+1
            WHERE idoleh=NEW.idoleh
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `jenisoleh`
--

CREATE TABLE `jenisoleh` (
  `idjenis` bigint(20) UNSIGNED NOT NULL,
  `namajenis` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsijenis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambarjenis` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenisoleh`
--

INSERT INTO `jenisoleh` (`idjenis`, `namajenis`, `deskripsijenis`, `gambarjenis`, `created_at`, `updated_at`) VALUES
(1, 'Kacang-kacangan', 'Kacang adalah salah satu bahan makanan yang kaya nutrisi. Memiliki cita rasa yang gurih, kacang kerap diolah menjadi camilan nikmat untuk teman bersantai. ', 'https://cdn.discordapp.com/attachments/906163180328325130/906354771626176602/Kacang.jpg', NULL, NULL),
(2, 'Keripik', 'Keripik atau kripik adalah sejenis makanan ringan berupa irisan tipis dari umbi-umbian, buah-buahan, atau sayuran yang digoreng di dalam minyak nabati. Untuk menghasilkan rasa yang gurih dan renyah biasanya dicampur dengan adonan tepung yang diberi bumbu rempah tertentu.', 'https://cdn.discordapp.com/attachments/906163180328325130/906197474551672892/Renyah.jpg', NULL, NULL),
(3, 'Kue kering', 'Kue kering adalah kue dengan kadar air yang minimal, sehingga dapat tahan disimpan lebih lama daripada kue basah. Kue kering biasanya bertekstur keras tetapi renyah karena dibuat dengan cara dipanggang memakai oven. Kue kering memiliki daya tahan yang cukup lama. Bahan yang umum digunakan untuk pembuatan kue kering di antaranya tepung beras, tepung ketan, terigu, ataupun sagu. Kue kering lebih dikategorikan sebagai kue yang dipanggang mirip seperti kukis.', 'https://cdn.discordapp.com/attachments/906163180328325130/906197653568774174/Kering.jpg', NULL, NULL),
(4, 'Kue Basah', 'Kue basah merupakan makanan kecil yang bisa dijadikan alternatif camilan. Biasa disantap di pagi atau sore hari. Kue basah umumnya empuk, lembut, dan tidak bertahan lama (hanya bertahan beberapa hari). Biasanya terbuat dari tepung terigu, sagu, gula, bahkan ada yang berbahan santan atau ketan. Kue basah umumnya empuk, bertekstur lembut, dan tidak dapat bertahan lama (hanya bertahan beberapa hari atau kurang). Hal ini karena umumnya kue tradisional terbuat dari tepung beras, gula, dan santan, sehingga lekas basi. Kue basah biasanya dimasak dengan cara dikukus, direbus, atau digoreng. Kebanyakan kue tradisional Nusantara adalah kue basah, dan umumnya dapat ditemui di pasar tradisional di Indonesia.', 'https://cdn.discordapp.com/attachments/906163180328325130/906197896968429618/Basah.jpg', NULL, NULL),
(5, 'Manisan', 'Manisan adalah buah-buahan yang direndam dalam larutan gula selama beberapa waktu. Manisan biasanya dimakan sebagai hidangan pelengkap untuk merangsang nafsu makan. Teknologi membuat manisan merupakan salah satu cara pengawetan makanan yang sudah diterapkan sejak dahulu kala. Perendamanan manisan akan membuat kadar gula dalam buah meningkat dan kadar airnya berkurang.', 'https://cdn.discordapp.com/attachments/906163180328325130/906458761324036126/Manisan.jpg', NULL, NULL),
(6, 'Sambal', 'Sambal merupakan istilah besar yang dalam kuliner Indonesia merujuk pada saus maupun kondimen pedas. Secara garis besar, sambal berbahan utama cabai yang dilumatkan sehingga keluar kandungan sari cabai. Sambal salah satu unsur khas hidangan Indonesia', 'https://cdn.discordapp.com/attachments/906163180328325130/906457965161234442/Sambal.jpg', NULL, NULL),
(7, 'Minuman', 'Minuman merupakan cairan yang diperlukan oleh tubuh, menghilangkan dahaga ketika diminum', 'https://cdn.discordapp.com/attachments/906163180328325130/906197811014553610/Berair.png', NULL, NULL),
(8, 'Olahan Daging', 'Olahan daging merupakan tipe jenis oleh - oleh yang berasal dari hasil daging yang diolah dengan metode tertentu', 'https://cdn.discordapp.com/attachments/906163180328325130/917466509515833394/Olahan_Daging.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `list_oleh`
--

CREATE TABLE `list_oleh` (
  `idlistoleh` bigint(20) UNSIGNED NOT NULL,
  `idoleh` bigint(20) UNSIGNED NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `list_oleh`
--

INSERT INTO `list_oleh` (`idlistoleh`, `idoleh`, `id`) VALUES
(2, 22, 13);

--
-- Triggers `list_oleh`
--
DELIMITER $$
CREATE TRIGGER `hapuslistoleh` BEFORE DELETE ON `list_oleh` FOR EACH ROW UPDATE `varianoleh` SET list_count=list_count-1
            WHERE idoleh=OLD.idoleh
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tambahlistoleh` BEFORE INSERT ON `list_oleh` FOR EACH ROW UPDATE `varianoleh` SET list_count=list_count+1
            WHERE idoleh=NEW.idoleh
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `list_toko`
--

CREATE TABLE `list_toko` (
  `idlisttoko` bigint(20) UNSIGNED NOT NULL,
  `idtoko` bigint(20) UNSIGNED NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `list_toko`
--

INSERT INTO `list_toko` (`idlisttoko`, `idtoko`, `id`) VALUES
(4, 56, 13);

--
-- Triggers `list_toko`
--
DELIMITER $$
CREATE TRIGGER `hapuslist` BEFORE DELETE ON `list_toko` FOR EACH ROW UPDATE `toko_oleh` SET list_count=list_count-1
            WHERE idtoko=OLD.idtoko
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tambahlist` BEFORE INSERT ON `list_toko` FOR EACH ROW UPDATE `toko_oleh` SET list_count=list_count+1
            WHERE idtoko=NEW.idtoko
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `idlokasi` bigint(20) UNSIGNED NOT NULL,
  `kota` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambarlokasi` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`idlokasi`, `kota`, `provinsi`, `gambarlokasi`, `created_at`, `updated_at`) VALUES
(1, 'Banda Aceh', 'Aceh', 'https://cdn.discordapp.com/attachments/906163180328325130/906471250845638746/Banda_Aceh.jpg', NULL, NULL),
(2, 'Langsa', 'Aceh', 'https://cdn.discordapp.com/attachments/906163180328325130/906471449986990090/Langsa.jpg', NULL, NULL),
(3, 'Lhokseumawe', 'Aceh', 'https://cdn.discordapp.com/attachments/906163180328325130/906471823011639376/Lhokseumawe.jpg', NULL, NULL),
(4, 'Sabang', 'Aceh', 'https://cdn.discordapp.com/attachments/906163180328325130/906472137374720010/Sabang.jpg', NULL, NULL),
(5, 'Subulussalam', 'Aceh', 'https://cdn.discordapp.com/attachments/906163180328325130/906743720999780372/Sabulussalam.jpg', NULL, NULL),
(6, 'Medan', 'Sumatera Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906473015422894110/Medan.jpg', NULL, NULL),
(7, 'Binjai', 'Sumatera Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906473466193141760/Binjai.jpg', NULL, NULL),
(8, 'Gunungsitoli', 'Sumatera Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906473991819132979/Gunungsitoli.jpg', NULL, NULL),
(9, 'Padang sidempuan', 'Sumatera Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906474249294860328/Padangsidempuan.jpg', NULL, NULL),
(10, 'Pematang siantar', 'Sumatera Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906475082493333524/Pematangsiantar.jpg', NULL, NULL),
(11, 'Sibolga', 'Sumatera Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906475413939814400/Sibolga.jpeg', NULL, NULL),
(12, 'Tanjungbalai', 'Sumatera Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906475799564144690/Tanjungbalai.jpg', NULL, NULL),
(13, 'Tebing Tinggi', 'Sumatera Utara', 'https://irs1.4sqi.net/img/general/600x600/7826560_LP4xM9woSvEUPL1O-LEoeHZMqLTFmTrzs9pGxas0Qfw.jpg', NULL, NULL),
(14, 'Palembang', 'Sumatera Selatan', 'https://cdn.discordapp.com/attachments/906163180328325130/906504712994570250/Palembang.jpg', NULL, NULL),
(15, 'Lubuklinggau', 'Sumatera Selatan', 'https://cdn.discordapp.com/attachments/906163180328325130/906504761463963688/Lubuklinggau.jpg', NULL, NULL),
(16, 'Pagar Alam', 'Sumatera Selatan', 'https://cdn.discordapp.com/attachments/906163180328325130/906505529931759626/Pagar_Alam.jpg', NULL, NULL),
(17, 'Prabumulih', 'Sumatera Selatan', 'https://cdn.discordapp.com/attachments/906163180328325130/906505596835090432/Prabumulih.jpg', NULL, NULL),
(18, 'Padang', 'Sumatera Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906506104081641492/Padang.jpg', NULL, NULL),
(19, 'Bukittinggi', 'Sumatera Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906506164508954674/Bukittinggi.jpg', NULL, NULL),
(20, 'Padang panjang', 'Sumatera Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906506627392352256/Padangpanjang.jpeg', NULL, NULL),
(21, 'Payakumbuh', 'Sumatera Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906506696992632922/Payakumbuh.jpg', NULL, NULL),
(22, 'Sawahlunto', 'Sumatera Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906507461521973278/Sawahlunto.jpg', NULL, NULL),
(23, 'Solok', 'Sumatera Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906507604564537374/Solok.jpg', NULL, NULL),
(24, 'Pariaman', 'Sumatera Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906508200495423548/Pariaman.jpg', NULL, NULL),
(25, 'Bengkulu', 'Bengkulu', 'https://cdn.discordapp.com/attachments/906163180328325130/906573575723556864/Bengkulu.jpg', NULL, NULL),
(26, 'Tanjung Pinang', 'Kepulauan Riau', 'https://cdn.discordapp.com/attachments/906163180328325130/906573868431446016/Tanjung_Pinang.jpg', NULL, NULL),
(27, 'Batam', 'Kepulauan Riau', 'https://cdn.discordapp.com/attachments/906163180328325130/906574201740222494/Batam.jpg', NULL, NULL),
(28, 'Dumai', 'Riau', 'https://cdn.discordapp.com/attachments/906163180328325130/906574432368214026/Dumai.jpg', NULL, NULL),
(29, 'Pekanbaru', 'Riau', 'https://cdn.discordapp.com/attachments/906163180328325130/906574838112600094/Pekanbaru.jpg', NULL, NULL),
(30, 'Jambi', 'Jambi', 'https://cdn.discordapp.com/attachments/906163180328325130/906575075392765972/Jambi.jpg', NULL, NULL),
(31, 'Sungai Penuh', 'Jambi', 'https://cdn.discordapp.com/attachments/906163180328325130/906575385637027942/Sungai_Penuh.jpg', NULL, NULL),
(32, 'Bandar Lampung', 'Lampung', 'https://cdn.discordapp.com/attachments/906163180328325130/906576280558911488/Bandar_Lampung.jpg', NULL, NULL),
(33, 'Metro', 'Lampung', 'https://cdn.discordapp.com/attachments/906163180328325130/906576641675898880/Metro.jpg', NULL, NULL),
(34, 'Pangkal Pinang', 'Bangka Belitung', 'https://cdn.discordapp.com/attachments/906163180328325130/906578962237501520/Pangkal_Pinang.jpg', NULL, NULL),
(35, 'Pontianak', 'Kalimantan Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906579704121794570/Pontianak.jpg', NULL, NULL),
(36, 'Singkawang', 'Kalimantan Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906580075451940904/Singkawang.jpg', NULL, NULL),
(37, 'Samarinda', 'Kalimantan Timur', 'https://cdn.discordapp.com/attachments/906163180328325130/906580309770911834/Samarinda.jpg', NULL, NULL),
(38, 'Bontang', 'Kalimantan Timur', 'https://cdn.discordapp.com/attachments/906163180328325130/906581131271491584/Bontang.jpg', NULL, NULL),
(39, 'Balikpapan', 'Kalimantan Timur', 'https://cdn.discordapp.com/attachments/906163180328325130/906581978118250506/Balikpapan.jpg', NULL, NULL),
(40, 'Banjarmasin', 'Kalimantan Selatan', 'https://cdn.discordapp.com/attachments/906163180328325130/906582876831756359/Banjarmasin.jpg', NULL, NULL),
(41, 'Banjarbaru', 'Kalimantan Selatan', 'https://cdn.discordapp.com/attachments/906163180328325130/906583239605506098/Banjarbaru.jpeg', NULL, NULL),
(42, 'Palangkaraya', 'Kalimantan Tengah', 'https://cdn.discordapp.com/attachments/906163180328325130/906583539645026354/Palangkaraya.jpg', NULL, NULL),
(43, 'Tanjung Selor', 'Kalimantan Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906583771606843462/Tanjung_Selor.jpg', NULL, NULL),
(44, 'Tarakan', 'Kalimantan Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906584180438237224/Tarakan.jpg', NULL, NULL),
(45, 'Serang', 'Banten', 'https://tse3.mm.bing.net/th?id=OIP.F3U8bGGpMyllYUTzUaYkxAHaE7&pid=Api', NULL, NULL),
(46, 'Tangerang', 'Banten', 'https://cdn.discordapp.com/attachments/906163180328325130/906584871378501632/Tangerang.jpeg', NULL, NULL),
(47, 'Tangerang Selatan', 'Banten', 'https://ik.imagekit.io/tvlk/image/imageResource/2019/05/18/1558208793111-0dac6e323d5a491c72604ed7108a57f1.jpeg?tr=q-70', NULL, NULL),
(48, 'Cilegon', 'Banten', 'https://cdn.discordapp.com/attachments/906163180328325130/906590065520672778/Cilegon.jpg', NULL, NULL),
(49, 'Jakarta', 'DKI Jakarta', 'https://cdn.discordapp.com/attachments/906163180328325130/906590177089175602/Jakarta.jpg', NULL, NULL),
(50, 'Bandung', 'Jawa Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906590251865210900/Bandung.jpg', NULL, NULL),
(51, 'Banjar', 'Jawa Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906590361726648340/Banjar.jpg', NULL, NULL),
(52, 'Bekasi', 'Jawa Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906590865147973652/Bekasi.jpg', NULL, NULL),
(53, 'Bogor', 'Jawa Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906591637008961586/Bogor.jpeg', NULL, NULL),
(54, 'Cimahi', 'Jawa Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906591587457466438/Cimahi.jpg', NULL, NULL),
(55, 'Cirebon', 'Jawa Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906592001611407360/Cirebon.jpeg', NULL, NULL),
(56, 'Depok', 'Jawa Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906592278271909938/Depok.jpg', NULL, NULL),
(57, 'Sukabumi', 'Jawa Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906592571013341234/Sukabumi.jpg', NULL, NULL),
(58, 'Tasikmalaya', 'Jawa Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906592822008897576/Tasikmalaya.jpg', NULL, NULL),
(59, 'Semarang', 'Jawa Tengah', 'https://cdn.discordapp.com/attachments/906163180328325130/906593159058956368/Semarang.jpg', NULL, NULL),
(60, 'Tegal', 'Jawa Tengah', 'https://cdn.discordapp.com/attachments/906163180328325130/906593475045253130/Tegal.jpg', NULL, NULL),
(61, 'Surakarta', 'Jawa Tengah', 'https://cdn.discordapp.com/attachments/906163180328325130/906593722488217660/Surakarta.jpg', NULL, NULL),
(62, 'Salatiga', 'Jawa Tengah', 'https://cdn.discordapp.com/attachments/906163180328325130/906594048557580288/Salatiga.jpg', NULL, NULL),
(63, 'Pekalongan', 'Jawa Tengah', 'https://cdn.discordapp.com/attachments/906163180328325130/906594290992578630/Pekalongan.jpg', NULL, NULL),
(64, 'Magelang', 'Jawa Tengah', 'https://cdn.discordapp.com/attachments/906163180328325130/906594807361716266/Magelang.jpg', NULL, NULL),
(65, 'Yogyakarta', 'DI Yogyakarta', 'https://cdn.discordapp.com/attachments/906163180328325130/906594888685076500/Yogyakarta.jpg', NULL, NULL),
(66, 'Surabaya', 'Jawa Timur', 'https://cdn.discordapp.com/attachments/906163180328325130/906595139730944040/Surabaya.jpg', NULL, NULL),
(67, 'Batu', 'Jawa Timur', 'https://cdn.discordapp.com/attachments/906163180328325130/906595522490556486/Batu.jpg', NULL, NULL),
(68, 'Blitar', 'Jawa Timur', 'https://cdn.discordapp.com/attachments/906163180328325130/906595739612901426/Blitar.jpg', NULL, NULL),
(69, 'Kediri', 'Jawa Timur', 'https://cdn.discordapp.com/attachments/906163180328325130/906595913538076722/Kediri.jpg', NULL, NULL),
(70, 'Madiun', 'Jawa Timur', 'https://tse2.mm.bing.net/th?id=OIP.mRQQ_0yvNvT6riWNQ1V0vwHaE7&pid=Api', NULL, NULL),
(71, 'Malang', 'Jawa Timur', 'https://cdn.discordapp.com/attachments/906163180328325130/906596455177932871/Malang.jpg', NULL, NULL),
(72, 'Mojokerto', 'Jawa Timur', 'https://cdn.discordapp.com/attachments/906163180328325130/906602602261807154/Mojokerto.jpeg', NULL, NULL),
(73, 'Probolinggo', 'Jawa Timur', 'https://cdn.discordapp.com/attachments/906163180328325130/906602602261807154/Mojokerto.jpeg', NULL, NULL),
(74, 'Denpasar', 'Bali', 'https://cdn.discordapp.com/attachments/906163180328325130/906605444221521950/Denpasar.jpg', NULL, NULL),
(75, 'Kupang', 'Nusa Tenggara Timur', 'https://cdn.discordapp.com/attachments/906163180328325130/906605939623358484/Kupang.jpg', NULL, NULL),
(76, 'Bima', 'Nusa Tenggara Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906606245132243034/Bima.jpg', NULL, NULL),
(77, 'Mataram', 'Nusa Tenggara Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906606702584037416/Mataram.jpg', NULL, NULL),
(78, 'Gorontalo', 'Gorontalo', 'https://cdn.discordapp.com/attachments/906163180328325130/906607019811811358/Gorontalo.jpg', NULL, NULL),
(79, 'Mamuju', 'Sulawesi Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906607221121626152/Mamuju.jpg', NULL, NULL),
(80, 'Palu', 'Sulawesi Tengah', 'https://cdn.discordapp.com/attachments/906163180328325130/906607795116339290/Palu.jpg', NULL, NULL),
(81, 'Manado', 'Sulawesi Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906608015350853663/Manado.jpg', NULL, NULL),
(82, 'Bitung', 'Sulawesi Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906608622396653568/Bitung.jpg', NULL, NULL),
(83, 'Kotamobagu', 'Sulawesi Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906608622396653568/Bitung.jpg', NULL, NULL),
(84, 'Tomohon', 'Sulawesi Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906609088463511582/Tomohon.jpg', NULL, NULL),
(85, 'Kendari', 'Sulawesi Tenggara', 'https://cdn.discordapp.com/attachments/906163180328325130/906609667659145276/Kendari.jpg', NULL, NULL),
(86, 'Baubau', 'Sulawesi Tenggara', 'https://cdn.discordapp.com/attachments/906163180328325130/906609847762567178/Baubau.jpg', NULL, NULL),
(87, 'Makassar', 'Sulawesi Selatan', 'https://cdn.discordapp.com/attachments/906163180328325130/906610047520489472/Makassar.png', NULL, NULL),
(88, 'Palopo', 'Sulawesi Selatan', 'https://cdn.discordapp.com/attachments/906163180328325130/906610315578462218/Palopo.jpg', NULL, NULL),
(89, 'Parepare', 'Sulawesi Selatan', 'https://cdn.discordapp.com/attachments/906163180328325130/906610646156709898/Pare_Pare.jpg', NULL, NULL),
(90, 'Ternate', 'Maluku Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906611034914172968/Ternate.png', NULL, NULL),
(91, 'Tidore', 'Maluku Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906740346715795456/Tidore.jpg', NULL, NULL),
(92, 'Ambon', 'Maluku', 'https://cdn.discordapp.com/attachments/906163180328325130/906740554103156736/Ambon.jpg', NULL, NULL),
(93, 'Tual', 'Maluku', 'Maluku	https://cdn.discordapp.com/attachments/906163180328325130/906741383593861120/Tual.jpg', NULL, NULL),
(94, 'Manokwari', 'Papua Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906741701371117608/Manokwari.jpg', NULL, NULL),
(95, 'Sorong', 'Papua Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906742081035337778/Sorong.jpg', NULL, NULL),
(96, 'Jayapura', 'Papua', 'https://cdn.discordapp.com/attachments/906163180328325130/906742354118082590/Jayapura.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `masak`
--

CREATE TABLE `masak` (
  `idmasak` bigint(20) UNSIGNED NOT NULL,
  `namamasak` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambarmasak` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masak`
--

INSERT INTO `masak` (`idmasak`, `namamasak`, `gambarmasak`, `created_at`, `updated_at`) VALUES
(1, 'Dipanggang', 'https://cdn.discordapp.com/attachments/906163180328325130/906200479996968960/Dipanggang.jpg', NULL, NULL),
(2, 'Direbus', 'https://cdn.discordapp.com/attachments/906163180328325130/906200719277821962/Direbus.jpeg', NULL, NULL),
(3, 'Dikukus', 'https://cdn.discordapp.com/attachments/906163180328325130/906200537861603358/Dikukus.jpg', NULL, NULL),
(4, 'Digoreng', 'https://cdn.discordapp.com/attachments/906163180328325130/906200860084805632/Digoreng.jpg', NULL, NULL),
(5, 'Disangrai', 'https://cdn.discordapp.com/attachments/906163180328325130/906456515660115968/Disangrai.jpg', NULL, NULL),
(6, 'Direduksi', 'https://cdn.discordapp.com/attachments/906163180328325130/906457320794497054/Direduksi.jpg', NULL, NULL),
(7, 'Difermentasi', 'https://cdn.discordapp.com/attachments/906163180328325130/906200975033917450/Difermentasi.jpg', NULL, NULL),
(8, 'Digiling', 'https://cdn.discordapp.com/attachments/906163180328325130/906803300832268318/mengulek.jpg', NULL, NULL),
(9, 'Diperas', 'https://cdn.discordapp.com/attachments/906163180328325130/909673509507194910/diperas.jpg', NULL, NULL),
(10, 'Dibekukan', 'https://cdn.discordapp.com/attachments/906163180328325130/915619505064009749/Dibekukan.jpg', NULL, NULL),
(11, 'Dipresto', 'https://cdn.discordapp.com/attachments/906163180328325130/918385443261808680/Dipresto.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2021_11_01_050540_create_tipeoleh_table', 1),
(13, '2021_11_01_050653_create_lokasi_table', 1),
(14, '2021_11_01_050712_create_bahandasar_table', 1),
(15, '2021_11_01_050732_create_mitra_table', 1),
(16, '2021_11_01_050756_create_rasa_table', 1),
(17, '2021_11_01_050810_create_masak_table', 1),
(18, '2021_11_01_050821_create_tekstur_table', 1),
(19, '2021_11_01_051404_create_varianoleh_table', 1),
(20, '2021_11_01_051422_create_tempatbeli_table', 1),
(21, '2021_11_10_140709_perubahan_pada_tipeoleh', 2),
(22, '2021_11_10_142222_create_varian_jenis_table', 3),
(23, '2021_11_10_142339_penambahan_foreignkey', 4),
(24, '2021_11_10_144052_perbaikan_foreign_kedua', 5),
(25, '2021_11_10_145109_anu_anu_foreinkey', 6),
(26, '2021_11_10_164207_nambah_kolom_tempatbeli', 7),
(28, '2014_10_12_200000_add_two_factor_columns_to_users_table', 8),
(29, '2021_11_13_140257_create_sessions_table', 8),
(30, '2014_10_12_100000_create_password_resets_table', 9),
(31, '2019_08_19_000000_create_failed_jobs_table', 9),
(32, '2014_10_12_000000_create_users_table', 10),
(33, '2019_12_14_000001_create_personal_access_tokens_table', 11),
(34, '2021_11_15_085807_nambah_kolom', 12),
(35, '2021_11_16_071602_create_favorit_table', 13),
(36, '2021_11_18_072138_create_trigger_tambah_favorit_count', 14),
(37, '2021_11_18_074537_create_trigger_hapusfavorit', 15),
(38, '2021_11_22_043733_nambah_column_tempatbeli', 16),
(39, '2021_11_27_063230_nambah_kolom_oleh_tmpatbli', 17),
(40, '2021_11_27_071427_nambah_kolom_mitra', 18),
(41, '2021_11_28_071011_create_produk_mitra_table', 19),
(42, '2021_12_05_074245_ubah_kolom_kolom', 20),
(43, '2021_12_05_152409_nambah_kolomz', 21),
(44, '2021_12_09_081623_nambah_kolom_lokasi', 22),
(45, '2021_12_14_075124_drop_harga', 23),
(46, '2022_04_05_100249_create_toko_oleh_table', 24),
(47, '2022_04_13_070250_tambah__kolom__table__toko', 25),
(48, '2022_04_13_072302_create_toko_mitra', 25),
(49, '2022_04_13_072624_create_produk_toko', 25),
(50, '2022_04_13_073802_create_mitra_produk', 25),
(51, '2022_05_13_150624_tambah_kolom_users', 26),
(52, '2022_05_14_081428_ganti_kolom_mitra', 26),
(53, '2022_05_14_090321_ganti_kolom_users', 26),
(54, '2022_05_22_224810_tambah_rekomendasi', 26),
(55, '2022_05_23_135506_create_trigger_tambah_rekomendasi', 26),
(56, '2022_05_23_140518_tambah_kolom_toko', 26),
(57, '2022_05_24_220207_tambah_foregin_users', 26),
(58, '2022_05_25_081318_tambah_jam_opr', 26),
(59, '2022_05_26_083731_tambah_kolom_gambar', 26),
(60, '2022_05_26_221910_tambah_rekomendasioleh_table', 26),
(61, '2022_05_26_222312_create_trigger_rekomendasioleh_count', 26),
(62, '2022_05_26_222958_create_trigger_hapusrekomendasi_oleh', 26),
(63, '2022_06_01_215424_tambah_kolo_toko_oleh', 27),
(64, '2022_06_03_184247_create_list_toko', 28),
(65, '2022_06_03_184706_create_trigger_tambah_list_toko', 28),
(66, '2022_06_03_185942_create_list_toko', 29),
(67, '2022_06_03_190005_create_trigger_tambah_list_toko', 30),
(68, '2022_06_03_190100_create_trigger_hapus_list_toko', 30),
(69, '2022_06_10_030015_create_list_oleh', 31),
(70, '2022_06_10_030718_create_trigger_tambah_list_oleh', 31),
(71, '2022_06_10_030749_create_trigger_hapus_list_oleh', 31),
(72, '2022_06_10_105003_mengubah_table_toko', 32),
(73, '2022_06_10_110540_mengubah_table_toko', 33),
(74, '2022_06_12_091015_tambah_stok_mitra', 34),
(75, '2022_06_12_093520_tambah_gambar_produk_mitra', 34),
(76, '2020_07_31_181006_create_visits_table', 35),
(77, '2020_08_01_182940_create_page_table', 35);

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `idmitra` bigint(20) UNSIGNED NOT NULL,
  `namamitra` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idlokasi` bigint(20) UNSIGNED NOT NULL,
  `foto_mitra` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsimitra` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cicip` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gmap_mitra` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_mitra` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jam_buka_mitra` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeri_toko` mediumint(9) NOT NULL,
  `galeri_toko_caption` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`idmitra`, `namamitra`, `kontak`, `idlokasi`, `foto_mitra`, `deskripsimitra`, `created_at`, `updated_at`, `cicip`, `gmap_mitra`, `alamat_mitra`, `jam_buka_mitra`, `link`, `galeri_toko`, `galeri_toko_caption`) VALUES
(1, 'Sanjai Amak Haji', '(0752) 35480', 19, 'https://cdn.discordapp.com/attachments/906163180328325130/914050025682771978/lokasi_mitra.png', 'Sudah berdiri sejak 1984, usaha ini menjual produk oleh – oleh khas Sumatera Barat yaitu keripik sanjai beserta makanan khas lain seperti kue kering dan olahan manisan lainnya. Pembeli utama dari usaha ini adalah wisatawan yang datang ke toko fisik di kota Bukittinggi. ', NULL, NULL, 'Ada', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=Jl.%20Mr.%20Asa\'at%20No.33,%20Manggis%20Ganting,%20Kec.%20Mandiangin%20Koto%20Selayan,%20Kota%20Bukittinggi,%20Sumatera%20Barat%2026117&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/\"></a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">google maps on your website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', 'Jl. Mr. Asa\'at No.33, Manggis Ganting, Kec. Mandiangin Koto Selayan', '06.00–21.00 WIB Setiap Hari', NULL, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `mitra_produk`
--

CREATE TABLE `mitra_produk` (
  `id_produk_mitra` bigint(20) UNSIGNED NOT NULL,
  `nama_produk_mitra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_produk_mitra` int(11) NOT NULL,
  `kemasan_produk_mitra` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idmitra` bigint(20) UNSIGNED NOT NULL,
  `idoleh` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gambar_produkMitra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mitra_produk`
--

INSERT INTO `mitra_produk` (`id_produk_mitra`, `nama_produk_mitra`, `harga_produk_mitra`, `kemasan_produk_mitra`, `idmitra`, `idoleh`, `created_at`, `updated_at`, `gambar_produkMitra`) VALUES
(1, 'Spikoe', 10000, 'S', 1, 10, NULL, NULL, ''),
(2, 'Spikooe', 2000000, 'S', 1, 1, NULL, NULL, ''),
(3, 'mitra_produk', 1121, 'M', 1, 1, NULL, NULL, ''),
(7, 'Bakpao Ayam', 20000, 'S', 9, 1, NULL, NULL, '1655286482_EiA.jpeg'),
(13, 'aneka sambal', 28000, 'S', 81, 1, NULL, NULL, '1658977198_belut.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `nama_page`, `created_at`, `updated_at`) VALUES
(1, 'utama', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `produk_mitra`
--

CREATE TABLE `produk_mitra` (
  `id_produk_mitra` bigint(20) UNSIGNED NOT NULL,
  `nama_produk_mitra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_produk_mitra` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_produk_mitra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_produkmitra` bigint(20) NOT NULL,
  `idoleh` bigint(20) UNSIGNED DEFAULT NULL,
  `idmitra` bigint(20) UNSIGNED NOT NULL,
  `best_seller` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk_mitra`
--

INSERT INTO `produk_mitra` (`id_produk_mitra`, `nama_produk_mitra`, `gambar_produk_mitra`, `harga_produk_mitra`, `status_produkmitra`, `idoleh`, `idmitra`, `best_seller`) VALUES
(1, 'Sanjai Balado Merah', 'https://cdn.discordapp.com/attachments/906163180328325130/914381869657780234/Sanjai_Balado_merah.jpg', 'Rp 12.000', 1, NULL, 1, 1),
(2, 'Sanjai Balado Hijau', 'https://cdn.discordapp.com/attachments/906163180328325130/914381976214061116/Sanjai_Balado_Hijau.jpg', 'Rp 12.000', 1, NULL, 1, 1),
(5, 'Kipang Kacang', 'https://cdn.discordapp.com/attachments/906163180328325130/914381510876987402/Kipang_Kacang.jpg', 'Rp 10.000', 0, NULL, 1, NULL),
(6, 'Rakik Maco (Persegi)', 'https://cdn.discordapp.com/attachments/906163180328325130/914381675004297246/Rakik_Macho.jpg', 'Rp 10.000', 0, NULL, 1, NULL),
(7, 'Sanjai Balado Panjang', 'https://cdn.discordapp.com/attachments/906163180328325130/914382100357074944/Sanjai_Balado_Panjang.jpg', 'Rp 12.000', 1, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produk_toko`
--

CREATE TABLE `produk_toko` (
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_produk` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kemasan_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idtoko` bigint(20) UNSIGNED NOT NULL,
  `idoleh` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk_toko`
--

INSERT INTO `produk_toko` (`id_produk`, `nama_produk`, `gambar_produk`, `harga_produk`, `kemasan_produk`, `idtoko`, `idoleh`, `created_at`, `updated_at`) VALUES
(1, 'Timphan', '', '60000 - 75000', '', 70, 1, NULL, NULL),
(2, 'Klepon', '', '', '', 70, 1, NULL, NULL),
(3, 'Onde-onde', '', '', '', 70, 1, NULL, NULL),
(4, 'Risoles', '', '', '', 70, 1, NULL, NULL),
(5, 'Kue Tar', '', '', '', 70, 1, NULL, NULL),
(6, 'Timphan', '', '', '', 71, 1, NULL, NULL),
(7, 'Klepon', '', '', '', 71, 1, NULL, NULL),
(8, 'Risoles', '', '', '', 71, 1, NULL, NULL),
(9, 'Timphan', '', '', '', 71, 1, NULL, NULL),
(10, 'Bolu Tape Benteng', 'https://cdn.discordapp.com/attachments/964470483875672094/984464024789999696/unknown.png', '25.000 - 35.000', 'Dus', 2, 1, NULL, NULL),
(11, 'Kembang Goyang', 'https://cdn.discordapp.com/attachments/964470483875672094/984467031829131334/unknown.png', '33.000', 'Dus', 4, 1, NULL, NULL),
(12, 'Dodol Betawi', 'https://cdn.discordapp.com/attachments/964470483875672094/984464682310041641/unknown.png', '19.000', 'Dus', 4, 1, NULL, NULL),
(13, 'Dodol Betawi', 'https://cdn.discordapp.com/attachments/964470483875672094/984464682310041641/unknown.png', '18.000', 'Dus', 5, 1, NULL, NULL),
(14, 'Geplak', 'https://cdn.discordapp.com/attachments/964470483875672094/984469762367184998/unknown.png', '160.000', 'Mika', 6, 1, NULL, NULL),
(15, 'Dodol Betawi', 'https://cdn.discordapp.com/attachments/964470483875672094/984464682310041641/unknown.png', '220.000', 'Mika', 6, 1, NULL, NULL),
(16, 'Sale pisang', 'https://cdn.discordapp.com/attachments/964470483875672094/984466034432016414/unknown.png', '38.000', 'Plastik', 7, 1, NULL, NULL),
(17, 'Bolu Pandan', 'https://cdn.discordapp.com/attachments/964470483875672094/984469574307151882/unknown.png', '32.000-40.000', 'Dus', 8, 1, NULL, NULL),
(18, 'Bolu', 'https://cdn.discordapp.com/attachments/964470483875672094/984469574307151882/unknown.png', '18.000-35.000', 'Dus', 10, 1, NULL, NULL),
(19, 'Bakpia Pathuk', 'https://cdn.discordapp.com/attachments/964470483875672094/984466254255493140/unknown.png', '35.000', 'Dus', 11, 1, NULL, NULL),
(20, 'Lapis Surabaya', 'https://cdn.discordapp.com/attachments/964470483875672094/984469574307151882/unknown.png', '64.000', 'Dus', 12, 1, NULL, NULL),
(21, 'Ceplis', 'https://cdn.discordapp.com/attachments/964470483875672094/984468585265135656/unknown.png', '27.000', 'Plastik', 14, 1, NULL, NULL),
(22, 'Keciput', 'https://cdn.discordapp.com/attachments/964470483875672094/984837452252450836/unknown.png', '15.500', 'Plastik', 15, 1, NULL, NULL),
(23, 'Bakpia Kukus', 'https://cdn.discordapp.com/attachments/964470483875672094/984466254255493140/unknown.png', '38.000', 'Dus', 16, 1, NULL, NULL),
(24, 'Emping', 'https://cdn.discordapp.com/attachments/964470483875672094/984468585265135656/unknown.png', '50.400', 'Plastik', 17, 1, NULL, NULL),
(25, 'Bakpia Pathuk', 'https://cdn.discordapp.com/attachments/964470483875672094/984466254255493140/unknown.png', '45.000 - 55.000', 'Dus', 19, 1, NULL, NULL),
(26, 'Lapis Surabaya', 'https://cdn.discordapp.com/attachments/964470483875672094/984469574307151882/unknown.png', '148.000', 'Dus', 23, 1, NULL, NULL),
(27, 'Emping Melinjo', 'https://cdn.discordapp.com/attachments/964470483875672094/984468585265135656/unknown.png', '39.000', 'Plastik', 23, 1, NULL, NULL),
(28, 'Bakpia Pathok', 'https://cdn.discordapp.com/attachments/964470483875672094/984466254255493140/unknown.png', '35.000', 'Dus', 23, 1, NULL, NULL),
(29, 'Lumpia Semarang', 'https://cdn.discordapp.com/attachments/964470483875672094/984469302101028915/unknown.png', '14.000-70.000', 'Dus', 24, 1, NULL, NULL),
(30, 'Geplak', 'https://cdn.discordapp.com/attachments/964470483875672094/984469762367184998/unknown.png', '32.000-35.000', 'Plastik', 25, 1, NULL, NULL),
(31, 'Emping', 'https://cdn.discordapp.com/attachments/964470483875672094/984468585265135656/unknown.png', '32.500', 'Plastik', 26, 1, NULL, NULL),
(32, 'Kue kembang goyang', 'https://cdn.discordapp.com/attachments/964470483875672094/984467031829131334/unknown.png', '25.000', 'Dus', 28, 1, NULL, NULL),
(33, 'Dodol Betawi', 'https://cdn.discordapp.com/attachments/964470483875672094/984464682310041641/unknown.png', '35.000', 'Dus', 28, 1, NULL, NULL),
(34, 'Onde-onde', 'https://cdn.discordapp.com/attachments/964470483875672094/984837452252450836/unknown.png', '72.000', 'Plastik', 31, 1, NULL, NULL),
(35, 'Dodol Rumput laut', 'https://cdn.discordapp.com/attachments/964470483875672094/982186077622255647/dodol_rumput_laut.jpg', '25000', 'Kotak', 76, NULL, NULL, NULL),
(36, 'Kopi flores', 'https://cdn.discordapp.com/attachments/964470483875672094/982186077899092008/kopi_flores.jpg', '50000', 'Pouch', 75, NULL, NULL, NULL),
(37, 'pia kukus', 'https://cdn.discordapp.com/attachments/964470483875672094/982186078201053214/pia_kukus.jpg', '35000', 'Kotak', 74, NULL, NULL, NULL),
(38, 'Kacang disco', 'https://cdn.discordapp.com/attachments/964470483875672094/982188726044217355/kacang_disco.jpg', '30000', 'Kotak', 74, NULL, NULL, NULL),
(39, 'Pia Putra Kusuma', 'https://cdn.discordapp.com/attachments/964470483875672094/982188726618849280/pia_putra_kusuma.jpg', '64300', 'Kotak', 78, NULL, NULL, NULL),
(40, 'Sambusa', 'https://cdn.discordapp.com/attachments/964470483875672094/982226855639805992/sambusa.jpg', '1000', 'plastik', 78, NULL, NULL, NULL),
(41, 'Kasippi', 'https://cdn.discordapp.com/attachments/964470483875672094/982226855098728448/Kasippi.webp', '25000', 'plastik', 79, NULL, NULL, NULL),
(42, 'Kopi Kulawi', 'https://cdn.discordapp.com/attachments/964470483875672094/982226855434268682/kopi_kulawi.png', '30000', 'Pouch', 80, NULL, NULL, NULL),
(43, 'Klappertaart manado', 'https://cdn.discordapp.com/attachments/964470483875672094/982229248481824808/Klappertaart_manado.jpg', '85000', 'kotak', 81, NULL, NULL, NULL),
(44, 'Pala Manis', 'https://cdn.discordapp.com/attachments/964470483875672094/982229248720924722/Pala_manis.jpg', '32000', 'plastik', 81, NULL, NULL, NULL),
(45, 'Kacang goyang', 'https://cdn.discordapp.com/attachments/964470483875672094/982229248242745404/Kacang_goyang.jpg', '40000', 'plastik', 81, NULL, NULL, NULL),
(46, 'Cokelat Bali', 'https://cdn.discordapp.com/attachments/964470483875672094/982230759010107442/coklat_bali.jpeg', '50000', 'plastik', 74, NULL, NULL, NULL),
(47, 'Pia legong', 'https://cdn.discordapp.com/attachments/964470483875672094/982230759286911076/pia_legong.jpg', '125000', 'kotak', 74, NULL, NULL, NULL),
(48, 'Kopi khas Lombok', 'https://cdn.discordapp.com/attachments/964470483875672094/990133740401479691/Kopi_khas_Lombok.jpg', '25000', 'Pouch', 75, NULL, NULL, NULL),
(49, 'Daging Sei Babi', 'https://cdn.discordapp.com/attachments/964470483875672094/982232713748701224/Daging_Sei_Babi.webp', '135000', 'plastik', 76, NULL, NULL, NULL),
(50, 'Kue Karawo', 'https://cdn.discordapp.com/attachments/964470483875672094/982233019488296960/Kue_Karawo.jpg', '50000', 'Toples', 78, NULL, NULL, NULL),
(51, 'Cokelat Macoa', 'https://cdn.discordapp.com/attachments/964470483875672094/982234837928800266/coklat_makoa.jpg', '25000', 'plastik', 78, NULL, NULL, NULL),
(52, 'Sambel Ikan Roa', 'https://cdn.discordapp.com/attachments/964470483875672094/982234253641285642/Sambel_Ikan_Roa.jpg', '25000', 'Toples', 81, NULL, NULL, NULL),
(53, 'Durian Montong Palu', 'https://cdn.discordapp.com/attachments/964470483875672094/982234253418975302/Durian_Montong_Palu.jpg', '65000', 'Toples', 80, NULL, NULL, NULL),
(98, 'Banua Cokelat', 'https://cdn.discordapp.com/attachments/964470483875672094/982226854855446578/cokelat_benua.jpg', '25000', 'kotak', 80, NULL, NULL, NULL),
(99, 'Kopi Pinago', 'https://cdn.discordapp.com/attachments/964470483875672094/982188726291664916/kopi_pinago.jpg', '40000', 'Kotak', 78, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rasa`
--

CREATE TABLE `rasa` (
  `idrasa` bigint(20) UNSIGNED NOT NULL,
  `namarasa` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambarasa` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rasa`
--

INSERT INTO `rasa` (`idrasa`, `namarasa`, `gambarasa`, `created_at`, `updated_at`) VALUES
(1, 'Manis', 'https://cdn.discordapp.com/attachments/906163180328325130/906204580084318208/Manis.jpg', NULL, NULL),
(2, 'Pedas', 'https://cdn.discordapp.com/attachments/906163180328325130/906204482491265054/Pedas.jpg', NULL, NULL),
(3, 'Asin', 'https://cdn.discordapp.com/attachments/906163180328325130/906204762825965638/Asin.jpg', NULL, NULL),
(4, 'Asam', 'https://cdn.discordapp.com/attachments/906163180328325130/906204674846261339/Asam.jpg', NULL, NULL),
(5, 'Pahit', 'https://cdn.discordapp.com/attachments/906163180328325130/906205196005290064/Pahit.jpeg', NULL, NULL),
(6, 'Hambar', 'https://cdn.discordapp.com/attachments/906163180328325130/906205196005290064/Pahit.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasi`
--

CREATE TABLE `rekomendasi` (
  `idrekomendasi` bigint(20) UNSIGNED NOT NULL,
  `idtoko` bigint(20) UNSIGNED NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekomendasi`
--

INSERT INTO `rekomendasi` (`idrekomendasi`, `idtoko`, `id`) VALUES
(1, 1, 9),
(2, 81, 13),
(3, 56, 13);

--
-- Triggers `rekomendasi`
--
DELIMITER $$
CREATE TRIGGER `tambahrekomendasi` BEFORE INSERT ON `rekomendasi` FOR EACH ROW UPDATE `toko_oleh` SET rekomendasi_count=rekomendasi_count+1
            WHERE idtoko=NEW.idtoko
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasioleh`
--

CREATE TABLE `rekomendasioleh` (
  `idrekomendasioleh` bigint(20) UNSIGNED NOT NULL,
  `idoleh` bigint(20) UNSIGNED NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekomendasioleh`
--

INSERT INTO `rekomendasioleh` (`idrekomendasioleh`, `idoleh`, `id`) VALUES
(1, 22, 13);

--
-- Triggers `rekomendasioleh`
--
DELIMITER $$
CREATE TRIGGER `hapusrekomendasioleh` BEFORE DELETE ON `rekomendasioleh` FOR EACH ROW UPDATE `varianoleh` SET rekomendasioleh_count=rekomendasioleh_count-1
            WHERE idoleh=OLD.idoleh
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tambahrekomendasioleh` BEFORE INSERT ON `rekomendasioleh` FOR EACH ROW UPDATE `varianoleh` SET rekomendasioleh_count=rekomendasioleh_count+1
            WHERE idoleh=NEW.idoleh
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tekstur`
--

CREATE TABLE `tekstur` (
  `idtekstur` bigint(20) UNSIGNED NOT NULL,
  `namatekstur` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambartekstur` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tekstur`
--

INSERT INTO `tekstur` (`idtekstur`, `namatekstur`, `gambartekstur`, `created_at`, `updated_at`) VALUES
(1, 'Kenyal', 'https://cdn.discordapp.com/attachments/906163180328325130/906197171295113306/Kenyal.jpg', NULL, NULL),
(2, 'Keras', 'https://cdn.discordapp.com/attachments/906163180328325130/906199202810462288/Keras.jpg', NULL, NULL),
(3, 'Lembut', 'https://cdn.discordapp.com/attachments/906163180328325130/906197283081703454/Lembut.jpg', NULL, NULL),
(4, 'Renyah', 'https://cdn.discordapp.com/attachments/906163180328325130/906197474551672892/Renyah.jpg', NULL, NULL),
(5, 'Lengket', 'https://cdn.discordapp.com/attachments/906163180328325130/906197959887179776/Lengket.jpg', NULL, NULL),
(6, 'Lembek', 'https://cdn.discordapp.com/attachments/906163180328325130/906198675259281448/Lembek.jpg', NULL, NULL),
(7, 'Berminyak', 'https://cdn.discordapp.com/attachments/906163180328325130/906197595666391040/Berminyak.jpg', NULL, NULL),
(8, 'Kering', 'https://cdn.discordapp.com/attachments/906163180328325130/906197653568774174/Kering.jpg', NULL, NULL),
(9, 'Basah', 'https://cdn.discordapp.com/attachments/906163180328325130/906197896968429618/Basah.jpg', NULL, NULL),
(10, 'Berair', 'https://cdn.discordapp.com/attachments/906163180328325130/906197811014553610/Berair.png', NULL, NULL),
(11, 'Kental', 'https://cdn.discordapp.com/attachments/906163180328325130/906197368213479424/Kental.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tempatbeli`
--

CREATE TABLE `tempatbeli` (
  `idtempatbeli` bigint(20) UNSIGNED NOT NULL,
  `merk` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambarproduk` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `varianjual` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idoleh` bigint(20) UNSIGNED NOT NULL,
  `idlokasi` bigint(20) UNSIGNED NOT NULL,
  `idmitra` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bundle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kemasan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_map` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jambuka` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rentang_harga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `best_seller` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bpom` tinyint(1) DEFAULT NULL,
  `cara_bayar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sosmed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tempatbeli`
--

INSERT INTO `tempatbeli` (`idtempatbeli`, `merk`, `gambarproduk`, `varianjual`, `idoleh`, `idlokasi`, `idmitra`, `created_at`, `updated_at`, `bundle`, `kemasan`, `alamat`, `link`, `google_map`, `jambuka`, `rentang_harga`, `best_seller`, `satuan`, `bpom`, `cara_bayar`, `sosmed`) VALUES
(1, 'Meranti', 'https://cdn.discordapp.com/attachments/906163180328325130/906167937151430656/BoluMeranti_1.jpg', 'Standard Rasa Keju---Standard Rasa Moka---Standard Rasa Nenas---Standard Rasa Strawberry---Standard Rasa Blueberry---Standard Rasa Cappucino---Standard Rasa Kacang---Special Rasa Double Cokelat---Special Rasa Abon Ayam---Topping Cokelat Rasa Keju---Topping Cokelat Rasa Moka---Topping Cokelat Rasa Nenas---Topping Cokelat Rasa Strawberry---Topping Cokelat Rasa Blueberry---Topping Cokelat Rasa Cappucino---Topping Cokelat Rasa Kacang---Topping Keju Rasa Keju---Topping Keju Rasa Moka---Topping Keju Rasa Nenas---Topping Keju Rasa Strawberry---Topping Keju Rasa Blueberry---Topping Keju Rasa Cappucino---Topping Keju Rasa Kacang---Topping Kacang Rasa Keju---Topping Kacang Rasa Moka---Topping Kacang Rasa Nenas---Topping Kacang Rasa Strawberry---Topping Kacang Rasa Bluberry---Topping Kacang Rasa Cappucino---Topping Kacang Rasa Kacang\n', 1, 6, NULL, NULL, NULL, '3 in 1 Pack---All in One', 'Kotak,kardus', 'Jl. Kruing simpang Razak No.7C', 'https://www.bolumeranti.co.id/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=Jl.%20Kruing%20simpang%20Razak%20No.7C%20Medan%20Sumatra%20Utara,%20Indonesia&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', '07.00 - 20.00', '80000---115000', '', 'Roll', 0, 'Cash, credit, debit', 'instagram---bolumerantimedan'),
(2, 'Blue Sky', 'https://cdn.discordapp.com/attachments/906163180328325130/914556739611918336/BlueSky.jpg', '', 3, 39, NULL, NULL, NULL, NULL, 'Kotak', 'Jl. Letjen Suprapto No. 1', 'https://www.blue-sky.co.id/page/blue-sky-mantau', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=letjen%20s%20parman%201%20balikpapan&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-org.net\">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">google maps embed wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', NULL, '145000---150000', 'Original', '10 pcs', 0, 'cash, credit, debit', 'instagram---blueskymantau'),
(3, 'Mantau Fya', 'https://cdn.discordapp.com/attachments/906163180328325130/914556764165378058/Fya.jpg', 'Original---Mantau Kering Kepiting Lada Hitam---Mantau Kering Bawang Dayak---Mantau Kering Kepiting Asam Manis---Mantau Kering Original Susu', 3, 39, NULL, NULL, NULL, NULL, 'Kotak', 'Perum Bangun Reksa Blok A No.47 Kilo 6', 'https://www.mantaufya.com/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=letjen%20s%20parman%201%20balikpapan&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-org.net\">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">google maps embed wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', NULL, '16000---40000', NULL, '10 pcs', 0, 'cash', 'instagram---fya_cookies'),
(4, 'Jumpa Bogor', 'https://cdn.discordapp.com/attachments/906163180328325130/915231887381901332/JumpaBogor_1.jpg', 'Gandum Se\'i Sapi---Se\'i Sapi---Lilit---Banana Sweet Cheese---Keju Cranberry---Jagung Susu---Coffee Caramel---Apple Berry---Apel---Martabak---Talas Nanas---Bakso', 4, 53, NULL, NULL, NULL, NULL, 'Kotak, Kardus', 'Jl. Padjajaran No. 3F', 'http://www.jumpabogor.com/jumpa-bogor/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=Padjajaran%20No.%203F&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', NULL, '28000---50000', NULL, 'Roll', 0, 'cash, credit, debit', 'instagram---jumpabogor'),
(5, 'Dhian', 'https://cdn.discordapp.com/attachments/906163180328325130/906462987043364924/PieSusu_Dhian.jpg', 'Original---Strawberry---Cokelat---Cokelat Keju---Blueberry---Original Keju', 5, 74, NULL, NULL, NULL, NULL, 'Kotak, Kardus', 'Jalan Nangka Denpasar Selatan, Bali', 'https://piesusudhian.co.id/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=jalan%20nangka%20denpasar%20selatan&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', NULL, '20000---25000', NULL, '10 pcs', 0, 'cash, credit, debit', 'instagram---piesusudhian.id'),
(6, 'Sari', 'https://cdn.discordapp.com/attachments/906163180328325130/915233198831697970/Sari.jpg', 'Original', 5, 74, NULL, NULL, NULL, NULL, 'Kotak---Kardus', NULL, 'https://www.instagram.com/piesususari/', NULL, NULL, '19500---20000', NULL, '10 pcs', 0, 'cash, credit, debit', 'instagram---piesususari'),
(7, 'Bli Man', 'https://cdn.discordapp.com/attachments/906163180328325130/915232756387168336/BliMan.jpg', 'Original---Chocochips---Keju---Almond', 5, 74, NULL, NULL, NULL, NULL, 'Kotak---Kardus', 'Jalan Kerta Dalam Sari 3 Gang Cemara No.15, Sidakarya, Denpasar', 'https://www.piesusubliman.com/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=jalan%20kerta%20dalam%20sari%203&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', NULL, '35000---37000', NULL, '10 pcs', 0, 'cash, credit, debit', 'instagram---piesusubliman'),
(8, 'Asli Enaaak', 'https://cdn.discordapp.com/attachments/906163180328325130/906464933246541834/PieSusu_Asli_Enaaak.jpg', 'Original---Coklat---Keju', 5, 74, NULL, NULL, NULL, NULL, 'Kotak---Kardus', 'Jalan Nangka Selatan Nomor 163, Denpasar.', 'https://www.instagram.com/piesusuaslienaaakreal/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=jalan%20nangka%20selatan%20163&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', NULL, '30000---35000', NULL, '10 pcs', 0, 'cash', 'instagram---piesusuaslienaaakreal'),
(9, 'Sangkuriang', 'https://cdn.discordapp.com/attachments/906163180328325130/915235403844427816/Sangkuriang.jpeg', 'Sop Duren Keju---Original Keju---Full Talas Keju---Talas Susu---Coco Pandan Keju---Brownies Keju---Chocovilla Keju---Pisang Coklat Keju---Original Extra Keju---Kopi Susu---Chocovilla Oreo---Blackforest', 6, 53, NULL, NULL, NULL, NULL, 'Kotak, Kardus', 'Jl. Padjajaran No. 20i Komplek Ruko Perkantoran, Jl. Bantar Kemang, RT.06/RW.04, Baranangsiang', 'https://lapisbogor.co.id/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=jalan%20padjajaran%2020i%20bantar%20kemang&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', NULL, '36000---38000', NULL, 'kotak', 1, 'cash, credit, debit', 'instagram---lapisbogor'),
(10, 'Arasari', 'https://cdn.discordapp.com/attachments/906163180328325130/915234328475230258/Arasari.jpg', 'Full Talas---Susu---Alpukat---Aneka Rasa---Brownies---Pandan---Strawberry---Greentea---Nangka---Durian---Original', 6, 53, NULL, NULL, NULL, NULL, 'Kotak, Kardus', 'Jl. Raya Pajajaran No. 84 Ruko E Baranangsiang', 'https://arasari.co.id/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=jalan%20raya%20padjajaran%2084&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', NULL, '30000---32000', NULL, 'Kotak', 0, 'cash, credit, debit', 'instagram---arasariofficial'),
(11, 'Sangkuriang', 'https://cdn.discordapp.com/attachments/906163180328325130/915235403844427816/Sangkuriang.jpeg', 'Cokelat---Keju---Cokelat & Rice Crispy', 18, 53, NULL, NULL, NULL, NULL, 'Kotak---Kardus', 'Jl. Padjajaran No. 20i Komplek Ruko Perkantoran, Jl. Bantar Kemang, RT.06/RW.04, Baranangsiang', 'https://lapisbogor.co.id/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=jalan%20padjajaran%2020i%20bantar%20kemang&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', NULL, '26000---27000', NULL, 'kotak', 1, 'cash,credit, debit', 'instagram---lapisbogor'),
(12, 'Abuy', 'https://cdn.discordapp.com/attachments/906163180328325130/919870566482198598/BatagorAbuy.jpg', '', 19, 50, NULL, NULL, NULL, NULL, 'Kotak', 'Jl. Lengkong Besar', 'https://batagorabuy.business.site/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=Jl%20lengkong%20besar%20bandung&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\"></a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', NULL, '11000---13000', NULL, 'pcs', 0, 'cash, credit, debit', 'instagram---batagor.abuy'),
(13, 'Riri', 'https://cdn.discordapp.com/attachments/906163180328325130/919870566905815050/BatagorRiri.jpg', '', 19, 50, NULL, NULL, NULL, NULL, 'Kotak', 'Jl. Burangrang No 41, Lengkong', 'http://batagorriri.com/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=burangrang%2041%20lengkong&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\"></a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', NULL, '19500---20000', NULL, 'pcs', 0, 'cash, credit, debit', 'instagram---batagor_riri'),
(14, 'Kingsley', 'https://cdn.discordapp.com/attachments/906163180328325130/919870566704480296/BatagorKingsley.jpg', '', 19, 50, NULL, NULL, NULL, NULL, 'Kotak', 'Jl. Veteran No 25', 'http://batagorkingsley.com/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=veteran%2025%20bandung&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://putlocker-is.org\"></a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">embedding google map in website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', NULL, '20000---22000', NULL, 'pcs', 0, 'cash, credit, debit', 'instagram---batagorkingsley.id'),
(15, 'Wisata Rasa', 'https://cdn.discordapp.com/attachments/906163180328325130/915289970716065842/Wisata_Rasa.jpg', 'Original---Cokelat---Greentea---Mocca', 21, 66, NULL, NULL, NULL, NULL, 'Kotak,Kardus', 'Jl. Basuki Rahmat 72', 'https://www.wisatarasasurabaya.com/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=basuki%20rahmat%2072%20surabaya&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-org.net\">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">google maps embed wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', NULL, '50000---70000', NULL, 'kotak', 0, 'cash, credit, debit', 'instagram---wisata_rasa'),
(16, 'Hawai Bakery', 'https://cdn.discordapp.com/attachments/906163180328325130/915290450187935784/Hawai.jpg', 'Abon Sapi---Abon Sapi Keju---Abon Ayam---Abon Sapi Almond---Abon Sapi Tuna---Abon Sapi Sosis', 23, 94, NULL, NULL, NULL, NULL, 'Kotak', 'Jl. Jenderal Sudirman No.100', 'https://www.facebook.com/ABON-gulung-HAWAI-bakery-101557268482421/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=jenderal%20sudirman%20100%20manokwari&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\"></a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', NULL, '125000---127000', NULL, '10 pcs', 0, 'cash', 'facebook---ABON-gulung-HAWAI-bakery-101557268482421'),
(17, 'Spikoe Resep Kuno', 'https://cdn.discordapp.com/attachments/906163180328325130/914554181568856124/SpikoeResepKuno.jpg', 'Reguler Speculaas---Reguler Kismis---Reguler Plum---Reguler Tanpa Kismis---Spesial Plum---Spesial Kismis---Spesial Tanpa Kismis', 25, 66, NULL, NULL, NULL, NULL, 'Kotak', 'Jl. Rungkut Madya 41 Surabaya 60293, East Java - Indonesia', 'https://spikoeresepkuno.com', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=rungkut%20madya%2041&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', '07.00 - 20.30', '85000---300000', NULL, 'kotak', NULL, 'cash, credit, debit', 'instagram---srk_spikoeresepkuno'),
(18, 'Spikoe Livana', 'https://cdn.discordapp.com/attachments/906163180328325130/914554076530901052/Livana.jpg', 'Original---Batik Pandan---Batik Moka---Batik Original---Bronis Pandan---Bronis Original---Ovomaltine---Nutella---Coklat Kismis---Pandan---Moka---Kismis---Kenari', 25, 66, NULL, NULL, NULL, NULL, 'Kotak', 'Jl. R.A Kartini No. 127, Kec. Tegalsari', 'https://spikoelivana.com', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=ra%20kartini%20127%20tegalsari&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', '07.00 - 20.00', '47000---68000', NULL, 'kotak', 1, 'cash, credit, debit', 'instagram---https://www.instagram.com/spikoelivana.id/'),
(19, 'D\'Neven Surabaya', 'https://cdn.discordapp.com/attachments/906163180328325130/914553951788097576/Dneven.jpg', 'Classic Original---Triple Chocolate---Ladies & Gentlemen---Old Style---The King---Triple Vanilla---Charcoal Cheese.', 25, 66, NULL, NULL, NULL, NULL, 'Kotak', 'Ciputra World Mall V-Walk Lt 3 (Samping Haagen-Dazs).', 'https://dnevensurabaya.com/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=ciputra%20world%20mall%20surabaya&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', '10.00 - 22.00', '95000---115000', NULL, 'kotak', 0, 'cash, credit, debit', 'instagram---https://www.instagram.com/dnevensurabaya/'),
(20, 'Spikoe Ayu', 'https://cdn.discordapp.com/attachments/906163180328325130/914553857617567744/SpikuAyu_1.jpg', 'Greentea---McNougat---Choco Nougat---Mocha---Original---Rempah', 25, 66, NULL, NULL, NULL, NULL, 'Kotak', 'Babatan Pantai Ut IX/26, Darmo Permai III (depan apt.Avenue88)', 'https://www.instagram.com/spikuayu/ ', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=babatan%20pantai%20ut%20ix/26&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', '08.00 - 21.00', '55000---135000', NULL, 'kotak', 0, 'cash, credit, debit', 'instagram---spikuayu'),
(21, 'Spiku Rumah Roti', 'https://cdn.discordapp.com/attachments/906163180328325130/920108412128337951/RumahRoti.jpg', 'Keju---Rainbow----Classic---Kismis---Almond Kenari', 25, 66, NULL, NULL, NULL, NULL, 'Kotak', 'Jl. Rungkut Mapan Utara No.15, Central Rungkut, Gunung Anyar, Surabaya', 'https://www.instagram.com/spikurumahroti/?hl=en', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=rungkut%20mapan%20utara%2015&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', '08.00 - 18.00', '33000---190000', NULL, 'kotak', 0, 'cash, credit, debit', 'instagram---spikurumahroti'),
(22, 'Santi\'s Cake', 'https://cdn.discordapp.com/attachments/906163180328325130/920108699975028776/Santis.jpg', 'Kacang Kenari', 25, 66, NULL, NULL, NULL, NULL, 'Kotak', 'Jl. Mulyosari Timur 34', 'http://santiscake.com/ind-review.html', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=mulyosari%20timur%2034&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', '07.00 - 20.00', '95000---170000', NULL, 'kotak', 0, 'cash, credit, debit', 'instagram---santis_cake'),
(23, 'Anita Spiku', 'https://cdn.discordapp.com/attachments/906163180328325130/920107919167594506/SpikoeAnita.jpg', 'Pandan---New Classic---Chocolicious---Raisin---Canary---Mocilla---Mocca Lover', 25, 66, NULL, NULL, NULL, NULL, 'Kotak', 'Jl. Simpang Darmo Permai Selatan III No.36, Pradahkalikendal, Kec. Dukuhpakis, Kota SBY, Jawa Timur', 'https://www.instagram.com/anita.spiku/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=simpang%20darmo%20permai%20selatan%20iii%2036&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', '07.00 - 17.00', '145000---475000', NULL, 'kotak', 0, 'cash, credit, debit', 'instagram---anita.spiku'),
(24, 'Tahubaxo Ibu Pudji', 'https://cdn.discordapp.com/attachments/906163180328325130/914553679598739466/TahubaxoIbuPudji.jpg', '', 26, 59, NULL, NULL, NULL, NULL, 'Kotak', 'Jl. Diponegoro No 14 Ungaran', 'http://tahubaxo-ibupudji.com/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=diponegoro%2014%20ungaran&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', NULL, '33000---35000', NULL, 'kotak', 1, 'cash, credit, debit', 'instagram---tahubaxo_ibupudji'),
(25, 'Djoe', 'https://cdn.discordapp.com/attachments/906163180328325130/914553284289761312/Djoe.jpg', '', 26, 59, NULL, NULL, NULL, '', 'Plastik', 'Jl. Pandanaran No. 51', 'http://oleholehdjoe.com/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=pandaran%2051%20randusari%20semarang&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', NULL, '61000---65000', NULL, 'bungkus', NULL, 'cash, credit, debit', 'instagram---oleh2djoe'),
(26, 'Kampoeng Timur', 'https://cdn.discordapp.com/attachments/906163180328325130/915290998597378058/KampoengTimur.jpg', 'Original---Pedas---Lada Hitam', 28, 39, NULL, NULL, NULL, NULL, 'Kotak---Kardus', 'Jl. Straat 2 No. 30', 'https://kampoengtimoer.co.id/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=straat%202%20no%2030%20gunung%20samarinda&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\"></a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', NULL, '15000---27000', NULL, 'kotak', 0, 'cash', NULL),
(27, 'Dyriana', 'https://cdn.discordapp.com/attachments/906163180328325130/914553573981966336/Dyriana.jpg', 'Mini Kelapa---Mini Nangka---Mini Campur---Nangka---Kelapa Muda---Durian', 30, 59, NULL, NULL, NULL, NULL, 'Kotak', 'Jalan Pandanaran 51A, Pandanaran', 'http://www.dyriana.com/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=pandaran%2051A%20semarang&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', NULL, '52000---110000', NULL, 'kotak', 0, 'cash, credit, debit', 'instagram---dyriana'),
(28, 'Bonafide', 'https://cdn.discordapp.com/attachments/906163180328325130/914553445376200785/Bonafide.jpg', 'Duri Linak---Duri Lunak Vacuum---Duri Lunak Pepes---Crispy', 32, 59, NULL, NULL, NULL, NULL, 'Kotak', 'Jl. Pandanaran No. 53, Randusari', 'https://bandengbonafide.business.site/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=pandaran%2053%20semarang&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', '09.00 - 21.00', '56000---61000', NULL, 'kotak', 0, 'cash, credit, debit', 'instagram---bandengbonafidesemarang'),
(29, 'Juwana Elrina', 'https://cdn.discordapp.com/attachments/906163180328325130/914553413222682654/Juwana.jpg', 'Presto---Otak Otak---Asap Presto', 32, 59, NULL, NULL, NULL, NULL, 'Kotak', 'Jl. Pandanaran No.57, Randusari', 'https://bandengprestojuwana.com/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=pandaran%2057%20randusari%20semarang&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', '07.00 - 23.00', '45000---57500', NULL, 'kotak', 0, 'cash, credit, debit', 'instagram---bandengjuwana'),
(30, 'Djoe', 'https://cdn.discordapp.com/attachments/906163180328325130/914553284289761312/Djoe.jpg', 'Presto---Otak Otak---Asap Presto---Pepes', 32, 59, NULL, NULL, NULL, NULL, 'Kotak', 'Jl. Pandanaran No. 51', 'http://oleholehdjoe.com/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=pandaran%2051%20randusari%20semarang&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', NULL, '62000---79000', NULL, 'kotak', 0, 'cash, credit, debit', 'instagram---oleh2djoe'),
(31, 'Malang Strudel', 'https://cdn.discordapp.com/attachments/906163180328325130/916344576095166504/MalangStrudel.jpg', 'Apel---Strawberry---Pineapple---Mangga---Orange---Taro---Kurma---Mixfruit---Cheese---Choco Peanut---Peach Cheese---Premium Caramel---Premium Durian---Premium Green Tea---Premium Merah Putih---Mangga---Red Velvet---Choco Banana', 34, 71, NULL, NULL, NULL, NULL, 'Kotak---Kardus', 'Jl. Raya Ardimulyo No.18', 'https://malangstrudel.com/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=ardimulyo%2018%20malang&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\"></a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">google map codes for website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', NULL, '53000---77000', NULL, 'kotak', 0, 'cash, credit, debit', 'instagram---strudelmalang'),
(32, 'Aneka', 'https://cdn.discordapp.com/attachments/906163180328325130/914556007332577321/Aneka.jpg', 'Manis---Asin---Keju---Susu---Coklat---Kopi---Moka---Balado---Barbeque---Sapi Panggang---Duren---Strawberry---Jagung Bakar', 36, 32, NULL, NULL, NULL, NULL, 'Plastik, Kotak', 'Jl. Ikan Kakap No. 26 & 28, Kelurahan Pesawahan, Kecamatan Teluk, Betung Selatan, Kota Bandar Lampung, Provinsi Lampung', 'http://www.anekasarirasa.com/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=jalan%20ikan%20kakap%20pesawahan&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', NULL, '21000---23000', NULL, 'bungkus', 0, 'cash, credit, debit', NULL),
(33, 'Mr Monkey', 'https://cdn.discordapp.com/attachments/906163180328325130/914555868442394644/MrMonkey.jpg', 'Susu---Strawberry--Coffee', 36, 32, NULL, NULL, NULL, NULL, 'Plastik', NULL, 'http://mrmonkey.info/', NULL, NULL, '12000---13000', NULL, 'bungkus', 0, 'cash', NULL),
(34, 'Suseno', 'https://cdn.discordapp.com/attachments/906163180328325130/914555807041986580/Suseno.jpg', 'Asin---Manis---Coklat---Keju', 36, 32, NULL, NULL, NULL, NULL, 'Kotak', 'Jl. Hayam Wuruk, Sukarame', 'https://keripikpisanglampung.com/keripik-pisang-suseno/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=jalan%20hayam%20wuruk%20bandar&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', NULL, '36500---38500', NULL, 'bungkus', 0, 'cash', NULL),
(35, 'Kaswari Lampion', 'https://cdn.discordapp.com/attachments/906163180328325130/914555715006369792/KaswariLampion.jpg', 'Wijen---Coklat---Keju Kacang---Keju---Kacang Ijo---Ovomaltine---Keju Kraft---Blueberry---Tiramisu---Durian---Kacang Original---Strawberry---Wijen Coklat Kacang--Kitkat Greentea---Milo---Cookies & Cream---Green Tea---Kit Kat coklat---Spesial', 20, 59, NULL, NULL, NULL, NULL, 'Kotak', 'Gang Kaswari No. 19, Selabatu, Kecamatan Cikole', NULL, '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=gang%20kaswari%2019&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">add google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', '09.00 - 17.00', '45000---55000', NULL, 'kotak', 0, 'cash, credit, debit', 'instagram---mochikaswari'),
(36, 'Dekonco', 'https://cdn.discordapp.com/attachments/906163180328325130/916963436238356480/Dekonco.jpg', 'White Chocolate Tempe---Strawberry Chocolate Tempe---Apple Chocolate Tempe---Cokelat Pedas Dark Chocolate Tempe---Milk Chocolate Tempe', 22, 71, NULL, NULL, NULL, NULL, 'Kotak', 'Jl. Soekarno Hatta No.83B, Mojolangu, Kecamatan Lowokwaru', 'https://dekonco.blogspot.com/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=Soekarno%20hatta%2083b%20lowokwaru&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\"></a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">google map codes for website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', '08.00-17.00', '8000---11000', NULL, 'pcs', 0, 'cash, credit, debit', 'instagram---dekonco'),
(37, 'Cap Mangkok', 'https://cdn.discordapp.com/attachments/906163180328325130/916963333192704011/CapMangkok.jpg', 'Kacang Hijau---Cokelat---keju---Tangkwee---Durian---Kopi---Green Tea---Apel', 24, 71, NULL, NULL, NULL, 'Kemasan kotak isi 12---Kemasan kotak isi 24', 'Bungkus---Toples---Kotak---Kardus', 'Jl. Semeru No. 25', 'https://piamangkok.com/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=semeru%2025%20malang&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\"></a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">google map codes for website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', NULL, '18000---25000', NULL, '5 pcs', 0, 'cash, credit, debit', 'instagram---piacapmangkok');

-- --------------------------------------------------------

--
-- Table structure for table `toko_mitra`
--

CREATE TABLE `toko_mitra` (
  `idmitra` bigint(20) UNSIGNED NOT NULL,
  `nama_mitra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_mitra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_utama` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_mitra` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jam_operasional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fasilitas_mitra` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sekitar_mitra` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kontak_mitra` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_mitra` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sosmed_mitra` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeri_mitra` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `galeri_mitra_caption` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_buka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_tutup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_sekitar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `toko_mitra`
--

INSERT INTO `toko_mitra` (`idmitra`, `nama_mitra`, `alamat_mitra`, `gambar_utama`, `map_mitra`, `jam_operasional`, `fasilitas_mitra`, `sekitar_mitra`, `kontak_mitra`, `website_mitra`, `sosmed_mitra`, `galeri_mitra`, `created_at`, `updated_at`, `galeri_mitra_caption`, `jam_buka`, `jam_tutup`, `gambar_1`, `gambar_2`, `gambar_3`, `gambar_4`, `gambar_5`, `jenis_sekitar`) VALUES
(1, 'spikoekoe', 'Keputih, Surabaya', NULL, NULL, NULL, NULL, NULL, '085456623', 'www.spikoe.com', '@spikoekoe', NULL, NULL, NULL, 'Tampak Samping Toko---Jalan Tunjungan Plaza 78, Tunjungan, Plaza---Tampak Depan Toko---Jalan Tunjungan Plaza 78, Tunjungan, Plaza---Tampak Belakang Toko', '', '', NULL, NULL, NULL, NULL, NULL, ''),
(9, 'daffa', 'Jalan Semangka', NULL, NULL, NULL, NULL, NULL, '085456623', 'www.spikoe.com', '@spikoekoe', NULL, NULL, NULL, '', '09:00', '12:00', NULL, NULL, NULL, NULL, NULL, ''),
(81, 'Sentra UKM Siola', 'Jl. Tunjungan No.1-3, Genteng, Kec. Genteng, Kota SBY, Jawa Timur 60275', '1658072654_twibbon gandeng.png', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15831.43752040468!2d112.72880496977537!3d-7.256840500000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f95d67d8c6c7%3A0xae38021c3316b375!2sOleh%20Oleh%20Khas%20Surabaya%20-%20Sentra%20UKM%20Siola!5e0!3m2!1sen!2sid!4v1656129854125!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', NULL, 'Parkir Mobil & Motor---Toilet---Kantin---Ruang Tunggu', NULL, '085655927391', '', '', 'https://cdn.discordapp.com/attachments/964470483875672094/990106905034784799/IMG20220219141654.jpg\n\n        https://cdn.discordapp.com/attachments/964470483875672094/990106830044803132/IMG20220219141636.jpg', NULL, NULL, '', '10:00', '20:00', NULL, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `toko_oleh`
--

CREATE TABLE `toko_oleh` (
  `idtoko` bigint(20) UNSIGNED NOT NULL,
  `nama_toko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_utama` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_toko` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas_toko` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_sekitar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak_toko` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `galeri_toko` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `galeri_toko_caption` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `rekomendasi_count` bigint(20) DEFAULT NULL,
  `jam_buka` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jam_tutup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `list_count` bigint(20) DEFAULT NULL,
  `idlokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sosmed_toko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_toko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_toko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `toko_oleh`
--

INSERT INTO `toko_oleh` (`idtoko`, `nama_toko`, `gambar_utama`, `map_toko`, `fasilitas_toko`, `jenis_sekitar`, `kontak_toko`, `galeri_toko`, `created_at`, `updated_at`, `galeri_toko_caption`, `rekomendasi_count`, `jam_buka`, `jam_tutup`, `list_count`, `idlokasi`, `nama_lokasi`, `sosmed_toko`, `website_toko`, `alamat_toko`) VALUES
(1, 'Spikoe Surabaya', 'https://cf.shopee.co.id/file/4a806365787109f7c85e1df7ffa9479a', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.410186934548!2d106.81894911508124!3d-6.340886895411334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec2adb02d0bd%3A0x125da7dfc58035a2!2sDodol%20Nyak%20Mai!5e0!3m2!1sid!2sid!4v1655265558131!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Parkir Mobil & Motor---Wifi Gratis---Pesan Antar---Pembayaran Non-Tunai---Makan di Tempat', 'ATM BCA---50M---Bandara Juanda---10.3KM', '081234567890', 'https://i0.wp.com/www.emporioarchitect.com/upload/portofolio/1280/desain-rumah-dan-toko-modern-2-lantai-43010721-94431946010721023307-3.jpg---https://i0.wp.com/www.emporioarchitect.com/upload/portofolio/thumb/desain-rumah-dan-toko-modern-2-lantai-43010721-94431946010721023307-5.jpg---https://i0.wp.com/www.emporioarchitect.com/upload/portofolio/1280/desain-rumah-dan-toko-modern-2-lantai-43010721-94431946010721023307-3.jpg', NULL, NULL, 'Tampak Depan Toko---Jalan Tunjungan Plaza 78, Tunjungan, Plaza---Tampak Samping Toko---Jalan Tunjungan Plaza 78, Tunjungan, Plaza---Tampak Belakang Toko---Jalan Tunjungan Plaza 78, Tunjungan, Plaza', NULL, '08:00', '20:00', NULL, 0, '', '@spikoekunosby', 'www.spikoekuno.co.id', ''),
(2, 'Mama bolu', 'https://cdn.discordapp.com/attachments/964470483875672094/984482762188787813/unknown.png', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6434326427293!2d106.6237048150805!3d-6.178461295526985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fec6d333a9bf%3A0x6ffdfe87d00846ab!2sMama%20Bolu%20Oleh-oleh%20Khas%20Tangerang!5e0!3m2!1sid!2sid!4v1655265392879!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar--Toilet', 'Bank BRI---550 m---Rumah Sakit Pratiwi---850 m', '081212498904', 'https://cdn.discordapp.com/attachments/964470483875672094/984482933823897650/unknown.png', NULL, NULL, '', NULL, '08.00', '20:00', NULL, 46, 'Tangerang', '', 'oleholehtangerang.blogspot.com/', 'Jl. Merdeka No. 119'),
(3, 'Toko oleh-oleh khas Banten Citra Gading', 'https://cdn.discordapp.com/attachments/964470483875672094/984480936806731776/unknown.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.865419544544!2d106.16743261481207!3d-6.148770495548148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41f550869113db%3A0xbd56d1ec13455f04!2sToko%20Oleh-oleh%20Khas%20Banten%2C%20%40Citra%20Gading!5e0!3m2!1sen!2sus!4v1655266728444!5m2!1sen!2sus\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar---Toilet', 'ATM BCA---1 km---Kantor Pos---1,4 km', '081807817966', 'https://cdn.discordapp.com/attachments/964470483875672094/984481471832154162/unknown.png', NULL, NULL, '', NULL, '07.00', '17.30', NULL, 46, 'Tangerang', '', 'https://toko-oleh-oleh-khas-banten-citra-gading.business.site/', 'Jalan Citra Gading Residences Cipocok Jaya, Kec. Cipocok Jaya, Serang, Banten'),
(4, 'Oleh-oleh Jakarta Romlah', 'https://cdn.discordapp.com/attachments/964470483875672094/984484249484816464/unknown.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7130369108145!2d106.84451401508105!3d-6.301386095439423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed8bd1b06813%3A0xead7a8a172d027a0!2sRomlah%20Oleh-Oleh%20Jakarta!5e0!3m2!1sid!2sid!4v1655265529347!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar---Toilet', 'Alfamart---1,7 km---Mc Donalds---400 m', '08111814342', 'https://cdn.discordapp.com/attachments/964470483875672094/984484667363295323/unknown.png', NULL, NULL, '', NULL, '09:00', '17:00', NULL, 49, 'DKI Jakarta', '', 'https://romlah.com/', 'Jl. Swadaya II No. 20B, Tanjung Barat'),
(5, 'Dodol Nyak Mai', 'https://cdn.discordapp.com/attachments/964470483875672094/984485138467532911/unknown.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.410186934548!2d106.81894911508124!3d-6.340886895411334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec2adb02d0bd%3A0x125da7dfc58035a2!2sDodol%20Nyak%20Mai!5e0!3m2!1sid!2sid!4v1655265558131!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar---Toilet', 'Masjid---290 m', '085778561919', 'https://cdn.discordapp.com/attachments/964470483875672094/984485455749849228/unknown.png', NULL, NULL, '', NULL, '08:00', '20:00', NULL, 49, 'DKI Jakarta', '', '', 'Jl. Moch Kahfi II, Srengseng sawah'),
(6, 'Kue Betawi Pok Yati', 'https://cdn.discordapp.com/attachments/964470483875672094/984856548683689994/unknown.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5403446973173!2d106.8259763150812!3d-6.323940495423354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69edc33f28650f%3A0x70674a5b59668d23!2sKue%20betawi%20pok%20yati!5e0!3m2!1sid!2sid!4v1655265576289!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar---Toilet', 'Indomaret---210 m---Alfamart---230 m', '087867002104', 'https://cdn.discordapp.com/attachments/964470483875672094/984856195414241330/unknown.png', NULL, NULL, '', NULL, '07:00', '21:00', NULL, 49, 'DKI Jakarta', '', 'https://kue-betawi-pok-yati.business.site/', 'Jl. Joe Kelapa Tiga No. 131, Jagakarsa'),
(7, 'Kartika Sari', 'https://cdn.discordapp.com/attachments/964470483875672094/984486734270177300/unknown.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.821397551946!2d107.59766991508393!3d-6.911947095005754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e63e6639dda3%3A0x2c8e03c7d4428ecb!2sKartika%20Sari!5e0!3m2!1sid!2sid!4v1655265605785!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar---Toilet---Restaurant', 'Indomaret---70 m---ATM BCA---450 m', '08112045777', 'https://cdn.discordapp.com/attachments/964470483875672094/984486764582428682/unknown.png', NULL, NULL, '', NULL, '07:00', '17:30', NULL, 50, 'Bandung', '', 'https://www.kartikasari.com/', 'Jl. H. Akbar No. 4, Pasir Kaliki'),
(8, 'Brownies Amanda', 'https://cdn.discordapp.com/attachments/964470483875672094/984487450267238430/unknown.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5680144649077!2d107.66170091508405!3d-6.942117494984367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e81ecf8353ed%3A0xfaf5730c00f95e7a!2sAmanda!5e0!3m2!1sid!2sid!4v1655265640555!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar---Toilet', 'ATM BCA---210 m---ATM BNI---210 m', '08112114000', 'https://cdn.discordapp.com/attachments/964470483875672094/984487584191369306/unknown.png', NULL, NULL, '', NULL, '07:00', '21:00', NULL, 50, 'Bandung', '', 'https://amandabrownies.co.id/', 'Jl.  Rancabolang No. 29, Manjahlega'),
(9, 'Abadi Bagelen', 'https://cdn.discordapp.com/attachments/964470483875672094/984488178759139368/unknown.png', 'https://www.google.com/maps/place/ABADI+BAGELEN/@-6.9042103,107.6091203,15z/data=!4m5!3m4!1s0x0:0xfab28f732f9a008f!8m2!3d-6.9042103!4d107.6091203', 'Parkir Mobil & Motor---Pesan Antar---Toilet', 'Masjid---10 m---ATM BRI---500 m', '08157075812', 'https://cdn.discordapp.com/attachments/964470483875672094/984488363102978059/unknown.png', NULL, NULL, '', NULL, '07.30', '17.00', NULL, 50, 'Bandung', '', 'https://www.abadibagelen.com/', 'Jl. Purnawarman 49 Bandung, Jawa Barat'),
(10, 'Bolu Susu Lembang', 'https://cdn.discordapp.com/attachments/964470483875672094/984489109944950794/unknown.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6536255851493!2d107.61540181508347!3d-6.8119178950766495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e103a6c5e825%3A0x765dac2390dd3292!2sBolu%20Susu%20Lembang%20-%20Oleh%20oleh%20khas%20Bandung!5e0!3m2!1sid!2sid!4v1655265682004!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar---Toilet', 'Alun - alun lembang---140 m---Masjid---80 m', '08111500146', 'https://cdn.discordapp.com/attachments/964470483875672094/984489309849665579/unknown.png', NULL, NULL, '', NULL, '06:00', '22:00', NULL, 50, 'Bandung', '', 'https://bolulembang.co.id/', 'Jl. Raya Lembang No. 275, Jayagiri'),
(11, 'Bakpia Kurnia Sari', 'https://cdn.discordapp.com/attachments/964470483875672094/984842060957896744/unknown.png', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.823433483034!2d110.3856167146952!3d-7.80850819437312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57705a7ab28f%3A0x138287e6b0fe41ef!2sBakpia%20Kurnia%20Sari!5e0!3m2!1sid!2sid!4v1657245299676!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar---Toilet', 'Indomaret---40 m', '081280546608', 'https://cdn.discordapp.com/attachments/964470483875672094/984841851578241055/unknown.png', NULL, NULL, '', NULL, '08:00', '15:45', NULL, 65, 'Yogyakarta', '', 'https://kurniasari.co.id/shop/', 'Jl. Glagahsari No. 91, Warungboto'),
(12, 'Toko Wisata Rasa', 'https://cdn.discordapp.com/attachments/964470483875672094/984842327489130597/unknown.png', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.8426432495717!2d112.73715231508575!3d-7.258742994760419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9678b9b3c47%3A0xf74b8d44869ba4fa!2sToko%20Wisata%20Rasa!5e0!3m2!1sid!2sid!4v1655265716215!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar---Toilet', 'Bank CIMB Niaga---30 m---ATM BCA---210 m', '082210057583', 'https://cdn.discordapp.com/attachments/964470483875672094/984842327489130597/unknown.png', NULL, NULL, '', NULL, '07.00', '21.00', NULL, 66, 'Surabaya', '', 'https://www.wisatarasasurabaya.com/', 'Jl. Genteng Besar 83A, Surabaya'),
(13, 'Pusat Oleh Oleh UMKM Centre Kota Tarakan', 'https://cdn.discordapp.com/attachments/964470483875672094/984842578857951332/unknown.png', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.1801474358635!2d117.60117031467406!3d3.305564097593573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32138a6410c263c3%3A0xd1b93d6ec41c5c40!2sPusat%20Oleh%20Oleh%20UMKM%20Centre%20Kota%20Tarakan!5e0!3m2!1sid!2sid!4v1657241488700!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar---Toilet', 'Masjid---180 m---Bank Mandiri---650 m', '081254782298', 'https://cdn.discordapp.com/attachments/964470483875672094/984842902624677968/unknown.png', NULL, NULL, '', NULL, '08:00', '19:30', NULL, 44, 'Tarakan', '', '', 'Jl. Pattimura Rt. 17, Pamusian, Tarakan Tengah'),
(14, 'Zilfi oleh-oleh Banten', 'https://cdn.discordapp.com/attachments/964470483875672094/984843061693657208/unknown.png', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.1494514412066!2d106.15266241508019!3d-6.110571595575365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418b2b97436ec9%3A0x55fbec25eeecc25e!2sZILFI%20oleh-oleh%20banten!5e0!3m2!1sid!2sid!4v1655265757025!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar---Toilet', 'Bank BCA---30 m---Bank Danamon---170 m', '081319328393', 'https://cdn.discordapp.com/attachments/964470483875672094/984843152886226974/unknown.png', NULL, NULL, '', NULL, '08:00', '20:00', NULL, 45, 'Serang', 'zilfistore', '', 'Jl. Maulana Hasanudin, Kotabaru'),
(15, 'Toko Oleh-oleh Panen Raya', 'https://cdn.discordapp.com/attachments/964470483875672094/984843485435822090/unknown.png', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.8431201246012!2d112.73743511469169!3d-7.2586887947604355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f967918494b3%3A0x8545a635fb648d6b!2sToko%20Oleh%20Oleh%20Panen%20Raya!5e0!3m2!1sid!2sid!4v1658036992070!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar---Toilet', 'ATM CIMB Niaga---1,9 km---ATM BCA---200 m', '081234650650', 'https://cdn.discordapp.com/attachments/964470483875672094/984843485435822090/unknown.png', NULL, NULL, '', NULL, '07:00', '21:00', NULL, 66, 'Surabaya', 'panenraya_77', '', 'Jl. Genteng Besar No. 77 A, Genteng, Surabaya'),
(16, 'Bakpia kukus tuju Jogja', 'https://cdn.discordapp.com/attachments/964470483875672094/984843801317236766/unknown.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.2930658607206!2d110.37942041508833!3d-7.758710894408069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59ab8264b66d%3A0xfe1fb415583238a1!2sBakpia%20Kukus%20Tugu%20Jogja%20-%20Kaliurang!5e0!3m2!1sid!2sid!4v1655265807550!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar---Toilet', 'Alfamart---200 m---ATM Mandiri---550 m', '08111500625', 'https://cdn.discordapp.com/attachments/964470483875672094/984843905935745034/unknown.png', NULL, NULL, '', NULL, '06.00', '21.00', NULL, 65, 'Yogyakarta', '', 'https://bakpiakukustugu.co.id/', 'Jl. Kaliurang KM 5,5 No 10 A, Manggung, Caturtunggal'),
(17, 'Gemah Ripah', 'https://cdn.discordapp.com/attachments/964470483875672094/984844246865559582/unknown.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.933420607737!2d110.36325351508867!3d-7.796874094381281!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57881720aa59%3A0x5198d2225ea2e7f4!2sGemah%20Ripah!5e0!3m2!1sid!2sid!4v1655265835940!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar---Toilet', 'ATM BNI---170 m---ATM BRI---170 m', '087848876400', 'https://cdn.discordapp.com/attachments/964470483875672094/984844172978704434/unknown.png', NULL, NULL, '', NULL, '08:00', '17:00', NULL, 65, 'Yogyakarta', 'gemahripah_jogja', '', 'Jl. Margomulno No. 94'),
(18, 'Toko oleh-oleh khas Jepara \"\"Sinar Barokah\"\"', 'https://cdn.discordapp.com/attachments/964470483875672094/984845557862367412/unknown.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.3286830639568!2d110.719874515083!3d-6.729692895134979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70ddf0177f25e1%3A0x45315e9ed9b54541!2sToko%20Oleh-oleh%20Khas%20Jepara%20%E2%80%9CSinar%20Barokah%E2%80%9D!5e0!3m2!1sid!2sid!4v1655265898921!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar---Toilet', 'Bank Mandiri---20 m---ATM BNI---90 m', '081325252530', 'https://cdn.discordapp.com/attachments/964470483875672094/984845396100661258/unknown.png', NULL, NULL, '', NULL, '08:00', '20:00', NULL, 59, 'Semarang', '', 'https://toko-oleh-oleh-khas-jepara-sinar-barokah.business.site/', 'Jl. Raya Jepara, Kudus Km 9'),
(19, 'Pusat oleh oleh Djoe', 'https://cdn.discordapp.com/attachments/964470483875672094/984845907717685298/unknown.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1944640090437!2d110.41061481508433!3d-6.98635979495301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b455e35a20b%3A0x3f030e0ef348a316!2sPusat%20Oleh-Oleh%20Djoe!5e0!3m2!1sid!2sid!4v1655265919712!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar---Toilet', 'Bank BRI---180 m---Indomaret---170 m', '08112707799', 'https://cdn.discordapp.com/attachments/964470483875672094/984845986675429417/unknown.png', NULL, NULL, '', NULL, '06:00', '22:00', NULL, 59, 'Semarang', '', 'http://www.oleholehdjoe.com/tentang-kami', 'Jl. Pandanaran No. 51 Semarang'),
(20, 'Toko oleh oleh Madua Semarang', 'https://cdn.discordapp.com/attachments/964470483875672094/984847776435302411/unknown.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.276165926364!2d110.39833441508429!3d-6.976707094959893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b887bcaaced%3A0xfaa2e73c6eac3d00!2sOLEH%20OLEH%2052%20MADUKORO%20SEMARANG!5e0!3m2!1sid!2sid!4v1655265950636!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar---Toilet', 'Masjid---190 m---Bank BCA---650 m', '087882399553', 'https://cdn.discordapp.com/attachments/964470483875672094/984848022619951185/unknown.png', NULL, NULL, '', NULL, '07:00', '21:00', NULL, 59, 'Semarang', '', 'https://www.oleholehsemarang.id/', 'Jl. Madukuro Raya Semarang'),
(21, 'Atap Rasa', 'https://cdn.discordapp.com/attachments/964470483875672094/984848463235788830/unknown.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.1577464193874!2d112.72766661508622!3d-7.336174994705761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f967897411bd%3A0x7cc81183a1de08ce!2sAtap%20Rasa%20Pusat%20Oleh-Oleh%20Khas%20Surabaya!5e0!3m2!1sid!2sid!4v1655265966513!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar---Toilet', 'Bank BRI---600 m---Indomaret---70 m', '081931158000', 'https://cdn.discordapp.com/attachments/964470483875672094/984848544571748393/unknown.png', NULL, NULL, '', NULL, '08:00', '21:00', NULL, 66, 'Surabaya', '', 'https://pusat-oleh-oleh-khas-surabaya-jawa-timur.business.site/', 'Jl. Ahmad Yani No 243, Siwalankerto, Wonocolo'),
(22, 'Gerai Keneke Cilegon', 'https://cdn.discordapp.com/attachments/964470483875672094/984855750344052737/unknown.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.6856067499207!2d106.07864851507972!3d-6.037808995627267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418c335b50fa19%3A0x9eef2267f105bee7!2sPusat%20Oleh-Oleh%20KENEKE%20Cilegon!5e0!3m2!1sid!2sid!4v1655265985700!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar---Toilet', '', '085966317453', 'https://cdn.discordapp.com/attachments/964470483875672094/984855618512883773/unknown.png', NULL, NULL, '', NULL, '09:00', '17:00', NULL, 45, 'Serang', '', '', 'Jl. Lingkar Selatan Blok A No. 2 Km. 06 Cilegon'),
(23, 'Sowan', 'https://cdn.discordapp.com/attachments/964470483875672094/984848664637870111/unknown.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8602078671115!2d106.90104611508042!3d-6.149469195547677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f56a800585f7%3A0x19d9eaacf01bcb69!2sOleh%20Oleh%20Sowan%20%7C%20Wisata%20Belanja%20Oleh%20Oleh!5e0!3m2!1sid!2sid!4v1655266055183!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar---Toilet', 'Masjid---1,4 km---ATM CIMB Niaga---1,1 km', '0811968123', 'https://cdn.discordapp.com/attachments/964470483875672094/984848792278958120/unknown.png', NULL, NULL, '', NULL, '09:00', '21:00', NULL, 49, 'Jakarta', '', 'https://toko-oleh-oleh-sowan.business.site/', 'Jl. Raya Kelapa Nias Blok HF-3, Kelapa Gading'),
(24, 'Kampoeng Semarang', 'https://cdn.discordapp.com/attachments/964470483875672094/984849414902382612/unknown.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4321593450386!2d110.44373551508416!3d-6.958240194972959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f3413af6483b%3A0x2b42657f59b8a044!2sKampoeng%20Semarang!5e0!3m2!1sid!2sid!4v1655266071071!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar---Toilet', 'Indomaret---550 m---Masjid---450 m', '087823198601', 'https://cdn.discordapp.com/attachments/964470483875672094/984849071690878986/unknown.png', NULL, NULL, '', NULL, '08:00', '20:00', NULL, 59, 'Semarang', '', 'http://www.kampoengsemarang.co.id/', 'Jl. Raya Kaligawe Km. 1 No. 96 Semarang'),
(25, 'Warung oleh-oleh Bu Tini', 'https://cdn.discordapp.com/attachments/964470483875672094/984849544082767892/unknown.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.9611778200383!2d110.36558921508872!3d-7.793935294383368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a582840a0f525%3A0x9109beec43928361!2sToko%20Oleh-oleh%20Khas%20Jogja%20BU%20TINI!5e0!3m2!1sid!2sid!4v1655266089896!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar---Toilet', 'Bank BRI---170 m---Masjid 190 m', '0274566184', 'https://cdn.discordapp.com/attachments/964470483875672094/984849811650007040/unknown.png', NULL, NULL, '', NULL, '07:00', '22:00', NULL, 65, 'Yogyakarta', '', '', 'Jl. Mataram No. 194, Suryatmajan, Danurejan'),
(26, 'Toko Bogajaya Indragiri', 'https://cdn.discordapp.com/attachments/964470483875672094/984850008950071316/unknown.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5744732362077!2d112.72911291508585!3d-7.289158794738955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb9313630b87%3A0x621372924cd8fb89!2sOleh-Oleh%20Khas%20Surabaya%20%26%20Jawa%20Timur%20-%20TOKO%20BOGAJAYA%20INDRAGIRI!5e0!3m2!1sid!2sid!4v1655266106459!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar--Toilet', 'Bank Mandiri---150 m---Bank BNI---210 m', '085816894196', 'https://cdn.discordapp.com/attachments/964470483875672094/984850237397020712/unknown.png', NULL, NULL, '', NULL, '08:00', '21:00', NULL, 66, 'Surabaya', '', 'https://www.tokobogajaya.com/', 'Jl. Indragiri Ruko Landmark a6 16 Surabaya'),
(27, 'Sartika Barka', 'https://cdn.discordapp.com/attachments/964470483875672094/984850811517534238/unknown.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.7791747400806!2d106.0553603150798!3d-6.0250209956364245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418e70cf22e7d1%3A0x8f75f052bb2e97b4!2sSartika%20Barka%20(Pusat%20Oleh-Oleh%20Khas%20Cilegon)!5e0!3m2!1sid!2sid!4v1655266457400!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar--Toilet', 'ATM BCA---450 m---Alfamidi---450 m', '081808801001', 'https://cdn.discordapp.com/attachments/964470483875672094/984850507015278602/unknown.png', NULL, NULL, '', NULL, '07.00', '20.30', NULL, 48, 'Cilegon', '', 'https://sartika-barka-pusat-oleh-oleh-khas-cilegon.business.site/', 'Ketileng Barat No. 145, RT.07/RW.02, Kec. Cilegon, Banten'),
(28, 'Mpok Nini', 'https://cdn.discordapp.com/attachments/964470483875672094/984852593501147136/unknown.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1552634964582!2d106.9807597150808!3d-6.243259295480825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c37fd541f9d%3A0x68a3999cd586873c!2sMpok%20Nini%20%7C%20Pusat%20Oleh-oleh%20Khas%20Betawi%20(%20Oleh-oleh%20Khas%20Bekasi%20%2F%20Oleh%20oleh%20Khas%20Jakarta%20)!5e0!3m2!1sid!2sid!4v1655266566333!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar--Toilet', 'Indomaret---220 m---Masjid---270 m', '082126632730', 'https://cdn.discordapp.com/attachments/964470483875672094/984852395580358727/unknown.png', NULL, NULL, '', NULL, '06.00', '22.00', NULL, 49, 'Jakarta', '', 'https://mpoknini.co.id/', 'Jln Belanak 2 Ujung RT.02/01 No.57 Perumnas 2 Kel, RT.001/RW.001, Kayuringin Jaya'),
(29, 'Rahmia Production Oleh Oleh Khas Kota Bandung', 'https://cdn.discordapp.com/attachments/964470483875672094/984853074331971584/unknown.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0555618218705!2d107.59680431508373!3d-6.883948095025569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6f4c6ab000f%3A0x2255727e93cea38!2sRahmia%20Production%20Oleh%20Oleh%20Khas%20Bandung!5e0!3m2!1sid!2sid!4v1655266609061!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar--Toilet', 'Masjid---60 m---Alfamart---80 m', '082126632730', '', NULL, NULL, '', NULL, '06.30', '16.00', NULL, 50, 'Bandung', '', 'https://oleh-oleh-khas-kota-bandung.business.site/', 'Gang Cemara IV No. 23 RT.01/RW.01, Kecamatan Sukajadi, Bandung'),
(30, 'Bandeng Juwana Elrina', 'https://cdn.discordapp.com/attachments/964470483875672094/984854328638595162/unknown.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1939414093513!2d110.41108321508426!3d-6.9864214949529835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b455ba611bd%3A0x15cde10e2bb3a1!2sBandeng%20Juwana%20Elrina%20-%20Pandanaran!5e0!3m2!1sid!2sid!4v1655266625582!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar--Toilet', 'Bank BRI---120 m---Mc Donalds---140 m', '0248311488', 'https://cdn.discordapp.com/attachments/964470483875672094/984854531236048996/unknown.png', NULL, NULL, '', NULL, '07.00', '21.00', NULL, 59, 'Semarang', 'bandengjuwana', 'https://www.bandengjuwana.id/', 'Jl. Pandanaran No. 57, Randusari'),
(31, 'Toko oleh - oleh Khas Malinau', 'https://cdn.discordapp.com/attachments/964470483875672094/984855424618614824/unknown.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15929.856974734137!2d116.60137!3d3.4793!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x62c276b0378e8205!2zM8KwMjgnNDUuNSJOIDExNsKwMzYnMDQuOSJF!5e0!3m2!1sen!2sus!4v1655266672106!5m2!1sen!2sus\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Mobil & Motor---Pesan Antar---Toilet', '', '081361564042', 'https://cdn.discordapp.com/attachments/964470483875672094/984854973529604187/unknown.png', NULL, NULL, '', NULL, '', '', NULL, 44, 'Tarakan', '', '', 'Jl.Kuala Lapang, Malinau'),
(32, 'Gracia', 'https://cdn.discordapp.com/attachments/964470483875672094/984512796043665520/Gracia_Oleh_Ambon.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15926.001159219635!2d128.1750682!3d-3.7003841!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6ce8496ef0e483%3A0x406141cea7700fb6!2sGracia%20Oleh%20Oleh%20Khas%20Ambon!5e0!3m2!1sid!2sid!4v1655261793955!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Motor & Mobil---Pesan Antar', 'ATM BRI--150M---Bandara Pattimura---20,1KM', '082330904348', 'https://cdn.discordapp.com/attachments/964470483875672094/984518448656842812/Gracia_Oleh_Ambon_2.png', NULL, NULL, '', NULL, '8:00', '19:00', NULL, 92, 'Ambon', '', '', 'Jalan, Jl. DR. Setiabudi No.21, Kel Ahusen, Kec. Sirimau, Kota Ambon, Maluku 97127'),
(33, 'Athifah', 'https://cdn.discordapp.com/attachments/964470483875672094/984512342404517918/Athifah_Oleh_Kendari.jpg', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15920.77894777358!2d122.5189358!3d-3.9803092!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf0b57518a4a65aad!2sATHIFAH%20OLEH-OLEH%20KHAS%20KENDARI!5e0!3m2!1sid!2sid!4v1655261865534!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Motor & Mobil---Pesan Antar', 'ATM Mandiri & BNI ---1KM---Bandara Haluoleo---21KM', '085256107272', 'https://cdn.discordapp.com/attachments/964470483875672094/984518446568075284/Athifah_Oleh_Kendari_2.png', NULL, NULL, '', NULL, '07:00', '22:00', NULL, 85, 'Kendari', '', 'http://www.athifah-metekendari.com/home', 'Jl. H. Supu Yusuf No.22, Bende, Kec. Kadia, Kota Kendari, Sulawesi Tenggara 93111'),
(34, 'Petak 10', 'https://cdn.discordapp.com/attachments/964470483875672094/984512829514199070/Petak_10.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15925.95376627988!2d128.1769937!3d-3.7030195!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4b95d8afd4c12a1f!2sPETAK%2010%20Ole%20Ole%20Khas%20Ambon!5e0!3m2!1sid!2sid!4v1655261890565!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Motor & Mobil', 'ATM BNI---450M---ATM BCA---1KM---Bandara Pattimura---20,8KM', '081344826357', 'https://cdn.discordapp.com/attachments/964470483875672094/984518448946225152/Petak_10_2.png', NULL, NULL, '', NULL, '09:00', '18:00', NULL, 92, 'Ambon', '', '', 'Jl. DR. Siwabessy, Kel Mangga Dua, Kec. Nusaniwe, Kota Ambon, Maluku'),
(35, 'Prima Garden', 'https://cdn.discordapp.com/attachments/964470483875672094/984512885474607124/Prima_Garden_Jayapura.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15943.553202455905!2d140.7017882!3d-2.5432795!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x238624e5ad30f3eb!2sPrima%20Garden%20Jayapura!5e0!3m2!1sid!2sid!4v1655261949488!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Motor & Mobil---Makan Di Tempat', 'ATM---300M---Bandara Dortheys Hiyo Eluay---34KM', '08967532038', 'https://cdn.discordapp.com/attachments/964470483875672094/984518445448175616/Prima_Garden_Jayapura_2.png', NULL, NULL, '', NULL, '09:00', '22:00', NULL, 96, 'Jayapura', '', '', 'Jl. Ahmad Yani No.28, Gurabesi, Kec. Jayapura Utara, Kota Jayapura, Papua 99222'),
(37, 'The Ambon Manise', 'https://cdn.discordapp.com/attachments/964470483875672094/984512968484061204/The_Ambon_Manise.jpg', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.5357561637616!2d128.1879275!3d-3.6924840999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6ce92830650b65%3A0xa6746697a096aab1!2sToko%20Oleh-Oleh%20The%20Ambon%20Manise%20Shop%20Pusat%20-%20Khas%20Maluku%20Terlengkap!5e0!3m2!1sid!2sid!4v1655261921013!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Motor & Mobil---Pesan Antar', 'ATM BNI---240M---ATM Mandiri---600M---Bandara Pattimura---19,1KM', '082248210607', 'https://media.discordapp.net/attachments/964470483875672094/984512967951392829/The_Ambon_Manise_2.jpg?width=710&height=473', NULL, NULL, '', NULL, '08.00 (Minggu buka jam 12.00)', '21.00', NULL, 92, 'Ambon', '', 'http://www.theambonmaniseshop.com/', 'Jl. Cendrawasih Jl. Belakang Soya, Kelurahan Rijali, Sirimau, Kota Ambon, Maluku'),
(38, 'BRAVO Oleh-oleh Khas Kendari Mandonga', 'https://cdn.discordapp.com/attachments/964470483875672094/984512525737533491/Brovo_Oleh_Mandonga.jpg', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.254566065619!2d122.51865099999999!3d-3.9679122999999987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d98f2941efe5bd3%3A0x108b724415196b9d!2sBRAVO%20OLEH-OLEH%20KHAS%20KENDARI!5e0!3m2!1sid!2sid!4v1655261964289!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Motor & Mobil---Pesan Antar', 'ATM Mandiri---150M---ATM BCA---450M---Bandara Haluoleo---23KM', '082354923800', 'https://cdn.discordapp.com/attachments/964470483875672094/984518447159476264/Bravo_Produk.png', NULL, NULL, '', NULL, '08:00', '20:00', NULL, 85, 'Kendari', 'bravosouveni', '', 'Jl. Syech Yusuf No.12A, Korumba, Kec. Mandonga, Kota Kendari, Sulawesi Tenggara 93111'),
(39, 'BRAVO Oleh-oleh Khas Kendari Wua-wua', 'https://cdn.discordapp.com/attachments/964470483875672094/984512597246214164/Bravo_Oleh_Wua-Wua_2.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.1604228102983!2d122.50703449999997!3d-3.9874018999999987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d98f30878334b1b%3A0xb6e00363a81c5c00!2sBRAVO%20OLEH-OLEH%20KHAS%20KENDARI%20WUA-WUA!5e0!3m2!1sid!2sid!4v1655261991465!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Motor & Mobil---Pesan Antar', 'ATM BNI---80M---Bandara Haluoleo---20,2KM', '085333168585', 'https://cdn.discordapp.com/attachments/964470483875672094/984518447159476264/Bravo_Produk.png', NULL, NULL, '', NULL, '08:00', '20:00', NULL, 85, 'Kendari', 'bravosouvenir', '', 'Jl. Jend. Ahmad Yani No.62, Kadia, Kec. Kadia, Kota Kendari, Sulawesi Tenggara 93117'),
(40, 'Toko Oleh-Oleh Kota Daeng', 'https://cdn.discordapp.com/attachments/964470483875672094/984513027053338664/Toko_Oleh_Kota_Daeng.png', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15896.85987652106!2d119.5250893!3d-5.0688758!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2ccd50a749201ae4!2sTOKO%20OLEH-OLEH%20KOTA%20DAENG!5e0!3m2!1sid!2sid!4v1655262015194!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Motor & Mobil---Pesan Antar', 'ATM Mandri---850M---Bandara Sultan Hasanuddin---3,8KM', '082189590055', 'https://cdn.discordapp.com/attachments/964470483875672094/984518446089920552/Toko_Oleh_Kota_Daeng_4.jpg.png', NULL, NULL, '', NULL, '07:00', '23:00', NULL, 87, 'Makassar', 'oleholeh.kotadaeng', 'https://toko-oleh-oleh-kota-daeng.business.site/', 'Jl. Perintis Kemerdekaan, Sudiang, Kec. Biringkanaya, Kota Makassar, Sulawesi Selatan 90552'),
(41, 'Cahaya Oleh-Oleh (Pusat)', 'https://cdn.discordapp.com/attachments/964470483875672094/984512700979753030/Cahaya_Oleh_Pusat_3.jpg', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15895.418993586653!2d119.408721!3d-5.1270909!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x408caff0a0495159!2sCahaya%20Oleh-Oleh%20(Pusat)!5e0!3m2!1sid!2sid!4v1655262051514!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Motor & Mobil---Pesan Antar', 'ATM BRI---110M---Bandara Sultan Hasanuddin---17,8KM', '(0411)3634470', 'https://cdn.discordapp.com/attachments/964470483875672094/984512700723892224/Cahaya_Oleh_Pusat_2.jpg', NULL, NULL, '', NULL, '08:00', '21:00', NULL, 87, 'Makassar', 'cahayaoleholeh', 'http://cahayaoleholeh.com/', 'Jl. Sulawesi No.181, Melayu Baru, Kec. Wajo, Kota Makassar, Sulawesi Selatan 90173'),
(42, 'Cahaya Oleh-Oleh (Cabang : Toddopuli)', 'https://cdn.discordapp.com/attachments/964470483875672094/984512762006888478/Cahaya_Oleh_Toddopuli_2.jpg', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15894.525372684628!2d119.4537126!3d-5.1628664!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb32bfb93f527c40e!2sCahaya%20Oleh-Oleh%20(Cabang%20%3A%20Toddopuli)!5e0!3m2!1sid!2sid!4v1655262029918!5m2!1sid!2sid\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Motor & Mobil---Pesan Antar', 'ATM Mandiri---150M---ATM BRI---280M---ATM Mandiri, BRI, BCA, MEGA---500M---Bandara Sultan Hasanuddin---21,6KM', '(0411)4091471', 'https://cdn.discordapp.com/attachments/964470483875672094/984518448270962698/Cahaya_Oleh_Toddopuli_4.png', NULL, NULL, '', NULL, '08:00', '20:00', NULL, 87, 'Makassar', 'cahayaoleholeh', 'http://cahayaoleholeh.com/', 'Jalan Toddopuli Raya Timur Blok C2 No.15, Panakkukang, Paropo, Borong, Manggala, Makassar City, South Sulawesi 90222'),
(43, 'Krisna Oleh-oleh Bali', '', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.8712217126704!2d115.180769!3d-8.703777499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd246ce3a9fc6f9%3A0xd28e8c1354283c90!2sKrisna%20pusat%20oleh%20oleh%20khas%20bali!5e0!3m2!1sen!2ssg!4v1655188160976!5m2!1sen!2ssg\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Motor & Mobil---Pesan Antar', '', '(0361) 750031', '', NULL, NULL, '', NULL, '08:00', '22:00', NULL, 74, 'Bali', '', 'https://shop.krisnabali.co.id/about/', ', Jl. Sunset Road, Seminyak, Kec. Kuta, Kabupaten Badung, Bali 80361'),
(44, 'Agung Bali Pusat Oleh-oleh Khas Bali', '', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.8422660226283!2d115.18260260000001!3d-8.706524899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd246ca638f8daf%3A0x630f9e402dbf642c!2sAgung%20Bali%20Oleh-Oleh!5e0!3m2!1sen!2ssg!4v1655188203293!5m2!1sen!2ssg\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Motor & Mobil---Pesan Antar', '', '(0361) 7992517', '', NULL, NULL, '', NULL, '07:00', '20:00', NULL, 74, 'Bali', '', 'https://oleholehagungbali.com/', 'Jl. Sunset Road No.18, Kuta, Kec. Kuta, Kabupaten Badung, Bali 80361'),
(45, 'Oleh-oleh Khas Manado', '', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.539075844877!2d124.84518109999999!3d1.4509400000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3287759ce0fe6847%3A0xca30815eda02d15a!2sOleh%20Oleh%20khas%20Manado!5e0!3m2!1sen!2ssg!4v1655188244833!5m2!1sen!2ssg\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Motor & Mobil---Pesan Antar', '', '0858-2284-1215', '', NULL, NULL, '', NULL, '09:00', '17.00', NULL, 81, 'Manado', '', 'http://www.meldebkitchen.com/', 'Ranotana Weru, Wanea, Manado City, North Sulawesi'),
(46, 'Toko Manado Souvenir', '', '<iframe src=\"\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.474768252684!2d124.84795220000001!3d1.4869641999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32877538901bddf9%3A0xbc08972c5c053120!2sToko%20Manado%20Souvenir!5e0!3m2!1sen!2ssg!4v1655188272191!5m2!1sen!2ssg\"\" width=\"\"600\"\" height=\"\"450\"\" style=\"\"border:0;\"\" allowfullscreen=\"\"\"\" loading=\"\"lazy\"\" referrerpolicy=\"\"no-referrer-when-downgrade\"\"></iframe>', 'Parkir Motor & Mobil---Pesan Antar', '', '0813-4027-1299', '', NULL, NULL, '', NULL, '08:00', '21:00', NULL, 81, 'Manado', '', 'https://www.klappertaartkawanua.com/', 'Jalan B.W.Lapian No.25 Lawangirung, Tikala Kumaraka, Kec. Wenang, Kota Manado, Sulawesi Utara 95124'),
(47, 'Shella', '', 'https://goo.gl/maps/rKzUzPz8xUxTo2mR9', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '0822 7914 0020', '', NULL, NULL, '', NULL, '08:00', '17:00', NULL, 34, 'Pangkal Pinang', '', '', 'Jl. Garut Gg Kedondong Rt 05 Kel.Pasir Padi P. Pinang'),
(48, 'Sentra GETAS KAWAN HAKULE’ (35 UKM - Nur Jaya, Zahawa, Gurih DD, Abadi DR, dll)', '', 'https://goo.gl/maps/AekScwnaSygzd58L7', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '', '', NULL, NULL, '', NULL, '08:00', '17:00', NULL, 34, 'Pangkal Pinang (Kab. Bangka Tengah)', '', '', 'Desa Kurau Barat Kecamatan Koba Kabupaten Bangka Tengah'),
(49, 'Rini Amplang', '', 'https://goo.gl/maps/RQjMUAd4nqUaUgPB6', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '085248578252', '', NULL, NULL, '', NULL, '08:00', '22:00', NULL, 41, 'Banjarbaru', '', '', 'Jl. Budi Waluyo, Komet, Kec. Banjarbaru Utara, Kota Banjar Baru, Kalimantan Selatan 70714'),
(50, 'UD. Harmas (Amplang Cap Ikan Pipih)', '', 'https://goo.gl/maps/G7vLz3tCzAH8xFxb6', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '0541732139', '', NULL, NULL, '', NULL, '08:00', '17:00', NULL, 37, 'Samarinda', '', '', 'Jl. Imam Bonjol No.4, Pelabuhan, Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75113'),
(51, 'UD. Harmas 2 (Amplang Cap Ikan Pipih)', '', 'https://goo.gl/maps/5MWQAA3L5Q6UhRfj8', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '0811585960', '', NULL, NULL, '', NULL, '08:00', '19:00', NULL, 39, 'Balikapapan', 'harmas.balikpapan', '', 'Jl. Jenderal Sudirman No.21a Stal Kuda (dpn asrama brimob) Damage Bahagia, Gn. Bahagia, Kecamatan Balikpapan Selatan, Kota Balikpapan, Kalimantan Timur 76114'),
(52, 'AKWET', '', 'https://goo.gl/maps/7njK6ALYEwZ2akUM9', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '081316129777', '', NULL, NULL, '', NULL, '06:30', '21:30', NULL, 34, 'Pangkal Pinang (Kabupaten Bangka)', 'tokokerupuk_akwet', '', 'Jl. Mayor Syafrie Rachman No.139, Kuto Panji, Belinyu, Kabupaten Bangka, Kepulauan Bangka Belitung 33253'),
(53, 'Kemplang Panggang MM', '', 'https://goo.gl/maps/zDND5AWPjBgUQdJ2A', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '0817-0819-389', '', NULL, NULL, '', NULL, '08:00', '17:00', NULL, 34, 'Pangkal Pinang', 'kempelang_mm', '', 'Air Itam, Kec. Bukitintan, Kota Pangkal Pinang, Kepulauan Bangka Belitung 33149'),
(54, 'Kampoeng Timoer', '', 'https://g.page/KampoengTimoer?share', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '082152290906', '', NULL, NULL, '', NULL, '08:00', '16:00', NULL, 39, 'Balikpapan', '', 'https://kampoengtimoer.co.id/', 'Straat 2 No. 30, Jl. Soekarno Hatta, Gn. Samarinda, Kec. Balikpapan Utara, Kota Balikpapan, Kalimantan Timur 76125'),
(55, 'Bontings', '', 'https://goo.gl/maps/kMDsgrZZaPhUwZkd6', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '0813-4947-4696', '', NULL, NULL, '', NULL, '07:00', '22:00', NULL, 39, 'Balikpapan', '', 'http://www.bontings.com/', 'Jl. Marsma R. Iswahyudi No.23B, Gn. Bahagia, Kecamatan Balikpapan Selatan, Kota Balikpapan, Kalimantan Timur 76114'),
(56, 'Aneka', '', 'https://goo.gl/maps/u3XVYgCEdDRSonu78', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '082135876065', '', NULL, NULL, '', NULL, '07:00', '22:00', NULL, 39, 'Balikpapan', '', '', 'Jl. Marsma R. Iswahyudi No.25, Sepinggan, Kecamatan Balikpapan Selatan, Kota Balikpapan, Kalimantan Timur 76115'),
(57, 'Bontings', '', 'https://goo.gl/maps/vSnA8M9rXGQcBiPC7', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '0813-4947-4696', '', NULL, NULL, '', NULL, '07:00', '22:00', NULL, 37, 'Samarinda', '', 'http://www.bontings.com/', 'Sungai Siring, Kec. Samarinda Utara, Kota Samarinda, Kalimantan Timur 75119'),
(58, 'Happy', '', 'https://goo.gl/maps/5S5HRUq4U27DPCvi7', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '(0561) 740810', '', NULL, NULL, '', NULL, '07:00', '20:00', NULL, 35, 'Pontianak', '', '', 'Jl. Sisingamangaraja No.11-16, Darat Sekip, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78117'),
(59, 'Asia', '', 'https://goo.gl/maps/PP3jNd2B7VZtxKAg7', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '082251332358', '', NULL, NULL, '', NULL, '07:00', '21:00', NULL, 35, 'Pontianak', '', '', 'Komp. PSP, Jl. Patimura No.58, Darat Sekip, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78243'),
(60, 'Al-Fajar', '', 'https://goo.gl/maps/61iqXwyqmqYRBpbt5', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '0813-5206-9494', '', NULL, NULL, '', NULL, '08:00', '21:00', NULL, 35, 'Pontianak', 'bingke_alfajar', '', 'Jl. Adi Sucipto No.8, Sungai Bangkong, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78244'),
(61, 'Blue Sky', '', 'https://goo.gl/maps/oKVAAyZb2DwjTkrB6', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '05427577011', '', NULL, NULL, '', NULL, '07:00', '21:00', NULL, 39, 'Balikpapan', '', 'https://www.blue-sky.co.id/page/blue-sky-mantau', 'Bandara Udara Sultan Aji Muhammad Sulaiman, Terminal Keberangkatan, Jalan Marsma Iswahyudi No. 3, Sepinggan, Balikpapan Selatan, Sepinggan, Kecamatan Balikpapan Selatan, Kota Balikpapan, Kalimantan Timur 76115'),
(62, 'Aneka', '', 'https://goo.gl/maps/WpM2kTtXQRXm5Ywr7', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '0822-8868-8868', '', NULL, NULL, '', NULL, '07:30', '21:00', NULL, 32, 'Bandar Lampung', '', 'http://www.anekasarirasa.com/', 'Jl. Ikan Kakap No.26 - 28, Pesawahan, Kec. Telukbetung Selatan, Kota Bandar Lampung, Lampung 35221'),
(63, 'Aneka', '', 'https://goo.gl/maps/c9PrZoVFvz8gkWXL7', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '', '', NULL, NULL, '', NULL, '07:30', '21:00', NULL, 32, 'Bandar Lampung', '', 'http://www.anekasarirasa.com/', 'Jl. Ikan Kakap No.21, Pesawahan, Kec. Telukbetung Selatan, Kota Bandar Lampung, Lampung 35223'),
(64, 'Yussy Akmal', '', 'https://goo.gl/maps/pnwUz6Wni9u35pVF7', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '0721-5610029', '', NULL, NULL, '', NULL, '07:00', '21:00', NULL, 32, 'Bandar Lampung', '', 'http://www.yussyakmal.com/', 'Jl. ZA. Pagar Alam, Labuhan Ratu, Kec. Kedaton, Kota Bandar Lampung, Lampung 35132'),
(65, 'Babe', '', 'https://goo.gl/maps/F1CnesYSZyTX9V4S9', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '0852 7371 9048', '', NULL, NULL, '', NULL, '08:00', '17:00', NULL, 34, 'Pangkal Pinang (Kab. Bangka Tengah)', '', '', 'Jl. GG Pisang Ds Batu Belubang, Kab. Bangka Tengah Prov. Bangka Belitung'),
(66, 'Subiarti', '', 'https://goo.gl/maps/F1CnesYSZyTX9V4S99', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '085273719048', '', NULL, NULL, '', NULL, '08:00', '17:00', NULL, 34, 'Pangkal Pinang (Kab. Bangka Tengah)', '', '', 'Gang Pisang, RT 07, Desa Batu Belubang, Kec.Pangkalan Baru, Bangka Tengah'),
(67, 'Galuh', '', 'https://g.page/oleholehbanjar?share', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '0857-5402-8042', '', NULL, NULL, '', NULL, '07.30-22.00', '22:00', NULL, 40, 'Banjarmasin', '', 'https://oleholehbanjarmasin.business.site/', 'Jalan Mayjen S. Parman No.5\n        Belitung Selatan\n        Banjarmasin Barat\n        Kota Banjarmasin\n        Kalimantan Selatan 70123\n        Indonesia'),
(68, 'Andalas', '', 'https://goo.gl/maps/zWEhrnYHEZQEQD7e7', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '0511-3353223', '', NULL, NULL, '', NULL, '08:00', '21:00', NULL, 40, 'Banjarmasin', '', 'http://www.pabrikkerupukindonesia.com/', 'Jl. Perintis Kemerdekaan No.12, RT.22, Ps. Lama, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan 70123'),
(69, 'Wadai Banjar', '', 'https://goo.gl/maps/R8nxGN1gaJUpBJyn9', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '0851-0020-8887', '', NULL, NULL, '', NULL, '07:00', '22:00', NULL, 40, 'Banjarmasin', '', 'https://wadaibanjar.com/', 'Jl. A. Yani KM.2 No 83A Kecamatan Banjarmasin Timur, Sungai Baru, Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan 70122');
INSERT INTO `toko_oleh` (`idtoko`, `nama_toko`, `gambar_utama`, `map_toko`, `fasilitas_toko`, `jenis_sekitar`, `kontak_toko`, `galeri_toko`, `created_at`, `updated_at`, `galeri_toko_caption`, `rekomendasi_count`, `jam_buka`, `jam_tutup`, `list_count`, `idlokasi`, `nama_lokasi`, `sosmed_toko`, `website_toko`, `alamat_toko`) VALUES
(70, 'Deknong Bakery', 'https://cdn.discordapp.com/attachments/964470483875672094/984628335797747722/deknong_bakery.png', 'https://g.page/DEKNONG?share', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '085260375377', 'https://cdn.discordapp.com/attachments/964470483875672094/984630041952550942/galeri_deknong.png', NULL, NULL, '', NULL, '07:15', '22:00', NULL, 1, 'Banda Aceh', '', 'https://deknong-bakery.business.site/', 'Jl. T. Hasan Dek No.234, Beurawe, Kec. Kuta Alam, Kota Banda Aceh, Aceh 24415'),
(71, 'Phin Phin', 'https://cdn.discordapp.com/attachments/964470483875672094/984630870507929620/phin_phin.png', 'https://goo.gl/maps/NByov3fw42WE1yJr5', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '0614525121', 'https://cdn.discordapp.com/attachments/964470483875672094/984631915686543360/galeri_phin.png', NULL, NULL, '', NULL, '08:00', '17:30', NULL, 6, 'Medan', '', 'http://www.tokokuephinphin.com/', 'Jl. Dewa Ruci No.32 - 34, Petisah Tengah, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20112'),
(72, 'Racha', 'https://cdn.discordapp.com/attachments/964470483875672094/984634052248223774/racha.png', 'https://goo.gl/maps/XapfEUL2Ua8PsUNbA', 'Pesan Antar', '', '082174822297', '', NULL, NULL, '', NULL, '08:00', '17:00', NULL, 29, 'Pekanbaru', '', '', 'GCPV+XFR, Kp. Dalam, Kec. Senapelan, Kota Pekanbaru, Riau 28155'),
(73, 'Rumah Sanjai', 'https://cdn.discordapp.com/attachments/964470483875672094/984635451010854972/rumah_sanjai.png', 'https://goo.gl/maps/DWeACdAwSvV4Q1ju5', 'Pesan Antar', '', '081363890676', '', NULL, NULL, '', NULL, '08:00', '18:00', NULL, 19, 'Bukittinggi', '', 'http://www.rumahsanjai.com/', 'M9WC+H9X, Benteng Ps. Atas, Kec. Guguk Panjang, Kota Bukittinggi, Sumatera Barat 26136'),
(74, 'Aqilla', 'https://cdn.discordapp.com/attachments/964470483875672094/984637149389422602/aqilla.png', 'https://g.page/Keripik_Aqilla?share', 'Parkir Mobil & Motor---Pesan Antar', '', '08551134577', 'https://cdn.discordapp.com/attachments/964470483875672094/984637207451172874/galeri_aqilla.png', NULL, NULL, '', NULL, '09:00', '21:00', NULL, 46, 'Tangerang', '', 'http://keripiksingkongsanjai.blogspot.com/', 'TUTUP SEMENTARA KARENA MAU PINDAH, Jl. Merpati Raya No.85, Sawah Baru, Kec. Ciputat, Kota Tangerang Selatan, Banten 15413'),
(75, 'Ananda', 'https://cdn.discordapp.com/attachments/964470483875672094/984640049108897812/ananda.png', 'https://goo.gl/maps/StFBrBwHD2CDRoyz5', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '07528805330', 'https://cdn.discordapp.com/attachments/964470483875672094/984640106059169842/galeri_ananda.png', NULL, NULL, '', NULL, '08:00', '23:00', NULL, 19, 'Bukittinggi', '', '', 'Jl. H. Agus Salim No.25, Kayu Kubu, Kec. Guguk Panjang, Kota Bukittinggi, Sumatera Barat 26113'),
(76, 'Anna', 'https://cdn.discordapp.com/attachments/964470483875672094/984641767561396274/anna.png', 'https://g.page/Sanjaiannapyk?share', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '085278443873', 'https://cdn.discordapp.com/attachments/964470483875672094/984641810787881000/galeri_anna.png', NULL, NULL, '', NULL, '06:30', '22:00', NULL, 21, 'Payakumbuh', '', '', 'Jl. Imam Bonjol, Bulakan Balai Kandih, Kec. Payakumbuh Bar., Kota Payakumbuh, Sumatera Barat 26223'),
(77, 'Nan Salero', 'https://cdn.discordapp.com/attachments/964470483875672094/984645330383564840/nan_salero.png', 'https://g.page/Nan-salero?share', 'Parkir Mobil & Motor---Pesan Antar', '', '075132863', 'https://cdn.discordapp.com/attachments/964470483875672094/984645383198232616/galeri_nan_salero.png', NULL, NULL, '', NULL, '08:00', '21:00', NULL, 18, 'Padang', '', 'http://www.nansalero.com/', 'Jl. Niaga No.229, Kp. Pd., Kec. Padang Bar., Kota Padang, Sumatera Barat 25119'),
(78, 'Rina', 'https://cdn.discordapp.com/attachments/964470483875672094/984646927343837194/rina.png', 'https://goo.gl/maps/fPzFi5LT8yG58gxW9', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '081363429779', 'https://cdn.discordapp.com/attachments/964470483875672094/984646968875835442/galeri_rina.png', NULL, NULL, '', NULL, '07:00', '22:00', NULL, 21, 'Payakumbuh', '', 'https://pusat-oleh-oleh-sanjai-rina-payakumbuh.business.site/', 'Jl. Imam Bonjol No.39 Kel, Bulakan Balai Kandih, Kec. Payakumbuh Bar., Kota Payakumbuh, Sumatera Barat 26225'),
(79, 'Galamai Pandan', 'https://cdn.discordapp.com/attachments/964470483875672094/984650765421383690/pandan.png', 'https://goo.gl/maps/DUT9EFXaE5wGRZtZ6', 'Parkir Mobil & Motor---Pesan Antar', '', '085261094100', '', NULL, NULL, '', NULL, '07:00', '21:00', NULL, 18, 'Padang', '', '', 'Jl. Khatib Sulaiman No.11 A, Gn. Pangilun, Kec. Padang Utara, Kota Padang, Sumatera Barat 25137'),
(80, 'Erina', 'https://cdn.discordapp.com/attachments/964470483875672094/984659261630070804/erina.png', 'https://goo.gl/maps/tgDrvySNpKMq7NbN8', 'Parkir Mobil & Motor---Pesan Antar--Toilet', '', '085211364641', 'https://cdn.discordapp.com/attachments/964470483875672094/984659352222842900/galeri_erina.png', NULL, NULL, '', NULL, '08:00', '22:00', NULL, 21, 'Payakumbuh', '', '', 'Jl. Palembang No.Kelurahan, Parik Rantang, Kec. Payakumbuh Bar., Kota Payakumbuh, Sumatera Barat 26218'),
(81, 'Sentra UKM Siola', 'https://cdn.discordapp.com/attachments/964470483875672094/990108321312804944/867987.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15831.43752040468!2d112.72880496977537!3d-7.256840500000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f95d67d8c6c7%3A0xae38021c3316b375!2sOleh%20Oleh%20Khas%20Surabaya%20-%20Sentra%20UKM%20Siola!5e0!3m2!1sen!2sid!4v1656129854125!5m2!1sen!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Parkir Mobil & Motor---Toilet---Kantin---Ruang Tunggu', '', '085655927391', 'https://cdn.discordapp.com/attachments/964470483875672094/990106905034784799/IMG20220219141654.jpg---https://cdn.discordapp.com/attachments/964470483875672094/990106830044803132/IMG20220219141636.jpg', NULL, NULL, '', NULL, '10:00', '20:00', NULL, 66, 'Surabaya', '', '', 'Jl. Tunjungan No.1-3, Genteng, Kec. Genteng, Kota SBY, Jawa Timur 60275'),
(99, 'Meranti', 'https://cdn.discordapp.com/attachments/906163180328325130/906167937151430656/BoluMeranti_1.jpg', '<div class=\"\"mapouter\"\"><div class=\"\"gmap_canvas\"\"><iframe width=\"\"640\"\" height=\"\"360\"\" id=\"\"gmap_canvas\"\" src=\"\"https://maps.google.com/maps?q=Jl.%20Kruing%20simpang%20Razak%20No.7C%20Medan%20Sumatra%20Utara,%20Indonesia&t=&z=13&ie=UTF8&iwloc=&output=embed\"\" frameborder=\"\"0\"\" scrolling=\"\"no\"\" marginheight=\"\"0\"\" marginwidth=\"\"0\"\"></iframe><a href=\"\"https://123movies-to.org\"\">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"\"https://www.embedgooglemap.net\"\">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', 'Parkir Mobil & Motor---Wifi Gratis---Pesan Antar---Pembayaran Non-Tunai---Makan di Tempat', 'ATM BCA---50M---Bandara Juanda---10.3KM', 'www.spikoekuno.co.id', 'linkgambar---linkgambar---linkgambar', NULL, NULL, 'tampak depan(sesuai gambar)---tampak belakang(sesuai gambar)---tampak samping(sesuai gambar)', NULL, '08:00', '20:00', NULL, 6, 'Medan', '81234567890', '@spikoekunosby', 'Jl. Kruing simpang Razak No.7C');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pernah_wisata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peran` int(11) DEFAULT 0,
  `mitra_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `photo`, `remember_token`, `created_at`, `updated_at`, `pernah_wisata`, `peran`, `mitra_id`) VALUES
(2, 'test', 'test@testing.com', NULL, '$2y$10$6wsjpsExTE/Ah9BUC/JFS.eeHLwgVyJp2M8BwYfWUXxWFf7hsjeG.', 'https://ui-avatars.com/api/?name=test&background=7F9CF5&color=EBF4FF', NULL, '2021-11-14 06:38:15', '2021-11-14 06:38:15', NULL, 0, NULL),
(3, 'Farhan Septiadi', 'septiadifarhan26@gmail.com', NULL, '$2y$10$2qS4C5TOeQU/EuBG2bpAXO5xM0u87.4H9ObYB55Doq2jyDUne2NuS', 'https://ui-avatars.com/api/?name=Farhan+Septiadi&background=7F9CF5&color=EBF4FF', NULL, '2021-12-10 04:20:44', '2021-12-10 04:20:44', NULL, 0, NULL),
(4, 'Eula Lawrance', 'eulawangy@genshin.impact.com', NULL, '$2y$10$q7VMO3cCM9VTSLYuEIvwWOmFCKp6pmHsn9xy/SUdfkmPFUEYpdnRy', 'https://ui-avatars.com/api/?name=Eula+Lawrance&background=7F9CF5&color=EBF4FF', NULL, '2021-12-10 04:23:21', '2021-12-10 04:23:21', 'Jakarta,Padang,Surabaya', 0, NULL),
(5, 'Keqing', 'keqing@wangy.com', NULL, '$2y$10$NPLz/Cdx1NbSO90QjeQiSey8InHxV5G49Bm80nVQnEfkSkUUSJM1q', 'https://ui-avatars.com/api/?name=Keqing&background=7F9CF5&color=EBF4FF', NULL, '2021-12-10 05:10:29', '2021-12-10 05:10:29', 'Bukittingi,Jakarta,Bogor', 0, NULL),
(6, 'Audrey', 'audreyaurelya811@gmail.com', NULL, '$2y$10$Yz1qSHiRId2S3mxa1jjFluI/6r47VZFpSQJiNguHMUrQ6z9jacdsG', 'https://ui-avatars.com/api/?name=Audrey&background=7F9CF5&color=EBF4FF', NULL, '2021-12-14 04:34:30', '2021-12-14 04:34:30', 'Bogor', 0, NULL),
(7, 'Daffa', 'dagg@1234.com', NULL, '$2y$10$sXu0J/je/3gk/6KLGfgBYeAI9GWF.9m4JO05csMl6ZMtOn0JIBjiC', 'https://ui-avatars.com/api/?name=Daffa&background=7F9CF5&color=EBF4FF', NULL, '2022-03-30 18:32:27', '2022-03-30 18:32:27', NULL, 0, NULL),
(8, 'Daffa', 'daffa@gmail.com', NULL, '$2y$10$TK8fCX5zUE14iMfsVhIpXetnn.zLf29p8/ieYKaipxixYIZpqsi4a', 'https://ui-avatars.com/api/?name=Daffa&background=7F9CF5&color=EBF4FF', NULL, '2022-03-31 05:34:40', '2022-03-31 05:34:40', NULL, 0, NULL),
(9, 'Alfito', 'khansaalfito@gmail.com', NULL, '$2y$10$.k..hsffRgkFrgapkt5si.eKo2jVv8f3/zOLXf8Rp4i9yz6zCTKAG', 'https://ui-avatars.com/api/?name=Alfito&background=7F9CF5&color=EBF4FF', NULL, '2022-06-03 12:14:57', '2022-06-03 12:14:57', NULL, 1, 81),
(10, 'zaenal arifin', 'zaenal15103@gmail.com', NULL, '$2y$10$qd6BRM.RydZgBIMtbJFF.umC1e57oegKQPqXKDj.vuHWpQS8N5w0G', 'https://ui-avatars.com/api/?name=zaenal+arifin&background=7F9CF5&color=EBF4FF', NULL, '2022-06-12 10:02:24', '2022-06-12 10:02:24', 'Surabaya', 0, NULL),
(11, 'Alfito', 'khansaalfito123@gmail.com', NULL, '$2y$10$7E.OI.MMlbFAjBh4.8fFYOIeNMClZQ7ESNZRmKVzxEmwhqrTQ/L.O', 'https://ui-avatars.com/api/?name=Alfito&background=7F9CF5&color=EBF4FF', NULL, '2022-06-30 01:59:35', '2022-06-30 01:59:35', 'Surabaya', 1, 81),
(12, 'Alfito Khansa Nugraha', 'khansaalfito321@gmail.com', NULL, '$2y$10$xFbOzlqNSv4cLo1P16FMBOhWsH6U6cvmTML1xmikgb9bUGCKumxwO', 'https://ui-avatars.com/api/?name=Alfito+Khansa+Nugraha&background=7F9CF5&color=EBF4FF', NULL, '2022-07-08 03:28:26', '2022-07-08 03:28:26', 'Kota Surabaya - Jambangan,Surabaya', 1, 81),
(13, 'Daffa', 'daffa123@gmail.com', NULL, '$2y$10$/wy5c4FVRVhvguk23H2Wr.OOx5Xrw1FAmiJUpIaOgEJ6OfOndTqfG', 'https://ui-avatars.com/api/?name=Daffa&background=7F9CF5&color=EBF4FF', NULL, '2022-07-17 14:20:20', '2022-07-17 14:20:20', NULL, 1, 81),
(14, 'Alfito Khansa Nugraha', 'khansaalfito1234@gmail.com', NULL, '$2y$10$hkWeAJQSxqYjH2gLLq0TxO81WnyLmWdMhAGK64OszuDNpU6Be.nau', 'https://ui-avatars.com/api/?name=Alfito+Khansa+Nugraha&background=7F9CF5&color=EBF4FF', NULL, '2022-07-17 15:34:21', '2022-07-17 15:34:21', 'Kota Surabaya - Jambangan,Surabaya', 1, 81),
(15, 'addeleta hasna', 'addeleta.hasna@gmail.com', NULL, '$2y$10$ePEIB/Pz.aVJ8Rp28uffL.y6OIrwziyf8DVm2ywMJ0Jx6K4dmHhZC', 'https://ui-avatars.com/api/?name=addeleta+hasna&background=7F9CF5&color=EBF4FF', NULL, '2022-07-28 02:56:00', '2022-07-28 02:56:00', NULL, 1, 81);

-- --------------------------------------------------------

--
-- Table structure for table `varianjenis`
--

CREATE TABLE `varianjenis` (
  `id_varian` bigint(20) UNSIGNED NOT NULL,
  `namavarian` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsivarian` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambarvarian` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `idjenis` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `varianjenis`
--

INSERT INTO `varianjenis` (`id_varian`, `namavarian`, `deskripsivarian`, `gambarvarian`, `idjenis`, `created_at`, `updated_at`) VALUES
(1, 'Bolu', 'Merupakan kue berbahan dasar tepung (umumnya tepung terigu), gula, dan telur. Kue bolu dan cake umumnya dimatangkan dengan cara dipanggang di dalam oven, walaupun ada juga bolu yang dikukus, misalnya: bolu kukus atau brownies kukus. Cake yang dihias dengan lapisan (icing) dari krim mentega (buttercream), fondant, atau marzipan disebut kue tart (kue tarcis).', 'https://cdn.discordapp.com/attachments/906163180328325130/906357941228146719/Bolu_Meranti_4.jpg', 4, NULL, NULL),
(2, 'Lapis', 'Lapis ini biasanya terdiri dari dua warna yang berlapis-lapis, ini yang memberi nama kue ini. Kue ini dibuat dari tepung beras, tepung kanji, santan, gula pasir, garam dan pewarna. Kue ini dikukus setiap lapisannya sebelum kemudian lapisan di atasnya ditambahkan. Kue ini banyak ditemui di daerah-daerah di Indonesia.', 'https://cdn.discordapp.com/attachments/906163180328325130/906172268223270912/LapisTalasBogor_1.jpg', 4, NULL, NULL),
(3, 'Roti', 'Roti adalah makanan berbahan dasar utama tepung terigu dan air, yang difermentasikan dengan ragi, tetapi ada juga yang tidak menggunakan ragi.', 'https://cdn.discordapp.com/attachments/906163180328325130/913279971668140072/Roti.jpg', 4, NULL, NULL),
(4, 'Pai', 'Pastei atau Pai (bahasa Belanda: pastei; bahasa Inggris: pie) adalah makanan yang terdiri dari kulit kue kering dan isi yang beraneka ragam. Isi pastei dapat berupa buah, daging, ikan, sayur, keju, coklat, kustar, kacang, dan lain-lain.', 'https://cdn.discordapp.com/attachments/906163180328325130/913280293132189756/Pie.jpg', 4, NULL, NULL),
(5, 'Donat', 'Donat adalah penganan yang digoreng, dibuat dari adonan tepung terigu, gula, telur, dan mentega. Donat yang paling umum adalah donat berbentuk cincin dengan lubang di tengah dan donat berbentuk bundar dengan isian manis.', 'https://cdn.discordapp.com/attachments/906163180328325130/913281690934329354/Donat.jpg', 4, NULL, NULL),
(6, 'Keripik Buah', 'Keripik buah adalah keripik hasil olahan buah yang digoreng dengan cara khusus, biasanya  menggunakan mesin penggoreng hampa.', 'https://cdn.discordapp.com/attachments/906163180328325130/915525417996271656/Keripik_Buah.png', 2, NULL, NULL),
(7, 'Permen', 'Permen atau gula-gula adalah makanan berkalori tinggi yang pada umumnya berbahan dasar gula, air, dan sirup fruktosa.', 'https://cdn.discordapp.com/attachments/906163180328325130/906459843152457728/Permen.jpg', 5, NULL, NULL),
(8, 'Biskuit', 'Biskuit adalah produk jajanan renyah yang dibuat dengan cara dipanggang.', 'https://cdn.discordapp.com/attachments/906163180328325130/915527878953807892/Biskuit.jpg', 3, NULL, NULL),
(9, 'Peyek', 'peyek atau Rempeyek  adalah sejenis makanan pelengkap. Sebagai makanan pelengkap, fungsi rempeyek sama dengan kerupuk yaitu sebagai pelengkap hidangan.', 'https://cdn.discordapp.com/attachments/906163180328325130/915527916559941642/Peyek.jpg', 2, NULL, NULL),
(10, 'Mochi', 'Mochi adalah kue Jepang yang terbuat dari beras ketan, ditumbuk sehingga lembut dan lengket, kemudian dibentuk menjadi bulat.', 'https://cdn.discordapp.com/attachments/906163180328325130/915527963032813568/Mochi.jpg', 4, NULL, NULL),
(11, 'Gorengan', 'Gorengan adalah istilah yang mencakup berbagai jenis makanan yang dicelup adonan tepung dan kemudian digoreng rendam dalam minyak goreng panas yang banyak.', 'https://cdn.discordapp.com/attachments/906163180328325130/906459474770944030/Gorengan.jpg', NULL, NULL, NULL),
(12, 'Wingko', 'Wingko adalah sejenis kue yang terbuat dari kelapa muda, tepung beras ketan dan gula.', 'https://cdn.discordapp.com/attachments/906163180328325130/915528009589600256/Wingko.jpg', 4, NULL, NULL),
(13, 'Olahan Ikan', 'Selain olahan daging, ikan dikenal sebagai salah satu sumber protein yang baik bagi tubuh. Di Indonesia sendiri ikan menjadi santapan paling disukai dan sangat mudah untuk dijumpai. Ikan memiliki nutrisi tinggi, bahkan lebih tinggi dibanding daging. maka dari itu olahan ikan banyak ditemukan di Indonesia', 'https://cdn.discordapp.com/attachments/906163180328325130/917467355536314438/Olahan_Ikan.jpg', 8, NULL, NULL),
(14, 'Cokelat', 'Cokelat atau Coklat adalah sebutan untuk hasil olahan makanan atau minuman dari biji kakao', 'https://cdn.discordapp.com/attachments/906163180328325130/917467933540773948/Cokelat.jpg', 5, NULL, NULL),
(15, 'Bakpia', 'Bakpia adalah kue pastri asal Fujian, China yang berupa gulungan tepung panggang dengan berbagai isi.', 'https://cdn.discordapp.com/attachments/906163180328325130/916962624820879431/PiaMalang_2.jpg', 3, NULL, NULL),
(16, 'Dodol', 'Dodol merupakan salah satu makanan khas Indonesia, berasal dari daerah Jawa Barat dengan bahan dasar pembuatannya adalah tepung beras ketan, santan dan gula. Dodol merupakan makanan semi  basah yang memiliki tekstur plastis. ', 'https://cdn.discordapp.com/attachments/906163180328325130/918921212544049152/Dodol.jpg', 5, NULL, NULL),
(17, 'Sanjai', 'Karupuak Sanjai adalah sejenis peganan kerupuk dari singkong yang diparut tipis lalu digoreng dan diberi garam sebagai penyedapnya.', 'https://cdn.discordapp.com/attachments/906163180328325130/918921299143827536/Sanjai.jpg', 2, NULL, NULL),
(18, 'Kopi', 'Kopi adalah minuman hasil seduhan biji kopi yang telah disangrai dan dihaluskan menjadi bubuk. Kopi merupakan salah satu komoditas di dunia yang dibudidayakan lebih dari 50 negara. Dua varietas pohon kopi yang dikenal secara umum yaitu Kopi Robusta (Coffea canephora) dan Kopi Arabika (Coffea arabica).', 'https://cdn.discordapp.com/attachments/906163180328325130/920283455944806400/Kpi_Gayo_Aceh.jpg\r\n', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `varianoleh`
--

CREATE TABLE `varianoleh` (
  `idoleh` bigint(20) UNSIGNED NOT NULL,
  `namaoleh` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namalain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambarutama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambaroleh` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsioleh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idrasa` bigint(20) UNSIGNED NOT NULL,
  `idtekstur` bigint(20) UNSIGNED NOT NULL,
  `idbahan` bigint(20) UNSIGNED NOT NULL,
  `komposisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idmasak` bigint(20) UNSIGNED NOT NULL,
  `idlokasi` bigint(20) UNSIGNED NOT NULL,
  `statushalal` tinyint(1) NOT NULL,
  `kadarluarsa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carapenyimpanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carapenyajian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trivia` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namacocok` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idmitra` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_varian` bigint(20) UNSIGNED DEFAULT NULL,
  `idjenis` bigint(20) UNSIGNED DEFAULT NULL,
  `favorit_count` bigint(20) DEFAULT 0,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hargamin` int(11) DEFAULT NULL,
  `hargamax` int(11) DEFAULT NULL,
  `vegan` tinyint(1) DEFAULT NULL,
  `vegetarian` tinyint(1) DEFAULT NULL,
  `gluten_free` tinyint(1) DEFAULT NULL,
  `rekomendasioleh_count` bigint(20) DEFAULT NULL,
  `list_count` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `varianoleh`
--

INSERT INTO `varianoleh` (`idoleh`, `namaoleh`, `namalain`, `gambarutama`, `gambaroleh`, `deskripsioleh`, `idrasa`, `idtekstur`, `idbahan`, `komposisi`, `idmasak`, `idlokasi`, `statushalal`, `kadarluarsa`, `carapenyimpanan`, `carapenyajian`, `trivia`, `namacocok`, `idmitra`, `created_at`, `updated_at`, `id_varian`, `idjenis`, `favorit_count`, `satuan`, `hargamin`, `hargamax`, `vegan`, `vegetarian`, `gluten_free`, `rekomendasioleh_count`, `list_count`) VALUES
(1, 'Bolu Gulung Medan', 'Bolu gulung', 'https://cdn.discordapp.com/attachments/906163180328325130/906167937151430656/BoluMeranti_1.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/906167937151430656/BoluMeranti_1.jpg---https://cdn.discordapp.com/attachments/906163180328325130/906357833220653076/BoluMeranti_2.jpg --- https://cdn.discordapp.com/attachments/906163180328325130/906357879282475029/BoluMeranti_3.jpg---https://cdn.discordapp.com/attachments/906163180328325130/906357941228146719/Bolu_Meranti_4.jpg---https://cdn.discordapp.com/attachments/906163180328325130/906358000825008138/BoluMeranti_5.jpg---https://cdn.discordapp.com/attachments/906163180328325130/906358046261915698/BoluMeranti_6.jpg ', 'Bolu Gulung Medan merupakan oleh - oleh kue yang khas dari kota Melayu Deli.---Bolu Gulung Medan kerap menjadi kudapan saat arisan, hajatan dan acara kantor sehingga oleh - oleh ini cocok untuk diberikan kepada group', 1, 3, 3, 'Tepung, Gula, Telur, Mentega, Topping Pilihan', 1, 6, 1, '3 hari (suhu ruang)---10 hari (suhu kulkas)', 'Bisa disimpan di kulkas', 'Potong menjadi beberapa bagian, sajikan di atas piring kecil', 'Asal Usul---Bolu Meranti merupakan oleh - oleh yang khas dari Medan. Oleh - oleh ini bermula dari hobi Nyonya Ai Ling, pendiri Bolu Meranti yang memiliki hobi membuat kue yang dijual ke teman dan tetangganya sejak muda dan saat berumah tangga.', 'Group', NULL, NULL, NULL, 1, 4, 1, 'Roll', 80000, 115000, 0, 0, 0, NULL, NULL),
(2, 'Medan Napoleon', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/906359442705108992/MedanNapoleon_2.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/906359442705108992/MedanNapoleon_2.jpg---https://cdn.discordapp.com/attachments/906163180328325130/906169302720344095/MedanNapoleon_1.jpg', 'Kue Napoleon merupakan makanan manis sejenis Bolu Gulung (roll cake) tipis panjang yang didalamnya berisi kue pastri. Pada bagian atasnya dihiasi taburan coklat atau remah-remahan agar terlihat menarik dan unik.---Kue Napoleon cocok untuk menjadi oleh - oleh keluarga karena memiliki varian rasa bermacam yang dapat disesuaikan dengan preferensi keluarga, daya tahan yang singkat dan ukuran yang cukup besar sehingga dapat dibagi bersama dengan anggota keluarga.', 1, 3, 3, 'Tepung, Gula, Telur, Mentega, Topping Pilihan', 1, 6, 1, '3 hari (suhu ruang)---10 hari (suhu kulkas)', 'Bisa disimpan di kulkas', 'Potong menjadi beberapa bagian, sajikan di atas piring kecil', 'Asal Usul---Hari ini sudah lebih dari 100 tahun hengkangnya pasukan Napoleon dari bumi Rusia, ia pergi meninggalkan kota bersama cerita-cerita simpang siur di sudut kotanya. Salah satunya adalah makanan khas turunan dari keluarga bangsawannya di Perancis, Ia adalah anak ke dua dari keluarga bangsawan terhormat di seluruh daratan Perancis hingga ke Swiss, Ibunya yang bernama Maria Letizia Ramolino selalu menghadirkan roti berisikan pastry sebagai makanan pembuka di pagi hari untuk mereka, yang selalu akan di dampingi coklat hangat ataupun kopi kental panas.Sedangkan, kala itu hampir lebih dari ribuan masyarakat miskin mati kelaparan sebab kedinginan dan penindasan.Jendral Mikhail Kutuzov adalah pahlawan yang sanggup mengusir Napoleon bersama sekutunya, dan bertekuk lutut untuk tidak menginvensi Rusia dari sisi ekonomi maupun kebijakan liberalisasi yang di bawa olehnya.Hengkangnya Napoleon di dengar hingga ujung rusia dan pesta di rayakan dari berbagai lapisan masyarakat, seorang mantan juru masak keluarga Bonaparte yang berwarga negara Rusia pun menyalurkan bahagianya dengan membuat Roti Pastry keluarga Napoleon sebagai bentuk terimakasihnya dan di bagi-bagi pada masyarakat miskin dan kelaparan.', 'Group', NULL, NULL, NULL, 1, 4, 0, NULL, 52000, 55000, NULL, NULL, NULL, NULL, NULL),
(3, 'Mantau', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/906356985228832768/Mantau_2.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/906356985228832768/Mantau_2.jpg---https://cdn.discordapp.com/attachments/906163180328325130/906463876990787604/Mantau_3.jpeg---https://cdn.discordapp.com/attachments/906163180328325130/906169613123993600/Mantau_1.jpg', 'Mantau merupakan makanan yang sering disantap oleh warga kota Minyak saat sarapan di pagi hari ditemani dengan kopi susu ataupun di sore hari dengan lauk lainnya.---Oleh - oleh ini cocok menjadi oleh - oleh untuk perseorangan karena memiliki ukuran yang cocok untuk dimakan sendiri', 1, 3, 3, 'Tepung Terigu, Fermipan, Gula, Garam, Air, Susu, Ragi, Mentega Putih', 3, 39, 1, '7 hari (suhu ruang)---14 hari (suhu kulkas)', 'Harus disimpan di kulkas', 'Goreng atau kukus mantau lalu sajikan di atas piring. Untuk mantau yang digoreng, potong mantau menjadi 3 bagian kemudian sajikan dengan daging sapi lada hitam di atas piring', 'Asal Usul---Mantau atau roti sepan sebenarnya adalah makanan khas Tiongkok yang telah mengalami proses akulturasi sehingga menjadi makanan khas Balikpapan. Mantau memiliki bentuk seperti bakpao, bedanya roti ini tidak diisi daging, cokelat atau apapun seperti bakpao. Mantau hanya roti murni biasa yang terbuat dari tepung terigu pilihan yang diolah sedemikian rupa sehingga menciptakan tekstur rasa yang lembut. Selain itu, penyajian roti mantau digoreng, tidak dikukus seperti bakpao.', 'Perseorangan', NULL, NULL, NULL, 3, 4, 0, '10 pcs', 16000, 150000, 1, 1, 0, NULL, NULL),
(4, 'Strudel Bogor', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/906170747700006972/StrudelBogor_1.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/906170684105965588/StrudelBogor_2.jpg---https://cdn.discordapp.com/attachments/906163180328325130/906170747700006972/StrudelBogor_1.jpg', 'Strudel Bogor memiliki topping isian pada Strudel Bogor ini memunculkan rasa unik yang khas. Sekali gigit, akan membuat anda ketagihan dan ingin mencoba lagi.---Strudel Bogor ini berukuran panjang ±25 cm, kira-kira bisa dipotong menjadi 8 potongan. Dengan packaging rapi, ukuran yang cukup besar dan waktu kadaluarsa relatif singkat, produk ini cocok untuk dibagikan kepada group', 1, 3, 3, 'Pastry, Topping', 1, 53, 1, '3 hari (suhu ruang)---10 hari (suhu kulkas)', 'Bisa disimpan di kulkas', 'Potong menjadi beberapa bagian, sajikan di atas piring kecil', 'Asal Usul---Strudel sendiri adalah sebuah jenis pastri berlapis yang biasanya diisi dengan manisan. Strudel sudah populer sejak abad ke-16 dan selalu dikaitkan dengan makanan dari Austria. Strudel Bogor adalah modifikasi atas makanan pastry strudel dengan isian berbahan dasar khas Bogor.', 'Group', NULL, NULL, NULL, 4, 4, 1, 'Kotak', 28000, 50000, 0, 0, 0, NULL, NULL),
(5, 'Pie Susu Bali', 'Egg Tart', 'https://cdn.discordapp.com/attachments/906163180328325130/906171879868473364/PieSusu_1.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/906171879868473364/PieSusu_1.jpg', 'Pie susu ini merupakan salah satu jenis cemilan kekinian yang sedang tren di Indonesia. Kue ini seringkali disajikan sebagai kudapan arisan, isian snack box kantor, hajatan dan juga dijual di pasar tradisional maupun toko kue modern.---Satu potong pie susu sudah dikemas dalam plastik sehingga mudah untuk dibagikan. Maka oleh - oleh ini cocok untuk perseorangan.', 1, 4, 3, 'Cream Susu, Fla, Tepung Terigu, Mentega, Telur, Susu, Tepung Maizena, Gula Halus', 1, 74, 1, '5 hari (suhu ruang)---12 hari (suhu kulkas)', 'Bisa disimpan di kulkas', 'Sajikan di atas piring kecil', 'Asal Usul---Pie susu merupakan modifikasi dari Egg Tart yang bermula di Portugal pada abad ke-19 di Biara Jerónimos di distrik Lisbon di Belém. Para biarawan memiliki kebiasaan membuat kue tart custard kecil dengan campuran gula, tepung dan kuning telur yang dikaramelkan dalam oven untuk menciptakan penampilan khas dan rasa yang lezat.', 'Perseorangan', NULL, NULL, NULL, 4, 4, 1, '10 pcs', 19500, 37000, 0, 1, 0, NULL, NULL),
(6, 'Lapis Talas Bogor', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/906172268223270912/LapisTalasBogor_1.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/906172268223270912/LapisTalasBogor_1.jpg', 'Lapis Talas dengan cita rasa talas yang dominan dipadukan dengan toping parutan keju, sehingga menghasilkan varian Lapis talas yang enak untuk semua penyuka Talas Bogor---Lapis Talas Bogor cocok untuk menjadi oleh - oleh group karena memiliki daya tahan yang singkat dan hadir dengan varian rasa bermacam - macam.', 1, 3, 4, 'Tepung Terigu, Tepung Talas, Telur Ayam, Gula, Susu, Pengembang Kue, Keju', 3, 53, 1, '4 hari (suhu ruang)---7 hari (suhu kulkas)', 'Harus disimpan di kulkas', 'Potong menjadi beberapa bagian, sajikan di atas piring kecil', 'Asal Usul---Komoditas talas di Bogor cukup berlimpah, itulah sebabnya berbagai macam makanan dan cemilan khas Bogor terbuat dari umbi talas. Talas diolah sedemikian rupa sehingga menghasilkan cita rasa yang khas dan enak pada lapis talas asal Bogor. Lapis talas biaya terdiri dari dua lapis dan taburi berbagai macam topping di atasnya.', 'Group', NULL, NULL, NULL, 2, 4, 1, 'Kotak', 30000, 38000, 0, 1, 0, NULL, NULL),
(7, 'Karak Kaliang', '', 'https://cdn.discordapp.com/attachments/906163180328325130/919592883080818739/1200px-Karak_kaliang.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/919592883080818739/1200px-Karak_kaliang.jpg', 'Kerupuk Berbahan dasar ubi kayu/singkoong dengan warna kuning cerah.', 3, 4, 16, 'Singkong, kunyit , Garam, minyak goreng dan Bumbu', 4, 19, 1, '2 bulan (suhu ruang)', 'Disimpan di tempat yang kering', 'Sajikan diatas piring', 'Bahan Dasar---Karak kaliang berbahan dasar singkong, kunyit, garam serta digoreng dengan minyak panas agar membetuk tekstur yang renyah dengan rasa yang gurih---Nama Asal---\r\nNama karak kaling berasal dari seorang pembeli oleh-oleh dari penjual bumbu masakan siap saji di pasar Bukittinggi. Pedagang bumbu merupakan keturunan India. Namun tak jelas, kapan mulai dinamakan karak kaliang. Oleh-oleh tersebut adalah makanan yang mirip sekali dengan karak kaliang yang kita kenal saat ini. Karak kaliang berasal dari kata “Karak” yang berarti lapisan kering yang keras mewakili tekstur dari karak kaliang serta “kaliang” yang berarti hitam/gelap karena saat itu karak kaliang dijual oleh orang yang berkulit gelap.', 'Group', NULL, NULL, NULL, 17, 2, 2, 'Bungkus', 8000, 11500, 0, 1, 0, NULL, NULL),
(8, 'Kipang Kacang', 'Enting-enting, Teng-teng', 'https://cdn.discordapp.com/attachments/906163180328325130/919592951666077746/1280px-Kipang_Kacang_3.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/919592951666077746/1280px-Kipang_Kacang_3.jpg', 'Kipang Kacang berbahan dasar kacang tanah yang dihancurkan kasar dan diberi gula merah sebagai perekat lalu dibentuk potongan potongan kecil', 1, 4, 1, 'Kacang Tanah, Garam, Gula Merah dan vanilla', 10, 18, 1, '5 Bulan (Suhu Ruang)', 'Disimpan di tempat yang tertutup dan kering', 'Disajikan diatas piring', 'Bahan Dasar---Kipang kacang berbahan dasar kacang dan memiliki rasa yang manis dan gurih serta textur yang renyah---Asal Mula---tradisi pembuatan kipang kacang sudah ada sejak dahulu. Permintaan kipang kacang sebagai buah tangan bagi para perantau yang hendak balik kerantau.', 'Perseorangan', NULL, NULL, NULL, 7, 5, 0, 'Bungkus', 10000, 18000, 1, 1, 1, NULL, NULL),
(9, 'Sanjai Balado', '', 'https://cdn.discordapp.com/attachments/906163180328325130/919592919718051870/1280px-Keripik_singkong_balado_cassava_chips.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/919592919718051870/1280px-Keripik_singkong_balado_cassava_chips.jpg', 'Sanjai merupakan kerupuk singkong yang memiliki berbagai varian rasa dengan bentuk sesuai dengan bumbu khas masing masing', 2, 4, 16, 'Singkong, Cabai, bumbu khas.', 4, 19, 1, '1 Bulan (Suhu Ruang)', 'Disimpat Tempat Kering dan Tertutup', 'Disajikan Diatas Piring', 'Bahan Dasar---Sanjai balado berbahan dasar singkong/ubi kayu yang dipotong dengan berbagai bentuk sesuai dengan variannya dan memiliki rasa yang beragam seperti pedas hingga pedas manis---\r\nAsal Mula---Menurut sejarah, keripik ini diproduksi sekiar tahun 1970an oleh warga di jalan Sanjai. Orang yang pertama kali menjajakannya adalah nenek Amai Seram, Amai Malan, dan Amai Terimalah. Ketiga nenek ini berjualan keripik tersebut di Los Maninjau, sebuah pasar atas di kawasan Bukittinggi. Seiring dengan perkembangan jaman, jajanan ini mulai populer di kalangan warga sekitar. Kepopulerannya membuat masyarakat sekitar akhirnya mengikutinya untuk memperoleh penghasilan tambahan dari hasil pertanian yang melimpah.Bukan hanya warga sekitar saja, namun warga di luar daerah Sanjai juga ikut memproduksinya. Uniknya, nama Sanjai tetap digunakan untuk melabeli keripik tersebut. Alhasil, terkenallah jajanan tersebut dengan sebutan karupuak singkong sanjai atau keripik sanjai.', 'Group', NULL, NULL, NULL, 17, 2, 0, 'Bungkus', 18000, 35000, 1, 1, 1, NULL, NULL),
(10, 'Batiah', 'Rengginang', 'https://cdn.discordapp.com/attachments/906163180328325130/919592834519171122/600px-Batiah_2.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/919592834519171122/600px-Batiah_2.jpg', 'Merupakan sejenis keripik yang terbuat dari beras ketan yang di keringkan dan dicetak menjadi keripik', 1, 4, 11, 'Beras Ketan, garam, Gula, Air', 4, 19, 1, '1 Bulan (Suhu Ruang)', 'Simpan Ditempat Kering dan Tertutup', 'Disajikan Diatas Piring', 'Bentu Unik---Batiah memiliki bentuk yang mirip dengan rengginang. Tetapi menggunakan bahan yang berbeda karena rengginang menggunakan beras biasa sebagai bahan utama sedangkan batiah menggunakan beras ketan.', 'Perseorangan', NULL, NULL, NULL, 8, 3, 1, 'Bungkus', 14000, 15000, 1, 1, 1, NULL, NULL),
(11, 'Bareh Randang', 'Beras Rendang', 'https://cdn.discordapp.com/attachments/906163180328325130/914385291337433149/Bareh_Randang.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/914385291337433149/Bareh_Randang.jpg', 'Merupakan camilan manis dengan bentuk unik yang berbahan dasar beras ketan atau tepung beras', 1, 3, 11, 'Beras Ketan/Tepung Ketan, Gula, Santan', 5, 19, 1, '5 hari (Suhu Ruang)---\r\n7 Hari (Suhu Kulkas)', 'Bisa disimpan dalam kulkas', 'Disajikan diatas piring', 'asal nama---beras rendang sendiri bukanlah nasi ataupun beras ketan yang dimasukkan ke dalam bumbu rendang. Melainkan pembuatan nya yang menggunakan cara di \"Rendang\" atau mengosengnya yang mirip dengan pembuatan rendang tetapi dengan menggunakan bahan yang berbeda.---Cara Pembuatan---Beras rendang dibuat dengan menggunakan beras ketan yang disangrai hingga kering lalu ditumbuk sehingga menjadi tepung yang nantinya akan di \"Rendang\" bersama dengan gula pasir serta Santan.---Adat---beras rendang disajikan biasanya disajikan dalam acara \"manjapuik marapulai\", Penjemputan mempelai laki-laki di daerah minang serta juga pada pertemuan \"niniak mamak\", tetua/sesepuh kaum', 'Perseorangan', NULL, NULL, NULL, 7, 5, 1, NULL, 20000, 25000, 1, 1, 0, NULL, NULL),
(12, 'Pisang Sale', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/914383230508072990/Pisang_Sale.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/914383230508072990/Pisang_Sale.jpg', 'Merupakan Hasil olahkan pisang yang dikeringkan sehingga memiliki daya tahan yang lama', 1, 4, 7, 'Pisang, Tepung', 1, 19, 1, '1 Bulan (Suhu Ruang)', 'Disimpan ditempat tertutup dan kering', 'Disajikan diatas wadah', 'Asall Mula---Pisang sale sendiri sebenarnya merupakan makanan khas Asli dari Karangpucung dan Majenang yang terletak di Kabupaten Cilacap Jawa Tengah. Namun dalam perkembangannya banyak kota lain yang mengembangkan dan memproduksi Sale Pisang. Sehingga saat ini banyak pendapat bahwa keaslian Sale Pisang seperti diakui dari kota tertentu, (salah satunya bukittinggi, Sumatra Barat )', 'Group', NULL, NULL, NULL, 6, 2, 0, 'Bungkus', 14000, 15000, 1, 1, 0, NULL, NULL),
(13, 'Kue Sapik', 'Semprong', 'https://cdn.discordapp.com/attachments/906163180328325130/914385036164333588/Kue_Sapik.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/914385036164333588/Kue_Sapik.jpg', 'Kue sapik merupakan sejenis kue kering yang memiliki bentuk unik seperti digulung', 1, 4, 3, 'tepung ketan putih, gula, telur,santan,garam', 1, 19, 1, '1 Bulan (Suhu Ruang)', 'Simpan Ditempat Kering dan Tertutup', 'Disajikan Diatas Wadah', 'Asal nama---Penamaan kue khas lebaran ini berkaitan dengan cara membuatnya. Adonan bahan pembuat kue sapik, tepung beras dan bahan lainnya yang agak kental dimasukkan kedalam cetakan dari besi yang kedua permukaannya sudah diukir sedemikian rupa. Kemudian adonan tersebut dijepit (disapik, bahasa Minang) oleh kedua permukaan cetakan kue.', 'Perseorangan', NULL, NULL, NULL, 8, 3, 0, 'Bungkus', 20000, 25000, 0, 1, 0, NULL, NULL),
(14, 'Rakik', 'Peyek', 'https://cdn.discordapp.com/attachments/906163180328325130/914383420782686278/Rakik_Macho__Bulat.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/914383420782686278/Rakik_Macho__Bulat.jpg', 'merupakan sejenis keripik yang memiliki bahan campuran berupa kacang, ikan kecil, maupun udang', 3, 4, 3, 'Tepung Beras, Telur, Ikan/Kacang', 4, 18, 1, '1 Bulan (Suhu Ruang)', 'Disimpang ditempat tertutup dan kering', 'Disajikan Diatas Wadah', 'Kemiripan---Rakik sendiri memiliki bentuk yang mirip dengan rempeyek. Tetapi memiliki bahan campuran yang beragam', 'Perseorangan', NULL, NULL, NULL, 9, 2, 0, 'Bungkus', 9000, 10000, 0, 0, 0, NULL, NULL),
(15, 'Galamai', 'Dodol', 'https://cdn.discordapp.com/attachments/906163180328325130/914385195967344690/Galamai.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/914385195967344690/Galamai.jpg', '', 1, 1, 3, 'tepung beras ketan, gula aren, dan santan', 6, 21, 1, '7 Hari (Suhu Ruang)---14 Hari (Suhu Kulkas)', 'Bisa disimpan didalam kulkas', 'Disajikan diatas wadah', 'Cara pembuatan galamai---Galamai biasanya dibuat dengan cara bergotong-royong karena memerlukan banyak tenaga untuk mengaduk adonan dalam jumlah besar dan waktu lama. Hasil dari masakan ini berbentuk makan yang bewarna hitam mengkilat dan terasa manis.', 'Perseorangan', NULL, NULL, NULL, 16, 4, 0, 'Bungkus', 20000, 25000, 1, 1, 0, NULL, NULL),
(17, 'Sagun Bakar', '', 'https://cdn.discordapp.com/attachments/906163180328325130/914385539694747648/Sagun_Bakar.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/914385539694747648/Sagun_Bakar.jpg', ' Merupakan Sejenis Kue Kering dengan berbagai bentuk dengan bahan utama kelapa yang memiliki cita rasa khas', 1, 4, 3, 'Tepung tapioka, kelapa, gula, margarin, garam dan vanilli.', 1, 18, 1, '1 Bulan (Suhu Ruangan)', 'Bisa disimpan dalam kulkas', 'Disimpat ditempat kering dan tertutup', 'Adat Istiadat---Dulunya Sagun Bakar ini disajikan pada sejumlah acara adat di Minangkabau dan rasanya yang unik menjadikan camilan satu ini disukai oleh berbagai kelompok usia, mulai dari anak-anak hingga orang dewasa.', 'Perseorangan', NULL, NULL, NULL, 8, 3, 0, 'Bungkus', 20000, 25000, 1, 1, 0, NULL, NULL),
(18, 'Lapis Talas Bogor Bunder', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/906466486779002901/LapisBunder_Sangkuriang.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/906466486779002901/LapisBunder_Sangkuriang.jpg', 'Lapis Bunder merupakan produk olahan Talas Bogor berbentuk bulat seperti donat dengan isian pasta cokelat atau keju yang lezat dan melimpah.---Lapis Bunder Bogor cocok untuk menjadi oleh oleh perseorangan karena sudah dikemas dalam plastik untuk masing - masing pcs.', 1, 3, 3, 'Telur, Tepung terigu, Tepung talas, Gula, Minyak nabati, Susu dan Pengembang Kue', 3, 53, 1, '7 hari (suhu ruang)---10 hari (suhu kulkas)', 'Harus disimpan di kulkas', 'Sajikan di atas piring kecil', 'Asal Usul---Komoditas talas di Bogor cukup berlimpah, itulah sebabnya berbagai macam makanan dan cemilan khas Bogor terbuat dari umbi talas. Talas diolah sedemikian rupa sehingga menghasilkan cita rasa yang khas dan enak pada lapis talas asal Bogor. \r\n', 'Group', NULL, NULL, NULL, 5, 4, 0, 'Kotak', 26000, 27000, 0, 1, 0, NULL, NULL),
(19, 'Batagor', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/906467102951608360/Batagor_1.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/906467102951608360/Batagor_1.jpg---https://cdn.discordapp.com/attachments/906163180328325130/906467326268964895/Batagor_2.jpg', 'Batagor yang merupakan singkatan dari Bakso Tahu Goreng, yaitu makanan cemilan khas kota Kembang---Oleh - Oleh ini cocok untuk dikonsumsi perseorangan karena umumnya memiliki porsi yang cukup untuk 1 orang', 3, 4, 14, 'Bakso, Tahu, Tepung, Daging Ikan Tenggiri', 4, 50, 1, '7 hari (suhu ruang)---14 hari (suhu kulkas)', 'Bisa disimpan di kulkas', 'Disajikan dengan bumbu kacang. Biasanya ditambahkan dengan perasan air jeruk nipis/purut dan sedikit kecap.', 'Asal Usul---Saat itu, Isan atau Ihsan adalah seorang penjual bakso keliling di seputaran Jalan Kopo, Bandung Tahun 1973. pada suatu hari, bakso yang dijajakan kurang laku di jual. Setiap hari ia memikirkan mau diapakan bakso, tahu, yang tidak terjual ini. Apakah harus dibuang, atau diolah lagi supaya tetap menghasilkan uang. Lalu ide sederhana untuk menggoreng sisa bakso tahu tersebut muncul lalu dia lakukan jika dagangannya tersisa. Pada awalnya bakso tahu yang digoreng tersebut ia bagikan pada tetangga, namun ternyata para tetangganya sangat menyukainya. Malah ada tetangga yang diminta untuk dibuatkan lagi. Melihat antusiasme tersebutlah, Ihsan mulai mencoba menjajakan bakso tahu yang telah digoreng bersama baso tahu yang biasa dia jual. Di luar perkiraannya, ternyata peminatnya banyak, bahkan berdagang bakso tahu yang digoreng lebih laku dari berjualan bakso saja menurutnya. Akhirnya Isan lebih banyak mengembangkan Bakso Tahu yang digoreng, dengan memberikan aroma dan rasa ikan lebih kuat dan lebih banyak, dengan sambal khusus, sehingga masyarakat lebih banyak menyebitnya Batagor, seperti yang kita kenal saat ini. Sejak saat itu Isan mengalami peningkatan pelanggan. Hingga di awal tahun 80 an ia menyewa sepetak lahan untuk berjualan agar tidak perlu berkeliling kampung lagi. Baso tahu gorengnya mulai banyak dikenal. Banyak pula yang menirunya, terutama yang berjualan di seputar Bandung. Akibat demam Baso Tahu Goreng yang terjadi saat itu di Bandung, maka kala itu banyak pelanggan yang menyebutnya dengan seputan pendek Batagor.\r\n', 'Perseorangan', NULL, NULL, NULL, 13, 8, 0, 'pcs', 11000, 22000, 0, 0, 0, NULL, NULL),
(20, 'Mochi Sukabumi', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/914065867271209020/Mochi_1.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/914065867271209020/Mochi_1.jpg---https://cdn.discordapp.com/attachments/906163180328325130/914065867589967872/Mochi_2.jpg', 'Mochi Sukabumi merupakan mochi yang berbeda dari mochi Jepang. Dalam mochi sukabumi digunakan kacang tanah menjadi salah satu isiannya.---Oleh - oleh ini cocok untuk perseorangan karena sudah dikemas dalam bentuk kotak kecil dan porsi yang pas untuk 1 orang.', 1, 1, 3, 'Tepung Ketan, Tepung Maizena, Gula Pasir, Topping', 3, 57, 1, '3 hari (suhu ruang)', 'Tidak boleh disimpan di kulkas', 'Sajikan di atas piring kecil', 'Asal Usul---Mochi sendiri sebenarnya makanan dari Jepang yang telah mengalami akulturasi budaya sehingga kini melekat dengan kota yang juga identik dengan Ratu Selatan ini.', 'Perseorangan', NULL, NULL, NULL, 10, 4, 0, 'kotak', 45000, 55000, 1, 1, 0, NULL, NULL),
(21, 'Almond Crispy Cheese', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/914060163638505542/AlmondCrispyCheese_1.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/914060163638505542/AlmondCrispyCheese_1.jpg---https://cdn.discordapp.com/attachments/906163180328325130/914060163873390622/AlmondCrispyCheese_2.jpg', 'Almond Crispy Cheese adalah salah satu camilan khas kota Pahlawan. Meskipun namanya ‘kebarat-baratan’, namun camilan ini asli dibuat oleh arek Suroboyo---Oleh - oleh ini hadir dengan kemasan yang rapi dan porsi yang cukup untuk 1 orang', 1, 4, 3, 'Tepung, Mentega, Telur, Susu, Keju, Kacang', 1, 66, 1, '90 hari (suhu ruang)---100 hari (suhu kulkas)', 'Bisa disimpan di kulkas', 'Sajikan di atas piring kecil', 'Asal Usul---Almond Crispy Cheese merupakan makanan yang terinspirasi dari makanan tipis renyah yang berasal dari Perancis, yaitu Tuile. Makanan ini biasanya dijadikan makanan penutup di acara - acara penting atau hidangan keluarga.', 'Perseorangan', NULL, NULL, NULL, 8, 3, 0, 'kotak', 50000, 70000, 0, 1, 0, NULL, NULL),
(22, 'Cokelat Tempe', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/916964212767621130/CokelatTempe.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/916964212767621130/CokelatTempe.jpg', 'Cokelat tempe adalah salah satu inovasi baru yang mencampurkan cokelat dan tempe. Banyak orang yang menyukai inovasi produk ini.---Oleh - oleh ini cocok untuk perseorangan karena tersedia dalam ukuran batangan berukuran sedang', 1, 2, 20, 'Cokelat, Susu, Tempe', 10, 71, 1, '14 hari (suhu ruang)--- 21 hari (suhu kulkas)', 'Harus disimpan di kulkas', 'Potong menjadi beberapa bagian', 'Asal Usul---Kombinasi tempe ini dipilih karena masyarakat di sekitar daerah ini banyak berprofesi sebagai penjual tempe. Bahkan, tempe seringkali menjadi jamuan makanan keluarga setiap harinya.---Fakta Menarik---Bagi anda yang ingin mengonsumsi cokelat tanpa takut dengan pertambahan berat badan, wajib memilih cokelat tempe sebagai camilan sehat', 'Perseorangan', NULL, NULL, NULL, 14, 5, 1, 'batang', 8000, 11000, 0, 1, 1, NULL, NULL),
(23, 'Abon Gulung Manokwari', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/914060821846441994/AbonGulung_1.JPG', 'https://cdn.discordapp.com/attachments/906163180328325130/914060821846441994/AbonGulung_1.JPG---https://cdn.discordapp.com/attachments/906163180328325130/914060822056149022/AbonGulung_2.jpg', 'Abon Gulung ini merupakan makanan yang begitu terkenal dari kota Injil. Bahkan, wisatawan yang berasal dari luar daerah ini pun banyak yang rela datang jauh hanya untuk membeli salah satu oleh-oleh kuliner yang satu ini.---Oleh oleh ini cocok bagi group karena jumlahnya yang banyak dan kadaluarsa relatif singkat', 3, 3, 3, 'Tepung Terigu, Telur, Gula Pasir, Mentega, Abon', 1, 94, 1, '4 hari (suhu ruang)---11 hari (suhu kulkas)', 'Harus disimpan di kulkas', 'Sajikan di atas piring kecil', 'Asal Usul---Abon Gulung bukanlah buatan Hawaii atau buatan orang Papua. Jimmy Irianto, pencipta roti abon gulung adalah pendatang di Papua. Tempat jualannya tadinya dikenal sebagai Restauran Hawai dan nama itulah yang dilanjut sampai sekarang.', 'Group', NULL, NULL, NULL, 3, 4, 0, '10 pcs', 125000, 135000, 0, 1, 0, NULL, NULL),
(24, 'Bakpia Khas Malang', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/916962624820879431/PiaMalang_2.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/916962624820879431/PiaMalang_2.jpg---https://cdn.discordapp.com/attachments/906163180328325130/916962624611176449/PiaMalang_1.jpg', 'Pia merupakan camilan khas Malang yang banyak menjadi favorit para pelancong yang singgah di Kota Kuliner ini sebagai oleh-oleh.---Oleh - Oleh ini cocok untuk perseroangan karena umumnya disajikan dalam ukuran kecil dan dikemas dalam bentuk kemasan kecil ', 1, 3, 3, 'Tepung, Air, Gula, Garam, Minyak Sayur, Topping', 1, 71, 1, '14 hari (suhu ruang)--- 21 hari (suhu kulkas)', 'Bisa disimpan di kulkas', 'Hangatkan di oven/toaster kemudian sajikan di piring kecil', 'Asal Usul---Pia terdiri dengan isian yang berbeda, asal usul kata bakpia adalah ‘bak’ berarti ‘daging’, kata ‘bakpia’ sebenarnya berarti ‘meatloaf’..', 'Perseorangan', NULL, NULL, NULL, 15, 4, 1, '5 pcs', 18000, 25000, 1, 1, 0, NULL, NULL),
(25, 'Spikoe Surabaya', 'Lapis Surabaya', 'https://cdn.discordapp.com/attachments/906163180328325130/912726486929276969/Spikoe_3.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/912726486929276969/Spikoe_3.jpg---https://cdn.discordapp.com/attachments/906163180328325130/912726486467883069/Spikoe_1.jpg---https://cdn.discordapp.com/attachments/906163180328325130/912726486686003211/Spikoe_2.jpg---https://cdn.discordapp.com/attachments/906163180328325130/912726487201882132/Spikoe_4.jpeg---https://cdn.discordapp.com/attachments/906163180328325130/912726487470333992/Spikoe_5.jpg---https://cdn.discordapp.com/attachments/906163180328325130/912726487885549589/Spikoe_6.jpg', 'Kue Spikoe juga lazim disebut dengan spiku atau lapis Surabaya dan berasal dari bahasa Belanda spekkoek. Sesuai juga dengan asal katanya, kue yang bermakna kue lapis ini memang berlapis-lapis dan umumnya berwarna coklat dan kuning.---Oleh oleh ini cocok bagi group karena jumlahnya yang banyak dan kadaluarsa relatif singkat', 1, 3, 3, 'Telur, Mentega, Gula, Tepung Bubuk Cokelat, Selai, Topping', 1, 66, 1, '4 hari (suhu ruang)---14 hari (suhu kulkas)', 'Bisa disimpan di kulkas', 'Potong menjadi beberapa bagian, sajikan di atas piring kecil', 'Asal Usul---Spikoe atau Spekkoek, berasal dari bahasa Belanda yang jika diurai menjadi Spek yang artinya lemak daging babi, dan koek yang artinya kue. Jadi Spekkoek itu adalah kue berlapis yang terlihat seperti lemak pada bagian perut babi. Ada sisi gelap dan sisi terangnya. Namun kue ini tidak menggunakan bahan dasar babi.---Fakta Menarik---Dahulu penjajah Belanda membuat kue ini yang kemudian diadaptasi oleh keturunan Tionghoa di Indonesia menggunakan rempah khas Indonesia. Ada kayu manis, cengkeh, pala, dan adas manis yang terkandung dalam resep kue spikoe.Masyarakat Tionghoa yang mempopulerkan kue ini di Indonesia mempercayai bahwa semakin banyak lapisan pada kue lapis maka semakin banyak pula keberuntungan yang didapat. Itulah sebabnya kue ini selau ada pada setiap perayaan dan hari penting, guna mendatangkan lebih banyak keberkahan.', 'Group', NULL, NULL, NULL, 2, 4, 1, 'kotak', 33000, 475000, 0, 1, 0, NULL, NULL),
(26, 'Tahu Bakso Semarang', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/912728132371480636/TahuBakso_2.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/912728132371480636/TahuBakso_2.jpg---https://cdn.discordapp.com/attachments/906163180328325130/912728132681863228/TahuBakso_3.jpg---https://cdn.discordapp.com/attachments/906163180328325130/912728132069511198/TahuBakso_1.jpg', 'Tahu Bakso ialah kombinasi dari tahu dan bakso.Isi merata ditengah-tengah tahu dengan komposisi dagingnya lebih banyak & tidak terlalu banyak bahan pengisi lainnya. Daging sebagai pengisi didalamnya bisa daging Ayam atau Sapi.---Oleh oleh ini cocok bagi group karena jumlahnya yang banyak dan kadaluarsa relatif singkat.', 3, 7, 9, 'Tahu, Bakso, Tepung', 4, 59, 1, '1 hari (suhu ruang)---3 hari (suhu kulkas)', 'Harus disimpan di kulkas', 'Apabila belum digoreng, goreng hingga kecoklatan, kemudian sajikan di atas piring', 'Asal Usul---Tahu bakso ialah salah satu makanan khas Semarang lebih tepatnya dari Ungaran. Berbicara sejarah tepatnya tak dapat diketahui secara pasti namun ada yang mengatakan jika makanan tersebut berasal dari orang china yang datang ke kota ini.', 'Group', NULL, NULL, NULL, 11, 8, 1, 'kotak', 33000, 61000, 0, 0, 0, NULL, NULL),
(28, 'Peyek Kepiting', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/914064750000865280/PeyekKepiting_1.JPG', 'https://cdn.discordapp.com/attachments/906163180328325130/914064750000865280/PeyekKepiting_1.JPG', 'Sebagai kota yang berada di tepi laut, kota minyak ini merupakan salah satu produsen kepiting bertaraf export. Sebagai salah satu bahan makanan hewani laut yang biasa dikonsumsi oleh masyarakat Indonesia, warga membuat makanan olahan kepiting.---Oleh - oleh ini cocok untuk perseorangan karena sudah dikemas dalam bentuk bungkus kecil.', 3, 4, 13, 'Kepiting, Tepung, Bumbu', 4, 39, 1, '30 hari (suhu ruang)', 'Tidak boleh disimpan di kulkas', 'Sajikan di atas piring kecil', 'Asal Usul---Ide untuk membuat peyek kepiting berasal dari Filsa Budi Ambia yang melihat kota ini yang terkenal akan hasil lautnya terutama kepiting untuk diekspor ke luar negeri.  Sayang tidak semua kepiting lolos quality control untuk diekspor seperti jumlah capit dan kaki yang kurang. Sehingga bagian - bagian ini diolah menjadi peyek.', 'Perseorangan', NULL, NULL, NULL, 9, 2, 0, 'bungkus', 15000, 27000, 0, 0, 0, NULL, NULL),
(30, 'Wingko Babat', 'Wingko Babad', 'https://cdn.discordapp.com/attachments/906163180328325130/912730665001308190/WingkoBabat_1.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/912730665001308190/WingkoBabat_1.jpg---https://cdn.discordapp.com/attachments/906163180328325130/912730666049896518/WingkoBabat_3.jpg---https://cdn.discordapp.com/attachments/906163180328325130/912730665378779186/WingkoBabat_2.png', 'Wingko babat merupakan oleh - oleh tradisional yang kerap menjadi oleh - oleh utama saat berkunjung ke Semarang.---Oleh - oleh ini cocok untuk perseorangan karena umumnya wingko sudah dikemas per pcs sehingga cocok untuk porsi 1 orang.', 1, 3, 3, 'Kelapa Muda, Tepung Beras Ketan, Gula', 3, 59, 1, '2 hari (suhu ruang)---5 hari (suhu kulkas)', 'Bisa disimpan di kulkas', 'Sajikan di atas piring kecil', 'Asal Usul---Sejarah mencatat bahwa kue wingko berasal dari kota kecil bernama Babad yang terletak di dekat Tuban, Jawa Timur. Sejak dulu hingga sekarang, kue wingko biasa dijual di Babad. Dari sinilah kemudian kue wingko terkenal dengan nama “wingko babad”. Sejarah telah mencatat bahwa wingko babad pertama kali muncul di Semarang sekitar tahun 1946.', 'Perseorangan', NULL, NULL, NULL, 12, 4, 0, 'kotak', 52000, 110000, 1, 1, 0, NULL, NULL),
(32, 'Bandeng Presto', '', 'https://cdn.discordapp.com/attachments/906163180328325130/912732508406300743/BandengPresto_2.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/912732508406300743/BandengPresto_2.jpg---https://cdn.discordapp.com/attachments/906163180328325130/912732508163039232/BandengPresto_1.jpg', 'Bandeng presto merupakan inovasi yang dibuat masyarakat Semarang. Ikan bandeng presto tercipta karena pemikiran kreatif untuk mengatasi banyaknya duri yang terdapat di daging ikan bandeng.---Oleh - oleh ini cocok untuk group karena ukurannya yang cukup besar, kemasan berisikan 1 ikan besar dan dapat dihidangkan untuk lebih dari 2 orang.', 3, 3, 14, 'Ikan Bandeng, Kunyit, Bawang Putih, Garam', 11, 59, 1, '90 hari (suhu ruang)---100 hari (suhu kulkas)', 'Harus disimpan di kulkas', 'Apabila belum digoreng, goreng hingga kecoklatan, kemudian sajikan di atas piring', 'Asal Usul---Bandeng Presto ditemukan pada tahun 1977 oleh Ibu Hanna Budimulya yang pada awalnya dibuat dalam skala kecil untuk kalangan tertentu saja. Namun karena digemari banyak orang, produksi Bandeng Presto semakin berkembang dan menjadi oleh-oleh khas dari Kota Semarang.', 'Group', NULL, NULL, NULL, 13, 8, 0, 'pcs', 51000, 139000, 0, 0, 1, NULL, NULL),
(34, 'Strudel Malang', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/916964979205374002/StrudelMalang_2.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/916964979205374002/StrudelMalang_2.jpg---https://cdn.discordapp.com/attachments/906163180328325130/916964979423457280/StrudelMalang_3.jpg---https://cdn.discordapp.com/attachments/906163180328325130/916964979628994640/StrudelMalang_4.jpg---https://cdn.discordapp.com/attachments/906163180328325130/916964979020816384/StrudelMalang_1.jpg', 'Strudel adalah kue pastry asal Austria yang dibuat dari adonan utama berupa tepung dan bahan kue lain.---Oleh - oleh ini cocok sebagai oleh oleh group karena dikemas untuk strudel yang ukurannya cukup besar dan dapat dipotong - potong menjadi beberapa bagian.', 1, 3, 3, 'Pastry, Topping', 1, 71, 1, '3 hari (suhu ruang)---10 hari (suhu kulkas)', 'Bisa disimpan di kulkas', 'Potong menjadi beberapa bagian, sajikan di atas piring kecil', 'Asal Usul---Strudel merupakan kue sejenis pastry yang berasal dari Austria, Jerman. Sekilas tentang strudel, ini merupakan salah satu makanan penutup (dessert) yang paling umum dikonsumsi oleh masyarakat Jerman. Mereka seringkall menyebutnya dengan nama Apfelstrudel atau Apple Strudel.---Fakta Menarik---Strudel yang berarti “pusaran air” atau “angin topan” dalam bahasa Jerman ini sudah populer di Eropa sejak abad 18.', 'Group', NULL, NULL, NULL, 4, 4, 0, 'kotak', 53000, 77000, 0, 1, 0, NULL, NULL),
(36, 'Keripik Pisang Lampung', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/906197474551672892/Renyah.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/906197474551672892/Renyah.jpg---https://cdn.discordapp.com/attachments/906163180328325130/914154855000584212/KeripikPisang_1.jpeg', 'Oleh oleh ini merupakan produk olahan buah yang hadir dengan varian rasa bermacam---Kudapan ini cocok untuk menjadi oleh - oleh perseorangan karena sudah dikemas menjadi bungkus kecil', 1, 4, 15, 'Pisang, Bumbu', 4, 32, 1, '21 hari (suhu ruang)---28 hari (suhu kulkas)', 'Bisa disimpan di kulkas', 'Sajikan di atas piring kecil', 'Asal Usul---Pemilik dari gerai memiliki ide untuk mengembangkan keripik pisang tradisional yang sebelumnya pernah dijual dengan menambahkan beberapa rasa seperti coklat dan kopi', 'Perseorangan', NULL, NULL, NULL, 6, 2, 0, 'kotak', 12000, 38500, 1, 1, 1, NULL, NULL),
(38, 'Bakpia Aceh', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/920283020529913856/Bakpia_Aceh.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/920283020529913856/Bakpia_Aceh.jpg', 'Kue kacang hijau yang memiliki bentuk mirip dengan bakpia di Yogyakarta, tetapi memiliki rasa yang khas.\r\n', 1, 3, 1, 'Kacang Hijau, Tepung, Gula halus', 1, 4, 1, '10 Hari', 'Bisa Disimpan di Dalam Kulkas', 'Disajikan Diatas Piring, Dimakan Langsung dari kemasan', 'Asal---Bakpia sendiri sebenarnya bukan merupakan makanan khas dari daerah aceh. Tetapi dari daerah tiongkok yang memiliki arti kue daging karena biasanya di daerah asalnya memiliki isian daging.\r\n', 'Perseorangan', NULL, NULL, NULL, 15, 3, 0, 'Kotak', 20000, 25000, 0, 0, 0, NULL, NULL),
(39, 'Kue Bhoi', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/920283390756933642/Kue-Bhoi-Khas-Aceh-1.jpg\r\n', 'https://cdn.discordapp.com/attachments/906163180328325130/920283390756933642/Kue-Bhoi-Khas-Aceh-1.jpg\r\n', 'Kue bolu khas aceh dengan bentuk yang unik seperti ikan, bunga, bintang, binatang, dll.', 1, 3, 3, 'tepung beras, telur bebek dan gula pasir\r\n', 1, 1, 1, '14 hari\r\n', 'Bisa Disimpan di Dalam Kulkas\r\n', 'Disajikan Diatas Piring, Dimakan Langsung dari kemasan\r\n', 'Biasa di makan oleh kalangan ningrat---Dahulu, kue bhoi merupakan penganan kalangan ningrat termasuk keluarga Sultan Iskandar Muda. Penganan ini disajikan kepada tamu istimewa yang datang berkunjung, atau saat perhelatan adat besar seperti pesta perkawinan\r\n', 'Perseorangan', NULL, NULL, NULL, NULL, 4, 0, 'Bungkus', 10000, 20000, 0, 0, 0, NULL, NULL),
(40, 'Kopi Gayo', 'Kopi Aceh', 'https://cdn.discordapp.com/attachments/906163180328325130/920283455944806400/Kpi_Gayo_Aceh.jpg\r\n', 'https://cdn.discordapp.com/attachments/906163180328325130/920283455944806400/Kpi_Gayo_Aceh.jpg\r\n', 'Kopi jenis Arabica khas aceh dengan rasa yang kuat, tingkat keasaman yang rendah, dan sedikit rasa rempah yang khas\r\n', 5, 10, 2, 'Biji Kopi', 5, 1, 1, '6 Bulan', 'Disimpan Ditempat Yang Kering', 'Diseduh diatas cangkir', 'Asal Usul Kopi Gayo---Perihal sejarah kopi kita tidak bisa lepas dari sejarah kelam kolonialisme khususnya di Indonesia. Politik tanam paksa dan kerasnya perdagangan kopi dunia. Kopi Gayo ada sejak zaman penjajahan Belanda. Abad ke-17, semasa VOC. Setelah penanaman kopi di Pulau Jawa, Belanda, memperluas lahannya hingga ke Sumatera Utara dan Nangroe Aceh Darussalam (NAD). Saat itu, kopi menjadi komoditi penting bagi serikat dagang Belanda tersebut. Di bawah pemerintahan Belanda, banyak petani kopi yang menderita.\r\n', 'perseorangan', NULL, NULL, NULL, 18, 7, 0, 'Bungkus', 50000, 110000, 1, 1, 1, NULL, NULL),
(41, 'Kue Keukarah', 'Kue Karah', 'https://cdn.discordapp.com/attachments/906163180328325130/920283520776163368/Kue_Keukarah.jpeg\r\n', 'https://cdn.discordapp.com/attachments/906163180328325130/920283520776163368/Kue_Keukarah.jpeg\r\n', 'Kue kering yang memiliki bentuk seperti sarang burung dengan warna kecoklatan\r\n', 1, 4, 3, 'Tepung Beras, Gula Pasir\r\n', 4, 1, 1, '1 Bulan\r\n', 'Disimpan di Tempat yang Kering', 'Disajikan Diatas Piring, Dimakan Langsung dari kemasan\r\n', 'Penyajian---kue ini sering dijumpai pada pesta pernikahan sebagai hantaran dari pihak laki-laki kepada pihak perempuan. Selain itu menjelang hari raya atau acara adat dan Kenduri Aceh,kue ini juga tak pernah absen dalam penyajian kudapan. Penyajian kudapan ini juga dapat ditemui pada acara penyambutan tamu atau sebagai teman minum teh.\r\n', 'Group', NULL, NULL, NULL, NULL, 3, 0, 'Bungkus', 13000, 20000, 1, 1, 0, NULL, NULL),
(42, 'Bika Ambon', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/920283623482073088/bika-ambon-bika-plate-slice.jpg\r\n', 'https://cdn.discordapp.com/attachments/906163180328325130/920283623482073088/bika-ambon-bika-plate-slice.jpg\r\n', 'Bika Ambon adalah salah satu makanan khas jenis kue basah. Kue satu ini memiliki ciri khas dengan warnanya yang kuning dan memiliki rongga-rongga di bagian dalamnya.\r\n', 1, 3, 3, 'Tepung terigu, Santan, Gula Pasir, Telur\r\n', 1, 6, 1, '3 Hari', 'Bisa Disimpan di Dalam Kulkas', 'Disajikan Diatas Piring\r\n', 'Asal Usul---Jika ditanya soal asal-usul Bika Ambon, ada banyak versi cerita yang beredar di masyarakat. Ada yang mengatakan, kue satu ini dinamai Bika Ambon lantaran tempat pertama kali kue ini dijual dan menjadi populer adalah di simpang Jalan Ambon Sei Kera Medan.\r\n', 'Perseorangan', NULL, NULL, NULL, NULL, 4, 0, 'Kotak', 20000, 65000, 0, 0, 0, NULL, NULL),
(43, 'Pancake Durian', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/920283717841330176/Durian_Pancake.jpg\r\n', 'https://cdn.discordapp.com/attachments/906163180328325130/920283717841330176/Durian_Pancake.jpg\r\n', 'Pancake Durian Panekuk durian atau pancake durian adalah makanan ringan berupa puree daging durian dan vla atau krim kocok yang dibalut dengan kulit crepes atau dadar gulung. Panganan ini pertama kali dipelopori oleh pedagang-pedagang kue rumahan di Kota Medan, dan lambat laun tersebar di kota-kota lain di Indonesia, seperti Jambi, Semarang, Jakarta, dan lain-lain.\r\n', 1, 3, 3, 'Tepung Terigu, Gula, Telur, Durian, Susu\r\n', 1, 6, 1, '3 Hari', 'Bisa Disimpan di Dalam Kulkas', 'Disajikan Diatas Piring\r\n', 'Asal Mula--- Pancake Durian ini dipelopori oleh pedagang-pedagang kue rumahan di Kota Medan. Kemudian, ketika semakin dikenal kue ini mulai menyebar di berbagai kota di Indonesia seperti Jambi, Jakarta, Semarang juga kota lainnya.', 'perseorangan', NULL, NULL, NULL, 4, 4, 0, 'Kotak', 30000, 60000, 0, 0, 0, NULL, NULL),
(44, 'Kopi Sidikalang', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/920283781619933214/Kopi_Sidikalang.jpg\r\n', 'https://cdn.discordapp.com/attachments/906163180328325130/920283781619933214/Kopi_Sidikalang.jpg\r\n', 'Merupakan kopi khas daerah sumatera utara yang memiliki aroma dan cita rasa yang khas', 1, 10, 2, 'Biji Kopi', 5, 6, 1, '6 Bulan', 'Disimpan di Tempat Kering', 'Diseduh diatas cangkir\r\n', 'Kesehatan---Cocok disajikan untuk penderita lambung bermasalah, karena Tingkat keasaman yang dihasilkan Kopi Sidikalang ini terbilang rendah jika dibandingkan dengan kopi jenis lain. Sehingga cocok dikonsumsi untuk pecinta kopi yang memiliki masalah lambung.\r\n', 'Perseorangan', NULL, NULL, NULL, 18, 7, 0, 'Bungkus', 50000, 150000, 1, 1, 1, NULL, NULL),
(45, 'Pempek', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/920283813098176512/Pempek.jpg\r\n', 'https://cdn.discordapp.com/attachments/906163180328325130/920283813098176512/Pempek.jpg\r\n', 'Merupakan Olahan ikan dari Sumatra Selatana, khususnya palembang yang biasa disantap dengan kuah Cuko\r\n', 3, 6, 3, 'Ikan Tenggiri, Tepung Sagu, garam, telur\r\n', 2, 14, 1, '3 Hari', 'Bisa Disimpan di Dalam Kulkas\r\n', 'Disajikan Diatas Mangkuk\r\n', 'Asal Mula Nama---Sebelumnya nama empek empek sendiri merupakan Kelesan. Tetapi mulai populer dipanggil pempek karena yang menjajakan makanan ini sebelumnya adalah seorang tionghoa bernama Apeq\r\n', 'Group', NULL, NULL, NULL, NULL, 8, 0, 'Bungkus', 100000, 150000, 0, 0, 0, NULL, NULL),
(46, 'Kue Maksuba', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/920287157879468052/Kue-Maksuba.jpg\r\n', 'https://cdn.discordapp.com/attachments/906163180328325130/920287157879468052/Kue-Maksuba.jpg\r\n', 'Merupakan Kue khas palembang yang biasanya hanya disajikan saat momen penting seperti idul fitri, idlu adha, pernikahan, dan lain lain\r\n', 1, 3, 21, 'Telur Bebek, Gula Pasir, Mentega, Susu Kental Manis\r\n', 1, 14, 1, '14 Hari', 'Bisa Disimpan di Dalam Kulkas\r\n', 'Disajikan Diatas Piring\r\n', 'Dulunya dimasak oleh orang tertentu---Zaman dulu, kue maksuba hanya bisa dimasak oleh seorang Panggong, sebutan untuk juru masak tradisional di Palembang. Konon, Panggong mewarisi kemampuan memasak kue ini secara turun-temurun. Saat ini semua orang bisa membuat kue lezat ini. Meski bahan dasarnya sederhana tapi tak mudah untuk membuatnya.\r\n', 'Perseorangan', NULL, NULL, NULL, NULL, 4, 0, 'Kotak', 100000, 200000, 0, 0, 0, NULL, NULL),
(48, 'Bakpia Kukus', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/920454593756938280/bakpia_kukus_utama.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/920454593756938280/bakpia_kukus_utama.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920454593756938280/bakpia_kukus_utama.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920454593756938280/bakpia_kukus_utama.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920454593756938280/bakpia_kukus_utama.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920454593756938280/bakpia_kukus_utama.jpg', 'Unik dan Super Enak!!! Ini adalah kata-kata yang sangat pas untuk menggambarkan istimewanya Bakpia Kukus Tugu Jogja. Diolah dari bahan-bahan premium sehingga menghasilkan Bakpia Kukus dengan citarasa yang menggugah selera. Dikemas cantik nan eksklusif sehingga Bakpia Kukus Tugu Jogja ini semakin istimewa jika dijadikan oleh-oleh untuk orang-orang terdekat.', 1, 3, 3, 'Telur, gula pasir, emulsifier, tepung terigu, susu bubuk, cokelat bubuk, baking powder, margarin, cokelat pasta, susu cair, tepung maizena', 3, 65, 1, '6 hari suhu ruang---bulan freezer', 'simpan di dalam freezer', 'dijadikan camilan, dijadikan teman minum teh', 'Setelah migrasi besar dari Cina abad ke 18, terjadilah akulturasi budaya Cina dan lokal di Nusantara. Makanan adalah wujud paling nyata dari akulturasi tersebut dan dekat dengan kita setiap hari.---Bakpia yang semula menggunakan daging babi, diadaptasi menggunakan kacang hijau dan kacang merah. Kwik Sun Kwok adalah seorang pengusaha Tionghoa pelopor pembuatan bakpia di Jawa pada tahun 1940 an, racikannya ini sangat digemari masyarakat Jawa.---Racikannya kemudian dikembangkan di Kampung Pathuk, Yogyakarta, sehingga dikenal sebagai Bakpia Pathuk', 'teh', NULL, '2021-12-14 23:22:25', '2021-12-14 23:22:25', 1, 4, 0, NULL, 20000, 38000, 0, 0, 0, NULL, NULL),
(49, 'Kue kering Yogyakarta', '', 'https://cdn.discordapp.com/attachments/906163180328325130/920461289262829638/cookies_utama.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/920461289262829638/cookies_utama.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920461289262829638/cookies_utama.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920461289262829638/cookies_utama.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920461289262829638/cookies_utama.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920461289262829638/cookies_utama.jpg', 'Kue kering menjadi salah satu kue yang digemari oleh masyarakat Indonesia. Tekstur nya yang renyah dengan rasa yang manis menjadi daya tarik dari kue kering ini. ', 1, 4, 3, 'Tepung, baking soda, butter, gula pasir, brown sugar, vanilla extract, telur', 1, 65, 1, '6 bulan', 'Simpan di wadah tertutup---Hindarkan dari sinar matahari', 'Dijadikan camilan---Dijadikan teman minum teh dan susu', 'Nama ‘cookies’ diambil dari kata serapan asal Belanda ‘koekje’ yang artinya kue kecil.---Di Belanda, cookies terbuat dari adonan kue manis yang dibuat berukuran kecil lalu dipanggang. Untuk memakan cookies pun sangatlah praktis, cukup menggunakan tangan yang disuap langsung ke dalam mulut.---Tidak perlu menggunakan pisau ataupun sendok. Kebiasaan memakan cookies itu kemudian dipopulerkan Belanda hingga ke Amerika Serikat.', 'teh, susu', NULL, '2021-12-14 23:30:01', '2021-12-14 23:30:01', 8, 3, 0, NULL, 20000, 80000, 0, 1, 0, NULL, NULL);
INSERT INTO `varianoleh` (`idoleh`, `namaoleh`, `namalain`, `gambarutama`, `gambaroleh`, `deskripsioleh`, `idrasa`, `idtekstur`, `idbahan`, `komposisi`, `idmasak`, `idlokasi`, `statushalal`, `kadarluarsa`, `carapenyimpanan`, `carapenyajian`, `trivia`, `namacocok`, `idmitra`, `created_at`, `updated_at`, `id_varian`, `idjenis`, `favorit_count`, `satuan`, `hargamin`, `hargamax`, `vegan`, `vegetarian`, `gluten_free`, `rekomendasioleh_count`, `list_count`) VALUES
(50, 'Sambal matah', 'Sambal bawang', 'https://cdn.discordapp.com/attachments/906163180328325130/920464510362472508/sambal_matah_utama.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/920464510362472508/sambal_matah_utama.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920464510362472508/sambal_matah_utama.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920464510362472508/sambal_matah_utama.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920464510362472508/sambal_matah_utama.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920464510362472508/sambal_matah_utama.jpg', 'Sambal matah spesial, dibuat dari cabai pilian.---Kepedasan dan kesegaranya dijamin membuat mulutmu terbakar.', 2, 7, 5, 'bawang merah, bawang putih, cabai merah, terasi, garam, sereh, jeruk lemo, minyak kelapa', 8, 66, 1, '1 minggu pada suhu ruang---6 bulan pada kulkas ', 'Simpan di dalam wadah tertutup---Simpan di dalam kulkas', 'Disajikan sebagai pelengkap hidangan', 'Sambal matah berasal dari kata sambal mentah. Sambal ini biasanya disertakan sebagai pelengkap hidangan.', 'nasi campur, ayam goreng', NULL, '2021-12-14 23:52:18', '2021-12-14 23:52:18', 11, 6, 1, NULL, 30000, 50000, 1, 1, 1, NULL, NULL),
(51, 'Kopi khas Surabaya', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/920468738472554556/kopi_utama.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/920468738472554556/kopi_utama.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920468738472554556/kopi_utama.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920468738472554556/kopi_utama.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920468738472554556/kopi_utama.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920468738472554556/kopi_utama.jpg', 'Kopi adalah minuman hasil seduhan biji kopi yang telah disangrai dan dihaluskan menjadi bubuk. Rasa pahitnya dijamin membuatmu lebih tenang.', 5, 3, 2, 'kopi', 8, 66, 1, '1 tahun', 'Jauhkan dari sinar matahari', 'Tuang pada gelas dengan air panas', 'Sejarah kopi telah dicatat sejauh pada abad ke-9.---Pertama kali, kopi hanya ada di Ethiopia, di mana biji-bijian asli ditanam oleh orang Ethiopia dataran tinggi. Akan tetapi, ketika bangsa Arab mulai meluaskan perdagangannya, biji kopi pun telah meluas sampai ke Afrika Utara dan biji kopi di sana ditanam secara massal.---Dari Afrika Utara itulah biji kopi mulai meluas dari Asia sampai pasaran Eropa dan ketenarannya sebagai minuman mulai menyebar.', 'susu', NULL, '2021-12-15 00:05:43', '2021-12-15 00:05:43', 18, 7, 0, NULL, 30000, 45000, 1, 1, 1, NULL, NULL),
(52, 'Jamur crispy', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/920503535085441085/jamur_crispy_utama_2.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/920503535085441085/jamur_crispy_utama_2.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920503535085441085/jamur_crispy_utama_2.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920503535085441085/jamur_crispy_utama_2.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920503535085441085/jamur_crispy_utama_2.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920503535085441085/jamur_crispy_utama_2.jpg', 'Cemilan yang super crispy ini diolah dari jamur tiram segar pilihan yang diolah dengan beragam bumbu rempah hingga menjadikannya lezat.---Yuk selalu siap sedia Amura Jamur Crispy biar ngumpul makin seru.', 3, 4, 8, 'jamur, tepung, garam, merica, tepung maizena, tepung roti, minyak, penyedap rasa', 4, 55, 1, '1 tahun', 'simpan di wadah tertutup', 'disajikan sebagai lauk, camilan', 'Menurut sejarah jamur dulu dijadikan sebagai hidangan populer bagi para raja di Mesir. Kini, jamur populer di masyarakat dan banyak disajikan dalam berbagaimenu makanan yang lezat. Bahkan, ada beberapa di antaranya berperan sebagai herbal. Jamur mulai dikenal sebagai bahan pangan sejak 3.000 tahun lalu.', 'lauk', NULL, '2021-12-15 02:20:16', '2021-12-15 02:20:16', 11, 2, 0, NULL, 26000, 40000, 1, 1, 0, NULL, NULL),
(53, 'Manisan Buah', 'Manisan Basah', 'https://cdn.discordapp.com/attachments/906163180328325130/920506083229990942/manisan_buah_utama_2.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/920506083229990942/manisan_buah_utama_2.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920506083229990942/manisan_buah_utama_2.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920506083229990942/manisan_buah_utama_2.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920506083229990942/manisan_buah_utama_2.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920506083229990942/manisan_buah_utama_2.jpg', 'Manisan buah, melelehkan mulut dengan rasa manis masamnya.---                                                                                                                                                                                                                                                                Camilan ini hadir dengan kemasan praktis yang dapat dibawa kemana-mana, sehingga cocok untuk konsumsi pribadi, konsumsi saat berpergian, diberikan kepada kolega maupun ke keluarga.', 1, 10, 7, 'Pepaya, air, kapur sirih, gula pasir, citron', 2, 55, 1, '1 minggu', 'Simpan di kulkas(jangan freezer)', 'Camilan', 'Sementara itu China mencatat bahwa mereka mulai mengenal manisan sejak masa pemerintahan Dinasti Song (960-1279 Masehi).---Saat itu selir kesayangan raja jatuh sakit dan tidak bisa makan. Tabib yang saat itu merawat sang selir memiliki ide untuk menyajikan manisan buah hawthorne. Ini adalah sejenis beri-berian yang tanamannya berduri dan memiliki buah yang terasa asam. Buah haw ini lalu ditusuk dengan batang bambu sehingga seperti sate lalu dicelupkan ke dalam sirup gula hingga terbentuk lapisan kristal di bagian luarnya. Ternyata nafsu makan sang selir pun kembali dan ia menjadi sehat.---Sejak itu manisan buah—masyarakat China menyebutnya tanghulu—dianggap sebagai obat yang manjur.', 'camilan', NULL, '2021-12-15 02:33:16', '2021-12-15 02:33:16', 7, 5, 0, NULL, 17000, NULL, 1, 1, 0, NULL, NULL),
(56, 'Bumbu nasi goreng', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/920506943133614160/bumbu_nasu_goreng_utama.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/920506943133614160/bumbu_nasu_goreng_utama.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920506943133614160/bumbu_nasu_goreng_utama.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920506943133614160/bumbu_nasu_goreng_utama.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920506943133614160/bumbu_nasu_goreng_utama.jpg---https://cdn.discordapp.com/attachments/906163180328325130/920506943133614160/bumbu_nasu_goreng_utama.jpg', 'Kelezatan Nasi Goreng khas Indonesia memang tidak diragukan lagi kelezatannya. Cita rasanya yang lezat terbuat dari cabai merah, cabai rawit, terasi dan kecap manis. Satu langkah mudah untuk membuat Nasi Goreng yang lezat, cukup tambahkan nasi dan Bumbu Nasi Goreng.', 3, 3, 18, 'garam, gula, penguat rasa, bawang merah, bawang putih, bubuk kecap,pewarna', 8, 72, 1, '1 bulan', 'Simpan di wadah tertutup', 'Ditumis dengan nasi', 'Nasi goreng ternyata sudah ada sejak ribuan tahun yang lalu, yakni sekitar tahun 4000 Sebelum Masehi. Makanan ini tidak berasal dari Indonesia, melainkan sebagai makanan tradisional masyarakat Tionghoa. Ide memasak nasi goreng dimulai dari kebiasaan masyarakat Tionghoa yang tidak suka dengan makanan yang sudah dingin. Oleh sebab itu, mereka mencoba untuk memasak kembali nasi yang sudah dingin. Agar lebih enak, mereka memasukkan bumbu-bumbu sewaktu memasaknya. Tidak disangka, ternyata nasi goreng yang dibuat sangat digemari masyarakat Tionghoa.', 'nasi', NULL, '2021-12-15 02:42:58', '2021-12-15 02:42:58', 9, 6, 0, NULL, 30000, NULL, 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `primary_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondary_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `score` bigint(20) UNSIGNED NOT NULL,
  `list` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`list`)),
  `expired_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`id`, `primary_key`, `secondary_key`, `score`, `list`, `expired_at`, `created_at`, `updated_at`) VALUES
(1, 'visits:pages_visits_day_total', NULL, 1, NULL, '2022-08-27 17:00:00', '2022-08-01 12:19:52', '2022-08-27 13:51:44'),
(2, 'visits:pages_visits_day', '0', 0, NULL, '2022-08-27 17:00:00', '2022-08-01 12:19:52', '2022-08-27 13:51:44'),
(3, 'visits:pages_visits_week_total', NULL, 10, NULL, '2022-08-28 17:00:00', '2022-08-01 12:19:52', '2022-08-27 13:51:44'),
(4, 'visits:pages_visits_week', '0', 0, NULL, '2022-08-28 17:00:00', '2022-08-01 12:19:52', '2022-08-27 13:51:44'),
(5, 'visits:pages_visits_month_total', NULL, 21, NULL, '2022-08-31 17:00:00', '2022-08-01 12:19:52', '2022-08-27 13:51:44'),
(6, 'visits:pages_visits_month', '0', 0, NULL, '2022-08-31 17:00:00', '2022-08-01 12:19:52', '2022-08-27 13:51:44'),
(7, 'visits:pages_visits_year_total', NULL, 21, NULL, '2022-12-31 17:00:00', '2022-08-01 12:19:52', '2022-08-27 13:51:44'),
(8, 'visits:pages_visits_year', '0', 0, NULL, '2022-12-31 17:00:00', '2022-08-01 12:19:52', '2022-08-27 13:51:44'),
(11, 'visits:pages_visits_total', NULL, 21, NULL, NULL, '2022-08-01 12:19:52', '2022-08-27 13:51:41'),
(13, 'visits:pages_visits_day', '1', 1, NULL, '2022-08-27 17:00:00', '2022-08-01 12:19:52', '2022-08-27 13:51:44'),
(14, 'visits:pages_visits_week', '1', 10, NULL, '2022-08-28 17:00:00', '2022-08-01 12:19:52', '2022-08-27 13:51:44'),
(15, 'visits:pages_visits_month', '1', 21, NULL, '2022-08-31 17:00:00', '2022-08-01 12:19:52', '2022-08-27 13:51:44'),
(16, 'visits:pages_visits_year', '1', 21, NULL, '2022-12-31 17:00:00', '2022-08-01 12:19:52', '2022-08-27 13:51:44'),
(24, 'visits:pages_visits_recorded_ips:1:127.0.0.1', NULL, 1, NULL, '2022-08-05 05:27:32', '2022-08-05 05:26:32', '2022-08-05 05:26:32'),
(25, 'visits:pages_visits', '1', 15, NULL, NULL, '2022-08-05 05:26:32', '2022-08-27 13:51:41'),
(26, 'visits:pages_visits_referers:1', NULL, 15, NULL, NULL, '2022-08-05 05:26:32', '2022-08-27 13:51:41'),
(27, 'visits:pages_visits_OSes:1', 'Windows', 15, NULL, NULL, '2022-08-05 05:26:32', '2022-08-27 13:51:41'),
(28, 'visits:pages_visits_languages:1', 'en', 15, NULL, NULL, '2022-08-05 05:26:32', '2022-08-27 13:51:41'),
(29, 'visits:pages_visits_recorded_ips:1:127.0.0.1', NULL, 1, NULL, '2022-08-05 05:58:41', '2022-08-05 05:28:41', '2022-08-05 05:28:41'),
(30, 'visits:pages_visits_recorded_ips:1:127.0.0.1', NULL, 1, NULL, '2022-08-09 15:45:56', '2022-08-09 15:15:56', '2022-08-09 15:15:56'),
(31, 'visits:pages_visits_recorded_ips:1:127.0.0.1', NULL, 1, NULL, '2022-08-09 16:25:14', '2022-08-09 15:55:14', '2022-08-09 15:55:14'),
(32, 'visits:pages_visits_recorded_ips:1:127.0.0.1', NULL, 1, NULL, '2022-08-12 05:42:24', '2022-08-12 05:12:24', '2022-08-12 05:12:24'),
(33, 'visits:pages_visits_recorded_ips:1:127.0.0.1', NULL, 1, NULL, '2022-08-23 18:43:31', '2022-08-23 18:13:31', '2022-08-23 18:13:31'),
(34, 'visits:pages_visits_recorded_ips:1:127.0.0.1', NULL, 1, NULL, '2022-08-23 19:21:06', '2022-08-23 18:51:06', '2022-08-23 18:51:06'),
(35, 'visits:pages_visits_recorded_ips:1:127.0.0.1', NULL, 1, NULL, '2022-08-23 20:44:19', '2022-08-23 20:14:19', '2022-08-23 20:14:19'),
(36, 'visits:pages_visits_recorded_ips:1:127.0.0.1', NULL, 1, NULL, '2022-08-23 21:14:32', '2022-08-23 20:44:32', '2022-08-23 20:44:32'),
(37, 'visits:pages_visits_recorded_ips:1:127.0.0.1', NULL, 1, NULL, '2022-08-24 04:15:10', '2022-08-24 03:45:10', '2022-08-24 03:45:10'),
(38, 'visits:pages_visits_recorded_ips:1:127.0.0.1', NULL, 1, NULL, '2022-08-24 04:45:52', '2022-08-24 04:15:52', '2022-08-24 04:15:52'),
(39, 'visits:pages_visits_recorded_ips:1:127.0.0.1', NULL, 1, NULL, '2022-08-24 05:16:03', '2022-08-24 04:46:03', '2022-08-24 04:46:03'),
(40, 'visits:pages_visits_recorded_ips:1:127.0.0.1', NULL, 1, NULL, '2022-08-24 06:02:02', '2022-08-24 05:32:02', '2022-08-24 05:32:02'),
(41, 'visits:pages_visits_recorded_ips:1:127.0.0.1', NULL, 1, NULL, '2022-08-24 06:33:39', '2022-08-24 06:03:39', '2022-08-24 06:03:39'),
(42, 'visits:pages_visits_recorded_ips:1:127.0.0.1', NULL, 1, NULL, '2022-08-27 14:21:41', '2022-08-27 13:51:41', '2022-08-27 13:51:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahandasar`
--
ALTER TABLE `bahandasar`
  ADD PRIMARY KEY (`idbahan`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favorit`
--
ALTER TABLE `favorit`
  ADD PRIMARY KEY (`idfavorit`),
  ADD KEY `favorit_idoleh_foreign` (`idoleh`),
  ADD KEY `favorit_id_foreign` (`id`);

--
-- Indexes for table `jenisoleh`
--
ALTER TABLE `jenisoleh`
  ADD PRIMARY KEY (`idjenis`);

--
-- Indexes for table `list_oleh`
--
ALTER TABLE `list_oleh`
  ADD PRIMARY KEY (`idlistoleh`),
  ADD KEY `list_oleh_idoleh_foreign` (`idoleh`),
  ADD KEY `list_oleh_id_foreign` (`id`);

--
-- Indexes for table `list_toko`
--
ALTER TABLE `list_toko`
  ADD PRIMARY KEY (`idlisttoko`),
  ADD KEY `list_toko_idtoko_foreign` (`idtoko`),
  ADD KEY `list_toko_id_foreign` (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`idlokasi`);

--
-- Indexes for table `masak`
--
ALTER TABLE `masak`
  ADD PRIMARY KEY (`idmasak`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`idmitra`),
  ADD KEY `mitra_idlokasi_foreign` (`idlokasi`);

--
-- Indexes for table `mitra_produk`
--
ALTER TABLE `mitra_produk`
  ADD PRIMARY KEY (`id_produk_mitra`),
  ADD KEY `mitra_produk_idmitra_foreign` (`idmitra`),
  ADD KEY `mitra_produk_idoleh_foreign` (`idoleh`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produk_mitra`
--
ALTER TABLE `produk_mitra`
  ADD PRIMARY KEY (`id_produk_mitra`),
  ADD KEY `produk_mitra_idoleh_foreign` (`idoleh`),
  ADD KEY `produk_mitra_idmitra_foreign` (`idmitra`);

--
-- Indexes for table `produk_toko`
--
ALTER TABLE `produk_toko`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `produk_toko_idtoko_foreign` (`idtoko`),
  ADD KEY `produk_toko_idoleh_foreign` (`idoleh`);

--
-- Indexes for table `rasa`
--
ALTER TABLE `rasa`
  ADD PRIMARY KEY (`idrasa`);

--
-- Indexes for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  ADD PRIMARY KEY (`idrekomendasi`),
  ADD KEY `rekomendasi_idtoko_foreign` (`idtoko`),
  ADD KEY `rekomendasi_id_foreign` (`id`);

--
-- Indexes for table `rekomendasioleh`
--
ALTER TABLE `rekomendasioleh`
  ADD PRIMARY KEY (`idrekomendasioleh`),
  ADD KEY `rekomendasioleh_idoleh_foreign` (`idoleh`),
  ADD KEY `rekomendasioleh_id_foreign` (`id`);

--
-- Indexes for table `tekstur`
--
ALTER TABLE `tekstur`
  ADD PRIMARY KEY (`idtekstur`);

--
-- Indexes for table `tempatbeli`
--
ALTER TABLE `tempatbeli`
  ADD PRIMARY KEY (`idtempatbeli`),
  ADD KEY `tempatbeli_idoleh_foreign` (`idoleh`),
  ADD KEY `tempatbeli_idlokasi_foreign` (`idlokasi`),
  ADD KEY `tempatbeli_idmitra_foreign` (`idmitra`);

--
-- Indexes for table `toko_mitra`
--
ALTER TABLE `toko_mitra`
  ADD PRIMARY KEY (`idmitra`);

--
-- Indexes for table `toko_oleh`
--
ALTER TABLE `toko_oleh`
  ADD PRIMARY KEY (`idtoko`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_mitra_id_foreign` (`mitra_id`);

--
-- Indexes for table `varianjenis`
--
ALTER TABLE `varianjenis`
  ADD PRIMARY KEY (`id_varian`),
  ADD KEY `varian_jenis_idjenis_foreign` (`idjenis`);

--
-- Indexes for table `varianoleh`
--
ALTER TABLE `varianoleh`
  ADD PRIMARY KEY (`idoleh`),
  ADD KEY `varianoleh_idrasa_foreign` (`idrasa`),
  ADD KEY `varianoleh_idtekstur_foreign` (`idtekstur`),
  ADD KEY `varianoleh_idbahan_foreign` (`idbahan`),
  ADD KEY `varianoleh_idmasak_foreign` (`idmasak`),
  ADD KEY `varianoleh_idlokasi_foreign` (`idlokasi`),
  ADD KEY `varianoleh_idmitra_foreign` (`idmitra`),
  ADD KEY `varianoleh_id_varian_foreign` (`id_varian`),
  ADD KEY `varianoleh_idjenis_foreign` (`idjenis`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `visits_primary_key_secondary_key_unique` (`primary_key`,`secondary_key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahandasar`
--
ALTER TABLE `bahandasar`
  MODIFY `idbahan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorit`
--
ALTER TABLE `favorit`
  MODIFY `idfavorit` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `jenisoleh`
--
ALTER TABLE `jenisoleh`
  MODIFY `idjenis` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `list_oleh`
--
ALTER TABLE `list_oleh`
  MODIFY `idlistoleh` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `list_toko`
--
ALTER TABLE `list_toko`
  MODIFY `idlisttoko` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `idlokasi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `masak`
--
ALTER TABLE `masak`
  MODIFY `idmasak` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `idmitra` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mitra_produk`
--
ALTER TABLE `mitra_produk`
  MODIFY `id_produk_mitra` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk_mitra`
--
ALTER TABLE `produk_mitra`
  MODIFY `id_produk_mitra` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produk_toko`
--
ALTER TABLE `produk_toko`
  MODIFY `id_produk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `rasa`
--
ALTER TABLE `rasa`
  MODIFY `idrasa` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  MODIFY `idrekomendasi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rekomendasioleh`
--
ALTER TABLE `rekomendasioleh`
  MODIFY `idrekomendasioleh` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tekstur`
--
ALTER TABLE `tekstur`
  MODIFY `idtekstur` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tempatbeli`
--
ALTER TABLE `tempatbeli`
  MODIFY `idtempatbeli` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `toko_mitra`
--
ALTER TABLE `toko_mitra`
  MODIFY `idmitra` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `toko_oleh`
--
ALTER TABLE `toko_oleh`
  MODIFY `idtoko` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `varianjenis`
--
ALTER TABLE `varianjenis`
  MODIFY `id_varian` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `varianoleh`
--
ALTER TABLE `varianoleh`
  MODIFY `idoleh` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorit`
--
ALTER TABLE `favorit`
  ADD CONSTRAINT `favorit_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `favorit_idoleh_foreign` FOREIGN KEY (`idoleh`) REFERENCES `varianoleh` (`idoleh`);

--
-- Constraints for table `list_oleh`
--
ALTER TABLE `list_oleh`
  ADD CONSTRAINT `list_oleh_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `list_oleh_idoleh_foreign` FOREIGN KEY (`idoleh`) REFERENCES `varianoleh` (`idoleh`) ON DELETE CASCADE;

--
-- Constraints for table `list_toko`
--
ALTER TABLE `list_toko`
  ADD CONSTRAINT `list_toko_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `list_toko_idtoko_foreign` FOREIGN KEY (`idtoko`) REFERENCES `toko_oleh` (`idtoko`) ON DELETE CASCADE;

--
-- Constraints for table `mitra`
--
ALTER TABLE `mitra`
  ADD CONSTRAINT `mitra_idlokasi_foreign` FOREIGN KEY (`idlokasi`) REFERENCES `lokasi` (`idlokasi`);

--
-- Constraints for table `mitra_produk`
--
ALTER TABLE `mitra_produk`
  ADD CONSTRAINT `mitra_produk_idmitra_foreign` FOREIGN KEY (`idmitra`) REFERENCES `toko_mitra` (`idmitra`),
  ADD CONSTRAINT `mitra_produk_idoleh_foreign` FOREIGN KEY (`idoleh`) REFERENCES `varianoleh` (`idoleh`);

--
-- Constraints for table `produk_mitra`
--
ALTER TABLE `produk_mitra`
  ADD CONSTRAINT `produk_mitra_idmitra_foreign` FOREIGN KEY (`idmitra`) REFERENCES `mitra` (`idmitra`),
  ADD CONSTRAINT `produk_mitra_idoleh_foreign` FOREIGN KEY (`idoleh`) REFERENCES `varianoleh` (`idoleh`);

--
-- Constraints for table `produk_toko`
--
ALTER TABLE `produk_toko`
  ADD CONSTRAINT `produk_toko_idoleh_foreign` FOREIGN KEY (`idoleh`) REFERENCES `varianoleh` (`idoleh`),
  ADD CONSTRAINT `produk_toko_idtoko_foreign` FOREIGN KEY (`idtoko`) REFERENCES `toko_oleh` (`idtoko`);

--
-- Constraints for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  ADD CONSTRAINT `rekomendasi_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `rekomendasi_idtoko_foreign` FOREIGN KEY (`idtoko`) REFERENCES `toko_oleh` (`idtoko`);

--
-- Constraints for table `rekomendasioleh`
--
ALTER TABLE `rekomendasioleh`
  ADD CONSTRAINT `rekomendasioleh_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `rekomendasioleh_idoleh_foreign` FOREIGN KEY (`idoleh`) REFERENCES `varianoleh` (`idoleh`);

--
-- Constraints for table `tempatbeli`
--
ALTER TABLE `tempatbeli`
  ADD CONSTRAINT `tempatbeli_idlokasi_foreign` FOREIGN KEY (`idlokasi`) REFERENCES `lokasi` (`idlokasi`),
  ADD CONSTRAINT `tempatbeli_idmitra_foreign` FOREIGN KEY (`idmitra`) REFERENCES `mitra` (`idmitra`),
  ADD CONSTRAINT `tempatbeli_idoleh_foreign` FOREIGN KEY (`idoleh`) REFERENCES `varianoleh` (`idoleh`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_mitra_id_foreign` FOREIGN KEY (`mitra_id`) REFERENCES `toko_mitra` (`idmitra`) ON DELETE CASCADE;

--
-- Constraints for table `varianjenis`
--
ALTER TABLE `varianjenis`
  ADD CONSTRAINT `varian_jenis_idjenis_foreign` FOREIGN KEY (`idjenis`) REFERENCES `jenisoleh` (`idjenis`);

--
-- Constraints for table `varianoleh`
--
ALTER TABLE `varianoleh`
  ADD CONSTRAINT `varianoleh_id_varian_foreign` FOREIGN KEY (`id_varian`) REFERENCES `varianjenis` (`id_varian`),
  ADD CONSTRAINT `varianoleh_idbahan_foreign` FOREIGN KEY (`idbahan`) REFERENCES `bahandasar` (`idbahan`),
  ADD CONSTRAINT `varianoleh_idjenis_foreign` FOREIGN KEY (`idjenis`) REFERENCES `jenisoleh` (`idjenis`),
  ADD CONSTRAINT `varianoleh_idlokasi_foreign` FOREIGN KEY (`idlokasi`) REFERENCES `lokasi` (`idlokasi`),
  ADD CONSTRAINT `varianoleh_idmasak_foreign` FOREIGN KEY (`idmasak`) REFERENCES `masak` (`idmasak`),
  ADD CONSTRAINT `varianoleh_idmitra_foreign` FOREIGN KEY (`idmitra`) REFERENCES `mitra` (`idmitra`),
  ADD CONSTRAINT `varianoleh_idrasa_foreign` FOREIGN KEY (`idrasa`) REFERENCES `rasa` (`idrasa`),
  ADD CONSTRAINT `varianoleh_idtekstur_foreign` FOREIGN KEY (`idtekstur`) REFERENCES `tekstur` (`idtekstur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
