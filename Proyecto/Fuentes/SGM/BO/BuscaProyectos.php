<?php
require("../config/parametros.php");
//http://localhost:8080/sgm-lazos/Proyecto/Fuentes/SGM/BO/BuscaRegistros.php
$depurar = 0; // Cambiar a 1 para ver el detalle
$aaData = array();

$query = "SELECT `mod_id`, `mod_nombre`, `mod_descrip`, `mod_activo`, `mod_usu_creador`, `mod_fecha_creacion`, `mod_fecha_modificacion`, `mod_id_mod_padre`, `mod_ruta_imagen`
		  FROM `tsg_modulo`";

$mySqli = new mysqli($V_HOST, $V_USER, $V_PASS, $V_BBDD);

if($mySqli->connect_errno)
{
    $aErrores["Error conexion MySql"] = $mySqli->connect_error;
}
$mySqli->query("SET CHARSET 'utf8'");
$res = $mySqli->query($query);

if($mySqli->affected_rows > 0)
{
    while($row = $res->fetch_assoc())
    {
        $aaData[] = array(  
                            "<img src='css/images/Search.png' onclick='verDetalle(".$row['mod_nombre'].")' />", // Ver
                            //(isset($row['TEM_ERRORES']) && strlen($row['TEM_ERRORES']) > 0 ) ? "<img src='../../css/nocheck.png' onclick='verError(".$row['HIS_ID'].")' />" : "<img src='../../css/check.png' />", // Estado                    
                            $row['mod_nombre'], //N° Columna
                            $row['mod_descrip'], // Año
                            substr($row['mod_usu_creador'], 0, 15)."...", // Nombre
                            $row['mod_fecha_creacion'], // Etapa
                            $row['mod_fecha_creacion']//, // Cuenta
                            //$row['TEM_UNI_TEC'], // Unidad Tecnica
                            //$row['HIS_ID'] // Id
                        );
     }
  
}

$aa = array(
     'sEcho' => 1,
        "iTotalRecords" => 0,
        "iTotalDisplayRecords" => 0,
        'aaData' => $aaData);

if($depurar)
{
    echo "<span>";
    echo var_dump($V_HOST);
    echo "</span>";
    echo "<span>";
    echo var_dump($aa);
    echo "</span>";
   die;
}
        
echo json_encode($aa);

?>