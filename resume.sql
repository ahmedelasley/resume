-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2021 at 04:44 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `key`, `active`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Web Site', 'website', 1, 1, NULL, NULL),
(2, 'Web App', 'webapp', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` year(4) NOT NULL,
  `end_date` year(4) DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `title`, `start_date`, `end_date`, `college`, `department`, `university`, `project`, `url`, `github`, `active`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'BSC Computer Science', 2011, 2015, 'Faculty of Computers and Information', 'Computer Science', 'Egypt Higher Institute for Commerce and Computers in Mansoura', 'Security Robot', '', 'https://github.com/ahmedelasley/Security-Robot', 1, 1, NULL, NULL),
(2, 'Diploma Software Engineering', 2020, 2021, 'Faculty of Graduate Studies for Statistical Research ', 'Software Engineering', 'Cairo University', 'ISSR Research Management System', '', 'https://github.com/ahmedelasley/ISSR-USMS', 1, 1, NULL, NULL),
(3, 'Masters Software Engineering', 2021, 0000, 'Faculty of Graduate Studies for Statistical Research', 'Software Engineering', 'Cairo University', '', '2', '', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `title_job`, `start_date`, `end_date`, `company`, `location`, `url`, `active`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'IT Support Technical', '2012-05-01', '2015-05-01', 'Al Haramain Computer & Internet Services', 'Al Sharqia', NULL, 1, 1, NULL, NULL),
(2, 'IT Support Technical', '2016-02-01', '2017-03-01', 'Club and Hotel Asafra Buildings for Armed Forces Officers', 'Alexandria', NULL, 1, 1, NULL, NULL),
(3, 'Back End PHP Developer', '2017-05-01', '2018-10-01', 'Oxforda Academy', 'Al Sharqia', NULL, 1, 1, NULL, NULL),
(4, 'Back End Laravel Developer “ Internship ”', '2018-10-01', '2019-01-01', 'Ipda3 Tech', 'Mansoura', NULL, 1, 1, NULL, NULL),
(5, 'Back End PHP Developer', '2019-02-01', '2021-12-01', 'Elasley Training & Software', 'Al Sharqia', NULL, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sur_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nick_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `degree` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `freelancer` int(11) NOT NULL,
  `cover` varchar(999) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(999) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume` varchar(999) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `sur_name`, `nick_name`, `full_name`, `title_job`, `summary`, `phone`, `whatsapp`, `email`, `address`, `birth_date`, `degree`, `freelancer`, `cover`, `picture`, `resume`, `website`, `facebook`, `twitter`, `linkedin`, `github`, `youtube`, `instagram`, `active`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Software Engineer', 'Ahmed Elasley', 'Ahmed Elsayed Ahmed Mohamed', 'Software Engineer, Back End PHP Developer', 'I have the zeal and the attitude to excel in this role. With an internship experience of over 4 year, I have been learning a lot of new things which can help me perform better and contribute to the business.', '+201068382992', '+201068382992', 'ahmedelasley@gmail.com', 'Hamza Street, Abu Kabir, Al Sharqia, Egypt', '1993-10-01', 'Master', 1, 'assets/img/hero-bg.jpg', 'assets/img/profile-img.jpg', NULL, 'http://www.ahmedelasley.com', 'https://www.facebook.com/ahmedelasley', 'https://twitter.com/ahmedelasley', 'https://twitter.com/ahmedelasley', 'https://github.com/AhmedEL-Asley', 'https://www.youtube.com/channel/UCDsP6AXYol2rCf0HN', '#', 1, 1, '2021-11-30 23:53:51', '2021-12-20 23:54:00');

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`id`, `first_name`, `last_name`, `email`, `phone`, `subject`, `message`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed', 'Elasley', 'ahmedelasley@gmail.com', '01068382992', 'Hello', 'Welcome', NULL, '2021-12-06 19:59:47', '2021-12-06 19:59:47'),
(2, 'Ahmed', 'Elasley', 'ahmedelasley@gmail.com', '01068382992', 'Hello', 'Welcome Elasley', NULL, '2021-12-06 20:05:03', '2021-12-06 20:05:03'),
(3, 'Ahmed', 'Elasley', 'ahmedelasley@gmail.com', '01068382992', 'Hello', 'we', NULL, '2021-12-06 20:15:06', '2021-12-06 20:15:06'),
(4, 'Ahmed', 'Elasley', 'ahmedelasley@gmail.com', '01068382992', 'Hello', 'WWWW', NULL, '2021-12-07 12:47:03', '2021-12-07 12:47:03'),
(5, 'Ahmed', 'Elasley', 'ahmedelasley@gmail.com', '01068382992', 'Helloe', 'ee', NULL, '2021-12-07 12:49:17', '2021-12-07 12:49:17'),
(6, 'Ahmed', 'Elasley', 'ahmedelasley@gmail.com', '01068382992', 'Hello', 'c', NULL, '2021-12-07 12:51:52', '2021-12-07 12:51:52'),
(7, 'Ahmed', 'Elasley', 'ahmedelasley@gmail.com', '01068382992', 'Hello', 'a', NULL, '2021-12-07 13:07:27', '2021-12-07 13:07:27'),
(8, 'Ahmed', 'Elasley', 'ahmedelasley@gmail.com', '01068382992', 'Helloa', 'a', NULL, '2021-12-07 13:09:04', '2021-12-07 13:09:04'),
(9, 'Ahmed', 'Elasley', 'ahmedelasley@gmail.com', '01068382992', 'Hello', 'm', NULL, '2021-12-07 13:10:08', '2021-12-07 13:10:08'),
(10, 'Ahmed', 'Elasley', 'ahmedelasley@gmail.com', '01068382992', 'Helloj', 'f', NULL, '2021-12-07 13:10:34', '2021-12-07 13:10:34'),
(11, 'Ahmed', 'Elasley', 'ahmedelasley@gmail.com', '01068382992', 'Hello', 'mgj', NULL, '2021-12-07 13:13:13', '2021-12-07 13:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_12_01_062833_create_information_table', 1),
(5, '2021_12_01_150059_create_skills_table', 1),
(6, '2021_12_01_232412_create_education_table', 1),
(7, '2021_12_01_232806_create_services_table', 1),
(8, '2021_12_01_232901_create_testimonials_table', 1),
(9, '2021_12_03_151804_create_categories_table', 1),
(10, '2021_12_03_152246_create_portfolios_table', 1),
(11, '2021_12_03_152522_create_experiences_table', 1),
(12, '2021_12_03_152620_create_projects_table', 1),
(13, '2021_12_06_235018_create_mails_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `cover`, `url`, `github`, `active`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Web Site 1', 'assets/img/portfolio/portfolio-1.jpg', NULL, NULL, 1, 1, 1, NULL, NULL),
(2, 'Web App 2', 'assets/img/portfolio/portfolio-2.jpg', NULL, NULL, 1, 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `experience_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `url`, `github`, `active`, `experience_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Medical', NULL, NULL, 1, 3, 1, NULL, NULL),
(2, 'School', NULL, NULL, 1, 3, 1, NULL, NULL),
(3, 'Digital Agency', NULL, NULL, 1, 3, 1, NULL, NULL),
(4, 'Blood Bank', NULL, NULL, 1, 4, 1, NULL, NULL),
(5, 'Sofra', NULL, NULL, 1, 4, 1, NULL, NULL),
(6, 'Clothing Factories Management System', NULL, NULL, 1, 5, 1, NULL, NULL),
(7, 'Educational Centers Management System', NULL, NULL, 1, 5, 1, NULL, NULL),
(8, 'Medical Analysis Laboratories Management System', NULL, NULL, 1, 5, 1, NULL, NULL),
(9, 'Dental Beauty Centers Management System', NULL, NULL, 1, 5, 1, NULL, NULL),
(10, 'POS Management System', NULL, NULL, 1, 5, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `icon_color`, `title`, `details`, `active`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'bi bi-code-slash', 'iconbox-blue', 'Web Development', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed eligendi modi omnis esse.', 1, 1, NULL, NULL),
(2, 'bi bi-display', 'iconbox-orange', 'Software Systems Development', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed eligendi modi omnis esse.', 1, 1, NULL, NULL),
(3, 'bx bx-book', 'iconbox-pink', 'Training Courses', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed eligendi modi omnis esse.', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` int(11) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `value`, `active`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'HTML5 & CSS3', 90, 1, 1, '2021-10-29 06:07:38', '2019-12-31 22:00:00'),
(2, 'JavaScript', 70, 1, 1, '2021-10-29 06:07:38', '2021-10-29 08:10:56'),
(3, 'Bootstrap', 75, 1, 1, '2021-10-29 06:07:38', '2021-10-29 08:11:09'),
(4, 'PHP', 85, 1, 1, '2021-10-29 06:07:38', '2021-10-29 08:11:14'),
(5, 'OOP & MVC', 70, 1, 1, '2021-10-29 06:09:26', '2021-10-29 08:11:17'),
(6, 'Laravel', 70, 1, 1, '2021-10-29 06:09:26', '2021-10-29 08:11:21'),
(8, 'API & JSON', 75, 1, 1, '2021-10-29 06:09:26', '2021-10-29 08:11:28'),
(9, 'Git & GitHub', 70, 1, 1, '2021-10-29 06:09:26', '2021-10-29 08:11:33'),
(11, 'UML & Database Schemas & SQL Command', 80, 1, 1, '2021-10-29 06:09:26', '2021-10-29 08:11:42'),
(12, 'MY SQL PDO', 85, 1, 1, '2021-10-29 06:09:26', '2021-10-29 08:11:44'),
(13, 'Flow Chart', 90, 1, 1, '2021-10-29 06:09:26', '2021-10-29 08:11:47'),
(14, 'Data Structure & Algorithm', 70, 1, 1, '2021-10-29 06:09:26', '2021-10-29 08:11:50'),
(15, 'Problem Solving', 90, 1, 1, '2021-10-29 06:09:26', '2021-10-29 08:11:54'),
(16, 'C++', 70, 1, 1, '2021-10-29 06:09:26', '2021-10-29 08:11:58'),
(17, 'Java', 70, 1, 1, '2021-10-29 06:09:26', '2021-10-29 08:12:02'),
(18, 'Python', 70, 1, 1, '2021-10-29 06:09:26', '2021-10-29 08:12:15'),
(19, 'C#', 70, 1, 1, '2021-10-29 06:09:26', '2021-10-29 08:12:12'),
(20, 'Network+ & CCNA', 80, 1, 1, '2021-10-29 06:09:26', '2021-10-29 08:12:17'),
(21, 'A+', 75, 1, 1, '2021-10-29 06:09:26', '2021-10-29 08:12:20'),
(22, 'Photoshop', 70, 1, 1, '2021-10-29 06:09:26', '2021-10-29 08:12:23');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `title_job`, `details`, `picture`, `active`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed ELsayed', 'CEO', '', '', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed ELAsley', 'ahmedelasley@gmail.com', NULL, '$2y$10$lBUFUoN7sroojgSjzJJL5.9qUKwq..hXOY1mj0A.6ePLJcsuwrNXq', 'lJSwSYHEFfooY2uxkjXdsRusx4MxXQavbRwyJLyLmXl788Rj07aVpJZ9JGCD', '2021-12-08 22:42:34', '2021-12-08 22:42:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `education_user_id_foreign` (`user_id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `experiences_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `information_email_unique` (`email`),
  ADD KEY `information_user_id_foreign` (`user_id`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portfolios_category_id_foreign` (`category_id`),
  ADD KEY `portfolios_user_id_foreign` (`user_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_experience_id_foreign` (`experience_id`),
  ADD KEY `projects_user_id_foreign` (`user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_user_id_foreign` (`user_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skills_user_id_foreign` (`user_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testimonials_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `information`
--
ALTER TABLE `information`
  ADD CONSTRAINT `information_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD CONSTRAINT `portfolios_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `portfolios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_experience_id_foreign` FOREIGN KEY (`experience_id`) REFERENCES `experiences` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `projects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `testimonials_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
