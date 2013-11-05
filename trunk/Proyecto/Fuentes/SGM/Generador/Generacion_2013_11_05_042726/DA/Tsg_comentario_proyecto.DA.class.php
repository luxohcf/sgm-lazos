<?php

include('..\Ent\Tsg_comentario_proyecto.class.php');
/********************************************************  
* Clase Tsg_comentario_proyectoDA autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_comentario_proyectoDA {

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
* Funcion bExisteTsg_comentario_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_comentario_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bExisteTsg_comentario_proyecto(&$Tsg_comentario_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="SELECT 1 FROM TSG_COMENTARIO_PROYECTO WHERE ";
		if($Tsg_comentario_proyecto["COP_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="COP_ID = '".$Tsg_comentario_proyecto["COP_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["COP_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="COP_DESCRIP = '".$Tsg_comentario_proyecto["COP_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_comentario_proyecto["TSG_PROYECTOPRO_ID"];
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_comentario_proyecto["TSG_USUARIOUSU_ID"];
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["TSG_ARCHIVOARC_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ARCHIVOARC_ID = ".$Tsg_comentario_proyecto["TSG_ARCHIVOARC_ID"];
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["COP_FECHA_CREACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="COP_FECHA_CREACION = '".$Tsg_comentario_proyecto["COP_FECHA_CREACION"]."'";
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
		$aErrores["bExisteTsg_comentario_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_comentario_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_comentario_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBuscarTsg_comentario_proyecto(&$Tsg_comentario_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = false;
		$query ="SELECT ";
		$query.=     "COP_ID ,";
		$query.=     "COP_DESCRIP ,";
		$query.=     "TSG_PROYECTOPRO_ID ,";
		$query.=     "TSG_USUARIOUSU_ID ,";
		$query.=     "TSG_ARCHIVOARC_ID ,";
		$query.=     "COP_FECHA_CREACION ";
		$query.=" FROM TSG_COMENTARIO_PROYECTO ";
		if($Tsg_comentario_proyecto["COP_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="COP_ID = '".$Tsg_comentario_proyecto["COP_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["COP_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="COP_DESCRIP = '".$Tsg_comentario_proyecto["COP_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_comentario_proyecto["TSG_PROYECTOPRO_ID"];
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_comentario_proyecto["TSG_USUARIOUSU_ID"];
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["TSG_ARCHIVOARC_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_ARCHIVOARC_ID = ".$Tsg_comentario_proyecto["TSG_ARCHIVOARC_ID"];
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["COP_FECHA_CREACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="COP_FECHA_CREACION = '".$Tsg_comentario_proyecto["COP_FECHA_CREACION"]."'";
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
			$Tsg_comentario_proyecto = array();
			while($row = $res->fetch_assoc())
			{
				$Tsg_comentario_proyecto[$x]['COP_ID'] = $row['COP_ID'];
				$Tsg_comentario_proyecto[$x]['COP_DESCRIP'] = $row['COP_DESCRIP'];
				$Tsg_comentario_proyecto[$x]['TSG_PROYECTOPRO_ID'] = $row['TSG_PROYECTOPRO_ID'];
				$Tsg_comentario_proyecto[$x]['TSG_USUARIOUSU_ID'] = $row['TSG_USUARIOUSU_ID'];
				$Tsg_comentario_proyecto[$x]['TSG_ARCHIVOARC_ID'] = $row['TSG_ARCHIVOARC_ID'];
				$Tsg_comentario_proyecto[$x]['COP_FECHA_CREACION'] = $row['COP_FECHA_CREACION'];
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
		$aErrores["bBuscarTsg_comentario_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_comentario_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_comentario_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bInsertarTsg_comentario_proyecto(&$Tsg_comentario_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$query ="INSERT INTO TSG_COMENTARIO_PROYECTO (";
		$query.="COP_ID ,";
		$query.="COP_DESCRIP ,";
		$query.="TSG_PROYECTOPRO_ID ,";
		$query.="TSG_USUARIOUSU_ID ,";
		$query.="TSG_ARCHIVOARC_ID ,";
		$query.="COP_FECHA_CREACION ";
		$query.=")";
		$query.=" VALUES (";
		$query.="'".$Tsg_comentario_proyecto["COP_ID"]."',";
		$query.="'".$Tsg_comentario_proyecto["COP_DESCRIP"]."',";
		$query.= $Tsg_comentario_proyecto["TSG_PROYECTOPRO_ID"].",";
		$query.= $Tsg_comentario_proyecto["TSG_USUARIOUSU_ID"].",";
		$query.= $Tsg_comentario_proyecto["TSG_ARCHIVOARC_ID"].",";
		$query.="'".$Tsg_comentario_proyecto["COP_FECHA_CREACION"]."'";
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
		  $Tsg_comentario_proyecto = array();
		  $Tsg_comentario_proyecto['ID_insercion'] = $mySqli->insert_id;
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
		$aErrores["bInsertarTsg_comentario_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_comentario_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_comentario_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bModificarTsg_comentario_proyecto(&$Tsg_comentario_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_COMENTARIO_PROYECTO ";
		if($Tsg_comentario_proyecto["COP_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="COP_ID = '".$Tsg_comentario_proyecto["COP_ID"]."',";
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["COP_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="COP_DESCRIP = '".$Tsg_comentario_proyecto["COP_DESCRIP"]."',";
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_comentario_proyecto["TSG_PROYECTOPRO_ID"].",";
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_comentario_proyecto["TSG_USUARIOUSU_ID"].",";
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["TSG_ARCHIVOARC_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_ARCHIVOARC_ID = ".$Tsg_comentario_proyecto["TSG_ARCHIVOARC_ID"].",";
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["COP_FECHA_CREACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="COP_FECHA_CREACION = '".$Tsg_comentario_proyecto["COP_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		$flag = FALSE;
		$query =" WHERE ";
		if($Tsg_comentario_proyecto["COP_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="COP_ID = '".$Tsg_comentario_proyecto["COP_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["COP_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="COP_DESCRIP = '".$Tsg_comentario_proyecto["COP_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_comentario_proyecto["TSG_PROYECTOPRO_ID"];
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_comentario_proyecto["TSG_USUARIOUSU_ID"];
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["TSG_ARCHIVOARC_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ARCHIVOARC_ID = ".$Tsg_comentario_proyecto["TSG_ARCHIVOARC_ID"];
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["COP_FECHA_CREACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="COP_FECHA_CREACION = '".$Tsg_comentario_proyecto["COP_FECHA_CREACION"]."'";
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
		  $Tsg_comentario_proyecto = array();
		  $Tsg_comentario_proyecto['N_Modificados'] = $mySqli->affected_rows;
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
		$aErrores["bModificarTsg_comentario_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_comentario_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_comentario_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bEliminarTsg_comentario_proyecto(&$Tsg_comentario_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="DELETE FROM TSG_COMENTARIO_PROYECTO ";
		$query =" WHERE ";
		if($Tsg_comentario_proyecto["COP_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="COP_ID = '".$Tsg_comentario_proyecto["COP_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["COP_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="COP_DESCRIP = '".$Tsg_comentario_proyecto["COP_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_comentario_proyecto["TSG_PROYECTOPRO_ID"];
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_comentario_proyecto["TSG_USUARIOUSU_ID"];
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["TSG_ARCHIVOARC_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ARCHIVOARC_ID = ".$Tsg_comentario_proyecto["TSG_ARCHIVOARC_ID"];
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["COP_FECHA_CREACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="COP_FECHA_CREACION = '".$Tsg_comentario_proyecto["COP_FECHA_CREACION"]."'";
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
		  $Tsg_comentario_proyecto = array();
		  $Tsg_comentario_proyecto['N_Eliminados'] = $mySqli->affected_rows;
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
		$aErrores["bEliminarTsg_comentario_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_comentario_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_comentario_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBajaTsg_comentario_proyecto(&$Tsg_comentario_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_COMENTARIO_PROYECTO SET FLAG_ACTIVO = 0 ";
		$query =" WHERE ";
		if($Tsg_comentario_proyecto["COP_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="COP_ID = '".$Tsg_comentario_proyecto["COP_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["COP_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="COP_DESCRIP = '".$Tsg_comentario_proyecto["COP_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_comentario_proyecto["TSG_PROYECTOPRO_ID"];
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_comentario_proyecto["TSG_USUARIOUSU_ID"];
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["TSG_ARCHIVOARC_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ARCHIVOARC_ID = ".$Tsg_comentario_proyecto["TSG_ARCHIVOARC_ID"];
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["COP_FECHA_CREACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="COP_FECHA_CREACION = '".$Tsg_comentario_proyecto["COP_FECHA_CREACION"]."'";
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
		  $Tsg_comentario_proyecto = array();
		  $Tsg_comentario_proyecto['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bBajaTsg_comentario_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_comentario_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_comentario_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bAltaTsg_comentario_proyecto(&$Tsg_comentario_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_COMENTARIO_PROYECTO SET FLAG_ACTIVO = 1 ";
		$query =" WHERE ";
		if($Tsg_comentario_proyecto["COP_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="COP_ID = '".$Tsg_comentario_proyecto["COP_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["COP_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="COP_DESCRIP = '".$Tsg_comentario_proyecto["COP_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_comentario_proyecto["TSG_PROYECTOPRO_ID"];
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_comentario_proyecto["TSG_USUARIOUSU_ID"];
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["TSG_ARCHIVOARC_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ARCHIVOARC_ID = ".$Tsg_comentario_proyecto["TSG_ARCHIVOARC_ID"];
			$flag = TRUE;
		}
		if($Tsg_comentario_proyecto["COP_FECHA_CREACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="COP_FECHA_CREACION = '".$Tsg_comentario_proyecto["COP_FECHA_CREACION"]."'";
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
		  $Tsg_comentario_proyecto = array();
		  $Tsg_comentario_proyecto['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bAltaTsg_comentario_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_comentario_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_comentario_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bValidarTsg_comentario_proyecto(&$Tsg_comentario_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
/* Logica aqui */
		return TRUE;
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_comentario_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>