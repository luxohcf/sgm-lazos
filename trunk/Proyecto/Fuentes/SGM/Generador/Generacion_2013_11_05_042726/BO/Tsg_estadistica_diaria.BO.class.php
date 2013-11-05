<?php

include('..\DA\Tsg_estadistica_diaria.DA.class.php');
/********************************************************  
* Clase Tsg_estadistica_diariaBO autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_estadistica_diariaBO {

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
* Funcion bExisteTsg_estadistica_diaria                 *  
* Parametros entrada:                          *  
*      $Tsg_estadistica_diaria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bExisteTsg_estadistica_diaria(&$Tsg_estadistica_diaria, &$aErrores)
{
	try
	{
		$obj = new Tsg_estadistica_diariaDA();
		return $obj->bExisteTsg_estadistica_diaria($Tsg_estadistica_diaria, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bExisteTsg_estadistica_diaria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_estadistica_diaria                 *  
* Parametros entrada:                          *  
*      $Tsg_estadistica_diaria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBuscarTsg_estadistica_diaria(&$Tsg_estadistica_diaria, &$aErrores)
{
	try
	{
		$obj = new Tsg_estadistica_diariaDA();
		return $obj->bBuscarTsg_estadistica_diaria($Tsg_estadistica_diaria, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBuscarTsg_estadistica_diaria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_estadistica_diaria                 *  
* Parametros entrada:                          *  
*      $Tsg_estadistica_diaria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bInsertarTsg_estadistica_diaria(&$Tsg_estadistica_diaria, &$aErrores)
{
	try
	{
		$obj = new Tsg_estadistica_diariaDA();
		return $obj->bInsertarTsg_estadistica_diaria($Tsg_estadistica_diaria, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bInsertarTsg_estadistica_diaria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_estadistica_diaria                 *  
* Parametros entrada:                          *  
*      $Tsg_estadistica_diaria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bModificarTsg_estadistica_diaria(&$Tsg_estadistica_diaria, &$aErrores)
{
	try
	{
		$obj = new Tsg_estadistica_diariaDA();
		return $obj->bModificarTsg_estadistica_diaria($Tsg_estadistica_diaria, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bModificarTsg_estadistica_diaria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_estadistica_diaria                 *  
* Parametros entrada:                          *  
*      $Tsg_estadistica_diaria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bEliminarTsg_estadistica_diaria(&$Tsg_estadistica_diaria, &$aErrores)
{
	try
	{
		$obj = new Tsg_estadistica_diariaDA();
		return $obj->bEliminarTsg_estadistica_diaria($Tsg_estadistica_diaria, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bEliminarTsg_estadistica_diaria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_estadistica_diaria                 *  
* Parametros entrada:                          *  
*      $Tsg_estadistica_diaria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBajaTsg_estadistica_diaria(&$Tsg_estadistica_diaria, &$aErrores)
{
	try
	{
		$obj = new Tsg_estadistica_diariaDA();
		return $obj->bBajaTsg_estadistica_diaria($Tsg_estadistica_diaria, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBajaTsg_estadistica_diaria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_estadistica_diaria                 *  
* Parametros entrada:                          *  
*      $Tsg_estadistica_diaria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bAltaTsg_estadistica_diaria(&$Tsg_estadistica_diaria, &$aErrores)
{
	try
	{
		$obj = new Tsg_estadistica_diariaDA();
		return $obj->bAltaTsg_estadistica_diaria($Tsg_estadistica_diaria, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bAltaTsg_estadistica_diaria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_estadistica_diaria                 *  
* Parametros entrada:                          *  
*      $Tsg_estadistica_diaria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bValidarTsg_estadistica_diaria(&$Tsg_estadistica_diaria, &$aErrores)
{
	try
	{
		$obj = new Tsg_estadistica_diariaDA();
		return $obj->bValidarTsg_estadistica_diaria($Tsg_estadistica_diaria, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_estadistica_diaria"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>