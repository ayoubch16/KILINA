<?php 

// $host="localhost";
// $user_name="root";
// $password="12345678";
// $db_name="gestionstock";
$cnx = mysqli_connect("localhost","root","12345678","kilina");
//$cnx = mysqli_connect("localhost","tradelin_db1","TLS@2021","tradelin_tls_db");
if(!$cnx) die(mysqli_connect_error());
else 
echo "connected";


?>
