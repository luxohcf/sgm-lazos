<?php
require("../config/parametros.php");

$depurar = 0; // Cambiar a 1 para ver el detalle
$data = array();
$msg = "";

$usu_id = $_SESSION["id_usuario"];
$usu_nom = $_SESSION['usuario'];

$txtNombreProyecto = (isset($_POST['txtNombreProyecto']))? $_POST['txtNombreProyecto'] : "";
$txtDuracion = (isset($_POST['txtDuracion']))? $_POST['txtDuracion'] : "";
$ddlJefeProyecto = (isset($_POST['ddlJefeProyecto']))? $_POST['ddlJefeProyecto'] : "";
$ddlCliente = (isset($_POST['ddlCliente']))? $_POST['ddlCliente'] : "";
$txtDescripcion = (isset($_POST['txtDescripcion']))? $_POST['txtDescripcion'] : "";
$txtFechaInicio = (isset($_POST['txtFechaInicio']))? $_POST['txtFechaInicio'] : "";
$txtFechaTermino = (isset($_POST['txtFechaTermino']))? $_POST['txtFechaTermino'] : "";
$txtFechaGarantia = (isset($_POST['txtFechaGarantia']))? $_POST['txtFechaGarantia'] : "";
$ddlTipoProyecto = (isset($_POST['ddlTipoProyecto']))? $_POST['ddlTipoProyecto'] : "";
$ddlEstadoProyecto = (isset($_POST['ddlEstadoProyecto']))? $_POST['ddlEstadoProyecto'] : "";

$mySqli = new mysqli($V_HOST, $V_USER, $V_PASS, $V_BBDD);
if($mySqli->connect_errno)
{
    $data["Error conexion MySql"] = $mySqli->connect_error;
}

if(strlen($usu_id) > 0)
{
    $querySelect = "SELECT 1 FROM tsg_proyecto WHERE pro_nombre = '$txtNombreProyecto' AND pro_activo = 1 ";
    $res = $mySqli->query($querySelect);
        
    if($mySqli->affected_rows < 1)
    {
        $mySqli->autocommit(FALSE);
        $mySqli->query("SET NAMES 'utf8'");
        $mySqli->query("SET CHARACTER SET 'utf8'");

        $queryIns = "INSERT INTO tsg_proyecto (`pro_nombre`, `pro_descrip`, `pro_usu_id_jefepro`, `pro_duracion`, `pro_fecha_ini`, `pro_fecha_term`, `pro_fecha_garan`, `pro_activo`, `tsg_clientecli_id`, `tsg_estado_proyectoest_id`, `sqi_tipo_proyectotip_id`, `pro_usu_creador`, `pro_fecha_creacion`, `pro_fecha_modificacion`, `pro_destacado`) 
                     VALUES
                        ('$txtNombreProyecto',
                         '$txtDescripcion',
                          $ddlJefeProyecto,
                         '$txtDuracion',
                          STR_TO_DATE('$txtFechaInicio','%d-%m-%Y'),
                          STR_TO_DATE('$txtFechaTermino','%d-%m-%Y'),
                          STR_TO_DATE('$txtFechaGarantia','%d-%m-%Y'),
                          1,
                          $ddlCliente,
                          $ddlEstadoProyecto,
                          $ddlTipoProyecto,
                         '$usu_nom',
                          curdate(), null, 0)";
        
        $res = $mySqli->query($queryIns);
        
        if($mySqli->errno == 0)
        {
            if($mySqli->affected_rows > 0)
            {
                $msg = "Se ha creado el proyecto $mySqli->insert_id correctamente";
                $mySqli->commit();
                $mySqli->close();
                $data["estado"] = "OK";
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
           $msg = "Error al crear el proyecto";
           $data["estado"] = "KO";
        }
    }
    else{
        $msg = "Ya existe el proyecto $txtNombreProyecto";
        $data["estado"] = "KO";
    }
}
else{
    $msg = "Usuario inválido";
    $data["estado"] = "KO";
}


if($depurar == TRUE)
{
    $data["html"] = "$msg - $querySelect - $queryIns ";
}
else 
{
    $data["html"] = "$msg";
}

echo json_encode($data);


?>