<?php

include("cabecera.php");
include("menu.php");

$usu_id = $_SESSION["id_usuario"];
$proyecto = array();

$idCliente = $_GET["idCliente"];

if ($idCliente == NULL || $usu_id == NULL || strlen($idCliente) < 1) {
	echo $V_ACCES_DENIED;
	exit();
}

//---------------------------------------------------

$query = "SELECT pry.cli_id, 
				 pry.cli_nombre,
				 pry.cli_apellido,
				 pry.cli_correo,
				 pry.cli_empresa,
				 pry.cli_rut,
		    	 pry.cli_direccion
				 
		 FROM tsg_cliente pry
		 WHERE pry.cli_id = $idCliente AND pry.cli_activo = 1 ";

$mySqli = new mysqli($V_HOST, $V_USER, $V_PASS, $V_BBDD);
$mySqli->query("SET NAMES 'utf8'");
$mySqli->query("SET CHARACTER SET 'utf8'");
$res = $mySqli -> query($query);

if ($mySqli -> affected_rows > 0)// Si los datos son validos
{
	while ($row = $res -> fetch_assoc()) {
		$proyecto["cli_id"] = $row['cli_id'];
		$proyecto["cli_nombre"] = $row['cli_nombre'];
		$proyecto["cli_apellido"] = $row['cli_apellido'];
		$proyecto["cli_correo"] = $row['cli_correo'];
		$proyecto["cli_empresa"] = $row["cli_empresa"];
		$proyecto["cli_rut"] = $row["cli_rut"];
		$proyecto["cli_direccion"] = $row["cli_direccion"];
		}
	$mySqli -> close();
}

//---------------------------------------------------------

?>
<script type="text/javascript">

$(function() {
    $("#btnGuardar").click(function(){
        if(ValidarDatos()){
            $.post("./BO/ModificarDatosCliente.php", $('#FormPrincipal').serialize(),
                function(data) {
                    var obj = jQuery.parseJSON(data);
                    
                    var msj = obj.html;
                    var sub_msj = obj.errores; 
                    
                    var estado =  obj.estado;
                    if(estado == 'OK') // Exito
                    {
                        MostrarExito(msj, sub_msj);
                        Limpiar();
                    }
                    else // Error
                    {
                        MostrarError(msj, sub_msj);
                    }
            });
        }
    });
});

function Limpiar(){
    // Pendiente
}

function ValidarDatos(){
      var errores = [];
      
//      -------------------------------------------------
  
	  var nombre = $("#txtNombreCliente").val();
	  
	  if(!ValidaTexto(nombre)){
	  	errores.push(" - El Nombre es inválido.");
	  }
	  
	   var apellido = $("#txtApellidoCliente").val();
	  
	  if(!ValidaTexto(apellido)){
	  	errores.push(" - El Apellido es inválido.");
	  }
	  
	  var direccion = $("#txtdireccion").val();
	  
	  if(!ValidaTexto(direccion)){
	  	errores.push(" - La Dirección es inválida.");
	  }
	  
	  var txtRut = $("#txtRut").val();

      if(!ValidaRut(txtRut)){
	    errores.push(" - El Rut es inválido.");
	    }
	  
	  var correo = $("#txtCorreo").val();
	  
  	  if(!ValidaTexto(correo)){
	  	errores.push(" - El Correo es inválido.");
	  }
	  

  //----------------------------------------------------------    
      if(errores.length > 0)
      {
        MostrarError("Datos incorrectos, ingrese nuevamente lo siguiente:",errores);
        return false;
      }
      else
      {
        return true;
      }
    }
</script>
<!--  -->
<fieldset>
    <legend>Modificar Cliente</legend>
    
    <div id="divErrores" style="width: 60%;"></div>
    
<div class="row-fluid">
    <div class="span1"></div>
    <div class="span5">
        <label>
            <div>
                Nombre(s) <small class="text-error req">*</small>
            </div></label>
        <input type="text" placeholder="" class="input-xlarge" id="txtNombreCliente" name="txtNombreCliente">

        <label>
            <div>
                Apellido(s) <small class="text-error req">*</small>
            </div></label>
        <input type="text" placeholder="" class="input-xlarge" id="txtApellido" name="txtApellido">
        
        <label>
            <div>
                Dirección <small class="text-error req">*</small>
            </div></label>
        <input type="text" placeholder="" class="input-xlarge" id="txtDireccion" name="txtDireccion">
          
    </div>
    <div class="span5">
        <label>
            <div>
                Rut <small class="text-error req">*</small>
            </div></label>
        <input type="text" placeholder="" class="input-xlarge" id="txtRut" name="txtRut">
        
        <label>
            <div>
                Correo <small class="text-error req">*</small>
            </div></label>
        <input type="text" placeholder="" class="input-xlarge" id="txtCorreo" name="txtCorreo">
    </div>
    <div class="span1"></div>
</div>
</fieldset>

<div>
    &nbsp;
</div>
<div class="row-fluid">
    <div class="container theme-showcase pagination-centered">
        <p>
			<button type="button" class="btn btn-lg btn-primary" id="btnGuardar">
				Guardar
			</button>
			<button type="button" class="btn btn-lg btn-primary" id="btnVolver">
				Volver
			</button>
			<button type="button" class="btn btn-lg btn-danger" id="btnEliminar">
				Eliminar
			</button>
        </p>
    </div>
</div>

<div>
    &nbsp;
</div>
<div>
    &nbsp;
</div>

<?php

include ("footer.php");
?>
