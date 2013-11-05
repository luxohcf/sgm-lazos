<?php

/********************************************************  
* Clase Tsg_proyecto autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_proyecto{

/***********************************************  
* Atributos                                    *  
***********************************************/  

private $PRO_ID; // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA DEL PROYECTO IDENTIFICADOR úNICO'
private $PRO_NOMBRE; // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL PROYECTO'
private $PRO_DESCRIP; // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCIóN DEL PROYECTO'
private $PRO_USU_ID_JEFEPRO; // INT(10) NOT NULL COMMENT 'IDENTIFICADOR DEL JEFE DE PROYECTO'
private $PRO_DURACION; // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'DURACIóN DEL PROYECTO'
private $PRO_FECHA_INI; // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA INICIO DEL PROYECTO'
private $PRO_FECHA_TERM; // DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'FECHA TERMINO DEL PROYECTO'
private $PRO_FECHA_GARAN; // DATETIME NULL DEFAULT NULL COMMENT 'FECHA DE GARANTíA DEL PROYECTO'
private $PRO_ACTIVO; // TINYINT(1) NOT NULL COMMENT 'ELIMINACIóN LóGICA DEL SISTEMA.'
private $TSG_CLIENTECLI_ID; // INT(10) NOT NULL
private $TSG_ESTADO_PROYECTOEST_ID; // INT(10) NOT NULL
private $SQI_TIPO_PROYECTOTIP_ID; // INT(10) DEFAULT NULL
private $PRO_USU_CREADOR; // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
private $PRO_FECHA_CREACION; // DATETIME NOT NULL COMMENT 'FECHA CREACIóN'
private $PRO_FECHA_MODIFICACION; // DATETIME DEFAULT NULL COMMENT 'FECHA DE MODIFICACIóN'
private $PRO_DESTACADO; // TINYINT(1) DEFAULT NULL COMMENT 'DESTACADO (ESTRELLITA)'

/***********************************************  
* Constructores                                *  
***********************************************/  

function __construct($pro_id=null
					 ,$pro_nombre=null
					 ,$pro_descrip=null
					 ,$pro_usu_id_jefepro=null
					 ,$pro_duracion=null
					 ,$pro_fecha_ini=null
					 ,$pro_fecha_term=null
					 ,$pro_fecha_garan=null
					 ,$pro_activo=null
					 ,$tsg_clientecli_id=null
					 ,$tsg_estado_proyectoest_id=null
					 ,$sqi_tipo_proyectotip_id=null
					 ,$pro_usu_creador=null
					 ,$pro_fecha_creacion=null
					 ,$pro_fecha_modificacion=null
					 ,$pro_destacado=null
					)
{
	$this->PRO_ID = $pro_id;
	$this->PRO_NOMBRE = $pro_nombre;
	$this->PRO_DESCRIP = $pro_descrip;
	$this->PRO_USU_ID_JEFEPRO = $pro_usu_id_jefepro;
	$this->PRO_DURACION = $pro_duracion;
	$this->PRO_FECHA_INI = $pro_fecha_ini;
	$this->PRO_FECHA_TERM = $pro_fecha_term;
	$this->PRO_FECHA_GARAN = $pro_fecha_garan;
	$this->PRO_ACTIVO = $pro_activo;
	$this->TSG_CLIENTECLI_ID = $tsg_clientecli_id;
	$this->TSG_ESTADO_PROYECTOEST_ID = $tsg_estado_proyectoest_id;
	$this->SQI_TIPO_PROYECTOTIP_ID = $sqi_tipo_proyectotip_id;
	$this->PRO_USU_CREADOR = $pro_usu_creador;
	$this->PRO_FECHA_CREACION = $pro_fecha_creacion;
	$this->PRO_FECHA_MODIFICACION = $pro_fecha_modificacion;
	$this->PRO_DESTACADO = $pro_destacado;
}

/***********************************************  
* Getter y Setters                             *  
***********************************************/  

public function getPRO_ID()
{
 return $this->PRO_ID;
}

public function setPRO_ID($pro_id)
{
 $this->PRO_ID = $pro_id;
}

public function getPRO_NOMBRE()
{
 return $this->PRO_NOMBRE;
}

public function setPRO_NOMBRE($pro_nombre)
{
 $this->PRO_NOMBRE = $pro_nombre;
}

public function getPRO_DESCRIP()
{
 return $this->PRO_DESCRIP;
}

public function setPRO_DESCRIP($pro_descrip)
{
 $this->PRO_DESCRIP = $pro_descrip;
}

public function getPRO_USU_ID_JEFEPRO()
{
 return $this->PRO_USU_ID_JEFEPRO;
}

public function setPRO_USU_ID_JEFEPRO($pro_usu_id_jefepro)
{
 $this->PRO_USU_ID_JEFEPRO = $pro_usu_id_jefepro;
}

public function getPRO_DURACION()
{
 return $this->PRO_DURACION;
}

public function setPRO_DURACION($pro_duracion)
{
 $this->PRO_DURACION = $pro_duracion;
}

public function getPRO_FECHA_INI()
{
 return $this->PRO_FECHA_INI;
}

public function setPRO_FECHA_INI($pro_fecha_ini)
{
 $this->PRO_FECHA_INI = $pro_fecha_ini;
}

public function getPRO_FECHA_TERM()
{
 return $this->PRO_FECHA_TERM;
}

public function setPRO_FECHA_TERM($pro_fecha_term)
{
 $this->PRO_FECHA_TERM = $pro_fecha_term;
}

public function getPRO_FECHA_GARAN()
{
 return $this->PRO_FECHA_GARAN;
}

public function setPRO_FECHA_GARAN($pro_fecha_garan)
{
 $this->PRO_FECHA_GARAN = $pro_fecha_garan;
}

public function getPRO_ACTIVO()
{
 return $this->PRO_ACTIVO;
}

public function setPRO_ACTIVO($pro_activo)
{
 $this->PRO_ACTIVO = $pro_activo;
}

public function getTSG_CLIENTECLI_ID()
{
 return $this->TSG_CLIENTECLI_ID;
}

public function setTSG_CLIENTECLI_ID($tsg_clientecli_id)
{
 $this->TSG_CLIENTECLI_ID = $tsg_clientecli_id;
}

public function getTSG_ESTADO_PROYECTOEST_ID()
{
 return $this->TSG_ESTADO_PROYECTOEST_ID;
}

public function setTSG_ESTADO_PROYECTOEST_ID($tsg_estado_proyectoest_id)
{
 $this->TSG_ESTADO_PROYECTOEST_ID = $tsg_estado_proyectoest_id;
}

public function getSQI_TIPO_PROYECTOTIP_ID()
{
 return $this->SQI_TIPO_PROYECTOTIP_ID;
}

public function setSQI_TIPO_PROYECTOTIP_ID($sqi_tipo_proyectotip_id)
{
 $this->SQI_TIPO_PROYECTOTIP_ID = $sqi_tipo_proyectotip_id;
}

public function getPRO_USU_CREADOR()
{
 return $this->PRO_USU_CREADOR;
}

public function setPRO_USU_CREADOR($pro_usu_creador)
{
 $this->PRO_USU_CREADOR = $pro_usu_creador;
}

public function getPRO_FECHA_CREACION()
{
 return $this->PRO_FECHA_CREACION;
}

public function setPRO_FECHA_CREACION($pro_fecha_creacion)
{
 $this->PRO_FECHA_CREACION = $pro_fecha_creacion;
}

public function getPRO_FECHA_MODIFICACION()
{
 return $this->PRO_FECHA_MODIFICACION;
}

public function setPRO_FECHA_MODIFICACION($pro_fecha_modificacion)
{
 $this->PRO_FECHA_MODIFICACION = $pro_fecha_modificacion;
}

public function getPRO_DESTACADO()
{
 return $this->PRO_DESTACADO;
}

public function setPRO_DESTACADO($pro_destacado)
{
 $this->PRO_DESTACADO = $pro_destacado;
}

}
?>