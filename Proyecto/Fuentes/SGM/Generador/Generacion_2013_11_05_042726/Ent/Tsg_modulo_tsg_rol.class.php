<?php

/********************************************************  
* Clase Tsg_modulo_tsg_rol autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_modulo_tsg_rol{

/***********************************************  
* Atributos                                    *  
***********************************************/  

private $TSG_MODULOMOD_ID; // INT(10) NOT NULL
private $TSG_ROLROL_ID; // INT(10) NOT NULL

/***********************************************  
* Constructores                                *  
***********************************************/  

function __construct($tsg_modulomod_id=null
					 ,$tsg_rolrol_id=null
					)
{
	$this->TSG_MODULOMOD_ID = $tsg_modulomod_id;
	$this->TSG_ROLROL_ID = $tsg_rolrol_id;
}

/***********************************************  
* Getter y Setters                             *  
***********************************************/  

public function getTSG_MODULOMOD_ID()
{
 return $this->TSG_MODULOMOD_ID;
}

public function setTSG_MODULOMOD_ID($tsg_modulomod_id)
{
 $this->TSG_MODULOMOD_ID = $tsg_modulomod_id;
}

public function getTSG_ROLROL_ID()
{
 return $this->TSG_ROLROL_ID;
}

public function setTSG_ROLROL_ID($tsg_rolrol_id)
{
 $this->TSG_ROLROL_ID = $tsg_rolrol_id;
}

}
?>