-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 29 2019 г., 17:13
-- Версия сервера: 5.6.38
-- Версия PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bd_reg`
--

-- --------------------------------------------------------

--
-- Структура таблицы `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `parent` int(255) NOT NULL,
  `title_mini` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shop`
--

INSERT INTO `shop` (`id`, `name`, `title`, `img`, `price`, `parent`, `title_mini`) VALUES
(1, 'Grand Theft Auto V', 'Мультиплатформенная компьютерная игра в жанре action-adventure с открытым миром, разработ', '/images/gta5.jpg', '144', 0, ''),
(2, 'Resident Evil 2 remake', 'Компьютерная игра в жанрах survival horror и шутер от третьего лица, разработанная Capco1', '../images/re2.jpeg', '1200', 0, ''),
(3, 'Playerunknowns Battlegrounds', 'Многопользовательская онлайн-игра в жанре королевской битвы, разрабатываемая и издаваемая студией 1 ', '../images/pbg.jpg', '1400', 0, ''),
(4, 'World of Warcraft: Battle for Azeroth', 'Седьмое дополнение к компьютерной игре World of Warcraft, анонсированное 3 ноября 2017 года на BlizzCon 1', '../images/wow.jpeg', '1400', 0, ''),
(5, 'Far Cry 5', 'Far Cry 5 — мультиплатформенная компьютерная игра 2018 года в жанре шутера от первого лица sтой основной игрой из одноимённой серии игр.', '../images/far-cry.jpg', '1400', 0, ''),
(6, 'Battlefield V', 'Battlefield V — мультиплатформенная компьютерная игра в жанре шутера от первого лица, пятнадцатая по счsstion 4 и Xbox One', '../images/Battlefield-V.jpg', '1400', 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(0, '', ''),
(126, 'ico@mail.ru', '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
