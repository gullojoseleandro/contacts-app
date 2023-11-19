<?php 

$host = "ep-square-bar-06850403-pooler.us-east-1.postgres.vercel-storage.com";
$database = "verceldb";
$user = "default";
$password = "XxkvYUf7jVK6";

try {
  $conn = new PDO("postgres://default:XxkvYUf7jVK6@ep-square-bar-06850403.us-east-1.postgres.vercel-storage.com:5432/verceldb");
  // foreach($conn ->query("SHOW DATABASES") as $row){
  //   print_r($conn);
  // }
  // die();
}catch(PDOException $e) {
  die("PDO Connection Error: " . $e-> getMessage());
}

?>
