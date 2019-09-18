-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 18 2019 г., 23:30
-- Версия сервера: 8.0.15
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `developer_task4_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `daily_rates`
--

CREATE TABLE `daily_rates` (
  `date` date NOT NULL,
  `rate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `daily_rates`
--

INSERT INTO `daily_rates` (`date`, `rate`) VALUES
('2010-05-12', 30.3609),
('2018-11-28', 66.78),
('2019-05-22', 64.5372),
('2019-06-05', 65.1614),
('2019-06-20', 63.9794),
('2019-08-06', 65.0546),
('2019-08-27', 65.9735),
('2019-09-03', 66.6235),
('2019-09-04', 66.9072),
('2019-09-07', 65.9981),
('2019-09-11', 65.4393),
('2019-09-12', 65.4321);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `daily_rates`
--
ALTER TABLE `daily_rates`
  ADD UNIQUE KEY `date` (`date`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
