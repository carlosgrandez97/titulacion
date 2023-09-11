var tabla;

Load_init();


function Load_init()
{
    //mostrarform(false);
   // listar();

    $("#frmIngredienteAdm").on("submit",function(e)
    {
        GuardarIngrediente(e);
    })

    ListarUnidad();

}


function GuardarIngrediente(e)
{
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardaringrediente").prop("enabled",true);
  
    inputDescripcionIngrediente      = document.getElementById("inputDescripcionIngrediente").value;
    inputPrecioCompra                = document.getElementById("inputPrecioCompra").value;
    optionTpoMedicion                = document.getElementById("optionTpoMedicion").value;

    link = '../../Modelo/ModeloIngrediente.php';
    
    $.ajax({
        url: link,//"../ajax/articulo.php?op=guardaryeditar",
        type: "POST",
        dataType: 'json',
        data: {
            'inputDescripcionIngrediente'        : inputDescripcionIngrediente,
            'inputPrecioCompra'                  : inputPrecioCompra,
            'optionTpoMedicion'                  : optionTpoMedicion,
			"js_GuardarIngrediente"              : 1
        },
    })
    .done(function(response) {
        console.log(response);

        if(response == "OK"){
            //window.location.href = "Vista/Home/Principal.php";
            Swal.fire({
                icon: 'success',
                title: 'Correcto',
                text: 'Datos Ingresado correctamente!',
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
        //ListarConfiguracionGeneral();
    }).fail(function(response) {
        console.log(response);
    });

    // limpiar();
}

function ListarUnidad()
{
    link = '../../Modelo/ModeloUnidad.php';
    $.ajax({
		url: link,
		type: 'POST',
		dataType: 'json',
		data: {
			"js_ListarUnidad": 1
		},
	}).done(function(response) {
		console.log(response);
		var html = "";
        html +="<option >Selecciona un tipo de medicion</option>";
        $.each(response, function(index, data) {
            html +="<option value='"+data.uni_id+"'>"+data.uni_descripcion +" - " +data.uni_simbolo +"</option>";
        });

        $("#optionTpoMedicion").html(html);
	
	})
	.fail(function(response) {
		console.log(response);
	});
}
