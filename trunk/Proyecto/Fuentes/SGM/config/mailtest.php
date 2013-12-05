<?php

require_once("parametros.php");

$objMail = new EnvioMail($V_HOST_SMTP,$V_PORT_SMTP,$V_USER_SMTP,$V_PASS_SMTP,$V_FROM,$V_FROM_NAME);

debug($objMail);

$ret = $objMail->EnviarCorreo("Test", "Correo de prueba", array("luis.lizama05@inacapmail.cl" => "Luxo lizama"));

if($ret == TRUE){
    echo "OK";
}
else{
    echo $objMail->ErrorInfo;
}

?>