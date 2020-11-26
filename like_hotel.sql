-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Out-2020 às 17:34
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `like_hotel`
--
CREATE DATABASE IF NOT EXISTS `like_hotel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `like_hotel`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `cpf_cnpj` varchar(15) DEFAULT 'UNIQUE',
  `nome_razao` varchar(100) DEFAULT NULL,
  `rg_ie` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `celular` varchar(100) DEFAULT NULL,
  `rua` varchar(50) DEFAULT NULL,
  `numero` varchar(11) DEFAULT NULL,
  `bairro` varchar(15) DEFAULT NULL,
  `complemento` varchar(15) DEFAULT NULL,
  `cep` varchar(15) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `data` varchar(15) DEFAULT NULL,
  `hora` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `cpf_cnpj`, `nome_razao`, `rg_ie`, `email`, `telefone`, `celular`, `rua`, `numero`, `bairro`, `complemento`, `cep`, `cidade`, `estado`, `data`, `hora`) VALUES
(27, '123', 'Rafael joao', '10', 'dwawadawd@dsa.com', '312231312', '123231', '213231', '123123', '123321', '213123', '123213', '321123231', '23', '2020-10-14', '11:07:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `opcional`
--

DROP TABLE IF EXISTS `opcional`;
CREATE TABLE IF NOT EXISTS `opcional` (
  `cpf` varchar(100) NOT NULL,
  `estacao` varchar(15) DEFAULT NULL,
  `item` varchar(100) DEFAULT NULL,
  `temperadura` varchar(15) DEFAULT NULL,
  `viagem` varchar(50) DEFAULT NULL,
  `animais` varchar(15) DEFAULT NULL,
  `filhos` varchar(100) DEFAULT NULL,
  `esporte` varchar(50) DEFAULT NULL,
  `imersiva` varchar(11) DEFAULT NULL,
  `local` varchar(15) DEFAULT NULL,
  `delivery` varchar(15) DEFAULT NULL,
  `data` varchar(15) DEFAULT NULL,
  `hora` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `opcional`
--

INSERT INTO `opcional` (`cpf`, `estacao`, `item`, `temperadura`, `viagem`, `animais`, `filhos`, `esporte`, `imersiva`, `local`, `delivery`, `data`, `hora`) VALUES
('123', '1', 'adwwda', 'awdawd', '2', 'awdawdwda', 'awwad', 'dawwda', '3', 'dawawdwda', '1', '2020-10-14', '11:08:10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `cpf_cnpj` varchar(255) DEFAULT NULL,
  `rg_ie` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `habilitar_login` tinyint(3) DEFAULT NULL,
  `data` varchar(45) DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `cpf_cnpj`, `rg_ie`, `senha`, `habilitar_login`, `data`, `hora`) VALUES
(9, 'Rafael joao', '123', '10', '202cb962ac59075b964b07152d234b70', 2, '2020-10-14', '11:06:57');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
