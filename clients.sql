-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 05 Lis 2019, 20:18
-- Wersja serwera: 5.7.25
-- Wersja PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `data_on_tables`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` char(50) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `package` char(30) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `clients`
--

INSERT INTO `clients` (`id`, `name`, `package`, `start`, `end`) VALUES
(1, 'Firmax', 'Extensive', '2019-10-16', '2020-11-15'),
(2, 'Betula Sp. z o.o.', 'Standard', '2019-06-06', '2020-06-05'),
(3, 'Dell Inc', 'Extensive', '2018-09-13', '2021-09-12'),
(4, 'Code and Coffee', 'Start', '2019-11-12', '2020-11-11');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
