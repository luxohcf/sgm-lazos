<?php

include('..\Ent\Tsg_categoria.class.php');
/********************************************************  
* Clase Tsg_categoriaDA autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_categoriaDA {

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
* Funcion bExisteTsg_categoria                 *  
* Parametros entrada:                          *  
*      $Tsg_categoria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bExisteTsg_categoria(&$Tsg_categoria, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="SELECT 1 FROM TSG_CATEGORIA WHERE ";
		if($Tsg_categoria["CAT_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_ID = '".$Tsg_categoria["CAT_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DE LA CATEGOR鞟.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_NOMBRE = '".$Tsg_categoria["CAT_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DE LA CATEGOR鞟'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_DESCRIP = '".$Tsg_categoria["CAT_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_ACTIVO = '".$Tsg_categoria["CAT_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_USU_CREADOR = '".$Tsg_categoria["CAT_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_FECHA_CREACION = '".$Tsg_categoria["CAT_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_FECHA_MODIFICACION = '".$Tsg_categoria["CAT_FECHA_MODIFICACION"]."'";
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
		$aErrores["bExisteTsg_categoria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_categoria                 *  
* Parametros entrada:                          *  
*      $Tsg_categoria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBuscarTsg_categoria(&$Tsg_categoria, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = false;
		$query ="SELECT ";
		$query.=     "CAT_ID ,";
		$query.=     "CAT_NOMBRE ,";
		$query.=     "CAT_DESCRIP ,";
		$query.=     "CAT_ACTIVO ,";
		$query.=     "CAT_USU_CREADOR ,";
		$query.=     "CAT_FECHA_CREACION ,";
		$query.=     "CAT_FECHA_MODIFICACION ";
		$query.=" FROM TSG_CATEGORIA ";
		if($Tsg_categoria["CAT_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="CAT_ID = '".$Tsg_categoria["CAT_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DE LA CATEGOR鞟.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="CAT_NOMBRE = '".$Tsg_categoria["CAT_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DE LA CATEGOR鞟'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="CAT_DESCRIP = '".$Tsg_categoria["CAT_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="CAT_ACTIVO = '".$Tsg_categoria["CAT_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="CAT_USU_CREADOR = '".$Tsg_categoria["CAT_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="CAT_FECHA_CREACION = '".$Tsg_categoria["CAT_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="CAT_FECHA_MODIFICACION = '".$Tsg_categoria["CAT_FECHA_MODIFICACION"]."'";
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
			$Tsg_categoria = array();
			while($row = $res->fetch_assoc())
			{
				$Tsg_categoria[$x]['CAT_ID'] = $row['CAT_ID'];
				$Tsg_categoria[$x]['CAT_NOMBRE'] = $row['CAT_NOMBRE'];
				$Tsg_categoria[$x]['CAT_DESCRIP'] = $row['CAT_DESCRIP'];
				$Tsg_categoria[$x]['CAT_ACTIVO'] = $row['CAT_ACTIVO'];
				$Tsg_categoria[$x]['CAT_USU_CREADOR'] = $row['CAT_USU_CREADOR'];
				$Tsg_categoria[$x]['CAT_FECHA_CREACION'] = $row['CAT_FECHA_CREACION'];
				$Tsg_categoria[$x]['CAT_FECHA_MODIFICACION'] = $row['CAT_FECHA_MODIFICACION'];
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
		$aErrores["bBuscarTsg_categoria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_categoria                 *  
* Parametros entrada:                          *  
*      $Tsg_categoria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bInsertarTsg_categoria(&$Tsg_categoria, &$aErrores)
{
	try
	{
		/* Query aqui */
		$query ="INSERT INTO TSG_CATEGORIA (";
		$query.="CAT_ID ,";
		$query.="CAT_NOMBRE ,";
		$query.="CAT_DESCRIP ,";
		$query.="CAT_ACTIVO ,";
		$query.="CAT_USU_CREADOR ,";
		$query.="CAT_FECHA_CREACION ,";
		$query.="CAT_FECHA_MODIFICACION ";
		$query.=")";
		$query.=" VALUES (";
		$query.="'".$Tsg_categoria["CAT_ID"]."',";
		$query.="'".$Tsg_categoria["CAT_NOMBRE"]."',";
		$query.="'".$Tsg_categoria["CAT_DESCRIP"]."',";
		$query.="'".$Tsg_categoria["CAT_ACTIVO"]."',";
		$query.="'".$Tsg_categoria["CAT_USU_CREADOR"]."',";
		$query.="'".$Tsg_categoria["CAT_FECHA_CREACION"]."',";
		$query.="'".$Tsg_categoria["CAT_FECHA_MODIFICACION"]."'";
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
		  $Tsg_categoria = array();
		  $Tsg_categoria['ID_insercion'] = $mySqli->insert_id;
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
		$aErrores["bInsertarTsg_categoria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_categoria                 *  
* Parametros entrada:                          *  
*      $Tsg_categoria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bModificarTsg_categoria(&$Tsg_categoria, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_CATEGORIA ";
		if($Tsg_categoria["CAT_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="CAT_ID = '".$Tsg_categoria["CAT_ID"]."',";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DE LA CATEGOR鞟.'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="CAT_NOMBRE = '".$Tsg_categoria["CAT_NOMBRE"]."',";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DE LA CATEGOR鞟'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="CAT_DESCRIP = '".$Tsg_categoria["CAT_DESCRIP"]."',";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA.'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="CAT_ACTIVO = '".$Tsg_categoria["CAT_ACTIVO"]."',";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="CAT_USU_CREADOR = '".$Tsg_categoria["CAT_USU_CREADOR"]."',";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA CREACI驨'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="CAT_FECHA_CREACION = '".$Tsg_categoria["CAT_FECHA_CREACION"]."',";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA MODIFICACI驨'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="CAT_FECHA_MODIFICACION = '".$Tsg_categoria["CAT_FECHA_MODIFICACION"]."'";
			$flag = TRUE;
		}
		$flag = FALSE;
		$query =" WHERE ";
		if($Tsg_categoria["CAT_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_ID = '".$Tsg_categoria["CAT_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DE LA CATEGOR鞟.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_NOMBRE = '".$Tsg_categoria["CAT_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DE LA CATEGOR鞟'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_DESCRIP = '".$Tsg_categoria["CAT_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_ACTIVO = '".$Tsg_categoria["CAT_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_USU_CREADOR = '".$Tsg_categoria["CAT_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_FECHA_CREACION = '".$Tsg_categoria["CAT_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_FECHA_MODIFICACION = '".$Tsg_categoria["CAT_FECHA_MODIFICACION"]."'";
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
		  $Tsg_categoria = array();
		  $Tsg_categoria['N_Modificados'] = $mySqli->affected_rows;
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
		$aErrores["bModificarTsg_categoria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_categoria                 *  
* Parametros entrada:                          *  
*      $Tsg_categoria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bEliminarTsg_categoria(&$Tsg_categoria, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="DELETE FROM TSG_CATEGORIA ";
		$query =" WHERE ";
		if($Tsg_categoria["CAT_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_ID = '".$Tsg_categoria["CAT_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DE LA CATEGOR鞟.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_NOMBRE = '".$Tsg_categoria["CAT_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DE LA CATEGOR鞟'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_DESCRIP = '".$Tsg_categoria["CAT_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_ACTIVO = '".$Tsg_categoria["CAT_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_USU_CREADOR = '".$Tsg_categoria["CAT_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_FECHA_CREACION = '".$Tsg_categoria["CAT_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_FECHA_MODIFICACION = '".$Tsg_categoria["CAT_FECHA_MODIFICACION"]."'";
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
		  $Tsg_categoria = array();
		  $Tsg_categoria['N_Eliminados'] = $mySqli->affected_rows;
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
		$aErrores["bEliminarTsg_categoria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_categoria                 *  
* Parametros entrada:                          *  
*      $Tsg_categoria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBajaTsg_categoria(&$Tsg_categoria, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_CATEGORIA SET FLAG_ACTIVO = 0 ";
		$query =" WHERE ";
		if($Tsg_categoria["CAT_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_ID = '".$Tsg_categoria["CAT_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DE LA CATEGOR鞟.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_NOMBRE = '".$Tsg_categoria["CAT_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DE LA CATEGOR鞟'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_DESCRIP = '".$Tsg_categoria["CAT_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_ACTIVO = '".$Tsg_categoria["CAT_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_USU_CREADOR = '".$Tsg_categoria["CAT_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_FECHA_CREACION = '".$Tsg_categoria["CAT_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_FECHA_MODIFICACION = '".$Tsg_categoria["CAT_FECHA_MODIFICACION"]."'";
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
		  $Tsg_categoria = array();
		  $Tsg_categoria['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bBajaTsg_categoria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_categoria                 *  
* Parametros entrada:                          *  
*      $Tsg_categoria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bAltaTsg_categoria(&$Tsg_categoria, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_CATEGORIA SET FLAG_ACTIVO = 1 ";
		$query =" WHERE ";
		if($Tsg_categoria["CAT_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_ID = '".$Tsg_categoria["CAT_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DE LA CATEGOR鞟.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_NOMBRE = '".$Tsg_categoria["CAT_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DE LA CATEGOR鞟'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_DESCRIP = '".$Tsg_categoria["CAT_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_ACTIVO = '".$Tsg_categoria["CAT_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_USU_CREADOR = '".$Tsg_categoria["CAT_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_FECHA_CREACION = '".$Tsg_categoria["CAT_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_categoria["CAT_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CAT_FECHA_MODIFICACION = '".$Tsg_categoria["CAT_FECHA_MODIFICACION"]."'";
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
		  $Tsg_categoria = array();
		  $Tsg_categoria['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bAltaTsg_categoria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_categoria                 *  
* Parametros entrada:                          *  
*      $Tsg_categoria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bValidarTsg_categoria(&$Tsg_categoria, &$aErrores)
{
	try
	{
		/* Query aqui */
/* Logica aqui */
		return TRUE;
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_categoria"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>