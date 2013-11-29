<?php

include ("cabecera.php");
include ("menu.php");

$usu_id = $_SESSION["id_usuario"];
$proyecto = array();

$idProyecto = $_GET["idProyecto"];

if ($idProyecto == NULL || $usu_id == NULL || strlen($idProyecto) < 1) {
	echo $V_ACCES_DENIED;
	exit();
}

$query = "SELECT pry.pro_id, 
				 pry.pro_nombre,
				 pry.pro_descrip,
				 pry.pro_usu_id_jefepro,
				 pry.pro_duracion,
				 DATE_FORMAT(pry.pro_fecha_ini,'%d-%m-%Y') AS pro_fecha_ini,
				 DATE_FORMAT(pry.pro_fecha_term,'%d-%m-%Y') AS pro_fecha_term,
				 DATE_FORMAT(pry.pro_fecha_garan,'%d-%m-%Y') AS pro_fecha_garan,
				 pry.tsg_clientecli_id,
				 pry.tsg_estado_proyectoest_id,
				 pry.sqi_tipo_proyectotip_id,
				 pry.pro_destacado 
		 FROM tsg_proyecto pry
		 WHERE pry.pro_id = $idProyecto AND pry.pro_activo = 1 ";

$mySqli = new mysqli($V_HOST, $V_USER, $V_PASS, $V_BBDD);
$mySqli->query("SET NAMES 'utf8'");
$mySqli->query("SET CHARACTER SET 'utf8'");
$res = $mySqli -> query($query);

if ($mySqli -> affected_rows > 0)// Si los datos son validos
{
	while ($row = $res -> fetch_assoc()) {
		$proyecto["pro_id"] = $row['pro_id'];
		$proyecto["pro_nombre"] = $row['pro_nombre'];
		$proyecto["pro_descrip"] = $row['pro_descrip'];
		$proyecto["pro_usu_id_jefepro"] = $row['pro_usu_id_jefepro'];
		$proyecto["pro_duracion"] = $row['pro_duracion'];
		$proyecto["pro_fecha_ini"] = $row["pro_fecha_ini"];
		$proyecto["pro_fecha_term"] = $row["pro_fecha_term"];
		$proyecto["pro_fecha_garan"] = $row["pro_fecha_garan"];
		$proyecto["tsg_clientecli_id"] = $row["tsg_clientecli_id"];
		$proyecto["tsg_estado_proyectoest_id"] = $row["tsg_estado_proyectoest_id"];
		$proyecto["sqi_tipo_proyectotip_id"] = $row["sqi_tipo_proyectotip_id"];
		$proyecto["pro_destacado"] = $row["pro_destacado"];
	}
	$mySqli -> close();
}

?>
<script type="text/javascript">

    var oTabla;
    
	function cargarCampos()
	{
		var id = "<?php echo $proyecto["pro_id"] ?>";
		var idJP = "<?php echo $proyecto["pro_usu_id_jefepro"] ?>";
		var idCliente = "<?php echo $proyecto["tsg_clientecli_id"] ?>";
		var idEstado = "<?php echo $proyecto["tsg_estado_proyectoest_id"] ?>";
		var idTipo = "<?php echo $proyecto["sqi_tipo_proyectotip_id"] ?>";
		
		$("#ddlJefeProyecto").selectpicker('val', idJP);
		$("#ddlCliente").selectpicker('val', idCliente);
		$("#ddlTipoProyecto").selectpicker('val', idTipo);
		$("#ddlEstadoProyecto").selectpicker('val', idEstado);
		$("#hdnIdProyecto").val(id);
	}

	var flag1 = true;
	
	function OcultaObservaciones(){
		if(flag1 == true)
        {
            $("#btnOcultaObservaciones").removeClass( "icon-chevron-down" ).addClass( "icon-chevron-up" );
            $(".filtroAvanzado").show();
            flag1 = false;
        }   
        else
        {
            $("#btnOcultaObservaciones").removeClass( "icon-chevron-up" ).addClass( "icon-chevron-down" );
            $(".filtroAvanzado").hide();
            flag1 = true;
        }
	}

	$(function() {
		
		cargarCampos();
		
		$("#btnVolver").click(function(){
			Ir("busqueda_proyecto.php");
		});
		
		oTabla = $('#tblObservaciones').dataTable({
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
			"sAjaxSource" : './BO/BuscaObservacionesProyecto.php', // fuente del json
			"fnServerData" : function(sSource, aoData, fnCallback) {// Para buscar con el boton
				$.ajax({
					"dataType" : 'json',
					"type" : "POST",
					"url" : sSource,
					"data" : {IdProyecto : $('#hdnIdProyecto').val()},
					"success" : fnCallback
				});
			}
		});
		
		$("#btnGuardar").click(function(){
			if(ValidarDatos()){
			    
			    bootbox.dialog({
                  message: "¿Seguro que desea modificar el proyecto?",
                  title: null,
                  buttons: {
                    Si: {
                      label: "Si",
                      className: "btn-success",
                      callback: function() {
                        $.post("./BO/ModificarDatosProyecto.php", $('#FormPrincipal').serialize(),
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
		
		$("#btnEliminar").click(function(){

			bootbox.dialog({
			  message: "¿Seguro que desea eliminar el proyecto?",
			  title: null,
			  buttons: {
			    Si: {
			      label: "Si",
			      className: "btn-danger",
			      callback: function() {
			        $.post("./BO/EliminarProyecto.php", {IdProyecto : $('#hdnIdProyecto').val()},
                        function(data) {
                            var obj = jQuery.parseJSON(data);
                            
                            var msj = obj.html;
                            var sub_msj = obj.errores; 
                            
                            var estado =  obj.estado;
                            if(estado == 'OK') // Exito
                            {
                                bootbox.alert(msj, function() {
                                  Ir("busqueda_proyecto.php");
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
			      className: "btn-success",
			      callback: function() {
			        
			      }
			    }
			  }
			});
		});
		
		$("#btnGuardaObservacion").click(function(){
			
		    if(ValidaObservacionArchivo())
		    {
		    	if($("#txtArchivo")[0].files[0] != null){
		    		
		    		var xhr = new XMLHttpRequest();
					xhr.upload.addEventListener('progress',function(ev){
					    console.log((ev.loaded/ev.total)+'%');
					}, false);
					xhr.onreadystatechange = function(ev){
					    if(xhr.readyState==4 && xhr.status==200)
					    {
					    	var data = ev.currentTarget.responseText;
					    	var obj = jQuery.parseJSON(data);
					    	if(obj.estado == 'OK'){
				    	       $("#hdnIdArchivo").val(obj.id);
				    	       GuardarObservacion();    
					    	}
					    	else{
					    	    MostrarError(obj.msj, null);
					    	}
					    }
					};
					xhr.open('POST', "./BO/UploadArchivo.php", true);
					var files = $("#txtArchivo")[0].files;
					var data = new FormData();
					for(var i = 0; i < files.length; i++) data.append('file'+i, files[i]);
					xhr.send(data);
		    	}
		    	else
		    	{
					GuardarObservacion();	    		
		    	}
            }
		});

	});
	
	function GuardarObservacion(){
		$.post("./BO/GuardarObservacionProyecto.php", $('#FormPrincipal').serialize(),
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
                oTabla.fnReloadAjax();
                $("#hdnIdArchivo").val("");
                $("#txtArchivo").val("");
                $("#txtObservacion").val("");
        });
	}
	
	function ValidaObservacionArchivo(){
	    
	    var errores = [];
	    
	    var obs = $("#txtObservacion").val();
	    
	    if(!ValidaTexto(obs)){
	  		errores.push(" - La observación es inválida.");
	  	}
	    
	    var archivo = $("#txtArchivo")[0].files[0];
	    
	    if(archivo != null){
	    	if(archivo.size / 1048576 > <?php echo $V_MAXIMO_MB ?> )
	    	{
				errores.push(" - Tamaño máximo excedido.");
	    	}
	    	if(!ValidaExtensiones(archivo.name)){
	    		errores.push(" - Extensión inválida.");
	    	}
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
	
	function ValidaExtensiones(file)
    {
        if (file != "") {
            var extension = file.split(".");
            var ext = extension[extension.length - 1];
            ext = ext.toLowerCase();
            var extensiones = "<?php echo $V_EXT_VALIDAS ?>";
            var resultado = extensiones.indexOf(ext);
            if (resultado > -1) {
                return true;
            }
            if (extensiones == '*') {
                return true;
            }
        }
        return false;
    }
	
	function ValidarDatos(){
	  var errores = [];
	  var nombre = $("#txtNombreProyecto").val();
	  
	  if(!ValidaTexto(nombre)){
	  	errores.push(" - El nombre es inválido.");
	  }
	  var duracion = $("#txtDuracion").val();
	  
	  if(!ValidaAlfaNumerico(duracion)){
	  	errores.push(" - La duración es inválida.");
	  }
	  
	  var descripcion = $("#txtDescripcion").val();
	  
  	  if(!ValidaAlfaNumerico(descripcion)){
	  	errores.push(" - La descripción es inválida.");
	  }
	  
	  var txtFechaInicio = $("#txtFechaInicio").val();
	  
  	  if(!ValidaAlfaNumerico(txtFechaInicio)){
	  	errores.push(" - La fecha de inicio es inválida.");
	  }
	  
	  var txtFechaTermino = $("#txtFechaTermino").val();
	  
  	  if(!ValidaAlfaNumerico(txtFechaTermino)){
	  	errores.push(" - La fecha de termino es inválida.");
	  }
	  
	  var txtFechaGarantia = $("#txtFechaGarantia").val();
	  
  	  if(!ValidaAlfaNumerico(txtFechaGarantia)){
	  	errores.push(" - La fecha de garantía es inválida.");
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
	
	function DescargarArchivo(idArchivo){
		$().redirect('./BO/DownloadArchivo.php', {'idArchivo': idArchivo});
	}

</script>
<!-- Contenido  -->
<fieldset>
	<legend>Modificar Proyecto</legend>

	<div class="row-fluid">
		<div class="span1"></div>
		<div class="span5">
			<label>
				<div>
					Nombre Proyecto <small class="text-error req">*</small>
				</div></label>
			<input type="text" placeholder="" class="input-xlarge" id="txtNombreProyecto" value="<?php echo $proyecto["pro_nombre"]; ?>" name="txtNombreProyecto">

			<label>
				<div>
					Duración <small class="text-error req">*</small>
				</div></label>
			<input type="text" placeholder="" class="input-xlarge" id="txtDuracion" value="<?php echo $proyecto["pro_duracion"]; ?>" name="txtDuracion">
			<?php
			$obj = new Utilidades($V_HOST, $V_USER, $V_PASS, $V_BBDD);
			echo $obj -> GeneraSelectJefeProyecto("ddlJefeProyecto");
			echo $obj -> GeneraSelectClientes("ddlCliente");
			?>

			<label>
				<div>
					Descripción <small class="text-error req">*</small>
				</div></label>
			<textarea rows="3" class="input-xlarge" id="txtDescripcion" name="txtDescripcion"><?php echo $proyecto["pro_descrip"]; ?></textarea>			
     
		</div>
		<div class="span5">

			<label>Fecha de Inicio</label>
			<input type="text" class="txtFecha" id="txtFechaInicio" name="txtFechaInicio" value="<?php echo $proyecto["pro_fecha_ini"]; ?>">
			<label>Fecha de Término</label>
			<input type="text" class="txtFecha" id="txtFechaTermino" name="txtFechaTermino" value="<?php echo $proyecto["pro_fecha_term"]; ?>">
			<label>Fecha de Garantía</label>
			<input type="text" class="txtFecha" id="txtFechaGarantia" name="txtFechaGarantia" value="<?php echo $proyecto["pro_fecha_garan"]; ?>">

			<?php
			echo $obj -> GeneraSelectTipoProyecto("ddlTipoProyecto");
			echo $obj -> GeneraSelectEstadoProyecto("ddlEstadoProyecto");
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
<div id="divErrores" style="width: 60%;"></div>

<fieldset>
	<legend>Observaciones</legend>
	
	<div class="row-fluid">
		<div class="span9"></div>
		<div class="span2">
			<div>Agregar Observación</div>
		</div>
		<div class="span1">
			<a class="btn btn-info" href="javascript:OcultaObservaciones();"><i id="btnOcultaObservaciones" class="icon-chevron-down"></i></a>
		</div>
	</div>
	
	<div class="row-fluid filtroAvanzado">
		<div class="span6">
			
			<label>
				<div>
					Observación <small class="text-error req">*</small>
				</div></label>
			<textarea rows="5" style="width: 90%;" id="txtObservacion" name="txtObservacion"></textarea>
			<label></label>
			<button type="button" class="btn btn-lg btn-primary" id="btnGuardaObservacion">
				Agregar Observación/Archivo
			</button>
		</div>
		<div class="span5">
			<label>Archivo</label>
			<input type="file"  id="txtArchivo" name="txtArchivo" />
			<label></label>
			<label>
				<div><small class="text-error req">(Extensiones:<?php echo $V_EXT_VALIDAS; ?>. Tamaño máximo: <?php echo $V_MAXIMO_MB; ?>MB.)</small>
				</div>
			</label>
		</div>
		<div class="span1"></div>
	</div>
	<div>
		&nbsp;
	</div>
	<div class="row-fluid">
		<div  class="span12">
			<table id="tblObservaciones" class="table table-striped table-bordered ">
				<thead>
					<tr>
						<th>Fecha</th>
						<th>Usuario</th>
						<th style="width: 50%;">Observación</th>
						<th>Nombre Archivo</th>
						<th>Acción</th>
					</tr>
				</thead>
				<tbody>

				</tbody>
			</table>
		</div>
	</div>
</fieldset>

<div>
	&nbsp;
</div>
<div>
	&nbsp;
</div>

<!-- Hiddens -->
<div style="display: none;">
	<input type="hidden" id="hdnIdProyecto" name="hdnIdProyecto" />
	<input type="hidden" id="hdnIdArchivo" name="hdnIdArchivo" />
</div>

<?php

include ("footer.php");
?>

