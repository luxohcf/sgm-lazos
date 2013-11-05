<?php

include('..\Ent\Tsg_historico_ticket.class.php');
/********************************************************  
* Clase Tsg_historico_ticketDA autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_historico_ticketDA {

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
* Funcion bExisteTsg_historico_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_historico_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bExisteTsg_historico_ticket(&$Tsg_historico_ticket, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="SELECT 1 FROM TSG_HISTORICO_TICKET WHERE ";
		if($Tsg_historico_ticket["HIS_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="HIS_ID = '".$Tsg_historico_ticket["HIS_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["HIS_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL HIST驲ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="HIS_NOMBRE = '".$Tsg_historico_ticket["HIS_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["HIS_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 HIST驲ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="HIS_DESCRIP = '".$Tsg_historico_ticket["HIS_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_ESTADO_TICKETEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ESTADO_TICKETEST_ID = ".$Tsg_historico_ticket["TSG_ESTADO_TICKETEST_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_TICKETTIC_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_TICKETTIC_ID = ".$Tsg_historico_ticket["TSG_TICKETTIC_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_historico_ticket["TSG_USUARIOUSU_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_historico_ticket["TSG_PROYECTOPRO_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_PRIORIDADPRI_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PRIORIDADPRI_ID = ".$Tsg_historico_ticket["TSG_PRIORIDADPRI_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_CATEGORIACAT_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_CATEGORIACAT_ID = ".$Tsg_historico_ticket["TSG_CATEGORIACAT_ID"];
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
		$aErrores["bExisteTsg_historico_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_historico_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_historico_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBuscarTsg_historico_ticket(&$Tsg_historico_ticket, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = false;
		$query ="SELECT ";
		$query.=     "HIS_ID ,";
		$query.=     "HIS_NOMBRE ,";
		$query.=     "HIS_DESCRIP ,";
		$query.=     "TSG_ESTADO_TICKETEST_ID ,";
		$query.=     "TSG_TICKETTIC_ID ,";
		$query.=     "TSG_USUARIOUSU_ID ,";
		$query.=     "TSG_PROYECTOPRO_ID ,";
		$query.=     "TSG_PRIORIDADPRI_ID ,";
		$query.=     "TSG_CATEGORIACAT_ID ";
		$query.=" FROM TSG_HISTORICO_TICKET ";
		if($Tsg_historico_ticket["HIS_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="HIS_ID = '".$Tsg_historico_ticket["HIS_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["HIS_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL HIST驲ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="HIS_NOMBRE = '".$Tsg_historico_ticket["HIS_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["HIS_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 HIST驲ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="HIS_DESCRIP = '".$Tsg_historico_ticket["HIS_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_ESTADO_TICKETEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_ESTADO_TICKETEST_ID = ".$Tsg_historico_ticket["TSG_ESTADO_TICKETEST_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_TICKETTIC_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_TICKETTIC_ID = ".$Tsg_historico_ticket["TSG_TICKETTIC_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_historico_ticket["TSG_USUARIOUSU_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_historico_ticket["TSG_PROYECTOPRO_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_PRIORIDADPRI_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_PRIORIDADPRI_ID = ".$Tsg_historico_ticket["TSG_PRIORIDADPRI_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_CATEGORIACAT_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			else
			{
			$query .= " WHERE ";
			}
			$query.="TSG_CATEGORIACAT_ID = ".$Tsg_historico_ticket["TSG_CATEGORIACAT_ID"];
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
			$Tsg_historico_ticket = array();
			while($row = $res->fetch_assoc())
			{
				$Tsg_historico_ticket[$x]['HIS_ID'] = $row['HIS_ID'];
				$Tsg_historico_ticket[$x]['HIS_NOMBRE'] = $row['HIS_NOMBRE'];
				$Tsg_historico_ticket[$x]['HIS_DESCRIP'] = $row['HIS_DESCRIP'];
				$Tsg_historico_ticket[$x]['TSG_ESTADO_TICKETEST_ID'] = $row['TSG_ESTADO_TICKETEST_ID'];
				$Tsg_historico_ticket[$x]['TSG_TICKETTIC_ID'] = $row['TSG_TICKETTIC_ID'];
				$Tsg_historico_ticket[$x]['TSG_USUARIOUSU_ID'] = $row['TSG_USUARIOUSU_ID'];
				$Tsg_historico_ticket[$x]['TSG_PROYECTOPRO_ID'] = $row['TSG_PROYECTOPRO_ID'];
				$Tsg_historico_ticket[$x]['TSG_PRIORIDADPRI_ID'] = $row['TSG_PRIORIDADPRI_ID'];
				$Tsg_historico_ticket[$x]['TSG_CATEGORIACAT_ID'] = $row['TSG_CATEGORIACAT_ID'];
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
		$aErrores["bBuscarTsg_historico_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_historico_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_historico_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bInsertarTsg_historico_ticket(&$Tsg_historico_ticket, &$aErrores)
{
	try
	{
		/* Query aqui */
		$query ="INSERT INTO TSG_HISTORICO_TICKET (";
		$query.="HIS_ID ,";
		$query.="HIS_NOMBRE ,";
		$query.="HIS_DESCRIP ,";
		$query.="TSG_ESTADO_TICKETEST_ID ,";
		$query.="TSG_TICKETTIC_ID ,";
		$query.="TSG_USUARIOUSU_ID ,";
		$query.="TSG_PROYECTOPRO_ID ,";
		$query.="TSG_PRIORIDADPRI_ID ,";
		$query.="TSG_CATEGORIACAT_ID ";
		$query.=")";
		$query.=" VALUES (";
		$query.="'".$Tsg_historico_ticket["HIS_ID"]."',";
		$query.="'".$Tsg_historico_ticket["HIS_NOMBRE"]."',";
		$query.="'".$Tsg_historico_ticket["HIS_DESCRIP"]."',";
		$query.= $Tsg_historico_ticket["TSG_ESTADO_TICKETEST_ID"].",";
		$query.= $Tsg_historico_ticket["TSG_TICKETTIC_ID"].",";
		$query.= $Tsg_historico_ticket["TSG_USUARIOUSU_ID"].",";
		$query.= $Tsg_historico_ticket["TSG_PROYECTOPRO_ID"].",";
		$query.= $Tsg_historico_ticket["TSG_PRIORIDADPRI_ID"].",";
		$query.= $Tsg_historico_ticket["TSG_CATEGORIACAT_ID"]."";
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
		  $Tsg_historico_ticket = array();
		  $Tsg_historico_ticket['ID_insercion'] = $mySqli->insert_id;
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
		$aErrores["bInsertarTsg_historico_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_historico_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_historico_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bModificarTsg_historico_ticket(&$Tsg_historico_ticket, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_HISTORICO_TICKET ";
		if($Tsg_historico_ticket["HIS_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="HIS_ID = '".$Tsg_historico_ticket["HIS_ID"]."',";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["HIS_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL HIST驲ICO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="HIS_NOMBRE = '".$Tsg_historico_ticket["HIS_NOMBRE"]."',";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["HIS_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 HIST驲ICO'
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="HIS_DESCRIP = '".$Tsg_historico_ticket["HIS_DESCRIP"]."',";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_ESTADO_TICKETEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_ESTADO_TICKETEST_ID = ".$Tsg_historico_ticket["TSG_ESTADO_TICKETEST_ID"].",";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_TICKETTIC_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_TICKETTIC_ID = ".$Tsg_historico_ticket["TSG_TICKETTIC_ID"].",";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_historico_ticket["TSG_USUARIOUSU_ID"].",";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_historico_ticket["TSG_PROYECTOPRO_ID"].",";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_PRIORIDADPRI_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_PRIORIDADPRI_ID = ".$Tsg_historico_ticket["TSG_PRIORIDADPRI_ID"].",";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_CATEGORIACAT_ID"] != NULL) // INT(10) NOT NULL
		{
			if(!$flag)
			{
			$query .= " SET ";
			}
			$query.="TSG_CATEGORIACAT_ID = ".$Tsg_historico_ticket["TSG_CATEGORIACAT_ID"]."";
			$flag = TRUE;
		}
		$flag = FALSE;
		$query =" WHERE ";
		if($Tsg_historico_ticket["HIS_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="HIS_ID = '".$Tsg_historico_ticket["HIS_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["HIS_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL HIST驲ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="HIS_NOMBRE = '".$Tsg_historico_ticket["HIS_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["HIS_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 HIST驲ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="HIS_DESCRIP = '".$Tsg_historico_ticket["HIS_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_ESTADO_TICKETEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ESTADO_TICKETEST_ID = ".$Tsg_historico_ticket["TSG_ESTADO_TICKETEST_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_TICKETTIC_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_TICKETTIC_ID = ".$Tsg_historico_ticket["TSG_TICKETTIC_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_historico_ticket["TSG_USUARIOUSU_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_historico_ticket["TSG_PROYECTOPRO_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_PRIORIDADPRI_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PRIORIDADPRI_ID = ".$Tsg_historico_ticket["TSG_PRIORIDADPRI_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_CATEGORIACAT_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_CATEGORIACAT_ID = ".$Tsg_historico_ticket["TSG_CATEGORIACAT_ID"];
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
		  $Tsg_historico_ticket = array();
		  $Tsg_historico_ticket['N_Modificados'] = $mySqli->affected_rows;
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
		$aErrores["bModificarTsg_historico_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_historico_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_historico_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bEliminarTsg_historico_ticket(&$Tsg_historico_ticket, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="DELETE FROM TSG_HISTORICO_TICKET ";
		$query =" WHERE ";
		if($Tsg_historico_ticket["HIS_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="HIS_ID = '".$Tsg_historico_ticket["HIS_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["HIS_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL HIST驲ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="HIS_NOMBRE = '".$Tsg_historico_ticket["HIS_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["HIS_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 HIST驲ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="HIS_DESCRIP = '".$Tsg_historico_ticket["HIS_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_ESTADO_TICKETEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ESTADO_TICKETEST_ID = ".$Tsg_historico_ticket["TSG_ESTADO_TICKETEST_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_TICKETTIC_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_TICKETTIC_ID = ".$Tsg_historico_ticket["TSG_TICKETTIC_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_historico_ticket["TSG_USUARIOUSU_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_historico_ticket["TSG_PROYECTOPRO_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_PRIORIDADPRI_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PRIORIDADPRI_ID = ".$Tsg_historico_ticket["TSG_PRIORIDADPRI_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_CATEGORIACAT_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_CATEGORIACAT_ID = ".$Tsg_historico_ticket["TSG_CATEGORIACAT_ID"];
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
		  $Tsg_historico_ticket = array();
		  $Tsg_historico_ticket['N_Eliminados'] = $mySqli->affected_rows;
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
		$aErrores["bEliminarTsg_historico_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_historico_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_historico_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bBajaTsg_historico_ticket(&$Tsg_historico_ticket, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_HISTORICO_TICKET SET FLAG_ACTIVO = 0 ";
		$query =" WHERE ";
		if($Tsg_historico_ticket["HIS_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="HIS_ID = '".$Tsg_historico_ticket["HIS_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["HIS_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL HIST驲ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="HIS_NOMBRE = '".$Tsg_historico_ticket["HIS_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["HIS_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 HIST驲ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="HIS_DESCRIP = '".$Tsg_historico_ticket["HIS_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_ESTADO_TICKETEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ESTADO_TICKETEST_ID = ".$Tsg_historico_ticket["TSG_ESTADO_TICKETEST_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_TICKETTIC_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_TICKETTIC_ID = ".$Tsg_historico_ticket["TSG_TICKETTIC_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_historico_ticket["TSG_USUARIOUSU_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_historico_ticket["TSG_PROYECTOPRO_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_PRIORIDADPRI_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PRIORIDADPRI_ID = ".$Tsg_historico_ticket["TSG_PRIORIDADPRI_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_CATEGORIACAT_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_CATEGORIACAT_ID = ".$Tsg_historico_ticket["TSG_CATEGORIACAT_ID"];
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
		  $Tsg_historico_ticket = array();
		  $Tsg_historico_ticket['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bBajaTsg_historico_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_historico_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_historico_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bAltaTsg_historico_ticket(&$Tsg_historico_ticket, &$aErrores)
{
	try
	{
		/* Query aqui */
		$flag = FALSE;
		$query ="UPDATE TSG_HISTORICO_TICKET SET FLAG_ACTIVO = 1 ";
		$query =" WHERE ";
		if($Tsg_historico_ticket["HIS_ID"] != NULL) // INT(10) NOT NULL AUTO_INCREMENT COMMENT 'IDENTIFICADOR 鶱ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="HIS_ID = '".$Tsg_historico_ticket["HIS_ID"]."'";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["HIS_NOMBRE"] != NULL) // VARCHAR(100) COLLATE UTF8_SPANISH_CI NOT NULL COMMENT 'NOMBRE DEL HIST驲ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="HIS_NOMBRE = '".$Tsg_historico_ticket["HIS_NOMBRE"]."'";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["HIS_DESCRIP"] != NULL) // VARCHAR(1000) COLLATE UTF8_SPANISH_CI DEFAULT NULL COMMENT 'DESCRIPCI驨 HIST驲ICO'
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="HIS_DESCRIP = '".$Tsg_historico_ticket["HIS_DESCRIP"]."'";
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_ESTADO_TICKETEST_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_ESTADO_TICKETEST_ID = ".$Tsg_historico_ticket["TSG_ESTADO_TICKETEST_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_TICKETTIC_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_TICKETTIC_ID = ".$Tsg_historico_ticket["TSG_TICKETTIC_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_USUARIOUSU_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_USUARIOUSU_ID = ".$Tsg_historico_ticket["TSG_USUARIOUSU_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_PROYECTOPRO_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PROYECTOPRO_ID = ".$Tsg_historico_ticket["TSG_PROYECTOPRO_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_PRIORIDADPRI_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_PRIORIDADPRI_ID = ".$Tsg_historico_ticket["TSG_PRIORIDADPRI_ID"];
			$flag = TRUE;
		}
		if($Tsg_historico_ticket["TSG_CATEGORIACAT_ID"] != NULL) // INT(10) NOT NULL
		{
			if($flag)
			{
			$query .= " AND ";
			}
			$query.="TSG_CATEGORIACAT_ID = ".$Tsg_historico_ticket["TSG_CATEGORIACAT_ID"];
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
		  $Tsg_historico_ticket = array();
		  $Tsg_historico_ticket['N_Bajas'] = $mySqli->affected_rows;
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
		$aErrores["bAltaTsg_historico_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_historico_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_historico_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecuci贸n correcta             *  
*       FALSE = ejecuci贸n incorrecta           *  
***********************************************/  
public function bValidarTsg_historico_ticket(&$Tsg_historico_ticket, &$aErrores)
{
	try
	{
		/* Query aqui */
/* Logica aqui */
		return TRUE;
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_historico_ticket"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>