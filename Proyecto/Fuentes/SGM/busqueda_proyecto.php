<?php

require ("cabecera.php");
include ("menu.php");

/*if(!ValidaAcceso("proyecto.php", $_SESSION["paginas"]))
 {
 echo $V_ACCES_DENIED;
 exit();
 }*/
?>

<script type="text/javascript" >
	$(function() {

		var oTabla = $('#tblResultados').dataTable({
			bJQueryUI : true,
			sPaginationType : "full_numbers", //tipo de paginacion
			"bFilter" : false, // muestra el cuadro de busqueda
			"iDisplayLength" : 5, // cantidad de filas que muestra
			"bLengthChange" : false, // cuadro que deja cambiar la cantidad de filas
			"oLanguage" : {// mensajes y el idio,a
				"sLengthMenu" : "Mostrar _MENU_ registros",
				"sZeroRecords" : "No hay resultados",
				"sInfo" : "Resultados del _START_ al _END_ de _TOTAL_ registros",
				"sInfoEmpty" : "0 Resultados",
				"sInfoFiltered" : "(filtrado desde _MAX_ registros)",
				"sInfoPostFix" : "",
				"sSearch" : "Buscar:",
				"sUrl" : "",
				"sInfoThousands" : ",",
				"sLoadingRecords" : "Cargando...",
				"oPaginate" : {
					"sFirst" : "Primero",
					"sLast" : "Último",
					"sNext" : "Siguiente",
					"sPrevious" : "Anterior"
				}
			},
			"bProcessing" : true, //para procesar desde servidor
			"sServerMethod" : "POST",
			"sAjaxSource" : './BO/BuscaProyectos.php', // fuente del json
			"fnServerData" : function(sSource, aoData, fnCallback) {// Para buscar con el boton
				$.ajax({
					"dataType" : 'json',
					"type" : "POST",
					"url" : sSource,
					"data" : $('#FormPrincipal').serialize(),
					"success" : fnCallback
				});
			}
		});
		
		$("#btnBuscarProyecto").click(function(){
		    
		    if(ValidarFiltros())
		    {
                oTabla.fnReloadAjax(); 
		    }
		});
		
		$("#btnLimpiarProyecto").click(function(){
            // Pendiente
        });

	}); 
	
	function ValidarFiltros(){
	    // Pendiente
	    return true;
	}
	
	function ModificarProyecto(idProyecto){
	    // Pendiente
	}
	
	function NoDestacarProyecto(idProyecto){
	    // Pendiente
	}
	
	function DestacarProyecto(idProyecto){
        // Pendiente
    }
</script>

<!--  -->
<fieldset>
	<legend>
		Filtros de Búsqueda
	</legend>
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
			<label>Código Proyecto</label>
			<input type="text" placeholder="" class="input-xlarge" id="txtCodigoProyecto" name="txtCodigoProyecto">
			<label>Nombre Proyecto</label>
			<input type="text" placeholder="" class="input-xlarge" id="txtNombreProyecto" name="txtNombreProyecto">
		</div>
		<div class="span5">
<?php
    $obj = new Utilidades($V_HOST,$V_USER,$V_PASS,$V_BBDD);
    echo $obj->GeneraSelectJefeProyecto("ddlJefeProyecto");
    echo $obj->GeneraSelectClientes("ddlCliente");
 ?>
		</div>
		<div class="span1"></div>
	</div>
	<div class="row-fluid filtroAvanzado">
		<div class="span1"></div>
		<div class="span5">
			<label>Fecha de inicio desde</label>
			<input type="text" class="txtFecha" id="txtFechaInicioDesde" name="txtFechaInicioDesde">
            <label>Fecha de término desde</label>
            <input type="text" class="txtFecha" id="txtFechaTerminoDesde" name="txtFechaTerminoDesde">
            <label>Fecha de garantía desde</label>
            <input type="text" class="txtFecha" id="txtFechaGarantiaDesde" name="txtFechaGarantiaDesde">
            
<?php
    echo $obj->GeneraSelectDestacado("ddlDestacado");
    echo $obj->GeneraSelectEstadoProyecto("ddlEstadoProyecto");
 ?>
		</div>
		<div class="span5">
	        <label>Fecha de inicio hasta</label>
            <input type="text" class="txtFecha" id="txtFechaInicioHasta" name="txtFechaInicioHasta">
            <label>Fecha de término hasta</label>
            <input type="text" class="txtFecha" id="txtFechaTerminoHasta" name="txtFechaTerminoHasta">
            <label>Fecha de garantía hasta</label>
            <input type="text" class="txtFecha" id="txtFechaGarantiaHasta" name="txtFechaGarantiaHasta">
            
<?php
    echo $obj->GeneraSelectTipoProyecto("ddlTipoProyecto");
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
			<button type="button" class="btn btn-lg btn-primary" id="btnBuscarProyecto">
				Buscar
			</button>
			<button type="button" class="btn btn-lg btn-primary" id="btnLimpiarProyecto">
				Limpiar
			</button>
		</p>
	</div>
</div>

<div>
	&nbsp;
</div>
<fieldset>
	<legend>
		Resultados
	</legend>
	<div class="row-fluid">
		<div  class="span12">
			<table id="tblResultados" class="table table-striped table-bordered ">
				<thead>
					<tr>
						<th>Dest.</th>
						<th>Código</th>
						<th>Nombre Proyecto</th>
						<th>Tipo</th>
						<th>Jefe de Proyecto</th>
						<th>Estado</th>
						<th>Inicio</th>
						<th>Término</th>
						<th>Garantía</th>
						<th>Cliente</th>
						<th>Acción</th>
					</tr>
				</thead>
				<tbody>

				</tbody>
			</table>
		</div>
	</div>
	<fieldset>

		<div>
			&nbsp;
		</div>
		<div>
			&nbsp;
		</div>

		<?php

        include ("footer.php");
		?>

