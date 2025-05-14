-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2025 at 07:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sia_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `media` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `isAnonymous` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `content`, `user_id`, `username`, `created_at`, `updated_at`, `media`, `category`, `isAnonymous`) VALUES
(47, 'My lifes', 'Welcome to Lost & Vocal, a community-driven blogging platfor…', 13, 'xTojixxx', '2025-05-06 23:53:33', '2025-05-14 17:37:25', 'uploads/1746604413_5e4196a86a30a06199ff.gif', 'Lifestyle', 0),
(54, 'sss', 'ss', 17, 'zxc', '2025-05-07 04:19:42', '2025-05-07 04:19:42', 'uploads/1746620382_7cc9764d8917e03c149a.jpg', 'Entertainment', 0),
(55, 'test', 'test', 4, 'Bonnyqt', '2025-05-14 13:21:50', '2025-05-14 13:21:50', 'sia/uploads/5ec2e5c1ddb7726f30006d9cf2b0ce4c.png', 'Health', 0),
(59, 'asd', 'asd', 13, 'xTojixxx', '2025-05-14 17:28:27', '2025-05-14 17:28:27', 'sia/uploads/d0a8d9d666475ddb83fc4ba6ab458b82.jpg', 'Lifestyle', 0);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `username`, `action`, `created_at`) VALUES
(1, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php', '2025-05-14 17:14:07'),
(2, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php/blog/list', '2025-05-14 17:14:08'),
(3, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php', '2025-05-14 17:14:12'),
(4, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php/blog/myposts', '2025-05-14 17:14:20'),
(5, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php/blog/search', '2025-05-14 17:14:26'),
(6, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php/blog/search', '2025-05-14 17:16:25'),
(7, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php/blog/search', '2025-05-14 17:17:07'),
(8, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php', '2025-05-14 17:17:16'),
(9, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php', '2025-05-14 17:18:28'),
(10, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php', '2025-05-14 17:23:53'),
(11, 13, 'xTojixxx', 'Created a new blog post titled \'ss\'', '2025-05-14 17:25:12'),
(12, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php/blog/list', '2025-05-14 17:25:13'),
(13, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php/blog/myposts', '2025-05-14 17:25:26'),
(14, NULL, 'xTojixxx', 'Created a new blog post titled \'ssasd\'', '2025-05-14 17:25:58'),
(15, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php/blog/myposts', '2025-05-14 17:25:58'),
(16, NULL, 'xTojixxx', 'Updated blog post titled \'ssasdss\'', '2025-05-14 17:26:14'),
(17, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php/blog/myposts', '2025-05-14 17:26:14'),
(18, NULL, NULL, 'Deleted a blog post titled: \'\'', '2025-05-14 17:26:45'),
(19, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php/blog/myposts', '2025-05-14 17:26:46'),
(20, NULL, NULL, 'Deleted a blog post titled: \'\'', '2025-05-14 17:27:24'),
(21, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php/blog/myposts', '2025-05-14 17:27:25'),
(22, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php/blog/myposts', '2025-05-14 17:27:49'),
(23, NULL, NULL, 'Deleted a blog post titled: \'\'', '2025-05-14 17:27:52'),
(24, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php/blog/myposts', '2025-05-14 17:27:52'),
(25, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php/blog/myposts', '2025-05-14 17:28:20'),
(26, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php/blog/about', '2025-05-14 17:28:22'),
(27, 13, 'xTojixxx', 'Created a new blog post titled \'asd\'', '2025-05-14 17:28:27'),
(28, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php/blog/list', '2025-05-14 17:28:27'),
(29, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php/blog/myposts', '2025-05-14 17:28:29'),
(30, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php/blog/about', '2025-05-14 17:28:32'),
(31, 13, 'xTojixxx', 'Created a new blog post titled \'asd\'', '2025-05-14 17:28:39'),
(32, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php/blog/list', '2025-05-14 17:28:39'),
(33, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php/blog/myposts', '2025-05-14 17:28:41'),
(34, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php/blog/myposts', '2025-05-14 17:29:55'),
(35, NULL, NULL, 'Deleted a blog post titled: \'asd\'', '2025-05-14 17:29:56'),
(36, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php/blog/myposts', '2025-05-14 17:29:56'),
(37, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php/blog/myposts', '2025-05-14 17:30:02'),
(38, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php/blog/myposts', '2025-05-14 17:32:00'),
(39, NULL, NULL, 'User Logged Out: \'\'', '2025-05-14 17:32:22'),
(40, 4, 'Bonnyqt', 'Visited: http://localhost/sia/index.php', '2025-05-14 17:32:59'),
(41, 4, 'Bonnyqt', 'User logged out.', '2025-05-14 17:33:10'),
(42, 13, 'xTojixxx', 'User logged in successfully.', '2025-05-14 17:34:17'),
(43, 13, 'xTojixxx', 'Visited: http://localhost/sia/index.php', '2025-05-14 17:34:17'),
(44, 13, 'xTojixxx', 'User logged out.', '2025-05-14 17:34:25'),
(45, 20, 'admin', 'User logged in successfully.', '2025-05-14 17:34:41'),
(46, 20, 'admin', 'Updated blog post ID 47 titled \'My lifes\'', '2025-05-14 17:37:25'),
(47, 20, 'admin', 'Updated blog post ID 47 titled \'My lifes\'', '2025-05-14 17:37:49'),
(48, 20, 'admin', 'Updated user ID 13 (xTojixxxs)', '2025-05-14 17:38:09'),
(49, 20, 'admin', 'Updated user ID 13 (xTojixxx)', '2025-05-14 17:38:18');

-- --------------------------------------------------------

--
-- Table structure for table `post_interactions`
--

CREATE TABLE `post_interactions` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` enum('like','comment') NOT NULL,
  `comment_text` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `api_key` varchar(255) NOT NULL,
  `first_login` tinyint(1) DEFAULT 1,
  `is_superuser` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`, `api_key`, `first_login`, `is_superuser`) VALUES
(4, 'Bonnyqt', 'mjblmarquez@tip.edu.ph', '$2y$10$UKziBi8DBYEt8cZItwqmTOIC4bmjphiAV.U0LcPkDmAyOnIVMCKSm', '2025-05-05 07:51:48', '2025-05-06 18:20:01', '54431fc9d7402eec6f1901d4b243be2ba29847b1c097169b363716b72ad40088', 0, 0),
(13, 'xTojixxx', 'mjblmarquez.it@tip.edu.ph', '$2y$10$skQCgfbYdVhVcpePL6dwbuBH/IILPjKItSW2OsYpNbB.n7ji9V5KW', '2025-05-06 08:26:08', '2025-05-14 17:38:18', '0e8a3074e99fbfb21cf80c78fe46c49408e6de85dacd31d7bfe9f95ae2b2ad81', 0, 0),
(20, 'admin', 'admin@gmail.com', '$2y$10$GwyKAfjy8qd8sUNOcTkD7uiLLLrYVsOqRaV6XjaOWfsqzy2mi0GgW', '2025-05-14 15:17:23', '2025-05-14 15:19:06', 'bff414c87a15defdde427e2a775ddcd7ff63bbf2d50ae9a55ba176dca86f1915', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `post_interactions`
--
ALTER TABLE `post_interactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `api_key` (`api_key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `post_interactions`
--
ALTER TABLE `post_interactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
