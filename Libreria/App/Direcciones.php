<?php 
    //CARPETA RAIZ DEL PROYECTO
    define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/Proyecto/');

    //CARPETA PRINCIPAL DE LA VISTA
    define('VISTA', ROOT_PATH.'Vista/');
    define('ALMACEN', VISTA.'Almacen/');
    define('CLIENTES', VISTA.'Clientes/');
    define('CONFIGURACION', VISTA.'Configuracion/');
    define('EMPLEADOS', VISTA.'Empleados/');

    if (file_exists('Direcciones.php')){
        //echo 'existe';

    }else{
        //echo 'cdscacdas';
    }

?>