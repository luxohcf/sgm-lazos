<?php

/********************************************************  
* Clase Tsg_comentario_ticket autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_comentario_ticket{

/***********************************************  
* Atributos                                    *  
***********************************************/  

private $COM_ID; // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR úNICO DEL COMENTARIO'
private $COM_DESCRIP; // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCIóN DEL COMENTARIO ASOCIADO AL TICKET'
private $TSG_TICKETTIC_ID; // INT(10) NOT NULL
private $TSG_USUARIOUSU_ID; // INT(10) NOT NULL
private $TSG_ARCHIVOARC_ID; // INT(10) NOT NULL
private $COM_FECHA_CREACION; // DATETIME DEFAULT NULL COMMENT 'FECHA DE CREACIóN'

/***********************************************  
* Constructores                                *  
***********************************************/  

function __construct($com_id=null
					 ,$com_descrip=null
					 ,$tsg_tickettic_id=null
					 ,$tsg_usuariousu_id=null
					 ,$tsg_archivoarc_id=null
					 ,$com_fecha_creacion=null
					)
{
	$this->COM_ID = $com_id;
	$this->COM_DESCRIP = $com_descrip;
	$this->TSG_TICKETTIC_ID = $tsg_tickettic_id;
	$this->TSG_USUARIOUSU_ID = $tsg_usuariousu_id;
	$this->TSG_ARCHIVOARC_ID = $tsg_archivoarc_id;
	$this->COM_FECHA_CREACION = $com_fecha_creacion;
}

/***********************************************  
* Getter y Setters                             *  
***********************************************/  

public function getCOM_ID()
{
 return $this->COM_ID;
}

public function setCOM_ID($com_id)
{
 $this->COM_ID = $com_id;
}

public function getCOM_DESCRIP()
{
 return $this->COM_DESCRIP;
}

public function setCOM_DESCRIP($com_descrip)
{
 $this->COM_DESCRIP = $com_descrip;
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

public function getTSG_ARCHIVOARC_ID()
{
 return $this->TSG_ARCHIVOARC_ID;
}

public function setTSG_ARCHIVOARC_ID($tsg_archivoarc_id)
{
 $this->TSG_ARCHIVOARC_ID = $tsg_archivoarc_id;
}

public function getCOM_FECHA_CREACION()
{
 return $this->COM_FECHA_CREACION;
}

public function setCOM_FECHA_CREACION($com_fecha_creacion)
{
 $this->COM_FECHA_CREACION = $com_fecha_creacion;
}

}
?>