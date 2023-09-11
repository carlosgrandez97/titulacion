<?php
require '../Libreria/Base/Conexion.php';



if (isset($_POST['js_GuardarCategoria'])) {
    $inputCatProducto         = $_POST['inputCatProducto'];
    $inputDescripcion         = $_POST['inputDescripcion'];



    $query = "INSERT INTO tbl_CategoriaGeneral (cat_nombres, cat_descripcion) VALUES ('".$inputCatProducto."','".$inputDescripcion."')";
    $stmt = $conn->prepare($query);
   
    if($stmt->execute()){
         $mensaje = "OK";
    }else{
          $mensaje = $conn->errorInfo();
    }
    echo json_encode($mensaje);
}

if (isset($_POST['js_ListarConfiguracionGeneral'])) {
    $query = "SELECT * FROM TBL_CATEGORIAGENERAL ;";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();

    echo json_encode($data);


}
?>