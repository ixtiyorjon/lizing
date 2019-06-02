-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 02 2019 г., 14:42
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lizing`
--

-- --------------------------------------------------------

--
-- Структура таблицы `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `body` text NOT NULL,
  `video` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `body`, `video`, `created_at`, `updated_at`) VALUES
(1, '“O‘zagrolizing” акциядорлик жамияти акциядорлари диққатига! EN', 'Жорий йилнинг 13 февраль куни  Ўзагролизинг  акциядорлик жамиятида 2018 йил якунларига бағишланган коллегия йиғилиши бўлиб ўтди Жорий йилнинг 13 февраль куни Ўзагролизинг  акциядорлик жамиятида 2018 йил якунларига бағишланган коллегия йиғилиши бўлиб ўтди  interdum mollis.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/MIyTMkLz_Ao\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2019-05-31 23:44:00', '2019-06-01 01:50:35');

-- --------------------------------------------------------

--
-- Структура таблицы `answers`
--

CREATE TABLE `answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `body` text NOT NULL,
  `question_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(2, NULL, 1, 'Category 2', 'category-2', '2019-05-31 07:10:47', '2019-05-31 07:10:47');

-- --------------------------------------------------------

--
-- Структура таблицы `category_lizings`
--

CREATE TABLE `category_lizings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `category_rule_staffs`
--

CREATE TABLE `category_rule_staffs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `category_workers`
--

CREATE TABLE `category_workers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) NOT NULL,
  `type` varchar(191) NOT NULL,
  `display_name` varchar(191) NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, '{}', 2),
(31, 5, 'category_id', 'text', 'Category', 0, 0, 0, 0, 0, 0, '{}', 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 0, 0, 0, 0, 0, 0, '{}', 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '{}', 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 0, 0, 0, 0, 0, 0, '{}', 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 0, 0, 0, 0, 0, 0, '{}', 10),
(39, 5, 'status', 'select_dropdown', 'Status', 0, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"ACTIVE\":\"ACTIVE\",\"INACTIVE\":\"INACTIVE\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 0, 0, 0, 0, 0, '{}', 14),
(43, 5, 'featured', 'checkbox', 'Featured', 0, 0, 0, 0, 0, 0, '{}', 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(56, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 7, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
(58, 7, 'body', 'text_area', 'Body', 1, 1, 1, 1, 1, 1, '{}', 3),
(59, 7, 'video', 'text_area', 'Video', 1, 1, 1, 1, 1, 1, '{}', 4),
(60, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(61, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(62, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(63, 8, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(64, 8, 'lavozim', 'text', 'Lavozim', 1, 1, 1, 1, 1, 1, '{}', 4),
(65, 8, 'qabul_kuni', 'text', 'Qabul Kuni', 1, 1, 1, 1, 1, 1, '{}', 5),
(66, 8, 'tel', 'text', 'Tel', 1, 1, 1, 1, 1, 1, '{}', 6),
(67, 8, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 7),
(68, 8, 'category_workers_id', 'text', 'Category Workers Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(69, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
(70, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(71, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(72, 9, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 2),
(73, 9, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 3),
(74, 9, 'body', 'text_area', 'Body', 1, 1, 1, 1, 1, 1, '{}', 4),
(75, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(76, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(77, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(78, 10, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
(79, 10, 'body', 'text', 'Body', 1, 1, 1, 1, 1, 1, '{}', 3),
(80, 10, 'author', 'text', 'Author', 1, 1, 1, 1, 1, 1, '{}', 4),
(81, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(82, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(83, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(84, 11, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
(85, 11, 'image', 'text', 'Image', 1, 1, 1, 1, 1, 1, '{}', 3),
(86, 11, 'url', 'text', 'Url', 1, 1, 1, 1, 1, 1, '{}', 4),
(87, 11, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(88, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(89, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(90, 13, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
(91, 13, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 3),
(92, 13, 'body', 'text_area', 'Body', 1, 1, 1, 1, 1, 1, '{}', 4),
(93, 13, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 5),
(94, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(95, 13, 'status', 'select_dropdown', 'Status', 0, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"ACTIVE\":\"ACTIVE\",\"INACTIVE\":\"INACTIVE\"}}', 7),
(96, 13, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `display_name_singular` varchar(191) NOT NULL,
  `display_name_plural` varchar(191) NOT NULL,
  `icon` varchar(191) DEFAULT NULL,
  `model_name` varchar(191) DEFAULT NULL,
  `policy_name` varchar(191) DEFAULT NULL,
  `controller` varchar(191) DEFAULT NULL,
  `description` varchar(191) DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(5, 'posts', 'posts', 'Новости', 'Новости', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2019-05-31 07:10:47', '2019-06-01 06:29:33'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(7, 'abouts', 'abouts', 'About', 'Abouts', NULL, 'App\\About', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-05-31 07:11:32', '2019-06-01 01:34:53'),
(8, 'workers', 'workers', 'Worker', 'Workers', NULL, 'App\\Worker', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-05-31 08:27:55', '2019-05-31 08:27:55'),
(9, 'sliders', 'sliders', 'Slider', 'Sliders', NULL, 'App\\Slider', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-05-31 08:28:12', '2019-06-01 01:17:36'),
(10, 'information', 'information', 'Information', 'Information', NULL, 'App\\Information', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-05-31 08:28:43', '2019-05-31 08:28:43'),
(11, 'links', 'links', 'Link', 'Links', NULL, 'App\\Link', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-06-01 02:02:43', '2019-06-01 02:17:39'),
(13, 'news', 'news', 'News', 'News', NULL, 'App\\News', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-06-01 06:37:43', '2019-06-01 07:52:43');

-- --------------------------------------------------------

--
-- Структура таблицы `information`
--

CREATE TABLE `information` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `body` text NOT NULL,
  `author` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `links`
--

CREATE TABLE `links` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `url` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `links`
--

INSERT INTO `links` (`id`, `title`, `image`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Republic of Uzbekistan Constitution', 'https://gov.uz/media/4547c694-58cc-8ec9-aef6-1b9a2939748e.png', 'http://constitution.uz/uz', '2019-06-01 02:18:49', '2019-06-01 02:18:49'),
(5, 'Ўзбекистон Республикаси Конституцияси', 'https://gov.uz/media/4547c694-58cc-8ec9-aef6-1b9a2939748e.png', 'http://constitution.uz/uz', '2019-06-01 02:44:56', '2019-06-01 02:44:56'),
(6, 'Ягона интерактив давлат хизматлари портали', 'https://gov.uz/media/9cf1edbf-8d08-0a43-1f73-f89c7ef8c9f7.png', 'https://my.gov.uz/', '2019-06-01 02:44:56', '2019-06-01 02:44:56'),
(7, 'Ўзбекистон Республикаси очиқ маълумотлар портали', 'https://gov.uz/media/41c1e031-fe7c-e01e-2ce6-00271a597fd1.png', 'https://dxarid.uzex.uz/', '2019-06-01 02:44:56', '2019-06-01 02:44:56'),
(8, 'eStat 3.0 автоматлаштирилган ахборот тизими', 'https://gov.uz/media/1b32726c-e232-fbd8-cf3f-4d0a09bd4518.png', 'http://stat.uz/index.php/hizmatlar/elektronnaya-otchetnost', '2019-06-01 02:44:56', '2019-06-01 02:44:56'),
(9, 'Ўзбекистон Республикаси Қонун ҳужжатлари маълумотлари миллий базаси', 'https://gov.uz/media/be03e7fc-a81d-ee71-8897-2dc4029ff3ff.png', 'http://www.lex.uz/', '2019-06-01 02:44:56', '2019-06-01 02:44:56'),
(10, 'Ўзбeкистон Рeспубликасида элeктрон лицензиялаш', 'https://gov.uz/media/2fef45e4-9982-97b8-499e-05f566bcae57.png', 'https://license.gov.uz/', '2019-06-01 02:44:56', '2019-06-01 02:44:56'),
(11, 'Электрон почта хизмати', 'https://gov.uz/media/4b333371-195d-0b46-07fa-f3c0b25098ca.png', 'http://www.umail.uz/uz_latn', '2019-06-01 02:44:56', '2019-06-01 02:44:56'),
(12, 'Ягона идентификация тизими', 'https://gov.uz/media/a9b29887-3396-1d1b-341d-0d9d115c3730.png', 'https://id.gov.uz/', '2019-06-01 02:44:56', '2019-06-01 02:44:56'),
(13, 'Давлат ахборот ресурслари ва давлат органларининг ахборот тизимлари реестри', 'https://gov.uz/media/b90d6bb9-2847-b49d-78e2-a6dffc3570bd.png\" class=\"newProjectIcon projectIcon10', 'http://reestr.uz/', '2019-06-01 02:44:56', '2019-06-01 02:44:56'),
(14, 'Солиқ ва молиявий ҳисоботларини электрон шаклда тақдим этиш тизими', 'https://gov.uz/media/cf4bb4e4-9654-d2d1-7eff-003c5f8a8e1f.png', 'http://hisobot.uz/index/index/index/1;jsessionid=E4E0B477F468599EFA7692776EFDCA7A?lang=uz', '2019-06-01 02:44:56', '2019-06-01 02:44:56'),
(15, 'Таълим портали', 'https://gov.uz/media/e8fe705c-efeb-fece-b6c7-c2262577d5fe.png', 'http://ziyonet.uz/uzc', '2019-06-01 02:44:56', '2019-06-01 02:44:56'),
(16, 'Корпоратив харидлар савдо тизими', 'https://gov.uz/media/6ae8db81-ea08-2a7b-c9f0-585c66f38fda.png', 'https://exarid.uzex.uz/', '2019-06-01 02:44:56', '2019-06-01 02:44:56'),
(17, 'Ўзбекистон Республикаси норматив ҳуқуқий ҳужжатларнинг муҳокамаси', 'https://gov.uz/media/4933dd71-a7f1-3dec-fca9-7794cf6cabee.png', 'http://regulation.gov.uz/uz', '2019-06-01 02:44:56', '2019-06-01 02:44:56'),
(18, 'Декларантлар портали', 'https://gov.uz/media/cc637049-fae0-42e0-6999-0f2b68e46e99.png', 'http://www.customs.uz/uz/', '2019-06-01 02:44:56', '2019-06-01 02:44:56'),
(19, 'Компьютер саводхонлигини баҳолаш тизими ', 'https://gov.uz/media/ee3e9c7f-2c2d-03a1-d825-a50c9b042368.png', 'http://ksbt.uz/', '2019-06-01 02:44:56', '2019-06-01 02:44:56');

-- --------------------------------------------------------

--
-- Структура таблицы `lizings`
--

CREATE TABLE `lizings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `category_lizings_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-05-31 07:10:46', '2019-05-31 07:10:46');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) NOT NULL,
  `url` varchar(191) NOT NULL,
  `target` varchar(191) NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) DEFAULT NULL,
  `color` varchar(191) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) DEFAULT NULL,
  `parameters` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Главный', '/admin', '_self', 'voyager-home', NULL, NULL, 1, '2019-05-31 07:10:46', '2019-05-31 23:58:35', NULL, ''),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, 5, 4, '2019-05-31 07:10:46', '2019-06-01 06:44:02', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, 5, 3, '2019-05-31 07:10:46', '2019-06-01 06:44:02', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, 5, 7, '2019-05-31 07:10:46', '2019-06-01 06:44:02', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2019-05-31 07:10:46', '2019-06-01 06:44:02', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 6, '2019-05-31 07:10:46', '2019-06-01 06:44:02', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 8, '2019-05-31 07:10:46', '2019-06-01 06:44:02', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 9, '2019-05-31 07:10:46', '2019-06-01 06:44:02', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 10, '2019-05-31 07:10:46', '2019-06-01 06:44:02', 'voyager.bread.index', NULL),
(10, 1, 'Настройки сайта', '/admin/settings', '_self', 'voyager-settings', NULL, NULL, 2, '2019-05-31 07:10:46', '2019-06-01 00:00:13', NULL, ''),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, 5, 2, '2019-05-31 07:10:47', '2019-06-01 06:44:02', 'voyager.categories.index', NULL),
(12, 1, 'posts', '/admin/posts', '_self', 'Новости', NULL, 5, 1, '2019-05-31 07:10:47', '2019-06-01 06:44:11', NULL, ''),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, 5, 5, '2019-05-31 07:10:47', '2019-06-01 06:44:02', 'voyager.pages.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 11, '2019-05-31 07:10:47', '2019-06-01 06:44:02', 'voyager.hooks', NULL),
(15, 1, 'О Нас', '/admin/abouts', '_self', 'voyager-people', NULL, NULL, 3, '2019-05-31 07:11:32', '2019-06-01 06:44:02', NULL, ''),
(16, 1, 'Рабочие', '/admin/workers', '_self', 'voyager-hammer', NULL, NULL, 4, '2019-05-31 08:27:55', '2019-06-01 06:44:02', NULL, ''),
(17, 1, 'Слайдеры', '/admin/sliders', '_self', 'voyager-photos', NULL, NULL, 5, '2019-05-31 08:28:12', '2019-06-01 06:44:02', NULL, ''),
(18, 1, 'Информация', '/admin/information', '_self', 'voyager-book', NULL, NULL, 6, '2019-05-31 08:28:43', '2019-06-01 06:44:02', NULL, ''),
(19, 1, 'Полезные ссылки', '/admin/links', '_self', 'voyager-forward', NULL, NULL, 7, '2019-06-01 02:02:43', '2019-06-01 06:44:02', NULL, ''),
(20, 1, 'Новости', '/admin/news', '_self', 'voyager-documentation', NULL, NULL, 8, '2019-06-01 06:37:43', '2019-06-01 06:44:02', NULL, '');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_01_01_000000_create_pages_table', 1),
(6, '2016_01_01_000000_create_posts_table', 1),
(7, '2016_02_15_204651_create_categories_table', 1),
(8, '2016_05_19_173453_create_menu_table', 1),
(9, '2016_10_21_190000_create_roles_table', 1),
(10, '2016_10_21_190000_create_settings_table', 1),
(11, '2016_11_30_135954_create_permission_table', 1),
(12, '2016_11_30_141208_create_permission_role_table', 1),
(13, '2016_12_26_201236_data_types__add__server_side', 1),
(14, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(15, '2017_01_14_005015_create_translations_table', 1),
(16, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(17, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(18, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(19, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(20, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(21, '2017_08_05_000000_add_group_to_settings_table', 1),
(22, '2017_11_26_013050_add_user_role_relationship', 1),
(23, '2017_11_26_015000_create_user_roles_table', 1),
(24, '2018_03_11_000000_add_user_settings', 1),
(25, '2018_03_14_000000_add_details_to_data_types_table', 1),
(26, '2018_03_16_000000_make_settings_value_nullable', 1),
(27, '2019_05_30_113906_create_sliders_table', 1),
(28, '2019_05_30_120329_create_abouts_table', 1),
(29, '2019_05_30_120419_create_useful_ustafs_table', 1),
(30, '2019_05_30_120447_create_questions_table', 1),
(31, '2019_05_30_120531_create_answers_table', 1),
(32, '2019_05_30_120621_create_information_table', 1),
(33, '2019_05_30_120705_create_online_orders_table', 1),
(34, '2019_05_30_123321_create_category_rule_staffs_table', 1),
(35, '2019_05_30_123519_create_rule_staffs_table', 1),
(36, '2019_05_30_123616_create_category_lizings_table', 1),
(37, '2019_05_30_123624_create_lizings_table', 1),
(38, '2019_05_30_123737_create_category_workers_table', 1),
(39, '2019_05_30_123808_create_workers_table', 1),
(40, '2019_06_01_070145_create_links_table', 2),
(41, '2019_06_01_113542_create_news_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(191) DEFAULT 'inactive',
  `slug` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `body`, `created_at`, `updated_at`, `status`, `slug`) VALUES
(1, 'АО «Узагролизинг» Объявляет конкурс по выбору аудиторской или консалтинговой организации', 'news\\June2019\\FWaBaBDbw7yNAyLFsnCC.jpg', 'АО Узагролизинг  Объявляет конкурс по выбору аудиторской или консалтинговой организации АО Узагролизинг  Объявляет конкурс по выбору аудиторской или консалтинговой организации ', '2019-06-01 06:46:00', '2019-06-01 06:55:58', 'ACTIVE', 'ao-uzagrolizing-ob-yavlyaet-konkurs-po-vyboru-auditorskoj-ili-konsaltingovoj-organizacii'),
(2, '“O‘zagrolizing” акциядорлик жамияти акциядорлари диққатига! EN', 'news\\June2019\\Tq8sHMzCWsq6GZiSJLPP.jpg', 'АО Узагролизинг  Объявляет конкурс по выбору аудиторской или консалтинговой организации АО Узагролизинг  Объявляет конкурс по выбору аудиторской или консалтинговой организации ', '2019-06-01 06:47:00', '2019-06-01 06:55:45', 'ACTIVE', 'o-zagrolizing-akciyadorlik-zhamiyati-akciyadorlari-di-atiga-en'),
(3, 'Ўзбекистон Республикаси Конституцияси11', 'news\\June2019\\da8y5kdKYCbC2SolvBqu.jpg', '“O‘zagrolizing” акциядорлик жамияти акциядорлари диққатига! EN“O‘zagrolizing” акциядорлик жамияти акциядорлари диққатига! EN“O‘zagrolizing” акциядорлик жамияти акциядорлари диққатига! EN“O‘zagrolizing” акциядорлик жамияти акциядорлари диққатига! EN“O‘zagrolizing” акциядорлик жамияти акциядорлари диққатига! EN', '2019-06-01 07:07:00', '2019-06-01 07:16:50', 'ACTIVE', 'zbekiston-respublikasi-konstituciyasi11');

-- --------------------------------------------------------

--
-- Структура таблицы `online_orders`
--

CREATE TABLE `online_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `data` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `excerpt` text,
  `body` text,
  `image` varchar(191) DEFAULT NULL,
  `slug` varchar(191) NOT NULL,
  `meta_description` text,
  `meta_keywords` text,
  `status` enum('ACTIVE','INACTIVE') NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2019-05-31 07:10:47', '2019-05-31 07:10:47');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) NOT NULL,
  `table_name` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(2, 'browse_bread', NULL, '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(3, 'browse_database', NULL, '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(4, 'browse_media', NULL, '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(5, 'browse_compass', NULL, '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(6, 'browse_menus', 'menus', '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(7, 'read_menus', 'menus', '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(8, 'edit_menus', 'menus', '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(9, 'add_menus', 'menus', '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(10, 'delete_menus', 'menus', '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(11, 'browse_roles', 'roles', '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(12, 'read_roles', 'roles', '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(13, 'edit_roles', 'roles', '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(14, 'add_roles', 'roles', '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(15, 'delete_roles', 'roles', '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(16, 'browse_users', 'users', '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(17, 'read_users', 'users', '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(18, 'edit_users', 'users', '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(19, 'add_users', 'users', '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(20, 'delete_users', 'users', '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(21, 'browse_settings', 'settings', '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(22, 'read_settings', 'settings', '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(23, 'edit_settings', 'settings', '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(24, 'add_settings', 'settings', '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(25, 'delete_settings', 'settings', '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(26, 'browse_categories', 'categories', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(27, 'read_categories', 'categories', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(28, 'edit_categories', 'categories', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(29, 'add_categories', 'categories', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(30, 'delete_categories', 'categories', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(31, 'browse_posts', 'posts', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(32, 'read_posts', 'posts', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(33, 'edit_posts', 'posts', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(34, 'add_posts', 'posts', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(35, 'delete_posts', 'posts', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(36, 'browse_pages', 'pages', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(37, 'read_pages', 'pages', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(38, 'edit_pages', 'pages', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(39, 'add_pages', 'pages', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(40, 'delete_pages', 'pages', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(41, 'browse_hooks', NULL, '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(42, 'browse_abouts', 'abouts', '2019-05-31 07:11:32', '2019-05-31 07:11:32'),
(43, 'read_abouts', 'abouts', '2019-05-31 07:11:32', '2019-05-31 07:11:32'),
(44, 'edit_abouts', 'abouts', '2019-05-31 07:11:32', '2019-05-31 07:11:32'),
(45, 'add_abouts', 'abouts', '2019-05-31 07:11:32', '2019-05-31 07:11:32'),
(46, 'delete_abouts', 'abouts', '2019-05-31 07:11:32', '2019-05-31 07:11:32'),
(47, 'browse_workers', 'workers', '2019-05-31 08:27:55', '2019-05-31 08:27:55'),
(48, 'read_workers', 'workers', '2019-05-31 08:27:55', '2019-05-31 08:27:55'),
(49, 'edit_workers', 'workers', '2019-05-31 08:27:55', '2019-05-31 08:27:55'),
(50, 'add_workers', 'workers', '2019-05-31 08:27:55', '2019-05-31 08:27:55'),
(51, 'delete_workers', 'workers', '2019-05-31 08:27:55', '2019-05-31 08:27:55'),
(52, 'browse_sliders', 'sliders', '2019-05-31 08:28:12', '2019-05-31 08:28:12'),
(53, 'read_sliders', 'sliders', '2019-05-31 08:28:12', '2019-05-31 08:28:12'),
(54, 'edit_sliders', 'sliders', '2019-05-31 08:28:12', '2019-05-31 08:28:12'),
(55, 'add_sliders', 'sliders', '2019-05-31 08:28:12', '2019-05-31 08:28:12'),
(56, 'delete_sliders', 'sliders', '2019-05-31 08:28:12', '2019-05-31 08:28:12'),
(57, 'browse_information', 'information', '2019-05-31 08:28:43', '2019-05-31 08:28:43'),
(58, 'read_information', 'information', '2019-05-31 08:28:43', '2019-05-31 08:28:43'),
(59, 'edit_information', 'information', '2019-05-31 08:28:43', '2019-05-31 08:28:43'),
(60, 'add_information', 'information', '2019-05-31 08:28:43', '2019-05-31 08:28:43'),
(61, 'delete_information', 'information', '2019-05-31 08:28:43', '2019-05-31 08:28:43'),
(62, 'browse_links', 'links', '2019-06-01 02:02:43', '2019-06-01 02:02:43'),
(63, 'read_links', 'links', '2019-06-01 02:02:43', '2019-06-01 02:02:43'),
(64, 'edit_links', 'links', '2019-06-01 02:02:43', '2019-06-01 02:02:43'),
(65, 'add_links', 'links', '2019-06-01 02:02:43', '2019-06-01 02:02:43'),
(66, 'delete_links', 'links', '2019-06-01 02:02:43', '2019-06-01 02:02:43'),
(67, 'browse_news', 'news', '2019-06-01 06:37:43', '2019-06-01 06:37:43'),
(68, 'read_news', 'news', '2019-06-01 06:37:43', '2019-06-01 06:37:43'),
(69, 'edit_news', 'news', '2019-06-01 06:37:43', '2019-06-01 06:37:43'),
(70, 'add_news', 'news', '2019-06-01 06:37:43', '2019-06-01 06:37:43'),
(71, 'delete_news', 'news', '2019-06-01 06:37:43', '2019-06-01 06:37:43');

-- --------------------------------------------------------

--
-- Структура таблицы `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) NOT NULL,
  `seo_title` varchar(191) DEFAULT NULL,
  `excerpt` text,
  `body` text NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `slug` varchar(191) NOT NULL,
  `meta_description` text,
  `meta_keywords` text,
  `status` varchar(191) DEFAULT NULL,
  `featured` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `display_name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-05-31 07:10:46', '2019-05-31 07:10:46'),
(2, 'user', 'Normal User', '2019-05-31 07:10:46', '2019-05-31 07:10:46');

-- --------------------------------------------------------

--
-- Структура таблицы `rule_staffs`
--

CREATE TABLE `rule_staffs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `body` text NOT NULL,
  `category_rule_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) NOT NULL,
  `display_name` varchar(191) NOT NULL,
  `value` text,
  `details` text,
  `type` varchar(191) NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.site_name', 'Название сайта', 'UzAgroLizing', NULL, 'text', 1, 'site'),
(6, 'admin.title', 'Admin Title', 'Admin Panel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', 'settings\\June2019\\N1QIlildkrk2TMu9F8ej.png', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(11, 'admin.bg_image', 'Admin Background Image', NULL, NULL, 'image', 6, 'Admin'),
(12, 'site.tel', 'Телефон', '+99871 244-62-73', NULL, 'text', 8, 'site'),
(13, 'site.email', 'Почта', 'infoagroleasing@gmail.com', NULL, 'text', 9, 'site'),
(14, 'site.address', 'Адрес', 'Тошкент ш., 100011, Абай кўчаси, 4-А', NULL, 'text', 10, 'site'),
(15, 'site.telegram', 'Соц. сети', 'info@agroleasing.uz', NULL, 'text', 11, 'site');

-- --------------------------------------------------------

--
-- Структура таблицы `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) NOT NULL,
  `title` varchar(191) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'sliders\\June2019\\178qOQa2JeqjpsrshR5D.jpg', '“O‘zagrolizing” акциядорлик жамияти акциядорлари диққатига! EN', 'Жорий йилнинг 13 февраль куни “Ўзагролизинг” акциядорлик жамиятида 2018 йил якунларига бағишланган коллегия йиғилиши бўлиб ўтди Жорий йилнинг 13 февраль куни \n                    “Ўзагролизинг” акциядорлик жамиятида 2018 йил якунларига бағишланган коллегия йиғилиши бўлиб ўтди\n                    interdum mollis.', '2019-06-01 01:18:21', '2019-06-01 01:18:21'),
(2, 'sliders\\June2019\\lVfUD16rzxwT4LaXa4CR.jpg', 'Leasing in Uzbekistan', 'The joint-stock company Bosh Maxsus Konstruktorlik Byurosi-Agromash (AO BMKB-Agromash) was transformed in 1995 from the GSKB on machines for cotton growing, created in 1946. Since the beginning of the 90s, the design office has been engaged in research and development applied and developmental works on the creation, testing and implementation of new equipment not only for cotton growing, but also for other branches of agriculture (grain growing, fodder production, potato growing, etc.), the activity is science.', '2019-06-01 01:23:00', '2019-06-01 01:24:28');

-- --------------------------------------------------------

--
-- Структура таблицы `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) NOT NULL,
  `column_name` varchar(191) NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2019-05-31 07:10:47', '2019-05-31 07:10:47'),
(31, 'data_types', 'display_name_singular', 7, 'ru', 'About', '2019-05-31 08:29:07', '2019-05-31 08:29:07'),
(32, 'data_types', 'display_name_singular', 7, 'uz', 'About', '2019-05-31 08:29:07', '2019-05-31 08:29:07'),
(33, 'data_types', 'display_name_singular', 7, 'uzk', 'About', '2019-05-31 08:29:07', '2019-05-31 08:29:07'),
(34, 'data_types', 'display_name_plural', 7, 'ru', 'Abouts', '2019-05-31 08:29:07', '2019-05-31 08:29:07'),
(35, 'data_types', 'display_name_plural', 7, 'uz', 'Abouts', '2019-05-31 08:29:07', '2019-05-31 08:29:07'),
(36, 'data_types', 'display_name_plural', 7, 'uzk', 'Abouts', '2019-05-31 08:29:07', '2019-05-31 08:29:07'),
(37, 'abouts', 'title', 1, 'ru', '“O‘zagrolizing” акциядорлик жамияти акциядорлари диққатига! RU', '2019-05-31 23:44:06', '2019-06-01 01:11:16'),
(38, 'abouts', 'title', 1, 'uz', '“O‘zagrolizing” акциядорлик жамияти акциядорлари диққатига! UZ', '2019-05-31 23:44:06', '2019-06-01 01:11:16'),
(39, 'abouts', 'title', 1, 'uzk', '“O‘zagrolizing” акциядорлик жамияти акциядорлари диққатига! UZK', '2019-05-31 23:44:06', '2019-06-01 01:11:16'),
(40, 'abouts', 'body', 1, 'ru', 'Жорий йилнинг 13 февраль куни  Ўзагролизинг  акциядорлик жамиятида 2018 йил якунларига бағишланган коллегия йиғилиши бўлиб ўтди Жорий йилнинг 13 февраль куни Ўзагролизинг  акциядорлик жамиятида 2018 йил якунларига бағишланган коллегия йиғилиши бўлиб ўтди  interdum mollis.', '2019-05-31 23:44:06', '2019-06-01 01:35:51'),
(41, 'abouts', 'body', 1, 'uz', 'Жорий йилнинг 13 февраль куни  Ўзагролизинг  акциядорлик жамиятида 2018 йил якунларига бағишланган коллегия йиғилиши бўлиб ўтди Жорий йилнинг 13 февраль куни Ўзагролизинг  акциядорлик жамиятида 2018 йил якунларига бағишланган коллегия йиғилиши бўлиб ўтди  interdum mollis.', '2019-05-31 23:44:06', '2019-06-01 01:35:51'),
(42, 'abouts', 'body', 1, 'uzk', 'Жорий йилнинг 13 февраль куни  Ўзагролизинг  акциядорлик жамиятида 2018 йил якунларига бағишланган коллегия йиғилиши бўлиб ўтди Жорий йилнинг 13 февраль куни Ўзагролизинг  акциядорлик жамиятида 2018 йил якунларига бағишланган коллегия йиғилиши бўлиб ўтди  interdum mollis.', '2019-05-31 23:44:06', '2019-06-01 01:35:51'),
(43, 'menu_items', 'title', 15, 'ru', 'О Нас', '2019-05-31 23:51:23', '2019-05-31 23:51:23'),
(44, 'menu_items', 'title', 15, 'uz', 'О Нас', '2019-05-31 23:51:23', '2019-05-31 23:51:23'),
(45, 'menu_items', 'title', 15, 'uzk', 'О Нас', '2019-05-31 23:51:23', '2019-05-31 23:51:23'),
(46, 'menu_items', 'title', 16, 'ru', 'Рабочие', '2019-05-31 23:53:13', '2019-05-31 23:53:13'),
(47, 'menu_items', 'title', 16, 'uz', 'Рабочие', '2019-05-31 23:53:13', '2019-05-31 23:53:13'),
(48, 'menu_items', 'title', 16, 'uzk', 'Рабочие', '2019-05-31 23:53:13', '2019-05-31 23:53:13'),
(49, 'menu_items', 'title', 17, 'ru', 'Слайдеры', '2019-05-31 23:54:24', '2019-05-31 23:54:24'),
(50, 'menu_items', 'title', 17, 'uz', 'Слайдеры', '2019-05-31 23:54:24', '2019-05-31 23:54:24'),
(51, 'menu_items', 'title', 17, 'uzk', 'Слайдеры', '2019-05-31 23:54:24', '2019-05-31 23:54:24'),
(52, 'menu_items', 'title', 18, 'ru', 'Информация', '2019-05-31 23:55:36', '2019-05-31 23:55:36'),
(53, 'menu_items', 'title', 18, 'uz', 'Информация', '2019-05-31 23:55:36', '2019-05-31 23:55:36'),
(54, 'menu_items', 'title', 18, 'uzk', 'Информация', '2019-05-31 23:55:36', '2019-05-31 23:55:36'),
(55, 'menu_items', 'title', 1, 'ru', 'Главный', '2019-05-31 23:58:35', '2019-05-31 23:58:35'),
(56, 'menu_items', 'title', 1, 'uz', 'Главный', '2019-05-31 23:58:35', '2019-05-31 23:58:35'),
(57, 'menu_items', 'title', 1, 'uzk', 'Главный', '2019-05-31 23:58:35', '2019-05-31 23:58:35'),
(58, 'menu_items', 'title', 10, 'ru', 'Настройки сайта', '2019-06-01 00:00:13', '2019-06-01 00:00:13'),
(59, 'menu_items', 'title', 10, 'uz', 'Настройки сайта', '2019-06-01 00:00:13', '2019-06-01 00:00:13'),
(60, 'menu_items', 'title', 10, 'uzk', 'Настройки сайта', '2019-06-01 00:00:13', '2019-06-01 00:00:13'),
(61, 'menu_items', 'title', 12, 'ru', 'posts', '2019-06-01 00:00:59', '2019-06-01 06:44:27'),
(62, 'menu_items', 'title', 12, 'uz', 'posts', '2019-06-01 00:00:59', '2019-06-01 06:44:27'),
(63, 'menu_items', 'title', 12, 'uzk', 'posts', '2019-06-01 00:00:59', '2019-06-01 06:44:27'),
(64, 'data_types', 'display_name_singular', 9, 'ru', 'Slider', '2019-06-01 01:16:58', '2019-06-01 01:16:58'),
(65, 'data_types', 'display_name_singular', 9, 'uz', 'Slider', '2019-06-01 01:16:58', '2019-06-01 01:16:58'),
(66, 'data_types', 'display_name_singular', 9, 'uzk', 'Slider', '2019-06-01 01:16:58', '2019-06-01 01:16:58'),
(67, 'data_types', 'display_name_plural', 9, 'ru', 'Sliders', '2019-06-01 01:16:58', '2019-06-01 01:16:58'),
(68, 'data_types', 'display_name_plural', 9, 'uz', 'Sliders', '2019-06-01 01:16:58', '2019-06-01 01:16:58'),
(69, 'data_types', 'display_name_plural', 9, 'uzk', 'Sliders', '2019-06-01 01:16:58', '2019-06-01 01:16:58'),
(70, 'sliders', 'title', 1, 'ru', '“O‘zagrolizing” акциядорлик жамияти акциядорлари диққатига! RU', '2019-06-01 01:18:21', '2019-06-01 01:18:21'),
(71, 'sliders', 'title', 1, 'uz', '“O‘zagrolizing” акциядорлик жамияти акциядорлари диққатига! UZ', '2019-06-01 01:18:21', '2019-06-01 01:18:21'),
(72, 'sliders', 'title', 1, 'uzk', '“O‘zagrolizing” акциядорлик жамияти акциядорлари диққатига! UZK', '2019-06-01 01:18:21', '2019-06-01 01:18:21'),
(73, 'sliders', 'body', 1, 'ru', 'Жорий йилнинг 13 февраль куни “Ўзагролизинг” акциядорлик жамиятида 2018 йил якунларига бағишланган коллегия йиғилиши бўлиб ўтди Жорий йилнинг 13 февраль куни \n                    “Ўзагролизинг” акциядорлик жамиятида 2018 йил якунларига бағишланган коллегия йиғилиши бўлиб ўтди\n                    interdum mollis.', '2019-06-01 01:18:21', '2019-06-01 01:18:21'),
(74, 'sliders', 'body', 1, 'uz', 'Жорий йилнинг 13 февраль куни “Ўзагролизинг” акциядорлик жамиятида 2018 йил якунларига бағишланган коллегия йиғилиши бўлиб ўтди Жорий йилнинг 13 февраль куни \n                    “Ўзагролизинг” акциядорлик жамиятида 2018 йил якунларига бағишланган коллегия йиғилиши бўлиб ўтди\n                    interdum mollis.', '2019-06-01 01:18:21', '2019-06-01 01:18:21'),
(75, 'sliders', 'body', 1, 'uzk', 'Жорий йилнинг 13 февраль куни “Ўзагролизинг” акциядорлик жамиятида 2018 йил якунларига бағишланган коллегия йиғилиши бўлиб ўтди Жорий йилнинг 13 февраль куни \n                    “Ўзагролизинг” акциядорлик жамиятида 2018 йил якунларига бағишланган коллегия йиғилиши бўлиб ўтди\n                    interdum mollis.', '2019-06-01 01:18:21', '2019-06-01 01:18:21'),
(76, 'sliders', 'title', 2, 'ru', 'Лизинг в Узбекистане', '2019-06-01 01:23:47', '2019-06-01 01:23:47'),
(77, 'sliders', 'title', 2, 'uz', 'Lizing  O\'zbekistonda ', '2019-06-01 01:23:47', '2019-06-01 01:23:47'),
(78, 'sliders', 'title', 2, 'uzk', 'Лизинг Ўзбекистонда', '2019-06-01 01:23:47', '2019-06-01 01:23:47'),
(79, 'sliders', 'body', 2, 'ru', 'Акционерное общество «Bosh Maxsus Konstruktorlik Byurosi - Agromash» (АО «BMКB-Аgromash») преобразовано в 1995 году из ГСКБ по машинам для хлопководства, созданного в 1946 году. С начала 90-х годов конструкторское бюро занимается проведением научно-исследовательских прикладных и опытно-конструкторских работ по созданию, испытанию и внедрению новой техники не только для хлопководства, но и для других отраслей сельского хозяйства (зерноводства, кормопроизводства, картофелеводства и др.), вид деятельности – наука.', '2019-06-01 01:23:47', '2019-06-01 01:23:47'),
(80, 'sliders', 'body', 2, 'uz', 'Bosh xususiy konstruktorlik byurosi-Agromash (AJ BMKB-Agromash) aktsiyadorlik jamiyati 1995 yilda GSKB tomonidan 1946 yilda tashkil etilgan paxtachilik uchun mashinalarda o\'zgartirildi. 90-yillarning boshidan beri dizayn bo\'limi nafaqat paxta etishtirish uchun emas, balki qishloq xo\'jaligining boshqa tarmoqlari (g\'allachilik, em-xashak ishlab chiqarish, kartoshka etishtirish va boshqalar) uchun yangi asbob-uskunalarni yaratish, sinovdan o\'tkazish va tatbiq etish bo\'yicha ilmiy-tadqiqot ishlarini olib bormoqda. faoliyat fandir.', '2019-06-01 01:23:47', '2019-06-01 01:23:47'),
(81, 'sliders', 'body', 2, 'uzk', 'Bosh xususiy konstruktorlik byurosi-Agromash (AJ BMKB-Agromash) aktsiyadorlik jamiyati 1995 yilda GSKB tomonidan 1946 yilda tashkil etilgan paxtachilik uchun mashinalarda o\'zgartirildi. 90-yillarning boshidan beri dizayn bo\'limi nafaqat paxta etishtirish uchun emas, balki qishloq xo\'jaligining boshqa tarmoqlari (g\'allachilik, em-xashak ishlab chiqarish, kartoshka etishtirish va boshqalar) uchun yangi asbob-uskunalarni yaratish, sinovdan o\'tkazish va tatbiq etish bo\'yicha ilmiy-tadqiqot ishlarini olib bormoqda. faoliyat fandir.', '2019-06-01 01:23:47', '2019-06-01 01:23:47'),
(82, 'menu_items', 'title', 19, 'ru', 'Полезные ссылки', '2019-06-01 02:03:51', '2019-06-01 02:03:51'),
(83, 'menu_items', 'title', 19, 'uz', 'Полезные ссылки', '2019-06-01 02:03:51', '2019-06-01 02:03:51'),
(84, 'menu_items', 'title', 19, 'uzk', 'Полезные ссылки', '2019-06-01 02:03:51', '2019-06-01 02:03:51'),
(85, 'data_types', 'display_name_singular', 11, 'ru', 'Link', '2019-06-01 02:17:39', '2019-06-01 02:17:39'),
(86, 'data_types', 'display_name_singular', 11, 'uz', 'Link', '2019-06-01 02:17:39', '2019-06-01 02:17:39'),
(87, 'data_types', 'display_name_singular', 11, 'uzk', 'Link', '2019-06-01 02:17:39', '2019-06-01 02:17:39'),
(88, 'data_types', 'display_name_plural', 11, 'ru', 'Links', '2019-06-01 02:17:39', '2019-06-01 02:17:39'),
(89, 'data_types', 'display_name_plural', 11, 'uz', 'Links', '2019-06-01 02:17:39', '2019-06-01 02:17:39'),
(90, 'data_types', 'display_name_plural', 11, 'uzk', 'Links', '2019-06-01 02:17:39', '2019-06-01 02:17:39'),
(91, 'links', 'title', 1, 'ru', 'Конституция Республики Узбекистан', '2019-06-01 02:18:49', '2019-06-01 02:18:49'),
(92, 'links', 'title', 1, 'uz', 'O\'zbekiston Respublikasi Konstitutsiyasi', '2019-06-01 02:18:49', '2019-06-01 02:18:49'),
(93, 'links', 'title', 1, 'uzk', 'Ўзбекистон Республикаси Конституцияси', '2019-06-01 02:18:49', '2019-06-01 02:18:49'),
(94, 'data_types', 'display_name_singular', 5, 'ru', 'Post', '2019-06-01 05:25:20', '2019-06-01 05:25:20'),
(95, 'data_types', 'display_name_singular', 5, 'uz', 'Post', '2019-06-01 05:25:20', '2019-06-01 05:25:20'),
(96, 'data_types', 'display_name_singular', 5, 'uzk', 'Post', '2019-06-01 05:25:20', '2019-06-01 05:25:20'),
(97, 'data_types', 'display_name_plural', 5, 'ru', 'Posts', '2019-06-01 05:25:20', '2019-06-01 05:25:20'),
(98, 'data_types', 'display_name_plural', 5, 'uz', 'Posts', '2019-06-01 05:25:20', '2019-06-01 05:25:20'),
(99, 'data_types', 'display_name_plural', 5, 'uzk', 'Posts', '2019-06-01 05:25:20', '2019-06-01 05:25:20'),
(100, 'data_types', 'display_name_singular', 13, 'ru', 'News', '2019-06-01 06:41:00', '2019-06-01 06:41:00'),
(101, 'data_types', 'display_name_singular', 13, 'uz', 'News', '2019-06-01 06:41:00', '2019-06-01 06:41:00'),
(102, 'data_types', 'display_name_singular', 13, 'uzk', 'News', '2019-06-01 06:41:00', '2019-06-01 06:41:00'),
(103, 'data_types', 'display_name_plural', 13, 'ru', 'News', '2019-06-01 06:41:00', '2019-06-01 06:41:00'),
(104, 'data_types', 'display_name_plural', 13, 'uz', 'News', '2019-06-01 06:41:00', '2019-06-01 06:41:00'),
(105, 'data_types', 'display_name_plural', 13, 'uzk', 'News', '2019-06-01 06:41:00', '2019-06-01 06:41:00'),
(106, 'menu_items', 'title', 20, 'ru', 'Новости', '2019-06-01 06:43:50', '2019-06-01 06:43:50'),
(107, 'menu_items', 'title', 20, 'uz', 'Новости', '2019-06-01 06:43:50', '2019-06-01 06:43:50'),
(108, 'menu_items', 'title', 20, 'uzk', 'Новости', '2019-06-01 06:43:50', '2019-06-01 06:43:50'),
(109, 'news', 'title', 1, 'ru', 'АО «Узагролизинг» Объявляет конкурс по выбору аудиторской или консалтинговой организации', '2019-06-01 06:46:42', '2019-06-01 06:47:05'),
(110, 'news', 'title', 1, 'uz', 'АО «Узагролизинг» Объявляет конкурс по выбору аудиторской или консалтинговой организации', '2019-06-01 06:46:42', '2019-06-01 06:47:05'),
(111, 'news', 'title', 1, 'uzk', 'АО «Узагролизинг» Объявляет конкурс по выбору аудиторской или консалтинговой организации', '2019-06-01 06:46:42', '2019-06-01 06:47:05'),
(112, 'news', 'body', 1, 'ru', 'АО Узагролизинг  Объявляет конкурс по выбору аудиторской или консалтинговой организации АО Узагролизинг  Объявляет конкурс по выбору аудиторской или консалтинговой организации ', '2019-06-01 06:46:42', '2019-06-01 06:55:58'),
(113, 'news', 'body', 1, 'uz', 'АО Узагролизинг  Объявляет конкурс по выбору аудиторской или консалтинговой организации АО Узагролизинг  Объявляет конкурс по выбору аудиторской или консалтинговой организации ', '2019-06-01 06:46:42', '2019-06-01 06:55:58'),
(114, 'news', 'body', 1, 'uzk', 'АО Узагролизинг  Объявляет конкурс по выбору аудиторской или консалтинговой организации АО Узагролизинг  Объявляет конкурс по выбору аудиторской или консалтинговой организации ', '2019-06-01 06:46:42', '2019-06-01 06:55:58'),
(115, 'news', 'title', 2, 'ru', '“O‘zagrolizing” акциядорлик жамияти акциядорлари диққатига! EN', '2019-06-01 06:47:43', '2019-06-01 06:47:43'),
(116, 'news', 'title', 2, 'uz', '“O‘zagrolizing” акциядорлик жамияти акциядорлари диққатига! EN', '2019-06-01 06:47:44', '2019-06-01 06:47:44'),
(117, 'news', 'title', 2, 'uzk', '“O‘zagrolizing” акциядорлик жамияти акциядорлари диққатига! EN', '2019-06-01 06:47:44', '2019-06-01 06:47:44'),
(118, 'news', 'body', 2, 'ru', 'АО Узагролизинг  Объявляет конкурс по выбору аудиторской или консалтинговой организации АО Узагролизинг  Объявляет конкурс по выбору аудиторской или консалтинговой организации ', '2019-06-01 06:47:44', '2019-06-01 06:55:45'),
(119, 'news', 'body', 2, 'uz', 'АО Узагролизинг  Объявляет конкурс по выбору аудиторской или консалтинговой организации АО Узагролизинг  Объявляет конкурс по выбору аудиторской или консалтинговой организации ', '2019-06-01 06:47:44', '2019-06-01 06:55:45'),
(120, 'news', 'body', 2, 'uzk', 'АО Узагролизинг  Объявляет конкурс по выбору аудиторской или консалтинговой организации АО Узагролизинг  Объявляет конкурс по выбору аудиторской или консалтинговой организации ', '2019-06-01 06:47:44', '2019-06-01 06:55:45'),
(121, 'news', 'title', 3, 'ru', 'Ўзбекистон Республикаси Конституцияси', '2019-06-01 07:07:04', '2019-06-01 07:07:04'),
(122, 'news', 'title', 3, 'uz', 'Ўзбекистон Республикаси Конституцияси', '2019-06-01 07:07:04', '2019-06-01 07:07:04'),
(123, 'news', 'title', 3, 'uzk', 'Ўзбекистон Республикаси Конституцияси', '2019-06-01 07:07:04', '2019-06-01 07:07:04'),
(124, 'news', 'body', 3, 'ru', '“O‘zagrolizing” акциядорлик жамияти акциядорлари диққатига! EN“O‘zagrolizing” акциядорлик жамияти акциядорлари диққатига! EN', '2019-06-01 07:07:04', '2019-06-01 07:07:04'),
(125, 'news', 'body', 3, 'uz', '“O‘zagrolizing” акциядорлик жамияти акциядорлари диққатига! EN', '2019-06-01 07:07:04', '2019-06-01 07:07:04'),
(126, 'news', 'body', 3, 'uzk', '“O‘zagrolizing” акциядорлик жамияти акциядорлари диққатига! EN', '2019-06-01 07:07:04', '2019-06-01 07:07:04');

-- --------------------------------------------------------

--
-- Структура таблицы `useful_ustafs`
--

CREATE TABLE `useful_ustafs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `body` text NOT NULL,
  `file` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `avatar` varchar(191) DEFAULT 'users/default.png',
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `settings` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', '$2y$10$Emd7HxQ17bwLT0FTQuR3Qu27JvD6RBxP21pprJbbso4j2.M0BkWLq', 'ATeR1I2jG1BgRfw910rrQcGWDLaejEB7NX9LRSz1Hm2NClrBaz3KoVnJZD98', '{\"locale\":\"ru\"}', '2019-05-31 07:10:47', '2019-06-01 05:23:03');

-- --------------------------------------------------------

--
-- Структура таблицы `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `workers`
--

CREATE TABLE `workers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `lavozim` varchar(191) NOT NULL,
  `qabul_kuni` varchar(191) NOT NULL,
  `tel` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  `category_workers_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_question_id_foreign` (`question_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Индексы таблицы `category_lizings`
--
ALTER TABLE `category_lizings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category_rule_staffs`
--
ALTER TABLE `category_rule_staffs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category_workers`
--
ALTER TABLE `category_workers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Индексы таблицы `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Индексы таблицы `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lizings`
--
ALTER TABLE `lizings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lizings_category_lizings_id_foreign` (`category_lizings_id`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Индексы таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `online_orders`
--
ALTER TABLE `online_orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Индексы таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Индексы таблицы `rule_staffs`
--
ALTER TABLE `rule_staffs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rule_staffs_category_rule_id_foreign` (`category_rule_id`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Индексы таблицы `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Индексы таблицы `useful_ustafs`
--
ALTER TABLE `useful_ustafs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- Индексы таблицы `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `workers_category_workers_id_foreign` (`category_workers_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `category_lizings`
--
ALTER TABLE `category_lizings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `category_rule_staffs`
--
ALTER TABLE `category_rule_staffs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `category_workers`
--
ALTER TABLE `category_workers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT для таблицы `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `information`
--
ALTER TABLE `information`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `links`
--
ALTER TABLE `links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `lizings`
--
ALTER TABLE `lizings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `online_orders`
--
ALTER TABLE `online_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `rule_staffs`
--
ALTER TABLE `rule_staffs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT для таблицы `useful_ustafs`
--
ALTER TABLE `useful_ustafs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `lizings`
--
ALTER TABLE `lizings`
  ADD CONSTRAINT `lizings_category_lizings_id_foreign` FOREIGN KEY (`category_lizings_id`) REFERENCES `category_lizings` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `rule_staffs`
--
ALTER TABLE `rule_staffs`
  ADD CONSTRAINT `rule_staffs_category_rule_id_foreign` FOREIGN KEY (`category_rule_id`) REFERENCES `category_rule_staffs` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Ограничения внешнего ключа таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `workers`
--
ALTER TABLE `workers`
  ADD CONSTRAINT `workers_category_workers_id_foreign` FOREIGN KEY (`category_workers_id`) REFERENCES `category_workers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
