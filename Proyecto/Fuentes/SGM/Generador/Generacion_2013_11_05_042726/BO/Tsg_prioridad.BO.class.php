<?php

include('..\DA\Tsg_prioridad.DA.class.php');
/********************************************************  
* Clase Tsg_prioridadBO autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_prioridadBO {

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
* Funcion bExisteTsg_prioridad                 *  
* Parametros entrada:                          *  
*      $Tsg_prioridad = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bExisteTsg_prioridad(&$Tsg_prioridad, &$aErrores)
{
	try
	{
		$obj = new Tsg_prioridadDA();
		return $obj->bExisteTsg_prioridad($Tsg_prioridad, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bExisteTsg_prioridad"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_prioridad                 *  
* Parametros entrada:                          *  
*      $Tsg_prioridad = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBuscarTsg_prioridad(&$Tsg_prioridad, &$aErrores)
{
	try
	{
		$obj = new Tsg_prioridadDA();
		return $obj->bBuscarTsg_prioridad($Tsg_prioridad, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBuscarTsg_prioridad"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_prioridad                 *  
* Parametros entrada:                          *  
*      $Tsg_prioridad = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bInsertarTsg_prioridad(&$Tsg_prioridad, &$aErrores)
{
	try
	{
		$obj = new Tsg_prioridadDA();
		return $obj->bInsertarTsg_prioridad($Tsg_prioridad, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bInsertarTsg_prioridad"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_prioridad                 *  
* Parametros entrada:                          *  
*      $Tsg_prioridad = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bModificarTsg_prioridad(&$Tsg_prioridad, &$aErrores)
{
	try
	{
		$obj = new Tsg_prioridadDA();
		return $obj->bModificarTsg_prioridad($Tsg_prioridad, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bModificarTsg_prioridad"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_prioridad                 *  
* Parametros entrada:                          *  
*      $Tsg_prioridad = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bEliminarTsg_prioridad(&$Tsg_prioridad, &$aErrores)
{
	try
	{
		$obj = new Tsg_prioridadDA();
		return $obj->bEliminarTsg_prioridad($Tsg_prioridad, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bEliminarTsg_prioridad"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_prioridad                 *  
* Parametros entrada:                          *  
*      $Tsg_prioridad = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBajaTsg_prioridad(&$Tsg_prioridad, &$aErrores)
{
	try
	{
		$obj = new Tsg_prioridadDA();
		return $obj->bBajaTsg_prioridad($Tsg_prioridad, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBajaTsg_prioridad"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_prioridad                 *  
* Parametros entrada:                          *  
*      $Tsg_prioridad = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bAltaTsg_prioridad(&$Tsg_prioridad, &$aErrores)
{
	try
	{
		$obj = new Tsg_prioridadDA();
		return $obj->bAltaTsg_prioridad($Tsg_prioridad, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bAltaTsg_prioridad"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_prioridad                 *  
* Parametros entrada:                          *  
*      $Tsg_prioridad = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bValidarTsg_prioridad(&$Tsg_prioridad, &$aErrores)
{
	try
	{
		$obj = new Tsg_prioridadDA();
		return $obj->bValidarTsg_prioridad($Tsg_prioridad, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_prioridad"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>