<?php

/********************************************************  
* Clase Tsg_estadistica_diaria autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_estadistica_diaria{

/***********************************************  
* Atributos                                    *  
***********************************************/  

private $DIS_ID; // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR úNICO DE LA TABLA'
private $DIS_FECHA; // INT(10) NOT NULL COMMENT 'FECHA'
private $DIS_TOTAL; // INT(10) NOT NULL COMMENT 'TOTAL DE TICKETS'
private $DIS_PROCESADAS; // INT(10) NOT NULL COMMENT 'TOTAL PROCESADOS'
private $DIS_PENDIENTES; // INT(10) NOT NULL COMMENT 'TOTAL PENDIENTES'
private $DIS_CERRADAS; // INT(10) NOT NULL COMMENT 'TOTAL CERRADAS'
private $TSG_PROYECTOPRO_ID; // INT(10) NOT NULL

/***********************************************  
* Constructores                                *  
***********************************************/  

function __construct($dis_id=null
					 ,$dis_fecha=null
					 ,$dis_total=null
					 ,$dis_procesadas=null
					 ,$dis_pendientes=null
					 ,$dis_cerradas=null
					 ,$tsg_proyectopro_id=null
					)
{
	$this->DIS_ID = $dis_id;
	$this->DIS_FECHA = $dis_fecha;
	$this->DIS_TOTAL = $dis_total;
	$this->DIS_PROCESADAS = $dis_procesadas;
	$this->DIS_PENDIENTES = $dis_pendientes;
	$this->DIS_CERRADAS = $dis_cerradas;
	$this->TSG_PROYECTOPRO_ID = $tsg_proyectopro_id;
}

/***********************************************  
* Getter y Setters                             *  
***********************************************/  

public function getDIS_ID()
{
 return $this->DIS_ID;
}

public function setDIS_ID($dis_id)
{
 $this->DIS_ID = $dis_id;
}

public function getDIS_FECHA()
{
 return $this->DIS_FECHA;
}

public function setDIS_FECHA($dis_fecha)
{
 $this->DIS_FECHA = $dis_fecha;
}

public function getDIS_TOTAL()
{
 return $this->DIS_TOTAL;
}

public function setDIS_TOTAL($dis_total)
{
 $this->DIS_TOTAL = $dis_total;
}

public function getDIS_PROCESADAS()
{
 return $this->DIS_PROCESADAS;
}

public function setDIS_PROCESADAS($dis_procesadas)
{
 $this->DIS_PROCESADAS = $dis_procesadas;
}

public function getDIS_PENDIENTES()
{
 return $this->DIS_PENDIENTES;
}

public function setDIS_PENDIENTES($dis_pendientes)
{
 $this->DIS_PENDIENTES = $dis_pendientes;
}

public function getDIS_CERRADAS()
{
 return $this->DIS_CERRADAS;
}

public function setDIS_CERRADAS($dis_cerradas)
{
 $this->DIS_CERRADAS = $dis_cerradas;
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