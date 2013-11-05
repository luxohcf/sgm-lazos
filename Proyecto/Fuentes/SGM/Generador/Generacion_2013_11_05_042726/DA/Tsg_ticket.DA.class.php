<?php

include('..\Ent\Tsg_ticket.class.php');
/********************************************************  
* Clase Tsg_ticketDA autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_ticketDA {

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
* Funcion bExisteTsg_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bExisteTsg_ticket(&$Tsg_ticket, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="SELECT 1 FROM TSG_TICKET WHERE ";
		if($Tsg_ticket["TIC_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIC_ID = '".$Tsg_ticket["TIC_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_ticket["TIC_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIC_NOMBRE = '".$Tsg_ticket["TIC_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_ticket["TIC_FECHA_CREA"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA DE CREACI驨 DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIC_FECHA_CREA = '".$Tsg_ticket["TIC_FECHA_CREA"]."'";
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_ESTADO_TICKETEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ESTADO_TICKETEST_ID = ".$Tsg_ticket["TSG_ESTADO_TICKETEST_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_ticket["TSG_USUARIOUSU_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_ticket["TSG_PROYECTOPRO_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_PRIORIDADPRI_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PRIORIDADPRI_ID = ".$Tsg_ticket["TSG_PRIORIDADPRI_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_CATEGORIACAT_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_CATEGORIACAT_ID = ".$Tsg_ticket["TSG_CATEGORIACAT_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TIC_DESTCADO"] != NULL) // TINYINT(1) DEFAULT NULL COMMENT 'DESATACADO (ESTRELLITA)'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIC_DESTCADO = '".$Tsg_ticket["TIC_DESTCADO"]."'";
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_TIC_CORREO_EN_COPIA"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'CORREOS EN COPIA DEL CAMBIO DE ESTADO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_TIC_CORREO_EN_COPIA = '".$Tsg_ticket["TSG_TIC_CORREO_EN_COPIA"]."'";
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
		$aErrores["bExisteTsg_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBuscarTsg_ticket(&$Tsg_ticket, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = false;
		$query ="SELECT ";
		$query.=     "TIC_ID ,";
		$query.=     "TIC_NOMBRE ,";
		$query.=     "TIC_FECHA_CREA ,";
		$query.=     "TSG_ESTADO_TICKETEST_ID ,";
		$query.=     "TSG_USUARIOUSU_ID ,";
		$query.=     "TSG_PROYECTOPRO_ID ,";
		$query.=     "TSG_PRIORIDADPRI_ID ,";
		$query.=     "TSG_CATEGORIACAT_ID ,";
		$query.=     "TIC_DESTCADO ,";
		$query.=     "TSG_TIC_CORREO_EN_COPIA ";
		$query.=" FROM TSG_TICKET ";
		if($Tsg_ticket["TIC_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TIC_ID = '".$Tsg_ticket["TIC_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_ticket["TIC_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TIC_NOMBRE = '".$Tsg_ticket["TIC_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_ticket["TIC_FECHA_CREA"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA DE CREACI驨 DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TIC_FECHA_CREA = '".$Tsg_ticket["TIC_FECHA_CREA"]."'";
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_ESTADO_TICKETEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_ESTADO_TICKETEST_ID = ".$Tsg_ticket["TSG_ESTADO_TICKETEST_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_ticket["TSG_USUARIOUSU_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_ticket["TSG_PROYECTOPRO_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_PRIORIDADPRI_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_PRIORIDADPRI_ID = ".$Tsg_ticket["TSG_PRIORIDADPRI_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_CATEGORIACAT_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_CATEGORIACAT_ID = ".$Tsg_ticket["TSG_CATEGORIACAT_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TIC_DESTCADO"] != NULL) // TINYINT(1) DEFAULT NULL COMMENT 'DESATACADO (ESTRELLITA)'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TIC_DESTCADO = '".$Tsg_ticket["TIC_DESTCADO"]."'";
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_TIC_CORREO_EN_COPIA"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'CORREOS EN COPIA DEL CAMBIO DE ESTADO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_TIC_CORREO_EN_COPIA = '".$Tsg_ticket["TSG_TIC_CORREO_EN_COPIA"]."'";
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
			$Tsg_ticket = array();
			while($row = $res->fetch_assoc())
			{
				$Tsg_ticket[$x]['TIC_ID'] = $row['TIC_ID'];
				$Tsg_ticket[$x]['TIC_NOMBRE'] = $row['TIC_NOMBRE'];
				$Tsg_ticket[$x]['TIC_FECHA_CREA'] = $row['TIC_FECHA_CREA'];
				$Tsg_ticket[$x]['TSG_ESTADO_TICKETEST_ID'] = $row['TSG_ESTADO_TICKETEST_ID'];
				$Tsg_ticket[$x]['TSG_USUARIOUSU_ID'] = $row['TSG_USUARIOUSU_ID'];
				$Tsg_ticket[$x]['TSG_PROYECTOPRO_ID'] = $row['TSG_PROYECTOPRO_ID'];
				$Tsg_ticket[$x]['TSG_PRIORIDADPRI_ID'] = $row['TSG_PRIORIDADPRI_ID'];
				$Tsg_ticket[$x]['TSG_CATEGORIACAT_ID'] = $row['TSG_CATEGORIACAT_ID'];
				$Tsg_ticket[$x]['TIC_DESTCADO'] = $row['TIC_DESTCADO'];
				$Tsg_ticket[$x]['TSG_TIC_CORREO_EN_COPIA'] = $row['TSG_TIC_CORREO_EN_COPIA'];
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
		$aErrores["bBuscarTsg_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bInsertarTsg_ticket(&$Tsg_ticket, &$aErrores)
{
	try
	{
		/* Query aqui */
		$query ="INSERT INTO TSG_TICKET (";
		$query.="TIC_ID ,";
		$query.="TIC_NOMBRE ,";
		$query.="TIC_FECHA_CREA ,";
		$query.="TSG_ESTADO_TICKETEST_ID ,";
		$query.="TSG_USUARIOUSU_ID ,";
		$query.="TSG_PROYECTOPRO_ID ,";
		$query.="TSG_PRIORIDADPRI_ID ,";
		$query.="TSG_CATEGORIACAT_ID ,";
		$query.="TIC_DESTCADO ,";
		$query.="TSG_TIC_CORREO_EN_COPIA ";
		$query.=")";
		$query.=" VALUES (";
		$query.="'".$Tsg_ticket["TIC_ID"]."',";
		$query.="'".$Tsg_ticket["TIC_NOMBRE"]."',";
		$query.="'".$Tsg_ticket["TIC_FECHA_CREA"]."',";
		$query.= $Tsg_ticket["TSG_ESTADO_TICKETEST_ID"].",";
		$query.= $Tsg_ticket["TSG_USUARIOUSU_ID"].",";
		$query.= $Tsg_ticket["TSG_PROYECTOPRO_ID"].",";
		$query.= $Tsg_ticket["TSG_PRIORIDADPRI_ID"].",";
		$query.= $Tsg_ticket["TSG_CATEGORIACAT_ID"].",";
		$query.="'".$Tsg_ticket["TIC_DESTCADO"]."',";
		$query.="'".$Tsg_ticket["TSG_TIC_CORREO_EN_COPIA"]."'";
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
		  $Tsg_ticket = array();
		  $Tsg_ticket['ID_insercion'] = $mySqli->insert_id;
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
		$aErrores["bInsertarTsg_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bModificarTsg_ticket(&$Tsg_ticket, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_TICKET ";
		if($Tsg_ticket["TIC_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DEL TICKET'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TIC_ID = '".$Tsg_ticket["TIC_ID"]."',";
			$flag = TRUE;
		}
		if($Tsg_ticket["TIC_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL TICKET'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TIC_NOMBRE = '".$Tsg_ticket["TIC_NOMBRE"]."',";
			$flag = TRUE;
		}
		if($Tsg_ticket["TIC_FECHA_CREA"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA DE CREACI驨 DEL TICKET'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TIC_FECHA_CREA = '".$Tsg_ticket["TIC_FECHA_CREA"]."',";
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_ESTADO_TICKETEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_ESTADO_TICKETEST_ID = ".$Tsg_ticket["TSG_ESTADO_TICKETEST_ID"].",";
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_ticket["TSG_USUARIOUSU_ID"].",";
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_ticket["TSG_PROYECTOPRO_ID"].",";
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_PRIORIDADPRI_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_PRIORIDADPRI_ID = ".$Tsg_ticket["TSG_PRIORIDADPRI_ID"].",";
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_CATEGORIACAT_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_CATEGORIACAT_ID = ".$Tsg_ticket["TSG_CATEGORIACAT_ID"].",";
			$flag = TRUE;
		}
		if($Tsg_ticket["TIC_DESTCADO"] != NULL) // TINYINT(1) DEFAULT NULL COMMENT 'DESATACADO (ESTRELLITA)'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TIC_DESTCADO = '".$Tsg_ticket["TIC_DESTCADO"]."',";
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_TIC_CORREO_EN_COPIA"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'CORREOS EN COPIA DEL CAMBIO DE ESTADO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_TIC_CORREO_EN_COPIA = '".$Tsg_ticket["TSG_TIC_CORREO_EN_COPIA"]."'";
			$flag = TRUE;
		}
		$flag = FALSE;
		$query =" WHERE ";
		if($Tsg_ticket["TIC_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIC_ID = '".$Tsg_ticket["TIC_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_ticket["TIC_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIC_NOMBRE = '".$Tsg_ticket["TIC_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_ticket["TIC_FECHA_CREA"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA DE CREACI驨 DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIC_FECHA_CREA = '".$Tsg_ticket["TIC_FECHA_CREA"]."'";
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_ESTADO_TICKETEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ESTADO_TICKETEST_ID = ".$Tsg_ticket["TSG_ESTADO_TICKETEST_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_ticket["TSG_USUARIOUSU_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_ticket["TSG_PROYECTOPRO_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_PRIORIDADPRI_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PRIORIDADPRI_ID = ".$Tsg_ticket["TSG_PRIORIDADPRI_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_CATEGORIACAT_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_CATEGORIACAT_ID = ".$Tsg_ticket["TSG_CATEGORIACAT_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TIC_DESTCADO"] != NULL) // TINYINT(1) DEFAULT NULL COMMENT 'DESATACADO (ESTRELLITA)'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIC_DESTCADO = '".$Tsg_ticket["TIC_DESTCADO"]."'";
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_TIC_CORREO_EN_COPIA"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'CORREOS EN COPIA DEL CAMBIO DE ESTADO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_TIC_CORREO_EN_COPIA = '".$Tsg_ticket["TSG_TIC_CORREO_EN_COPIA"]."'";
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
		  $Tsg_ticket = array();
		  $Tsg_ticket['N_Modificados'] = $mySqli->affected_rows;
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
		$aErrores["bModificarTsg_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bEliminarTsg_ticket(&$Tsg_ticket, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="DELETE FROM TSG_TICKET ";
		$query =" WHERE ";
		if($Tsg_ticket["TIC_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIC_ID = '".$Tsg_ticket["TIC_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_ticket["TIC_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIC_NOMBRE = '".$Tsg_ticket["TIC_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_ticket["TIC_FECHA_CREA"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA DE CREACI驨 DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIC_FECHA_CREA = '".$Tsg_ticket["TIC_FECHA_CREA"]."'";
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_ESTADO_TICKETEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ESTADO_TICKETEST_ID = ".$Tsg_ticket["TSG_ESTADO_TICKETEST_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_ticket["TSG_USUARIOUSU_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_ticket["TSG_PROYECTOPRO_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_PRIORIDADPRI_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PRIORIDADPRI_ID = ".$Tsg_ticket["TSG_PRIORIDADPRI_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_CATEGORIACAT_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_CATEGORIACAT_ID = ".$Tsg_ticket["TSG_CATEGORIACAT_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TIC_DESTCADO"] != NULL) // TINYINT(1) DEFAULT NULL COMMENT 'DESATACADO (ESTRELLITA)'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIC_DESTCADO = '".$Tsg_ticket["TIC_DESTCADO"]."'";
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_TIC_CORREO_EN_COPIA"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'CORREOS EN COPIA DEL CAMBIO DE ESTADO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_TIC_CORREO_EN_COPIA = '".$Tsg_ticket["TSG_TIC_CORREO_EN_COPIA"]."'";
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
		  $Tsg_ticket = array();
		  $Tsg_ticket['N_Eliminados'] = $mySqli->affected_rows;
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
		$aErrores["bEliminarTsg_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBajaTsg_ticket(&$Tsg_ticket, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_TICKET SET FLAG_ACTIVO = 0 ";
		$query =" WHERE ";
		if($Tsg_ticket["TIC_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIC_ID = '".$Tsg_ticket["TIC_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_ticket["TIC_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIC_NOMBRE = '".$Tsg_ticket["TIC_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_ticket["TIC_FECHA_CREA"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA DE CREACI驨 DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIC_FECHA_CREA = '".$Tsg_ticket["TIC_FECHA_CREA"]."'";
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_ESTADO_TICKETEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ESTADO_TICKETEST_ID = ".$Tsg_ticket["TSG_ESTADO_TICKETEST_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_ticket["TSG_USUARIOUSU_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_ticket["TSG_PROYECTOPRO_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_PRIORIDADPRI_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PRIORIDADPRI_ID = ".$Tsg_ticket["TSG_PRIORIDADPRI_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_CATEGORIACAT_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_CATEGORIACAT_ID = ".$Tsg_ticket["TSG_CATEGORIACAT_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TIC_DESTCADO"] != NULL) // TINYINT(1) DEFAULT NULL COMMENT 'DESATACADO (ESTRELLITA)'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIC_DESTCADO = '".$Tsg_ticket["TIC_DESTCADO"]."'";
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_TIC_CORREO_EN_COPIA"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'CORREOS EN COPIA DEL CAMBIO DE ESTADO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_TIC_CORREO_EN_COPIA = '".$Tsg_ticket["TSG_TIC_CORREO_EN_COPIA"]."'";
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
		  $Tsg_ticket = array();
		  $Tsg_ticket['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bBajaTsg_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bAltaTsg_ticket(&$Tsg_ticket, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_TICKET SET FLAG_ACTIVO = 1 ";
		$query =" WHERE ";
		if($Tsg_ticket["TIC_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIC_ID = '".$Tsg_ticket["TIC_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_ticket["TIC_NOMBRE"] != NULL) // VARCHAR(255) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIC_NOMBRE = '".$Tsg_ticket["TIC_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_ticket["TIC_FECHA_CREA"] != NULL) // DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'FECHA DE CREACI驨 DEL TICKET'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIC_FECHA_CREA = '".$Tsg_ticket["TIC_FECHA_CREA"]."'";
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_ESTADO_TICKETEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ESTADO_TICKETEST_ID = ".$Tsg_ticket["TSG_ESTADO_TICKETEST_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_ticket["TSG_USUARIOUSU_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_ticket["TSG_PROYECTOPRO_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_PRIORIDADPRI_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PRIORIDADPRI_ID = ".$Tsg_ticket["TSG_PRIORIDADPRI_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_CATEGORIACAT_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_CATEGORIACAT_ID = ".$Tsg_ticket["TSG_CATEGORIACAT_ID"];
			$flag = TRUE;
		}
		if($Tsg_ticket["TIC_DESTCADO"] != NULL) // TINYINT(1) DEFAULT NULL COMMENT 'DESATACADO (ESTRELLITA)'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TIC_DESTCADO = '".$Tsg_ticket["TIC_DESTCADO"]."'";
			$flag = TRUE;
		}
		if($Tsg_ticket["TSG_TIC_CORREO_EN_COPIA"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'CORREOS EN COPIA DEL CAMBIO DE ESTADO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_TIC_CORREO_EN_COPIA = '".$Tsg_ticket["TSG_TIC_CORREO_EN_COPIA"]."'";
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
		  $Tsg_ticket = array();
		  $Tsg_ticket['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bAltaTsg_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bValidarTsg_ticket(&$Tsg_ticket, &$aErrores)
{
	try
	{
		/* Query aqui */
/* Logica aqui */
		return TRUE;
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_ticket"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>