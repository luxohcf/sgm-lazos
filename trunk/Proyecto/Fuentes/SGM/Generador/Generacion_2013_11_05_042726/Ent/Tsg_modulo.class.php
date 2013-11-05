<?php

/********************************************************  
* Clase Tsg_modulo autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_modulo{

/***********************************************  
* Atributos                                    *  
***********************************************/  

private $MOD_ID; // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR úNICO DE LA TABLA'
private $MOD_NOMBRE; // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE'
private $MOD_DESCRIP; // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCIóN DEL ROL'
private $MOD_ACTIVO; // TINYINT(1) NOT NULL COMMENT 'INDICADOR DE REGISTRO ACTIVO'
private $MOD_USU_CREADOR; // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
private $MOD_FECHA_CREACION; // DATETIME NOT NULL COMMENT 'FECHA DE CREACIóN'
private $MOD_FECHA_MODIFICACION; // DATETIME DEFAULT NULL COMMENT 'FECHA DE MODIFICACIóN'
private $MOD_ID_MOD_PADRE; // INT(11) DEFAULT NULL
private $MOD_RUTA_IMAGEN; // VARCHAR(100) COLLATE UTF8_SPANISH_CI DEFAULT NULL

/***********************************************  
* Constructores                                *  
***********************************************/  

function __construct($mod_id=null
					 ,$mod_nombre=null
					 ,$mod_descrip=null
					 ,$mod_activo=null
					 ,$mod_usu_creador=null
					 ,$mod_fecha_creacion=null
					 ,$mod_fecha_modificacion=null
					 ,$mod_id_mod_padre=null
					 ,$mod_ruta_imagen=null
					)
{
	$this->MOD_ID = $mod_id;
	$this->MOD_NOMBRE = $mod_nombre;
	$this->MOD_DESCRIP = $mod_descrip;
	$this->MOD_ACTIVO = $mod_activo;
	$this->MOD_USU_CREADOR = $mod_usu_creador;
	$this->MOD_FECHA_CREACION = $mod_fecha_creacion;
	$this->MOD_FECHA_MODIFICACION = $mod_fecha_modificacion;
	$this->MOD_ID_MOD_PADRE = $mod_id_mod_padre;
	$this->MOD_RUTA_IMAGEN = $mod_ruta_imagen;
}

/***********************************************  
* Getter y Setters                             *  
***********************************************/  

public function getMOD_ID()
{
 return $this->MOD_ID;
}

public function setMOD_ID($mod_id)
{
 $this->MOD_ID = $mod_id;
}

public function getMOD_NOMBRE()
{
 return $this->MOD_NOMBRE;
}

public function setMOD_NOMBRE($mod_nombre)
{
 $this->MOD_NOMBRE = $mod_nombre;
}

public function getMOD_DESCRIP()
{
 return $this->MOD_DESCRIP;
}

public function setMOD_DESCRIP($mod_descrip)
{
 $this->MOD_DESCRIP = $mod_descrip;
}

public function getMOD_ACTIVO()
{
 return $this->MOD_ACTIVO;
}

public function setMOD_ACTIVO($mod_activo)
{
 $this->MOD_ACTIVO = $mod_activo;
}

public function getMOD_USU_CREADOR()
{
 return $this->MOD_USU_CREADOR;
}

public function setMOD_USU_CREADOR($mod_usu_creador)
{
 $this->MOD_USU_CREADOR = $mod_usu_creador;
}

public function getMOD_FECHA_CREACION()
{
 return $this->MOD_FECHA_CREACION;
}

public function setMOD_FECHA_CREACION($mod_fecha_creacion)
{
 $this->MOD_FECHA_CREACION = $mod_fecha_creacion;
}

public function getMOD_FECHA_MODIFICACION()
{
 return $this->MOD_FECHA_MODIFICACION;
}

public function setMOD_FECHA_MODIFICACION($mod_fecha_modificacion)
{
 $this->MOD_FECHA_MODIFICACION = $mod_fecha_modificacion;
}

public function getMOD_ID_MOD_PADRE()
{
 return $this->MOD_ID_MOD_PADRE;
}

public function setMOD_ID_MOD_PADRE($mod_id_mod_padre)
{
 $this->MOD_ID_MOD_PADRE = $mod_id_mod_padre;
}

public function getMOD_RUTA_IMAGEN()
{
 return $this->MOD_RUTA_IMAGEN;
}

public function setMOD_RUTA_IMAGEN($mod_ruta_imagen)
{
 $this->MOD_RUTA_IMAGEN = $mod_ruta_imagen;
}

}
?>