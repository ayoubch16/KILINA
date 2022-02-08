  
  <style>
                  #filterbar {
                        display: none;
                        position: absolute;
                        top: 50px;
                        margin-left: 50px;
                        z-index: 99;
                        background: #fff;
                        box-shadow:-1px -1px 14px 1px rgba(0,0,0,0.31);
                        width: 350px;
                        }
                        .resaux-sociaux{
                            position: fixed;
                            top: 30%;
                            left: 0;
                        }
                        .resaux-sociaux h5{
                            transform: rotate(-90deg);
                        }
  </style><!-- reduction -->
<div class="reduction ">
        <p>Jusqu'à - 50 % de réduction</p>
</div>
<div class="resaux-sociaux p-3">
    <h5 class="m-2">Follow us on</h5>
    <img src="image/icone/Instagram.png" width="30" height="30" alt="">
    
</div>
<div class="container">
        <!-- navbar -->
    <div class="navbar row ">
        <div class=""><a  onclick="filter()"><img src="image/bar.png" width="50" height="50"/></a></div>

        <div class="logo"><a href="index.php"><img src="image/logo.png" /></a></div>
        <div class="divleft">
                <a href=""><img src="image/like.png" /><span class="badge"> </span> </a>
                <a href=""><img src="image/panier.png"/><span class="badge"> </span> </a>
                <a href="">EN</a>|
                <a href="">العربية</a>|
                <a href="">FR</a>
           
        </div>
    </div>
</div>  

<div id="filterbar" class="p-3 m-5 container animate__animated animate__backInLeft">
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
                    <input type="range" name="prix">
                </div>
                <hr>
                <div class="p-3 m-3">
                    <h3>Filtre par Couleur</h3>
                                <input type="radio" name="demo" name="couleur" class="demo demo1" id="c1">
                                <label for="c1">&nbsp;</label>
                                <input type="radio" name="demo" name="couleur" class="demo demo2" id="c2">
                                <label for="c2">&nbsp;</label>
                                <input type="radio" name="demo" name="couleur" class="demo demo3" id="c3">
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
                <hr>
                <div class="p-3 text-center">
                        <input type="submit" value="filter" class="btn">

                </div>
            </form>
        </div>

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