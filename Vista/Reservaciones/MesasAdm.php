<?php 
    session_start();
    if(empty($_SESSION['active'])) {

        header('location: http://localhost/proyecto/');

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
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                      <span class="text-primary">Estadísticas</span>
                      <span class="badge bg-primary rounded-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3">
                      <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                          <h6 class="my-0">Nombre del producto</h6>
                          <small class="text-muted">Breve descripción</small>
                        </div>
                        <span class="text-muted">$12</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                          <h6 class="my-0">Segundo producto</h6>
                          <small class="text-muted">Breve descripción</small>
                        </div>
                        <span class="text-muted">$8</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                          <h6 class="my-0">Tercer elemento</h6>
                          <small class="text-muted">Breve descripción</small>
                        </div>
                        <span class="text-muted">$5</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                          <h6 class="my-0">Código promocional</h6>
                          <small>EXAMPLECODE</small>
                        </div>
                        <span class="text-success">−$5</span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$20</strong>
                      </li>
                    </ul>
                    <form class="card p-2">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Código Promo">
                        <button type="submit" class="btn btn-secondary">Aplicar</button>
                      </div>
                    </form>
                  </div>
       
                  <?php //  require_once 'http://localhost/proyecto/Vista/Estructura/Modal.php'; ?>
                  <?php require_once '../Estructura/Modal.php'; ?>

                  <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Zonas Local</h4>                  
                    <button class="btn btn-secondary btn-sm mb-4 rounded-pill" id="btnGuardarZona" name="btnGuardarZona" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">Añadir Zona</button>
                    <button class="btn btn-secondary btn-sm mb-4 rounded-pill" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">Añadir Zona <i class="fa-solid fa-pencil"></i> <i class="fa-solid fa-xmark"></i> </button>
                    <button class="btn btn-secondary btn-sm mb-4 rounded-pill" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">Añadir Zona <i class="fa-solid fa-pencil"></i> <i class="fa-solid fa-xmark"></i> </button>
                    <button class="btn btn-secondary btn-sm mb-4 rounded-pill" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">Añadir Zona <i class="fa-solid fa-pencil"></i> <i class="fa-solid fa-xmark"></i> </button>
                    <button class="btn btn-secondary btn-sm mb-4 rounded-pill" id="btnGuardarZona" name="btnGuardarZona" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i></button>
                    <br>

                    <h4 class="mb-3">Mesas Local</h4>
                    <button class="btn btn-secondary btn-md mb-4 " id="btnGuardarZona" name="btnGuardarZona" type="submit" data-bs-toggle="modal" data-bs-target="#mdlAgregarMesa">Añadir Zona</button>
                    <div>
                    <table class="table table-striped">
                      <thead >
                        <tr >
                          <td class="border">Nro</td>
                          <td class="border">Nombre de la Mesa</td>
                          <td class="border">Accion</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="border">1</td>
                          <td class="border">MESA #1</td>
                          <td class="border">
                              <div class="btn-group" role="group" aria-label="Basic outlined example">
                                <button type="button" class="btn btn-outline-secondary"><i class="fa-solid fa-xmark"></i></button>
                                <button type="button" class="btn btn-outline-secondary"><i class="fa-solid fa-pencil"></i></button>
                              </div>
                          </td>
                        </tr>
                        <tr>
                        <tr>
                          <td class="border">1</td>
                          <td class="border">MESA #1</td>
                          <td class="border">
                              <div class="btn-group" role="group" aria-label="Basic outlined example">
                                <button type="button" class="btn btn-outline-secondary"><i class="fa-solid fa-xmark"></i></button>
                                <button type="button" class="btn btn-outline-secondary"><i class="fa-solid fa-pencil"></i></button>
                              </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="border">1</td>
                          <td class="border">MESA #1</td>
                          <td class="border">
                              <div class="btn-group" role="group" aria-label="Basic outlined example">
                                <button type="button" class="btn btn-outline-secondary"><i class="fa-solid fa-xmark"></i></button>
                                <button type="button" class="btn btn-outline-secondary"><i class="fa-solid fa-pencil"></i></button>
                              </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="border">1</td>
                          <td class="border">MESA #1</td>
                          <td class="border">
                              <div class="btn-group" role="group" aria-label="Basic outlined example">
                                <button type="button" class="btn btn-outline-secondary"><i class="fa-solid fa-xmark"></i></button>
                                <button type="button" class="btn btn-outline-secondary"><i class="fa-solid fa-pencil"></i></button>
                              </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="border">1</td>
                          <td class="border">MESA #1</td>
                          <td class="border">
                              <div class="btn-group" role="group" aria-label="Basic outlined example">
                                <button type="button" class="btn btn-outline-secondary"><i class="fa-solid fa-xmark"></i></button>
                                <button type="button" class="btn btn-outline-secondary"><i class="fa-solid fa-pencil"></i></button>
                              </div>
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
  <script src="../../Controlador/ControladorProducto.js"></script>
  <script src="../../Assets/js/amagiloader.js"></script>
    <script>
    AmagiLoader.show();
    setTimeout(() => {
        AmagiLoader.hide();
    }, 600);
  </script>
</body>
</html>