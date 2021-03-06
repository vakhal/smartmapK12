-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 27 2018 г., 22:54
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `z8138y5e_dns`
--

-- --------------------------------------------------------

--
-- Структура таблицы `objects`
--
-- Создание: Июн 10 2018 г., 15:52
-- Последнее обновление: Июн 16 2018 г., 18:09
--

DROP TABLE IF EXISTS `objects`;
CREATE TABLE `objects` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `objects`
--

INSERT INTO `objects` (`id`, `name`, `parent`) VALUES
(1, '1 Серверная', 0),
(2, '2 Серверная', 0),
(3, '3 Серверная', 0),
(4, '4 Серверная', 0),
(5, 'Кондиционер П1', 4),
(6, 'Кондиционер П2', 4),
(7, 'Кондиционер П3', 4),
(8, 'Кондиционер Л1', 4),
(9, 'Кондиционер Л2', 4),
(10, 'Кондиционер Л3', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `sensors`
--
-- Создание: Июн 15 2018 г., 17:12
-- Последнее обновление: Июн 16 2018 г., 20:22
--

DROP TABLE IF EXISTS `sensors`;
CREATE TABLE `sensors` (
  `id` int(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `object` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sensors`
--

INSERT INTO `sensors` (`id`, `type`, `object`, `name`) VALUES
(1, 'температура', 1, 'Стойка 1.1'),
(2, 'температура', 2, 'Internal temperature sensor\r\n28c0a880030000b1'),
(51, '', 2, 'Line Present'),
(50, '', 4, 'UPS ON '),
(49, '', 3, 'UPS ON '),
(46, '', 1, 'Overall Status'),
(47, '', 1, 'Battery Status'),
(7, 'температура', 2, 'External temperature sensor 28f4caca030000e9'),
(48, '', 2, 'UPS ON'),
(8, 'температура', 2, 'External temperature sensor 285e74800300006c'),
(9, 'температура', 2, 'External temperature sensor 28976400030000c0'),
(12, '', 5, 'unit state'),
(13, '', 6, 'unit state'),
(14, '', 7, 'unit state'),
(15, '', 8, 'unit state'),
(16, '', 9, 'unit state'),
(18, '', 5, 'Установка'),
(19, '', 6, 'Установка'),
(20, '', 7, 'Установка'),
(21, '', 8, 'Установка'),
(22, '', 9, 'Установка'),
(23, '', 10, 'Установка'),
(24, '', 10, 'unit state'),
(25, 'температура', 5, 'return air 1'),
(26, 'температура', 6, 'return air 1'),
(27, 'температура', 7, 'return air 1'),
(28, 'температура', 8, 'return air 1'),
(29, 'температура', 9, 'return air 1'),
(30, 'температура', 10, 'return air 1'),
(31, 'температура', 1, 'Стойка 1.2'),
(32, 'температура', 1, 'Стойка 1.3'),
(33, 'температура', 1, 'Стойка 1.4'),
(34, 'температура', 1, 'Стойка 1.5'),
(35, 'температура', 1, 'Стойка 1.6'),
(36, 'температура', 1, 'Стойка 1.7'),
(37, 'температура', 1, 'Стойка 1.8'),
(38, 'температура', 1, 'Стойка 1.9'),
(39, 'температура', 1, 'Стойка 1.10'),
(40, 'температура', 1, 'Стойка 1.11'),
(41, 'температура', 1, 'Стойка 1.12'),
(42, 'температура', 1, 'Стойка 1.13'),
(43, 'температура', 1, 'Стойка 1.14'),
(44, 'температура', 1, 'Стойка 1.15'),
(45, 'температура', 1, 'Стойка 1.16'),
(52, '', 3, 'Line Present'),
(53, '', 4, 'Line Present'),
(54, '', 2, 'On Battery'),
(55, '', 3, 'On Battery'),
(56, '', 4, 'On Battery');

-- --------------------------------------------------------

--
-- Структура таблицы `values`
--
-- Создание: Июн 16 2018 г., 20:28
-- Последнее обновление: Июн 23 2018 г., 13:09
--

DROP TABLE IF EXISTS `values`;
CREATE TABLE `values` (
  `id` int(16) NOT NULL,
  `sensor` int(10) NOT NULL,
  `data` varchar(25) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `values`
--

INSERT INTO `values` (`id`, `sensor`, `data`, `date`) VALUES
(1, 1, '20', '2018-06-16 23:28:50'),
(2, 31, '22', '2018-06-16 23:28:50'),
(3, 32, '24', '2018-06-16 23:28:50'),
(4, 33, '25', '2018-06-16 23:28:50'),
(5, 34, '25', '2018-06-16 23:28:50'),
(6, 35, '26', '2018-06-16 23:28:50'),
(7, 36, '29', '2018-06-16 23:28:50'),
(8, 37, '25', '2018-06-16 23:28:50'),
(9, 38, '20', '2018-06-16 23:28:50'),
(10, 39, '20', '2018-06-16 23:28:50'),
(11, 40, '19', '2018-06-16 23:28:50'),
(12, 41, '26', '2018-06-16 23:28:50'),
(13, 42, '24', '2018-06-16 23:28:50'),
(14, 43, '25', '2018-06-16 23:28:50'),
(15, 44, '24', '2018-06-16 23:28:50'),
(16, 45, '20', '2018-06-16 23:28:50'),
(17, 46, 'SYSTEM NORMAL', '2018-06-16 23:28:50'),
(18, 47, 'Normal', '2018-06-16 23:28:50'),
(19, 2, '23.0', '2018-06-16 23:28:50'),
(20, 7, '19.0', '2018-06-16 23:28:50'),
(21, 8, '16.0', '2018-06-16 23:28:50'),
(22, 9, '31.0', '2018-06-16 23:28:50'),
(23, 48, 'YES', '2018-06-16 23:28:50'),
(24, 51, 'YES', '2018-06-16 23:28:50'),
(25, 54, 'NO', '2018-06-16 23:28:50'),
(26, 49, 'YES', '2018-06-16 23:28:50'),
(27, 52, 'YES', '2018-06-16 23:28:50'),
(28, 55, 'NO', '2018-06-16 23:28:50'),
(29, 12, 'online', '2018-06-16 23:28:50'),
(30, 18, 'Вкл', '2018-06-16 23:28:50'),
(31, 25, '29.9', '2018-06-16 23:28:50'),
(32, 13, 'online', '2018-06-16 23:28:50'),
(33, 19, 'Выкл', '2018-06-16 23:28:50'),
(34, 26, '31.3', '2018-06-16 23:28:50'),
(35, 14, 'online', '2018-06-16 23:28:50'),
(36, 20, 'Вкл', '2018-06-16 23:28:50'),
(37, 27, '31.9', '2018-06-16 23:28:50'),
(38, 15, 'online', '2018-06-16 23:28:50'),
(39, 21, 'Выкл', '2018-06-16 23:28:50'),
(40, 28, '28.7', '2018-06-16 23:28:50'),
(41, 16, 'online', '2018-06-16 23:28:50'),
(42, 22, 'Вкл', '2018-06-16 23:28:50'),
(43, 29, '30.1', '2018-06-16 23:28:50'),
(44, 23, 'online', '2018-06-16 23:28:50'),
(45, 24, 'Выкл', '2018-06-16 23:28:50'),
(46, 30, '28.1', '2018-06-16 23:28:50'),
(47, 50, 'YES', '2018-06-16 23:28:50'),
(48, 53, 'YES', '2018-06-16 23:28:50'),
(49, 56, 'NO', '2018-06-16 23:28:50'),
(50, 1, '20', '2018-06-16 23:31:51'),
(51, 31, '22', '2018-06-16 23:31:51'),
(52, 32, '24', '2018-06-16 23:31:51'),
(53, 33, '25', '2018-06-16 23:31:51'),
(54, 34, '25', '2018-06-16 23:31:51'),
(55, 35, '26', '2018-06-16 23:31:51'),
(56, 36, '29', '2018-06-16 23:31:51'),
(57, 37, '25', '2018-06-16 23:31:51'),
(58, 38, '20', '2018-06-16 23:31:51'),
(59, 39, '20', '2018-06-16 23:31:51'),
(60, 40, '19', '2018-06-16 23:31:51'),
(61, 41, '26', '2018-06-16 23:31:51'),
(62, 42, '24', '2018-06-16 23:31:51'),
(63, 43, '25', '2018-06-16 23:31:51'),
(64, 44, '24', '2018-06-16 23:31:51'),
(65, 45, '20', '2018-06-16 23:31:51'),
(66, 46, 'SYSTEM NORMAL', '2018-06-16 23:31:51'),
(67, 47, 'Normal', '2018-06-16 23:31:51'),
(68, 2, '23.0', '2018-06-16 23:31:51'),
(69, 7, '19.0', '2018-06-16 23:31:51'),
(70, 8, '16.0', '2018-06-16 23:31:51'),
(71, 9, '31.0', '2018-06-16 23:31:51'),
(72, 48, 'YES', '2018-06-16 23:31:51'),
(73, 51, 'YES', '2018-06-16 23:31:51'),
(74, 54, 'NO', '2018-06-16 23:31:51'),
(75, 49, 'YES', '2018-06-16 23:31:51'),
(76, 52, 'YES', '2018-06-16 23:31:51'),
(77, 55, 'NO', '2018-06-16 23:31:51'),
(78, 12, 'online', '2018-06-16 23:31:51'),
(79, 18, 'Вкл', '2018-06-16 23:31:51'),
(80, 25, '29.9', '2018-06-16 23:31:51'),
(81, 13, 'online', '2018-06-16 23:31:51'),
(82, 19, 'Выкл', '2018-06-16 23:31:51'),
(83, 26, '31.3', '2018-06-16 23:31:51'),
(84, 14, 'online', '2018-06-16 23:31:51'),
(85, 20, 'Вкл', '2018-06-16 23:31:51'),
(86, 27, '31.9', '2018-06-16 23:31:51'),
(87, 15, 'online', '2018-06-16 23:31:51'),
(88, 21, 'Выкл', '2018-06-16 23:31:51'),
(89, 28, '28.7', '2018-06-16 23:31:51'),
(90, 16, 'online', '2018-06-16 23:31:51'),
(91, 22, 'Вкл', '2018-06-16 23:31:51'),
(92, 29, '30.1', '2018-06-16 23:31:51'),
(93, 23, 'online', '2018-06-16 23:31:51'),
(94, 24, 'Выкл', '2018-06-16 23:31:51'),
(95, 30, '28.1', '2018-06-16 23:31:51'),
(96, 50, 'YES', '2018-06-16 23:31:51'),
(97, 53, 'YES', '2018-06-16 23:31:51'),
(98, 56, 'NO', '2018-06-16 23:31:51'),
(99, 1, '20', '2018-06-17 15:22:12'),
(100, 31, '22', '2018-06-17 15:22:12'),
(101, 32, '24', '2018-06-17 15:22:12'),
(102, 33, '25', '2018-06-17 15:22:12'),
(103, 34, '25', '2018-06-17 15:22:12'),
(104, 35, '26', '2018-06-17 15:22:12'),
(105, 36, '29', '2018-06-17 15:22:12'),
(106, 37, '25', '2018-06-17 15:22:12'),
(107, 38, '20', '2018-06-17 15:22:12'),
(108, 39, '20', '2018-06-17 15:22:12'),
(109, 40, '19', '2018-06-17 15:22:12'),
(110, 41, '26', '2018-06-17 15:22:12'),
(111, 42, '24', '2018-06-17 15:22:12'),
(112, 43, '25', '2018-06-17 15:22:12'),
(113, 44, '24', '2018-06-17 15:22:12'),
(114, 45, '20', '2018-06-17 15:22:12'),
(115, 46, 'SYSTEM NORMAL', '2018-06-17 15:22:12'),
(116, 47, 'Normal', '2018-06-17 15:22:12'),
(117, 2, '23.0', '2018-06-17 15:22:12'),
(118, 7, '19.0', '2018-06-17 15:22:12'),
(119, 8, '16.0', '2018-06-17 15:22:12'),
(120, 9, '31.0', '2018-06-17 15:22:12'),
(121, 48, 'YES', '2018-06-17 15:22:12'),
(122, 51, 'YES', '2018-06-17 15:22:12'),
(123, 54, 'NO', '2018-06-17 15:22:12'),
(124, 49, 'YES', '2018-06-17 15:22:12'),
(125, 52, 'YES', '2018-06-17 15:22:12'),
(126, 55, 'NO', '2018-06-17 15:22:12'),
(127, 12, 'online', '2018-06-17 15:22:12'),
(128, 18, 'Вкл', '2018-06-17 15:22:12'),
(129, 25, '29.9', '2018-06-17 15:22:12'),
(130, 13, 'online', '2018-06-17 15:22:12'),
(131, 19, 'Выкл', '2018-06-17 15:22:12'),
(132, 26, '31.3', '2018-06-17 15:22:12'),
(133, 14, 'online', '2018-06-17 15:22:12'),
(134, 20, 'Вкл', '2018-06-17 15:22:12'),
(135, 27, '31.9', '2018-06-17 15:22:12'),
(136, 15, 'online', '2018-06-17 15:22:12'),
(137, 21, 'Выкл', '2018-06-17 15:22:12'),
(138, 28, '28.7', '2018-06-17 15:22:12'),
(139, 16, 'online', '2018-06-17 15:22:12'),
(140, 22, 'Вкл', '2018-06-17 15:22:12'),
(141, 29, '30.1', '2018-06-17 15:22:12'),
(142, 23, 'online', '2018-06-17 15:22:12'),
(143, 24, 'Выкл', '2018-06-17 15:22:12'),
(144, 30, '28.1', '2018-06-17 15:22:12'),
(145, 50, 'YES', '2018-06-17 15:22:12'),
(146, 53, 'YES', '2018-06-17 15:22:12'),
(147, 56, 'NO', '2018-06-17 15:22:12'),
(148, 1, '20', '2018-06-17 15:22:13'),
(149, 31, '22', '2018-06-17 15:22:13'),
(150, 32, '24', '2018-06-17 15:22:13'),
(151, 33, '25', '2018-06-17 15:22:13'),
(152, 34, '25', '2018-06-17 15:22:13'),
(153, 35, '26', '2018-06-17 15:22:13'),
(154, 36, '29', '2018-06-17 15:22:13'),
(155, 37, '25', '2018-06-17 15:22:13'),
(156, 38, '20', '2018-06-17 15:22:13'),
(157, 39, '20', '2018-06-17 15:22:13'),
(158, 40, '19', '2018-06-17 15:22:13'),
(159, 41, '26', '2018-06-17 15:22:13'),
(160, 42, '24', '2018-06-17 15:22:13'),
(161, 43, '25', '2018-06-17 15:22:13'),
(162, 44, '24', '2018-06-17 15:22:13'),
(163, 45, '20', '2018-06-17 15:22:13'),
(164, 46, 'SYSTEM NORMAL', '2018-06-17 15:22:13'),
(165, 47, 'Normal', '2018-06-17 15:22:13'),
(166, 2, '23.0', '2018-06-17 15:22:13'),
(167, 7, '19.0', '2018-06-17 15:22:13'),
(168, 8, '16.0', '2018-06-17 15:22:13'),
(169, 9, '31.0', '2018-06-17 15:22:13'),
(170, 48, 'YES', '2018-06-17 15:22:13'),
(171, 51, 'YES', '2018-06-17 15:22:13'),
(172, 54, 'NO', '2018-06-17 15:22:13'),
(173, 49, 'YES', '2018-06-17 15:22:13'),
(174, 52, 'YES', '2018-06-17 15:22:13'),
(175, 55, 'NO', '2018-06-17 15:22:13'),
(176, 12, 'online', '2018-06-17 15:22:13'),
(177, 18, 'Вкл', '2018-06-17 15:22:13'),
(178, 25, '29.9', '2018-06-17 15:22:13'),
(179, 13, 'online', '2018-06-17 15:22:13'),
(180, 19, 'Выкл', '2018-06-17 15:22:13'),
(181, 26, '31.3', '2018-06-17 15:22:13'),
(182, 14, 'online', '2018-06-17 15:22:13'),
(183, 20, 'Вкл', '2018-06-17 15:22:13'),
(184, 27, '31.9', '2018-06-17 15:22:13'),
(185, 15, 'online', '2018-06-17 15:22:13'),
(186, 21, 'Выкл', '2018-06-17 15:22:13'),
(187, 28, '28.7', '2018-06-17 15:22:13'),
(188, 16, 'online', '2018-06-17 15:22:13'),
(189, 22, 'Вкл', '2018-06-17 15:22:13'),
(190, 29, '30.1', '2018-06-17 15:22:13'),
(191, 23, 'online', '2018-06-17 15:22:13'),
(192, 24, 'Выкл', '2018-06-17 15:22:13'),
(193, 30, '28.1', '2018-06-17 15:22:13'),
(194, 50, 'YES', '2018-06-17 15:22:13'),
(195, 53, 'YES', '2018-06-17 15:22:13'),
(196, 56, 'NO', '2018-06-17 15:22:13'),
(197, 1, '20', '2018-06-18 04:59:41'),
(198, 31, '22', '2018-06-18 04:59:41'),
(199, 32, '24', '2018-06-18 04:59:41'),
(200, 33, '25', '2018-06-18 04:59:41'),
(201, 34, '25', '2018-06-18 04:59:41'),
(202, 35, '26', '2018-06-18 04:59:41'),
(203, 36, '29', '2018-06-18 04:59:41'),
(204, 37, '25', '2018-06-18 04:59:41'),
(205, 38, '20', '2018-06-18 04:59:41'),
(206, 39, '20', '2018-06-18 04:59:41'),
(207, 40, '19', '2018-06-18 04:59:41'),
(208, 41, '26', '2018-06-18 04:59:41'),
(209, 42, '24', '2018-06-18 04:59:41'),
(210, 43, '25', '2018-06-18 04:59:41'),
(211, 44, '24', '2018-06-18 04:59:41'),
(212, 45, '20', '2018-06-18 04:59:41'),
(213, 46, 'SYSTEM NORMAL', '2018-06-18 04:59:41'),
(214, 47, 'Normal', '2018-06-18 04:59:41'),
(215, 2, '23.0', '2018-06-18 04:59:41'),
(216, 7, '19.0', '2018-06-18 04:59:41'),
(217, 8, '16.0', '2018-06-18 04:59:41'),
(218, 9, '31.0', '2018-06-18 04:59:41'),
(219, 48, 'YES', '2018-06-18 04:59:41'),
(220, 51, 'YES', '2018-06-18 04:59:41'),
(221, 54, 'NO', '2018-06-18 04:59:41'),
(222, 49, 'YES', '2018-06-18 04:59:41'),
(223, 52, 'YES', '2018-06-18 04:59:41'),
(224, 55, 'NO', '2018-06-18 04:59:41'),
(225, 12, 'online', '2018-06-18 04:59:41'),
(226, 18, 'Вкл', '2018-06-18 04:59:41'),
(227, 25, '29.9', '2018-06-18 04:59:41'),
(228, 13, 'online', '2018-06-18 04:59:41'),
(229, 19, 'Выкл', '2018-06-18 04:59:41'),
(230, 26, '31.3', '2018-06-18 04:59:41'),
(231, 14, 'online', '2018-06-18 04:59:41'),
(232, 20, 'Вкл', '2018-06-18 04:59:41'),
(233, 27, '31.9', '2018-06-18 04:59:41'),
(234, 15, 'online', '2018-06-18 04:59:41'),
(235, 21, 'Выкл', '2018-06-18 04:59:41'),
(236, 28, '28.7', '2018-06-18 04:59:41'),
(237, 16, 'online', '2018-06-18 04:59:41'),
(238, 22, 'Вкл', '2018-06-18 04:59:41'),
(239, 29, '30.1', '2018-06-18 04:59:41'),
(240, 23, 'online', '2018-06-18 04:59:41'),
(241, 24, 'Выкл', '2018-06-18 04:59:41'),
(242, 30, '28.1', '2018-06-18 04:59:41'),
(243, 50, 'YES', '2018-06-18 04:59:41'),
(244, 53, 'YES', '2018-06-18 04:59:41'),
(245, 56, 'NO', '2018-06-18 04:59:41'),
(246, 1, '20', '2018-06-18 09:34:59'),
(247, 31, '22', '2018-06-18 09:34:59'),
(248, 32, '24', '2018-06-18 09:34:59'),
(249, 33, '25', '2018-06-18 09:34:59'),
(250, 34, '25', '2018-06-18 09:34:59'),
(251, 35, '26', '2018-06-18 09:34:59'),
(252, 36, '29', '2018-06-18 09:34:59'),
(253, 37, '25', '2018-06-18 09:34:59'),
(254, 38, '20', '2018-06-18 09:34:59'),
(255, 39, '20', '2018-06-18 09:34:59'),
(256, 40, '19', '2018-06-18 09:34:59'),
(257, 41, '26', '2018-06-18 09:34:59'),
(258, 42, '24', '2018-06-18 09:34:59'),
(259, 43, '25', '2018-06-18 09:34:59'),
(260, 44, '24', '2018-06-18 09:34:59'),
(261, 45, '20', '2018-06-18 09:34:59'),
(262, 46, 'SYSTEM NORMAL', '2018-06-18 09:34:59'),
(263, 47, 'Normal', '2018-06-18 09:34:59'),
(264, 2, '23.0', '2018-06-18 09:34:59'),
(265, 7, '19.0', '2018-06-18 09:34:59'),
(266, 8, '16.0', '2018-06-18 09:34:59'),
(267, 9, '31.0', '2018-06-18 09:34:59'),
(268, 48, 'YES', '2018-06-18 09:34:59'),
(269, 51, 'YES', '2018-06-18 09:34:59'),
(270, 54, 'NO', '2018-06-18 09:34:59'),
(271, 49, 'YES', '2018-06-18 09:34:59'),
(272, 52, 'YES', '2018-06-18 09:34:59'),
(273, 55, 'NO', '2018-06-18 09:34:59'),
(274, 12, 'online', '2018-06-18 09:34:59'),
(275, 18, 'Вкл', '2018-06-18 09:34:59'),
(276, 25, '29.9', '2018-06-18 09:34:59'),
(277, 13, 'online', '2018-06-18 09:34:59'),
(278, 19, 'Выкл', '2018-06-18 09:34:59'),
(279, 26, '31.3', '2018-06-18 09:34:59'),
(280, 14, 'online', '2018-06-18 09:34:59'),
(281, 20, 'Вкл', '2018-06-18 09:34:59'),
(282, 27, '31.9', '2018-06-18 09:34:59'),
(283, 15, 'online', '2018-06-18 09:34:59'),
(284, 21, 'Выкл', '2018-06-18 09:34:59'),
(285, 28, '28.7', '2018-06-18 09:34:59'),
(286, 16, 'online', '2018-06-18 09:34:59'),
(287, 22, 'Вкл', '2018-06-18 09:34:59'),
(288, 29, '30.1', '2018-06-18 09:34:59'),
(289, 23, 'online', '2018-06-18 09:34:59'),
(290, 24, 'Выкл', '2018-06-18 09:34:59'),
(291, 30, '28.1', '2018-06-18 09:34:59'),
(292, 50, 'YES', '2018-06-18 09:34:59'),
(293, 53, 'YES', '2018-06-18 09:34:59'),
(294, 56, 'NO', '2018-06-18 09:34:59'),
(295, 1, '20', '2018-06-18 10:45:48'),
(296, 31, '22', '2018-06-18 10:45:48'),
(297, 32, '24', '2018-06-18 10:45:48'),
(298, 33, '25', '2018-06-18 10:45:48'),
(299, 34, '25', '2018-06-18 10:45:48'),
(300, 35, '26', '2018-06-18 10:45:48'),
(301, 36, '29', '2018-06-18 10:45:48'),
(302, 37, '25', '2018-06-18 10:45:48'),
(303, 38, '20', '2018-06-18 10:45:48'),
(304, 39, '20', '2018-06-18 10:45:48'),
(305, 40, '19', '2018-06-18 10:45:48'),
(306, 41, '26', '2018-06-18 10:45:48'),
(307, 42, '24', '2018-06-18 10:45:48'),
(308, 43, '25', '2018-06-18 10:45:48'),
(309, 44, '24', '2018-06-18 10:45:48'),
(310, 45, '20', '2018-06-18 10:45:48'),
(311, 46, 'SYSTEM NORMAL', '2018-06-18 10:45:48'),
(312, 47, 'Normal', '2018-06-18 10:45:48'),
(313, 2, '23.0', '2018-06-18 10:45:48'),
(314, 7, '19.0', '2018-06-18 10:45:48'),
(315, 8, '16.0', '2018-06-18 10:45:48'),
(316, 9, '31.0', '2018-06-18 10:45:48'),
(317, 48, 'YES', '2018-06-18 10:45:48'),
(318, 51, 'YES', '2018-06-18 10:45:48'),
(319, 54, 'NO', '2018-06-18 10:45:48'),
(320, 49, 'YES', '2018-06-18 10:45:48'),
(321, 52, 'YES', '2018-06-18 10:45:48'),
(322, 55, 'NO', '2018-06-18 10:45:48'),
(323, 12, 'online', '2018-06-18 10:45:48'),
(324, 18, 'Вкл', '2018-06-18 10:45:48'),
(325, 25, '29.9', '2018-06-18 10:45:48'),
(326, 13, 'online', '2018-06-18 10:45:48'),
(327, 19, 'Выкл', '2018-06-18 10:45:48'),
(328, 26, '31.3', '2018-06-18 10:45:48'),
(329, 14, 'online', '2018-06-18 10:45:48'),
(330, 20, 'Вкл', '2018-06-18 10:45:48'),
(331, 27, '31.9', '2018-06-18 10:45:48'),
(332, 15, 'online', '2018-06-18 10:45:48'),
(333, 21, 'Выкл', '2018-06-18 10:45:48'),
(334, 28, '28.7', '2018-06-18 10:45:48'),
(335, 16, 'online', '2018-06-18 10:45:48'),
(336, 22, 'Вкл', '2018-06-18 10:45:48'),
(337, 29, '30.1', '2018-06-18 10:45:48'),
(338, 23, 'online', '2018-06-18 10:45:48'),
(339, 24, 'Выкл', '2018-06-18 10:45:48'),
(340, 30, '28.1', '2018-06-18 10:45:48'),
(341, 50, 'YES', '2018-06-18 10:45:48'),
(342, 53, 'YES', '2018-06-18 10:45:48'),
(343, 56, 'NO', '2018-06-18 10:45:48'),
(344, 1, '20', '2018-06-18 21:58:23'),
(345, 31, '22', '2018-06-18 21:58:23'),
(346, 32, '24', '2018-06-18 21:58:23'),
(347, 33, '25', '2018-06-18 21:58:23'),
(348, 34, '25', '2018-06-18 21:58:23'),
(349, 35, '26', '2018-06-18 21:58:23'),
(350, 36, '29', '2018-06-18 21:58:23'),
(351, 37, '25', '2018-06-18 21:58:23'),
(352, 38, '20', '2018-06-18 21:58:23'),
(353, 39, '20', '2018-06-18 21:58:23'),
(354, 40, '19', '2018-06-18 21:58:23'),
(355, 41, '26', '2018-06-18 21:58:23'),
(356, 42, '24', '2018-06-18 21:58:23'),
(357, 43, '25', '2018-06-18 21:58:23'),
(358, 44, '24', '2018-06-18 21:58:23'),
(359, 45, '20', '2018-06-18 21:58:23'),
(360, 46, 'SYSTEM NORMAL', '2018-06-18 21:58:23'),
(361, 47, 'Normal', '2018-06-18 21:58:23'),
(362, 2, '23.0', '2018-06-18 21:58:23'),
(363, 7, '19.0', '2018-06-18 21:58:23'),
(364, 8, '16.0', '2018-06-18 21:58:23'),
(365, 9, '31.0', '2018-06-18 21:58:23'),
(366, 48, 'YES', '2018-06-18 21:58:23'),
(367, 51, 'YES', '2018-06-18 21:58:23'),
(368, 54, 'NO', '2018-06-18 21:58:23'),
(369, 49, 'YES', '2018-06-18 21:58:23'),
(370, 52, 'YES', '2018-06-18 21:58:23'),
(371, 55, 'NO', '2018-06-18 21:58:23'),
(372, 12, 'online', '2018-06-18 21:58:23'),
(373, 18, 'Вкл', '2018-06-18 21:58:23'),
(374, 25, '29.9', '2018-06-18 21:58:23'),
(375, 13, 'online', '2018-06-18 21:58:23'),
(376, 19, 'Выкл', '2018-06-18 21:58:23'),
(377, 26, '31.3', '2018-06-18 21:58:23'),
(378, 14, 'online', '2018-06-18 21:58:23'),
(379, 20, 'Вкл', '2018-06-18 21:58:23'),
(380, 27, '31.9', '2018-06-18 21:58:23'),
(381, 15, 'online', '2018-06-18 21:58:23'),
(382, 21, 'Выкл', '2018-06-18 21:58:23'),
(383, 28, '28.7', '2018-06-18 21:58:23'),
(384, 16, 'online', '2018-06-18 21:58:23'),
(385, 22, 'Вкл', '2018-06-18 21:58:23'),
(386, 29, '30.1', '2018-06-18 21:58:23'),
(387, 23, 'online', '2018-06-18 21:58:23'),
(388, 24, 'Выкл', '2018-06-18 21:58:23'),
(389, 30, '28.1', '2018-06-18 21:58:23'),
(390, 50, 'YES', '2018-06-18 21:58:23'),
(391, 53, 'YES', '2018-06-18 21:58:23'),
(392, 56, 'NO', '2018-06-18 21:58:23'),
(393, 1, '20', '2018-06-19 16:39:55'),
(394, 31, '22', '2018-06-19 16:39:55'),
(395, 32, '24', '2018-06-19 16:39:55'),
(396, 33, '25', '2018-06-19 16:39:55'),
(397, 34, '25', '2018-06-19 16:39:55'),
(398, 35, '26', '2018-06-19 16:39:55'),
(399, 36, '29', '2018-06-19 16:39:55'),
(400, 37, '25', '2018-06-19 16:39:55'),
(401, 38, '20', '2018-06-19 16:39:55'),
(402, 39, '20', '2018-06-19 16:39:55'),
(403, 40, '19', '2018-06-19 16:39:55'),
(404, 41, '26', '2018-06-19 16:39:55'),
(405, 42, '24', '2018-06-19 16:39:55'),
(406, 43, '25', '2018-06-19 16:39:55'),
(407, 44, '24', '2018-06-19 16:39:55'),
(408, 45, '20', '2018-06-19 16:39:55'),
(409, 46, 'SYSTEM NORMAL', '2018-06-19 16:39:55'),
(410, 47, 'Normal', '2018-06-19 16:39:55'),
(411, 2, '23.0', '2018-06-19 16:39:55'),
(412, 7, '19.0', '2018-06-19 16:39:55'),
(413, 8, '16.0', '2018-06-19 16:39:55'),
(414, 9, '31.0', '2018-06-19 16:39:55'),
(415, 48, 'YES', '2018-06-19 16:39:55'),
(416, 51, 'YES', '2018-06-19 16:39:55'),
(417, 54, 'NO', '2018-06-19 16:39:55'),
(418, 49, 'YES', '2018-06-19 16:39:55'),
(419, 52, 'YES', '2018-06-19 16:39:55'),
(420, 55, 'NO', '2018-06-19 16:39:55'),
(421, 12, 'online', '2018-06-19 16:39:55'),
(422, 18, 'Вкл', '2018-06-19 16:39:55'),
(423, 25, '29.9', '2018-06-19 16:39:55'),
(424, 13, 'online', '2018-06-19 16:39:55'),
(425, 19, 'Выкл', '2018-06-19 16:39:55'),
(426, 26, '31.3', '2018-06-19 16:39:55'),
(427, 14, 'online', '2018-06-19 16:39:55'),
(428, 20, 'Вкл', '2018-06-19 16:39:55'),
(429, 27, '31.9', '2018-06-19 16:39:55'),
(430, 15, 'online', '2018-06-19 16:39:55'),
(431, 21, 'Выкл', '2018-06-19 16:39:55'),
(432, 28, '28.7', '2018-06-19 16:39:55'),
(433, 16, 'online', '2018-06-19 16:39:55'),
(434, 22, 'Вкл', '2018-06-19 16:39:55'),
(435, 29, '30.1', '2018-06-19 16:39:55'),
(436, 23, 'online', '2018-06-19 16:39:55'),
(437, 24, 'Выкл', '2018-06-19 16:39:55'),
(438, 30, '28.1', '2018-06-19 16:39:55'),
(439, 50, 'YES', '2018-06-19 16:39:55'),
(440, 53, 'YES', '2018-06-19 16:39:55'),
(441, 56, 'NO', '2018-06-19 16:39:55'),
(442, 1, '20', '2018-06-22 14:15:35'),
(443, 31, '22', '2018-06-22 14:15:35'),
(444, 32, '24', '2018-06-22 14:15:35'),
(445, 33, '25', '2018-06-22 14:15:35'),
(446, 34, '25', '2018-06-22 14:15:35'),
(447, 35, '26', '2018-06-22 14:15:35'),
(448, 36, '29', '2018-06-22 14:15:35'),
(449, 37, '25', '2018-06-22 14:15:35'),
(450, 38, '20', '2018-06-22 14:15:35'),
(451, 39, '20', '2018-06-22 14:15:35'),
(452, 40, '19', '2018-06-22 14:15:35'),
(453, 41, '26', '2018-06-22 14:15:35'),
(454, 42, '24', '2018-06-22 14:15:35'),
(455, 43, '25', '2018-06-22 14:15:35'),
(456, 44, '24', '2018-06-22 14:15:35'),
(457, 45, '20', '2018-06-22 14:15:35'),
(458, 46, 'SYSTEM NORMAL', '2018-06-22 14:15:35'),
(459, 47, 'Normal', '2018-06-22 14:15:35'),
(460, 2, '23.0', '2018-06-22 14:15:35'),
(461, 7, '19.0', '2018-06-22 14:15:35'),
(462, 8, '16.0', '2018-06-22 14:15:35'),
(463, 9, '31.0', '2018-06-22 14:15:35'),
(464, 48, 'YES', '2018-06-22 14:15:35'),
(465, 51, 'YES', '2018-06-22 14:15:35'),
(466, 54, 'NO', '2018-06-22 14:15:35'),
(467, 49, 'YES', '2018-06-22 14:15:35'),
(468, 52, 'YES', '2018-06-22 14:15:35'),
(469, 55, 'NO', '2018-06-22 14:15:35'),
(470, 12, 'online', '2018-06-22 14:15:35'),
(471, 18, 'Вкл', '2018-06-22 14:15:35'),
(472, 25, '29.9', '2018-06-22 14:15:35'),
(473, 13, 'online', '2018-06-22 14:15:35'),
(474, 19, 'Выкл', '2018-06-22 14:15:35'),
(475, 26, '31.3', '2018-06-22 14:15:35'),
(476, 14, 'online', '2018-06-22 14:15:35'),
(477, 20, 'Вкл', '2018-06-22 14:15:35'),
(478, 27, '31.9', '2018-06-22 14:15:35'),
(479, 15, 'online', '2018-06-22 14:15:35'),
(480, 21, 'Выкл', '2018-06-22 14:15:35'),
(481, 28, '28.7', '2018-06-22 14:15:35'),
(482, 16, 'online', '2018-06-22 14:15:35'),
(483, 22, 'Вкл', '2018-06-22 14:15:35'),
(484, 29, '30.1', '2018-06-22 14:15:35'),
(485, 23, 'online', '2018-06-22 14:15:35'),
(486, 24, 'Выкл', '2018-06-22 14:15:35'),
(487, 30, '28.1', '2018-06-22 14:15:35'),
(488, 50, 'YES', '2018-06-22 14:15:35'),
(489, 53, 'YES', '2018-06-22 14:15:35'),
(490, 56, 'NO', '2018-06-22 14:15:35'),
(491, 1, '20', '2018-06-23 16:09:44'),
(492, 31, '22', '2018-06-23 16:09:44'),
(493, 32, '24', '2018-06-23 16:09:44'),
(494, 33, '25', '2018-06-23 16:09:44'),
(495, 34, '25', '2018-06-23 16:09:44'),
(496, 35, '26', '2018-06-23 16:09:44'),
(497, 36, '29', '2018-06-23 16:09:44'),
(498, 37, '25', '2018-06-23 16:09:44'),
(499, 38, '20', '2018-06-23 16:09:44'),
(500, 39, '20', '2018-06-23 16:09:44'),
(501, 40, '19', '2018-06-23 16:09:44'),
(502, 41, '26', '2018-06-23 16:09:44'),
(503, 42, '24', '2018-06-23 16:09:44'),
(504, 43, '25', '2018-06-23 16:09:44'),
(505, 44, '24', '2018-06-23 16:09:44'),
(506, 45, '20', '2018-06-23 16:09:44'),
(507, 46, 'SYSTEM NORMAL', '2018-06-23 16:09:44'),
(508, 47, 'Normal', '2018-06-23 16:09:44'),
(509, 2, '23.0', '2018-06-23 16:09:44'),
(510, 7, '19.0', '2018-06-23 16:09:44'),
(511, 8, '16.0', '2018-06-23 16:09:44'),
(512, 9, '31.0', '2018-06-23 16:09:44'),
(513, 48, 'YES', '2018-06-23 16:09:44'),
(514, 51, 'YES', '2018-06-23 16:09:44'),
(515, 54, 'NO', '2018-06-23 16:09:44'),
(516, 49, 'YES', '2018-06-23 16:09:44'),
(517, 52, 'YES', '2018-06-23 16:09:44'),
(518, 55, 'NO', '2018-06-23 16:09:44'),
(519, 12, 'online', '2018-06-23 16:09:44'),
(520, 18, 'Вкл', '2018-06-23 16:09:44'),
(521, 25, '29.9', '2018-06-23 16:09:44'),
(522, 13, 'online', '2018-06-23 16:09:44'),
(523, 19, 'Выкл', '2018-06-23 16:09:44'),
(524, 26, '31.3', '2018-06-23 16:09:44'),
(525, 14, 'online', '2018-06-23 16:09:44'),
(526, 20, 'Вкл', '2018-06-23 16:09:44'),
(527, 27, '31.9', '2018-06-23 16:09:44'),
(528, 15, 'online', '2018-06-23 16:09:44'),
(529, 21, 'Выкл', '2018-06-23 16:09:44'),
(530, 28, '28.7', '2018-06-23 16:09:44'),
(531, 16, 'online', '2018-06-23 16:09:44'),
(532, 22, 'Вкл', '2018-06-23 16:09:44'),
(533, 29, '30.1', '2018-06-23 16:09:44'),
(534, 23, 'online', '2018-06-23 16:09:44'),
(535, 24, 'Выкл', '2018-06-23 16:09:44'),
(536, 30, '28.1', '2018-06-23 16:09:44'),
(537, 50, 'YES', '2018-06-23 16:09:44'),
(538, 53, 'YES', '2018-06-23 16:09:44'),
(539, 56, 'NO', '2018-06-23 16:09:44');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `objects`
--
ALTER TABLE `objects`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sensors`
--
ALTER TABLE `sensors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `values`
--
ALTER TABLE `values`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `objects`
--
ALTER TABLE `objects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `sensors`
--
ALTER TABLE `sensors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT для таблицы `values`
--
ALTER TABLE `values`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=540;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
