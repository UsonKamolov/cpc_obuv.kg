-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 06 2017 г., 17:56
-- Версия сервера: 5.5.53
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `cat_id`) VALUES
(1, 'Ноутбуки', 'notebook'),
(2, 'ПК', 'pc'),
(3, 'Смартфоны', 'phone');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `products` varchar(100) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `price` decimal(8,0) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `post_index` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `products`, `prod_id`, `price`, `qty`, `name`, `s_name`, `address`, `post_index`, `email`, `date`, `time`) VALUES
(1, 'DELL', 1, '235', '1', 'Kutman', 'Mambetov', 'Bishkek', '123456', 'kutman@gmail.com', '2017-04-19', '04:12:45'),
(2, 'Acer', 2, '655', '1', 'Kutman', 'Mambetov', 'Bishkek', '123456', 'kutman@gmail.com', '2017-04-19', '05:51:12'),
(3, 'Acer', 2, '655', '1', 'Kutman', 'Mambetov', 'Bishkek', '123456', 'kutman@gmail.com', '2017-04-19', '05:51:35'),
(4, 'Asus', 2, '730', '1', 'Janybek', 'Ashimov', 'Bishkek', '123456', 'aryberi@gmail.com', '2017-04-19', '06:22:18'),
(5, 'Redmi 3s', 4, '100', '1', 'Kutman', 'Mambetov', 'Bishkek', '123456', 'kutman@gmail.com', '2017-04-19', '08:50:57'),
(6, 'HP 250 G5', 3, '305', '1', 'Janybek', 'Ashimov', 'fsefse', 'sefse', 'aryberi@gmail.com', '2017-04-21', '12:35:35'),
(7, '123', 1, '123', '1', '123', '123', '123', '123', '123', '2017-04-22', '21:58:54');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,0) NOT NULL,
  `image` varchar(100) NOT NULL,
  `cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `image`, `cat`) VALUES
(1, 'Ноутбук Dell Inspiron 3567-7862', 'Диагональ дисплея (дюйм): 15.6\r\nПроцессор: Intel® Core™ i3 6006U\r\nОперативная память (Мб): 4096\r\nЕмкость HDD (Гб): 1000\r\nВидеокарта: Intel® HD Graphics 520\r\nОперационная система: Windows 10', '324', '1.png', 'notebook'),
(2, 'Ноутбук ASUS K501UQ-DM036T', 'Диагональ дисплея (дюйм): 15.6\r\nПроцессор: Intel® Core™ i5-6200U\r\nОперативная память (Мб): 8192\r\nЕмкость HDD (Гб): 1000\r\nВидеокарта: NVIDIA GeForce 940MX\r\nОперационная система: Windows 10 x64', '471', '2.png', 'notebook'),
(3, 'ПК DEXP Mars E155', 'Модель процессора	Pentium G4400\r\nКоличество ядер процессора	2\r\nОперативная память\r\nРазмер оперативной памяти	8 ГБ\r\nОбъем жестких дисков (HDD)	1 ТБ\r\nМодель дискретной видеокарты	GeForce GTX 750 Ti', '310', '5.png', 'pc'),
(4, 'ПК DNS Extreme 026', 'Модель процессора	Core i5 6500\r\nКоличество ядер процессора	4\r\nРазмер оперативной памяти	8 ГБ\r\nОбъем жестких дисков (HDD)	1 ТБ\r\nМодель дискретной видеокарты	Radeon R9 370', '412', '6.png', 'pc'),
(5, 'Смартфон Xiaomi Redmi 3S', 'Диагональ (дюйм): 5\r\nВстроенная память (Гб): 32\r\nФотокамера (Мп): 13\r\nПроцессор: Qualcomm MSM8937 Snapdragon 430\r\nКоличество ядер: 8', '185', '9.png', 'phone');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
