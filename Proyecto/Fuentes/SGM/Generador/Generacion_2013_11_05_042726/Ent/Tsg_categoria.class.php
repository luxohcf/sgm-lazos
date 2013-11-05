<?php

/********************************************************  
* Clase Tsg_categoria autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_categoria{

/***********************************************  
* Atributos                                    *  
***********************************************/  

private $CAT_ID; // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR úNICO'
private $CAT_NOMBRE; // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DE LA CATEGORíA.'
private $CAT_DESCRIP; // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCIóN DE LA CATEGORíA'
private $CAT_ACTIVO; // TINYINT(1) NOT NULL COMMENT 'ELIMINACIóN LóGICA DEL SISTEMA.'
private $CAT_USU_CREADOR; // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
private $CAT_FECHA_CREACION; // DATETIME NOT NULL COMMENT 'FECHA CREACIóN'
private $CAT_FECHA_MODIFICACION; // DATETIME DEFAULT NULL COMMENT 'FECHA MODIFICACIóN'

/***********************************************  
* Constructores                                *  
***********************************************/  

function __construct($cat_id=null
					 ,$cat_nombre=null
					 ,$cat_descrip=null
					 ,$cat_activo=null
					 ,$cat_usu_creador=null
					 ,$cat_fecha_creacion=null
					 ,$cat_fecha_modificacion=null
					)
{
	$this->CAT_ID = $cat_id;
	$this->CAT_NOMBRE = $cat_nombre;
	$this->CAT_DESCRIP = $cat_descrip;
	$this->CAT_ACTIVO = $cat_activo;
	$this->CAT_USU_CREADOR = $cat_usu_creador;
	$this->CAT_FECHA_CREACION = $cat_fecha_creacion;
	$this->CAT_FECHA_MODIFICACION = $cat_fecha_modificacion;
}

/***********************************************  
* Getter y Setters                             *  
***********************************************/  

public function getCAT_ID()
{
 return $this->CAT_ID;
}

public function setCAT_ID($cat_id)
{
 $this->CAT_ID = $cat_id;
}

public function getCAT_NOMBRE()
{
 return $this->CAT_NOMBRE;
}

public function setCAT_NOMBRE($cat_nombre)
{
 $this->CAT_NOMBRE = $cat_nombre;
}

public function getCAT_DESCRIP()
{
 return $this->CAT_DESCRIP;
}

public function setCAT_DESCRIP($cat_descrip)
{
 $this->CAT_DESCRIP = $cat_descrip;
}

public function getCAT_ACTIVO()
{
 return $this->CAT_ACTIVO;
}

public function setCAT_ACTIVO($cat_activo)
{
 $this->CAT_ACTIVO = $cat_activo;
}

public function getCAT_USU_CREADOR()
{
 return $this->CAT_USU_CREADOR;
}

public function setCAT_USU_CREADOR($cat_usu_creador)
{
 $this->CAT_USU_CREADOR = $cat_usu_creador;
}

public function getCAT_FECHA_CREACION()
{
 return $this->CAT_FECHA_CREACION;
}

public function setCAT_FECHA_CREACION($cat_fecha_creacion)
{
 $this->CAT_FECHA_CREACION = $cat_fecha_creacion;
}

public function getCAT_FECHA_MODIFICACION()
{
 return $this->CAT_FECHA_MODIFICACION;
}

public function setCAT_FECHA_MODIFICACION($cat_fecha_modificacion)
{
 $this->CAT_FECHA_MODIFICACION = $cat_fecha_modificacion;
}

}
?>