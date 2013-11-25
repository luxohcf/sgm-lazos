<?php

include("cabecera.php");

include("menu.php")

?>
<!--  -->
<div class="row">
    <div class="span6">
        <fieldset>
            <legend>Modificar Proyecto</legend>
            
            <label><div>Nombre Proyecto <small class="text-error req">*</small></div></label>
            <input type="text" name="Nombre" value="Correspondencia" class="input-xlarge"><br>
            <label><div>Institución <small class="text-error req">*</small></div></label>
            <input type="text" name="Nombre" value="GORE9" class="input-xlarge">
            <label>Duración Proyecto</label>
            <input type="text" name="Nombre" value="un año" class="input-xlarge">
            <label>Encargado del sistema *</label>
            <input type="text" name="Nombre" value="Felipe Vogel" class="input-xlarge">
            <label>Tipo de Garantías *</label>
        <select name="Gender" id="DropdownGender" value="Incidencias" selected="selected" class="input-xlarge">
            <option value="">Incidencias</option>
            <option value="">Nuevo Requerimiento</option>
            <option value="">Seleccione</option>
            <option value="">...</option>
        </select>
        
            
        
        </fieldset>
    </div>
    <div class="span6">
        <fieldset>
        <legend> &nbsp;</legend>
        <label>Fecha de Inicio*</label>
        <input type="date" name="date" value="19-08-2013" class="input-xlarge">
        <label>Fecha de Término*</label>
        <input type="date" name="date" value="16-12-2013" class="input-xlarge">
        <label>Fecha de Garantía*</label>
        <input type="date" name="date" value="23-12-2013" class="input-xlarge">
        <label>Cargar Evidencia</label> 
        <a href="Oficio323.pdf">Oficio05.pfd</a><br>
        <a href="Carta12.jpg">Carta12.jpg</a><br>
        <a href="Carta12.jpg">Memorandum75.png</a><br>
        <form name="formulario" action="envio.php" method="post" enctype="multipart/form-data">
        <input name="archivo" type="file" size="20"> 
         <label>Observación/Comentario</label>
         <textarea rows="3" type="text" name="texto" value="se envía documentos solicitados"></textarea>
        <br>
        <br>
        <button type="button" class="btn btn-lg btn-primary">Registrar Proyecto</button>
        </fieldset>
    </div>
</div>