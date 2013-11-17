
/* Limpiado de datos */
DELETE FROM tsg_usuario_tsg_rol;
DELETE FROM tsg_modulo_tsg_rol;
DELETE FROM tsg_usuario;
DELETE FROM tsg_rol;
DELETE FROM tsg_modulo;

/* Insercion de usuarios */
INSERT INTO `tsg_usuario`(`usu_id`, `usu_nombre`, `usu_apellido`, `usu_telefono`, `usu_direccion`, `usu_fecha_crea`, `usu_fecha_mod`, `usu_rut`, `usu_pass`, `usu_correo`, `usu_activo`) 
VALUES 
(1,'usuario de prueba','',0,'',curdate(),CURDATE( ) ,'11111111-1','asdf','correo@sgm.cl',1);

/* Insercion de roles */
INSERT INTO `tsg_rol`(`rol_id`, `rol_nombre`, `rol_descrip`, `rol_activo`, `rol_usu_creador`, `rol_fecha_creacion`, `rol_fecha_modificacion`) 
VALUES 
(1,'super-user','rol del super usuario',1,'luxo',curdate(),CURDATE( ) );

/* Asociacion de roles a usuarios */
INSERT INTO `tsg_usuario_tsg_rol`(`tsg_usuariousu_id`, `tsg_rolrol_id`) 
VALUES 
(1,1);

/* Insercion de modulos */
INSERT INTO 
`tsg_modulo`(`mod_id`,`mod_nombre`, `mod_descrip`, `mod_activo`, `mod_usu_creador`, `mod_fecha_creacion`, `mod_fecha_modificacion`, `mod_id_mod_padre`, `mod_ruta_imagen`) 
VALUES 
(1,'Proyecto','',1,'luxo',curdate(),CURDATE( ) ,null,null),
(2,'Clientes','',1,'luxo',curdate(),CURDATE( ) ,null,null),
(3,'Registrar','proyecto.php',1,'luxo',curdate(),CURDATE( ) ,1,'css/images/registrar.jpg'),
(4,'Buscar','proyecto.php',1,'luxo',curdate(),CURDATE( ) ,1,'css/images/Search.png'),
(5,'Estadisticas','proyecto.php',1,'luxo',curdate(),CURDATE( ) ,1,'css/images/Estrella-blanca.png'),
(6,'Otroas','proyecto.php',1,'luxo',curdate(),CURDATE( ) ,1,'css/images/Estrella-blanca.png'),
(7,'Buscar','proyecto.php',1,'luxo',curdate(),CURDATE( ) ,2,'css/images/Search.png'),
(8,'Solicitudes','',1,'luxo',curdate(),CURDATE( ) ,null,null),
(9,'Buscar','proyecto.php',1,'luxo',curdate(),CURDATE( ) ,8,'css/images/Search.png');

/* Asociacion de modulos a roles */
INSERT INTO `tsg_modulo_tsg_rol`(`tsg_modulomod_id`, `tsg_rolrol_id`) 
VALUES 
(3,1),
(4,1),
(5,1),
(6,1),
(7,1),
(9,1);