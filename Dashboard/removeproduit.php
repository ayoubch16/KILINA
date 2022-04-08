<?php 
include 'db-conn.php';
$id=$_GET['id'];
$sql="DELETE FROM `produits` WHERE `id`= $id";
if ($cnx->query($sql) === TRUE) { 
    echo '<script>alert("le produit a ete supprimer avec succès")</script>';
    echo '<script>
    window.location=history.go(-1);
    </script>';
}else{
    echo '<script>alert("le produit n\'ai  pas supprimer avec succès")</script>';
    echo '<script>
    window.location=history.go(-1);
    </script>';
}

?>