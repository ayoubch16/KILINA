  
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
                 #fermer:hover {
                     cursor: pointer;
                 }
                 .cat input[type="radio"]{
                     background-color: #000;
                 }
                 #prix1{
                     border: none;
                     width: 40px;
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
                    .btnfilter{
                        width: 150px;
                        border-radius: 10px;
                        border: 1px solid #393d45;
                        color: #fff;
                        font-size: 2rem;
                        padding: 5px;
                        text-align: center;
                        background-color: #393d45;
                    }
                    .btnfilter:hover{
                        color: #393d45;
                        background-color: #fff;
                    }
  </style>
  <!-- reduction -->
<div class="reduction animate__animated animate__fadeInDownBig">
        <p>Jusqu'à - 50 % de réduction</p>
</div>
<div class="parent animate__animated animate__fadeInLeftBig">
    <div class="div1 mb-4 pb-3"> <p>Follow us on</p> </div>
    <div class="div2 mb-2"> <a target="blank" href="https://www.instagram.com/kilina.officiel/"><img class=" " src="image/instagram.png" width="20" height="20" alt="" /></a></div>
    <div class="div3 mb-2">  <a target="blank" href="https://www.facebook.com/Kilina.ma.officiel"><img class="" src="image/facebook.png" width="15" height="20" alt="" /></a> </div>
    <div class="div4 mb-2"><a target="blank" href="https://twitter.com/home"><img class="" src="image/twitter.png" width="20" height="20" alt="" /></a></div>
    <div class="div5 mb-2"> <a target="blank" href="https://www.tiktok.com/@kilina.officiel"><img class="" src="image/tik-tok.png" width="16" height="20" alt="" /></a> </div>
</div> 

<div class="container">
        <!-- navbar -->
    <div class="navbar row ">
        <div class="animate__animated animate__jackInTheBox"><a  onclick="filter()"><img src="image/bar.png" width="40" height="40"/></a></div>

        <div class="logo animate__animated animate__jackInTheBox"><a href="index.php"><img src="image/logo.png" /></a></div>
        <div class="divleft animate__animated animate__jackInTheBox">
        <?php if($_SESSION["Reff"] != null) { ?>
                <a href="favor.php"><img src="image/like.png" />
                <?php $sql1="SELECT count(*) FROM `favor` WHERE `etat`='V' ";
                      $result1 = $cnx->query($sql1);
                       if ($row1 = $result1->fetch_assoc()) { 
                           $nbrfavor=$row1['count(*)'];
                       }
                       if($nbrfavor!=0){
                ?>
                    <span class="badge"> </span>
                <?php } ?> 
                </a>
                <a href="panier.php"><img src="image/panier.png"/>
                <?php $sql1="SELECT count(*) FROM `panier` WHERE `etat`='V' ";
                      $result1 = $cnx->query($sql1);
                       if ($row1 = $result1->fetch_assoc()) { 
                           $nbrfavor=$row1['count(*)'];
                       }
                       if($nbrfavor!=0){
                ?>
                    <span class="badge"> </span>
                <?php } ?> 
                </a>
                <!-- <a class="mx-1" href="">EN</a>|
                <a class="mx-1" href="">العربية</a>|
                <a class="mx-1" href="">FR</a> -->
                <a class="compte" href="deconnecter.php"><img src="image/icone/utilisateur.png" width="20" height="20" alt=""><?php echo $_SESSION['prenom'].' '.substr( $_SESSION['nom'], 0, 2);?></a>
        <?php } else {?>
                <a class="compte" href="connexion.php"><img src="image/icone/utilisateur.png" width="20" height="20" alt="">Compte</a>
        <?php } ?>
           
        </div>
    </div>
</div>  

<div id="filterbar" class="p-3 m-5 container animate__animated animate__backInLeft">
            <div class="row p-3" style="display: flex;justify-content: space-between;align-items: center;">
                <div class="p-1" style="background-color: #393D45;"><img src="image/icone/filter.png" width="40" height="40" alt=""></div>
                <a id="fermer" onclick="fermer();"><img src="image/icone/ferme.png" width="20" height="20" alt=""></a>
            </div> 
            <form action="">
                <div class="p-3 m-3">
                    <h3>Produit Catégorie</h3>
                    <div class="m-2 cat"><input class="mx-2" type="radio" value="Pantalons" name="c"><span>Pantalons</span></div>
                    <div class="m-2 cat"><input class="mx-2" type="radio" value="Manteaux" name="c"><span>Survette</span></div>
                    <div class="m-2 cat"><input class="mx-2" type="radio" value="Chaussure" name="c"><span>Robes</span></div>
                    <div class="m-2 cat"><input class="mx-2" type="radio" value="Sac" name="c"><span>Monteaux</span></div>
                    <div class="m-2 cat"><input class="mx-2" type="radio" value="Robes" name="c"><span>Sac</span></div>
                    <div class="m-2 cat"><input class="mx-2" type="radio" value="Tshirt" name="c"><span>Chaussure</span></div>
                    <div class="m-2 cat"><input class="mx-2" type="radio" value="ACCESSOIRES" name="c"><span>Accessoires</span></div>
                </div>
                <hr>
                <div class="p-3 m-3">
                    <h3>Filtre par Prix</h3>
                    <input type="range" id="myInput" max="1000" value="1000" name="p"><br>
                    <span>Prix :</span><input class="text-center" type="text" value="1000" id="prix1"><span>DH</span>
                </div>
                <hr>


                <div class="p-3 m-3">
                    <h3>Filtre par Taille</h3>
                                <input type="radio" name="t" value="S" class="  taille taille1" id="taille1">
                                <label class="mx-2" for="taille1">S</label>
                                <input type="radio" name="t" value="M" class="  taille taille2" id="taille2">
                                <label class="mx-2" for="taille2">L</label>
                                <input type="radio" name="t" value="L" class="  taille taille3" id="taille3">
                                <label class="mx-2" for="taille3">M</label> 
                                <input type="radio" name="t" value="XL" class="  taille taille4" id="taille4">
                                <label class="mx-2" for="taille4">XL</label> 
                                <input type="radio" name="t" value="XXL" class="  taille taille5" id="taille5">
                                <label class="mx-2" for="taille5">XXL</label> 
                </div>
                <hr>
                <div class="p-3 text-center">
                        <input class="btnfilter" type="submit" value="filter" class="btn">

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
        <script>
                    $('#myInput').on("change", function() {
                        $('#prix').text($(this).val());
                        $('#prix1').val($(this).val());
                    });
                    $('#prix1').on("change", function() {
                        $('#prix').text($(this).val());
                        $('#myInput').val($(this).val());
                    });
        </script>