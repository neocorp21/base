 

CREATE TABLE `administrador` (
  `idadministrador` int(11) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
 

CREATE TABLE `banco` (
  `idbanco` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `numerocuenta` varchar(255) NOT NULL,
  `titularcuenta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
 

INSERT INTO `banco` (`idbanco`, `nombre`, `numerocuenta`, `titularcuenta`) VALUES
(1, 'Pichincha', '3', 'Jorge'),
(2, 'banco2', '1231231', 'dasdas');

 

CREATE TABLE `beneficio` (
  `idusuario` int(11) NOT NULL,
  `idbeneficiario` int(11) NOT NULL,
  `idproceso` int(11) NOT NULL,
  `montoproceso` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
 

CREATE TABLE `historial` (
  `idhistorial` int(11) NOT NULL,
  `idproceso` int(11) NOT NULL,
  `condiccionTexto` varchar(255) NOT NULL,
  `saldoanterior` double NOT NULL,
  `montoproceso` double NOT NULL,
  `saldoactual` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
 

CREATE TABLE `p` (
  `id` int(11) NOT NULL,
  `nombre` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

 

INSERT INTO `p` (`id`, `nombre`) VALUES
(1, 'Le'),
(2, 'Le'),
(3, 'Le'),
(4, 'Le1421241'),
(5, 'Le1421241'),
(6, 'Le142124112'),
(7, 'Le142124112'),
(8, 'Le142124112'),
(9, 'Le142124112'),
(10, 'Le142124112'),
(11, 'Le142124112');

 

CREATE TABLE `procesos` (
  `idproceso` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idbanco` int(11) NOT NULL,
  `condicion` varchar(11) NOT NULL,
  `montoproceso` double NOT NULL,
  `procesoTexto` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
 

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `clave` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `dni` varchar(255) DEFAULT NULL,
  `saldoactual` varchar(255) DEFAULT NULL,
  `saldoaqu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
 

INSERT INTO `usuario` (`idusuario`, `correo`, `clave`, `nombre`, `dni`, `saldoactual`, `saldoaqu`) VALUES
(111, '123x@hotmail.com', '123x@hotmail.com', '123x@hotmail.com', '7878', '0', 0),
(112, 'Alberto@hotmail.com', 'Alberto@hotmail.com', 'Vladimir', '7878', '0', 0);

 
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idadministrador`);
 
ALTER TABLE `banco`
  ADD PRIMARY KEY (`idbanco`);
 
ALTER TABLE `beneficio`
  ADD PRIMARY KEY (`idbeneficiario`),
  ADD KEY `idusuario` (`idusuario`);
 
ALTER TABLE `historial`
  ADD PRIMARY KEY (`idhistorial`),
  ADD UNIQUE KEY `idproceso_2` (`idproceso`),
  ADD KEY `idproceso` (`idproceso`);
 
ALTER TABLE `p`
  ADD PRIMARY KEY (`id`);
 
ALTER TABLE `procesos`
  ADD PRIMARY KEY (`idproceso`),
  ADD KEY `idusuario` (`idusuario`),
  ADD KEY `idbanco` (`idbanco`);
 
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);
 
ALTER TABLE `administrador`
  MODIFY `idadministrador` int(11) NOT NULL AUTO_INCREMENT;
 
ALTER TABLE `banco`
  MODIFY `idbanco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
 
ALTER TABLE `beneficio`
  MODIFY `idbeneficiario` int(11) NOT NULL AUTO_INCREMENT;
 
ALTER TABLE `historial`
  MODIFY `idhistorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
 
ALTER TABLE `p`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
 
ALTER TABLE `procesos`
  MODIFY `idproceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
 
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
 
ALTER TABLE `beneficio`
  ADD CONSTRAINT `beneficio_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;
 
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`idproceso`) REFERENCES `procesos` (`idproceso`) ON DELETE CASCADE ON UPDATE CASCADE;
 
ALTER TABLE `procesos`
  ADD CONSTRAINT `procesos_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `procesos_ibfk_2` FOREIGN KEY (`idbanco`) REFERENCES `banco` (`idbanco`) ON DELETE CASCADE ON UPDATE CASCADE;
