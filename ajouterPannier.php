<?php 
include 'dbconnect.php';

$ref=$_GET['ref'];
$refclient=$_GET['refclient'];
if($_SESSION["Reff"] == null) {
    header('Location: connexion.php');
}

$sql="INSERT INTO `panier`(`RefClient`, `RefProd`, `date`) VALUES ('$refclient','$ref',SYSDATE())";
// echo $sql;

if ($cnx->query($sql) === TRUE) { 
    echo '<script>
        window.location=history.go(-1);
        </script>';
}else{
    echo 'Error';
        echo '<br><button onclick="Rto1()">Retour À La Page precedante</button>
        <script>
                function Rto1(){
                    window.location=history.go(-1);
                }
        </script>'; 
}
?>