SET SQL_MODE = `NO_AUTO_VALUE_ON_ZERO`;
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = `+00:00`;

-- creación base de datos musicmatch

DROP DATABASE IF EXISTS `musicmatch`;
CREATE DATABASE IF NOT EXISTS `musicmatch` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `musicmatch`;

-- creación tabla usuarios

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `clave` varchar(64) NOT NULL,
  `rolid` int(11) NOT NULL DEFAULT '2',
  `activo` int(1) NOT NULL DEFAULT '1',
  `esid` int(11) NOT NULL ,
  `descripcion` varchar(500) NOT NULL DEFAULT 'Edita tu perfil clicando en la seccion Perfil de la cabecera.',
  `rutaimagen` varchar(255) NOT NULL DEFAULT '3.png',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nick_UNIQUE` (`nick`),
  KEY `rolid` (`rolid`),
  KEY `esid` (`esid`)
) 
ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- volcado de datos tabla usuarios 

INSERT INTO `usuarios` (`id`, `nick`, `email`, `clave`, `rolid`, `activo`, `esid`,`rutaimagen`) VALUES
(1, 'Admin', 'admin@musicmatch.com', 'df24971a67a6b72057b0a4aea31f8e898eaa6b5539f547d5c1378b97ae48e513', 1 , 1, 1, '6.png'),
(2, 'Pinki', 'pinki@musicmatch.com', 'pinki', 2 , 1, 1,'9.png'),
(3, 'Cerebro', 'cerebro@musicmatch.com', 'cerebro', 2, 1, 2,'10.png'); 


-- creación tabla roles

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- volcado de datos tabla roles

INSERT INTO `roles` (`id`, `tipo`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'public');

-- creación tabla instrumentos

DROP TABLE IF EXISTS `instrumentos`;
CREATE TABLE IF NOT EXISTS `instrumentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- volcado de datos tabla instrumentos

INSERT INTO `instrumentos` (`id`, `nombre`) VALUES
(1, 'grupo'),
(2, 'bateria'),
(3, 'bajo'),
(4, 'guitarra'),
(5, 'teclados'),
(6, 'voz');

-- creación tabla estilos

DROP TABLE IF EXISTS `estilos`;
CREATE TABLE IF NOT EXISTS `estilos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- volcado de datos tabla estilos

INSERT INTO `estilos` (`id`, `nombre`) VALUES

(1, 'rock'),
(2, 'pop'),
(3, 'flamenco'),
(4, 'hiphop'),
(5, 'tecno');

-- creación tabla solicitudes

DROP TABLE IF EXISTS `solicitudes`;
CREATE TABLE IF NOT EXISTS `solicitudes` (
  `id` int(11) NOT NULL AUTO_INCREMENT ,
  `usuarioid` int(11) NOT NULL ,
  `tocaid` int(11) NOT NULL ,
  `necesitaid` int(11) NOT NULL ,
  PRIMARY KEY (`id`),
  KEY `usuarioid` (`usuarioid`),
  KEY `tocaid` (`tocaid`),
  KEY `necesitaid` (`necesitaid`)
) 
ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- volcado de datos tabla solicitudes 

INSERT INTO `solicitudes` (`id`, `usuarioid`, `tocaid`, `necesitaid`) VALUES
(1, 2, 1, 3),
(2, 3, 3, 1);



-- restricciones

ALTER TABLE `usuarios`
  ADD CONSTRAINT `FKusuarios1` FOREIGN KEY (`rolid`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `FKusuarios2` FOREIGN KEY (`esid`) REFERENCES `instrumentos` (`id`);

ALTER TABLE `solicitudes`
  ADD CONSTRAINT `FKsolicitudes1` FOREIGN KEY (`usuarioid`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `FKsolicitudes2` FOREIGN KEY (`tocaid`) REFERENCES `instrumentos` (`id`),
  ADD CONSTRAINT `FKsolicitudes3` FOREIGN KEY (`necesitaid`) REFERENCES `instrumentos` (`id`);

COMMIT;
