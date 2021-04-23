CREATE DATABASE IF NOT EXISTS `ftp`;

USE `ftp`;

CREATE TABLE IF NOT EXISTS `config` (
  `id` int(11) NOT NULL,
  `valor` int(11) DEFAULT NULL,
  `descConfig` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `config` (`id`, `valor`, `descConfig`) VALUES
(1, 1, 'verificar se ja houve primeiro acesso no sistema');

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `telefone` varchar(60) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `excluido` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

INSERT INTO `usuarios` (`id`, `nome`, `email`, `user`, `pass`, `permissao`, `status`, `tempo`, `telefone`, `dataCadastro`, `dataCadastroUnix`, `idAdm`, `excluido`) VALUES
(1, 'guilherme silva', 'a@a', 'admin', '21232f297a57a5a743894a0e4a801fc3', '3', '1', 1, 'xxx-xxxx', NULL, NULL, NULL, '0'),
(2, 'teste temporario', '1@1', 'adminteste', '21232f297a57a5a743894a0e4a801fc3', '3', '2', 1615037933, '123123', '20210304103853', '1614865133', 1, '1'),
(3, 'teste', 'a@a', 'teste2222', '21232f297a57a5a743894a0e4a801fc3', '3', '2', 1614869223, '13123123', '20210304104703', '1614865623', 1, '1'),
(4, 'asdasdasd@sadasd', 'sasd@sadasd', 'admincsadsad', '21232f297a57a5a743894a0e4a801fc3', '3', '2', 1614955656, '1223123', '20210304104736', '1614865656', 1, '1'),
(5, 'seu zé', 'seuze@hamburguinho.com', 'ze', '98b456a0723fa616284a632d9d31821b', '1', '2', 1614887762, '8888-8888', '20210304145602', '1614880562', 1, '1');

ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
