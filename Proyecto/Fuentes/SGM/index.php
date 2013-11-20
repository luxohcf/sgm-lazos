<?php
@session_start();
// Para direccionar si ya se ha iniciado sesión
if(isset($_SESSION['usuario']) == TRUE)
{
    header("Location: main.php");
    exit();
}
?>

<!DOCTYPE html>   
<html lang="en">   
<head>   
    <meta charset="utf-8">   
    <title>Proyecto SGM</title>     
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>  
    <script src="js/jquery.js"></script>
    
    <script type="text/javascript">
    $(function() {
        
        $('#divError').hide();
        
        // Inicio de sesión
        $('#formIniciosSesion').submit(function(event){
            event.preventDefault();
            var vname = $('#txtUser').val();
            var vpass = $('#txtPass').val();
            if(validaInicioSesion(vname, vpass))
            {
                $.post("IniSes/login.php", { name: vname, pass: vpass },
                   function(data) {
                    
                    var obj = jQuery.parseJSON(data);
                    
                    if(obj.error == true)
                    {
                        Limpiar();
                        $('#divError').html( obj.html );
                        $('#divError').show();
                    }
                    else
                    {
                        window.location.href = "proyecto.php";
                    }
                });
            }
            else
            {
                Limpiar();
                $('#divError').show();
            }
         });
         
         function Limpiar(){
            $('#txtUser').val("");
            $('#txtPass').val("");
         }
         
         function validaInicioSesion(nombre, pass){
            
            if(!/^[0-9kK\-]{9,10}$/.test(nombre)){
                return false;
            }

            if(!/^[a-zA-Z0-9\.]{4,20}$/.test(pass)){
                return false;
            }
            return true;
         }
         
         $(".texto").bind('keypress', function(event){
            var regex = new RegExp("^([a-zA-Z0-9\.\-]+)$");
            var key = String.fromCharCode(!event.charCode ? event.wich : event.charCode);
            if(!regex.test(key)){
                event.preventDefault();
                return false;
            }
        });

     });
    </script>
</head>  
<body>  
    
<div class="navbar navbar-default" >
  <div class="navbar-inner btn-primary">
    <a class="brand" href="#">Proyecto SGM</a>
  </div>
</div>
<center>
    <section>
        <div class="container" style="padding-top: 65px;">
            <form id="formIniciosSesion"> 
                <h2 class="form-signin-heading">Inicio de sesión</h2>
                <br>
                <div class="alert alert-error" style="width: 210px;" id="divError" >
                  Usuario o Contraseña Invalidos!
                </div>
                <input id="txtUser" type="text" class="form-control texto" placeholder="Usuario" autofocus> 
                <br>
                <input id="txtPass" type="password" class="form-control texto" placeholder="Contraseña">
                <br>
                <br>
                <button class="btn btn-lg btn-primary btn-block" type="submit" style="width: 100px">Iniciar sesión</button>
            </form>
        </div>
    </section>
</center>
</body>
</html>  
