<?php include 'header.php';?>
<body>
    <style>
        input[type="radio"].demo {
        display: none;
        }
        input[type="radio"].demo + label {
        position: relative;
        padding-left: 1.3rem;
        }
        input[type="radio"].demo + label::before,
        input[type="radio"].demo + label::after {
        display: block;
        position: absolute;
        box-sizing: border-box;
        bottom: 0;
        left: 0;
        content:'';
        width: 1rem;
        height: 1rem; 
        border-radius: 1rem;
        }
        input[type="radio"].demo1 + label::before {
        border: 2px solid #000;
        background-color: #fff;
        }
        input[type="radio"].demo1:checked + label::after {
        background-color: #000;
        }
        input[type="radio"].demo2 + label::before {
        border: 2px solid #EDCA51;
        background-color: #fff;
        }
        input[type="radio"].demo2:checked + label::after {
        background-color: #EDCA51;
        }
        input[type="radio"].demo3 + label::before {
        border: 2px solid #00B7E8;
        background-color: #fff;
        }
        input[type="radio"].demo3:checked + label::after {
        background-color: #00B7E8;
        }
    </style>
    <!-- reduction -->
    <div class="reduction ">
        <p>Jusqu'à - 50 % de réduction</p>
    </div>

    <div class="container">
        <!-- navbar -->
    <div class="navbar row ">
        <div class="bar"><a href=""><img src="image/bar.png" /></a></div>
        <div class="logo"><a href=""><img src="image/logo.png" /></a></div>
        <div class="divleft">
                <a href=""><img src="image/like.png" /><span class="badge"> </span> </a>
                <a href=""><img src="image/panier.png"/><span class="badge"> </span> </a>
                <a href="">EN</a>|
                <a href="">العربية</a>|
                <a href="">FR</a>
           
        </div>
    </div>

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
                <li><a href="">Contacte</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="detailproduit col">
                <h1>NEW</h1>
                <h3>COLLECTION</h3>
                <p>Sac A Main Femme Fashion Elegance Chic Vernis
                    Monogramme Luxury
                </p>
                <div class="row ml-1">
                    <div class="mx-4">
                        <p>Prix</p>
                        <p >230 dh</p>
                    </div>
                        <div class="mx-4">
                            <p>Coleur</p>
                            <p>
                                <!-- <input  name="color" type="radio">
                                <input  name="color" type="radio">
                                <input  name="color" type="radio"> -->
                                <input type="radio" name="demo" class="demo demo1" id="demo1">
                                <label for="demo1">.</label>
                                <input type="radio" name="demo" class="demo demo2" id="demo2">
                                <label for="demo2">.</label>
                                <input type="radio" name="demo" class="demo demo3" id="demo3">
                                <label for="demo3">.</label>

                            </p>
                        </div>
                        <div class="mx-4">
                            <p>Taille</p>
                            <p>
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
                    <img src="image/likerouge.png"/>
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
        <a class="btnRech" href="">
            <img src="image/filtericone.png" alt="">
        </a>
    </div>
    <div class="categories mb-3 row">
        <div class="p-3 px-4 cat">
            <img src="image/sac.png" alt="">
            <h6>Manteaux</h6>
        </div>
        <div class="p-3 px-4 cat">
            <img src="image/sac.png" alt="">
            <h6>Sac</h6>
        </div>
        <div class="p-3 px-4 cat">
            <img src="image/sac.png" alt="">
            <h6>Chaussure</h6>
        </div>
        <div class="p-3 px-4 cat">
            <img src="image/sac.png" alt="">
            <h6>Robes</h6>
        </div>
        <div class="p-3 px-4  cat">
            <img src="image/sac.png" alt="">
            <h6>T'shirt</h6>
        </div>
        <div class="p-3 px-4 cat activecat">
            <img src="image/sac.png" alt="">
            <h6>Pantalons</h6>
        </div>
        <div class="p-3 px-4 cat">
            <img src="image/sac.png" alt="">
            <h6>ACCESSOIRES</h6>
        </div>
        

    </div>

    <!-- listeproduit -->
    <div class="listeproduit mt-4 row"> 
        <div class="cardproduit m-3">
            <div>
                <span class="nouveau">Nouveautés</span>
            <div class="image">
                <img src="image/pontalon.jpg" alt="" />
            </div>
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

    </div>
    <!-- footer  -->
    <footer>
        <div class="row">
            <div class="section1 col">
                <h3>Kilina</br>Collection</h3>
                <p>
                    ltima Syriarum est Palaestina per
                    intervalla magna protenta, cultis
                    abundans terris et nitidis et civitates
                    habens quasdam egregias, nullam
                    nulli cedentem sed sibi vicissim
                </p>
            </div>
            <div class="section2 col">
                <h6>Your equipment</h6>
                <ul>
                    <li><a href="">Journal</a></li>
                    <li><a href="">Mentions legales</a></li>
                    <li><a href="">Politique des cookies</a></li>
                    <li><a href="">Politique de donnees personnelles</a></li>
                    <li><a href="">Archives</a></li>
                </ul>
            </div>
            <div class="section4 col">
                <h4>NOUS CONTACTER</h4>
                <div class="p-3">
                    <img src="image/emailb.png" alt="">
                    <img src="image/facebookb.png" alt="">
                    <img src="image/instagramb.png" alt="">
                    <img src="image/linkdeinb.png" alt="">
                    <img src="image/telegramb.png" alt="">
                </div>
                <h6>Téle : 05 55 55 55</h6>
            </div>
        </div>

    </footer>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/js/bootstrap.min.js" integrity="sha512-8qmis31OQi6hIRgvkht0s6mCOittjMa9GMqtK9hes5iEQBQE/Ca6yGE5FsW36vyipGoWQswBj/QBm2JR086Rkw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>