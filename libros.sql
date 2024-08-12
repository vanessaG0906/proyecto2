-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-08-2024 a las 00:49:52
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `autor` varchar(200) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `editorial` varchar(100) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `fecha` int(11) NOT NULL,
  `paginas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `autor`, `titulo`, `editorial`, `precio`, `fecha`, `paginas`) VALUES
(0, 'Miguel de Cervantes', 'El Quijote de la Mancha', 'Oveja Negra', 200.00, 2005, 600),
(0, 'Gabriel García Márquez', 'Cien años de soledad', 'Oveja Negra', 300.00, 2000, 587),
(0, 'Gabriel García Márquez', 'El General en su laberinto', 'Oveja Negra', 350.00, 2005, 654),
(0, 'Gabriel García Márquez', 'El amor en los tiempos del cólera', 'Oveja Negra', 750.00, 2007, 765),
(0, 'Octavio Paz', 'El laberinto de la soledad', 'Diana', 300.00, 2002, 500),
(0, 'Paolo Giordano', 'La soledad de los números primos', 'Alfaguara', 350.00, 2005, 200),
(0, 'Guillermo Del Toro', 'El laberinto del fauno', 'Diana', 250.00, 2008, 100),
(0, 'Santy Menor', 'La soledad del portero', 'Diana', 450.00, 2010, 150),
(0, 'Mario Vargas Llosa', 'La guerra del fin del mundo', 'El barco de vapor', 350.00, 2010, 600),
(0, 'Mario Vargas Llosa', 'La casa verde', 'El barco de vapor', 450.00, 2000, 600),
(0, 'Mario Vargas Llosa', 'Conversaciones en la Catedral', 'El barco de vapor', 650.00, 2018, 600),
(0, 'Mario Vargas Llosa', 'La tía Julia y el escribidor', 'El barco de vapor', 650.00, 2008, 600),
(0, 'Mario Vargas Llosa', 'La ciudad y los perros', 'Alfaguara', 550.00, 2002, 600),
(0, 'Gabriel García Márquez', 'Crónica de una muerte anunciada', 'Alfaguara', 550.00, 2004, 600),
(0, 'Gabriel García Márquez', 'Relato de un náufrago', 'Alfaguara', 250.00, 2014, 200),
(0, 'Gabriel García Márquez', 'El coronel no tiene quien le escriba', 'Alfaguara', 350.00, 2013, 300),
(0, 'Gabriel García Márquez', 'La increíble y triste historia de la cándida Eréndira y de su abuela desalmada', 'Diana', 150.00, 2001, 350),
(0, 'José Saramago', 'Elogio a la ceguera', 'Alfaguara', 350.00, 2012, 350),
(0, 'José Saramago', 'El evangelio según jesucristo', 'Alfaguara', 450.00, 2013, 450),
(0, 'José Saramago', 'El hombre duplicado', 'Alfaguara', 350.00, 2014, 250),
(0, 'José Saramago', 'Viaje a Portugal', 'Alfaguara', 250.00, 2015, 350),
(0, 'José Saramago', 'Casi un objeto', 'Alfaguara', 200.00, 2016, 150),
(0, 'José Saramago', 'Todos los nombres', 'Alfaguara', 250.00, 2017, 250),
(0, 'Mario Vargas Llosa', 'La llamada de la tribu', 'Alfaguara', 350.00, 2019, 250),
(0, 'Mario Vargas Llosa', 'Los cuadernos de don Rigoberto', 'Alfaguara', 350.00, 2018, 250),
(0, 'León Tolstói', 'La guerra y la paz', 'Diana', 450.00, 2019, 1250);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
