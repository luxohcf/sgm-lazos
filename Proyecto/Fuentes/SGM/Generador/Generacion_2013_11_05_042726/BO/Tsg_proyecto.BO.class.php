<?php

include('..\DA\Tsg_proyecto.DA.class.php');
/********************************************************  
* Clase Tsg_proyectoBO autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_proyectoBO {

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
* Funcion bExisteTsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bExisteTsg_proyecto(&$Tsg_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_proyectoDA();
		return $obj->bExisteTsg_proyecto($Tsg_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bExisteTsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBuscarTsg_proyecto(&$Tsg_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_proyectoDA();
		return $obj->bBuscarTsg_proyecto($Tsg_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBuscarTsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bInsertarTsg_proyecto(&$Tsg_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_proyectoDA();
		return $obj->bInsertarTsg_proyecto($Tsg_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bInsertarTsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bModificarTsg_proyecto(&$Tsg_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_proyectoDA();
		return $obj->bModificarTsg_proyecto($Tsg_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bModificarTsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bEliminarTsg_proyecto(&$Tsg_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_proyectoDA();
		return $obj->bEliminarTsg_proyecto($Tsg_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bEliminarTsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBajaTsg_proyecto(&$Tsg_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_proyectoDA();
		return $obj->bBajaTsg_proyecto($Tsg_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBajaTsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bAltaTsg_proyecto(&$Tsg_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_proyectoDA();
		return $obj->bAltaTsg_proyecto($Tsg_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bAltaTsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bValidarTsg_proyecto(&$Tsg_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_proyectoDA();
		return $obj->bValidarTsg_proyecto($Tsg_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>