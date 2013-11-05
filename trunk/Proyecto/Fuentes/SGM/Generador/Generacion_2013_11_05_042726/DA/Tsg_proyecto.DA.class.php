<?php

include('..\Ent\Tsg_proyecto.class.php');
/********************************************************  
* Clase Tsg_proyectoDA autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_proyectoDA {

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
* Funcion bExisteTsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bExisteTsg_proyecto(&$Tsg_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="SELECT 1 FROM TSG_PROYECTO WHERE ";
		if($Tsg_proyecto["PRO_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA DEL PROYECTO IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_ID = '".$Tsg_proyecto["PRO_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_NOMBRE = '".$Tsg_proyecto["PRO_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_DESCRIP"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_DESCRIP = '".$Tsg_proyecto["PRO_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_USU_ID_JEFEPRO"] != NULL) // INT(10) NOT NULL COMMENT 'IDENTIFICADOR DEL JEFE DE PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_USU_ID_JEFEPRO = '".$Tsg_proyecto["PRO_USU_ID_JEFEPRO"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_DURACION"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'DURACI驨 DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_DURACION = '".$Tsg_proyecto["PRO_DURACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_INI"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA INICIO DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_INI = '".$Tsg_proyecto["PRO_FECHA_INI"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_TERM"] != NULL) // DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'FECHA TERMINO DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_TERM = '".$Tsg_proyecto["PRO_FECHA_TERM"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_GARAN"] != NULL) // DATETIME NULL DEFAULT NULL COMMENT 'FECHA DE GARANT鞟 DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_GARAN = '".$Tsg_proyecto["PRO_FECHA_GARAN"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_ACTIVO = '".$Tsg_proyecto["PRO_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["TSG_CLIENTECLI_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_CLIENTECLI_ID = ".$Tsg_proyecto["TSG_CLIENTECLI_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto["TSG_ESTADO_PROYECTOEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ESTADO_PROYECTOEST_ID = ".$Tsg_proyecto["TSG_ESTADO_PROYECTOEST_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto["SQI_TIPO_PROYECTOTIP_ID"] != NULL) // INT(10) DEFAULT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="SQI_TIPO_PROYECTOTIP_ID = ".$Tsg_proyecto["SQI_TIPO_PROYECTOTIP_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_USU_CREADOR = '".$Tsg_proyecto["PRO_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_CREACION = '".$Tsg_proyecto["PRO_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_MODIFICACION = '".$Tsg_proyecto["PRO_FECHA_MODIFICACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_DESTACADO"] != NULL) // TINYINT(1) DEFAULT NULL COMMENT 'DESTACADO (ESTRELLITA)'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_DESTACADO = '".$Tsg_proyecto["PRO_DESTACADO"]."'";
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
		$aErrores["bExisteTsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBuscarTsg_proyecto(&$Tsg_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = false;
		$query ="SELECT ";
		$query.=     "PRO_ID ,";
		$query.=     "PRO_NOMBRE ,";
		$query.=     "PRO_DESCRIP ,";
		$query.=     "PRO_USU_ID_JEFEPRO ,";
		$query.=     "PRO_DURACION ,";
		$query.=     "PRO_FECHA_INI ,";
		$query.=     "PRO_FECHA_TERM ,";
		$query.=     "PRO_FECHA_GARAN ,";
		$query.=     "PRO_ACTIVO ,";
		$query.=     "TSG_CLIENTECLI_ID ,";
		$query.=     "TSG_ESTADO_PROYECTOEST_ID ,";
		$query.=     "SQI_TIPO_PROYECTOTIP_ID ,";
		$query.=     "PRO_USU_CREADOR ,";
		$query.=     "PRO_FECHA_CREACION ,";
		$query.=     "PRO_FECHA_MODIFICACION ,";
		$query.=     "PRO_DESTACADO ";
		$query.=" FROM TSG_PROYECTO ";
		if($Tsg_proyecto["PRO_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA DEL PROYECTO IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="PRO_ID = '".$Tsg_proyecto["PRO_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="PRO_NOMBRE = '".$Tsg_proyecto["PRO_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_DESCRIP"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="PRO_DESCRIP = '".$Tsg_proyecto["PRO_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_USU_ID_JEFEPRO"] != NULL) // INT(10) NOT NULL COMMENT 'IDENTIFICADOR DEL JEFE DE PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="PRO_USU_ID_JEFEPRO = '".$Tsg_proyecto["PRO_USU_ID_JEFEPRO"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_DURACION"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'DURACI驨 DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="PRO_DURACION = '".$Tsg_proyecto["PRO_DURACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_INI"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA INICIO DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="PRO_FECHA_INI = '".$Tsg_proyecto["PRO_FECHA_INI"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_TERM"] != NULL) // DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'FECHA TERMINO DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="PRO_FECHA_TERM = '".$Tsg_proyecto["PRO_FECHA_TERM"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_GARAN"] != NULL) // DATETIME NULL DEFAULT NULL COMMENT 'FECHA DE GARANT鞟 DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="PRO_FECHA_GARAN = '".$Tsg_proyecto["PRO_FECHA_GARAN"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="PRO_ACTIVO = '".$Tsg_proyecto["PRO_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["TSG_CLIENTECLI_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_CLIENTECLI_ID = ".$Tsg_proyecto["TSG_CLIENTECLI_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto["TSG_ESTADO_PROYECTOEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_ESTADO_PROYECTOEST_ID = ".$Tsg_proyecto["TSG_ESTADO_PROYECTOEST_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto["SQI_TIPO_PROYECTOTIP_ID"] != NULL) // INT(10) DEFAULT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="SQI_TIPO_PROYECTOTIP_ID = ".$Tsg_proyecto["SQI_TIPO_PROYECTOTIP_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="PRO_USU_CREADOR = '".$Tsg_proyecto["PRO_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="PRO_FECHA_CREACION = '".$Tsg_proyecto["PRO_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="PRO_FECHA_MODIFICACION = '".$Tsg_proyecto["PRO_FECHA_MODIFICACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_DESTACADO"] != NULL) // TINYINT(1) DEFAULT NULL COMMENT 'DESTACADO (ESTRELLITA)'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="PRO_DESTACADO = '".$Tsg_proyecto["PRO_DESTACADO"]."'";
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
			$Tsg_proyecto = array();
			while($row = $res->fetch_assoc())
			{
				$Tsg_proyecto[$x]['PRO_ID'] = $row['PRO_ID'];
				$Tsg_proyecto[$x]['PRO_NOMBRE'] = $row['PRO_NOMBRE'];
				$Tsg_proyecto[$x]['PRO_DESCRIP'] = $row['PRO_DESCRIP'];
				$Tsg_proyecto[$x]['PRO_USU_ID_JEFEPRO'] = $row['PRO_USU_ID_JEFEPRO'];
				$Tsg_proyecto[$x]['PRO_DURACION'] = $row['PRO_DURACION'];
				$Tsg_proyecto[$x]['PRO_FECHA_INI'] = $row['PRO_FECHA_INI'];
				$Tsg_proyecto[$x]['PRO_FECHA_TERM'] = $row['PRO_FECHA_TERM'];
				$Tsg_proyecto[$x]['PRO_FECHA_GARAN'] = $row['PRO_FECHA_GARAN'];
				$Tsg_proyecto[$x]['PRO_ACTIVO'] = $row['PRO_ACTIVO'];
				$Tsg_proyecto[$x]['TSG_CLIENTECLI_ID'] = $row['TSG_CLIENTECLI_ID'];
				$Tsg_proyecto[$x]['TSG_ESTADO_PROYECTOEST_ID'] = $row['TSG_ESTADO_PROYECTOEST_ID'];
				$Tsg_proyecto[$x]['SQI_TIPO_PROYECTOTIP_ID'] = $row['SQI_TIPO_PROYECTOTIP_ID'];
				$Tsg_proyecto[$x]['PRO_USU_CREADOR'] = $row['PRO_USU_CREADOR'];
				$Tsg_proyecto[$x]['PRO_FECHA_CREACION'] = $row['PRO_FECHA_CREACION'];
				$Tsg_proyecto[$x]['PRO_FECHA_MODIFICACION'] = $row['PRO_FECHA_MODIFICACION'];
				$Tsg_proyecto[$x]['PRO_DESTACADO'] = $row['PRO_DESTACADO'];
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
		$aErrores["bBuscarTsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bInsertarTsg_proyecto(&$Tsg_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$query ="INSERT INTO TSG_PROYECTO (";
		$query.="PRO_ID ,";
		$query.="PRO_NOMBRE ,";
		$query.="PRO_DESCRIP ,";
		$query.="PRO_USU_ID_JEFEPRO ,";
		$query.="PRO_DURACION ,";
		$query.="PRO_FECHA_INI ,";
		$query.="PRO_FECHA_TERM ,";
		$query.="PRO_FECHA_GARAN ,";
		$query.="PRO_ACTIVO ,";
		$query.="TSG_CLIENTECLI_ID ,";
		$query.="TSG_ESTADO_PROYECTOEST_ID ,";
		$query.="SQI_TIPO_PROYECTOTIP_ID ,";
		$query.="PRO_USU_CREADOR ,";
		$query.="PRO_FECHA_CREACION ,";
		$query.="PRO_FECHA_MODIFICACION ,";
		$query.="PRO_DESTACADO ";
		$query.=")";
		$query.=" VALUES (";
		$query.="'".$Tsg_proyecto["PRO_ID"]."',";
		$query.="'".$Tsg_proyecto["PRO_NOMBRE"]."',";
		$query.="'".$Tsg_proyecto["PRO_DESCRIP"]."',";
		$query.="'".$Tsg_proyecto["PRO_USU_ID_JEFEPRO"]."',";
		$query.="'".$Tsg_proyecto["PRO_DURACION"]."',";
		$query.="'".$Tsg_proyecto["PRO_FECHA_INI"]."',";
		$query.="'".$Tsg_proyecto["PRO_FECHA_TERM"]."',";
		$query.="'".$Tsg_proyecto["PRO_FECHA_GARAN"]."',";
		$query.="'".$Tsg_proyecto["PRO_ACTIVO"]."',";
		$query.= $Tsg_proyecto["TSG_CLIENTECLI_ID"].",";
		$query.= $Tsg_proyecto["TSG_ESTADO_PROYECTOEST_ID"].",";
		$query.= $Tsg_proyecto["SQI_TIPO_PROYECTOTIP_ID"].",";
		$query.="'".$Tsg_proyecto["PRO_USU_CREADOR"]."',";
		$query.="'".$Tsg_proyecto["PRO_FECHA_CREACION"]."',";
		$query.="'".$Tsg_proyecto["PRO_FECHA_MODIFICACION"]."',";
		$query.="'".$Tsg_proyecto["PRO_DESTACADO"]."'";
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
		  $Tsg_proyecto = array();
		  $Tsg_proyecto['ID_insercion'] = $mySqli->insert_id;
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
		$aErrores["bInsertarTsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bModificarTsg_proyecto(&$Tsg_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_PROYECTO ";
		if($Tsg_proyecto["PRO_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA DEL PROYECTO IDENTIFICADOR 鶱ICO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="PRO_ID = '".$Tsg_proyecto["PRO_ID"]."',";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL PROYECTO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="PRO_NOMBRE = '".$Tsg_proyecto["PRO_NOMBRE"]."',";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_DESCRIP"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL PROYECTO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="PRO_DESCRIP = '".$Tsg_proyecto["PRO_DESCRIP"]."',";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_USU_ID_JEFEPRO"] != NULL) // INT(10) NOT NULL COMMENT 'IDENTIFICADOR DEL JEFE DE PROYECTO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="PRO_USU_ID_JEFEPRO = '".$Tsg_proyecto["PRO_USU_ID_JEFEPRO"]."',";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_DURACION"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'DURACI驨 DEL PROYECTO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="PRO_DURACION = '".$Tsg_proyecto["PRO_DURACION"]."',";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_INI"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA INICIO DEL PROYECTO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="PRO_FECHA_INI = '".$Tsg_proyecto["PRO_FECHA_INI"]."',";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_TERM"] != NULL) // DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'FECHA TERMINO DEL PROYECTO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="PRO_FECHA_TERM = '".$Tsg_proyecto["PRO_FECHA_TERM"]."',";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_GARAN"] != NULL) // DATETIME NULL DEFAULT NULL COMMENT 'FECHA DE GARANT鞟 DEL PROYECTO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="PRO_FECHA_GARAN = '".$Tsg_proyecto["PRO_FECHA_GARAN"]."',";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA.'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="PRO_ACTIVO = '".$Tsg_proyecto["PRO_ACTIVO"]."',";
			$flag = TRUE;
		}
		if($Tsg_proyecto["TSG_CLIENTECLI_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_CLIENTECLI_ID = ".$Tsg_proyecto["TSG_CLIENTECLI_ID"].",";
			$flag = TRUE;
		}
		if($Tsg_proyecto["TSG_ESTADO_PROYECTOEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_ESTADO_PROYECTOEST_ID = ".$Tsg_proyecto["TSG_ESTADO_PROYECTOEST_ID"].",";
			$flag = TRUE;
		}
		if($Tsg_proyecto["SQI_TIPO_PROYECTOTIP_ID"] != NULL) // INT(10) DEFAULT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="SQI_TIPO_PROYECTOTIP_ID = ".$Tsg_proyecto["SQI_TIPO_PROYECTOTIP_ID"].",";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="PRO_USU_CREADOR = '".$Tsg_proyecto["PRO_USU_CREADOR"]."',";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA CREACI驨'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="PRO_FECHA_CREACION = '".$Tsg_proyecto["PRO_FECHA_CREACION"]."',";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="PRO_FECHA_MODIFICACION = '".$Tsg_proyecto["PRO_FECHA_MODIFICACION"]."',";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_DESTACADO"] != NULL) // TINYINT(1) DEFAULT NULL COMMENT 'DESTACADO (ESTRELLITA)'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="PRO_DESTACADO = '".$Tsg_proyecto["PRO_DESTACADO"]."'";
			$flag = TRUE;
		}
		$flag = FALSE;
		$query =" WHERE ";
		if($Tsg_proyecto["PRO_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA DEL PROYECTO IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_ID = '".$Tsg_proyecto["PRO_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_NOMBRE = '".$Tsg_proyecto["PRO_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_DESCRIP"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_DESCRIP = '".$Tsg_proyecto["PRO_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_USU_ID_JEFEPRO"] != NULL) // INT(10) NOT NULL COMMENT 'IDENTIFICADOR DEL JEFE DE PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_USU_ID_JEFEPRO = '".$Tsg_proyecto["PRO_USU_ID_JEFEPRO"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_DURACION"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'DURACI驨 DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_DURACION = '".$Tsg_proyecto["PRO_DURACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_INI"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA INICIO DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_INI = '".$Tsg_proyecto["PRO_FECHA_INI"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_TERM"] != NULL) // DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'FECHA TERMINO DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_TERM = '".$Tsg_proyecto["PRO_FECHA_TERM"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_GARAN"] != NULL) // DATETIME NULL DEFAULT NULL COMMENT 'FECHA DE GARANT鞟 DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_GARAN = '".$Tsg_proyecto["PRO_FECHA_GARAN"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_ACTIVO = '".$Tsg_proyecto["PRO_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["TSG_CLIENTECLI_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_CLIENTECLI_ID = ".$Tsg_proyecto["TSG_CLIENTECLI_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto["TSG_ESTADO_PROYECTOEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ESTADO_PROYECTOEST_ID = ".$Tsg_proyecto["TSG_ESTADO_PROYECTOEST_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto["SQI_TIPO_PROYECTOTIP_ID"] != NULL) // INT(10) DEFAULT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="SQI_TIPO_PROYECTOTIP_ID = ".$Tsg_proyecto["SQI_TIPO_PROYECTOTIP_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_USU_CREADOR = '".$Tsg_proyecto["PRO_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_CREACION = '".$Tsg_proyecto["PRO_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_MODIFICACION = '".$Tsg_proyecto["PRO_FECHA_MODIFICACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_DESTACADO"] != NULL) // TINYINT(1) DEFAULT NULL COMMENT 'DESTACADO (ESTRELLITA)'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_DESTACADO = '".$Tsg_proyecto["PRO_DESTACADO"]."'";
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
		  $Tsg_proyecto = array();
		  $Tsg_proyecto['N_Modificados'] = $mySqli->affected_rows;
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
		$aErrores["bModificarTsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bEliminarTsg_proyecto(&$Tsg_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="DELETE FROM TSG_PROYECTO ";
		$query =" WHERE ";
		if($Tsg_proyecto["PRO_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA DEL PROYECTO IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_ID = '".$Tsg_proyecto["PRO_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_NOMBRE = '".$Tsg_proyecto["PRO_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_DESCRIP"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_DESCRIP = '".$Tsg_proyecto["PRO_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_USU_ID_JEFEPRO"] != NULL) // INT(10) NOT NULL COMMENT 'IDENTIFICADOR DEL JEFE DE PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_USU_ID_JEFEPRO = '".$Tsg_proyecto["PRO_USU_ID_JEFEPRO"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_DURACION"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'DURACI驨 DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_DURACION = '".$Tsg_proyecto["PRO_DURACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_INI"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA INICIO DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_INI = '".$Tsg_proyecto["PRO_FECHA_INI"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_TERM"] != NULL) // DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'FECHA TERMINO DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_TERM = '".$Tsg_proyecto["PRO_FECHA_TERM"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_GARAN"] != NULL) // DATETIME NULL DEFAULT NULL COMMENT 'FECHA DE GARANT鞟 DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_GARAN = '".$Tsg_proyecto["PRO_FECHA_GARAN"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_ACTIVO = '".$Tsg_proyecto["PRO_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["TSG_CLIENTECLI_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_CLIENTECLI_ID = ".$Tsg_proyecto["TSG_CLIENTECLI_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto["TSG_ESTADO_PROYECTOEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ESTADO_PROYECTOEST_ID = ".$Tsg_proyecto["TSG_ESTADO_PROYECTOEST_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto["SQI_TIPO_PROYECTOTIP_ID"] != NULL) // INT(10) DEFAULT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="SQI_TIPO_PROYECTOTIP_ID = ".$Tsg_proyecto["SQI_TIPO_PROYECTOTIP_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_USU_CREADOR = '".$Tsg_proyecto["PRO_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_CREACION = '".$Tsg_proyecto["PRO_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_MODIFICACION = '".$Tsg_proyecto["PRO_FECHA_MODIFICACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_DESTACADO"] != NULL) // TINYINT(1) DEFAULT NULL COMMENT 'DESTACADO (ESTRELLITA)'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_DESTACADO = '".$Tsg_proyecto["PRO_DESTACADO"]."'";
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
		  $Tsg_proyecto = array();
		  $Tsg_proyecto['N_Eliminados'] = $mySqli->affected_rows;
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
		$aErrores["bEliminarTsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBajaTsg_proyecto(&$Tsg_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_PROYECTO SET FLAG_ACTIVO = 0 ";
		$query =" WHERE ";
		if($Tsg_proyecto["PRO_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA DEL PROYECTO IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_ID = '".$Tsg_proyecto["PRO_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_NOMBRE = '".$Tsg_proyecto["PRO_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_DESCRIP"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_DESCRIP = '".$Tsg_proyecto["PRO_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_USU_ID_JEFEPRO"] != NULL) // INT(10) NOT NULL COMMENT 'IDENTIFICADOR DEL JEFE DE PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_USU_ID_JEFEPRO = '".$Tsg_proyecto["PRO_USU_ID_JEFEPRO"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_DURACION"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'DURACI驨 DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_DURACION = '".$Tsg_proyecto["PRO_DURACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_INI"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA INICIO DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_INI = '".$Tsg_proyecto["PRO_FECHA_INI"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_TERM"] != NULL) // DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'FECHA TERMINO DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_TERM = '".$Tsg_proyecto["PRO_FECHA_TERM"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_GARAN"] != NULL) // DATETIME NULL DEFAULT NULL COMMENT 'FECHA DE GARANT鞟 DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_GARAN = '".$Tsg_proyecto["PRO_FECHA_GARAN"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_ACTIVO = '".$Tsg_proyecto["PRO_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["TSG_CLIENTECLI_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_CLIENTECLI_ID = ".$Tsg_proyecto["TSG_CLIENTECLI_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto["TSG_ESTADO_PROYECTOEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ESTADO_PROYECTOEST_ID = ".$Tsg_proyecto["TSG_ESTADO_PROYECTOEST_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto["SQI_TIPO_PROYECTOTIP_ID"] != NULL) // INT(10) DEFAULT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="SQI_TIPO_PROYECTOTIP_ID = ".$Tsg_proyecto["SQI_TIPO_PROYECTOTIP_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_USU_CREADOR = '".$Tsg_proyecto["PRO_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_CREACION = '".$Tsg_proyecto["PRO_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_MODIFICACION = '".$Tsg_proyecto["PRO_FECHA_MODIFICACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_DESTACADO"] != NULL) // TINYINT(1) DEFAULT NULL COMMENT 'DESTACADO (ESTRELLITA)'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_DESTACADO = '".$Tsg_proyecto["PRO_DESTACADO"]."'";
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
		  $Tsg_proyecto = array();
		  $Tsg_proyecto['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bBajaTsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bAltaTsg_proyecto(&$Tsg_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_PROYECTO SET FLAG_ACTIVO = 1 ";
		$query =" WHERE ";
		if($Tsg_proyecto["PRO_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA DEL PROYECTO IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_ID = '".$Tsg_proyecto["PRO_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_NOMBRE = '".$Tsg_proyecto["PRO_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_DESCRIP"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_DESCRIP = '".$Tsg_proyecto["PRO_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_USU_ID_JEFEPRO"] != NULL) // INT(10) NOT NULL COMMENT 'IDENTIFICADOR DEL JEFE DE PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_USU_ID_JEFEPRO = '".$Tsg_proyecto["PRO_USU_ID_JEFEPRO"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_DURACION"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'DURACI驨 DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_DURACION = '".$Tsg_proyecto["PRO_DURACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_INI"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA INICIO DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_INI = '".$Tsg_proyecto["PRO_FECHA_INI"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_TERM"] != NULL) // DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'FECHA TERMINO DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_TERM = '".$Tsg_proyecto["PRO_FECHA_TERM"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_GARAN"] != NULL) // DATETIME NULL DEFAULT NULL COMMENT 'FECHA DE GARANT鞟 DEL PROYECTO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_GARAN = '".$Tsg_proyecto["PRO_FECHA_GARAN"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT 'ELIMINACI驨 L驡ICA DEL SISTEMA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_ACTIVO = '".$Tsg_proyecto["PRO_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["TSG_CLIENTECLI_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_CLIENTECLI_ID = ".$Tsg_proyecto["TSG_CLIENTECLI_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto["TSG_ESTADO_PROYECTOEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ESTADO_PROYECTOEST_ID = ".$Tsg_proyecto["TSG_ESTADO_PROYECTOEST_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto["SQI_TIPO_PROYECTOTIP_ID"] != NULL) // INT(10) DEFAULT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="SQI_TIPO_PROYECTOTIP_ID = ".$Tsg_proyecto["SQI_TIPO_PROYECTOTIP_ID"];
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_USU_CREADOR = '".$Tsg_proyecto["PRO_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_CREACION"] != NULL) // DATETIME NOT NULL COMMENT 'FECHA CREACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_CREACION = '".$Tsg_proyecto["PRO_FECHA_CREACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_FECHA_MODIFICACION"] != NULL) // DATETIME DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_FECHA_MODIFICACION = '".$Tsg_proyecto["PRO_FECHA_MODIFICACION"]."'";
			$flag = TRUE;
		}
		if($Tsg_proyecto["PRO_DESTACADO"] != NULL) // TINYINT(1) DEFAULT NULL COMMENT 'DESTACADO (ESTRELLITA)'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="PRO_DESTACADO = '".$Tsg_proyecto["PRO_DESTACADO"]."'";
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
		  $Tsg_proyecto = array();
		  $Tsg_proyecto['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bAltaTsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bValidarTsg_proyecto(&$Tsg_proyecto, &$aErrores)
{
	try
	{
		/* Query aqui */
/* Logica aqui */
		return TRUE;
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>