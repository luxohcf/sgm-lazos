<?php

/********************************************************  
* Clase Tsg_comentario_proyecto autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_comentario_proyecto{

/***********************************************  
* Atributos                                    *  
***********************************************/  

private $COP_ID; // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR úNICO DE LA TABLA'
private $COP_DESCRIP; // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCIóN'
private $TSG_PROYECTOPRO_ID; // INT(10) NOT NULL
private $TSG_USUARIOUSU_ID; // INT(10) NOT NULL
private $TSG_ARCHIVOARC_ID; // INT(10) NOT NULL
private $COP_FECHA_CREACION; // DATETIME DEFAULT NULL COMMENT 'FECHA DE CREACIóN'

/***********************************************  
* Constructores                                *  
***********************************************/  

function __construct($cop_id=null
					 ,$cop_descrip=null
					 ,$tsg_proyectopro_id=null
					 ,$tsg_usuariousu_id=null
					 ,$tsg_archivoarc_id=null
					 ,$cop_fecha_creacion=null
					)
{
	$this->COP_ID = $cop_id;
	$this->COP_DESCRIP = $cop_descrip;
	$this->TSG_PROYECTOPRO_ID = $tsg_proyectopro_id;
	$this->TSG_USUARIOUSU_ID = $tsg_usuariousu_id;
	$this->TSG_ARCHIVOARC_ID = $tsg_archivoarc_id;
	$this->COP_FECHA_CREACION = $cop_fecha_creacion;
}

/***********************************************  
* Getter y Setters                             *  
***********************************************/  

public function getCOP_ID()
{
 return $this->COP_ID;
}

public function setCOP_ID($cop_id)
{
 $this->COP_ID = $cop_id;
}

public function getCOP_DESCRIP()
{
 return $this->COP_DESCRIP;
}

public function setCOP_DESCRIP($cop_descrip)
{
 $this->COP_DESCRIP = $cop_descrip;
}

public function getTSG_PROYECTOPRO_ID()
{
 return $this->TSG_PROYECTOPRO_ID;
}

public function setTSG_PROYECTOPRO_ID($tsg_proyectopro_id)
{
 $this->TSG_PROYECTOPRO_ID = $tsg_proyectopro_id;
}

public function getTSG_USUARIOUSU_ID()
{
 return $this->TSG_USUARIOUSU_ID;
}

public function setTSG_USUARIOUSU_ID($tsg_usuariousu_id)
{
 $this->TSG_USUARIOUSU_ID = $tsg_usuariousu_id;
}

public function getTSG_ARCHIVOARC_ID()
{
 return $this->TSG_ARCHIVOARC_ID;
}

public function setTSG_ARCHIVOARC_ID($tsg_archivoarc_id)
{
 $this->TSG_ARCHIVOARC_ID = $tsg_archivoarc_id;
}

public function getCOP_FECHA_CREACION()
{
 return $this->COP_FECHA_CREACION;
}

public function setCOP_FECHA_CREACION($cop_fecha_creacion)
{
 $this->COP_FECHA_CREACION = $cop_fecha_creacion;
}

}
?>