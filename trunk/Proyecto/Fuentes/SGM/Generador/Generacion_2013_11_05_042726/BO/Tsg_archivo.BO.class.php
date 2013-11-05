<?php

include('..\DA\Tsg_archivo.DA.class.php');
/********************************************************  
* Clase Tsg_archivoBO autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_archivoBO {

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
* Funcion bExisteTsg_archivo                 *  
* Parametros entrada:                          *  
*      $Tsg_archivo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bExisteTsg_archivo(&$Tsg_archivo, &$aErrores)
{
	try
	{
		$obj = new Tsg_archivoDA();
		return $obj->bExisteTsg_archivo($Tsg_archivo, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bExisteTsg_archivo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_archivo                 *  
* Parametros entrada:                          *  
*      $Tsg_archivo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBuscarTsg_archivo(&$Tsg_archivo, &$aErrores)
{
	try
	{
		$obj = new Tsg_archivoDA();
		return $obj->bBuscarTsg_archivo($Tsg_archivo, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBuscarTsg_archivo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_archivo                 *  
* Parametros entrada:                          *  
*      $Tsg_archivo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bInsertarTsg_archivo(&$Tsg_archivo, &$aErrores)
{
	try
	{
		$obj = new Tsg_archivoDA();
		return $obj->bInsertarTsg_archivo($Tsg_archivo, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bInsertarTsg_archivo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_archivo                 *  
* Parametros entrada:                          *  
*      $Tsg_archivo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bModificarTsg_archivo(&$Tsg_archivo, &$aErrores)
{
	try
	{
		$obj = new Tsg_archivoDA();
		return $obj->bModificarTsg_archivo($Tsg_archivo, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bModificarTsg_archivo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_archivo                 *  
* Parametros entrada:                          *  
*      $Tsg_archivo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bEliminarTsg_archivo(&$Tsg_archivo, &$aErrores)
{
	try
	{
		$obj = new Tsg_archivoDA();
		return $obj->bEliminarTsg_archivo($Tsg_archivo, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bEliminarTsg_archivo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_archivo                 *  
* Parametros entrada:                          *  
*      $Tsg_archivo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBajaTsg_archivo(&$Tsg_archivo, &$aErrores)
{
	try
	{
		$obj = new Tsg_archivoDA();
		return $obj->bBajaTsg_archivo($Tsg_archivo, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBajaTsg_archivo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_archivo                 *  
* Parametros entrada:                          *  
*      $Tsg_archivo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bAltaTsg_archivo(&$Tsg_archivo, &$aErrores)
{
	try
	{
		$obj = new Tsg_archivoDA();
		return $obj->bAltaTsg_archivo($Tsg_archivo, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bAltaTsg_archivo"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_archivo                 *  
* Parametros entrada:                          *  
*      $Tsg_archivo = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bValidarTsg_archivo(&$Tsg_archivo, &$aErrores)
{
	try
	{
		$obj = new Tsg_archivoDA();
		return $obj->bValidarTsg_archivo($Tsg_archivo, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_archivo"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>