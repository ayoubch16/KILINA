<?php 
include 'db-conn.php';
$a=$_GET['a'];
$c=$_GET['c'];

if($a==1){
    $sql="UPDATE `users` SET `etatCompte`='V' WHERE `iduser`=$c";
    
}
if($a==2){
    $sql="UPDATE `users` SET `etatCompte`='NV' WHERE `iduser`=$c";
    
}
if($a==3){
    $sql="UPDATE `users` SET `etatuser`='user' WHERE `iduser`=$c";
    
}
if($a==4){
    $sql="UPDATE `users` SET `etatuser`='manager' WHERE `iduser`=$c";
    
}
if($a==5){
    $sql="DELETE FROM `users` WHERE `iduser`=$c";
    
}
if($a==6){
    $sql="DELETE FROM `recrutement` WHERE `id`=$c";
    
}
if ($cnx->query($sql) === TRUE) { 
    echo '<script>alert("le compte a ete modifier avec succès")</script>';
    echo '<script>
    window.location=history.go(-1);
    </script>';
}else{
    echo '<script>alert("le compte n\'a  pas ete modifier avec succès")</script>';
    echo '<script>
    window.location=history.go(-1);
    </script>';
}

?>