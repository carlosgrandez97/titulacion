<?php 
    session_start();
    if(empty($_SESSION['active'])) {

        header('location: http://localhost/proyecto/');

    }
?>

<!DOCTYPE html>
<html lang="en">
<?php //require_once  '../Estructura/head.php'; ?>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../../Assets/css/styles.css" rel="stylesheet" />
        <!-- <link href="../../Assets/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
        <link href="../../Assets/css/DataTable.bootstrap.min.css" rel="stylesheet" /> -->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    </head>

<body class="sb-nav-fixed">
    <?php require_once '../Estructura/BarraSuperior.php'; ?>
    <div id="layoutSidenav">
        <?php require_once '../Estructura/BarraLateral.php'; ?>
        <div id="layoutSidenav_content">
            <div class="container-fluid mt-5">
                <div class="container-fluid">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyEmpleados">

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <?php require_once '../Estructura/Footer.php';?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../../Assets/js/scripts.js"></script>
    <script src="../../Assets/js/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="../../Assets/js/sweetalert2@11.js"></script>
    <script src="../../Controlador/ControladorEmpleado.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
</body>
</html>