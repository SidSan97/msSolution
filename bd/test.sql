-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Mar-2022 às 22:58
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
-- Banco de dados: `test`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(320) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(14) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `data_cadastro` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `cpf`, `data_cadastro`) VALUES
(1, 'Sidnei Santiago', 'sidnei@email.com', '089.747.460-00', '23/03/2022 14:23'),
(2, 'Jose Silva', 'jose@email.com', '080.747.460-00', '23/03/2022 14:23'),
(3, 'André Pereira', 'andre@email.com', '010.703.460-09', '20/02/2020 10:23'),
(4, 'Maria do Carmo', 'carmomaria@email.com', '218.103.205.07', '10/04/2021 09:09'),
(5, 'Paulo Sérgio', 'sergiopaulo@email.com', '070.703.460-09', '20/02/2020 10:23'),
(6, 'Maria Cândida', 'candidamaria@email.com', '478.103.225.07', '18/01/2017 18:09');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
