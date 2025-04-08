-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/06/2024 às 21:56
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_jogos`
--
CREATE DATABASE IF NOT EXISTS `cadastro_jogos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cadastro_jogos`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogos`
--

DROP TABLE IF EXISTS `jogos`;
CREATE TABLE `jogos` (
  `id_jogo` int(11) NOT NULL,
  `foto_jogo` varchar(255) NOT NULL,
  `nome_jogo` varchar(100) NOT NULL,
  `genero_jogo` varchar(100) NOT NULL,
  `data_jogo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `jogos`
--

INSERT INTO `jogos` (`id_jogo`, `foto_jogo`, `nome_jogo`, `genero_jogo`, `data_jogo`) VALUES
(2, '6801c4780de9d75dfcde8c81eb6dd226forza.jpg', 'Forza Horizon 5', 'Corrida, Aventura, Mundo aberto', '2021-11-05'),
(3, 'f60d2d48de9df5fab0ca7871ab41b06bcrash.jpg', 'Crash N&#039;sane Trilogy', 'Plataforma, Aventura, A&ccedil;&atilde;o', '2017-06-30'),
(4, '56b50559f7f44913c33edabaf7c136eccs.jpg', 'Counter-Strike: Global Offensive', 'FPS, A&ccedil;&atilde;o', '2012-08-21'),
(5, '7b1c282347712b678b1539eb66a85b8bDark_Souls_3_capa.png', 'Dark Souls 3', 'RPG, A&ccedil;&atilde;o, Aventura', '2016-03-26'),
(6, 'f88441be87b956b92f69ab33a4f6e485God_of_War_Ragnar&ouml;k_capa.jpg', 'God of War Ragnar&ouml;k', 'A&ccedil;&atilde;o, Hack and Slash, RPG', '2022-11-09'),
(7, '31fbb83a792ef75caf756c61b4b6c1d9r6.jpg', 'Tom Clancy&#039;s Rainbow Six Siege', '', '2015-12-01'),
(8, '97e54b0c9518c45e491e28e551a794d5dayz.jpg', 'DAY Z', 'Sobreviv&ecirc;ncia, Mundo aberto, A&ccedil;&atilde;o', '2013-12-16'),
(9, '2b8a64d90f8722c54510f7b6755fbe98Terraria.jpg', 'Terraria', 'Sobreviv&ecirc;ncia, Aventura', '2011-05-16'),
(10, '204ff14f8da37ec3aa0503167368d1f3Elden_Ring.jpg', 'Elden Ring', 'Soulslike, Fantasia, RPG', '2022-02-25'),
(11, '100b159ab3a0a5167de26dc9abf041c4raft.jpg', 'Raft', 'Sobreviv&ecirc;ncia, Multijogador, Cooperativo', '2018-05-23'),
(12, '74cc474a10c5c9f26bcbbaefa55b92aaSubnautica.jpg', 'Subnautica', 'Sobreviv&ecirc;ncia, Explora&ccedil;&atilde;o, Subaqu&aacute;tico', '2014-12-16'),
(13, '858d26627382056d0b660556886e1367stardew.jpg', 'Stardew Valley', 'Agricultura, Pixelado, Simula&ccedil;&atilde;o', '2016-02-26'),
(14, 'ded3984e0b1958a1ba8f9b1534e4c008vampireSurvivors.jpg', 'Vampire Survivors', 'Roguelike, A&ccedil;&atilde;o, 2D', '2021-12-17'),
(15, '68aa412156fc86d43ec26249fd3c1ac5dead_cells.jpg', 'Dead Cells', 'Aventura, Roguelike, Metroidv&acirc;nia', '2017-05-10');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`id_jogo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `jogos`
--
ALTER TABLE `jogos`
  MODIFY `id_jogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
