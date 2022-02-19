<?php 
    include '../dbconnect.php';
    $Reff=uniqid('user_'); 
    $nom=$_GET['nom'];
    $prenom=$_GET['prenom'];
    $tele=$_GET['tele'];
    $email=$_GET['email'];
    $mdp=$_GET['mdp'];
    $mdp=md5($mdp);
    $ville=$_GET['ville'];
    $cin=$_GET['cin'];

    


    $sql="INSERT INTO `users`( `Reffuser`, `nomuser`, `prenomuser`, `teleuser`, `CINuser`, `emailuser`, `passeuser`, `etatuser`, `etatCompte`) 
            VALUES ('$Reff','$nom','$prenom','$tele','$cin','$email','$mdp','user','NV')";

    // echo $sql;

   $sql="INSERT INTO `clients`(`Reff`,`nom`, `prenom`, `tele`, `email`, `ville`, `passe`,`Adresse`) VALUES ('$Reff','$nom','$prenom','$tele','$email','$ville','$mdp','$adresse')";
    echo $Reff;
    if ($cnx->query($sql) === TRUE) {
        echo 'vous avez creer votre compte avec succes <br> pour activer votre compte';
        echo '<button onclick="Rto1()">Retour À La Page De Connexion</button>
        <script>
                function Rto1(){
                    window.location=history.go(-1);
                }
        </script>';
     } else {
      echo 'erreur:vérifier votre email';
      echo '<button onclick="Rto2()">Retour À La Page D\'inscription</button>
      <script>
              function Rto2(){
                  window.location=history.go(-1);
              }
      </script>';
       
     }


?>
