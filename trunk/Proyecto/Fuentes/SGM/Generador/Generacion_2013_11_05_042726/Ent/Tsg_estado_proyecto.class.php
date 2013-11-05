<?php

/********************************************************  
* Clase Tsg_estado_proyecto autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_estado_proyecto{

/***********************************************  
* Atributos                                    *  
***********************************************/  

private $EST_ID; // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR úNICO DEL ESTADO DEL PROYECTO'
private $EST_NOMBRE; // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL ESTADO DEL PROYECTO'
private $EST_DESCRIP; // INT(10) DEFAULT NULL COMMENT 'DESCRIPCIóN DEL ESTADO DEL PROYECTO'
private $EST_ACTIVO; // INT(10) NOT NULL COMMENT 'ELIMINACIóN LOGICA DEL SISTEMA'

/***********************************************  
* Constructores                                *  
***********************************************/  

function __construct($est_id=null
					 ,$est_nombre=null
					 ,$est_descrip=null
					 ,$est_activo=null
					)
{
	$this->EST_ID = $est_id;
	$this->EST_NOMBRE = $est_nombre;
	$this->EST_DESCRIP = $est_descrip;
	$this->EST_ACTIVO = $est_activo;
}

/***********************************************  
* Getter y Setters                             *  
***********************************************/  

public function getEST_ID()
{
 return $this->EST_ID;
}

public function setEST_ID($est_id)
{
 $this->EST_ID = $est_id;
}

public function getEST_NOMBRE()
{
 return $this->EST_NOMBRE;
}

public function setEST_NOMBRE($est_nombre)
{
 $this->EST_NOMBRE = $est_nombre;
}

public function getEST_DESCRIP()
{
 return $this->EST_DESCRIP;
}

public function setEST_DESCRIP($est_descrip)
{
 $this->EST_DESCRIP = $est_descrip;
}

public function getEST_ACTIVO()
{
 return $this->EST_ACTIVO;
}

public function setEST_ACTIVO($est_activo)
{
 $this->EST_ACTIVO = $est_activo;
}

}
?>