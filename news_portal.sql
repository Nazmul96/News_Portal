-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2021 at 04:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soft_delete` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_bn`, `category_en`, `soft_delete`, `created_at`, `updated_at`) VALUES
(1, 'বাংলাদেশ', 'Bangladesh', '0', NULL, NULL),
(2, 'খেলাধুলা', 'sports', '0', NULL, NULL),
(3, 'বিনোদন', 'Entertainment', '0', NULL, NULL),
(4, 'আন্তর্জাতিক', 'International', '0', NULL, NULL),
(5, 'অর্থনীতি', 'Economy', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `district_bn`, `district_en`, `created_at`, `updated_at`) VALUES
(1, '1', 'নারায়ণগঞ্জ', 'Narayangonj', NULL, NULL),
(2, '1', 'গাজীপুর', 'Gazipur', NULL, NULL),
(3, '1', 'ঢাকা', 'Dhaka', NULL, NULL),
(4, '1', 'মুন্সিগঞ্জ', 'Munsigonj', NULL, NULL),
(5, '3', 'সীতাকুন্ড', 'Sitakundo', NULL, NULL),
(6, '3', 'কক্সবাজার', 'Coxbazzar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `division_bn`, `division_en`, `created_at`, `updated_at`) VALUES
(1, 'ঢাকা', 'Dhaka', NULL, NULL),
(2, 'সিলেট', 'Shylet', NULL, NULL),
(3, 'চট্রগ্রাম', 'chattrogram', NULL, NULL),
(5, 'খুলনা', 'Khulna', NULL, NULL),
(6, 'বরিশাল', 'Barisal', NULL, NULL);

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
-- Table structure for table `important_websites`
--

CREATE TABLE `important_websites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `website_name_bn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `important_websites`
--

INSERT INTO `important_websites` (`id`, `website_name_bn`, `website_name_en`, `website_link`, `created_at`, `updated_at`) VALUES
(1, 'প্রথমআলো', 'Prothomalo', 'https://www.prothomalo.com/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `livetv`
--

CREATE TABLE `livetv` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `embed_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `livetv`
--

INSERT INTO `livetv` (`id`, `embed_code`, `status`, `created_at`, `updated_at`) VALUES
(1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/c7eJMiN_B6s\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1, NULL, NULL);

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
(4, '2021_08_18_113139_create_categories_table', 2),
(5, '2021_08_18_113248_create_subcategories_table', 2),
(6, '2021_08_19_153451_create_divisions_table', 2),
(7, '2021_08_19_155533_create_districts_table', 2),
(8, '2021_08_20_162820_create_posts_table', 2),
(9, '2021_08_23_054707_create_socials_table', 2),
(10, '2021_08_23_054737_create_seos_table', 2),
(11, '2021_08_24_061334_create_namaz_table', 2),
(12, '2021_08_24_134108_create_livetv_table', 2),
(13, '2021_08_24_163847_create_notices_table', 2),
(14, '2021_08_25_135513_create_important_websites_table', 2),
(15, '2021_08_26_090021_create_photos_table', 2),
(16, '2021_08_27_170334_create_videos_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `namaz`
--

CREATE TABLE `namaz` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fajr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `johr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `magrib` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `esha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jummah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `namaz`
--

INSERT INTO `namaz` (`id`, `fajr`, `johr`, `asor`, `magrib`, `esha`, `jummah`, `created_at`, `updated_at`) VALUES
(1, '5:10 AM', '1:15 PM', '5:00 PM', '6:40 PM', '8:15 PM', '1:30 PM', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notice` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Laravel is the best framework for website development', 1, NULL, NULL);

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
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `photo`, `title`, `type`, `created_at`, `updated_at`) VALUES
(1, 'public/photos_gallery/612a42f887b64.jpg', 'shakib al hasan', '1', NULL, NULL),
(2, 'public/photos_gallery/612a430761175.jpg', 'musfiqur Rahim', '1', NULL, NULL),
(3, 'public/photos_gallery/612a432b1f260.jpg', 'Tamim Iqbal Khan', '1', NULL, NULL),
(4, 'public/photos_gallery/612a434b93a27.jpg', 'Mashrfe Bin martaza', '0', NULL, NULL),
(5, 'public/photos_gallery/612a435fe99f2.jpg', 'Mahmudulallah riyad', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) DEFAULT NULL,
  `division_id` int(11) NOT NULL,
  `district_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `title_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_bn` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags_bn` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline` int(11) DEFAULT NULL,
  `first_section` int(11) DEFAULT NULL,
  `first_section_thumbnail` int(11) DEFAULT NULL,
  `bigthumbnail` int(11) DEFAULT NULL,
  `post_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `cat_id`, `subcat_id`, `division_id`, `district_id`, `user_id`, `title_bn`, `title_en`, `image`, `details_en`, `details_bn`, `tags_bn`, `tags_en`, `headline`, `first_section`, `first_section_thumbnail`, `bigthumbnail`, `post_date`, `post_month`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 3, 6, 1, 'উখিয়ায় ৪ লাখ ইয়াবা উদ্ধার, গ্রেপ্তার ২', '4 lakh yaba recovered in Ukhia, 2 arrested', 'public/postimages/612a3bec64b55.jpg', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '<p><span style=\"color: rgb(18, 18, 18); font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 18px; white-space: break-spaces;\">কক্সবাজারের উখিয়া উপজেলায় পৃথক অভিযানে চার লাখ ইয়াবা বড়ি উদ্ধার করা হয়েছে। দুটি অভিযানে একজন রোহিঙ্গাসহ দুজনকে গ্রেপ্তার করেছে কক্সবাজার-৩৪ বর্ডার গার্ড ব্যাটালিয়ন (বিজিবি) ও র‌্যাপিড অ্যাকশন ব্যাটালিয়ান (র‌্যাব)–১৫। আজ শনিবার র‌্যাব ও বিজিবি সূত্রে এ তথ্য জানা যায়। </span><span style=\"color: rgb(18, 18, 18); font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 18px; white-space: break-spaces;\">গ্রেপ্তার দুজন হলেন নাইক্ষ্যংছড়ির বালুখালীর হেডম্যানপাড়ার অটোরিকশাচালক মো. সায়েদ আলম (৪৫) ও বালুখালী রোহিঙ্গা ক্যাম্প-১০–এর জি ব্লকের বাসিন্দা আনোয়ার ইসলাম (৩৪)। </span><span style=\"color: rgb(18, 18, 18); font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 18px; white-space: break-spaces;\">বিজিবি ও র‌্যাব সূত্রে জানা যায়, আজ ভোর সাড়ে পাঁচটার দিকে ঘুমধুম সীমান্তচৌকি বিজিবির একটি দল উখিয়া উপজেলার ৫ নম্বর পালংখালী ইউনিয়নের কাস্টমস মোড়ে সিএনজিচালিত অটোরিকশা থামিয়ে তল্লাশি চালিয়ে বস্তাভর্তি ৩ লাখ ২০ হাজার ইয়াবা উদ্ধার করে। এ সময় অটোরিকশাটির চালক মো. সায়েদ আলমকে আটক করা হয়। এদিকে ভোররাত তিনটার দিকে র‌্যাব-১৫–এর একটি বিশেষ দল বালুখালী ক্যাম্প-১০ জি ব্লকের ৯ নম্বর বসতঘরে অভিযান চালিয়ে বস্তাভর্তি ৮০ হাজার ইয়াবা উদ্ধার করেছে। এ সময় ওই ঘরের বাসিন্দা আনোয়ার ইসলাম আটক করা হয়। </span><span style=\"color: rgb(18, 18, 18); font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 18px; white-space: break-spaces;\">কক্সবাজার-৩৪ বিজিবির অধিনায়ক লে. কর্নেল আলী হায়দার আজাদ আহমেদ ও র‌্যাবের সহকারী পরিচালক আবদুল্লাহ মোহাম্মদ শেখ সাদী জানিয়েছেন, এ ঘটনায় দুজনকে উখিয়া থানা–পুলিশের কাছে সোপর্দ করে মাদকদ্রব্য নিয়ন্ত্রণ আইনে মামলা করা হয়েছে। সেই মামলায় ওই দুজনকে গ্রেপ্তার দেখানো হয়েছে।</span><br></p>', 'govttt', 'hello', 1, 1, NULL, 1, '28-08-2021', 'August', NULL, NULL),
(2, 2, 4, 1, 3, 1, 'ওপেনারদের নিয়ে চিন্তা নেই প্রিন্সের', 'Prince is not worried about the openers', 'public/postimages/612a3cccba65c.jpg', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '<p><span style=\"color: rgb(18, 18, 18); font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 18px; white-space: break-spaces;\">জিম্বাবুয়ে ও অস্ট্রেলিয়ার বিপক্ষে টি-টোয়েন্টি সিরিজে বাংলাদেশ দলে ছিলেন না মুশফিকুর রহিম ও লিটন দাস। নিউজিল্যান্ডের বিপক্ষে পাঁচ ম্যাচের টি-টোয়েন্টি সিরিজের দলে দুজনই ফিরেছেন। বাংলাদেশ দলের ব্যাটিং পরামর্শক অ্যাশওয়েল প্রিন্সের চোখে ১ সেপ্টেম্বর থেকে শুরু হতে যাওয়া সিরিজের আগে এটা বড় একটা ইতিবাচক দিক। তাঁদের উপস্থিতি বাংলাদেশ দলের ব্যাটিং শক্তি আরও বাড়াবে, এমনই আশা দক্ষিণ আফ্রিকান এই কোচের। </span><span style=\"color: rgb(18, 18, 18); font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 18px; white-space: break-spaces;\">আজ মিরপুর শেরেবাংলা স্টেডিয়ামে বাংলাদেশ দলের অনুশীলনের ফাঁকে প্রিন্স বলেছেন, ‘মুশফিক, লিটনরা এই কন্ডিশনে অভিজ্ঞ। ওরা যদিও অস্ট্রেলিয়া সিরিজে খেলেনি, সেই সিরিজে কী কী বিষয় কাজে এসেছে, আমরা আরও কোথায় উন্নতি করতে পারি, এসব নিয়ে ওদের সঙ্গে কথা হয়েছে। এসব আমরা নিউজিল্যান্ড সিরিজেও কাজে লাগাতে পারব। </span><span style=\"color: rgb(18, 18, 18); font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 18px; white-space: break-spaces;\">সর্বশেষ দুটি সিরিজে দুই রকম কন্ডিশনে খেলে সফল হয়েছে বাংলাদেশ। জিম্বাবুয়ের বাউন্সি ও গতিময় উইকেটে স্বাগতিকদের হারিয়েছে তিন সংস্করণের সিরিজেই। জিম্বাবুয়ে থেকে দেশে ফিরে বাংলাদেশকে খেলতে হয়েছে মিরপুরের মন্থর ও নিচু বাউন্সের উইকেটে। দুই ধরনের কন্ডিশনেই মানিয়ে নেওয়ার পরীক্ষায় উত্তীর্ণ হয়েছে বাংলাদেশ। এটাই আশাবাদী করছে প্রিন্সকে। </span><span style=\"color: rgb(18, 18, 18); font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 18px; white-space: break-spaces;\">প্রিন্স বলেছেন, ‘জিম্বাবুয়ে সিরিজ ও অস্ট্রেলিয়া সিরিজের মধ্যে সবচেয়ে বড় পার্থক্য ছিল কন্ডিশনে। বিশেষ করে ব্যাটিং কন্ডিশনে। এখানে মানিয়ে নেওয়ার বিষয়টি ছিল গুরুত্বপূর্ণ। জিম্বাবুয়েতে আমরা একটু বাড়তি বাউন্সের কন্ডিশনে খেলেছি। দলের সবাই সেখানে ভালোই মানিয়ে নিয়েছিল। এরপর ঘরে ফিরে যে নিচু বাউন্সের উইকেটে খেলেছি, এখানে মানিয়ে নেওয়াটাও ছিল গুরুত্বপূর্ণ। </span><span style=\"color: rgb(18, 18, 18); font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 18px; white-space: break-spaces;\">নিউজিল্যান্ড সিরিজেও অস্ট্রেলিয়া সিরিজের মতোই উইকেট আশা করছেন প্রিন্স, ‘নিউজিল্যান্ড সিরিজেও আমি প্রায় একই কন্ডিশন আশা করছি। অস্ট্রেলিয়া সিরিজে আমাদের জন্য অনেক কিছু শেখার ছিল। এসব নিয়ে আমরা নিজেদের মধ্যে কথা বলেছি।’ </span><span style=\"color: rgb(18, 18, 18); font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 18px; white-space: break-spaces;\">অস্ট্রেলিয়া সিরিজে বাংলাদেশ দলের ওপেনাররা ছিলেন ব্যর্থ। নিউজিল্যান্ড সিরিজে ওপেনাররা সেই দুঃসময় কাটিয়ে উঠবেন বলেই আশা সবার। বাংলাদেশ দলের ব্যাটিং পরামর্শক অবশ্য এ নিয়ে খুব একটা চিন্তিত নন। লিটন ফেরায় ওপেনিং সমস্যার সমাধান হবে বলে তাঁর আশা, ‘আমি ওপেনিং ব্যাটসম্যানদের নিয়ে খুব একটা ভাবছি না। আমরা জিম্বাবুয়েতে এক-দুটি ভালো জুটি গড়েছি। অস্ট্রেলিয়া সিরিজে কন্ডিশন কঠিন ছিল। বাউন্ডারি মারা সহজ ছিল না। এখানে মানিয়ে নেওয়াটাই গুরুত্বপূর্ণ। দলে ওপেনিংয়ে জায়গা পেতে প্রতিযোগিতা আছে। লিটন নিশ্চয়ই এই সিরিজে সুযোগ পাবে।’</span><br></p>', 'prince', 'prince', 1, 1, 1, 1, '28-08-2021', 'August', NULL, NULL),
(3, 2, 5, 1, 2, 1, 'ইউনাইটেডের জার্সিতে রোনালদোকে দেখতে অপেক্ষা আরও ১৪ দিন', '14 more days waiting to see Ronaldo in United jersey', 'public/postimages/612a3f74d0a80.jpg', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '<p><span style=\"color: rgb(18, 18, 18); font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 18px; white-space: break-spaces;\">কী নাটকই-না হলো কাল সারা দিনে! গত মাস দু-একে রোনালদোর সঙ্গে পিএসজি, রিয়াল মাদ্রিদ, ম্যানচেস্টার ইউনাইটেড...কত নাম জড়িয়েই-না গুঞ্জন ছড়িয়েছে। কিন্তু শেষ পর্যন্ত জানা গেল, জুলাই পর্যন্ত লিওনেল মেসি ও রোনালদো দুজনের দিকেই নজর রেখে চলা পিএসজি মেসিকে পাওয়ার পর আর রোনালদোর ব্যাপারে আগ্রহী নয়। রোনালদো ফেরার আগ্রহ দেখালেও রিয়াল সভাপতি ফ্লোরেন্তিনো পেরেজ সেই এপ্রিলেই জানিয়ে রেখেছিলেন, রিয়ালে রোনালদোর ফেরার দরজা খুলবে না।  </span><span style=\"color: rgb(18, 18, 18); font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 18px; white-space: break-spaces;\">ম্যানচেস্টার ইউনাইটেডও এত দিন অবিশ্বাস্যরকম চুপ ছিল। কিন্তু পরশু যখন রোনালদো ম্যান সিটিতে যাচ্ছেন বলে প্রায় নিশ্চিত করে জানাচ্ছিল ইংল্যান্ডের সংবাদমাধ্যম, ইউনাইটেডের যেন ‘ইগো’তে লাগল! </span><span style=\"color: rgb(18, 18, 18); font-family: Shurjo, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 18px; white-space: break-spaces;\">বাংলাদেশ সময় গতকাল বিকেলে ইউনাইটেড কোচ সুলশার জানালেন, ম্যানচেস্টার ইউনাইটেডে খেলা কোনো খেলোয়াড় কখনো ম্যানচেস্টার সিটিতে খেলা উচিত নয়। সঙ্গে এ-ও জানিয়ে দিলেন, রোনালদো জুভেন্টাস ছাড়তে চাইলে তাঁরা প্রস্তুত রোনালদোকে নেওয়ার জন্য।</span><br></p>', 'unhited', 'united', 1, 1, 1, NULL, '28-08-2021', 'August', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_verification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alexa_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_author`, `meta_title`, `meta_keyword`, `meta_description`, `google_analytics`, `google_verification`, `alexa_analytics`, `created_at`, `updated_at`) VALUES
(1, 'N@zmul Academy', 'Boerer Alo News Portal', 'newsportal, online newsportal, e news', 'This is an online news portal you can easily read and watch daily news', 'google', 'okk', 'sadas', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `facebook`, `twitter`, `youtube`, `instagram`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory_bn`, `subcategory_en`, `created_at`, `updated_at`) VALUES
(1, '3', 'হলিউড', 'Hollywood', NULL, NULL),
(2, '3', 'বলিউড', 'Bollywood', NULL, NULL),
(3, '3', 'ডালিউড', 'Dallywood', NULL, NULL),
(4, '2', 'ক্রিকেট', 'Cricket', NULL, NULL),
(5, '2', 'ফুটবল', 'Football', NULL, NULL),
(6, '1', 'সরকার', 'Goverment', NULL, NULL),
(7, '4', 'চীন', 'China', NULL, NULL),
(8, '4', 'আমেরিকা', 'America', NULL, NULL),
(9, '4', 'ভারত', 'India', NULL, NULL);

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
(1, 'Nazmul hossain', 'nazmul@gmail.com', '2021-06-09 03:25:16', '$2y$10$fHz5EvO5SjBm1lXCKniiMujgZL/yBZQv7d5zCzq5xm7NhmHhOJWlm', 'sU5b2O9ntFFbjvSqq2oAwaIFOd7befWY9B8RTZtjenoKIevZohe9VXxXfGvI', '2021-06-08 23:57:13', '2021-06-09 03:27:03'),
(2, 'shoron', 'shoron@gmail.com', '2021-06-09 03:12:26', '$2y$10$jYxxTpqjw9NeGHb/9yDQ5.PTZFN775O8YN79zWlsXPoZ4Krtm6Vhe', NULL, '2021-06-09 02:58:10', '2021-06-09 03:12:27'),
(4, 'shipat', 'shifat@gmail.com', '2021-06-09 08:37:22', '$2y$10$zOYd4pC5d0NmsjV28cf/FeVeiF9WlnRbIpKcMCndpDSIQgVB.o1Ey', NULL, '2021-06-09 08:36:15', '2021-06-09 08:37:22'),
(5, 'kalu', 'kalu@gmail.com', NULL, '$2y$10$RZzmWkStP1GFokbf7O2RBesqwdhaODK4ORukc.wjugfHEfT8rKjRu', NULL, '2021-08-09 23:33:04', '2021-08-09 23:33:04');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `embed_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `embed_code`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Laravel Basic To Advanced With Full project', 'sWd96i4VU74', '0', NULL, NULL),
(2, 'Vue 3 Tutorial - Full Course 10 Hours 10 apps', 'e-E0UB-YDRk', '1', NULL, NULL),
(3, 'Intervention Image Introduction', 's0vyQFWxRj8', '0', NULL, NULL),
(4, 'Visual Studio Code - Install and setup vscode', '41G9k7lsNU4', '1', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `important_websites`
--
ALTER TABLE `important_websites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livetv`
--
ALTER TABLE `livetv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `namaz`
--
ALTER TABLE `namaz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `important_websites`
--
ALTER TABLE `important_websites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `livetv`
--
ALTER TABLE `livetv`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `namaz`
--
ALTER TABLE `namaz`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
