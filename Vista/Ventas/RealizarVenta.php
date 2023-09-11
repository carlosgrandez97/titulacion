<?php
    session_start();
    if(empty($_SESSION['active'])) {

        //header('location: http://localhost/proyecto/');

    }
?>

<!DOCTYPE html>
<html lang="en">
  <?php require_once  '../Estructura/head.php'; ?>
<body class="sb-nav-fixed">
  <?php require_once '../Estructura/BarraSuperior.php'; ?>
  <div id="layoutSidenav">
    <?php require_once '../Estructura/BarraLateral.php'; ?>
    <div id="layoutSidenav_content" class="mt-3">
      <div class="container-fluid bg-light">
        <div class="container-fluid">
          <div class="container-fluid">
            <div class="container-fluid">
              <main>
                <div class="row g-5">
                  <div class="col-md-5 col-lg-4 order-md-last">
                     <!-- CABECERA -->
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                      <span class="text-primary">Datos de venta</span>
                      <span class="badge bg-primary rounded-pill">3</span>
                    </h4>

                    <form class="p-2">
                      <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                          <div>
                            <h6 class="my-0">Subtotal</h6>
                            <!-- <small class="text-muted">Breve descripción</small> -->
                          </div>
                          <span class="text-muted">$12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                          <div>
                            <h6 class="my-0">Impuesto IGV</h6>
                            <!-- <small class="text-muted">Breve descripción</small> -->
                          </div>
                          <span class="text-muted">$8</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between bg-light">
                          <div class="text-success">
                            <h6 class="my-0">Código promocional</h6>
                            <!-- <small>EXAMPLECODE</small> -->
                          </div>
                          <span class="text-success">−$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                          <span>Total </span>
                          <strong>$20</strong>
                        </li>

                      </ul>
                      <div class="row">
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                          <!-- <button type="button" class="btn btn-outline-warning">Cancelar Venta</i></button>
                          <button type="button" class="btn btn-outline-success">Procesar Venta</i></button> -->
                        </div>
                      </div>
                    </form>

                    <!-- DETALLES -->
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                      <span class="text-primary">Datos de venta</span>
                      <span class="badge bg-primary rounded-pill">3</span>
                    </h4>
                    <form class="p-2">
                      <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                          <div>
                            <h6 class="my-0">Subtotal</h6>
                            <!-- <small class="text-muted">Breve descripción</small> -->
                          </div>
                          <span class="text-muted">$12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                          <div>
                            <h6 class="my-0">Impuesto IGV</h6>
                            <!-- <small class="text-muted">Breve descripción</small> -->
                          </div>
                          <span class="text-muted">$8</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between bg-light">
                          <div class="text-success">
                            <h6 class="my-0">Código promocional</h6>
                            <!-- <small>EXAMPLECODE</small> -->
                          </div>
                          <span class="text-success">−$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                          <span>Total </span>
                          <strong>$20</strong>
                        </li>

                      </ul>
                      <div class="row">
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                          <button type="button" class="btn btn-outline-warning">Cancelar Venta</i></button>
                          <button type="button" class="btn btn-outline-success">Procesar Venta</i></button>
                        </div>
                      </div>
                    </form>
                  </div>


                  <?php //  require_once 'http://localhost/proyecto/Vista/Estructura/Modal.php'; ?>
                  <?php require_once '../Estructura/Modal.php'; ?>




                  <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Realizar venta</h4>
                    <button class="btn btn-secondary btn-sm mb-4 rounded-pill" id="btnGuardarZona" name="btnGuardarZona" type="submit" data-bs-toggle="modal" data-bs-target="#mdlBuscarCliente">Cliente <i class="fa-solid fa-plus"></i></button>
                    <button class="btn btn-secondary btn-sm mb-4 rounded-pill" id="btnGuardarZona" name="btnGuardarZona" type="submit" data-bs-toggle="modal" data-bs-target="#mdlBuscaProducto">Producto <i class="fa-solid fa-plus"></i></button>
                    <button class="btn btn-secondary btn-sm mb-4 rounded-pill" id="btnGuardarZona" name="btnGuardarZona" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">Mesa <i class="fa-solid fa-plus"></i></button>
                    <button class="btn btn-secondary btn-sm mb-4 rounded-pill" id="btnGuardarZona" name="btnGuardarZona" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">Pedido <i class="fa-solid fa-plus"></i></button>
                    <button class="btn btn-secondary btn-sm mb-4 rounded-pill" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">Ver local <i class="fa-solid fa-pencil"></i> <i class="fa-solid fa-xmark"></i> </button>
                    <button class="btn btn-secondary btn-sm mb-4 rounded-pill" id="btnGuardarZona" name="btnGuardarZona" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i></button>

                    <!-- <hr class="border border-1 bg-transparent text-dark border border-dark">
                    <h1 class="display-6">Nombre : carlos manuel grandez chota</h1>


                    <hr class="my-4 border border-1 bg-transparent text-dark border border-dark"> -->
                    <!-- <h4 class="mb-3">Mesas Local</h4>
                    <button class="btn btn-secondary btn-md mb-4 " id="btnGuardarZona" name="btnGuardarZona" type="submit" data-bs-toggle="modal" data-bs-target="#mdlAgregarMesa">Añadir Zona</button> -->
                    <div>
                    <table class="table table-striped">
                      <thead >
                        <tr >
                          <td class="border">Nro</td>
                          <td class="border">Producto</td>
                          <td class="border">precio</td>
                          <td class="border">Cantidad</td>
                          <td class="border">TOTAL</td>
                          <td class="border">Acciones</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="border">1</td>
                          <td class="border">MESA #1</td>
                          <td class="border">12.00</td>
                          <td class="border">
                            <input type="number" class=" form-control">
                          </td>
                          <td class="border">12.00</td>
                          <td class="border">
                          <a href=""> <span class="badge rounded-pill bg-warning text-dark"><i class="fa-solid fa-xmark"></i></span></a>
                          </td>
                        </tr>


                        <tr>
                          <td class="border">1</td>
                          <td class="border">MESA #1</td>
                          <td class="border">12.00</td>
                          <td class="border">
                            <input type="number" class=" form-control">
                          </td>
                          <td class="border">12.00</td>
                          <td class="border">
                          <a href=""> <span class="badge rounded-pill bg-warning text-dark"><i class="fa-solid fa-xmark"></i></span></a>
                          </td>
                        </tr>

                        <tr>
                          <td class="border">1</td>
                          <td class="border">MESA #1</td>
                          <td class="border">12.00</td>
                          <td class="border">
                            <input type="number" class=" form-control">
                          </td>
                          <td class="border">12.00</td>
                          <td class="border">
                          <a href=""> <span class="badge rounded-pill bg-warning text-dark"><i class="fa-solid fa-xmark"></i></span></a>
                          </td>
                        </tr>


                        <tr>
                          <td class="border">1</td>
                          <td class="border">MESA #1</td>
                          <td class="border">12.00</td>
                          <td class="border">
                            <input type="number" class=" form-control">
                          </td>
                          <td class="border">12.00</td>
                          <td class="border">
                          <a href=""> <span class="badge rounded-pill bg-warning text-dark"><i class="fa-solid fa-xmark"></i></span></a>
                          </td>
                        </tr>


                        <tr>
                          <td class="border">1</td>
                          <td class="border">MESA #1</td>
                          <td class="border">12.00</td>
                          <td class="border">
                            <input type="number" class=" form-control">
                          </td>
                          <td class="border">12.00</td>
                          <td class="border">
                          <a href=""> <span class="badge rounded-pill bg-warning text-dark"><i class="fa-solid fa-xmark"></i></span></a>
                          </td>
                        </tr>


                      </tbody>
                      <tfoot>
                      <tr >
                          <td class="border">Nro</td>
                          <td class="border">Nombre de la Mesa</td>
                          <td class="border">Accion</td>
                        </tr>
                      </tfoot>
                    </table>
                    </div>
                  </div>


                </div>
              </main>
            </div>
          </div>
        </div>
      </div>
      <?php require_once '../Estructura/Footer.php'; ?>

    </div>
  </div>
  <?php //require_once '../Estructura/Feet.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="../../Assets/js/scripts.js"></script>
  <script src="../../Assets/js/jquery-3.7.0.min.js"></script>
  <script src="../../Assets/js/sweetalert2@11.js"></script>
  <script src="../../Controlador/ControladorVentas.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/gh/AmagiTech/JSLoader/amagiloader.js"></script> -->
  <script src="../../Assets/js/amagiloader.js"></script>
    <script>
    AmagiLoader.show();
    setTimeout(() => {
        AmagiLoader.hide();
    }, 600);
  </script>
</body>
</html>