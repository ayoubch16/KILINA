<?php 
include 'dbconnect.php';
  $cpt=$_GET['cpt'];
  $ref = array($_GET['ref1'],$_GET['ref2'],$_GET['ref3'],$_GET['ref4'],$_GET['ref5'],$_GET['ref6'],$_GET['ref7'],$_GET['ref8'],$_GET['ref9'],$_GET['ref10']);
  $taille = array($_GET['taille1'],$_GET['taille2'],$_GET['taille3'],$_GET['taille4'],$_GET['taille5'],$_GET['taille6'],$_GET['taille7'],$_GET['taille8'],$_GET['taille9'],$_GET['taille10']);
  $Qnt = array($_GET['Qnt1'],$_GET['Qnt2'],$_GET['Qnt3'],$_GET['Qnt4'],$_GET['Qnt5'],$_GET['Qnt6'],$_GET['Qnt7'],$_GET['Qnt8'],$_GET['Qnt9'],$_GET['Qnt10']);
  $ReffCmd=uniqid('cmd_'); 
  $ReffClient=$_GET['RefClient'];
  $ReffProd=$tailleProd=$QntProd="";
  $villeCmd='Sale';
  $AdresseCMD='adresse';
  $prixtotale=$_GET['prixtotale'];
  for ($x = 0; $x <= $cpt-1 ; $x++) {
    $ReffProd.=$ref[$x].'-';
    $tailleProd.=$taille[$x].'-';
    $QntProd.=$Qnt[$x].'-';
 
  } 
  echo '<br>'.$ReffProd;
  $sql="INSERT INTO `commandes`( `ReffCmd`, `ReffClient`, `ReffProd`, `tailleProd`, `QntProd`, `villeCmd`, `AdresseCMD`, `dateCmd`, `statusCmd`, `PaimentCmd`, `prixCmd`) 
  VALUES ('$ReffCmd','$ReffClient','$ReffProd','$tailleProd','$QntProd','$villeCmd','$AdresseCMD',SYSDATE(),'En cours','à la livraison','$prixtotale')";
  echo '<br>'.$sql;
  $sqlpanier="UPDATE `panier` SET `etat`='NV' WHERE `RefClient`='$ReffClient'";
  echo '<br>'.$sqlpanier;
  // if ($cnx->query($sqlpanier) === TRUE) { 

  //  header("Location: panier.php");
  // }
  
 
?>