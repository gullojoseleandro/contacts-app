<?php 

$host = "ep-square-bar-06850403-pooler.us-east-1.postgres.vercel-storage.com";
$database = "verceldb";
$user = "default";
$password = "XxkvYUf7jVK6";

try {
  $conn = pg_connect("host=$host dbname=$database user=$user password=$password");

  echo "Conexión exitosa a la base de datos PostgreSQL";
}catch(PDOException $e) {
  die("Error al conectar a la base de datos: " . $e-> getMessage());
}

?>
