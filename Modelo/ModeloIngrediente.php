<?php
require '../Libreria/Base/Conexion.php';



if (isset($_POST['js_GuardarIngrediente'])) {
    $inputDescripcionIngrediente         = $_POST['inputDescripcionIngrediente'];
    $inputPrecioCompra                   = $_POST['inputPrecioCompra'];
    $optionTpoMedicion                   = $_POST['optionTpoMedicion'];



    $query = "INSERT INTO tbl_Ingrediente  (ing_descripcion, ing_precio_compra,ing_tpo_unidad )VALUES ('".$inputDescripcionIngrediente."', ".$inputPrecioCompra.", ".$optionTpoMedicion.");";
    $stmt = $conn->prepare($query);
   
    if($stmt->execute()){
         $mensaje = "OK";
    }else{
          $mensaje = $conn->errorInfo();
    }
    echo json_encode($mensaje);
}

