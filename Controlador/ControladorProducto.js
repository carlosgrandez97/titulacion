var tabla;

Load_init();


function Load_init()
{
    //mostrarform(false);
   // listar();

    $("#frmProductoAdm").on("submit",function(e)
    {
        GuardarClientes(e);
    })

    ListarEmpleados();
    ListarConfiguracionGeneral();

}


function GuardarClientes(e)
{
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardarProducto").prop("disabled",true);
    
    inputNombrePrincipal    = document.getElementById("inputNombrePrincipal").value;
    inputDescipcion         = document.getElementById("inputDescipcion").value;
    inputPrecio             = document.getElementById("inputPrecio").value;
    optionCategoria         = document.getElementById("optionCategoria").value;

    // console.log('ferfe')

    link = '../../Modelo/ModeloProducto.php';
    
    $.ajax({
        url: link,
        type: "POST",
        dataType: 'json',
        data: {
            'inputNombrePrincipal'      : inputNombrePrincipal,
            'inputDescipcion'           : inputDescipcion,
            'inputPrecio'               : inputPrecio,
            'optionCategoria'           : optionCategoria,
			"js_GuardarProducto"         : 1
        },
    })
    .done(function(response) {
        console.log(response);

        if(response){
            Swal.fire({
                icon: 'success',
                title: 'Correcto',
                text: 'Datos ingresado correctamente',
                footer: '<a href="">' + response[0] + '</a>'
              })
        }else{
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Algo salio mal!',
                footer: '<a href="">' + response[0] + '</a>'
              })

           
        }
    }).fail(function(response) {
        console.log(response);
    });

    // limpiar();
}

function ListarEmpleados()
{
    link = '../../Modelo/ModeloCliente.php';
    $.ajax({
		url: link,
		type: 'POST',
		dataType: 'json',
		data: {
			"js_ListarClientes": 1
		},
	}).done(function(response) {
		//console.log(response);
		var html = '';
		var i;

		for (var i = 0; i < response.length; i++) {

			html += 
                    '<tr>'+
						'<td>'+ response[i][1]                      +'</td>' +
						'<td>'+ response[i].cPerNombres             +'</td>' +
						'<td>'+ response[i].cPerApellidoPar         +'</td>' +
						'<td>'+ response[i].cPerApellidoMat         +'</td>' +
						'<td>'+ response[i].dPerNac                 +'</td>' +
						'<td>S/ '+ response[i].cPerDirecDomicilio   +'</td>' +
						'<td>'+ response[i].cPerTelefono            +'</td>' +
			        '</tr>'
		}
		$('#tbodyEmpleados').html(html);
	})
	.fail(function(response) {
		console.log(response);
	});
}


function ListarConfiguracionGeneral()
{
    link = '../../Modelo/ModeloCategoriaProducto.php';
    $.ajax({
		url: link,
		type: 'POST',
		dataType: 'json',
		data: {
			"js_ListarConfiguracionGeneral": 1
		},
	}).done(function(response) {
		console.log(response);
		var html = "";
        html +="<option >Selecciona una categoria</option>";
        $.each(response, function(index, data) {
            html +="<option value='"+data.cat_id+"'>"+data.cat_nombres +"</option>";
        });

        $("#optionCategoria").html(html);
	
	})
	.fail(function(response) {
		console.log(response);
	});
}