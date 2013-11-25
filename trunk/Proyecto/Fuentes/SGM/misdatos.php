<?php
@session_start();
require("cabecera.php");
include("menu.php");

$usuario = array();

$usu_id = $_SESSION["id_usuario"];

$query = "SELECT `usu_nombre`, 
				 `usu_apellido`, `usu_telefono`, 
				 `usu_direccion`, `usu_correo`, `usu_rut`
		  FROM `tsg_usuario` 
		  WHERE `usu_id` = '$usu_id' AND `usu_activo` = 1";

//$_SESSION["mxkamk"] = $query;

$mySqli = new mysqli($V_HOST, $V_USER, $V_PASS, $V_BBDD);
$res = $mySqli->query($query);
		

if($mySqli->affected_rows > 0) // Si los datos son validos
{
	while($row = $res->fetch_assoc())
	{
		$usuario["usu_nombre"] = $row['usu_nombre'];
		$usuario["usu_apellido"] = $row['usu_apellido'];
		$usuario["usu_telefono"] = $row['usu_telefono'];
		$usuario["usu_direccion"] = $row['usu_direccion'];
		$usuario["usu_correo"] = $row['usu_correo'];
		$usuario["rut"] = $row["usu_rut"];
	}
	$mySqli->close();
}




?>

<script type="text/javascript">

	function ValidarDatos()
	{
	  var errores = [];
	  var nombre = $("#txtNombre").val();
	  
	  if(!ValidaTexto(nombre)){
	  	errores.push(" - El nombre es inválido.");
	  }
	  var apellido = $("#txtApellido").val();
	  
	  if(!ValidaTexto(apellido)){
	  	errores.push(" - El apellido es inválido.");
	  }
	  
	  var telefono = $("#txtTelefono").val();
	  
	  if(!ValidaNumerico(telefono)){
	  	errores.push(" - El número es inválido.");
	  }
	  
	  var direccion = $("#txtDireccion").val();
	  
	  if(direccion != ""){ // Opcional
	  	if(!ValidaTexto(direccion)){
		  	errores.push(" - La dirección es inválida.");
		  }
	  }
	  
	  var correo = $("#txtCorreo").val();
	  
	  if(!ValidaCorreo(correo)){
	  	errores.push(" - El correo es inválido.");
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

	$(function() {

		$(".alert").alert();

		$("#btnGuardar").click(function() {
			
			if(ValidarDatos())
			{
				$.post("./BO/ModificarDatosUsuario.php", $('#FormPrincipal').serialize(),
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
		});

		$("#btnCambiaPass").click(function() {

			var passN = $("#txtPassNueva").val();
			var passV = $("#txtPassConfirmar").val();
			
			// Validaciones de datos
			if (!validaFormatoPass(passN) || !validaFormatoPass(passV) || (passN != passV)) {
				// mostrar error
				MostrarError("Contraseña invalida, o no coinciden", null);
				$("#txtPassNueva").val("");
				$("#txtPassConfirmar").val("");
			} 
			else // Enviar post al servidor 
			{
				$.post("./BO/CambiarPass.php", $('#FormPrincipal').serialize(),
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
		});

	});

</script>

<!-- Contenido -->
<fieldset>
	<legend>
		Mi Información Personal
	</legend>

	<div id="divErrores" style="width: 60%;"></div>

	<div class="row-fluid">
		<div class="span1"></div>
		<div class="span5">
			<label>Rut</label>
			<input type="text" placeholder="" class="input-xlarge disabled" value="<?php echo $usuario["rut"]; ?>" name="rut" disabled >
			<label>Nombre</label>
			<input type="text" placeholder="" class="input-xlarge" id="txtNombre" value="<?php echo $usuario["usu_nombre"]; ?>" name="txtNombre">
			<label>Apellido</label>
			<input type="text" placeholder="" class="input-xlarge" id="txtApellido" value="<?php echo $usuario["usu_apellido"]; ?>" name="txtApellido" >
			<label>Nueva Contraseña</label>
			<input type="password" placeholder="" class="input-xlarge" id="txtPassNueva" name="txtPassNueva">
		</div>
		<div class="span5">
			<label>Teléfono</label>
			<input type="text" placeholder="" class="input-xlarge" id="txtTelefono" value="<?php echo $usuario["usu_telefono"]; ?>" name="txtTelefono">
			<label>Dirección</label>
			<input type="text" placeholder="" class="input-xlarge" id="txtDireccion" value="<?php echo $usuario["usu_direccion"]; ?>" name="txtDireccion" >
			<label>Correo</label>
			<input type="text" placeholder="" class="input-xlarge" id="txtCorreo" value="<?php echo $usuario["usu_correo"]; ?>" name="txtCorreo">
			<label>Confirmar Contraseña</label>
			<input type="password" placeholder="" class="input-xlarge" id="txtPassConfirmar" name="txtPassConfirmar">
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
			<button type="button" class="btn btn-lg btn-primary" id="btnCambiaPass">
				Cambiar Contraseña
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