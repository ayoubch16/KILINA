<?php 
    include 'dbconnect.php';
    
    $email=$_POST['email'];
    $mdp=md5($_POST['mdp']);
    

    $sql="SELECT * FROM `clients` WHERE `email`='$email' and `passe`='$mdp' ";
     $result = $cnx->query($sql);
    if ($row = $result->fetch_assoc()) {
        session_start();
        // $_SESSION["id"]='12';
        // $_SESSION["Reff"]=$row['Reff'];
        // $_SESSION["nom"]=$row['nom'];
        // $_SESSION["prenom"]=$row['prenom'];
        // $_SESSION["tele"]=$row['tele'];
        // $_SESSION["email"]=$row['email'];
        // $_SESSION["ville"]=$row['ville'];
        // $_SESSION["Adresse"]=$row['Adresse'];
        // echo '<script>
        //             window.location=history.go(-2);
        // </script>';
        $_SESSION["id"]  =  $row['id'];
        $_SESSION["Reff"]  =  $row['Reff'];
        $_SESSION["nom"] =  $row['nom'];
        $_SESSION["prenom"] = $row['prenom'];
        $_SESSION["tele"] = $row['tele'];
        $_SESSION["email"] = $row['email'];
        echo '
        <script>
        window.location=history.go(-2);
        </script>
        ';
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