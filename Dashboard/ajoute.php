<?php
include 'db-conn.php';
session_start();

$Ref=$_POST['Ref'];
$titre=$_POST['titre'];
$categorie=$_POST['categorie'];
$prix=$_POST['prix'];
$prixa=$_POST['prixa'];
$remis=$_POST['remis'];
$genre=$_POST['genre'];
$quantite=$_POST['quantite'];
$remis=$_POST['remis'];
$description=$_POST['description'];
$description = str_replace("'", "\'", $description);
$taille="";
$checkbox1 = $_POST['chkl'] ;
for ($i=0; $i<count($checkbox1); $i++)
$taille .= $checkbox1[$i]."-";
$imgData1 = addslashes(file_get_contents($_FILES['img1']['tmp_name']));
$imgData2 = addslashes(file_get_contents($_FILES['img2']['tmp_name']));
$imgData3 = addslashes(file_get_contents($_FILES['img3']['tmp_name']));
$imgData4 = addslashes(file_get_contents($_FILES['img4']['tmp_name']));
$imgData5 = addslashes(file_get_contents($_FILES['img5']['tmp_name']));
$couleur1=$_POST['couleur1'];
$imgColor1 = addslashes(file_get_contents($_FILES['imgColor1']['tmp_name']));
$couleur2=$_POST['couleur2'];
$imgColor2 = addslashes(file_get_contents($_FILES['imgColor2']['tmp_name']));
$couleur3=$_POST['couleur3'];
$imgColor3 = addslashes(file_get_contents($_FILES['imgColor3']['tmp_name']));
$couleur4=$_POST['couleur4'];
$imgColor4 = addslashes(file_get_contents($_FILES['imgColor4']['tmp_name']));
$couleur5=$_POST['couleur5'];
$imgColor5 = addslashes(file_get_contents($_FILES['imgColor5']['tmp_name']));
$couleur6=$_POST['couleur6'];
$imgColor6 = addslashes(file_get_contents($_FILES['imgColor6']['tmp_name']));
$couleur7=$_POST['couleur7'];
$imgColor7 = addslashes(file_get_contents($_FILES['imgColor7']['tmp_name']));
$couleur8=$_POST['couleur8'];
$imgColor8 = addslashes(file_get_contents($_FILES['imgColor8']['tmp_name']));
$couleur9=$_POST['couleur9'];
$imgColor9 = addslashes(file_get_contents($_FILES['imgColor9']['tmp_name']));
$couleur10=$_POST['couleur10'];
$imgColor10 = addslashes(file_get_contents($_FILES['imgColor10']['tmp_name']));



$sql="INSERT INTO `produits`( `Ref`,`titre`,`categorie`, `prixa`,`prix`,`remis`, `genre`,`quantite`,`date`, `description`, `taille`, `img1`, `img2`, `img3`, `img4`, `img5`,`couleur1`,`Imgcouleur1`)
         VALUES ('$Ref','$titre','$categorie','$prixa','$prix','$remis','$genre','$quantite',DATE_FORMAT(SYSDATE(), '%Y-%m-%d- %H-%i-%s') ,'$description','$taille','$imgData1','$imgData2','$imgData3','$imgData4','$imgData5','$couleur1','$imgColor1')"; 
           //echo $sql;
if ($cnx->query($sql) === TRUE) { 
    $Reffuser=$_SESSION["Reffuser"];
    $action='Ajouter un article';
    $sqluser="INSERT INTO `history`( `Reffuser`, `Action`, `Product`) VALUES ('$Reffuser','$action','$Ref')";
    $cnx->query($sqluser);
    echo '<script>alert("le produit a ete ajoute avec succès")</script>';
    echo '<script>window.location.href = "Produits.php";</script>';
  } else {
      echo'<script>alert("Erreur : vérifier les informations")</script>';  
      echo '<script>
              window.location=history.go(-1);
          </script>';
  }  

?>