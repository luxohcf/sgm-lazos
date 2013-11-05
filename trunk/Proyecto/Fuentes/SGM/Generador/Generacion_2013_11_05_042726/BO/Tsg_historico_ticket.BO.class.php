<?php

include('..\DA\Tsg_historico_ticket.DA.class.php');
/********************************************************  
* Clase Tsg_historico_ticketBO autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_historico_ticketBO {

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
* Funcion bExisteTsg_historico_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_historico_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bExisteTsg_historico_ticket(&$Tsg_historico_ticket, &$aErrores)
{
	try
	{
		$obj = new Tsg_historico_ticketDA();
		return $obj->bExisteTsg_historico_ticket($Tsg_historico_ticket, $aErrores);
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
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBuscarTsg_historico_ticket(&$Tsg_historico_ticket, &$aErrores)
{
	try
	{
		$obj = new Tsg_historico_ticketDA();
		return $obj->bBuscarTsg_historico_ticket($Tsg_historico_ticket, $aErrores);
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
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bInsertarTsg_historico_ticket(&$Tsg_historico_ticket, &$aErrores)
{
	try
	{
		$obj = new Tsg_historico_ticketDA();
		return $obj->bInsertarTsg_historico_ticket($Tsg_historico_ticket, $aErrores);
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
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bModificarTsg_historico_ticket(&$Tsg_historico_ticket, &$aErrores)
{
	try
	{
		$obj = new Tsg_historico_ticketDA();
		return $obj->bModificarTsg_historico_ticket($Tsg_historico_ticket, $aErrores);
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
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bEliminarTsg_historico_ticket(&$Tsg_historico_ticket, &$aErrores)
{
	try
	{
		$obj = new Tsg_historico_ticketDA();
		return $obj->bEliminarTsg_historico_ticket($Tsg_historico_ticket, $aErrores);
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
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBajaTsg_historico_ticket(&$Tsg_historico_ticket, &$aErrores)
{
	try
	{
		$obj = new Tsg_historico_ticketDA();
		return $obj->bBajaTsg_historico_ticket($Tsg_historico_ticket, $aErrores);
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
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bAltaTsg_historico_ticket(&$Tsg_historico_ticket, &$aErrores)
{
	try
	{
		$obj = new Tsg_historico_ticketDA();
		return $obj->bAltaTsg_historico_ticket($Tsg_historico_ticket, $aErrores);
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
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bValidarTsg_historico_ticket(&$Tsg_historico_ticket, &$aErrores)
{
	try
	{
		$obj = new Tsg_historico_ticketDA();
		return $obj->bValidarTsg_historico_ticket($Tsg_historico_ticket, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_historico_ticket"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>