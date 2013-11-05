<?php

include('..\DA\Tsg_rol.DA.class.php');
/********************************************************  
* Clase Tsg_rolBO autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_rolBO {

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
* Funcion bExisteTsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bExisteTsg_rol(&$Tsg_rol, &$aErrores)
{
	try
	{
		$obj = new Tsg_rolDA();
		return $obj->bExisteTsg_rol($Tsg_rol, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bExisteTsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBuscarTsg_rol(&$Tsg_rol, &$aErrores)
{
	try
	{
		$obj = new Tsg_rolDA();
		return $obj->bBuscarTsg_rol($Tsg_rol, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBuscarTsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bInsertarTsg_rol(&$Tsg_rol, &$aErrores)
{
	try
	{
		$obj = new Tsg_rolDA();
		return $obj->bInsertarTsg_rol($Tsg_rol, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bInsertarTsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bModificarTsg_rol(&$Tsg_rol, &$aErrores)
{
	try
	{
		$obj = new Tsg_rolDA();
		return $obj->bModificarTsg_rol($Tsg_rol, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bModificarTsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bEliminarTsg_rol(&$Tsg_rol, &$aErrores)
{
	try
	{
		$obj = new Tsg_rolDA();
		return $obj->bEliminarTsg_rol($Tsg_rol, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bEliminarTsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBajaTsg_rol(&$Tsg_rol, &$aErrores)
{
	try
	{
		$obj = new Tsg_rolDA();
		return $obj->bBajaTsg_rol($Tsg_rol, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBajaTsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bAltaTsg_rol(&$Tsg_rol, &$aErrores)
{
	try
	{
		$obj = new Tsg_rolDA();
		return $obj->bAltaTsg_rol($Tsg_rol, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bAltaTsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bValidarTsg_rol(&$Tsg_rol, &$aErrores)
{
	try
	{
		$obj = new Tsg_rolDA();
		return $obj->bValidarTsg_rol($Tsg_rol, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>