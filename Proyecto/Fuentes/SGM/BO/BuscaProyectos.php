<?php
require("../config/parametros.php");
//http://localhost:8080/sgm-lazos/Proyecto/Fuentes/SGM/BO/BuscaRegistros.php

$aaData = array();

$CodigoProyecto = (isset($_POST['txtCodigoProyecto']))? $_POST['txtCodigoProyecto'] : NULL;
$NombreProyecto = (isset($_POST['txtNombreProyecto']))? $_POST['txtNombreProyecto'] : NULL;
$ddlJefeProyecto = (isset($_POST['ddlJefeProyecto']))? $_POST['ddlJefeProyecto'] : NULL;
$ddlCliente = (isset($_POST['ddlCliente']))? $_POST['ddlCliente'] : NULL;
$FechaInicioDesde = (isset($_POST['txtFechaInicioDesde']))? $_POST['txtFechaInicioDesde'] : NULL;
$CodigoProyecto = (isset($_POST['txtFechaTerminoDesde']))? $_POST['txtFechaTerminoDesde'] : NULL;
$FechaTerminoDesde = (isset($_POST['txtCodigoProyecto']))? $_POST['txtCodigoProyecto'] : NULL;
$FechaGarantiaDesde = (isset($_POST['txtFechaGarantiaDesde']))? $_POST['txtFechaGarantiaDesde'] : NULL;
$ddlDestacado = (isset($_POST['ddlDestacado']))? $_POST['ddlDestacado'] : NULL;
$FechaInicioHasta = (isset($_POST['txtFechaInicioHasta']))? $_POST['txtFechaInicioHasta'] : NULL;
$FechaTerminoHasta = (isset($_POST['txtFechaTerminoHasta']))? $_POST['txtFechaTerminoHasta'] : NULL;
$FechaGarantiaHasta = (isset($_POST['txtFechaGarantiaHasta']))? $_POST['txtFechaGarantiaHasta'] : NULL;
$FechaGarantiaHasta = (isset($_POST['txtFechaGarantiaHasta']))? $_POST['txtFechaGarantiaHasta'] : NULL;
$ddlTipoProyecto = (isset($_POST['ddlTipoProyecto']))? $_POST['ddlTipoProyecto'] : NULL;
$ddlEstadoProyecto = (isset($_POST['ddlEstadoProyecto']))? $_POST['ddlEstadoProyecto'] : NULL;

$query = "SELECT DISTINCT 
                pry.pro_destacado,
                pry.pro_id,
                pry.pro_nombre,
                tip_pry.tip_nombre,
                usu.usu_nombre, 
                usu.usu_apellido,
                est_pry.est_nombre,
                pry.pro_fecha_ini,
                pry.pro_fecha_term,
                pry.pro_fecha_garan,
                cli.cli_rut
                
        FROM tsg_proyecto pry
            LEFT JOIN tsg_usuario usu
            ON pry.pro_usu_id_jefepro = usu.usu_id AND usu.usu_activo = 1
            LEFT JOIN sqi_tipo_proyecto tip_pry
            ON pry.sqi_tipo_proyectotip_id = tip_pry.tip_id AND tip_activo = 1
            LEFT JOIN tsg_estado_proyecto est_pry
            ON pry.tsg_estado_proyectoest_id = est_pry.est_id AND est_pry.est_activo = 1
            LEFT JOIN tsg_cliente cli 
            ON pry.tsg_clientecli_id = cli.cli_id AND cli_activo = 1
        WHERE 
            pry.pro_activo = 1";
            
// Pendiente Concatenar filtros

$mySqli = new mysqli($V_HOST, $V_USER, $V_PASS, $V_BBDD);

if($mySqli->connect_errno)
{
    $aErrores["Error conexion MySql"] = $mySqli->connect_error;
}
$mySqli->query("SET CHARSET 'utf8'");
$res = $mySqli->query($query);

if($mySqli->affected_rows > 0)
{
    $destIni = "<a class=\"btn\" href=\"javascript:NoDestacarProyecto(";
    $destFin = ");\"><i class=\"icon-star\"></i></a>";
    $ndestIni = "<a class=\"btn\" href=\"javascript:DestacarProyecto(";
    $ndestFin = ");\"><i class=\"icon-star\"></i></a>";
    while($row = $res->fetch_assoc())
    {
        $aaData[] = array(  
                            ($row["pro_destacado"] == "1") ? $destIni.$row["pro_id"].$destFin : $ndestIni.$row["pro_id"].$ndestFin,
                            $row['pro_id'],
                            $row['pro_nombre'],
                            $row['tip_nombre'],
                            substr($row['usu_nombre']." ".$row['usu_apellido'], 0, 15)."...",
                            $row['est_nombre'],
                            $row['pro_fecha_ini'],
                            $row['pro_fecha_term'],
                            $row['pro_fecha_garan'],
                            $row['pro_fecha_garan'],
                            $row['cli_rut'],
                            "<a class=\"btn\" href=\"javascript:ModificarProyecto(".$row["pro_id"].");\"><i class=\"icon-pencil\"></i></a>"
                        );
     }
  
}

$aa = array(
     'sEcho' => 1,
        "iTotalRecords" => 0,
        "iTotalDisplayRecords" => 0,
        'aaData' => $aaData);

/*if($V_DEPURAR == TRUE)
{
    debug($query);
    debug($aa);
    die;
}*/
        
echo json_encode($aa);

?>