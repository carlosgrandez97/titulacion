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
                    <h4 class="mb-3">Clientes</h4>
                    <hr class="my-4 border border-1 bg-transparent text-dark border border-dark">

                    <form class="needs-validation" name="frmEmpleadoAdm" id="frmEmpleadoAdm" novalidate="">
                      <div class="row g-3">
                        <div class="col-sm-6">
                          <label for="firstName" class="form-label">Primer Nombre</label>
                          <!-- <span class="input-group-text">@</span>ss -->
                          <input type="text" class="form-control" id="inputPrimerNombre" placeholder="" value="" required="">
                        </div>

                        <div class="col-sm-6">
                          <label for="inputSegNombres" class="form-label">Segundos Nombres</label>
                          <input type="text" class="form-control" id="inputSegundoNombre" placeholder="" value="" required="">
                        </div>

                        <div class="col-sm-6">
                          <label for="lastName" class="form-label">Apellido Paterno</label>
                          <input type="text" class="form-control" id="inputApellidoPat" placeholder="" value="" required="">
                        </div>

                        <div class="col-sm-6">
                          <label for="lastName" class="form-label">Apellido Materno</label>
                          <input type="text" class="form-control" id="inputApellidoMat" placeholder="" value="" required="">
                        </div>

                        <div class="col-sm-4">
                          <label for="lastName" class="form-label">Fecha Nacimiento</label>
                          <input type="date" class="form-control" id="inputNacimiento" placeholder="" value="" required="">
                        </div>

                        <div class="col-sm-8">
                          <label for="lastName" class="form-label">Direccion</label>
                          <input type="text" class="form-control" id="inputDireccion" placeholder="" value="" required="">
                        </div>

                        <div class="col-sm-6">
                          <label for="lastName" class="form-label">Telefono</label>
                          <input type="text" class="form-control" id="inputTelefono" placeholder="" value="" required="">
                        </div>

                        <div class="col-sm-6">
                          <label for="lastName" class="form-label">Celular</label>
                          <input type="text" class="form-control" id="inputCelular" placeholder="" value="" required="">
                        </div>

                        <div class="col-md-5">
                          <label for="country" class="form-label">Personería</label>
                          <select class="form-select" id="optionPersoneria" required="">
                            <option value="">Elige...</option>
                            <option>Persona Natural</option>
                            <option>Persona Juridica</option>
                            <option>Otros</option>
                          </select>
                        </div>

                        <div class="col-sm-7">
                          <label for="inputDOI" class="form-label">DOI</label>
                          <input type="text" class="form-control" id="inputDOI" placeholder="" value="" required="">
                        </div>

                        <div class="col-sm-12">
                          <label for="inputEmail" class="form-label">Correo Electrónico</label>
                          <input type="text" class="form-control" id="inputEmail" placeholder="example@gmail.com" value="" required="">
                        </div>

                        <hr class="my-4">

                        <div class="col-md-12">
                          <label for="country" class="form-label">Perfil</label>
                          <select class="form-select" id="optionCargo" required="" disabled>
                            <option value="">-- Seleccione un perfil -- </option>
                            <option value="1" selected>Cliente</option>
                            <option>Empleado</option>
                            <option>Almacen</option>
                            <option>Administrador</option>
                          </select>
                        </div>

                        <div class="col-md-8">
                          <label for="zip" class="form-label">Usuario</label>
                          <input type="text" class="form-control" id="inputUsuario" placeholder="" required="">
                        </div>

                        <div class="col-md-4">
                          <label for="zip" class="form-label">Contraseña</label>
                          <input type="password" class="form-control" id="inputPassword" placeholder="" required="">
                        </div>
                      </div>
                      <hr class="my-3">                      
                      <button class="w-100 btn btn-primary btn-lg" id="btnGuardarClientes" name="btnGurdarEmpleado"  type="submit">Guardar datos</button>
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
  <script src="../../Controlador/ControladorClientes.js"></script>
  <script src="../../Assets/js/amagiloader.js"></script>
    <script>
    AmagiLoader.show();
    setTimeout(() => {
        AmagiLoader.hide();
    }, 600);
  </script>
</body>
</html>