<?php
header('Content-Type: application/json');
include('denticonfig.php');
$query = "SELECT * FROM paciente";
$resultQuery = mysqli_query($conn, $query);
$data = array();
foreach($resultQuery as $row){
  $data[] = $row;
}
localStorage.setItem('session', JSON.stringify(session));
mysqli_close($conn);
echo json_encode($data);
?>