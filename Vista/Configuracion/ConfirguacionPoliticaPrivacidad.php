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
                    <h4 class="mb-3 text-center">Privacidad</h4>

                    <hr class="my-4">   

                 <div class="container-fluid">
                
                  <p >
                  Como propietario de una web, es posible que tengas que cumplir con las leyes de privacidad nacionales o internacionales. Por ejemplo, es posible que tengas que crear y mostrar una política de privacidad. Si ya tienes una página de política de privacidad, por favor, selecciónala abajo. En caso contrario, crea una. 
                </p>

                <p >
                La nueva página incluirá ayuda y sugerencias para tu política de privacidad. Sin embargo, es tu responsabilidad usar estos recursos correctamente para ofrecer la información que requiera tu política de privacidad y mantener esa información actualizada y precisa.                </p>

                <p>

                Después de establecer tu página de política de privacidad, deberías editarla. También deberías revisar tu política de privacidad de vez en cuando, especialmente después de instalar o actualizar temas o plugins. Podría haber cambios o nueva información sugerida que puedas plantearte añadir a tu política.
                </p>
                 
                <p>
               
                Edita o previsualiza el contenido de tu página de política de privacidad. ¿Necesitas ayuda para crear tu nueva página de la política de privacidad? <a href="">Echa un vistazo a nuestra guía de la política de privacidad</a> con recomendaciones sobre qué contenido incluir, además de políticas sugeridas por tus plugins y tema.
                </p>
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