<?php

/********************************************************  
* Clase Tsg_archivo autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_archivo{

/***********************************************  
* Atributos                                    *  
***********************************************/  

private $ARC_ID; // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR úNICO'
private $ARC_NOMBRE; // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL ARCHIVO ADJUNTO'
private $ARC_PESO; // FLOAT NOT NULL COMMENT 'PESO DEL ARCHIVO ADJUNTO'
private $ARC_URL; // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'URL DEL ARCHIVO ADJUNTO'

/***********************************************  
* Constructores                                *  
***********************************************/  

function __construct($arc_id=null
					 ,$arc_nombre=null
					 ,$arc_peso=null
					 ,$arc_url=null
					)
{
	$this->ARC_ID = $arc_id;
	$this->ARC_NOMBRE = $arc_nombre;
	$this->ARC_PESO = $arc_peso;
	$this->ARC_URL = $arc_url;
}

/***********************************************  
* Getter y Setters                             *  
***********************************************/  

public function getARC_ID()
{
 return $this->ARC_ID;
}

public function setARC_ID($arc_id)
{
 $this->ARC_ID = $arc_id;
}

public function getARC_NOMBRE()
{
 return $this->ARC_NOMBRE;
}

public function setARC_NOMBRE($arc_nombre)
{
 $this->ARC_NOMBRE = $arc_nombre;
}

public function getARC_PESO()
{
 return $this->ARC_PESO;
}

public function setARC_PESO($arc_peso)
{
 $this->ARC_PESO = $arc_peso;
}

public function getARC_URL()
{
 return $this->ARC_URL;
}

public function setARC_URL($arc_url)
{
 $this->ARC_URL = $arc_url;
}

}
?>