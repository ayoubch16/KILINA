<?php 
include 'db-conn.php';
$status=$_GET['status'];
$Reff=$_GET['Reff'];

$sql="UPDATE `commandes` SET `statusCmd`='$status' WHERE `ReffCmd`='$Reff' ";

if ($cnx->query($sql) === TRUE) { 
    echo '<script>alert("la commende a ete modifier avec succès")</script>';
    echo '<script>
    window.location=history.go(-1);
    </script>';
  } else {
    echo 'Error';
    echo '<br><button onclick="Rto1()">Retour À La Page Précédente</button>
    <script>
            function Rto1(){
                window.location=history.go(-1);
            }
    </script>';
}

?>