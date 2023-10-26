-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2023 a las 19:35:06
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_cita` (IN `p_id_cita` VARCHAR(30), IN `p_fecha` DATE, IN `p_hora` TIME, IN `p_id_paciente` VARCHAR(10))   BEGIN
    UPDATE cita
    SET fecha = p_fecha, hora = p_hora, id_paciente = p_id_paciente
    WHERE id_cita = p_id_cita;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_contraseña` (IN `p_usuario` VARCHAR(25), IN `p_nueva_contraseña` VARCHAR(25))   BEGIN
    UPDATE usuarios
    SET contraseña = p_nueva_contraseña
    WHERE users = p_usuario;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_menu` (IN `p_id_menu` VARCHAR(10), IN `p_desayuno` VARCHAR(100), IN `p_cena` VARCHAR(100), IN `p_comida` VARCHAR(100), IN `p_pColacion` VARCHAR(100), IN `p_sColacion` VARCHAR(100))   BEGIN
    UPDATE menu
    SET desayuno = p_desayuno, cena = p_cena, comida = p_comida, pColacion = p_pColacion, sColacion = p_sColacion
    WHERE id_menu = p_id_menu;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizar_paciente` (IN `p_id_paciente` VARCHAR(10), IN `p_nombre` VARCHAR(30), IN `p_ap` VARCHAR(30), IN `p_am` VARCHAR(30), IN `p_edad` INT, IN `p_tel` VARCHAR(15), IN `p_sexo` VARCHAR(1))   BEGIN
    UPDATE paciente
    SET nombre = p_nombre, ap = p_ap, am = p_am, edad = p_edad, tel = p_tel, sexo = p_sexo
    WHERE id_paciente = p_id_paciente;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `agregar_cita` (IN `p_id_cita` VARCHAR(30), IN `p_fecha` DATE, IN `p_hora` TIME, IN `p_id_paciente` VARCHAR(10))   BEGIN
    INSERT INTO cita (id_cita, fecha, hora, id_paciente)
    VALUES (p_id_cita, p_fecha, p_hora, p_id_paciente);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `agregar_menu` (IN `p_id_menu` VARCHAR(10), IN `p_desayuno` VARCHAR(100), IN `p_cena` VARCHAR(100), IN `p_comida` VARCHAR(100), IN `p_pColacion` VARCHAR(100), IN `p_sColacion` VARCHAR(100))   BEGIN
    INSERT INTO menu (id_menu, desayuno, cena, comida, pColacion, sColacion)
    VALUES (p_id_menu, p_desayuno, p_cena, p_comida, p_pColacion, p_sColacion);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `agregar_paciente` (IN `p_id_paciente` VARCHAR(10), IN `p_nombre` VARCHAR(30), IN `p_ap` VARCHAR(30), IN `p_am` VARCHAR(30), IN `p_edad` INT, IN `p_tel` VARCHAR(15), IN `p_sexo` VARCHAR(1))   BEGIN
    INSERT INTO paciente (id_paciente, nombre, ap, am, edad, tel, sexo)
    VALUES (p_id_paciente, p_nombre, p_ap, p_am, p_edad, p_tel, p_sexo);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `agregar_usuario` (IN `p_usuario` VARCHAR(25), IN `p_contraseña` VARCHAR(25))   BEGIN
    INSERT INTO usuarios (users, contraseña)
    VALUES (p_usuario, p_contraseña);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_usuario` (IN `p_usuario` VARCHAR(25), IN `p_contraseña` VARCHAR(25))   BEGIN
    SELECT users, contraseña
    FROM usuarios
    WHERE users = p_usuario AND contraseña = p_contraseña;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_cita` (IN `p_id_cita` VARCHAR(30))   BEGIN
    DELETE FROM cita
    WHERE id_cita = p_id_cita;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_menu` (IN `p_id_menu` VARCHAR(10))   BEGIN
    DELETE FROM menu
    WHERE id_menu = p_id_menu;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_paciente` (IN `p_id_paciente` VARCHAR(10))   BEGIN
    DELETE FROM paciente
    WHERE id_paciente = p_id_paciente;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminar_usuario` (IN `p_usuario` VARCHAR(25))   BEGIN
    DELETE FROM usuarios
    WHERE users = p_usuario;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `nombre_usuario` (IN `p_usuario` VARCHAR(25))   BEGIN
    SELECT users, contraseña
    FROM usuarios
    WHERE users = p_usuario;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id_cita` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `id_paciente` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialmedico`
--

CREATE TABLE `historialmedico` (
  `id_Paciente` varchar(10) NOT NULL,
  `med_Cintura` float NOT NULL,
  `masa_Muscular` float NOT NULL,
  `peso_Anterior` float NOT NULL,
  `motivo_Consulta` varchar(50) NOT NULL,
  `estatura` float NOT NULL,
  `antecedentes_Salud` varchar(50) NOT NULL,
  `med_Pecho` float NOT NULL,
  `med_Brazo` float NOT NULL,
  `peso_Actual` float NOT NULL,
  `id_menu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id_menu` varchar(10) NOT NULL,
  `desayuno` varchar(100) NOT NULL,
  `cena` varchar(100) NOT NULL,
  `comida` varchar(100) NOT NULL,
  `pColacion` varchar(100) NOT NULL,
  `sColacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id_Paciente` varchar(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `ap` varchar(30) NOT NULL,
  `am` varchar(30) NOT NULL,
  `edad` int(11) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `sexo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `users` varchar(25) NOT NULL,
  `contraseña` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`users`, `contraseña`) VALUES
('alexandro', '1234'),
('nath', '1234'),
('oswa', '1234'),
('usuario', '1234'),
('vero', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indices de la tabla `historialmedico`
--
ALTER TABLE `historialmedico`
  ADD KEY `id_Paciente` (`id_Paciente`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_Paciente`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`users`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_Paciente`);

--
-- Filtros para la tabla `historialmedico`
--
ALTER TABLE `historialmedico`
  ADD CONSTRAINT `historialmedico_ibfk_1` FOREIGN KEY (`id_Paciente`) REFERENCES `paciente` (`id_Paciente`),
  ADD CONSTRAINT `historialmedico_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
