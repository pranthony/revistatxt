-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 12, 2022 at 09:24 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `RevistaDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Articulo`
--

CREATE TABLE `Articulo` (
  `id_articulo` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `pdf` varchar(100) NOT NULL,
  `pag_inicio` smallint(6) DEFAULT NULL,
  `pag_final` smallint(6) DEFAULT NULL,
  `resumen` varchar(5000) NOT NULL,
  `revistaID` int(11) DEFAULT NULL,
  `contactos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Articulo`
--

INSERT INTO `Articulo` (`id_articulo`, `titulo`, `pdf`, `pag_inicio`, `pag_final`, `resumen`, `revistaID`, `contactos`) VALUES
(1, 'El amor empieza\ncuando se rompen los dedos', '', 3, NULL, '', 20101, ''),
(2, 'La palabra cargada de historia o\r\npor una crítica de la imaginación', '', 4, NULL, '', 20101, ''),
(3, 'La función de la mujer en el\r\nmanuscrito de Huarochirí', '', 8, NULL, '', 20101, ''),
(4, 'La tumba de Lavapiés', '', 13, NULL, '', 20101, '');

-- --------------------------------------------------------

--
-- Table structure for table `ArticuloPalabra`
--

CREATE TABLE `ArticuloPalabra` (
  `idArticulo` int(11) NOT NULL,
  `idPalabra` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Autor`
--

CREATE TABLE `Autor` (
  `id_autores` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `apellidos` varchar(80) NOT NULL,
  `resumen` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `AutorArticulo`
--

CREATE TABLE `AutorArticulo` (
  `idAutores` int(11) NOT NULL,
  `idArticulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Palabra`
--

CREATE TABLE `Palabra` (
  `palabra` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Revista`
--

CREATE TABLE `Revista` (
  `id_revista` int(11) NOT NULL,
  `numero` smallint(6) NOT NULL,
  `imagen` varchar(30) NOT NULL,
  `fecha` date DEFAULT NULL,
  `total_pag` smallint(6) DEFAULT NULL,
  `titulo` varchar(200) NOT NULL,
  `descripcion` varchar(5000) NOT NULL,
  `pdf_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Revista`
--

INSERT INTO `Revista` (`id_revista`, `numero`, `imagen`, `fecha`, `total_pag`, `titulo`, `descripcion`, `pdf_link`) VALUES
(20101, 2, 'TXT 2. Creacion (2010)', '2010-05-01', 37, 'La palabra cargada de historia...', '', '4. TXT 2. Creacion.pdf'),
(20102, 2, 'TXT 2. Humanidades (2010)', '2010-05-01', 31, '¿Humanismo o educación?', '', '5. TXT 2. Humanidades.pdf'),
(20121, 4, 'TXT 4. Creacion (2012)', '2012-09-01', 57, 'Colectivo Interdisciplinario', '', 'TXT 4. Creacion.pdf'),
(20122, 4, 'TXT 4. Humanidades (2012)', '2012-09-01', 57, 'Revolución Humanista', '', 'TXT 4. Humanidades.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Articulo`
--
ALTER TABLE `Articulo`
  ADD PRIMARY KEY (`id_articulo`),
  ADD KEY `revistaID` (`revistaID`);

--
-- Indexes for table `ArticuloPalabra`
--
ALTER TABLE `ArticuloPalabra`
  ADD PRIMARY KEY (`idArticulo`,`idPalabra`),
  ADD KEY `idPalabra` (`idPalabra`);

--
-- Indexes for table `Autor`
--
ALTER TABLE `Autor`
  ADD PRIMARY KEY (`id_autores`);

--
-- Indexes for table `AutorArticulo`
--
ALTER TABLE `AutorArticulo`
  ADD PRIMARY KEY (`idArticulo`,`idAutores`),
  ADD KEY `idAutores` (`idAutores`);

--
-- Indexes for table `Palabra`
--
ALTER TABLE `Palabra`
  ADD PRIMARY KEY (`palabra`);

--
-- Indexes for table `Revista`
--
ALTER TABLE `Revista`
  ADD PRIMARY KEY (`id_revista`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Articulo`
--
ALTER TABLE `Articulo`
  ADD CONSTRAINT `Articulo_ibfk_1` FOREIGN KEY (`revistaID`) REFERENCES `Revista` (`id_revista`);

--
-- Constraints for table `ArticuloPalabra`
--
ALTER TABLE `ArticuloPalabra`
  ADD CONSTRAINT `ArticuloPalabra_ibfk_1` FOREIGN KEY (`idArticulo`) REFERENCES `Articulo` (`id_articulo`),
  ADD CONSTRAINT `ArticuloPalabra_ibfk_2` FOREIGN KEY (`idPalabra`) REFERENCES `Palabra` (`palabra`);

--
-- Constraints for table `AutorArticulo`
--
ALTER TABLE `AutorArticulo`
  ADD CONSTRAINT `AutorArticulo_ibfk_1` FOREIGN KEY (`idArticulo`) REFERENCES `Articulo` (`id_articulo`),
  ADD CONSTRAINT `AutorArticulo_ibfk_2` FOREIGN KEY (`idAutores`) REFERENCES `Autor` (`id_autores`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
