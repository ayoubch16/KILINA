<?php 
$c=$_GET['c'];
$p=$_GET['p'];
$t=$_GET['t'];
?>

<?php include 'header.php';?>

<body>
    <style>
      
      #carouselExampleIndicators{
        /* min-height: 900px; */
    }
   

        #pro2,
        #pro3 {
            display: none;
        }
        /* **********Taille********* */
        .carousel-indicators li {
            background-color: #EDCA51 !important;
        }

        #carouselExampleIndicators {
            height: 500px;
            overflow: hidden;
        }
        .imgGrande {
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .colorImg {
        border-radius: 50%;
        overflow: hidden;
        }
        .colorImg img {
            width: 30px;
            height: 30px;
        }
        .colorImg img:hover {
            transform: scale(1.1);
            transition: 1s;
        }
        .favor .fa {
            color: red;
        }
        .btnDetail  {       
            width: auto;
            height: 40px;
            color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #E1D106;
            text-align: center;
            font-size: 1rem;
        }
        .btnDetail:hover {
            text-decoration: none;
            background-color: #000;
            color: #E1D106;
        }
        .btnBoutique{
            border: none;
            background: transparent;
        }
        .btnBoutique:hover{
            border: none;
            background: transparent;
        }
    
   
    </style>

    <?php include 'navbar.php';?>
    <div id="page">
         <!-- navbar -->
         
    <div  class="container ">
        <!-- newcollection -->
        <div class="newcollection bg-white container animate__animated animate__fadeIn">
            <div class="menu row">
                <ul>
                    <li><a href="">Femme</a></li>
                    <li style="color:gray">Homme</li>
                    <li style="color:gray">Enfant</li>
                </ul>
                <ul class="reclamation">
                    <li><a href="">Reclamation</a></li> |
                    <li><a href="">Recturment</a></li> 
                    <!-- <li><a href="">Contact</a></li> -->
                </ul>
            </div>

            <!-- test Slider -->
            <div  id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <?php 
                                $sqlc="SELECT * FROM `produits` ORDER BY `date` DESC LIMIT 1";
                                $resultc = $cnx->query($sqlc);
                                while ($rowc = $resultc->fetch_assoc()) {
                            ?>
                            <div class="carousel-item active">
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
                                            <a class="colorImg"  href="product-details.php?id=<?php echo $row1['id']; ?>"><img  src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row1['img1']); ?>" alt=""></a>
                                            <?php } ?>

                                        </div>

                                    </div>
                                    <div class="  m-4">
                                        <a class="btnDetail" href="product-details.php?id=<?php echo $rowc['id']; ?>">Plus de Détails</a>
                                    </div>
                                </div>
                                <div class="imgGrande col-sm">
                                    <img class="img-fluid" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($rowc['img1']); ?>" />
                                </div>
                                </div>
                            </div>
                            <?php } ?>
                            <?php 
                                $sqlc="SELECT * FROM `produits` ORDER BY `date` DESC LIMIT 1,3";
                                $resultc = $cnx->query($sqlc);
                                while ($rowc = $resultc->fetch_assoc()) {
                            ?>
                            <div class="carousel-item ">
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
                                            <a class="colorImg"  href="product-details.php?id=<?php echo $row1['id']; ?>"><img  src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row1['img1']); ?>" alt=""></a>
                                            <?php } ?>

                                        </div>

                                    </div>
                                    <div class="  m-4">
                                    <a class="btnDetail " href="product-details.php?id=<?php echo $rowc['id']; ?>">Plus de Détails</a>

                                    </div>
                                </div>
                                <div class="imgGrande col-sm">
                                    <img class="img-fluid" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($rowc['img1']); ?>" />
                                </div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                        <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a> -->
                        <a   class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span style="filter: invert(30%) sepia(74%) saturate(809%) hue-rotate(356deg) brightness(200%) contrast(80%);" class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                 
            </div>

            <!-- test Slider -->

        </div>

        <h3 class="my-3 title">Nos Produits</h3>

        <!-- categories -->
        <div class="text-right">
            <a class="btnRech" onclick="filter();">
                <img src="image/filtericone.png" width="80" height="80" alt="">
            </a>
        </div>
        <div class="categories mb-3 row" style="justify-content: space-around;">
            <div class="p-3 px-4 cat <?php if($c=='Pantalons'){echo 'activecat';} ?>">
                <a href="index.php?c=Pantalons">
                <img src="image/icone/Tracé 209.png" width="60" height="80" alt=""><br>
                <span class="text-center">Pantalons</span>
                </a>
            </div>
            <div class="p-3 px-4 cat <?php if($c=='Survette'){echo 'activecat';} ?>">
                <a href="index.php?c=Survette">
                <img src="image/icone/tshirt.png" width="80" height="80" alt=""><br>
                <span class="text-center">Survette</span>
                </a>
            </div>
            <div class="p-3 px-4 cat <?php if($c=='Robes'){echo 'activecat';} ?>">
                <a href="index.php?c=Robes">
                <img src="image/icone/robe.png" width="80" height="80" alt=""><br>
                <span class="text-center">Robes</span>
                </a>
            </div>
            <div class="p-3 px-4 cat <?php if($c=='Manteaux'){echo 'activecat';} ?>">
                <a href="index.php?c=Manteaux">
                <img src="image/icone/manteau.png" width="80" height="80" alt=""><br>
                <span class="text-center">Manteaux</span>
                </a>
            </div>
            <div class="p-3 px-4 cat <?php if($c=='Sac'){echo 'activecat';} ?>">
                <a href="index.php?c=Sac">
                <img src="image/icone/sac-a-main.png" width="80" height="80" alt=""><br>
                <span class="text-center">Sac</span>
                </a>
            </div>
            <div class="p-3 px-4 cat <?php if($c=='Chaussure'){echo 'activecat';} ?>">
                <a href="index.php?c=Chaussure">
                <img src="image/icone/bottes-femme.png" width="80" height="80" alt=""><br>
                <span class="text-center">Chaussure</span>
                </a>
            </div>
            <div class="p-3 px-4 cat <?php if($c=='ACCESSOIRES'){echo 'activecat';} ?>">
                <a href="index.php?c=ACCESSOIRES">
                <img src="image/icone/accessoire.png" width="80" height="80" alt=""><br>
                <span class="text-center">ACCESSOIRES</span>
                </a>
            </div>


        </div>

        <!-- listeproduit -->
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
                        <a href="product-details.php?id=<?php echo $row['id'];?>"><img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img1']); ?>" alt="" /></a>
                    </div>
                </div>
                <div class="titre text-left">
                    <?php echo strtoupper($row['titre']);?>
                </div>
                <div class="info row mx-1">
                    <div class="col text-left row">
                        <!-- <?php  if($row['remis']!= 0){?>
                            <span class="mx-2"><del><?php echo $row['prix']; ?> DH</del></span><span class="nvprix mx-2"><?php echo $nvprix?> DH</span>
                        <?php }else{?>    
                            <span class="mx-2"><?php echo $row['prix']; ?> DH</span>
                        <?php } ?> -->
                        <?php  if($row['remis']!= 0){?>
                            <h6 class="mr-2"><del><?php echo $row['prix']; ?> DH</del></h6><h6 class="nvprix mx-2"><?php echo $nvprix?> DH</h6>
                        <?php }else{?>    
                            <h6 class="mr-2"><?php echo $row['prix']; ?> DH</h6>
                        <?php } ?>
                    </div>
                    <div class="col  text-center">
                        <?php  $cate=$row['categorie'];
                             $sqlcolor="SELECT * FROM `produits` WHERE `categorie`='$cate'  ORDER BY `date` DESC LIMIT 3";
                             $resultcolor = $cnx->query($sqlcolor);
                              while ($rowcolor = $resultcolor->fetch_assoc()) {
                             ?>
                                <a class="colorImg" href="roduct-details.php?id=<?php echo $rowcolor['id'];?>">
                                <img style="border-radius: 50%;box-shadow: 2px 5px 13px -3px rgba(0,0,0,0.66);"  src="<?php echo 'data:image/jpeg;base64,' . base64_encode($rowcolor['img1']); ?>"  alt=""></a>
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
                                <a class="lienfav p-1" href="deletfavor.php?ref=<?php echo $row['Ref'] ;?>&refclient=<?php echo  $_SESSION["Reff"] ;?>"> <i style="font-size: 1.5rem;" class="fa fa-heart" aria-hidden="true"></i></a>
                        <?php }else{ ?>
                               <a class="lienfav p-1" href="ajouterfavor.php?ref=<?php echo $row['Ref'] ;?>&refclient=<?php echo  $_SESSION["Reff"] ;?>"> <i style="font-size: 1.5rem;" class="fa fa-heart-o" aria-hidden="true"></i></a>
                        <?php } ?>
                    </div>
                    <?php   } ?>
                </div>
            </div>
            <?php }  ?>



        </div>

        <h3 class="my-3 mb-5 title">Meilleur vendu</h3>

        <!-- Meilleur vendu -->
        <div class="meilleurvendu animate__animated animate__fadeIn">
            <!-- <img class="img-fluid" src="image/Meilleur vendu.png" alt=""> -->
        

            <style>
                .parent1 {
                    display: grid;
                    grid-template-columns: repeat(5, 1fr);
                    grid-template-rows: repeat(2, 1fr);
                    grid-column-gap: 0px;
                    grid-row-gap: 0px;
                    height: 500px;
                }
                .parent1 img {
                    width: 100%;
                    height: 100%;
                }
                .parent1 div {
                    overflow: hidden;
                }
                

                .divp1 { grid-area: 1 / 1 / 3 / 2;border: 1px solid  #F8F8F8;background-color: #fff; }
                .divp2 { grid-area: 1 / 2 / 2 / 3;border: 1px solid  #F8F8F8;background-color: #fff; }
                .divp3 { grid-area: 2 / 2 / 3 / 3;border: 1px solid  #F8F8F8;background-color: #fff; }
                .divp5 { grid-area: 2 / 3 / 3 / 4;border: 1px solid  #F8F8F8;background-color: #fff; }
                .divp6 { grid-area: 1 / 4 / 2 / 5;border: 1px solid  #F8F8F8;background-color: #fff; }
                .divp7 { grid-area: 2 / 4 / 3 / 5;border: 1px solid  #F8F8F8;background-color: #fff; }
                .divp8 { grid-area: 1 / 5 / 3 / 6;border: 1px solid  #F8F8F8;background-color: #fff; } 
                .divp4 { grid-area: 1 / 3 / 2 / 4;
                        background-color: #FCEA01;    
                        position: relative;
                        transform: scale(1.2);
                        display: grid;
                        padding: 10px;
                        border-radius: 50%;
                        align-items: flex-end;
                        border: 1px solid #FCEA01;
                        }
            </style>     
            <div class="parent1">
                
                <?php
                    $sql2="SELECT * FROM `produits` WHERE `meilleurV`='MV' ORDER BY `date` DESC LIMIT 8";
                    $result2 = $cnx->query($sql2);
                    $cpt=0;
                    while ($row2 = $result2->fetch_assoc()) {
                        $cpt++;
                    ?>
                    <div class="divp<?php echo $cpt;?>"> <a href="product-details.php?id=<?php echo $row2['id']; ?>"><img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row2['img1']); ?>" alt=""></a> </div>
                <?php } ?>
                
             
                
                <div class="divp4 text-center"> <h1>Best</h1><h1><img style="filter: brightness(0%);" src="image/logo.png" width="150" height="60" alt=""></h1><h6>Collection Printemps</h6><h6>- 2022 -</h6></div>

            </div>     
        </div>   


        <!-- notreboutique -->
        
        <div class="notreboutique mt-5 text-center animate__animated animate__fadeIn">
            <img src="image/logo.png" alt="">
            <h3>Trouvez votre boutique</h3>

            <div class="row">
                <div class="col">
                    <div><button onclick="casa()"  type="button" class="btnBoutique" data-toggle="modal" data-target="#exampleModal1">
                        <img class="ville" src="image/casa.webp" alt="">
                        </button></div>
                    <div class="m-3"><img class="local" src="image/maps-and-flags.png" alt=""></div>
                    <h4>Casablanc</h4>
                </div>
                <div class="col">
                    <!-- <div><img class="ville" src="image/Mékness.webp" alt=""></div> -->
                    <div>
                        <button onclick="mekness()"  type="button" class="btnBoutique" data-toggle="modal" data-target="#exampleModal2">
                            <img  class="ville" src="image/Mékness.webp" alt="">
                        </button>
                    </div>
                    <div class="m-3"><img class="local" src="image/maps-and-flags.png" alt=""></div>
                    <h4>Mékness</h4>
                    <p>Comming soon</p>
                </div>
                <div class="col">
                    <div><img class="ville" src="image/Sale.webp" alt=""></div>
                    <div class="m-3"><img class="local" src="image/maps-and-flags.png" alt=""></div>
                    <h4>Sale</h4>

                </div>
                <div class="col">
                    <div><img class="ville" src="image/marrakech.webp" alt=""></div>
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

<h1 id="test"></h1>

        </div>
        <!-- Modal11 -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center"  id="exampleModalLabel villeboutique">casa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="imageville" src="image/casa.webp" class="img-fluid" alt="">
                    <div class="row">
                        <div class="col">
                            Adresse :
                        </div>
                        <div  class="col">
                            <p id="adresse"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Telephone :
                        </div>
                        <div  class="col">
                        <p id="tele"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Localisation :
                        </div>
                        <div class="col">
                            <a id="lien" href="">maps</a>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
        <!-- Modal11 -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center"  id="exampleModalLabel villeboutique">casa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="imageville" src="image/Mékness.webp" class="img-fluid" alt="">
                    <div class="row">
                        <div class="col">
                            Adresse :
                        </div>
                        <div  class="col">
                            <p id="adresse">Mékness</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Telephone :
                        </div>
                        <div  class="col">
                        <p id="tele">02222222222</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Localisation :
                        </div>
                        <div class="col">
                            <a id="lien" href="">maps</a>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>

        <!-- contact -->
        <script>
           

            let info=[
                {
                    ville:'Rabat'
                    ,adresse:'adresse Rabat'
                    ,telephone:'011111111'
                    ,lien:'lienrabat'
                },
                {
                    ville:'Sale'
                    ,adresse:'adresse Sale'
                    ,telephone:'022222222'
                    ,lien:'lienSale'
                },
                {
                    ville:'Casa'
                    ,adresse:'adresse Casa'
                    ,telephone:'0333333'
                    ,lien:'lienCasa'
                }
            ];
            
        </script>

        


    </div>
    </div>
 
   
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
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>