
/* Limpiado de datos */
DELETE FROM tsg_usuario_tsg_rol;
DELETE FROM tsg_modulo_tsg_rol;
DELETE FROM tsg_usuario;
DELETE FROM tsg_rol;
DELETE FROM tsg_modulo;

/* Insercion de usuarios */
INSERT INTO `tsg_usuario`(`usu_id`, `usu_nombre`, `usu_apellido`, `usu_telefono`, `usu_direccion`, `usu_fecha_crea`, `usu_fecha_mod`, `usu_rut`, `usu_pass`, `usu_correo`, `usu_activo`) 
VALUES 
(1,'usuario de prueba','',0,'',curdate(),null,'11111111-1','asdf','correo@sgm.cl',1),
(2,'Tracy','Del Flow',1234,'',curdate(),null,'12111111-1','1234','correo@sgm.cl',1);

/* Insercion de roles */
INSERT INTO `tsg_rol`(`rol_id`, `rol_nombre`, `rol_descrip`, `rol_activo`, `rol_usu_creador`, `rol_fecha_creacion`, `rol_fecha_modificacion`) 
VALUES 
(1,'super-user','Rol del super usuario',1,'tracy',curdate(),null),
(2,'Administrador','Rol del Administrador',1,'tracy',curdate(),null),
(3,'Encargado','Rol del Encargado',1,'tracy',curdate(),null),
(4,'Desarrollador','Rol del Desarrollador',1,'tracy',curdate(),null);

/* Asociacion de roles a usuarios */
INSERT INTO `tsg_usuario_tsg_rol`(`tsg_usuariousu_id`, `tsg_rolrol_id`) 
VALUES 
(1,1),(2,4);

/* Insercion de modulos */
INSERT INTO 
`tsg_modulo`(`mod_id`,`mod_nombre`, `mod_descrip`, `mod_activo`, `mod_usu_creador`, `mod_fecha_creacion`, `mod_fecha_modificacion`, `mod_id_mod_padre`, `mod_ruta_imagen`) 
VALUES 
(1,'Proyectos','',1,'tracy',curdate(),null,null,null),
(2,'Clientes','',1,'tracy',curdate(),null,null,null),
(3,'Usuarios','',1,'tracy',curdate(),null,null,null),
(4,'Solicitudes','',1,'tracy',curdate(),null,null,null),
(5,'Estadísticas','',1,'tracy',curdate(),null,null,null),
(6,'Registrar','crear_proyecto.php',1,'tracy',curdate(),null,1,'css/images/registrar.jpg'),
(7,'Buscar','busqueda_proyecto.php',1,'tracy',curdate(),null,1,'css/images/Search.png'),
(8,'Registrar','crear_cliente.php',1,'tracy',curdate(),null,2,'css/images/registrar.jpg'),
(9,'Buscar','busqueda_cliente.php',1,'tracy',curdate(),null,2,'css/images/Search.png'),
(10,'Registrar','crear_usuario.php',1,'tracy',curdate(),null,3,'css/images/registrar.jpg'),
(11,'Buscar','busqueda_usuario.php',1,'tracy',curdate(),null,3,'css/images/Search.png'),
(12,'Registrar','crear_solicitudes.php',1,'tracy',curdate(),null,4,'css/images/registrar.jpg'),
(13,'Buscar','busqueda_solicitudes.php',1,'tracy',curdate(),null,4,'css/images/Search.png'),
(14,'Buscar','ver_estadisticas.php',1,'tracy',curdate(),null,5,'css/images/Search.png');

/* Asociacion de modulos a roles */
INSERT INTO `tsg_modulo_tsg_rol`(`tsg_rolrol_id`,`tsg_modulomod_id`) 
VALUES 
(1,2),
(1,3),
(1,4),
(1,5),
(1,6),
(1,7),
(1,8),
(1,9),
(1,10),
(1,11),
(1,12),
(1,13),
(1,14),
(2,6),
(2,7),
(2,8),
(2,9),
(2,10),
(2,11),
(2,13),
(2,14),
(3,6),
(3,7),
(3,9),
(3,12),
(3,13),
(3,14),
(4,13);


















