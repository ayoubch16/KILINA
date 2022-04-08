<?php 
    include 'db-conn.php';
    session_start();
    $email=$_POST['email'];
    $mdp=md5($_POST['mdp']);
    $sql="SELECT * FROM `users` WHERE `emailuser`='$email' and `passeuser`='$mdp' and `etatCompte`='V' ";
     $result = $cnx->query($sql);
    if ($row = $result->fetch_assoc()) {
        $_SESSION["id"]=$row['iduser'];
        $_SESSION["Reffuser"]=$row['Reffuser'];
        $_SESSION["nomuser"]=$row['nomuser'];
        $_SESSION["prenomuser"]=$row['prenomuser'];
        $_SESSION["teleuser"]=$row['teleuser'];
        $_SESSION["emailuser"]=$row['emailuser'];
        $_SESSION["villeuser"]=$row['villeuser'];
        $_SESSION["CINuser"]=$row['CINuser'];
        $_SESSION["etatuser"]=$row['etatuser'];
        header("Location: index.php");
    }else{
        echo 'Error';
        echo '<br><button onclick="Rto1()">Retour À La Page De Connexion</button>
        <script>
                function Rto1(){
                    window.location=history.go(-1);
                }
        </script>';
    }
   
?>