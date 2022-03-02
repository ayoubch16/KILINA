<?php
include 'db-conn.php';
$txtimg1=" ";$txtimg2=" ";$txtimg3=" ";$txtimg4=" ";$txtimg5=" ";$txtimg6=" ";

$Ref=$_POST['Ref'];

$titre=$_POST['titre'];

$categorie=$_POST['categorie'];

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

$sql="UPDATE `produits` SET `titre`='$titre',`categorie`='$categorie',`prix`='$prix',`remis`='$remis',
`genre`='$genre',`quantite`='$quantite',`description`='$description',
".$txtimg1."  ".$txtimg2."  ".$txtimg3."  ".$txtimg4."  ".$txtimg5." `taille`='$taille' WHERE `Ref`='$Ref'";



          //echo $sql;
        if ($cnx->query($sql) === TRUE) { 
            echo '<script>
                window.location=history.go(-1);
                </script>';
        }else{
            echo 'Error';
                echo '<br><button onclick="Rto1()">Retour À La Page precedante</button>
                <script>
                        function Rto1(){
                            window.location=history.go(-1);
                        }
                </script>'; 
       }


?>