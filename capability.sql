-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 03:02 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capability`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_thumbnail` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_code`, `category_title`, `category_thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'CAT7', 'Microsoft Courses', '', '2019-07-11 05:43:17', '2019-07-11 05:43:17'),
(2, 'CAT5412', 'Call Centre Courses', '', '2019-07-11 07:58:15', '2019-07-11 07:58:15');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_cost` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_discount` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_duration` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_time` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_notes` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_venue` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost_add_notes` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_end` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_img`, `categories_id`, `course_link`, `course_status`, `course_title`, `course_cost`, `course_discount`, `course_duration`, `course_time`, `course_notes`, `course_venue`, `cost_add_notes`, `course_end`, `created_at`, `updated_at`) VALUES
(1, 'wwdvujf2vf.png', '1', 'Complete-Python-Bootcamp', 'Available', 'Complete Python Bootcamp', '5000', '', '1 day', '07:30', '<p>This course will teach you Python in a practical manner, with every lecture comes a full coding screencast and a corresponding code notebook! Learn in whatever manner is best for you!</p><p>We will start by helping you get Python installed on your computer, regardless of your operating system, whether its Linux, MacOS, or Windows, we\'ve got you covered!</p><p>We cover a wide variety of topics, including:</p><ul><li>Command Line Basics</li><li>Installing Python</li><li>Running Python Code</li><li>Strings</li><li>Lists</li><li>Dictionaries</li><li>Tuples</li><li>Sets</li><li>Number Data Types</li><li>Print Formatting</li><li>Functions</li><li>Scope</li><li>args/kwargs</li><li>Built-in Functions</li><li>Debugging and Error Handling</li><li>Modules</li><li>External Modules</li><li>Object Oriented Programming</li><li>Inheritance</li><li>Polymorphism</li><li>File I/O</li><li>Advanced Methods</li><li>Unit Tests</li><li>and much more!</li></ul><p><strong>You will get lifetime access to over 100 lectures plus corresponding Notebooks for the lectures!&nbsp;</strong><br>&nbsp;</p><p>This course comes with a <strong>30 day money back guarantee!</strong> If you are not satisfied in any way, you\'ll get your money back. Plus you will keep access to the Notebooks as a thank you for trying out the course!</p><p><strong>So what are you waiting for? Learn Python in a way that will advance your career and increase your knowledge, all in a fun and practical way!</strong></p><p>Who this course is for:</p><ul><li>Beginners who have never programmed before.</li><li>Programmers switching languages to Python.</li><li>Intermediate Python programmers who want to level up their skills!</li></ul>', '303 Dr Pixley Kaseme Street, 26th Floor Delta Towers, Durban, 4001', NULL, '', '2019-07-11 05:44:50', '2019-08-12 08:08:11'),
(4, 'wwdvujf2vf.png', '2', 'Natural-Language-Processing-with-Deep-Learning-in-Python', 'Available', 'Natural Language Processing with Deep Learning in Python', '4000', '', '09h00', '09:00', '<p>This course will teach you Python in a practical manner, with every lecture comes a full coding screencast and a corresponding code notebook! Learn in whatever manner is best for you!</p><p>We will start by helping you get Python installed on your computer, regardless of your operating system, whether its Linux, MacOS, or Windows, we\'ve got you covered!</p><p>We cover a wide variety of topics, including:</p><ul><li>Command Line Basics</li><li>Installing Python</li><li>Running Python Code</li><li>Strings</li><li>Lists</li><li>Dictionaries</li><li>Tuples</li><li>Sets</li><li>Number Data Types</li><li>Print Formatting</li><li>Functions</li><li>Scope</li><li>args/kwargs</li><li>Built-in Functions</li><li>Debugging and Error Handling</li><li>Modules</li><li>External Modules</li><li>Object Oriented Programming</li><li>Inheritance</li><li>Polymorphism</li><li>File I/O</li><li>Advanced Methods</li><li>Unit Tests</li><li>and much more!</li></ul><p><strong>You will get lifetime access to over 100 lectures plus corresponding Notebooks for the lectures!&nbsp;</strong><br>&nbsp;</p><p>This course comes with a <strong>30 day money back guarantee!</strong> If you are not satisfied in any way, you\'ll get your money back. Plus you will keep access to the Notebooks as a thank you for trying out the course!</p><p><strong>So what are you waiting for? Learn Python in a way that will advance your career and increase your knowledge, all in a fun and practical way!</strong></p><p>Who this course is for:</p><ul><li>Beginners who have never programmed before.</li><li>Programmers switching languages to Python.</li><li>Intermediate Python programmers who want to level up their skills!</li></ul>', '303 Dr Pixley Kaseme Street, 26th Floor Delta Towers, Durban, 4001', '/person exc. VAT (discounts available for 6+ employees)', '', '2019-07-11 08:01:01', '2019-07-11 08:01:01'),
(5, 'wwdvujf2vf.png', '1', 'Deep-Learning-Prerequisites:-Linear ', 'Available', 'Deep Learning Prerequisites: Linear ', '1500', '', '4 Hours', '10:00', '<p>This course will teach you Python in a practical manner, with every lecture comes a full coding screencast and a corresponding code notebook! Learn in whatever manner is best for you!</p><p>We will start by helping you get Python installed on your computer, regardless of your operating system, whether its Linux, MacOS, or Windows, we\'ve got you covered!</p><p>We cover a wide variety of topics, including:</p><ul><li>Command Line Basics</li><li>Installing Python</li><li>Running Python Code</li><li>Strings</li><li>Lists</li><li>Dictionaries</li><li>Tuples</li><li>Sets</li><li>Number Data Types</li><li>Print Formatting</li><li>Functions</li><li>Scope</li><li>args/kwargs</li><li>Built-in Functions</li><li>Debugging and Error Handling</li><li>Modules</li><li>External Modules</li><li>Object Oriented Programming</li><li>Inheritance</li><li>Polymorphism</li><li>File I/O</li><li>Advanced Methods</li><li>Unit Tests</li><li>and much more!</li></ul><p><strong>You will get lifetime access to over 100 lectures plus corresponding Notebooks for the lectures!&nbsp;</strong><br>&nbsp;</p><p>This course comes with a <strong>30 day money back guarantee!</strong> If you are not satisfied in any way, you\'ll get your money back. Plus you will keep access to the Notebooks as a thank you for trying out the course!</p><p><strong>So what are you waiting for? Learn Python in a way that will advance your career and increase your knowledge, all in a fun and practical way!</strong></p><p>Who this course is for:</p><ul><li>Beginners who have never programmed before.</li><li>Programmers switching languages to Python.</li><li>Intermediate Python programmers who want to level up their skills!</li></ul>', '303 Dr Pixley Kaseme Street, 26th Floor Delta Towers, Durban, 4001', NULL, '', '2019-07-11 08:03:00', '2019-07-11 08:03:00'),
(6, 'ozkgorguns.png', '1', 'Course-title-this-heyj', 'Available', 'Deep Learning Prerequisites: Linear', '6000', '', '4hours', '07:45', '<p>This course will teach you Python in a practical manner, with every lecture comes a full coding screencast and a corresponding code notebook! Learn in whatever manner is best for you!</p><p>We will start by helping you get Python installed on your computer, regardless of your operating system, whether its Linux, MacOS, or Windows, we\'ve got you covered!</p><p>We cover a wide variety of topics, including:</p><ul><li>Command Line Basics</li><li>Installing Python</li><li>Running Python Code</li><li>Strings</li><li>Lists</li><li>Dictionaries</li><li>Tuples</li><li>Sets</li><li>Number Data Types</li><li>Print Formatting</li><li>Functions</li><li>Scope</li><li>args/kwargs</li><li>Built-in Functions</li><li>Debugging and Error Handling</li><li>Modules</li><li>External Modules</li><li>Object Oriented Programming</li><li>Inheritance</li><li>Polymorphism</li><li>File I/O</li><li>Advanced Methods</li><li>Unit Tests</li><li>and much more!</li></ul><p><strong>You will get lifetime access to over 100 lectures plus corresponding Notebooks for the lectures!&nbsp;</strong><br>&nbsp;</p><p>This course comes with a <strong>30 day money back guarantee!</strong> If you are not satisfied in any way, you\'ll get your money back. Plus you will keep access to the Notebooks as a thank you for trying out the course!</p><p><strong>So what are you waiting for? Learn Python in a way that will advance your career and increase your knowledge, all in a fun and practical way!</strong></p><p>Who this course is for:</p><ul><li>Beginners who have never programmed before.</li><li>Programmers switching languages to Python.</li><li>Intermediate Python programmers who want to level up their skills!</li></ul>', 'dsgfgdfgdfsgfdg', 'Cost Add', '', '2019-08-14 08:33:57', '2019-08-14 08:33:57'),
(7, 'w10cpghrez.png', '1', 'Course-title-this-heyjhjhgjhj', 'Available', 'Natural-Language-Processing-with-Deep-Learning-in-Python', '6000', '', '4hours', '07:45', '<p>This course will teach you Python in a practical manner, with every lecture comes a full coding screencast and a corresponding code notebook! Learn in whatever manner is best for you!</p><p>We will start by helping you get Python installed on your computer, regardless of your operating system, whether its Linux, MacOS, or Windows, we\'ve got you covered!</p><p>We cover a wide variety of topics, including:</p><ul><li>Command Line Basics</li><li>Installing Python</li><li>Running Python Code</li><li>Strings</li><li>Lists</li><li>Dictionaries</li><li>Tuples</li><li>Sets</li><li>Number Data Types</li><li>Print Formatting</li><li>Functions</li><li>Scope</li><li>args/kwargs</li><li>Built-in Functions</li><li>Debugging and Error Handling</li><li>Modules</li><li>External Modules</li><li>Object Oriented Programming</li><li>Inheritance</li><li>Polymorphism</li><li>File I/O</li><li>Advanced Methods</li><li>Unit Tests</li><li>and much more!</li></ul><p><strong>You will get lifetime access to over 100 lectures plus corresponding Notebooks for the lectures!&nbsp;</strong><br>&nbsp;</p><p>This course comes with a <strong>30 day money back guarantee!</strong> If you are not satisfied in any way, you\'ll get your money back. Plus you will keep access to the Notebooks as a thank you for trying out the course!</p><p><strong>So what are you waiting for? Learn Python in a way that will advance your career and increase your knowledge, all in a fun and practical way!</strong></p><p>Who this course is for:</p><ul><li>Beginners who have never programmed before.</li><li>Programmers switching languages to Python.</li><li>Intermediate Python programmers who want to level up their skills!</li></ul>', 'dsgfgdfgdfsgfdg', 'Cost Add', '', '2019-08-14 08:36:17', '2019-08-14 08:36:17');

-- --------------------------------------------------------

--
-- Table structure for table `course_lesson`
--

CREATE TABLE `course_lesson` (
  `id` int(11) NOT NULL,
  `lesson_code` varchar(100) NOT NULL,
  `lesson_title` varchar(100) NOT NULL,
  `course_section_id` int(11) NOT NULL,
  `lesson_type` varchar(20) NOT NULL,
  `attachment` varchar(100) NOT NULL,
  `summary` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_marks`
--

CREATE TABLE `course_marks` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courses_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_marks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_requests`
--

CREATE TABLE `course_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courses_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_section`
--

CREATE TABLE `course_section` (
  `id` int(11) NOT NULL,
  `section_code` varchar(20) NOT NULL,
  `section_title` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enrolleds`
--

CREATE TABLE `enrolleds` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courses_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrolleds`
--

INSERT INTO `enrolleds` (`id`, `user_id`, `courses_id`, `created_at`, `updated_at`) VALUES
(2, '58', '1', '2019-08-27 10:03:04', '2019-08-27 10:03:04'),
(3, '6', '4', '2019-08-27 10:06:39', '2019-08-27 10:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `enroll_histories`
--

CREATE TABLE `enroll_histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courses_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enroll_histories`
--

INSERT INTO `enroll_histories` (`id`, `user_id`, `note`, `courses_id`, `created_at`, `updated_at`) VALUES
(10, '57', 'Natural-Language-Processing-with-Deep-Learning-in-Python', '7', '2019-08-15 05:24:41', '2019-08-15 05:24:41'),
(11, '4', 'Natural Language Processing with Deep Learning in Python', '4', '2019-08-27 09:31:30', '2019-08-27 09:31:30'),
(12, '6', 'Natural Language Processing with Deep Learning in Python', '4', '2019-08-27 10:06:39', '2019-08-27 10:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `exercises`
--

CREATE TABLE `exercises` (
  `id` int(10) UNSIGNED NOT NULL,
  `courses_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exercise_title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due_date` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feeds`
--

CREATE TABLE `feeds` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feeds`
--

INSERT INTO `feeds` (`id`, `user_id`, `action`, `created_at`, `updated_at`) VALUES
(1, '57', 'Nobunto, made a signup request, ID 57', '2019-08-15 05:11:25', '2019-08-15 05:11:25'),
(2, '1', 'User ID:1 approved to signup', '2019-08-15 05:11:56', '2019-08-15 05:11:56'),
(3, '57', 'user ID: 57 Nobunto completed registration', '2019-08-15 05:12:58', '2019-08-15 05:12:58'),
(4, '', 'Uploaded Document named: Exercise 2, for the course Complete Python Bootcamp', '2019-08-15 05:25:49', '2019-08-15 05:25:49'),
(6, '58', 'Klavin, made a signup request, ID 58', '2019-08-15 07:34:54', '2019-08-15 07:34:54'),
(7, '2', 'User ID:2 approved to signup', '2019-08-15 07:36:32', '2019-08-15 07:36:32'),
(8, '58', 'user ID: 58 Klavin completed registration', '2019-08-15 07:38:33', '2019-08-15 07:38:33'),
(9, '59', 'Prosper, made a signup request, ID 59', '2019-08-27 09:14:34', '2019-08-27 09:14:34'),
(10, '60', 'Kalvin, made a signup request, ID 60', '2019-08-27 09:59:14', '2019-08-27 09:59:14'),
(11, '2', 'User ID:2 approved to signup', '2019-08-27 10:00:03', '2019-08-27 10:00:03'),
(12, '61', 'Prosper, made a signup request, ID 61', '2019-09-03 12:33:38', '2019-09-03 12:33:38'),
(13, '1', 'User ID:1 approved to signup', '2019-09-26 12:28:14', '2019-09-26 12:28:14'),
(14, '62', 'Prosper, made a signup request, ID 62', '2019-11-07 06:06:49', '2019-11-07 06:06:49'),
(15, '63', 'Prosper, made a signup request, ID 63', '2019-11-07 07:58:35', '2019-11-07 07:58:35'),
(16, '64', 'Prosper, made a signup request, ID 64', '2019-11-07 08:02:37', '2019-11-07 08:02:37'),
(17, '65', 'Prosper, made a signup request, ID 65', '2019-11-07 08:05:45', '2019-11-07 08:05:45'),
(18, '66', 'Prosper, made a signup request, ID 66', '2019-11-07 08:10:10', '2019-11-07 08:10:10'),
(19, '67', 'Prosper, made a signup request, ID 67', '2019-11-07 08:11:13', '2019-11-07 08:11:13'),
(20, '68', 'Prosper, made a signup request, ID 68', '2019-11-07 08:17:13', '2019-11-07 08:17:13'),
(21, '69', 'Prosper, made a signup request, ID 69', '2019-11-07 08:20:34', '2019-11-07 08:20:34');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `courses_id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `downloads` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `courses_id`, `file_name`, `file_type`, `downloads`, `file`, `created_at`, `updated_at`) VALUES
(1, '1', 'Getting started with python', 'Content', '2', 'dsfdsfadgdgdd.pdf', '2019-07-19 22:00:00', '2019-07-19 22:00:00'),
(2, '1', 'Exercise 2', 'Exercise', '', '5xbxmsidafpkyted1fqwe6axco4ooqxtsvqmj23q7u6gq2khdbc.docx', '2019-08-15 05:25:49', '2019-08-15 05:25:49');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `created_at`, `updated_at`) VALUES
(1, '2019-07-11 22:00:00', '2019-07-09 22:00:00'),
(2, '2019-07-11 22:00:00', '2019-07-09 22:00:00'),
(3, '2019-07-11 22:00:00', '2019-07-09 22:00:00'),
(4, '2019-07-11 22:00:00', '2019-07-09 22:00:00'),
(5, '2019-07-11 22:00:00', '2019-07-09 22:00:00'),
(6, '2019-07-11 22:00:00', '2019-07-09 22:00:00'),
(7, '2019-07-11 22:00:00', '2019-07-09 22:00:00'),
(8, '2019-07-11 22:00:00', '2019-07-09 22:00:00'),
(9, '2019-07-11 22:00:00', '2019-07-09 22:00:00'),
(10, '2019-07-11 22:00:00', '2019-07-09 22:00:00'),
(11, '2019-07-11 22:00:00', '2019-07-09 22:00:00'),
(12, '2019-07-11 22:00:00', '2019-07-09 22:00:00'),
(13, '2019-07-11 22:00:00', '2019-07-09 22:00:00'),
(14, '2019-07-11 22:00:00', '2019-07-09 22:00:00'),
(15, '2019-07-11 22:00:00', '2019-07-09 22:00:00'),
(16, '2019-07-11 22:00:00', '2019-07-09 22:00:00'),
(17, '2019-07-11 22:00:00', '2019-07-09 22:00:00'),
(18, '2019-07-11 22:00:00', '2019-07-09 22:00:00'),
(19, '2019-07-11 22:00:00', '2019-07-09 22:00:00'),
(20, '2019-07-11 22:00:00', '2019-07-09 22:00:00'),
(21, '2019-07-11 22:00:00', '2019-07-09 22:00:00'),
(22, '2019-07-11 22:00:00', '2019-07-09 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `graduates`
--

CREATE TABLE `graduates` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courses_id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_marks` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enrolled` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `graduates`
--

INSERT INTO `graduates` (`id`, `user_id`, `courses_id`, `course_marks`, `enrolled`, `created_at`, `updated_at`) VALUES
(24, '57', '7', '40', '2019-08-15 07:24:41', '2019-08-15 05:25:06', '2019-08-15 05:25:06'),
(25, '58', '1', '40', '2019-08-15 09:41:10', '2019-08-15 07:43:04', '2019-08-15 07:43:04'),
(26, '4', '4', '50', '2019-08-27 11:31:30', '2019-08-27 09:32:41', '2019-08-27 09:32:41');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admins_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_read` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admins_read` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `admins_id`, `message`, `user_read`, `admins_read`, `type`, `token`, `created_at`, `updated_at`) VALUES
(208, '2', '1', 'test', 'read', 'read', 'sent', 'hWYMrBN', '2019-08-01 09:41:49', '2019-08-01 09:42:51'),
(209, '2', '1', 'g', 'read', 'read', 'sent', 'dOXQKwU', '2019-08-01 09:42:15', '2019-08-01 09:42:51'),
(210, '2', '1', '3df', 'read', 'read', 'sent', 'sJucIdh', '2019-08-01 09:43:19', '2019-08-01 13:24:48'),
(211, '4', '1', 'Prosper', 'unseen', 'read', 'sent', 'QTJkiqO', '2019-08-01 10:21:35', '2019-08-01 10:21:35'),
(212, '2', '1', 'dsfd', 'unseen', 'read', 'usersent', '0eeAmGQ', '2019-08-01 13:28:50', '2019-08-12 08:08:52'),
(213, '2', '1', 'food', 'unseen', 'read', 'usersent', 'CI1h2z2', '2019-08-01 13:35:46', '2019-08-12 08:08:52'),
(214, '2', '1', 'okay let\'s schedule', 'unseen', 'read', 'sent', 'cjC2ho4', '2019-08-12 08:09:04', '2019-08-12 08:09:04'),
(215, '3', '1', 'fghgh', 'unseen', 'read', 'usersent', 'feUjo8b', '2019-08-12 14:23:46', '2019-08-12 14:24:01'),
(216, '3', '1', 'utyutyuytu', 'unseen', 'read', 'sent', 'AfMWwZx', '2019-08-12 14:24:10', '2019-08-12 14:24:10'),
(217, '2', '1', 'hey', 'unseen', 'read', 'sent', 'St6aVp9', '2019-08-14 08:41:33', '2019-08-14 08:41:33'),
(218, '57', '1', 'this is a ticket', 'read', 'read', 'usersent', 'Syc73cQ', '2019-08-15 06:47:10', '2019-08-15 06:51:44'),
(219, '57', '1', 'what\'s the problem', 'read', 'read', 'sent', 'exAirri', '2019-08-15 06:47:38', '2019-08-15 06:51:44'),
(220, '57', '1', 'message', 'read', 'read', 'sent', '1HNKnIX', '2019-08-15 06:51:34', '2019-08-15 06:51:44'),
(221, '57', '1', 'mess', 'unseen', 'read', 'sent', 'Cpr6WdE', '2019-08-15 06:51:53', '2019-08-15 06:51:53'),
(222, '6', '1', 'heeey', 'read', 'read', 'usersent', 'mYd34jv', '2019-08-27 10:04:10', '2019-09-03 11:00:57'),
(223, '3', '1', 'uyttr', 'unseen', 'read', 'sent', '4lmnJmp', '2019-09-09 05:43:17', '2019-09-09 05:43:17'),
(224, '3', '1', 'ruru', 'unseen', 'read', 'sent', 'KrTdIyc', '2019-09-09 05:43:19', '2019-09-09 05:43:19'),
(225, '3', '1', 'rturyu', 'unseen', 'read', 'sent', 'E5gh28w', '2019-09-09 05:43:21', '2019-09-09 05:43:21'),
(226, '3', '1', 'truyuu', 'unseen', 'read', 'sent', '55djrfR', '2019-09-09 05:43:22', '2019-09-09 05:43:22'),
(227, '3', '1', 'yruyutu', 'unseen', 'read', 'sent', 'pXBbKco', '2019-09-09 05:43:24', '2019-09-09 05:43:24'),
(228, '3', '1', 'tyuu', 'unseen', 'read', 'sent', 'dLHABR9', '2019-09-09 05:43:26', '2019-09-09 05:43:26'),
(229, '2', '1', 'ty', 'unseen', 'read', 'sent', 'agoF6Un', '2019-10-02 12:20:01', '2019-10-02 12:20:01');

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
(239, '2014_10_12_000000_create_users_table', 1),
(240, '2019_06_25_054144_create_feeds_table', 1),
(241, '2019_06_25_064102_create_reminders_table', 1),
(242, '2019_06_25_065059_create_categories_table', 1),
(243, '2019_06_25_091413_create_courses_table', 1),
(244, '2019_06_25_104532_create_graduates_table', 1),
(245, '2019_06_25_121513_create_files_table', 1),
(246, '2019_06_25_130320_create_enrolleds_table', 1),
(247, '2019_06_27_062134_create_enroll_histories_table', 1),
(248, '2019_06_27_072207_create_galleries_table', 1),
(249, '2019_06_28_050658_create_signup_requests_table', 1),
(250, '2019_07_01_064456_create_exercises_table', 1),
(251, '2019_07_01_120225_create_course_requests_table', 1),
(252, '2019_07_04_114118_create_temp_marks_table', 1),
(253, '2019_07_04_122244_create_course_marks_table', 1),
(254, '2019_07_05_092353_create_messages_table', 1),
(255, '2019_07_09_113153_create_password_recoveries_table', 1),
(256, '2019_07_18_083852_create_timetables_table', 2),
(257, '2019_07_24_083509_create_subscribers_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_recoveries`
--

CREATE TABLE `password_recoveries` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_recoveries`
--

INSERT INTO `password_recoveries` (`id`, `user_id`, `link`, `visit`, `created_at`, `updated_at`) VALUES
(1, '5', 'WTTgUV7vG58p7sLfslMOdwnh0R9ePkyM6sXJ3otYEc71HfLtEv', '0', '2019-08-03 07:20:10', '2019-08-03 07:20:10'),
(2, '11', 'Kj3YYvljuNd2BXeFQmQbKEKV9XplQ82kxpsdKoTUgm9gC3P0cP', '0', '2019-08-03 08:24:18', '2019-08-03 08:24:18'),
(3, '58', 'djjnJdWgR5vkPOp4IWH8irTGqkpkjZIqVDSz099r3CwG9pO4t7', '0', '2019-08-12 08:17:06', '2019-08-12 08:17:06');

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
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reminder_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reminders`
--

INSERT INTO `reminders` (`id`, `title`, `reminder_type`, `notes`, `date`, `time`, `created_at`, `updated_at`) VALUES
(2, '', '', 'lOOPE', '2021-07-14', '09:30:00', '2019-09-10 08:49:23', '2019-09-10 08:49:23'),
(3, '', '', 'Test reminder', '2019-11-21', '05:40:00', '2019-09-26 12:27:00', '2019-09-26 12:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `signup_requests`
--

CREATE TABLE `signup_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count_sent_mail` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_feed` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `action` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `signup_requests`
--

INSERT INTO `signup_requests` (`id`, `user_id`, `approved`, `count_sent_mail`, `read_feed`, `action`, `link`, `created_at`, `updated_at`) VALUES
(1, '59', 'yes', '1', 'yes', 'Prosper made a signup request', 'BKzEXTiXnB4z70HCpn6WcLr9f8cyRxrCegP69K6MHRWrwuMi66mCyVdv3Ga0xK2xj3b4Gf', '2019-08-27 09:14:34', '2019-09-26 12:28:13'),
(2, '60', 'yes', '1', 'yes', 'Kalvin made a signup request', 'EF5SKLA9S9YNpDlOVs2vOFnrYH1UO3QYiYz1NyZFz1ngUlXhCS0SXdtghRM53HkSUueIbq', '2019-08-27 09:59:14', '2019-08-27 10:16:45'),
(5, '63', 'no', '0', 'no', 'Prosper made a signup request', '', '2019-11-07 07:58:35', '2019-11-07 07:58:35'),
(6, '64', 'no', '0', 'no', 'Prosper made a signup request', '', '2019-11-07 08:02:37', '2019-11-07 08:02:37'),
(7, '65', 'no', '0', 'no', 'Prosper made a signup request', '', '2019-11-07 08:05:45', '2019-11-07 08:05:45'),
(8, '66', 'no', '0', 'no', 'Prosper made a signup request', '', '2019-11-07 08:10:10', '2019-11-07 08:10:10'),
(9, '67', 'no', '0', 'no', 'Prosper made a signup request', '', '2019-11-07 08:11:13', '2019-11-07 08:11:13'),
(10, '68', 'no', '0', 'no', 'Prosper made a signup request', '', '2019-11-07 08:17:14', '2019-11-07 08:17:14'),
(11, '69', 'no', '0', 'no', 'Prosper made a signup request', '', '2019-11-07 08:20:34', '2019-11-07 08:20:34');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temp_marks`
--

CREATE TABLE `temp_marks` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courses_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_marks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timetables`
--

CREATE TABLE `timetables` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `courses_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `avatar` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_number` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blocked` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `last_login` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `avatar`, `name`, `surname`, `phone`, `id_number`, `gender`, `age`, `bio`, `email`, `password`, `blocked`, `last_login`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'img/default.png', 'Admin', 'Sithole', '0613817388', '9509325340083', 'Male', '22-81-1995', '', 'admin@gmail.com', '$2y$10$s8rl0L4mtwVZCtOHM6sOqufmhsgFelhBSCZdKQGz1BYVl4QEMQTMC', 'no', '2019-11-13 10:20:17', 'ER3VSMPxXyS8Blee8gSrUVtk8WAqTC2EmlDGkYdlV4eMZjWDI3F8ucOJP5W7', '2019-07-11 05:40:05', '2019-11-13 08:20:17'),
(2, 'user', 'img/RgAI6z1oFzIgqkPinKwk.jpg', 'Prosper', 'Sithole', '0617817388', '9509355340083', 'Male', '1995/09/22', '', 'user@gmail.com', '$2y$10$uHEHUGT.3YmNcrzxynpFAetLhs.3g3rEuqKx/QIWfhH8ava5hI9iu', 'no', '2019-08-01 15:24:43', 'ASJwZLtB0JUQxC9vuwjIuhRE76rKHhSYI2rQ4Du8vbASSfgjut7wJETIefrG', '2019-07-11 05:40:05', '2019-08-03 06:51:41'),
(3, 'user', 'img/default.png', 'Sphe', 'Hlabisa', '0617817388', '95093553540083', 'Male', '22-81-1995', '', 'ueser@gmail.com', '$2y$10$nVgqemmnMoV/zb1G.ZZhEerbgvfkIBMyjrxauO9FGMsGalHupnIre', 'no', '2019-08-12 16:21:39', 'Xiqgap4yBeJzCyHrm5lDbVie9HexsyHA1KQz3wxDnzZPaHDad0AMmxNtuYb7', '2019-07-11 05:40:05', '2019-08-12 14:21:39'),
(4, 'user', 'img/default.png', 'Benjamin', 'Nkako', '0757988134', '2201014800082', 'Female', '1922/01/01', '', 'sparr@gmail.com', '', 'no', '', NULL, '2019-07-17 08:39:11', '2019-07-24 05:06:02'),
(5, 'user', 'img/default.png', 'Nonhlanhla', 'lebo', '0623817089', '2501014800085', 'Female', '1925-01-01', '', 'mrprosperhjsithole@gmail.com', '$2y$10$Q.tR15D.CwA.t9rMwtUvbO7cGQGb5OjkPo1.vd3aZF9qlYuiW4Qxy', 'no', '2019-08-27 10:42:54', '9hej5XO76naIQJO8KfOjaCecUZZHlk9JyFztUxZkC3AwMN0RY0CVSMCYuiEH', '2019-07-24 05:17:37', '2019-08-27 08:42:54'),
(6, 'user', 'img/default.png', 'Nokubonga', 'Sithole', '0717279881', '95092256340083', 'Male', '1995-09-22', '', 'capabilityhrtest@gmail.com', '$2y$10$7gT7BCkOspfZtt.tSs9uzeRH7vwsZ3RR7zMQrWzm23.GvvJWTr8Ni', 'no', '2019-08-27 12:02:23', '1odL21KkPWW2KXOqZkYcQ2GMUW8WLgQagjsjJyPXPHWnYIUYC9W1nowqJ330', '2019-07-24 05:55:46', '2019-08-27 10:02:23'),
(10, 'user', 'img/default.png', 'Bengo', 'Sithole', '0613817780', '95092254340083', 'Male', '1995-09-22', '', 'mrprosperjksithole@gmail.com', '$2y$10$CGxjC0up1DO8MOp8l2FRIOXLEWl1kyXJxQKHIU.rvaaMX0fWloWBu', 'no', '2019-08-03 10:28:02', 'nfdgpWTeY6PFthrGUrCJ5JKjrsorKmxl3eHz6im2oNv0pRUizniQq4vclwDR', '2019-08-03 07:58:36', '2019-08-03 08:28:02'),
(54, 'user', 'img/default.png', 'Lungi', 'Sithole', '0613887085', '950922058340083', 'Male', '1995-09-22', '', 'mrproshpersithole@gmail.com', '', 'no', '', NULL, '2019-08-05 07:41:42', '2019-08-05 07:41:42'),
(55, 'user', 'img/default.png', 'Chief', 'Sithole', '0613887082', '9509225456340083', 'Male', '1995-09-22', '', 'mrprofgspersithole@gmail.com', '', 'no', '', NULL, '2019-08-05 08:34:45', '2019-08-05 08:34:45'),
(56, 'user', 'img/default.png', 'Siphesihle', 'Lungo', '0613887088', '950922509340083', 'Male', '1995-09-22', '', 'mrprospeghrsithole@gmail.com', '', 'no', '', NULL, '2019-08-05 08:45:09', '2019-08-05 08:45:09'),
(57, 'user', 'img/FzsCYWQEfNQMNDWIGDan.png', 'Nobunto', 'Lucans', '06138178089', '95092425340083', 'Male', '1995-09-22', 'This is my bio', 'mrprosperrsithole@gmail.com', '$2y$10$bQXXCcnjfSYADkci/yXFIOdIJqpeAn7Tl9HDIlO52EAkNVUyQ2USi', 'no', '2019-10-02 13:38:51', '07lJoTXw6ScG0iVSneHn7XYheaUYmDCZ1stXZYpKNnO4FgjHI5zbWwFWFKZB', '2019-08-15 05:11:25', '2019-10-02 11:41:59'),
(58, 'user', 'img/default.png', 'Luke', 'Sithole', '06138178089', '950922534078083', 'Male', '1995-09-22', '', 'kalvin@gmail.com', '$2y$10$QSUBW1iRYkUPF4AV4DmZoOsja/ccjb8HchG4OhZz1XALeKuYxJYRe', 'no', '2019-11-13 10:18:28', 'ymiQiU9ei7VLwNPYwmcuFoK06XCRfCwDSIQzCKmrWDNY5wR8tReL9RYINeCr', '2019-08-15 07:34:54', '2019-11-13 08:18:28'),
(59, 'user', 'img/default.png', 'Prosper', 'Sithole', '0613880083', '9509225340086', 'Male', '1995-09-22', '', 'mrprospfgersithole@gmail.com', '', 'no', '', NULL, '2019-08-27 09:14:34', '2019-08-27 09:14:34'),
(60, 'user', 'img/default.png', 'Kalvin', 'reddy', '0613817089', '8704225114080', 'Male', '1987-04-22', '', 'kalvin.reddy@gmail.com', '', 'no', '', NULL, '2019-08-27 09:59:14', '2019-08-27 09:59:14'),
(61, 'user', 'img/default.png', 'Prosper', 'Sithole', '0613887087', '2001014800086', 'Female', '1920-01-01', '', 'prosperrsiyabonga@gmail.com', '', 'no', '', NULL, '2019-09-03 12:33:38', '2019-09-03 12:33:38'),
(69, 'user', 'img/default.png', 'Prosper', 'Sithole', '0613887083', '9509225340083', 'Male', '1995-09-22', '', 'mrprospersithole@gmail.com', '', 'no', '', NULL, '2019-11-07 08:20:34', '2019-11-07 08:20:34');

-- --------------------------------------------------------

--
-- Table structure for table `user_notifications`
--

CREATE TABLE `user_notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `notification` varchar(200) NOT NULL,
  `link` varchar(80) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_lesson`
--
ALTER TABLE `course_lesson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_marks`
--
ALTER TABLE `course_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_requests`
--
ALTER TABLE `course_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_section`
--
ALTER TABLE `course_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolleds`
--
ALTER TABLE `enrolleds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enroll_histories`
--
ALTER TABLE `enroll_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feeds`
--
ALTER TABLE `feeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graduates`
--
ALTER TABLE `graduates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_recoveries`
--
ALTER TABLE `password_recoveries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup_requests`
--
ALTER TABLE `signup_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_marks`
--
ALTER TABLE `temp_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetables`
--
ALTER TABLE `timetables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_notifications`
--
ALTER TABLE `user_notifications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `course_lesson`
--
ALTER TABLE `course_lesson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_marks`
--
ALTER TABLE `course_marks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_requests`
--
ALTER TABLE `course_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_section`
--
ALTER TABLE `course_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enrolleds`
--
ALTER TABLE `enrolleds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enroll_histories`
--
ALTER TABLE `enroll_histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `exercises`
--
ALTER TABLE `exercises`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feeds`
--
ALTER TABLE `feeds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `graduates`
--
ALTER TABLE `graduates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT for table `password_recoveries`
--
ALTER TABLE `password_recoveries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signup_requests`
--
ALTER TABLE `signup_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp_marks`
--
ALTER TABLE `temp_marks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timetables`
--
ALTER TABLE `timetables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `user_notifications`
--
ALTER TABLE `user_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
