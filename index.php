<?php 
$c=$_GET['c'];
$p=$_GET['p'];
$t=$_GET['t'];
$g=$_GET['g'];
?>
<?php include 'header.php';?>

<body>
    <style>
    .favor .fa {
        color: red
    }
    .btnBoutique {
        border: 0;
        background: transparent
    }

    .btnBoutique:hover {
        border: 0;
        background: transparent
    }
    .choixcolor{
        height: 25px;
        width: 25px;
        /* background-color: #e1d106; */
        border-radius: 50%;
        display: inline-block;
    }
    @media screen and (max-width:700px) {
        .choixcolor{
            height: 15px;
            width: 15px;
        }
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
                <div class="p-2">
                    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
                    <style>
                        .swiper {
                            width: 100%;
                            height: 100%
                        }

                        .swiper-slide {
                            text-align: center;
                            font-size: 18px;
                            background: #fff;
                            display: -webkit-box;
                            display: -ms-flexbox;
                            display: -webkit-flex;
                            display: flex;
                            -webkit-box-pack: center;
                            -ms-flex-pack: center;
                            -webkit-justify-content: center;
                            justify-content: center;
                            -webkit-box-align: center;
                            -ms-flex-align: center;
                            -webkit-align-items: center;
                            align-items: center
                        }

                        .swiper-slide img {
                            display: block;
                            width: 100%;
                            height: 100%;
                            object-fit: cover
                        }

                        .swiper-pagination-progressbar-fill {
                            background: #e1d106 !important
                        }

                        .swiper-button-prev,
                        .swiper-button-next {
                            color: #e1d106
                        }
                    </style>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <?php $sqlcover="SELECT * FROM `module` ";
                             $resultcover = $cnx->query($sqlcover);
                             if ($rowcover = $resultcover->fetch_assoc()) {}
                             for ($x = 1; $x < 4; $x++) {?>
                                 
                            <div class="swiper-slide"><img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img'.$x]); ?>" class="img-fluid" /></div>
                                

                            <?php } ?>
                            <!-- <div class="swiper-slide"><img src="image/back2.png" class="img-fluid" /></div>
                            <div class="swiper-slide"><img src="image/back3.png" class="img-fluid" /></div>
                            <div class="swiper-slide"><img src="image/backClient2.jpg" class="img-fluid" /></div> -->
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                    <script>
                    var swiper = new Swiper(".mySwiper", {
                        autoplay: {
                            delay: 5000
                        },
                        pagination: {
                            el: ".swiper-pagination",
                            type: "progressbar"
                        },
                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev"
                        }
                    });
                    </script>
                </div>
            </div>
        </div>
        <div class="container">
            <h3 class="my-3 title">Nos Produits</h3>
            <div class="text-right">
                <a class="btnRech" onclick="filter()">
                    <img src="image/filtericone.png" width="80" height="80" alt="">
                </a>
            </div>
            <div class="categories mb-3 row" style="justify-content:space-around">
                <div  class="col text-center p-3  <?php if($_GET['g']=='1'){echo ' activecat ';}else{echo ' cat ';}?>">
                    <button >
                        <a href="index.php?g=1">
                            <img src="image/icone/sac-a-main.png" width="60" height="60" alt=""><br>
                            <span class="text-center" style="font-size: 10px;">Sacs</span>
                        </a>
                    </button>
                </div>
                <div  class="col text-center p-3  <?php if($_GET['g']=='2'){echo ' activecat ';}else{echo ' cat ';}?>">
                    <button>
                        <a href="index.php?g=2" >
                            <img src="image/icone/bottes-femme.png" width="60" height="60" alt=""><br>
                            <span class="text-center" style="font-size: 10px;">Chaussures</span>
                        </a>
                    </button>
                </div>
                <div  class="col text-center p-3  <?php if($_GET['g']=='4'){echo ' activecat ';}else{echo ' cat ';}?>">
                    <button>
                        <a href="index.php?g=4" >
                            <img src="image/icone/3081851.png" width="60" height="60" alt=""><br>
                            <span class="text-center" style="font-size: 10px;">Vetements</span>
                        </a>
                    </button>
                </div>
                <div  class="col text-center p-3  <?php if($_GET['g']=='3'){echo ' activecat ';}else{echo ' cat ';}?>">
                    <button>
                        <a href="index.php?g=3" >
                            <img src="image/icone/jewelry.png" width="60" height="60" alt=""><br>
                            <span class="text-center" style="font-size: 10px;">Accessoires</span>
                        </a>
                    </button>
                    
                </div>
            </div>

        </div>

            <div class="listeproduit mt-4 px-3 row animate__animated animate__fadeIn">
                <?php 
                $c=$_GET['c'];$p=$_GET['p'];$t=$_GET['t'];$g=empty($g)?" ":"    `group`='$g' AND ";$c=empty($c)?" ":"    `categorie`='$c' AND ";$p=empty($p)?" ":"    `prix`< $p AND ";$t=empty($t)?" ":"    `taille`='$t' AND ";$sql="SELECT * FROM `produits`  WHERE  $c   $p  $t $g  etatdel='ND' ORDER BY `date` DESC";$result=$cnx->query($sql);while($row=$result->fetch_assoc()){$nvprix=$row['prix']-$row['prix']*($row['remis']/100);$date=date_create($row['date']);$date1=date_format($date,'Y-m-d');$date2=date("Y-m-d");$diff=abs(strtotime(date("Y-m-d"))-strtotime($date1));$years=floor($diff/(365*60*60*24));$months=floor(($diff-$years*365*60*60*24)/(30*60*60*24));$delai=floor(($diff-$years*365*60*60*24-$months*30*60*60*24)/(60*60*24));
                ?>
                <div class="cardproduit m-2">
                    <div>
                        <?php if($delai<15){ ?>
                        <span class="nouveau">New</span>
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
                    <div class="info  mx-1">
                        <div class="col divprix text-left row">
                            <?php  if($row['remis']!= 0){?>
                            <h6 class="mr-2"><del><?php echo $row['prix']; ?> DH</del></h6>
                            <h6 class="nvprix mx-2"><?php echo $nvprix?> DH</h6>
                            <?php }else{?>
                            <h6 class="mr-2"><?php echo $row['prix']; ?> DH</h6>
                            <?php } ?>
                        </div>
                        <div class="col text-right">
                       
                            <?php $size=3; for ($x = 1; $x <= 3; $x++) {
                                $txtcolor='couleur'.$x; 
                                if($row[$txtcolor] == '#f2f2f2'){
                                    $size++;
                                } else{?>
                                <span class="choixcolor" style="background-color: <?php echo $row[$txtcolor];?>;"></span>
                            <?php } } ?>
                                
                        </div>
                        <?php  if($_SESSION["Reff"] != null) { ?>
                        <div class="favor">
                            <?php $reff=$row['Ref'];$sqlF="SELECT * FROM `favor` WHERE `RefProd` ='$reff'";$result1=$cnx->query($sqlF);if($row1=$result1->fetch_assoc()){ ?>
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

        <div class="container">
            <h3 class="my-3 mb-5 title">Meilleurs ventes</h3>
            <div class="meilleurvendu animate__animated animate__fadeIn">
                <style>
                    .parent1 {
                        display: grid;
                        grid-template-columns: repeat(5, 1fr);
                        grid-template-rows: repeat(2, 1fr);
                        grid-column-gap: 0;
                        grid-row-gap: 0;
                        height: 500px;
                        background-color: #fff;
                        box-shadow: 0px 0px 26px 9px rgba(0,0,0,0.34);
                        padding: 1rem;
                    }

                    .parent1 img {
                        width: 100%;
                        height: 100%
                    }

                    .parent1 div {
                        overflow: hidden
                    }

                    .divp1 { grid-area: 1 / 1 / 2 / 2; background-color: #fff; }
                    .divp2 { grid-area: 1 / 2 / 2 / 3; background-color: #fff; }
                    .divp3 { grid-area: 1 / 3 / 2 / 4; background-color: #fff; }
                    .divp4 { grid-area: 1 / 4 / 2 / 5; background-color: #fff; }
                    .divp5 { grid-area: 1 / 5 / 2 / 6; background-color: #fff; }
                    .divp6 { grid-area: 2 / 1 / 3 / 2; background-color: #fff; }
                    .divp7 { grid-area: 2 / 2 / 3 / 3; background-color: #fff; }
                    .divp8 { grid-area: 2 / 3 / 3 / 4; background-color: #fff; }
                    .divp9 { grid-area: 2 / 4 / 3 / 5; background-color: #fff; }
                    .divp10 { grid-area: 2 / 5 / 3 / 6; background-color: #fff; } 
                </style>
                <div class="parent1">
                    <?php $sql2="SELECT * FROM `produits` WHERE `meilleurV`='MV' ORDER BY `date` DESC LIMIT 10";$result2=$cnx->query($sql2);$cpt=0;while($row2=$result2->fetch_assoc()){$cpt++; ?>
                    <div class="divp<?php echo $cpt;?>"> <a
                            href="product-details.php?id=<?php echo $row2['id']; ?>"><img
                                src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row2['img1']); ?>"
                                alt=""></a> </div>
                    <?php } ?>
 
                </div>
            </div>
        </div>

        <div class="notreboutique mt-5 text-center animate__animated animate__fadeIn">   
            <img src="image/logo.png" alt="">
            <h3>Trouvez Votre Magasin</h3>        
            <div class="swiper  mt-3 mySwiper1 swiper-initialized swiper-horizontal swiper-pointer-events">
                <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-2960px, 0px, 0px);" id="swiper-wrapper-ce8320fae91df37a" aria-live="polite">

                
                <?php $sql="SELECT * FROM `boutiques1` ";$result=$cnx->query($sql);$cpt=0;while($row=$result->fetch_assoc()){$cpt++; ?>
                    <div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 216.667px; margin-right: 30px;background: transparent;" role="group" aria-label="1 / 9">
                        <div class="text-center">
                            <button
                                onclick="ville('<?php echo $row['ville'];?>','<?php echo $row['adresse'];?>','<?php echo $row['tele'];?>','<?php echo $row['localisation'];?>','image<?php echo $cpt;?>')"
                                type="button" class="btnBoutique" data-toggle="modal" data-target="#exampleModal1">
                                <img id="image<?php echo $cpt;?>" class="ville"
                                    src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['image']); ?>"
                                    alt="">
                                    <div class="m-3 divlocal" style="display: flex;justify-content: center;"><img class="local" src="image/maps-and-flags.png" alt=""></div>
                                    <h4><?php echo $row['ville'];?></h4><br>
                            </button>
                        </div>
                        
                    </div>
                <?php } ?>

                </div>
                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-ce8320fae91df37a"></div>
                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-ce8320fae91df37a"></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
        <script>

            var swiper1 = new Swiper(".mySwiper1", {
                slidesPerView: 2,
                spaceBetween: 15,
                slidesPerGroup: 2,
                loop: true,
                loopFillGroupWithBlank: true,

                navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
                },
            });
    
        </script>



            <!-- <div class="notreboutique mt-5 text-center animate__animated animate__fadeIn">
                <img src="image/logo.png" alt="">
                <h3>Trouvez Votre Magasin</h3>
                <div class="row">
                    <?php for($x;$x<3;$x++){?>
                    <?php $sql="SELECT * FROM `boutiques1` ";$result=$cnx->query($sql);$cpt=0;while($row=$result->fetch_assoc()){$cpt++; ?>
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
                    <?php } } ?>
                </div>
            </div> -->
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
            function ville(h, j, f, i, g) {
                document.getElementById("villeboutique").innerHTML = h;
                document.getElementById("adresse").innerHTML = j;
                document.getElementById("tele").innerHTML = f;
                document.getElementById("lien").href = i;
                document.getElementById("imageville2").src = document.getElementById(g).src
            }
            </script>
        
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