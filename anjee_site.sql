-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 13 2023 г., 15:06
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `anjee_site`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Подработка'),
(2, 'Курьер'),
(3, 'Водитель'),
(4, 'Продавец'),
(5, 'Сварщик'),
(6, 'Администратор'),
(7, 'Строитель'),
(8, 'Программист'),
(9, 'Менеджер');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `category` int NOT NULL,
  `description` varchar(200) NOT NULL,
  `salary` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `category`, `description`, `salary`) VALUES
(1, 6, 'Администратор магазина', '2500.00'),
(2, 6, 'Администратор клиники', '2000.00'),
(3, 6, 'Администратор магазина', '1700.00'),
(4, 7, 'Заливка полов', '3000.00'),
(5, 7, 'Разнорабочий', '1500.00'),
(6, 7, 'Штукатур-маляр', '2000.00'),
(7, 2, 'Курьер Яндекс.Еда', '2500.00'),
(8, 2, 'Курьер Delivery Club', '2200.00'),
(9, 2, 'Автокурьер', '2700.00'),
(10, 1, 'Промоутер', '150.00'),
(11, 1, 'Охранник (вахта)', '1500.00'),
(12, 1, 'Оператор call-центра', '1700.00'),
(13, 3, 'Водитель Ultima', '10000.00'),
(14, 3, 'Водитель на свадьбу', '7000.00'),
(15, 3, 'Водитель на экскурсию', '5000.00'),
(16, 4, 'Кассир Золотое Яблоко', '2500.00'),
(17, 4, 'Кассир Пятерочка', '1800.00'),
(18, 4, 'Кассир Лента', '2000.00'),
(19, 5, 'Сварщик (полуавтомат)', '2500.00'),
(20, 5, 'Сварщик-монтажник', '2000.00'),
(21, 5, 'Сварщик-монтажник', '1900.00'),
(22, 8, 'Верстальщик сайта', '5000.00'),
(23, 8, 'Программист php', '3500.00'),
(24, 8, 'Программист C#', '4000.00'),
(25, 9, 'Менеджер маркетплейса', '2300.00'),
(26, 9, 'Менеджер по продажам', '2500.00'),
(27, 9, 'Менеджер (выкуп авто)', '3500.00');

-- --------------------------------------------------------

--
-- Структура таблицы `type`
--

CREATE TABLE `type` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(1, 'Заказчик'),
(2, 'Исполнитель');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `surname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `otch` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `pflink` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `phnum` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `type` int NOT NULL,
  `aboutme` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `surname`, `name`, `otch`, `dateofbirth`, `pflink`, `phnum`, `email`, `type`, `aboutme`, `login`, `password`) VALUES
(1, 'Павлов', 'Александр', 'Романович', '2004-05-03', 'https://vk.com/k1osh1', '89655693312', 'k1osh1mo@mail.ru', 2, 'bombastic', 'admin', '$2y$10$atFOLnFUu7ZDGE.IBNfyZuCgPoX7xCQ0KMGDAP/K7Gsm59DHQtF0S'),
(2, 'Владимиров', 'Владимир', 'Владимирович', '1995-03-25', 'https://www.youtube.com/', '89309361735', 'vova@mail.ru', 1, 'vova заказчик', 'vova', '$2y$10$I69ZqWqLSI5K3Z4bJDcYIez7zpHqtXej73nExCTe3FoguD0a/FC9K'),
(3, 'Иванов', 'Иван', 'Иванович', '1997-05-23', 'https://www.youtube.com/', '88005553535', 'ivan@mail.ru', 2, 'исполнитель', 'ivan', '$2y$10$WMFJQDtC5f/oY3KAIuMy6u9LOwA2eXC6VOEIP2n6Z.OZ9iTUCHfKC'),
(4, 'Антонов', 'Антон', 'Антонович', '2001-04-19', '', '89998423098', 'anton@mail.ru', 1, 'заказчик', 'anton', '$2y$10$zikEXrr9zy48ONeS.EhHh.6EQxRwhN7dxRV1dywtfUyLoB8XpLeHy'),
(5, 'Басинов', 'Александр', 'Евгеньевич', '2005-05-25', 'https://vk.com/basinov', '88005553556', 'basinov@mail.ru', 2, 'asdasdas', 'sanya', '$2y$10$bVS476ioCQACl13GB4rJ3OukTpGK85dD3MnFj4rgzp9pTgPzlRxNW');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Индексы таблицы `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `type`
--
ALTER TABLE `type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`id`);

--
-- Ограничения внешнего ключа таблицы `type`
--
ALTER TABLE `type`
  ADD CONSTRAINT `type_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
