var tabla;

Load_init();


function Load_init()
{
    //mostrarform(false);
   // listar();

    // $("#frmCategoriaAdm").on("submit",function(e)
    // {
    //     GuardarCategoria(e);
    // })

    //ListarUnidad();
    // alert("dsds");
    //link = '../../Modelo/ModeloLogin.php';

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

function InicciarSesion(e)
{
    e.preventDefault();
    link = 'http://localhost/proyecto/Modelo/ModeloLogin.php';
    inputUsuario   = document.getElementById("inputUsuario").value;
    inputPassword  = document.getElementById("inputPassword").value;
    // console.log(inputUsuario);
    // console.log(inputPassword);

    $.ajax({
		url: link,
		type: 'POST',
		dataType: 'json',
		data: {
			"js_InicciarSesion": 1, 
            'inputUsuario'     : inputUsuario,
            'inputPassword'    : inputPassword
		},
	}).done(function(response) {
		console.log(response);

        if(response == 1){
            //window.location.href = "Vista/Home/Principal.php";
            Swal.fire({
                icon: 'success',
                title: 'Bienvenido',
                text: 'Se ha guarado los datos correctamente!',
                footer: ''
              }).then(function () {
               window.location.href = "http://localhost/proyecto/Vista/Estructura/InciaSession.php"; 
            })

            //console.log('csdcsdcsd');
        }else{
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: response.error ,
                footer: ''
              })          
        }
	})
	.fail(function(response) {
		console.log(response);
        Swal.fire({
            icon: 'error',
            title: 'Oops...!!\nAlgo salió mal',
            text: response,
            footer: ''
          })

	});
}
