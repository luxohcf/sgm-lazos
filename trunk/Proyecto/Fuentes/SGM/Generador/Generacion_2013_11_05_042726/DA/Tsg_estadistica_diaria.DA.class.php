<?php

include('..\Ent\Tsg_estadistica_diaria.class.php');
/********************************************************  
* Clase Tsg_estadistica_diariaDA autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_estadistica_diariaDA {

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
* Funcion bExisteTsg_estadistica_diaria                 *  
* Parametros entrada:                          *  
*      $Tsg_estadistica_diaria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bExisteTsg_estadistica_diaria(&$Tsg_estadistica_diaria, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="SELECT 1 FROM TSG_ESTADISTICA_DIARIA WHERE ";
		if($Tsg_estadistica_diaria["DIS_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_ID = '".$Tsg_estadistica_diaria["DIS_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_FECHA"] != NULL) // INT(10) NOT NULL COMMENT 'FECHA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_FECHA = '".$Tsg_estadistica_diaria["DIS_FECHA"]."'";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_TOTAL"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL DE TICKETS'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_TOTAL = ".$Tsg_estadistica_diaria["DIS_TOTAL"];
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_PROCESADAS"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL PROCESADOS'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_PROCESADAS = '".$Tsg_estadistica_diaria["DIS_PROCESADAS"]."'";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_PENDIENTES"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL PENDIENTES'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_PENDIENTES = ".$Tsg_estadistica_diaria["DIS_PENDIENTES"];
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_CERRADAS"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL CERRADAS'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_CERRADAS = '".$Tsg_estadistica_diaria["DIS_CERRADAS"]."'";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_estadistica_diaria["TSG_PROYECTOPRO_ID"];
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
		$aErrores["bExisteTsg_estadistica_diaria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_estadistica_diaria                 *  
* Parametros entrada:                          *  
*      $Tsg_estadistica_diaria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBuscarTsg_estadistica_diaria(&$Tsg_estadistica_diaria, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = false;
		$query ="SELECT ";
		$query.=     "DIS_ID ,";
		$query.=     "DIS_FECHA ,";
		$query.=     "DIS_TOTAL ,";
		$query.=     "DIS_PROCESADAS ,";
		$query.=     "DIS_PENDIENTES ,";
		$query.=     "DIS_CERRADAS ,";
		$query.=     "TSG_PROYECTOPRO_ID ";
		$query.=" FROM TSG_ESTADISTICA_DIARIA ";
		if($Tsg_estadistica_diaria["DIS_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="DIS_ID = '".$Tsg_estadistica_diaria["DIS_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_FECHA"] != NULL) // INT(10) NOT NULL COMMENT 'FECHA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="DIS_FECHA = '".$Tsg_estadistica_diaria["DIS_FECHA"]."'";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_TOTAL"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL DE TICKETS'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="DIS_TOTAL = ".$Tsg_estadistica_diaria["DIS_TOTAL"];
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_PROCESADAS"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL PROCESADOS'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="DIS_PROCESADAS = '".$Tsg_estadistica_diaria["DIS_PROCESADAS"]."'";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_PENDIENTES"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL PENDIENTES'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="DIS_PENDIENTES = ".$Tsg_estadistica_diaria["DIS_PENDIENTES"];
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_CERRADAS"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL CERRADAS'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="DIS_CERRADAS = '".$Tsg_estadistica_diaria["DIS_CERRADAS"]."'";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_estadistica_diaria["TSG_PROYECTOPRO_ID"];
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
			$Tsg_estadistica_diaria = array();
			while($row = $res->fetch_assoc())
			{
				$Tsg_estadistica_diaria[$x]['DIS_ID'] = $row['DIS_ID'];
				$Tsg_estadistica_diaria[$x]['DIS_FECHA'] = $row['DIS_FECHA'];
				$Tsg_estadistica_diaria[$x]['DIS_TOTAL'] = $row['DIS_TOTAL'];
				$Tsg_estadistica_diaria[$x]['DIS_PROCESADAS'] = $row['DIS_PROCESADAS'];
				$Tsg_estadistica_diaria[$x]['DIS_PENDIENTES'] = $row['DIS_PENDIENTES'];
				$Tsg_estadistica_diaria[$x]['DIS_CERRADAS'] = $row['DIS_CERRADAS'];
				$Tsg_estadistica_diaria[$x]['TSG_PROYECTOPRO_ID'] = $row['TSG_PROYECTOPRO_ID'];
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
		$aErrores["bBuscarTsg_estadistica_diaria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_estadistica_diaria                 *  
* Parametros entrada:                          *  
*      $Tsg_estadistica_diaria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bInsertarTsg_estadistica_diaria(&$Tsg_estadistica_diaria, &$aErrores)
{
	try
	{
		/* Query aqui */
		$query ="INSERT INTO TSG_ESTADISTICA_DIARIA (";
		$query.="DIS_ID ,";
		$query.="DIS_FECHA ,";
		$query.="DIS_TOTAL ,";
		$query.="DIS_PROCESADAS ,";
		$query.="DIS_PENDIENTES ,";
		$query.="DIS_CERRADAS ,";
		$query.="TSG_PROYECTOPRO_ID ";
		$query.=")";
		$query.=" VALUES (";
		$query.="'".$Tsg_estadistica_diaria["DIS_ID"]."',";
		$query.="'".$Tsg_estadistica_diaria["DIS_FECHA"]."',";
		$query.= $Tsg_estadistica_diaria["DIS_TOTAL"].",";
		$query.="'".$Tsg_estadistica_diaria["DIS_PROCESADAS"]."',";
		$query.= $Tsg_estadistica_diaria["DIS_PENDIENTES"].",";
		$query.="'".$Tsg_estadistica_diaria["DIS_CERRADAS"]."',";
		$query.= $Tsg_estadistica_diaria["TSG_PROYECTOPRO_ID"]."";
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
		  $Tsg_estadistica_diaria = array();
		  $Tsg_estadistica_diaria['ID_insercion'] = $mySqli->insert_id;
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
		$aErrores["bInsertarTsg_estadistica_diaria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_estadistica_diaria                 *  
* Parametros entrada:                          *  
*      $Tsg_estadistica_diaria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bModificarTsg_estadistica_diaria(&$Tsg_estadistica_diaria, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_ESTADISTICA_DIARIA ";
		if($Tsg_estadistica_diaria["DIS_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="DIS_ID = '".$Tsg_estadistica_diaria["DIS_ID"]."',";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_FECHA"] != NULL) // INT(10) NOT NULL COMMENT 'FECHA'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="DIS_FECHA = '".$Tsg_estadistica_diaria["DIS_FECHA"]."',";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_TOTAL"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL DE TICKETS'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="DIS_TOTAL = ".$Tsg_estadistica_diaria["DIS_TOTAL"].",";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_PROCESADAS"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL PROCESADOS'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="DIS_PROCESADAS = '".$Tsg_estadistica_diaria["DIS_PROCESADAS"]."',";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_PENDIENTES"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL PENDIENTES'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="DIS_PENDIENTES = ".$Tsg_estadistica_diaria["DIS_PENDIENTES"].",";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_CERRADAS"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL CERRADAS'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="DIS_CERRADAS = '".$Tsg_estadistica_diaria["DIS_CERRADAS"]."',";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_estadistica_diaria["TSG_PROYECTOPRO_ID"]."";
			$flag = TRUE;
		}
		$flag = FALSE;
		$query =" WHERE ";
		if($Tsg_estadistica_diaria["DIS_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_ID = '".$Tsg_estadistica_diaria["DIS_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_FECHA"] != NULL) // INT(10) NOT NULL COMMENT 'FECHA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_FECHA = '".$Tsg_estadistica_diaria["DIS_FECHA"]."'";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_TOTAL"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL DE TICKETS'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_TOTAL = ".$Tsg_estadistica_diaria["DIS_TOTAL"];
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_PROCESADAS"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL PROCESADOS'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_PROCESADAS = '".$Tsg_estadistica_diaria["DIS_PROCESADAS"]."'";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_PENDIENTES"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL PENDIENTES'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_PENDIENTES = ".$Tsg_estadistica_diaria["DIS_PENDIENTES"];
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_CERRADAS"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL CERRADAS'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_CERRADAS = '".$Tsg_estadistica_diaria["DIS_CERRADAS"]."'";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_estadistica_diaria["TSG_PROYECTOPRO_ID"];
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
		  $Tsg_estadistica_diaria = array();
		  $Tsg_estadistica_diaria['N_Modificados'] = $mySqli->affected_rows;
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
		$aErrores["bModificarTsg_estadistica_diaria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_estadistica_diaria                 *  
* Parametros entrada:                          *  
*      $Tsg_estadistica_diaria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bEliminarTsg_estadistica_diaria(&$Tsg_estadistica_diaria, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="DELETE FROM TSG_ESTADISTICA_DIARIA ";
		$query =" WHERE ";
		if($Tsg_estadistica_diaria["DIS_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_ID = '".$Tsg_estadistica_diaria["DIS_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_FECHA"] != NULL) // INT(10) NOT NULL COMMENT 'FECHA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_FECHA = '".$Tsg_estadistica_diaria["DIS_FECHA"]."'";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_TOTAL"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL DE TICKETS'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_TOTAL = ".$Tsg_estadistica_diaria["DIS_TOTAL"];
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_PROCESADAS"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL PROCESADOS'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_PROCESADAS = '".$Tsg_estadistica_diaria["DIS_PROCESADAS"]."'";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_PENDIENTES"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL PENDIENTES'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_PENDIENTES = ".$Tsg_estadistica_diaria["DIS_PENDIENTES"];
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_CERRADAS"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL CERRADAS'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_CERRADAS = '".$Tsg_estadistica_diaria["DIS_CERRADAS"]."'";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_estadistica_diaria["TSG_PROYECTOPRO_ID"];
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
		  $Tsg_estadistica_diaria = array();
		  $Tsg_estadistica_diaria['N_Eliminados'] = $mySqli->affected_rows;
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
		$aErrores["bEliminarTsg_estadistica_diaria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_estadistica_diaria                 *  
* Parametros entrada:                          *  
*      $Tsg_estadistica_diaria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBajaTsg_estadistica_diaria(&$Tsg_estadistica_diaria, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_ESTADISTICA_DIARIA SET FLAG_ACTIVO = 0 ";
		$query =" WHERE ";
		if($Tsg_estadistica_diaria["DIS_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_ID = '".$Tsg_estadistica_diaria["DIS_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_FECHA"] != NULL) // INT(10) NOT NULL COMMENT 'FECHA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_FECHA = '".$Tsg_estadistica_diaria["DIS_FECHA"]."'";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_TOTAL"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL DE TICKETS'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_TOTAL = ".$Tsg_estadistica_diaria["DIS_TOTAL"];
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_PROCESADAS"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL PROCESADOS'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_PROCESADAS = '".$Tsg_estadistica_diaria["DIS_PROCESADAS"]."'";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_PENDIENTES"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL PENDIENTES'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_PENDIENTES = ".$Tsg_estadistica_diaria["DIS_PENDIENTES"];
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_CERRADAS"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL CERRADAS'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_CERRADAS = '".$Tsg_estadistica_diaria["DIS_CERRADAS"]."'";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_estadistica_diaria["TSG_PROYECTOPRO_ID"];
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
		  $Tsg_estadistica_diaria = array();
		  $Tsg_estadistica_diaria['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bBajaTsg_estadistica_diaria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_estadistica_diaria                 *  
* Parametros entrada:                          *  
*      $Tsg_estadistica_diaria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bAltaTsg_estadistica_diaria(&$Tsg_estadistica_diaria, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_ESTADISTICA_DIARIA SET FLAG_ACTIVO = 1 ";
		$query =" WHERE ";
		if($Tsg_estadistica_diaria["DIS_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_ID = '".$Tsg_estadistica_diaria["DIS_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_FECHA"] != NULL) // INT(10) NOT NULL COMMENT 'FECHA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_FECHA = '".$Tsg_estadistica_diaria["DIS_FECHA"]."'";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_TOTAL"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL DE TICKETS'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_TOTAL = ".$Tsg_estadistica_diaria["DIS_TOTAL"];
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_PROCESADAS"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL PROCESADOS'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_PROCESADAS = '".$Tsg_estadistica_diaria["DIS_PROCESADAS"]."'";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_PENDIENTES"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL PENDIENTES'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_PENDIENTES = ".$Tsg_estadistica_diaria["DIS_PENDIENTES"];
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["DIS_CERRADAS"] != NULL) // INT(10) NOT NULL COMMENT 'TOTAL CERRADAS'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="DIS_CERRADAS = '".$Tsg_estadistica_diaria["DIS_CERRADAS"]."'";
			$flag = TRUE;
		}
		if($Tsg_estadistica_diaria["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_estadistica_diaria["TSG_PROYECTOPRO_ID"];
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
		  $Tsg_estadistica_diaria = array();
		  $Tsg_estadistica_diaria['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bAltaTsg_estadistica_diaria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_estadistica_diaria                 *  
* Parametros entrada:                          *  
*      $Tsg_estadistica_diaria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bValidarTsg_estadistica_diaria(&$Tsg_estadistica_diaria, &$aErrores)
{
	try
	{
		/* Query aqui */
/* Logica aqui */
		return TRUE;
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_estadistica_diaria"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>