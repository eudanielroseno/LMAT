-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Jun-2022 às 12:42
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_liga`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fut_feminino_classificacaoa`
--

DROP TABLE IF EXISTS `tb_fut_feminino_classificacaoa`;
CREATE TABLE IF NOT EXISTS `tb_fut_feminino_classificacaoa` (
  `id_fut_feminino_classificacaoA` int(200) NOT NULL AUTO_INCREMENT,
  `foto_fut_feminino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_fut_feminino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_fut_feminino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `j_fut_feminino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_fut_feminino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_fut_feminino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_fut_feminino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gp_fut_feminino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gc_fut_feminino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sg_fut_feminino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_fut_feminino_classificacaoA`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fut_feminino_classificacaob`
--

DROP TABLE IF EXISTS `tb_fut_feminino_classificacaob`;
CREATE TABLE IF NOT EXISTS `tb_fut_feminino_classificacaob` (
  `id_fut_feminino_classificacaoB` int(200) NOT NULL AUTO_INCREMENT,
  `foto_fut_feminino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_fut_feminino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_fut_feminino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `j_fut_feminino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_fut_feminino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_fut_feminino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_fut_feminino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gp_fut_feminino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gc_fut_feminino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sg_fut_feminino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_fut_feminino_classificacaoB`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_fut_feminino_classificacaob`
--

INSERT INTO `tb_fut_feminino_classificacaob` (`id_fut_feminino_classificacaoB`, `foto_fut_feminino_classificacaoB`, `nome_fut_feminino_classificacaoB`, `p_fut_feminino_classificacaoB`, `j_fut_feminino_classificacaoB`, `v_fut_feminino_classificacaoB`, `e_fut_feminino_classificacaoB`, `d_fut_feminino_classificacaoB`, `gp_fut_feminino_classificacaoB`, `gc_fut_feminino_classificacaoB`, `sg_fut_feminino_classificacaoB`) VALUES
(5, '62b2fe657e9bf.jpeg', 'Fortaleza', '5', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fut_masculino_classificacaoa`
--

DROP TABLE IF EXISTS `tb_fut_masculino_classificacaoa`;
CREATE TABLE IF NOT EXISTS `tb_fut_masculino_classificacaoa` (
  `id_fut_masculino_classficacaoA` int(11) NOT NULL AUTO_INCREMENT,
  `foto_fut_masculino_classificacaoA` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_fut_masculino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_fut_masculino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `j_fut_masculino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_fut_masculino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_fut_masculino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_fut_masculino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gp_fut_masculino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gc_fut_masculino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sg_fut_masculino_classificacaoA` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_fut_masculino_classficacaoA`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_fut_masculino_classificacaoa`
--

INSERT INTO `tb_fut_masculino_classificacaoa` (`id_fut_masculino_classficacaoA`, `foto_fut_masculino_classificacaoA`, `nome_fut_masculino_classificacaoA`, `p_fut_masculino_classificacaoA`, `j_fut_masculino_classificacaoA`, `v_fut_masculino_classificacaoA`, `e_fut_masculino_classificacaoA`, `d_fut_masculino_classificacaoA`, `gp_fut_masculino_classificacaoA`, `gc_fut_masculino_classificacaoA`, `sg_fut_masculino_classificacaoA`) VALUES
(55, '62b2fab0c650d.jpeg', 'Lotus F.C', '2', '2', '2', '2', '2', '2', '2', '2'),
(54, '62b2fa5a2f30b.jpeg', 'Anonymous', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fut_masculino_classificacaob`
--

DROP TABLE IF EXISTS `tb_fut_masculino_classificacaob`;
CREATE TABLE IF NOT EXISTS `tb_fut_masculino_classificacaob` (
  `id_fut_masculino_classficacaoB` int(200) NOT NULL AUTO_INCREMENT,
  `foto_fut_masculino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_fut_masculino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_fut_masculino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `j_fut_masculino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_fut_masculino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_fut_masculino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_fut_masculino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gp_fut_masculino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gc_fut_masculino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sg_fut_masculino_classificacaoB` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_fut_masculino_classficacaoB`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_volei_a`
--

DROP TABLE IF EXISTS `tb_volei_a`;
CREATE TABLE IF NOT EXISTS `tb_volei_a` (
  `id_volei_A` int(200) NOT NULL AUTO_INCREMENT,
  `foto_volei_A` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_volei_A` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `j_volei_A` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_volei_A` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_volei_A` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_volei_A` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_volei_A` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sc_volei_A` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ds_volei_A` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_volei_A`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_volei_a`
--

INSERT INTO `tb_volei_a` (`id_volei_A`, `foto_volei_A`, `nome_volei_A`, `j_volei_A`, `v_volei_A`, `d_volei_A`, `p_volei_A`, `sp_volei_A`, `sc_volei_A`, `ds_volei_A`) VALUES
(7, '62b30c4bcb63e.jpeg', 'CearÃ¡', '1', '2', '3', '4', '5', '6', '7');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_volei_b`
--

DROP TABLE IF EXISTS `tb_volei_b`;
CREATE TABLE IF NOT EXISTS `tb_volei_b` (
  `id_volei_B` int(200) NOT NULL AUTO_INCREMENT,
  `foto_volei_B` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_volei_B` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `j_volei_B` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_volei_B` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_volei_B` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_volei_B` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_volei_B` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sc_volei_B` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ds_volei_B` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_volei_B`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_volei_b`
--

INSERT INTO `tb_volei_b` (`id_volei_B`, `foto_volei_B`, `nome_volei_B`, `j_volei_B`, `v_volei_B`, `d_volei_B`, `p_volei_B`, `sp_volei_B`, `sc_volei_B`, `ds_volei_B`) VALUES
(10, '62b30c933397e.jpeg', 'CearÃ¡', '1', '1', '1', '1', '1', '1', 'q');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_registro` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_registro` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_registro` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha_registro` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_registro` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_registro`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id_registro`, `usuario_registro`, `email_registro`, `senha_registro`, `foto_registro`) VALUES
(28, 'ioaos', 'ad@g', '123456', '62b20b751a7be.jpeg'),
(29, 'oiii', 'oiee@gmail.com', '1234', '62b20c39720a0.jpeg'),
(30, 'dev', 'italus@dev.ru', 'italo123', '7.jpg'),
(31, 'sulati', 'sulatiue@dev.ru', 'olati4321', '62b20dcdde6ee.png'),
(32, '', '', '', '62b24cd2828b9.jpg'),
(33, '', '', '', '62b24d986417b.jpg'),
(34, 'CearÃ¡', 'devroseno@gmail.com', '123', '62b24eca47f11.jpg'),
(35, 'Daniel Lima', 'carlos2@gmail.com', '12345', '62b26e2198bde.jpg'),
(36, 'CearÃ¡', 'devroseno@gmail.com', '123', '9.jpg'),
(37, 'CearÃ¡', 'devroseno@gmail.com', '123', '62b272a1c08f5.jpg'),
(38, 'CearÃ¡', 'oie@gmail.com', '123', '62b27541d04d8.jpg'),
(39, 'AmÃ©rica Mineiro', 'dev@italus.ru', '123', '1.jpg'),
(40, 'Heitor', 'heitor@gmail.com', '1234', '62b2e72180a33.jpg'),
(41, 'Daniel Lima', 'carlos@gmail.com', '123', '62b2eae7057eb.jpg'),
(42, 'CearÃ¡', 'dev@italus.ru', '12', '62b2ecffbc8c6.jpg'),
(43, 'Carlos', 'carlos@gmail.com', '1234', '7.jpg'),
(44, 'JosÃ© Maria FalcÃ£o', 'dan@gmail.com', '1234', '62b2f3da57f4b.jpg'),
(45, '', 'jmf@gmail.com', '', '62b2f72f97911.jpg'),
(46, 'JMF', 'jmf@gmail.com', '12345', '6.jpg'),
(47, 'JMF', 'jmf1@gmail.com', '12345', '62b2f9ffa740e.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
