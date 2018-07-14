-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 22 2017 г., 07:01
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `advanced_maktab`
--

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `book` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `carousel`
--

CREATE TABLE IF NOT EXISTS `carousel` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short` text NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `carousel`
--

INSERT INTO `carousel` (`id`, `title`, `short`, `text`, `image`) VALUES
(7, 'O''quv yeg''ini FVV', 'Toshkent Bank Hisob Kollejida FVV tomonidan o''quv yeg''ini o''tkazildi', 'Toshkent Bank Hisob Kollejida Favqulotda vaziyatlar vazirligi tomonidan o''quv yeg''ini o''tkazildi', '1489316050.jpeg'),
(8, ' I.A. Karimov', 'Kollejda birinchi prizidentimiz I.A. Karimovga bag''ishlangan video o''quvchilarga havola etildi', 'Kollejda birinchi prizidentimiz I.A. Karimovga bag''ishlangan video o''quvchilarga havola etildi', '1489316195.jpeg'),
(9, 'Kollejda o''qituvchilar kengashi', 'Yangi o''quv yili boshlanishi munosabati bilan o''qituvchilar kengashi o''tkazildi', 'Yangi o''quv yili boshlanishi munosabati bilan o''qituvchilar kengashi o''tkazildi', '1489316303.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `posted_tume` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `galery`
--

CREATE TABLE IF NOT EXISTS `galery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `galery`
--

INSERT INTO `galery` (`id`, `image`) VALUES
(3, 'direktor.jpg'),
(4, 'yangilik1.png'),
(5, 'yangilik3.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1491731576),
('m130524_201442_init', 1491731581);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short` text NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `posted_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `short`, `text`, `image`, `posted_time`) VALUES
(1, 'DIQQAT TANLOV !!! <br>MAKTABIMIZ O`QUVCHILARI DIQQATIGA!', 'AGARDA SIZ JURNALISTIKAGA QIZIQSANGIZ, IJODKORLIK, SHOIRLIK QOBILIYATINGIZ BO`LSA, ...', 'AGARDA SIZ JURNALISTIKAGA QIZIQSANGIZ, IJODKORLIK, SHOIRLIK QOBILIYATINGIZ BO`LSA, BUGUNGI KUNDA YOSHLARIMIZ UCHUN DOLZARB BO`LGAN MASALALARDA MAQOLALAR, SHE`RLAR YOZSANGIZ MAKTAB SAYTI BILAN SIZNI HAMKORLIK QILISHGA TAKLIF ETGAN HOLDA  QUYIDAGI NOMINATSIYALARNI E`LON QILAMIZ\r\n                          \r\n<center>\r\n<br>"ENG YAXSHI FOTOREPORTAJ",\r\n<br>"ENG YAXSHI MAQOLA",\r\n<br>"ENG YAXSHI SHE`RIY MISRALAR".\r\n</center>', 'yangilik2.jpg', '2017-05-14 11:52:12'),
(2, 'Умумтаълим тизимига муҳим ўзгаришлар киритилмоқда', 'Умумтаълим мактаблари фаолиятига татбиқ этиладиган янгиликлар, бунинг ўқув самарадорлигини таъминлашдаги ўрни хусусида ...', 'Умумтаълим мактаблари фаолиятига татбиқ этиладиган янгиликлар, бунинг ўқувсамарадорлигини таъминлашдаги ўрни хусусида Халқ таълими вазирлиги умумтаълим мактаблари ва ихтисослаштирилган мактаблар бошқармаси бошлиғи Саидаҳрор Сейткамолов билан суҳбат.', 'news3.jpg', '2017-05-14 12:01:39'),
(3, 'Танқидий-таҳлилий руҳдаўтди', 'Халқтаълимивазирлигининг 2017 \r\n...', 'Халқтаълимивазирлигининг 2017 йилбиринчичорагидагифаолиятиякунларигабағишланган ҳайъатйиғилишибўлибўтди.', 'news4.png', '2017-05-14 12:04:19');

-- --------------------------------------------------------

--
-- Структура таблицы `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `posted_tume` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `short` text NOT NULL,
  `text` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `posted_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `name`, `surname`, `city`, `email`, `short`, `text`, `file`, `posted_time`) VALUES
(1, 'a.sa.,sd', 'asdasd asd a', 'a sdasd asd ', 'asdasd@mail.co', 'asdasdasdaskjdn aksjdn ', 'kj ansdjkasn kdnasjkd naskjd ansdjk ', 'admin/post_files/1489315390.vnd.openxmlformats-officedocument.wordprocessingml.document', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `rahbariyat`
--

CREATE TABLE IF NOT EXISTS `rahbariyat` (
  `id` int(11) NOT NULL,
  `lavozim` varchar(255) NOT NULL,
  `fio` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `qabul` varchar(255) NOT NULL,
  `malumot` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rahbariyat`
--

INSERT INTO `rahbariyat` (`id`, `lavozim`, `fio`, `image`, `qabul`, `malumot`) VALUES
(1, 'Maktab direktori', 'Meliyeva Tamara Xurramovna', 'direktor.jpg', 'chorshanba, shanba kunlari soat 16-18 gacha.', 'Meliyeva Tamara Xurramovna 1962-yil 27-noyabr sanasida Samarqand viloyati Urgut tumanida tavallud topgan. Millati o`zbek. Ma`lumoti oliy. 1985-yilda Kiyev davlat pedagogika instituti rus tili va adabiyoti mutaxassisligini tamomlagan. Pedagogik staji 31 yil. Oliy toifali. 2009-yildan buyon maktab direktori lavozimida faoliyat yuritib kelmoqda. '),
(3, 'Maktab o`quv-tarbiyaviy ishlar bo`yicha direktor o`rinbosari', 'Yo`ldasheva Farog`at Mardiyevna', 'zam1.png', 'haftaning har kuni soat 8-17 gacha', 'Yo`ldasheva Farog`at Mardiyevna 1964-yil 06-iyun sanasida Samarqand viloyati Pastdarg`om tumanida tavallud topgan. Millati o`zbek. Ma`lumoti oliy. 1988-yilda Samarqand davlat universiteti rus tili va adabiyoti mutaxassisligini tamomlagan. Pedagogik staji 28 yil.Birinchi toifali. 1996-yildan buyon maktab direktorining o`quv-tarbiyaviy ishlar bo`yicha o`rinbosari lavozimida faoliyat yuritib kelmoqda.'),
(4, 'Maktab ma`naviy-ma`rifiy ishlar bo`yicha direktor o`rinbosari', 'Berdishukurov Baxtiyor Uzoqovich', 'zam2.png', 'haftaning har kuni soat 8-17 gacha qabul qiladi.', 'Berdishukurov Baxtiyor Uzoqovich 1973-yil 12-dekabr sanasida Samarqand viloyati Pastdarg`om tumanida tavallud topgan. Millati o`zbek. Ma`lumoti oliy. 1997-yilda Samarqand davlat pedaogika institutining musiqa fani o`qituvchisi mutaxassisligi bo`yicha tamomlagan. Pedagogik staji 18 yil. Birinchi toifali .2012-yildan buyon maktab direktorining ma`naviy-ma`rifiy ishlar bo`yicha o`rinbosari lavozimida faoliyat yuritib kelmoqda.'),
(5, 'Maktab psixologi', 'Rustamova Manzura Karimovna', 'psixolog.png', 'haftaning har kuni soat 8-17 gacha qabul qiladi', 'Rustamova Manzura Karimovna 1972-yil 23-oktabr sanasida Samarqand viloyati Pastdarg`om tumanida tavallud topgan. Millati o`zbek. Ma`lumoti oliy. 1996-yilda Samarqand davlat pedaogika institutining boshlang`ich ta`lim o`qituvchisi mutaxassisligi bo`yicha tamomlagan. Pedagogik staji 21 yil. Ikkinchi toifali .2016-yildan buyon maktab paixologi lavozimida faoliyat yuritib kelmoqda.'),
(6, 'Maktab kasaba uyushmasi boshlang`ich qo`mitasi raisi', 'Xudoyqulova Gulnoz Mahmudovna', 'qqqq.png', 'haftaning har kuni soat 8-17 gacha qabul qiladi', 'Xudoyqulova Gulnoz Mahmudovna 1969-yil 8-oktabr sanasida Samarqand viloyati Pastdarg`om tumanida tavallud topgan. Millati o`zbek. Ma`lumoti oliy. 1991-yilda Samarqand davlat pedaogika institutining boshlang`ich ta`lim o`qituvchisi mutaxassisligi bo`yicha tamomlagan. Pedagogik staji 17 yil. Ikkinchi toifali .1999-yildan buyon ushbu lavozimida faoliyat yuritib kelmoqda. ');

-- --------------------------------------------------------

--
-- Структура таблицы `spirituality`
--

CREATE TABLE IF NOT EXISTS `spirituality` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short` text NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `position` varchar(255) NOT NULL,
  `accept_time` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(2, 'asda', 'YJ1hFgm7RzzQQuMO_oNOWlTrMkbob55j', '$2y$13$TR7Z3xA.naMErD3w4wOkRu3XmW1ZydgSJeAaj5MABfnOtPklbmAvy', NULL, 'akjsdhajsk@asd.asd', 10, 1491806837, 1491806837),
(3, 'muhammadali', '4j6Y10vO8mjwE0iW0GmzTuvVs2aGWs9r', '$2y$13$kBW8fvjETppEma8E8CVyieFkWSw2ckgzeVv.LsAI2ODnTcpGRz0V2', NULL, 'admin@mail.com', 10, 1493889460, 1493889460),
(4, 'qwertyuiop', 'SCsB1NtWHC74aW3YNOU_Feql6rjFfmcP', '$2y$13$vF4LkoPkhYTsqj9gNF23Iuz9IY7cXrAj43lw54jaE7KcjrGV2/wgC', NULL, 'qwertyuiop@asd.asd', 10, 1494013630, 1494013630),
(9, 'admin', 'LppSqzYqNcxjgML8t5w5OCwgvay6gJ0a', '$2y$13$1DSSQJ4mGcWHmtkVJY37bO4qrXaD2oK/VqhmdAqS6ylZybQcMRrSC', NULL, 'muhammadali8767@gmail.com', 10, 1511296492, 1511296492);

-- --------------------------------------------------------

--
-- Структура таблицы `virtual`
--

CREATE TABLE IF NOT EXISTS `virtual` (
  `id` int(11) NOT NULL,
  `fio` varchar(255) COLLATE utf8_estonian_ci NOT NULL,
  `tashkilot` varchar(255) COLLATE utf8_estonian_ci DEFAULT NULL,
  `nomer` varchar(255) COLLATE utf8_estonian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_estonian_ci NOT NULL,
  `manzil` varchar(255) COLLATE utf8_estonian_ci NOT NULL,
  `passport` varchar(255) COLLATE utf8_estonian_ci NOT NULL,
  `turi` enum('murojat','shikoyat','turi','') COLLATE utf8_estonian_ci DEFAULT NULL,
  `mavzu` varchar(255) COLLATE utf8_estonian_ci NOT NULL,
  `xabar` text COLLATE utf8_estonian_ci NOT NULL,
  `fayl` varchar(255) COLLATE utf8_estonian_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci;

--
-- Дамп данных таблицы `virtual`
--

INSERT INTO `virtual` (`id`, `fio`, `tashkilot`, `nomer`, `email`, `manzil`, `passport`, `turi`, `mavzu`, `xabar`, `fayl`) VALUES
(1, 'aksdn akjsd bak', 'ajksdbaskj', 'k jabsd jasbd kjasb', 'asdasdas@asd.asd', 'askjdbaksdbj', 'ajksbdakjsdb', '', 'ajksdbaksjdb', 'asjbdakjsdba', NULL),
(2, 'aksdn akjsd bak', 'ajksdbaskj', 'k jabsd jasbd kjasb', 'asdasdas@asd.asd', 'askjdbaksdbj', 'ajksbdakjsdb', '', 'ajksdbaksjdb', 'asjbdakjsdba', NULL),
(3, 'afaafsfasf', 'asdasdasda', '12312312', 'email@mail.coom', 'amsndamsdnasjn', 'asndaksdansdkajs', 'murojat', 'aksndakjsdnaskjn', 'aksdjnaskdjnaskjda', ''),
(4, 'afaafsfasf', 'asdasdasda', '12312312', 'email@mail.coom', 'amsndamsdnasjn', 'asndaksdansdkajs', '', 'aksndakjsdnaskjn', 'aksdjnaskdjnaskjda', ''),
(5, 'asfasfasfasfas', 'asdaskmmakdmaskdasmd', 'asdmaksdmaksd', 'aksdmaskdma@mas.ads', 'asmdalsdmamdlamdalm', 'dmasdaslkdalksd alks dalk', 'murojat', 'ajksndkasdkjasndakjsdnaks', 'aksjdnaksjdnaksdjnknlkn', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rahbariyat`
--
ALTER TABLE `rahbariyat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `spirituality`
--
ALTER TABLE `spirituality`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Индексы таблицы `virtual`
--
ALTER TABLE `virtual`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `rahbariyat`
--
ALTER TABLE `rahbariyat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `spirituality`
--
ALTER TABLE `spirituality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `virtual`
--
ALTER TABLE `virtual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
