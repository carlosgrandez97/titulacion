<?php
require '../Libreria/Base/Conexion.php';


if (isset($_POST['js_InicciarSesion'])) {
    $inputUsuario   = $_POST['inputUsuario'];
    $inputPassword  = $_POST['inputPassword'];

    $sql = "CALL spt_IniciarSesion('".$inputUsuario."','".$inputPassword."' )";
    $stmt = $conn->prepare($sql);    

    //VALIDA QUE NO HAYA PROBLEMAS POR PARTE DE LA BD
    if (!$stmt->execute()) {
        $resp =  $stmt->errorInfo();
        $msg = $resp;
        echo json_encode($msg);
    }else {
        //VERIFICA QUE SOLO SEA 1 USUARIO SINO NO DEJARA INGRESAR AL SISTEMA);
        
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $Cantidad = $result['Cantidad_cUser'];
        //$Cantidad = 2;     
        if ($Cantidad == 1) {
            // Crear un arreglo asociativo con el resultado
            $response = array(
                                'Cantidad' => $Cantidad
                             );        
            // Devolver el resultado como JSON
            echo json_encode($Cantidad);

        } else {
            echo json_encode(array('error' => 'Error al buscar. Usuario no encontrado'));
        }
     
    }


}
?>