<?php

include('..\DA\Tsg_usuario.DA.class.php');
/********************************************************  
* Clase Tsg_usuarioBO autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_usuarioBO {

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
* Funcion bExisteTsg_usuario                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bExisteTsg_usuario(&$Tsg_usuario, &$aErrores)
{
	try
	{
		$obj = new Tsg_usuarioDA();
		return $obj->bExisteTsg_usuario($Tsg_usuario, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bExisteTsg_usuario"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_usuario                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBuscarTsg_usuario(&$Tsg_usuario, &$aErrores)
{
	try
	{
		$obj = new Tsg_usuarioDA();
		return $obj->bBuscarTsg_usuario($Tsg_usuario, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBuscarTsg_usuario"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_usuario                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bInsertarTsg_usuario(&$Tsg_usuario, &$aErrores)
{
	try
	{
		$obj = new Tsg_usuarioDA();
		return $obj->bInsertarTsg_usuario($Tsg_usuario, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bInsertarTsg_usuario"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_usuario                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bModificarTsg_usuario(&$Tsg_usuario, &$aErrores)
{
	try
	{
		$obj = new Tsg_usuarioDA();
		return $obj->bModificarTsg_usuario($Tsg_usuario, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bModificarTsg_usuario"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_usuario                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bEliminarTsg_usuario(&$Tsg_usuario, &$aErrores)
{
	try
	{
		$obj = new Tsg_usuarioDA();
		return $obj->bEliminarTsg_usuario($Tsg_usuario, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bEliminarTsg_usuario"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_usuario                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBajaTsg_usuario(&$Tsg_usuario, &$aErrores)
{
	try
	{
		$obj = new Tsg_usuarioDA();
		return $obj->bBajaTsg_usuario($Tsg_usuario, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBajaTsg_usuario"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_usuario                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bAltaTsg_usuario(&$Tsg_usuario, &$aErrores)
{
	try
	{
		$obj = new Tsg_usuarioDA();
		return $obj->bAltaTsg_usuario($Tsg_usuario, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bAltaTsg_usuario"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_usuario                 *  
* Parametros entrada:                          *  
*      $Tsg_usuario = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bValidarTsg_usuario(&$Tsg_usuario, &$aErrores)
{
	try
	{
		$obj = new Tsg_usuarioDA();
		return $obj->bValidarTsg_usuario($Tsg_usuario, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_usuario"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>