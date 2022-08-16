-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Sie 2022, 12:45
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `telefony`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `newsletter`
--

CREATE TABLE `newsletter` (
  `ID` int(11) NOT NULL,
  `imie` text COLLATE utf8mb4_polish_ci NOT NULL,
  `email` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `newsletter`
--

INSERT INTO `newsletter` (`ID`, `imie`, `email`) VALUES
(90, 'oo', 'oo@o2.pl'),
(92, 'ww', 'ww@o2.pl'),
(93, 'qq', 'qq@o2.pl'),
(95, 'rr', 'rr@o2.pl'),
(96, 'kk', 'kk@o2.pl'),
(97, 'xx', 'xx@o2.pl'),
(98, 'vv', 'vv@o2.pl'),
(99, 'zz', 'zz@o2.pl'),
(100, 'yy', 'yy@o2.pl'),
(101, '', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `telefony`
--

CREATE TABLE `telefony` (
  `ID` int(11) NOT NULL,
  `phone` text COLLATE utf8mb4_polish_ci NOT NULL,
  `modelephone` text COLLATE utf8mb4_polish_ci NOT NULL,
  `ROM` int(11) NOT NULL,
  `RAM` int(11) NOT NULL,
  `battery` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `picture` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `telefony`
--

INSERT INTO `telefony` (`ID`, `phone`, `modelephone`, `ROM`, `RAM`, `battery`, `money`, `picture`) VALUES
(2, 'Iphone', '8', 32, 3, 2700, 1600, 'iphone8.png'),
(3, 'Iphone', '11', 64, 4, 3500, 3900, 'iphone11.png'),
(4, 'Iphone', '13', 256, 8, 5000, 7000, 'iphone13.png'),
(5, 'Iphone', '6', 32, 3, 1700, 790, 'iphone6.png'),
(6, 'Iphone', '5', 16, 2, 1200, 500, 'iphone5.png'),
(7, 'Iphone', '8', 32, 3, 2700, 1600, 'iphone8.png'),
(8, 'Iphone', '11', 64, 4, 3500, 3900, 'iphone11.png'),
(9, 'Iphone', '13', 256, 8, 5000, 7000, 'iphone13.png'),
(10, 'Iphone', '6', 32, 3, 1700, 790, 'iphone6.png'),
(11, 'Iphone', '5', 16, 2, 1200, 500, 'iphone5.png'),
(12, 'Iphone', '8', 32, 3, 2700, 1600, 'iphone8.png'),
(13, 'Iphone', '11', 64, 4, 3500, 3900, 'iphone11.png'),
(14, 'Iphone', '13', 256, 8, 5000, 7000, 'iphone13.png'),
(15, 'Iphone', '6', 32, 3, 1700, 790, 'iphone6.png'),
(16, 'Iphone', '5', 16, 2, 1200, 500, 'iphone5.png'),
(17, 'Iphone', '8', 32, 3, 2700, 1600, 'iphone8.png'),
(18, 'Iphone', '11', 64, 4, 3500, 3900, 'iphone11.png'),
(19, 'Iphone', '13', 256, 8, 5000, 7000, 'iphone13.png'),
(20, 'Iphone', '6', 32, 3, 1700, 790, 'iphone6.png'),
(21, 'Iphone', '5', 16, 2, 1200, 500, 'iphone5.png');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `telefony`
--
ALTER TABLE `telefony`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT dla tabeli `telefony`
--
ALTER TABLE `telefony`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
