<?php

include('..\Ent\Tsg_modulo.class.php');
/********************************************************  
* Clase Tsg_moduloDA autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_moduloDA {

/***********************************************  
* Atributos                                    *  
***********************************************/  

private $Host; // Hostname 
private $User; // Usuario 
private $Pass; // Password 
private $BBDD; // Base de datos 

/***********************************************  
* Constructor                                  *  
***********************************************/  

function __construct()
{
	$this->Host = "localhost";
	$this->User = "sgm";
	$this->Pass = "sgm";
	$this->BBDD = "SGM";
}
/***********************************************  
* Funciones de acceso a la capa de datos       *  
***********************************************/  

/***********************************************  
* Funcion bExisteTsg_modulo                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bExisteTsg_modulo(&$Tsg_modulo, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="SELECT 1 FROM TSG_MODULO WHERE ";
		if($Tsg_modulo["MOD_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_ID = '".$Tsg_modulo["MOD_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_NOMBRE = '".$Tsg_modulo["MOD_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL ROL'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_DESCRIP = '".$Tsg_modulo["MOD_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'INDICADOR DE REGISTRO ACTIVO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_ACTIVO = '".$Tsg_modulo["MOD_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_USU_CREADOR = '".$Tsg_modulo["MOD_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_FECHA_CREACION = '".$Tsg_modulo["MOD_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_FECHA_MODIFICACION = '".$Tsg_modulo["MOD_FECHA_MODIFICACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_ID_MOD_PADRE"] != NULL) // INT(11) DEFAULT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_ID_MOD_PADRE = ".$Tsg_modulo["MOD_ID_MOD_PADRE"];
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_RUTA_IMAGEN"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI DEFAULT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_RUTA_IMAGEN = '".$Tsg_modulo["MOD_RUTA_IMAGEN"]."'";
			$flag = TRUE;
		}
		$query .= ";";
		$mySqli = new mysqli($this->Host, $this->User, $this->Pass, $this->BBDD);
		if($mySqli->connect_errno)
		{
		    $aErrores["Error conexion MySql"] = $mySqli->connect_error;
		}
		$res = $mySqli->query($query);
		if($res->num_rows == 0)
		{
		  $mySqli->close();
		  return FALSE;
		}
		  $mySqli->close();
		return TRUE;
	}
	catch(Exception $e)
	{
		$aErrores["bExisteTsg_modulo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_modulo                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBuscarTsg_modulo(&$Tsg_modulo, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = false;
		$query ="SELECT ";
		$query.=     "MOD_ID ,";
		$query.=     "MOD_NOMBRE ,";
		$query.=     "MOD_DESCRIP ,";
		$query.=     "MOD_ACTIVO ,";
		$query.=     "MOD_USU_CREADOR ,";
		$query.=     "MOD_FECHA_CREACION ,";
		$query.=     "MOD_FECHA_MODIFICACION ,";
		$query.=     "MOD_ID_MOD_PADRE ,";
		$query.=     "MOD_RUTA_IMAGEN ";
		$query.=" FROM TSG_MODULO ";
		if($Tsg_modulo["MOD_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="MOD_ID = '".$Tsg_modulo["MOD_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="MOD_NOMBRE = '".$Tsg_modulo["MOD_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL ROL'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="MOD_DESCRIP = '".$Tsg_modulo["MOD_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'INDICADOR DE REGISTRO ACTIVO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="MOD_ACTIVO = '".$Tsg_modulo["MOD_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="MOD_USU_CREADOR = '".$Tsg_modulo["MOD_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="MOD_FECHA_CREACION = '".$Tsg_modulo["MOD_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="MOD_FECHA_MODIFICACION = '".$Tsg_modulo["MOD_FECHA_MODIFICACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_ID_MOD_PADRE"] != NULL) // INT(11) DEFAULT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="MOD_ID_MOD_PADRE = ".$Tsg_modulo["MOD_ID_MOD_PADRE"];
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_RUTA_IMAGEN"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI DEFAULT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="MOD_RUTA_IMAGEN = '".$Tsg_modulo["MOD_RUTA_IMAGEN"]."'";
			$flag = TRUE;
		}
		$query .= ";";
		$mySqli = new mysqli($this->Host, $this->User, $this->Pass, $this->BBDD);
		if($mySqli->connect_errno)
		{
		    $aErrores["Error conexion MySql"] = $mySqli->connect_error;
		}
		$res = $mySqli->query($query);
		if($mySqli->affected_rows > 0)
		{
			$x = 0;
			$Tsg_modulo = array();
			while($row = $res->fetch_assoc())
			{
				$Tsg_modulo[$x]['MOD_ID'] = $row['MOD_ID'];
				$Tsg_modulo[$x]['MOD_NOMBRE'] = $row['MOD_NOMBRE'];
				$Tsg_modulo[$x]['MOD_DESCRIP'] = $row['MOD_DESCRIP'];
				$Tsg_modulo[$x]['MOD_ACTIVO'] = $row['MOD_ACTIVO'];
				$Tsg_modulo[$x]['MOD_USU_CREADOR'] = $row['MOD_USU_CREADOR'];
				$Tsg_modulo[$x]['MOD_FECHA_CREACION'] = $row['MOD_FECHA_CREACION'];
				$Tsg_modulo[$x]['MOD_FECHA_MODIFICACION'] = $row['MOD_FECHA_MODIFICACION'];
				$Tsg_modulo[$x]['MOD_ID_MOD_PADRE'] = $row['MOD_ID_MOD_PADRE'];
				$Tsg_modulo[$x]['MOD_RUTA_IMAGEN'] = $row['MOD_RUTA_IMAGEN'];
				$x++;
			}
		  $mySqli->close();
		}
		else
		{
		  $aErrores["No hay datos"] = $query;
		  $mySqli->close();
		  return FALSE;
		}
		return TRUE;
	}
	catch(Exception $e)
	{
		$aErrores["bBuscarTsg_modulo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_modulo                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bInsertarTsg_modulo(&$Tsg_modulo, &$aErrores)
{
	try
	{
		/* Query aqui */
		$query ="INSERT INTO TSG_MODULO (";
		$query.="MOD_ID ,";
		$query.="MOD_NOMBRE ,";
		$query.="MOD_DESCRIP ,";
		$query.="MOD_ACTIVO ,";
		$query.="MOD_USU_CREADOR ,";
		$query.="MOD_FECHA_CREACION ,";
		$query.="MOD_FECHA_MODIFICACION ,";
		$query.="MOD_ID_MOD_PADRE ,";
		$query.="MOD_RUTA_IMAGEN ";
		$query.=")";
		$query.=" VALUES (";
		$query.="'".$Tsg_modulo["MOD_ID"]."',";
		$query.="'".$Tsg_modulo["MOD_NOMBRE"]."',";
		$query.="'".$Tsg_modulo["MOD_DESCRIP"]."',";
		$query.="'".$Tsg_modulo["MOD_ACTIVO"]."',";
		$query.="'".$Tsg_modulo["MOD_USU_CREADOR"]."',";
		$query.="'".$Tsg_modulo["MOD_FECHA_CREACION"]."',";
		$query.="'".$Tsg_modulo["MOD_FECHA_MODIFICACION"]."',";
		$query.= $Tsg_modulo["MOD_ID_MOD_PADRE"].",";
		$query.="'".$Tsg_modulo["MOD_RUTA_IMAGEN"]."'";
		$query.=")";
		$query.= ";";
		$mySqli = new mysqli($this->Host, $this->User, $this->Pass, $this->BBDD);
		if($mySqli->connect_errno)
		{
		    $aErrores["Error conexion MySql"] = $mySqli->connect_error;
		}
		$res = $mySqli->query($query);
		if($mySqli->affected_rows > 0)
		{
		  $Tsg_modulo = array();
		  $Tsg_modulo['ID_insercion'] = $mySqli->insert_id;
		  $mySqli->close();
		}
		else
		{
		  $aErrores["No se ha insertado el registro"] = $query;
		  $mySqli->close();
		  return FALSE;
		}
		return TRUE;
	}
	catch(Exception $e)
	{
		$aErrores["bInsertarTsg_modulo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_modulo                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bModificarTsg_modulo(&$Tsg_modulo, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_MODULO ";
		if($Tsg_modulo["MOD_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="MOD_ID = '".$Tsg_modulo["MOD_ID"]."',";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="MOD_NOMBRE = '".$Tsg_modulo["MOD_NOMBRE"]."',";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL ROL'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="MOD_DESCRIP = '".$Tsg_modulo["MOD_DESCRIP"]."',";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'INDICADOR DE REGISTRO ACTIVO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="MOD_ACTIVO = '".$Tsg_modulo["MOD_ACTIVO"]."',";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="MOD_USU_CREADOR = '".$Tsg_modulo["MOD_USU_CREADOR"]."',";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="MOD_FECHA_CREACION = '".$Tsg_modulo["MOD_FECHA_CREACION"]."',";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="MOD_FECHA_MODIFICACION = '".$Tsg_modulo["MOD_FECHA_MODIFICACION"]."',";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_ID_MOD_PADRE"] != NULL) // INT(11) DEFAULT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="MOD_ID_MOD_PADRE = ".$Tsg_modulo["MOD_ID_MOD_PADRE"].",";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_RUTA_IMAGEN"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI DEFAULT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="MOD_RUTA_IMAGEN = '".$Tsg_modulo["MOD_RUTA_IMAGEN"]."'";
			$flag = TRUE;
		}
		$flag = FALSE;
		$query =" WHERE ";
		if($Tsg_modulo["MOD_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_ID = '".$Tsg_modulo["MOD_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_NOMBRE = '".$Tsg_modulo["MOD_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL ROL'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_DESCRIP = '".$Tsg_modulo["MOD_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'INDICADOR DE REGISTRO ACTIVO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_ACTIVO = '".$Tsg_modulo["MOD_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_USU_CREADOR = '".$Tsg_modulo["MOD_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_FECHA_CREACION = '".$Tsg_modulo["MOD_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_FECHA_MODIFICACION = '".$Tsg_modulo["MOD_FECHA_MODIFICACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_ID_MOD_PADRE"] != NULL) // INT(11) DEFAULT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_ID_MOD_PADRE = ".$Tsg_modulo["MOD_ID_MOD_PADRE"];
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_RUTA_IMAGEN"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI DEFAULT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_RUTA_IMAGEN = '".$Tsg_modulo["MOD_RUTA_IMAGEN"]."'";
			$flag = TRUE;
		}
		$query .= ";";
		$mySqli = new mysqli($this->Host, $this->User, $this->Pass, $this->BBDD);
		if($mySqli->connect_errno)
		{
		    $aErrores["Error conexion MySql"] = $mySqli->connect_error;
		}
		$res = $mySqli->query($query);
		if($mySqli->affected_rows > 0)
		{
		  $Tsg_modulo = array();
		  $Tsg_modulo['N_Modificados'] = $mySqli->affected_rows;
		  $mySqli->close();
		}
		else
		{
		  $aErrores["No se ha modificado el registro"] = $query;
		  $mySqli->close();
		  return FALSE;
		}
		return TRUE;
	}
	catch(Exception $e)
	{
		$aErrores["bModificarTsg_modulo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_modulo                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bEliminarTsg_modulo(&$Tsg_modulo, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="DELETE FROM TSG_MODULO ";
		$query =" WHERE ";
		if($Tsg_modulo["MOD_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_ID = '".$Tsg_modulo["MOD_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_NOMBRE = '".$Tsg_modulo["MOD_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL ROL'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_DESCRIP = '".$Tsg_modulo["MOD_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'INDICADOR DE REGISTRO ACTIVO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_ACTIVO = '".$Tsg_modulo["MOD_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_USU_CREADOR = '".$Tsg_modulo["MOD_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_FECHA_CREACION = '".$Tsg_modulo["MOD_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_FECHA_MODIFICACION = '".$Tsg_modulo["MOD_FECHA_MODIFICACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_ID_MOD_PADRE"] != NULL) // INT(11) DEFAULT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_ID_MOD_PADRE = ".$Tsg_modulo["MOD_ID_MOD_PADRE"];
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_RUTA_IMAGEN"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI DEFAULT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_RUTA_IMAGEN = '".$Tsg_modulo["MOD_RUTA_IMAGEN"]."'";
			$flag = TRUE;
		}
		$query .= ";";
		$mySqli = new mysqli($this->Host, $this->User, $this->Pass, $this->BBDD);
		if($mySqli->connect_errno)
		{
		    $aErrores["Error conexion MySql"] = $mySqli->connect_error;
		}
		$res = $mySqli->query($query);
		if($mySqli->affected_rows > 0)
		{
		  $Tsg_modulo = array();
		  $Tsg_modulo['N_Eliminados'] = $mySqli->affected_rows;
		  $mySqli->close();
		}
		else
		{
		  $aErrores["No se ha eliminado el registro"] = $query;
		  $mySqli->close();
		  return FALSE;
		}
		return TRUE;
	}
	catch(Exception $e)
	{
		$aErrores["bEliminarTsg_modulo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_modulo                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBajaTsg_modulo(&$Tsg_modulo, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_MODULO SET FLAG_ACTIVO = 0 ";
		$query =" WHERE ";
		if($Tsg_modulo["MOD_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_ID = '".$Tsg_modulo["MOD_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_NOMBRE = '".$Tsg_modulo["MOD_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL ROL'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_DESCRIP = '".$Tsg_modulo["MOD_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'INDICADOR DE REGISTRO ACTIVO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_ACTIVO = '".$Tsg_modulo["MOD_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_USU_CREADOR = '".$Tsg_modulo["MOD_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_FECHA_CREACION = '".$Tsg_modulo["MOD_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_FECHA_MODIFICACION = '".$Tsg_modulo["MOD_FECHA_MODIFICACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_ID_MOD_PADRE"] != NULL) // INT(11) DEFAULT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_ID_MOD_PADRE = ".$Tsg_modulo["MOD_ID_MOD_PADRE"];
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_RUTA_IMAGEN"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI DEFAULT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_RUTA_IMAGEN = '".$Tsg_modulo["MOD_RUTA_IMAGEN"]."'";
			$flag = TRUE;
		}
		$query .= ";";
		$mySqli = new mysqli($this->Host, $this->User, $this->Pass, $this->BBDD);
		if($mySqli->connect_errno)
		{
		    $aErrores["Error conexion MySql"] = $mySqli->connect_error;
		}
		$res = $mySqli->query($query);
		if($mySqli->affected_rows > 0)
		{
		  $Tsg_modulo = array();
		  $Tsg_modulo['N_Bajas'] = $mySqli->affected_rows;
		  $mySqli->close();
		}
		else
		{
		  $aErrores["No se ha dado de baja el registro"] = $query;
		  $mySqli->close();
		  return FALSE;
		}
		return TRUE;
	}
	catch(Exception $e)
	{
		$aErrores["bBajaTsg_modulo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_modulo                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bAltaTsg_modulo(&$Tsg_modulo, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_MODULO SET FLAG_ACTIVO = 1 ";
		$query =" WHERE ";
		if($Tsg_modulo["MOD_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_ID = '".$Tsg_modulo["MOD_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_NOMBRE = '".$Tsg_modulo["MOD_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL ROL'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_DESCRIP = '".$Tsg_modulo["MOD_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'INDICADOR DE REGISTRO ACTIVO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_ACTIVO = '".$Tsg_modulo["MOD_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_USU_CREADOR = '".$Tsg_modulo["MOD_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_FECHA_CREACION = '".$Tsg_modulo["MOD_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_FECHA_MODIFICACION = '".$Tsg_modulo["MOD_FECHA_MODIFICACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_ID_MOD_PADRE"] != NULL) // INT(11) DEFAULT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_ID_MOD_PADRE = ".$Tsg_modulo["MOD_ID_MOD_PADRE"];
			$flag = TRUE;
		}
		if($Tsg_modulo["MOD_RUTA_IMAGEN"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI DEFAULT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="MOD_RUTA_IMAGEN = '".$Tsg_modulo["MOD_RUTA_IMAGEN"]."'";
			$flag = TRUE;
		}
		$query .= ";";
		$mySqli = new mysqli($this->Host, $this->User, $this->Pass, $this->BBDD);
		if($mySqli->connect_errno)
		{
		    $aErrores["Error conexion MySql"] = $mySqli->connect_error;
		}
		$res = $mySqli->query($query);
		if($mySqli->affected_rows > 0)
		{
		  $Tsg_modulo = array();
		  $Tsg_modulo['N_Bajas'] = $mySqli->affected_rows;
		  $mySqli->close();
		}
		else
		{
		  $aErrores["No se ha dado de baja el registro"] = $query;
		  $mySqli->close();
		  return FALSE;
		}
		return TRUE;
	}
	catch(Exception $e)
	{
		$aErrores["bAltaTsg_modulo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_modulo                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bValidarTsg_modulo(&$Tsg_modulo, &$aErrores)
{
	try
	{
		/* Query aqui */
/* Logica aqui */
		return TRUE;
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_modulo"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>