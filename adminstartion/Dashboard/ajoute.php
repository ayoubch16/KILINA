<?php
include 'db-conn.php';
$Ref=$_GET['Ref'];
$categorie=$_GET['categorie'];
$prix=$_GET['prix'];
$remis=$_GET['remis'];
$description=$_GET['description'];
$taille=$_GET['taille'];
$genre=$_GET['genre'];
$date=$_GET['date'];
$img1=$_GET['img1'];
$img2=$_GET['img2'];
$img3=$_GET['img3'];
$img4=$_GET['img4'];
$img5=$_GET['img5'];

echo $Ref.'<br>'.$categorie.'<br>'.$prix.'<br>'.$remis.'<br>'.$description.'<br>'.$taille.'<br>'.$genre.'<br>'.$date.'<br>'.$img1.'<br>'.$img2.'<br>'.$img3.'<br>'.$img4.'<br>'.$img5;

$imgData1 = addslashes(file_get_contents($_FILES['my_image1']['tmp_name']));
$imageProperties = getimageSize($_FILES['my_image1']['tmp_name']);

?>