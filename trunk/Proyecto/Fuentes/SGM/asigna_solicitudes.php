<?php

include ("cabecera.php");
include ("menu.php");

$usu_id = $_SESSION["id_usuario"];
$Solicitud = array();

$idSolicitud = $_GET["idSolicitud"];
/*
if ($idProyecto == NULL || $usu_id == NULL || strlen($idProyecto) < 1) {
    echo $V_ACCES_DENIED;
    exit();
}*/

$query = "SELECT DISTINCT 
                tick.tic_id,
                tick.tic_nombre,
                tick.tsg_estado_ticketest_id,
                tick.tsg_proyectopro_id,
                tick.tsg_categoriacat_id
                tick.tsg_prioridadpri_id,
                tick.tsg_usuariousu_id
          FROM tsg_ticket tick
          WHERE 
                tick.tic_id = $idSolicitud ";

$mySqli = new mysqli($V_HOST, $V_USER, $V_PASS, $V_BBDD);
$mySqli->query("SET NAMES 'utf8'");
$mySqli->query("SET CHARACTER SET 'utf8'");
$res = $mySqli -> query($query);

if ($mySqli -> affected_rows > 0)
{
    while ($row = $res -> fetch_assoc()) {
        $Solicitud["tic_id"] = $row['tic_id'];
        $Solicitud["tic_nombre"] = $row['tic_nombre'];
        $Solicitud["tsg_estado_ticketest_id"] = $row['tsg_estado_ticketest_id'];
        $Solicitud["tsg_proyectopro_id"] = $row['tsg_proyectopro_id'];
        $Solicitud["tsg_categoriacat_id"] = $row['tsg_categoriacat_id'];
        $Solicitud["tsg_prioridadpri_id"] = $row["tsg_prioridadpri_id"];
        $Solicitud["tsg_usuariousu_id"] = $row["tsg_usuariousu_id"];
    }
    $mySqli -> close();
}

?>
<script type="text/javascript">

    function cargarCampos()
    {
        var id = "<?php echo $Solicitud["tic_id"] ?>";
        var idEstado = "<?php echo $Solicitud["tsg_estado_ticketest_id"] ?>";
        var idProyecto = "<?php echo $Solicitud["tsg_proyectopro_id"] ?>";
        var idCategoria = "<?php echo $Solicitud["tsg_categoriacat_id"] ?>";
        var idPrioridad = "<?php echo $Solicitud["tsg_prioridadpri_id"] ?>";
        var idUsuario = "<?php echo $Solicitud["tsg_usuariousu_id"] ?>";
        
        $("#ddlEstado").selectpicker('val', idEstado);
        $("#ddlProyecto").selectpicker('val', idProyecto);
        $("#ddlCategoria").selectpicker('val', idCategoria);
        $("#ddlPrioridad").selectpicker('val', idPrioridad);
        $("#ddlUsuario").selectpicker('val', idUsuario);
        $("#hdnIdSolicitud").val(id);
        
        $(".filtroAvanzado").hide();
        $(".filtroAvanzadoAgregaObs").hide();
        $(".filtroAvanzadoH").hide();
    }

    var flag1 = true;
    var flag2 = true;
    var flag3 = true;
    
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
    
    function OcultaAgregaObs(){
       if(flag2 == true)
        {
            $("#btnOcultaAgregaObs").removeClass( "icon-chevron-down" ).addClass( "icon-chevron-up" );
            $(".filtroAvanzadoAgregaObs").show();
            flag2 = false;
        }   
        else
        {
            $("#btnOcultaAgregaObs").removeClass( "icon-chevron-up" ).addClass( "icon-chevron-down" );
            $(".filtroAvanzadoAgregaObs").hide();
            flag2 = true;
        } 
    }
    
    function OcultaHistorico(){
        if(flag3 == true)
        {
            $("#btnOcultaHistorico").removeClass( "icon-chevron-down" ).addClass( "icon-chevron-up" );
            $(".filtroAvanzadoH").show();
            flag3 = false;
        }   
        else
        {
            $("#btnOcultaHistorico").removeClass( "icon-chevron-up" ).addClass( "icon-chevron-down" );
            $(".filtroAvanzadoH").hide();
            flag3 = true;
        }
    }

    $(function() {
        
        cargarCampos();
        
        $("#btnVolver").click(function(){
            Ir("busqueda_solicitudes.php");
        });
        
        var oTabla = $('#tblObservaciones').dataTable({
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
            "sAjaxSource" : './BO/BuscaObservacionesSolicitud.php', // fuente del json
            "fnServerData" : function(sSource, aoData, fnCallback) {// Para buscar con el boton
                $.ajax({
                    "dataType" : 'json',
                    "type" : "POST",
                    "url" : sSource,
                    "data" : {IdSolicitud : $('#hdnIdSolicitud').val()},
                    "success" : fnCallback
                });
            }
        });
        
        var oTablaH = $('#tblHistorico').dataTable({
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
            "sAjaxSource" : './BO/BuscaHistoricoSolicitud.php', // fuente del json
            "fnServerData" : function(sSource, aoData, fnCallback) {// Para buscar con el boton
                $.ajax({
                    "dataType" : 'json',
                    "type" : "POST",
                    "url" : sSource,
                    "data" : {IdSolicitud : $('#hdnIdSolicitud').val()},
                    "success" : fnCallback
                });
            }
        });
        
        $("#btnGuardar").click(function(){
            if(ValidarDatos()){
                $.post("./BO/ModificarDatosSolicitud.php", $('#FormPrincipal').serialize(),
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
        
        $("#btnGuardaObservacion").click(function(){
            
            // Pendiente
            // Validar datos
            // guardar
            oTabla.fnReloadAjax();
        });

    });
    
    function ValidarDatos(){
      var errores = [];
      
      // Pendiente

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
    
    function DescargarArchivo(idArchivo, Url){
        // Pendiente
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
                    Código <small class="text-error req">*</small>
                </div></label>
            <input type="text" placeholder="" class="input-xlarge" id="txtCodigo" name="txtCodigo" >
            <label>
                <div>
                    Nombre <small class="text-error req">*</small>
                </div></label>
            <input type="text" placeholder="" class="input-xlarge" id="txtNombre" name="txtNombre" >
    
            <?php
            $obj = new Utilidades($V_HOST, $V_USER, $V_PASS, $V_BBDD);
            echo $obj->GeneraSelectProyectos("ddlProyecto", false, true, 5);
            echo $obj->GeneraSelectUsuarios("ddlUsuario", false, true, 5);
            ?>
    
            <label>
                <div>
                    Descripción <small class="text-error req">*</small>
                </div></label>
            <textarea rows="3" class="input-xlarge" id="txtDescripcion" name="txtDescripcion"></textarea>
              
        </div>
        <div class="span5">
    
            <?php
            echo $obj->GeneraSelectEstadoSolicitud("ddlEstado", false, true, 5);
            echo $obj->GeneraSelectPrioridad("ddlPrioridad", false, true, 5);
            echo $obj->GeneraSelectCategoriaSolicitud("ddlCategoria", false, true, 5);
            ?>
    
            <label>Correo en copia</label>
            <textarea rows="3" class="input-xlarge" id="txtCorreoCopia" name="txtCorreoCopia" ></textarea>
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
<div id="divErrores" style="width: 60%;"></div>

<fieldset>
    <legend>Observaciones</legend>
    
    <div class="row-fluid">
        <div class="span6"></div>
        <div class="span2">
            <div>Ver Observaciones</div>
        </div>
        <div class="span1">
            <a class="btn btn-info" href="javascript:OcultaObservaciones();"><i id="btnOcultaObservaciones" class="icon-chevron-down"></i></a>
        </div>
        <div class="span2">
            <div>Agregar Observación</div>
        </div>
        <div class="span1">
            <a class="btn btn-info" href="javascript:OcultaAgregaObs();"><i id="btnOcultaAgregaObs" class="icon-chevron-down"></i></a>
        </div>
    </div>
    
    <div class="row-fluid filtroAvanzadoAgregaObs">
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
    <div class="row-fluid filtroAvanzado">
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

<fieldset>
    <legend>Histórico</legend>
    
    <div class="row-fluid" >
        <div class="span9"></div>
        <div class="span2">
            <div>Ver Histórico</div>
        </div>
        <div class="span1">
            <a class="btn btn-info" href="javascript:OcultaHistorico();"><i id="btnOcultaHistorico" class="icon-chevron-down"></i></a>
        </div>
    </div>

    <div class="row-fluid filtroAvanzadoH">
        <div  class="span12">
            <table id="tblHistorico" class="table table-striped table-bordered ">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Nombre</th>
                        <th style="width: 40%;">Descripción</th>
                        <th>Estado</th>
                        <th>Usuario</th>
                        <th>Prioridad</th>
                        <th>Categoría</th>
                        <th>Proyecto</th>
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

<!-- Hiddens -->
<div style="display: none;">
    <input type="hidden" id="hdnIdSolicitud" name="hdnIdSolicitud" />
</div>

<?php

include ("footer.php");
?>

