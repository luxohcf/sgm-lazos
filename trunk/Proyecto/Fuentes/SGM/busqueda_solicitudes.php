<?php

include("cabecera.php");
include("menu.php")

?>
<html>
    
    <head>
    
    </head>
    
    <body>
    <div class="row">
    <div class="span6">
        <fieldset>
            <legend>Filtros Solicitudes</legend>
           	<label><div>Código</div></label>
        	<input type="text" placeholder="Ingrese Código" class="input-xlarge">
        	<label><div>Nombre</div></label>
        	<input type="text" placeholder="Ingrese Nombre" class="input-xlarge">
            <label><div>Estado</div></label>
            <select name="Gender" id="DropdownGender" class="input-xlarge">
            <option value=""> -- Seleccione -- </option>
            <option value="">...</option>
            <option value="">...</option>
            <option value="">...</option>
            <option value="">...</option>
            <option value="">...</option>
            </select>
            <label><div>Proyecto</div></label>
            <select name="Gender" id="DropdownGender" class="input-xlarge">
            <option value=""> -- Seleccione -- </option>
            <option value="">...</option>
            <option value="">...</option>
            <option value="">...</option>
            <option value="">...</option>
            <option value="">...</option>
            </select>
            <label><div>Categoría</div></label>
            <select name="Gender" id="DropdownGender" class="input-xlarge">
            <option value=""> -- Seleccione -- </option>
            <option value="">...</option>
            <option value="">...</option>
            <option value="">...</option>
            <option value="">...</option>
            <option value="">...</option>
            </select>
          
            
            
            </fieldset>
      </div>
      <div class="span6">
        <fieldset>
        <legend> &nbsp;</legend>
        
            <label><div>Ticket</div></label>
            <input type="text" placeholder="Ingrese Ticket" class="input-xlarge">
            <label><div>Usuario</div></label>
            <input type="text" placeholder="Ingrese Usuario" class="input-xlarge">
              <label>Fecha de Creación desde*</label>
        <input type="date" placeholder="Seleccione Fecha" class="input-xlarge">
        <label>Fecha de creación Hasta*</label>
        <input type="date" placeholder="Seleccione Fecha" class="input-xlarge">
        <label><div>Destacados</div></label>&nbsp;<input type="checkbox" class="input-xlarge">
            <label><div>Cliente</div></label>
            <input type="text" placeholder="Ingrese Cliente" class="input-xlarge"><br>
            <button type="button" class="btn btn-lg btn-primary">Limpiar</button>&nbsp;
            
            <button type="button" class="btn btn-lg btn-primary">Filtrar</button><br><br><br>
            </fieldset>
  </div>
</div>
       
       <div class="row">
    <div class="span12">
        <legend>Resultados</legend>
        <table class="table table-striped table-bordered    ">
        <thead>
          <tr>
            <th>#</th>
            <th>Código</th>
            <th>Nombre</th>
            <th>Estado</th>
            <th>Proyecto</th>
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