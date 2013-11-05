<?php

include('..\DA\Tsg_cliente.DA.class.php');
/********************************************************  
* Clase Tsg_clienteBO autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_clienteBO {

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
* Funcion bExisteTsg_cliente                 *  
* Parametros entrada:                          *  
*      $Tsg_cliente = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bExisteTsg_cliente(&$Tsg_cliente, &$aErrores)
{
	try
	{
		$obj = new Tsg_clienteDA();
		return $obj->bExisteTsg_cliente($Tsg_cliente, $aErrores);
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
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBuscarTsg_cliente(&$Tsg_cliente, &$aErrores)
{
	try
	{
		$obj = new Tsg_clienteDA();
		return $obj->bBuscarTsg_cliente($Tsg_cliente, $aErrores);
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
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bInsertarTsg_cliente(&$Tsg_cliente, &$aErrores)
{
	try
	{
		$obj = new Tsg_clienteDA();
		return $obj->bInsertarTsg_cliente($Tsg_cliente, $aErrores);
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
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bModificarTsg_cliente(&$Tsg_cliente, &$aErrores)
{
	try
	{
		$obj = new Tsg_clienteDA();
		return $obj->bModificarTsg_cliente($Tsg_cliente, $aErrores);
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
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bEliminarTsg_cliente(&$Tsg_cliente, &$aErrores)
{
	try
	{
		$obj = new Tsg_clienteDA();
		return $obj->bEliminarTsg_cliente($Tsg_cliente, $aErrores);
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
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBajaTsg_cliente(&$Tsg_cliente, &$aErrores)
{
	try
	{
		$obj = new Tsg_clienteDA();
		return $obj->bBajaTsg_cliente($Tsg_cliente, $aErrores);
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
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bAltaTsg_cliente(&$Tsg_cliente, &$aErrores)
{
	try
	{
		$obj = new Tsg_clienteDA();
		return $obj->bAltaTsg_cliente($Tsg_cliente, $aErrores);
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
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bValidarTsg_cliente(&$Tsg_cliente, &$aErrores)
{
	try
	{
		$obj = new Tsg_clienteDA();
		return $obj->bValidarTsg_cliente($Tsg_cliente, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_cliente"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>