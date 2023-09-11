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
                
                  <div class="col-md-12 col-lg-12">
                    <h4 class="mb-3 text-center" >Ajustes general de sistema</h4>
                    <!-- <p>Elige la estructura de enlaces permanentes de tu web. Incluir la etiqueta %postname% hace que los enlaces sean más fáciles de comprender, y puede ayudar a que tus entradas posicionen mejor en los motores de búsqueda.</p>                      -->

                    <hr class="my-4">   
                    <h4 class="mb-3">Detalles</h4>                  
                    <button class="btn btn-secondary btn-sm mb-4 rounded-pill" id="btnGuardarZona" name="btnGuardarZona" type="submit" data-bs-toggle="modal" data-bs-target="#mdlPerfil" disabled>Perfil <i class="fa-solid fa-plus"></i></button>
                    <button class="btn btn-secondary btn-sm mb-4 rounded-pill" id="btnGuardarZona" name="btnGuardarZona" type="submit" data-bs-toggle="modal" data-bs-target="#mdlNotificacion" disabled>Notificacion <i class="fa-solid fa-plus"></i></button>
                    <button class="btn btn-secondary btn-sm mb-4 rounded-pill" id="btnGuardarZona" name="btnGuardarZona" type="submit" data-bs-toggle="modal" data-bs-target="#mdlCategoria">Categoria <i class="fa-solid fa-plus"></i></button>
                    <button class="btn btn-secondary btn-sm mb-4 rounded-pill" id="btnGuardarZona" name="btnGuardarZona" type="submit" data-bs-toggle="modal" data-bs-target="#mdlUnidad">Unidad <i class="fa-solid fa-plus"></i></button>
                    <button class="btn btn-secondary btn-sm mb-4 rounded-pill" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal"> Zona <i class="fa-solid fa-pencil"></i> <i class="fa-solid fa-xmark"></i> </button>
                    <button class="btn btn-secondary btn-sm mb-4 rounded-pill" id="btnGuardarZona" name="btnGuardarZona" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus"></i></button>

                    <nav>
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Categoria</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Unidad</button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Zona</button>
                      </div>
                    </nav>


                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <td>Nro</td>
                              <td>Nombre</td>
                              <td>Descripcion</td>
                              <td>Accion</td>

                            </tr>
                          </thead>
                          <tbody id="tblCategoria">

                          </tbody>
                          <thead>
                            <tr>
                              <td>Nro</td>
                              <td>Nombre</td>
                              <td>Descripcion</td>
                              <td>Accion</td>
                            </tr>
                          </thead>

                        </table>
                      </div>
                      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">.2</div>
                      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">3</div>
                    </div>

                 
                    


















                    
                    <?php require_once '../Estructura/Modal.php'; ?>
                    
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
  <script src="http://localhost/proyecto/Controlador/ControladorConfiguracionSecundario.js"></script>
  <script src="../../Assets/js/amagiloader.js"></script>
    <script>
    AmagiLoader.show();
    setTimeout(() => {
        AmagiLoader.hide();
    }, 600);
  </script>
</body>
</html>