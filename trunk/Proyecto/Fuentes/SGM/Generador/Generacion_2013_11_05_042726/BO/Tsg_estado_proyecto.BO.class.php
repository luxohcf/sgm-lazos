<?php

include('..\DA\Tsg_estado_proyecto.DA.class.php');
/********************************************************  
* Clase Tsg_estado_proyectoBO autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_estado_proyectoBO {

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
* Funcion bExisteTsg_estado_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_estado_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bExisteTsg_estado_proyecto(&$Tsg_estado_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_estado_proyectoDA();
		return $obj->bExisteTsg_estado_proyecto($Tsg_estado_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bExisteTsg_estado_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_estado_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_estado_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBuscarTsg_estado_proyecto(&$Tsg_estado_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_estado_proyectoDA();
		return $obj->bBuscarTsg_estado_proyecto($Tsg_estado_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBuscarTsg_estado_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_estado_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_estado_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bInsertarTsg_estado_proyecto(&$Tsg_estado_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_estado_proyectoDA();
		return $obj->bInsertarTsg_estado_proyecto($Tsg_estado_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bInsertarTsg_estado_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_estado_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_estado_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bModificarTsg_estado_proyecto(&$Tsg_estado_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_estado_proyectoDA();
		return $obj->bModificarTsg_estado_proyecto($Tsg_estado_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bModificarTsg_estado_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_estado_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_estado_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bEliminarTsg_estado_proyecto(&$Tsg_estado_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_estado_proyectoDA();
		return $obj->bEliminarTsg_estado_proyecto($Tsg_estado_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bEliminarTsg_estado_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_estado_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_estado_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBajaTsg_estado_proyecto(&$Tsg_estado_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_estado_proyectoDA();
		return $obj->bBajaTsg_estado_proyecto($Tsg_estado_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBajaTsg_estado_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_estado_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_estado_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bAltaTsg_estado_proyecto(&$Tsg_estado_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_estado_proyectoDA();
		return $obj->bAltaTsg_estado_proyecto($Tsg_estado_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bAltaTsg_estado_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_estado_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_estado_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bValidarTsg_estado_proyecto(&$Tsg_estado_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_estado_proyectoDA();
		return $obj->bValidarTsg_estado_proyecto($Tsg_estado_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_estado_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>