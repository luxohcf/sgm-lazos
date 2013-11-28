<?php

require ("cabecera.php");
include ("menu.php");

if (!ValidaAcceso("ver_estadisticas.php", $_SESSION["paginas"])) {
	echo $V_ACCES_DENIED;
	exit();
}
?>

<script type="text/javascript" >
	$(function() {
		
		$("#btnBuscar").click(function() {

			if (ValidarFiltros()) {
				
			}
		});
		

		$("#btnLimpiar").click(function() {
			
		});

	});

	function ValidarFiltros() {
		var errores = [];

		if (errores.length > 0) {
			MostrarError("Datos incorrectos, ingrese nuevamente lo siguiente:", errores);
			return false;
		} else {
			return true;
		}
	}

</script>

<!--  -->
<fieldset>
	<legend>
		Filtros de Búsqueda
	</legend>

	<div id="divErrores" style="width: 60%;"></div>

	<div class="row-fluid">
		<div class="span9"></div>
		<div class="span2">
			<div id="txtbtnFiltros">
				Búsqueda Avanzada
			</div>
		</div>
		<div class="span1">
			<a class="btn btn-info" href="javascript:OcultaFiltros();"><i id="btnFiltros" class="icon-chevron-down"></i></a>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span1"></div>
		<div class="span5">
			<?php
			$obj = new Utilidades($V_HOST, $V_USER, $V_PASS, $V_BBDD);
			echo $obj->GeneraSelectProyectos("ddlProyecto", true, true, 5);
			echo $obj->GeneraSelectTipoProyecto("ddlProyecto", true, true, 5);
			
			?>
		</div>
		<div class="span5">
			<?php
			echo $obj->GeneraSelectCategoriaSolicitud("ddlCategoria", true, true, 5);
			echo $obj->GeneraSelectEstadoSolicitud("ddlEstadoSolicitud", true, true, 5);
			?>
		</div>
		<div class="span1"></div>
	</div>
	<div class="row-fluid filtroAvanzado">
		<div class="span1"></div>
		<div class="span5">
			<label>Fecha desde</label>
			<input type="text" class="txtFecha" id="txtFechaInicioDesde" name="txtFechaInicioDesde">
			<label>Fecha hasta</label>
			<input type="text" class="txtFecha" id="txtFechaInicioHasta" name="txtFechaInicioHasta">
		</div>
		<div class="span5">
			<?php
			echo $obj->GeneraSelectClientes("ddlCliente", true, true, 5);
			?>
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
			<button type="button" class="btn btn-lg btn-primary" id="btnBuscar">
				Buscar
			</button>
			<button type="button" class="btn btn-lg btn-primary" id="btnLimpiar">
				Limpiar
			</button>
		</p>
	</div>
</div>

<fieldset>
	<legend>
		Resultados
	</legend>
	<div class="row-fluid">
		<div  class="span12">
			<!-- Informe -->
		</div>
	</div>
	<fieldset>

<div>
	&nbsp;
</div>
<div>
	&nbsp;
</div>

<!-- Hiddens -->
<div style="display: none;">
	
</div>

<?php

include ("footer.php");
?>

