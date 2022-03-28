<?php 

    include 'dbconnect.php';
    $Reff=uniqid('client_'); 
    $nom=$_GET['nom'];
    $prenom=$_GET['prenom'];
    $tele=$_GET['tele'];
    $email=$_GET['email'];
    $mdp=$_GET['mdp'];
    $mdp=md5($mdp);
    $ville=$_GET['ville'];
    $adresse=$_GET['adresse'];
    $adresse = str_replace("'", "\'", $adresse);
    $sql="INSERT INTO `clients`(`Reff`,`nom`, `prenom`, `tele`, `email`, `ville`, `passe`,`Adresse`) VALUES ('$Reff','$nom','$prenom','$tele','$email','$ville','$mdp','$adresse')";
    
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
