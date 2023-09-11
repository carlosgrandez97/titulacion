<?php 
    session_start();
    if(empty($_SESSION['active'])) {

        //eader('location: http://localhost/proyecto/');

    }
?>

<!DOCTYPE html>
<html lang="en">
    <?php require_once  '../Estructura/head.php';?>
    <body class="sb-nav-fixed">
       
        <?php require_once '../Estructura/BarraSuperior.php';?>
        
        <div id="layoutSidenav">
            <?php require_once '../Estructura/BarraLateral.php';?>
            
            <div id="layoutSidenav_content">
                <?php require_once '../Estructura/Cuerpo.php';?>
                <?php require_once '../Estructura/Footer.php';?>
            </div>

        </div>

        <?php require_once '../Estructura/Feet.php';?>
    </body>
</html>
