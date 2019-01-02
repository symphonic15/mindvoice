-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-01-2019 a las 01:45:47
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mindvoice`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'acciones'),
(2, 'alimentos'),
(3, 'animales'),
(4, 'bebidas'),
(5, 'deportes'),
(6, 'clima'),
(7, 'animo'),
(8, 'frutas'),
(9, 'lugares'),
(10, 'numeros'),
(11, 'higiene'),
(12, 'personajes'),
(13, 'praxias'),
(14, 'ropa'),
(15, 'transporte'),
(16, 'utensillos'),
(17, 'utiles'),
(18, 'vegetales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `words`
--

CREATE TABLE `words` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `words`
--

INSERT INTO `words` (`id`, `category_id`, `name`, `image`) VALUES
(204, 1, 'ABRAZAR', 'abrazar.png'),
(205, 1, 'ACERTASTE', 'acertaste.png'),
(206, 1, 'ACLARAR', 'aclarar.png'),
(207, 1, 'ACOSTARSE', 'acostarse.png'),
(208, 1, 'ADORNAR', 'adornar.png'),
(209, 1, 'AFEITARSE', 'afeitarse.png'),
(210, 1, 'ALCANZAR', 'alcanzar.png'),
(211, 1, 'ALMORZAR', 'almorzar.png'),
(212, 1, 'APOSTAR', 'apostar.png'),
(213, 1, 'NADAR', 'nadar.png'),
(214, 1, 'ARRODILLARSE', 'arrodillarse.png'),
(215, 1, 'ARROJAR', 'arrojar.png'),
(216, 1, 'LIMPIAR', 'limpiar.png'),
(217, 1, 'BASTA YA', 'basta ya.png'),
(218, 1, 'ES GRACIOSO', 'es gracioso.png'),
(219, 1, 'LAVAMANOS', 'lavamanos.png'),
(220, 1, 'LEER', 'leer.png'),
(221, 1, 'LLAMAR', 'llamar.png'),
(222, 1, 'PEINARSE', 'peinarse.png'),
(223, 1, 'PINTAR', 'pintar.png'),
(224, 1, 'QUE HORA ES', 'que hora es.png'),
(225, 1, 'REIR', 'reir.png'),
(226, 1, 'SECAR', 'secar.png'),
(227, 1, 'SOLTAR', 'soltar.png'),
(228, 1, 'TELEFONEAR', 'telefonear.png'),
(229, 1, 'TOSER', 'toser.png'),
(230, 1, 'VER TELEVISION', 'ver television.png'),
(231, 1, 'VESTIRSE', 'vestirse.png'),
(232, 2, 'ALIMENTO', 'alimento.png'),
(233, 2, 'AZUCAR', 'azucar.png'),
(234, 3, 'GATO', 'gato.png'),
(235, 3, 'LEON', 'leon.png'),
(236, 3, 'MONO', 'mono.png'),
(237, 3, 'PAJARO', 'pajaro.png'),
(238, 3, 'PERRO', 'perro.png'),
(239, 3, 'PEZ', 'pez.png'),
(240, 4, 'AGUA', 'agua.png'),
(241, 4, 'GASEOSA', 'gaseosa.png'),
(242, 4, 'JUGO', 'jugo.png'),
(243, 4, 'LECHE', 'leche.png'),
(244, 5, 'BASQUET', 'basquet.png'),
(245, 5, 'FUTBOL', 'futbol.png'),
(246, 5, 'HOCKEY', 'hockey.png'),
(247, 5, 'NATACION', 'natacion.png'),
(248, 5, 'TENIS', 'tenis.png'),
(249, 6, 'LLUVIOSO', 'lluvioso.png'),
(250, 6, 'NUBLADO', 'nublado.png'),
(251, 6, 'SOLEADO', 'soleado.png'),
(252, 7, 'ABURRIDO', 'aburrido.png'),
(253, 7, 'ACALORADO', 'acalorado.png'),
(254, 7, 'ALEGRE', 'alegre.png'),
(255, 7, 'BIEN', 'bien.png'),
(256, 7, 'TRISTE', 'triste.png'),
(257, 8, 'BANANA', 'banana.png'),
(258, 8, 'FRUTILLA', 'frutilla.png'),
(259, 8, 'MANZANA', 'manzana.png'),
(260, 8, 'NARANJA', 'naranja.png'),
(261, 8, 'PERA', 'pera.png'),
(262, 8, 'UVA', 'uva.png'),
(263, 9, 'BAÑO', 'banio.png'),
(264, 9, 'ESTADIO', 'estadio.png'),
(265, 9, 'HOSPITAL', 'hospital.png'),
(266, 9, 'VIVIENDA', 'vivienda.png'),
(267, 10, '1', '1.png'),
(268, 10, '2', '2.png'),
(269, 10, '3', '3.png'),
(270, 10, '4', '4.png'),
(271, 10, '5', '5.png'),
(272, 10, '6', '6.png'),
(273, 10, '7', '7.png'),
(274, 10, '8', '8.png'),
(275, 10, '9', '9.png'),
(276, 10, '10', '10.png'),
(279, 11, 'APARATO DENTAL', 'aparato dental.png'),
(280, 11, 'CEPILLO DE DIENTES', 'cepillo de diente.png'),
(281, 11, 'JABON', 'jabon.png'),
(282, 11, 'PEINE', 'peine.png'),
(283, 12, 'ABUELA', 'abuela.png'),
(284, 12, 'ABUELO', 'abuelo.png'),
(285, 12, 'AMIGOS', 'amigos.png'),
(286, 12, 'PANADERO', 'panadero.png'),
(287, 12, 'PRINCESA', 'princesa.png'),
(288, 12, 'PRINCIPE', 'principe.png'),
(289, 12, 'VENDEDOR', 'vendedor.png'),
(290, 12, 'VERDULERO', 'verdulero.png'),
(291, 13, 'FELIZ', 'praxia3.png'),
(292, 13, 'BESO', 'praxia2.png'),
(293, 13, 'HABLAR', 'praxia1.png'),
(294, 14, 'CAMPERA', 'campera.png'),
(295, 14, 'GUANTES', 'guantes.png'),
(296, 14, 'MUSCULOSA', 'musculosa.png'),
(297, 14, 'PANTALON', 'pantalon.png'),
(298, 14, 'REMERA', 'remera.png'),
(299, 14, 'ZAPATILLAS', 'zapatillas.png'),
(300, 14, 'ZAPATOS', 'zapatos.png'),
(301, 15, 'AUTO', 'auto.png'),
(302, 15, 'BARCO', 'barco.png'),
(303, 15, 'CAMION', 'camion.png'),
(304, 15, 'CAMIONETA', 'camioneta.png'),
(305, 15, 'SILLA', 'silla.png'),
(306, 16, 'CUCHARA', 'cuchara.png'),
(307, 16, 'CUCHILLO', 'cuchillo.png'),
(308, 16, 'TENEDOR', 'tenedor.png'),
(309, 17, 'CRAYONES', 'crayones.png'),
(310, 17, 'CUADERNO', 'cuaderno.png'),
(311, 17, 'GOMA DE BORRAR', 'goma de borrar.png'),
(312, 17, 'LAPIZ', 'lapiz.png'),
(313, 17, 'PINCEL', 'pincel.png'),
(321, 18, 'CEBOLLA', 'cebolla.png'),
(322, 18, 'LECHUGA', 'lechuga.png'),
(323, 18, 'MORRON', 'morron.png'),
(324, 18, 'PAPA', 'papa.png'),
(325, 18, 'TOMATE', 'tomate.png'),
(326, 18, 'ZANAHORIA', 'zanahoria.png'),
(327, 18, 'ZAPALLO', 'zapallo.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`category_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `words`
--
ALTER TABLE `words`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=328;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `words`
--
ALTER TABLE `words`
  ADD CONSTRAINT `words_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
