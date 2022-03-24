<?php
include 'db-conn.php';

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

// echo $imgData2;

$sql="INSERT INTO `produits`( `Ref`,`titre`,`categorie`, `prixa`,`prix`,`remis`, `genre`,`quantite`,`date`, `description`, `taille`, `img1`, `img2`, `img3`, `img4`, `img5`)
         VALUES ('$Ref','$titre','$categorie','$prixa','$prix','$remis','$genre','$quantite',DATE_FORMAT(SYSDATE(), '%Y-%m-%d- %H-%i-%s') ,'$description','$taille','$imgData1','$imgData2','$imgData3','$imgData4','$imgData5')"; 
          echo $sql;
if ($cnx->query($sql) === TRUE) { 
    echo '<script>alert("le bien a ete ajoute avec succès")</script>';
    echo '<script>window.location.href = "Produits.php";</script>';
  } else {
      echo'<script>alert("Erreur : vérifier les informations")</script>';  
      echo '<script>
              window.location=history.go(-1);
          </script>';
  }  
 


?>