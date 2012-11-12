//window.onload = function(){ alert("welcome"); }

$(document).ready(function(){
  // $('#contenedor').load('grupo.html');
 });

$(function(){
	// la etiqueta tiene identificador (id)

	
	
	$('#crear').click(function(){
		$('#contenedor').load('grupo.html');
		
	});

	$('#agregar').click(function(){
		$('#contenedor').load('agregar_int.html');
	});

	$('#rsp').click(function(){
		$('contenedor').load('laboratorios.html');
	});

	$('#ir1').click(function(){
		$('contenedor').load('../laboratorios/responder.html');
	});
});