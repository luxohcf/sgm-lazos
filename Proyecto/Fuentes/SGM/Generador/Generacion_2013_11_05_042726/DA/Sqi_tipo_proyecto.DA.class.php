<?php

include('..\Ent\Sqi_tipo_proyecto.class.php');
/********************************************************  
* Clase Sqi_tipo_proyectoDA autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Sqi_tipo_proyectoDA {

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
* Funcion bExisteSqi_tipo_proyecto                 *  
* Parametros entrada:                          *  
*      $Sqi_tipo_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bExisteSqi_tipo_proyecto(&$Sqi_tipo_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="SELECT 1 FROM SQI_TIPO_PROYECTO WHERE ";
		if($Sqi_tipo_proyecto["TIP_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_ID = '".$Sqi_tipo_proyecto["TIP_ID"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL TIPO DE PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_NOMBRE = '".$Sqi_tipo_proyecto["TIP_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL TIPO DE PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_DESCRIP = '".$Sqi_tipo_proyecto["TIP_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'REGISTRO ACTIVO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_ACTIVO = '".$Sqi_tipo_proyecto["TIP_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_USU_CREADOR = '".$Sqi_tipo_proyecto["TIP_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_FECHA_CREACION = '".$Sqi_tipo_proyecto["TIP_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_FECHA_MODIFICACION = '".$Sqi_tipo_proyecto["TIP_FECHA_MODIFICACION"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TSG_PROYECTO_HISTORICOPRH_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTO_HISTORICOPRH_ID = ".$Sqi_tipo_proyecto["TSG_PROYECTO_HISTORICOPRH_ID"];
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
		$aErrores["bExisteSqi_tipo_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarSqi_tipo_proyecto                 *  
* Parametros entrada:                          *  
*      $Sqi_tipo_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBuscarSqi_tipo_proyecto(&$Sqi_tipo_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = false;
		$query ="SELECT ";
		$query.=     "TIP_ID ,";
		$query.=     "TIP_NOMBRE ,";
		$query.=     "TIP_DESCRIP ,";
		$query.=     "TIP_ACTIVO ,";
		$query.=     "TIP_USU_CREADOR ,";
		$query.=     "TIP_FECHA_CREACION ,";
		$query.=     "TIP_FECHA_MODIFICACION ,";
		$query.=     "TSG_PROYECTO_HISTORICOPRH_ID ";
		$query.=" FROM SQI_TIPO_PROYECTO ";
		if($Sqi_tipo_proyecto["TIP_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TIP_ID = '".$Sqi_tipo_proyecto["TIP_ID"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL TIPO DE PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TIP_NOMBRE = '".$Sqi_tipo_proyecto["TIP_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL TIPO DE PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TIP_DESCRIP = '".$Sqi_tipo_proyecto["TIP_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'REGISTRO ACTIVO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TIP_ACTIVO = '".$Sqi_tipo_proyecto["TIP_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TIP_USU_CREADOR = '".$Sqi_tipo_proyecto["TIP_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TIP_FECHA_CREACION = '".$Sqi_tipo_proyecto["TIP_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TIP_FECHA_MODIFICACION = '".$Sqi_tipo_proyecto["TIP_FECHA_MODIFICACION"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TSG_PROYECTO_HISTORICOPRH_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_PROYECTO_HISTORICOPRH_ID = ".$Sqi_tipo_proyecto["TSG_PROYECTO_HISTORICOPRH_ID"];
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
			$Sqi_tipo_proyecto = array();
			while($row = $res->fetch_assoc())
			{
				$Sqi_tipo_proyecto[$x]['TIP_ID'] = $row['TIP_ID'];
				$Sqi_tipo_proyecto[$x]['TIP_NOMBRE'] = $row['TIP_NOMBRE'];
				$Sqi_tipo_proyecto[$x]['TIP_DESCRIP'] = $row['TIP_DESCRIP'];
				$Sqi_tipo_proyecto[$x]['TIP_ACTIVO'] = $row['TIP_ACTIVO'];
				$Sqi_tipo_proyecto[$x]['TIP_USU_CREADOR'] = $row['TIP_USU_CREADOR'];
				$Sqi_tipo_proyecto[$x]['TIP_FECHA_CREACION'] = $row['TIP_FECHA_CREACION'];
				$Sqi_tipo_proyecto[$x]['TIP_FECHA_MODIFICACION'] = $row['TIP_FECHA_MODIFICACION'];
				$Sqi_tipo_proyecto[$x]['TSG_PROYECTO_HISTORICOPRH_ID'] = $row['TSG_PROYECTO_HISTORICOPRH_ID'];
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
		$aErrores["bBuscarSqi_tipo_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarSqi_tipo_proyecto                 *  
* Parametros entrada:                          *  
*      $Sqi_tipo_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bInsertarSqi_tipo_proyecto(&$Sqi_tipo_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$query ="INSERT INTO SQI_TIPO_PROYECTO (";
		$query.="TIP_ID ,";
		$query.="TIP_NOMBRE ,";
		$query.="TIP_DESCRIP ,";
		$query.="TIP_ACTIVO ,";
		$query.="TIP_USU_CREADOR ,";
		$query.="TIP_FECHA_CREACION ,";
		$query.="TIP_FECHA_MODIFICACION ,";
		$query.="TSG_PROYECTO_HISTORICOPRH_ID ";
		$query.=")";
		$query.=" VALUES (";
		$query.="'".$Sqi_tipo_proyecto["TIP_ID"]."',";
		$query.="'".$Sqi_tipo_proyecto["TIP_NOMBRE"]."',";
		$query.="'".$Sqi_tipo_proyecto["TIP_DESCRIP"]."',";
		$query.="'".$Sqi_tipo_proyecto["TIP_ACTIVO"]."',";
		$query.="'".$Sqi_tipo_proyecto["TIP_USU_CREADOR"]."',";
		$query.="'".$Sqi_tipo_proyecto["TIP_FECHA_CREACION"]."',";
		$query.="'".$Sqi_tipo_proyecto["TIP_FECHA_MODIFICACION"]."',";
		$query.= $Sqi_tipo_proyecto["TSG_PROYECTO_HISTORICOPRH_ID"]."";
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
		  $Sqi_tipo_proyecto = array();
		  $Sqi_tipo_proyecto['ID_insercion'] = $mySqli->insert_id;
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
		$aErrores["bInsertarSqi_tipo_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarSqi_tipo_proyecto                 *  
* Parametros entrada:                          *  
*      $Sqi_tipo_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bModificarSqi_tipo_proyecto(&$Sqi_tipo_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE SQI_TIPO_PROYECTO ";
		if($Sqi_tipo_proyecto["TIP_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TIP_ID = '".$Sqi_tipo_proyecto["TIP_ID"]."',";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL TIPO DE PROYECTO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TIP_NOMBRE = '".$Sqi_tipo_proyecto["TIP_NOMBRE"]."',";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL TIPO DE PROYECTO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TIP_DESCRIP = '".$Sqi_tipo_proyecto["TIP_DESCRIP"]."',";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'REGISTRO ACTIVO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TIP_ACTIVO = '".$Sqi_tipo_proyecto["TIP_ACTIVO"]."',";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TIP_USU_CREADOR = '".$Sqi_tipo_proyecto["TIP_USU_CREADOR"]."',";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TIP_FECHA_CREACION = '".$Sqi_tipo_proyecto["TIP_FECHA_CREACION"]."',";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TIP_FECHA_MODIFICACION = '".$Sqi_tipo_proyecto["TIP_FECHA_MODIFICACION"]."',";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TSG_PROYECTO_HISTORICOPRH_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_PROYECTO_HISTORICOPRH_ID = ".$Sqi_tipo_proyecto["TSG_PROYECTO_HISTORICOPRH_ID"]."";
			$flag = TRUE;
		}
		$flag = FALSE;
		$query =" WHERE ";
		if($Sqi_tipo_proyecto["TIP_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_ID = '".$Sqi_tipo_proyecto["TIP_ID"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL TIPO DE PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_NOMBRE = '".$Sqi_tipo_proyecto["TIP_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL TIPO DE PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_DESCRIP = '".$Sqi_tipo_proyecto["TIP_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'REGISTRO ACTIVO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_ACTIVO = '".$Sqi_tipo_proyecto["TIP_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_USU_CREADOR = '".$Sqi_tipo_proyecto["TIP_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_FECHA_CREACION = '".$Sqi_tipo_proyecto["TIP_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_FECHA_MODIFICACION = '".$Sqi_tipo_proyecto["TIP_FECHA_MODIFICACION"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TSG_PROYECTO_HISTORICOPRH_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTO_HISTORICOPRH_ID = ".$Sqi_tipo_proyecto["TSG_PROYECTO_HISTORICOPRH_ID"];
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
		  $Sqi_tipo_proyecto = array();
		  $Sqi_tipo_proyecto['N_Modificados'] = $mySqli->affected_rows;
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
		$aErrores["bModificarSqi_tipo_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarSqi_tipo_proyecto                 *  
* Parametros entrada:                          *  
*      $Sqi_tipo_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bEliminarSqi_tipo_proyecto(&$Sqi_tipo_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="DELETE FROM SQI_TIPO_PROYECTO ";
		$query =" WHERE ";
		if($Sqi_tipo_proyecto["TIP_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_ID = '".$Sqi_tipo_proyecto["TIP_ID"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL TIPO DE PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_NOMBRE = '".$Sqi_tipo_proyecto["TIP_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL TIPO DE PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_DESCRIP = '".$Sqi_tipo_proyecto["TIP_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'REGISTRO ACTIVO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_ACTIVO = '".$Sqi_tipo_proyecto["TIP_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_USU_CREADOR = '".$Sqi_tipo_proyecto["TIP_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_FECHA_CREACION = '".$Sqi_tipo_proyecto["TIP_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_FECHA_MODIFICACION = '".$Sqi_tipo_proyecto["TIP_FECHA_MODIFICACION"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TSG_PROYECTO_HISTORICOPRH_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTO_HISTORICOPRH_ID = ".$Sqi_tipo_proyecto["TSG_PROYECTO_HISTORICOPRH_ID"];
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
		  $Sqi_tipo_proyecto = array();
		  $Sqi_tipo_proyecto['N_Eliminados'] = $mySqli->affected_rows;
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
		$aErrores["bEliminarSqi_tipo_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaSqi_tipo_proyecto                 *  
* Parametros entrada:                          *  
*      $Sqi_tipo_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBajaSqi_tipo_proyecto(&$Sqi_tipo_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE SQI_TIPO_PROYECTO SET FLAG_ACTIVO = 0 ";
		$query =" WHERE ";
		if($Sqi_tipo_proyecto["TIP_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_ID = '".$Sqi_tipo_proyecto["TIP_ID"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL TIPO DE PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_NOMBRE = '".$Sqi_tipo_proyecto["TIP_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL TIPO DE PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_DESCRIP = '".$Sqi_tipo_proyecto["TIP_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'REGISTRO ACTIVO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_ACTIVO = '".$Sqi_tipo_proyecto["TIP_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_USU_CREADOR = '".$Sqi_tipo_proyecto["TIP_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_FECHA_CREACION = '".$Sqi_tipo_proyecto["TIP_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_FECHA_MODIFICACION = '".$Sqi_tipo_proyecto["TIP_FECHA_MODIFICACION"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TSG_PROYECTO_HISTORICOPRH_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTO_HISTORICOPRH_ID = ".$Sqi_tipo_proyecto["TSG_PROYECTO_HISTORICOPRH_ID"];
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
		  $Sqi_tipo_proyecto = array();
		  $Sqi_tipo_proyecto['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bBajaSqi_tipo_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaSqi_tipo_proyecto                 *  
* Parametros entrada:                          *  
*      $Sqi_tipo_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bAltaSqi_tipo_proyecto(&$Sqi_tipo_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE SQI_TIPO_PROYECTO SET FLAG_ACTIVO = 1 ";
		$query =" WHERE ";
		if($Sqi_tipo_proyecto["TIP_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_ID = '".$Sqi_tipo_proyecto["TIP_ID"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL TIPO DE PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_NOMBRE = '".$Sqi_tipo_proyecto["TIP_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL TIPO DE PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_DESCRIP = '".$Sqi_tipo_proyecto["TIP_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'REGISTRO ACTIVO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_ACTIVO = '".$Sqi_tipo_proyecto["TIP_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_USU_CREADOR = '".$Sqi_tipo_proyecto["TIP_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_FECHA_CREACION = '".$Sqi_tipo_proyecto["TIP_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TIP_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIP_FECHA_MODIFICACION = '".$Sqi_tipo_proyecto["TIP_FECHA_MODIFICACION"]."'";
			$flag = TRUE;
		}
		if($Sqi_tipo_proyecto["TSG_PROYECTO_HISTORICOPRH_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTO_HISTORICOPRH_ID = ".$Sqi_tipo_proyecto["TSG_PROYECTO_HISTORICOPRH_ID"];
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
		  $Sqi_tipo_proyecto = array();
		  $Sqi_tipo_proyecto['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bAltaSqi_tipo_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarSqi_tipo_proyecto                 *  
* Parametros entrada:                          *  
*      $Sqi_tipo_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bValidarSqi_tipo_proyecto(&$Sqi_tipo_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
/* Logica aqui */
		return TRUE;
	}
	catch(Exception $e)
	{
		$aErrores["bValidarSqi_tipo_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>