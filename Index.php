<?php

// require 'Libreria/Base/Conexion.php';

// //INICIALIZA LA VARIABLE SESION
// session_start();

// if(!empty($_SESSION['active'])) {
//     //VERIFICA SI NO EXISTE ALGUNA SESION ABIERTA
//     header('Location: http://localhost/proyecto/');  
// }
// else{
  
//     if (!empty($_POST)) {
//       if(empty($_POST['inputUsuario']) || empty($_POST['inputPassword'])) {
//       }else{
  
//         $inputUsuario = $_POST['inputUsuario'];
//         $inputPassword = $_POST['inputPassword'];
  
//         //VERIFICA QUE EXISTA SOLO UN USUARIO 
//         $query = "  SELECT IFNULL(count(*), 0) as Cantidad FROM tbl_user u
//                     INNER JOIN tbl_persona p ON u.cPerCod = u.cPerCod
//                     WHERE u.cUser = '".$inputUsuario."' AND u.cPerPass = '".$inputPassword."'
//         ";
    
//         $stmt = $conn->prepare($query);

//         if (!$stmt->execute()) {
//             $msg =  $stmt->errorInfo();
//             echo  $msg[2];
//             echo '
//                     <script>
//                         Swal.fire({
//                             icon: "error",
//                             title: "Oops...",
//                             text: "'.$msg[2].'",
//                             footer: ""
//                         })
//                     </script>
            
//             ';

//         }else{
//             $data = $stmt->fetch();
//         }


  
//         if ($data['Cantidad']== 1) {
//             $query = "  SELECT IFNULL(count(*), 0) as Cantidad FROM tbl_user u
//                         INNER JOIN tbl_persona p ON u.cPerCod = u.cPerCod
//                         WHERE u.cUser = '".$inputUsuario."' AND u.cPerPass = '".$inputPassword."'";

//             $stmt = $conn->prepare($query);
//             $stmt->execute();
//             $data=$stmt->fetch();
  
//             $_SESSION['active'] = true;
//             // $_SESSION['cUser'] = $data['cUser']; 
  
//           header('location: http://localhost/proyecto/Vista/Home/Principal.php');
//         }else{
//           session_destroy();
//           header('Location: http://localhost/proyecto/');
//         }
//       }
//     }
  
//   }
  ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="Assets/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Inicio de sesión</h3></div>
                                    <div class="card-body">
                                        <form id="frmAcceso" method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputUsuario" name="inputUsuario" type="text" placeholder="name@example.com" autocomplete="off" />
                                                <label for="inputEmail">Usuario</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="inputPassword" type="password" placeholder="Password" autocomplete="off"  />
                                                <label for="inputPassword">Constraseña</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button type="submit" class="btn btn-primary form-control" onclick="InicciarSesion(event)">Ingresar</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Necesitas ingresar?</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="Assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <!-- <script src="Assests/js/scripts.js"></script> -->
        <script src="Assets/js/jquery-3.7.0.min.js"></script>
        <script src="Assets/js/sweetalert2@11.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="Controlador/ControladorLogin.js"></script>
    </body>
</html>
