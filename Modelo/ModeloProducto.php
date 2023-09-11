<?php
require '../Libreria/Base/Conexion.php';



if (isset($_POST['js_GuardarProducto'])) {
    $inputNombrePrincipal   = $_POST['inputNombrePrincipal'];
    $inputDescipcion        = $_POST['inputDescipcion'];
    $inputPrecio            = $_POST['inputPrecio'];
    $optionCategoria        = $_POST['optionCategoria'];
    $mensaje                = '';
    
    $optionCategoria = 1;
    
    //COMPRUEBA SI EXISTEN REGISTROS DE PERSONA
    //VALIDA AUTOINCREMENTO DE CODIGOS DE PERSONA
    $query = "  INSERT INTO tbl_Producto (cNombres, cDescripcion, nPrecio, idCatProducto)
                VALUES ('".$inputNombrePrincipal."', '".$inputDescipcion."', ". $inputPrecio .", ".$optionCategoria .")
            ";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $bitExistencia = $stmt->fetch();

    //echo json_encode($query);

    //VERIFICA QUE SE HAYA INSERTADO
    $query = "SELECT IFNULL(count(idProducto), 0)idProducto FROM  tbl_Producto p WHERE cNombres = ".$inputNombrePrincipal." AND cDescripcion = ".$inputDescipcion ." AND nPrecio = ".$inputPrecio;
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $nuevoCodigo = $stmt->fetch();

    if ($query[0]=1 ) {
        $mensaje = "Datos ingresados correctamente";
    }else{
        $mensaje = "Ocurrio un error al procesar los datos.";
    }

    echo json_encode($mensaje);
}

if (isset($_POST['js_ListarClientes'])) {
    $query = "SELECT * FROM tbl_Persona where bestado = 0;";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();

    //echo json_encode($data);


}

if (isset($_POST['js_BuscarProducto'])) {
    $inputBuscar = $_POST['inputBuscar'];
    $query = "
                SELECT p.cNombres
                FROM tbl_producto p
                WHERE 
                    bEstado = 0
                    AND 
                    p.cNombres LIKE '%".$inputBuscar."%'
    ";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();

    echo json_encode($data);


}

if (isset($_POST['js_ListarUnidad'])) {
    $query = "SELECT * FROM tbl_unidadmedida ;";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();

    echo json_encode($data);


}

?>