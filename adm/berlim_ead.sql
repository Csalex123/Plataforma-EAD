-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Abr-2020 às 14:41
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `berlim_ead`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nome` varchar(70) DEFAULT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `loginAtivo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `nome`, `email`, `senha`, `loginAtivo`) VALUES
(1, 'Marcilio', 'marcilio@teste.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(2, 'Alex Ricardo', 'alex.ricardo1999@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `img` varchar(45) DEFAULT NULL,
  `hashtag` varchar(45) DEFAULT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(30) DEFAULT NULL,
  `loginAtivo` tinyint(1) NOT NULL,
  `bloqueado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `nome`, `email`, `senha`, `loginAtivo`, `bloqueado`) VALUES
(1, 'professor', 'professor@teste.com.br', NULL, 0, 0),
(2, 'professor2', 'professor2@teste.com.br', NULL, 0, 0),
(3, 'professor4', 'professor4@teste.com.br', NULL, 0, 0),
(5, 'professor', 'professor111@teste.com.br', NULL, 0, 0),
(6, 'professor5', 'professor111@teste.com.br', NULL, 0, 0),
(7, 'professor6', 'professor453@teste.com.br', NULL, 0, 0),
(8, 'professor677', 'professor677@teste.com.br', NULL, 0, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
