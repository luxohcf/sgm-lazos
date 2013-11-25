<?php

include("cabecera.php");
include("menu.php")

?>
<fieldset>
    <legend>
        Filtros Estadísticas
    </legend>
    <div class="row-fluid">
        <div class="span1"></div>
        <div class="span5">

            <label>
                <div>
                    Nombre Proyecto
                </div></label>
            <select name="Gender" id="DropdownGender" class="input-xlarge">
                <option value=""> -- Seleccione -- </option>
                <option value="">GORE12</option>
                <option value="">Inacap</option>
                <option value="">CORFO</option>
                <option value="">Gobierno regional de la Araucanía</option>
                <option value="">...</option>
            </select>
            <label>
                <div>
                    Encargado del Proyecto
                </div></label>
            <select name="Gender" id="DropdownGender" class="input-xlarge">
                <option value=""> -- Seleccione -- </option>
                <option value="">Pedro Lizana</option>
                <option value="">Juan Vallegos</option>
                <option value="">Héctor Padilla</option>
                <option value="">Solange Sierra</option>
                <option value="">...</option>
            </select>
            <label>Fecha de Inicio*</label>
            <input type="date" placeholder="Seleccione Fecha" class="input-xlarge">

        </div>
        <div class="span5">
            <label>Fecha de Término*</label>
            <input type="date" placeholder="Seleccione Fecha" class="input-xlarge">
            <label>
                <div>
                    Clientes
                </div></label>
            <input type="text" placeholder="Cliente" class="input-xlarge">
            <label>
                <div>
                    Ticket
                </div></label>
            <input type="text" placeholder="Ingrese Ticket" class="input-xlarge">
        </div>
        <div class="span1"></div>
    </div>
</fieldset>
<div>
    &nbsp;
</div>
<div class="row">
    <div class="container theme-showcase pagination-centered">
        <p>
            <button type="button" class="btn btn-lg btn-primary">
                Buscar
            </button>
            <button type="button" class="btn btn-lg btn-primary">
                Limpiar
            </button>
        </p>
    </div>
</div>
<div>
    &nbsp;
</div>
<fieldset>
    <legend>
        Resultados Gráficos
    </legend>
    <div class="row-fluid pagination-centered">
        <div class="span12">
            <img src="css/images/grafico.jpg" />
        </div>

    </div>
</fieldset>
<div>
    &nbsp;
</div>
<div>
    &nbsp;
</div>