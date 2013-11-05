<?php

include('..\Ent\Tsg_prioridad.class.php');
/********************************************************  
* Clase Tsg_prioridadDA autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_prioridadDA {

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
* Funcion bExisteTsg_prioridad                 *  
* Parametros entrada:                          *  
*      $Tsg_prioridad = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bExisteTsg_prioridad(&$Tsg_prioridad, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="SELECT 1 FROM TSG_PRIORIDAD WHERE ";
		if($Tsg_prioridad["PRI_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA PRIORIDAD DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRI_ID = '".$Tsg_prioridad["PRI_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_prioridad["PRI_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DE LA PRIORIDAD'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRI_NOMBRE = '".$Tsg_prioridad["PRI_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_prioridad["PRI_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DE LA PRIORIDAD'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRI_DESCRIP = '".$Tsg_prioridad["PRI_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_prioridad["PRI_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRI_ACTIVO = '".$Tsg_prioridad["PRI_ACTIVO"]."'";
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
		$aErrores["bExisteTsg_prioridad"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_prioridad                 *  
* Parametros entrada:                          *  
*      $Tsg_prioridad = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBuscarTsg_prioridad(&$Tsg_prioridad, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = false;
		$query ="SELECT ";
		$query.=     "PRI_ID ,";
		$query.=     "PRI_NOMBRE ,";
		$query.=     "PRI_DESCRIP ,";
		$query.=     "PRI_ACTIVO ";
		$query.=" FROM TSG_PRIORIDAD ";
		if($Tsg_prioridad["PRI_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA PRIORIDAD DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="PRI_ID = '".$Tsg_prioridad["PRI_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_prioridad["PRI_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DE LA PRIORIDAD'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="PRI_NOMBRE = '".$Tsg_prioridad["PRI_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_prioridad["PRI_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DE LA PRIORIDAD'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="PRI_DESCRIP = '".$Tsg_prioridad["PRI_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_prioridad["PRI_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="PRI_ACTIVO = '".$Tsg_prioridad["PRI_ACTIVO"]."'";
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
			$Tsg_prioridad = array();
			while($row = $res->fetch_assoc())
			{
				$Tsg_prioridad[$x]['PRI_ID'] = $row['PRI_ID'];
				$Tsg_prioridad[$x]['PRI_NOMBRE'] = $row['PRI_NOMBRE'];
				$Tsg_prioridad[$x]['PRI_DESCRIP'] = $row['PRI_DESCRIP'];
				$Tsg_prioridad[$x]['PRI_ACTIVO'] = $row['PRI_ACTIVO'];
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
		$aErrores["bBuscarTsg_prioridad"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_prioridad                 *  
* Parametros entrada:                          *  
*      $Tsg_prioridad = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bInsertarTsg_prioridad(&$Tsg_prioridad, &$aErrores)
{
	try
	{
		/* Query aqui */
		$query ="INSERT INTO TSG_PRIORIDAD (";
		$query.="PRI_ID ,";
		$query.="PRI_NOMBRE ,";
		$query.="PRI_DESCRIP ,";
		$query.="PRI_ACTIVO ";
		$query.=")";
		$query.=" VALUES (";
		$query.="'".$Tsg_prioridad["PRI_ID"]."',";
		$query.="'".$Tsg_prioridad["PRI_NOMBRE"]."',";
		$query.="'".$Tsg_prioridad["PRI_DESCRIP"]."',";
		$query.="'".$Tsg_prioridad["PRI_ACTIVO"]."'";
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
		  $Tsg_prioridad = array();
		  $Tsg_prioridad['ID_insercion'] = $mySqli->insert_id;
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
		$aErrores["bInsertarTsg_prioridad"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_prioridad                 *  
* Parametros entrada:                          *  
*      $Tsg_prioridad = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bModificarTsg_prioridad(&$Tsg_prioridad, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_PRIORIDAD ";
		if($Tsg_prioridad["PRI_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA PRIORIDAD DEL TICKET'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="PRI_ID = '".$Tsg_prioridad["PRI_ID"]."',";
			$flag = TRUE;
		}
		if($Tsg_prioridad["PRI_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DE LA PRIORIDAD'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="PRI_NOMBRE = '".$Tsg_prioridad["PRI_NOMBRE"]."',";
			$flag = TRUE;
		}
		if($Tsg_prioridad["PRI_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DE LA PRIORIDAD'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="PRI_DESCRIP = '".$Tsg_prioridad["PRI_DESCRIP"]."',";
			$flag = TRUE;
		}
		if($Tsg_prioridad["PRI_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA.'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="PRI_ACTIVO = '".$Tsg_prioridad["PRI_ACTIVO"]."'";
			$flag = TRUE;
		}
		$flag = FALSE;
		$query =" WHERE ";
		if($Tsg_prioridad["PRI_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA PRIORIDAD DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRI_ID = '".$Tsg_prioridad["PRI_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_prioridad["PRI_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DE LA PRIORIDAD'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRI_NOMBRE = '".$Tsg_prioridad["PRI_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_prioridad["PRI_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DE LA PRIORIDAD'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRI_DESCRIP = '".$Tsg_prioridad["PRI_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_prioridad["PRI_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRI_ACTIVO = '".$Tsg_prioridad["PRI_ACTIVO"]."'";
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
		  $Tsg_prioridad = array();
		  $Tsg_prioridad['N_Modificados'] = $mySqli->affected_rows;
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
		$aErrores["bModificarTsg_prioridad"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_prioridad                 *  
* Parametros entrada:                          *  
*      $Tsg_prioridad = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bEliminarTsg_prioridad(&$Tsg_prioridad, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="DELETE FROM TSG_PRIORIDAD ";
		$query =" WHERE ";
		if($Tsg_prioridad["PRI_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA PRIORIDAD DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRI_ID = '".$Tsg_prioridad["PRI_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_prioridad["PRI_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DE LA PRIORIDAD'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRI_NOMBRE = '".$Tsg_prioridad["PRI_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_prioridad["PRI_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DE LA PRIORIDAD'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRI_DESCRIP = '".$Tsg_prioridad["PRI_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_prioridad["PRI_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRI_ACTIVO = '".$Tsg_prioridad["PRI_ACTIVO"]."'";
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
		  $Tsg_prioridad = array();
		  $Tsg_prioridad['N_Eliminados'] = $mySqli->affected_rows;
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
		$aErrores["bEliminarTsg_prioridad"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_prioridad                 *  
* Parametros entrada:                          *  
*      $Tsg_prioridad = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBajaTsg_prioridad(&$Tsg_prioridad, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_PRIORIDAD SET FLAG_ACTIVO = 0 ";
		$query =" WHERE ";
		if($Tsg_prioridad["PRI_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA PRIORIDAD DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRI_ID = '".$Tsg_prioridad["PRI_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_prioridad["PRI_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DE LA PRIORIDAD'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRI_NOMBRE = '".$Tsg_prioridad["PRI_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_prioridad["PRI_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DE LA PRIORIDAD'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRI_DESCRIP = '".$Tsg_prioridad["PRI_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_prioridad["PRI_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRI_ACTIVO = '".$Tsg_prioridad["PRI_ACTIVO"]."'";
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
		  $Tsg_prioridad = array();
		  $Tsg_prioridad['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bBajaTsg_prioridad"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_prioridad                 *  
* Parametros entrada:                          *  
*      $Tsg_prioridad = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bAltaTsg_prioridad(&$Tsg_prioridad, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_PRIORIDAD SET FLAG_ACTIVO = 1 ";
		$query =" WHERE ";
		if($Tsg_prioridad["PRI_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA PRIORIDAD DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRI_ID = '".$Tsg_prioridad["PRI_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_prioridad["PRI_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DE LA PRIORIDAD'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRI_NOMBRE = '".$Tsg_prioridad["PRI_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_prioridad["PRI_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DE LA PRIORIDAD'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRI_DESCRIP = '".$Tsg_prioridad["PRI_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_prioridad["PRI_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRI_ACTIVO = '".$Tsg_prioridad["PRI_ACTIVO"]."'";
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
		  $Tsg_prioridad = array();
		  $Tsg_prioridad['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bAltaTsg_prioridad"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_prioridad                 *  
* Parametros entrada:                          *  
*      $Tsg_prioridad = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bValidarTsg_prioridad(&$Tsg_prioridad, &$aErrores)
{
	try
	{
		/* Query aqui */
/* Logica aqui */
		return TRUE;
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_prioridad"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>