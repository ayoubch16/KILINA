<style>
    .cat select {
        border: 1px solid grey;
        width: 100%;
        height: 50px;
        text-align: center
    }

    #filterbar {
        display: none;
        position: absolute;
        top: 50px;
        margin-left: 50px;
        z-index: 99;
        background: #fff;
        box-shadow: -1px -1px 14px 1px rgba(0, 0, 0, 0.31);
        width: 350px
    }

    #fermer:hover {
        cursor: pointer
    }

    .cat input[type="radio"] {
        background-color: #000
    }

    #prix1 {
        border: 0;
        width: 40px
    }

    input[type="radio"].taille {
        display: none
    }

    input[type="radio"].taille+label {
        color: gray
    }

    input[type="radio"].taille+label:hover {
        color: #000;
        cursor: pointer
    }

    input[type="radio"].taille1+label {
        background-color: #fff
    }

    input[type="radio"].taille1:checked+label {
        color: #000
    }

    input[type="radio"].taille2:checked+label {
        color: #000
    }

    input[type="radio"].taille3:checked+label {
        color: #000
    }

    input[type="radio"].taille4:checked+label {
        color: #000
    }

    input[type="radio"].taille5:checked+label {
        color: #000
    }

    .parent {
        position: fixed;
        top: 230px;
        left: 0;
        display: grid;
    }

    .parent img {
        filter: brightness(0%)
    }

    .parent img:hover {
        filter: brightness(100%)
    }

    .div1 p {
        transform: rotate(-90deg)
    }

    .div2 {
        grid-area: 2 / 1 / 3 / 2;
        text-align: center
    }

    .div3 {
        grid-area: 3 / 1 / 4 / 2;
        text-align: center
    }

    .div4 {
        grid-area: 4 / 1 / 5 / 2;
        text-align: center
    }

    .div5 {
        grid-area: 5 / 1 / 6 / 2;
        text-align: center
    }

    .compte:hover {
        text-decoration: none;
        color: #000
    }

    .btnfilter {
        width: 150px;
        border-radius: 10px;
        border: 1px solid #393d45;
        color: #fff;
        font-size: 2rem;
        padding: 5px;
        text-align: center;
        background-color: #393d45
    }

    .btnfilter:hover {
        color: #393d45;
        background-color: #fff
    }

    @media screen and (max-width: 580px) {
        .parent {
            display: none;
        }
    }
</style>
<div class="reduction animate__animated animate__fadeInDownBig">
    <?php 
            include 'dbconnect.php';
            $sql="SELECT * FROM `module` WHERE id=1";
            $result = $cnx->query($sql);
            if ($row = $result->fetch_assoc()) {
            }
            $sqlfooter="SELECT * FROM `footer` WHERE `id`=1";
            $resultfooter = $cnx->query($sqlfooter);
            if ($rowf = $resultfooter->fetch_assoc()) {
            }?>
        
    <p><?php echo $row['textTop'];?></p>
</div>
<div class="parent animate__animated animate__fadeInLeftBig">
    <div class="div1 mb-4 pb-3">
        <p>Follow us on</p>
    </div>
    <div class="div2 mb-2"> <a target="blank" href="<?php echo $rowf['instagramlien']; ?>"><img class=""
                src="image/instagram.png" width="20" height="20" alt="" /></a></div>
    <div class="div3 mb-2"> <a target="blank" href="<?php echo $rowf['facebooklien']; ?>"><img class=""
                src="image/facebook.png" width="15" height="20" alt="" /></a> </div>
    <div class="div4 mb-2"><a target="blank" href="<?php echo $rowf['twiterlien']; ?>"><img class="" src="image/twitter.png"
                width="20" height="20" alt="" /></a></div>
    <div class="div5 mb-2"> <a target="blank" href="<?php echo $rowf['tiktoklien']; ?>"><img class=""
                src="image/tik-tok.png" width="16" height="20" alt="" /></a> </div>
</div>
<div class="container">
    <div class="navbar row">
        <div class="animate__animated animate__jackInTheBox col text-left"><a onclick="filter()"><img src="image/bar.png" width="40"
                    height="40" /></a></div>
        <div class="logo animate__animated animate__jackInTheBox col text-center"><a href="index.php"><img src="image/logo.png" /></a>
        </div>
        <div class="divleft animate__animated animate__jackInTheBox col text-right">
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
            <a href="panier.php"><img src="image/panier.png" />
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
            <a class="compte" href="deconnecter.php"><img src="image/icone/utilisateur.png" width="20" height="20"
                    alt=""><?php echo $_SESSION['prenom'].' '.substr( $_SESSION['nom'], 0, 2);?></a>
            <?php } else {?>
            <a class="compte" href="connexion.php"><img src="image/icone/utilisateur.png" width="20" height="20"
                    alt="">Compte</a>
            <button onclick="test()"><img src="image/panier.png" /></button>
            <?php } ?>
        </div>
    </div>
</div>
<div id="filterbar" class="p-3 m-5 container animate__animated animate__backInLeft">
    <div class="row p-3" style="display:flex;justify-content:space-between;align-items:center">
        <div class="p-1" style="background-color:#393d45"><img src="image/icone/filter.png" width="40" height="40"
                alt=""></div>
        <a id="fermer" onclick="fermer()"><img src="image/icone/ferme.png" width="20" height="20" alt=""></a>
    </div>
    <form action="">
        <div class="p-3 m-3">
            <h3>Produit Catégorie</h3>
            <div class="m-2 cat">
                <select name="c" id="categorie">
                    <optgroup label="Sac">
                        <option class="sac" value="Cartables">Cartables</option>
                        <option class="sac" value="Sacs à Dos">Sacs à Dos</option>
                        <option class="sac" value="Portefeuilles">Portefeuilles</option>
                        <option class="sac" value="Sacs à main">Sacs à main</option>
                        <option class="sac" value="Sacs de soirée ">Sacs de soirée </option>
                        <option class="sac" value="Pochettes">Pochettes</option>
                    </optgroup>
                    <optgroup label="chaussure">
                        <option class="chaussure" value="Baskets">Baskets</option>
                        <option class="chaussure" value="Escarpins">Escarpins</option>
                        <option class="chaussure" value="Mocassins">Mocassins</option>
                        <option class="chaussure" value="Sandales">Sandales</option>
                        <option class="chaussure" value="Ballerines">Ballerines</option>
                        <option class="chaussure" value="Espadrilles">Espadrilles</option>
                        <option class="chaussure" value="Bottines">Bottines</option>
                        <option class="chaussure" value="Pantoufles">Pantoufles</option>
                        <option class="chaussure" value="Sabots">Sabots</option>
                    </optgroup>
                    <optgroup label="accessoires">
                        <option class="accessoires" value="Ceintures">Ceintures</option>
                        <option class="accessoires" value="Echarpes">Echarpes</option>
                        <option class="accessoires" value="Portes clés ">Portes clés </option>
                        <option class="accessoires" value="Casquettes">Casquettes</option>
                        <option class="accessoires" value="Chapeaux">Chapeaux</option>
                    </optgroup>
                    <optgroup label="vetement">
                        <option class="vetement" value="T-Shirts">T-Shirts</option>
                        <option class="vetement" value="Monteaux">Monteaux</option>
                        <option class="vetement" value="Vestes">Vestes</option>
                        <option class="vetement" value="Robes">Robes</option>
                        <option class="vetement" value="Chemise">Chemise</option>
                        <option class="vetement" value="Tops">Tops</option>
                        <option class="vetement" value="Débardeurs">Débardeurs</option>
                        <option class="vetement" value="Costumes">Costumes</option>
                        <option class="vetement" value="Tricot">Tricot</option>
                        <option class="vetement" value="Sweat">Sweat</option>
                        <option class="vetement" value="Bodys">Bodys</option>
                        <option class="vetement" value="Ensembles 2 piéces ">Ensembles 2 piéces </option>
                        <option class="vetement" value="Ensembles 3 piéces ">Ensembles 3 piéces </option>
                        <option class="vetement" value="Combinaisons">Combinaisons</option>
                        <option class="vetement" value="Jupes">Jupes</option>
                        <option class="vetement" value="Shorts">Shorts</option>
                        <option class="vetement" value="Pantalons">Pantalons</option>
                        <option class="vetement" value="Jeans">Jeans</option>
                        <option class="vetement" value="Leggings">Leggings</option>
                        <option class="vetement" value="Collants sport">Collants sport</option>
                        <option class="vetement" value="Maillots de Bain">Maillots de Bain</option>
                        <option class="vetement" value="Cap">Cap</option>
                        <option class="vetement" value="Borkinis">Borkinis</option>
                        <option class="vetement" value="Survettes">Survettes</option>
                        <option class="vetement" value="Capuchon">Capuchon</option>
                        <option class="vetement" value="CALECON">CALECON</option>
                        <option class="vetement" value="DOUDOUNE">DOUDOUNE</option>
                        <option class="vetement" value="DJELLABA">DJELLABA</option>
                        <option class="vetement" value="Jaket">Jaket</option>
                        <option class="vetement" value="SALOPETTE">SALOPETTE</option>
                    </optgroup>
                </select>
            </div>
        </div>
        <hr>
        <div class="p-3 m-3">
            <h3>Filtre par Prix</h3>
            <input type="range" id="myInput" max="1000" value="1000" name="p"><br>
            <span>Prix :</span><input class="text-center" type="text" value="1000" id="prix1"><span>DH</span>
        </div>

        <hr>
        <div class="p-3 text-center">
            <input class="btnfilter" type="submit" value="filter" class="btn">
        </div>
    </form>
</div>
<script>
    function filter() {
        document.getElementById("filterbar").style.display = "block";
        document.getElementById("page").style.filter = "blur(5px) grayscale(5%) "
    }

    function fermer() {
        document.getElementById("filterbar").style.display = "none";
        document.getElementById("page").style.filter = "blur(0) grayscale(0)"
    }
</script>
<script>
    $("#myInput").on("change", function() {
        $("#prix").text($(this).val());
        $("#prix1").val($(this).val())
    });
    $("#prix1").on("change", function() {
        $("#prix").text($(this).val());
        $("#myInput").val($(this).val())
    });
</script>
<style>
    .ListeCmd{
        position: absolute;
        top: 1%;
        right: 0;
        width: 460px;
        min-height: 100%;
        max-height: auto;
        background-color: #000;
        z-index: 100;
        box-shadow: 0px 0px 23px -2px #000000;
        display: none;
    }
    .ImgProd{
        /* width: 100px; */
        height:100px
    }
    .detaileCmd > p{
        font-size: 15px;
        margin-bottom: 0 !important;
    }
    .ListeCmd .divListeCmd  li {
        list-style: none;
    }
    .lien a{
        text-decoration: none;
        color:  #bfbfbf;
    }
    .lien a:hover{
        text-decoration: underline;
        color:  #bfbfbf;
    }
    .btn-close{
        border: none;
        background: transparent;
        color: #000;
        size: 15px;
        border-radius: 50%;
       
    }
    .btn-close:hover{
        color: red;
        size: 15px;

    }


    
    @media screen and (max-width:700px){
        .ListeCmd{
           
            width: 100%;
            height: 100%;
        }
    }
</style>
<script>
    
            
            
            function test(){
                document.getElementsByClassName("ListeCmd")[0].style.display = "block";
                document.getElementsByClassName("ListeCmd")[0].style.transform = "translateX(0%)";
                // document.getElementsByClassName("ListeCmd")[0].style.transition = "all 2s";
                const str = localStorage.getItem("panier2");
                const parsedObj = JSON.parse(str);
                let textPanier="";
                
                for(let i = 1; i < parsedObj.length; i++){
                    textPanier += `
                    <li>     
                            <div class="col m-2 p-2">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="`+parsedObj[i].image+`" class="ImgProd">
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title txttitre text-left">Mister Fusion</h5>
                                            </div>
                                            <div class="col">
                                                <h5 class="card-title txtprix text-right">Prix :  `+parsedObj[i].prix+` DH</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p class="card-text txttaille text-left">Taille : `+parsedObj[i].taille+`</p>
                                            </div>
                                            <div class="col">
                                                <p class="card-text txtquantite text-right">Quantité : `+parsedObj[i].quantite+`</p>
                                            </div>
                                        </div>
                                        <div class="row lien">
                                            <a class="mx-2" href="#" >Modifier</a>
                                            <a class="mx-2" href="#" >Suppression</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </li>
                    `;
                }
                document.getElementsByClassName('divListeCmd')[0].innerHTML = textPanier;
            }
</script>
<div class="ListeCmd bg-light" >
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class=" row">
                        <h5 class="card-title text-left col-sm p-1">Votre panier () </h5>
                        <!-- <button onclick="fermerPanier()" type="button" class="btn-close p-2" aria-label="Close">X</button> -->
                        <button class="btn btn-danger btn-close" onclick="fermerPanier()">X</button>
                </div>
                <!-- <button onclick="test()">test</button><br> -->
              
                
                <ol class="divListeCmd">
                    <li>     
                            <div class="col">
                              <h1>Panier Vide</h1>
                            </div>
                    </li>
                </ol>
                

            </div>
        </div>
    </div>
    
    <div class=" p-2" >
    <hr>
        <div class="row">
            <div class="col"> <h5 class="text-left">Sous-total :</h5> </div>
            <div class="col"> <h5 id="prixprod" class="text-right">428,00 DHS</h5> </div>
        </div>
    </div>


</div>


<script>
    function fermerPanier() {
        document.getElementsByClassName("ListeCmd")[0].style.display = "none";
        document.getElementsByClassName("ListeCmd")[0].style.transform = "translateX(-100%)";
        document.getElementsByClassName("ListeCmd")[0].style.transition = "all 2s";
    }

                               

    
 

</script>
