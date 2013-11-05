<?php

include('..\DA\Tsg_categoria.DA.class.php');
/********************************************************  
* Clase Tsg_categoriaBO autogenerada por: 
* 	generadorEntidades.php v1.0 Autor: Luxo Lizama 
********************************************************/  

class Tsg_categoriaBO {

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
* Funcion bExisteTsg_categoria                 *  
* Parametros entrada:                          *  
*      $Tsg_categoria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bExisteTsg_categoria(&$Tsg_categoria, &$aErrores)
{
	try
	{
		$obj = new Tsg_categoriaDA();
		return $obj->bExisteTsg_categoria($Tsg_categoria, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bExisteTsg_categoria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBuscarTsg_categoria                 *  
* Parametros entrada:                          *  
*      $Tsg_categoria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBuscarTsg_categoria(&$Tsg_categoria, &$aErrores)
{
	try
	{
		$obj = new Tsg_categoriaDA();
		return $obj->bBuscarTsg_categoria($Tsg_categoria, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBuscarTsg_categoria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bInsertarTsg_categoria                 *  
* Parametros entrada:                          *  
*      $Tsg_categoria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bInsertarTsg_categoria(&$Tsg_categoria, &$aErrores)
{
	try
	{
		$obj = new Tsg_categoriaDA();
		return $obj->bInsertarTsg_categoria($Tsg_categoria, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bInsertarTsg_categoria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bModificarTsg_categoria                 *  
* Parametros entrada:                          *  
*      $Tsg_categoria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bModificarTsg_categoria(&$Tsg_categoria, &$aErrores)
{
	try
	{
		$obj = new Tsg_categoriaDA();
		return $obj->bModificarTsg_categoria($Tsg_categoria, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bModificarTsg_categoria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bEliminarTsg_categoria                 *  
* Parametros entrada:                          *  
*      $Tsg_categoria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bEliminarTsg_categoria(&$Tsg_categoria, &$aErrores)
{
	try
	{
		$obj = new Tsg_categoriaDA();
		return $obj->bEliminarTsg_categoria($Tsg_categoria, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bEliminarTsg_categoria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bBajaTsg_categoria                 *  
* Parametros entrada:                          *  
*      $Tsg_categoria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bBajaTsg_categoria(&$Tsg_categoria, &$aErrores)
{
	try
	{
		$obj = new Tsg_categoriaDA();
		return $obj->bBajaTsg_categoria($Tsg_categoria, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bBajaTsg_categoria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bAltaTsg_categoria                 *  
* Parametros entrada:                          *  
*      $Tsg_categoria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bAltaTsg_categoria(&$Tsg_categoria, &$aErrores)
{
	try
	{
		$obj = new Tsg_categoriaDA();
		return $obj->bAltaTsg_categoria($Tsg_categoria, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bAltaTsg_categoria"]["Exception"]=$e;
		return FALSE;
	}
}


/***********************************************  
* Funcion bValidarTsg_categoria                 *  
* Parametros entrada:                          *  
*      $Tsg_categoria = Entidad                *  
* Parametros salida:                           *  
*       $aErrores = Array salida con errores   *  
*       TRUE  = ejecución correcta             *  
*       FALSE = ejecución incorrecta           *  
***********************************************/  
public function bValidarTsg_categoria(&$Tsg_categoria, &$aErrores)
{
	try
	{
		$obj = new Tsg_categoriaDA();
		return $obj->bValidarTsg_categoria($Tsg_categoria, $aErrores);
	}
	catch(Exception $e)
	{
		$aErrores["bValidarTsg_categoria"]["Exception"]=$e;
		return FALSE;
	}
}

}
?>