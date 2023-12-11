-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/11/2023 às 00:36
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pdo`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `nome_image` varchar(250) NOT NULL,
  `produto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `images`
--

INSERT INTO `images` (`id`, `nome_image`, `produto_id`) VALUES
(1, 'Maragogi.jpg', 1),
(2, 'natal.jpg', 2),
(3, 'salvador.jpg', 3),
(4, 'florianópolis.jpg', 4),
(5, 'santos.jpg', 5),
(14, 'arraial.jpg', 14),
(15, 'PRAIA TEM REGRAS 2.jpg', 14),
(16, 'praia_grande_arraial03.webp', 14),
(19, '8b0bad88-f966-476f-a44f-0ac18b22ac8b.webp', 3),
(20, '22176248658_28bcbc886c_k-e1464988628779.jpg', 3),
(21, '5f997f7b3183a.Mergulhando-nas-Piscinas-Naturais-de_Maragogi.jpg', 1),
(22, 'e2462d81-6017-47c4-b226-f6035c1928ea.webp', 1),
(23, 'a34e8140-971f-4e1c-93fa-38335cd551de.webp', 2),
(24, 'Natal-RN1.jpg', 2),
(25, '6.png', 4),
(26, 'Natal-RN2.jpg', 4),
(27, 'bondinho.jpg', 5),
(28, 'parque-roberto-mario-santini-santos.jpg', 5),
(37, 'a-cidade-de-fortaleza-1.jpg', 18),
(38, 'dbdb6565-city-15239-177d85d868d.jpg', 18),
(39, 'Fortaleza -Beira mar - aterro.jpg', 18),
(40, 'maceio2.jpg', 19),
(41, 'maceio3.webp', 19),
(42, 'Orla_de_maceio.2e16d0ba.fill-1120x700.jpg', 19),
(44, 'foz1.jpg', 20),
(45, 'foz2.jpg', 20),
(46, 'foz3.webp', 20),
(47, 'foz1.jpg', 20),
(48, 'foz2.jpg', 20),
(49, 'foz3.webp', 20);

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `login`
--

INSERT INTO `login` (`id`, `email`, `senha`) VALUES
(1, 'teste@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `cidade` varchar(250) NOT NULL,
  `estado` varchar(250) NOT NULL,
  `valor` decimal(5,0) NOT NULL,
  `quantdias` int(5) NOT NULL,
  `quartos` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `cidade`, `estado`, `valor`, `quantdias`, `quartos`) VALUES
(1, 'Maragogi', 'Alagoas', 2100, 4, 2),
(2, 'Natal', 'Rio Grande do Norte', 2900, 6, 3),
(3, 'Salvador', 'Bahia', 2300, 5, 2),
(4, 'Florianópolis', 'Santa Catarina', 3800, 7, 4),
(5, 'Santos', 'São Paulo', 1800, 5, 2),
(14, 'Arraial do cabo', 'Rio de Janeiro', 3000, 5, 3),
(18, 'Fortaleza', 'Ceará', 4300, 7, 3),
(19, 'Maceió', 'Alagoas', 4800, 6, 4),
(20, 'Foz do Iguaçu', 'Paraná', 3600, 5, 7);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
