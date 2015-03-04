-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2013 at 04:44 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbs_library_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `library_anggota`
--

CREATE TABLE IF NOT EXISTS `library_anggota` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(24) NOT NULL,
  `status` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `waktu` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `library_anggota`
--

INSERT INTO `library_anggota` (`id`, `nama_lengkap`, `username`, `password`, `status`, `email`, `alamat`, `telepon`, `waktu`) VALUES
(2, 'Hikmah Tiar', 'hikmahtiar.cool', 'd735825f4d670159e96fa765', 'Siswa - Siswi SMK Negeri 4 Kota Bogor', 'hikmahtiar6@gmail.com', 'Jl. Kertamaya', '089638141660', '2013-06-11'),
(3, 'Muhammad', 'mhmd', 'f4bf34f47adbf9552928a147', 'Siswa - Siswi SMK Negeri 4 Kota Bogor', 'mhmd@gmail.com', 'Jl. Ga dibawa', '08963800000', '2013-06-11');

-- --------------------------------------------------------

--
-- Table structure for table `library_berita`
--

CREATE TABLE IF NOT EXISTS `library_berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `identitas` varchar(200) NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `library_berita`
--

INSERT INTO `library_berita` (`id_berita`, `judul`, `link`, `isi`, `identitas`) VALUES
(4, 'Indonesia Gelar Pameran Lukisan Batik di Perpustakaan Kota Trondheim, Norwegia', 'indonesia-gelar-pameran-lukisan-batik.html', '<p style="margin-left:0px; margin-right:0px">Indonesia menggelar pameran lukisan batik karya Joko Sudadiyo di Perpustakaan Kota Trondheim, Norwegia, mulai 8 hingga 21 Juni, demikian Pensosbud KBRI Oslo Dyah Kusumawardani, London, Selasa (11/6).</p>\r\n\r\n<p style="margin-left:0px; margin-right:0px">Pameran tersebut diadakan melalui kerja sama dengan Berit Johanessen dari Norwegian University for Science and Technology (NTNU), dan Dorith Schaffscher sebagai kurator, serta Perpustakaan Kota Trondheim, katanya.</p>\r\n\r\n<p style="margin-left:0px; margin-right:0px">Acara pembukaan pameran dihadiri sekitar 60 orang, antara lain dari kalangan akademik dari NTNU, perwakilan dari berbagai galeri di Trondheim, dan tokoh masyarakat dan juga masyarakat Indonesia yang berdomisili di Trondheim.</p>\r\n\r\n<p style="margin-left:0px; margin-right:0px">Dalam sambutan pembukaannya mewakili Dubes RI Oslo Counsellor Sayoga Kadarisman mengatakan kebudayaan merupakan jembatan untuk semakin menguatkan kolaborasi dan kerja sama antara dua wilayah atau negara yang berbeda.</p>\r\n\r\n<p style="margin-left:0px; margin-right:0px">Ia berharap pameran batik ini dapat turut menjembatani pemahaman yang lebih akan budaya Indonesia, dan mendorong timbulnya keingintahuan akan Indonesia yang akhirnya akan mendukung upaya kerja sama antara kedua negara.</p>\r\n', 'Author : Hikmah Tiar | 12-Jun-2013 16:34:54'),
(5, 'Penghargaan Kesusastraan untuk Novel City of Bohane Dari 160 Perpustakaan di Dunia', 'penghargaan-kesusastraan-untuk-novel.html', '<p style="margin-left:0px; margin-right:0px; text-align:justify">Penulis Irlandia Kevin Barry berhasil mengalahkan 153 judul pesaingnya, yang dinominasikan oleh 160 perpustakaan dari 44 negara.</p>\r\n\r\n<p style="margin-left:0px; margin-right:0px; text-align:justify">Novel perdananya,&nbsp;<em>City of Bohane</em>&nbsp;meraih penghargaan International Impac Dublin Literary Award sebesar 100 ribu euro (Rp1,5 miliar).</p>\r\n\r\n<p style="margin-left:0px; margin-right:0px; text-align:justify">Ia adalah penulis Irlandia ketiga yang memenangi hadiah yang diorganisir oleh perpustakaan-perpustakaan kota Dublin atas nama Dewan Kota Dublin.</p>\r\n\r\n<p style="margin-left:0px; margin-right:0px; text-align:justify">Pada 2006, Colm Toibin mendapat hadiah ini untuk<em>&nbsp;The Master</em>&nbsp;dan Colum McCann pada 2011 untuk&nbsp;<em>Let the Great World Spin</em>.</p>\r\n\r\n<p style="margin-left:0px; margin-right:0px; text-align:justify">Pemenang lainnya meliputi&nbsp;<em>Even the Dogs</em>&nbsp;oleh Jon McGregor pada 2012 dan<em>The Twin</em>&nbsp;karya Gerbrand Bakker pada 2010.</p>\r\n\r\n<p style="margin-left:0px; margin-right:0px; text-align:justify"><strong>Perpustakaan</strong><br />\r\nIrlandia pada tahun 2053 yang diceritakan oleh Kevin Barry adalah tempat yang tidak kamu inginkan untuk hidup, tetapi anda akan menikmati membaca novel itu, kata dewan juri.</p>\r\n\r\n<p style="margin-left:0px; margin-right:0px; text-align:justify">Sementara bagi Barry, novel ini adalah hasil risetnya di perpustakaan. Fakta bahwa penghargaan ini berawal dari perpustakaan, perpustakaan adalah dimana kita belajar bahwa kita bisa melihat hidup kita dari buku, kata Barry.</p>\r\n', 'Author : Hikmah Tiar | 12-Jun-2013 21:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `library_books`
--

CREATE TABLE IF NOT EXISTS `library_books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(11) NOT NULL,
  `tanggal` date NOT NULL,
  `Pengarang` varchar(300) NOT NULL,
  `penerbit` varchar(40) NOT NULL,
  `judul_books` varchar(300) NOT NULL,
  `jumlah` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1466 ;

--
-- Dumping data for table `library_books`
--

INSERT INTO `library_books` (`id`, `kode`, `tanggal`, `Pengarang`, `penerbit`, `judul_books`, `jumlah`) VALUES
(1458, '005', '2013-06-15', 'Hikmah Tiar', 'PT Ilmu Teknologi', 'Mendesign Web', 5),
(1463, '002', '2013-06-21', 'Airlangga', 'PT Buku Indonesia', 'Ilmu Pengetahuan Alam', 7),
(1464, '003', '2013-06-12', 'Tutur Tinular', 'PT Indosiar', 'Mendeskripsikan Sejarah', 9),
(1465, '0009', '2013-06-12', 'Fandi', 'Airlangga', 'Kewirausahaan', 9);

-- --------------------------------------------------------

--
-- Table structure for table `library_ebooks`
--

CREATE TABLE IF NOT EXISTS `library_ebooks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `library_ebooks`
--

INSERT INTO `library_ebooks` (`id`, `nama_file`, `tanggal`) VALUES
(18, 'Data Rak Buku.pdf', '1996-06-28'),
(19, 'Seni Rupa.pdf', '2013-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `library_kategori`
--

CREATE TABLE IF NOT EXISTS `library_kategori` (
  `kode_kategori` int(3) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) NOT NULL,
  `kode` varchar(11) NOT NULL,
  PRIMARY KEY (`kode_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32434242 ;

--
-- Dumping data for table `library_kategori`
--

INSERT INTO `library_kategori` (`kode_kategori`, `nama_kategori`, `kode`) VALUES
(1, 'Ilmu pengetahuan alam', '002'),
(2, 'Research', '001.4'),
(3, 'Metode Riset', '001.42'),
(4, 'sistem', '003'),
(5, 'Model dan Simulasi Komputer', '003.3'),
(6, 'Ilmu Komputer', '004'),
(7, 'Prinsip Matematika Komputer', '004.0151'),
(32434238, 'SMK 44', '2314'),
(23, 'sejarah', '0001'),
(44, 'pengetahuan', '0004'),
(45, 'fisika', '00005'),
(47, 'ideologi', '00007'),
(49, 'ekonomi', '0009'),
(55, 'sejarah', '0010'),
(15, 'Ilmu Pengetahuan Sosial', '005'),
(32434240, 'Teknologi', '112');

-- --------------------------------------------------------

--
-- Table structure for table `library_kritik`
--

CREATE TABLE IF NOT EXISTS `library_kritik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `kritik` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `library_kritik`
--

INSERT INTO `library_kritik` (`id`, `nama`, `email`, `kritik`) VALUES
(2, 'anggi', 'angi@gmail.com', '<p>Wah bagus sekali web nya :D</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `library_peminjaman`
--

CREATE TABLE IF NOT EXISTS `library_peminjaman` (
  `id_p` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `kode` varchar(11) NOT NULL,
  `waktu` date NOT NULL,
  `kembali` date NOT NULL,
  PRIMARY KEY (`id_p`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `library_peminjaman`
--

INSERT INTO `library_peminjaman` (`id_p`, `nama`, `alamat`, `kode`, `waktu`, `kembali`) VALUES
(1, 'Hikmah TIar', 'Jl. Kertamaya', '005', '2013-06-11', '0000-00-00'),
(3, 'Anggi', 'Jl. Cipaku', '002', '2013-06-11', '0000-00-00'),
(8, 'Aku', 'Jl Kamu', '0009', '2013-06-12', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `library_pengunjung`
--

CREATE TABLE IF NOT EXISTS `library_pengunjung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `tujuan` text NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `library_pengunjung`
--

INSERT INTO `library_pengunjung` (`id`, `nama`, `tujuan`, `email`) VALUES
(1, 'Hikmah Tiar', 'Mau melihat web nya.', 'hikmahtiar6@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `library_rak_buku`
--

CREATE TABLE IF NOT EXISTS `library_rak_buku` (
  `kode_rak` int(11) NOT NULL AUTO_INCREMENT,
  `nama_rak` varchar(30) NOT NULL,
  PRIMARY KEY (`kode_rak`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `library_rak_buku`
--

INSERT INTO `library_rak_buku` (`kode_rak`, `nama_rak`) VALUES
(67, 'Komputerisasi'),
(69, 'Program'),
(63, 'Pengetahuan');

-- --------------------------------------------------------

--
-- Table structure for table `library_users`
--

CREATE TABLE IF NOT EXISTS `library_users` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(24) NOT NULL,
  `status` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `library_users`
--

INSERT INTO `library_users` (`id`, `nama_lengkap`, `username`, `password`, `status`, `email`, `alamat`, `telepon`) VALUES
(1, 'Hikmah Tiar', 'hikmahtiar.cool', 'd735825f4d670159e96fa765', 'Super Admin', 'hikmahtiar6@gmail.com', 'Kp. Margabhakti\r\nJl. Kertamaya', '089638141660'),
(3, 'Muhammad Januar', 'janu', '3605ec021bac4a1db6004503', 'Admin', 'januar@gmail.com', 'Jl. Cipaku BTN', '081234567890');

-- --------------------------------------------------------

--
-- Table structure for table `library_visit`
--

CREATE TABLE IF NOT EXISTS `library_visit` (
  `ip` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library_visit`
--

INSERT INTO `library_visit` (`ip`, `tanggal`, `hits`, `online`) VALUES
('::1', '2013-06-12', 161, '1371048245');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
