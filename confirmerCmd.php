<?php 
  $cpt=$_GET['cpt'];
  
  if(!empty($_GET['ref1'])){
    $ref1=$_GET['ref1']; $taille1=$_GET['taille1'];  $Qnt1=$_GET['Qnt1'];
    echo '<br>'.$ref1.'/'.$taille1.'/'.$Qnt1;
    }
    if(!empty($_GET['ref2'])){
        $ref2=$_GET['ref2']; $taille2=$_GET['taille2'];  $Qnt2=$_GET['Qnt2'];
      echo '<br>'.$ref2.'/'.$taille2.'/'.$Qnt2;
     }
    if(!empty($_GET['ref3'])){
        $ref3=$_GET['ref3']; $taille3=$_GET['taille3'];  $Qnt3=$_GET['Qnt3'];
      echo '<br>'.$ref3.'/'.$taille3.'/'.$Qnt3;
    }
  $prixtotale=$_GET['prixtotale'];

  echo '<br>'.$prixtotale;
 
?>