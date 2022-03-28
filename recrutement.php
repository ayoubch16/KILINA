<?php 
  include 'dbconnect.php';
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $email=$_POST['email'];
  $telephone=$_POST['tele'];
  $cv=$_POST['cv'];
  $file = addslashes(file_get_contents($_FILES['cv']['tmp_name']));




  $sql="INSERT INTO `recrutement`( `nom`, `prenom`, `tele`, `email`, `cv`)  VALUES ('$nom','$prenom','$email','$telephone','$file') ";

//   echo $sql;
  if ($cnx->query($sql) === TRUE) { 
    echo '<script>alert("le demande a ete ajoute avec succès")</script>';
    echo '<script>window.location.href = "index.php";</script>';
  } else {
      echo'<script>alert("Erreur : vérifier les informations")</script>';  
      echo '<script>
              window.location=history.go(-1);
          </script>';
  }  
 
?>


