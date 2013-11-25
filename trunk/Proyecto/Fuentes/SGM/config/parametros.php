<?php
@session_start();
error_reporting(FALSE);
require_once("comunes.php");

/* Archivo de configuracion */
// $url = "http://".$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
// http://localhost:8080/sgm-lazos/Proyecto/Fuentes/SGM/index.php
// user 11111111-1 pass:asdf

//$sXmlConfig = "$url/sgm-lazos/Proyecto/Fuentes/SGM/config/Config.xml";
$sXmlConfig = "Config.xml";
$xml = simplexml_load_file($sXmlConfig);


/* Variables de base de datos 
$V_HOST = $xml->Host;
$V_USER = $xml->User;
$V_PASS = $xml->Password;
$V_BBDD = $xml->BBDD;*/
$V_LLAVE = "ragnarok";
$V_ACCES_DENIED = "<div class='row-fluid'> 
           <div class='title span12'>
              <h1>Usted no cuenta con los permisos para acceder a esta p&aacute;gina</h1>
           </div>        
        </div> 
        <div class='row-fluid'>
           <div class='span5 offset2'>
              <center><img src='css/images/acceso_denegado.png' title='logo' alt='logo' style='width:150px;'></center>
           </div>
        </div>";


/*debug($xml);*/

$V_HOST = "mysql.hostinger.es";
$V_USER = "u643183889_sgm";
$V_PASS = "sgmlazos";
$V_BBDD = "u643183889_sgm";

$V_DEPURAR = FALSE;


?>