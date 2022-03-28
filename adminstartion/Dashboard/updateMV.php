<?php 
    include 'db-conn.php';
    $ref=$_GET['ref'];
    $mv=$_GET['mv'];

    if($mv=='MV'){
        $sql="UPDATE `produits` SET `meilleurV`='NMV' WHERE `Ref`='$ref'";
    }else{
        $sql="UPDATE `produits` SET `meilleurV`='MV' WHERE `Ref`='$ref'";
    }
    if ($cnx->query($sql) === TRUE) { 
        echo '<script>
            window.location=history.go(-1);
            </script>';
    }else{
        echo 'Error';
            echo '<br><button onclick="Rto1()">Retour À La Page  precedante</button>
            <script>
                    function Rto1(){
                        window.location=history.go(-1);
                    }
            </script>';
    }

?>