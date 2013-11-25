<?php

require("cabecera.php");
include("menu.php");

if(!ValidaAcceso("proyecto.php", $_SESSION["paginas"]))
{
    echo $V_ACCES_DENIED;
    exit();
}

?>

<script type="text/javascript" >
$(function(){
		
	var oTabla = $('#tblResultados').dataTable({   
         bJQueryUI: true,
         sPaginationType: "full_numbers", //tipo de paginacion
         "bFilter": false, // muestra el cuadro de busqueda
         "iDisplayLength": 4, // cantidad de filas que muestra
         "bLengthChange": false, // cuadro que deja cambiar la cantidad de filas
         "oLanguage": { // mensajes y el idio,a
	            "sLengthMenu": "Mostrar _MENU_ registros",
	            "sZeroRecords": "No hay resultados",
	            "sInfo": "Resultados del _START_ al _END_ de _TOTAL_ registros",
	            "sInfoEmpty": "0 Resultados",
	            "sInfoFiltered": "(filtrado desde _MAX_ registros)",
	            "sInfoPostFix":    "",
			    "sSearch":         "Buscar:",
			    "sUrl":            "",
			    "sInfoThousands":  ",",
			    "sLoadingRecords": "Cargando...",
			    "oPaginate": {
			        "sFirst":    "Primero",
			        "sLast":     "Último",
			        "sNext":     "Siguiente",
			        "sPrevious": "Anterior"
			    }
	        },
	     "bProcessing": true, //para procesar desde servidor
	     "sServerMethod": "POST",
	     "sAjaxSource": './BO/BuscaProyectos.php', // fuente del json
	     "fnServerData": function ( sSource, aoData, fnCallback ) { // Para buscar con el boton
            $.ajax( {
                "dataType": 'json', 
                "type": "POST", 
                "url": sSource, 
                "data": $('#FormPrincipal').serialize(), 
                "success": fnCallback
            	} );
           }
	  });

});
</script>

<!--  -->
<fieldset>
<legend>Filtros de Búsqueda</legend>
	<div class="row-fluid">
		<div class="span9"></div>
		<div class="span2">
			<div id="txtbtnFiltros">Búsqueda Avanzada</div>
		</div>
		<div class="span1">
			<a class="btn btn-success" href="javascript:OcultaFiltros();"><i id="btnFiltros" class="icon-chevron-down"></i></a>
		</div>	
	</div>
	<div class="row-fluid">
		<div class="span1"></div>
	    <div class="span5">
            <label>Código Proyecto</label>
            <input type="text" placeholder="Smith" class="input-xlarge">
            <label>Nombre Proyecto</label>
            <input type="text" placeholder="K" class="input-xlarge">
            <label>First Name</label>
            <input type="text" placeholder="John" class="input-xlarge">
	    </div>
	    <div class="span5">
	        <label>Cliente</label>
	        <select name="Gender" id="DropdownGender" class="input-xlarge">
	            <option value="">Male</option>
	            <option value="">Female</option>
	        </select>
	        <label>Cliente</label>
	        <select name="Gender" id="DropdownGender" class="input-xlarge">
	            <option value="">Male</option>
	            <option value="">Female</option>
	        </select>
	    </div>
	    <div class="span1"></div>
	</div>
	<div class="row-fluid filtroAvanzado">
		<div class="span1"></div>
	    <div class="span5">
            <label>Código Proyecto</label>
            <input type="text" placeholder="Smith" class="input-xlarge">
            <label>Nombre Proyecto</label>
            <input type="text" placeholder="K" class="input-xlarge">
            <label>First Name</label>
            <input type="text" placeholder="John" class="input-xlarge">
	    </div>
	    <div class="span5">
	        <label>Cliente</label>
	        <select name="Gender" id="DropdownGender" class="input-xlarge">
	            <option value="">Male</option>
	            <option value="">Female</option>
	        </select>
	        <label>Cliente</label>
	        <select name="Gender" id="DropdownGender" class="input-xlarge">
	            <option value="">Male</option>
	            <option value="">Female</option>
	        </select>
	    </div>
	    <div class="span1"></div>
	</div>
</fieldset>

<div>&nbsp;</div>
<div class="row-fluid">
    <div class="container theme-showcase pagination-centered">
        <p>
            <button type="button" class="btn btn-lg btn-primary">Buscar</button>
            <button type="button" class="btn btn-lg btn-primary">Limpiar</button>
        </p>
    </div>
</div>

<div>&nbsp;</div>
<fieldset>
<legend>Resultados</legend>
	<div class="row-fluid">
		<div  class="span12">
			<table id="tblResultados" class="table table-striped table-bordered    ">
	            <thead>
	                <tr>
	                    <th>Ver</th>
	                    <th>Estado</th>
	                    <th>N° Columna</th>
	                    <th>Año</th>
	                    <th>Nombre</th>
	                    <th>Etapa</th>
	                </tr>
	            </thead>
	            <tbody>
	             
	            </tbody>
	        </table>
		</div>
	</div>
<fieldset>

<div>&nbsp;</div>
<div>&nbsp;</div>


<?php

include("footer.php");

?>

