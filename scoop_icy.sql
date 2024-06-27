-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/06/2024 às 20:15
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
-- Banco de dados: `scoop_icy`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `atendimentos`
--

CREATE TABLE `atendimentos` (
  `cod` int(11) NOT NULL,
  `loja_cod` int(11) NOT NULL,
  `domingo` tinyint(1) NOT NULL,
  `segunda` tinyint(1) NOT NULL,
  `terca` tinyint(1) NOT NULL,
  `quarta` tinyint(1) NOT NULL,
  `quinta` tinyint(1) NOT NULL,
  `sexta` tinyint(1) NOT NULL,
  `sabado` tinyint(1) NOT NULL,
  `hora_abre` varchar(6) NOT NULL,
  `hora_fecha` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `atendimentos`
--

INSERT INTO `atendimentos` (`cod`, `loja_cod`, `domingo`, `segunda`, `terca`, `quarta`, `quinta`, `sexta`, `sabado`, `hora_abre`, `hora_fecha`) VALUES
(16, 38, 1, 1, 0, 0, 0, 0, 0, '', ''),
(17, 39, 0, 1, 1, 1, 0, 0, 0, '', ''),
(18, 40, 0, 1, 1, 0, 0, 0, 0, '', ''),
(19, 41, 0, 1, 0, 1, 0, 0, 0, '', ''),
(20, 42, 0, 0, 1, 1, 1, 0, 0, '', ''),
(21, 43, 0, 1, 1, 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `cod` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `telefone` varchar(10) DEFAULT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `complemento` varchar(200) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`cod`, `nome`, `numero`, `rua`, `telefone`, `bairro`, `cidade`, `email`, `senha`, `complemento`, `login`) VALUES
(1, 'Lionel andreas messi', '10', 'rua do messi', '10101010', 'bairro do messi', 'messilandia', 'messi@gmail.com', 'messi123', 'perto da casa do messi', ''),
(2, 'Lionel andreas messi', '10', 'rua do messi', '10101010', 'bairro do messi', 'messilandia', 'messi@gmail.com', 'messi123', 'perto da casa do messi', ''),
(3, '', '', '', '', '', '', 'messi@gmaill.com', 'messi123', '', ''),
(4, '', '', '', '', '', '', 'messi@gmaill.com', 'messi123', '', ''),
(5, 'messi', '10', 'Rua Lionel Andreas Messi', '10101010', 'messão', 'messilandia', 'messiMelhorQuePenaldo@gmail.com', 'messi1234', 'melhor que penaldo', ''),
(6, 'Lionel andreas messi', '10', 'rua do messi', '10101010', 'bairro do messi', 'messilandia', 'messi@gmail.com', 'messi123', 'perto da casa do messi', ''),
(7, 'Lionel andreas messi', '10', 'rua do messi', '10101010', 'bairro do messi', 'messilandia', 'messi@gmail.com', 'messi123', 'perto da casa do messi', ''),
(8, 'Lionel andreas messi', '10', 'rua do messi', '10101010', 'bairro do messi', 'messilandia', 'messi@gmail.com', 'messi123', 'perto da casa do messi', ''),
(9, 'messi', 'jnj', 'njn', 'jnj', 'jnj', 'jnj', 'jn@j', 'jnj', 'j', ''),
(10, 'mess', 'jn', 'kn', 'jn', 'njn', 'knn', 'j@J', 'nn', 'kn', ''),
(11, 'victor', '292', 'b', '88 9999 99', 'gran', 'morada nova', 'victor@gmail.com', 'victor', 'alguma coisa', ''),
(12, 'victor', '1', '11', '1', '1', '1', 'victor@gmail.com', 'victor', '1', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `complementos`
--

CREATE TABLE `complementos` (
  `cod` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `disponibilidade` varchar(15) NOT NULL,
  `loja` int(11) NOT NULL,
  `classificacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `loja`
--

CREATE TABLE `loja` (
  `nome` varchar(100) NOT NULL,
  `cod` int(11) NOT NULL,
  `cnpj` varchar(12) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `complemento` varchar(200) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `foto_fundo` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `dias` varchar(100) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `taxa_entrega` varchar(10) NOT NULL,
  `telefone` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `loja`
--

INSERT INTO `loja` (`nome`, `cod`, `cnpj`, `email`, `senha`, `numero`, `rua`, `bairro`, `cidade`, `complemento`, `login`, `status`, `logo`, `foto_fundo`, `descricao`, `dias`, `instagram`, `facebook`, `taxa_entrega`, `telefone`) VALUES
('maria pitanga', 38, '32322', 'mariaPitanga@gmail.com', 'maria123', '1223', '123', '123123', '123', '123', '', '', 'loja-8f04a675c92f58042caa58d748cc0393.png', 'loja-3203bee14e71ac755bc04ae7a0ddc8c0.png', 'O melhor açaí do mundo!!!', '', 'empresa12345678910111213', 'empresa12345678910111213', '2', '8899504292'),
('nossa açaideira', 39, '12010', 'nossaAcaideira@gmail.com', '1234', '1123', '123', '123', '123', '212', '', '', 'loja-729f1edf6e162c93c1897f7027b30d85.png', 'loja-1a42f1002284d977d27ccae04e9f9bde.png', '123', '', 'asd', 'as', 'sdf', '8899504292'),
('açaí fique bem', 40, '101010', 'acaiFiqueBem@gmail.com', 'fiquebem', '101010', '100101', '10101', '10101', '101010', '', '', 'loja-3cda5e29bb82576b998776144c9990b2.png', 'loja-5a45cd872b82bc6a21c04932ab48f496.png', 'A qualidade e o sabor que transformam o seu dia!', '', '', '', '', '8899504292'),
('Açaí do vaqueiro', 41, '101010', 'acaiDoVaqueiro@gmail.com', 'vaqueiro', '101010', '100101', '10101', '10101', '101010', '', '', 'loja-e3db32cf3bdc57028698961af232c251.png', 'loja-03bf14f7997b0cb065fc614b516e9e73.png', 'Nós levamos a felicidade para você!', '', 'sca', 'dcsdc', '3', '8899504292'),
('Açaí quero mais', 42, '101010', 'acaiQueroMais@gmail.com', 'queroMais', '101010', '100101', '10101', '10101', '101010', '', '', 'loja-1192c40c23d5bf2a26440001bb072adc.png', 'loja-9e5e2501bf144c268bafb2115354b0ba.png', 'Nós levamos a felicidade para você!', '', 'sca', 'dcsdc', '3', '8899504292'),
('Açaí quero mais', 43, '101010', 'acaiQueroMais@gmail.com', 'queroMais', '101010', '100101', '10101', '10101', '101010', '', '', 'loja-01c4f40fb3d560dab05ca1e06f93eaec.png', 'loja-fb6ffed0ac22da96e440375d6e6fb209.png', 'Nós levamos a felicidade para você!', '', 'sca', 'dcsdc', '3', '8899504292');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `cod` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `preco` varchar(50) NOT NULL,
  `disponibilidade` varchar(20) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `loja` int(11) NOT NULL,
  `classificacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `atendimentos`
--
ALTER TABLE `atendimentos`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `fk_loja` (`loja_cod`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cod`);

--
-- Índices de tabela `complementos`
--
ALTER TABLE `complementos`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `complementos_loja_loja_cod` (`loja`);

--
-- Índices de tabela `loja`
--
ALTER TABLE `loja`
  ADD PRIMARY KEY (`cod`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `produtos_loja_loja_cod` (`loja`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atendimentos`
--
ALTER TABLE `atendimentos`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `complementos`
--
ALTER TABLE `complementos`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `loja`
--
ALTER TABLE `loja`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `atendimentos`
--
ALTER TABLE `atendimentos`
  ADD CONSTRAINT `fk_loja` FOREIGN KEY (`loja_cod`) REFERENCES `loja` (`cod`);

--
-- Restrições para tabelas `complementos`
--
ALTER TABLE `complementos`
  ADD CONSTRAINT `complementos_loja_loja_cod` FOREIGN KEY (`loja`) REFERENCES `loja` (`cod`);

--
-- Restrições para tabelas `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_loja_loja_cod` FOREIGN KEY (`loja`) REFERENCES `loja` (`cod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
