<?php

include('..\DA\Tsg_proyecto_historico.DA.class.php');
/********************************************************  
* Clase Tsg_proyecto_historicoBO autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_proyecto_historicoBO {

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
* Funcion bExisteTsg_proyecto_historico                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto_historico = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bExisteTsg_proyecto_historico(&$Tsg_proyecto_historico, &$aErrores)
{
	try
	{
		$obj = new Tsg_proyecto_historicoDA();
		return $obj->bExisteTsg_proyecto_historico($Tsg_proyecto_historico, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bExisteTsg_proyecto_historico"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_proyecto_historico                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto_historico = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBuscarTsg_proyecto_historico(&$Tsg_proyecto_historico, &$aErrores)
{
	try
	{
		$obj = new Tsg_proyecto_historicoDA();
		return $obj->bBuscarTsg_proyecto_historico($Tsg_proyecto_historico, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBuscarTsg_proyecto_historico"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_proyecto_historico                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto_historico = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bInsertarTsg_proyecto_historico(&$Tsg_proyecto_historico, &$aErrores)
{
	try
	{
		$obj = new Tsg_proyecto_historicoDA();
		return $obj->bInsertarTsg_proyecto_historico($Tsg_proyecto_historico, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bInsertarTsg_proyecto_historico"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_proyecto_historico                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto_historico = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bModificarTsg_proyecto_historico(&$Tsg_proyecto_historico, &$aErrores)
{
	try
	{
		$obj = new Tsg_proyecto_historicoDA();
		return $obj->bModificarTsg_proyecto_historico($Tsg_proyecto_historico, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bModificarTsg_proyecto_historico"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_proyecto_historico                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto_historico = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bEliminarTsg_proyecto_historico(&$Tsg_proyecto_historico, &$aErrores)
{
	try
	{
		$obj = new Tsg_proyecto_historicoDA();
		return $obj->bEliminarTsg_proyecto_historico($Tsg_proyecto_historico, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bEliminarTsg_proyecto_historico"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_proyecto_historico                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto_historico = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBajaTsg_proyecto_historico(&$Tsg_proyecto_historico, &$aErrores)
{
	try
	{
		$obj = new Tsg_proyecto_historicoDA();
		return $obj->bBajaTsg_proyecto_historico($Tsg_proyecto_historico, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBajaTsg_proyecto_historico"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_proyecto_historico                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto_historico = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bAltaTsg_proyecto_historico(&$Tsg_proyecto_historico, &$aErrores)
{
	try
	{
		$obj = new Tsg_proyecto_historicoDA();
		return $obj->bAltaTsg_proyecto_historico($Tsg_proyecto_historico, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bAltaTsg_proyecto_historico"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_proyecto_historico                 *  
* Parametros entrada:                          *  
*      $Tsg_proyecto_historico = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bValidarTsg_proyecto_historico(&$Tsg_proyecto_historico, &$aErrores)
{
	try
	{
		$obj = new Tsg_proyecto_historicoDA();
		return $obj->bValidarTsg_proyecto_historico($Tsg_proyecto_historico, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_proyecto_historico"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>