-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2025 at 02:58 PM
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
(69, 'qweq', 'qwqwes', 4, 'Bonnyqt', '2025-05-13 06:43:31', '2025-05-13 06:43:31', 'sia/uploads/3649ada1744a016b9d3a96a0e201448d.gif', 'Education', 0),
(71, 'ss', 'ss', 4, 'Bonnyqt', '2025-05-13 06:53:49', '2025-05-13 06:53:49', 'sia/uploads/4472341809e598ebc3f2afacb4f5c748.gif', 'Education', 0),
(72, 'test', 'tests', 4, 'Bonnyqt', '2025-05-13 06:56:56', '2025-05-13 06:58:51', 'sia/uploads/045be1ac46824c5a2b9250c0de3cfc53.mp4', 'Lifestyle', 0),
(73, 'rae', 'ara', 13, 'xTojixxx', '2025-05-13 07:31:21', '2025-05-13 07:31:21', 'sia/uploads/246f4d6d5570b15b17d07bae0c9df779.gif', 'Technology', 0),
(74, 'tete', 'tetete', 13, 'xTojixxx', '2025-05-13 07:31:48', '2025-05-13 07:31:48', 'sia/uploads/86b553f5cc153516a5929ce0f093f992.gif', 'Lifestyle', 0);

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
(13, 'xTojixxx', 'mjblmarquez.it@tip.edu.ph', '$2y$10$skQCgfbYdVhVcpePL6dwbuBH/IILPjKItSW2OsYpNbB.n7ji9V5KW', '2025-05-06 08:26:08', '2025-05-06 21:50:15', '0e8a3074e99fbfb21cf80c78fe46c49408e6de85dacd31d7bfe9f95ae2b2ad81', 0, 0),
(14, 'cyberclash', 'asd@gmail.com', '$2y$10$1dYwCHcLcPgoE7G5tBI1oeJgFR5zkP8E2sWOzK1vYk8bzile7pKEm', '2025-05-06 08:31:36', '2025-05-06 08:31:44', '39044e7866ecf3123bdd33f93128e85a1db1affc2952ce99df4a05be4c0ed45d', 0, 0),
(15, 'wewe', 'bon@ticket.com', '$2y$10$AsNVd8FgOcsSxmmQmu.XTetcJNPbmZ8fWSyInI0x0bZPmzGx0/iq6', '2025-05-07 00:05:42', '2025-05-07 00:05:47', '53612b2c48fdad720d1f5478f48089eb3c8c9f5f35ff5c8f72eae45bd529318d', 0, 0),
(16, 'ret', 'marquezjonbonxcx@gmail.com', '$2y$10$069z9yxAGLnTk2SUqXnGee82X5qZPN.UnbV.wUvn9JQc/TOcK9ZMm', '2025-05-08 23:13:51', '2025-05-08 23:13:57', '29d8bd8770f3af8653cafd4390c8cc1fa23be26bc7c557b5c1632bbc2eec4115', 0, 0),
(17, 'testtt', 'tes22t@gmail.com', '$2y$10$wBkzAOBW0aLefxTXvFLkXe/yUJMz7xM9doQ16q4Yaa9SfhaaOWIWC', '2025-05-13 04:25:55', '2025-05-13 04:31:22', 'd8fb973efd5c8448ca4e4235ad5bc9025628ef174cb4a973703132a285722cac', 0, 0),
(18, 'admin', 'admin@gmail.com', '$2y$10$c1Uq42uooc./qm3xKxSVTOO/i9RbAneVKptoNGiqHSOI4SxsCeSi6', '2025-05-13 07:59:01', '2025-05-13 07:59:26', 'eedfc7d2a9fdc902f787b75d78e90470f0d823f25cad8aeb465c62df24ea004c', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `post_interactions`
--
ALTER TABLE `post_interactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
