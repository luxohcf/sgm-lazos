<?php

include('..\DA\Tsg_comentario_proyecto.DA.class.php');
/********************************************************  
* Clase Tsg_comentario_proyectoBO autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_comentario_proyectoBO {

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
* Funcion bExisteTsg_comentario_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_comentario_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bExisteTsg_comentario_proyecto(&$Tsg_comentario_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_comentario_proyectoDA();
		return $obj->bExisteTsg_comentario_proyecto($Tsg_comentario_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bExisteTsg_comentario_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_comentario_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_comentario_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBuscarTsg_comentario_proyecto(&$Tsg_comentario_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_comentario_proyectoDA();
		return $obj->bBuscarTsg_comentario_proyecto($Tsg_comentario_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBuscarTsg_comentario_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_comentario_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_comentario_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bInsertarTsg_comentario_proyecto(&$Tsg_comentario_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_comentario_proyectoDA();
		return $obj->bInsertarTsg_comentario_proyecto($Tsg_comentario_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bInsertarTsg_comentario_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_comentario_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_comentario_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bModificarTsg_comentario_proyecto(&$Tsg_comentario_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_comentario_proyectoDA();
		return $obj->bModificarTsg_comentario_proyecto($Tsg_comentario_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bModificarTsg_comentario_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_comentario_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_comentario_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bEliminarTsg_comentario_proyecto(&$Tsg_comentario_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_comentario_proyectoDA();
		return $obj->bEliminarTsg_comentario_proyecto($Tsg_comentario_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bEliminarTsg_comentario_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_comentario_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_comentario_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBajaTsg_comentario_proyecto(&$Tsg_comentario_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_comentario_proyectoDA();
		return $obj->bBajaTsg_comentario_proyecto($Tsg_comentario_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBajaTsg_comentario_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_comentario_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_comentario_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bAltaTsg_comentario_proyecto(&$Tsg_comentario_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_comentario_proyectoDA();
		return $obj->bAltaTsg_comentario_proyecto($Tsg_comentario_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bAltaTsg_comentario_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_comentario_proyecto                 *  
* Parametros entrada:                          *  
*      $Tsg_comentario_proyecto = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bValidarTsg_comentario_proyecto(&$Tsg_comentario_proyecto, &$aErrores)
{
	try
	{
		$obj = new Tsg_comentario_proyectoDA();
		return $obj->bValidarTsg_comentario_proyecto($Tsg_comentario_proyecto, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_comentario_proyecto"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>