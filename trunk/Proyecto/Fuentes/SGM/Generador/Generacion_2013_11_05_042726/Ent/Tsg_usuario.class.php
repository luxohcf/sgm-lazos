<?php

/********************************************************  
* Clase Tsg_usuario autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_usuario{

/***********************************************  
* Atributos                                    *  
***********************************************/  

private $USU_ID; // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR úNICO DE LA TABLA'
private $USU_NOMBRE; // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE'
private $USU_APELLIDO; // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'APELLIDO DEL USUARIO'
private $USU_TELEFONO; // TINYINT(10) NOT NULL COMMENT 'TELéFONO DEL USUARIO'
private $USU_DIRECCION; // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'DIRECCIóN DEL USUARIO'
private $USU_FECHA_CREA; // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA DE CREACIóN SE USARA LA SECUENCIA DE TIMESTAMP PARA GUARDAR LA HORA Y LA FECHA.'
private $USU_FECHA_MOD; // DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'FECHA DE MODIFICACIóN SE GUARDARá CON LA SECUENCIA TIMESTAMP PARA GUARDAR LA HORA Y LA FECHA DE LA MODIFICACIóN.'
private $USU_RUT; // VARCHAR(50) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'SE DEFINE EL RUT DEL USUARIO SE CONSIDERA COMO VARCHAR YA QUE CONTIENEN NúMERO Y CARACTERES.'
private $USU_PASS; // VARCHAR(20) COLLATE UTF8_SPANISH_CI NOT NULL
private $USU_CORREO; // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'CORREO ELECTRóNICO DEL USUARIO'
private $USU_ACTIVO; // INT(2) NOT NULL COMMENT 'SE DEJA LA TABLA DE USUARIO CON LA OPCIóN PARA SABER SI EL USUARIO ESTA ACTIVO O INACTIVO EN LA BD DE MOSTRARA OCULTO SI SE ELIMINO POR SISTEMA. (1 O 0)'

/***********************************************  
* Constructores                                *  
***********************************************/  

function __construct($usu_id=null
					 ,$usu_nombre=null
					 ,$usu_apellido=null
					 ,$usu_telefono=null
					 ,$usu_direccion=null
					 ,$usu_fecha_crea=null
					 ,$usu_fecha_mod=null
					 ,$usu_rut=null
					 ,$usu_pass=null
					 ,$usu_correo=null
					 ,$usu_activo=null
					)
{
	$this->USU_ID = $usu_id;
	$this->USU_NOMBRE = $usu_nombre;
	$this->USU_APELLIDO = $usu_apellido;
	$this->USU_TELEFONO = $usu_telefono;
	$this->USU_DIRECCION = $usu_direccion;
	$this->USU_FECHA_CREA = $usu_fecha_crea;
	$this->USU_FECHA_MOD = $usu_fecha_mod;
	$this->USU_RUT = $usu_rut;
	$this->USU_PASS = $usu_pass;
	$this->USU_CORREO = $usu_correo;
	$this->USU_ACTIVO = $usu_activo;
}

/***********************************************  
* Getter y Setters                             *  
***********************************************/  

public function getUSU_ID()
{
 return $this->USU_ID;
}

public function setUSU_ID($usu_id)
{
 $this->USU_ID = $usu_id;
}

public function getUSU_NOMBRE()
{
 return $this->USU_NOMBRE;
}

public function setUSU_NOMBRE($usu_nombre)
{
 $this->USU_NOMBRE = $usu_nombre;
}

public function getUSU_APELLIDO()
{
 return $this->USU_APELLIDO;
}

public function setUSU_APELLIDO($usu_apellido)
{
 $this->USU_APELLIDO = $usu_apellido;
}

public function getUSU_TELEFONO()
{
 return $this->USU_TELEFONO;
}

public function setUSU_TELEFONO($usu_telefono)
{
 $this->USU_TELEFONO = $usu_telefono;
}

public function getUSU_DIRECCION()
{
 return $this->USU_DIRECCION;
}

public function setUSU_DIRECCION($usu_direccion)
{
 $this->USU_DIRECCION = $usu_direccion;
}

public function getUSU_FECHA_CREA()
{
 return $this->USU_FECHA_CREA;
}

public function setUSU_FECHA_CREA($usu_fecha_crea)
{
 $this->USU_FECHA_CREA = $usu_fecha_crea;
}

public function getUSU_FECHA_MOD()
{
 return $this->USU_FECHA_MOD;
}

public function setUSU_FECHA_MOD($usu_fecha_mod)
{
 $this->USU_FECHA_MOD = $usu_fecha_mod;
}

public function getUSU_RUT()
{
 return $this->USU_RUT;
}

public function setUSU_RUT($usu_rut)
{
 $this->USU_RUT = $usu_rut;
}

public function getUSU_PASS()
{
 return $this->USU_PASS;
}

public function setUSU_PASS($usu_pass)
{
 $this->USU_PASS = $usu_pass;
}

public function getUSU_CORREO()
{
 return $this->USU_CORREO;
}

public function setUSU_CORREO($usu_correo)
{
 $this->USU_CORREO = $usu_correo;
}

public function getUSU_ACTIVO()
{
 return $this->USU_ACTIVO;
}

public function setUSU_ACTIVO($usu_activo)
{
 $this->USU_ACTIVO = $usu_activo;
}

}
?>