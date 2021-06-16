/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100414
 Source Host           : localhost:3306
 Source Schema         : bestplace

 Target Server Type    : MySQL
 Target Server Version : 100414
 File Encoding         : 65001

 Date: 16/06/2021 19:35:02
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_admin
-- ----------------------------
DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE `tbl_admin`  (
  `username` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fullname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`username`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_admin
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_image
-- ----------------------------
DROP TABLE IF EXISTS `tbl_image`;
CREATE TABLE `tbl_image`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_tempat` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `filename` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_image
-- ----------------------------
INSERT INTO `tbl_image` VALUES (1, '1', '16231681440.jpg');
INSERT INTO `tbl_image` VALUES (2, '1', '16231681441.jpg');

-- ----------------------------
-- Table structure for tbl_kategori
-- ----------------------------
DROP TABLE IF EXISTS `tbl_kategori`;
CREATE TABLE `tbl_kategori`  (
  `id_kategori` int NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ringkasan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kategori`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_kategori
-- ----------------------------
INSERT INTO `tbl_kategori` VALUES (1, 'Pantai', NULL, NULL);
INSERT INTO `tbl_kategori` VALUES (2, 'Gunung', NULL, NULL);
INSERT INTO `tbl_kategori` VALUES (3, 'Kebun Binatang', NULL, NULL);
INSERT INTO `tbl_kategori` VALUES (4, 'WIsata Edukasi', NULL, NULL);
INSERT INTO `tbl_kategori` VALUES (5, 'Wisata Religi', NULL, NULL);
INSERT INTO `tbl_kategori` VALUES (7, 'Kolam Renang', 'Tempat renang untuk rekreasi, pelatihan dan lain-lain', '1623340104.png');

-- ----------------------------
-- Table structure for tbl_kategori_tempat
-- ----------------------------
DROP TABLE IF EXISTS `tbl_kategori_tempat`;
CREATE TABLE `tbl_kategori_tempat`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_tempat` int NULL DEFAULT NULL,
  `id_kategori` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_kategori_tempat
-- ----------------------------
INSERT INTO `tbl_kategori_tempat` VALUES (1, 1, '1');

-- ----------------------------
-- Table structure for tbl_review
-- ----------------------------
DROP TABLE IF EXISTS `tbl_review`;
CREATE TABLE `tbl_review`  (
  `id_review` int NOT NULL AUTO_INCREMENT,
  `id_tempat` int NULL DEFAULT NULL,
  `rating` int NULL DEFAULT NULL,
  `komentar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `id_user` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_review`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_review
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_tempat
-- ----------------------------
DROP TABLE IF EXISTS `tbl_tempat`;
CREATE TABLE `tbl_tempat`  (
  `id_tempat` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ringkasan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_tempat`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_tempat
-- ----------------------------
INSERT INTO `tbl_tempat` VALUES (1, 'Kepulauan Raja Ampat', 'Kepulauan Raja Ampat merupakan rangkaian empat gugusan pulau yang berdekatan dan berlokasi di barat bagian Kepala Burung (Vogelkoop) Pulau Papua.', '<p>Kepulauan Raja Ampat merupakan tempat yang sangat berpotensi untuk dijadikan sebagai objek wisata, terutama wisata penyelaman. Perairan Kepulauan Raja Ampat menurut berbagai sumber, merupakan salah satu dari 10 perairan terbaik untuk diving site di seluruh dunia. Bahkan, mungkin juga diakui sebagai nomor satu untuk kelengkapan flora dan fauna bawah air pada saat ini.</p>\r\n<p>&nbsp;</p>\r\n<p>Dr. John Veron, ahli karang berpengalaman dari Australia, misalnya, dalam sebuah situs ia mengungkapkan, Kepulauan Raja Ampat yang terletak di ujung paling barat Pulau Papua, sekitar 50 mil sebelah barat laut Sorong, mempunyai kawasan karang terbaik di Indonesia. Sekitar 450 jenis karang sempat diidentifikasi selama dua pekan penelitian di daerah itu.[3]</p>\r\n<p>&nbsp;</p>\r\n<p>Tim ahli dari Conservation International, The Nature Conservancy, dan Lembaga Oseanografi Nasional (LON) Lembaga Ilmu Pengetahuan Indonesia (LIPI) pernah melakukan penilaian cepat pada 2001 dan 2002. Hasilnya, mereka mencatat di perairan ini terdapat lebih dari 540 jenis karang keras (75% dari total jenis di dunia), lebih dari 1.000 jenis ikan karang, 700 jenis moluska, dan catatan tertinggi bagi gonodactyloid stomatopod crustaceans. Ini menjadikan 75% spesies karang dunia berada di Raja Ampat. Tak satupun tempat dengan luas area yang sama memiliki jumlah spesies karang sebanyak ini.</p>\r\n<p>&nbsp;</p>\r\n<p>Ada beberapa kawasan terumbu karang yang masih sangat baik kondisinya dengan persentase penutupan karang hidup hingga 90%, yaitu di selat Dampier (selat antara Pulau Waigeo dan Pulau Batanta), Kepulauan Kofiau, Kepualauan Misool Tenggara dan Kepulauan Wayag. Tipe dari terumbu karang di Raja Ampat umumnya adalah terumbu karang tepi dengan kontur landai hingga curam. Tetapi ditemukan juga tipe atol dan tipe gosong atau taka. Di beberapa tempat seperti di kampung Saondarek, ketika pasang surut terendah, bisa disaksikan hamparan terumbu karang tanpa menyelam dan dengan adaptasinya sendiri, karang tersebut tetap bisa hidup walaupun berada di udara terbuka dan terkena sinar matahari langsung.</p>\r\n<p>&nbsp;</p>\r\n<p>Spesies yang unik yang bisa dijumpai pada saat menyelam adalah beberapa jenis kuda laut katai, wobbegong, dan ikan pari Manta. Juga ada ikan endemik raja ampat, yaitu Eviota raja, yaitu sejenis ikan gobbie. Di Manta point yg terletak di Arborek selat Dampier, Anda bisa menyelam dengan ditemani beberapa ekor Pari Manta yang jinak seperti ketika Anda menyelam di Kepulauan Derawan, Kalimantan Timur. Jika menyelam di Cape Kri atau Chicken Reef, Anda bisa dikelilingi oleh ribuan ikan. Kadang kumpulan ikan tuna, giant trevallies dan snappers. Tapi yang menegangkan jika kita dikelilingi oleh kumpulan ikan barakuda, walaupun sebenarnya itu relatif tidak berbahaya (yang berbahaya jika kita ketemu barakuda soliter atau sendirian). Hiu karang juga sering terlihat, dan kalau beruntung Anda juga bisa melihat penyu sedang diam memakan sponge atau berenang di sekitar anda. Di beberapa tempat seperti di Salawati, Batanta dan Waigeo juga terlihat Dugong atau ikan duyung.</p>\r\n<p>&nbsp;</p>\r\n<p>Karena daerahnya yang banyak pulau dan selat sempit, maka sebagian besar tempat penyelaman pada waktu tertentu memiliki arus yang kencang. Hal ini memungkinkan juga untuk melakukan drift dive, menyelam sambil mengikuti arus yang kencang dengan air yang sangat jernih sambil menerobos kumpulan ikan</p>', 'Kabupaten Raja Ampat, Provinsi Papua Barat.');

-- ----------------------------
-- Table structure for tbl_tiket
-- ----------------------------
DROP TABLE IF EXISTS `tbl_tiket`;
CREATE TABLE `tbl_tiket`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_tempat` int NULL DEFAULT NULL,
  `harga` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_tiket
-- ----------------------------
INSERT INTO `tbl_tiket` VALUES (1, 1, 750000);

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user`  (
  `id_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `passwrod` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fullname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `phone` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`email`, `id_user`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
