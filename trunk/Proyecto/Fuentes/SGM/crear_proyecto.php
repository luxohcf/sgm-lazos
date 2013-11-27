<?php

include("cabecera.php");
include("menu.php");

if(!ValidaAcceso("busqueda_proyecto.php", $_SESSION["paginas"]))
{
    echo $V_ACCES_DENIED;
    exit();
}

?>
<script type="text/javascript">

$(function() {
    
    $("#btnGuardar").click(function(){
        if(ValidarDatos()){
            $.post("./BO/CrearProyecto.php", $('#FormPrincipal').serialize(),
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
</script>
<!--  -->
<fieldset>
    <legend>Crear Proyecto</legend>
    
    <div id="divErrores" style="width: 60%;"></div>
    
<div class="row-fluid">
    <div class="span1"></div>
    <div class="span5">
        <label>
            <div>
                Nombre Proyecto <small class="text-error req">*</small>
            </div></label>
        <input type="text" placeholder="" class="input-xlarge" id="txtNombreProyecto" name="txtNombreProyecto">

        <label>
            <div>
                Duración <small class="text-error req">*</small>
            </div></label>
        <input type="text" placeholder="" class="input-xlarge" id="txtDuracion" name="txtDuracion">
        <?php
        $obj = new Utilidades($V_HOST, $V_USER, $V_PASS, $V_BBDD);
        echo $obj -> GeneraSelectJefeProyecto("ddlJefeProyecto", false, true, 5);
        echo $obj -> GeneraSelectClientes("ddlCliente", false, true, 5);
        ?>

        <label>
            <div>
                Descripción <small class="text-error req">*</small>
            </div></label>
        <textarea rows="3" class="input-xlarge" id="txtDescripcion" name="txtDescripcion"></textarea>
          
    </div>
    <div class="span5">
        <label><div>Fecha de inicio <small class="text-error req">*</small>
            </div></label>
        <input type="text" class="txtFecha" id="txtFechaInicio" name="txtFechaInicio" >
        <label><div>Fecha de término <small class="text-error req">*</small>
            </div></label>
        <input type="text" class="txtFecha" id="txtFechaTermino" name="txtFechaTermino" >
        <label><div>Fecha de garantía <small class="text-error req">*</small>
            </div></label>
        <input type="text" class="txtFecha" id="txtFechaGarantia" name="txtFechaGarantia" >

        <?php
        echo $obj -> GeneraSelectTipoProyecto("ddlTipoProyecto", false, true, 5);
        echo $obj -> GeneraSelectEstadoProyecto("ddlEstadoProyecto", false, true, 5);
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
                Crear Proyecto
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


