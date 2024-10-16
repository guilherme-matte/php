-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/10/2024 às 16:42
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
-- Banco de dados: `senac_tech`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `fale_conosco`
--

CREATE TABLE `fale_conosco` (
  `id` int(11) NOT NULL,
  `nomeCompleto` varchar(50) NOT NULL,
  `uf` varchar(30) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `modalidade` varchar(30) NOT NULL,
  `assunto` varchar(30) NOT NULL,
  `mensagem` text NOT NULL,
  `cpf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `fale_conosco`
--

INSERT INTO `fale_conosco` (`id`, `nomeCompleto`, `uf`, `cidade`, `email`, `telefone`, `modalidade`, `assunto`, `mensagem`, `cpf`) VALUES
(1, 'Guilherme Matte', 'Rio Grande do Sul', 'porto-alegre', 'guiguimatte@gmail.com', '51 980274331', 'presencial', 'solicitacoes', 'aaa', '86166387091'),
(2, 'Guilherme Matte', 'Rio Grande do Sul', 'porto-alegre', 'guiguimatte@gmail.com', '51 980274331', 'presencial', 'solicitacoes', 'aaa', '86166387098'),
(3, 'Guilherme Matte', 'Rio Grande do Sul', 'porto-alegre', 'guiguimatte@gmail.com', '51980274331', 'presencial', 'solicitacoes', '1asd', '86166387055'),
(4, 'Guilherme Matte', 'Rio Grande do Sul', 'porto-alegre', 'guiguimatte@gmail.com', '51980274331', 'presencial', 'solicitacoes', 'aaa', '86166387058'),
(5, 'Guilherme Matte', 'Rio Grande do Sul', 'porto-alegre', 'guiguimatte@gmail.com', '51980274331', 'presencial', 'solicitacoes', 'aaa', '86166387050'),
(6, 'Guilherme Matte', 'Rio Grande do Sul', 'porto-alegre', 'guiguimatte@gmail.com', '51980274331', 'ead', 'reclamacoes', 'aaa', '31232312322'),
(7, 'Valdisnei', 'Rio Grande do Sul', 'porto-alegre', 'guiguimatte@gmail.com', '51980274331', 'presencial', 'solicitacoes', 'aaa', '31232312344'),
(8, 'Valdisnei', 'Rio Grande do Sul', 'porto-alegre', 'guiguimatte@gmail.com', '51980274331', 'presencial', 'solicitacoes', 'asfasfasf', '86166384444');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fale_conosco_psg`
--

CREATE TABLE `fale_conosco_psg` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `dataNasc` date NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `sexo` char(1) NOT NULL,
  `fone` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `obs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `fale_conosco_psg`
--

INSERT INTO `fale_conosco_psg` (`id`, `nome`, `sobrenome`, `dataNasc`, `endereco`, `bairro`, `cidade`, `estado`, `sexo`, `fone`, `email`, `usuario`, `senha`, `obs`) VALUES
(1, 'Guilherme', 'Matte', '2003-08-25', 'São Lucas', 'Bom Jesus', 'Porto Alegre', 'Rio Grande do Sul', 'M', '51999522272', 'guiguimatte@gmail.com', 'guilherme-matte', '123', 'aaaa'),
(2, 'Valdisnei', 'Matte', '1999-02-24', 'São Lucas', 'Bom Jesus', 'Porto Alegre', 'Rio Grande do Sul', 'M', '51999522272', 'guiguimatte@gmail.com', 'valdisnei', 'Senac123', 'aaaa');

-- --------------------------------------------------------

--
-- Estrutura para tabela `meu_senac`
--

CREATE TABLE `meu_senac` (
  `id` int(11) NOT NULL,
  `nomeCompleto` varchar(50) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cargo` varchar(50) DEFAULT NULL,
  `cpf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `meu_senac`
--

INSERT INTO `meu_senac` (`id`, `nomeCompleto`, `telefone`, `estado`, `cidade`, `email`, `senha`, `cargo`, `cpf`) VALUES
(15, 'Guilherme Matte', '51980274331', 'Rio Grande do Sul', 'Porto Alegre', 'admin', '$2y$10$IC.fWTFGmNrzOt8okAYoL.8HjWYfE5.MIlk8w/3zQuW8IkucXKtcW', 'ADM', '99999999999'),
(16, 'Valdisnei Pereira', '51980274331', 'Rio Grande do Sul', 'Porto Alegre', 'valdisnei@gmail.com.br', '$2y$10$auJ1ix7yB47H3uBXMAiQteqZryCAv7jUqxQBybXhNlmoTtewnt0Tm', 'EST', '00000000000'),
(17, 'Arnaldo santos', '061987766511', 'Rio Grande do Sul', 'Porto Alegre', 'arnaldo@gmail.com', '$2y$10$oJ/u7tn.N96X4bWCqxnEbOnonpBySLJftUob7./1wkWtQPqHgnOxC', 'ADM', '11111111111'),
(18, 'Pedro do Santos', '021955141111', 'Rio Grande do Sul', 'Porto Alegre', 'pedro@gmail.com', '$2y$10$Q2vPjzvEx8yy9K8joB5HRuJokht/ArEeGSQdIDXz0TJrn4Zc41CNa', NULL, '22222222222'),
(19, 'Diogene Ferreira Damasco Santos Silveira Pinto', '051919481298', 'Rio Grande do Sul', 'Porto Alegre', 'diogene@gmail.com', '$2y$10$necLfcNw8rjAnbuwateWsuj7pD.4I0.r7lc44ar2jQ8UBZZIN3ukm', 'ADM', '33333333333');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `fale_conosco`
--
ALTER TABLE `fale_conosco`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `fale_conosco_psg`
--
ALTER TABLE `fale_conosco_psg`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `meu_senac`
--
ALTER TABLE `meu_senac`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `fale_conosco`
--
ALTER TABLE `fale_conosco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `fale_conosco_psg`
--
ALTER TABLE `fale_conosco_psg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `meu_senac`
--
ALTER TABLE `meu_senac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
