<?php

include('..\DA\Sqi_tipo_proyecto.DA.class.php');
/********************************************************  
* Clase Sqi_tipo_proyectoBO autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Sqi_tipo_proyectoBO {

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
* Funcion bExisteSqi_tipo_proyecto                 *  
* Parametros entrada:                          *  
*      $Sqi_tipo_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bExisteSqi_tipo_proyecto(&$Sqi_tipo_proyecto, &$aErrores)
{
	try
	{
		$obj = new Sqi_tipo_proyectoDA();
		return $obj->bExisteSqi_tipo_proyecto($Sqi_tipo_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bExisteSqi_tipo_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarSqi_tipo_proyecto                 *  
* Parametros entrada:                          *  
*      $Sqi_tipo_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBuscarSqi_tipo_proyecto(&$Sqi_tipo_proyecto, &$aErrores)
{
	try
	{
		$obj = new Sqi_tipo_proyectoDA();
		return $obj->bBuscarSqi_tipo_proyecto($Sqi_tipo_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBuscarSqi_tipo_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarSqi_tipo_proyecto                 *  
* Parametros entrada:                          *  
*      $Sqi_tipo_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bInsertarSqi_tipo_proyecto(&$Sqi_tipo_proyecto, &$aErrores)
{
	try
	{
		$obj = new Sqi_tipo_proyectoDA();
		return $obj->bInsertarSqi_tipo_proyecto($Sqi_tipo_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bInsertarSqi_tipo_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarSqi_tipo_proyecto                 *  
* Parametros entrada:                          *  
*      $Sqi_tipo_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bModificarSqi_tipo_proyecto(&$Sqi_tipo_proyecto, &$aErrores)
{
	try
	{
		$obj = new Sqi_tipo_proyectoDA();
		return $obj->bModificarSqi_tipo_proyecto($Sqi_tipo_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bModificarSqi_tipo_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarSqi_tipo_proyecto                 *  
* Parametros entrada:                          *  
*      $Sqi_tipo_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bEliminarSqi_tipo_proyecto(&$Sqi_tipo_proyecto, &$aErrores)
{
	try
	{
		$obj = new Sqi_tipo_proyectoDA();
		return $obj->bEliminarSqi_tipo_proyecto($Sqi_tipo_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bEliminarSqi_tipo_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaSqi_tipo_proyecto                 *  
* Parametros entrada:                          *  
*      $Sqi_tipo_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBajaSqi_tipo_proyecto(&$Sqi_tipo_proyecto, &$aErrores)
{
	try
	{
		$obj = new Sqi_tipo_proyectoDA();
		return $obj->bBajaSqi_tipo_proyecto($Sqi_tipo_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBajaSqi_tipo_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaSqi_tipo_proyecto                 *  
* Parametros entrada:                          *  
*      $Sqi_tipo_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bAltaSqi_tipo_proyecto(&$Sqi_tipo_proyecto, &$aErrores)
{
	try
	{
		$obj = new Sqi_tipo_proyectoDA();
		return $obj->bAltaSqi_tipo_proyecto($Sqi_tipo_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bAltaSqi_tipo_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarSqi_tipo_proyecto                 *  
* Parametros entrada:                          *  
*      $Sqi_tipo_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bValidarSqi_tipo_proyecto(&$Sqi_tipo_proyecto, &$aErrores)
{
	try
	{
		$obj = new Sqi_tipo_proyectoDA();
		return $obj->bValidarSqi_tipo_proyecto($Sqi_tipo_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bValidarSqi_tipo_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>