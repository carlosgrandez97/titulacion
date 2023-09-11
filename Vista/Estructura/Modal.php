<!--------------------------------------------------------------------------------------------------
    MODAL PARA AGREGAR LA ZONA 
---------------------------------------------------------------------------------------------------->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Añador Zona</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form >  
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="inputZonaNombre" class="form-label">Nombre de la Zona*</label>
                            <input type="text" class="form-control" id="inputZonaNombre" placeholder="" value="" required="">
                            <div id="validaZonaNombre"></div>    
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="btnGuardarUnidad" onclick="GuardarZona(event);"  >Añadir Zona</button>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------------------------------------------------
    MODAL PARA AGREGAR LA MESA
---------------------------------------------------------------------------------------------------->
<div class="modal fade" id="mdlAgregarMesa" tabindex="-1" aria-labelledby="mdlAgregarMesa" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mdlAgregarMesa">Añador Mesa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" name="frmProductoAdm" id="frmProductoAdm" novalidate="">  
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Nombre de la Mesa*</label>
                            <!-- <span class="input-group-text">@</span>ss -->
                            <input type="text" class="form-control" id="inputNombrePrincipal" placeholder="" value="" required="">
                        </div>
                    </div>
                    <!-- <button class="w-100 btn btn-primary btn-lg" id="btnGuardarProducto" name="btnGuardarProducto"  type="submit">Guardar Datos</button> -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>


<!--------------------------------------------------------------------------------------------------
    BUSCAR CLIENTES PARA RALIZAR VENTA
---------------------------------------------------------------------------------------------------->
<div class="modal fade" id="mdlBuscarCliente" tabindex="-1" aria-labelledby="mdlBuscarCliente" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mdlBuscarCliente">Selecionar cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="needs-validation" name="frmProductoAdm" id="frmProductoAdm" novalidate="">  
                    <div class="row">
                        <!-- <div class="col-md-4">
                                <button type="button" class="btn btn-primary">Guardar</button>
                        </div> -->
                        <div class="col-md-12">

                        <input type="text" class="form-control" id="inputBuscarClienteParaVenta" onclick="ListarClientesVenta();">
                        </div>
                       
                        
                    </div>
               
                </form>
                <table class="table mt-4">
                    <thead>
                        <tr>
                            <td>Item</td>
                            <td>Clientes</td>
                            <td>Accion</td>
                        </tr>
                    </thead>
                    <tbody id="tbl_MuestraResultadoCliente">
                        <!-- <tr>
                            <td>1</td>
                            <td>Carlos Manuek Grandez CHota</td>
                            <td> <a href=""> <span class="badge rounded-pill bg-primary text-light"><i class="fa-solid fa-plus"></span></a></td>
                        </tr> -->
                        
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> -->
                <!-- <button type="button" class="btn btn-primary">Añadir cliente</button> -->
                <a href="http://localhost/proyecto/Vista/Clientes/ClientesAdm.php" class=" btn btn-secondary" >Añadir cliente</a>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------------------------------------------------
    BUSCAR PRODUCTOS PARA RALIZAR VENTA
---------------------------------------------------------------------------------------------------->
<div class="modal fade" id="mdlBuscaProducto" tabindex="-1" aria-labelledby="mdlBuscaProducto" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mdlBuscaProducto">Selecionar Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="needs-validation" name="frmProductoAdm" id="frmProductoAdm" novalidate="">  
                    <div class="row">
                        <!-- <div class="col-md-4">
                                <button type="button" class="btn btn-primary">Guardar</button>
                        </div> -->
                        <div class="col-md-12">

                        <input type="text" class="form-control" id="inputBuscarProductoParaVenta" onclick="BuscarProducto();">
                        </div>
                       
                        
                    </div>
               
                </form>
                <table class="table mt-4">
                    <thead>
                        <tr>
                            <td>Item</td>
                            <td>Clientes</td>
                            <td>Accion</td>
                        </tr>
                    </thead>
                    <tbody id="tbl_MuestraResultadoProducto">
                        <!-- <tr>
                            <td>1</td>
                            <td>Carlos Manuek Grandez CHota</td>
                            <td> <a href=""> <span class="badge rounded-pill bg-primary text-light"><i class="fa-solid fa-plus"></span></a></td>
                        </tr> -->
                        
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> -->
                <!-- <button type="button" class="btn btn-primary">Añadir cliente</button> -->
                <a href="http://localhost/proyecto/Vista/Almacen/ProductoAdm.php" class=" btn btn-secondary" >Añadir producto</a>
            </div>
        </div>
    </div>
</div>

<!--------------------------------------------------------------------------------------------------
MODAL ADMINISTRACION PERFIL
---------------------------------------------------------------------------------------------------->
<div class="modal fade" id="mdlPerfil" tabindex="-1" aria-labelledby="mdlPerfil" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mdlPerfil">Ajuste de perfil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="needs-validation" name="frmProductoAdm" id="frmProductoAdm" novalidate="">  
                    <div class="row">
                        <!-- <div class="col-md-4">
                                <button type="button" class="btn btn-primary">Guardar</button>
                        </div> -->
                        <div class="col-md-12">

                        <input type="text" class="form-control" id="inputBuscarProductoParaVenta" onclick="BuscarProducto();">
                        </div>
                       
                        
                    </div>
               
                </form>
                <table class="table mt-4">
                    <thead>
                        <tr>
                            <td>Item</td>
                            <td>Clientes</td>
                            <td>Accion</td>
                        </tr>
                    </thead>
                    <tbody id="tbl_MuestraResultadoProducto">
                        <!-- <tr>
                            <td>1</td>
                            <td>Carlos Manuek Grandez CHota</td>
                            <td> <a href=""> <span class="badge rounded-pill bg-primary text-light"><i class="fa-solid fa-plus"></span></a></td>
                        </tr> -->
                        
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> -->
                <!-- <button type="button" class="btn btn-primary">Añadir cliente</button> -->
                <a href="http://localhost/proyecto/Vista/Almacen/ProductoAdm.php" class=" btn btn-secondary" >Añadir producto</a>
            </div>
        </div>
    </div>
</div>


<!--------------------------------------------------------------------------------------------------
MODAL ADMINISTRACION CATEGORIA
---------------------------------------------------------------------------------------------------->
<div class="modal fade" id="mdlCategoria" tabindex="-1" aria-labelledby="mdlCategoria" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mdlCategoria">Ajuste de Categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="needs-validation" name="frmCategoriaAdm" id="frmCategoriaAdm" novalidate="">  
                    <div class="row">
                        <div class="col-md-12">
                            <label  class="bold"><b>Nombre</b></label>
                            <input id="inputCatergoriaNombre" type="text" class="form-control" placeholder="ingrese dato">
                            <div id="validaCatergoriaNombre"></div>                            
                            <br>
                            <label  class="bold"><b>Decripcion</b></label>
                            <input id="inputCatergoriaDescripcion"  type="text" class="form-control" placeholder="ingrese dato">
                            <div id="validaCatergoriaDescripcion"></div>
                        </div>
                    </div>               
                </form>
                <!-- <table class="table mt-4">
                    <thead>
                        <tr>
                            <td>Item</td>
                            <td>Clientes</td>
                            <td>Accion</td>
                        </tr>
                    </thead>
                    <tbody id="tbl_MuestraResultadoProducto">
                    </tbody> -->
                </table>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> -->
                <!-- <button type="button" class="btn btn-primary">Añadir cliente</button> -->
                <!-- <a class=" btn btn-secondary" ></a> -->
                <button type="button" class="btn btn-secondary" id="btnGuardarCategoria" onclick="GuardarCategoria(event);"  >Añadir producto</button>
            </div>
        </div>
    </div>
</div>


<!--------------------------------------------------------------------------------------------------
MODAL ADMINISTRACION UNIDAD
---------------------------------------------------------------------------------------------------->
<div class="modal fade" id="mdlUnidad" tabindex="-1" aria-labelledby="mdlUnidad" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mdlUnidad">Ajuste de unidad</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form  >  
                    <div class="row">
                        <div class="col-md-12">
                            <label  class="bold"><b>Nombre</b></label>
                            <input id="inputUnidadNombre" type="text" class="form-control" placeholder="ingrese dato">
                            <div id="validaUnidadNombre"></div>                            
                            <br>
                            <label  class="bold"><b>Simbolo</b></label>
                            <input id="inputUnidadSimbolo"  type="text" class="form-control" placeholder="ingrese dato">
                            <div id="validaUnidadSimbolo"></div>
                        </div>
                    </div>               
                </form>
                <!-- <table class="table mt-4">
                    <thead>
                        <tr>
                            <td>Item</td>
                            <td>Clientes</td>
                            <td>Accion</td>
                        </tr>
                    </thead>
                    <tbody id="tbl_MuestraResultadoProducto">
                    </tbody> -->
                </table>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> -->
                <!-- <button type="button" class="btn btn-primary">Añadir cliente</button> -->
                <!-- <a class=" btn btn-secondary" ></a> -->
                <button type="button" class="btn btn-secondary" id="btnGuardarUnidad" onclick="GuardarUnidades(event);"  >Añadir Unidad</button>
            </div>
        </div>
    </div>
</div>


<!--------------------------------------------------------------------------------------------------
EDITAR CATEGORIA
---------------------------------------------------------------------------------------------------->
<div class="modal fade" id="mdlActualizarCategoria" tabindex="-1" aria-labelledby="mdlActualizarCategoria" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mdlActualizarCategoria">Editar Categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form  >  
                    <div class="row">
                        <div class="col-md-12">
                            <label  class="bold"><b>Nombre</b></label>
                            <input type="hiden" id="inputCatId">
                            <input id="inputUnidadNombre" type="text" class="form-control" placeholder="ingrese dato">
                            <div id="validaUnidadNombre"></div>                            
                            <br>
                            <label  class="bold"><b>Simbolo</b></label>
                            <input id="inputUnidadSimbolo"  type="text" class="form-control" placeholder="ingrese dato">
                            <div id="validaUnidadSimbolo"></div>
                        </div>
                    </div>               
                </form>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="btnGuardarUnidad" onclick="GuardarUnidades(event);"  >Actualizar Unidad</button>
            </div>
        </div>
    </div>
</div>
