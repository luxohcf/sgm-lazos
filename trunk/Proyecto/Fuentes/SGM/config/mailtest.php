<?php

require_once("parametros.php");
/*
$objMail = new EnvioMail($V_HOST_SMTP,$V_PORT_SMTP,$V_USER_SMTP,$V_PASS_SMTP,$V_FROM,$V_FROM_NAME);

//debug($objMail);

$ret = $objMail->EnviarCorreo("Test", "Correo de prueba", array("luis.lizama05@inacapmail.cl" => "Luxo lizama"));

if($ret == TRUE){
    echo "OK";
}
else{
    echo $objMail->ErrorInfo;
 * 
}*/

/**/

$objMail = new EnvioMail($V_HOST_SMTP,$V_PORT_SMTP,$V_USER_SMTP,$V_PASS_SMTP,$V_FROM,$V_FROM_NAME);
//debug($objMail);
$objMail->enviarCorreoCreacionSolicitud("3");

debug($objMail);

$copia = preg_split('/;/', "xx@x.cl");
debug($copia);
die;
            $subject = "Se ha creado la solicitud $mySqli->insert_id";
            $pry = "";
            $tipo = "";
            $estado = "";
            $user = "";
            $nombre = "";
            $desc = "";
            
            $body = "<h4>Estimados(as):</h4>
                      <p>Con fecha ".date("d-M-Y H:m:s")." se ha creado 
                      exitosamente la solicitud <b>0$mySqli->insert_id</b> con el siguiente detalle:</p>
                      
                      <ul>
                          <li>Proyecto:$pry</li>
                          <li>Tipo:$tipo</li>
                          <li>Estado:$estado</li>
                          <li>Usuario creador:$user</li>
                          <li>Nombre:$nombre</li>
                          <li>Descripci\$oactue;n:$desc</li>
                      </ul>
                      
                      <h5>$V_TITULO</h5>
                      <small>Mensaje generado automaticamente</small>
                      ";
                      
            
            $objMail = new EnvioMail($V_HOST_SMTP,$V_PORT_SMTP,$V_USER_SMTP,$V_PASS_SMTP,$V_FROM,$V_FROM_NAME);
            
            $correos = array("luis.lizama05@inacapmail.cl" => "Luxo lizama");
            

            $ret = $objMail->EnviarCorreo($subject, $body, $correos);

if($ret == TRUE){
    echo "OK";
}
else{
    echo $objMail->ErrorInfo;
}
?>