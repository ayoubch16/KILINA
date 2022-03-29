<?php 

include 'dbconnect.php';
session_start();
  $cpt=$_GET['cpt'];
  $prixa=array($_GET['prixachate1'],$_GET['prixachate2'],$_GET['prixachate3'],$_GET['prixachate4'],$_GET['prixachate5'],$_GET['prixachate6'],$_GET['prixachate7'],$_GET['prixachate8'],$_GET['prixachate9'],$_GET['prixachate10']);
  $prixv=array($_GET['prixvente1'],$_GET['prixvente2'],$_GET['prixvente3'],$_GET['prixvente4'],$_GET['prixvente5'],$_GET['prixvente6'],$_GET['prixvente7'],$_GET['prixvente8'],$_GET['prixvente9'],$_GET['prixvente10']);
  $ref = array($_GET['ref1'],$_GET['ref2'],$_GET['ref3'],$_GET['ref4'],$_GET['ref5'],$_GET['ref6'],$_GET['ref7'],$_GET['ref8'],$_GET['ref9'],$_GET['ref10']);
  $taille = array($_GET['taille1'],$_GET['taille2'],$_GET['taille3'],$_GET['taille4'],$_GET['taille5'],$_GET['taille6'],$_GET['taille7'],$_GET['taille8'],$_GET['taille9'],$_GET['taille10']);
  $Qnt = array($_GET['Qnt1'],$_GET['Qnt2'],$_GET['Qnt3'],$_GET['Qnt4'],$_GET['Qnt5'],$_GET['Qnt6'],$_GET['Qnt7'],$_GET['Qnt8'],$_GET['Qnt9'],$_GET['Qnt10']);
  $ReffCmd=uniqid('cmd_'); 
  $ReffClient=$_GET['RefClient'];
  $ReffProd=$tailleProd=$QntProd=$sommeachat=$sommevente="";
  $villeCmd=$_SESSION["ville"];
  $AdresseCMD=$_SESSION["Adresse"];
  $prixtotale=$_GET['prixtotale'];
  for ($x = 0; $x < $cpt ; $x++) {
    $ReffProd=$ref[$x];
    $sqlupdate="UPDATE `produits` SET `quantite`=`quantite`-1,`quantitevendu`=`quantitevendu`+1 WHERE `Ref`='$ReffProd' ";
    $txtReffProd.=$ref[$x].'-';
    $tailleProd.=$taille[$x].'-';
    $QntProd.=$Qnt[$x].'-';
    $sommeachat+=$prixa[$x] * $Qnt[$x];
    $sommevente+=$prixv[$x] * $Qnt[$x];
        if ($cnx->query($sqlupdate) === TRUE) { 
            echo 'bein';
        }
  } 
  $sql="INSERT INTO `commandes`( `ReffCmd`, `ReffClient`, `ReffProd`, `tailleProd`, `QntProd`, `villeCmd`, `AdresseCMD`, `dateCmd`, `statusCmd`, `PaimentCmd`, `prixCmd`, `prixachat`, `prixvente`) 
    VALUES ('$ReffCmd','$ReffClient','$txtReffProd','$tailleProd','$QntProd','$villeCmd','$AdresseCMD',SYSDATE(),'En cours','à la livraison','$prixtotale','$sommeachat','$sommevente')";
    $sqlpanier="UPDATE `panier` SET `etat`='NV' WHERE `RefClient`='$ReffClient' ";

    if ($cnx->query($sql) === TRUE) { 
        if ($cnx->query($sqlpanier) === TRUE) { 
            header("Location: panier.php?c=1");
        }
    }
  

 
?>