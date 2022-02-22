<?php include 'header.php';?>
<?php include 'navbar.php';?>
<body>
    <script>
        document.title = 'Panier ';
    </script>
    <style>
        p {
            margin: 0 !important;
        }
        .btnP{
            width: 327px;
            height: 48px;
            color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #E1D106;
            text-align: center;
            font-size: 20px;
        }
        .btnP:hover {
            text-decoration: none;
            background-color: #000;
            color: #E1D106;
        }
        .btnP1 {
            width: auto;
            height: 48px;
            color: #000;
            padding: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #E1D106;
            text-align: center;
            font-size: 20px;
        }
        .btnP1:hover {
            text-decoration: none;
            background-color: #000;
            color: #E1D106;
        }
        .panier {
            text-align: center;
        }
        .panier h1{
            font-size: 42px;
            font-weight: bold;
        }
        .flex-container {
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-flex-wrap: nowrap;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-align-content: center;
            -ms-flex-line-pack: center;
            align-content: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            }

        .flex-item:nth-child(1) {
            -webkit-order: 0;
            -ms-flex-order: 0;
            order: 0;
            -webkit-flex: 0 1 auto;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            -webkit-align-self: auto;
            -ms-flex-item-align: auto;
            align-self: auto;
            }

        .flex-item:nth-child(2) {
            -webkit-order: 0;
            -ms-flex-order: 0;
            order: 0;
            -webkit-flex: 0 1 auto;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            -webkit-align-self: auto;
            -ms-flex-item-align: auto;
            align-self: auto;
        }

        .flex-item:nth-child(3) {
            -webkit-order: 0;
            -ms-flex-order: 0;
            order: 0;
            -webkit-flex: 0 1 auto;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            -webkit-align-self: auto;
            -ms-flex-item-align: auto;
            align-self: auto;
            }
            .flex-item:nth-child(4) {
            -webkit-order: 0;
            -ms-flex-order: 0;
            order: 0;
            -webkit-flex: 0 1 auto;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            -webkit-align-self: auto;
            -ms-flex-item-align: auto;
            align-self: auto;
            }
            #panier1,#vide {
                display: none;
            }
    </style>
<div id="page">
<div id="vide" class="panier bg-white container rounded p-4">
    <!-- panier vide -->
    <div id="panier1" class="flex-container">
        <div class="flex-item my-2"><img src="image/icone/panier.png" width="250" height="250" alt=""></div>
        <div class="flex-item my-2"> <h1>Votre panier est vide</h1></div>
        <div class="flex-item my-2"><button class="btnP rounded">RETOUR</button></div>
    </div>
    <!-- felicitation-->
    <div id="felicitation" class="flex-container">
        <div class="flex-item my-2"><img src="image/icone/felicitation.png" width="200" height="200" alt=""></div>
        <div class="flex-item my-2"> <h1>Félicitation</h1></div>
        <div class="flex-item my-2"> <h5>votre demande sera <br>traite dans 24H</h5></div>
        <div class="flex-item my-2"><button class="btnP rounded">RETOUR</button></div>
    </div>
</div>
    <!-- product -->
    <form> 
    <div class="panier  container">
        <div class="listeproduct">
            <div class="row">
            <div class="col bg-white rounded p-4 my-1 mx-2">
                <?php $refClient=$_SESSION["Reff"];
                      $sql="SELECT * FROM `panier` WHERE `RefClient`='$refClient' AND `etat`='V'";
                      $result = $cnx->query($sql);
                      $cpt=0;
                      while ($row = $result->fetch_assoc()) {
                          $refProd=$row['RefProd'];
                          $sql1="SELECT * FROM `produits` WHERE `Ref`='$refProd'";
                          $result1 = $cnx->query($sql1);
                      while ($row1 = $result1->fetch_assoc()) {
                                $cpt++;
                ?>
                    <div class="row">
                        <div class="col-4">
                            <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row1['img1']); ?>" width="200" height="300" alt="">
                        </div>
                        <div class="col text-left">
                            <h3 class="mb-3" style="font-size: 25px;"><?php echo $row1['titre'];?></h3>
                            <p style="font-size: 10px;"><?php echo $row1['description'];?> </p>
                            <p style="font-size: 10px;">Réfe : <input style="border: none;" readonly type="text" value="<?php echo $row1['Ref'];?>" name="ref" id=""></p>
                            <div class="row my-3">
                                <!-- <div class="col">
                                    <p style="font-size: 20px;">Couleur :</p>
                                    <input type="radio">
                                </div> -->
                                <div class="col">
                                    <p style="font-size: 20px;">Taille :</p>
                                    <!-- <h6>S</h6> -->
                                    <input type="text" name="taille" value="<?php echo $row1['taille'];?>">
                                </div>
                                <div class="col">
                                    <p style="font-size: 20px;">Quantité(s) :</p>
                                    <input type="number" name="Qnt" style="width: 50px;" value="<?php echo $row1['quantite'];?>" min="1" >
                                </div>
                            </div>
                            <div class="my-3">
                                <p style="font-size: 20px;">Prix :</p>
                                <!-- <input style="font-size: 37px;" type="text" name="prix" value="75.00 DH" id=""> -->
                                <h5 id="prix<?php echo $cpt;?>" class="prixproduit" style="font-size: 37px;"><?php echo $row1['prix']-$row1['prix']*($row1['remis']/100);?> DH</h5>
                            </div>
                            <div class="flex-item mx-2"><button class="btnP rounded">SHOP NOW</button></div>
                        </div>
                    </div>
                    <hr>
                    <?php } } ?>
                    
                 
                </div>
                <div class="col-md-4 col-sm bg-white rounded p-4 my-1 mx-2">
                        <form>
                        <div class="row text-center">
                            <input class="mx-2 rounded col" type="text" name="codepromo" style="background-color: #EEECF5; color: #19AA09;">
                            <button class="btnP1 rounded">Appliquer</button>
                        </div>
                        </form>
                        <div class="row mt-3">
                            <div class="col text-left">
                                <h6>Code promo</h6>
                            </div>
                            <div class="col-4 text-left row">
                                <h6 id="remis" style="color: #19AA09;">5 </h6><h6 style="color: #19AA09;"> %</h6>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-left">
                                <h6>Livraison</h6>
                            </div>
                            <div class="col-4 text-left row">
                                <h6 id="prixlivr">20.00</h6><h6> DH</h6>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-left">
                                <h6>Montant</h6>
                            </div>
                            <div class="col-4 text-left row">
                                <h6 id="prixprod">0000.10</h6><h6> DH</h6>
                            </div>
                        </div>
    
                        <div class="row mt-3">
                            <div class="col text-left row">
                                <h6>Montant total</h6>
                            </div>
                            <div class="col-4 text-left row">
                                <h6 id="prixtotale" style="color: #19AA09;">000.00 </h6><h6 style="color: #19AA09;"> DH</h6>
                            </div>
                        </div>
                        <?php 
                            echo "<script>document.getElementById('remis').innerHTML='15';</script>";
                        ?>
                        
                        <script>
                            let listeprix =document.getElementsByClassName('prixproduit');
                            var somme=0;
                            for (i = 0; i < listeprix.length; i++) {
                                    somme =somme + parseFloat(listeprix[i].innerHTML);
                                }
                                document.getElementById('prixprod').innerHTML=somme.toFixed(2);
                                var remis =parseFloat( document.getElementById('remis').innerHTML);
                                var prixlivr =parseFloat( document.getElementById('prixlivr').innerHTML);
                                var prixprod =parseFloat( document.getElementById('prixprod').innerHTML);
                                prixtotale=prixprod-(prixprod*(remis/100))+prixlivr;
                                document.getElementById('prixtotale').innerHTML=prixtotale.toFixed(2);
                            
                        </script>
                            <hr>
                            <h1 style="font-size: 40px;">Payment</h1>
                            <p style="font-size: 14px;">Choisissez le mode de paiement ci-dessous</p>
                            <div class="row p-3 text-center">
                                <div class="col-md col-sm mx-2 p-2">
                                    <button class="buttonPanier text-center p-2 bg-white">
                                        <img src="image/icone/carte.png" width="44" height="29" alt=""><br>
                                        <span style="font-size: 10px;">par carte bancaire</span>
                                    </button>
                                </div>
                                <div class="col-md col-sm mx-2 p-2">
                                    <button type="submit" class="buttonPanier text-center p-2 bg-white">
                                        <img src="image/icone/liveraison.png" width="44" height="29" alt=""><br>
                                        <span style="font-size: 10px;">a la livraison</span>
                                    </button>
                                </div>
                            </div>
                </div>
                
            </div>
        </div>
    </div>
    </form>
</div>

<!-- <div id="infoPanier" class="bg-white position-absolute top-50 start-50 translate-middle">
    <form action="">
        <div class="row">
            <div class="col text-left">
                <h3>Les information personnel</h3>
                <p style="font-size: 10px;">Nom et prenom</p>
                <input type="text" name="prenom">
                <p style="font-size: 10px;">Nom et prenom</p>
                <input type="text" name="prenom">
                <p style="font-size: 10px;">Nom et prenom</p>
                <input type="text" name="prenom">
                <p style="font-size: 10px;">Nom et prenom</p>
                <input type="text" name="prenom">
                <input type="text" name="prenom">
            </div>
            <div class="col text-left">
                <h3>Les information personnel</h3>
                <p style="font-size: 10px;">Nom et prenom</p>
                <input type="text" name="prenom">
                <p style="font-size: 10px;">Nom et prenom</p>
                <input type="text" name="prenom">
                <p style="font-size: 10px;">Nom et prenom</p>
                <input type="text" name="prenom">
                <p style="font-size: 10px;">Nom et prenom</p>
                <input type="text" name="prenom">
                <input type="text" name="prenom">
            </div>
        </div>
    </form>
</div> -->

    
   

</body>
<?php include 'footer.php';?>
