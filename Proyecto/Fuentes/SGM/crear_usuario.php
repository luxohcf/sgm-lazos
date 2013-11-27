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
    });
});

function Limpiar(){
    // Pendiente
}

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
</script>
<!--  -->
<fieldset>
    <legend>Crear Usuario</legend>
    
    <div id="divErrores" style="width: 60%;"></div>
    
<div class="row-fluid">
    <div class="span1"></div>
    <div class="span5">
        <label>
            <div>
                Nombre(s) Usuario <small class="text-error req">*</small>
            </div></label>
        <input type="text" placeholder="" class="input-xlarge" id="txtNombreUsuario" name="txtNombreUsuario">

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
                Crear Usuario
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






