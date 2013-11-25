<?php

include("cabecera.php");
include("menu.php")

?>

    <script type="text/javascript" >
    var flag = true;
    
    function OcultaFiltros()
    {
        if(flag == true)
        {
            $("#txtbtnFiltros").html("Búsqueda Basica");
            $("#btnFiltros").removeClass( "icon-chevron-down" ).addClass( "icon-chevron-up" );
            $(".filtroAvanzado").show();
            flag = false;
        }   
        else
        {
            $("#txtbtnFiltros").html("Búsqueda Avanzada");
            $("#btnFiltros").removeClass( "icon-chevron-up" ).addClass( "icon-chevron-down" );
            $(".filtroAvanzado").hide();
            flag = true;
        }
    }
</script>
   
    
 <fieldset>
<legend>Filtros de Búsqueda</legend>
    <div class="row-fluid">
        <div class="span1"></div>
        <div class="span8">
            <label>NOMBRE</label>
            <input type="text" placeholder="Smith" class="input-xlarge">
        </div>
        <div class="span2">
            
            <div id="txtbtnFiltros">Búsqueda Avanzada</div>
        </div>
        <div class="span1">
            
            <a class="btn btn-info  " href="javascript:OcultaFiltros();"><i id="btnFiltros" class="icon-chevron-down"></i></a>
        </div>  
    </div>
    
    <div class="row-fluid filtroAvanzado">
        <div class="span1"></div>
        <div class="span5 ">
            <label>Código Proyecto</label>
            <input type="text" placeholder="Smith" class="input-xlarge">
            <label>Nombre Proyecto</label>
            <input type="text" placeholder="K" class="input-xlarge">
            <label>First Name</label>
            <input type="text" placeholder="John" class="input-xlarge">
        </div>
        <div class="span5 ">
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
<div class="row">
    <div class="container theme-showcase pagination-centered">
        <p>
            <button type="button" class="btn btn-lg btn-primary">Buscar</button>
            <button type="button" class="btn btn-lg btn-primary">Limpiar</button>
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
            <th>Proyecto</th>
            <th>Encargado del Proyecto</th>
            <th>Cliente</th>
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

 

