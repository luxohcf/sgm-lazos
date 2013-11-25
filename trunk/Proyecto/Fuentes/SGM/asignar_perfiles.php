<?php

include("cabecera.php");

include("menu.php")

?>

<!-- asignar perfiles -->
<div class="row">
    <div class="span12">
        <fieldset>
            <legend>Asignar Perfiles</legend>
            <center>
        <select name="Gender" id="DropdownGender" class="input-xlarge">
            <option value="">--Seleccione--</option>
            <option value="">Administrador</option>
            <option value="">Testing</option>
            <option value="">Desarrollador</option>
            <option value="">Jefe de Proycto</option>
            <option value="">Jede de Desarrollo</option>
            <option value="">Operaciones</option>
        </select>
        <label>Nombre de Usuario*</label>
        <select name="Gender" id="DropdownGender" class="input-xlarge">
            <option value="">--Seleccione--</option>
            <option value="">Tracy Padilla</option>
            <option value="">Luis Lizama</option>
            <option value="">Carlos Vallegos</option>
            <option value="">....</option>
           </select>
           <label>Fecha de Creación*</label>
        <input type="date" placeholder="--Seleccione Fecha--" class="input-xlarge">
        <label>Fecha de Modificación*</label>
        <input type="date" placeholder="Seleccione Fecha" class="input-xlarge">
        <label>Observación/Comentario</label>
         <textarea rows="3" placeholder="Ingrese Comentario..." ></textarea><br><br><br>
            
        <button type="button" class="btn btn-lg btn-primary">Asignar Perfil</button>
        </center>
        </fieldset>