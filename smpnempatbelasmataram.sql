/*
 Navicat Premium Data Transfer

 Source Server         : Localhost 57
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : smpnempatbelasmataram

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 23/12/2020 07:54:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for carousel
-- ----------------------------
DROP TABLE IF EXISTS `carousel`;
CREATE TABLE `carousel`  (
  `carousel_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `carousel_judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `carousel_uraian` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `carousel_gambar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`carousel_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of carousel
-- ----------------------------
INSERT INTO `carousel` VALUES (8, 'Selamat Datang Di', 'Situs Resmi SMPN 14 Mataram', '/uploads/carousel/1608187895CLbvD9HLNOLh2i9K.jpg');
INSERT INTO `carousel` VALUES (9, 'SMPN 14 Mataram', 'Galang Potensi & Raih Prestasi', '/uploads/carousel/1608187965AA8W85hAfVq04fOu.jpg');

-- ----------------------------
-- Table structure for ekskul
-- ----------------------------
DROP TABLE IF EXISTS `ekskul`;
CREATE TABLE `ekskul`  (
  `ekskul_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ekskul_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ekskul_gambar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ekskul_uraian` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`ekskul_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ekskul
-- ----------------------------
INSERT INTO `ekskul` VALUES (4, 'BOLA VOLI', '/uploads/ekskul/1605150782gxjgjDYIorEp5OZM.jpg', 'Olah Raga');
INSERT INTO `ekskul` VALUES (6, 'BOLA BASKET', '/uploads/ekskul/1608191010ApxZzmtxWP37YHMs.jpg', 'Olah Raga');

-- ----------------------------
-- Table structure for gallery
-- ----------------------------
DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery`  (
  `gallery_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `gallery_judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `gallery_gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `sembunyikan` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`gallery_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for guru
-- ----------------------------
DROP TABLE IF EXISTS `guru`;
CREATE TABLE `guru`  (
  `guru_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `guru_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `guru_gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `mapel_id` bigint(20) NULL DEFAULT NULL,
  PRIMARY KEY (`guru_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of guru
-- ----------------------------
INSERT INTO `guru` VALUES (7, 'DRA. NOOR ZAENAH', '/uploads/guru/1608272792OFDaWM35wU5ZXye0.jpg', 14);
INSERT INTO `guru` VALUES (8, 'LALU ARTANIS, S.PD.I', '/uploads/guru/1608272840lANg7kLnvt5xO9a9.jpg', 15);
INSERT INTO `guru` VALUES (9, 'MURIDUN, S.AG', '/uploads/guru/1608272863ho71lpEhjOdYZeO9.jpg', 9);

-- ----------------------------
-- Table structure for informasi
-- ----------------------------
DROP TABLE IF EXISTS `informasi`;
CREATE TABLE `informasi`  (
  `informasi_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `informasi_jumlah` int(11) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of informasi
-- ----------------------------
INSERT INTO `informasi` VALUES ('Siswa Laki-Laki', 419);
INSERT INTO `informasi` VALUES ('Siswa Perempuan', 335);
INSERT INTO `informasi` VALUES ('Tenaga Pendidik', 43);
INSERT INTO `informasi` VALUES ('Rombongan Belajar', 24);

-- ----------------------------
-- Table structure for kegiatan
-- ----------------------------
DROP TABLE IF EXISTS `kegiatan`;
CREATE TABLE `kegiatan`  (
  `kegiatan_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `kegiatan_judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kegiatan_gambar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kegiatan_isi` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `operator` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kegiatan_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kegiatan
-- ----------------------------
INSERT INTO `kegiatan` VALUES (1, 'Ombudsman NTB Desak Pemkot Atensi SMPN 14 Mataram', '/uploads/kegiatan/1608271743SGeErGIXpH4wJNbR.jpg', '<p>Ombudsman Republik Indonesia (ORI) Perwakilan NTB meminta agar Pemkot memberikan perhatian serius atas penyelesaian penggunaan gedung belajar SMPN 14 oleh SD Model Mataram.</p>', 'Administrator', '2020-12-17 00:00:00', '2020-12-17 00:00:00');
INSERT INTO `kegiatan` VALUES (6, 'TIM SISWI SMPN 14 MATARAM JUARA 1 KRIKET', '/uploads/kegiatan/1608272090HA7jQa6TcV1cTrzg.jpg', '<p>Prestasi membanggakan ditorehkan oleh siswi SMPN 14 Mataram, dalam ajang kejuaraan liga pelajar Cabang Olahraga (Cabor) Kriket tingkat Provinsi NTB yang diselenggarakan oleh Persatuan Cricket Indonesia (PCI) NTB<br></p>', 'Administrator', '2020-12-18 14:14:50', '2020-12-18 14:14:50');
INSERT INTO `kegiatan` VALUES (7, 'LCC, SMPN 14 MATARAM MAJU KE TINGKAT PROVINSI', '/uploads/kegiatan/1608272110SPZv0rqEP4Cit0E3.jpg', '<p>Berbagai upaya terus dilakukan Museum Negeri NTB, untuk mengenalkan sejarah dan budayadi NTB, khususnya benda bersejarah peninggalan masa lalu masyarakat Pulau Lombok dan Sumbawa.<br></p>', 'Administrator', '2020-12-18 14:15:10', '2020-12-18 14:15:10');

-- ----------------------------
-- Table structure for kepala_sekolah
-- ----------------------------
DROP TABLE IF EXISTS `kepala_sekolah`;
CREATE TABLE `kepala_sekolah`  (
  `kepala_sekolah_id` int(11) NOT NULL AUTO_INCREMENT,
  `kepala_sekolah_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kepala_sekolah_pengantar` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kepala_sekolah_data` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kepala_sekolah_gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kepala_sekolah_selogan` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updatet_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kepala_sekolah_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kepala_sekolah
-- ----------------------------
INSERT INTO `kepala_sekolah` VALUES (3, 'H. Chamim Tohari, S.Pd', '<p>Dengan memanjatkan puji syukur kehadirat Allah SWT Tuhan Yang Maha Esa atas segala karunia yang diberikan kepada kita, semoga kita tergolong hamba-hamba yang pandai mensykuri nikmat-Nya.</p><p><br></p><p>Tahun pelajaran baru 2020/2021 sudah ditetapkan dimulai tanggal 13 Juli Tahun 2020/2021. Namun situasi daerah kita yang masih menjadi pandemi covid 19, maka kegiatan awal tahun pelajaran baru dimulai dengan kegiatan persiapan MPLS (MAsa Pengenalan Lingkungan Sekolah) dari tanggal 13 Juli s/d 18 Juli dan pelaksanaan MPLS dijadwalkan tanggal 20 s/d 25 Juli Tahun 2020 dengan menggunakan mode daring (dalam jaringan)/on line. Kami berharap kepada bapak/ibu wali murid untuk bersama-sama mendukung kegiatan MPLS anak-anak kita, sehingga anak-anak bias mengenal lingkungan sekolah yang menjadi tempat belajarnya, jika kondisi sudah diizinkan oleh gugus tugas penanganan covid 19 anak masuk sekolah.</p><p><br></p><p>Kami sampaikan selamat bergabung anak-anakku di SMP Negeri 14 Mataram dengan VISI ; \"Berprestasi, Berbudaya Berlandaskan Iman dan Taqwa\" serta Motto ; \"Galang Potensi Raih Prestasi\". Ayo kita kembangkan prestasi anak-anak kita untuk meraih prestasi yang setinggi-timngginya dengan akhlak mulia. Dan juga mari kita dekung program pemerintah dalam mencegah penyebaran Virus Corona dengan membiasakan :</p><p><br></p><p>Pakai masker apabila keluar rumah</p><p>Cuci tangan pakai sabun</p><p>Jaga jarak/social destencing</p><p>Hindari kerumanan orang banyak</p>', '<div><b>Pangkat Golongan :</b></div><div>Pembina Tk. I, IV/b</div><div>NIP. 19680711 199103 1 013</div><div>Pendidikan Terakhir : S2</div><div>di UNDIKSHA Singaraja</div>', '/uploads/posting/1608187228AX8s316a34ZuGRIQ.jpg', 'Kami sampaikan selamat bergabung anak-anakku di SMP Negeri 14 Mataram dengan VISI ; \"Berprestasi, Berbudi Berlandaskan Iman dan Taqwa\" serta Motto ; \"Galang Potensi Raih Prestasi\". Ayo kita kembangkan prestasi anak-anak kita untuk meraih prestasi yang setinggi-timngginya dengan akhlak mulia.<br>', NULL, NULL);

-- ----------------------------
-- Table structure for kontak
-- ----------------------------
DROP TABLE IF EXISTS `kontak`;
CREATE TABLE `kontak`  (
  `kontak_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `kontak_uraian` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kontak_alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kontak_telp` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kontak_email` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kontak_gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kontak_kota` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kontak_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kontak
-- ----------------------------
INSERT INTO `kontak` VALUES (1, '<p>Dengan VISI ; \"Berprestasi, Berbudi Berlandaskan Iman dan Taqwa\" serta Motto ; \"Galang Potensi Raih Prestasi\". Ayo kita kembangkan prestasi anak-anak kita untuk meraih prestasi yang setinggi-timngginya dengan akhlak mulia. Dan juga mari kita dekung program pemerintah dalam mencegah penyebaran Virus Corona.</p>', 'Jl. Brawijaya No.23, Cakranegara Selatan Baru', '(0370) 633199', 'smpn14mataram@gmail.com', '/uploads/kontak/1608252257Foe1HGuXrPTZg7xI.jpg', 'Kota Mataram - Nusa Tenggara Barat');

-- ----------------------------
-- Table structure for mapel
-- ----------------------------
DROP TABLE IF EXISTS `mapel`;
CREATE TABLE `mapel`  (
  `mapel_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `mapel_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`mapel_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mapel
-- ----------------------------
INSERT INTO `mapel` VALUES (2, 'Guru Prakarya');
INSERT INTO `mapel` VALUES (3, 'Guru Matematika');
INSERT INTO `mapel` VALUES (5, 'Guru IPA');
INSERT INTO `mapel` VALUES (6, 'Guru IPS');
INSERT INTO `mapel` VALUES (7, 'Guru Bahasa Indonesia');
INSERT INTO `mapel` VALUES (8, 'Guru Bahasa Inggris');
INSERT INTO `mapel` VALUES (9, 'Guru Agama Islam');
INSERT INTO `mapel` VALUES (10, 'Guru Penjaskes');
INSERT INTO `mapel` VALUES (11, 'Guru PKN');
INSERT INTO `mapel` VALUES (12, 'Guru Seni Budaya');
INSERT INTO `mapel` VALUES (14, 'Kepala TU');
INSERT INTO `mapel` VALUES (15, 'Wakasek Humas');

-- ----------------------------
-- Table structure for pengguna
-- ----------------------------
DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE `pengguna`  (
  `pengguna_id` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pengguna_sandi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pengguna_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`pengguna_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pengguna
-- ----------------------------
INSERT INTO `pengguna` VALUES ('administrator', '$2y$10$8D1JqX6wwuCZuKMRYaIw3O2adcJyxEKxCsiA73cv3ASeyxxD2xbXa', 'Administrator');

-- ----------------------------
-- Table structure for peserta_didik
-- ----------------------------
DROP TABLE IF EXISTS `peserta_didik`;
CREATE TABLE `peserta_didik`  (
  `peserta_didik_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `peserta_didik_file` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `peserta_didik_kelas` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `peserta_didik_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`peserta_didik_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of peserta_didik
-- ----------------------------
INSERT INTO `peserta_didik` VALUES (2, '/uploads/pesertadidik/1605060094jHXfnCopG73CCm1T.pdf', 'IX', 'DAFTAR NAMA SISWA KELAS IX TAHUN 2020');
INSERT INTO `peserta_didik` VALUES (3, '/uploads/pesertadidik/1605060169IvtXib80NkWU9Wjp.pdf', 'VIII', 'DAFTAR NAMA SISWA KELAS VIII TAHUN 2020');
INSERT INTO `peserta_didik` VALUES (4, '/uploads/pesertadidik/1605060240rYIJJN0OBBSfjhM4.pdf', 'VII', 'DAFTAR  NAMASISWA KELAS VIITAHUN 2020');
INSERT INTO `peserta_didik` VALUES (6, '/uploads/pesertadidik/16053376010OoXv7YGtOqARrya.pdf', 'VIII', 'Peserta Didik Kelas VIII');

-- ----------------------------
-- Table structure for posting
-- ----------------------------
DROP TABLE IF EXISTS `posting`;
CREATE TABLE `posting`  (
  `posting_jenis` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `posting_judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `posting_isi` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `posting_deskripsi` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `posting_gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `operator` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`posting_jenis`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of posting
-- ----------------------------
INSERT INTO `posting` VALUES ('Tentang Sekolah', 'Tentang Sekolah', '<p><b>PROFIL SEKOLAH</b></p>\r\n<p>Bulan desember 1992 SMP Negeri 2 Cakranegara pindah gedung ke lokasi jalan Lalu Mesir di Babakan, maka cikal bakal SMP Negeri 4 yang berfilial mengikutinya. Pada awal 20 Maret 1993 cikal bakal SMP Negeri 4 Cakranegara pindah menempati gedung sendiri yang berlokasi di jalan Brawijaya No.23 sampai dengan sekarang, dengan rombongan belajar 1 kelas dua dan 2 kelas satu dengan jumlah ruang belajar 5 ruang dan 1 ruang Laboratorium dan PLH Kepala Sekolah adalah Ibu B. Nurlaili.</p>\r\n<p>Pada tanggal 23 Agustus 1993 dikeluarkan SK berdiri dan sekaligus DIK sekolah terhitung sejak tanggal 01 April 1993 dengan SK Nomor:0313/o/1993, tentang Pembukaandan Penegerian Sekolah Tahun Pelajaran 1992/1993, tanggal 23 Agustus 1993 dengan nama SMP Negeri 4 Cakranegara, Tipe C dengan 5 ruang belajar.</p>\r\n<p>Pada tanggal 07 Maret 1997 dikeluarkan SK perubahan nama Sekolah dengan SK Nomor: 034/O/1997, tentang Perubahan Nomenklatur SMP Menjadi SLTP serta Organisasi dan Tata Kerja SLTP, dengan nama SLTP Negeri 14 Mataram.</p>\r\n<p><b>SEJARAH KEPEMIMPINAN SMPN 14 MATARAM</b></p>\r\n<ol>\r\n   <li>\r\n	<b>1991</b><ul>\r\n		<li>Penanggungjawab Bapak Ketjir Yasa, selaku kepala SMP Negeri 2 Cakranegara dari Juli 1991 s.d. 23 Agustus 1993.</li>\r\n		<li>PLH Kepala Sekolah B.Nurlaili, Maret 1993 s.d. 23 Agustus 1993.</li>\r\n	</ul>\r\n   </li>\r\n   <li><b>1993</b>\r\n	<ul>\r\n		<li> Kepala Sekolah Definitif (Pertama) Nurlaili, 23 Agustus 1993 s.d. 19 Juli 1998</li>\r\n	</ul>\r\n   </li>\r\n   <li><b>1998</b>\r\n	<ul> \r\n		<li>Kepala Sekolah (Kedua) Hj. Surayani, 19 Juli 1998 s.d. 21 Februari 2004.</li>\r\n		<li>Kepala Sekolah (Ketiga) Dra. Baiq Mauri, 21 Februari 2004.</li>\r\n		<li>PLT Lalu Muhammad Anwar 2008.</li>\r\n	</ul>\r\n   </li>\r\n   <li><b>2008</b>\r\n	<ul> \r\n		<li>Kepala Sekolah (Keempat) Syahtum, S.Si., Mei 2008-2014.</li>\r\n<li>Kepala Sekolah (Kelima) H. Abdul Khalik, S.Pd 2015-2016.</li>\r\n<li>Kepala Sekolah (Keenam)Drs. Mukh. Nazuhi 2016-2019.</li>\r\n<li>Kepala Sekolah (Ketujuh) H. Chamim Tohari, S.Pd 2019-Sekarang</li>\r\n	</ul>\r\n   </li>\r\n</ol>', NULL, NULL, 'Administrator', '2020-12-21 08:58:51', '2020-12-21 08:58:51');
INSERT INTO `posting` VALUES ('Visi Misi', 'Visi Misi', '<p>Berprestasi, Berbudaya Berlandaskan Iman dan Taqwa</p><p>Motto ;<b> \"Galang Potensi Raih Prestasi\"</b></p><p>Ayo kita kembangkan prestasi anak-anak kita untuk meraih prestasi yang setinggi-timngginya dengan akhlak mulia. Dan juga mari kita dekung program pemerintah dalam mencegah penyebaran Virus Corona dengan membiasakan memakai masker apabila keluar rumah, mencuci tangan pakai sabun, menjaga jarak/social destancing dan menghindari kerumanan orang banyak.</p>', NULL, NULL, 'Administrator', '2020-12-17 15:16:08', '2020-12-17 15:16:08');

-- ----------------------------
-- Table structure for prestasi
-- ----------------------------
DROP TABLE IF EXISTS `prestasi`;
CREATE TABLE `prestasi`  (
  `prestasi_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `prestasi_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `prestasi_gambar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `prestasi_uraian` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `prestasi_tingkat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `prestasi_kategori` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`prestasi_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of prestasi
-- ----------------------------
INSERT INTO `prestasi` VALUES (11, 'Lomba Cerdas Cermat', '/uploads/prestasi/1608250063nXHi6RHLLH8aMS6o.jpg', 'Tim Lomba Cerdas Cermat SMPN 14 Mataram lolos ke tingkat Provinsi untuk mewakili Kota Mataram', 'Tingkat Provinsi', 'akademik');
INSERT INTO `prestasi` VALUES (12, 'Juara III MTQ', '/uploads/prestasi/16082495851SJ6mRgNOPMRn2J0.jpg', 'Salah satu siswa SMPN 14 Mataram berhasil meraih Juara ke III pada gelaran MTQ Tingkat Provinsi NTB', 'Tingkat Provinsi', 'nonakademik');

-- ----------------------------
-- Table structure for profil
-- ----------------------------
DROP TABLE IF EXISTS `profil`;
CREATE TABLE `profil`  (
  `profil_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `profil_isi` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`profil_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of profil
-- ----------------------------
INSERT INTO `profil` VALUES (1, NULL);
INSERT INTO `profil` VALUES (2, NULL);
INSERT INTO `profil` VALUES (3, NULL);

-- ----------------------------
-- Table structure for siswa
-- ----------------------------
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa`  (
  `siswa_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `siswa_kelas` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `siswa_jumlah` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`siswa_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of siswa
-- ----------------------------
INSERT INTO `siswa` VALUES (1, 'Data Peserta Didik Kelas VII', 293);
INSERT INTO `siswa` VALUES (2, 'Data Peserta Didik Kelas VIII', 253);
INSERT INTO `siswa` VALUES (3, 'Data Peserta Didik Kelas IX', 208);

-- ----------------------------
-- Table structure for tenaga_pendidik
-- ----------------------------
DROP TABLE IF EXISTS `tenaga_pendidik`;
CREATE TABLE `tenaga_pendidik`  (
  `tenaga_pendidik_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tenaga_pendidik_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `mapel_id` bigint(255) NULL DEFAULT NULL,
  `tenaga_pendidik_kriteria` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tenaga_pendidik_nip` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tenaga_pendidik_foto` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`tenaga_pendidik_id`) USING BTREE,
  INDEX `tenaga_pendidik_mapel_id_foreign`(`mapel_id`) USING BTREE,
  CONSTRAINT `tenaga_pendidik_mapel_id_foreign` FOREIGN KEY (`mapel_id`) REFERENCES `mapel` (`mapel_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 38 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tenaga_pendidik
-- ----------------------------
INSERT INTO `tenaga_pendidik` VALUES (1, 'Hj. TRI NURYANTI, . S.Pd', 8, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (2, 'DIDI MARTEDI, .S.Pd', 5, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (3, 'SUNDRADEP,.S.Pd', 11, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (4, 'BURHANUDDIN, M.Pd', 7, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (5, 'Hj. BAIQ RATNA wAHYUNINGSIH,. S.Pd', 3, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (6, 'I GST AYU RINDIWATI,. SPd', 3, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (7, 'ENGGAR RUJIATI, S.Pd', 6, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (8, 'Drs.  NI MADE KEMBAR SAILANTINI,. M.Pd', 7, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (9, 'NURLAILI  ANRAM, S.Pd', 11, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (10, 'NURLAILI  ANRAM, S.Pd', 11, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (11, 'JUMIRAN, S.Pd', 2, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (12, 'JOKO PRASETYO, S.Pd', 3, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (13, 'Hj. SAMIATI,S.Pd', 6, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (14, 'Hj. ERNAAWATI PRABANDARI,. S.Pd', 12, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (15, 'HAIRIAN, S.Pd', 7, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (16, 'MAKSUD,. S.Pd', 3, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (17, 'SUPRIADI,S.Pd', 10, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (18, 'ERLIN  HARMONI, . S.Pd', 8, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (19, 'LAYLA CHAIRUNNISYA,. S.Pd', 8, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (20, 'Drs. AGUSTONO,. S.Pd', 8, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (21, 'Drs. WASIS UTOMO, S.Pd', 7, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (22, 'HARTANTI PANCA MANDIKAWATI, S.Pd', 3, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (24, 'IDA BAGUS BANGLI  SWAHA,S.Pd', 5, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (25, 'DIAN ERMAYANTI,. S.Pd', 7, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (26, 'Hj. HASNAH, S.Pd', 9, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (27, 'Hj. NURAINI, S.Ag', 9, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (28, 'SEGEM, S.Pd', 9, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (29, 'Drs. I  WAYAN PUNIYASA,. S.Pd', 9, 'PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (30, 'RANNI  ZURIYATNA  UTAMI,. ST', 2, 'Non PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (31, 'DIANA  AMALIA, S.Pd', 2, 'Non PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (32, 'I  WAYAN SUBAWA,. SH', 9, 'Non PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (33, 'AHMAD  MU\' AMMA N.S. Sos, i,. M.Pdi, I', 9, 'Non PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (34, 'RISDIAYANTO, .S Pd', 10, 'Non PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (35, 'MELY  SUKMAWANDARI, S.Pd', 3, 'Non PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (36, 'EKA  ANDYATI, S.Pd', 8, 'Non PNS', NULL, NULL);
INSERT INTO `tenaga_pendidik` VALUES (37, 'MUSHAITIR, .S.Pd', 7, 'Non PNS', NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
