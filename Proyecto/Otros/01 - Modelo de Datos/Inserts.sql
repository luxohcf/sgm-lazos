/* Limpiado de datos */
DELETE FROM tsg_usuario_tsg_rol;
DELETE FROM tsg_modulo_tsg_rol;
DELETE FROM tsg_usuario;
DELETE FROM tsg_rol;
DELETE FROM tsg_modulo;
DELETE FROM tsg_archivo;
DELETE FROM tsg_comentario_proyecto;
DELETE FROM tsg_proyecto;
DELETE FROM tsg_cliente;
DELETE FROM sqi_tipo_proyecto;
DELETE FROM tsg_estado_proyecto;


/* Insercion de usuarios */
INSERT INTO `tsg_usuario`(`usu_id`, `usu_nombre`, `usu_apellido`, `usu_telefono`, `usu_direccion`, `usu_fecha_crea`, `usu_fecha_mod`, `usu_rut`, `usu_pass`, `usu_correo`, `usu_activo`) 
VALUES 
(1,'Luxo','',0,'',curdate(),null,'11111111-1','d964173dc44da83eeafa3aebbee9a1a0','correo@sgm.cl',1),
(2,'Tracy','Del Flow',1234,'',curdate(),null,'12111111-1','d964173dc44da83eeafa3aebbee9a1a0','correo@sgm.cl',1);

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
(5,'Estad&iacute;sticas','',1,'tracy',curdate(),null,null,null),
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

/* Clientes de prueba */
INSERT INTO `tsg_cliente`(`cli_id`, `cli_nombre`, `cli_apellido`, `cli_correo`, `cli_empresa`, `cli_rut`, `cli_direccion`, `cli_fecha_ini`, `cli_fecha_mod`, `cli_activo`, `cli_usu_creador`) 
VALUES 
(1,'Cliente 1','Ap','correo@c.cl','cliente 1 ltds.','77123546-8','direcci&oacute;n',curdate(),null,1,'luxo'),
(2,'Cliente 2','Ap','correo@c.cl','cliente 2 ltds.','22123546-8','direcci&oacute;n',curdate(),null,1,'luxo'),
(3,'Cliente 3','Ap','correo@c.cl','cliente 3 ltds.','33123546-8','direcci&oacute;n',curdate(),null,1,'luxo');


/* Tipo de proyecto */
INSERT INTO `sqi_tipo_proyecto`(`tip_id`, `tip_nombre`, `tip_descrip`, `tip_activo`, `tip_usu_creador`, `tip_fecha_creacion`, `tip_fecha_modificacion`) 
VALUES 
(1,'Desarrollo','Desarrollo',1,'luxo',curdate(),null),
(2,'Mantenimiento','Mantenimiento',1,'luxo',curdate(),null);

/* Estado proyecto */
INSERT INTO `tsg_estado_proyecto`(`est_id`, `est_nombre`, `est_descrip`, `est_activo`) 
VALUES 
(1,'Creado','Creado',1),
(2,'En ejecuci&oacute;n','En ejecuci�n',1),
(3,'En mantenimiento','En mantenimiento',1),
(4,'Finalizado','Finalizado',1);

/* Proyectos de prueba */

INSERT INTO `tsg_proyecto`(`pro_id`, `pro_nombre`, `pro_descrip`, `pro_usu_id_jefepro`, `pro_duracion`, `pro_fecha_ini`, `pro_fecha_term`, `pro_fecha_garan`, `pro_activo`, `tsg_clientecli_id`, `tsg_estado_proyectoest_id`, `sqi_tipo_proyectotip_id`, `pro_usu_creador`, `pro_fecha_creacion`, `pro_fecha_modificacion`, `pro_destacado`) 
VALUES 
(1,'Proyecto 1','Proyecto 1',1,'',curdate(),curdate(),curdate(),1,1,1,1,'luxo',curdate(),null,1),
(2,'Proyecto 2','Proyecto 2',1,'',curdate(),curdate(),curdate(),1,1,2,2,'luxo',curdate(),null,1),
(3,'Proyecto 3','Proyecto 3',1,'',curdate(),curdate(),curdate(),1,2,3,1,'luxo',curdate(),null,0),
(4,'Proyecto 4','Proyecto 4',1,'',curdate(),curdate(),curdate(),1,2,4,2,'luxo',curdate(),null,0),
(5,'Proyecto 5','Proyecto 5',1,'',curdate(),curdate(),curdate(),1,3,1,1,'luxo',curdate(),null,1),
(6,'Proyecto 6','Proyecto 6',2,'',curdate(),curdate(),curdate(),1,3,2,2,'luxo',curdate(),null,0),
(7,'Proyecto 7','Proyecto 7',2,'',curdate(),curdate(),curdate(),1,1,3,1,'luxo',curdate(),null,1),
(8,'Proyecto 8','Proyecto 8',2,'',curdate(),curdate(),curdate(),1,2,4,2,'luxo',curdate(),null,0),
(9,'Proyecto 9','Proyecto 9',2,'',curdate(),curdate(),curdate(),1,3,1,1,'luxo',curdate(),null,1),
(10,'Proyecto 10','Proyecto 10',2,'',curdate(),curdate(),curdate(),1,1,1,1,'luxo',curdate(),null,0);

/* Archivos de prueba */
INSERT INTO `tsg_archivo`(`arc_id`, `arc_nombre`, `arc_peso`, `arc_url`) 
VALUES
(1,'Documento1.doc',1024,'/ruta/subruta/2013-20-1_Documento1.doc'),
(2,'Documento1.doc',1024,'/ruta/subruta/2013-20-1_Documento1.doc'),
(3,'Documento1.doc',1024,'/ruta/subruta/2013-20-1_Documento1.doc');

/* Comentarios de prueba */

INSERT INTO `tsg_comentario_proyecto`(`cop_id`, `cop_descrip`, `tsg_proyectopro_id`, `tsg_usuariousu_id`, `tsg_archivoarc_id`, `cop_fecha_creacion`) 
VALUES 
(1,'Observaci�n de prueba 1',1,1,1,curdate()),
(2,'Observaci�n de prueba 2',1,1,2,curdate()),
(3,'Observaci�n de prueba 3',1,2,3,curdate()),
(4,'Observaci�n de prueba 4',1,2,1,curdate()),
(5,'Observaci�n de prueba 5',1,1,1,curdate()),
(6,'Observaci�n de prueba 6',1,1,2,curdate()),
(7,'Observaci�n de prueba 7',1,2,1,curdate()),
(8,'Observaci�n de prueba 8',1,2,2,curdate()),
(9,'Observaci�n de prueba 9',1,1,1,curdate());






