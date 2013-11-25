<?php

include("cabecera.php");

include("menu.php")

?>
<!--Crear Solicitud -->
<div class="row">
    <div class="span6">
        <fieldset>
            <legend>Crear Solicitud</legend>
            <center>
            <label><div>Nombre Solicitud<small class="text-error req">*</small></div></label>
            <input type="text" placeholder="Ingrese Nombre" class="input-xlarge"><br>
            <label><div>Proyecto<small class="text-error req">*</small></div></label>
            <select name="Gender" id="DropdownGender" class="input-xlarge">
            <option value="">--Seleccione--</option>
            <option value="">GORE9</option>
            <option value="">...</option>
            <option value="">...</option>
             <label><div>Categoría<small class="text-error req">*</small></div></label>
            <select name="Gender" id="DropdownGender" class="input-xlarge">
            <option value="">--Seleccione--</option>
            <option value="">Alta</option>
            <option value="">Media</option>
            <option value="">Baja</option>
            <option value="">Normal</option>
            <label>Correo en copia</label>
            <input type="text" placeholder="Ingrese coreo" class="input-xlarge">
      </fieldset>
    </div>
    <div class="span6">
        <fieldset>
        <legend> &nbsp;</legend>
        <label>Cargar Evidencia</label>
        <form name="formulario" action="envio.php" method="post" enctype="multipart/form-data">
        <input name="archivo" type="file" size="20"> 
         <label>Descripción</label>
         <textarea rows="3" placeholder="Ingrese Comentario..." ></textarea>
    	<br>
		<br>
		<br>
		<br>
        <button type="button" class="btn btn-lg btn-primary">Registrar Solicitud</button>
        </fieldset>
    </div>
</div>