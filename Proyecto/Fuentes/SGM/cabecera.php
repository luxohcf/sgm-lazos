<?php
@session_start();
require_once("config/parametros.php");
// Para no permitir ingresar si no se ha iniciado sesión
if(isset($_SESSION['usuario']) == FALSE)
{
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title><?php echo $V_TITULO; ?></title>     
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">  
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/jquery-1.8.2.js"></script>
<script src="js/jquery-ui-1.9.1.custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- DataTable plugin -->
<script type="text/javascript" src="js/DT/jquery.dataTables.js"></script>
<style type="text/css" title="currentStyle">
    @import "css/DT/demo_page.css";
    @import "css/DT/demo_table.css";
    @import "css/DT/demo_table_jui.css";
    @import "css/DT/jquery.dataTables_themeroller.css";
    
</style>
<!-- Select -->
<link href="css/bootstrap-select.css" rel="stylesheet" />
<script src="js/bootstrap-select.js" type="text/javascript"></script>
<!-- DatePicker -->
<link href="css/datepicker.css" rel="stylesheet" />
<script src="js/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Dialogos -->
<script src="js/bootbox.min.js" type="text/javascript"></script>

<script type="text/javascript">

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
	
	function validaFormatoPass(pass) {
		if (!/^[a-zA-Z0-9\.]{4,20}$/.test(pass)) {
			return false;
		}
		return true;
	}
	
	function ValidaCorreo(texto){
		
		if (!/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(texto)) {
			return false;
		}
		return true;
	}
	
	function ValidaNumerico(texto){
		
		if (!/^[0-9]{1,10}$/.test(texto)) {
			return false;
		}
		return true;
	}
	
	function ValidaTexto(texto){
		
		if (!/^[a-zA-ZáéíóúÁÉÍÓÚ\s\'\-\.]{1,255}$/.test(texto)) {
			return false;
		}
		return true;
	}
	
	function ValidaAlfaNumerico(texto){
		
		if (!/^[a-zA-ZáéíóúÁÉÍÓÚñ0-9\s\'\-\.\(\)]{1,255}$/.test(texto)) {
			return false;
		}
		return true;
	}

	function MostrarAdvertencia(mensaje, array) {
		MostrarMensaje(mensaje, array, "");
	}

	function MostrarExito(mensaje, array) {
		MostrarMensaje(mensaje, array, "alert-success");
	}

	function MostrarError(mensaje, array) {
		MostrarMensaje(mensaje, array, "alert-error");
	}

	function MostrarMensaje(mensaje, array, tipo) {
		var msj = "<div class='alert " + tipo + "'><button type='button' class='close' data-dismiss='alert'>&times;</button>";
		msj = msj + "<strong>" + mensaje + "</strong>";

		if (array != null) {
			array.forEach(function(entry) {
				msj = msj + "<p>" + entry + "</p>";
			});
		}

		$('#divErrores').html(msj);
	}
	
	$(function() {
		$(".filtroAvanzado").hide();
		
		
		$('#dvLoading').hide();
		
		/*$('#dvLoading' ).dialog({
	  	    autoOpen: false,
			width: 300,
			height: 260,
			modal: true,
			resizable: false,
			beforeclose: function (event, ui) { return false; },
    		dialogClass: "noclose"
	  	});
	  	
	  	$('#dvLoading').hide();
		
		$("body").on({
		    ajaxStart: function() { 
		        $(this).addClass("loading");
		        //$('#dvLoading').dialog( "open" );
		        $('#dvLoading').show();
		    },
		    ajaxStop: function() { 
		        $(this).removeClass("loading"); 
		        //$('#dvLoading').dialog( "close" );
		        $('#dvLoading').hide();
		    }    
	  	}); */
	  	
	  	$('.selectpicker').selectpicker({

        });
        
        $('.txtFecha').datepicker({
            format: "dd-mm-yyyy",
            todayBtn: "linked",
            language: "es",
            endDate: "+"
        });
	  	
	});

    function CerrarSesion(){
        Ir("IniSes/logout.php");
    }
    
    function Ir(ruta){
        window.location.href = ruta;
    }
    
    function MisDatos(){
        Ir("misdatos.php");
    }
    
    function Main(){
        Ir("main.php");
    }
    
    // Para recargar la tabla
	$.fn.dataTableExt.oApi.fnReloadAjax = function ( oSettings, sNewSource, fnCallback, bStandingRedraw )
	{
	    if ( typeof sNewSource != 'undefined' && sNewSource != null ) {
	        oSettings.sAjaxSource = sNewSource;
	    }
	 
	    if ( oSettings.oFeatures.bServerSide ) {
	        this.fnDraw();
	        return;
	    }
	 
	    this.oApi._fnProcessingDisplay( oSettings, true );
	    var that = this;
	    var iStart = oSettings._iDisplayStart;
	    var aData = [];
	  
	    this.oApi._fnServerParams( oSettings, aData );
	      
	    oSettings.fnServerData.call( oSettings.oInstance, oSettings.sAjaxSource, aData, function(json) {
	        that.oApi._fnClearTable( oSettings );
	          
	        var aData =  (oSettings.sAjaxDataProp !== "") ?
	            that.oApi._fnGetObjectDataFn( oSettings.sAjaxDataProp )( json ) : json;
	          
	        for ( var i=0 ; i<aData.length ; i++ )
	        {
	            that.oApi._fnAddData( oSettings, aData[i] );
	        }
	          
	        oSettings.aiDisplay = oSettings.aiDisplayMaster.slice();
	          
	        if ( typeof bStandingRedraw != 'undefined' && bStandingRedraw === true )
	        {
	            oSettings._iDisplayStart = iStart;
	            that.fnDraw( false );
	        }
	        else
	        {
	            that.fnDraw();
	        }
	          
	        that.oApi._fnProcessingDisplay( oSettings, false );
	          
	        if ( typeof fnCallback == 'function' && fnCallback != null )
	        {
	            fnCallback( oSettings );
	        }
	    }, oSettings );
	};
	
	// Para el estilo de la tabla de detalle
	(function ($) {
        $.fn.styleTable = function (options) {
            var defaults = {
                css: 'styleTable'
            };
            options = $.extend(defaults, options);

            return this.each(function () {

                input = $(this);
                input.addClass(options.css);

                input.find("tr").live('mouseover mouseout', function (event) {
                    if (event.type == 'mouseover') {
                        $(this).children("td").addClass("ui-state-hover");
                    } else {
                        $(this).children("td").removeClass("ui-state-hover");
                    }
                });

                input.find("th").addClass("ui-state-default");
                input.find("td").addClass("ui-widget-content");

                input.find("tr").each(function () {
                    $(this).children("td:not(:first)").addClass("first");
                    $(this).children("th:not(:first)").addClass("first");
                });
            });
        };
    })(jQuery);
</script>

<style type="text/css">
@import "css/dataTables.bootstrap.css";
</style>

</head>  
<body>
<form id="FormPrincipal">

<div id="dvLoading" class="overlay">
    <center>
		<img src="css/loading.gif" alt="Cargando...." />
	</center>
</div>

<div class="navbar navbar-default" >
  <div class="navbar-inner btn-primary">
    <a class="brand" href="#"><?php echo $V_TITULO; ?></a>
    <ul class="nav" style="float: right">
      <li class="active"><a href="javascript:Main();"><i class="icon-user"></i><?php echo " Bienvenido ". $_SESSION['usuario'] ?></a></li>
      <li><a href="javascript:MisDatos();"><i class="icon-home"></i> Mis Datos</a></li>
      <li><a href="javascript:CerrarSesion();"><i class="icon-off"></i> Cerrar Sesión</a></li>
    </ul>
  </div>
</div>


