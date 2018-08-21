-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 20/08/2018 às 20:20
-- Versão do servidor: 10.1.26-MariaDB-0+deb9u1
-- Versão do PHP: 7.0.31-1+0~20180725100316.2+stretch~1.gbp8e8a8b

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `conexaovida`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `doadores`
--

CREATE TABLE `doadores` (
  `id_doador` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `nascimento` varchar(250) NOT NULL,
  `estado` varchar(250) DEFAULT NULL,
  `cidade` varchar(250) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `genero` varchar(250) NOT NULL,
  `tiposanguineo` varchar(250) NOT NULL,
  `emailprincipal` varchar(250) NOT NULL,
  `emailalternativo` varchar(250) DEFAULT NULL,
  `numerowhatsapp` varchar(250) NOT NULL,
  `outrocontato` varchar(250) DEFAULT NULL,
  `curso` varchar(250) DEFAULT NULL,
  `dataultimadoacao` varchar(250) DEFAULT NULL,
  `localultimadoacao` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

CREATE TABLE `login` (
  `usuario` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `doadores`
--
ALTER TABLE `doadores`
  ADD PRIMARY KEY (`id_doador`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `doadores`
--
ALTER TABLE `doadores`
  MODIFY `id_doador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
