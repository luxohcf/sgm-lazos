<?php

/********************************************************  
* Clase Tsg_usuario_tsg_rol autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_usuario_tsg_rol{

/***********************************************  
* Atributos                                    *  
***********************************************/  

private $TSG_USUARIOUSU_ID; // INT(10) NOT NULL
private $TSG_ROLROL_ID; // INT(10) NOT NULL

/***********************************************  
* Constructores                                *  
***********************************************/  

function __construct($tsg_usuariousu_id=null
					 ,$tsg_rolrol_id=null
					)
{
	$this->TSG_USUARIOUSU_ID = $tsg_usuariousu_id;
	$this->TSG_ROLROL_ID = $tsg_rolrol_id;
}

/***********************************************  
* Getter y Setters                             *  
***********************************************/  

public function getTSG_USUARIOUSU_ID()
{
 return $this->TSG_USUARIOUSU_ID;
}

public function setTSG_USUARIOUSU_ID($tsg_usuariousu_id)
{
 $this->TSG_USUARIOUSU_ID = $tsg_usuariousu_id;
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