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
-- Baza danych: `przeprowadzki`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nazwy`
--

CREATE TABLE `nazwy` (
  `ID` int(11) NOT NULL,
  `nazwa-firmy` text COLLATE utf8mb4_polish_ci NOT NULL,
  `opis-firmy` text COLLATE utf8mb4_polish_ci NOT NULL,
  `ocena` text COLLATE utf8mb4_polish_ci NOT NULL,
  `ilosc-polubien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `nazwy`
--

INSERT INTO `nazwy` (`ID`, `nazwa-firmy`, `opis-firmy`, `ocena`, `ilosc-polubien`) VALUES
(1, 'Cliktrans', 'Firma do przewozu różnych rzeczy', '4.1', 65),
(2, 'Speedtrans', 'Firma do przeprowadzek', '2.9', 9),
(3, 'Fast-Przeprowadzki', 'Firma do przeprowadzek', '4.8', 12);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `terminy`
--

CREATE TABLE `terminy` (
  `ID` int(11) NOT NULL,
  `dostepnosc` text COLLATE utf8mb4_polish_ci NOT NULL,
  `miejscowosc` text COLLATE utf8mb4_polish_ci NOT NULL,
  `data` date NOT NULL,
  `data-wykonania` date NOT NULL,
  `czas-wykonania` int(11) NOT NULL,
  `number-phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `terminy`
--

INSERT INTO `terminy` (`ID`, `dostepnosc`, `miejscowosc`, `data`, `data-wykonania`, `czas-wykonania`, `number-phone`) VALUES
(7, 'zajęty', 'Warszawa', '2022-08-10', '0000-00-00', 0, 0),
(8, 'zajęty', 'Sandomierz', '2022-08-10', '2022-08-26', 18, 0),
(9, 'zajęty', 'Sandomierz', '2022-08-10', '2022-08-26', 18, 0),
(10, 'zajęty', 'Sandomierz', '2022-08-10', '2022-08-26', 18, 0),
(11, 'zajęty', 'Kraków', '2022-08-10', '2022-08-13', 10, 0),
(12, 'zajęty', 'Kraków', '2022-08-10', '2022-08-13', 10, 0),
(13, 'zajęty', 'Kraków', '2022-08-10', '2022-08-13', 10, 0),
(14, 'zajęty', 'Kraków', '2022-08-10', '2022-08-13', 10, 0),
(15, 'zajęty', 'Kielce', '2022-08-10', '2022-08-13', 18, 0),
(16, 'zajęty', 'Kielce', '2022-08-10', '2022-08-13', 18, 0),
(17, 'zajęty', 'Sandomierz', '2022-08-10', '2022-08-11', 18, 0),
(18, 'zajęty', 'Sandomierz', '2022-08-10', '2022-08-11', 18, 0),
(20, 'zajęty', 'Katowice', '2022-08-10', '2022-08-12', 10, 0),
(21, 'zajęty', 'Sandomierz', '2022-08-10', '2022-08-15', 10, 532),
(22, 'zajęty', 'Sandomierz', '2022-08-10', '2022-08-11', 10, 753256334),
(23, 'zajęty', 'Piła', '2022-08-10', '2022-08-13', 10, 453321353),
(24, 'zajęty', 'Kraków', '2022-08-10', '2022-08-12', 18, 753632423),
(27, 'zajęty', 'Sandomierz', '2022-08-10', '2022-08-19', 10, 0),
(28, 'zajęty', 'Piła', '2022-08-10', '2022-08-11', 18, 743854334),
(29, 'zajęty', 'Rzeszów', '2022-08-10', '2022-08-14', 10, 834234543),
(30, 'zajęty', 'Sandomierz', '2022-08-10', '2022-08-13', 10, 765234654),
(31, 'zajęty', 'Warszawa', '2022-08-12', '2022-08-13', 10, 543534534);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `nazwy`
--
ALTER TABLE `nazwy`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `terminy`
--
ALTER TABLE `terminy`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `nazwy`
--
ALTER TABLE `nazwy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `terminy`
--
ALTER TABLE `terminy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
