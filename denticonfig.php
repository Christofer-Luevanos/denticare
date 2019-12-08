<?php
  $host = "us-cdbr-iron-east-05.cleardb.net";
  $user = "b68f34e08f6a74";
  $password = "b0411271";
  $db = "heroku_ed90a697240f2fe";

  $conn = new mysqli($host, $user, $password, $db);
  if($conn->connect_error){
    die("Error de conexion: " .$conn->connection_error);
  }
?>
