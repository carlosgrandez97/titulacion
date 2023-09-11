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
                  <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Producto</h4>
                    <hr class="my-4 border border-1 bg-transparent text-dark border border-dark">
                    <form class="needs-validation" name="frmProductoAdm" id="frmProductoAdm" novalidate="">
                      <div class="row g-3">
                        <div class="col-sm-6">
                          <label for="firstName" class="form-label">Nombre principal</label>
                          <!-- <span class="input-group-text">@</span>ss -->
                          <input type="text" class="form-control" id="inputNombrePrincipal" placeholder="" value="" required="">
                        </div>

                        <div class="col-sm-6">
                          <label for="inputSegNombres" class="form-label">Descripcion</label>
                          <input type="text" class="form-control" id="inputDescipcion" placeholder="" value="" required="">
                        </div>

                        <div class="col-sm-6">
                          <label for="lastName" class="form-label">Precio</label>
                          <input type="number" class="form-control" id="inputPrecio" placeholder="" value="" required="">
                        </div>

                    

                        

                        <div class="col-md-5">
                          <label for="country" class="form-label">Categoria</label>
                          <select class="form-select" id="optionCategoria" required="">
                            
                          </select>
                        </div>
                        <hr class="my-4">                        
                      </div>                    
                      <button class="w-100 btn btn-primary btn-lg" id="btnGuardarProducto" name="btnGuardarProducto"  type="submit">Guardar Datos</button>
                    </form>
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