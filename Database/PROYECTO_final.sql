-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 23, 2023 at 01:20 AM
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
  `cedula` varchar(11) NOT NULL,
  `email` varchar(75) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `direccion` text DEFAULT NULL,
  `mensaje` text DEFAULT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `leido` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `cedula`, `email`, `telefono`, `direccion`, `mensaje`, `fecha`, `leido`) VALUES
(1, 'ana martinez', '12349586', 'ana@gmail.com', '1234567', 'San Jose', 'quiero cotiza un mouse', '2023-08-22 12:04:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `factura`
--

CREATE TABLE `factura` (
  `id` int(10) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `usuario` int(10) NOT NULL,
  `lineas` int(6) NOT NULL,
  `total` double(15,2) NOT NULL DEFAULT 0.00,
  `finalizada` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `factura`
--

INSERT INTO `factura` (`id`, `fecha`, `usuario`, `lineas`, `total`, `finalizada`) VALUES
(1, '2023-08-22 14:25:38', 3, 0, 0.00, 0),
(2, '2023-08-22 14:29:01', 4, 7, 134000.00, 1),
(3, '2023-08-22 17:06:56', 4, 0, 0.00, 0),
(4, '2023-08-22 17:18:57', 9, 0, 0.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lineas_factura`
--

CREATE TABLE `lineas_factura` (
  `id` int(10) NOT NULL,
  `id_factura` int(10) NOT NULL,
  `id_producto` int(10) NOT NULL,
  `cantidad` int(6) NOT NULL,
  `precio` double(15,2) NOT NULL,
  `total` double(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lineas_factura`
--

INSERT INTO `lineas_factura` (`id`, `id_factura`, `id_producto`, `cantidad`, `precio`, `total`) VALUES
(12, 2, 3, 1, 28000.00, 28000.00),
(13, 2, 3, 1, 28000.00, 28000.00),
(14, 2, 2, 1, 22000.00, 22000.00),
(15, 2, 4, 1, 28000.00, 28000.00),
(16, 2, 5, 1, 28000.00, 28000.00);

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(10) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `marca` varchar(250) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` text NOT NULL,
  `precio` double(15,2) NOT NULL DEFAULT 0.00,
  `destacado` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `fecha`, `marca`, `descripcion`, `imagen`, `precio`, `destacado`) VALUES
(2, '2023-08-14 18:30:41', 'BIOSTAR Tarjeta Grafica', 'GEFORCE GT 610 -  2 GB - 700 MHz', 'https://extremetechcr.com/tienda/27576-large_default/biostar-geforce-gt610-2gb.jpg', 22000.00, 1),
(3, '2023-08-14 18:30:47', 'MSI I', 'A320M-A PRO - AMD AM4 - AMD A320 - 2', 'https://extremetechcr.com/tienda/22578-large_default/msi-a320m-a-pro1.jpg', 28000.00, 1),
(4, '2023-08-14 18:30:36', 'MSI I', 'A320M-A PRO - AMD AM4 - AMD A320 - 2', 'https://extremetechcr.com/tienda/22578-large_default/msi-a320m-a-pro1.jpg', 28000.00, 0),
(5, '2023-08-14 18:30:36', 'MSI I', 'A320M-A PRO - AMD AM4 - AMD A320 - 2', 'https://extremetechcr.com/tienda/28454-large_default/extreme-pc-level-3-intel.jpg', 28000.00, 0),
(8, '2023-08-14 18:42:03', 'test', 'teest', 'https://extremetechcr.com/tienda/22578-large_default/msi-a320m-a-pro.jpg', 123123.00, 0),
(9, '2023-08-14 18:42:36', '123123123', '1341234', 'https://extremetechcr.com/tienda/28454-large_default/extreme-pc-level-3-intel.jpg', 2333.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido1` varchar(45) NOT NULL,
  `apellido2` varchar(45) NOT NULL,
  `email` varchar(75) DEFAULT NULL,
  `telefono` varchar(9) NOT NULL,
  `direccion` text NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `password` varchar(255) NOT NULL,
  `permissions` varchar(45) NOT NULL,
  `roles` varchar(45) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido1`, `apellido2`, `email`, `telefono`, `direccion`, `fecha`, `password`, `permissions`, `roles`, `active`) VALUES
(1, 'Luis', 'Guerrero', 'Mora', 'luisgm98@gmail.com', '8989-9090', '', '2023-08-20 22:19:35', 'admin', 'ADMIN', 'ADMIN', 1),
(2, 'Bryan', 'Mora', 'Quesada', 'brmoque123@gmail.com', '7478-5678', '', '2023-08-20 22:19:35', '$2a$12$r5B.uvQsc15.aT/7lXmC0OPNB2SyxXa1a0SQSWHagBj8IJFkotfyO', 'USER', 'USER', 1),
(3, 'María', 'Flores', 'Miranda', 'marflomi32@gmail.com', '2565-0925', 'Entrada del Barrio Chino, Avenida Segunda, 50 m al Norte, Comercial Nueva Era', '2023-08-20 22:19:35', 'admin', 'ADMIN', 'ADMIN', 1),
(4, 'Juan', 'Perez', 'Marin', 'test@test.com', '4535663', 'test', '2023-08-20 22:19:44', 'test', 'user', 'user', 1),
(9, 'Amy', 'Corrales', 'Garcia', 'amcg1003@gmail.com', '12312312', 'Alajuela, Costa Rica', '2023-08-22 07:21:32', 'test', 'USER', 'USER', 1);

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
-- Indexes for table `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`);

--
-- Indexes for table `lineas_factura`
--
ALTER TABLE `lineas_factura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_factura` (`id_factura`),
  ADD KEY `id_producto` (`id_producto`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `factura`
--
ALTER TABLE `factura`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lineas_factura`
--
ALTER TABLE `lineas_factura`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lineas_factura`
--
ALTER TABLE `lineas_factura`
  ADD CONSTRAINT `lineas_factura_ibfk_1` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `lineas_factura_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
