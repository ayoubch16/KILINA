  
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
                 input[type="radio"].taille {
                    display: none;
                }

                input[type="radio"].taille+label {
                    color:gray;
                }
                input[type="radio"].taille+label:hover {
                    color:#000;
                    cursor: pointer;
                }

                input[type="radio"].taille1+label {
                    background-color: #fff;
                }

                input[type="radio"].taille1:checked+label {
                    color: #000;
                }

                input[type="radio"].taille2:checked+label {
                    color: #000;
                }

                input[type="radio"].taille3:checked+label {
                    color: #000;
                }

                input[type="radio"].taille4:checked+label {
                    color: #000;
                }
                input[type="radio"].taille5:checked+label {
                    color: #000;
                }

                input[type="radio"].color {
                    display: none;
                }
                input[type="radio"].color+label {
                    position: relative;
                    padding-left: 1.3rem;
                }

                input[type="radio"].color+label::before,
                input[type="radio"].color+label::after {
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

                input[type="radio"].color1+label::before {
                    border: 2px solid #640010;
                    background-color: #fff;
                }

                input[type="radio"].color1:checked+label::after {
                    background-color: #640010;
                }

                input[type="radio"].color2+label::before {
                    border: 2px solid #D5CCC7;
                    background-color: #fff;
                    color: #fff;
                }

                input[type="radio"].color2:checked+label::after {
                    background-color: #D5CCC7;
                }

                input[type="radio"].color3+label::before {
                    border: 2px solid #110E0F;
                    background-color: #fff;
                }

                input[type="radio"].color3:checked+label::after {
                    background-color: #110E0F;
                }
                        .parent {
                            position: fixed;
                            top: 230px;
                            left: 0px;
                            display: grid;
                            z-index: -9;
                            
                            }
                            .parent img {
                                filter: brightness(0%);
                            }
                            .parent img:hover {
                                filter: brightness(100%);
                            }
                            .div1 p {
                                transform: rotate(-90deg);
                                
                            }
                            .div2 { grid-area: 2 / 1 / 3 / 2;
                                    text-align: center;
                            }
                            .div3 { grid-area: 3 / 1 / 4 / 2;
                                    text-align: center;
                            }
                            .div4 { grid-area: 4 / 1 / 5 / 2;
                                    text-align: center;
                            }
                            .div5 { grid-area: 5 / 1 / 6 / 2;
                                    text-align: center;
                            } 
                    .compte:hover {
                            text-decoration: none;
                            color: #000;
                    }
  </style>
  <!-- reduction -->
<div class="reduction ">
        <p>Jusqu'à - 50 % de réduction</p>
</div>
<?php
session_start();
echo 'test'.isset($_SESSION ['id']);
?>

<div class="parent">
    <div class="div1 mb-4 pb-3"> <p>Follow us on</p> </div>
    <div class="div2 mb-2"> <a href=""><img class=" " src="image/instagram.png" width="20" height="20" alt="" /></a></div>
    <div class="div3 mb-2">  <a href=""><img class="" src="image/facebook.png" width="15" height="20" alt="" /></a> </div>
    <div class="div4 mb-2"><a href=""><img class="" src="image/twitter.png" width="20" height="20" alt="" /></a></div>
    <div class="div5 mb-2"> <a href=""><img class="" src="image/tik-tok.png" width="16" height="20" alt="" /></a> </div>
</div> 

<div class="container">
        <!-- navbar -->
    <div class="navbar row ">
        <div class=""><a  onclick="filter()"><img src="image/bar.png" width="50" height="50"/></a></div>

        <div class="logo"><a href="index.php"><img src="image/logo.png" /></a></div>
        <div class="divleft">
                <a href="favor.php"><img src="image/like.png" /><span class="badge"> </span> </a>
                <a href="panier.php"><img src="image/panier.png"/><span class="badge"> </span> </a>
                <!-- <a class="mx-1" href="">EN</a>|
                <a class="mx-1" href="">العربية</a>|
                <a class="mx-1" href="">FR</a> -->
                <?php if($_SESSION["Reff"] != null) { ?>
                <a class="compte" href=""><img src="image/icone/utilisateur.png" width="20" height="20" alt="">Ayoub CH</a>
                <?php } else {?>
                <a class="compte" href="connexion.php"><img src="image/icone/utilisateur.png" width="20" height="20" alt="">Compte</a>
                <?php } ?>
           
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
                    <div class="m-2"><input class="mx-2" type="radio" value="Pantalons" name="categorie"><span>Pantalons</span></div>
                    <div class="m-2"><input class="mx-2" type="radio" value="Manteaux" name="categorie"><span>Manteaux</span></div>
                    <div class="m-2"><input class="mx-2" type="radio" value="Chaussure" name="categorie"><span>Chaussure</span></div>
                    <div class="m-2"><input class="mx-2" type="radio" value="Sac" name="categorie"><span>Sac</span></div>
                    <div class="m-2"><input class="mx-2" type="radio" value="Robes" name="categorie"><span>Robes</span></div>
                    <div class="m-2"><input class="mx-2" type="radio" value="Tshirt" name="categorie"><span>T'shirt</span></div>
                    <div class="m-2"><input class="mx-2" type="radio" value="ACCESSOIRES" name="categorie"><span>ACCESSOIRES</span></div>
                </div>
                <hr>
                <div class="p-3 m-3">
                    <h3>Filtre par Prix</h3>
                    <input type="range" name="prix">
                </div>
                <hr>
                <div class="p-3 m-3">
                    <h3>Filtre par Couleur</h3>
                                <input type="radio" name="color" value="#640010"  class="color color1" id="c1">
                                <label for="c1">&nbsp;</label>
                                <input type="radio" name="color" value="#D5CCC7"  class="color color2" id="c2">
                                <label for="c2">&nbsp;</label>
                                <input type="radio" name="color" value="#110E0F"  class="color color3" id="c3">
                                <label for="c3">&nbsp;</label>
                </div>
                <hr>
                <div class="p-3 m-3">
                    <h3>Filtre par Taille</h3>
                                <input type="radio" name="taille" value="S" class="taille taille1" id="taille1">
                                <label for="taille1">S</label>
                                <input type="radio" name="taille" value="M" class="taille taille2" id="taille2">
                                <label for="taille2">L</label>
                                <input type="radio" name="taille" value="L" class="taille taille3" id="taille3">
                                <label for="taille3">M</label> 
                                <input type="radio" name="taille" value="XL" class="taille taille4" id="taille4">
                                <label for="taille4">XL</label> 
                                <input type="radio" name="taille" value="XXL" class="taille taille5" id="taille5">
                                <label for="taille5">XXL</label> 
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