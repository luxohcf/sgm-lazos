<?php

require("../config/parametros.php");
require("../BO/Usuario.BO.class.php");

$nombre = $_POST['name'];
$pass   = $_POST['pass'];
$id     = str_replace(" ", "", $_POST['name']);

$Usuario = array();
$Usuario['ID_USUARIO'] = (isset($id))?$id:"";
$Usuario['PASSWORD'] = (isset($pass))?$pass:"";
$Usuario["FLAG_ACTIVO"] = 1;

$data = array();
$aErrores = array();

$obj = new UsuarioBO();

/* Validar si los datos son correctos */
if($obj->bExisteUsuario($Usuario, $aErrores) == TRUE)
{
    /* Si todo ok crear el usuario en sesion */ 
    if($obj->bBuscarUsuario($Usuario, $aErrores) == TRUE){
        @session_start();
        $_SESSION['usuario'] = $nombre;
        $_SESSION['id_usuario'] = $Usuario[0]["ID_USUARIO"];
        $data["error"] = FALSE;    
    }
    else
    {
        if($depurar == TRUE)
        {
            $data["html"] = "Nombre de usuario o contraseña invalidos - ".$aErrores["SQL"];
        }
        else 
        {
            $data["html"] = "Nombre de usuario o contraseña invalidos";  
        }
        $data["error"] = TRUE;
    }
}
else /* Si no lo son retornar un mensaje */
{
    if($depurar == TRUE)
    {
        $data["html"] = "Nombre de usuario o contraseña invalidos - ".$aErrores["SQL"];
    }
    else 
    {
        $data["html"] = "Nombre de usuario o contraseña invalidos";  
    }
	$data["error"] = TRUE;
}

if($depurarMax == TRUE)
{
    var_dump($_POST);
    var_dump($obj);
    var_dump($_SERVER);
    var_dump($sXmlConfig);
    var_dump($xml);
    var_dump($url);
    var_dump($V_HOST);
    var_dump($V_USER);
    var_dump($V_PASS);
    var_dump($V_BBDD);
    var_dump($data);
    var_dump($Usuario);
    var_dump($aErrores);
}

echo json_encode($data);

?>