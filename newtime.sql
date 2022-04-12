-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Jan 16. 21:20
-- Kiszolgáló verziója: 10.4.21-MariaDB
-- PHP verzió: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `newtime`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `employee`
--

INSERT INTO `employee` (`id`, `first_name`, `last_name`, `phone`, `email`) VALUES
(3, 'aaaaaaaaaa', 'aaaaaaaaaaa', '+3650126421011', 'wwas@asdas.com'),
(5, 'bbbbbbbbbbbbbbb B', 'bbbbbbbbbbbb', '111111', 'asd@asd.com'),
(7, 'Most', 'Tesztelek', '1111112222', 'wwasaa11@asdas.com'),
(9, 'asd11ss', 'aabxxx', '111111222222', 'asdaasd@gmail.com');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`) VALUES
(91, 'Harold', 'Jones'),
(89, 'Christine', 'Smith'),
(88, 'Marker', 'Angela'),
(87, 'Romeo', 'Mary'),
(86, 'Smith', 'John');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'asd', 'asd', 'asdasd'),
(2, 'aaasd', 'asddsd', 'asdssasd'),
(3, 'donatka123', 'asdasaa', 'asd@asd.com'),
(4, 'donatka123', 'asdasaa', 'asd@asd.com'),
(5, 'donatka123', 'Password123', 'feherdonat99@gmail.com'),
(6, 'donatka123', 'Password123', 'asdasd@gmail.com'),
(7, 'asdaaaa', 'Password123', 'wwaaaas@asdas.com'),
(8, 'aaaaaasxc', 'Password123', 'asaaad@asd.com'),
(9, 'asd111', 'Password111', 'asaaad@asd.com'),
(10, 'donatka123', 'Paasdasdas1', 'asd@asd.com'),
(11, 'donatka123', 'Pasdjasdasd123', 'feherdonat99@gmail.com'),
(12, 'donatka123', 'Pasdasdasd1', 'asd@asd.com'),
(13, 'asdasdasdascxy', 'Password123', 'feherdonaaat99@gmail.com'),
(14, 'asd', 'Password123', 'asd@asd.com'),
(15, 'donatka123', 'Password123', 'feherdonaaat99@gmail.com'),
(16, 'donatka123', 'Password123', 'feherdonaaat99@gmail.com'),
(17, 'asd', 'Password123', 'feherdonat99@gmail.com'),
(18, 'ASADASD', 'Password123', 'feherdonaaat99@gmail.com'),
(19, 'username', 'Password123', 'feherdonat99@gmail.com'),
(20, 'donatka123', 'Password123', 'feherdonat99@gmail.com'),
(21, 'donatka123', 'Password123', 'feherdonat99@gmail.com'),
(22, 'donatka123', 'Password123', 'feherdonat99@gmail.com'),
(23, 'donatka123', 'Passsssword123', 'feherdonat99@gmail.com'),
(24, 'donatka123', 'Pasworsaasd1121', 'feherdonat99@gmail.com'),
(25, 'donatka123', 'Pasworsaasd1121', 'feherdonat99@gmail.com'),
(26, 'donatka123', 'Password123', 'feherdonat99@gmail.com'),
(27, 'donatka123', 'Password123', 'feherdonat99@gmail.com'),
(28, 'donatka123', 'Password123', 'feherdonat99@gmail.com'),
(29, 'donatka123', 'Password123', 'feherdonat99@gmail.com'),
(30, 'donatka123', 'Password123', 'feherdonat99@gmail.com'),
(31, 'donatka123', 'Password123', 'feherdonat99@gmail.com'),
(32, 'donatka123', 'Password123', 'feherdonat99@gmail.com'),
(33, 'donatka123', 'lblRegister1', 'feherdonat99@gmail.com'),
(34, 'donatka123', 'emailValidate()1', 'feherdonat99@gmail.com'),
(35, 'donatka123', 'emailValidate()1', 'feherdonat99@gmail.com'),
(36, 'donatka123', 'getElementById1', 'feherdonat99@gmail.com');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT a táblához `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
