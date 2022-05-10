-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Dez-2019 às 13:50
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `email`, `senha`, `create_date`) VALUES
(11, 'Augusto Silva', 48923445698, 'Aug.silva@hotmail.com', '250cf8b51c773f3f8dc8b4be867a9a02', '2019-12-10 09:58:36'),
(12, 'Julia Souza', 34553376528, 'Ju.souza@hotmail.com', '68053af2923e00204c3ca7c6a3150cf7', '2019-12-10 09:59:13'),
(10, 'Geovana Novelli Soares', 45793524835, 'GeovanaSoares@hotmail.com', '69b025126a4e40cdac52cedd233f38e9', '2019-12-10 09:57:18'),
(13, 'AdministraÃ§Ã£o', 455793524835, 'admin@vendcel.com', '202cb962ac59075b964b07152d234b70', '2019-12-10 10:00:00'),
(14, 'Gustavo Almeida', 23467423456, 'gu@hotmail.com', 'd81f9c1be2e08964bf9f24b15f0e4900', '2019-12-10 10:12:33');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
