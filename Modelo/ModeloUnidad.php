<?php
require '../Libreria/Base/Conexion.php';



if (isset($_POST['js_GuardarUnidades'])) {
    $inputDescripcionUnidad         = $_POST['inputDescripcionUnidad'];
    $inputSimbolo                   = $_POST['inputSimbolo'];



    $query = "INSERT INTO tbl_UnidadMedida (uni_descripcion, uni_simbolo) VALUES ('".$inputDescripcionUnidad ."', '".$inputSimbolo."' )";
    $stmt = $conn->prepare($query);
   
    if($stmt->execute()){
         $mensaje = "OK";
    }else{
          $mensaje = $conn->errorInfo();
    }
    echo json_encode($mensaje);
}


?>