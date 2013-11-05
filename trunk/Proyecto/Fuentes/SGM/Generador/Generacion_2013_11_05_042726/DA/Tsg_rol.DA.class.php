<?php

include('..\Ent\Tsg_rol.class.php');
/********************************************************  
* Clase Tsg_rolDA autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_rolDA {

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
* Funcion bExisteTsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bExisteTsg_rol(&$Tsg_rol, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="SELECT 1 FROM TSG_ROL WHERE ";
		if($Tsg_rol["ROL_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_ID = '".$Tsg_rol["ROL_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'NOMBRE DEL ROL'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_NOMBRE = '".$Tsg_rol["ROL_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'DESCRIPCI驨 DEL ROL'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_DESCRIP = '".$Tsg_rol["ROL_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'INDICADOR DE REGISTRO ACTIVO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_ACTIVO = '".$Tsg_rol["ROL_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_USU_CREADOR = '".$Tsg_rol["ROL_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_FECHA_CREACION = '".$Tsg_rol["ROL_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_FECHA_MODIFICACION = '".$Tsg_rol["ROL_FECHA_MODIFICACION"]."'";
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
		$aErrores["bExisteTsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBuscarTsg_rol(&$Tsg_rol, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = false;
		$query ="SELECT ";
		$query.=     "ROL_ID ,";
		$query.=     "ROL_NOMBRE ,";
		$query.=     "ROL_DESCRIP ,";
		$query.=     "ROL_ACTIVO ,";
		$query.=     "ROL_USU_CREADOR ,";
		$query.=     "ROL_FECHA_CREACION ,";
		$query.=     "ROL_FECHA_MODIFICACION ";
		$query.=" FROM TSG_ROL ";
		if($Tsg_rol["ROL_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="ROL_ID = '".$Tsg_rol["ROL_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'NOMBRE DEL ROL'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="ROL_NOMBRE = '".$Tsg_rol["ROL_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'DESCRIPCI驨 DEL ROL'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="ROL_DESCRIP = '".$Tsg_rol["ROL_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'INDICADOR DE REGISTRO ACTIVO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="ROL_ACTIVO = '".$Tsg_rol["ROL_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="ROL_USU_CREADOR = '".$Tsg_rol["ROL_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="ROL_FECHA_CREACION = '".$Tsg_rol["ROL_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="ROL_FECHA_MODIFICACION = '".$Tsg_rol["ROL_FECHA_MODIFICACION"]."'";
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
			$Tsg_rol = array();
			while($row = $res->fetch_assoc())
			{
				$Tsg_rol[$x]['ROL_ID'] = $row['ROL_ID'];
				$Tsg_rol[$x]['ROL_NOMBRE'] = $row['ROL_NOMBRE'];
				$Tsg_rol[$x]['ROL_DESCRIP'] = $row['ROL_DESCRIP'];
				$Tsg_rol[$x]['ROL_ACTIVO'] = $row['ROL_ACTIVO'];
				$Tsg_rol[$x]['ROL_USU_CREADOR'] = $row['ROL_USU_CREADOR'];
				$Tsg_rol[$x]['ROL_FECHA_CREACION'] = $row['ROL_FECHA_CREACION'];
				$Tsg_rol[$x]['ROL_FECHA_MODIFICACION'] = $row['ROL_FECHA_MODIFICACION'];
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
		$aErrores["bBuscarTsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bInsertarTsg_rol(&$Tsg_rol, &$aErrores)
{
	try
	{
		/* Query aqui */
		$query ="INSERT INTO TSG_ROL (";
		$query.="ROL_ID ,";
		$query.="ROL_NOMBRE ,";
		$query.="ROL_DESCRIP ,";
		$query.="ROL_ACTIVO ,";
		$query.="ROL_USU_CREADOR ,";
		$query.="ROL_FECHA_CREACION ,";
		$query.="ROL_FECHA_MODIFICACION ";
		$query.=")";
		$query.=" VALUES (";
		$query.="'".$Tsg_rol["ROL_ID"]."',";
		$query.="'".$Tsg_rol["ROL_NOMBRE"]."',";
		$query.="'".$Tsg_rol["ROL_DESCRIP"]."',";
		$query.="'".$Tsg_rol["ROL_ACTIVO"]."',";
		$query.="'".$Tsg_rol["ROL_USU_CREADOR"]."',";
		$query.="'".$Tsg_rol["ROL_FECHA_CREACION"]."',";
		$query.="'".$Tsg_rol["ROL_FECHA_MODIFICACION"]."'";
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
		  $Tsg_rol = array();
		  $Tsg_rol['ID_insercion'] = $mySqli->insert_id;
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
		$aErrores["bInsertarTsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bModificarTsg_rol(&$Tsg_rol, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_ROL ";
		if($Tsg_rol["ROL_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="ROL_ID = '".$Tsg_rol["ROL_ID"]."',";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'NOMBRE DEL ROL'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="ROL_NOMBRE = '".$Tsg_rol["ROL_NOMBRE"]."',";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'DESCRIPCI驨 DEL ROL'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="ROL_DESCRIP = '".$Tsg_rol["ROL_DESCRIP"]."',";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'INDICADOR DE REGISTRO ACTIVO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="ROL_ACTIVO = '".$Tsg_rol["ROL_ACTIVO"]."',";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="ROL_USU_CREADOR = '".$Tsg_rol["ROL_USU_CREADOR"]."',";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="ROL_FECHA_CREACION = '".$Tsg_rol["ROL_FECHA_CREACION"]."',";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA MODIFICACI驨'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="ROL_FECHA_MODIFICACION = '".$Tsg_rol["ROL_FECHA_MODIFICACION"]."'";
			$flag = TRUE;
		}
		$flag = FALSE;
		$query =" WHERE ";
		if($Tsg_rol["ROL_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_ID = '".$Tsg_rol["ROL_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'NOMBRE DEL ROL'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_NOMBRE = '".$Tsg_rol["ROL_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'DESCRIPCI驨 DEL ROL'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_DESCRIP = '".$Tsg_rol["ROL_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'INDICADOR DE REGISTRO ACTIVO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_ACTIVO = '".$Tsg_rol["ROL_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_USU_CREADOR = '".$Tsg_rol["ROL_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_FECHA_CREACION = '".$Tsg_rol["ROL_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_FECHA_MODIFICACION = '".$Tsg_rol["ROL_FECHA_MODIFICACION"]."'";
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
		  $Tsg_rol = array();
		  $Tsg_rol['N_Modificados'] = $mySqli->affected_rows;
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
		$aErrores["bModificarTsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bEliminarTsg_rol(&$Tsg_rol, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="DELETE FROM TSG_ROL ";
		$query =" WHERE ";
		if($Tsg_rol["ROL_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_ID = '".$Tsg_rol["ROL_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'NOMBRE DEL ROL'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_NOMBRE = '".$Tsg_rol["ROL_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'DESCRIPCI驨 DEL ROL'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_DESCRIP = '".$Tsg_rol["ROL_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'INDICADOR DE REGISTRO ACTIVO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_ACTIVO = '".$Tsg_rol["ROL_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_USU_CREADOR = '".$Tsg_rol["ROL_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_FECHA_CREACION = '".$Tsg_rol["ROL_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_FECHA_MODIFICACION = '".$Tsg_rol["ROL_FECHA_MODIFICACION"]."'";
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
		  $Tsg_rol = array();
		  $Tsg_rol['N_Eliminados'] = $mySqli->affected_rows;
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
		$aErrores["bEliminarTsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBajaTsg_rol(&$Tsg_rol, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_ROL SET FLAG_ACTIVO = 0 ";
		$query =" WHERE ";
		if($Tsg_rol["ROL_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_ID = '".$Tsg_rol["ROL_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'NOMBRE DEL ROL'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_NOMBRE = '".$Tsg_rol["ROL_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'DESCRIPCI驨 DEL ROL'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_DESCRIP = '".$Tsg_rol["ROL_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'INDICADOR DE REGISTRO ACTIVO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_ACTIVO = '".$Tsg_rol["ROL_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_USU_CREADOR = '".$Tsg_rol["ROL_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_FECHA_CREACION = '".$Tsg_rol["ROL_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_FECHA_MODIFICACION = '".$Tsg_rol["ROL_FECHA_MODIFICACION"]."'";
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
		  $Tsg_rol = array();
		  $Tsg_rol['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bBajaTsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bAltaTsg_rol(&$Tsg_rol, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_ROL SET FLAG_ACTIVO = 1 ";
		$query =" WHERE ";
		if($Tsg_rol["ROL_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_ID = '".$Tsg_rol["ROL_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'NOMBRE DEL ROL'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_NOMBRE = '".$Tsg_rol["ROL_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'DESCRIPCI驨 DEL ROL'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_DESCRIP = '".$Tsg_rol["ROL_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'INDICADOR DE REGISTRO ACTIVO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_ACTIVO = '".$Tsg_rol["ROL_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_USU_CREADOR = '".$Tsg_rol["ROL_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_FECHA_CREACION = '".$Tsg_rol["ROL_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_rol["ROL_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ROL_FECHA_MODIFICACION = '".$Tsg_rol["ROL_FECHA_MODIFICACION"]."'";
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
		  $Tsg_rol = array();
		  $Tsg_rol['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bAltaTsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bValidarTsg_rol(&$Tsg_rol, &$aErrores)
{
	try
	{
		/* Query aqui */
/* Logica aqui */
		return TRUE;
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>