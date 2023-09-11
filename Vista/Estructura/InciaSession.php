<?php 

session_start();

$_SESSION['active'] = true;

header('location: http://localhost/proyecto/Vista/Home/Principal.php');

?>