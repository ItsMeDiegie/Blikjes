-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 05 feb 2020 om 18:45
-- Serverversie: 10.4.11-MariaDB
-- PHP-versie: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `views` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `price` varchar(255) DEFAULT NULL,
  `published` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `title`, `views`, `img`, `body`, `price`, `published`, `created_at`, `updated_at`) VALUES
(334, 'Test Object Edit', 0, 'Owen.png', 'Test!', '33', 0, '2020-02-05 16:56:06', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('Author','Admin') DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `role`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Awa', 'info@codewithawa.com', 'Admin', 'mypassword', '2018-01-08 11:52:58', '2018-01-08 11:52:58'),
(2, 'dd', 'dd@dd.nl', 'Author', '1aabac6d068eef6a7bad3fdf50a05cc8', '2020-02-03 13:05:24', '2020-02-03 13:05:24'),
(5, 'Diego', 'Diego@Diego.nl', 'Admin', '4fb845c67d91bcb3178498fc6fe1fedc', '2020-02-04 13:00:31', '2020-02-04 13:00:31'),
(6, 'TEST', 'TEST@TEST.TEST', NULL, '033bd94b1168d7e4f0d644c3c95e35bf', '2020-02-05 10:29:18', '2020-02-05 10:29:18'),
(7, 'Doxorboy', 'owenpostma01@gmail.com', NULL, '02f9a9ec38f8c0bb8f31473ce7fb3dc9', '2020-02-05 14:27:59', '2020-02-05 14:27:59'),
(8, 'Owen', 'owenp@owenp.com', NULL, '7929a780afb3816ccacd4ebbe88ceef4', '2020-02-05 14:35:21', '2020-02-05 14:35:21');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=335;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
