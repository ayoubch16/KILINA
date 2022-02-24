<?php 
include 'dbconnect.php';
$ref=$_GET['ref'];
$refclient=$_GET['refclient'];


$sql="DELETE FROM `panier` WHERE `RefProd`='$ref'";
  $sql;

if ($cnx->query($sql) === TRUE) { 
    echo '<script>
        window.location=history.go(-1);
        </script>';
}else{
    echo 'Error';
        echo '<br><button onclick="Rto1()">Retour À La Page De panier</button>
        <script>
                function Rto1(){
                    window.location=history.go(-1);
                }
        </script>'; 
}
?>