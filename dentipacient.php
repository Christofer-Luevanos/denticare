<?php
header('Content-Type: application/json');
include('denticonfig.php');
$query = "SELECT NOMBRE_P, APELLIDO_P FROM paciente";
$resultQuery = mysqli_query($conn, $query);
$data = array();
foreach($resultQuery as $row){
  $data[] = $row;
}
mysqli_close($conn);
echo json_encode($data);
?>