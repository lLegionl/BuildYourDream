-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: MySQL-8.2
-- Время создания: Мар 30 2025 г., 21:07
-- Версия сервера: 8.2.0
-- Версия PHP: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `build_house`
--

-- --------------------------------------------------------

--
-- Структура таблицы `houses`
--

CREATE TABLE `houses` (
  `id` int NOT NULL,
  `name` varchar(32) NOT NULL,
  `square` varchar(32) NOT NULL,
  `material` varchar(64) NOT NULL,
  `floor_count` int NOT NULL,
  `bedrooms_count` int NOT NULL,
  `sanitary_unit` int NOT NULL,
  `comfort` varchar(32) NOT NULL,
  `images` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `houses`
--

INSERT INTO `houses` (`id`, `name`, `square`, `material`, `floor_count`, `bedrooms_count`, `sanitary_unit`, `comfort`, `images`) VALUES
(1, 'опен вилладж', '200м2', 'клееный брус\r\n', 2, 3, 2, 'баня', '1orig.jpeg\r\n'),
(2, 'блисс 115', '115м2', 'клееный брус\r\n', 1, 3, 1, 'камин', '2.jpg\r\n'),
(3, 'сириус-а 300', '300м2', 'блоки Ytong/Porotherm\r\n', 2, 3, 3, 'камин , баня', '3.jpeg\r\n'),
(4, 'васта 300', '300м2', 'клееный брус\r\n', 2, 4, 3, 'террасса', '4.png\r\n'),
(5, 'фишт 600', '600м2', 'клееный брус\r\n', 2, 4, 5, 'джакузи', '5.jpg\r\n'),
(6, 'бухарест 300', '300м2', 'клееный брус\r\n', 2, 5, 3, 'бассейн', '6.jpg\r\n'),
(7, 'райт 210', '210м2', 'клееный брус\r\n', 2, 4, 2, '', '7.jpg\r\n'),
(8, 'palazzo palace', '880 м2', 'комбинированный\r\n', 2, 6, 6, 'гараж', '8.jpg\r\n'),
(9, ' Остров Фантазий', '465,6м2', 'Монолитно-кирпичный\r\n', 3, 6, 2, 'баня', '9.jpg\r\n'),
(10, 'мишино', '300м2', 'комбинированный\r\n', 2, 4, 3, '', '10.png\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `request`
--

CREATE TABLE `request` (
  `id` int NOT NULL,
  `houses_id` int NOT NULL,
  `user_id` int NOT NULL,
  `addres` varchar(96) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date` varchar(32) NOT NULL,
  `request_status` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'в обработке'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `surname` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `name`, `surname`, `email`, `phone`, `password`) VALUES
(1, 'Legion', 'Алексей', 'Шатров', 'Dhatro@yandex.ru', '+7 (919) 725-88-05', '222');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `houses_id` (`houses_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `houses`
--
ALTER TABLE `houses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `request`
--
ALTER TABLE `request`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`houses_id`) REFERENCES `houses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
