-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Abr-2022 às 01:01
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `atelier`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `ID` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `cidade` varchar(200) NOT NULL,
  `notas` int(11) NOT NULL,
  `interesse` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`ID`, `nome`, `email`, `cidade`, `notas`, `interesse`) VALUES
(7, 'Marina', 'marina@gmail.com', 'canoas', 0, 'impresso'),
(8, 'Gabriela Maria', 'fernanda@gmail.com', 'viamao', 8, 'linkedin'),
(9, 'Tamira', 'tami@gmail.com', 'sapucaia', 5, 'instagram'),
(10, 'Marcos', 'marcos@gmail.com', 'alvorada', 6, 'facebook'),
(11, 'Marina', 'marina@gmail.com', 'poa', 10, 'instagram'),
(12, 'Felipe', 'lod@gmail.com', 'poa', 10, 'indicacao'),
(13, 'Marina', 'marina@gmail.com', 'inicio_tres', 5, 'linkedin'),
(14, 'Gabriel', 'gabriel@gmail.com', 'poa', 0, 'Indicacao'),
(15, 'Felipe', 'todes@gmail.com.nr', 'poa', 2, 'Facebook'),
(16, 'Tamira', 'deus@hamil.com', 'alvorada', 10, 'Instagram'),
(17, 'Silvana ', 'sahus@gmail', 'novohamburgo', 7, 'Indicacao'),
(18, 'Makendy', 'makendy@genteboa.com', 'eldorado', 8, 'Nossosite'),
(19, 'Juliana Jesus', 'jj@gmail.com', 'canoas', 4, 'Facebook'),
(20, 'Fernanda Jesus', 'fj@gmail.com', 'alvorada', 5, 'Indicacao'),
(21, 'Tamira Rosa ', 'tata@gmail.com', 'gravatai', 10, 'Indicacao'),
(22, 'Lodovino João Todeschini', 'lj@gmail.com', 'eldorado', 6, 'Nossosite'),
(23, 'Marina Jesus', 'jn@gmail.com', 'sapucaia', 9, 'Nossosite'),
(24, 'Amélio Todeschini', 'aj@gmail.com', 'canoas', 9, 'Nossosite'),
(25, 'Antonio', 'd@gmail.com', 'alvorada', 8, 'Nossosite'),
(26, 'John', 'j@gmail.com', 'viamao', 7, 'Indicacao'),
(27, 'Amabile', 'am@gmail.com', 'novohamburgo', 9, 'Instagram'),
(28, 'Lodovino João Todeschini', 'lj@gmail.com.br', 'viamao', 3, 'Nossosite'),
(29, 'Matheus Xavier', 'tetu@totoso.com', 'poa', 10, 'Instagram'),
(30, 'Edilaine', 'edi@gmail.com', 'viamao', 7, 'Facebook'),
(31, 'Lodovino', 'lodovino@gmail.com', 'poa', 10, 'Indicacao'),
(32, 'Jesus', 'jesus@gmail.com', 'gravatai', 10, 'Nossosite'),
(33, 'Deus', 'deus@gmail.com', 'eldorado', 10, 'Instagram'),
(34, 'Maria', 'maria@gmail.com', 'viamao', 10, 'Facebook'),
(35, 'José', 'jose@gmail.com', 'poa', 10, 'Nossosite'),
(36, 'João', 'joao@gmail.com', 'sapucaia', 9, 'Indicacao');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
