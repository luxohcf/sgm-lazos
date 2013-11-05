<?php

include('..\Ent\Tsg_estado_ticket.class.php');
/********************************************************  
* Clase Tsg_estado_ticketDA autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_estado_ticketDA {

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
* Funcion bExisteTsg_estado_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_estado_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bExisteTsg_estado_ticket(&$Tsg_estado_ticket, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="SELECT 1 FROM TSG_ESTADO_TICKET WHERE ";
		if($Tsg_estado_ticket["EST_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="EST_ID = '".$Tsg_estado_ticket["EST_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_estado_ticket["EST_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL ESTADO DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="EST_NOMBRE = '".$Tsg_estado_ticket["EST_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_estado_ticket["EST_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL ESTADO DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="EST_DESCRIP = '".$Tsg_estado_ticket["EST_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_estado_ticket["EST_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="EST_ACTIVO = '".$Tsg_estado_ticket["EST_ACTIVO"]."'";
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
		$aErrores["bExisteTsg_estado_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_estado_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_estado_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBuscarTsg_estado_ticket(&$Tsg_estado_ticket, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = false;
		$query ="SELECT ";
		$query.=     "EST_ID ,";
		$query.=     "EST_NOMBRE ,";
		$query.=     "EST_DESCRIP ,";
		$query.=     "EST_ACTIVO ";
		$query.=" FROM TSG_ESTADO_TICKET ";
		if($Tsg_estado_ticket["EST_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="EST_ID = '".$Tsg_estado_ticket["EST_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_estado_ticket["EST_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL ESTADO DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="EST_NOMBRE = '".$Tsg_estado_ticket["EST_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_estado_ticket["EST_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL ESTADO DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="EST_DESCRIP = '".$Tsg_estado_ticket["EST_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_estado_ticket["EST_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="EST_ACTIVO = '".$Tsg_estado_ticket["EST_ACTIVO"]."'";
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
			$Tsg_estado_ticket = array();
			while($row = $res->fetch_assoc())
			{
				$Tsg_estado_ticket[$x]['EST_ID'] = $row['EST_ID'];
				$Tsg_estado_ticket[$x]['EST_NOMBRE'] = $row['EST_NOMBRE'];
				$Tsg_estado_ticket[$x]['EST_DESCRIP'] = $row['EST_DESCRIP'];
				$Tsg_estado_ticket[$x]['EST_ACTIVO'] = $row['EST_ACTIVO'];
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
		$aErrores["bBuscarTsg_estado_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_estado_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_estado_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bInsertarTsg_estado_ticket(&$Tsg_estado_ticket, &$aErrores)
{
	try
	{
		/* Query aqui */
		$query ="INSERT INTO TSG_ESTADO_TICKET (";
		$query.="EST_ID ,";
		$query.="EST_NOMBRE ,";
		$query.="EST_DESCRIP ,";
		$query.="EST_ACTIVO ";
		$query.=")";
		$query.=" VALUES (";
		$query.="'".$Tsg_estado_ticket["EST_ID"]."',";
		$query.="'".$Tsg_estado_ticket["EST_NOMBRE"]."',";
		$query.="'".$Tsg_estado_ticket["EST_DESCRIP"]."',";
		$query.="'".$Tsg_estado_ticket["EST_ACTIVO"]."'";
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
		  $Tsg_estado_ticket = array();
		  $Tsg_estado_ticket['ID_insercion'] = $mySqli->insert_id;
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
		$aErrores["bInsertarTsg_estado_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_estado_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_estado_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bModificarTsg_estado_ticket(&$Tsg_estado_ticket, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_ESTADO_TICKET ";
		if($Tsg_estado_ticket["EST_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="EST_ID = '".$Tsg_estado_ticket["EST_ID"]."',";
			$flag = TRUE;
		}
		if($Tsg_estado_ticket["EST_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL ESTADO DEL TICKET'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="EST_NOMBRE = '".$Tsg_estado_ticket["EST_NOMBRE"]."',";
			$flag = TRUE;
		}
		if($Tsg_estado_ticket["EST_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL ESTADO DEL TICKET'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="EST_DESCRIP = '".$Tsg_estado_ticket["EST_DESCRIP"]."',";
			$flag = TRUE;
		}
		if($Tsg_estado_ticket["EST_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="EST_ACTIVO = '".$Tsg_estado_ticket["EST_ACTIVO"]."'";
			$flag = TRUE;
		}
		$flag = FALSE;
		$query =" WHERE ";
		if($Tsg_estado_ticket["EST_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="EST_ID = '".$Tsg_estado_ticket["EST_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_estado_ticket["EST_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL ESTADO DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="EST_NOMBRE = '".$Tsg_estado_ticket["EST_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_estado_ticket["EST_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL ESTADO DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="EST_DESCRIP = '".$Tsg_estado_ticket["EST_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_estado_ticket["EST_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="EST_ACTIVO = '".$Tsg_estado_ticket["EST_ACTIVO"]."'";
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
		  $Tsg_estado_ticket = array();
		  $Tsg_estado_ticket['N_Modificados'] = $mySqli->affected_rows;
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
		$aErrores["bModificarTsg_estado_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_estado_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_estado_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bEliminarTsg_estado_ticket(&$Tsg_estado_ticket, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="DELETE FROM TSG_ESTADO_TICKET ";
		$query =" WHERE ";
		if($Tsg_estado_ticket["EST_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="EST_ID = '".$Tsg_estado_ticket["EST_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_estado_ticket["EST_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL ESTADO DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="EST_NOMBRE = '".$Tsg_estado_ticket["EST_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_estado_ticket["EST_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL ESTADO DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="EST_DESCRIP = '".$Tsg_estado_ticket["EST_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_estado_ticket["EST_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="EST_ACTIVO = '".$Tsg_estado_ticket["EST_ACTIVO"]."'";
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
		  $Tsg_estado_ticket = array();
		  $Tsg_estado_ticket['N_Eliminados'] = $mySqli->affected_rows;
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
		$aErrores["bEliminarTsg_estado_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_estado_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_estado_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBajaTsg_estado_ticket(&$Tsg_estado_ticket, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_ESTADO_TICKET SET FLAG_ACTIVO = 0 ";
		$query =" WHERE ";
		if($Tsg_estado_ticket["EST_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="EST_ID = '".$Tsg_estado_ticket["EST_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_estado_ticket["EST_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL ESTADO DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="EST_NOMBRE = '".$Tsg_estado_ticket["EST_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_estado_ticket["EST_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL ESTADO DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="EST_DESCRIP = '".$Tsg_estado_ticket["EST_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_estado_ticket["EST_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="EST_ACTIVO = '".$Tsg_estado_ticket["EST_ACTIVO"]."'";
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
		  $Tsg_estado_ticket = array();
		  $Tsg_estado_ticket['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bBajaTsg_estado_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_estado_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_estado_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bAltaTsg_estado_ticket(&$Tsg_estado_ticket, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_ESTADO_TICKET SET FLAG_ACTIVO = 1 ";
		$query =" WHERE ";
		if($Tsg_estado_ticket["EST_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="EST_ID = '".$Tsg_estado_ticket["EST_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_estado_ticket["EST_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL ESTADO DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="EST_NOMBRE = '".$Tsg_estado_ticket["EST_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_estado_ticket["EST_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL ESTADO DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="EST_DESCRIP = '".$Tsg_estado_ticket["EST_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_estado_ticket["EST_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="EST_ACTIVO = '".$Tsg_estado_ticket["EST_ACTIVO"]."'";
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
		  $Tsg_estado_ticket = array();
		  $Tsg_estado_ticket['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bAltaTsg_estado_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_estado_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_estado_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bValidarTsg_estado_ticket(&$Tsg_estado_ticket, &$aErrores)
{
	try
	{
		/* Query aqui */
/* Logica aqui */
		return TRUE;
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_estado_ticket"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>