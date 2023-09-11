var tabla;

Load_init();

//LANZADOR
function Load_init()
{
    //OcultaAletas();
 
    ListarCategoria();
}

/*-------------------------------------------------------------------------------------------------------
VALIDACION DE CONTROLES
-------------------------------------------------------------------------------------------------------*/
function OcultaAletas(){
 console.log('OcultaAletas');
    var validaCatergoriaNombre = document.getElementById("validaCatergoriaNombre"); 
    validaCatergoriaNombre.innerHTML ='<span class="text-danger" class=""></span>';

    var validaCatergoriaDescripcion = document.getElementById("validaCatergoriaDescripcion");
    validaCatergoriaDescripcion.innerHTML ='<span class="text-danger" class=""></span>';


    var validaUnidadNombre = document.getElementById("validaUnidadNombre"); 
    validaUnidadNombre.innerHTML ='<span class="text-danger" class=""></span>';

    var validaUnidadSimbolo = document.getElementById("validaUnidadSimbolo");
    validaUnidadSimbolo.innerHTML ='<span class="text-danger" class=""></span>';
}

function ValidaControles(opcion){
    OcultaAletas();
    switch (opcion){
        case 'CATEGORIA':
                            if(document.getElementById("inputCatergoriaDescripcion").value === "" && document.getElementById("inputCatergoriaNombre").value === ""){
                               
                                var validaCatergoriaDescripcion = document.getElementById("validaCatergoriaDescripcion");
                                validaCatergoriaDescripcion.innerHTML ='<span class="text-danger" class="">La descripcion no debe estar vacio</span>';

                                var validaCatergoriaNombre = document.getElementById("validaCatergoriaNombre");     
                                validaCatergoriaNombre.innerHTML ='<span class="text-danger" class="">El nombre no debe estar vacio</span>';
                                return 1; 
                            }

                            if (document.getElementById("inputCatergoriaNombre").value === ""){

                                var validaCatergoriaNombre = document.getElementById("validaCatergoriaNombre");     
                                validaCatergoriaNombre.innerHTML ='<span class="text-danger" class="">El nombre no debe estar vacio</span>';
                                return 1; 
                        
                            }
                            if(document.getElementById("inputCatergoriaDescripcion").value === ""){
                                var validaCatergoriaDescripcion = document.getElementById("validaCatergoriaDescripcion");
                                // validaCatergoriaDescripcion.className = "form-control border-danger";
                                validaCatergoriaDescripcion.innerHTML ='<span class="text-danger" class="">La descripcion no debe estar vacio</span>';
                                return 1; 
                            }   

            break;
        case 'UNIDAD':
                            console.log('validacion unidad');
                            if(document.getElementById("inputUnidadNombre").value === "" && document.getElementById("inputUnidadSimbolo").value === ""){
                    
                                var validaUnidadNombre = document.getElementById("validaUnidadNombre");
                                validaUnidadNombre.innerHTML ='<span class="text-danger" class="">El nombre no debe estar vacio</span>';

                                var validaUnidadSimbolo = document.getElementById("validaUnidadSimbolo");     
                                validaUnidadSimbolo.innerHTML ='<span class="text-danger" class="">La descripcion debe estar vacio</span>';
                                return 1; 
                            }

                            if (document.getElementById("inputUnidadNombre").value === ""){
                                var validaUnidadNombre = document.getElementById("validaUnidadNombre");
                                validaUnidadNombre.innerHTML ='<span class="text-danger" class="">El nombre no debe estar vacio</span>';
                                return 1; 
                            }
                            if (document.getElementById("inputUnidadSimbolo").value === ""){
                                var validaUnidadSimbolo = document.getElementById("validaUnidadSimbolo");
                                validaUnidadSimbolo.innerHTML ='<span class="text-danger" class="">La descripcion no debe estar vacio</span>';
                                return 1; 
                            }
            break;
        case 'ZONA':
                            console.log('zona');
                            if(document.getElementById("inputZonaNombre").value === ""){
                    
                                var validaUnidadNombre = document.getElementById("validaZonaNombre");
                                validaZonaNombre.innerHTML ='<span class="text-danger" class="">El nombre no debe estar vacio</span>';

                                return 1; 
                            }
            break;
    }
    
}

/*-------------------------------------------------------------------------------------------------------
GUARDAR
-------------------------------------------------------------------------------------------------------*/
function GuardarCategoria(e)
{
    e.preventDefault(); 

    var nRespuesta = ValidaControles('CATEGORIA');

    if(nRespuesta === 1){
       
    }else {

   
    
    inputCatergoriaNombre          = document.getElementById("inputCatergoriaNombre").value;
    inputCatergoriaDescripcion     = document.getElementById("inputCatergoriaDescripcion").value;

    link = '../../Modelo/ModeloConfiguracionSecundario.php';
    
    $.ajax({
        url     : link,//"../ajax/articulo.php?op=guardaryeditar",
        type    : "POST",
        dataType: 'json',
        data    : {
            'inputCatergoriaNombre'       : inputCatergoriaNombre,
            'inputCatergoriaDescripcion'  : inputCatergoriaDescripcion,
			"js_GuardarCategoria"   : 1
        },
    })
    .done(function(response) {
        console.log(response);

        if(response == "OK"){
            Swal.fire({
                icon: 'success',
                title: 'Correcto',
                text: 'Datos Ingresado correctamente!'
              }).then(function () {
               window.location.href = "http://localhost/proyecto/Vista/Configuracion/ConfiguracionSecundario.php"; 
            })

        }else{
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Algo salio mal!',
              })

           
        }
        ListarConfiguracionGeneral();
    }).fail(function(response) {
        console.log(response);
    });

    // limpiar();
    }
}

function GuardarUnidades(e)
{
    e.preventDefault(); 
    console.log('example');
    var nRespuesta = ValidaControles('UNIDAD');

    if(nRespuesta !== 1){
      
    inputUnidadNombre      = document.getElementById("inputUnidadNombre").value;
    inputUnidadSimbolo     = document.getElementById("inputUnidadSimbolo").value;

    link = '../../Modelo/ModeloConfiguracionSecundario.php';
    
    $.ajax({
        url     : link,//"../ajax/articulo.php?op=guardaryeditar",
        type    : "POST",
        dataType: 'json',
        data    : {
            'inputUnidadNombre'     : inputUnidadNombre,
            'inputUnidadSimbolo'    : inputUnidadSimbolo,
			"js_GuardarUnidades"   : 1
        },
    })
    .done(function(response) {
        console.log(response);

        if(response == "OK"){
            Swal.fire({
                icon: 'success',
                title: 'Correcto',
                text: 'Datos Ingresado correctamente!'
              }).then(function () {
               window.location.href = "http://localhost/proyecto/Vista/Configuracion/ConfiguracionSecundario.php"; 
            })

        }else{
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Algo salio mal!',
              })

           
        }
        //ListarConfiguracionGeneral();
    }).fail(function(response) {
        console.log(response);
    });

    // limpiar();
    }
}

function GuardarZona(e)
{
    e.preventDefault(); 
    var nRespuesta = ValidaControles('ZONA');

    if(nRespuesta !== 1){
      
    inputZonaNombre      = document.getElementById("inputZonaNombre").value;

    link = '../../Modelo/ModeloConfiguracionSecundario.php';
    
    $.ajax({
        url     : link,//"../ajax/articulo.php?op=guardaryeditar",
        type    : "POST",
        dataType: 'json',
        data    : {
            'inputZonaNombre': inputZonaNombre,
			"js_GuardarZona"   : 1
        },
    })
    .done(function(response) {
        console.log(response);

        if(response == "OK"){
            Swal.fire({
                icon: 'success',
                title: 'Correcto',
                text: 'Datos Ingresado correctamente!'
              }).then(function () {
               window.location.href = "http://localhost/proyecto/Vista/Configuracion/ConfiguracionSecundario.php"; 
            })

        }else{
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Algo salio mal!',
              })

           
        }
        //ListarConfiguracionGeneral();
    }).fail(function(response) {
        console.log(response);
    });

    // limpiar();
    }
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
/*-------------------------------------------------------------------------------------------------------
LISTAR
-------------------------------------------------------------------------------------------------------*/

function ListarCategoria()
{
    link = '../../Modelo/ModeloConfiguracionSecundario.php';
    $.ajax({
		url: link,
		type: 'POST',
		dataType: 'json',
		data: {
			"js_ListarCategoria": 1
		},
	}).done(function(response) {
		console.log(response);
		var html = "";
        $.each(response, function(index, data) {
            html +="<tr>";
            html +=     "<td>"+data.cat_id+"</td>";
            html +=     "<td>"+data.cat_nombres+"</td>";
            html +=     "<td>"+data.cat_descripcion+"</td>";
            html +=     "<td>"
            html +=         "<div class='btn-group btn-group-sm' role='group' aria-label='Basic example'>";
            html +=             "<button type='button' onclick='ObtenerCategoria("+data.cat_id+")' class='btn btn-outline-secondary'><i class='fa-solid fa-pencil'></i></button>";
            html +=             "<button id='btnEliminarCategoria' onclick='EliminarCategoria("+data.cat_id+")' type='button' class='btn btn-outline-secondary';><i class='fa-solid fa-xmark'></button>";
            html +=         "</div>";
            html +=     "</td>";
            html +="</tr>";

        });

        var count = Object.keys(response).length;
			//console.log(count);
			//$("#cantidad").html("<button class='btn btn-success'>Mostrando: "+ count +" unid.</button>");
			
		$("#tblCategoria").html(html);
	
	})
	.fail(function(response) {
		
		console.log(response);
	});
}

/*-------------------------------------------------------------------------------------------------------
ELIMINAR
-------------------------------------------------------------------------------------------------------*/

function EliminarCategoria(cat_id){
    Swal.fire({
        icon: 'warning',
        title: '¿Estás seguro de eliminar este registro?',
        showConfirmButton: true,
        confirmButtonText: 'ELIMINAR',
        confirmButtonColor: '#3085d6',
        showCancelButton: true,
        cancelButtonText: 'CANCELAR',
        cancelButtonColor: '#d33',
        buttonsStyling: true,
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url     : link,
                type    : "POST",
                dataType: 'json',
                data    : {
                    'cat_id'                    : cat_id,
                    "js_EliminarCategoria"      : 1
                },                
                success: function( data ) {
                    if(data == "OK"){
                        Swal.fire({
                            icon: 'success',
                            title: 'Correcto',
                            text: 'Datos Ingresado correctamente!'
                          }).then(function () {
                           window.location.href = "http://localhost/proyecto/Vista/Configuracion/ConfiguracionSecundario.php"; 
                        })
            
                    }else{
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Algo salio mal!',
                          })
            
                       
                    }
                }
            });
        }
    })

}


/*-------------------------------------------------------------------------------------------------------
PASAR A MODAL
-------------------------------------------------------------------------------------------------------*/
function ObtenerCategoria(cat_id){
    $.ajax({
		url: link,
		type: 'POST',
		dataType: 'json',
		data: {
            "cat_id"                : cat_id,
			"js_ObtenerCategoria"   : 1
		},
	}).done(function(response) {
        console.log(response);
        $('#inputCatId').val(response.cat_id);
        $('#inputUnidadNombre').val(response.cat_nombres);
        $('#inputUnidadSimbolo').val(response.cat_descripcion);
        $('#mdlActualizarCategoria').modal('show').delay(30000).fadeOut('fast');
    })

}
