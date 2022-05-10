<?php
include 'db-conn.php';
session_start();

$txtimg1=" ";$txtimg2=" ";$txtimg3=" ";$txtimg4=" ";$txtimg5=" ";$txtimg6=" ";$txtimgcolor1=" ";$txtimgcolor2=" ";$txtimgcolor3=" ";$txtimgcolor4=" ";$txtimgcolor5=" ";$txtimgcolor6=" ";
$txtimgcolor7=" ";$txtimgcolor8=" ";$txtimgcolor9=" ";$txtimgcolor10=" ";

$group=$_POST['group'];

$Ref=$_POST['Ref'];

$titre=$_POST['titre'];

$categorie=$_POST['categorie'];

$prixa=$_POST['prixa'];

$prix=$_POST['prix'];

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
if( $imgData1 != null ){  $txtimg1=" `img1`='$imgData1' , ";}

$imgData2 = addslashes(file_get_contents($_FILES['img2']['tmp_name']));
if( $imgData2 != null ){  $txtimg2=" `img2`='$imgData2' , ";}

$imgData3 = addslashes(file_get_contents($_FILES['img3']['tmp_name']));
if( $imgData3 != null ){  $txtimg3=" `img3`='$imgData3' , ";}

$imgData4 = addslashes(file_get_contents($_FILES['img4']['tmp_name']));
if( $imgData4 != null ){  $txtimg4=" `img4`='$imgData4' , ";}

$imgData5 = addslashes(file_get_contents($_FILES['img5']['tmp_name']));
if( $imgData5 != null ){  $txtimg5=" `img5`='$imgData5'  ";}

// echo $imgData2;
$couleur1=$_POST['couleur1'];
$imgColor1 = addslashes(file_get_contents($_FILES['imgColor1']['tmp_name']));
if( $imgColor1 != null ){  $txtimgcolor1=" `Imgcouleur1`='$imgColor1' , ";}
$couleur2=$_POST['couleur2'];
$imgColor2 = addslashes(file_get_contents($_FILES['imgColor2']['tmp_name']));
if( $imgColor2 != null ){  $txtimgcolor2=" `Imgcouleur2`='$imgColor2' , ";}
$couleur3=$_POST['couleur3'];
$imgColor3 = addslashes(file_get_contents($_FILES['imgColor3']['tmp_name']));
if( $imgColor3 != null ){  $txtimgcolor3=" `Imgcouleur3`='$imgColor3' , ";}
$couleur4=$_POST['couleur4'];
$imgColor4 = addslashes(file_get_contents($_FILES['imgColor4']['tmp_name']));
if( $imgColor4 != null ){  $txtimgcolor4=" `Imgcouleur4`='$imgColor4' , ";}
$couleur5=$_POST['couleur5'];
$imgColor5 = addslashes(file_get_contents($_FILES['imgColor5']['tmp_name']));
if( $imgColor5 != null ){  $txtimgcolor5=" `Imgcouleur5`='$imgColor5' , ";}
$couleur6=$_POST['couleur6'];
$imgColor6 = addslashes(file_get_contents($_FILES['imgColor6']['tmp_name']));
if( $imgColor6 != null ){  $txtimgcolor6=" `Imgcouleur6`='$imgColor6' , ";}
$couleur7=$_POST['couleur7'];
$imgColor7 = addslashes(file_get_contents($_FILES['imgColor7']['tmp_name']));
if( $imgColor7 != null ){  $txtimgcolor7=" `Imgcouleur7`='$imgColor7' , ";}
$couleur8=$_POST['couleur8'];
$imgColor8 = addslashes(file_get_contents($_FILES['imgColor8']['tmp_name']));
if( $imgColor8 != null ){  $txtimgcolor8=" `Imgcouleur8`='$imgColor8' , ";}
$couleur9=$_POST['couleur9'];
$imgColor9 = addslashes(file_get_contents($_FILES['imgColor9']['tmp_name']));
if( $imgColor9 != null ){  $txtimgcolor9=" `Imgcouleur9`='$imgColor9' , ";}
$couleur10=$_POST['couleur10'];
$imgColor10 = addslashes(file_get_contents($_FILES['imgColor10']['tmp_name']));
if( $imgColor10 != null ){  $txtimgcolor10=" `Imgcouleur10`='$imgColor10' , ";}




$sql="UPDATE `produits` SET  `group`='$group' , `titre`='$titre',`categorie`='$categorie',`prixa`='$prixa',`prix`='$prix',`remis`='$remis',
`genre`='$genre',`quantite`='$quantite',`description`='$description',".$txtimg1."  ".$txtimg2."  ".$txtimg3."  ".$txtimg4."  ".$txtimg5." 
`couleur1`='$couleur1', `couleur2`='$couleur2' , `couleur3`='$couleur3' , `couleur4`='$couleur4' , `couleur5`='$couleur5' , `couleur6`='$couleur6' ,
`couleur7`='$couleur7' , `couleur8`='$couleur8' , `couleur9`='$couleur9' , `couleur10`='$couleur10' , 
".$txtimgcolor1."  ".$txtimgcolor2."  ".$txtimgcolor3."  ".$txtimgcolor4."  ".$txtimgcolor5." 
".$txtimgcolor6."  ".$txtimgcolor7."  ".$txtimgcolor8."  ".$txtimgcolor9."  ".$txtimgcolor10." `taille`='$taille' WHERE `Ref`='$Ref' ";


        //   echo $sql;
        if ($cnx->query($sql) === TRUE) { 
            $Reffuser=$_SESSION["Reffuser"];
            $action='Modifier un article';
            $sqluser="INSERT INTO `history`( `Reffuser`, `Action`, `Product`) VALUES ('$Reffuser','$action','$Ref')";
            $cnx->query($sqluser);
            echo '<script>alert("le produit a ete modifier avec succès")</script>';
            echo '<script>window.location.href = "Produits.php";</script>';
        }else{
            echo '<script>alert("Erreur : vérifier les informations")</script>';
            echo '<script>
                window.location=history.go(-1);
                </script>';
       }


?>