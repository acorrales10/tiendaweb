-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 02, 2023 at 01:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PROYECTO`
--

-- --------------------------------------------------------

--
-- Table structure for table `anuncios`
--

CREATE TABLE `anuncios` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `mensaje` varchar(500) NOT NULL,
  `imagen` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anuncios`
--

INSERT INTO `anuncios` (`id`, `titulo`, `fecha`, `mensaje`, `imagen`) VALUES
(1, '¡Aún tienes Tiempo!', '10/03/2023', 'Disfruta de nuestros productos mas destacados', 'https://www.google.com/search?rlz=1C1UEAD_enCR1048CR1048&sxsrf=AB5stBiJxn_2cxLpCghZTGxohqhI6PjgsQ:1690919645668&q=alienware+costa+rica&tbm=isch&source=lnms&sa=X&ved=2ahUKEwiBjsvGnryAAxWRPkQIHSRmAqUQ0pQJegQIDRAB&biw=1920&bih=874&dpr=1#imgrc=i-oqt8nleG8R1M');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido1` varchar(45) NOT NULL,
  `apellido2` varchar(45) NOT NULL,
  `cedula` varchar(11) NOT NULL,
  `email` varchar(75) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(10) NOT NULL,
  `marca` varchar(250) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` text NOT NULL,
  `precio` double(15,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `marca`, `descripcion`, `imagen`, `precio`) VALUES
(2, 'BIOSTAR', 'GEFORCE GT 610 -  2 GB - 700 MHz', 'https://extremetechcr.com/tienda/27576-large_default/biostar-geforce-gt610-2gb.jpg', 22000.00),
(3, 'MSI I', 'A320M-A PRO - AMD AM4 - AMD A320 - 2', 'https://extremetechcr.com/tienda/22578-large_default/msi-a320m-a-pro1.jpg', 28000.00),
(4, 'MSI I', 'A320M-A PRO - AMD AM4 - AMD A320 - 2', 'https://extremetechcr.com/tienda/22578-large_default/msi-a320m-a-pro1.jpg', 28000.00),
(5, 'MSI I', 'A320M-A PRO - AMD AM4 - AMD A320 - 2', 'https://extremetechcr.com/tienda/22578-large_default/msi-a320m-a-pro1.jpg', 28000.00);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--
CREATE TABLE 'usuarios' (
'id' int(11) NOT NULL AUTO_INCREMENT,
'nombre' varchar(45) NOT NULL,
'email' varchar(45) NOT NULL,
'password' varchar(45) NOT NULL,
 PRIMARY KEY (`id`)
);


--
-- Dumping data for table `usuarios`
--

INSERT INTO 'usuarios' VALUES (1, 'Sofia', 'luisgm98@gmail.com', '1234');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `anuncios`
--
ALTER TABLE `anuncios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anuncios`
--
ALTER TABLE `anuncios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
