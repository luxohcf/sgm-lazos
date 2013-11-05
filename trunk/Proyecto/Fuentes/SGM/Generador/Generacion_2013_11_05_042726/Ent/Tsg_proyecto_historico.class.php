<?php

/********************************************************  
* Clase Tsg_proyecto_historico autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_proyecto_historico{

/***********************************************  
* Atributos                                    *  
***********************************************/  

private $PRH_ID; // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR úNICO DE LA TABLA'
private $PRH_USUARIO; // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'USUARIO CREADOR'
private $PRH_FECHA; // DATETIME DEFAULT NULL COMMENT 'FECHA DE CREACIóN'
private $TSG_PROYECTOPRO_ID; // INT(10) NOT NULL
private $SQI_TIPO_PROYECTOTIP_ID; // INT(10) NOT NULL
private $TSG_ESTADO_PROYECTOEST_ID; // INT(10) NOT NULL

/***********************************************  
* Constructores                                *  
***********************************************/  

function __construct($prh_id=null
					 ,$prh_usuario=null
					 ,$prh_fecha=null
					 ,$tsg_proyectopro_id=null
					 ,$sqi_tipo_proyectotip_id=null
					 ,$tsg_estado_proyectoest_id=null
					)
{
	$this->PRH_ID = $prh_id;
	$this->PRH_USUARIO = $prh_usuario;
	$this->PRH_FECHA = $prh_fecha;
	$this->TSG_PROYECTOPRO_ID = $tsg_proyectopro_id;
	$this->SQI_TIPO_PROYECTOTIP_ID = $sqi_tipo_proyectotip_id;
	$this->TSG_ESTADO_PROYECTOEST_ID = $tsg_estado_proyectoest_id;
}

/***********************************************  
* Getter y Setters                             *  
***********************************************/  

public function getPRH_ID()
{
 return $this->PRH_ID;
}

public function setPRH_ID($prh_id)
{
 $this->PRH_ID = $prh_id;
}

public function getPRH_USUARIO()
{
 return $this->PRH_USUARIO;
}

public function setPRH_USUARIO($prh_usuario)
{
 $this->PRH_USUARIO = $prh_usuario;
}

public function getPRH_FECHA()
{
 return $this->PRH_FECHA;
}

public function setPRH_FECHA($prh_fecha)
{
 $this->PRH_FECHA = $prh_fecha;
}

public function getTSG_PROYECTOPRO_ID()
{
 return $this->TSG_PROYECTOPRO_ID;
}

public function setTSG_PROYECTOPRO_ID($tsg_proyectopro_id)
{
 $this->TSG_PROYECTOPRO_ID = $tsg_proyectopro_id;
}

public function getSQI_TIPO_PROYECTOTIP_ID()
{
 return $this->SQI_TIPO_PROYECTOTIP_ID;
}

public function setSQI_TIPO_PROYECTOTIP_ID($sqi_tipo_proyectotip_id)
{
 $this->SQI_TIPO_PROYECTOTIP_ID = $sqi_tipo_proyectotip_id;
}

public function getTSG_ESTADO_PROYECTOEST_ID()
{
 return $this->TSG_ESTADO_PROYECTOEST_ID;
}

public function setTSG_ESTADO_PROYECTOEST_ID($tsg_estado_proyectoest_id)
{
 $this->TSG_ESTADO_PROYECTOEST_ID = $tsg_estado_proyectoest_id;
}

}
?>