<?php
require 'Libreria/Base/Conexion.php';

$query = "  SELECT IFNULL(count(*), 0) as Cantidad FROM tbl_user u
INNER JOIN tbl_persona p ON u.cPerCod = u.cPerCod

";
$stmt = $conn->prepare($query);


if (!$stmt->execute()) {
    //print_r($stmt->errorInfo());
    $msg =  $stmt->errorInfo();
    echo  $msg[2];

    echo '
        <script>
        console.log("fefsfs");
    
        </script>
    ';

}else {


$stmt->execute();
$data = $stmt->fetch();
echo $data['Cantidad'];

echo '
<script>
alert("fefsfs");

</script>
<h1>dadasdas</h1>
';
}


// $data = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
// print_r($data);
// print_r($stmt->errorInfo());