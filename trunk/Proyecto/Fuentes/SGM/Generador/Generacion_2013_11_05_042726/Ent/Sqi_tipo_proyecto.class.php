<?php

/********************************************************  
* Clase Sqi_tipo_proyecto autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Sqi_tipo_proyecto{

/***********************************************  
* Atributos                                    *  
***********************************************/  

private $TIP_ID; // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR úNICO'
private $TIP_NOMBRE; // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL TIPO DE PROYECTO'
private $TIP_DESCRIP; // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCIóN DEL TIPO DE PROYECTO'
private $TIP_ACTIVO; // TINYINT(1) NOT NULL COMMENT 'REGISTRO ACTIVO'
private $TIP_USU_CREADOR; // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
private $TIP_FECHA_CREACION; // DATETIME NOT NULL COMMENT 'FECHA DE CREACIóN'
private $TIP_FECHA_MODIFICACION; // DATETIME DEFAULT NULL COMMENT 'FECHA DE MODIFICACIóN'
private $TSG_PROYECTO_HISTORICOPRH_ID; // INT(10) NOT NULL

/***********************************************  
* Constructores                                *  
***********************************************/  

function __construct($tip_id=null
					 ,$tip_nombre=null
					 ,$tip_descrip=null
					 ,$tip_activo=null
					 ,$tip_usu_creador=null
					 ,$tip_fecha_creacion=null
					 ,$tip_fecha_modificacion=null
					 ,$tsg_proyecto_historicoprh_id=null
					)
{
	$this->TIP_ID = $tip_id;
	$this->TIP_NOMBRE = $tip_nombre;
	$this->TIP_DESCRIP = $tip_descrip;
	$this->TIP_ACTIVO = $tip_activo;
	$this->TIP_USU_CREADOR = $tip_usu_creador;
	$this->TIP_FECHA_CREACION = $tip_fecha_creacion;
	$this->TIP_FECHA_MODIFICACION = $tip_fecha_modificacion;
	$this->TSG_PROYECTO_HISTORICOPRH_ID = $tsg_proyecto_historicoprh_id;
}

/***********************************************  
* Getter y Setters                             *  
***********************************************/  

public function getTIP_ID()
{
 return $this->TIP_ID;
}

public function setTIP_ID($tip_id)
{
 $this->TIP_ID = $tip_id;
}

public function getTIP_NOMBRE()
{
 return $this->TIP_NOMBRE;
}

public function setTIP_NOMBRE($tip_nombre)
{
 $this->TIP_NOMBRE = $tip_nombre;
}

public function getTIP_DESCRIP()
{
 return $this->TIP_DESCRIP;
}

public function setTIP_DESCRIP($tip_descrip)
{
 $this->TIP_DESCRIP = $tip_descrip;
}

public function getTIP_ACTIVO()
{
 return $this->TIP_ACTIVO;
}

public function setTIP_ACTIVO($tip_activo)
{
 $this->TIP_ACTIVO = $tip_activo;
}

public function getTIP_USU_CREADOR()
{
 return $this->TIP_USU_CREADOR;
}

public function setTIP_USU_CREADOR($tip_usu_creador)
{
 $this->TIP_USU_CREADOR = $tip_usu_creador;
}

public function getTIP_FECHA_CREACION()
{
 return $this->TIP_FECHA_CREACION;
}

public function setTIP_FECHA_CREACION($tip_fecha_creacion)
{
 $this->TIP_FECHA_CREACION = $tip_fecha_creacion;
}

public function getTIP_FECHA_MODIFICACION()
{
 return $this->TIP_FECHA_MODIFICACION;
}

public function setTIP_FECHA_MODIFICACION($tip_fecha_modificacion)
{
 $this->TIP_FECHA_MODIFICACION = $tip_fecha_modificacion;
}

public function getTSG_PROYECTO_HISTORICOPRH_ID()
{
 return $this->TSG_PROYECTO_HISTORICOPRH_ID;
}

public function setTSG_PROYECTO_HISTORICOPRH_ID($tsg_proyecto_historicoprh_id)
{
 $this->TSG_PROYECTO_HISTORICOPRH_ID = $tsg_proyecto_historicoprh_id;
}

}
?>