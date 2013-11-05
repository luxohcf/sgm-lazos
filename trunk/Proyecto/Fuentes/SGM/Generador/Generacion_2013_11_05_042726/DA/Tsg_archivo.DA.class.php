<?php

include('..\Ent\Tsg_archivo.class.php');
/********************************************************  
* Clase Tsg_archivoDA autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_archivoDA {

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
* Funcion bExisteTsg_archivo                 *  
* Parametros entrada:                          *  
*      $Tsg_archivo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bExisteTsg_archivo(&$Tsg_archivo, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="SELECT 1 FROM TSG_ARCHIVO WHERE ";
		if($Tsg_archivo["ARC_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ARC_ID = '".$Tsg_archivo["ARC_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_archivo["ARC_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL ARCHIVO ADJUNTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ARC_NOMBRE = '".$Tsg_archivo["ARC_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_archivo["ARC_PESO"] != NULL) // FLOAT NOT NULL COMMENT 'PESO DEL ARCHIVO ADJUNTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ARC_PESO = '".$Tsg_archivo["ARC_PESO"]."'";
			$flag = TRUE;
		}
		if($Tsg_archivo["ARC_URL"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'URL DEL ARCHIVO ADJUNTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ARC_URL = '".$Tsg_archivo["ARC_URL"]."'";
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
		$aErrores["bExisteTsg_archivo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_archivo                 *  
* Parametros entrada:                          *  
*      $Tsg_archivo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBuscarTsg_archivo(&$Tsg_archivo, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = false;
		$query ="SELECT ";
		$query.=     "ARC_ID ,";
		$query.=     "ARC_NOMBRE ,";
		$query.=     "ARC_PESO ,";
		$query.=     "ARC_URL ";
		$query.=" FROM TSG_ARCHIVO ";
		if($Tsg_archivo["ARC_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="ARC_ID = '".$Tsg_archivo["ARC_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_archivo["ARC_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL ARCHIVO ADJUNTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="ARC_NOMBRE = '".$Tsg_archivo["ARC_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_archivo["ARC_PESO"] != NULL) // FLOAT NOT NULL COMMENT 'PESO DEL ARCHIVO ADJUNTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="ARC_PESO = '".$Tsg_archivo["ARC_PESO"]."'";
			$flag = TRUE;
		}
		if($Tsg_archivo["ARC_URL"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'URL DEL ARCHIVO ADJUNTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="ARC_URL = '".$Tsg_archivo["ARC_URL"]."'";
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
			$Tsg_archivo = array();
			while($row = $res->fetch_assoc())
			{
				$Tsg_archivo[$x]['ARC_ID'] = $row['ARC_ID'];
				$Tsg_archivo[$x]['ARC_NOMBRE'] = $row['ARC_NOMBRE'];
				$Tsg_archivo[$x]['ARC_PESO'] = $row['ARC_PESO'];
				$Tsg_archivo[$x]['ARC_URL'] = $row['ARC_URL'];
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
		$aErrores["bBuscarTsg_archivo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_archivo                 *  
* Parametros entrada:                          *  
*      $Tsg_archivo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bInsertarTsg_archivo(&$Tsg_archivo, &$aErrores)
{
	try
	{
		/* Query aqui */
		$query ="INSERT INTO TSG_ARCHIVO (";
		$query.="ARC_ID ,";
		$query.="ARC_NOMBRE ,";
		$query.="ARC_PESO ,";
		$query.="ARC_URL ";
		$query.=")";
		$query.=" VALUES (";
		$query.="'".$Tsg_archivo["ARC_ID"]."',";
		$query.="'".$Tsg_archivo["ARC_NOMBRE"]."',";
		$query.="'".$Tsg_archivo["ARC_PESO"]."',";
		$query.="'".$Tsg_archivo["ARC_URL"]."'";
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
		  $Tsg_archivo = array();
		  $Tsg_archivo['ID_insercion'] = $mySqli->insert_id;
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
		$aErrores["bInsertarTsg_archivo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_archivo                 *  
* Parametros entrada:                          *  
*      $Tsg_archivo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bModificarTsg_archivo(&$Tsg_archivo, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_ARCHIVO ";
		if($Tsg_archivo["ARC_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="ARC_ID = '".$Tsg_archivo["ARC_ID"]."',";
			$flag = TRUE;
		}
		if($Tsg_archivo["ARC_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL ARCHIVO ADJUNTO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="ARC_NOMBRE = '".$Tsg_archivo["ARC_NOMBRE"]."',";
			$flag = TRUE;
		}
		if($Tsg_archivo["ARC_PESO"] != NULL) // FLOAT NOT NULL COMMENT 'PESO DEL ARCHIVO ADJUNTO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="ARC_PESO = '".$Tsg_archivo["ARC_PESO"]."',";
			$flag = TRUE;
		}
		if($Tsg_archivo["ARC_URL"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'URL DEL ARCHIVO ADJUNTO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="ARC_URL = '".$Tsg_archivo["ARC_URL"]."'";
			$flag = TRUE;
		}
		$flag = FALSE;
		$query =" WHERE ";
		if($Tsg_archivo["ARC_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ARC_ID = '".$Tsg_archivo["ARC_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_archivo["ARC_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL ARCHIVO ADJUNTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ARC_NOMBRE = '".$Tsg_archivo["ARC_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_archivo["ARC_PESO"] != NULL) // FLOAT NOT NULL COMMENT 'PESO DEL ARCHIVO ADJUNTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ARC_PESO = '".$Tsg_archivo["ARC_PESO"]."'";
			$flag = TRUE;
		}
		if($Tsg_archivo["ARC_URL"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'URL DEL ARCHIVO ADJUNTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ARC_URL = '".$Tsg_archivo["ARC_URL"]."'";
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
		  $Tsg_archivo = array();
		  $Tsg_archivo['N_Modificados'] = $mySqli->affected_rows;
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
		$aErrores["bModificarTsg_archivo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_archivo                 *  
* Parametros entrada:                          *  
*      $Tsg_archivo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bEliminarTsg_archivo(&$Tsg_archivo, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="DELETE FROM TSG_ARCHIVO ";
		$query =" WHERE ";
		if($Tsg_archivo["ARC_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ARC_ID = '".$Tsg_archivo["ARC_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_archivo["ARC_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL ARCHIVO ADJUNTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ARC_NOMBRE = '".$Tsg_archivo["ARC_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_archivo["ARC_PESO"] != NULL) // FLOAT NOT NULL COMMENT 'PESO DEL ARCHIVO ADJUNTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ARC_PESO = '".$Tsg_archivo["ARC_PESO"]."'";
			$flag = TRUE;
		}
		if($Tsg_archivo["ARC_URL"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'URL DEL ARCHIVO ADJUNTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ARC_URL = '".$Tsg_archivo["ARC_URL"]."'";
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
		  $Tsg_archivo = array();
		  $Tsg_archivo['N_Eliminados'] = $mySqli->affected_rows;
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
		$aErrores["bEliminarTsg_archivo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_archivo                 *  
* Parametros entrada:                          *  
*      $Tsg_archivo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBajaTsg_archivo(&$Tsg_archivo, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_ARCHIVO SET FLAG_ACTIVO = 0 ";
		$query =" WHERE ";
		if($Tsg_archivo["ARC_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ARC_ID = '".$Tsg_archivo["ARC_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_archivo["ARC_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL ARCHIVO ADJUNTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ARC_NOMBRE = '".$Tsg_archivo["ARC_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_archivo["ARC_PESO"] != NULL) // FLOAT NOT NULL COMMENT 'PESO DEL ARCHIVO ADJUNTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ARC_PESO = '".$Tsg_archivo["ARC_PESO"]."'";
			$flag = TRUE;
		}
		if($Tsg_archivo["ARC_URL"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'URL DEL ARCHIVO ADJUNTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ARC_URL = '".$Tsg_archivo["ARC_URL"]."'";
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
		  $Tsg_archivo = array();
		  $Tsg_archivo['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bBajaTsg_archivo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_archivo                 *  
* Parametros entrada:                          *  
*      $Tsg_archivo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bAltaTsg_archivo(&$Tsg_archivo, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_ARCHIVO SET FLAG_ACTIVO = 1 ";
		$query =" WHERE ";
		if($Tsg_archivo["ARC_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ARC_ID = '".$Tsg_archivo["ARC_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_archivo["ARC_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL ARCHIVO ADJUNTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ARC_NOMBRE = '".$Tsg_archivo["ARC_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_archivo["ARC_PESO"] != NULL) // FLOAT NOT NULL COMMENT 'PESO DEL ARCHIVO ADJUNTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ARC_PESO = '".$Tsg_archivo["ARC_PESO"]."'";
			$flag = TRUE;
		}
		if($Tsg_archivo["ARC_URL"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'URL DEL ARCHIVO ADJUNTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="ARC_URL = '".$Tsg_archivo["ARC_URL"]."'";
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
		  $Tsg_archivo = array();
		  $Tsg_archivo['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bAltaTsg_archivo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_archivo                 *  
* Parametros entrada:                          *  
*      $Tsg_archivo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bValidarTsg_archivo(&$Tsg_archivo, &$aErrores)
{
	try
	{
		/* Query aqui */
/* Logica aqui */
		return TRUE;
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_archivo"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>