<?php

include('..\Ent\Tsg_usuario.class.php');
/********************************************************  
* Clase Tsg_usuarioDA autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_usuarioDA {

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
* Funcion bExisteTsg_usuario                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuciÃ³n correcta             *  
*       FALSE = ejecuciÃ³n incorrecta           *  
***********************************************/  
public function bExisteTsg_usuario(&$Tsg_usuario, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="SELECT 1 FROM TSG_USUARIO WHERE ";
		if($Tsg_usuario["USU_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR úNICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_ID = '".$Tsg_usuario["USU_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_NOMBRE = '".$Tsg_usuario["USU_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_APELLIDO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'APELLIDO DEL USUARIO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_APELLIDO = '".$Tsg_usuario["USU_APELLIDO"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_TELEFONO"] != NULL) // TINYINT(10) NOT NULL COMMENT 'TELéFONO DEL USUARIO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_TELEFONO = ".$Tsg_usuario["USU_TELEFONO"];
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_DIRECCION"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'DIRECCIóN DEL USUARIO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_DIRECCION = '".$Tsg_usuario["USU_DIRECCION"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_FECHA_CREA"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA DE CREACIóN SE USARA LA SECUENCIA DE TIMESTAMP PARA GUARDAR LA HORA Y LA FECHA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_FECHA_CREA = '".$Tsg_usuario["USU_FECHA_CREA"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_FECHA_MOD"] != NULL) // DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'FECHA DE MODIFICACIóN SE GUARDARá CON LA SECUENCIA TIMESTAMP PARA GUARDAR LA HORA Y LA FECHA DE LA MODIFICACIóN.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_FECHA_MOD = '".$Tsg_usuario["USU_FECHA_MOD"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_RUT"] != NULL) // VARCHAR(50) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'SE DEFINE EL RUT DEL USUARIO SE CONSIDERA COMO VARCHAR YA QUE CONTIENEN NúMERO Y CARACTERES.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_RUT = '".$Tsg_usuario["USU_RUT"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_PASS"] != NULL) // VARCHAR(20) COLLATE UTF8_SPANISH_CI NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_PASS = '".$Tsg_usuario["USU_PASS"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_CORREO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'CORREO ELECTRóNICO DEL USUARIO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_CORREO = '".$Tsg_usuario["USU_CORREO"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_ACTIVO"] != NULL) // INT(2) NOT NULL COMMENT 'SE DEJA LA TABLA DE USUARIO CON LA OPCIóN PARA SABER SI EL USUARIO ESTA ACTIVO O INACTIVO EN LA BD DE MOSTRARA OCULTO SI SE ELIMINO POR SISTEMA. (1 O 0)'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_ACTIVO = '".$Tsg_usuario["USU_ACTIVO"]."'";
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
		$aErrores["bExisteTsg_usuario"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_usuario                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuciÃ³n correcta             *  
*       FALSE = ejecuciÃ³n incorrecta           *  
***********************************************/  
public function bBuscarTsg_usuario(&$Tsg_usuario, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = false;
		$query ="SELECT ";
		$query.=     "USU_ID ,";
		$query.=     "USU_NOMBRE ,";
		$query.=     "USU_APELLIDO ,";
		$query.=     "USU_TELEFONO ,";
		$query.=     "USU_DIRECCION ,";
		$query.=     "USU_FECHA_CREA ,";
		$query.=     "USU_FECHA_MOD ,";
		$query.=     "USU_RUT ,";
		$query.=     "USU_PASS ,";
		$query.=     "USU_CORREO ,";
		$query.=     "USU_ACTIVO ";
		$query.=" FROM TSG_USUARIO ";
		if($Tsg_usuario["USU_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR úNICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="USU_ID = '".$Tsg_usuario["USU_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="USU_NOMBRE = '".$Tsg_usuario["USU_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_APELLIDO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'APELLIDO DEL USUARIO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="USU_APELLIDO = '".$Tsg_usuario["USU_APELLIDO"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_TELEFONO"] != NULL) // TINYINT(10) NOT NULL COMMENT 'TELéFONO DEL USUARIO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="USU_TELEFONO = ".$Tsg_usuario["USU_TELEFONO"];
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_DIRECCION"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'DIRECCIóN DEL USUARIO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="USU_DIRECCION = '".$Tsg_usuario["USU_DIRECCION"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_FECHA_CREA"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA DE CREACIóN SE USARA LA SECUENCIA DE TIMESTAMP PARA GUARDAR LA HORA Y LA FECHA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="USU_FECHA_CREA = '".$Tsg_usuario["USU_FECHA_CREA"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_FECHA_MOD"] != NULL) // DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'FECHA DE MODIFICACIóN SE GUARDARá CON LA SECUENCIA TIMESTAMP PARA GUARDAR LA HORA Y LA FECHA DE LA MODIFICACIóN.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="USU_FECHA_MOD = '".$Tsg_usuario["USU_FECHA_MOD"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_RUT"] != NULL) // VARCHAR(50) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'SE DEFINE EL RUT DEL USUARIO SE CONSIDERA COMO VARCHAR YA QUE CONTIENEN NúMERO Y CARACTERES.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="USU_RUT = '".$Tsg_usuario["USU_RUT"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_PASS"] != NULL) // VARCHAR(20) COLLATE UTF8_SPANISH_CI NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="USU_PASS = '".$Tsg_usuario["USU_PASS"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_CORREO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'CORREO ELECTRóNICO DEL USUARIO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="USU_CORREO = '".$Tsg_usuario["USU_CORREO"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_ACTIVO"] != NULL) // INT(2) NOT NULL COMMENT 'SE DEJA LA TABLA DE USUARIO CON LA OPCIóN PARA SABER SI EL USUARIO ESTA ACTIVO O INACTIVO EN LA BD DE MOSTRARA OCULTO SI SE ELIMINO POR SISTEMA. (1 O 0)'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="USU_ACTIVO = '".$Tsg_usuario["USU_ACTIVO"]."'";
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
			$Tsg_usuario = array();
			while($row = $res->fetch_assoc())
			{
				$Tsg_usuario[$x]['USU_ID'] = $row['USU_ID'];
				$Tsg_usuario[$x]['USU_NOMBRE'] = $row['USU_NOMBRE'];
				$Tsg_usuario[$x]['USU_APELLIDO'] = $row['USU_APELLIDO'];
				$Tsg_usuario[$x]['USU_TELEFONO'] = $row['USU_TELEFONO'];
				$Tsg_usuario[$x]['USU_DIRECCION'] = $row['USU_DIRECCION'];
				$Tsg_usuario[$x]['USU_FECHA_CREA'] = $row['USU_FECHA_CREA'];
				$Tsg_usuario[$x]['USU_FECHA_MOD'] = $row['USU_FECHA_MOD'];
				$Tsg_usuario[$x]['USU_RUT'] = $row['USU_RUT'];
				$Tsg_usuario[$x]['USU_PASS'] = $row['USU_PASS'];
				$Tsg_usuario[$x]['USU_CORREO'] = $row['USU_CORREO'];
				$Tsg_usuario[$x]['USU_ACTIVO'] = $row['USU_ACTIVO'];
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
		$aErrores["bBuscarTsg_usuario"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_usuario                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuciÃ³n correcta             *  
*       FALSE = ejecuciÃ³n incorrecta           *  
***********************************************/  
public function bInsertarTsg_usuario(&$Tsg_usuario, &$aErrores)
{
	try
	{
		/* Query aqui */
		$query ="INSERT INTO TSG_USUARIO (";
		$query.="USU_ID ,";
		$query.="USU_NOMBRE ,";
		$query.="USU_APELLIDO ,";
		$query.="USU_TELEFONO ,";
		$query.="USU_DIRECCION ,";
		$query.="USU_FECHA_CREA ,";
		$query.="USU_FECHA_MOD ,";
		$query.="USU_RUT ,";
		$query.="USU_PASS ,";
		$query.="USU_CORREO ,";
		$query.="USU_ACTIVO ";
		$query.=")";
		$query.=" VALUES (";
		$query.="'".$Tsg_usuario["USU_ID"]."',";
		$query.="'".$Tsg_usuario["USU_NOMBRE"]."',";
		$query.="'".$Tsg_usuario["USU_APELLIDO"]."',";
		$query.= $Tsg_usuario["USU_TELEFONO"].",";
		$query.="'".$Tsg_usuario["USU_DIRECCION"]."',";
		$query.="'".$Tsg_usuario["USU_FECHA_CREA"]."',";
		$query.="'".$Tsg_usuario["USU_FECHA_MOD"]."',";
		$query.="'".$Tsg_usuario["USU_RUT"]."',";
		$query.="'".$Tsg_usuario["USU_PASS"]."',";
		$query.="'".$Tsg_usuario["USU_CORREO"]."',";
		$query.="'".$Tsg_usuario["USU_ACTIVO"]."'";
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
		  $Tsg_usuario = array();
		  $Tsg_usuario['ID_insercion'] = $mySqli->insert_id;
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
		$aErrores["bInsertarTsg_usuario"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_usuario                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuciÃ³n correcta             *  
*       FALSE = ejecuciÃ³n incorrecta           *  
***********************************************/  
public function bModificarTsg_usuario(&$Tsg_usuario, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_USUARIO ";
		if($Tsg_usuario["USU_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR úNICO DE LA TABLA'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="USU_ID = '".$Tsg_usuario["USU_ID"]."',";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="USU_NOMBRE = '".$Tsg_usuario["USU_NOMBRE"]."',";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_APELLIDO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'APELLIDO DEL USUARIO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="USU_APELLIDO = '".$Tsg_usuario["USU_APELLIDO"]."',";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_TELEFONO"] != NULL) // TINYINT(10) NOT NULL COMMENT 'TELéFONO DEL USUARIO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="USU_TELEFONO = ".$Tsg_usuario["USU_TELEFONO"].",";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_DIRECCION"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'DIRECCIóN DEL USUARIO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="USU_DIRECCION = '".$Tsg_usuario["USU_DIRECCION"]."',";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_FECHA_CREA"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA DE CREACIóN SE USARA LA SECUENCIA DE TIMESTAMP PARA GUARDAR LA HORA Y LA FECHA.'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="USU_FECHA_CREA = '".$Tsg_usuario["USU_FECHA_CREA"]."',";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_FECHA_MOD"] != NULL) // DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'FECHA DE MODIFICACIóN SE GUARDARá CON LA SECUENCIA TIMESTAMP PARA GUARDAR LA HORA Y LA FECHA DE LA MODIFICACIóN.'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="USU_FECHA_MOD = '".$Tsg_usuario["USU_FECHA_MOD"]."',";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_RUT"] != NULL) // VARCHAR(50) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'SE DEFINE EL RUT DEL USUARIO SE CONSIDERA COMO VARCHAR YA QUE CONTIENEN NúMERO Y CARACTERES.'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="USU_RUT = '".$Tsg_usuario["USU_RUT"]."',";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_PASS"] != NULL) // VARCHAR(20) COLLATE UTF8_SPANISH_CI NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="USU_PASS = '".$Tsg_usuario["USU_PASS"]."',";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_CORREO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'CORREO ELECTRóNICO DEL USUARIO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="USU_CORREO = '".$Tsg_usuario["USU_CORREO"]."',";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_ACTIVO"] != NULL) // INT(2) NOT NULL COMMENT 'SE DEJA LA TABLA DE USUARIO CON LA OPCIóN PARA SABER SI EL USUARIO ESTA ACTIVO O INACTIVO EN LA BD DE MOSTRARA OCULTO SI SE ELIMINO POR SISTEMA. (1 O 0)'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="USU_ACTIVO = '".$Tsg_usuario["USU_ACTIVO"]."'";
			$flag = TRUE;
		}
		$flag = FALSE;
		$query =" WHERE ";
		if($Tsg_usuario["USU_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR úNICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_ID = '".$Tsg_usuario["USU_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_NOMBRE = '".$Tsg_usuario["USU_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_APELLIDO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'APELLIDO DEL USUARIO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_APELLIDO = '".$Tsg_usuario["USU_APELLIDO"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_TELEFONO"] != NULL) // TINYINT(10) NOT NULL COMMENT 'TELéFONO DEL USUARIO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_TELEFONO = ".$Tsg_usuario["USU_TELEFONO"];
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_DIRECCION"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'DIRECCIóN DEL USUARIO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_DIRECCION = '".$Tsg_usuario["USU_DIRECCION"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_FECHA_CREA"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA DE CREACIóN SE USARA LA SECUENCIA DE TIMESTAMP PARA GUARDAR LA HORA Y LA FECHA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_FECHA_CREA = '".$Tsg_usuario["USU_FECHA_CREA"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_FECHA_MOD"] != NULL) // DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'FECHA DE MODIFICACIóN SE GUARDARá CON LA SECUENCIA TIMESTAMP PARA GUARDAR LA HORA Y LA FECHA DE LA MODIFICACIóN.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_FECHA_MOD = '".$Tsg_usuario["USU_FECHA_MOD"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_RUT"] != NULL) // VARCHAR(50) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'SE DEFINE EL RUT DEL USUARIO SE CONSIDERA COMO VARCHAR YA QUE CONTIENEN NúMERO Y CARACTERES.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_RUT = '".$Tsg_usuario["USU_RUT"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_PASS"] != NULL) // VARCHAR(20) COLLATE UTF8_SPANISH_CI NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_PASS = '".$Tsg_usuario["USU_PASS"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_CORREO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'CORREO ELECTRóNICO DEL USUARIO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_CORREO = '".$Tsg_usuario["USU_CORREO"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_ACTIVO"] != NULL) // INT(2) NOT NULL COMMENT 'SE DEJA LA TABLA DE USUARIO CON LA OPCIóN PARA SABER SI EL USUARIO ESTA ACTIVO O INACTIVO EN LA BD DE MOSTRARA OCULTO SI SE ELIMINO POR SISTEMA. (1 O 0)'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_ACTIVO = '".$Tsg_usuario["USU_ACTIVO"]."'";
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
		  $Tsg_usuario = array();
		  $Tsg_usuario['N_Modificados'] = $mySqli->affected_rows;
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
		$aErrores["bModificarTsg_usuario"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_usuario                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuciÃ³n correcta             *  
*       FALSE = ejecuciÃ³n incorrecta           *  
***********************************************/  
public function bEliminarTsg_usuario(&$Tsg_usuario, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="DELETE FROM TSG_USUARIO ";
		$query =" WHERE ";
		if($Tsg_usuario["USU_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR úNICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_ID = '".$Tsg_usuario["USU_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_NOMBRE = '".$Tsg_usuario["USU_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_APELLIDO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'APELLIDO DEL USUARIO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_APELLIDO = '".$Tsg_usuario["USU_APELLIDO"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_TELEFONO"] != NULL) // TINYINT(10) NOT NULL COMMENT 'TELéFONO DEL USUARIO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_TELEFONO = ".$Tsg_usuario["USU_TELEFONO"];
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_DIRECCION"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'DIRECCIóN DEL USUARIO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_DIRECCION = '".$Tsg_usuario["USU_DIRECCION"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_FECHA_CREA"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA DE CREACIóN SE USARA LA SECUENCIA DE TIMESTAMP PARA GUARDAR LA HORA Y LA FECHA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_FECHA_CREA = '".$Tsg_usuario["USU_FECHA_CREA"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_FECHA_MOD"] != NULL) // DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'FECHA DE MODIFICACIóN SE GUARDARá CON LA SECUENCIA TIMESTAMP PARA GUARDAR LA HORA Y LA FECHA DE LA MODIFICACIóN.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_FECHA_MOD = '".$Tsg_usuario["USU_FECHA_MOD"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_RUT"] != NULL) // VARCHAR(50) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'SE DEFINE EL RUT DEL USUARIO SE CONSIDERA COMO VARCHAR YA QUE CONTIENEN NúMERO Y CARACTERES.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_RUT = '".$Tsg_usuario["USU_RUT"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_PASS"] != NULL) // VARCHAR(20) COLLATE UTF8_SPANISH_CI NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_PASS = '".$Tsg_usuario["USU_PASS"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_CORREO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'CORREO ELECTRóNICO DEL USUARIO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_CORREO = '".$Tsg_usuario["USU_CORREO"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_ACTIVO"] != NULL) // INT(2) NOT NULL COMMENT 'SE DEJA LA TABLA DE USUARIO CON LA OPCIóN PARA SABER SI EL USUARIO ESTA ACTIVO O INACTIVO EN LA BD DE MOSTRARA OCULTO SI SE ELIMINO POR SISTEMA. (1 O 0)'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_ACTIVO = '".$Tsg_usuario["USU_ACTIVO"]."'";
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
		  $Tsg_usuario = array();
		  $Tsg_usuario['N_Eliminados'] = $mySqli->affected_rows;
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
		$aErrores["bEliminarTsg_usuario"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_usuario                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuciÃ³n correcta             *  
*       FALSE = ejecuciÃ³n incorrecta           *  
***********************************************/  
public function bBajaTsg_usuario(&$Tsg_usuario, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_USUARIO SET FLAG_ACTIVO = 0 ";
		$query =" WHERE ";
		if($Tsg_usuario["USU_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR úNICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_ID = '".$Tsg_usuario["USU_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_NOMBRE = '".$Tsg_usuario["USU_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_APELLIDO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'APELLIDO DEL USUARIO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_APELLIDO = '".$Tsg_usuario["USU_APELLIDO"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_TELEFONO"] != NULL) // TINYINT(10) NOT NULL COMMENT 'TELéFONO DEL USUARIO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_TELEFONO = ".$Tsg_usuario["USU_TELEFONO"];
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_DIRECCION"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'DIRECCIóN DEL USUARIO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_DIRECCION = '".$Tsg_usuario["USU_DIRECCION"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_FECHA_CREA"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA DE CREACIóN SE USARA LA SECUENCIA DE TIMESTAMP PARA GUARDAR LA HORA Y LA FECHA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_FECHA_CREA = '".$Tsg_usuario["USU_FECHA_CREA"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_FECHA_MOD"] != NULL) // DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'FECHA DE MODIFICACIóN SE GUARDARá CON LA SECUENCIA TIMESTAMP PARA GUARDAR LA HORA Y LA FECHA DE LA MODIFICACIóN.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_FECHA_MOD = '".$Tsg_usuario["USU_FECHA_MOD"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_RUT"] != NULL) // VARCHAR(50) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'SE DEFINE EL RUT DEL USUARIO SE CONSIDERA COMO VARCHAR YA QUE CONTIENEN NúMERO Y CARACTERES.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_RUT = '".$Tsg_usuario["USU_RUT"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_PASS"] != NULL) // VARCHAR(20) COLLATE UTF8_SPANISH_CI NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_PASS = '".$Tsg_usuario["USU_PASS"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_CORREO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'CORREO ELECTRóNICO DEL USUARIO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_CORREO = '".$Tsg_usuario["USU_CORREO"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_ACTIVO"] != NULL) // INT(2) NOT NULL COMMENT 'SE DEJA LA TABLA DE USUARIO CON LA OPCIóN PARA SABER SI EL USUARIO ESTA ACTIVO O INACTIVO EN LA BD DE MOSTRARA OCULTO SI SE ELIMINO POR SISTEMA. (1 O 0)'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_ACTIVO = '".$Tsg_usuario["USU_ACTIVO"]."'";
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
		  $Tsg_usuario = array();
		  $Tsg_usuario['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bBajaTsg_usuario"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_usuario                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuciÃ³n correcta             *  
*       FALSE = ejecuciÃ³n incorrecta           *  
***********************************************/  
public function bAltaTsg_usuario(&$Tsg_usuario, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_USUARIO SET FLAG_ACTIVO = 1 ";
		$query =" WHERE ";
		if($Tsg_usuario["USU_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR úNICO DE LA TABLA'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_ID = '".$Tsg_usuario["USU_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_NOMBRE = '".$Tsg_usuario["USU_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_APELLIDO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'APELLIDO DEL USUARIO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_APELLIDO = '".$Tsg_usuario["USU_APELLIDO"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_TELEFONO"] != NULL) // TINYINT(10) NOT NULL COMMENT 'TELéFONO DEL USUARIO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_TELEFONO = ".$Tsg_usuario["USU_TELEFONO"];
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_DIRECCION"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'DIRECCIóN DEL USUARIO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_DIRECCION = '".$Tsg_usuario["USU_DIRECCION"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_FECHA_CREA"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA DE CREACIóN SE USARA LA SECUENCIA DE TIMESTAMP PARA GUARDAR LA HORA Y LA FECHA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_FECHA_CREA = '".$Tsg_usuario["USU_FECHA_CREA"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_FECHA_MOD"] != NULL) // DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'FECHA DE MODIFICACIóN SE GUARDARá CON LA SECUENCIA TIMESTAMP PARA GUARDAR LA HORA Y LA FECHA DE LA MODIFICACIóN.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_FECHA_MOD = '".$Tsg_usuario["USU_FECHA_MOD"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_RUT"] != NULL) // VARCHAR(50) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'SE DEFINE EL RUT DEL USUARIO SE CONSIDERA COMO VARCHAR YA QUE CONTIENEN NúMERO Y CARACTERES.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_RUT = '".$Tsg_usuario["USU_RUT"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_PASS"] != NULL) // VARCHAR(20) COLLATE UTF8_SPANISH_CI NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_PASS = '".$Tsg_usuario["USU_PASS"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_CORREO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'CORREO ELECTRóNICO DEL USUARIO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_CORREO = '".$Tsg_usuario["USU_CORREO"]."'";
			$flag = TRUE;
		}
		if($Tsg_usuario["USU_ACTIVO"] != NULL) // INT(2) NOT NULL COMMENT 'SE DEJA LA TABLA DE USUARIO CON LA OPCIóN PARA SABER SI EL USUARIO ESTA ACTIVO O INACTIVO EN LA BD DE MOSTRARA OCULTO SI SE ELIMINO POR SISTEMA. (1 O 0)'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="USU_ACTIVO = '".$Tsg_usuario["USU_ACTIVO"]."'";
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
		  $Tsg_usuario = array();
		  $Tsg_usuario['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bAltaTsg_usuario"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_usuario                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuciÃ³n correcta             *  
*       FALSE = ejecuciÃ³n incorrecta           *  
***********************************************/  
public function bValidarTsg_usuario(&$Tsg_usuario, &$aErrores)
{
	try
	{
		/* Query aqui */
/* Logica aqui */
		return TRUE;
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_usuario"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>