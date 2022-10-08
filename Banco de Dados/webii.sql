-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Out-2022 às 15:16
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `webii`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `endereco`, `telefone`, `usuario`, `senha`) VALUES
(19, 'Arthur Rogado Reis', 'Rua 10', ' 5562991514140', 'arthur', '$2y$10$lMHX4qPQTjymbI8w3Xf9FOBpySgv/xyVMh2RsMnTsRo513s3CJ9b2'),
(20, 'Juila Alvin das Costas', 'Rua W24, Solta Gato, Uçuaru', ' 5562984643664', 'juila', '$2y$10$5mSxdOVW1vbnyFNRfJzEl.9RzJ.UrEd.J3r9nOGb9.4yn1TO3G1hC'),
(25, 'Carlos Eduardo Jesus dos Reis', 'Rua 10', '62993281462', 'carlos', '$2y$10$wAOpKVdzAWItm.fqRv8Y1eQFhSQLx17UOFYHnSsBzn.Q0uCm3OTb6'),
(34, 'Samuel', 'Rua formosa', '000000001', 'samuel', '$2y$10$onguc9hwdpU34miEyxnzYOYqscklrIFzazv2OFRZWTtOhvYdRb2EG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `end` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `nome`, `end`, `cidade`, `estado`, `tel`, `usuario`, `senha`) VALUES
(1, 'Arthur', 'RUA 10 N 13', 'Uruaçu', 'GO', ' 5562991514140', 'arthur', '$2y$10$wrT6jHC1tSf7XckCLAFlyeZpdrv3yuKEJXsso8En1xk47nPCXKxgG'),
(2, 'CARLOS', 'Rua 10 n13', 'Uruaçu', 'GO', '651984651', '', ''),
(3, 'Jonas', 'Avenida Brasil', 'Palmas', 'TO', '62123456789', '', ''),
(5, 'Juila', 'rua legal', 'urubas', 'GO', '6254642664', 'julia', '$2y$10$trt5L88RElvD9UKdqNgaRuG3KHEiQIChtZrbX/NquErT3fmNCN5ea');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
