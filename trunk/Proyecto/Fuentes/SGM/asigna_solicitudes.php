<?php

include("cabecera.php");

include("menu.php")

?>

<!-- asignar Solicitudes -->
<div class="row">
    <div class="span12">
        <fieldset>
            <legend>Asignar Solicitudes</legend>
            <center>
            <label>Tipo de Solicitud*</label>
        <select name="Gender" id="DropdownGender" class="input-xlarge">
            <option value="">--Seleccione--</option>
            <option value="">Garantías</option>
            <option value="">Testing</option>
            <option value="">...</option>
            
        </select>
        <label>Nombre de Usuario*</label>
        <select name="Gender" id="DropdownGender" class="input-xlarge">
            <option value="">--Seleccione--</option>
            <option value="">Tracy Padilla</option>
            <option value="">Luis Lizama</option>
            <option value="">Carlos Vallegos</option>
            <option value="">....</option>
           </select>
           <label>Fecha de Asignación*</label>
        <input type="date" placeholder="--Seleccione Fecha--" class="input-xlarge">
        <label>Observación/Comentario</label>
         <textarea rows="3" placeholder="Ingrese Comentario..." ></textarea><br><br><br>
            
        <button type="button" class="btn btn-lg btn-primary">Asignar Perfil</button>
        </center>
        </fieldset>