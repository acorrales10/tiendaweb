CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido1` varchar(45) NOT NULL,
  `apellido2` varchar(45) NOT NULL,
  `cedula` varchar(11) NOT NULL,
  `email` varchar(75) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
);


CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido1` varchar(45) NOT NULL,
  `apellido2` varchar(45) NOT NULL,
  `cedula` varchar(11) NOT NULL,
  `email` varchar(75) DEFAULT NULL,
  `telefono` varchar(9) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permissions` varchar(45) NOT NULL,
  `roles` varchar(45) NOT NULL,
  `active` INT NOT NULL,
  PRIMARY KEY (`id`)
);

 
  
INSERT INTO `usuarios` VALUES (1,'Luis','Guerrero','Mora','1-9880-7590','luisgm98@gmail.com','8989-9090', '10/03/2023','$2a$12$yPcO1JXl.hyWWcx7lbLkjOjnFdYJrvupKczw2Lyj7G1jn5nCTo1Xe','ADMIN','ADMIN',1);
INSERT INTO `usuarios` VALUES (2,'Bryan','Mora','Quesada','1-6425-3637','brmoque123@gmail.com','7478-5678', '10/03/2023','$2a$12$r5B.uvQsc15.aT/7lXmC0OPNB2SyxXa1a0SQSWHagBj8IJFkotfyO','USER','USER',1);
INSERT INTO `usuarios` VALUES (3,'María','Flores','Miranda','1-8612-8852','marflomi32@gmail.com','2565-0925', '10/03/2023','$2a$12$5d99ilZwUsDxKcLzaNBbLuN11PG/PdaJLhqHOD6HgxeaMo5FfY9wS','ADMIN','ADMIN',1);


CREATE TABLE `anuncios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `mensaje` varchar(500) NOT NULL,
  `imagen` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
);


INSERT INTO `anuncios` VALUES (1, '¡Aún tienes Tiempo!', '10/03/2023', 'Disfruta de nuestros productos mas destacados', 'https://www.google.com/search?rlz=1C1UEAD_enCR1048CR1048&sxsrf=AB5stBiJxn_2cxLpCghZTGxohqhI6PjgsQ:1690919645668&q=alienware+costa+rica&tbm=isch&source=lnms&sa=X&ved=2ahUKEwiBjsvGnryAAxWRPkQIHSRmAqUQ0pQJegQIDRAB&biw=1920&bih=874&dpr=1#imgrc=i-oqt8nleG8R1M');



