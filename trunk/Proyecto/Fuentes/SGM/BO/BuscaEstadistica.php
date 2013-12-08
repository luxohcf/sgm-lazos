<?php
require("../config/parametros.php");
$data = array();
$data["estado"] = "OK";
$super_array = array();
$proyectos = array();
$msg = "";

$usu_id = $_SESSION["id_usuario"];
$usu_nom = $_SESSION['usuario'];

$ddlProyecto = (isset($_POST['ddlProyecto']))? $_POST['ddlProyecto'] : NULL;
$ddlEstadoSolicitud = (isset($_POST['ddlEstadoSolicitud']))? $_POST['ddlEstadoSolicitud'] : NULL;
$ddlCliente = (isset($_POST['ddlCliente']))? $_POST['ddlCliente'] : NULL;
$ddlTipoProyecto = (isset($_POST['ddlTipoProyecto']))? $_POST['ddlTipoProyecto'] : NULL;
$txtFechaInicioDesde = (isset($_POST['txtFechaInicioDesde']))? $_POST['txtFechaInicioDesde'] : NULL;
$txtFechaInicioHasta = (isset($_POST['txtFechaInicioHasta']))? $_POST['txtFechaInicioHasta'] : NULL;

$query = "SELECT DATE_FORMAT(est.dis_fecha, '%d-%m-%Y') AS dis_fecha,
                 est.dis_total,
                 est.dis_creadas,
                 est.dis_asignadas,
                 est.dis_resueltas,
                 est.dis_rechazadas,
                 est.dis_cerradas,
                 est.dis_desestimadas,
                 est.tsg_proyectopro_id,
                 pry.pro_nombre,
                 pry.tsg_clientecli_id,
                 cli.cli_nombre
                 
          FROM tsg_estadistica_diaria est 
               INNER JOIN tsg_proyecto pry
               ON est.tsg_proyectopro_id = pry.pro_id 
               INNER JOIN tsg_cliente cli
               ON cli.cli_id = pry.tsg_clientecli_id 
          WHERE 1 = 1 ";

if($ddlProyecto != null && is_array($ddlProyecto) && count($ddlProyecto) > 0)
{
    $query .= " AND est.tsg_proyectopro_id IN (";
    foreach($ddlProyecto as $obj){
        $query .= "$obj,";
    }
    $query = substr($query,0, -1).")";
}

if($ddlTipoProyecto != null && is_array($ddlTipoProyecto) && count($ddlTipoProyecto) > 0)
{
    $query .= " AND pry.sqi_tipo_proyectotip_id IN (";
    foreach($ddlTipoProyecto as $obj){
        $query .= "$obj,";
    }
    $query = substr($query,0, -1).")";    
}

if($ddlCliente != null && is_array($ddlCliente) && count($ddlCliente) > 0)
{
    $query .= " AND pry.tsg_clientecli_id IN (";
    foreach($ddlCliente as $obj){
        $query .= "$obj,";
    }
    $query = substr($query,0, -1).")";
}

if($txtFechaInicioDesde != null && strlen($txtFechaInicioDesde) > 0){
    $query .= " AND DATE_FORMAT(est.dis_fecha,'%d-%m-%Y') >= '$txtFechaInicioDesde'";
}
if($txtFechaInicioHasta != null && strlen($txtFechaInicioHasta) > 0){
    $query .= " AND DATE_FORMAT(est.dis_fecha,'%d-%m-%Y') <= '$txtFechaInicioHasta'";
}

$mySqli = new mysqli($V_HOST, $V_USER, $V_PASS, $V_BBDD);

if($mySqli->connect_errno)
{
    $data["html"] = "Error conexion MySql";
    $data["estado"] = "KO";
    echo json_encode($data);
    die;
}

$res = $mySqli->query($query);

if($mySqli->affected_rows > 0)
{
    $x = 0;
    while($row = $res->fetch_assoc())
    {
        if($x == 0){
            $pry = $row["tsg_proyectopro_id"];
            $proyectos[$row["tsg_proyectopro_id"]] = "Cliente: ".$row["cli_nombre"] ." - Proyecto: ". $row["pro_nombre"];
            $super_array[$row["tsg_clientecli_id"]][$row["tsg_proyectopro_id"]][$x][] = "Fecha";
            $super_array[$row["tsg_clientecli_id"]][$row["tsg_proyectopro_id"]][$x][] = "Total";
            $super_array[$row["tsg_clientecli_id"]][$row["tsg_proyectopro_id"]][$x][] = "Creadas";
            $super_array[$row["tsg_clientecli_id"]][$row["tsg_proyectopro_id"]][$x][] = "Asignadas";
            $super_array[$row["tsg_clientecli_id"]][$row["tsg_proyectopro_id"]][$x][] = "Resueltas";
            $super_array[$row["tsg_clientecli_id"]][$row["tsg_proyectopro_id"]][$x][] = "Rechazadas";
            $super_array[$row["tsg_clientecli_id"]][$row["tsg_proyectopro_id"]][$x][] = "Cerradas";
            $super_array[$row["tsg_clientecli_id"]][$row["tsg_proyectopro_id"]][$x][] = "Desestimadas";
        }
        else{
            if($pry != $row["tsg_proyectopro_id"])
            {
                $pry = $row["tsg_proyectopro_id"];
                $x = 0;
                $proyectos[$row["tsg_proyectopro_id"]] = "Cliente: ".$row["cli_nombre"] ." - Proyecto: ". $row["pro_nombre"];
                $super_array[$row["tsg_clientecli_id"]][$row["tsg_proyectopro_id"]][$x][] = "Fecha";
                $super_array[$row["tsg_clientecli_id"]][$row["tsg_proyectopro_id"]][$x][] = "Total";
                $super_array[$row["tsg_clientecli_id"]][$row["tsg_proyectopro_id"]][$x][] = "Creadas";
                $super_array[$row["tsg_clientecli_id"]][$row["tsg_proyectopro_id"]][$x][] = "Asignadas";
                $super_array[$row["tsg_clientecli_id"]][$row["tsg_proyectopro_id"]][$x][] = "Resueltas";
                $super_array[$row["tsg_clientecli_id"]][$row["tsg_proyectopro_id"]][$x][] = "Rechazadas";
                $super_array[$row["tsg_clientecli_id"]][$row["tsg_proyectopro_id"]][$x][] = "Cerradas";
                $super_array[$row["tsg_clientecli_id"]][$row["tsg_proyectopro_id"]][$x][] = "Desestimadas";
            }
        }
        $x++;
        $super_array[$row["tsg_clientecli_id"]][$row["tsg_proyectopro_id"]][$x][] = $row["dis_fecha"];
        $super_array[$row["tsg_clientecli_id"]][$row["tsg_proyectopro_id"]][$x][] = $row["dis_total"];
        $super_array[$row["tsg_clientecli_id"]][$row["tsg_proyectopro_id"]][$x][] = $row["dis_creadas"];
        $super_array[$row["tsg_clientecli_id"]][$row["tsg_proyectopro_id"]][$x][] = $row["dis_asignadas"];
        $super_array[$row["tsg_clientecli_id"]][$row["tsg_proyectopro_id"]][$x][] = $row["dis_resueltas"];
        $super_array[$row["tsg_clientecli_id"]][$row["tsg_proyectopro_id"]][$x][] = $row["dis_rechazadas"];
        $super_array[$row["tsg_clientecli_id"]][$row["tsg_proyectopro_id"]][$x][] = $row["dis_cerradas"];
        $super_array[$row["tsg_clientecli_id"]][$row["tsg_proyectopro_id"]][$x][] = $row["dis_desestimadas"];
    }
}
else {
	$data["html"] = "No se han encontrado resultados";
    $data["estado"] = "KO";
    echo json_encode($data);
    die;
}
    
/*

var array = [
              ['Year', 'Sales', 'Expenses'],
              ['2004',  1000,      400],
              ['2005',  1170,      460],
              ['2006',  660,       1120],
              ['2007',  1030,      540]
            ]; */

$data["array"] = $super_array;
$data["proyectos"] = $proyectos;

if($V_DEPURAR == TRUE)
{
    $data["html"] = "$msg - $query ";
}
else 
{
    $data["html"] = "$msg";
}

echo json_encode($data, JSON_NUMERIC_CHECK);

?>

