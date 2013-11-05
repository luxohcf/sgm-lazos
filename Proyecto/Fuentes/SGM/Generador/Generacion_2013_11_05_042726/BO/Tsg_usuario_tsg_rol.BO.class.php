<?php

include('..\DA\Tsg_usuario_tsg_rol.DA.class.php');
/********************************************************  
* Clase Tsg_usuario_tsg_rolBO autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_usuario_tsg_rolBO {

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
* Funcion bExisteTsg_usuario_tsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario_tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bExisteTsg_usuario_tsg_rol(&$Tsg_usuario_tsg_rol, &$aErrores)
{
	try
	{
		$obj = new Tsg_usuario_tsg_rolDA();
		return $obj->bExisteTsg_usuario_tsg_rol($Tsg_usuario_tsg_rol, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bExisteTsg_usuario_tsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_usuario_tsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario_tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBuscarTsg_usuario_tsg_rol(&$Tsg_usuario_tsg_rol, &$aErrores)
{
	try
	{
		$obj = new Tsg_usuario_tsg_rolDA();
		return $obj->bBuscarTsg_usuario_tsg_rol($Tsg_usuario_tsg_rol, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBuscarTsg_usuario_tsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_usuario_tsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario_tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bInsertarTsg_usuario_tsg_rol(&$Tsg_usuario_tsg_rol, &$aErrores)
{
	try
	{
		$obj = new Tsg_usuario_tsg_rolDA();
		return $obj->bInsertarTsg_usuario_tsg_rol($Tsg_usuario_tsg_rol, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bInsertarTsg_usuario_tsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_usuario_tsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario_tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bModificarTsg_usuario_tsg_rol(&$Tsg_usuario_tsg_rol, &$aErrores)
{
	try
	{
		$obj = new Tsg_usuario_tsg_rolDA();
		return $obj->bModificarTsg_usuario_tsg_rol($Tsg_usuario_tsg_rol, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bModificarTsg_usuario_tsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_usuario_tsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario_tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bEliminarTsg_usuario_tsg_rol(&$Tsg_usuario_tsg_rol, &$aErrores)
{
	try
	{
		$obj = new Tsg_usuario_tsg_rolDA();
		return $obj->bEliminarTsg_usuario_tsg_rol($Tsg_usuario_tsg_rol, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bEliminarTsg_usuario_tsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_usuario_tsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario_tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBajaTsg_usuario_tsg_rol(&$Tsg_usuario_tsg_rol, &$aErrores)
{
	try
	{
		$obj = new Tsg_usuario_tsg_rolDA();
		return $obj->bBajaTsg_usuario_tsg_rol($Tsg_usuario_tsg_rol, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBajaTsg_usuario_tsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_usuario_tsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario_tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bAltaTsg_usuario_tsg_rol(&$Tsg_usuario_tsg_rol, &$aErrores)
{
	try
	{
		$obj = new Tsg_usuario_tsg_rolDA();
		return $obj->bAltaTsg_usuario_tsg_rol($Tsg_usuario_tsg_rol, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bAltaTsg_usuario_tsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_usuario_tsg_rol                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario_tsg_rol = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bValidarTsg_usuario_tsg_rol(&$Tsg_usuario_tsg_rol, &$aErrores)
{
	try
	{
		$obj = new Tsg_usuario_tsg_rolDA();
		return $obj->bValidarTsg_usuario_tsg_rol($Tsg_usuario_tsg_rol, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_usuario_tsg_rol"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>