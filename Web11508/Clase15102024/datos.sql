-- validar si esta DB
DROP SCHEMA IF EXISTS `progra_web`;

CREATE SCHEMA IF NOT EXISTS  `progra_web` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

use `progra_web`;

CREATE TABLE `alumno`(
    `nombre_usuario` text not null,
    `carrera` text not null,
    `num_cuenta` int(10) not null,
    `direccion` text not null,
    `telefono` varchar(10) not null,
    `email` text not null,
    `password` varchar(10) not null,
    `fecha_registro` datetime not null DEFAULT curret_timestamp,
    `permisos` int(11) not null DEFAULT '2'
);

ALTER TABLE `alumno` ADD PRIMARY KEY(`num_cuenta`);