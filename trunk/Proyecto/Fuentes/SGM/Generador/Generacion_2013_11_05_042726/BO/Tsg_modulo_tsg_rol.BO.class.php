<?php

include('..\DA\Tsg_modulo_tsg_rol.DA.class.php');
/********************************************************  
* Clase Tsg_modulo_tsg_rolBO autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_modulo_tsg_rolBO {

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
* Funcion bExisteTsg_modulo_tsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo_tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bExisteTsg_modulo_tsg_rol(&$Tsg_modulo_tsg_rol, &$aErrores)
{
	try
	{
		$obj = new Tsg_modulo_tsg_rolDA();
		return $obj->bExisteTsg_modulo_tsg_rol($Tsg_modulo_tsg_rol, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bExisteTsg_modulo_tsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_modulo_tsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo_tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBuscarTsg_modulo_tsg_rol(&$Tsg_modulo_tsg_rol, &$aErrores)
{
	try
	{
		$obj = new Tsg_modulo_tsg_rolDA();
		return $obj->bBuscarTsg_modulo_tsg_rol($Tsg_modulo_tsg_rol, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBuscarTsg_modulo_tsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_modulo_tsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo_tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bInsertarTsg_modulo_tsg_rol(&$Tsg_modulo_tsg_rol, &$aErrores)
{
	try
	{
		$obj = new Tsg_modulo_tsg_rolDA();
		return $obj->bInsertarTsg_modulo_tsg_rol($Tsg_modulo_tsg_rol, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bInsertarTsg_modulo_tsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_modulo_tsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo_tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bModificarTsg_modulo_tsg_rol(&$Tsg_modulo_tsg_rol, &$aErrores)
{
	try
	{
		$obj = new Tsg_modulo_tsg_rolDA();
		return $obj->bModificarTsg_modulo_tsg_rol($Tsg_modulo_tsg_rol, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bModificarTsg_modulo_tsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_modulo_tsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo_tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bEliminarTsg_modulo_tsg_rol(&$Tsg_modulo_tsg_rol, &$aErrores)
{
	try
	{
		$obj = new Tsg_modulo_tsg_rolDA();
		return $obj->bEliminarTsg_modulo_tsg_rol($Tsg_modulo_tsg_rol, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bEliminarTsg_modulo_tsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_modulo_tsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo_tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBajaTsg_modulo_tsg_rol(&$Tsg_modulo_tsg_rol, &$aErrores)
{
	try
	{
		$obj = new Tsg_modulo_tsg_rolDA();
		return $obj->bBajaTsg_modulo_tsg_rol($Tsg_modulo_tsg_rol, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBajaTsg_modulo_tsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_modulo_tsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo_tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bAltaTsg_modulo_tsg_rol(&$Tsg_modulo_tsg_rol, &$aErrores)
{
	try
	{
		$obj = new Tsg_modulo_tsg_rolDA();
		return $obj->bAltaTsg_modulo_tsg_rol($Tsg_modulo_tsg_rol, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bAltaTsg_modulo_tsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_modulo_tsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_modulo_tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bValidarTsg_modulo_tsg_rol(&$Tsg_modulo_tsg_rol, &$aErrores)
{
	try
	{
		$obj = new Tsg_modulo_tsg_rolDA();
		return $obj->bValidarTsg_modulo_tsg_rol($Tsg_modulo_tsg_rol, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_modulo_tsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>