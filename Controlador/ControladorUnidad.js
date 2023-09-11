var tabla;

Load_init();


function Load_init()
{
    //mostrarform(false);
   // listar();

    $("#frmUnidadAdm").on("submit",function(e)
    {
        GuardarUnidades(e);
    })

    //ListarUnidad();

}


function GuardarUnidades(e)
{
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardarUnidad").prop("enabled",true);
  
    inputDescripcionUnidad      = document.getElementById("inputDescripcionUnidad").value;
    inputSimbolo                = document.getElementById("inputSimbolo").value;
    console.log("eklvnjne");
    link = '../../Modelo/ModeloUnidad.php';
    
    $.ajax({
        url: link,//"../ajax/articulo.php?op=guardaryeditar",
        type: "POST",
        dataType: 'json',
        data: {
            'inputDescripcionUnidad'        : inputDescripcionUnidad,
            'inputSimbolo'                  : inputSimbolod,
			"js_GuardarUnidades" : 1
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

	
	})
	.fail(function(response) {
		console.log(response);
	});
}
