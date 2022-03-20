<?php 
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $email=$_POST['email'];
  $telephone=$_POST['telephone'];
  $message=$_POST['message'];
  $cv = addslashes(file_get_contents($_FILES['cv']['tmp_name']));

  echo $nom.'<br>'.$prenom.'<br>'.$email.'<br>'.$telephone.'<br>'.$cv.'<br>'.$message;

?>