<?php

include('..\DA\Tsg_usuario_tsg_proyecto.DA.class.php');
/********************************************************  
* Clase Tsg_usuario_tsg_proyectoBO autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_usuario_tsg_proyectoBO {

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
* Funcion bExisteTsg_usuario_tsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario_tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bExisteTsg_usuario_tsg_proyecto(&$Tsg_usuario_tsg_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_usuario_tsg_proyectoDA();
		return $obj->bExisteTsg_usuario_tsg_proyecto($Tsg_usuario_tsg_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bExisteTsg_usuario_tsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_usuario_tsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario_tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBuscarTsg_usuario_tsg_proyecto(&$Tsg_usuario_tsg_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_usuario_tsg_proyectoDA();
		return $obj->bBuscarTsg_usuario_tsg_proyecto($Tsg_usuario_tsg_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBuscarTsg_usuario_tsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_usuario_tsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario_tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bInsertarTsg_usuario_tsg_proyecto(&$Tsg_usuario_tsg_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_usuario_tsg_proyectoDA();
		return $obj->bInsertarTsg_usuario_tsg_proyecto($Tsg_usuario_tsg_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bInsertarTsg_usuario_tsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_usuario_tsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario_tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bModificarTsg_usuario_tsg_proyecto(&$Tsg_usuario_tsg_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_usuario_tsg_proyectoDA();
		return $obj->bModificarTsg_usuario_tsg_proyecto($Tsg_usuario_tsg_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bModificarTsg_usuario_tsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_usuario_tsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario_tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bEliminarTsg_usuario_tsg_proyecto(&$Tsg_usuario_tsg_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_usuario_tsg_proyectoDA();
		return $obj->bEliminarTsg_usuario_tsg_proyecto($Tsg_usuario_tsg_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bEliminarTsg_usuario_tsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_usuario_tsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario_tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBajaTsg_usuario_tsg_proyecto(&$Tsg_usuario_tsg_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_usuario_tsg_proyectoDA();
		return $obj->bBajaTsg_usuario_tsg_proyecto($Tsg_usuario_tsg_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBajaTsg_usuario_tsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_usuario_tsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario_tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bAltaTsg_usuario_tsg_proyecto(&$Tsg_usuario_tsg_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_usuario_tsg_proyectoDA();
		return $obj->bAltaTsg_usuario_tsg_proyecto($Tsg_usuario_tsg_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bAltaTsg_usuario_tsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_usuario_tsg_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario_tsg_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bValidarTsg_usuario_tsg_proyecto(&$Tsg_usuario_tsg_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_usuario_tsg_proyectoDA();
		return $obj->bValidarTsg_usuario_tsg_proyecto($Tsg_usuario_tsg_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_usuario_tsg_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>