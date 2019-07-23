$(document).ready(function() {
	function limpiarFormulario() {
    	document.getElementById("ff").reset();
    }

    function boton_eliminar(registro) {
	$('#id_' + registro).remove();

    }
    function limpiar() {
	$("#nombre").val('');
	$("#apellido").val('');
	$("#cedula").val('');
	}
	$('#enviar').click(function(e) {
		e.preventDefault();

		var formData = new FormData($('#ff')[0]);
		var token = $('input[name=_token]').val();
		var form = $(this).parents('form');
		var url = form.attr('action');

		var descripcion = $('input[name=descripcion]').val();
		// var precio = $('input[name=precio]').val();
		// var cantidad = $('input[name=cantidad]').val();

		var divSalida = $("#datos");
		var cadena = "";
		cadena = '<tr >\
				      <td>'+descripcion+'</td>\
				    </tr>';
			divSalida.append(cadena);

		limpiarFormulario();
		$.ajax({
			url: url,
			headers: { 'X-CSRF-TOKEN': token },
			type: "POST",
			dataType: "json",
			contentType: false,
			processData: false,
			data: formData,
		})
		.done(function() {

			console.log("success");
		})
		.fail(function() {

			console.log("error");
		})



	})
	$('#enviar1').click(function(e) {
		e.preventDefault();

		var formData = new FormData($('#fff')[0]);
		var token = $('input[name=_token]').val();
		var form = $(this).parents('form');
		var url = form.attr('action');

		var nombre = $('input[name=nombre]').val();
		var apellido = $('input[name=apellido]').val();
		var cedula = $('input[name=cedula]').val();
		var descripcion = $('select[name=tipoempleado] option:selected').text();
		
		var divSalida = $("#datos1");
		var cadena = "";
		cadena = '<tr >\
				      <td>'+nombre+'</td>\
				      <td>'+apellido+'</td>\
				      <td>'+cedula+'</td>\
				      <td>'+descripcion+'</td>\
				    </tr>';
			divSalida.append(cadena);

		limpiar();

		$.ajax({
			url: url,
			headers: { 'X-CSRF-TOKEN': token },
			type: "POST",
			dataType: "json",
			contentType: false,
			processData: false,
			data: formData,
		})
		.done(function() {

			console.log("success");
		})
		.fail(function() {

			console.log("error");
		})



	})
});