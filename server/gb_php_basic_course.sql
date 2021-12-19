-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 19 2021 г., 16:12
-- Версия сервера: 5.5.62
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gb_php_basic_course`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL COMMENT 'уникальный идентификатор',
  `product_id` int(11) NOT NULL COMMENT 'идентификатор добавленного товара',
  `user_id` int(11) NOT NULL COMMENT 'идентификатор пользователя, который добавил товар в корзину'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL COMMENT 'уникальный идентификатор',
  `product_id` int(11) NOT NULL COMMENT 'идентификатор продукта, по которому был оставлен отзыв',
  `fio` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ФИО человека, который оставил отзыв',
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Текст комментария',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Дата комментария'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `product_id`, `fio`, `text`, `date`) VALUES
(98, 1, 'Хемраев А.', 'классная куртка', '2021-12-17 17:42:08'),
(99, 2, 'Х. Азамат', 'Не советую покупать!!!', '2021-12-17 17:42:41'),
(100, 1, 'Вася Пупкин', 'фыравдлорфа офырда фод', '2021-12-18 15:30:52'),
(101, 6, 'NoName', 'пышпыш ололо', '2021-12-18 15:31:26');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `content`) VALUES
(1, 'moscow.jpg', 'Moscow'),
(2, 'barcelona.jpg', 'Barcelona'),
(3, 'new_york.jpg', 'New York'),
(4, 'paris.jpg', 'Paris'),
(5, 'rome.jpg', 'Rome'),
(6, 'tokyo.jpg', 'Tokyo');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL COMMENT 'Уникальный идентификатор товара',
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Наименование товара',
  `price` int(11) NOT NULL COMMENT 'Цена товара',
  `src` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Файл с изображением товара',
  `product_description` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Полное название товара'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `src`, `product_description`) VALUES
(1, 'item_1', 250, 'item_1.jpg', 'Куртка'),
(2, 'item_2', 401, 'item_2.jpg', 'Рубашка красная'),
(3, 'item_3', 188, 'item_3.jpg', 'Худи'),
(4, 'item_4', 662, 'item_4.jpg', 'Брюки желтые'),
(5, 'item_5', 702, 'item_5.jpg', 'Лонгслив'),
(6, 'item_6', 369, 'item_6.jpg', 'Бейсболка'),
(7, 'item_7', 803, 'item_7.jpg', 'Рубашка классическая'),
(8, 'item_8', 479, 'item_8.jpg', 'Куртка кожанная'),
(9, 'item_9', 733, 'item_9.jpg', 'Шорты Balenciaga');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'id пользователя',
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'имя пользователя',
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'email пользователя',
  `pass` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'пароль пользователя'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`) VALUES
(1, 'Azamat', 'admin@admin.ru', '12345');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_ibfk_1` (`product_id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'уникальный идентификатор', AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'уникальный идентификатор', AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Уникальный идентификатор товара', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id пользователя', AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
