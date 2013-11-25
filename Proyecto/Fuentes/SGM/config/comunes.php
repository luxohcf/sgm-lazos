<?php
function generar_clave($longitud){ 
       $cadena="[^A-Z0-9]"; 
       return substr(preg_replace($cadena, "", md5(rand())) . 
       preg_replace($cadena, "", md5(rand())) . 
       preg_replace($cadena, "", md5(rand())), 
       0, $longitud); 
} 

function generar_Hash($clave, $llave)
{
	//$salt = "$2a$07$" + $llave + "$";
	//return crypt($clave, $salt);
	return "123456";
}


function ValidaAcceso($pagina, $datos){
    
    foreach ($datos as $titulo => $opciones) 
    {
      foreach ($opciones as $grupo) 
      {
          foreach ($grupo as $opcion) 
          {
              if(strpos($opcion['RUTA'], $pagina) !== FALSE)
              {
                  return TRUE;
              } 
          }
      }
    }
    return FALSE;
}

function debug($var){
    $msg = "<span>".var_dump($var)."</span>";
    return $msg;
}

?>