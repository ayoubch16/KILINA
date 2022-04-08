<?php 
include 'db-conn.php';
$id=$_GET['id'];
$sql="DELETE FROM `boutiques1` WHERE `id`=$id";
if ($cnx->query($sql) === TRUE) { 
    echo '<script>alert("le boutique a ete supprimer avec succès")</script>';
    echo '<script>
    window.location=history.go(-1);
    </script>';
}else{
    echo '<script>alert("le boutique n\'ai  pas supprimer avec succès")</script>';
    echo '<script>
    window.location=history.go(-1);
    </script>';
}

?>