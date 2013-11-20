<?php
@session_start();
// Para no permitir ingresar si no se ha iniciado sesión
if(isset($_SESSION['usuario']) == FALSE)
{
    header("Location: index.php");
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
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">

    function CerrarSesion(){
        Ir("IniSes/logout.php");
    }
    
    function Ir(ruta){
        window.location.href = ruta;
    }
    
    function MisDatos(){
        Ir("misdatos.php");
    }
    
    function Main(){
        Ir("main.php");
    }
    
</script>
</head>  
<body>  

<div class="navbar navbar-default" >
  <div class="navbar-inner btn-primary">
    <a class="brand" href="#">Proyecto SGM</a>
    <ul class="nav" style="float: right">
      <li class="active"><a href="javascript:Main();"><?php echo "Bienvenido ". $_SESSION['usuario'] ?></a></li>
      <li><a href="javascript:MisDatos();">Mis Datos</a></li>
      <li><a href="javascript:CerrarSesion();">Cerrar Sesión</a></li>
    </ul>
  </div>
</div>


