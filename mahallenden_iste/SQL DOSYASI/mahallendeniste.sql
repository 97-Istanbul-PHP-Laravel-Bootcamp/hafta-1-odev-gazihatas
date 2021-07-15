-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 19 Haz 2021, 12:58:31
-- Sunucu sürümü: 5.7.33
-- PHP Sürümü: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mahallendeniste`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abone`
--

CREATE TABLE `abone` (
  `abone_id` int(11) NOT NULL,
  `abone_email` varchar(300) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(11) NOT NULL,
  `baslik` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `anahtarkelime` varchar(400) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `facebook` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `instagram` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `youtube` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `twitter` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `mesai` varchar(300) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `baslik`, `aciklama`, `anahtarkelime`, `telefon`, `email`, `adres`, `facebook`, `instagram`, `youtube`, `twitter`, `logo`, `mesai`) VALUES
(1, 'Mahallenden İste', 'Mahalledeki esnafları bünyesinde barından eticaret platformu', 'Eticaret, yemek, kasap, manav', '555 555 55 55', 'info@mahallendeniste.com', 'Türkiye', 'facebook.com', 'instagram.com', 'youtube.com', 'twitter.com', '6683468245611074741Mahallemden_logo.png', '7/24 ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cokluresim`
--

CREATE TABLE `cokluresim` (
  `id` int(11) NOT NULL,
  `resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `cokluresim`
--

INSERT INTO `cokluresim` (`id`, `resim`, `urun_id`) VALUES
(8, '7698526483114333769bg-banner.jpg', 6),
(9, '7602883150514775006.jpg', 6),
(15, '7725075926618331114bg-banner.jpg', 5),
(16, '97165354483107025956.jpg', 5),
(17, '7970325581617283gözlük.jpg', 7),
(18, '607232584629644452ayakkabı.jpg', 6),
(19, '1554373932812328568759271457102024749soğan.jpg', 10);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_misyon` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_vizyon` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_detay`, `hakkimizda_resim`, `hakkimizda_misyon`, `hakkimizda_vizyon`) VALUES
(1, 'Mahallenden Iste', '<p><strong>PROJENİN KONUSU</strong></p>\r\n\r\n<p>Semtte bulunan işletmeleri &ccedil;evresindeki t&uuml;ketici ile buluşturmak ve mahalle i&ccedil;inde yardımlaşma ve ticaret etkileşimini arttırmak.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>PROJENİN AMACI</strong></p>\r\n\r\n<p>T&uuml;keticiyi &ccedil;evresinde bulunan işletmelerden online olarak alışveriş yapmaya teşvik etmek. Sadece işletme olarak değil ev hanımları i&ccedil;inde ge&ccedil;erlidir. Semt veya Mahallede bulunan k&uuml;&ccedil;&uuml;k veya genel olarak işletmelere pandemi d&ouml;neminde ve sonrasında uygulama ile destek olmak. İşletmeleri web ve mobil platforma taşıyıp t&uuml;keticiye kaliteli &uuml;r&uuml;n ve g&uuml;venli satış deneyimi sunmasını sağlamak.</p>\r\n', '486891273401644542esnaf.jpg', 'En değerli paydaşlarımızdan biri olan çalışanlarımız ile birlikte koşulsuz müşteri memnuniyetini sağlamak, kültürel değerler ve uluslararası kalite standartları çerçevesinde üretim yaparak Türk kozmetiğinin dünyadaki güvenilir ve seçkin elçisi olmak.', 'Köklü geçmişimiz ve bununla beraber miras edindiğimiz güvenilirlik, sadakat, devamlılık ve saygınlığı bir dünya markası olarak sürdürmek.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_adi` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_sira` int(11) NOT NULL,
  `kategori_durum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_adi`, `kategori_sira`, `kategori_durum`) VALUES
(1, 'Manav', 1, 1),
(2, 'Terzi', 12, 1),
(10, 'Yemek Salonu', 25, 1),
(11, 'Kırtasiye', 13, 1),
(12, 'Bakkal', 7, 1),
(13, 'Giyim', 28, 1),
(14, 'Petshop', 17, 1),
(15, 'Market', 10, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kullanici_adi` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_sifre` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` int(2) NOT NULL,
  `kullanici_adres` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_il` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ilce` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tel` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_resim` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mail` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_adi`, `kullanici_sifre`, `kullanici_adsoyad`, `kullanici_yetki`, `kullanici_adres`, `kullanici_il`, `kullanici_ilce`, `kullanici_tel`, `kullanici_resim`, `kullanici_mail`) VALUES
(1, '2021-06-19 12:50:37', 'gazihatas', 'e10adc3949ba59abbe56e057f20f883e', 'yazılım yolcusu', 2, 'Türkiye', 'İstanbul', 'Esenler', '0555 999 88 77', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

CREATE TABLE `siparisler` (
  `siparis_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `siparis_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `urun_adet` int(11) NOT NULL,
  `urun_fiyat` int(250) NOT NULL,
  `toplam_fiyat` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `odeme_turu` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_onay` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siparisler`
--

INSERT INTO `siparisler` (`siparis_id`, `kullanici_id`, `urun_id`, `siparis_zaman`, `urun_adet`, `urun_fiyat`, `toplam_fiyat`, `odeme_turu`, `siparis_onay`) VALUES
(13, 12, 6, '2020-07-03 05:31:29', 1, 10000, '23600', '1', 0),
(14, 13, 6, '2020-07-03 05:33:10', 1, 10000, '23836', '1', 0),
(15, 13, 10, '2020-07-03 05:33:10', 5, 20, '23836', '1', 1),
(17, 13, 10, '2020-07-03 05:40:02', 5, 20, '23836', '0', 1),
(18, 13, 8, '2020-07-03 06:55:31', 2, 5, '23.6', '1', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_baslik` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `slider_aciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_link` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_button` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `slider_resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_sira` int(11) NOT NULL,
  `slider_durum` int(11) NOT NULL,
  `slider_banner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `urun_resim` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `urun_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `urun_sira` int(11) NOT NULL,
  `urun_model` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_renk` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_adet` int(11) NOT NULL,
  `urun_fiyat` double NOT NULL,
  `onecikan` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_durum` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `urun_etiket` varchar(300) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `kategori_id`, `urun_resim`, `urun_baslik`, `urun_aciklama`, `urun_sira`, `urun_model`, `urun_renk`, `urun_adet`, `urun_fiyat`, `onecikan`, `urun_durum`, `urun_zaman`, `urun_etiket`) VALUES
(12, 4, '6544438596349520339775-34981buyuk1jpg-34981buyuk1.jpg', 'Çorap', '<p>&Ccedil;orap</p>\r\n', 3, '2019', 'siyah', 10, 5, '1', '1', '2020-06-19 19:35:25', ''),
(14, 16, '8213376722032562673.jpg', 'drone', '<p>drone &ccedil;ok hızlı</p>\r\n', 7, '2020', 'gri', 0, 10.789, '1', '1', '2020-06-20 14:20:42', ''),
(15, 1, '70010206616217813domates.jpg', 'Domates', '<p>Yerli Domates</p>\r\n', 1, '', 'kırmızı', 1, 5, '0', '1', '2021-06-19 10:07:39', 'manav'),
(16, 1, '4905273636810676604patates.jpg', 'Patates', '', 2, '', '', 10, 6, '1', '1', '2021-06-19 11:13:24', ''),
(17, 1, '85054350984361062salatalik.jpg', 'Salatalik', '', 3, '', '', 20, 5, '0', '1', '2021-06-19 11:22:57', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorum_id` int(11) NOT NULL,
  `yorum_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `yorum_zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `urun_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `yorum_onay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `yorum_detay`, `yorum_zaman`, `urun_id`, `kullanici_id`, `yorum_onay`) VALUES
(3, 'mükmemmel', '2020-06-20 12:20:11', 6, 13, 1),
(4, 'güzeldi', '2020-06-20 12:12:53', 6, 13, 1),
(5, 'gayet güzel', '2020-06-20 12:21:13', 6, 12, 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abone`
--
ALTER TABLE `abone`
  ADD PRIMARY KEY (`abone_id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `cokluresim`
--
ALTER TABLE `cokluresim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `siparisler`
--
ALTER TABLE `siparisler`
  ADD PRIMARY KEY (`siparis_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `abone`
--
ALTER TABLE `abone`
  MODIFY `abone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `cokluresim`
--
ALTER TABLE `cokluresim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `siparisler`
--
ALTER TABLE `siparisler`
  MODIFY `siparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
