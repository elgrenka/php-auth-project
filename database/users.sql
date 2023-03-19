-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 19 2023 г., 09:29
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mydb2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `salt` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `status_id` smallint DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `email`, `salt`, `password`, `avatar`, `status_id`) VALUES
(6, 'kj', 'kj', '', '', 'kj', 'uploads/1675186179_', NULL),
(8, 'ok', 'ok', 'aaa@sss', '', '$2y$10$PdoFwfwpFRu0EBCzlVdQDulsamydg14Pkk05hOWbNEh8gIPnjqNEy', 'uploads/1675186566_art-девушка-art-Ge-L-удалённое-5741524.jpeg', NULL),
(19, 'Fake', 'fake', NULL, '', '97902695fe1b5f52d0f920dc203dec9f', NULL, NULL),
(20, 'Cook', 'cook', NULL, '', '063eaa78e3429831332da350db5edd1b', NULL, NULL),
(21, 'Ben', 'ben', NULL, ';nC%(^{o', 'c92faa6bcea5cde31476196d5dcba48a', NULL, NULL),
(22, 'Jack', 'jack', NULL, NULL, '$2y$10$hoW7XJhHRX7n7arqCEfj2OWHv6i4G.K4pDgK0fUQQU1/FU4xf4ohm', NULL, NULL),
(28, 'John', 'john', NULL, NULL, '$2y$10$y0p1u8KW2SvWoCLlKG6KFe82C2wsCbBBvINHmiVzKdPtChQOXc1ZC', NULL, 1),
(29, 'Bob', 'bob', NULL, NULL, '$2y$10$vQlBVKFumtbTbdZ/vmSnWO9bB20AEgqv8FjgYATXWQCAbiy4SYUdu', NULL, 2),
(30, 'Ted', 'ted', NULL, NULL, '$2y$10$4yo2jv/DUmoiFUFqcnR8uOXBLeooiG/UasBvtSY6YiLYEMTZPcW/y', NULL, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
