-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Fev-2024 às 19:17
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbworkease`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs`
--

CREATE TABLE `logs` (
  `id_log` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `username` varchar(128) DEFAULT NULL,
  `ip_address` varchar(256) DEFAULT NULL,
  `dt_registro` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `logs`
--

INSERT INTO `logs` (`id_log`, `id_user`, `username`, `ip_address`, `dt_registro`) VALUES
(1, 1, 'adimael.silva', '::1', '2024-02-12 13:01:54'),
(2, 1, 'adimael.silva', '::1', '2024-02-12 14:03:14'),
(3, 1, 'adimael.silva', '::1', '2024-02-12 14:14:11'),
(4, 1, 'adimael.silva', '::1', '2024-02-12 15:04:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `registro_chaves`
--

CREATE TABLE `registro_chaves` (
  `id_registro` int(11) NOT NULL,
  `nome_pessoa` varchar(100) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `numero_sala` varchar(164) NOT NULL,
  `observacoes` varchar(255) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `data_abertura` datetime NOT NULL,
  `data_fechamento` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `foto` varchar(128) DEFAULT NULL,
  `nome` varchar(64) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` varchar(20) NOT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `endereco` varchar(128) DEFAULT NULL,
  `empresa` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL,
  `dt_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `foto`, `nome`, `username`, `password`, `role`, `cpf`, `email`, `telefone`, `endereco`, `empresa`, `cidade`, `cep`, `dt_registro`) VALUES
(1, NULL, 'Adimael', 'adimael.silva', '$2y$10$a2z0dS5OMXLtmrYCfQdRF.u4ItLtQi3QkgEXPBqyMaGgvluE4geQi', 'Estagiário', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-28 00:56:16'),
(5, NULL, 'Tales Oliveira', 'tales.oliveira', '$2y$10$BsajH7DUNXzBOXJZJngRqOkJdHCePaQE7Xc3uaaNXFbdLzhYvWcUW', 'Professor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-27 22:10:07');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `fk_logs_usuarios_idx` (`id_user`);

--
-- Índices para tabela `registro_chaves`
--
ALTER TABLE `registro_chaves`
  ADD PRIMARY KEY (`id_registro`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `cpf_UNIQUE` (`cpf`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `logs`
--
ALTER TABLE `logs`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `registro_chaves`
--
ALTER TABLE `registro_chaves`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `fk_logs_usuarios` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
