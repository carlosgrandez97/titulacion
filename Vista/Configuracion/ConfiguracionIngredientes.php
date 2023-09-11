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
                    <h4 class="mb-3">Ingredientes</h4>
                    <p>Elige la estructura de enlaces permanentes de tu web.</p>                     

                    <hr class="my-4">   

                    <form class="needs-validation" name="frmIngredienteAdm" id="frmIngredienteAdm" novalidate="">
                      <div class="row g-3">
                        <div class="col-sm-12" >
                          <label for="inputDescripcionIngrediente" class="form-label"><b>Descripcion</b></label>
                          <!-- <span class="input-group-text">@</span>ss -->
                          <input type="text" class="form-control" id="inputDescripcionIngrediente" name="inputDescripcionIngrediente" placeholder="Ingresar dato" value="" required="">
                        </div>

                        <div class="col-sm-12">
                          <label for="inputPrecioCompra" class="form-label"><b>precio compra</b></label>
                          <!-- <span class="input-group-text">@</span>ss -->
                          <input type="number" class="form-control" id="inputPrecioCompra" name="inputPrecioCompra" placeholder="Ingresar dato" value="" required="">
                         
                        </div>

                        <div class="col-md-12">
                          <label for="optionTpoMedicion" class="form-label"><b>Tipo de medicion</b></label>
                          <select class="form-select" id="optionTpoMedicion" required="">                            
                          </select>
                        </div>

                      <hr class="my-4">                        
                      </div>                    
                      <button class="w-100 btn btn-primary btn-lg" id="c" name="btnGuardaringrediente"  type="submit">Guardar Datos</button>
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
  <script src="http://localhost/proyecto/Controlador/ControladorIngrediente.js"></script>
  <script src="../../Assets/js/amagiloader.js"></script>
    <script>
    AmagiLoader.show();
    setTimeout(() => {
        AmagiLoader.hide();
    }, 600);
  </script>
</body>
</html>