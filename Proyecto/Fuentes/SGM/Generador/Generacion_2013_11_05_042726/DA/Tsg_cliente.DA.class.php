<?php

include('..\Ent\Tsg_cliente.class.php');
/********************************************************  
* Clase Tsg_clienteDA autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_clienteDA {

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
* Funcion bExisteTsg_cliente                 *  
* Parametros entrada:                          *  
*      $Tsg_cliente = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bExisteTsg_cliente(&$Tsg_cliente, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="SELECT 1 FROM TSG_CLIENTE WHERE ";
		if($Tsg_cliente["CLI_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA CLIENTE.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_ID = '".$Tsg_cliente["CLI_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'CORRESPONDE AL NOMBRE DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_NOMBRE = '".$Tsg_cliente["CLI_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_APELLIDO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'APELLIDO DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_APELLIDO = '".$Tsg_cliente["CLI_APELLIDO"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_CORREO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'CORREO ELECTR驨ICO DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_CORREO = '".$Tsg_cliente["CLI_CORREO"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_EMPRESA"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'NOMBRE DE LA EMPRESA EN LA CUAL SE ENCUENTRA POSICIONADO EL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_EMPRESA = '".$Tsg_cliente["CLI_EMPRESA"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_RUT"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'RUT DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_RUT = '".$Tsg_cliente["CLI_RUT"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_DIRECCION"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DIRECCI驨 DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_DIRECCION = '".$Tsg_cliente["CLI_DIRECCION"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_FECHA_INI"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA DE INICIO DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_FECHA_INI = '".$Tsg_cliente["CLI_FECHA_INI"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_FECHA_MOD"] != NULL) // DATETIME NULL DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨 DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_FECHA_MOD = '".$Tsg_cliente["CLI_FECHA_MOD"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT '\R\NSE DEJA LA TABLA DE CLIENTE CON LA OPCI驨 PARA SABER SI EL USUARIO ESTA ACTIVO O INACTIVO EN LA BD SE MOSTRARA OCULTO SI SE ELIMINO POR SISTEMA. (1 O 0 ) ELIMINACI驨 LOGICA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_ACTIVO = '".$Tsg_cliente["CLI_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_USU_CREADOR = '".$Tsg_cliente["CLI_USU_CREADOR"]."'";
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
		$aErrores["bExisteTsg_cliente"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_cliente                 *  
* Parametros entrada:                          *  
*      $Tsg_cliente = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBuscarTsg_cliente(&$Tsg_cliente, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = false;
		$query ="SELECT ";
		$query.=     "CLI_ID ,";
		$query.=     "CLI_NOMBRE ,";
		$query.=     "CLI_APELLIDO ,";
		$query.=     "CLI_CORREO ,";
		$query.=     "CLI_EMPRESA ,";
		$query.=     "CLI_RUT ,";
		$query.=     "CLI_DIRECCION ,";
		$query.=     "CLI_FECHA_INI ,";
		$query.=     "CLI_FECHA_MOD ,";
		$query.=     "CLI_ACTIVO ,";
		$query.=     "CLI_USU_CREADOR ";
		$query.=" FROM TSG_CLIENTE ";
		if($Tsg_cliente["CLI_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA CLIENTE.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="CLI_ID = '".$Tsg_cliente["CLI_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'CORRESPONDE AL NOMBRE DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="CLI_NOMBRE = '".$Tsg_cliente["CLI_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_APELLIDO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'APELLIDO DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="CLI_APELLIDO = '".$Tsg_cliente["CLI_APELLIDO"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_CORREO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'CORREO ELECTR驨ICO DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="CLI_CORREO = '".$Tsg_cliente["CLI_CORREO"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_EMPRESA"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'NOMBRE DE LA EMPRESA EN LA CUAL SE ENCUENTRA POSICIONADO EL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="CLI_EMPRESA = '".$Tsg_cliente["CLI_EMPRESA"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_RUT"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'RUT DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="CLI_RUT = '".$Tsg_cliente["CLI_RUT"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_DIRECCION"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DIRECCI驨 DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="CLI_DIRECCION = '".$Tsg_cliente["CLI_DIRECCION"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_FECHA_INI"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA DE INICIO DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="CLI_FECHA_INI = '".$Tsg_cliente["CLI_FECHA_INI"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_FECHA_MOD"] != NULL) // DATETIME NULL DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨 DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="CLI_FECHA_MOD = '".$Tsg_cliente["CLI_FECHA_MOD"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT '\R\NSE DEJA LA TABLA DE CLIENTE CON LA OPCI驨 PARA SABER SI EL USUARIO ESTA ACTIVO O INACTIVO EN LA BD SE MOSTRARA OCULTO SI SE ELIMINO POR SISTEMA. (1 O 0 ) ELIMINACI驨 LOGICA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="CLI_ACTIVO = '".$Tsg_cliente["CLI_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="CLI_USU_CREADOR = '".$Tsg_cliente["CLI_USU_CREADOR"]."'";
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
			$Tsg_cliente = array();
			while($row = $res->fetch_assoc())
			{
				$Tsg_cliente[$x]['CLI_ID'] = $row['CLI_ID'];
				$Tsg_cliente[$x]['CLI_NOMBRE'] = $row['CLI_NOMBRE'];
				$Tsg_cliente[$x]['CLI_APELLIDO'] = $row['CLI_APELLIDO'];
				$Tsg_cliente[$x]['CLI_CORREO'] = $row['CLI_CORREO'];
				$Tsg_cliente[$x]['CLI_EMPRESA'] = $row['CLI_EMPRESA'];
				$Tsg_cliente[$x]['CLI_RUT'] = $row['CLI_RUT'];
				$Tsg_cliente[$x]['CLI_DIRECCION'] = $row['CLI_DIRECCION'];
				$Tsg_cliente[$x]['CLI_FECHA_INI'] = $row['CLI_FECHA_INI'];
				$Tsg_cliente[$x]['CLI_FECHA_MOD'] = $row['CLI_FECHA_MOD'];
				$Tsg_cliente[$x]['CLI_ACTIVO'] = $row['CLI_ACTIVO'];
				$Tsg_cliente[$x]['CLI_USU_CREADOR'] = $row['CLI_USU_CREADOR'];
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
		$aErrores["bBuscarTsg_cliente"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_cliente                 *  
* Parametros entrada:                          *  
*      $Tsg_cliente = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bInsertarTsg_cliente(&$Tsg_cliente, &$aErrores)
{
	try
	{
		/* Query aqui */
		$query ="INSERT INTO TSG_CLIENTE (";
		$query.="CLI_ID ,";
		$query.="CLI_NOMBRE ,";
		$query.="CLI_APELLIDO ,";
		$query.="CLI_CORREO ,";
		$query.="CLI_EMPRESA ,";
		$query.="CLI_RUT ,";
		$query.="CLI_DIRECCION ,";
		$query.="CLI_FECHA_INI ,";
		$query.="CLI_FECHA_MOD ,";
		$query.="CLI_ACTIVO ,";
		$query.="CLI_USU_CREADOR ";
		$query.=")";
		$query.=" VALUES (";
		$query.="'".$Tsg_cliente["CLI_ID"]."',";
		$query.="'".$Tsg_cliente["CLI_NOMBRE"]."',";
		$query.="'".$Tsg_cliente["CLI_APELLIDO"]."',";
		$query.="'".$Tsg_cliente["CLI_CORREO"]."',";
		$query.="'".$Tsg_cliente["CLI_EMPRESA"]."',";
		$query.="'".$Tsg_cliente["CLI_RUT"]."',";
		$query.="'".$Tsg_cliente["CLI_DIRECCION"]."',";
		$query.="'".$Tsg_cliente["CLI_FECHA_INI"]."',";
		$query.="'".$Tsg_cliente["CLI_FECHA_MOD"]."',";
		$query.="'".$Tsg_cliente["CLI_ACTIVO"]."',";
		$query.="'".$Tsg_cliente["CLI_USU_CREADOR"]."'";
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
		  $Tsg_cliente = array();
		  $Tsg_cliente['ID_insercion'] = $mySqli->insert_id;
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
		$aErrores["bInsertarTsg_cliente"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_cliente                 *  
* Parametros entrada:                          *  
*      $Tsg_cliente = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bModificarTsg_cliente(&$Tsg_cliente, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_CLIENTE ";
		if($Tsg_cliente["CLI_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA CLIENTE.'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="CLI_ID = '".$Tsg_cliente["CLI_ID"]."',";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'CORRESPONDE AL NOMBRE DEL CLIENTE'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="CLI_NOMBRE = '".$Tsg_cliente["CLI_NOMBRE"]."',";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_APELLIDO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'APELLIDO DEL CLIENTE'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="CLI_APELLIDO = '".$Tsg_cliente["CLI_APELLIDO"]."',";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_CORREO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'CORREO ELECTR驨ICO DEL CLIENTE'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="CLI_CORREO = '".$Tsg_cliente["CLI_CORREO"]."',";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_EMPRESA"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'NOMBRE DE LA EMPRESA EN LA CUAL SE ENCUENTRA POSICIONADO EL CLIENTE'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="CLI_EMPRESA = '".$Tsg_cliente["CLI_EMPRESA"]."',";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_RUT"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'RUT DEL CLIENTE'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="CLI_RUT = '".$Tsg_cliente["CLI_RUT"]."',";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_DIRECCION"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DIRECCI驨 DEL CLIENTE'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="CLI_DIRECCION = '".$Tsg_cliente["CLI_DIRECCION"]."',";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_FECHA_INI"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA DE INICIO DEL CLIENTE'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="CLI_FECHA_INI = '".$Tsg_cliente["CLI_FECHA_INI"]."',";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_FECHA_MOD"] != NULL) // DATETIME NULL DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨 DEL CLIENTE'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="CLI_FECHA_MOD = '".$Tsg_cliente["CLI_FECHA_MOD"]."',";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT '\R\NSE DEJA LA TABLA DE CLIENTE CON LA OPCI驨 PARA SABER SI EL USUARIO ESTA ACTIVO O INACTIVO EN LA BD SE MOSTRARA OCULTO SI SE ELIMINO POR SISTEMA. (1 O 0 ) ELIMINACI驨 LOGICA.'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="CLI_ACTIVO = '".$Tsg_cliente["CLI_ACTIVO"]."',";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="CLI_USU_CREADOR = '".$Tsg_cliente["CLI_USU_CREADOR"]."'";
			$flag = TRUE;
		}
		$flag = FALSE;
		$query =" WHERE ";
		if($Tsg_cliente["CLI_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA CLIENTE.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_ID = '".$Tsg_cliente["CLI_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'CORRESPONDE AL NOMBRE DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_NOMBRE = '".$Tsg_cliente["CLI_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_APELLIDO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'APELLIDO DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_APELLIDO = '".$Tsg_cliente["CLI_APELLIDO"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_CORREO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'CORREO ELECTR驨ICO DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_CORREO = '".$Tsg_cliente["CLI_CORREO"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_EMPRESA"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'NOMBRE DE LA EMPRESA EN LA CUAL SE ENCUENTRA POSICIONADO EL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_EMPRESA = '".$Tsg_cliente["CLI_EMPRESA"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_RUT"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'RUT DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_RUT = '".$Tsg_cliente["CLI_RUT"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_DIRECCION"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DIRECCI驨 DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_DIRECCION = '".$Tsg_cliente["CLI_DIRECCION"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_FECHA_INI"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA DE INICIO DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_FECHA_INI = '".$Tsg_cliente["CLI_FECHA_INI"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_FECHA_MOD"] != NULL) // DATETIME NULL DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨 DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_FECHA_MOD = '".$Tsg_cliente["CLI_FECHA_MOD"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT '\R\NSE DEJA LA TABLA DE CLIENTE CON LA OPCI驨 PARA SABER SI EL USUARIO ESTA ACTIVO O INACTIVO EN LA BD SE MOSTRARA OCULTO SI SE ELIMINO POR SISTEMA. (1 O 0 ) ELIMINACI驨 LOGICA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_ACTIVO = '".$Tsg_cliente["CLI_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_USU_CREADOR = '".$Tsg_cliente["CLI_USU_CREADOR"]."'";
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
		  $Tsg_cliente = array();
		  $Tsg_cliente['N_Modificados'] = $mySqli->affected_rows;
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
		$aErrores["bModificarTsg_cliente"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_cliente                 *  
* Parametros entrada:                          *  
*      $Tsg_cliente = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bEliminarTsg_cliente(&$Tsg_cliente, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="DELETE FROM TSG_CLIENTE ";
		$query =" WHERE ";
		if($Tsg_cliente["CLI_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA CLIENTE.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_ID = '".$Tsg_cliente["CLI_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'CORRESPONDE AL NOMBRE DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_NOMBRE = '".$Tsg_cliente["CLI_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_APELLIDO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'APELLIDO DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_APELLIDO = '".$Tsg_cliente["CLI_APELLIDO"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_CORREO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'CORREO ELECTR驨ICO DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_CORREO = '".$Tsg_cliente["CLI_CORREO"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_EMPRESA"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'NOMBRE DE LA EMPRESA EN LA CUAL SE ENCUENTRA POSICIONADO EL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_EMPRESA = '".$Tsg_cliente["CLI_EMPRESA"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_RUT"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'RUT DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_RUT = '".$Tsg_cliente["CLI_RUT"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_DIRECCION"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DIRECCI驨 DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_DIRECCION = '".$Tsg_cliente["CLI_DIRECCION"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_FECHA_INI"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA DE INICIO DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_FECHA_INI = '".$Tsg_cliente["CLI_FECHA_INI"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_FECHA_MOD"] != NULL) // DATETIME NULL DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨 DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_FECHA_MOD = '".$Tsg_cliente["CLI_FECHA_MOD"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT '\R\NSE DEJA LA TABLA DE CLIENTE CON LA OPCI驨 PARA SABER SI EL USUARIO ESTA ACTIVO O INACTIVO EN LA BD SE MOSTRARA OCULTO SI SE ELIMINO POR SISTEMA. (1 O 0 ) ELIMINACI驨 LOGICA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_ACTIVO = '".$Tsg_cliente["CLI_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_USU_CREADOR = '".$Tsg_cliente["CLI_USU_CREADOR"]."'";
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
		  $Tsg_cliente = array();
		  $Tsg_cliente['N_Eliminados'] = $mySqli->affected_rows;
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
		$aErrores["bEliminarTsg_cliente"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_cliente                 *  
* Parametros entrada:                          *  
*      $Tsg_cliente = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBajaTsg_cliente(&$Tsg_cliente, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_CLIENTE SET FLAG_ACTIVO = 0 ";
		$query =" WHERE ";
		if($Tsg_cliente["CLI_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA CLIENTE.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_ID = '".$Tsg_cliente["CLI_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'CORRESPONDE AL NOMBRE DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_NOMBRE = '".$Tsg_cliente["CLI_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_APELLIDO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'APELLIDO DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_APELLIDO = '".$Tsg_cliente["CLI_APELLIDO"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_CORREO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'CORREO ELECTR驨ICO DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_CORREO = '".$Tsg_cliente["CLI_CORREO"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_EMPRESA"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'NOMBRE DE LA EMPRESA EN LA CUAL SE ENCUENTRA POSICIONADO EL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_EMPRESA = '".$Tsg_cliente["CLI_EMPRESA"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_RUT"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'RUT DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_RUT = '".$Tsg_cliente["CLI_RUT"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_DIRECCION"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DIRECCI驨 DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_DIRECCION = '".$Tsg_cliente["CLI_DIRECCION"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_FECHA_INI"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA DE INICIO DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_FECHA_INI = '".$Tsg_cliente["CLI_FECHA_INI"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_FECHA_MOD"] != NULL) // DATETIME NULL DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨 DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_FECHA_MOD = '".$Tsg_cliente["CLI_FECHA_MOD"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT '\R\NSE DEJA LA TABLA DE CLIENTE CON LA OPCI驨 PARA SABER SI EL USUARIO ESTA ACTIVO O INACTIVO EN LA BD SE MOSTRARA OCULTO SI SE ELIMINO POR SISTEMA. (1 O 0 ) ELIMINACI驨 LOGICA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_ACTIVO = '".$Tsg_cliente["CLI_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_USU_CREADOR = '".$Tsg_cliente["CLI_USU_CREADOR"]."'";
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
		  $Tsg_cliente = array();
		  $Tsg_cliente['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bBajaTsg_cliente"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_cliente                 *  
* Parametros entrada:                          *  
*      $Tsg_cliente = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bAltaTsg_cliente(&$Tsg_cliente, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_CLIENTE SET FLAG_ACTIVO = 1 ";
		$query =" WHERE ";
		if($Tsg_cliente["CLI_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DE LA CLIENTE.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_ID = '".$Tsg_cliente["CLI_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'CORRESPONDE AL NOMBRE DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_NOMBRE = '".$Tsg_cliente["CLI_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_APELLIDO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'APELLIDO DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_APELLIDO = '".$Tsg_cliente["CLI_APELLIDO"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_CORREO"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'CORREO ELECTR驨ICO DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_CORREO = '".$Tsg_cliente["CLI_CORREO"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_EMPRESA"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'NOMBRE DE LA EMPRESA EN LA CUAL SE ENCUENTRA POSICIONADO EL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_EMPRESA = '".$Tsg_cliente["CLI_EMPRESA"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_RUT"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'RUT DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_RUT = '".$Tsg_cliente["CLI_RUT"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_DIRECCION"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DIRECCI驨 DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_DIRECCION = '".$Tsg_cliente["CLI_DIRECCION"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_FECHA_INI"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA DE INICIO DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_FECHA_INI = '".$Tsg_cliente["CLI_FECHA_INI"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_FECHA_MOD"] != NULL) // DATETIME NULL DEFAULT NULL COMMENT 'FECHA DE MODIFICACI驨 DEL CLIENTE'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_FECHA_MOD = '".$Tsg_cliente["CLI_FECHA_MOD"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_ACTIVO"] != NULL) // TINYINT(1) NOT NULL COMMENT '\R\NSE DEJA LA TABLA DE CLIENTE CON LA OPCI驨 PARA SABER SI EL USUARIO ESTA ACTIVO O INACTIVO EN LA BD SE MOSTRARA OCULTO SI SE ELIMINO POR SISTEMA. (1 O 0 ) ELIMINACI驨 LOGICA.'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_ACTIVO = '".$Tsg_cliente["CLI_ACTIVO"]."'";
			$flag = TRUE;
		}
		if($Tsg_cliente["CLI_USU_CREADOR"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'USUARIO CREADOR'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="CLI_USU_CREADOR = '".$Tsg_cliente["CLI_USU_CREADOR"]."'";
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
		  $Tsg_cliente = array();
		  $Tsg_cliente['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bAltaTsg_cliente"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_cliente                 *  
* Parametros entrada:                          *  
*      $Tsg_cliente = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bValidarTsg_cliente(&$Tsg_cliente, &$aErrores)
{
	try
	{
		/* Query aqui */
/* Logica aqui */
		return TRUE;
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_cliente"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>