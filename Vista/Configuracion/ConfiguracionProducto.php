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
                
                  <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Formulario de registro</h4>
                    <p>Elige la estructura de enlaces permanentes de tu web.</p>                     

                    <hr class="my-4">   

                    <form class="needs-validation" name="frmCategoriaAdm" id="frmCategoriaAdm" novalidate="">
                      <div class="row g-3">
                        <div class="col-sm-12" >
                          <label for="inputCatProducto" class="form-label"><b>Categoria producto</b></label>
                          <!-- <span class="input-group-text">@</span>ss -->
                          <input type="text" class="form-control" id="inputCatProducto" name="inputCatProducto" placeholder="Ingresar dato" value="" required="">
                        </div>

                        <div class="col-sm-12">
                          <label for="inputDescripcion" class="form-label"><b>Descripcion</b></label>
                          <!-- <span class="input-group-text">@</span>ss -->
                          <input type="text" class="form-control" id="inputDescripcion" name="inputDescripcion" placeholder="Ingresar dato" value="" required="">
                         
                        </div>



                      <hr class="my-4">                        
                      </div>                    
                      <button class="w-100 btn btn-primary btn-lg" id="c" name="btnGuardarCategoria"  type="submit">Guardar Datos</button>
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
  <script src="http://localhost/proyecto/Controlador/ControladorCategoriaProducto.js"></script>
  <script src="../../Assets/js/amagiloader.js"></script>
    <script>
    AmagiLoader.show();
    setTimeout(() => {
        AmagiLoader.hide();
    }, 600);
  </script>
</body>
</html>