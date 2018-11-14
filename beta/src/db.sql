-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Nov-2018 às 23:50
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpoo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultas`
--

CREATE TABLE `consultas` (
  `id` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `userip` varchar(255) NOT NULL,
  `cidadeip` varchar(255) NOT NULL,
  `nomecliente` varchar(255) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `cidade` varchar(55) NOT NULL,
  `plano` varchar(55) NOT NULL,
  `disponibilidade` varchar(8) NOT NULL,
  `creditoaprovado` int(11) NOT NULL,
  `statuscontatado` int(11) NOT NULL,
  `status` varchar(55) NOT NULL,
  `observacao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `consultas`
--

INSERT INTO `consultas` (`id`, `data`, `userip`, `cidadeip`, `nomecliente`, `telefone`, `bairro`, `rua`, `cidade`, `plano`, `disponibilidade`, `creditoaprovado`, `statuscontatado`, `status`, `observacao`) VALUES
(17, '2018-11-11 14:21:05', '', '', 'Joao Vithor', '35984397867', 'Sao sebastiao', 'Sao sebastiao', 'RUA JOSE JORGE CHEDIAK 26 A', '', '', 0, 0, '', ''),
(18, '2018-11-11 14:42:10', '', '', 'Joao Vithor', '35984397867', 'Sao sebastiao', 'Sao sebastiao', 'RUA JOSE JORGE CHEDIAK 26 A', '', '', 0, 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
