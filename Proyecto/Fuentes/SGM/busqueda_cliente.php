<?php

include("cabecera.php");
include("menu.php")

?>
<script type="text/javascript">
    function ocultar()
    {
        $("#alg").hide()
    }
</script>
 
<fieldset>
    <legend>Búsqueda Cliente</legend>
    
    <legend>Filtros General</legend>
    <label><div>Nombre</div></label>
           <input type="text" placeholder="Ingrese Nombre" class="input-xlarge">&nbsp;
           <button type="button" class="btn btn-lg btn-primary">Filtrar</button>
    <legend>Filtros Cliente</legend>
    
    <div class="row-fluid">
       <button type="button" class="btn btn-mini btn-danger" id="btnF" onclick="ocultar()">+</button>
        <div class="span1"></div> 
        <div class="span5" id="alg">

           <label><div>RUT Empresa</div></label>
           <input type="text" placeholder="Ingrese RUT" class="input-xlarge">
           <label><div>Institución</div></label>
           <input type="text" placeholder="Ingrese Institución" class="input-xlarge"><br>
        </div>
        
      <div class="span5" id="alg">
        
        <label><div>Nombre</div></label>
        <input type="text" placeholder="Ingrese Nombre" class="input-xlarge">
        <label><div>Apellido</div></label>
        <input type="text" placeholder="Ingrese Apellido" class="input-xlarge"><br><br>
      </div>
     <div class="span1"></div>
    </div>
</fieldset>
    <div class="row pagination-centered">
    <div class="container theme-showcase">
        <p>
            <button type="button" class="btn btn-lg btn-primary">Limpiar</button>&nbsp;
            <button type="button" class="btn btn-lg btn-primary">Filtrar</button>
        </p>
        </div>
        </div>
 
       <div class="row">
    <div class="span12">
        <legend>Resultados</legend>
        <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Cliente</th>
            <th>Rut-Cliente</th>
            <th>Institución</th>
            <th>..</th>
            <th>Ver</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1 <img src="tesis/images/Estrella-blanca.PNG"/></td>
            <td>Inacap</td>
            <td>Juan Muñoz</td>
            <td>Inacap</td>
            <td>...</td>
            <td>imagen</td>
                  
          </tr>
          <tr>
            <td>2 <img src="tesis/images/Estrella-amarrilla.PNG" /></td>
            <td>Falabella</td>
            <td>Thornton</td>
            <td>@Falabella</td>
            <td>...</td>
            <td>imagen</td>
          </tr>
          <tr>
            <td>3 <img src="tesis/images/Estrella-blanca.PNG" /></td>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            <td>Mark</td>
            <td>imagen</td>
            
          </tr>
        </tbody>
      </table>
    </div>
</div>
</table>
    </body>
    
</html>