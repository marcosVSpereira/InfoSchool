-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14-Abr-2022 às 19:05
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `infoschool`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` text COLLATE utf8_unicode_ci NOT NULL,
  `disciplina` text COLLATE utf8_unicode_ci NOT NULL,
  `nota` float NOT NULL,
  `foto` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `disciplina`, `nota`, `foto`) VALUES
(1, 'Pedro', 'Matemática', 100, 'https://activesoft.com.br/wp-content/uploads/2021/10/31-ENTENDA-COMO-ACOMPANHAR-O-DESEMPENHO-ESCOLAR-DOS-ALUNOS.jpg'),
(2, 'Alice Oliveira', 'Física', 100, 'https://th.bing.com/th/id/OIP.xGPyCbEKkLGcWUZ4WOlcHAHaE8?pid=ImgDet&rs=1'),
(3, 'Paulo Souza', 'Biologia', 99.5, 'https://www.estudokids.com.br/wp-content/uploads/2017/07/sou-aluno-infantil-por-que-nao-devo-apontar-o-lapis-com-estilete.jpg'),
(4, 'Nicolas Cage', 'Informática', 70, 'https://blog.estantemagica.com.br/wp-content/uploads/2018/02/aluno-autoconfiante-sala-de-aula-e1519414792659-1024x585.jpg'),
(5, 'Daniely', 'Geografia', 80, 'https://nova-escola-producao.s3.amazonaws.com/tunxSkGu84NNEkscfMQUVeRzZD62xuejkA7ZhCD79kyDMjHzpWW2b7MgT62N/menina-faz-exercicio-no-caderno-na-escola.jpg'),
(6, 'Tomas', 'Português', 65, 'https://th.bing.com/th/id/OIP.ruz-7DqMf-d9Nu-Bp4LewQHaE8?pid=ImgDet&rs=1'),
(7, 'Tomas', 'Ed.Física', 100, 'https://th.bing.com/th/id/OIP.ruz-7DqMf-d9Nu-Bp4LewQHaE8?pid=ImgDet&rs=1'),
(8, 'Julia', 'Historia', 99.9, 'https://static8.depositphotos.com/1008303/880/i/450/depositphotos_8803246-stock-photo-asian-college-student.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
