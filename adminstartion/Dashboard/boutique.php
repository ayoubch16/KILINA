<?php 
    include 'db-conn.php';

    $ville=$_POST['ville'];
    $adresse=$_POST['adresse'];
    $tele=$_POST['tele'];
    $lien=$_POST['lien'];
    // $img1=$_POST['img1'];
    $img1 = addslashes(file_get_contents($_FILES['img1']['tmp_name']));

    // echo $ville.'/<br>'.$adresse.'/<br>'.$tele.'/<br>'.$lien.'/<br>'.$img1;
    $sql="INSERT INTO `boutiques1`( `ville`, `adresse`, `tele`, `localisation`, `image`) VALUES (UPPER('$ville'),UPPER('$adresse'),'$tele','$lien','$img1')";
    if ($cnx->query($sql) === TRUE) {
        echo '<script>alert("le bien a ete ajoute avec succès")</script>';
           echo '<script>window.location.href = "Magasins.php";</script>';
      } else {
          echo'<script>alert("Erreur : vérifier les informations")</script>';  
      }  
     
?>