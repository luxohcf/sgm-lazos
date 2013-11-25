<?php

include("cabecera.php");

include("menu.php")

?>
<!--  -->
<div class="row">
    <div class="span6">
        <fieldset>
            <legend>Crear Proyecto</legend>
            <center>
            <label><div>Nombre Proyecto <small class="text-error req">*</small></div></label>
            <input type="text" placeholder="Nombre" class="input-xlarge"><br>
            <label><div>Institución <small class="text-error req">*</small></div></label>
            <input type="text" placeholder="Institución" class="input-xlarge">
            <label>Duración Proyecto</label>
            <input type="text" placeholder="Duración" class="input-xlarge">
            <label>Encargado del sistema *</label>
            <input type="text" placeholder="Ingrese Encargado" class="input-xlarge">
            <label>Tipo de Garantías *</label>
        <select name="Gender" id="DropdownGender" class="input-xlarge">
            <option value="">Seleccione</option>
            <option value="">Nuevo Requerimiento</option>
            <option value="">Incidencias</option>
            <option value="">...</option>
        </select>
            </center>
		
        </fieldset>
    </div>
    <div class="span6">
        <fieldset>
        <legend> &nbsp;</legend>
        <label>Fecha de Inicio*</label>
        <input type="date" placeholder="Seleccione Fecha" class="input-xlarge">
        <label>Fecha de Término*</label>
        <input type="date" placeholder="Seleccione Fecha" class="input-xlarge">
        <label>Fecha de Garantía*</label>
        <input type="date" placeholder="Seleccione Fecha" class="input-xlarge">
        <label>Cargar Evidencia</label>
        <form name="formulario" action="envio.php" method="post" enctype="multipart/form-data">
        <input name="archivo" type="file" size="20"> 
         <label>Observación/Comentario</label>
         <textarea rows="3" placeholder="Ingrese Comentario..." ></textarea>
    	<br>
		<br>
        <button type="button" class="btn btn-lg btn-primary">Registrar Proyecto</button>
        </fieldset>
    </div>
</div>