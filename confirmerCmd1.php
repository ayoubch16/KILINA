<?php 
    include 'dbconnect.php';
    $ReffCmd=uniqid('cmd_'); 
    $ReffClient=uniqid('cLient_');

    $tailleProd=$_GET['inputProdtaille'];
    $QntProd=$_GET['inputProdquantite'];
    $villeCmd=$_GET['ville'];
    $adresse=$_GET['adresse'];
    $AdresseCMD=str_replace("'"," ",$adresse);
    $prixtotale=$_GET['inputProdprix'];
    $id=$_GET['inputProdid'];
    $sqlprod="SELECT * FROM `produits` WHERE id='$id' ";
    $resultprod = $cnx->query($sqlprod);
    if ($rowprod = $resultprod->fetch_assoc()) {
        $ReffProd=$rowprod['Ref'];
        
        $sommeachat=$rowprod['prixachat'] * $QntProd;
        $sommevente=$rowprod['prixvente'] * $QntProd;
    }
    // $Reff=uniqid('client_'); 
    $nom=$_GET['nom'];
    $prenom=$_GET['prenom'];
    $tele=$_GET['tele'];
    $email=$_GET['email'];
    // $mdp=$_GET['mdp'];
    // $mdp=md5($mdp);
    $ville=$_GET['ville'];
    $adresseCLi=str_replace("'"," ",$adresse);
    $sqlCli="INSERT INTO `clients`(`Reff`,`nom`, `prenom`, `tele`, `email`, `ville`, `Adresse`) 
    VALUES ('$ReffClient','$nom','$prenom','$tele','$email','$ville','$adresseCLi')";


   
    $sql="INSERT INTO `commandes`( `ReffCmd`, `ReffClient`, `ReffProd`, `tailleProd`, `QntProd`, `villeCmd`, `AdresseCMD`, `dateCmd`, `statusCmd`, `PaimentCmd`, `prixCmd`, `prixachat`, `prixvente`) 
    VALUES ('$ReffCmd','$ReffClient','$ReffProd','$tailleProd','$QntProd','$villeCmd','$AdresseCMD',SYSDATE(),'En cours','à la livraison',
    '$prixtotale','$sommeachat','$sommevente')";
   
   
    // echo $sql;
    // echo $sqlCli;
    if ($cnx->query($sql) === TRUE) {
        // echo "New record created successfully";
        if ($cnx->query($sqlCli) === TRUE) {
        }else{
            echo "Error: ";
        }
    } else {
        echo "Error: ";
    }
        echo "<script>localStorage.removeItem('panier2');</script>";
        echo '
        <div id="messagefeli" >
<div id="felicitation" class="flex-container">
<div class="flex-item my-2" style="display: flex;justify-content: center;"><img src="image/icone/felicitation.png" width="100" height="100" alt="">
</div>
<div class="flex-item my-2">
<h1 class="text-center">Félicitation</h1>
</div>
<div class="flex-item my-2">
<h5 class="text-center">votre demande sera <br>traite dans 24H</h5>
</div>
<div class="flex-item my-2" style="display: flex;justify-content: center;"><a href="index.php" class="btnP rounded">RETOUR</a></div>
</div>
</div>';

?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    #messagefeli{
        position: absolute;top: 30%; width: 250px;height: auto;
        display: flex;justify-content: center;
        left: 40%;
        right: 40%;
        box-shadow: 0px 0px 50px 0px rgba(0,0,0,0.65);
        border-radius: 5px;
    }
    .btnP {
        width: 150px;
        height: 30px;
        color: #000;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #e1d106;
        text-align: center;
        font-size: 20px;
        border: 0
    }

    .btnP:hover {
        text-decoration: none;
        background-color: #000;
        color: #e1d106
    }

    .btnP:hover>img {
        filter: invert(85%) sepia(18%) saturate(7468%) hue-rotate(11deg) brightness(106%) contrast(95%)
    }

</style>
<div id="messagefeli" >
<div id="felicitation" class="flex-container">
<div class="flex-item my-2" style="display: flex;justify-content: center;"><img src="image/icone/felicitation.png" width="100" height="100" alt="">
</div>
<div class="flex-item my-2">
<h1 class="text-center">Félicitation</h1>
</div>
<div class="flex-item my-2">
<h5 class="text-center">votre demande sera <br>traite dans 24H</h5>
</div>
<div class="flex-item my-2" style="display: flex;justify-content: center;"><a href="index.php" class="btnP rounded">RETOUR</a></div>
</div>
</div>