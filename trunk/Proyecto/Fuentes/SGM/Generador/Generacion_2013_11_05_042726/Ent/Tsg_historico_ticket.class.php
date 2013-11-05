<?php

/********************************************************  
* Clase Tsg_historico_ticket autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_historico_ticket{

/***********************************************  
* Atributos                                    *  
***********************************************/  

private $HIS_ID; // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR úNICO'
private $HIS_NOMBRE; // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL HISTóRICO'
private $HIS_DESCRIP; // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCIóN HISTóRICO'
private $TSG_ESTADO_TICKETEST_ID; // INT(10) NOT NULL
private $TSG_TICKETTIC_ID; // INT(10) NOT NULL
private $TSG_USUARIOUSU_ID; // INT(10) NOT NULL
private $TSG_PROYECTOPRO_ID; // INT(10) NOT NULL
private $TSG_PRIORIDADPRI_ID; // INT(10) NOT NULL
private $TSG_CATEGORIACAT_ID; // INT(10) NOT NULL

/***********************************************  
* Constructores                                *  
***********************************************/  

function __construct($his_id=null
					 ,$his_nombre=null
					 ,$his_descrip=null
					 ,$tsg_estado_ticketest_id=null
					 ,$tsg_tickettic_id=null
					 ,$tsg_usuariousu_id=null
					 ,$tsg_proyectopro_id=null
					 ,$tsg_prioridadpri_id=null
					 ,$tsg_categoriacat_id=null
					)
{
	$this->HIS_ID = $his_id;
	$this->HIS_NOMBRE = $his_nombre;
	$this->HIS_DESCRIP = $his_descrip;
	$this->TSG_ESTADO_TICKETEST_ID = $tsg_estado_ticketest_id;
	$this->TSG_TICKETTIC_ID = $tsg_tickettic_id;
	$this->TSG_USUARIOUSU_ID = $tsg_usuariousu_id;
	$this->TSG_PROYECTOPRO_ID = $tsg_proyectopro_id;
	$this->TSG_PRIORIDADPRI_ID = $tsg_prioridadpri_id;
	$this->TSG_CATEGORIACAT_ID = $tsg_categoriacat_id;
}

/***********************************************  
* Getter y Setters                             *  
***********************************************/  

public function getHIS_ID()
{
 return $this->HIS_ID;
}

public function setHIS_ID($his_id)
{
 $this->HIS_ID = $his_id;
}

public function getHIS_NOMBRE()
{
 return $this->HIS_NOMBRE;
}

public function setHIS_NOMBRE($his_nombre)
{
 $this->HIS_NOMBRE = $his_nombre;
}

public function getHIS_DESCRIP()
{
 return $this->HIS_DESCRIP;
}

public function setHIS_DESCRIP($his_descrip)
{
 $this->HIS_DESCRIP = $his_descrip;
}

public function getTSG_ESTADO_TICKETEST_ID()
{
 return $this->TSG_ESTADO_TICKETEST_ID;
}

public function setTSG_ESTADO_TICKETEST_ID($tsg_estado_ticketest_id)
{
 $this->TSG_ESTADO_TICKETEST_ID = $tsg_estado_ticketest_id;
}

public function getTSG_TICKETTIC_ID()
{
 return $this->TSG_TICKETTIC_ID;
}

public function setTSG_TICKETTIC_ID($tsg_tickettic_id)
{
 $this->TSG_TICKETTIC_ID = $tsg_tickettic_id;
}

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

public function getTSG_PRIORIDADPRI_ID()
{
 return $this->TSG_PRIORIDADPRI_ID;
}

public function setTSG_PRIORIDADPRI_ID($tsg_prioridadpri_id)
{
 $this->TSG_PRIORIDADPRI_ID = $tsg_prioridadpri_id;
}

public function getTSG_CATEGORIACAT_ID()
{
 return $this->TSG_CATEGORIACAT_ID;
}

public function setTSG_CATEGORIACAT_ID($tsg_categoriacat_id)
{
 $this->TSG_CATEGORIACAT_ID = $tsg_categoriacat_id;
}

}
?>