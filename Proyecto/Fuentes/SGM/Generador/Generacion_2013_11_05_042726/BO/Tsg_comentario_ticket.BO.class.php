<?php

include('..\DA\Tsg_comentario_ticket.DA.class.php');
/********************************************************  
* Clase Tsg_comentario_ticketBO autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_comentario_ticketBO {

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
* Funcion bExisteTsg_comentario_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_comentario_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bExisteTsg_comentario_ticket(&$Tsg_comentario_ticket, &$aErrores)
{
	try
	{
		$obj = new Tsg_comentario_ticketDA();
		return $obj->bExisteTsg_comentario_ticket($Tsg_comentario_ticket, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bExisteTsg_comentario_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_comentario_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_comentario_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBuscarTsg_comentario_ticket(&$Tsg_comentario_ticket, &$aErrores)
{
	try
	{
		$obj = new Tsg_comentario_ticketDA();
		return $obj->bBuscarTsg_comentario_ticket($Tsg_comentario_ticket, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBuscarTsg_comentario_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_comentario_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_comentario_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bInsertarTsg_comentario_ticket(&$Tsg_comentario_ticket, &$aErrores)
{
	try
	{
		$obj = new Tsg_comentario_ticketDA();
		return $obj->bInsertarTsg_comentario_ticket($Tsg_comentario_ticket, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bInsertarTsg_comentario_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_comentario_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_comentario_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bModificarTsg_comentario_ticket(&$Tsg_comentario_ticket, &$aErrores)
{
	try
	{
		$obj = new Tsg_comentario_ticketDA();
		return $obj->bModificarTsg_comentario_ticket($Tsg_comentario_ticket, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bModificarTsg_comentario_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_comentario_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_comentario_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bEliminarTsg_comentario_ticket(&$Tsg_comentario_ticket, &$aErrores)
{
	try
	{
		$obj = new Tsg_comentario_ticketDA();
		return $obj->bEliminarTsg_comentario_ticket($Tsg_comentario_ticket, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bEliminarTsg_comentario_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_comentario_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_comentario_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBajaTsg_comentario_ticket(&$Tsg_comentario_ticket, &$aErrores)
{
	try
	{
		$obj = new Tsg_comentario_ticketDA();
		return $obj->bBajaTsg_comentario_ticket($Tsg_comentario_ticket, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBajaTsg_comentario_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_comentario_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_comentario_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bAltaTsg_comentario_ticket(&$Tsg_comentario_ticket, &$aErrores)
{
	try
	{
		$obj = new Tsg_comentario_ticketDA();
		return $obj->bAltaTsg_comentario_ticket($Tsg_comentario_ticket, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bAltaTsg_comentario_ticket"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_comentario_ticket                 *  
* Parametros entrada:                          *  
*      $Tsg_comentario_ticket = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bValidarTsg_comentario_ticket(&$Tsg_comentario_ticket, &$aErrores)
{
	try
	{
		$obj = new Tsg_comentario_ticketDA();
		return $obj->bValidarTsg_comentario_ticket($Tsg_comentario_ticket, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_comentario_ticket"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>