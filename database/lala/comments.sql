-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2022 at 03:31 AM
-- Server version: 10.3.34-MariaDB-log-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeaenj_nikah`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `client_id`, `name`, `present`, `message`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lavia Oktaviani', 'yes', 'Lala sakinahku, selamat yaaa 🥰\nDoa terbaik buat kalian berdua\nSemoga menjadi keluarga SAMAWA\nBAHAGIA DUNIA AKHIRAT 🥰🤗', '2022-02-02 08:45:56', NULL),
(2, 1, 'Dita Febriani', 'yes', 'Barakallah laa semoga lancar sampai hari H dan menjadi keluarga sakinah mawaddah warahmah', '2022-02-02 09:01:14', NULL),
(3, 1, 'wika', 'yes', 'selamat lala sayang 🥰🥰 akhirnyaaaaa. semga lancar yaaaaaaa 😍', '2022-02-02 09:13:01', NULL),
(4, 1, 'Dede Vera', 'yes', 'Lala semoga lancar sampai hari H 🥰 semoga nanti di segerakan dapat momongan❤️ SAMAWAH', '2022-02-02 09:20:58', NULL),
(5, 1, 'Wiwit', 'yes', 'Barakallah lala & andri.. lancar sampai hari H yaaaa 🤲🤲🤲', '2022-02-02 09:25:03', NULL),
(6, 1, 'Nendeh', 'yes', 'Duh pasangan gemoyy,,,\nSehat sehat dan lancarrr yahhh lala dan andri,,, \nSaMaRo 🤍', '2022-02-02 10:08:35', NULL),
(7, 1, 'Yuni', 'yes', 'Happy wedding lala semoga lancar sampai hari H yaaa 🤲🤲🤲', '2022-02-02 10:52:10', NULL),
(8, 1, 'indah tria amalia', 'no', 'aaaas barakallah bulaaa syg... akhirnya yaaa.. lancar smpe hari h. aamiin 🥰🥰', '2022-02-02 11:00:50', NULL),
(9, 1, 'Yusi Nurcahyani', 'yes', 'Barakallah sayangku🥰 selamat duo cablak😀Lancar sampai hari H ya, samawa, bahagia dunia akhirat buat kalian 🤗🤲🙏', '2022-02-02 11:18:13', NULL),
(10, 1, 'Khairun nisa', 'yes', 'Selamat menempuh hidup yg baru adeku satu satunya bahagianya akhirnya waktu yg mejawab jodohnya ateu lala', '2022-02-02 13:47:49', NULL),
(11, 1, 'Nadiyya', 'yes', 'Selamat Lala & Andri.. akhirnya yaaa😍 sehat-sehat, lancar sampai hari H yaaaa💕', '2022-02-02 15:33:40', NULL),
(12, 1, 'Ganteng', 'yes', 'Semoga lancar sampai hari H', '2022-02-02 15:54:07', NULL),
(13, 1, 'Cipaw', 'no', 'Lancar sampai H dan setelahnya lalaaaaa.. 🥰🥰🥰', '2022-02-02 15:54:09', NULL),
(14, 1, 'Resy sp', 'yes', 'Lancar sampe hari H lalaku 🤗\nSemoga menjadi keluarga sakinah mawadah warrahmah aamiin', '2022-02-02 16:08:11', NULL),
(15, 1, 'Rifki Maulana', 'yes', 'Lancar sampe hari H brody sakinah mawadah warahmah 🤲🏻', '2022-02-02 16:15:06', NULL),
(16, 1, 'Bagja Aca', 'yes', 'Selamat buat Lala dan Olot', '2022-02-02 16:34:42', NULL),
(17, 1, 'Rina Mardiana', 'yes', 'Alhamdulillah barakallah dd selamat ya, sehat lancar... Doa terbaik buat bu adeku😘', '2022-02-02 16:37:52', NULL),
(18, 1, 'Rina Mardiana', 'yes', 'Alhamdulillah barakallah dd selamat ya, sehat lancar... Doa terbaik buat bu adeku😘', '2022-02-02 16:38:03', NULL),
(19, 1, 'Siti Hamidah', 'yes', 'Happy wedding Lala, akhirnya melepas masa lajang jga..smoga lancar sampai hari- H nya aamiin', '2022-02-02 17:00:33', NULL),
(20, 1, 'Misni', 'yes', 'Lancar sampe hari H.. semoga ke2 mempelai dan keluarga ke2 mempelai di beri kesehatan selalu ..\nCongrat 🥰', '2022-02-02 17:53:35', NULL),
(21, 1, 'Cima', 'yes', 'Selamat menempuh hiduo.baru andri & lala', '2022-02-02 18:31:28', NULL),
(22, 1, 'Rosulla Sabrina Achmadan', 'yes', 'yee akhirnya yang dinanti\" , selamat lala ku ikut seneng pokonya 😍  lancar sampi hari Hnya la .. btw tidur bakalan ada yang nemenin nih 🤭', '2022-02-02 19:35:38', NULL),
(23, 1, 'Hety - mamah Nevan', 'yes', 'Selamat y bu\nSemoga menjadi keluarga sakinah mawadah warohmah.. aamiin yaa robbal alamin', '2022-02-03 04:19:04', NULL),
(24, 1, 'rini & Irsyad', 'yes', 'selamat menikah lala, semoga samawa yaaaah', '2022-02-03 06:51:30', NULL),
(25, 1, '雨季', 'yes', 'Happy Weeding Andri & Lala', '2022-02-03 13:06:28', NULL),
(26, 1, 'Selviani', 'yes', 'Alhamdulillah, lancar smpe hari H ya lala 🤗🤗🤗🤗', '2022-02-03 16:15:22', NULL),
(27, 1, 'Bilda', 'yes', 'Alhamdulillah barakallah la.. lancar dan dimudahkan yaa semuanya selamat menempuh ibadah seumur hidup 😍🤗', '2022-02-03 18:40:45', NULL),
(28, 1, 'Aldy Batara', 'yes', 'Alhamdulillah namanya jodoh mah ga akan kemana yah , turut berbahagia dan semoga sakinah mawadah warahmah yah,insya Allah akan hadir', '2022-02-04 09:17:03', NULL),
(29, 1, 'Gigat', 'yes', 'Alhamdulillah sing lancar Sagala rupi na amiin 🤲', '2022-02-05 13:09:47', NULL),
(30, 1, 'Raiska Rizki', 'yes', 'Mudah-mudahan lancar yah lala sayang akhirnya sebentar lagi sah Alhamdulillah😍😘🤗', '2022-02-05 21:08:48', NULL),
(31, 1, 'Shinta Agustiana', 'no', 'Maafin ga bisa datang ndri 🙏 semoga jadi keluarga sakinah mawaddah warahmah, bahagia terus berkah dunia akhirat  yaa 🤲🙏', '2022-02-06 16:06:44', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
