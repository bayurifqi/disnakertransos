/*
Navicat MySQL Data Transfer

Source Server         : Local Pisan
Source Server Version : 50615
Source Host           : 127.0.0.1:3306
Source Database       : db_disnakertransos_2016

Target Server Type    : MYSQL
Target Server Version : 50615
File Encoding         : 65001

Date: 2015-08-13 21:33:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for r_agama
-- ----------------------------
DROP TABLE IF EXISTS `r_agama`;
CREATE TABLE `r_agama` (
  `kd_agama` char(2) NOT NULL,
  `nama_agama` varchar(10) NOT NULL,
  PRIMARY KEY (`kd_agama`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of r_agama
-- ----------------------------
INSERT INTO `r_agama` VALUES ('01', 'Islam');
INSERT INTO `r_agama` VALUES ('02', 'Kristen');
INSERT INTO `r_agama` VALUES ('03', 'Al-Jancuki');

-- ----------------------------
-- Table structure for r_jabatan
-- ----------------------------
DROP TABLE IF EXISTS `r_jabatan`;
CREATE TABLE `r_jabatan` (
  `kd_jabatan` char(2) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL,
  PRIMARY KEY (`kd_jabatan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of r_jabatan
-- ----------------------------

-- ----------------------------
-- Table structure for r_pangkat
-- ----------------------------
DROP TABLE IF EXISTS `r_pangkat`;
CREATE TABLE `r_pangkat` (
  `kd_pangkat` char(2) NOT NULL,
  `nama_pangkat` varchar(30) NOT NULL,
  `gol_ruang` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`kd_pangkat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of r_pangkat
-- ----------------------------

-- ----------------------------
-- Table structure for t_cmk
-- ----------------------------
DROP TABLE IF EXISTS `t_cmk`;
CREATE TABLE `t_cmk` (
  `nip` varchar(23) NOT NULL,
  `no` int(2) NOT NULL,
  `cmk` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nip`,`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_cmk
-- ----------------------------

-- ----------------------------
-- Table structure for t_identitas
-- ----------------------------
DROP TABLE IF EXISTS `t_identitas`;
CREATE TABLE `t_identitas` (
  `foto` varchar(50) DEFAULT NULL,
  `nip` varchar(23) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `tempat_lahir` varchar(25) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `kd_agama` char(1) DEFAULT NULL,
  `kd_pangkat` char(1) DEFAULT NULL,
  `pangkat_tmt` date DEFAULT NULL,
  `kd_jabatan` char(2) DEFAULT NULL,
  `jabatan_tmt` date DEFAULT NULL,
  `masa_kerjakes` int(4) DEFAULT NULL,
  `status_kepeg` varchar(30) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_identitas
-- ----------------------------

-- ----------------------------
-- Table structure for t_keluarga
-- ----------------------------
DROP TABLE IF EXISTS `t_keluarga`;
CREATE TABLE `t_keluarga` (
  `nip` varchar(23) NOT NULL,
  `no` int(2) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `tgl_kawin` date DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nip`,`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_keluarga
-- ----------------------------

-- ----------------------------
-- Table structure for t_latjab
-- ----------------------------
DROP TABLE IF EXISTS `t_latjab`;
CREATE TABLE `t_latjab` (
  `id_urut` int(6) NOT NULL,
  `nip` varchar(23) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `jumlah_jam` int(4) DEFAULT NULL,
  PRIMARY KEY (`id_urut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_latjab
-- ----------------------------

-- ----------------------------
-- Table structure for t_pendidikan
-- ----------------------------
DROP TABLE IF EXISTS `t_pendidikan`;
CREATE TABLE `t_pendidikan` (
  `id_urut` int(6) NOT NULL,
  `nip` varchar(23) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `lembaga` varchar(50) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `strata` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`id_urut`),
  KEY `nip` (`nip`),
  CONSTRAINT `t_pendidikan_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `t_identitas` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_pendidikan
-- ----------------------------

-- ----------------------------
-- Table structure for t_tunjangan
-- ----------------------------
DROP TABLE IF EXISTS `t_tunjangan`;
CREATE TABLE `t_tunjangan` (
  `nip` varchar(23) NOT NULL,
  `sampingan` int(10) DEFAULT NULL,
  `pensiunan` int(10) DEFAULT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_tunjangan
-- ----------------------------
