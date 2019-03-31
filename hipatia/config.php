<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "hipatia";
$connect = mysqli_connect($servername, $username, $password, $db_name);
if(mysqli_connect_error()) {
  echo "Falha na conexaõ  ". mysqli_connect_error();
}
 ?>