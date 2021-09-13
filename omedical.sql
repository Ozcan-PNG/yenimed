-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Eyl 2021, 20:49:40
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `omedical`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sef` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yazi` longtext COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `key` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`id`, `baslik`, `sef`, `yazi`, `resim`, `key`, `desc`) VALUES
(1, 'asd', 'asdsef', 'dhgh', 'assets/front/images/blog_bg_1.jpg', 'key', 'desc'),
(2, 'ddd', 'ddsef', 'sadfa', 'assets/front/images/blog_bg_1.jpg', 'asf', 'asdf');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `calisma_saatleri`
--

CREATE TABLE `calisma_saatleri` (
  `id` int(11) NOT NULL,
  `gun` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `saat` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `calisma_saatleri`
--

INSERT INTO `calisma_saatleri` (`id`, `gun`, `saat`) VALUES
(1, 'pts', '12.33-20.33'),
(2, 'salı', '12.33-23.33');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `doktorlar`
--

CREATE TABLE `doktorlar` (
  `id` int(11) NOT NULL,
  `adSoyad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `alani` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `doktorlar`
--

INSERT INTO `doktorlar` (`id`, `adSoyad`, `alani`, `resim`) VALUES
(1, 'dr1', 'asd', 'assets/front/images/team_1.jpg'),
(2, 'dr2', 'adddd', 'assets/front/images/team_1.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `baslik` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `yazi` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `galeri`
--

INSERT INTO `galeri` (`id`, `resim`, `baslik`, `yazi`) VALUES
(1, 'assets/front/images/dc_galry_img_1.jpg', 'başlık', 'yazı'),
(2, 'assets/front/images/dc_galry_img_1.jpg', 'başlık', 'yazi3');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `id` int(11) NOT NULL,
  `yazi` longtext COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `key` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `yazi`, `resim`, `key`, `desc`) VALUES
(1, 'ajdçaçdbadbndb', 'assets/front/images/about_us_bg.jpg', 'hk', 'gd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetler`
--

CREATE TABLE `hizmetler` (
  `id` int(11) NOT NULL,
  `katID` int(11) NOT NULL,
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sef` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yazi` longtext COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `key` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hizmetler`
--

INSERT INTO `hizmetler` (`id`, `katID`, `baslik`, `sef`, `yazi`, `resim`, `key`, `desc`) VALUES
(1, 1, 'h1', 'h1', 'asda', 'asd', 'asd', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmet_kategoriler`
--

CREATE TABLE `hizmet_kategoriler` (
  `id` int(11) NOT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sef` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hizmet_kategoriler`
--

INSERT INTO `hizmet_kategoriler` (`id`, `adi`, `sef`) VALUES
(1, 'Saç Ekimi', 'sac-ekimi'),
(2, 'Estetik', 'estetik');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `yazi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `wpTel` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `map` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `key` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `yazi`, `adres`, `tel`, `wpTel`, `map`, `key`, `desc`, `mail`) VALUES
(1, 'iletişime geç yarm', 'adres sdf sdfsjdsdf', '5433333333', '374566666', 'harita iframe', 'k', 'd', 'mail@mail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `meta`
--

CREATE TABLE `meta` (
  `id` int(11) NOT NULL,
  `blogKey` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `blogDesc` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `galeriKey` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `galeriDesc` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `doktorlarKey` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `doktorlarDesc` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `anaSayfaKey` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `anaSayfaDesc` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sayfaAdi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `meta`
--

INSERT INTO `meta` (`id`, `blogKey`, `blogDesc`, `galeriKey`, `galeriDesc`, `doktorlarKey`, `doktorlarDesc`, `anaSayfaKey`, `anaSayfaDesc`, `sayfaAdi`, `banner`) VALUES
(1, 'b k', 'b d', 'g k', 'g d', 'dk', 'dd', 'ak', 'ad', 'Mastar Medikal', 'assets/front/images/service_top_img.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `referanslar`
--

CREATE TABLE `referanslar` (
  `id` int(11) NOT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `referanslar`
--

INSERT INTO `referanslar` (`id`, `resim`) VALUES
(1, 'assets/front/images/partner_6.png'),
(2, 'assets/front/images/partner_6.png'),
(3, 'assets/front/images/partner_6.png'),
(4, 'assets/front/images/partner_6.png'),
(5, 'assets/front/images/partner_6.png'),
(6, 'assets/front/images/partner_6.png'),
(7, 'assets/front/images/partner_6.png'),
(8, 'assets/front/images/partner_6.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sef` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `key` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yazi` longtext COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `baslik`, `sef`, `resim`, `key`, `desc`, `yazi`) VALUES
(1, 'sld1', 'sldr1', 'resim', 's1key', 's2key', 'yazi1'),
(2, 'basli2', 'baslik', 'resim2url', 'k2', 'd2', 'yazi2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sosyal_medya`
--

CREATE TABLE `sosyal_medya` (
  `id` int(11) NOT NULL,
  `baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sef` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sosyal_medya`
--

INSERT INTO `sosyal_medya` (`id`, `baslik`, `sef`, `url`) VALUES
(1, 'Facebook', 'facebook', 'https:www.google.com');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `calisma_saatleri`
--
ALTER TABLE `calisma_saatleri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `doktorlar`
--
ALTER TABLE `doktorlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hizmetler`
--
ALTER TABLE `hizmetler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hizmet_kategoriler`
--
ALTER TABLE `hizmet_kategoriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `referanslar`
--
ALTER TABLE `referanslar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sosyal_medya`
--
ALTER TABLE `sosyal_medya`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `calisma_saatleri`
--
ALTER TABLE `calisma_saatleri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `doktorlar`
--
ALTER TABLE `doktorlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `hizmetler`
--
ALTER TABLE `hizmetler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `hizmet_kategoriler`
--
ALTER TABLE `hizmet_kategoriler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `meta`
--
ALTER TABLE `meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `referanslar`
--
ALTER TABLE `referanslar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `sosyal_medya`
--
ALTER TABLE `sosyal_medya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
