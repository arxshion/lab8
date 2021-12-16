-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Гру 16 2021 р., 13:47
-- Версія сервера: 10.4.22-MariaDB
-- Версія PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `job`
--

-- --------------------------------------------------------

--
-- Структура таблиці `employers`
--

CREATE TABLE `employers` (
  `id` int(11) NOT NULL,
  `namecom` text NOT NULL,
  `speciality` text NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `employers`
--

INSERT INTO `employers` (`id`, `namecom`, `speciality`, `phone`) VALUES
(1, 'Ресторан - \"Ромашка\"', 'їжа', 3805066),
(2, 'Магазин - \"Паляниця\"', 'продавці', 38050887);

-- --------------------------------------------------------

--
-- Структура таблиці `njob`
--

CREATE TABLE `njob` (
  `idw` int(11) NOT NULL,
  `status` text NOT NULL,
  `data` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `njob`
--

INSERT INTO `njob` (`idw`, `status`, `data`) VALUES
(1, 'Не працює', 2019);

-- --------------------------------------------------------

--
-- Структура таблиці `workers`
--

CREATE TABLE `workers` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `sp` text NOT NULL,
  `adress` text NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `workers`
--

INSERT INTO `workers` (`id`, `name`, `sp`, `adress`, `phone`) VALUES
(1, 'Андрій Корольчук\r\n', 'Кухар', 'м.Луцьк\r\n', 380501466),
(2, 'Роман Сахневич', 'Охоронець', 'м.Луцьк', 38054877);

-- --------------------------------------------------------

--
-- Структура таблиці `yjob`
--

CREATE TABLE `yjob` (
  `ide` int(11) NOT NULL,
  `idw` int(11) NOT NULL,
  `data` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `yjob`
--

INSERT INTO `yjob` (`ide`, `idw`, `data`) VALUES
(2, 2, 2020);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `njob`
--
ALTER TABLE `njob`
  ADD KEY `idw` (`idw`);

--
-- Індекси таблиці `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `yjob`
--
ALTER TABLE `yjob`
  ADD KEY `ide` (`ide`,`idw`),
  ADD KEY `idw` (`idw`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `employers`
--
ALTER TABLE `employers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `njob`
--
ALTER TABLE `njob`
  ADD CONSTRAINT `njob_ibfk_1` FOREIGN KEY (`idw`) REFERENCES `workers` (`id`);

--
-- Обмеження зовнішнього ключа таблиці `yjob`
--
ALTER TABLE `yjob`
  ADD CONSTRAINT `yjob_ibfk_1` FOREIGN KEY (`idw`) REFERENCES `workers` (`id`),
  ADD CONSTRAINT `yjob_ibfk_2` FOREIGN KEY (`ide`) REFERENCES `employers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
