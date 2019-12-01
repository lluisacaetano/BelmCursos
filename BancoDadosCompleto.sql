-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Nov-2018 às 10:02
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belmcursos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `checkout`
--

CREATE TABLE `checkout` (
  `CODCHECKOUT` int(11) NOT NULL AUTO_INCREMENT primary key,
  `PRIMEIRONOME` varchar(30) DEFAULT NULL,
  `SOBRENOME` varchar(30) DEFAULT NULL,
  `USUARIO` varchar(40) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `ENDERECO` varchar(50) DEFAULT NULL,
  `PAIS` varchar(20) DEFAULT NULL,
  `ESTADO` varchar(30) DEFAULT NULL,
  `CEP` varchar(10) DEFAULT NULL,
  `NOMECARTAO` varchar(30) DEFAULT NULL,
  `NUMCARTAO` varchar(20) DEFAULT NULL,
  `DATAEXP` varchar(6) DEFAULT NULL,
  `CODSEGURANCA` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8
UPDATE `belmcursos`.`curso` SET `LINGUAGEM`='36' WHERE `CODCURSO`='8';
UPDATE `belmcursos`.`curso` SET `LINGUAGEM`='37' WHERE `CODCURSO`='9';
UPDATE `belmcursos`.`curso` SET `LINGUAGEM`='37' WHERE `CODCURSO`='10';
UPDATE `belmcursos`.`curso` SET `LINGUAGEM`='37' WHERE `CODCURSO`='11';
UPDATE `belmcursos`.`curso` SET `LINGUAGEM`='38' WHERE `CODCURSO`='12';
UPDATE `belmcursos`.`curso` SET `LINGUAGEM`='38' WHERE `CODCURSO`='13';
UPDATE `belmcursos`.`curso` SET `LINGUAGEM`='38' WHERE `CODCURSO`='14';
UPDATE `belmcursos`.`curso` SET `LINGUAGEM`='38' WHERE `CODCURSO`='15';
UPDATE `belmcursos`.`curso` SET `LINGUAGEM`='39' WHERE `CODCURSO`='16';
UPDATE `belmcursos`.`curso` SET `LINGUAGEM`='39' WHERE `CODCURSO`='17';
UPDATE `belmcursos`.`curso` SET `LINGUAGEM`='39' WHERE `CODCURSO`='18';
UPDATE `belmcursos`.`curso` SET `LINGUAGEM`='40' WHERE `CODCURSO`='19';
UPDATE `belmcursos`.`curso` SET `LINGUAGEM`='40' WHERE `CODCURSO`='20';
UPDATE `belmcursos`.`curso` SET `LINGUAGEM`='40' WHERE `CODCURSO`='21';

--
-- Extraindo dados da tabela `checkout`
--

INSERT INTO `checkout` (`CODCHECKOUT`, `PRIMEIRONOME`, `SOBRENOME`, `USUARIO`, `EMAIL`, `ENDERECO`, `PAIS`, `ESTADO`, `CEP`, `NOMECARTAO`, `NUMCARTAO`, `DATAEXP`, `CODSEGURANCA`) VALUES
(0, 'Luisa Caetano', 'AraÃºjo', 'luisacaetano01', 'luisacaetano43@gmail.com', 'Rua ValenÃ§a, 90', 'Brasil', 'Minas Gerais ', '35570000', 'Luisa Caetano', '8467756758658658', '12/12', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `CODCONTATO` int(11) NOT NULL,
  `NOME` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(200) DEFAULT NULL,
  `USUARIO` varchar(50) DEFAULT NULL,
  `ASSUNTO` varchar(40) DEFAULT NULL,
  `MENSAGEM` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`CODCONTATO`, `NOME`, `EMAIL`, `USUARIO`, `ASSUNTO`, `MENSAGEM`) VALUES
(0, 'Luisa Caetano', 'luisacaetano43@gmail.com', '1', 'Elogio ', 'Oi'),
(7, 'Luisa Caetano', 'luisacaetano43@gmail.com', 'luisacaetano01', 'CrÃ­tica', 'NÃ£o gostei dos cursos apresentados!'),
(8, 'julia sousa ramos', 'juliasr2993@gmail.com', 'julia', 'Elogio ', 'Gostei muito do site... ParabÃ©ns!!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `CODCURSO` int(11) NOT NULL,
  `NOMECURSO` varchar(40) DEFAULT NULL,
  `SUBTITULO` varchar(50) DEFAULT NULL,
  `DESCRICAO` varchar(200) DEFAULT NULL,
  `LINGUAGEM` varchar(40) DEFAULT NULL,
  `VALORINICIAL` decimal(10,0) DEFAULT NULL,
  `VALORPROMOCAO` decimal(10,0) DEFAULT NULL,
  `DURACAO` varchar(10) DEFAULT NULL,
  `NOMEIMAGEM` varchar(40) DEFAULT NULL,
  `DATAIMAGEM` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`CODCURSO`, `NOMECURSO`, `SUBTITULO`, `DESCRICAO`, `LINGUAGEM`, `VALORINICIAL`, `VALORPROMOCAO`, `DURACAO`, `NOMEIMAGEM`, `DATAIMAGEM`) VALUES
(7, 'Curso HTML, CSS, Javascript BÃ¡sico', 'Curso HTML, CSS, Javascript BÃ¡sico', 'No Curso HTML, CSS, Javascript vocÃª irÃ¡ aprender na prÃ¡tica como desenvolver um website do zero.', 'HTML e CSS3', '295', '147', '12 minutos', '1html.jpg', '2018-11-10 11:24:25'),
(8, 'Curso Completo do Desenvolvedor Web', 'Curso Completo do Desenvolvedor Web', 'Aprenda desenvolvimento web, crie um site do zero do bÃ¡sico ao avanÃ§ado, aprenda HTML5 e CSS3 com muito JavaScript.', 'HTML e CSS3', '264', '199', '50 minutos', '2html.jpg', '2018-11-10 11:25:34'),
(9, 'Curso Java e OrientaÃ§Ã£o a Objetos', 'Curso Java e OrientaÃ§Ã£o a Objetos', 'Este curso Ã© focado para quem quer aprender a linguagem Java e o paradigma de orientaÃ§Ã£o a objetos nas linguagens de programaÃ§Ã£o.', 'Java', '89', '69', '20 horas', '1java.jpg', '2018-11-10 11:26:19'),
(10, 'Curso Java para Desenvolvimento Web', 'Curso Java para Desenvolvimento Web', 'Focado em alunos que queiram usar o Java como linguagem de back-end para desenvolvimento de aplicaÃ§Ãµes web.', 'Java', '189', '150', '50 horas', '1java.png', '2018-11-10 11:26:56'),
(11, 'Curso Java BÃ¡sico', 'Curso Java BÃ¡sico', 'A formaÃ§Ã£o java Ã© para quem busca aprender desde o bÃ¡sico da linguagem Java atÃ© o mundo de Java para Web, com testes, SpringMVC e Maven.', 'Java', '100', '59', '30 horas', '2java.png', '2018-11-10 11:27:22'),
(12, 'Curso Desenvolvimento Web com PHP e MySQ', 'Curso Desenvolvimento Web com PHP e MySQL', 'Curso para alunos que querem trabalhar com a linguagem de back-end mais difundida no mercado. Passando por um simples CRUD atÃ© OrientaÃ§Ã£o a Objetos.', 'PHP BÃ¡sico', '58', '49', '10 horas', '1php.jpg', '2018-11-10 11:28:20'),
(13, 'Curso de PHP Developer', 'Curso de PHP Developer', 'O Curso de PHP Developer Ã© para vocÃª iniciante na Ã¡rea de desenvolvimento web e para vocÃª programador avanÃ§ado.\r\n\r\n', 'PHP BÃ¡sico', '349', '247', '40 horas', '2php.jpg', '2018-11-10 11:28:59'),
(14, 'Curso PHP Jedai', 'Curso PHP Jedai', 'Este Ã© um curso completo de PHP. Possui todos os mÃ³dulos e conteÃºdos para vocÃª aprender do zero ao avanÃ§ado como dominar a linguagem!\r\n\r\n', 'PHP BÃ¡sico', '159', '99', '20 horas', '3php.png', '2018-11-10 11:29:34'),
(15, 'PHP do Zero ao Profissional', 'PHP do Zero ao Profissional', 'O curso PHP do zero ao Profissional, ensina vocÃª a programar em PHP da forma mais completa do mercado.', 'PHP BÃ¡sico', '327', '277', '20 horas', '4php.png', '2018-11-10 11:30:03'),
(16, 'Curso completo de Banco de Dados e SQL', 'Curso completo de Banco de Dados e SQL', 'O curso de Banco de Dados abrange do bÃ¡sico ao avanÃ§ado, nÃ£o somente a linguagem SQL como tambÃ©m tarefas de infraestrutura, inerentes a um DBA.', 'Banco de Dados ', '79', '49', '10 horas', '1bd.jpg', '2018-11-10 11:30:41'),
(17, 'Fundamentos de AnÃ¡lise de Dados', 'Fundamentos de AnÃ¡lise de Dados', 'Comece a adquirir as habilidades para ter um perfil analÃ­tico aprendendo Excel, SQL e visualizaÃ§Ã£o de dados.', 'Banco de Dados ', '599', '429', '30 horas', '2bd.jpeg', '2018-11-10 11:31:09'),
(18, 'Curso completo de MySQL', 'Curso completo de MySQL', 'Este curso foi desenvolvimento com o objetivo de apresentar ao aluno os principais recursos desde poderoso SGBD.', 'Banco de Dados ', '600', '499', '30 horas', '3bd.jpg', '2018-11-10 11:31:36'),
(19, 'FormaÃ§Ã£o Mobile Expert', 'FormaÃ§Ã£o Mobile Expert', 'Com o estabelecimento do mercado de mobilidade, novas demandas apareceram no mercado de EAD. Tudo terÃ¡ que funcionar sem pug-ins em Tablets e em Smartphones.', 'Desenvolvimento Mobile', '2780', '1723', '40 horas', '1dm.jpg', '2018-11-10 11:32:22'),
(20, 'Curso Desenvolvimento Android', 'Curso Desenvolvimento Android', 'Na FormaÃ§Ã£o Desenvolvedor Android, vocÃª vai aprender a construir Apps do zero. Desde usar a IDE Android Studio e entender os fundamentos do framework do Android.', 'Desenvolvimento Mobile', '278', '172', '20 horas', '2dm.png', '2018-11-10 11:32:53'),
(21, 'Curso de desenvolvimento Apple Watch', 'Curso de desenvolvimento Apple Watch', 'Aprenda a criar apps reais que podem ser mostrados para amigos ou usados em uma entrevista de trabalho.', 'Desenvolvimento Mobile', '204', '149', '50 horas', '3dm.jpg', '2018-11-10 11:33:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itensvenda`
--

CREATE TABLE `itensvenda` (
  `CODVENDA` int(11) NOT NULL,
  `CODCURSO` int(11) NOT NULL,
  `CODLIN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `linguagem`
--

CREATE TABLE `linguagem` (
  `CODLIN` int(11) NOT NULL,
  `NOMELINGUAGEM` varchar(40) DEFAULT NULL,
  `SUBTITULO` varchar(50) DEFAULT NULL,
  `DESCRICAO` varchar(200) DEFAULT NULL,
  `NOMEIMAGEM` varchar(40) DEFAULT NULL,
  `DATAIMAGEM` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `linguagem`
--

INSERT INTO `linguagem` (`CODLIN`, `NOMELINGUAGEM`, `SUBTITULO`, `DESCRICAO`, `NOMEIMAGEM`, `DATAIMAGEM`) VALUES
(36, 'HTML5 e CSS3', 'Curso HTML5 e CSS3', 'Curso completo para quem quer aprender a criar sites utilizando as tecnologias de HTML5 + CSS3 + JavaScript de uma maneira simples e objetiva.', 'logohtml5css3.png', '2018-11-10 10:42:30'),
(37, 'Java', 'Curso de Java', 'O Java Ã© a Linguagem de ProgramaÃ§Ã£o mais famosa do mundo. Atualmente, encontramos aplicativos Java rodando em computadores, smartphones, tablets, video-games e atÃ© mesmo em cartÃµes de crÃ©dito e ', 'logojava.jpg', '2018-11-10 10:43:50'),
(38, 'PHP', 'Curso de PHP BÃ¡sico', 'Curso completo para quem quer aprender a criar sites utilizando as tecnologias de HTML5 + CSS3 + JavaScript de uma maneira simples e objetiva.', 'logophp.jpg', '2018-11-10 10:44:16'),
(39, 'Banco de Dados', 'Curso de Banco de Dados no SQL', 'O MySQL Ã© um dos Sistemas Gerenciadores de Banco de Dados mais populares do mercado. Ele pertence Ã  Oracle e Ã© utilizado na maioria dos sites atualmente.', 'logobd.png', '2018-11-10 10:44:58'),
(40, 'Desenvolvimento Mobile', 'Curso de Desenvolvimento Mobile', 'Aprenda a criar aplicativos mobile nativos e hÃ­bridos para Android, iOS e Windows usando Java, Cordova, Xamarin, Ionic e mais.', 'logomobile.jpg', '2018-11-10 10:45:31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `CODUSU` int(11) NOT NULL,
  `NOMECOMPLETO` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(200) DEFAULT NULL,
  `NOMEUSUARIO` varchar(50) DEFAULT NULL,
  `SENHA` varchar(10) DEFAULT NULL,
  `TELEFONE` varchar(10) DEFAULT NULL,
  `ENDERECO` varchar(100) DEFAULT NULL,
  `IDADE` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`CODUSU`, `NOMECOMPLETO`, `EMAIL`, `NOMEUSUARIO`, `SENHA`, `TELEFONE`, `ENDERECO`, `IDADE`) VALUES
(1, 'Luisa', 'Luisacaetano43@gmail.com', 'luisa', 'luisa', '3799020017', 'Valença', 18),
(2, 'Bruno', 'brunoalves3141@gmail.com', 'bruno', 'bruno', '3798022503', 'Vicente', 17),
(3, 'Maria', 'mfbaetamb@gmail.com', 'mf', 'mf', '33225474', 'Samonte', 17),
(4, 'Mayra', 'carolinamayra@gmail.com', 'mayra', 'mayra', '36587415', 'Formiga', 17),
(5, 'Luisa', 'Luisacaetano43@gmail.com', 'luisa', 'luisa', '3799020017', 'Valença', 18),
(6, 'Bruno', 'brunoalves3141@gmail.com', 'bruno', 'bruno', '3798022503', 'Vicente', 17),
(7, 'Maria', 'mfbaetamb@gmail.com', 'mf', 'mf', '33225474', 'Samonte', 17),
(8, 'Mayra', 'carolinamayra@gmail.com', 'mayra', 'mayra', '36587415', 'Formiga', 17);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `CODVENDA` int(11) NOT NULL,
  `DATA` date DEFAULT NULL,
  `VALORTOTAL` decimal(10,0) DEFAULT NULL,
  `CODUSU` int(11) DEFAULT NULL,
  `CODCURSO` int(11) DEFAULT NULL,
  `CODLIN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`CODCONTATO`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`CODCURSO`);

--
-- Indexes for table `itensvenda`
--
ALTER TABLE `itensvenda`
  ADD PRIMARY KEY (`CODVENDA`,`CODCURSO`,`CODLIN`),
  ADD KEY `CODCURSO` (`CODCURSO`),
  ADD KEY `CODLIN` (`CODLIN`);

--
-- Indexes for table `linguagem`
--
ALTER TABLE `linguagem`
  ADD PRIMARY KEY (`CODLIN`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`CODUSU`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`CODVENDA`),
  ADD KEY `CODUSU` (`CODUSU`),
  ADD KEY `CODCURSO` (`CODCURSO`),
  ADD KEY `CODLIN` (`CODLIN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `CODCONTATO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `CODCURSO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `linguagem`
--
ALTER TABLE `linguagem`
  MODIFY `CODLIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `CODUSU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `CODVENDA` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `itensvenda`
--
ALTER TABLE `itensvenda`
  ADD CONSTRAINT `itensvenda_ibfk_1` FOREIGN KEY (`CODVENDA`) REFERENCES `vendas` (`CODVENDA`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `itensvenda_ibfk_2` FOREIGN KEY (`CODCURSO`) REFERENCES `curso` (`CODCURSO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `itensvenda_ibfk_3` FOREIGN KEY (`CODLIN`) REFERENCES `linguagem` (`CODLIN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `vendas_ibfk_1` FOREIGN KEY (`CODUSU`) REFERENCES `usuario` (`CODUSU`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vendas_ibfk_2` FOREIGN KEY (`CODCURSO`) REFERENCES `curso` (`CODCURSO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vendas_ibfk_3` FOREIGN KEY (`CODLIN`) REFERENCES `linguagem` (`CODLIN`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
