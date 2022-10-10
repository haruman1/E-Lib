-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 01:54 PM
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
-- Database: `elib`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukutersedia`
--

CREATE TABLE `bukutersedia` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_buku` varchar(255) NOT NULL,
  `id_buku` varchar(255) NOT NULL,
  `stock` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftar_user`
-- (See below for the actual view)
--
CREATE TABLE `daftar_user` (
`nama` varchar(100)
,`username` varchar(50)
,`email` varchar(100)
,`role` int(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `hlmnbuku`
--

CREATE TABLE `hlmnbuku` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_buku` varchar(255) NOT NULL,
  `judulbuku` varchar(255) NOT NULL,
  `textbuku` text NOT NULL,
  `kategoribuku` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `file_buku` varchar(200) NOT NULL,
  `stok` int(11) UNSIGNED NOT NULL,
  `cover_buku` varchar(255) NOT NULL,
  `total_pinjam` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hlmnbuku`
--

INSERT INTO `hlmnbuku` (`id`, `id_buku`, `judulbuku`, `textbuku`, `kategoribuku`, `author`, `file_buku`, `stok`, `cover_buku`, `total_pinjam`) VALUES
(1, 'bk01', 'The Catcher In The Rye', 'Saatnya Natal dan Holden Caulfield baru saja dikeluarkan dari sekolah lain. Melarikan diri dari penjahat di Pencey Prep, dia bermain pinball di sekitar New York City mencari hiburan dalam pertemuan singkat - menembak banteng dengan orang asing di hotel selam, berkeliaran sendirian di sekitar Central Park, dipukuli oleh mucikari dan ditebang oleh mantan pacar. Kota ini indah dan mengerikan, dalam semua kesepian neon dan kemewahan kumuh, rasa kemungkinan dan kekosongan yang bercampur. Holden melewatinya seperti hantu, selalu memikirkan adik perempuannya Phoebe, satu-satunya orang yang benar-benar memahaminya, dan tekadnya untuk melarikan diri dari kepalsuan dan menemukan kehidupan yang berarti', 'Fiction', 'J.D. Salinger', 'Catcher in the Rye.pdf', 14, 'https://ucarecdn.com/5c3c6c53-8f0e-44c9-be22-931aa0518c04/', 4),
(2, 'bk02', 'Someone Like You', 'Di sini, dalam koleksi pertama Roald Dahl dari kisah-kisah dewasanya yang terkenal di dunia yang gelap dan menyeramkan, seorang istri menyajikan hidangan yang membingungkan polisi; taruhan yang tidak berbahaya tiba-tiba menjadi apa pun kecuali; mesin yang penasaran mengungkapkan kebenaran yang mengerikan tentang tanaman; dan seorang pria terbaring terjaga menunggu untuk digigit oleh ular berbisa yang tertidur tengkurap.\n\nMelalui balas dendam dan pencarian putus asa, kenangan pahit dan fantasi kotor, kisah-kisah Roald Dahl menggambarkan yang aneh dan tak terduga, mengirimkan getaran ke tulang belakang.', 'Mystery, Horror, Fiction', 'Roald Dahl', 'someone like you.pdf', 4, 'https://ucarecdn.com/1f74c7ce-77ac-4c21-8c29-309ee5afcc72/', 2),
(3, 'bk03', 'The History of the Ancient World', 'The History of the Ancient World adalah seri multi-volume yang mencakup sejarah dunia dari zaman kuno hingga modern dan ini adalah volume pertama dari seri baru yang berani yang menceritakan kisah semua negara, menghubungkan peristiwa sejarah dari Eropa ke Timur Tengah dan pantai terpencil China, sambil tetap memperhatikan karakteristik masing-masing negara . Susan Wise Bauer memberikan perhatian yang luas dan jelas pada kehidupan pribadi yang mewujudkan klaim abstrak sejarah manusia.\n\n\"Prosa Bauer yang elegan dan perintahnya atas banyak materi menjadikan ini titik awal yang luar biasa untuk mempelajari dunia kuno.\" Penerbit Mingguan', 'Historical', 'Susan Wise Bauer', 'The History of the Ancient World.pdf', 11, 'https://ucarecdn.com/3821ca43-e182-45a7-84e5-899805b1fff5/', 2),
(4, 'bk04', 'Atomic Habits', 'Melalui Atomics Habits James Clear memberikan paparan teori bahwa kebiasaan remeh yang dilakukan setiap hari dapat menghasilkan sesuatu yang luar biasa. Kegiatan-kegiatan seperti bangun lebih cepat lima menit atau berolahraga ringan setiap hari dapat membentuk kebiasaan baik dan menghentikan kebiasaan buruk. Oleh karena itu, kebiasaan-kebiasaan remeh tersebut dikenal sebagai atomic habits atau kebiasaan atom. Clear menjelaskan bahwa kebiasaan buruk yang terus berulah terjadi bukan karena seseorang tidak ingin berubah, melainkan karena sistem perubahan yang salah. Ketika sistem perubahan dilakukan secara benar, maka individu dapat memperoleh ke tingkat produktivitas yang baru. Paparan motivasi dalam Atomic Habits tidak hanya didasari dari rangkaian kata penyemangat, melainkan lewat teori-teori ilmiah.', 'Self Improvement', 'James Clear', 'Atomic Habits.pdf', 11, 'https://ucarecdn.com/50bafe8a-a622-4240-b74c-5e2330cfc61d/', 3),
(5, 'bk05', 'The Psychology of Motivation', 'Apakah Anda biasanya merasa kehilangan motivasi untuk mengejar impian Anda? Apakah Anda tidak memiliki dorongan untuk melewati situasi sulit? Apakah Anda siap untuk mempelajari cara dan tips untuk mencapai tujuan Anda dengan cepat? Atau apakah Anda ingin menjalani kehidupan yang menginspirasi yang layak ditiru? Maka, ini adalah buku yang tepat untuk Anda. Kutipan: Anda tidak perlu meminta izin siapa pun sebelum Anda dapat mencapai kebesaran. Inilah alasan mengapa penting untuk termotivasi dalam hidup. Motivasi adalah apa yang mendorong dan menyelaraskan Anda menuju tujuan Anda.', 'Self Improvement', 'Richard Brown', 'The Psychology of Motivation.pdf', 0, 'https://ucarecdn.com/e76d813c-1c3d-41b7-b03b-5c07ee25eb23/', 5),
(6, 'bk06', 'UnHoly', 'Logline: Setelah pertemuan kebetulan mengarah pada misteri dan pembunuhan, seorang mekanik muda menemukan dirinya terjebak di tengah-tengah konflik dunia bawah yang mematikan. Dan kebenaran di sini akan datang dengan biaya darah yang mengerikan.\n\nKutipan dari naskah:\n\nBENGKEL MOBIL -- PAGI HARI\n\nLIGHT mengalir masuk melalui jendela. Beberapa partikel debu menari di udara. Setelah kamera secara singkat mengamati detail ruangan, Lucas memasuki bingkai dan menyibukkan dirinya dengan beberapa tugas organisasi. Sepenuhnya santai, gerakan kamera menekankan suasana hatinya tetapi ada ketegangan yang meningkat dalam adegan yang muncul di wajah Lucas sebelum dia akhirnya memutuskan untuk mendengarkan PESAN SUARA yang dia terima beberapa jam yang lalu. Saat dia memegang telepon ke telinganya, pesan suara diputar.', 'Crime, Mystery, Fiction', 'John Xavier', 'Unholy.pdf', 3, 'https://ucarecdn.com/045c877a-23d4-464c-9394-b7acf4ba988a/', 0);

--
-- Triggers `hlmnbuku`
--
DELIMITER $$
CREATE TRIGGER `trigger_hapus_buku` AFTER DELETE ON `hlmnbuku` FOR EACH ROW BEGIN
  INSERT INTO log_buku (keterangan, waktu, judulbuku) VALUES("Hapus buku", now(), OLD.judulbuku);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trigger_penambahan_buku` AFTER INSERT ON `hlmnbuku` FOR EACH ROW BEGIN
  INSERT INTO log_buku (keterangan, waktu, judulbuku) VALUES("Menambah buku", now(), new.judulbuku);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trigger_perubahan_buku` AFTER UPDATE ON `hlmnbuku` FOR EACH ROW BEGIN
  INSERT INTO log_buku (keterangan, waktu, judulbuku) VALUES("Mengedit buku", now(), OLD.judulbuku);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_buku`
--

CREATE TABLE `jenis_buku` (
  `id_nomor` int(10) UNSIGNED NOT NULL,
  `nama_jenisBuku` varchar(255) NOT NULL,
  `id_buku` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kasir` int(50) NOT NULL,
  `nama_kasir` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id`, `id_kasir`, `nama_kasir`) VALUES
(1, 0, 'Aiman'),
(2, 0, 'Nando');

-- --------------------------------------------------------

--
-- Table structure for table `log_buku`
--

CREATE TABLE `log_buku` (
  `keterangan` varchar(255) NOT NULL,
  `waktu` datetime NOT NULL,
  `judulbuku` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_buku`
--

INSERT INTO `log_buku` (`keterangan`, `waktu`, `judulbuku`) VALUES
('Mengedit buku', '2022-06-10 08:05:04', 'The Catcher In The Rye'),
('Mengedit buku', '2022-06-10 10:18:04', 'The Catcher In The Ryee'),
('Mengedit buku', '2022-06-10 10:18:04', 'Someone Like You'),
('Mengedit buku', '2022-06-10 10:18:04', 'The History of the Ancient World'),
('Mengedit buku', '2022-06-10 10:18:04', 'Atomic Habits'),
('Mengedit buku', '2022-06-10 10:18:04', 'The Psychology of Motivation'),
('Mengedit buku', '2022-06-10 11:41:55', 'The Catcher In The Ryee'),
('Menambah buku', '2022-06-10 11:42:40', 'cek'),
('Hapus buku', '2022-06-10 11:49:23', 'cek'),
('Mengedit buku', '2022-06-10 17:15:13', 'The Catcher In The Rye'),
('Mengedit buku', '2022-06-10 17:15:14', 'Someone Like You'),
('Mengedit buku', '2022-06-10 17:15:14', 'The History of the Ancient World'),
('Mengedit buku', '2022-06-10 17:15:14', 'Atomic Habits'),
('Mengedit buku', '2022-06-10 17:15:14', 'The Psychology of Motivation'),
('Mengedit buku', '2022-06-10 17:15:14', 'UnHoly'),
('Mengedit buku', '2022-06-10 21:36:53', 'UnHoly'),
('Mengedit buku', '2022-06-10 21:36:53', 'The History of the Ancient World'),
('Mengedit buku', '2022-06-10 21:36:53', 'Someone Like You'),
('Mengedit buku', '2022-06-10 21:36:53', 'The Catcher In The Rye'),
('Mengedit buku', '2022-06-11 18:48:14', 'Someone Like You'),
('Mengedit buku', '2022-06-11 18:56:45', 'The Catcher In The Rye'),
('Mengedit buku', '2022-06-11 18:56:50', 'The Catcher In The Rye'),
('Mengedit buku', '2022-06-11 19:43:18', 'UnHoly'),
('Mengedit buku', '2022-06-11 20:05:34', 'Atomic Habits'),
('Mengedit buku', '2022-06-11 20:06:13', 'UnHoly'),
('Mengedit buku', '2022-06-11 20:10:21', 'UnHoly'),
('Mengedit buku', '2022-06-11 20:17:33', 'UnHoly'),
('Mengedit buku', '2022-06-11 20:18:57', 'UnHoly'),
('Mengedit buku', '2022-06-11 20:24:19', 'The Psychology of Motivation'),
('Mengedit buku', '2022-06-11 20:25:19', 'Atomic Habits'),
('Mengedit buku', '2022-06-11 21:17:36', 'The Catcher In The Rye'),
('Mengedit buku', '2022-06-11 21:25:40', 'Someone Like You'),
('Mengedit buku', '2022-06-11 21:26:01', 'The History of the Ancient World'),
('Mengedit buku', '2022-06-11 21:26:17', 'Atomic Habits'),
('Mengedit buku', '2022-06-11 21:26:41', 'The Psychology of Motivation'),
('Mengedit buku', '2022-06-11 21:26:43', 'UnHoly'),
('Mengedit buku', '2022-06-12 13:11:46', 'The History of the Ancient World'),
('Mengedit buku', '2022-06-12 14:46:24', 'Atomic Habits'),
('Menambah buku', '2022-06-12 19:34:55', 'cek'),
('Hapus buku', '2022-06-12 19:35:14', 'cek'),
('Mengedit buku', '2022-06-12 20:27:25', 'The Psychology of Motivation'),
('Mengedit buku', '2022-06-12 20:32:46', 'UnHoly'),
('Mengedit buku', '2022-06-12 22:26:50', 'The Catcher In The Rye'),
('Menambah buku', '2022-06-13 11:25:43', 'cek'),
('Hapus buku', '2022-06-13 11:25:56', 'cek'),
('Mengedit buku', '2022-06-13 12:26:42', 'The Catcher In The Rye'),
('Mengedit buku', '2022-06-13 12:29:42', 'The Catcher In The Rye'),
('Mengedit buku', '2022-06-13 12:30:01', 'Someone Like You'),
('Mengedit buku', '2022-06-13 15:32:00', 'The Psychology of Motivation'),
('Mengedit buku', '2022-06-13 16:47:58', 'Someone Like You'),
('Mengedit buku', '2022-06-13 16:47:58', 'Someone Like You'),
('Mengedit buku', '2022-06-13 17:29:00', 'Atomic Habits'),
('Mengedit buku', '2022-06-13 17:29:00', 'Atomic Habits'),
('Mengedit buku', '2022-06-13 17:32:06', 'The Catcher In The Rye'),
('Mengedit buku', '2022-06-13 17:32:59', 'Atomic Habits');

-- --------------------------------------------------------

--
-- Table structure for table `log_user`
--

CREATE TABLE `log_user` (
  `id_user` int(50) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `waktu_terdaftar` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_user`
--

INSERT INTO `log_user` (`id_user`, `nama_user`, `email_user`, `waktu_terdaftar`, `keterangan`) VALUES
(111, 'ASEP', 'asep', '2022-06-11 14:46:42', 'insert data user baru'),
(1411, 'asep cayang', 'asep@gmail.com', '2022-06-11 15:55:24', 'insert data user baru'),
(203, 'ASEP MAMAN', 'harcoc6@gmail.com', '2022-06-11 16:20:11', 'insert data user baru'),
(13344, 'ASEP MAMAN', 'harcoc7@gmail.com', '2022-06-11 16:23:09', 'insert data user baru'),
(3014, 'AAAA', 'harumanwiguna1@gmail.com', '2022-06-11 16:25:40', 'insert data user baru'),
(3231, 'ASEP MAMAN', 'harumanwiguna1@gmail.com', '2022-06-11 16:30:04', 'insert data user baru'),
(3323, 'ASEP MAMAN', 'harcoc67gmail.com', '2022-06-13 00:45:48', 'Hapus data user'),
(30412, 'ASEP MAMAN', 'harumanwiguna@upi.edu', '2022-06-13 14:26:20', 'insert data user baru'),
(2200, 'Haruman W', 'q@gmail.com', '2022-06-13 17:11:31', 'insert data user baru'),
(11100, 'Haruman', 'aaaa@m.com', '2022-06-13 17:27:29', 'insert data user baru');

-- --------------------------------------------------------

--
-- Table structure for table `mybook`
--

CREATE TABLE `mybook` (
  `id` int(10) NOT NULL,
  `id_buku` varchar(255) NOT NULL,
  `judulbuku` varchar(255) NOT NULL,
  `file_buku` varchar(200) NOT NULL,
  `id_user` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mybook`
--

INSERT INTO `mybook` (`id`, `id_buku`, `judulbuku`, `file_buku`, `id_user`) VALUES
(11, 'bk02', 'Someone Like You', 'someone like you.pdf', 0);

--
-- Triggers `mybook`
--
DELIMITER $$
CREATE TRIGGER `update_jumlah_peminjaman` AFTER INSERT ON `mybook` FOR EACH ROW BEGIN
UPDATE hlmnbuku SET total_pinjam = total_pinjam + 1 WHERE id_buku = new.id_buku;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_stok_pengembalian` AFTER DELETE ON `mybook` FOR EACH ROW BEGIN
UPDATE hlmnbuku SET stok = stok + 1 WHERE id_buku = OLD.id_buku;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id_web` int(11) NOT NULL,
  `nama_web` varchar(50) NOT NULL,
  `logo_web` varchar(100) NOT NULL,
  `deskripsi_web` varchar(100) NOT NULL,
  `pembuatweb` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id_web`, `nama_web`, `logo_web`, `deskripsi_web`, `pembuatweb`) VALUES
(1, 'E-Book', 'logo.png', 'E-Book adalah layanan website berbasis ...', 'Kijang 1');

-- --------------------------------------------------------

--
-- Table structure for table `transaksibuku`
--

CREATE TABLE `transaksibuku` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_buku` varchar(255) NOT NULL,
  `judulbuku` varchar(255) NOT NULL,
  `tanggal_peminjaman` datetime DEFAULT NULL,
  `tanggal_pengembalian` datetime NOT NULL,
  `file_buku` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksibuku`
--

INSERT INTO `transaksibuku` (`id`, `id_buku`, `judulbuku`, `tanggal_peminjaman`, `tanggal_pengembalian`, `file_buku`) VALUES
(1, '', '', '2022-06-11 00:00:00', '2022-06-20 00:00:00', NULL),
(2, '', '', '2022-06-11 00:00:00', '2022-06-11 00:00:00', NULL),
(3, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(4, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(5, '', '', '2022-06-11 00:00:00', '2022-06-13 00:00:00', NULL),
(6, '', '', '2022-06-11 00:00:00', '2022-06-25 00:00:00', NULL),
(7, '', '', '2022-06-11 00:00:00', '2022-06-24 00:00:00', NULL),
(8, '', '', '2022-06-11 00:00:00', '2022-06-23 00:00:00', NULL),
(9, '', '', '2022-06-11 00:00:00', '2022-06-17 00:00:00', NULL),
(10, '', '', '2022-06-11 00:00:00', '2022-06-17 00:00:00', NULL),
(11, '', '', '2022-06-25 00:00:00', '2022-06-30 00:00:00', NULL),
(12, 'bk02', 'Someone Like You', '2022-06-25 00:00:00', '2022-06-30 00:00:00', NULL),
(13, '', '', '2022-06-11 00:00:00', '2022-06-18 00:00:00', NULL),
(14, 'bk01', 'The Catcher In The Rye', '2022-06-11 00:00:00', '2022-06-18 00:00:00', NULL),
(15, 'bk01', 'The Catcher In The Rye', '2022-06-11 00:00:00', '2022-06-18 00:00:00', NULL),
(16, 'bk06', 'UnHoly', '2022-06-25 00:00:00', '2022-06-30 00:00:00', NULL),
(17, 'bk04', 'Atomic Habits', '2022-06-11 00:00:00', '2022-06-16 00:00:00', 'Atomic Habits.pdf'),
(18, '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(19, 'bk06', 'UnHoly', '2022-06-11 00:00:00', '2022-06-30 00:00:00', ''),
(20, 'bk06', 'UnHoly', '2022-06-25 00:00:00', '2022-06-30 00:00:00', ''),
(21, 'bk06', 'UnHoly', '2022-06-11 00:00:00', '2022-06-30 00:00:00', 'Unholy.pdf'),
(22, 'bk05', 'The Psychology of Motivation', '2022-06-11 00:00:00', '2022-06-30 00:00:00', 'The Psychology of Motivation.pdf'),
(23, 'bk04', 'Atomic Habits', '2022-06-11 00:00:00', '2022-06-13 00:00:00', 'Atomic Habits.pdf'),
(24, 'bk04', 'Atomic Habits', '2022-06-14 00:00:00', '2022-06-15 00:00:00', NULL),
(25, 'bk06', 'UnHoly', '2022-06-13 00:00:00', '2022-06-23 00:00:00', NULL),
(26, 'bk02', 'Someone Like You', '2022-06-14 00:00:00', '2022-06-30 00:00:00', 'someone like you.pdf'),
(27, 'bk05', 'The Psychology of Motivation', '2022-06-14 00:00:00', '2022-06-16 00:00:00', 'The Psychology of Motivation.pdf'),
(28, 'bk04', 'Atomic Habits', '2022-06-14 00:00:00', '2022-06-30 00:00:00', 'Atomic Habits.pdf');

--
-- Triggers `transaksibuku`
--
DELIMITER $$
CREATE TRIGGER `transaksi_insert` AFTER INSERT ON `transaksibuku` FOR EACH ROW BEGIN
INSERT INTO mybook(id_buku, judulbuku,file_buku)
VALUES(NEW.id_buku, NEW.judulbuku,new.file_buku);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_stok` AFTER INSERT ON `transaksibuku` FOR EACH ROW BEGIN
UPDATE hlmnbuku SET stok = stok - 1 WHERE id_buku = NEW.id_buku;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `trendingbook`
-- (See below for the actual view)
--
CREATE TABLE `trendingbook` (
`id` int(10) unsigned
,`id_buku` varchar(255)
,`judulbuku` varchar(255)
,`textbuku` text
,`kategoribuku` varchar(255)
,`author` varchar(255)
,`file_buku` varchar(200)
,`stok` int(11) unsigned
,`cover_buku` varchar(255)
,`total_pinjam` int(11) unsigned
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(10) NOT NULL,
  `is_active` int(10) NOT NULL,
  `date_created` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `password`, `role`, `is_active`, `date_created`) VALUES
(71, 'Haruman Wiguna', 'haruman1', 'harumanwiguna1@gmail.com     ', '$2y$10$ITTXx7sFtVr49Qd5C9majOSCmxUiX/Ho3jdseV3kO4fYupmGuURvq', 1, 1, 0),
(72, 'asad', 'asdaf', 'aimanabd930@gmail.com ', '$2y$10$9eYZSUgo5mehoAt9uWZVVerE5QQHPQnLv3Z8zCBNNcINvG7xxNvBW', 2, 1, 20220510),
(77, 'Haruman Wiguna', 'haruman', 'harcoc9@gmail.com', '$2y$10$ytbq5hbgNi705nScQT3tEeCbtYbpLZz94Wv/99rEKRMxH3NS7fcJS', 1, 1, 0),
(2200, 'Haruman W', 'HaRuman22!', 'q@gmail.com', '$2y$10$ON42pU8pSItGuCfwf2k2FOOUBV0.t7z6yQaJnM3lrJm1weJ6IsOwW', 2, 1, 1655115092),
(3231, 'ASEP MAMAN', 'admin1', 'harumanwiguna1@gmail.com', '$2y$10$FMwCr0.gVZh7rvdg6SpHou5HS9TgQGg7rAvmA.xu.QsBlF.HFZVT.', 2, 0, 1654939805),
(3323, 'ASEP MAMAN', 'admin123', 'harcoc67gmail.com', '$2y$10$pHUIdo6nuLwkFLss/kDpouo28aWHJ2XEe7HF3ewqeEs0epIhPXIZu', 2, 1, 1654954395),
(11100, 'Haruman', 'HaRuman23!', 'aaaa@m.com', '$2y$10$WSbbdmzsfhH3dbVcOcJlVuWTMcwO4TONE4yVMua2h20ZimXFNzW1K', 2, 1, 1655116049),
(30412, 'ASEP MAMAN', 'HaRuman21!', 'harumanwiguna@upi.edu', '$2y$10$F7QvAPrUXcbz5bxpeyWBI.Z9s4KQm15gCdZsGGuyOzrCGj4yIx89q', 2, 1, 1655105180);

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `log_delete_user` BEFORE UPDATE ON `user` FOR EACH ROW begin
INSERT INTO log_user(id_user,nama_user,email_user,waktu_terdaftar,keterangan)
VALUES (Old.id_user, old.nama, old.email,NOW(),"Hapus data user");
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `log_insert_user` AFTER INSERT ON `user` FOR EACH ROW begin
INSERT INTO log_user(id_user,nama_user,email_user,waktu_terdaftar,keterangan)
VALUES (NEW.id_user, NEW.nama, NEW.email,NOW(), "insert data user baru");
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `date_created` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(51, 'harcoc9@gmail.com', '3382617297', 20220511),
(52, 'harcoc9@gmail.com', '1534761924', 20220511),
(53, 'harcoc9@gmail.com', '2263593931', 20220511);

-- --------------------------------------------------------

--
-- Structure for view `daftar_user`
--
DROP TABLE IF EXISTS `daftar_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`stylecod_haruman`@`%` SQL SECURITY DEFINER VIEW `daftar_user`  AS SELECT `user`.`nama` AS `nama`, `user`.`username` AS `username`, `user`.`email` AS `email`, `user`.`role` AS `role` FROM `user``user`  ;

-- --------------------------------------------------------

--
-- Structure for view `trendingbook`
--
DROP TABLE IF EXISTS `trendingbook`;

CREATE ALGORITHM=UNDEFINED DEFINER=`stylecod_nando`@`103.156.161.187` SQL SECURITY DEFINER VIEW `trendingbook`  AS SELECT `hlmnbuku`.`id` AS `id`, `hlmnbuku`.`id_buku` AS `id_buku`, `hlmnbuku`.`judulbuku` AS `judulbuku`, `hlmnbuku`.`textbuku` AS `textbuku`, `hlmnbuku`.`kategoribuku` AS `kategoribuku`, `hlmnbuku`.`author` AS `author`, `hlmnbuku`.`file_buku` AS `file_buku`, `hlmnbuku`.`stok` AS `stok`, `hlmnbuku`.`cover_buku` AS `cover_buku`, `hlmnbuku`.`total_pinjam` AS `total_pinjam` FROM `hlmnbuku` ORDER BY `hlmnbuku`.`total_pinjam` DESC LIMIT 0, 33  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukutersedia`
--
ALTER TABLE `bukutersedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hlmnbuku`
--
ALTER TABLE `hlmnbuku`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `jenis_buku`
--
ALTER TABLE `jenis_buku`
  ADD PRIMARY KEY (`id_nomor`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_user`
--
ALTER TABLE `log_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `mybook`
--
ALTER TABLE `mybook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id_web`);

--
-- Indexes for table `transaksibuku`
--
ALTER TABLE `transaksibuku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukutersedia`
--
ALTER TABLE `bukutersedia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hlmnbuku`
--
ALTER TABLE `hlmnbuku`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jenis_buku`
--
ALTER TABLE `jenis_buku`
  MODIFY `id_nomor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log_user`
--
ALTER TABLE `log_user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30413;

--
-- AUTO_INCREMENT for table `mybook`
--
ALTER TABLE `mybook`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id_web` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksibuku`
--
ALTER TABLE `transaksibuku`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30413;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
