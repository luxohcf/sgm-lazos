<?php

/********************************************************  
* Clase Tsg_usuario_tsg_proyecto autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_usuario_tsg_proyecto{

/***********************************************  
* Atributos                                    *  
***********************************************/  

private $TSG_USUARIOUSU_ID; // INT(10) NOT NULL
private $TSG_PROYECTOPRO_ID; // INT(10) NOT NULL

/***********************************************  
* Constructores                                *  
***********************************************/  

function __construct($tsg_usuariousu_id=null
					 ,$tsg_proyectopro_id=null
					)
{
	$this->TSG_USUARIOUSU_ID = $tsg_usuariousu_id;
	$this->TSG_PROYECTOPRO_ID = $tsg_proyectopro_id;
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

public function getTSG_PROYECTOPRO_ID()
{
 return $this->TSG_PROYECTOPRO_ID;
}

public function setTSG_PROYECTOPRO_ID($tsg_proyectopro_id)
{
 $this->TSG_PROYECTOPRO_ID = $tsg_proyectopro_id;
}

}
?>