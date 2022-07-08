-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 03. Juli 2022 jam 02:25
-- Versi Server: 5.0.45
-- Versi PHP: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `db_buku`
--
CREATE DATABASE `db_buku` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `db_buku`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` varchar(10) collate latin1_general_ci NOT NULL,
  `judul_buku` text collate latin1_general_ci NOT NULL,
  `jenis_buku` varchar(20) collate latin1_general_ci NOT NULL,
  `pengarang` varchar(50) collate latin1_general_ci NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `penerbit` varchar(50) collate latin1_general_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `foto_buku` varchar(50) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_buku`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `judul_buku`, `jenis_buku`, `pengarang`, `tahun_terbit`, `penerbit`, `harga`, `foto_buku`) VALUES
('1102', 'mariposa', 'fiksi', 'lulu', 2018, 'gramedia', 90000, '03072022022117Koala.jpg'),
('1104', 'web desain', 'novel', 'wulan', 2008, 'upi', 200000, '03072022022201Chrysanthemum.jpg');
