
--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`cod_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `cod_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

--
-- Estructura de tabla para la tabla `house`
--

CREATE TABLE `house` (
  `cod_house` int(11) NOT NULL,
  `house_number` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
ALTER TABLE `house`
  ADD PRIMARY KEY (`cod_house`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `house`
--
ALTER TABLE `house`
  MODIFY `cod_house` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

CREATE TABLE `users` (
  `cod_rol` int(11) NOT NULL,
  `cod_user` int(11) NOT NULL,
  `cod_house` int(11) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `user_lastname` varchar(45) NOT NULL,
  `user_birthday` date NOT NULL,
  `user_id` varchar(45) NOT NULL,
  `user_email` varchar(45) NOT NULL,
  `user_pass` varchar(45) NOT NULL,
  `user_phone` varchar(80) NOT NULL,
  `user_state` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`cod_user`),
  ADD KEY `ind_user_house` (`cod_house`),
  ADD KEY `FK_user_rol` (`cod_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `cod_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_user_rol` FOREIGN KEY (`cod_rol`) REFERENCES `roles` (`cod_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_house` FOREIGN KEY (`cod_house`) REFERENCES `house` (`cod_house`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

