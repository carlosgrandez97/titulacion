<?php 
	
/* Conectar a una base de datos de MySQL invocando al controlador */
$dsn = 'mysql:dbname=proyecto;host=127.0.0.1';
$usuario = 'root';
$contraseña = '';

try {
    // $conn = new PDO($dsn, $usuario, $contraseña);
    $conn = new PDO($dsn, $usuario, $contraseña,  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

    // if ($conn->getAttribute(\PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING) !== false) {
    //     json_encode(1);
    // }

} catch (PDOException $e) {
    $respuestadb = 'Falló la conexión: ' . $e->getMessage();
    echo json_encode($query);
}


?>

