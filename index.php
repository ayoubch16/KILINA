<?php 
$c=$_GET['c'];
?>
<?php include 'header.php';?>

<body>
    <style>

    input[type="radio"].demo {
        display: none;
    }

    input[type="radio"].demo+label {
        position: relative;
        padding-left: 1.3rem;
    }

    input[type="radio"].demo+label::before,
    input[type="radio"].demo+label::after {
        display: block;
        position: absolute;
        box-sizing: border-box;
        bottom: 0;
        left: 0;
        content: '';
        width: 1rem;
        height: 1rem;
        border-radius: 1rem;
    }

    input[type="radio"].demo1+label::before {
        border: 2px solid #640010;
        background-color: #fff;
    }

    input[type="radio"].demo1:checked+label::after {
        background-color: #640010;
    }

    input[type="radio"].demo2+label::before {
        border: 2px solid #D5CCC7;
        background-color: #fff;
        color: #fff;
    }

    input[type="radio"].demo2:checked+label::after {
        background-color: #D5CCC7;
    }

    input[type="radio"].demo3+label::before {
        border: 2px solid #110E0F;
        background-color: #fff;
    }

    input[type="radio"].demo3:checked+label::after {
        background-color: #110E0F;
    }

    #pro2,
    #pro3 {
        display: none;
    }
     /* **********Taille********* */
   
    </style>
    <?php include 'navbar.php';?>
    <div id="page">
         <!-- navbar -->
         
    <div  class="container ">
       

        <!-- newcollection -->
        <div class="newcollection bg-white container">
            <div class="menu row">
                <ul>
                    <li><a href="">Femme</a></li>
                    <li><a href="">Homme</a></li>
                    <li><a href="">Enfant</a></li>
                </ul>
                <ul>
                    <li><a href="">S’inscrire</a></li> |
                    <li><a href="">Recturment</a></li> |
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <div id="pro1" class="row">
                <div class="detailproduit col">
                    <h1>NEW</h1>
                    <h3>COLLECTION 1</h3>
                    <p>Sac A Main Femme Fashion Elegance Chic Vernis
                        Monogramme Luxury
                    </p>
                    <div class="row ml-1">
                        <div class="mx-4">
                            <p>Prix</p>
                            <h6 style="color:#000">230 dh</h6>
                        </div>
                        <div class="mx-4">
                            <p>Coleur</p>
                            <p>
                                <input type="color" name="" id="">
                                <!-- <input type="radio" name="demo" class="demo demo1" id="demo1">
                                <label for="demo1">&nbsp;</label>
                                <input type="radio" name="demo" class="demo demo2" id="demo2">
                                <label for="demo2">&nbsp;</label>
                                <input type="radio" name="demo" class="demo demo3" id="demo3">
                                <label for="demo3">&nbsp;</label> -->

                            </p>
                        </div>
                        <div class="mx-4">
                            <p>Taille</p>
                            <p style="color:#000">
                                <a href="">S</a>
                                <a href="">M</a>
                                <a href="">L</a>
                                <a href="">XL</a>
                                <a href="">XXL</a>
                            </p>
                        </div>
                    </div>
                    <div class=" shop m-4">
                        <a class="px-5 mr-3" href="">SHOP NOW</a>
                        <img src="image/likerouge.png" />
                    </div>
                </div>
                <div class=" col">
                    <img src="image/newproduit.png" />
                </div>
            </div>
            <div id="pro2" class="row">
                <div class="detailproduit col">
                    <h1>NEW</h1>
                    <h3>COLLECTION 2</h3>
                    <p>Sac A Main Femme Fashion Elegance Chic Vernis
                        Monogramme Luxury
                    </p>
                    <div class="row ml-1">
                        <div class="mx-4">
                            <p>Prix</p>
                            <h6 style="color:#000">230 dh</h6>
                        </div>
                        <div class="mx-4">
                            <p>Coleur</p>
                            <p>
                                <input type="radio" name="demo" class="demo demo1" id="demo1">
                                <label for="demo1">&nbsp;</label>
                                <input type="radio" name="demo" class="demo demo2" id="demo2">
                                <label for="demo2">&nbsp;</label>
                                <input type="radio" name="demo" class="demo demo3" id="demo3">
                                <label for="demo3">&nbsp;</label>

                            </p>
                        </div>
                        <div class="mx-4">
                            <p>Taille</p>
                            <p style="color:#000">
                                <a href="">S</a>
                                <a href="">M</a>
                                <a href="">L</a>
                                <a href="">XL</a>
                                <a href="">XXL</a>
                            </p>
                        </div>
                    </div>
                    <div class=" shop m-4">
                        <a class="px-5 mr-3" href="">SHOP NOW</a>
                        <img src="image/likerouge.png" />
                    </div>
                </div>
                <div class=" col">
                    <img src="image/newproduit.png" />
                </div>
            </div>
            <div id="pro3" class="row">
                <div class="detailproduit col">
                    <h1>NEW</h1>
                    <h3>COLLECTION 3</h3>
                    <p>Sac A Main Femme Fashion Elegance Chic Vernis
                        Monogramme Luxury
                    </p>
                    <div class="row ml-1">
                        <div class="mx-4">
                            <p>Prix</p>
                            <h6 style="color:#000">230 dh</h6>
                        </div>
                        <div class="mx-4">
                            <p>Coleur</p>
                            <p>
                                <input type="radio" name="demo" class="demo demo1" id="demo1">
                                <label for="demo1">&nbsp;</label>
                                <input type="radio" name="demo" class="demo demo2" id="demo2">
                                <label for="demo2">&nbsp;</label>
                                <input type="radio" name="demo" class="demo demo3" id="demo3">
                                <label for="demo3">&nbsp;</label>

                            </p>
                        </div>
                        <div class="mx-4">
                            <p>Taille</p>
                            <p style="color:#000">
                                <a href="">S</a>
                                <a href="">M</a>
                                <a href="">L</a>
                                <a href="">XL</a>
                                <a href="">XXL</a>
                            </p>
                        </div>
                    </div>
                    <div class=" shop m-4">
                        <a class="px-5 mr-3" href="">SHOP NOW</a>
                        <img src="image/likerouge.png" />
                    </div>
                </div>
                <div class=" col">
                    <img src="image/newproduit.png" />
                </div>
            </div>
        </div>

        <h1 class="my-3 title">Nos Produits</h1>

        <!-- categories -->
        <div class="text-right">
            <a class="btnRech" onclick="filter();">
                <img src="image/filtericone.png" width="80" height="80" alt="">
            </a>
        </div>
        <div class="categories mb-3 row">
            <div class="p-3 px-4 cat <?php if($c==1){echo 'activecat';} ?>">
                <a href="index.php?c=1">
                <img src="image/icone/manteau.png" width="80" height="80" alt="">
                <h6 class="mt-2">Manteaux</h6>
                </a>
            </div>
            <div class="p-3 px-4 cat <?php if($c==2){echo 'activecat';} ?>">
                <a href="index.php?c=2">
                <img src="image/icone/sac-a-main.png" width="80" height="80" alt="">
                <h6 class="mt-2">Sac</h6>
                </a>
            </div>
            <div class="p-3 px-4 cat <?php if($c==3){echo 'activecat';} ?>">
                <a href="index.php?c=3">
                <img src="image/icone/bottes-femme.png" width="80" height="80" alt="">
                <h6 class="mt-2">Chaussure</h6>
                </a>
            </div>
            <div class="p-3 px-4 cat <?php if($c==4){echo 'activecat';} ?>">
                <a href="index.php?c=4">
                <img src="image/icone/robe.png" width="80" height="80" alt="">
                <h6 class="mt-2">Robes</h6>
                </a>
            </div>
            <div class="p-3 px-4 cat <?php if($c==5){echo 'activecat';} ?>">
                <a href="index.php?c=5">
                <img src="image/icone/tshirt.png" width="80" height="80" alt="">
                <h6 class="mt-2">T'shirt</h6>
                </a>
            </div>
            <div class="p-3 px-4 cat <?php if($c==6){echo 'activecat';} ?>">
                <a href="index.php?c=6">
                <img src="image/icone/Tracé 209.png" width="80" height="80" alt="">
                <h6 class="mt-2">Pantalons</h6>
                </a>
            </div>
            <div class="p-3 px-4 cat <?php if($c==7){echo 'activecat';} ?>">
                <a href="index.php?c=7">
                <img src="image/icone/accessoire.png" width="80" height="80" alt="">
                <h6 class="mt-2">ACCESSOIRES</h6>
                </a>
            </div>


        </div>

        <!-- listeproduit -->
        <div class="listeproduit mt-4 row">
            <div class="cardproduit m-3">
                <div>
                    <span class="nouveau">Nouveautés</span>
                    <span class="solde">-40%</span>
                    <div class="image">
                        <img src="image/pontalon.jpg" alt="" />
                    </div>
                </div>
                <div class="titre text-left">
                    Pantalon ample à cordon
                </div>
                <div class="info row mx-1">
                    <div class="col text-left">
                        <span><del>138.00 DH</del></span><span class="nvprix">99.00 DH</span>
                    </div>
                    <div class="col">
                        <input name="colorp" type="radio">
                        <input name="colorp" type="radio">
                        <input name="colorp" type="radio">
                    </div>
                    <div class="">
                        <a href=""><img src="image/likerouge.png" alt=""></a>
                    </div>
                </div>
            </div>

            <div class="cardproduit m-3">
                <div class="image">
                    <img src="image/pontalon.jpg" alt="" />
                </div>
                <div class="titre text-left">
                    Pantalon ample à cordon
                </div>
                <div class="info row mx-1">
                    <div class="col text-left">
                        <span>138.00 DH</span><span class="nvprix">99.00 DH</span>
                    </div>
                    <div class="col">
                        <input name="colorp" type="radio">
                        <input name="colorp" type="radio">
                        <input name="colorp" type="radio">
                    </div>
                    <div class="">
                        <a href=""><img src="image/likerouge.png" alt=""></a>
                    </div>
                </div>
            </div>

            <div class="cardproduit m-3">
                <div class="image">
                    <img src="image/pontalon.jpg" alt="" />
                </div>
                <div class="titre text-left">
                    Pantalon ample à cordon
                </div>
                <div class="info row mx-1">
                    <div class="col text-left">
                        <span>138.00 DH</span><span class="nvprix">99.00 DH</span>
                    </div>
                    <div class="col">
                        <input name="colorp" type="radio">
                        <input name="colorp" type="radio">
                        <input name="colorp" type="radio">
                    </div>
                    <div class="">
                        <a href=""><img src="image/likerouge.png" alt=""></a>
                    </div>
                </div>
            </div>

            <div class="cardproduit m-3">
                <div class="image">
                    <img src="image/pontalon.jpg" alt="" />
                </div>
                <div class="titre text-left">
                    Pantalon ample à cordon
                </div>
                <div class="info row mx-1">
                    <div class="col text-left">
                        <span>138.00 DH</span><span class="nvprix">99.00 DH</span>
                    </div>
                    <div class="col">
                        <input name="colorp" type="radio">
                        <input name="colorp" type="radio">
                        <input name="colorp" type="radio">
                    </div>
                    <div class="">
                        <a href=""><img src="image/likerouge.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="cardproduit m-3">
                <div class="image">
                    <img src="image/pontalon.jpg" alt="" />
                </div>
                <div class="titre text-left">
                    Pantalon ample à cordon
                </div>
                <div class="info row mx-1">
                    <div class="col text-left">
                        <span>138.00 DH</span><span class="nvprix">99.00 DH</span>
                    </div>
                    <div class="col">
                        <input name="colorp" type="radio">
                        <input name="colorp" type="radio">
                        <input name="colorp" type="radio">
                    </div>
                    <div class="">
                        <a href=""><img src="image/likerouge.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="cardproduit m-3">
                <div class="image">
                    <img src="image/pontalon.jpg" alt="" />
                </div>
                <div class="titre text-left">
                    Pantalon ample à cordon
                </div>
                <div class="info row mx-1">
                    <div class="col text-left">
                        <span>138.00 DH</span><span class="nvprix">99.00 DH</span>
                    </div>
                    <div class="col">
                        <input name="colorp" type="radio">
                        <input name="colorp" type="radio">
                        <input name="colorp" type="radio">
                    </div>
                    <div class="">
                        <a href=""><img src="image/likerouge.png" alt=""></a>
                    </div>
                </div>
            </div>

        </div>

        <h1 class="my-3 mb-5 title">Meilleur vendu</h1>

        <!-- Meilleur vendu -->
        <div class="meilleurvendu">
            <img class="img-fluid" src="image/Meilleur vendu.png" alt="">
        </div>

        <!-- notreboutique -->
        <div class="notreboutique mt-5 text-center">
            <img src="image/logo.png" alt="">
            <h3>Trouvez votre boutique</h3>

            <div class="row">
                <div class="col">
                    <div><img class="ville" src="image/rabat.jpg" alt=""></div>
                    <div class="m-3"><img class="local" src="image/maps-and-flags.png" alt=""></div>
                    <h4>Casablanc</h4>

                </div>
                <div class="col">
                    <div><img class="ville" src="image/rabat.jpg" alt=""></div>
                    <div class="m-3"><img class="local" src="image/maps-and-flags.png" alt=""></div>
                    <h4>Mékness</h4>
                    <p>Comming soon</p>
                </div>
                <div class="col">
                    <div><img class="ville" src="image/rabat.jpg" alt=""></div>
                    <div class="m-3"><img class="local" src="image/maps-and-flags.png" alt=""></div>
                    <h4>Sale</h4>

                </div>
                <div class="col">
                    <div><img class="ville" src="image/rabat.jpg" alt=""></div>
                    <div class="m-3"><img class="local" src="image/maps-and-flags.png" alt=""></div>
                    <h4>Marrakech</h4>
                    <p>Comming soon</p>
                </div>
                <div class="col">
                    <div><img class="ville" src="image/rabat.jpg" alt=""></div>
                    <div class="m-3"><img class="local" src="image/maps-and-flags.png" alt=""></div>
                    <h4>Rabat</h4>
                </div>
            </div>



        </div>

        <!-- contact -->

        


    </div>
    </div>
        <!-- <div id="filterbar" class="p-3 m-5 container animate__animated animate__backInLeft">
            <div class="row p-3" style="display: flex;justify-content: space-between;align-items: center;">
                <div class="p-1" style="background-color: #393D45;"><img src="image/icone/filter.png" width="40" height="40" alt=""></div>
                <a onclick="fermer();"><img src="image/icone/ferme.png" width="20" height="20" alt=""></a>
            </div> 
            <form action="">
                <div class="p-3 m-3">
                    <h3>Produit Catégorie</h3>
                    <div class="m-2"><input class="mx-2" type="radio" name="categorie"><span>Pantalons</span></div>
                    <div class="m-2"><input class="mx-2" type="radio" name="categorie"><span>Manteaux</span></div>
                    <div class="m-2"><input class="mx-2" type="radio" name="categorie"><span>Chaussure</span></div>
                    <div class="m-2"><input class="mx-2" type="radio" name="categorie"><span>Sac</span></div>
                    <div class="m-2"><input class="mx-2" type="radio" name="categorie"><span>Robes</span></div>
                    <div class="m-2"><input class="mx-2" type="radio" name="categorie"><span>T'shirt</span></div>
                    <div class="m-2"><input class="mx-2" type="radio" name="categorie"><span>ACCESSOIRES</span></div>
                </div>
                <hr>
                <div class="p-3 m-3">
                    <h3>Filtre par Prix</h3>
                    <input type="range">
                </div>
                <hr>
                <div class="p-3 m-3">
                    <h3>Filtre par Couleur</h3>
                                <input type="radio" name="demo" class="demo demo1" id="c1">
                                <label for="c1">&nbsp;</label>
                                <input type="radio" name="demo" class="demo demo2" id="c2">
                                <label for="c2">&nbsp;</label>
                                <input type="radio" name="demo" class="demo demo3" id="c3">
                                <label for="c3">&nbsp;</label>
                </div>
                <hr>
                <div class="p-3 m-3">
                    <h3>Filtre par Taille</h3>
                    <input type="radio" name="taille" id="demoT1" class="demoT demoT"/><label for="demoT1">S</label>
                    <input type="radio" name="taille" id="demoT2" class="demoT demoT"/><label for="demoT2">M</label>
                    <input type="radio" name="taille" id="demoT3" class="demoT demoT"/><label for="demoT3">L</label>
                    <input type="radio" name="taille" id="demoT4" class="demoT demoT"/><label for="demoT4">XL</label>
                    <input type="radio" name="taille" id="demoT5" class="demoT demoT"/><label for="demoT5">XXL</label>

                </div>
            </form>
        </div> -->
    <script>
    var cpt = 2;
        setInterval(function() {
            if (cpt == 1) {
                document.getElementById('pro1').style.display = 'none';
                document.getElementById('pro2').style.display = 'flex';
                document.getElementById('pro3').style.display = 'none';
                cpt++;
            }
            if (cpt == 2) {
                document.getElementById('pro1').style.display = 'none';
                document.getElementById('pro2').style.display = 'none';
                document.getElementById('pro3').style.display = 'flex';
                cpt++;
            }
            if (cpt == 3) {
                document.getElementById('pro1').style.display = 'flex';
                document.getElementById('pro2').style.display = 'none';
                document.getElementById('pro3').style.display = 'none';
                cpt++;
            }
            // if(cpt==4){
            //     cpt=1;
            // }

        }, 5000)
    </script>
    <!-- footer  -->
    <?php include 'footer.php';?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/js/bootstrap.min.js"
        integrity="sha512-8qmis31OQi6hIRgvkht0s6mCOittjMa9GMqtK9hes5iEQBQE/Ca6yGE5FsW36vyipGoWQswBj/QBm2JR086Rkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
            function filter(){
                document.getElementById('filterbar').style.display='block';
                document.getElementById('page').style.filter="blur(5px) grayscale(5%) ";
            }
            function fermer(){
                document.getElementById('filterbar').style.display='none';
                document.getElementById('page').style.filter="blur(0) grayscale(0)";
            }
        </script>

</body>

</html>