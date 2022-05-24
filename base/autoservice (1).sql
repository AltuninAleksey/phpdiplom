-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 24 2022 г., 16:03
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `autoservice`
--

-- --------------------------------------------------------

--
-- Структура таблицы `automobile`
--

CREATE TABLE `automobile` (
  `id` int UNSIGNED NOT NULL,
  `mark` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `Year` int NOT NULL,
  `VIN` varchar(30) NOT NULL,
  `id_user` int UNSIGNED NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `automobile`
--

INSERT INTO `automobile` (`id`, `mark`, `model`, `Year`, `VIN`, `id_user`, `status`) VALUES
(3, 'Daewo', 'Matiz', 1983, 'WWzsfsgsg', 4, 'В работе'),
(4, 'Daewo', 'Nexia', 1985, 'wafwafwagf', 4, 'Готов'),
(5, 'BMW', 'e34', 2000, 'wwwsafsfgsfg', 5, '');

-- --------------------------------------------------------

--
-- Структура таблицы `evacuator`
--

CREATE TABLE `evacuator` (
  `id` int NOT NULL,
  `adres` varchar(30) NOT NULL,
  `capacity` int NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `evacuator`
--

INSERT INTO `evacuator` (`id`, `adres`, `capacity`, `date`) VALUES
(1, 'Пушкина 85 81', 1, '2022-05-23');

-- --------------------------------------------------------

--
-- Структура таблицы `priceservice`
--

CREATE TABLE `priceservice` (
  `id` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `priceservice`
--

INSERT INTO `priceservice` (`id`, `name`, `price`) VALUES
(1, 'ремонт', 500),
(2, 'Диагностика', 12950),
(3, 'Подвеска', 8950),
(4, 'Сход Развал', 10000),
(5, 'Масло', 5950),
(6, 'Шиномонтаж', 1950);

-- --------------------------------------------------------

--
-- Структура таблицы `service`
--

CREATE TABLE `service` (
  `id` int NOT NULL,
  `NameService` varchar(30) NOT NULL,
  `id_auto` int UNSIGNED NOT NULL,
  `id_client` int UNSIGNED NOT NULL,
  `price` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `login` varchar(50) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `FIO` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `FIO`) VALUES
(4, 'altunin', '123', 'Алтунин Алексей Игоревич'),
(5, 'kalzhanov', '123', 'Кольжанов Иван Игоревич');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `automobile`
--
ALTER TABLE `automobile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `evacuator`
--
ALTER TABLE `evacuator`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `priceservice`
--
ALTER TABLE `priceservice`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_auto` (`id_auto`),
  ADD KEY `id_client` (`id_client`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `automobile`
--
ALTER TABLE `automobile`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `evacuator`
--
ALTER TABLE `evacuator`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `priceservice`
--
ALTER TABLE `priceservice`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `service`
--
ALTER TABLE `service`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `automobile`
--
ALTER TABLE `automobile`
  ADD CONSTRAINT `automobile_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`id_auto`) REFERENCES `automobile` (`id`),
  ADD CONSTRAINT `service_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
