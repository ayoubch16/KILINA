
<?php include 'header.php';?>
<?php include 'navbar.php';?>
<body>
    <script>
        document.title = 'Favorite ';
    </script>
    <style>
        p {
            margin: 0 !important;
        }
        .btnP{
            width: 200px;
            height: 35px;
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


    </style>
<div id="page">
<div class="  container">
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
                                    <p style="font-size: 10px;">Couleur :</p>
                                    <input type="radio">
                                </div>
                                <div class="col">
                                    <p style="font-size: 10px;">Taille :</p>
                                    <h6>S</h6>
                                </div>
                                <div class="col">
                                    <p style="font-size: 10px;">Quantité(s) :</p>
                                    <input type="number" style="width: 40px;" min="1">
                                </div>
                                <div class="col">
                                    <p style="font-size: 10px;">Prix :</p>
                                    <p style="font-size: 20px;">75.00 DH</p>
                                </div>
                            </div>
                          
                            <div class="text-center mx-2 my-3 row">
                                <button class="btnP rounded mx-4">SHOP NOW</button>
                               <a class="p-1" href=""> <img  src="image/icone/Heart.png" width="40" height="40" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <hr>

                </div>
            </div>

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
                                    <p style="font-size: 10px;">Couleur :</p>
                                    <input type="radio">
                                </div>
                                <div class="col">
                                    <p style="font-size: 10px;">Taille :</p>
                                    <h6>S</h6>
                                </div>
                                <div class="col">
                                    <p style="font-size: 10px;">Quantité(s) :</p>
                                    <input type="number" style="width: 40px;" min="1">
                                </div>
                                <div class="col">
                                    <p style="font-size: 10px;">Prix :</p>
                                    <p style="font-size: 20px;">75.00 DH</p>
                                </div>
                            </div>
                          
                            <div class="text-center mx-2 my-3 row">
                                <button class="btnP rounded mx-4">SHOP NOW</button>
                               <a href=""> <img  src="image/icone/Heart-1.png" width="40" height="40" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <hr>

                </div>
            </div>
        </div>
</div>
</div>



   

</body>
<?php include 'footer.php';?>
