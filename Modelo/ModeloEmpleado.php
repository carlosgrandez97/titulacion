<?php
require '../Libreria/Base/Conexion.php';



if (isset($_POST['js_GuardaEmpleado'])) {
    $inputPrimerNombre   = $_POST['inputPrimerNombre'];
    $inputSegundoNombre  = $_POST['inputSegundoNombre'];
    $inputApellidoPat    = $_POST['inputApellidoPat'];
    $inputApellidoMat    = $_POST['inputApellidoMat'];
    $inputNacimiento     = $_POST['inputNacimiento'];
    $inputDireccion      = $_POST['inputDireccion'];
    $inputTelefono       = $_POST['inputTelefono'];
    $inputCelular        = $_POST['inputCelular'];
    $optionPersoneria    = $_POST['optionPersoneria'];
    $inputDOI            = $_POST['inputDOI']; 
    $optionCargo         = $_POST['optionCargo'];
    $inputUsuario        = $_POST['inputUsuario'];
    $inputPassword       = $_POST['inputPassword'];

    $NomresCopletos = $inputPrimerNombre.'/'.$inputSegundoNombre;
    
    //COMPRUEBA SI EXISTEN REGISTROS DE PERSONA
    //VALIDA AUTOINCREMENTO DE CODIGOS DE PERSONA
    $query = "SELECT IFNULL(COUNT(cPerCod), 0 )bitExistencia FROM tbl_Persona;";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $bitExistencia = $stmt->fetch();

    if ($bitExistencia[0] != 0 ) {
        $query = "SELECT CAST(MAX(cPerCod) AS UNSIGNED ) +  1  NuevoCodigo FROM  tbl_Persona T;";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $nuevoCodigo = $stmt->fetch();
    }else {
        $query = "SELECT CAST(IFNULL(MAX(cPerCod), '9999') AS UNSIGNED ) +  1  cPersCod FROM  tbl_Persona T;";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $nuevoCodigo = $stmt->fetch();
    }

    //INSERTA EN TABLA PERSONA
    $query = "
                INSERT INTO tbl_Persona
                (cPerCod, cPerNombres, cPerApellidoPar, cPerApellidoMat, dPerNac, cPerDirecDomicilio, cPerTelefono, cPerCelular, nPerPersoneria, cPerDOI, cPerEmail)
                VALUES
                ('".$nuevoCodigo[0]."', '".$NomresCopletos."', '".$inputApellidoPat."', '".$inputApellidoMat."', '".$inputNacimiento."', '".$inputDireccion."', '".$inputTelefono."', '".$inputCelular."' , 1 , '".$inputDOI ."', 'carlosgrandez97@gmail.com')
            ";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    //INSERTA EL USUARIO Y CONTRASEÑA PARA EL SISTEMA
    $query = "INSERT INTO tbl_User VALUES('".$nuevoCodigo[0]."', '".$inputUsuario."', '".$inputPassword."', '', '', '') ;";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    //INSERTA CONFIGURACION PARA EL ROL EN EL SISTEMA
    $query = "INSERT INTO tbl_Empleado VALUES('".$nuevoCodigo[0]."', 2) ;";
    $stmt = $conn->prepare($query);
    $stmt->execute();


    $query0 = "SELECT COUNT(*) FROM tbl_Persona WHERE cPerCod = '" .$nuevoCodigo[0]."'";
    $query1 = "SELECT COUNT(*) FROM tbl_User WHERE cPerCod = '".$nuevoCodigo[0]."'";
    $query2 = "SELECT COUNT(*) FROM tbl_Empleado WHERE cPerCod = '".$nuevoCodigo[0]."'";

    $stmt = $conn->prepare($query0);
    $stmt->execute();
    $result0 = $stmt->fetch();
    $stmt = $conn->prepare($query1);
    $stmt->execute();
    $result1 = $stmt->fetch();
    $stmt = $conn->prepare($query2);
    $stmt->execute();
    $result2 = $stmt->fetch();


    
    if ($result0[0]>0 && $result1[0] >0 && $result2[0]>0 ) {
        $mensaje = "Datos ingresados correctamente";
    }else{
        $mensaje = "Ocurrio un error al procesar los datos.";
    }

    echo json_encode($mensaje);
}

if (isset($_POST['js_ListarEmpleados'])) {
    $query = "SELECT * FROM tbl_Persona where bestado = 0;";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll();

    echo json_encode($data);


}
?>