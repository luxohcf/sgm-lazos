<?php

include("cabecera.php");
include("menu.php");

$usu_id = $_SESSION["id_usuario"];

$perfiles = array();

$IdUsuario = $_POST["IdUsuario"];

if ($IdUsuario == NULL || $usu_id == NULL || strlen($IdUsuario) < 1) {
	echo $V_ACCES_DENIED;
	exit();
}

// Pendiente obtener los perfiles actuales y los disponibles para cargar los select

?>
<script type="text/javascript">

$(function() {
	
	$('#btn-add').click(function(){
        $('#PerAsignados option:selected').each( function() {
            $('#PerListado').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
    $('#btn-remove').click(function(){
        $('#PerListado option:selected').each( function() {
            $('#PerAsignados').append("<option value='"+$(this).val()+"'>"+$(this).text()+"</option>");
            $(this).remove();
        });
    });
    
    $("#btnVolver").click(function(){
    	Ir("modificar_usuario.php?idUsuario=<?php echo $IdUsuario; ?>");
    });
    
    $("#btnGuardar").click(function(){
    	// Pendiente
    });
    
});

</script>
<!-- asignar perfiles -->
<fieldset>
    <legend>Asignar Perfiles</legend>

<div id="divErrores" style="width: 60%;"></div>

<div class="row-fluid pagination-centered">
	<div class="span1"></div>
    <div class="span10">
		<div class="row-fluid">
			<div class="span5">
				<select name='PerAsignados' id='PerAsignados' multiple size='10' style="width: 100%;">
				<?php // Pendiente
					for($x = 0; $x <5; $x++){
						echo "<option> Perfil xxx $x </option>";
					}
				?>
				</select>
			</div>
			<div class="span2">
				<label></label>
				<div>&nbsp;</div>
				<label></label>
				<div>&nbsp;</div>
				
				<a class="btn btn-info" href='JavaScript:void(0);' id='btn-add'><i class="icon-chevron-right"></i></a>
				<label></label>
				<a class="btn btn-info" href='JavaScript:void(0);' id='btn-remove'><i class="icon-chevron-left"></i></a>
			</div>
			<div class="span5">
				<select class="input-large" name='PerListado' id='PerListado' multiple size='10' style="width: 100%;">
				<?php
				  // Pendiente
				?>
				</select>
			</div>
		</div>    	
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