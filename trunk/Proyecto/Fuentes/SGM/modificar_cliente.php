<?php
include("cabecera.php");
include("menu.php");

$usu_id = $_SESSION["id_usuario"];
$cliente = array();

$idCliente = $_POST["idCliente"];

if ($idCliente == NULL || $usu_id == NULL || strlen($idCliente) < 1) {
	echo $V_ACCES_DENIED;
	exit();
}

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

if ($mySqli -> affected_rows > 0)
{
	while ($row = $res -> fetch_assoc()) {
		$cliente["cli_id"] = $row['cli_id'];
		$cliente["cli_nombre"] = $row['cli_nombre'];
		$cliente["cli_apellido"] = $row['cli_apellido'];
		$cliente["cli_correo"] = $row['cli_correo'];
		$cliente["cli_empresa"] = $row["cli_empresa"];
		$cliente["cli_rut"] = $row["cli_rut"];
		$cliente["cli_direccion"] = $row["cli_direccion"];
		}
	$mySqli -> close();
}

?>
<script type="text/javascript">

function cargarCampos()
{
    var cli_id = "<?php echo $cliente["cli_id"] ?>";
    var cli_nombre = "<?php echo $cliente["cli_nombre"] ?>";
    var cli_apellido = "<?php echo $cliente["cli_apellido"] ?>";
    var cli_correo = "<?php echo $cliente["cli_correo"] ?>";
    var cli_empresa = "<?php echo $cliente["cli_empresa"] ?>";
    var cli_rut = "<?php echo $cliente["cli_rut"] ?>";
    var cli_direccion = "<?php echo $cliente["cli_direccion"] ?>";
    
    $("#txtNombreEmpresa").val(cli_empresa);
    $("#txtNombreCliente").val(cli_nombre);
    $("#txtApellido").val(cli_apellido);
    $("#txtDireccion").val(cli_direccion);
    $("#txtRut").val(cli_rut);
    $("#txtCorreo").val(cli_correo);
    $("#hdnIdCliente").val(cli_id);
}

$(function() {
    cargarCampos();
    
    $("#btnVolver").click(function(){
        Ir("busqueda_cliente.php");
    });
    
    $("#btnEliminar").click(function(){
        bootbox.dialog({
          message: "¿Seguro que desea eliminar el cliente?",
          title: null,
          buttons: {
            Si: {
              label: "Si",
              className: "btn-success",
              callback: function() {
                    $.post("./BO/EliminarCliente.php", {IdCliente : $('#hdnIdCliente').val()},
                        function(data) {
                            var obj = jQuery.parseJSON(data);
                            
                            var msj = obj.html;
                            var sub_msj = obj.errores; 
                            
                            var estado =  obj.estado;
                            if(estado == 'OK') // Exito
                            {
                                bootbox.alert(msj, function() {
                                  Ir("busqueda_cliente.php");
                                });
                            }
                            else // Error
                            {
                                MostrarError(msj, sub_msj);
                            }
                    });
                }
            },
            No: {
              label: "No",
              className: "btn-info",
              callback: function() {
                
              }
            }
          }
        });
    });
    
    $("#btnGuardar").click(function(){
        if(ValidarDatos()){
            
            bootbox.dialog({
                  message: "¿Seguro que desea modificar el cliente?",
                  title: null,
                  buttons: {
                    Si: {
                      label: "Si",
                      className: "btn-success",
                      callback: function() {
                            $.post("./BO/ModificarDatosCliente.php", $('#FormPrincipal').serialize(),
                                function(data) {
                                    var obj = jQuery.parseJSON(data);
                                    
                                    var msj = obj.html;
                                    var sub_msj = obj.errores; 
                                    
                                    var estado =  obj.estado;
                                    if(estado == 'OK') // Exito
                                    {
                                        MostrarExito(msj, sub_msj);
                                    }
                                    else // Error
                                    {
                                        MostrarError(msj, sub_msj);
                                    }
                            });
                        }
                    },
                    No: {
                      label: "No",
                      className: "btn-info",
                      callback: function() {
                        
                      }
                    }
                  }
                });
        }
    });
});

function ValidarDatos(){
      var errores = [];
  
	  var txtNombreEmpresa = $("#txtNombreEmpresa").val();
	  
	  if(!ValidaTexto(txtNombreEmpresa,255)){
	  	errores.push(" - El Nombre empresa es inválido.");
	  }
	  
	   var txtNombreCliente = $("#txtNombreCliente").val();
	  
	  if(!ValidaTexto(txtNombreCliente,255)){
	  	errores.push(" - El Nombre es inválido.");
	  }
	  
	  var txtApellido = $("#txtApellido").val();
	  
	  if(!ValidaTexto(txtApellido,255)){
	  	errores.push(" - El Apellido es inválido.");
	  }
	  
	  var txtDireccion = $("#txtDireccion").val();
      
      if(!ValidaTexto(txtDireccion,255)){
        errores.push(" - La Dirección es inválida.");
      }
	  
	  var txtRut = $("#txtRut").val();

      if(!ValidaRut(txtRut)){
	    errores.push(" - El Rut es inválido.");
	    }
	  
	  var correo = $("#txtCorreo").val();
	  
  	  if(!ValidaCorreo(correo)){
	  	errores.push(" - El Correo es inválido.");
	  }
	  
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
                Nombre Empresa <small class="text-error req">*</small>
            </div></label>
        <input type="text" placeholder="" class="input-xlarge" id="txtNombreEmpresa" name="txtNombreEmpresa">
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
<div style="display: none;">
    <input type="hidden" id="hdnIdCliente" name="hdnIdCliente" />
</div>

<?php

include ("footer.php");
?>
