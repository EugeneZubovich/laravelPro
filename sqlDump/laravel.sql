-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 05 2019 г., 08:58
-- Версия сервера: 5.7.25
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalogs`
--

CREATE TABLE `catalogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `catalogs`
--

INSERT INTO `catalogs` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Пром товары', 'Пром товары', NULL, NULL),
(2, 'Техника', 'Техника', NULL, NULL),
(3, 'Электроника', '', NULL, NULL),
(4, 'Бытовая техника', '', NULL, NULL),
(5, 'Тестовый каталог', 'Тестовый каталог', NULL, NULL),
(6, 'Тарелки', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `maintexts`
--

CREATE TABLE `maintexts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('show','hide') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'show',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_03_22_164803_create_maintexts_table', 1),
(13, '2019_03_27_171116_create_products_table', 1),
(14, '2019_03_28_131427_create_catalogs_table', 1),
(15, '2019_03_30_095818_create_stats_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `status_id` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `user_id`, `name`, `catalog_id`, `description`, `price`, `image`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'тест', 2, 'аываыауцаы', '2333', NULL, 2, '2019-03-28 10:25:51', '2019-03-28 10:25:51'),
(3, 1, 'test per 1', 1, 'aawfafef\r\nfe\r\nef\r\nfa', '3000', NULL, 1, '2019-03-28 10:47:06', '2019-03-28 10:47:06'),
(4, 1, 'sfsefsef', 3, 'efefwefweew', '3444', '2593969690.jpg', 1, '2019-03-30 06:39:00', '2019-03-30 06:39:00'),
(5, 1, 'wef4rw34234', 3, '34342342342', '5000', '0c1fdaf7f8b733568d72a6c4f957e9c6.jpg', 1, '2019-03-30 06:39:27', '2019-03-30 06:39:27'),
(7, 1, '5654y', 2, '4565etste\r\ne454e5e44t', '4000', '2483103458.jpg', 2, '2019-03-30 06:40:56', '2019-03-30 06:40:56'),
(12, 1, '4324rfsr32rfse', 6, '324wrff secescfd', '600000', '2511729671.jpg', 2, '2019-04-03 18:37:54', '2019-04-03 18:37:54'),
(13, 1, '324rse3rsr23', 6, '234ewr32re 32f sfs', '35555', 'photoref1.jpg', 2, '2019-04-03 18:41:44', '2019-04-03 18:41:44'),
(14, 1, '234324sfds', 4, '234we32rer2fser23rfs', '35553453', '5458bc1e0770f95590beb311268b1346.jpg', 2, '2019-04-03 18:42:25', '2019-04-03 18:42:25'),
(15, 1, '35trtts4tvs4et4e', 2, '45d4vart4secstbse', '5656565', '2725844516.jpg', 4, '2019-04-03 18:43:02', '2019-04-03 18:43:02'),
(16, 1, '34324fsfse', 5, 'fseev3rawvwarawt353a', '46000', '2727662696.jpg', 1, '2019-04-03 19:54:01', '2019-04-03 19:54:01');

-- --------------------------------------------------------

--
-- Структура таблицы `stats`
--

CREATE TABLE `stats` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `stats`
--

INSERT INTO `stats` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Много: есть в наличии', NULL, NULL),
(2, 'Мало: есть в наличии', NULL, NULL),
(3, 'Нет в наличии ', NULL, NULL),
(4, 'Что тут вообще происходит?', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@mail.ru', '$2y$10$vzawR11KIXaSUoQf3GpvAOtjLfR14YYkB1jsuf4d/f/gQH3nJ09Iq', 'h6winR56C17ihwZ3uC14aw3YuvvRzD2aHHXgsU4JUPfEfEZiUsmVSHCSHaF7', '2019-03-28 10:20:19', '2019-03-28 10:20:19');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `maintexts`
--
ALTER TABLE `maintexts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `maintexts`
--
ALTER TABLE `maintexts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
