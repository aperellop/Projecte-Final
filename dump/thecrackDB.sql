-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 26-05-2022 a las 14:12:51
-- Versión del servidor: 8.0.28
-- Versión de PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `thecrackDB`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Routes`
--

CREATE TABLE `Routes` (
  `id` int NOT NULL,
  `sector` varchar(30) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(400) NOT NULL,
  `grade` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Routes`
--

INSERT INTO `Routes` (`id`, `sector`, `name`, `description`, `grade`) VALUES
(0, 'Can Ortigues', 'Los abajo firmantes', 'Línea de la izquierda en la pared.', '6A+'),
(1, 'Can Ortigues', 'Balrog', 'La línea de la derecha de la pared.', '6B+'),
(2, 'Can Ortigues', 'No siento las piernas', 'El lado izquierdo abultado del bloque.', '6A+'),
(3, 'Can Ortigues', 'Hobbiton', 'El lado derecho del bloque.', '4A'),
(4, 'Can Ortigues', 'Quin clau', 'Empinado y con regletas, con una sección dura después del segundo seguro.\r\nMoviéndose hacia la derecha en este punto hacia la grieta es 6B', '6C'),
(5, 'Can Ortigues', 'Ultimos dias de la victima', 'La pared es engañosa.', '6B'),
(6, 'Rigor Mortis', 'El retorno de los muertos vivientes', 'El extremo izquierdo de la línea en una pared oscura y empinada.', '?'),
(7, 'Rigor Mortis', 'La cripta', 'Muy bueno con una sección de bloque.', '7C+'),
(8, 'Rigor Mortis', 'Zombieland', 'Subiendo directamente a la pared', '8A+'),
(9, 'Rigor Mortis', 'La Morgue', 'Hasta las chorreras y luego a la derecha.', '7c'),
(10, 'Colmena', 'Lucas', 'Comienza en el extremo izquierdo de la pared y va alrededor de dos protuberancias empinadas, una al principio y otra al final.', '6B'),
(11, 'Colmena', 'Colmena', 'Inicie el arete redondeado y luego muévase hacia la izquierda hacia la pared. Sube esto hasta un final empinado', '6C'),
(12, 'Colmena', 'Ella ya no vive aquí', 'La protuberancia redondeada conduce a un final abrupto.', '6B+'),
(13, 'Colmena', 'Debil Mente', 'La pared pasada la grieta.', '8A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Sectors`
--

CREATE TABLE `Sectors` (
  `id` int NOT NULL,
  `spot` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(400) NOT NULL,
  `approach` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Sectors`
--

INSERT INTO `Sectors` (`id`, `spot`, `name`, `description`, `approach`) VALUES
(0, 'Can Ortigues', 'Can Ortigues', 'Un peñasco pequeño en un entorno encantador que tiene una selección limitada de líneas de grado medio en roca compacta. Su ubicación junto a la carretera lo convierte en un lugar ideal.', 'Desde el lugar de estacionamiento, pasa una valla y trepa por la pendiente corta y empinada hasta el peñasco.'),
(1, 'Puig de Garrafa', 'Rigor Mortis', 'En el extremo izquierdo hay una gran pared de mas de 30 m con varias líneas duras. Hay algunas líneas/proyectos desconocidos más adelante.', 'Pasando el muro a través de una zona incomoda pasando algunos bloques grandes, a la izquierda de la ruta.'),
(2, 'Puig de Garrafa', 'Colmena', 'Esta sección corta del peñasco tiene algunas líneas rígidas sobre roca compacta y abultada', 'Desde el área plana en la aproximación principal, camine a la izquierda a lo largo de un camino angosto debajo de algunas rutas, pasando el Sector Corral hasta la base del sector.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Spots`
--

CREATE TABLE `Spots` (
  `id` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `approach` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `conditions` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `photography` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Spots`
--

INSERT INTO `Spots` (`id`, `name`, `description`, `approach`, `conditions`, `photography`) VALUES
(0, 'Can Ortigues', 'Can Ortigues es un pequeño spot que ofrece la posibilidad de un breve entretenimiento a los escaladores que transitan por este camino.', 'Desde Andratx, conduce hacia el norte por la Ma-10 hacia Estellencs, Banyalbufar y Sóller. De Estellencs a Sóller hay una gran roca pintada de rosa a la derecha justo antes del kilómetro 103. Estacione en un área de estacionamiento irregular a la derecha justo después de la curva pronunciada a la derecha, siguiendo el poste indicador del kilómetro 103. Si llegas a dos túneles arqueados entonces has ido demasiado lejos. Hay más estacionamiento disponible junto a la roca rosa. El lado derecho del peñasco está subiendo la pendiente por encima del lugar de estacionamiento. Ha habido un incendio en la zona y se han levantado algunas vallas para detener los derrumbes de escombros, pero la escalada no se ve afectada y las vallas pueden pasarse por alto.', 'El peñasco mira hacia el noroeste y solo recibe el sol de la tarde. No ofrece ningún resguardo de la lluvia pero es una buena opción cuando hace calor.', './Resources/Photographies/Spots/CanOrtigues.jpg'),
(1, 'Puig de Garrafa', 'El Puig de Garrafa es un extenso Spot formado por varios Sectores repartidos por una ladera boscosa. Hay muchas rutas que brindan escaladas de alta calidad en todo el rango de grados, lo que la convierte en una buena opción para grupos de habilidades mixtas. Se atiende a la mayoría de los estilos de escalada y los mejores incluyen: paredes de bolsillo largas, varias líneas de toba empinadas y algunas líneas de surcos finos. El acceso es rápido y uno de los principales beneficios de la peña es que, si bien se puede encontrar sombra durante todo el día, también se pueden buscar diferentes niveles de sol desde el final de la mañana en adelante.', 'El soleado Sector Solarium que mira hacia el sur en lo alto de la colina se encuentra en un terreno privado y ya no debe visitarse. No suba aquí, de lo contrario se perderá el acceso a los otros sectores.\r\n\r\nSalida de Palma por la principal Ma-1 hacia Andratx. Después de emerger del segundo túnel (uno largo) aparece una enorme cara de roca al frente. Continúe durante 2,4 km hasta la cima de una colina que se encuentra a medio camino entre los postes del km 27 y 28. Justo después de la ceja, gire a la derecha bruscamente hacia una pequeña carretera y estacione junto a unas obras hidráulicas. edificios Para los sectores de la izquierda: siga un camino desde el norte del estacionamiento y rompa a la derecha por otro camino hacia el peñasco. Para el Sector Sombra y el Sector Corral: cruce una pared y una cerca y camine por un camino ancho hasta un área plana. El Sector Sombra está justo a la derecha y el Sector Corral está a la izquierda.', 'El Sector Sombra está muy protegido y debería dar algo de escalada en seco. en lluvia ligera. Está orientado al norte y no recibe sol. El Sector Corral y el Sector To pa ti pueden dar un poco de escalada protegida con lluvia ligera y ambos reciben el sol de la tarde. Todos los sectores filtran después de fuertes lluvias.', './Resources/Photographies/Spots/PuigdeGarrafa.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Users`
--

CREATE TABLE `Users` (
  `id` int NOT NULL,
  `username` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surnames` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `photography` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Users`
--

INSERT INTO `Users` (`id`, `username`, `name`, `surnames`, `email`, `password`, `photography`) VALUES
(0, 'aperellop', 'Albert', 'Perelló Puertas', 'aperellop@gmail.com', 'pwd', './Resources/Photographies/Users/aperellop.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
