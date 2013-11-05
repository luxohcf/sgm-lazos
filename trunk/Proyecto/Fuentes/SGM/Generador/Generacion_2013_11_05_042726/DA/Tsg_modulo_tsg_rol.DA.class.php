<?php

include('..\Ent\Tsg_modulo_tsg_rol.class.php');
/********************************************************  
* Clase Tsg_modulo_tsg_rolDA autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_modulo_tsg_rolDA {

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
* Funcion bExisteTsg_modulo_tsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo_tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bExisteTsg_modulo_tsg_rol(&$Tsg_modulo_tsg_rol, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="SELECT 1 FROM TSG_MODULO_TSG_ROL WHERE ";
		if($Tsg_modulo_tsg_rol["TSG_MODULOMOD_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_MODULOMOD_ID = ".$Tsg_modulo_tsg_rol["TSG_MODULOMOD_ID"];
			$flag = TRUE;
		}
		if($Tsg_modulo_tsg_rol["TSG_ROLROL_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ROLROL_ID = ".$Tsg_modulo_tsg_rol["TSG_ROLROL_ID"];
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
		$aErrores["bExisteTsg_modulo_tsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_modulo_tsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo_tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBuscarTsg_modulo_tsg_rol(&$Tsg_modulo_tsg_rol, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = false;
		$query ="SELECT ";
		$query.=     "TSG_MODULOMOD_ID ,";
		$query.=     "TSG_ROLROL_ID ";
		$query.=" FROM TSG_MODULO_TSG_ROL ";
		if($Tsg_modulo_tsg_rol["TSG_MODULOMOD_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_MODULOMOD_ID = ".$Tsg_modulo_tsg_rol["TSG_MODULOMOD_ID"];
			$flag = TRUE;
		}
		if($Tsg_modulo_tsg_rol["TSG_ROLROL_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_ROLROL_ID = ".$Tsg_modulo_tsg_rol["TSG_ROLROL_ID"];
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
			$Tsg_modulo_tsg_rol = array();
			while($row = $res->fetch_assoc())
			{
				$Tsg_modulo_tsg_rol[$x]['TSG_MODULOMOD_ID'] = $row['TSG_MODULOMOD_ID'];
				$Tsg_modulo_tsg_rol[$x]['TSG_ROLROL_ID'] = $row['TSG_ROLROL_ID'];
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
		$aErrores["bBuscarTsg_modulo_tsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_modulo_tsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo_tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bInsertarTsg_modulo_tsg_rol(&$Tsg_modulo_tsg_rol, &$aErrores)
{
	try
	{
		/* Query aqui */
		$query ="INSERT INTO TSG_MODULO_TSG_ROL (";
		$query.="TSG_MODULOMOD_ID ,";
		$query.="TSG_ROLROL_ID ";
		$query.=")";
		$query.=" VALUES (";
		$query.= $Tsg_modulo_tsg_rol["TSG_MODULOMOD_ID"].",";
		$query.= $Tsg_modulo_tsg_rol["TSG_ROLROL_ID"]."";
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
		  $Tsg_modulo_tsg_rol = array();
		  $Tsg_modulo_tsg_rol['ID_insercion'] = $mySqli->insert_id;
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
		$aErrores["bInsertarTsg_modulo_tsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_modulo_tsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo_tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bModificarTsg_modulo_tsg_rol(&$Tsg_modulo_tsg_rol, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_MODULO_TSG_ROL ";
		if($Tsg_modulo_tsg_rol["TSG_MODULOMOD_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_MODULOMOD_ID = ".$Tsg_modulo_tsg_rol["TSG_MODULOMOD_ID"].",";
			$flag = TRUE;
		}
		if($Tsg_modulo_tsg_rol["TSG_ROLROL_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_ROLROL_ID = ".$Tsg_modulo_tsg_rol["TSG_ROLROL_ID"]."";
			$flag = TRUE;
		}
		$flag = FALSE;
		$query =" WHERE ";
		if($Tsg_modulo_tsg_rol["TSG_MODULOMOD_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_MODULOMOD_ID = ".$Tsg_modulo_tsg_rol["TSG_MODULOMOD_ID"];
			$flag = TRUE;
		}
		if($Tsg_modulo_tsg_rol["TSG_ROLROL_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ROLROL_ID = ".$Tsg_modulo_tsg_rol["TSG_ROLROL_ID"];
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
		  $Tsg_modulo_tsg_rol = array();
		  $Tsg_modulo_tsg_rol['N_Modificados'] = $mySqli->affected_rows;
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
		$aErrores["bModificarTsg_modulo_tsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_modulo_tsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo_tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bEliminarTsg_modulo_tsg_rol(&$Tsg_modulo_tsg_rol, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="DELETE FROM TSG_MODULO_TSG_ROL ";
		$query =" WHERE ";
		if($Tsg_modulo_tsg_rol["TSG_MODULOMOD_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_MODULOMOD_ID = ".$Tsg_modulo_tsg_rol["TSG_MODULOMOD_ID"];
			$flag = TRUE;
		}
		if($Tsg_modulo_tsg_rol["TSG_ROLROL_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ROLROL_ID = ".$Tsg_modulo_tsg_rol["TSG_ROLROL_ID"];
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
		  $Tsg_modulo_tsg_rol = array();
		  $Tsg_modulo_tsg_rol['N_Eliminados'] = $mySqli->affected_rows;
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
		$aErrores["bEliminarTsg_modulo_tsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_modulo_tsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo_tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBajaTsg_modulo_tsg_rol(&$Tsg_modulo_tsg_rol, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_MODULO_TSG_ROL SET FLAG_ACTIVO = 0 ";
		$query =" WHERE ";
		if($Tsg_modulo_tsg_rol["TSG_MODULOMOD_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_MODULOMOD_ID = ".$Tsg_modulo_tsg_rol["TSG_MODULOMOD_ID"];
			$flag = TRUE;
		}
		if($Tsg_modulo_tsg_rol["TSG_ROLROL_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ROLROL_ID = ".$Tsg_modulo_tsg_rol["TSG_ROLROL_ID"];
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
		  $Tsg_modulo_tsg_rol = array();
		  $Tsg_modulo_tsg_rol['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bBajaTsg_modulo_tsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_modulo_tsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo_tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bAltaTsg_modulo_tsg_rol(&$Tsg_modulo_tsg_rol, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_MODULO_TSG_ROL SET FLAG_ACTIVO = 1 ";
		$query =" WHERE ";
		if($Tsg_modulo_tsg_rol["TSG_MODULOMOD_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_MODULOMOD_ID = ".$Tsg_modulo_tsg_rol["TSG_MODULOMOD_ID"];
			$flag = TRUE;
		}
		if($Tsg_modulo_tsg_rol["TSG_ROLROL_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ROLROL_ID = ".$Tsg_modulo_tsg_rol["TSG_ROLROL_ID"];
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
		  $Tsg_modulo_tsg_rol = array();
		  $Tsg_modulo_tsg_rol['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bAltaTsg_modulo_tsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_modulo_tsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo_tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bValidarTsg_modulo_tsg_rol(&$Tsg_modulo_tsg_rol, &$aErrores)
{
	try
	{
		/* Query aqui */
/* Logica aqui */
		return TRUE;
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_modulo_tsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>