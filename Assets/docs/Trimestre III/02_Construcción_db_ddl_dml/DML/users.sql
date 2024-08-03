-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-08-2024 a las 02:38:20
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
-- Base de datos: `conjuntos_reservas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--


--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`cod_rol`, `cod_user`, `cod_house`, `user_name`, `user_lastname`, `user_birthday`, `user_id`, `user_email`, `user_pass`, `user_phone`, `user_state`) VALUES
(1, 1, 5, 'maribel', 'perez', '1986-02-15', '1001010110', 'maribel@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '31022541678', 1),
(2, 2, 5, 'Luis', 'Parra', '1977-10-06', '99884568', 'parra@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '3022548972', 1),
(3, 3, 1, 'joseph', 'varon', '2002-09-06', '1022524565', 'joseph@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '123456', 1),
(4, 4, 4, 'juan', 'lopez', '1999-09-27', '15151515', 'juan@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '3222156874', 1),
(3, 5, 2, 'luisa', 'martinez', '2001-01-01', '1111111111', 'luisa@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '123456', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`cod_user`),
  ADD KEY `FK_house_cod_idx` (`cod_house`),
  ADD KEY `FK_user_rol` (`cod_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `cod_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_house_cod` FOREIGN KEY (`cod_house`) REFERENCES `house` (`cod_house`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_user_rol` FOREIGN KEY (`cod_rol`) REFERENCES `roles` (`cod_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
