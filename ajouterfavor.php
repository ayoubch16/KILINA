<?php 

include 'dbconnect.php';
session_start();
    if($_SESSION["id"] =='') {
        header('Location: connexion.php');
    }else{
        $ref=$_GET['ref'];
        $refclient=$_GET['refclient'];
        $sql="INSERT INTO `favor`(`RefClient`, `RefProd`, `date`) VALUES ('$refclient','$ref',SYSDATE())";
    if ($cnx->query($sql) === TRUE) { 
        echo '<script>
            window.location=history.go(-1);
            </script>';
    }else{
        echo 'Error';
            echo '<br><button onclick="Rto1()">Retour À La Page De Connexion</button>
            <script>
                    function Rto1(){
                        window.location=history.go(-1);
                    }
            </script>';
    }
    }

?>