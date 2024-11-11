-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2024 at 06:30 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zakat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tulisan`
--

CREATE TABLE `tbl_tulisan` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) DEFAULT 0,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL DEFAULT 0,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_tulisan`
--

INSERT INTO `tbl_tulisan` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`) VALUES
(20, 'SEJUMLAH PESERTA DIDIK SMAN 78 MASUK PTN MELALUI JALUR PRESTASI', '<p>Tahun Pelajaran 2018/2019 Sejumlah Peserta didik SMAN 78 Jakarta di terima di perguruan Tinggi Negeri melalui Jalur prestasi, diantaranya masuk melalui jalur Seleksi Nasional Perguruan tinggi Negeri (SNMPTN) berjumlah 58 siswa.</p>\r\n\r\n<p>Mereka merupakan putra putri terbaik yang memiliki prestasi akademik 40% terbaik di sekolah dan terseleksi melalui jalur raport tanpa test. Kampus yang bakal mereka tempati seperti di UI, ITB, UGM, UNJ dan lain sebagainya.</p>\r\n\r\n<p>Selain melalui jalur SNMPTN ada juga sebanyak 34 siswa dari SMAN 78 Jakarta juga diterima di jalur prestasi dan pemerataan kesempatan Belajar Universitas Indonesia (PPKB Paralel UI) yaitu salah satu jalur penerimaan yang di selenggarakan oleh UI yang menggunakan nilai raport tanpa test untuk siswa-siswi yang berminat melanjutkan pendidikan tingginya di Universitas Indonesia.</p>\r\n\r\n<p>Sedangkan 1 siswa SMAN 78 atas nama Rachmadana Fajri Majid juga merupakan salah satu siswa yang diterima di UI melalui jalur Talent Scouting, yaitu satu jalauryang diselenggarakan oleh kampus UI melalui jalur raport tanpa test untuk program Kleas Internasional.</p>\r\n\r\n<p>Satu hal lagi yang juga patut kita syukuri adalah Beberapa siswa SMAN 78 juga telah diterima di perguruan tinggi luar Negeri seperti Jepang, Kanada, dan belanda, baik melalaui jalur tes maupun beasiswa yang diselenggarakan oleh Pihak Universitas di Luar Negeri.</p>\r\n\r\n<p>Proses seleksi yang harus mereka lewati tidak hanya melalui nilai prestasi akademik tetapi juga prestasi non akademik, Kemampuan bahasa asing yang dibuktikan dengan sertifikat, penulisan Essay dan juga wawancara. Siswa-siswi tidak hanya berkompetisi dengan siswa dari dalam negeri saja tetapi mereka juga harus bersaing dengan pelajar seluruh dunia. Semoga sukses.</p>\r\n', '2020-02-05 02:24:42', 1, 'Pendidikan', 28, '4add43a5d93fc3ba8a81869127e11f99.jpg', 1, 'Muris Studio', 0, 'sejumlah-peserta-didik-sman-78-masuk-ptn-melalui-jalur-prestasi'),
(22, 'UPACARA HARI LAHIR PANCASILA 1 JUNI DI SMAN 78 JAKARTA BERLANGSUNG KHIDMAD', '<p>Hari Sabtu, 1 Juni 2019 bertepatan dengan 27 Ramadhan 1440 H, SMA Negeri 78 Jakarta melaksanakan Upacara hari kelahiran Pancasila bertempat di lapangan sekolah.</p>\r\n\r\n<p>Ada yang menarik dari upacara kali ini karena pertama: bertepatan dengan bulan suci Ramadhan hari yang ke 27 dan beberapa guru maupun karyawan ada yang sudah pulang kampung halaman dalam menyambut hari raya Idul Fitri, kedua : Kepala sekolah meminta agar yang sudah pulang kampung ikut melaksanakan upacara di wilayah masing-masing dengan bergabung ke sekolah atau instansi terdekat.</p>\r\n\r\n<p>Mantap ternyata integritas tetap terjaga, anjuran dari Bapak Kepala Sekolah (Dr. Saryono, M.Si) dilaksanakan dengan penuh amanah terpantau beberapa guru dan karyawan SMAN 78 melaksanakan Upacara hari lahir pancasila di SMAN 6 Jogjakarta, SMAN 1 Gombong-jateng SMAN 2 PLG, SMAN 1 Leuwiliang Bogor, SMAN 1 Simo Boyolali, SMPN 1 Gombong, dan lain sebagainya. Laporan ini didapat dari bukti fisik berupa foto dan surat keterangan melaksanakan upacara yang ditandatangani oleh kepala sekolahnya.</p>\r\n\r\n<p>Mereka disambut dengan senang hati. Salah satu peserta upacara dari SMAN 78 Jakarta ( Ibu Yuliana Guru Kimia) yang upacara di SMAN 1 Simo Boyolali menuturkan &quot; Kami di sambut dengan sangat welcome, senang sekali rasanya&quot;. Di SMAN 78 Jakarta upacara juga berlangsung dengan khidmad, peserta upacara dari unsur pendidik, tenaga kependidikan dan peserta didik.</p>\r\n\r\n<p>Petugas pembina upacara Kepala Sekolah Dr. Saryono, Msi, petugas lainya dari unsur ekskul Paskib, Ekskul PKS dan Paduan Suara dengan menyanykan lagu Garuda pancasila dan Mars SMAN 78 Jakarta. Dalam sambutannya Kepala sekolah mengatakan &quot; Mari bersama-sama kita semua mengimplementasikan Pancasila dalam kehidupan sehari-hari sebagai wujud kecintaan kita pada NKRI dan Pancasila&quot;.</p>\r\n\r\n<p>&quot;Saya Indonesia&quot; peserta upacara menjawab&quot; Saya Pancasila &quot; kalimat penutup pembina upacara hari kelahiran Pancasila dan juga di akhiri dengan tepuk tangan seluruh peseta upacara. Sekian dan terima kasih.</p>\r\n', '2020-02-05 02:24:42', 3, 'Sains', 9, 'a49888c350ee1037ab856b95ac26aa03.jpg', 1, 'Muris Studio', 0, 'upacara-hari-lahir-pancasila-1-juni-di-sman-78-jakarta-berlangsung-khidmad'),
(23, 'PELEPASAN PESERTA DIDIK KELAS XII ANGKATAN KE- 42', '<p>Kegiatan Pelepasan Peserta didik Kelas XII anggkatan KE 42 di laksanakan di Hotel Pullman Jakarta tanggal 13 Mei 2019 dalam suasana Bulan Ramadhan 1440 H.</p>\r\n\r\n<p><br />\r\nMeskipun dilaksanakan pada bulan puasa acara tetap berlangsung kidmad dan lancar. Acara pelepasan ini di hadiri oleh Kepala Suku Dinas Pendidikan Wilayah Jakarta Barat 2 Ibu Urip Asih, M.Pd, Pengawas SMAN 78 Ibu Hj.Nurul Muftahidah,M.Pd, Komite sekolah, Perwakilan Ikatan Alumni Sekolah (IAS), guru purna bhakti, dan orang tua siswa yang sangat berbahagia melihat putra putrinya lulus dari jenjang SMA dengan prestasi yang membanggakan.</p>\r\n\r\n<p>Dalam Sambutannya Kepala SMAN 78 Jakarta Dr. Saryono, M.si Mengatakan bahwa &quot;stakesholder Sekolah harus mampu melayani sepenuh hati untuk mendulang prestasi dan menjaga Prestasi&quot;.</p>\r\n\r\n<p>Tahun ini (Tahun pelajaran 2018/2019) Kita patut bersyukur karena banyak prestasi yang bisa diraih oleh SMAN 78 diantaranya: 87 siswa mendapat nilai 100, rangking 5 besar UN tingkat DKI Jakarta untuk program Ilmu-ilmu Sosial. Acara Pelepasan kelas XII ini Juga dimeriahkan oleh penampilan Ekskul Paduan suara, Tari, Marawis dan solo vokal.</p>\r\n\r\n<p>Ada yang beda dari pelaksanaan pelepasan tahun ini yang biasanya diselenggarakan di lapangan sekolah kali ini dilaksanakan di luar sekolah, tentu kegiatan ini didukung oleh orang tua siswa, komite serta Ikatan Alumni Sekolah.</p>\r\n', '2020-02-05 02:24:42', 5, 'Penelitian', 6, '217410a33b775e40cbdc57e079ce2b4c.jpg', 1, 'Muris Studio', 0, 'pelepasan-peserta-didik-kelas-xii-angkatan-ke--42'),
(24, 'DUA SISWA SMA NEGERI 78 MENGIKUTI JAMBORE KEPANDUAN SEDUNIA KE- 24 DI VIRGINIA, AMERIKA SERIKAT', '<p>Raden Akbar Wira Dharma kelas XI MIPA E dan M. Raihan Adityaputra kelas XI MIPA C adalah dua siswa terbaik SMA Negeri 78 Jakarta mendapat kesempatan mengikuti kegiatan Jambore Kepanduan sedunia ke-24 tahun 2019. 24th World Scout Jamboree 2019 Kegiatan ini diikuti sekitar 50.000 peserta dari 170 negaradan teritori. Kegiatan jambore dunia ini di laksanakan dari tanggal 22 Juli sampai 2 Agustus 2019 bertempat di Summit Bechtel Reserve, West Virginia, Amerika Serikat.</p>\r\n\r\n<p>Kegiatan Kepanduan Jambore dunia ke- 24 ini mengangkat tema &#39;membuka kunci dunia&#39;. Semoga kegiatan ini memberikan pencerahan dalam dunia kepanduan dan masing-masing peserta memiliki kompetensi unggul dalam bidang kepramukaan sehingga punya kontribusi dalam memajukan kegiatan kepramukaan di sekolahnya. Kepal a SMA Negeri 78 Jakarta DR. Saryono, M.Si mengatakan&#39;Selamat untuk siswa dari 78 kalian tunas bangsa hebat bisa mengikuti Jambore dunia, raih pengalamn sebanyak-banyaknya dan bagikan kepada teman-teman yang lain , sehingga kegiatan kepramukaan di SMA Negeri 78 akan lebih baik&#39;.</p>\r\n', '2020-02-05 02:24:42', 6, 'Prestasi', 163, '9e67a59d62319ae27a5d7b87688faaf7.jpg', 1, 'Muris Studio', 0, 'dua-siswa-sma-negeri-78-mengikuti-jambore-kepanduan-sedunia-ke--24-di-virginia,-amerika-serikat'),
(25, 'Membangun Mutu Pendidikan Melalui Kemitraan Sekolah', '<p>Lima hari di Malinau memberikan pengalaman yg menorehkan warna dalam hidupku.<br />\r\nTugas yg diberikan Kemendikbud satu persatu aku tunaikan. Hari pertama kunjungan ke SMAN 1 mendapat sambutan yg hangat penuh persahabatan, didahului upacara bendara dan tarian khas 4 budaya: Tidung,Bugis,Dayak Lundayeh,dan Dayak Kenya. Anak2 yg gagah dan cantik, menyajikan hiburan penuh kegembiraan.</p>\r\n\r\n<p>Hari kedua ke SMAN 3 dan hari ketiga ke SMAN 8 hampir sama tetapi tanpa tarian khas etnis Tidung dan Bugis. Namun tidak mengurangi kesemaraan seremonial pagi itu.</p>\r\n\r\n<p>Segenap warga sekolah tumpah di lapangan merasakan kegembiraan. Supervisi thd 2 guru matematika di dua sekolah yg berbeda memberi informasi bahwa pemerintah tidak boleh merasa lelah untuk terus memberi penguatan tentang konsep pembelajaran abad 21 dg dimensi :4C,Literasi dan Character Building.</p>\r\n\r\n<p>Di hari terakhir supervisi guru matemtika barulah saya mendapakan seorang guru muda, energik,suara lantang, menguasai konsep dan melakukan pendekatan pembelajaran yg mencerdaskan, membangun konsep, dg alat bantu yg kreatif, suasana kelas hidup, dan anak2 bahagia mengikuti pelajaran. Panggilan singkat guru muda tsb Pak Tri (30 ) terlihat menerapkan metode 4C, mengajak anak browsing (literasi), dan mengajak siswa bersyukur atas anugrah yg diberikan Tuhan ( membangun karakter ).</p>\r\n\r\n<p>Pemerintah melalui berbagai program harus terus membangun kompetensi profesional guru. Fokus penguatan tetap metode pada metide pembelajaran abad 21. Kurikulum 2013 dg pendekatan pembelajaran abad 21 diharapkan dpt mencerdaskan anak2 Indonesia.</p>\r\n', '2020-02-05 02:24:42', 1, 'Pendidikan', 22, '67b03f7b75700396f6ca684c052c83a9.jpg', 1, 'Muris Studio', 0, 'membangun-mutu-pendidikan-melalui-kemitraan-sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `t_amil`
--

CREATE TABLE `t_amil` (
  `id_amil` int(11) NOT NULL,
  `nama_amil` varchar(30) NOT NULL,
  `no_hp_amil` varchar(14) NOT NULL,
  `alamat_amil` varchar(50) NOT NULL,
  `id_mesjid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `t_amil`
--

INSERT INTO `t_amil` (`id_amil`, `nama_amil`, `no_hp_amil`, `alamat_amil`, `id_mesjid`) VALUES
(1, 'Sutoyo', '0821123123', 'Jl. Durianni', 2),
(2, 'Mahmud', '0813121321', 'Jl. Pepaya', 3),
(3, 'Alfi Maudytia', '085781190303', 'Jl P Biak 9 Rt 007 Rw 018 No 224', 2),
(4, 'midi', 'midi123', 'erskim99@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_donasi`
--

CREATE TABLE `t_donasi` (
  `id_donasi` int(11) NOT NULL,
  `nama_donatur` varchar(50) NOT NULL,
  `no_hp_donatur` varchar(14) NOT NULL,
  `alamat_donatur` varchar(100) NOT NULL,
  `tgl_donasi` date NOT NULL,
  `total_donasi` int(11) NOT NULL,
  `bukti_donasi` varchar(250) NOT NULL,
  `tgl_validasi` date NOT NULL,
  `id_amil` int(11) NOT NULL,
  `status_validasi` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `t_donasi`
--

INSERT INTO `t_donasi` (`id_donasi`, `nama_donatur`, `no_hp_donatur`, `alamat_donatur`, `tgl_donasi`, `total_donasi`, `bukti_donasi`, `tgl_validasi`, `id_amil`, `status_validasi`) VALUES
(1, 'Wayoik', '0823198938123', 'Jl. Melati', '2020-03-11', 45000, './assets/img/bukti_donasi/bukti1.jpeg', '2020-03-12', 2, '1'),
(2, 'Tukimin', '0812983912', 'Jl. Merpati', '2020-03-11', 80000, './assets/img/bukti_donasi/bukti2.jpeg', '2020-03-12', 2, '1'),
(3, 'Sunarto', '0182399123', 'Jl. Naga Sakti', '2020-03-12', 100000, './assets/img/bukti_donasi/bukti3.jpeg', '2020-03-12', 2, '0');

-- --------------------------------------------------------

--
-- Table structure for table `t_infak`
--

CREATE TABLE `t_infak` (
  `id_infak` int(11) NOT NULL,
  `nama_pembayar` varchar(20) NOT NULL,
  `tgl_infak` date NOT NULL,
  `total_infak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `t_infak`
--

INSERT INTO `t_infak` (`id_infak`, `nama_pembayar`, `tgl_infak`, `total_infak`) VALUES
(1, 'Hiruzen', '2020-02-03', 4000),
(2, 'Sarutobi', '2020-02-03', 5000),
(3, 'Carlos', '2020-03-02', 150000),
(4, 'Sabiru', '2020-03-05', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `t_kritik_saran`
--

CREATE TABLE `t_kritik_saran` (
  `id_saran` int(11) NOT NULL,
  `tgl_saran` date NOT NULL,
  `nama_saran` varchar(50) NOT NULL,
  `subjek_saran` varchar(200) NOT NULL,
  `saran` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `t_kritik_saran`
--

INSERT INTO `t_kritik_saran` (`id_saran`, `tgl_saran`, `nama_saran`, `subjek_saran`, `saran`) VALUES
(1, '2020-03-06', 'test saran', 'test doang', ' haha hihi'),
(2, '2020-03-06', 'test2', 'hihi', 'huhu hehe'),
(3, '2020-03-11', 'haha', 'asjdasd', 'mxzncmnxc'),
(4, '2020-03-24', 'asdad', 'asdad', 'asdasd'),
(5, '2020-03-24', '', '', ''),
(6, '2020-03-24', 'haha', 'hihi', 'huhuhuhuhu');

-- --------------------------------------------------------

--
-- Table structure for table `t_mesjid`
--

CREATE TABLE `t_mesjid` (
  `id_mesjid` int(11) NOT NULL,
  `nama_mesjid` varchar(20) NOT NULL,
  `alamat_mesjid` varchar(50) NOT NULL,
  `RT` varchar(4) NOT NULL,
  `RW` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `t_mesjid`
--

INSERT INTO `t_mesjid` (`id_mesjid`, `nama_mesjid`, `alamat_mesjid`, `RT`, `RW`) VALUES
(1, 'Al-Huda', 'Jl. Garuda Sakti', '012', '002'),
(2, 'Baiturrahman', 'Jl. Bawal', '002', '001'),
(3, 'Al-Khairat', 'Jl. Paus', '008', '002'),
(4, 'Al-Jabbar', 'Jl. Simpang Baru', '003', '001');

-- --------------------------------------------------------

--
-- Table structure for table `t_pembayar`
--

CREATE TABLE `t_pembayar` (
  `id_pembayar` int(11) NOT NULL,
  `nama_pembayar` varchar(30) NOT NULL,
  `no_hp_pembayar` varchar(14) NOT NULL,
  `alamat_pembayar` varchar(50) NOT NULL,
  `id_mesjid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `t_pembayar`
--

INSERT INTO `t_pembayar` (`id_pembayar`, `nama_pembayar`, `no_hp_pembayar`, `alamat_pembayar`, `id_mesjid`) VALUES
(1, 'Hiruzen', '01823123', 'Jl. Rajawali', 2),
(2, 'Sarutobi', '2193898123', 'Jl. Pelangi', 3),
(3, 'Minato', '080819289123', 'Jl. Indah Karya', 2),
(4, 'Mizuki', '08129389123', 'Jl. Ambalang', 3),
(5, 'Sabiru', '081823123', 'Jl. Tulip', 2),
(6, 'yue', '09838', '33', 1),
(7, 'ari', '089273', 'barat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_pembayaran`
--

CREATE TABLE `t_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_zakat` int(11) NOT NULL,
  `id_amil` int(11) NOT NULL,
  `id_pembayar` int(11) NOT NULL,
  `tgl_penyerahan` date NOT NULL,
  `pembayaran_beras` double NOT NULL,
  `pembayaran_uang` int(11) NOT NULL,
  `jumlah_tanggungan` int(2) NOT NULL,
  `total_pembayaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `t_pembayaran`
--

INSERT INTO `t_pembayaran` (`id_pembayaran`, `id_zakat`, `id_amil`, `id_pembayar`, `tgl_penyerahan`, `pembayaran_beras`, `pembayaran_uang`, `jumlah_tanggungan`, `total_pembayaran`) VALUES
(1, 5, 2, 1, '2020-02-03', 2.7, 0, 3, '8.1'),
(2, 6, 2, 2, '2020-02-03', 0, 7000, 4, '28000'),
(3, 5, 1, 3, '2020-03-02', 2.5, 0, 5, '12.5'),
(4, 6, 2, 4, '2020-03-05', 0, 8333, 6, '50000'),
(5, 5, 2, 5, '2020-03-05', 0, 15000, 2, '30000');

-- --------------------------------------------------------

--
-- Table structure for table `t_pembayaranweb`
--

CREATE TABLE `t_pembayaranweb` (
  `id_pembayaran` int(11) NOT NULL,
  `id_zakat` int(11) NOT NULL,
  `nama_pembayar` varchar(50) NOT NULL,
  `no_pembayar` varchar(50) NOT NULL,
  `alamat_pembayar` varchar(50) NOT NULL,
  `masjid` varchar(50) NOT NULL,
  `jenis_zakat` varchar(50) NOT NULL,
  `jumlah_tanggungan` int(2) NOT NULL,
  `jenis_pembayaran` varchar(50) NOT NULL,
  `tgl_penyerahan` date NOT NULL,
  `pembayaran_beras` double NOT NULL,
  `pembayaran_uang` int(11) NOT NULL,
  `total_pembayaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_penerima`
--

CREATE TABLE `t_penerima` (
  `id_penerima` int(11) NOT NULL,
  `nama_penerima` varchar(30) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `alamat_penerima` varchar(30) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `t_penerima`
--

INSERT INTO `t_penerima` (`id_penerima`, `nama_penerima`, `kategori`, `alamat_penerima`, `status`) VALUES
(1, 'Si A', 'Fakir', 'Jl. Jalan', '1'),
(2, 'Si B', 'Fakir', 'Jl. Mawar', '1'),
(3, 'Si C', 'Miskin', 'Jl. Kamboja', '1'),
(4, 'Si D', 'Gharim', 'Jl. Kembang', '1'),
(5, 'Si E', 'Mualaf', 'Jl. Kartama', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_penerimaan`
--

CREATE TABLE `t_penerimaan` (
  `id_penerimaan` int(11) NOT NULL,
  `id_amil` int(11) NOT NULL,
  `id_penerima` int(11) NOT NULL,
  `tgl_penerimaan` date NOT NULL,
  `jumlah_penerimaan_uang` int(11) NOT NULL,
  `jumlah_penerimaan_beras` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `t_penerimaan`
--

INSERT INTO `t_penerimaan` (`id_penerimaan`, `id_amil`, `id_penerima`, `tgl_penerimaan`, `jumlah_penerimaan_uang`, `jumlah_penerimaan_beras`) VALUES
(1, 1, 1, '2020-03-02', 40000, 0),
(2, 1, 2, '2020-03-02', 40000, 0),
(3, 1, 3, '2020-03-02', 0, 4),
(4, 1, 4, '2020-03-02', 40000, 0),
(5, 1, 5, '2020-03-02', 0, 4),
(6, 1, 6, '2020-03-02', 0, 4),
(7, 1, 1, '2020-03-04', 35000, 0),
(8, 1, 2, '2020-03-04', 0, 3),
(9, 1, 3, '2020-03-04', 0, 3),
(10, 1, 4, '2020-03-04', 35000, 0),
(11, 1, 6, '2020-03-04', 35000, 0),
(12, 2, 1, '2020-03-10', 21600, 4.12),
(13, 2, 2, '2020-03-10', 21600, 4.12),
(14, 2, 3, '2020-03-10', 21600, 4.12),
(15, 2, 5, '2020-03-10', 21600, 4.12),
(16, 2, 6, '2020-03-10', 21600, 4.12),
(17, 2, 1, '2020-03-11', 18000, 3.4333333333333),
(18, 2, 2, '2020-03-11', 18000, 3.4333333333333),
(19, 2, 3, '2020-03-11', 18000, 3.4333333333333),
(20, 2, 4, '2020-03-11', 18000, 3.4333333333333),
(21, 2, 5, '2020-03-11', 18000, 3.4333333333333),
(22, 2, 6, '2020-03-11', 18000, 3.4333333333333);

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`username`, `password`, `status`, `level`) VALUES
('admin', 'admin123', 'aktif', 1),
('Alfi Maudytia', '085781190303', 'aktif', 2),
('Mahmud', '0813121321', 'aktif', 2),
('midi', 'midi123', 'aktif', 2),
('Sutoyo', '0821123123', 'aktif', 2);

-- --------------------------------------------------------

--
-- Table structure for table `t_zakat`
--

CREATE TABLE `t_zakat` (
  `id_zakat` int(11) NOT NULL,
  `jenis_zakat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `t_zakat`
--

INSERT INTO `t_zakat` (`id_zakat`, `jenis_zakat`) VALUES
(5, 'Zakat Fitrah'),
(6, 'Zakat Mal'),
(11, 'Zakat Fidiah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_amil`
--
ALTER TABLE `t_amil`
  ADD PRIMARY KEY (`id_amil`);

--
-- Indexes for table `t_donasi`
--
ALTER TABLE `t_donasi`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indexes for table `t_infak`
--
ALTER TABLE `t_infak`
  ADD PRIMARY KEY (`id_infak`);

--
-- Indexes for table `t_kritik_saran`
--
ALTER TABLE `t_kritik_saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `t_mesjid`
--
ALTER TABLE `t_mesjid`
  ADD PRIMARY KEY (`id_mesjid`);

--
-- Indexes for table `t_pembayar`
--
ALTER TABLE `t_pembayar`
  ADD PRIMARY KEY (`id_pembayar`);

--
-- Indexes for table `t_pembayaran`
--
ALTER TABLE `t_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `t_penerima`
--
ALTER TABLE `t_penerima`
  ADD PRIMARY KEY (`id_penerima`);

--
-- Indexes for table `t_penerimaan`
--
ALTER TABLE `t_penerimaan`
  ADD PRIMARY KEY (`id_penerimaan`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `t_zakat`
--
ALTER TABLE `t_zakat`
  ADD PRIMARY KEY (`id_zakat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_amil`
--
ALTER TABLE `t_amil`
  MODIFY `id_amil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_donasi`
--
ALTER TABLE `t_donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_infak`
--
ALTER TABLE `t_infak`
  MODIFY `id_infak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_kritik_saran`
--
ALTER TABLE `t_kritik_saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_mesjid`
--
ALTER TABLE `t_mesjid`
  MODIFY `id_mesjid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_pembayar`
--
ALTER TABLE `t_pembayar`
  MODIFY `id_pembayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_pembayaran`
--
ALTER TABLE `t_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_penerima`
--
ALTER TABLE `t_penerima`
  MODIFY `id_penerima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_penerimaan`
--
ALTER TABLE `t_penerimaan`
  MODIFY `id_penerimaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `t_zakat`
--
ALTER TABLE `t_zakat`
  MODIFY `id_zakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
