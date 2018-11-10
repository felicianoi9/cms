-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 10-Nov-2018 às 22:46
-- Versão do servidor: 5.7.21
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `config`
--

DROP TABLE IF EXISTS `config`;
CREATE TABLE IF NOT EXISTS `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `valor` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `config`
--

INSERT INTO `config` (`id`, `name`, `valor`) VALUES
(1, 'site_title', 'CMS'),
(2, 'site_color', 'red'),
(3, 'site_template', 'default'),
(4, 'home_banner', 'banner.jpg'),
(5, 'home_welcome', 'Seja Bem-vindo(a)!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `url` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `menu`
--

INSERT INTO `menu` (`id`, `name`, `url`) VALUES
(1, 'Home', NULL),
(2, 'Empresa', 'empresa'),
(3, 'Serviços', 'servicos'),
(4, 'Contato', 'contato'),
(9, 'Kubanakan', 'kubanakan');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(50) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `body` text CHARACTER SET utf8,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pages`
--

INSERT INTO `pages` (`id`, `url`, `title`, `body`) VALUES
(1, 'empresa', 'Empresa', '<blockquote>\r\n<h1><span class=\"marker\"><strong>Aqui vamos n&oacute;s!</strong></span></h1>\r\n</blockquote>\r\n'),
(2, 'servicos', 'Seviços', '<blockquote>\r\n<h1><span class=\"marker\"><strong><em>Meus servi&ccedil;os!</em></strong></span></h1>\r\n</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n'),
(3, 'contato', 'Contato', ''),
(4, 'empresa', 'Empresa', '<blockquote>\r\n<p>Aqui vamos n&oacute;s!</p>\r\n</blockquote>\r\n\r\n<table border=\"1\" bordercolor=\"#ccc\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse:collapse\">\r\n	<tbody>\r\n		<tr>\r\n			<td><del>FA&Ccedil;LSDKJL</del></td>\r\n			<td><del>KLASDHFLKASJDHK</del></td>\r\n		</tr>\r\n		<tr>\r\n			<td><del>AS&Ccedil;LDJDFJKSD</del></td>\r\n			<td><del>ALSDJFLASKDJ</del></td>\r\n		</tr>\r\n		<tr>\r\n			<td><del>AL&Ccedil;SDKFJAL&Ccedil;SDKJ</del></td>\r\n			<td><del>AL&Ccedil;SDKJFL&Ccedil;ASDKFJ&Ccedil;ASLDKJ</del></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n'),
(8, 'kubanakan', 'Kubanakan', '<blockquote>\r\n<h2 style=\"font-style:italic;\"><strong>kubaakan</strong></h2>\r\n</blockquote>\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `testimony`
--

DROP TABLE IF EXISTS `testimony`;
CREATE TABLE IF NOT EXISTS `testimony` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `msg_text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `testimony`
--

INSERT INTO `testimony` (`id`, `name`, `msg_text`) VALUES
(1, 'Rogério', 'òtimo atendimento! '),
(2, 'Fernando', 'Excelente! Está de parabéns!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Administrador', 'adm@admin.com.br', 'e10adc3949ba59abbe56e057f20f883e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
