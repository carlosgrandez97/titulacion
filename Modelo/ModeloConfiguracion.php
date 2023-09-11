<?php
require '../Libreria/Base/Conexion.php';



if (isset($_POST['js_GuardaConfiguracionGen'])) {
    $inputNombreProyecto      = $_POST['inputNombreProyecto'];
    $inputNombreCorto         = $_POST['inputNombreCorto'];
    $inputDireccionProyecto   = $_POST['inputDireccionProyecto'];
    $inputDireccionSitio      = $_POST['inputDireccionSitio'];
    $inputPuertoLocal         = $_POST['inputPuertoLocal'];
    $inputCorreoAdm           = $_POST['inputCorreoAdm'];
    $inputPerfilUsser         = $_POST['inputPerfilUsser'];

    //Filtro
    $inputNombreProyecto_Fil      = 'inputNombreProyecto';
    $inputNombreCorto_Fil         = 'inputNombreCorto';
    $inputDireccionProyecto_Fil   = 'inputDireccionProyecto';
    $inputDireccionSitio_Fil          = 'inputDireccionSitio';
    $inputPuertoLocal_Fil         = 'inputPuertoLocal';
    $inputCorreoAdm_Fil           = 'inputCorreoAdm';
    $inputPerfilUsser_Fil         = 'inputPerfilUsser';

    $query = "UPDATE tbl_Configuracion SET config_valor = '".$inputNombreProyecto."' WHERE config_variable = '".$inputNombreProyecto_Fil. "'; \n";
    $query.= "UPDATE tbl_Configuracion SET config_valor = '".$inputNombreCorto."' WHERE config_variable = '".$inputNombreCorto_Fil. "'; \n";
    $query.= "UPDATE tbl_Configuracion SET config_valor = '".$inputDireccionProyecto."' WHERE config_variable = '".$inputDireccionProyecto_Fil. "'; \n";
    $query.= "UPDATE tbl_Configuracion SET config_valor = '".$inputPuertoLocal."' WHERE config_variable = '".$inputPuertoLocal_Fil. "'; \n"; 
    $query.= "UPDATE tbl_Configuracion SET config_valor = '".$inputDireccionSitio."' WHERE config_variable = '".$inputDireccionProyecto_Fil. "'; \n"; 
    $query.= "UPDATE tbl_Configuracion SET config_valor = '".$inputCorreoAdm."' WHERE config_variable = '".$inputCorreoAdm_Fil. "'; \n"; 
    $query.= "UPDATE tbl_Configuracion SET config_valor = '".$inputPerfilUsser."' WHERE config_variable = '".$inputPerfilUsser_Fil. "'; \n"; 
    $stmt = $conn->prepare($query);
   
    if($stmt->execute()){
         $mensaje = "OK";
    }else{
          $mensaje = $conn->errorInfo();
    }
    echo json_encode($mensaje);
}

if (isset($_POST['js_ListarConfiguracionGeneral'])) {
    $query = "SELECT * FROM tbl_Configuracion ;";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();

    echo json_encode($data);


}







?>