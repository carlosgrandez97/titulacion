var tabla;

Load_init();


function Load_init()
{
    //mostrarform(false);
   // listar();

    $("#frmEmpleadoAdm").on("submit",function(e)
    {
        GuardarClientes(e);
    })

    // ListarEmpleados();   
    //ListarClientesVenta();

}


function GuardarClientes(e)
{
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardarClientes").prop("disabled",true);
    
    inputPrimerNombre   = document.getElementById("inputPrimerNombre").value;
    inputSegundoNombre  = document.getElementById("inputSegundoNombre").value;
    inputApellidoPat    = document.getElementById("inputApellidoPat").value;
    inputApellidoMat    = document.getElementById("inputApellidoMat").value;
    inputNacimiento     = document.getElementById("inputNacimiento").value;
    inputDireccion      = document.getElementById("inputDireccion").value;
    inputTelefono       = document.getElementById("inputTelefono").value;
    inputCelular        = document.getElementById("inputCelular").value;
    optionPersoneria    = document.getElementById("optionPersoneria").value;
    inputDOI            = document.getElementById("inputDOI").value;
    optionCargo         = document.getElementById("optionCargo").value;
    inputUsuario        = document.getElementById("inputUsuario").value;
    inputPassword       = document.getElementById("inputPassword").value;
    // console.log(inputPrimerNombre);
    // console.log(inputSegundoNombre);
    // console.log(inputApellidoPat);
    // console.log(inputApellidoMat);
    // console.log(inputNacimiento);
    // console.log(inputDireccion);
    // console.log(inputTelefono);
    // console.log(inputCelular);
    // console.log(optionPersoneria);
    // console.log(inputDOI);
    // console.log(optionCargo);
    // console.log(inputUsuario);
    // console.log(inputPassword);

    link = '../../Modelo/ModeloCliente.php';
    
    $.ajax({
        url: link,//"../ajax/articulo.php?op=guardaryeditar",
        type: "POST",
        dataType: 'json',
        data: {
            'inputPrimerNombre'     : inputPrimerNombre,
            'inputSegundoNombre'    : inputSegundoNombre,
            'inputApellidoPat'      : inputApellidoPat,
            'inputApellidoMat'      : inputApellidoMat,
            'inputNacimiento'       : inputNacimiento,
            'inputDireccion'        : inputDireccion,
            'inputTelefono'         : inputTelefono,
            'inputCelular'          : inputCelular,
            'optionPersoneria'      : optionPersoneria,
            'inputDOI'              : inputDOI,
            'optionCargo'           : optionCargo,
            'inputUsuario'          : inputUsuario,
            'inputPassword'         : inputPassword,
			"js_GuardaCliente"     : 1
        },
    })
    .done(function(response) {
        //console.log(response);

        if(response){
            //window.location.href = "Vista/Home/Principal.php";
            Swal.fire({
                icon: 'success',
                title: 'Oops...',
                text: 'Algo salio mal!',
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


function ListarClientesVenta()
{
    $('#inputBuscarClienteParaVenta').keyup(function(event) {

        inputBuscar   = document.getElementById("inputBuscarClienteParaVenta").value;
        //console.log(inputBuscar);

    link = '../../Modelo/ModeloCliente.php';

    

    $.ajax({
		url: link,
		type: 'POST',
		dataType: 'json',
		data: {
            "inputBuscar": inputBuscar,
			"js_ListarClientesVenta": 1
		},
	}).done(function(response) {
		console.log(response);
		var html = '';
		var i;

		for (var i = 0; i < response.length; i++) {
        
            var j = i + 1;
			html += 
                    '<tr>' +
                    '<td>' +j +'</td>' +
                        '<td>' +response[i].Nombres + '</td>' +
                        '<td> <a href="" type="button" onclick="GenerarVentTmp()"> <span class="badge rounded-pill bg-primary text-light"><i class="fa-solid fa-plus"></span></a></td>'+
                        //'<td> <button> <span class="badge rounded-pill bg-primary text-light"><i class="fa-solid fa-plus"></span></button></td>'+
                        
                        //'<button id='btnEliminarCategoria' onclick='EliminarCategoria("+data.cat_id+")' type='button' class='btn btn-outline-secondary'><i class='fa-solid fa-xmark'></button>" +
                    '</tr>'


                    // '<tr>'+
					// 	'<td>'+ response[i][1]       +'</td>' +
					// 	'<td>'+ response[i].Nombres  +'</td>' +
			        // '</tr>'
		}
		$('#tbl_MuestraResultadoCliente').html(html);
	})
	.fail(function(response) {
		console.log(response);
	});
})
}


function BuscarProducto()
{
    $('#inputBuscarProductoParaVenta').keyup(function(event) {

        inputBuscar   = document.getElementById("inputBuscarProductoParaVenta").value;
        //console.log(inputBuscar);

    link = '../../Modelo/ModeloProducto.php';   

    $.ajax({
		url: link,
		type: 'POST',
		dataType: 'json',
		data: {
            "inputBuscar": inputBuscar,
			"js_BuscarProducto": 1
		},
	}).done(function(response) {
		console.log(response);
		var html = '';
		var i;

		for (var i = 0; i < response.length; i++) {
        
            var j = i + 1;
			html += 
                    '<tr>' +
                    '<td>' +j +'</td>' +
                        '<td>' +response[i].cNombres + '</td>' +
                        '<td> <a href=""> <span class="badge rounded-pill bg-primary text-light"><i class="fa-solid fa-plus"></span></a></td>'+
                    '</tr>'


                    // '<tr>'+
					// 	'<td>'+ response[i][1]       +'</td>' +
					// 	'<td>'+ response[i].Nombres  +'</td>' +
			        // '</tr>'
		}
		$('#tbl_MuestraResultadoProducto').html(html);
	})
	.fail(function(response) {
		console.log(response);
	});
})
}


function GenerarVentTmp() {
    alert("prueba");
}