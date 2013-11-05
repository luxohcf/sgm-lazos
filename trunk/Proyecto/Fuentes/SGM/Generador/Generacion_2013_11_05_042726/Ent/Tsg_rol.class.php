<?php

/********************************************************  
* Clase Tsg_rol autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_rol{

/***********************************************  
* Atributos                                    *  
***********************************************/  

private $ROL_ID; // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR úNICO DE LA TABLA'
private $ROL_NOMBRE; // VARCHAR(100) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'NOMBRE DEL ROL'
private $ROL_DESCRIP; // VARCHAR(1000) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'DESCRIPCIóN DEL ROL'
private $ROL_ACTIVO; // TINYINT(1) NOT NULL COMMENT 'INDICADOR DE REGISTRO ACTIVO'
private $ROL_USU_CREADOR; // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
private $ROL_FECHA_CREACION; // DATETIME NOT NULL COMMENT 'FECHA DE CREACIóN'
private $ROL_FECHA_MODIFICACION; // DATETIME DEFAULT NULL COMMENT 'FECHA MODIFICACIóN'

/***********************************************  
* Constructores                                *  
***********************************************/  

function __construct($rol_id=null
					 ,$rol_nombre=null
					 ,$rol_descrip=null
					 ,$rol_activo=null
					 ,$rol_usu_creador=null
					 ,$rol_fecha_creacion=null
					 ,$rol_fecha_modificacion=null
					)
{
	$this->ROL_ID = $rol_id;
	$this->ROL_NOMBRE = $rol_nombre;
	$this->ROL_DESCRIP = $rol_descrip;
	$this->ROL_ACTIVO = $rol_activo;
	$this->ROL_USU_CREADOR = $rol_usu_creador;
	$this->ROL_FECHA_CREACION = $rol_fecha_creacion;
	$this->ROL_FECHA_MODIFICACION = $rol_fecha_modificacion;
}

/***********************************************  
* Getter y Setters                             *  
***********************************************/  

public function getROL_ID()
{
 return $this->ROL_ID;
}

public function setROL_ID($rol_id)
{
 $this->ROL_ID = $rol_id;
}

public function getROL_NOMBRE()
{
 return $this->ROL_NOMBRE;
}

public function setROL_NOMBRE($rol_nombre)
{
 $this->ROL_NOMBRE = $rol_nombre;
}

public function getROL_DESCRIP()
{
 return $this->ROL_DESCRIP;
}

public function setROL_DESCRIP($rol_descrip)
{
 $this->ROL_DESCRIP = $rol_descrip;
}

public function getROL_ACTIVO()
{
 return $this->ROL_ACTIVO;
}

public function setROL_ACTIVO($rol_activo)
{
 $this->ROL_ACTIVO = $rol_activo;
}

public function getROL_USU_CREADOR()
{
 return $this->ROL_USU_CREADOR;
}

public function setROL_USU_CREADOR($rol_usu_creador)
{
 $this->ROL_USU_CREADOR = $rol_usu_creador;
}

public function getROL_FECHA_CREACION()
{
 return $this->ROL_FECHA_CREACION;
}

public function setROL_FECHA_CREACION($rol_fecha_creacion)
{
 $this->ROL_FECHA_CREACION = $rol_fecha_creacion;
}

public function getROL_FECHA_MODIFICACION()
{
 return $this->ROL_FECHA_MODIFICACION;
}

public function setROL_FECHA_MODIFICACION($rol_fecha_modificacion)
{
 $this->ROL_FECHA_MODIFICACION = $rol_fecha_modificacion;
}

}
?>