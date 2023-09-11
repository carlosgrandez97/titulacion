var tabla;

Load_init();


function Load_init()
{
    //mostrarform(false);
   // listar();

    $("#frmCategoriaAdm").on("submit",function(e)
    {
        GuardarCategoria(e);
    })

    //ListarUnidad();

}


function GuardarCategoria(e)
{
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardarCategoria").prop("enabled",true);
  
    inputCatProducto      = document.getElementById("inputCatProducto").value;
    inputDescripcion      = document.getElementById("inputDescripcion").value;
    console.log("eklvnjne");
    link = '../../Modelo/ModeloCategoriaProducto.php';
    
    $.ajax({
        url: link,//"../ajax/articulo.php?op=guardaryeditar",
        type: "POST",
        dataType: 'json',
        data: {
            'inputCatProducto'                  : inputCatProducto,
            'inputDescripcion'                  : inputDescripcion,
			"js_GuardarCategoria" : 1
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

	
	})
	.fail(function(response) {
		console.log(response);
	});
}
