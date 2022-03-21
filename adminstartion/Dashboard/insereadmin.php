<?php 
    include 'db-conn.php';
    $Reff=uniqid('user_'); 
    $nom=$_GET['nom'];
    $prenom=$_GET['prenom'];
    $tele=$_GET['tele'];
    $email=$_GET['email'];
    $mdp=$_GET['mdp'];
    $mdp=md5($mdp);
    $ville=$_GET['ville'];
    $cin=$_GET['cin'];

    


    $sql="INSERT INTO `users`( `Reffuser`, `nomuser`, `prenomuser`, `teleuser`, `CINuser`, `emailuser`, `ville` , `passeuser`, `etatuser`, `etatCompte`) 
            VALUES ('$Reff','$nom','$prenom','$tele','$cin','$email','$ville','$mdp','user','NV')";

    echo $sql;
    if ($cnx->query($sql) === TRUE) {
        echo '
        <script>
               
                    window.location=history.go(-1);
                
        </script>';
     } else {
      echo '<button onclick="Rto2()">Retour À La Page D\'inscription</button>
      <script>
              function Rto2(){
                  window.location=history.go(-1);
              }
      </script>';
       
     }


?>
