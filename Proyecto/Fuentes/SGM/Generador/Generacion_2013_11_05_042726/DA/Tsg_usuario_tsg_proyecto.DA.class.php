<?php

include('..\Ent\Tsg_usuario_tsg_proyecto.class.php');
/********************************************************  
* Clase Tsg_usuario_tsg_proyectoDA autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_usuario_tsg_proyectoDA {

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
* Funcion bExisteTsg_usuario_tsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario_tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bExisteTsg_usuario_tsg_proyecto(&$Tsg_usuario_tsg_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="SELECT 1 FROM TSG_USUARIO_TSG_PROYECTO WHERE ";
		if($Tsg_usuario_tsg_proyecto["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_usuario_tsg_proyecto["TSG_USUARIOUSU_ID"];
			$flag = TRUE;
		}
		if($Tsg_usuario_tsg_proyecto["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_usuario_tsg_proyecto["TSG_PROYECTOPRO_ID"];
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
		$aErrores["bExisteTsg_usuario_tsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_usuario_tsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario_tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBuscarTsg_usuario_tsg_proyecto(&$Tsg_usuario_tsg_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = false;
		$query ="SELECT ";
		$query.=     "TSG_USUARIOUSU_ID ,";
		$query.=     "TSG_PROYECTOPRO_ID ";
		$query.=" FROM TSG_USUARIO_TSG_PROYECTO ";
		if($Tsg_usuario_tsg_proyecto["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_usuario_tsg_proyecto["TSG_USUARIOUSU_ID"];
			$flag = TRUE;
		}
		if($Tsg_usuario_tsg_proyecto["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_usuario_tsg_proyecto["TSG_PROYECTOPRO_ID"];
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
			$Tsg_usuario_tsg_proyecto = array();
			while($row = $res->fetch_assoc())
			{
				$Tsg_usuario_tsg_proyecto[$x]['TSG_USUARIOUSU_ID'] = $row['TSG_USUARIOUSU_ID'];
				$Tsg_usuario_tsg_proyecto[$x]['TSG_PROYECTOPRO_ID'] = $row['TSG_PROYECTOPRO_ID'];
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
		$aErrores["bBuscarTsg_usuario_tsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_usuario_tsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario_tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bInsertarTsg_usuario_tsg_proyecto(&$Tsg_usuario_tsg_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$query ="INSERT INTO TSG_USUARIO_TSG_PROYECTO (";
		$query.="TSG_USUARIOUSU_ID ,";
		$query.="TSG_PROYECTOPRO_ID ";
		$query.=")";
		$query.=" VALUES (";
		$query.= $Tsg_usuario_tsg_proyecto["TSG_USUARIOUSU_ID"].",";
		$query.= $Tsg_usuario_tsg_proyecto["TSG_PROYECTOPRO_ID"]."";
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
		  $Tsg_usuario_tsg_proyecto = array();
		  $Tsg_usuario_tsg_proyecto['ID_insercion'] = $mySqli->insert_id;
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
		$aErrores["bInsertarTsg_usuario_tsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_usuario_tsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario_tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bModificarTsg_usuario_tsg_proyecto(&$Tsg_usuario_tsg_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_USUARIO_TSG_PROYECTO ";
		if($Tsg_usuario_tsg_proyecto["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_usuario_tsg_proyecto["TSG_USUARIOUSU_ID"].",";
			$flag = TRUE;
		}
		if($Tsg_usuario_tsg_proyecto["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_usuario_tsg_proyecto["TSG_PROYECTOPRO_ID"]."";
			$flag = TRUE;
		}
		$flag = FALSE;
		$query =" WHERE ";
		if($Tsg_usuario_tsg_proyecto["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_usuario_tsg_proyecto["TSG_USUARIOUSU_ID"];
			$flag = TRUE;
		}
		if($Tsg_usuario_tsg_proyecto["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_usuario_tsg_proyecto["TSG_PROYECTOPRO_ID"];
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
		  $Tsg_usuario_tsg_proyecto = array();
		  $Tsg_usuario_tsg_proyecto['N_Modificados'] = $mySqli->affected_rows;
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
		$aErrores["bModificarTsg_usuario_tsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_usuario_tsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario_tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bEliminarTsg_usuario_tsg_proyecto(&$Tsg_usuario_tsg_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="DELETE FROM TSG_USUARIO_TSG_PROYECTO ";
		$query =" WHERE ";
		if($Tsg_usuario_tsg_proyecto["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_usuario_tsg_proyecto["TSG_USUARIOUSU_ID"];
			$flag = TRUE;
		}
		if($Tsg_usuario_tsg_proyecto["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_usuario_tsg_proyecto["TSG_PROYECTOPRO_ID"];
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
		  $Tsg_usuario_tsg_proyecto = array();
		  $Tsg_usuario_tsg_proyecto['N_Eliminados'] = $mySqli->affected_rows;
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
		$aErrores["bEliminarTsg_usuario_tsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_usuario_tsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario_tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBajaTsg_usuario_tsg_proyecto(&$Tsg_usuario_tsg_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_USUARIO_TSG_PROYECTO SET FLAG_ACTIVO = 0 ";
		$query =" WHERE ";
		if($Tsg_usuario_tsg_proyecto["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_usuario_tsg_proyecto["TSG_USUARIOUSU_ID"];
			$flag = TRUE;
		}
		if($Tsg_usuario_tsg_proyecto["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_usuario_tsg_proyecto["TSG_PROYECTOPRO_ID"];
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
		  $Tsg_usuario_tsg_proyecto = array();
		  $Tsg_usuario_tsg_proyecto['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bBajaTsg_usuario_tsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_usuario_tsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario_tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bAltaTsg_usuario_tsg_proyecto(&$Tsg_usuario_tsg_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_USUARIO_TSG_PROYECTO SET FLAG_ACTIVO = 1 ";
		$query =" WHERE ";
		if($Tsg_usuario_tsg_proyecto["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_usuario_tsg_proyecto["TSG_USUARIOUSU_ID"];
			$flag = TRUE;
		}
		if($Tsg_usuario_tsg_proyecto["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_usuario_tsg_proyecto["TSG_PROYECTOPRO_ID"];
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
		  $Tsg_usuario_tsg_proyecto = array();
		  $Tsg_usuario_tsg_proyecto['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bAltaTsg_usuario_tsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_usuario_tsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario_tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bValidarTsg_usuario_tsg_proyecto(&$Tsg_usuario_tsg_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
/* Logica aqui */
		return TRUE;
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_usuario_tsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>