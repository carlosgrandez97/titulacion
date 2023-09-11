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
                    <h4 class="mb-3">Formulario de configuracion general</h4>
                    <p>Elige la estructura de enlaces permanentes de tu web. Incluir la etiqueta %postname% hace que los enlaces sean más fáciles de comprender, y puede ayudar a que tus entradas posicionen mejor en los motores de búsqueda.</p>                     

                    <hr class="my-4">   

                    <form class="needs-validation" name="frmConfiguracionAdm" id="frmConfiguracionAdm" novalidate="">
                      <div class="row g-3">
                        <div id="jsCargaDatos">

                        </div>

                      <hr class="my-4">                        
                      </div>                    
                      <button class="w-100 btn btn-primary btn-lg" id="btnGuardarConfiguracion" name="btnGuardarConfiguracion"  type="submit">Guardar Datos</button>
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
  <script src="http://localhost/proyecto/Controlador/ControladorConfiguracionGeneral.js"></script>
  <script src="../../Assets/js/amagiloader.js"></script>
    <script>
    AmagiLoader.show();
    setTimeout(() => {
        AmagiLoader.hide();
    }, 600);
  </script>
</body>
</html>