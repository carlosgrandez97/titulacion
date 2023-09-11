<?php
require '../Libreria/Base/Conexion.php';

/*-------------------------------------------------------------------------------------------------------
GUARDAR
-------------------------------------------------------------------------------------------------------*/

if (isset($_POST['js_GuardarCategoria'])) {
    $inputCatergoriaNombre          = $_POST['inputCatergoriaNombre'];
    $inputCatergoriaDescripcion     = $_POST['inputCatergoriaDescripcion'];


    $query = "INSERT INTO tbl_CategoriaGeneral (cat_nombres, cat_descripcion) VALUES ('".$inputCatergoriaNombre."','".$inputCatergoriaDescripcion."')";
    $stmt = $conn->prepare($query);
   
    if($stmt->execute()){
         $mensaje = "OK";
    }else{
          $mensaje = $conn->errorInfo();
    }
    echo json_encode($mensaje);
}


if (isset($_POST['js_GuardarUnidades'])) {
    $inputUnidadNombre         = $_POST['inputUnidadNombre'];
    $inputUnidadSimbolo        = $_POST['inputUnidadSimbolo'];



    $query = "INSERT INTO tbl_UnidadMedida (uni_descripcion, uni_simbolo) VALUES ('".$inputUnidadNombre ."', '".$inputUnidadSimbolo."' )";
    $stmt = $conn->prepare($query);
    
   
    if($stmt->execute()){
         $mensaje = "OK";
    }else{
          $mensaje = $conn->errorInfo();
    }

   // $mensaje = $query ;
    echo json_encode($mensaje);
}


if (isset($_POST['js_GuardarZona'])) {
    $inputZonaNombre  = $_POST['inputZonaNombre'];
    
    $query = "INSERT INTO tbl_Lugar (lugar_nombre )  VALUES ('".$inputZonaNombre."') ;";
    $stmt = $conn->prepare($query);
    
   
    if($stmt->execute()){
         $mensaje = "OK";
    }else{
          $mensaje = $conn->errorInfo();
    }

   // $mensaje = $query ;
    echo json_encode($mensaje);
}


/*-------------------------------------------------------------------------------------------------------
LISTAR
-------------------------------------------------------------------------------------------------------*/

if (isset($_POST['js_ListarCategoria'])) {
    $query = "SELECT * FROM tbl_categoriageneral WHERE cat_estado = 0 ;";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();

    echo json_encode($data);
}


if (isset($_POST['js_ObtenerCategoria'])) {
    $cat_id  = $_POST['cat_id'];

    $query = "SELECT * FROM tbl_categoriageneral WHERE cat_id = ".$cat_id." ;";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();

    echo json_encode($data);
}


/*-------------------------------------------------------------------------------------------------------
ELIMINAR
-------------------------------------------------------------------------------------------------------*/

if (isset($_POST['js_EliminarCategoria'])) {
    $cat_id  = $_POST['cat_id'];
    
    $query = "UPDATE tbl_categoriageneral SET cat_estado = 1  WHERE cat_id = ".$cat_id.";";
    $stmt = $conn->prepare($query);    
   
    if($stmt->execute()){
         $mensaje = "OK";
    }else{
          $mensaje = $conn->errorInfo();
    }
    echo json_encode($mensaje);
}





?>