<?php

include("cabecera.php");
include("menu.php");

if(!ValidaAcceso("crear_usuario.php", $_SESSION["paginas"]))
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
              message: "¿Seguro que desea registrar el usuario?",
              title: null,
              buttons: {
                Si: {
                  label: "Si",
                  className: "btn-success",
                  callback: function() {
                        $.post("./BO/CrearUsuario.php", $('#FormPrincipal').serialize(),
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
    $("#txtNombreUsuario").val("");
    $("#txtApellido").val("");
    $("#txtDireccion").val("");
    $("#txtTelefono").val("");
    $("#txtNombreRut").val("");
    $("#txtPass").val("");
    $("#txtCorreo").val("");
}

function ValidarDatos(){
      var errores = [];
      
      var txtNombreUsuario = $("#txtNombreUsuario").val();
      
      if(!ValidaTexto(txtNombreUsuario,255)){
        errores.push(" - El nombre es inválido.");
      }
      
      var txtApellido = $("#txtApellido").val();
      
      if(!ValidaTexto(txtApellido,255)){
        errores.push(" - El apellido es inválido.");
      }
      
      var txtDireccion = $("#txtDireccion").val();
      
      if(!ValidaTexto(txtDireccion,255)){
        errores.push(" - La dirección es inválida.");
      }
      
      var txtTelefono = $("#txtTelefono").val();
      
      if(!ValidaNumerico(txtTelefono)){
        errores.push(" - El telefóno es inválido.");
      }
      
      var txtNombreRut = $("#txtNombreRut").val();
      
      if(!ValidaRut(txtNombreRut)){
        errores.push(" - El rut es inválido.");
      }
      
      var txtPass = $("#txtPass").val();
      
      if(!validaFormatoPass(txtPass)){
        errores.push(" - La contraseña es inválida.");
      }
      
      var txtCorreo = $("#txtCorreo").val();
      
      if(!ValidaCorreo(txtCorreo)){
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
</script>
<!--  -->
<fieldset>
    <legend>Registrar Usuario</legend>
    
    <div id="divErrores" style="width: 60%;"></div>
    
<div class="row-fluid">
    <div class="span1"></div>
    <div class="span5">
        <label>
            <div>
                Nombre(s) Usuario <small class="text-error req">*</small>
            </div></label>
        <input type="text" placeholder="xx" class="input-xlarge" id="txtNombreUsuario" name="txtNombreUsuario">

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
        
        <label>
            <div>
                Telefóno <small class="text-error req">*</small>
            </div></label>
        <input type="text" placeholder="" class="input-xlarge" id="txtTelefono" name="txtTelefono">
          
    </div>
    <div class="span5">
        <label>
            <div>
                Rut <small class="text-error req">*</small>
            </div></label>
        <input type="text" placeholder="" class="input-xlarge" id="txtNombreRut" name="txtNombreRut">

        <label>
            <div>
                Contraseña <small class="text-error req">*</small>
            </div></label>
        <input type="password" placeholder="" class="input-xlarge" id="txtPass" name="txtPass">
        
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
                Registrar Usuario
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






