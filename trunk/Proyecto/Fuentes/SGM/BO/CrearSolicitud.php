<?php
require("../config/parametros.php");
$data = array();
$msg = "";

$usu_id = $_SESSION["id_usuario"];
$usu_nom = $_SESSION['usuario'];

$txtNombre      = (isset($_POST['txtNombre']))? $_POST['txtNombre'] : "";
$txtDescripcion = (isset($_POST['txtDescripcion']))? $_POST['txtDescripcion'] : "";
$txtCorreoCopia = (isset($_POST['txtCorreoCopia']))? $_POST['txtCorreoCopia'] : "";
$ddlProyecto    = (isset($_POST['ddlProyecto']))? $_POST['ddlProyecto'] : "";
$ddlPrioridad   = (isset($_POST['ddlPrioridad']))? $_POST['ddlPrioridad'] : "";
$ddlCategoria   = (isset($_POST['ddlCategoria']))? $_POST['ddlCategoria'] : "";

$mySqli = new mysqli($V_HOST, $V_USER, $V_PASS, $V_BBDD);
if($mySqli->connect_errno)
{
    $data["Error conexion MySql"] = $mySqli->connect_error;
}

if(strlen($usu_id) > 0)
{
    $mySqli->autocommit(FALSE);
    $mySqli->query("SET NAMES 'utf8'");
    $mySqli->query("SET CHARACTER SET 'utf8'");

    $queryIns = "INSERT INTO tsg_ticket (tic_nombre,
                                         tic_descripcion,
                                         tic_fecha_crea,
                                         tsg_estado_ticketest_id,
                                         tsg_usuariousu_id,
                                         tsg_proyectopro_id,
                                         tsg_prioridadpri_id,
                                         tsg_categoriacat_id,
                                         tic_destcado,
                                         tsg_tic_correo_en_copia)
                 VALUES
                    ('$txtNombre',
                     '$txtDescripcion',
                      NOW(),
                      1,
                     '$usu_id',
                     '$ddlProyecto',
                     '$ddlPrioridad',
                     '$ddlCategoria',
                      0,
                     '$txtCorreoCopia');";

    $res = $mySqli->query($queryIns);
    
    if($mySqli->errno == 0)
    {
        if($mySqli->affected_rows > 0)
        {
            $msg = "Se ha creado la solicitud $mySqli->insert_id correctamente";
            $mySqli->commit();
            $mySqli->close();
            $data["estado"] = "OK";
            
            $objMail = new EnvioMail($V_HOST_SMTP,$V_PORT_SMTP,$V_USER_SMTP,$V_PASS_SMTP,$V_FROM,$V_FROM_NAME);
            $objMail->enviarCorreoCreacionSolicitud($mySqli->insert_id);
        }
        else {
           $mySqli->rollback(); 
           $mySqli->close();
           $msg = "No se han realizado cambios";
           $data["estado"] = "OK";
        }
    }
    else {
       $mySqli->rollback(); 
       $mySqli->close();
       $msg = "Error al crear la solicitud";
       $data["estado"] = "KO";
    }
}
else{
    $msg = "Usuario inválido";
    $data["estado"] = "KO";
}

if($V_DEPURAR == TRUE)
{
    $data["html"] = "$msg - $queryIns ";
}
else 
{
    $data["html"] = "$msg";
}

echo json_encode($data);
?>