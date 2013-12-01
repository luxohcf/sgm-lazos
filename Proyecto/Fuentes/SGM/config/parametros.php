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
$V_EXT_VALIDAS = "doc,docx,xls,xlsx,jpg,png,pdf";
$V_MAXIMO_MB = "2";

/* Ambiente testing 

$V_HOST = "mysql.hostinger.es";
$V_USER = "u643183889_sgm";
$V_PASS = "sgmlazos";
$V_BBDD = "u643183889_sgm";

$V_DEPURAR = FALSE; */

/* Ambiente desarrollo */
$V_HOST = "localhost";
$V_USER = "sgm";
$V_PASS = "sgm";
$V_BBDD = "sgm";

$V_DEPURAR = TRUE; 

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
    
    public function GeneraSelectClientes($nombre, $multiple = false, $buscar = false, $size = 0){
            
        $html  = "<label>Cliente</label>";
        if($multiple)
        {
            $html  = "<label>Clientes</label>";
        }
        $html .= "<select class=\"selectpicker\" id=\"$nombre\" name=\"$nombre";
		
		if($multiple == true){
			$html .= "[]\"  multiple ";	
		}
		else{
			$html .= "\" ";
		}
		
		if($buscar == true){
			$html .= " data-live-search=\"true\" ";	
		}
		
		if($size != 0)
		{
			$html .= " data-size=\"$size\"  ";
		}
		
		$html .= ">";
        
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
        $html .= "<option data-icon=\"icon-list\" value='-1' selected >Seleccione...</option>";
        $html .= "<option data-icon=\"icon-star\" value='1'>Destacados</option>";
        $html .= "<option data-icon=\"icon-star-empty\" value='0'>No Destacados</option>";
        $html .= "</select>";

        return $html;
    }
    
    public function GeneraSelectTipoProyecto($nombre, $multiple = false, $buscar = false, $size = 0){
        $html  = "<label>Tipo Proyecto</label>";
		$html .= "<select class=\"selectpicker\" id=\"$nombre\" name=\"$nombre";
		
		if($multiple == true){
			$html .= "[]\"  multiple ";	
		}
		else{
			$html .= "\" ";
		}
		
		if($buscar == true){
			$html .= " data-live-search=\"true\" ";	
		}
		
		if($size != 0)
		{
			$html .= " data-size=\"$size\"  ";
		}
		
		$html .= ">";
        
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
    
    public function GeneraSelectJefeProyecto($nombre, $multiple = false, $buscar = false, $size = 0){
        $html  = "<label>Jefe de Proyecto</label>";
        $html .= "<select class=\"selectpicker\" id=\"$nombre\" name=\"$nombre";
		
		if($multiple == true){
			$html .= "[]\"  multiple ";	
		}
		else{
			$html .= "\" ";
		}
		
		if($buscar == true){
			$html .= " data-live-search=\"true\" ";	
		}
		
		if($size != 0)
		{
			$html .= " data-size=\"$size\"  ";
		}
		
		$html .= ">";
		
        
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

    public function GeneraSelectEncargado($nombre, $multiple = false, $buscar = false, $size = 0){
        $html  = "<label>Encargado</label>";
        if($multiple)
        {
            $html  = "<label>Encargados</label>";
        }
        $html .= "<select class=\"selectpicker\" id=\"$nombre\" name=\"$nombre";
        
        if($multiple == true){
            $html .= "[]\"  multiple "; 
        }
        else{
            $html .= "\" ";
        }
        
        if($buscar == true){
            $html .= " data-live-search=\"true\" "; 
        }
        
        if($size != 0)
        {
            $html .= " data-size=\"$size\"  ";
        }
        
        $html .= ">";
        $id_Encargado = 3; // Rol encargado
        
        $mySqli = new mysqli($this->V_HOST, $this->V_USER, $this->V_PASS, $this->V_BBDD);
        $query = "SELECT DISTINCT usu.usu_id, usu.usu_nombre, usu.usu_apellido
                  FROM tsg_usuario usu
                    INNER JOIN tsg_usuario_tsg_rol rol_usu
                    ON rol_usu.tsg_usuariousu_id = usu.usu_id
                    INNER JOIN tsg_rol rol
                    ON rol.rol_id = rol_usu.tsg_rolrol_id AND rol.rol_activo = 1
                  WHERE usu.usu_activo = 1 AND rol.rol_id = $id_Encargado ";

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

    public function GeneraSelectEstadoProyecto($nombre, $multiple = false, $buscar = false, $size = 0){
        $html  = "<label>Estado Proyecto</label>";
        $html .= "<select class=\"selectpicker\" id=\"$nombre\" name=\"$nombre";
		
		if($multiple == true){
			$html .= "[]\"  multiple ";	
		}
		else{
			$html .= "\" ";
		}
		
		if($buscar == true){
			$html .= " data-live-search=\"true\" ";	
		}
		
		if($size != 0)
		{
			$html .= " data-size=\"$size\"  ";
		}
		
		$html .= ">";
        
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

	public function GeneraSelectProyectos($nombre, $multiple = false, $buscar = false, $size = 0){
		$html  = "<label>Proyecto</label>";
        if($multiple)
        {
            $html  = "<label>Proyectos</label>";
        }
        $html .= "<select class=\"selectpicker\" id=\"$nombre\" name=\"$nombre";
		
		if($multiple == true){
			$html .= "[]\"  multiple ";	
		}
		else{
			$html .= "\" ";
		}
		
		if($buscar == true){
			$html .= " data-live-search=\"true\" ";	
		}
		
		if($size != 0)
		{
			$html .= " data-size=\"$size\"  ";
		}
		
		$html .= ">";
        
        $mySqli = new mysqli($this->V_HOST, $this->V_USER, $this->V_PASS, $this->V_BBDD);
        $query = "SELECT pro_id, pro_nombre
                    FROM tsg_proyecto 
                    WHERE pro_activo = 1";

        if ($mySqli -> connect_errno) {
            $html = "Error al generar el menu";
            return $html;
        }
        $res = $mySqli -> query($query);

        if ($mySqli -> affected_rows > 0) {
            while ($row = $res -> fetch_assoc()) {
                $html .= "<option value='".$row["pro_id"]."'>".$row["pro_nombre"]."</option>";
            }
        }
        $html .= "</select>";

        return $html;
	}

	public function GeneraSelectEstadoSolicitud($nombre, $multiple = false, $buscar = false, $size = 0){
		$html  = "<label>Estado Solicitud</label>";
        $html .= "<select class=\"selectpicker\" id=\"$nombre\" name=\"$nombre";
		
		if($multiple == true){
			$html .= "[]\"  multiple ";	
		}
		else{
			$html .= "\" ";
		}
		
		if($buscar == true){
			$html .= " data-live-search=\"true\" ";	
		}
		
		if($size != 0)
		{
			$html .= " data-size=\"$size\"  ";
		}
		
		$html .= ">";
        
        $mySqli = new mysqli($this->V_HOST, $this->V_USER, $this->V_PASS, $this->V_BBDD);
        $query = "SELECT est_id, est_nombre
                    FROM tsg_estado_ticket 
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

	public function GeneraSelectCategoriaSolicitud($nombre, $multiple = false, $buscar = false, $size = 0){
		$html  = "<label>Categoría Solicitud</label>";
        $html .= "<select class=\"selectpicker\" id=\"$nombre\" name=\"$nombre";
		
		if($multiple == true){
			$html .= "[]\"  multiple ";	
		}
		else{
			$html .= "\" ";
		}
		
		if($buscar == true){
			$html .= " data-live-search=\"true\" ";	
		}
		
		if($size != 0)
		{
			$html .= " data-size=\"$size\"  ";
		}
		
		$html .= ">";
        
        $mySqli = new mysqli($this->V_HOST, $this->V_USER, $this->V_PASS, $this->V_BBDD);
        $query = "SELECT cat_id, cat_nombre
                    FROM tsg_categoria 
                    WHERE cat_activo = 1";

        if ($mySqli -> connect_errno) {
            $html = "Error al generar el menu";
            return $html;
        }
        $res = $mySqli -> query($query);

        if ($mySqli -> affected_rows > 0) {
            while ($row = $res -> fetch_assoc()) {
                $html .= "<option value='".$row["cat_id"]."'>".$row["cat_nombre"]."</option>";
            }
        }
        $html .= "</select>";

        return $html;
	}
	
	public function GeneraSelectUsuarios($nombre, $multiple = false, $buscar = false, $size = 0){
		$html  = "<label>Usuario</label>";
        if($multiple)
        {
            $html  = "<label>Usuarios</label>";
        }
        $html .= "<select class=\"selectpicker\" id=\"$nombre\" name=\"$nombre";
		
		if($multiple == true){
			$html .= "[]\"  multiple ";	
		}
		else{
			$html .= "\" ";
		}
		
		if($buscar == true){
			$html .= " data-live-search=\"true\" ";	
		}
		
		if($size != 0)
		{
			$html .= " data-size=\"$size\"  ";
		}
		
		$html .= ">";
        
        $mySqli = new mysqli($this->V_HOST, $this->V_USER, $this->V_PASS, $this->V_BBDD);
        $query = "SELECT usu_id, usu_rut,usu_nombre
                    FROM tsg_usuario 
                    WHERE usu_activo = 1";

        if ($mySqli -> connect_errno) {
            $html = "Error al generar el menu";
            return $html;
        }
        $res = $mySqli -> query($query);

        if ($mySqli -> affected_rows > 0) {
            while ($row = $res -> fetch_assoc()) {
                $html .= "<option value='".$row["usu_id"]."'>".$row["usu_rut"]." - ".$row["usu_nombre"]."</option>";
            }
        }
        $html .= "</select>";

        return $html;
	}

	public function GeneraSelectPrioridad($nombre, $multiple = false, $buscar = false, $size = 0){
		$html  = "<label>Prioridad</label>";
        if($multiple)
        {
            $html  = "<label>Prioridades</label>";
        }
        $html .= "<select class=\"selectpicker\" id=\"$nombre\" name=\"$nombre";
		
		if($multiple == true){
			$html .= "[]\"  multiple ";	
		}
		else{
			$html .= "\" ";
		}
		
		if($buscar == true){
			$html .= " data-live-search=\"true\" ";	
		}
		
		if($size != 0)
		{
			$html .= " data-size=\"$size\"  ";
		}
		
		$html .= ">";
        
        $mySqli = new mysqli($this->V_HOST, $this->V_USER, $this->V_PASS, $this->V_BBDD);
        $query = "SELECT pri_id, pri_nombre
                    FROM tsg_prioridad 
                    WHERE pri_activo = 1";

        if ($mySqli -> connect_errno) {
            $html = "Error al generar el menu";
            return $html;
        }
        $res = $mySqli -> query($query);

        if ($mySqli -> affected_rows > 0) {
            while ($row = $res -> fetch_assoc()) {
                $html .= "<option value='".$row["pri_id"]."'>".$row["pri_nombre"]."</option>";
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
// http://bootboxjs.com/

?>