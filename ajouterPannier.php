<?php 
include 'dbconnect.php';
$ref=$_GET['ref'];
$refclient=$_GET['refclient'];


$sql="INSERT INTO `panier`(`RefClient`, `RefProd`, `date`) VALUES ('$refclient','$ref',SYSDATE())";
echo $sql;

if ($cnx->query($sql) === TRUE) { 
    echo 'panier ajouter'; 
}else{
    echo 'error'; 
}
?>