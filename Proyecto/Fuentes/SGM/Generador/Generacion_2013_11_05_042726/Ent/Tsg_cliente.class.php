<?php

/********************************************************  
* Clase Tsg_cliente autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_cliente{

/***********************************************  
* Atributos                                    *  
***********************************************/  

private $CLI_ID; // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR úNICO DE LA CLIENTE.'
private $CLI_NOMBRE; // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'CORRESPONDE AL NOMBRE DEL CLIENTE'
private $CLI_APELLIDO; // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'APELLIDO DEL CLIENTE'
private $CLI_CORREO; // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'CORREO ELECTRóNICO DEL CLIENTE'
private $CLI_EMPRESA; // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'NOMBRE DE LA EMPRESA EN LA CUAL SE ENCUENTRA POSICIONADO EL CLIENTE'
private $CLI_RUT; // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'RUT DEL CLIENTE'
private $CLI_DIRECCION; // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DIRECCIóN DEL CLIENTE'
private $CLI_FECHA_INI; // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA DE INICIO DEL CLIENTE'
private $CLI_FECHA_MOD; // DATETIME NULL DEFAULT NULL COMMENT 'FECHA DE MODIFICACIóN DEL CLIENTE'
private $CLI_ACTIVO; // TINYINT(1) NOT NULL COMMENT '\R\NSE DEJA LA TABLA DE CLIENTE CON LA OPCIóN PARA SABER SI EL USUARIO ESTA ACTIVO O INACTIVO EN LA BD SE MOSTRARA OCULTO SI SE ELIMINO POR SISTEMA. (1 O 0 ) ELIMINACIóN LOGICA.'
private $CLI_USU_CREADOR; // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'

/***********************************************  
* Constructores                                *  
***********************************************/  

function __construct($cli_id=null
					 ,$cli_nombre=null
					 ,$cli_apellido=null
					 ,$cli_correo=null
					 ,$cli_empresa=null
					 ,$cli_rut=null
					 ,$cli_direccion=null
					 ,$cli_fecha_ini=null
					 ,$cli_fecha_mod=null
					 ,$cli_activo=null
					 ,$cli_usu_creador=null
					)
{
	$this->CLI_ID = $cli_id;
	$this->CLI_NOMBRE = $cli_nombre;
	$this->CLI_APELLIDO = $cli_apellido;
	$this->CLI_CORREO = $cli_correo;
	$this->CLI_EMPRESA = $cli_empresa;
	$this->CLI_RUT = $cli_rut;
	$this->CLI_DIRECCION = $cli_direccion;
	$this->CLI_FECHA_INI = $cli_fecha_ini;
	$this->CLI_FECHA_MOD = $cli_fecha_mod;
	$this->CLI_ACTIVO = $cli_activo;
	$this->CLI_USU_CREADOR = $cli_usu_creador;
}

/***********************************************  
* Getter y Setters                             *  
***********************************************/  

public function getCLI_ID()
{
 return $this->CLI_ID;
}

public function setCLI_ID($cli_id)
{
 $this->CLI_ID = $cli_id;
}

public function getCLI_NOMBRE()
{
 return $this->CLI_NOMBRE;
}

public function setCLI_NOMBRE($cli_nombre)
{
 $this->CLI_NOMBRE = $cli_nombre;
}

public function getCLI_APELLIDO()
{
 return $this->CLI_APELLIDO;
}

public function setCLI_APELLIDO($cli_apellido)
{
 $this->CLI_APELLIDO = $cli_apellido;
}

public function getCLI_CORREO()
{
 return $this->CLI_CORREO;
}

public function setCLI_CORREO($cli_correo)
{
 $this->CLI_CORREO = $cli_correo;
}

public function getCLI_EMPRESA()
{
 return $this->CLI_EMPRESA;
}

public function setCLI_EMPRESA($cli_empresa)
{
 $this->CLI_EMPRESA = $cli_empresa;
}

public function getCLI_RUT()
{
 return $this->CLI_RUT;
}

public function setCLI_RUT($cli_rut)
{
 $this->CLI_RUT = $cli_rut;
}

public function getCLI_DIRECCION()
{
 return $this->CLI_DIRECCION;
}

public function setCLI_DIRECCION($cli_direccion)
{
 $this->CLI_DIRECCION = $cli_direccion;
}

public function getCLI_FECHA_INI()
{
 return $this->CLI_FECHA_INI;
}

public function setCLI_FECHA_INI($cli_fecha_ini)
{
 $this->CLI_FECHA_INI = $cli_fecha_ini;
}

public function getCLI_FECHA_MOD()
{
 return $this->CLI_FECHA_MOD;
}

public function setCLI_FECHA_MOD($cli_fecha_mod)
{
 $this->CLI_FECHA_MOD = $cli_fecha_mod;
}

public function getCLI_ACTIVO()
{
 return $this->CLI_ACTIVO;
}

public function setCLI_ACTIVO($cli_activo)
{
 $this->CLI_ACTIVO = $cli_activo;
}

public function getCLI_USU_CREADOR()
{
 return $this->CLI_USU_CREADOR;
}

public function setCLI_USU_CREADOR($cli_usu_creador)
{
 $this->CLI_USU_CREADOR = $cli_usu_creador;
}

}
?>