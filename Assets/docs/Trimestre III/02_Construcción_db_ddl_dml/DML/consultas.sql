
INSERT INTO `roles` (`cod_rol`, `rol_name`) VALUES
(1, 'Admin'),
(2, 'Vigilante'),
(3, 'Propietario'),
(4, 'Arrendatario'),
(5, 'Visitante');

INSERT INTO `house` (`cod_house`, `house_number`) VALUES
(1, 'casa 1'),
(2, 'casa 2'),
(3, 'casa 3');

INSERT INTO `users` (`cod_rol`, `cod_user`, `cod_house`, `user_name`, `user_lastname`, `user_birthday`, `user_id`, `user_email`, `user_pass`, `user_phone`, `user_state`) VALUES
(1, 8, 1, 'pepe', 'perez', '0000-00-00', '112345', 'pepe@perez.com', '12345', '12345', 1);


