<?php

include('..\DA\Tsg_ticket.DA.class.php');
/********************************************************  
* Clase Tsg_ticketBO autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_ticketBO {

/***********************************************  
* Constructor                                  *  
***********************************************/  

function __construct()
{
	/* Logica aqui */
}
/***********************************************  
* Funciones de acceso a la capa DA             *  
***********************************************/  

/***********************************************  
* Funcion bExisteTsg_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bExisteTsg_ticket(&$Tsg_ticket, &$aErrores)
{
	try
	{
		$obj = new Tsg_ticketDA();
		return $obj->bExisteTsg_ticket($Tsg_ticket, $aErrores);
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
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBuscarTsg_ticket(&$Tsg_ticket, &$aErrores)
{
	try
	{
		$obj = new Tsg_ticketDA();
		return $obj->bBuscarTsg_ticket($Tsg_ticket, $aErrores);
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
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bInsertarTsg_ticket(&$Tsg_ticket, &$aErrores)
{
	try
	{
		$obj = new Tsg_ticketDA();
		return $obj->bInsertarTsg_ticket($Tsg_ticket, $aErrores);
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
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bModificarTsg_ticket(&$Tsg_ticket, &$aErrores)
{
	try
	{
		$obj = new Tsg_ticketDA();
		return $obj->bModificarTsg_ticket($Tsg_ticket, $aErrores);
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
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bEliminarTsg_ticket(&$Tsg_ticket, &$aErrores)
{
	try
	{
		$obj = new Tsg_ticketDA();
		return $obj->bEliminarTsg_ticket($Tsg_ticket, $aErrores);
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
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBajaTsg_ticket(&$Tsg_ticket, &$aErrores)
{
	try
	{
		$obj = new Tsg_ticketDA();
		return $obj->bBajaTsg_ticket($Tsg_ticket, $aErrores);
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
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bAltaTsg_ticket(&$Tsg_ticket, &$aErrores)
{
	try
	{
		$obj = new Tsg_ticketDA();
		return $obj->bAltaTsg_ticket($Tsg_ticket, $aErrores);
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
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bValidarTsg_ticket(&$Tsg_ticket, &$aErrores)
{
	try
	{
		$obj = new Tsg_ticketDA();
		return $obj->bValidarTsg_ticket($Tsg_ticket, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_ticket"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>