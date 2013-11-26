<?php
@session_start();
error_reporting(FALSE);
require_once("comunes.php");

/* Archivo de configuracion */
// $url = "http://".$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
// http://localhost:8080/sgm-lazos/Proyecto/Fuentes/SGM/index.php
// user 11111111-1 pass:asdf

//$sXmlConfig = "$url/sgm-lazos/Proyecto/Fuentes/SGM/config/Config.xml";
//$sXmlConfig = "Config.xml";
//$xml = simplexml_load_file($sXmlConfig);

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

$V_TITULO = "Proyecto SGM";

/* Ambiente testing */

$V_HOST = "mysql.hostinger.es";
$V_USER = "u643183889_sgm";
$V_PASS = "sgmlazos";
$V_BBDD = "u643183889_sgm";

/* Ambiente desarrollo
$V_HOST = "localhost";
$V_USER = "sgm";
$V_PASS = "sgm";
$V_BBDD = "sgm";*/

$V_DEPURAR = FALSE;

// Clase para generar cosas genericas
class Utilidades
{
    private $V_HOST;
    private $V_USER;
    private $V_PASS;
    private $V_BBDD;
    
    function __construct($V_HOST="localhost", $V_USER="sgm", $V_PASS="sgm", $V_BBDD="sgm")
    {
        $this->V_HOST=$V_HOST;
        $this->V_USER=$V_USER;
        $this->V_PASS=$V_PASS;
        $this->V_BBDD=$V_BBDD;
    }
    
    public function GeneraSelectClientes($nombre){
            
        $html  = "<label>Cliente</label>";
        $html .= "<select class=\"selectpicker\" name=\"$nombre\" id=\"$nombre\" multiple data-size=\"5\" data-live-search=\"true\">";
        
        $mySqli = new mysqli($this->V_HOST, $this->V_USER, $this->V_PASS, $this->V_BBDD);
        $query = "SELECT `cli_id`, `cli_empresa`, `cli_rut` FROM `tsg_cliente` WHERE `cli_activo` = 1 ";

        if ($mySqli -> connect_errno) {
            $html = "Error al generar el menu";
            return $html;
        }
        $res = $mySqli -> query($query);

        if ($mySqli -> affected_rows > 0) {
            while ($row = $res -> fetch_assoc()) {
                $html .= "<option value='".$row["cli_id"]."'>".$row["cli_rut"]." - ".$row["cli_empresa"]."</option>";
            }
        }
        $html .= "</select>";

        return $html;
    }
    
    public function GeneraSelectDestacado($nombre){
        $html  = "<label>Destacado</label>";
        $html .= "<select class=\"selectpicker\" name=\"$nombre\" id=\"$nombre\" data-size=\"3\" data-live-search=\"false\">";
        $html .= "<option data-icon=\"icon-list\" selected >Seleccione...</option>";
        $html .= "<option data-icon=\"icon-star\" value='1'>Destacados</option>";
        $html .= "<option data-icon=\"icon-star-empty\" value='0'>No Destacados</option>";
        $html .= "</select>";

        return $html;
    }
    
    public function GeneraSelectTipoProyecto($nombre){
        $html  = "<label>Tipo Proyecto</label>";
        $html .= "<select class=\"selectpicker\" name=\"$nombre\" id=\"$nombre\" multiple data-size=\"5\" data-live-search=\"true\">";
        
        $mySqli = new mysqli($this->V_HOST, $this->V_USER, $this->V_PASS, $this->V_BBDD);
        $query = "SELECT `tip_id`, `tip_nombre` FROM `sqi_tipo_proyecto` WHERE `tip_activo` = 1 ";

        if ($mySqli -> connect_errno) {
            $html = "Error al generar el menu";
            return $html;
        }
        $res = $mySqli -> query($query);

        if ($mySqli -> affected_rows > 0) {
            while ($row = $res -> fetch_assoc()) {
                $html .= "<option value='".$row["tip_id"]."'>".$row["tip_nombre"]."</option>";
            }
        }
        $html .= "</select>";

        return $html;
    }
    
    public function GeneraSelectJefeProyecto($nombre){
        $html  = "<label>Jefe de Proyecto</label>";
        $html .= "<select class=\"selectpicker\" name=\"$nombre\" id=\"$nombre\" multiple data-size=\"5\" data-live-search=\"true\">";
        
        $mySqli = new mysqli($this->V_HOST, $this->V_USER, $this->V_PASS, $this->V_BBDD);
        $query = "SELECT DISTINCT usu.usu_id, usu.usu_nombre, usu.usu_apellido
                    FROM tsg_usuario usu
                    INNER JOIN tsg_proyecto pry
                    ON pry.pro_usu_id_jefepro = usu.usu_id
                    WHERE usu.usu_activo = 1 AND pry.pro_activo = 1";

        if ($mySqli -> connect_errno) {
            $html = "Error al generar el menu";
            return $html;
        }
        $res = $mySqli -> query($query);

        if ($mySqli -> affected_rows > 0) {
            while ($row = $res -> fetch_assoc()) {
                $html .= "<option value='".$row["usu_id"]."'>".$row["usu_nombre"]." ".$row["usu_apellido"]."</option>";
            }
        }
        $html .= "</select>";

        return $html;
    }

    public function GeneraSelectEstadoProyecto($nombre){
        $html  = "<label>Estado Proyecto</label>";
        $html .= "<select class=\"selectpicker\" name=\"$nombre\" id=\"$nombre\" multiple data-size=\"5\" data-live-search=\"true\">";
        
        $mySqli = new mysqli($this->V_HOST, $this->V_USER, $this->V_PASS, $this->V_BBDD);
        $query = "SELECT est_id, est_nombre
                    FROM tsg_estado_proyecto 
                    WHERE est_activo = 1";

        if ($mySqli -> connect_errno) {
            $html = "Error al generar el menu";
            return $html;
        }
        $res = $mySqli -> query($query);

        if ($mySqli -> affected_rows > 0) {
            while ($row = $res -> fetch_assoc()) {
                $html .= "<option value='".$row["est_id"]."'>".$row["est_nombre"]."</option>";
            }
        }
        $html .= "</select>";

        return $html;
    }
    
    public function toString()
    {
        return var_dump($this);
    }
};


// http://silviomoreto.github.io/bootstrap-select/
// http://eternicode.github.io/bootstrap-datepicker/


?>