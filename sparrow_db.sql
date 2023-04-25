-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 25 2023 г., 15:19
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
-- База данных: `sparrow_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `author`
--

CREATE TABLE `author` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `author`
--

INSERT INTO `author` (`id`, `name`, `description`, `avatar`) VALUES
(1, 'John Doe', 'Jon Doe is lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi elit consequat ipsum.', '/images/author-img.png'),
(2, 'Itachi Uchiha', 'Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate, facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.', '/images/author-img.png'),
(3, 'Judy Lou', 'It is amazing women. She writes a lot of books and posts', '/images/author-img.png');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'Designs', 'Designs play a crucial role in various industries, from fashion to architecture, web development to engineering. A well-designed product, service or experience can have a significant impact on user engagement, customer loyalty and business success. Designs should be aesthetically pleasing and functional, while also considering factors such as usability, accessibility, sustainability and cultural relevance. Effective design requires a deep understanding of user needs and preferences, as well as a creative approach to problem-solving. It involves a range of skills, from sketching and prototyping to digital design tools and collaboration with other professionals. The design process should be iterative and adaptable, with continuous testing and refinement to ensure the best possible outcome.'),
(2, 'Internet', 'The internet has revolutionized the way we communicate, access information, and do business. It has connected people around the world and opened up endless opportunities for collaboration, learning, and innovation. The internet has given rise to new industries, such as e-commerce, social media, and online education. It has also transformed traditional industries, such as journalism, advertising, and entertainment. With the proliferation of smartphones and other mobile devices, the internet has become even more accessible, allowing people to stay connected on the go. As the internet continues to evolve, it presents both new opportunities and new challenges, such as privacy and security concerns.'),
(3, 'Typography', 'Typography is the art and technique of arranging type to make written language legible, readable, and appealing when displayed. Typography plays a significant role in design and is used in a variety of media such as print, web, and video. It involves selecting typefaces, point sizes, line lengths, line-spacing, and letter-spacing to create visual harmony and clarity. Typography can evoke emotions, convey messages, and influence user behavior. Effective typography considers readability, legibility, and hierarchy, allowing readers to navigate content with ease. It also involves understanding the cultural, historical, and psychological aspects of typefaces and how they affect communication. With the availability of digital tools, typography has become more accessible to designers, allowing for more experimentation and creativity.'),
(4, 'Photography', 'Photography is the art and science of capturing and preserving images using light. It is used for a variety of purposes, such as personal expression, documentation, advertising, and journalism. Photography involves a range of techniques, from selecting the right equipment and settings to composition and editing. Effective photography requires a deep understanding of light, color, and perspective, as well as the ability to capture the subject\'s essence and emotion. With the availability of digital cameras and editing software, photography has become more accessible to everyone, allowing for more creativity and experimentation. It is a powerful medium for storytelling and can evoke strong emotions and inspire change. Photography has also become an integral part of social media, allowing individuals to share their experiences and perspectives with the world.'),
(5, 'Web Development', 'Web development is the process of creating and maintaining websites and web applications. It involves a range of skills, from coding and programming to user experience design and content management. Web developers use a variety of programming languages and tools, such as HTML, CSS, JavaScript, and PHP, to build websites and web applications that are functional, secure, and visually appealing. Effective web development requires a deep understanding of user needs, business goals, and technical requirements, as well as the ability to work collaboratively with other professionals. With the growth of e-commerce and digital marketing, web development has become an essential component of many businesses\' operations. It is a dynamic and constantly evolving field, with new technologies and trends emerging regularly, requiring web developers to stay up-to-date with the latest best practices and tools.'),
(6, 'Projects', 'A project is a temporary endeavor designed to achieve a specific goal. Projects can be found in a variety of industries, such as construction, engineering, information technology, and marketing. Project management is the process of planning, organizing, and executing a project from start to finish, ensuring that it is completed on time, within budget, and to the required quality standards. Effective project management requires a range of skills, such as communication, leadership, problem-solving, and risk management. Projects may involve teams of people from different departments or organizations, requiring collaboration and coordination. They may also involve the use of specialized tools and techniques, such as project management software and agile methodologies. Successful projects can have a significant impact on the organization\'s performance, reputation, and bottom line.');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `id_post` int DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `text` text,
  `pubdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `id_post`, `author`, `text`, `pubdate`) VALUES
(1, 8, 'Itachi Uchiha', 'Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate, facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.', '2023-04-09 15:15:05'),
(2, 8, 'John Doe', 'Sumo euismod dissentiunt ne sit, ad eos iudico qualisque adversarium, tota falli et mei. Esse euismod urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus contentiones nec ad, nec et tantas semper delicatissimi.', '2023-04-09 15:15:09'),
(3, 7, 'Kakashi Hatake\r\n', 'Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris', '2023-04-09 15:16:38'),
(4, 7, 'John Doe\r\n', 'Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.', '2023-04-09 15:16:49'),
(5, 6, 'John Doe', 'Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.', '2023-04-09 16:03:54'),
(6, 6, 'Hinata Hyuga', 'Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.', '2023-04-09 16:03:54'),
(7, 8, 'Sawa', 'Hello world', '2023-04-09 16:18:30'),
(8, 8, 'Salym7', 'Hello! It is your best friends', '2023-04-09 16:19:45'),
(9, 5, 'The Last Bander', 'It is third post', '2023-04-10 12:21:31');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `text` text,
  `pubdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `image_path`, `text`, `pubdate`, `author`) VALUES
(2, 'Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin auctor 1.', '/images/post-image/post-image-1300x500-01.jpg', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.\r\n\r\nProin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.\r\n\r\nAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.\r\n\r\nProin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.', '2023-04-08 19:38:48', 1),
(4, 'Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin auctor 2.', '/images/post-image/post-image-1300x500-02.jpg', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.\r\n\r\nProin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.\r\n\r\nAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.\r\n\r\nProin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.', '2023-04-08 19:38:57', 2),
(5, 'Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin auctor 3.', '/images/post-image/post-image-1300x500-03.jpg', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.\r\n\r\nProin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.\r\n\r\nAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.\r\n\r\nProin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit 2. ', '2023-04-08 19:42:21', 3),
(6, 'Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin auctor 4', '/images/post-image/post-image-1300x500-01.jpg', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.\r\n\r\nProin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.\r\n\r\nAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.\r\n\r\nProin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit 3.', '2023-04-08 19:42:21', 1),
(7, 'Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin auctor 5.', '/images/post-image/post-image-1300x500-02.jpg', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.\r\n\r\nProin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.\r\n\r\nAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.\r\n\r\nProin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit 2. ', '2023-04-08 19:42:25', 2),
(8, 'Proin gravida nibh vel velit auctor aliquet Aenean sollicitudin auctor 6', '/images/post-image/post-image-1300x500-03.jpg', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.\r\n\r\nProin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.\r\n\r\nAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.\r\n\r\nProin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit 3.', '2023-04-08 19:42:25', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `post_categories`
--

CREATE TABLE `post_categories` (
  `id` int NOT NULL,
  `id_post` int DEFAULT NULL,
  `id_categories` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `post_categories`
--

INSERT INTO `post_categories` (`id`, `id_post`, `id_categories`) VALUES
(1, 2, 1),
(2, 2, 5),
(3, 4, 2),
(4, 6, 6),
(5, 7, 5),
(6, 8, 2),
(7, 5, 2),
(8, 7, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `post_tags`
--

CREATE TABLE `post_tags` (
  `id` int NOT NULL,
  `id_post` int DEFAULT NULL,
  `id_tags` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `post_tags`
--

INSERT INTO `post_tags` (`id`, `id_post`, `id_tags`) VALUES
(1, 2, 3),
(2, 2, 5),
(3, 2, 1),
(4, 2, 4),
(5, 4, 1),
(6, 5, 4),
(7, 6, 5),
(8, 7, 1),
(9, 8, 4),
(10, 2, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE `tags` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `name`) VALUES
(1, 'Wordpress'),
(2, 'Joomla'),
(3, 'Chost'),
(4, 'Weekend'),
(5, 'Drupal'),
(6, 'Someworlds');

-- --------------------------------------------------------

--
-- Структура таблицы `works`
--

CREATE TABLE `works` (
  `id` int NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `works`
--

INSERT INTO `works` (`id`, `title`, `text`, `date`, `image_path`) VALUES
(1, 'Geometrics.', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.', '2023-04-08 20:19:04', '/images/portfolio/geometrics.jpg'),
(2, 'Console', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.2', '2023-04-08 20:19:04', '/images/portfolio/console.jpg'),
(3, 'Camera man.', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.', '2023-04-08 20:19:07', 'images/portfolio/camera-man.jpg'),
(4, 'Into the light', 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. 4 ', '2023-04-08 20:19:07', 'images/portfolio/into-the-light.jpg'),
(5, 'Farmer Boy', 'lorem ipsun asdas 5', '2023-04-08 20:22:15', 'images/portfolio/farmerboy.jpg'),
(6, 'Coffee Cup', 'lorem ipsun asdas 6', '2023-04-08 20:23:21', 'images/portfolio/coffee-cup.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_post` (`id_post`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author` (`author`);

--
-- Индексы таблицы `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categories` (`id_categories`),
  ADD KEY `id_post` (`id_post`);

--
-- Индексы таблицы `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_post` (`id_post`),
  ADD KEY `id_tags` (`id_tags`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `author`
--
ALTER TABLE `author`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `works`
--
ALTER TABLE `works`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`author`) REFERENCES `author` (`id`);

--
-- Ограничения внешнего ключа таблицы `post_categories`
--
ALTER TABLE `post_categories`
  ADD CONSTRAINT `post_categories_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `post_categories_ibfk_2` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `post_tags`
--
ALTER TABLE `post_tags`
  ADD CONSTRAINT `post_tags_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id`) ON UPDATE RESTRICT,
  ADD CONSTRAINT `post_tags_ibfk_2` FOREIGN KEY (`id_tags`) REFERENCES `tags` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
