-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 02:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madina`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(10) NOT NULL,
  `nama` char(30) NOT NULL,
  `nik` int(20) NOT NULL,
  `ttl` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `telpon` int(12) NOT NULL,
  `agama` char(6) NOT NULL,
  `status_pegawai` varchar(10) NOT NULL,
  `ptk` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nidn` int(20) NOT NULL,
  `nama_ibu` char(30) NOT NULL,
  `nama_ayah` char(30) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama`, `nik`, `ttl`, `jenis_kelamin`, `alamat`, `telpon`, `agama`, `status_pegawai`, `ptk`, `email`, `nidn`, `nama_ibu`, `nama_ayah`, `foto`) VALUES
(1, 'momo', 21, '2022-02-02', '', 'dajhd1', 9, 'Islam', 'jhhj', 8, 'nurmayani@gmail.com', 1341415, 'nama', 'anama', 'f765910b07cd94b5d38dc638f3a671e3-WhatsApp Image 2021-09-20 at 6.16.57 PM.jpeg'),
(6, 'mimi', 665783894, '2022-03-18', 'perempuan', 'cocoyashi village', 562783, 'Islam', 'Aktif', 73638, 'namiorange@gmail.com', 7635832, 'Bellemere', 'unknownj', 'd4ee29ff13d7d2b8acdf7d76a52020aa-GoGreen3.jpg'),
(8, 'mumu', 73884, '2022-04-07', '', 'h', 837, 'Islam', 'jjjd', 736637, 'nami@gmail.com', 7362, 'huj', 'yuyuj', 'ea9353225c5134f497a3a4ad2c711761-a.png');

-- --------------------------------------------------------

--
-- Table structure for table `indikator`
--

CREATE TABLE `indikator` (
  `kode_lingkup` int(11) NOT NULL,
  `kode_sub_lingkup` int(11) NOT NULL,
  `kode_indikator` int(11) NOT NULL,
  `nama_indikator` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indikator`
--

INSERT INTO `indikator` (`kode_lingkup`, `kode_sub_lingkup`, `kode_indikator`, `nama_indikator`) VALUES
(1, 0, 1, '1. Menyebutkan agama yang dianut'),
(1, 0, 2, '2. Menyebutkan kitab suci agama yang dianut'),
(1, 0, 3, '3.  Menghormati guru atau orang yang lebih tua yang ada dilingkungan sekolah'),
(1, 0, 4, '4. Melakukan perbuatan-perbuatan yang baik pada saat bermain'),
(2, 0, 5, '1.         Mau meminjamkan miliknya '),
(2, 0, 6, '2.         Mau membantu teman, guru dan orang yang ada di lingkungan sekolah'),
(2, 0, 7, '3.         Menaati tata tertib di kelas'),
(2, 0, 8, '4.         Menghibur teman yang sedih'),
(2, 0, 9, '5.         Mau menerima kritik'),
(2, 0, 10, '6.         Memelihara hasil karya sendiri'),
(2, 0, 11, '7.         Menghargai hasil karya orang lain'),
(2, 0, 12, '8.         Menghargai keunggulan orang lain'),
(2, 0, 13, '9.         Dapat atau mau memuji teman'),
(3, 1, 14, '1.         Menirukan kembali kalimat sederhana yang terdiri dari 3-5 kata'),
(3, 2, 15, '2.         Menggunakan dan dapat menjawab pertanyaan apa, mengapa, dimana, berapa, kapan, dsb'),
(3, 2, 16, '3.         Menyebut berbagai bunyi atau suara tertentu'),
(3, 2, 17, '4.         Bercerita tentang gambar yang dibuat sendiri secara lisan'),
(3, 2, 18, '5.         Melengkapi kalimat sederhana yang sudah dimulai guru secara lisan atau tulisan'),
(3, 2, 19, '6.         Melanjutkan cerita yang telah didengan sebelumnya'),
(3, 3, 20, '7.         Menyebutkan symbol-simbol huruf vocal dan konsonan'),
(3, 3, 21, '8.         Membuat coretan tulisan sederhana tentang gambar yang dibuat sendiri'),
(4, 4, 22, '1.         Menirukan kembali kalimat sederhana yang terdiri dari 2-3 kata'),
(4, 5, 23, '2.         Menggunakan dan dapat menjawab pertanyaan apa, mengapa, dimana, kapan, dalam lagu bhs Arab'),
(4, 5, 24, '3.         Menyebut berbagai bunyi/suara tertentu menyebut berbagai kosa kata dan angka dalam Bahasa Arab'),
(4, 5, 25, '4.         Melakukan percakapan sederhana tentang tegur sapa dalam bhs Arab'),
(4, 6, 26, '5.         Menyebutkan 29 huruf hijaiyah dan symbol kasrah, fathah, kasrahtain dan fathahtain'),
(4, 6, 27, '6.         Membuat coretan tulisan sederhana tentang gambaryang dibuat sendiri'),
(5, 7, 28, '1.         Menirukan kembali kalimat sederhana yang terdiri dari 3-5 kata'),
(5, 8, 29, '2.         Menggunakan kata Tanya dan dapat melafalkan lagu islami dalam Bahasa inggris'),
(5, 8, 30, '3.         Menyebut berbagai bunyi atau suara tertentu'),
(5, 8, 31, '4.         Menyebut berbagai kosa kata dan angka dalam Bahasa inggris'),
(5, 8, 32, '5.         Melakukan percakapan sederhana ttg tegur sapa, perkenalan dalam Bahasa inggris '),
(5, 9, 33, '6.         Menyebutkan symbol-simbol huruf vocal dan consonant'),
(5, 9, 34, '7.         Membuat coretan tulisan sederhana tentang gambar yang dibuat sendiri'),
(6, 10, 35, '1.         Menyebutkan dan menceritakan  perbedaan dua buah benda'),
(6, 10, 36, '2.         Mencoba dan menceritakan tentang apa yang terjadi jika biji ditanam, balon di tiup lalu dilepaskan'),
(6, 10, 37, '3.         Mengekspresikan gerakan sesuai dengan syair lagu atau cerita'),
(6, 11, 38, '4.         Mengisi dan menyebutkan isi wadah dengan air dan pasir (1gelas, 1botol, 1 ember dll)'),
(6, 11, 39, '5.         Mengelompokan benda yang jumlahnya sama, tidak sama, lebih banyak, lebih sedikit dan dua kumpulan benda'),
(6, 11, 40, '6.         Memasangkan bentuk geometri dengan benda tiga dimensi yang bentuknya sama'),
(6, 11, 41, '7.         Menyusun benda dari yang paling rendah sampai yang paling tinggi atau sebaliknya'),
(6, 12, 42, '8.         Menulis lambing bilangan 1-20'),
(6, 12, 43, '9.         Mengenal lambing bilangan 1-20'),
(6, 12, 44, '10.     Menghubungkan lambing bilangan dengan benda/gambar'),
(7, 13, 45, '1.         Berdiri dengan tumit diatas satu kaki dengan seimbang'),
(7, 13, 46, '2.         Naik ayun ayunan dan merayap di terowongan tanpa jatuh'),
(7, 13, 47, '3.         Mengekspresikan berbagai gerakan kepala, tangan dan kaki sesuai dengan irama/music dengan lentur'),
(7, 13, 48, '4.         Mengurus diri sendiri tanpa bantuan seperti: makan, mandi menyisir rambut, mengancing baju, memakai sepatu dan mengikat tali sepatu'),
(7, 14, 49, '5.         Menggambar orang dengan lengkap dan proporsional'),
(7, 14, 50, '6.         Meronce dengan berbagai media'),
(7, 14, 51, '7.         Menganyam dengan berbagai media'),
(7, 15, 52, '8.         Memiliki kesesuaian antara usia dengan berat badan, usia dengan tinggi badan dan antara tinggi dan berat badan. '),
(8, 0, 53, '1.         Menghafal dua kalimat syahadat'),
(8, 0, 54, '2.         Mengucap dan menjawab selara'),
(8, 0, 55, '3.         Menghafal nama-nama malaikat melalui sya’ir lagu'),
(8, 0, 56, '4.         Menghafal surat-surat pendek dengan baik seperti : Al-Fatihah, An-nass, Al-Falaq, Al-Ikhlas, Al-Kautsar'),
(8, 0, 57, '5.         Menghafal doa doa harian (doa sebelum dan sesudah makan, doa orang tua, doa sebelum bangun dan bangun tidur, doa masuk dan keluar kamar mandi, doa ditambahkan ilmu, doa keluar rumah, doa berbuka puasa, doa tafarakul majlis)');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `nama_jadwal` varchar(20) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `nama_jadwal`, `foto`) VALUES
(33, 'nisaaa', '5b583e0d75d1aa8fc54c1ee864e2204c-9cbdc8d67a00bb59d621e5de9bae0b46-5eb891da37e8a.jpg'),
(34, 'ijo', '941c62f540a6944e8734e13acb630060-70b5600117701fe61478fbb381902392-5eb6880c22ba4.png'),
(35, 'kek titan', '821b53e0cf066afc66106e5090bfd3ab-da034581a3f1f6ece767304b41938b16-download (1).jpg'),
(39, 'yolo1', 'bd7c146adabfe5ffcdcbfd5081ed8444-9bb3b00d234ddfc157a794121b7eb730-5eb891da37e8a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lingkup`
--

CREATE TABLE `lingkup` (
  `kode_lingkup` int(11) NOT NULL,
  `nama_lingkup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lingkup`
--

INSERT INTO `lingkup` (`kode_lingkup`, `nama_lingkup`) VALUES
(0, 'nama_lingkup'),
(1, 'Lingkup perkembangan nilai agama dan moral'),
(2, 'Lingkup perkembangan sosial emosional dan kemandirian'),
(3, 'Lingkup perkembangan multi lingual - Perkembangan Bahasa Indonesia '),
(4, 'Lingkup perkembangan multi lingual - Perkembangan Bahasa Arab '),
(5, 'Lingkup perkembangan multi lingual - Perkembangan Bahasa Inggris'),
(6, 'Lingkup perkembangan kognitif'),
(7, 'Lingkup perkembangan fisik'),
(8, 'Pembiasaan agama islam dan tahfiz');

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `id_murid` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nik` int(20) NOT NULL,
  `ttl` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `telpon` int(12) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `jenis_tinggal` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `nama_ibu` varchar(20) NOT NULL,
  `pdd_ibu` varchar(20) NOT NULL,
  `pekerjaan_ibu` varchar(20) NOT NULL,
  `penghasilan_ibu` int(20) NOT NULL,
  `nama_ayah` varchar(20) NOT NULL,
  `pdd_ayah` varchar(20) NOT NULL,
  `pekerjaan_ayah` varchar(20) NOT NULL,
  `penghasilan_ayah` int(20) NOT NULL,
  `no_kk` int(11) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `kebutuhan_khusus` varchar(20) NOT NULL,
  `jarak_rumah` float NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`id_murid`, `nama`, `nik`, `ttl`, `jenis_kelamin`, `alamat`, `telpon`, `nisn`, `kelurahan`, `kecamatan`, `jenis_tinggal`, `email`, `nidn`, `agama`, `nama_ibu`, `pdd_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `nama_ayah`, `pdd_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `no_kk`, `kelas`, `kebutuhan_khusus`, `jarak_rumah`, `foto`) VALUES
(6, 'Jefri NIcholhhhh', 11111112, '2022-02-02', '', 'xffccb', 12345, '73883', 'babajan', 'cakrra', 'wali', 'firda@gmail.com', 'hgfhgfh56', 'Islam', 'ayuqqq', 'sma', 'irt', 78278, 'huy', 's3', 'bos', 434535, 654646, 'A', 'yah', 20977600000, '459031ed7770539486881f122aedf43b-green1.jpg'),
(7, 'contoh', 67878, '2022-02-02', 'perempuan', 'xffccb', 12345, '73883', 'babajan', 'cakrra', 'wali', 'firda@gmail.com', 'hgfhgfh5', 'Islam', 'ayu', 'sma', 'irt', 78278, 'huy', 's3', 'bos', 434535, 654646, 'A', 'tidak', 20, 'a8529469d42045c4c95f6a963a2ef9c6-IMG-20180430-WA0042.jpg'),
(8, 'aa', 67878, '2022-02-02', 'Laki-Laki', 'xffccb', 12345, '73883', 'babajan', 'cakrra', 'wali', 'firda@gmail.com', 'hgfhgfh5', 'Islam', 'ayu', 'sma', 'irt', 78278, 'huy', 's3', 'bos', 434535, 654646, 'A', 'tidak', 20, 'a588410d2c3f28f003205f774b985bd4-men.png');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(10) NOT NULL,
  `nama` char(25) NOT NULL,
  `no_induk` int(25) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `lingkup` char(40) NOT NULL,
  `perkembangan` char(40) NOT NULL,
  `jurusan` char(40) NOT NULL,
  `indikator` text NOT NULL,
  `nilai` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` bigint(20) NOT NULL,
  `id_guru` int(10) NOT NULL,
  `id_murid` int(10) NOT NULL,
  `isi_pesan` text NOT NULL,
  `subject_pesan` char(10) NOT NULL,
  `waktu` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_guru`, `id_murid`, `isi_pesan`, `subject_pesan`, `waktu`) VALUES
(20220420044436, 1, 1, 'coba aja dulu', 'coba pesan', '04-44-36,20-04-2022');

-- --------------------------------------------------------

--
-- Table structure for table `rapor`
--

CREATE TABLE `rapor` (
  `id_rapor` int(10) NOT NULL,
  `id_guru` int(10) NOT NULL,
  `id_murid` int(10) NOT NULL,
  `id_indikator` int(10) NOT NULL,
  `nilai_abjad` char(5) NOT NULL,
  `tahun_pelajaran` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sub_lingkup`
--

CREATE TABLE `sub_lingkup` (
  `kode_lingkup` int(11) NOT NULL,
  `kode_sub_lingkup` int(11) NOT NULL,
  `nama_sub_lingkup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_lingkup`
--

INSERT INTO `sub_lingkup` (`kode_lingkup`, `kode_sub_lingkup`, `nama_sub_lingkup`) VALUES
(3, 1, 'Menerima Bahasa'),
(3, 2, 'Mengungkapkan Bahasa'),
(3, 3, 'Keaksaraan'),
(4, 4, 'Menerima Bahasa'),
(4, 5, 'Mengungkapkan Bahasa'),
(4, 6, 'Keaksaraan'),
(5, 7, 'Menerima Bahasa'),
(5, 8, 'Mengungkapkan Bahasa'),
(5, 9, 'Keaksaraan'),
(6, 10, 'A. Pengetahuan umum dan sains'),
(6, 11, 'B. Konsep Bentuk, warna, ukuran dan Pola'),
(6, 12, 'C. Konsep bilangan, lambang bilangan dan huruf'),
(7, 13, 'A. Motorik Kasar'),
(7, 14, 'B. Motorik Halus'),
(7, 15, 'C. Kesehatan Fisik');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `level` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_murid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `level`, `nama`, `username`, `password`, `id_guru`, `id_murid`) VALUES
(24, 'Murid', 'Nurmayani', 'murid', 'murid', 6, 6),
(26, 'Guru', 'mumu', 'guru', 'guru', 8, 8),
(27, 'Admin', 'caca', 'admin', 'admin', 1, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `indikator`
--
ALTER TABLE `indikator`
  ADD PRIMARY KEY (`kode_indikator`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id_murid`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_murid` (`id_murid`);

--
-- Indexes for table `rapor`
--
ALTER TABLE `rapor`
  ADD PRIMARY KEY (`id_rapor`);

--
-- Indexes for table `sub_lingkup`
--
ALTER TABLE `sub_lingkup`
  ADD PRIMARY KEY (`kode_sub_lingkup`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_ibfk_1` (`id_guru`),
  ADD KEY `user_ibfk_2` (`id_murid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `murid`
--
ALTER TABLE `murid`
  MODIFY `id_murid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_murid`) REFERENCES `murid` (`id_murid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
