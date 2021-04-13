-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Abr-2021 às 17:24
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ftp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `valor` int(11) DEFAULT NULL,
  `descConfig` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `config`
--

INSERT INTO `config` (`id`, `valor`, `descConfig`) VALUES
(1, 1, 'verificar se ja houve primeiro acesso no sistema');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `telefone` varchar(60) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `excluido` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `email`, `telefone`, `texto`, `excluido`) VALUES
(1, 'guilherme silva', 'a@a', 'xxx-xxxx', 'asdasdads', '1'),
(2, 'guilherme silva', 'a@a', 'xxx-xxxx', 'asdasdasd', '1'),
(3, 'guilherme silva', 'a@a', 'xxx-xxxx', '123qweasdzxc', '1'),
(4, 'guilherme silva', 'a@a', 'xxx-xxxx', 'teste de texto\r\n', '1'),
(5, 'guilherme silva', 'a@a', 'xxx-xxxx', 'teste\r\nteste\r\n!@#$%¨&*()1234567890_+-=ç?w/ã~ew~ds', '1'),
(6, 'guilherme silva', 'a@a', 'xxx-xxxx', 'qweqwwq', '1'),
(7, 'guilherme silva', 'a@a', 'xxx-xxxx', 'teste de texto\r\n', '1'),
(8, 'guilherme silva', 'a@a', 'xxx-xxxx', 'precisa arruma essa <table>, pois não ta quebrando linha, saca só: ###################################################################', '1'),
(9, 'guilherme silva', 'a@a', 'xxx-xxxx', 'precisa arruma essa , pois não ta quebrando linha, saca só: ###################################################################################################################################################################################################', '1'),
(10, 'guilherme silva', 'a@a', 'xxx-xxxx', 'ta faltando uma table aqui \r\n   !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!', '1'),
(11, 'guilherme silva', 'a@a', 'xxx-xxxx', 'teste', '1'),
(12, 'guilherme silva', 'a@a', 'xxx-xxxx', 'asdsdasdasd', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `user` varchar(60) DEFAULT NULL,
  `pass` varchar(60) DEFAULT NULL,
  `permissao` varchar(1) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `tempo` int(11) DEFAULT NULL,
  `telefone` varchar(32) DEFAULT NULL,
  `dataCadastro` varchar(64) DEFAULT NULL,
  `dataCadastroUnix` varchar(64) DEFAULT NULL,
  `idAdm` int(11) DEFAULT NULL,
  `excluido` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `user`, `pass`, `permissao`, `status`, `tempo`, `telefone`, `dataCadastro`, `dataCadastroUnix`, `idAdm`, `excluido`) VALUES
(1, 'guilherme silva', 'a@a', 'admin', '21232f297a57a5a743894a0e4a801fc3', '3', '1', 1, 'xxx-xxxx', NULL, NULL, NULL, '0'),
(6, 'teste de tempo', 'tempo@tempo', 'tempo', 'e34c64a05273012b2868d8b04b812089', '1', '2', 1000000, 'xxxxxxxx', '20210412115313', '1618239193', 1, '0'),
(7, 'comum', 'comum@comum', 'comum', '6d769ecb25444b49111b669de9ec6104', '1', '1', 1618243380, 'xxxx', '20210412120300', '1618239780', 1, '0'),
(8, 'supervisor', 'supervisor@supervisor', 'supervisor', '09348c20a019be0318387c08df7a783d', '2', '1', 1618243796, 'xxxx', '20210412120956', '1618240196', 1, '0');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
