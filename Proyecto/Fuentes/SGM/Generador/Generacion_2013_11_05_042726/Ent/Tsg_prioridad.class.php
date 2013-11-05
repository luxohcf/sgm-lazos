<?php

/********************************************************  
* Clase Tsg_prioridad autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_prioridad{

/***********************************************  
* Atributos                                    *  
***********************************************/  

private $PRI_ID; // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR úNICO DE LA PRIORIDAD DEL TICKET'
private $PRI_NOMBRE; // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DE LA PRIORIDAD'
private $PRI_DESCRIP; // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCIóN DE LA PRIORIDAD'
private $PRI_ACTIVO; // TINYINT(1) NOT NULL COMMENT 'ELIMINACIóN LóGICA DEL SISTEMA.'

/***********************************************  
* Constructores                                *  
***********************************************/  

function __construct($pri_id=null
					 ,$pri_nombre=null
					 ,$pri_descrip=null
					 ,$pri_activo=null
					)
{
	$this->PRI_ID = $pri_id;
	$this->PRI_NOMBRE = $pri_nombre;
	$this->PRI_DESCRIP = $pri_descrip;
	$this->PRI_ACTIVO = $pri_activo;
}

/***********************************************  
* Getter y Setters                             *  
***********************************************/  

public function getPRI_ID()
{
 return $this->PRI_ID;
}

public function setPRI_ID($pri_id)
{
 $this->PRI_ID = $pri_id;
}

public function getPRI_NOMBRE()
{
 return $this->PRI_NOMBRE;
}

public function setPRI_NOMBRE($pri_nombre)
{
 $this->PRI_NOMBRE = $pri_nombre;
}

public function getPRI_DESCRIP()
{
 return $this->PRI_DESCRIP;
}

public function setPRI_DESCRIP($pri_descrip)
{
 $this->PRI_DESCRIP = $pri_descrip;
}

public function getPRI_ACTIVO()
{
 return $this->PRI_ACTIVO;
}

public function setPRI_ACTIVO($pri_activo)
{
 $this->PRI_ACTIVO = $pri_activo;
}

}
?>