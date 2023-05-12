-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/05/2023 às 19:49
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` text NOT NULL,
  `data_nascimento` date NOT NULL,
  `email` text NOT NULL,
  `telefone` text NOT NULL,
  `celular` text NOT NULL,
  `mensagem` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `data_nascimento`, `email`, `telefone`, `celular`, `mensagem`, `id`) VALUES
('mario andre', '2003-12-12', 'marioDede@gmail.com', '(48) 3664-1718', '(48) 9.8529-2587', 'teste', 2),
('maria de lurde', '1998-05-24', 'mariaDeLurdes@gmail.com', '(56) 3364-1856', '(56) 9.9872-1565', 'teste', 4),
('josue Silva', '1975-07-06', 'josueSilva@gmail.com', '(36) 6419-6214', '(54) 9.1996-5156', 'teste', 5),
('marta Souza', '1965-02-28', 'martaSouza@gmail.com', '(48) 5544-6231', '(48) 5.1645-6412', 'teste', 6),
('Marcio dos Santos', '1994-10-10', 'marcioSantos@gmail.com', '(45) 8525-2494', '(15) 6.4886-4132', 'teste', 7);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
