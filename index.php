<?php 
$c=$_GET['c'];
$p=$_GET['p'];
$t=$_GET['t'];
?>
<?php include 'header.php';?>

<body>
    <style>
    #pro2,
    #pro3 {
        display: none
    }

    .carousel-indicators li {
        background-color: #EDCA51 !important
    }

    #carouselExampleIndicators {
        height: 500px;
        overflow: hidden
    }

    .imgGrande {
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center
    }

    .colorImg {
        border-radius: 50%;
        overflow: hidden
    }

    .colorImg img {
        width: 30px;
        height: 30px
    }

    .colorImg img:hover {
        transform: scale(1.1);
        transition: 1s
    }

    .favor .fa {
        color: red
    }

    .btnDetail {
        width: auto;
        height: 40px;
        color: #000;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #e1d106;
        text-align: center;
        font-size: 1rem
    }

    .btnDetail:hover {
        text-decoration: none;
        background-color: #000;
        color: #e1d106
    }

    .btnBoutique {
        border: 0;
        background: transparent
    }

    .btnBoutique:hover {
        border: 0;
        background: transparent
    }
    </style>
    <?php include 'navbar.php';?>
    <div id="page">
        <div class="container">
            <div class="newcollection bg-white container animate__animated animate__fadeIn">
                <div class="menu row">
                    <ul>
                        <li><a href="">Femme</a></li>
                        <li style="color:gray">Homme</li>
                        <li style="color:gray">Enfant</li>
                    </ul>
                    <ul class="reclamation">
                        <li><a href="information.php?c=2">Reclamation</a></li> |
                        <li><a href="information.php?c=1">Recrutement</a></li>
                    </ul>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <?php 
                                $sqlc="SELECT * FROM `produits` ORDER BY `date` DESC LIMIT 1";
                                $resultc = $cnx->query($sqlc);
                                while ($rowc = $resultc->fetch_assoc()) {
                            ?>
                        <div class="carousel-item active">
                            <div class="row px-5">
                                <div class="imgGrande col-sm">
                                    <img class="img-fluid"
                                        src="<?php echo 'data:image/jpeg;base64,' . base64_encode($rowc['img1']); ?>" />
                                </div>
                                <div class="detailproduit col-sm">
                                    <h1>NEW</h1>
                                    <h2><?php echo $rowc['titre'];?></h2>
                                    <div class="row ml-1">
                                        <div class="mx-4">
                                            <h6 style="color:gray">Prix</h6>
                                            <h6 style="color:#000"><?php echo $rowc['prix'];?> DH</h6>
                                        </div>
                                        <div class="mx-4">
                                            <h6 style="color:gray">Coleur</h6>
                                            <?php 
                                                $categorie=$rowc['categorie'];
                                                $sql1="SELECT * FROM `produits` WHERE `categorie`='$categorie' ORDER BY `date` DESC LIMIT 3";
                                                $result1 =$cnx->query($sql1);
                                                while($row1=$result1->fetch_assoc()){
                                                $nvprix=$row['prix']-$row['prix']*($row['remis']/100);
                                            ?>
                                            <a class="colorImg"
                                                href="product-details.php?id=<?php echo $row1['id']; ?>"><img
                                                    src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row1['img1']); ?>"
                                                    alt=""></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="m-4">
                                        <a class="btnDetail"
                                            href="product-details.php?id=<?php echo $rowc['id']; ?>">Plus de Détails</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php } ?>
                        <?php 
                                $sqlc="SELECT * FROM `produits` ORDER BY `date` DESC LIMIT 1,3";
                                $resultc = $cnx->query($sqlc);
                                while ($rowc = $resultc->fetch_assoc()) {
                            ?>
                        <div class="carousel-item">
                            <div class="row px-5">
                                <div class="detailproduit col-sm">
                                    <h1>NEW</h1>
                                    <h2><?php echo $rowc['titre'];?></h2>
                                    <div class="row ml-1">
                                        <div class="mx-4">
                                            <h6 style="color:gray">Prix</h6>
                                            <h6 style="color:#000"><?php echo $rowc['prix'];?> DH</h6>
                                        </div>
                                        <div class="mx-4">
                                            <h6 style="color:gray">Coleur</h6>
                                            <?php 
                                                $categorie=$rowc['categorie'];
                                                $sql1="SELECT * FROM `produits` WHERE `categorie`='$categorie' ORDER BY `date` DESC LIMIT 3";
                                                $result1 =$cnx->query($sql1);
                                                while($row1=$result1->fetch_assoc()){
                                                $nvprix=$row['prix']-$row['prix']*($row['remis']/100);
                                            ?>
                                            <a class="colorImg"
                                                href="product-details.php?id=<?php echo $row1['id']; ?>"><img
                                                    src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row1['img1']); ?>"
                                                    alt=""></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="m-4">
                                        <a class="btnDetail"
                                            href="product-details.php?id=<?php echo $rowc['id']; ?>">Plus de Détails</a>
                                    </div>
                                </div>
                                <div class="imgGrande col-sm">
                                    <img class="img-fluid"
                                        src="<?php echo 'data:image/jpeg;base64,' . base64_encode($rowc['img1']); ?>" />
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span
                            style="filter:invert(30%) sepia(74%) saturate(809%) hue-rotate(356deg) brightness(200%) contrast(80%)"
                            class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <h3 class="my-3 title">Nos Produits</h3>
            <div class="text-right">
                <a class="btnRech" onclick="filter()">
                    <img src="image/filtericone.png" width="80" height="80" alt="">
                </a>
            </div>
            <div class="categories mb-3 row" style="justify-content:space-around">
                <div id="cat1" onclick="cat('1')" class="col text-center p-3 px-4 cat">
                    <button>
                        <img src="image/icone/sac-a-main.png" width="80" height="80" alt=""><br>
                        <span class="text-center">Sacs</span>
                    </button>
                </div>
                <div id="cat2" onclick="cat('2')" class="col text-center p-3 px-4 cat">
                    <button>
                        <img src="image/icone/bottes-femme.png" width="80" height="80" alt=""><br>
                        <span class="text-center">Chaussures</span>
                    </button>
                </div>
                <div id="cat3" onclick="cat('3')" class="col text-center p-3 px-4 cat">
                    <button>
                        <img src="image/icone/3081851.png" width="80" height="80" alt=""><br>
                        <span class="text-center">Vetements</span>
                    </button>
                </div>
                <div id="cat4" onclick="cat('4')" class="col text-center p-3 px-4 cat">
                    <button>
                        <img src="image/icone/jewelry.png" width="80" height="80" alt=""><br>
                        <span class="text-center">Accessoires</span>
                    </button>
                </div>
                <div class="sousgroup container rounded">
                    <div class="group">
                        <ul id="group1">
                            <li><a href="index.php?c=Cartables">Cartables</a></li>
                            <li><a href="index.php?c=Sacs à Dos">Sacs à Dos</a></li>
                            <li><a href="index.php?c=Portefeuilles">Portefeuilles</a></li>
                            <li><a href="index.php?c=Sacs à main">Sacs à main</a></li>
                            <li><a href="index.php?c=Sacs de soirée">Sacs de soirée</a></li>
                            <li><a href="index.php?c=Pochettes">Pochettes</a></li>
                        </ul>
                        <ul id="group2">
                            <li><a href="index.php?c=Baskets">Baskets</a></li>
                            <li><a href="index.php?c=Escarpins">Escarpins</a></li>
                            <li><a href="index.php?c=Mocassins">Mocassins</a></li>
                            <li><a href="index.php?c=Sandales">Sandales</a></li>
                            <li><a href="index.php?c=Ballerines">Ballerines</a></li>
                            <li><a href="index.php?c=Espadrilles">Espadrilles</a></li>
                            <li><a href="index.php?c=Bottines">Bottines</a></li>
                            <li><a href="index.php?c=Pantoufles">Pantoufles</a></li>
                            <li><a href="index.php?c=Sabots">Sabots</a></li>
                        </ul>
                        <ul id="group3">
                            <li><a href="index.php?c=T-Shirts">T-Shirts</a></li>
                            <li><a href="index.php?c=Monteaux">Monteaux</a></li>
                            <li><a href="index.php?c=Vestes">Vestes</a></li>
                            <li><a href="index.php?c=Robes">Robes</a></li>
                            <li><a href="index.php?c=Chemise">Chemise</a></li>
                            <li><a href="index.php?c=Tops">Tops</a></li>
                            <li><a href="index.php?c=Débardeurs">Débardeurs</a></li>
                            <li><a href="index.php?c=Costumes">Costumes</a></li>
                            <li><a href="index.php?c=Tricot">Tricot</a></li>
                            <li><a href="index.php?c=Sweat">Sweat</a></li>
                            <li><a href="index.php?c=Bodys">Bodys</a></li>
                            <li><a href="index.php?c=Ensembles 2 piéces">Ensembles 2 piéces</a></li>
                            <li><a href="index.php?c=Ensembles 3 piéces">Ensembles 3 piéces</a></li>
                            <li><a href="index.php?c=Combinaisons">Combinaisons</a></li>
                            <li><a href="index.php?c=Jupes">Jupes</a></li>
                            <li><a href="index.php?c=Shorts">Shorts</a></li>
                            <li><a href="index.php?c=Pantalons">Pantalons</a></li>
                            <li><a href="index.php?c=Jeans">Jeans</a></li>
                            <li><a href="index.php?c=Leggings">Leggings</a></li>
                            <li><a href="index.php?c=Collants sport">Collants sport</a></li>
                            <li><a href="index.php?c=Maillots de Bain">Maillots de Bain</a></li>
                            <li><a href="index.php?c=Cap">Cap</a></li>
                            <li><a href="index.php?c=Borkinis">Borkinis</a></li>
                            <li><a href="index.php?c=Survettes">Survettes</a></li>
                            <li><a href="index.php?c=Capuchon">Capuchon</a></li>
                            <li><a href="index.php?c=CALECON">CALECON</a></li>
                            <li><a href="index.php?c=DOUDOUNE">DOUDOUNE</a></li>
                            <li><a href="index.php?c=DJELLABA">DJELLABA</a></li>
                            <li><a href="index.php?c=Jaket">Jaket</a></li>
                            <li><a href="index.php?c=SALOPETTE">SALOPETTE</a></li>
                        </ul>
                        <ul id="group4">
                            <li><a href="index.php?c=Ceintures"></a>Ceintures</li>
                            <li><a href="index.php?c=Echarpes"></a>Echarpes</li>
                            <li><a href="index.php?c=Portes clés"></a>Portes clés</li>
                            <li><a href="index.php?c=Casquettes"></a>Casquettes</li>
                            <li><a href="index.php?c=Chapeaux"></a>Chapeaux</li>
                        </ul>
                    </div>
                </div>
            </div>
            <script>
            function cat(a) {
                if (a == "1") {
                    document.getElementById("cat1").classList.remove("cat");
                    document.getElementById("cat1").classList.add("activecat");
                    document.getElementById("cat2").classList.remove("activecat");
                    document.getElementById("cat3").classList.remove("activecat");
                    document.getElementById("cat4").classList.remove("activecat");
                    document.getElementById("cat2").classList.add("cat");
                    document.getElementById("cat3").classList.add("cat");
                    document.getElementById("cat4").classList.add("cat");
                    document.getElementById("group1").style.display = "flex";
                    document.getElementById("group2").style.display = "none";
                    document.getElementById("group3").style.display = "none";
                    document.getElementById("group4").style.display = "none"
                }
                if (a == "2") {
                    document.getElementById("cat2").classList.remove("cat");
                    document.getElementById("cat2").classList.add("activecat");
                    document.getElementById("cat1").classList.remove("activecat");
                    document.getElementById("cat3").classList.remove("activecat");
                    document.getElementById("cat4").classList.remove("activecat");
                    document.getElementById("cat1").classList.add("cat");
                    document.getElementById("cat3").classList.add("cat");
                    document.getElementById("cat4").classList.add("cat");
                    document.getElementById("group1").style.display = "none";
                    document.getElementById("group2").style.display = "flex";
                    document.getElementById("group3").style.display = "none";
                    document.getElementById("group4").style.display = "none"
                }
                if (a == "3") {
                    document.getElementById("cat3").classList.remove("cat");
                    document.getElementById("cat3").classList.add("activecat");
                    document.getElementById("cat1").classList.remove("activecat");
                    document.getElementById("cat2").classList.remove("activecat");
                    document.getElementById("cat4").classList.remove("activecat");
                    document.getElementById("cat1").classList.add("cat");
                    document.getElementById("cat2").classList.add("cat");
                    document.getElementById("cat4").classList.add("cat");
                    document.getElementById("group1").style.display = "none";
                    document.getElementById("group2").style.display = "none";
                    document.getElementById("group3").style.display = "flex";
                    document.getElementById("group4").style.display = "none"
                }
                if (a == "4") {
                    document.getElementById("cat4").classList.remove("cat");
                    document.getElementById("cat4").classList.add("activecat");
                    document.getElementById("cat1").classList.remove("activecat");
                    document.getElementById("cat2").classList.remove("activecat");
                    document.getElementById("cat3").classList.remove("activecat");
                    document.getElementById("cat1").classList.add("cat");
                    document.getElementById("cat2").classList.add("cat");
                    document.getElementById("cat3").classList.add("cat");
                    document.getElementById("group1").style.display = "none";
                    document.getElementById("group2").style.display = "none";
                    document.getElementById("group3").style.display = "none";
                    document.getElementById("group4").style.display = "flex"
                }
            }
            </script>
            <div class="listeproduit mt-4 row animate__animated animate__fadeIn">
                <?php 
            // $cat=$_GET['c'];
            $c=$_GET['c'];
            $p=$_GET['p']; 
            $t=$_GET['t'];
            // $cat=empty($cat)? " ":"   WHERE `categorie`='$cat' ";
            $c=empty($c)? " ":"    `categorie`='$c' AND ";
            $p=empty($p)? " ":"    `prix`< $p AND ";
            $t=empty($t)? " ":"    `taille`='$t' AND ";
            $sql="SELECT * FROM `produits`  WHERE  $c   $p  $t  etatdel='ND' ORDER BY `date` DESC";
            $result = $cnx->query($sql);
            while ($row = $result->fetch_assoc()) {
                    $nvprix=$row['prix']-$row['prix']*($row['remis']/100);
                    $date = date_create($row['date']);
                    $date1=date_format($date, 'Y-m-d');
                    $date2 = date("Y-m-d");
                    $diff = abs(strtotime( date("Y-m-d")) - strtotime($date1));
                    $years = floor($diff / (365*60*60*24));
                    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                    $delai = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                ?>
                <div class="cardproduit m-3 mt-5">
                    <div>
                        <?php if($delai<7){ ?>
                        <span class="nouveau">Nouveautés</span>
                        <?php } ?>
                        <?php  if($row['remis']!= 0){?>
                        <span class="solde">-<?php echo $row['remis'];?>%</span>
                        <?php } ?>
                        <div class="image bg-white">
                            <a href="product-details.php?id=<?php echo $row['id'];?>"><img
                                    src="<?php echo 'data:image/webp;base64,' . base64_encode($row['img1']); ?>"
                                    alt="" /></a>
                        </div>
                    </div>
                    <div class="titre text-left">
                        <?php echo strtoupper($row['titre']);?>
                    </div>
                    <div class="info row mx-1">
                        <div class="col text-left row">
                            <?php  if($row['remis']!= 0){?>
                            <h6 class="mr-2"><del><?php echo $row['prix']; ?> DH</del></h6>
                            <h6 class="nvprix mx-2"><?php echo $nvprix?> DH</h6>
                            <?php }else{?>
                            <h6 class="mr-2"><?php echo $row['prix']; ?> DH</h6>
                            <?php } ?>
                        </div>
                        <div class="col text-center">
                            <?php  $cate=$row['categorie'];
                             $sqlcolor="SELECT * FROM `produits` WHERE `categorie`='$cate'  ORDER BY `date` DESC LIMIT 3";
                             $resultcolor = $cnx->query($sqlcolor);
                              while ($rowcolor = $resultcolor->fetch_assoc()) {
                             ?>
                            <a class="colorImg" href="roduct-details.php?id=<?php echo $rowcolor['id'];?>">
                                <img style="border-radius:50%;box-shadow:2px 5px 13px -3px rgba(0,0,0,0.66)"
                                    src="<?php echo 'data:image/jpeg;base64,' . base64_encode($rowcolor['img1']); ?>"
                                    alt=""></a>
                            <?php } ?>
                        </div>
                        <?php  if($_SESSION["Reff"] != null) { ?>
                        <div class="favor">
                            <?php 
                            $reff=$row['Ref'];
                            $sqlF="SELECT * FROM `favor` WHERE `RefProd` ='$reff'";
                            $result1 = $cnx->query($sqlF);
                            if ($row1 = $result1->fetch_assoc()) {
                        ?>
                            <a class="lienfav p-1"
                                href="deletfavor.php?ref=<?php echo $row['Ref'] ;?>&refclient=<?php echo  $_SESSION["Reff"] ;?>">
                                <i style="font-size:1.5rem" class="fa fa-heart" aria-hidden="true"></i></a>
                            <?php }else{ ?>
                            <a class="lienfav p-1"
                                href="ajouterfavor.php?ref=<?php echo $row['Ref'] ;?>&refclient=<?php echo  $_SESSION["Reff"] ;?>">
                                <i style="font-size:1.5rem" class="fa fa-heart-o" aria-hidden="true"></i></a>
                            <?php } ?>
                        </div>
                        <?php   } ?>
                    </div>
                </div>
                <?php }  ?>
            </div>
            <h3 class="my-3 mb-5 title">Meilleur vendu</h3>
            <div class="meilleurvendu animate__animated animate__fadeIn">
                <style>
                .parent1 {
                    display: grid;
                    grid-template-columns: repeat(5, 1fr);
                    grid-template-rows: repeat(2, 1fr);
                    grid-column-gap: 0;
                    grid-row-gap: 0;
                    height: 500px;
                    background-color: #fff
                }

                .parent1 img {
                    width: 100%;
                    height: 100%
                }

                .parent1 div {
                    overflow: hidden
                }

                .divp1 {
                    grid-area: 1 / 1 / 3 / 2;
                    border: 1px solid #fdfdfd;
                    background-color: #fff
                }

                .divp2 {
                    grid-area: 1 / 2 / 2 / 3;
                    border: 1px solid #fdfdfd;
                    background-color: #fff
                }

                .divp3 {
                    grid-area: 2 / 2 / 3 / 3;
                    border: 1px solid #fdfdfd;
                    background-color: #fff
                }

                .divp4 {
                    grid-area: 2 / 3 / 3 / 4;
                    border: 1px solid #fdfdfd;
                    background-color: #fff
                }

                .divp5 {
                    grid-area: 1 / 4 / 2 / 5;
                    border: 1px solid #fdfdfd;
                    background-color: #fff
                }

                .divp6 {
                    grid-area: 2 / 4 / 3 / 5;
                    border: 1px solid #fdfdfd;
                    background-color: #fff
                }

                .divp7 {
                    grid-area: 1 / 5 / 3 / 6;
                    border: 1px solid #fdfdfd;
                    background-color: #fff
                }

                .divp8 {
                    grid-area: 1 / 3 / 2 / 4;
                    background-color: #fcea01;
                    position: relative;
                    transform: scale(1.2);
                    display: grid;
                    padding: 10px;
                    border-radius: 50%;
                    align-items: flex-end;
                    border: 1px solid #fcea01
                }
                </style>
                <div class="parent1">
                    <?php
                    $sql2="SELECT * FROM `produits` WHERE `meilleurV`='MV' ORDER BY `date` DESC LIMIT 7";
                    $result2 = $cnx->query($sql2);
                    $cpt=0;
                    while ($row2 = $result2->fetch_assoc()) {
                        $cpt++;
                    ?>
                    <div class="divp<?php echo $cpt;?>"> <a
                            href="product-details.php?id=<?php echo $row2['id']; ?>"><img
                                src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row2['img1']); ?>"
                                alt=""></a> </div>
                    <?php } ?>
                    <div class="divp8 text-center">
                        <h1>Best</h1>
                        <img style="filter:brightness(0%)" src="image/logo.png" width="150" height="60" alt="">
                        <h6>
                            <?php 
                        include 'dbconnect.php';
                        $sql="SELECT * FROM `module` WHERE id=1";
                        $result = $cnx->query($sql);
                        if ($row = $result->fetch_assoc()) {
                            echo $row['textMV'];
                        }
                    ?>
                        </h6>
                        <h6>- <?php echo date("Y"); ?> -</h6>
                    </div>
                </div>
            </div>
            <div class="notreboutique mt-5 text-center animate__animated animate__fadeIn">
                <img src="image/logo.png" alt="">
                <h3>Trouvez Votre Magasin</h3>
                <div class="row">
                    <?php $sql="SELECT * FROM `boutiques1` ";
                   $result = $cnx->query($sql);
                   $cpt=0;
                   while ($row = $result->fetch_assoc()) {
                       $cpt++;
                ?>
                    <div class="col">
                        <div>
                            <button
                                onclick="ville('<?php echo $row['ville'];?>','<?php echo $row['adresse'];?>','<?php echo $row['tele'];?>','<?php echo $row['localisation'];?>','image<?php echo $cpt;?>')"
                                type="button" class="btnBoutique" data-toggle="modal" data-target="#exampleModal1">
                                <img id="image<?php echo $cpt;?>" class="ville"
                                    src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['image']); ?>"
                                    alt="">
                            </button>
                        </div>
                        <div class="m-3"><img class="local" src="image/maps-and-flags.png" alt=""></div>
                        <h4><?php echo $row['ville'];?></h4>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="text-center" id="villeboutique"></h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img id="imageville2" src="image/casa.webp" class="img-fluid m-2" alt="">
                            <div class="row">
                                <div class="col-3">
                                    Adresse :
                                </div>
                                <div class="col">
                                    <p id="adresse"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    Telephone :
                                </div>
                                <div class="col">
                                    <p id="tele"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    Localisation :
                                </div>
                                <div class="col">
                                    <a id="lien" target="blanc" href="">Localisation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
            function ville(e, c, b, d, a) {
                document.getElementById("villeboutique").innerHTML = e;
                document.getElementById("adresse").innerHTML = c;
                document.getElementById("tele").innerHTML = b;
                document.getElementById("lien").href = d;
                document.getElementById("imageville2").src = document.getElementById(a).src
            }
            </script>
        </div>
    </div>
    <?php include 'footer.php';?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/js/bootstrap.min.js"
        integrity="sha512-8qmis31OQi6hIRgvkht0s6mCOittjMa9GMqtK9hes5iEQBQE/Ca6yGE5FsW36vyipGoWQswBj/QBm2JR086Rkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    function filter() {
        document.getElementById("filterbar").style.display = "block";
        document.getElementById("page").style.filter = "blur(5px) grayscale(5%) "
    }

    function fermer() {
        document.getElementById("filterbar").style.display = "none";
        document.getElementById("page").style.filter = "blur(0) grayscale(0)"
    };
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>