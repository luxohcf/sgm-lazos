<?php

/********************************************************  
* Clase Tsg_ticket autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_ticket{

/***********************************************  
* Atributos                                    *  
***********************************************/  

private $TIC_ID; // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR úNICO DEL TICKET'
private $TIC_NOMBRE; // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL TICKET'
private $TIC_FECHA_CREA; // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA DE CREACIóN DEL TICKET'
private $TSG_ESTADO_TICKETEST_ID; // INT(10) NOT NULL
private $TSG_USUARIOUSU_ID; // INT(10) NOT NULL
private $TSG_PROYECTOPRO_ID; // INT(10) NOT NULL
private $TSG_PRIORIDADPRI_ID; // INT(10) NOT NULL
private $TSG_CATEGORIACAT_ID; // INT(10) NOT NULL
private $TIC_DESTCADO; // TINYINT(1) DEFAULT NULL COMMENT 'DESATACADO (ESTRELLITA)'
private $TSG_TIC_CORREO_EN_COPIA; // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'CORREOS EN COPIA DEL CAMBIO DE ESTADO'

/***********************************************  
* Constructores                                *  
***********************************************/  

function __construct($tic_id=null
					 ,$tic_nombre=null
					 ,$tic_fecha_crea=null
					 ,$tsg_estado_ticketest_id=null
					 ,$tsg_usuariousu_id=null
					 ,$tsg_proyectopro_id=null
					 ,$tsg_prioridadpri_id=null
					 ,$tsg_categoriacat_id=null
					 ,$tic_destcado=null
					 ,$tsg_tic_correo_en_copia=null
					)
{
	$this->TIC_ID = $tic_id;
	$this->TIC_NOMBRE = $tic_nombre;
	$this->TIC_FECHA_CREA = $tic_fecha_crea;
	$this->TSG_ESTADO_TICKETEST_ID = $tsg_estado_ticketest_id;
	$this->TSG_USUARIOUSU_ID = $tsg_usuariousu_id;
	$this->TSG_PROYECTOPRO_ID = $tsg_proyectopro_id;
	$this->TSG_PRIORIDADPRI_ID = $tsg_prioridadpri_id;
	$this->TSG_CATEGORIACAT_ID = $tsg_categoriacat_id;
	$this->TIC_DESTCADO = $tic_destcado;
	$this->TSG_TIC_CORREO_EN_COPIA = $tsg_tic_correo_en_copia;
}

/***********************************************  
* Getter y Setters                             *  
***********************************************/  

public function getTIC_ID()
{
 return $this->TIC_ID;
}

public function setTIC_ID($tic_id)
{
 $this->TIC_ID = $tic_id;
}

public function getTIC_NOMBRE()
{
 return $this->TIC_NOMBRE;
}

public function setTIC_NOMBRE($tic_nombre)
{
 $this->TIC_NOMBRE = $tic_nombre;
}

public function getTIC_FECHA_CREA()
{
 return $this->TIC_FECHA_CREA;
}

public function setTIC_FECHA_CREA($tic_fecha_crea)
{
 $this->TIC_FECHA_CREA = $tic_fecha_crea;
}

public function getTSG_ESTADO_TICKETEST_ID()
{
 return $this->TSG_ESTADO_TICKETEST_ID;
}

public function setTSG_ESTADO_TICKETEST_ID($tsg_estado_ticketest_id)
{
 $this->TSG_ESTADO_TICKETEST_ID = $tsg_estado_ticketest_id;
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

public function getTIC_DESTCADO()
{
 return $this->TIC_DESTCADO;
}

public function setTIC_DESTCADO($tic_destcado)
{
 $this->TIC_DESTCADO = $tic_destcado;
}

public function getTSG_TIC_CORREO_EN_COPIA()
{
 return $this->TSG_TIC_CORREO_EN_COPIA;
}

public function setTSG_TIC_CORREO_EN_COPIA($tsg_tic_correo_en_copia)
{
 $this->TSG_TIC_CORREO_EN_COPIA = $tsg_tic_correo_en_copia;
}

}
?>