var tabla;

Load_init();


function Load_init()
{
    //mostrarform(false);
   // listar();

    $("#frmEmpleadoAdm").on("submit",function(e)
    {
        GuardarEmpleado(e);
    })

    ListarEmpleados();

   

    //Cargamos los items al select categoria
    // $.post(
    //     "../ajax/articulo.php?op=selectCategoria",
    //     function(data)
    //     {        
    //         //console.log(data);
    //         $("#idcategoria").html(data);
    //         $("#idcategoria").selectpicker('refresh');
    //     }
    // );

    // $("#imagenmuestra").hide();
}


function GuardarEmpleado(e)
{
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGurdarEmpleado").prop("disabled",true);
    var formData = new FormData($("#frmEmpleadoAdm")[0]);
    
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

    link = '../../Modelo/ModeloEmpleado.php';
    
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
			"js_GuardaEmpleado"     : 1
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

function ListarEmpleados()
{
    link = '../../Modelo/ModeloEmpleado.php';
    $.ajax({
		url: link,
		type: 'POST',
		dataType: 'json',
		data: {
			"js_ListarEmpleados": 1
		},
	}).done(function(response) {
		console.log(response);
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
