-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 09, 2025 at 02:18 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `id_agenda` int NOT NULL,
  `nama_agenda` varchar(255) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `foto_agenda` varchar(255) NOT NULL,
  `dibuat_tanggal` date NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`id_agenda`, `nama_agenda`, `deskripsi`, `foto_agenda`, `dibuat_tanggal`, `tanggal`) VALUES
(4, 'ytdfcvb', 'hiygausvdbasi', '1736384717_efac6aa5ab59dca4dbc8.png', '2025-01-09', '2025-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `dibuat_tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `nama`, `deskripsi`, `foto`, `dibuat_tanggal`) VALUES
(3, 'adasd', 'igsbkdfjhsdbj', '1736383781_fde738c505143c17c255.png', '2025-01-09'),
(4, 'auisygdva', 'gvahbsjndiaihuhsbd', '1736383790_e1d4534e225d91a8f326.png', '2025-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id_galeri` int NOT NULL,
  `judul` varchar(500) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `dibuat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_layanan`
--

CREATE TABLE `tbl_layanan` (
  `id_layanan` int NOT NULL,
  `nama_layanan` varchar(255) NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_layanan`
--

INSERT INTO `tbl_layanan` (`id_layanan`, `nama_layanan`, `deskripsi`) VALUES
(2, 'Administrasi Kependudukan', 'Kelurahan berfungsi membantu warga dalam pengurusan dokumen kependudukan yang diperlukan untuk berbagai keperluan. Layanan yang disediakan mencakup pembuatan dan pembaruan Kartu Keluarga (KK), Kartu Tanda Penduduk (KTP), serta surat pengantar untuk pengurusan administrasi lainnya. Surat-surat ini sering dibutuhkan untuk mendapatkan layanan di instansi lain.'),
(3, 'Pelayanan Sosial dan Masyarakat', 'Kelurahan bertanggung jawab dalam memfasilitasi warganya untuk menerima bantuan sosial yang disediakan pemerintah atau lembaga lain, seperti bantuan untuk keluarga miskin atau korban bencana alam. Selain itu, kelurahan juga mengorganisasi kegiatan kemasyarakatan, seperti gotong royong, perayaan hari besar nasional, atau acara budaya yang mempererat hubungan sosial.'),
(4, 'Pembangunan dan Infrastruktur', 'Peran kelurahan dalam pembangunan lokal meliputi perencanaan dan pengelolaan proyek kecil yang langsung berdampak pada kehidupan warga, seperti pembangunan jalan lingkungan, tempat pembuangan sampah sementara, pos pelayanan terpadu (posyandu), dan ruang publik lainnya. Kelurahan juga bekerja sama dengan masyarakat untuk mengidentifikasi kebutuhan infrastruktur di wilayahnya.'),
(5, 'Pelayanan Pertanahan', 'Kelurahan membantu proses administrasi tanah dengan memberikan surat pengantar atau surat keterangan yang diperlukan warga untuk pengurusan sertifikat tanah di Badan Pertanahan Nasional (BPN). Tugas ini meliputi pengesahan dokumen yang mendukung klaim kepemilikan tanah dan perizinan penggunaan lahan.'),
(6, 'Keamanan dan Ketertiban', 'Kelurahan bekerja sama dengan masyarakat dan aparat keamanan untuk menciptakan lingkungan yang aman dan tertib. Program seperti sistem keamanan lingkungan (siskamling), pengawasan kegiatan masyarakat, dan koordinasi dengan pihak berwajib dalam menangani pelanggaran hukum lokal merupakan bagian dari tugas ini.'),
(7, 'Pengelolaan Keuangan', 'Kelurahan mengelola dana yang diberikan pemerintah melalui Anggaran Pendapatan dan Belanja Daerah (APBD), termasuk dana dari program nasional yang ditujukan untuk pemberdayaan masyarakat atau pembangunan fisik. Kelurahan bertanggung jawab atas penggunaan dana secara transparan dan akuntabel sesuai aturan yang berlaku.'),
(8, 'Pemberdayaan Masyarakat', 'Kelurahan bertugas meningkatkan partisipasi dan potensi warga melalui pembentukan dan pendampingan kelompok-kelompok'),
(9, 'Pelayanan Perizinan', 'Kelurahan menjadi tempat pertama untuk mengurus berbagai izin lokal, seperti izin usaha kecil, izin keramaian, dan rekomendasi yang diperlukan sebelum mengajukan perizinan ke tingkat yang lebih tinggi. Surat pengantar dari kelurahan sering menjadi prasyarat bagi banyak izin formal.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `id_agenda` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id_galeri` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  MODIFY `id_layanan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
