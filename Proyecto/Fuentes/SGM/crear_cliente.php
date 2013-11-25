<?php

include("cabecera.php");

include("menu.php")

?>
<!--  -->
<div class="row">
    <div class="span6">
        <fieldset>
            <legend>Crear Cliente</legend>
            <center>
            <label><div>Nombre <small class="text-error req">*</small></div></label>
            <input type="text" placeholder="Ingrese Nombre" class="input-xlarge"><br>
            <label><div>Apellido<small class="text-error req">*</small></div></label>
            <input type="text" placeholder="Ingrese Apellido" class="input-xlarge">
            <label><div>Institución <small class="text-error req">*</small></div></label>
            <input type="text" placeholder="Ingrese Institución" class="input-xlarge">
            <label>RUT Institución</label>
            <input type="text" placeholder="Ingrese RUT" class="input-xlarge">
            
		</fieldset>
    </div>
    <div class="span6">
        <fieldset>
        <legend> &nbsp;</legend>
      		 <label>Dirección *</label>
            <input type="text" placeholder="Ingrese Dirección" class="input-xlarge">
            <label>Ciudad *</label>
            <input type="text" placeholder="Ingrese Ciudad" class="input-xlarge">
            <label>País *</label>
            <input type="text" placeholder="Ingrese País" class="input-xlarge">
            <label>Correo Electrónico *</label>
            <input type="text" placeholder="Ingrese Correo" class="input-xlarge">
            </center>
        	<label>Observación/Comentario</label>
       		  <textarea rows="3" placeholder="Ingrese Comentario..." ></textarea>
    		<br>
			<br>
       		 <button type="button" class="btn btn-lg btn-primary">Registrar Cliente</button>
        </fieldset>
    </div>
</div>