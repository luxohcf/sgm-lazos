<?php

include("cabecera.php");
include("menu.php");

if(!ValidaAcceso("crear_cliente.php", $_SESSION["paginas"]))
{
    echo $V_ACCES_DENIED;
    exit();
}

?>
<script type="text/javascript">

$(function() {
    $("#btnGuardar").click(function(){
        if(ValidarDatos()){
            
            bootbox.dialog({
              message: "¿Seguro que desea registrar el cliente?",
              title: null,
              buttons: {
                Si: {
                  label: "Si",
                  className: "btn-success",
                  callback: function() {
                        $.post("./BO/CrearCliente.php", $('#FormPrincipal').serialize(),
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
    
    $("#btnLimpiar").click(function(){
        Limpiar();
    });
});

function Limpiar(){
    $("#txtCorreo").val("");
    $("#txtRut").val("");
    $("#txtDireccion").val("");
    $("#txtApellido").val("");
    $("#txtNombreCliente").val("");
    $("#txtNombreEmpresa").val("");
}

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
    <legend>Registrar Cliente</legend>
    
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
                Registrar Cliente
            </button>
            <button type="button" class="btn btn-lg btn-primary" id="btnLimpiar">
                Limpiar
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






