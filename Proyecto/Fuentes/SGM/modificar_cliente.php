<?php

include("cabecera.php");

include("menu.php")

?>
<!--  -->
<div class="row">
    <div class="span6">
        <fieldset>
            <legend>Modificar Cliente</legend>
            <center>
            <label><div>Nombre <small class="text-error req">*</small></div></label>
            <input type="text" value="Felipe Eduardo" class="input-xlarge"><br>
            <label><div>Apellido<small class="text-error req">*</small></div></label>
            <input type="text" value="Vogel Herrera" class="input-xlarge">
            <label><div>Institución <small class="text-error req">*</small></div></label>
            <input type="text" value="Gobierno Regional de la Araucania" class="input-xlarge">
            <label>RUT Institución</label>
            <input type="text" value="123.345.678-k" class="input-xlarge">
            
		</fieldset>
    </div>
    <div class="span6">
        <fieldset>
        <legend> &nbsp;</legend>
      		 <label>Dirección *</label>
            <input type="text" value="Prat #012987" class="input-xlarge">
            <label>Ciudad *</label>
            <input type="text" value="Temuco" class="input-xlarge">
            <label>País *</label>
            <input type="text" value="Chile" class="input-xlarge">
            <label>Correo Electrónico *</label>
            <input type="text" value="Felipe_Vogel@gobierno.cl" class="input-xlarge">
            </center>
        	<label>Observación/Comentario</label>
       		  <textarea rows="3" placeholder="Ingrese Comentario..." ></textarea>
    		<br>
			<br>
       		 <button type="button" class="btn btn-lg btn-primary">Modificar Cliente</button>
        </fieldset>
    </div>
</div>