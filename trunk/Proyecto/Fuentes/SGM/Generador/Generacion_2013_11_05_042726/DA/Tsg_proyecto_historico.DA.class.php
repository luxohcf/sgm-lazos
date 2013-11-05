<?php

include('..\Ent\Tsg_proyecto_historico.class.php');
/********************************************************  
* Clase Tsg_proyecto_historicoDA autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_proyecto_historicoDA {

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
* Funcion bExisteTsg_proyecto_historico                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto_historico = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bExisteTsg_proyecto_historico(&$Tsg_proyecto_historico, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="SELECT 1 FROM TSG_PROYECTO_HISTORICO WHERE ";
		if($Tsg_proyecto_historico["PRH_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRH_ID = '".$Tsg_proyecto_historico["PRH_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["PRH_USUARIO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRH_USUARIO = '".$Tsg_proyecto_historico["PRH_USUARIO"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["PRH_FECHA"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRH_FECHA = '".$Tsg_proyecto_historico["PRH_FECHA"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_proyecto_historico["TSG_PROYECTOPRO_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["SQI_TIPO_PROYECTOTIP_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="SQI_TIPO_PROYECTOTIP_ID = ".$Tsg_proyecto_historico["SQI_TIPO_PROYECTOTIP_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["TSG_ESTADO_PROYECTOEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ESTADO_PROYECTOEST_ID = ".$Tsg_proyecto_historico["TSG_ESTADO_PROYECTOEST_ID"];
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
		$aErrores["bExisteTsg_proyecto_historico"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_proyecto_historico                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto_historico = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBuscarTsg_proyecto_historico(&$Tsg_proyecto_historico, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = false;
		$query ="SELECT ";
		$query.=     "PRH_ID ,";
		$query.=     "PRH_USUARIO ,";
		$query.=     "PRH_FECHA ,";
		$query.=     "TSG_PROYECTOPRO_ID ,";
		$query.=     "SQI_TIPO_PROYECTOTIP_ID ,";
		$query.=     "TSG_ESTADO_PROYECTOEST_ID ";
		$query.=" FROM TSG_PROYECTO_HISTORICO ";
		if($Tsg_proyecto_historico["PRH_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="PRH_ID = '".$Tsg_proyecto_historico["PRH_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["PRH_USUARIO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="PRH_USUARIO = '".$Tsg_proyecto_historico["PRH_USUARIO"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["PRH_FECHA"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="PRH_FECHA = '".$Tsg_proyecto_historico["PRH_FECHA"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_proyecto_historico["TSG_PROYECTOPRO_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["SQI_TIPO_PROYECTOTIP_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="SQI_TIPO_PROYECTOTIP_ID = ".$Tsg_proyecto_historico["SQI_TIPO_PROYECTOTIP_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["TSG_ESTADO_PROYECTOEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_ESTADO_PROYECTOEST_ID = ".$Tsg_proyecto_historico["TSG_ESTADO_PROYECTOEST_ID"];
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
			$Tsg_proyecto_historico = array();
			while($row = $res->fetch_assoc())
			{
				$Tsg_proyecto_historico[$x]['PRH_ID'] = $row['PRH_ID'];
				$Tsg_proyecto_historico[$x]['PRH_USUARIO'] = $row['PRH_USUARIO'];
				$Tsg_proyecto_historico[$x]['PRH_FECHA'] = $row['PRH_FECHA'];
				$Tsg_proyecto_historico[$x]['TSG_PROYECTOPRO_ID'] = $row['TSG_PROYECTOPRO_ID'];
				$Tsg_proyecto_historico[$x]['SQI_TIPO_PROYECTOTIP_ID'] = $row['SQI_TIPO_PROYECTOTIP_ID'];
				$Tsg_proyecto_historico[$x]['TSG_ESTADO_PROYECTOEST_ID'] = $row['TSG_ESTADO_PROYECTOEST_ID'];
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
		$aErrores["bBuscarTsg_proyecto_historico"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_proyecto_historico                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto_historico = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bInsertarTsg_proyecto_historico(&$Tsg_proyecto_historico, &$aErrores)
{
	try
	{
		/* Query aqui */
		$query ="INSERT INTO TSG_PROYECTO_HISTORICO (";
		$query.="PRH_ID ,";
		$query.="PRH_USUARIO ,";
		$query.="PRH_FECHA ,";
		$query.="TSG_PROYECTOPRO_ID ,";
		$query.="SQI_TIPO_PROYECTOTIP_ID ,";
		$query.="TSG_ESTADO_PROYECTOEST_ID ";
		$query.=")";
		$query.=" VALUES (";
		$query.="'".$Tsg_proyecto_historico["PRH_ID"]."',";
		$query.="'".$Tsg_proyecto_historico["PRH_USUARIO"]."',";
		$query.="'".$Tsg_proyecto_historico["PRH_FECHA"]."',";
		$query.= $Tsg_proyecto_historico["TSG_PROYECTOPRO_ID"].",";
		$query.= $Tsg_proyecto_historico["SQI_TIPO_PROYECTOTIP_ID"].",";
		$query.= $Tsg_proyecto_historico["TSG_ESTADO_PROYECTOEST_ID"]."";
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
		  $Tsg_proyecto_historico = array();
		  $Tsg_proyecto_historico['ID_insercion'] = $mySqli->insert_id;
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
		$aErrores["bInsertarTsg_proyecto_historico"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_proyecto_historico                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto_historico = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bModificarTsg_proyecto_historico(&$Tsg_proyecto_historico, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_PROYECTO_HISTORICO ";
		if($Tsg_proyecto_historico["PRH_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="PRH_ID = '".$Tsg_proyecto_historico["PRH_ID"]."',";
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["PRH_USUARIO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'USUARIO CREADOR'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="PRH_USUARIO = '".$Tsg_proyecto_historico["PRH_USUARIO"]."',";
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["PRH_FECHA"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="PRH_FECHA = '".$Tsg_proyecto_historico["PRH_FECHA"]."',";
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_proyecto_historico["TSG_PROYECTOPRO_ID"].",";
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["SQI_TIPO_PROYECTOTIP_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="SQI_TIPO_PROYECTOTIP_ID = ".$Tsg_proyecto_historico["SQI_TIPO_PROYECTOTIP_ID"].",";
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["TSG_ESTADO_PROYECTOEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_ESTADO_PROYECTOEST_ID = ".$Tsg_proyecto_historico["TSG_ESTADO_PROYECTOEST_ID"]."";
			$flag = TRUE;
		}
		$flag = FALSE;
		$query =" WHERE ";
		if($Tsg_proyecto_historico["PRH_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRH_ID = '".$Tsg_proyecto_historico["PRH_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["PRH_USUARIO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRH_USUARIO = '".$Tsg_proyecto_historico["PRH_USUARIO"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["PRH_FECHA"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRH_FECHA = '".$Tsg_proyecto_historico["PRH_FECHA"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_proyecto_historico["TSG_PROYECTOPRO_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["SQI_TIPO_PROYECTOTIP_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="SQI_TIPO_PROYECTOTIP_ID = ".$Tsg_proyecto_historico["SQI_TIPO_PROYECTOTIP_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["TSG_ESTADO_PROYECTOEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ESTADO_PROYECTOEST_ID = ".$Tsg_proyecto_historico["TSG_ESTADO_PROYECTOEST_ID"];
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
		  $Tsg_proyecto_historico = array();
		  $Tsg_proyecto_historico['N_Modificados'] = $mySqli->affected_rows;
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
		$aErrores["bModificarTsg_proyecto_historico"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_proyecto_historico                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto_historico = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bEliminarTsg_proyecto_historico(&$Tsg_proyecto_historico, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="DELETE FROM TSG_PROYECTO_HISTORICO ";
		$query =" WHERE ";
		if($Tsg_proyecto_historico["PRH_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRH_ID = '".$Tsg_proyecto_historico["PRH_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["PRH_USUARIO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRH_USUARIO = '".$Tsg_proyecto_historico["PRH_USUARIO"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["PRH_FECHA"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRH_FECHA = '".$Tsg_proyecto_historico["PRH_FECHA"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_proyecto_historico["TSG_PROYECTOPRO_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["SQI_TIPO_PROYECTOTIP_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="SQI_TIPO_PROYECTOTIP_ID = ".$Tsg_proyecto_historico["SQI_TIPO_PROYECTOTIP_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["TSG_ESTADO_PROYECTOEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ESTADO_PROYECTOEST_ID = ".$Tsg_proyecto_historico["TSG_ESTADO_PROYECTOEST_ID"];
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
		  $Tsg_proyecto_historico = array();
		  $Tsg_proyecto_historico['N_Eliminados'] = $mySqli->affected_rows;
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
		$aErrores["bEliminarTsg_proyecto_historico"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_proyecto_historico                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto_historico = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBajaTsg_proyecto_historico(&$Tsg_proyecto_historico, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_PROYECTO_HISTORICO SET FLAG_ACTIVO = 0 ";
		$query =" WHERE ";
		if($Tsg_proyecto_historico["PRH_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRH_ID = '".$Tsg_proyecto_historico["PRH_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["PRH_USUARIO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRH_USUARIO = '".$Tsg_proyecto_historico["PRH_USUARIO"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["PRH_FECHA"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRH_FECHA = '".$Tsg_proyecto_historico["PRH_FECHA"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_proyecto_historico["TSG_PROYECTOPRO_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["SQI_TIPO_PROYECTOTIP_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="SQI_TIPO_PROYECTOTIP_ID = ".$Tsg_proyecto_historico["SQI_TIPO_PROYECTOTIP_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["TSG_ESTADO_PROYECTOEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ESTADO_PROYECTOEST_ID = ".$Tsg_proyecto_historico["TSG_ESTADO_PROYECTOEST_ID"];
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
		  $Tsg_proyecto_historico = array();
		  $Tsg_proyecto_historico['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bBajaTsg_proyecto_historico"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_proyecto_historico                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto_historico = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bAltaTsg_proyecto_historico(&$Tsg_proyecto_historico, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_PROYECTO_HISTORICO SET FLAG_ACTIVO = 1 ";
		$query =" WHERE ";
		if($Tsg_proyecto_historico["PRH_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRH_ID = '".$Tsg_proyecto_historico["PRH_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["PRH_USUARIO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRH_USUARIO = '".$Tsg_proyecto_historico["PRH_USUARIO"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["PRH_FECHA"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRH_FECHA = '".$Tsg_proyecto_historico["PRH_FECHA"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_proyecto_historico["TSG_PROYECTOPRO_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["SQI_TIPO_PROYECTOTIP_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="SQI_TIPO_PROYECTOTIP_ID = ".$Tsg_proyecto_historico["SQI_TIPO_PROYECTOTIP_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto_historico["TSG_ESTADO_PROYECTOEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ESTADO_PROYECTOEST_ID = ".$Tsg_proyecto_historico["TSG_ESTADO_PROYECTOEST_ID"];
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
		  $Tsg_proyecto_historico = array();
		  $Tsg_proyecto_historico['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bAltaTsg_proyecto_historico"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_proyecto_historico                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto_historico = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bValidarTsg_proyecto_historico(&$Tsg_proyecto_historico, &$aErrores)
{
	try
	{
		/* Query aqui */
/* Logica aqui */
		return TRUE;
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_proyecto_historico"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>