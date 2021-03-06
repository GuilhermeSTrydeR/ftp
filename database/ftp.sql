-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Jun-2021 às 22:54
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
(12, 'guilherme silva', 'a@a', 'xxx-xxxx', 'asdsdasdasd', '0'),
(13, 'SEU ZÉ', 'A@A', 'MUITO RUIM', 'NÃO GOSTEI DO SITE', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha`
--

CREATE TABLE `ficha` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `codProduto` varchar(255) DEFAULT NULL,
  `dataCriacao` date DEFAULT NULL,
  `dataAtualizacao` date DEFAULT NULL,
  `tipoVenda` int(11) DEFAULT NULL,
  `ramo` int(11) DEFAULT NULL,
  `umidadeMaxima` int(11) DEFAULT NULL,
  `secador` int(11) DEFAULT NULL,
  `umidadeMinima` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ficha`
--

INSERT INTO `ficha` (`id`, `nome`, `codProduto`, `dataCriacao`, `dataAtualizacao`, `tipoVenda`, `ramo`, `umidadeMaxima`, `secador`, `umidadeMinima`) VALUES
(15, 'nome da ficha', '234234125', '2021-06-04', '0000-00-00', 1, 1, 10, 10, 1),
(16, 'teste de ficha', '444345154', '2021-06-04', NULL, 1, 1, 11, 15, 1),
(17, 'chips 15kg', '2262332345345621', '2021-06-04', NULL, 2, 2, 11, 110, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  `codProduto` varchar(255) DEFAULT NULL,
  `pesoUnitario` varchar(32) DEFAULT NULL,
  `pesoPacote` varchar(32) DEFAULT NULL,
  `unidadePeso` varchar(16) DEFAULT NULL,
  `linha` varchar(255) DEFAULT NULL,
  `canal` varchar(255) DEFAULT NULL,
  `embalagem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `categoria`, `codProduto`, `pesoUnitario`, `pesoPacote`, `unidadePeso`, `linha`, `canal`, `embalagem`) VALUES
(1, 'TE/HILLS.S', 'FBRH95040 CAN AD LIGHT 15KG', '234234125', '15,3', '33,37', 'KG', 'SC', '12', 23),
(2, 'MAX/BUFF.M', 'MAX BUFFET 15 KG\r\n', '345534634', '15,141\r\n', '68,9\r\n', 'KG', 'M.2', '55', 244),
(3, 'LID/CHIPS', 'LIDER CHIPS 15KG', '2262332345345621', '15,125', '46,23', 'KG', 'L.2', '32', 7),
(4, 'LID/CHIPS', 'LIDER CHIPS 25KG', '444345154', '25,161', '68,5', 'KG', 'L.2', '22', 1355),
(5, 'TE/HILLS.S', 'FBRH95001 CAN AD LIGHT 50X100G', '34545311', '5,6', '14,02', 'KG', 'SC', '75', 344),
(6, 'TE/HILLS.S', 'FBRH94921-K9 AD M A LON50X100G', '63331611', '5,6', '14,02', 'KG', 'SC', '22', 443);

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
  `excluido` varchar(1) DEFAULT NULL,
  `ativo` int(1) DEFAULT 1,
  `setor` int(64) DEFAULT NULL,
  `nasc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `user`, `pass`, `permissao`, `status`, `tempo`, `telefone`, `dataCadastro`, `dataCadastroUnix`, `idAdm`, `excluido`, `ativo`, `setor`, `nasc`) VALUES
(1, 'guilherme silva', 'a@a', 'admin', '21232f297a57a5a743894a0e4a801fc3', '3', '1', 1, '(35) 9999-9999', NULL, NULL, NULL, '0', 1, 5, '1994-01-31'),
(2, 'teste temporario', '1@1', 'adminteste', '21232f297a57a5a743894a0e4a801fc3', '3', '2', 1615037933, '123123', '20210304103853', '1614865133', 1, '1', 1, NULL, NULL),
(3, 'teste', 'a@a', 'teste2222', '21232f297a57a5a743894a0e4a801fc3', '3', '2', 1614869223, '13123123', '20210304104703', '1614865623', 1, '1', 1, NULL, NULL),
(4, 'asdasdasd@sadasd', 'sasd@sadasd', 'admincsadsad', '21232f297a57a5a743894a0e4a801fc3', '3', '2', 1614955656, '1223123', '20210304104736', '1614865656', 1, '1', 1, NULL, NULL),
(5, 'seu zé', 'seuze@hamburguinho.com', 'ze', '98b456a0723fa616284a632d9d31821b', '1', '2', 1614887762, '8888-8888', '20210304145602', '1614880562', 1, '1', 1, NULL, NULL);

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
-- Índices para tabela `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `ficha`
--
ALTER TABLE `ficha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
