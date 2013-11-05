<?php

include('..\DA\Tsg_modulo.DA.class.php');
/********************************************************  
* Clase Tsg_moduloBO autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_moduloBO {

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
* Funcion bExisteTsg_modulo                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bExisteTsg_modulo(&$Tsg_modulo, &$aErrores)
{
	try
	{
		$obj = new Tsg_moduloDA();
		return $obj->bExisteTsg_modulo($Tsg_modulo, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bExisteTsg_modulo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_modulo                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBuscarTsg_modulo(&$Tsg_modulo, &$aErrores)
{
	try
	{
		$obj = new Tsg_moduloDA();
		return $obj->bBuscarTsg_modulo($Tsg_modulo, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBuscarTsg_modulo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_modulo                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bInsertarTsg_modulo(&$Tsg_modulo, &$aErrores)
{
	try
	{
		$obj = new Tsg_moduloDA();
		return $obj->bInsertarTsg_modulo($Tsg_modulo, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bInsertarTsg_modulo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_modulo                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bModificarTsg_modulo(&$Tsg_modulo, &$aErrores)
{
	try
	{
		$obj = new Tsg_moduloDA();
		return $obj->bModificarTsg_modulo($Tsg_modulo, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bModificarTsg_modulo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_modulo                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bEliminarTsg_modulo(&$Tsg_modulo, &$aErrores)
{
	try
	{
		$obj = new Tsg_moduloDA();
		return $obj->bEliminarTsg_modulo($Tsg_modulo, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bEliminarTsg_modulo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_modulo                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBajaTsg_modulo(&$Tsg_modulo, &$aErrores)
{
	try
	{
		$obj = new Tsg_moduloDA();
		return $obj->bBajaTsg_modulo($Tsg_modulo, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBajaTsg_modulo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_modulo                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bAltaTsg_modulo(&$Tsg_modulo, &$aErrores)
{
	try
	{
		$obj = new Tsg_moduloDA();
		return $obj->bAltaTsg_modulo($Tsg_modulo, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bAltaTsg_modulo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_modulo                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bValidarTsg_modulo(&$Tsg_modulo, &$aErrores)
{
	try
	{
		$obj = new Tsg_moduloDA();
		return $obj->bValidarTsg_modulo($Tsg_modulo, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_modulo"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>