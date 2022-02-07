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
    </style>
<div class="panier bg-white container rounded p-4">
    <!-- panier vide -->
    <div id="panier1" class="flex-container">
        <div class="flex-item my-2"><img src="image/icone/panier.png" width="250" height="250" alt=""></div>
        <div class="flex-item my-2"> <h1>Votre panier est vide</h1></div>
        <div class="flex-item my-2"><button class="btnP rounded">RETOUR</button></div>
    </div>
    <!-- felicitation-->
    <div id="panier2" class="flex-container">
        <div class="flex-item my-2"><img src="image/icone/felicitation.png" width="200" height="200" alt=""></div>
        <div class="flex-item my-2"> <h1>Félicitation</h1></div>
        <div class="flex-item my-2"> <h5>votre demande sera <br>traite dans 24H</h5></div>
        <div class="flex-item my-2"><button class="btnP rounded">RETOUR</button></div>
    </div>
</div>
    <!-- product -->
<div class="panier  container">
        <div class="listeproduct">
            <div class="row">
                <div class="col bg-white rounded p-4 my-1 mx-2">
                    <div class="row">
                        <div class="col-4">
                            <img src="image/img1.png" width="200" height="300" alt="">
                        </div>
                        <div class="col text-left">
                            <h3 class="mb-3" style="font-size: 25px;">T-shirt ajusté unicolore à col montant</h3>
                            <p style="font-size: 10px;">95% Polyester, 5% Élasthanne Lavage en machine ou nettoyage à
                            </p>
                            <p style="font-size: 10px;">Réfe : 8KKD8ZD6</p>
                            <div class="row my-3">
                                <div class="col">
                                    <p style="font-size: 20px;">Couleur :</p>
                                    <input type="radio">
                                </div>
                                <div class="col">
                                    <p style="font-size: 20px;">Taille :</p>
                                    <h6>S</h6>
                                </div>
                                <div class="col">
                                    <p style="font-size: 20px;">Quantité(s) :</p>
                                    <input type="number" style="width: 50px;" min="1">
                                </div>
                            </div>
                            <div class="my-3">
                                <p style="font-size: 20px;">Prix :</p>
                                <h5 style="font-size: 37px;">75.00 DH</h5>
                            </div>
                            <div class="flex-item mx-2"><button class="btnP rounded">SHOP NOW</button></div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <img src="image/img1.png" width="200" height="300" alt="">
                        </div>
                        <div class="col text-left">
                            <h3 class="mb-3" style="font-size: 25px;">T-shirt ajusté unicolore à col montant</h3>
                            <p style="font-size: 10px;">95% Polyester, 5% Élasthanne Lavage en machine ou nettoyage à
                            </p>
                            <p style="font-size: 10px;">Réfe : 8KKD8ZD6</p>
                            <div class="row my-3">
                                <div class="col">
                                    <p style="font-size: 20px;">Couleur :</p>
                                    <input type="radio">
                                </div>
                                <div class="col">
                                    <p style="font-size: 20px;">Taille :</p>
                                    <h6>S</h6>
                                </div>
                                <div class="col">
                                    <p style="font-size: 20px;">Quantité(s) :</p>
                                    <input type="number" style="width: 50px;" min="1">
                                </div>
                            </div>
                            <div class="my-3">
                                <p style="font-size: 20px;">Prix :</p>
                                <h5 style="font-size: 37px;">75.00 DH</h5>
                            </div>
                            <div class="flex-item mx-2"><button class="btnP rounded">SHOP NOW</button></div>
                        </div>
                    </div>
                    <hr>
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
                            <div class="col-4 text-left">
                                <h6 style="color: #19AA09;">5%</h6>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-left">
                                <h6>Livraison</h6>
                            </div>
                            <div class="col-4 text-left">
                                <h6>35 DH</h6>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-left">
                                <h6>Montant</h6>
                            </div>
                            <div class="col-4 text-left">
                                <h6>12.34 DH</h6>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-left">
                                <h6>Montant total</h6>
                            </div>
                            <div class="col-4 text-left">
                                <h6 style="color: #FF7878;"><del>102.34 DH</del> </h6>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-left">
                                <h6>Montant total</h6>
                            </div>
                            <div class="col-4 text-left">
                                <h6 style="color: #19AA09;">101.34 DH</h6>
                            </div>
                        </div>
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
                                    <button class="buttonPanier text-center p-2 bg-white">
                                        <img src="image/icone/liveraison.png" width="44" height="29" alt=""><br>
                                        <span style="font-size: 10px;">a la livraison</span>
                                    </button>
                                </div>
                            </div>
                </div>
            </div>
        </div>
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
