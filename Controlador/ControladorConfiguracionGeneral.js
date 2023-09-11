var tabla;

Load_init();


function Load_init()
{
    //mostrarform(false);
   // listar();

    $("#frmConfiguracionAdm").on("submit",function(e)
    {
        GuardarClientes(e);
    })

    ListarConfiguracionGeneral();

}


function GuardarClientes(e)
{
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardarConfiguracion").prop("enabled",true);
    console.log("mkkvenj");
    
  
    inputNombreProyecto     = document.getElementById("inputNombreProyecto").value;
    inputNombreCorto        = document.getElementById("inputNombreCorto").value;
    inputDireccionProyecto  = document.getElementById("inputDireccionProyecto").value;
    inputDireccionSitio     = document.getElementById("inputDireccionSitio").value;
    inputPuertoLocal        = document.getElementById("inputPuertoLocal").value;
    inputCorreoAdm          = document.getElementById("inputCorreoAdm").value;
    inputPerfilUsser        = document.getElementById("inputPerfilUsser").value;
    
    link = '../../Modelo/ModeloConfiguracion.php';
    
    $.ajax({
        url: link,//"../ajax/articulo.php?op=guardaryeditar",
        type: "POST",
        dataType: 'json',
        data: {
            'inputNombreProyecto'       : inputNombreProyecto,
            'inputNombreCorto'          : inputNombreCorto,
            'inputDireccionProyecto'    : inputDireccionProyecto,
            'inputDireccionSitio'       : inputDireccionSitio,
            'inputPuertoLocal'          : inputPuertoLocal,
            'inputCorreoAdm'            : inputCorreoAdm,
            'inputPerfilUsser'          : inputPerfilUsser,
			"js_GuardaConfiguracionGen" : 1
        },
    })
    .done(function(response) {
        console.log(response);

        if(response == "OK"){
            //window.location.href = "Vista/Home/Principal.php";
            Swal.fire({
                icon: 'success',
                title: 'Correcto',
                text: 'Datos Ingresado correctamente!'//,
                //footer: '<a href="">' + response[0] + '</a>'
              }).then(function () {
                //console.log("Despues de dar click en el boton, aqui llamarias al submit");
                window.location.href = "http://localhost/proyecto/Vista/Configuracion/ConfiguracionGeneral.php"; 
            })

        }else{
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Algo salio mal!',
                footer: '<a href="">' + response[0] + '</a>'
              })

           
        }
        ListarConfiguracionGeneral();
    }).fail(function(response) {
        console.log(response);
    });

    // limpiar();
}

function ListarConfiguracionGeneral()
{
    link = '../../Modelo/ModeloConfiguracion.php';
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
        $.each(response, function(index, data) {

            if (data.config_id != 7) {

                html +="<div class='col-sm-12'>";
                html +="<label for='"+data.config_variable+"' class='form-label'><b>"+data.config_nombre+"</b></label>";
                html +="<input type='text' class='form-control' id='"+data.config_variable+"' placeholder='"+data.config_valor+"' value='"+data.config_valor+"' required=''>";
                if (data.config_id == 6 ) {
                    html +="<p>Escribe aquí la misma dirección a no ser que quieras que la página de inicio sea distinta que tu directorio de instalación de WordPress.</p>";
                }else if (data.config_id == 2) {
                    html +="<p>En pocas palabras, explica de qué va este sitio</p>";
                }
               
            }else{
                html +="<label for='Cargo' class='form-label'>Cargo</label>";
                html +="<select class='form-select' id='inputPerfilUsser' required=''>";
                if (data.config_valor == "1") {
                    html +="<option value='1' selected>Cliente</option>"; 
                    html +="<option value='2'>Empleado</option>";   
                    html +="<option value='3'>Almacen</option>";   
                    html +="<option value='4'>Administrador</option>"; 
                }else if(data.config_valor == "2"){
                    html +="<option value='1' >Cliente</option>"; 
                    html +="<option value='2' selected>Empleado</option>";   
                    html +="<option value='3'>Almacen</option>";   
                    html +="<option value='4'>Administrador</option>"; 
                }else if(data.config_valor == "3"){
                    html +="<option value='1' >Cliente</option>"; 
                    html +="<option value='2' >Empleado</option>";   
                    html +="<option value='3' selected>Almacen</option>";   
                    html +="<option value='4'>Administrador</option>";
                }else{
                    html +="<option value='1' >Cliente</option>"; 
                    html +="<option value='2' >Empleado</option>";   
                    html +="<option value='3' >Almacen</option>";   
                    html +="<option value='4' selected>Administrador</option>";
                }

                 
                  
                html +="</select>";

            }
            html +="</div>";

        });

        var count = Object.keys(response).length;
			//console.log(count);
			//$("#cantidad").html("<button class='btn btn-success'>Mostrando: "+ count +" unid.</button>");
			
		$("#jsCargaDatos").html(html);
	
	})
	.fail(function(response) {
		console.log(response);
	});
}



function ListarPerfiles()
{
    link = '../../Modelo/ModeloConfiguracion.php';
    $.ajax({
		url: link,
		type: 'POST',
		dataType: 'json',
		data: {
			"js_ListarPerfiles": 1
		},
	}).done(function(response) {
		console.log(response);
		var html = "";
        $.each(response, function(index, data) {
            html +="<div class='col-sm-12'>";
            html +="<label for='"+data.config_variable+"' class='form-label'><b>"+data.config_nombre+"</b></label>";
            html +="<input type='text' class='form-control' id='"+data.config_variable+"' placeholder='"+data.config_valor+"' value='"+data.config_valor+"' required=''>";
            if (data.config_id == 6 ) {
                html +="<p>Escribe aquí la misma dirección a no ser que quieras que la página de inicio sea distinta que tu directorio de instalación de WordPress.</p>";
            }else if (data.config_id == 2) {
                html +="<p>En pocas palabras, explica de qué va este sitio</p>";
            } else {
                
            }
            
            html +="</div>";

        });

        var count = Object.keys(response).length;
			//console.log(count);
			//$("#cantidad").html("<button class='btn btn-success'>Mostrando: "+ count +" unid.</button>");
			
		$("#jsCargaDatos").html(html);
	
	})
	.fail(function(response) {
		console.log(response);
	});
}


