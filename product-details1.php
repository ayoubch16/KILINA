<?php include 'header.php';?>
<?php include 'navbar.php';?>
<?php $id=$_GET['id'];
$sql="SELECT * FROM `produits` WHERE id='$id' ";
$result = $cnx->query($sql);
if ($row = $result->fetch_assoc()) {
}
?>
        <style>
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

            .shopnow {
                background-color: #e1d106;
                color: #000;
                text-decoration: none;
                padding: 10px;
                margin: auto;
                text-align: center;
                font-size: 1rem;
                border: 0;
                border-radius: 4px;
                width: 200px
            }

            .shopnow:hover {
                background-color: #000;
                color: #e1d106
            }

            .fa {
                color: red;
                font-size: 30px
            }
        </style>
        <style>
            #divgrandImg {
                margin: 0;
                /* cursor: none; */
                width: 480px;
                height: 618px;
                position: relative;

            }

            #loupe {
                width: 200px;
                height: 200px;
                border-radius: 50%;
                border: 3px solid #fff;
                position: absolute;
                background-size: cover;
                background-repeat: no-repeat;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
                filter: brightness(1.3);
                display: none;
                z-index: 10;
            }
            @media only screen and (max-width: 768px) {
                #divgrandImg {
                height: 410px;
                display: flex;
                justify-content: center;
                }
                #grandImg{
                    height: 100%;
                }
                .product-details img {
                max-width: 100%;
                }
                .product-details .choiximage {
                width: 60px;
                height: 80px;
                }
            }
        </style>
<?php 
$titreProd=$row['titre'];
    echo "<script>
    document.title = '$titreProd';
    </script>";
  
?>

<body>
    <div id="page">
        <div style="background-color:#fff" class="product-details container p-4">
            <div class="row p-3">
                <div class="col-sm">
                    <div class="">
                        <div id="divgrandImg" class="col m-2" onmouseover="afficherloupe()" onmouseout="fermerloupe()">
                            <div id="loupe"
                                style="background-image: url(<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img1']); ?>);">
                            </div>
                            <img id="grandImg" class="border border-dark"
                                src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img1']); ?>" width="489"
                                height="618" alt="">
                        </div>
                        <div class="col" style="display:flex;justify-content: center;align-items: center;">
                             <img onclick="change1()" class="choiximage border border-dark m-1" id="img1"
                                src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img1']); ?>" width="91"
                                height="119" alt="">
                            <img onclick="change2()" class="choiximage border border-dark m-1" id="img2"
                                src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img2']); ?>" width="91"
                                height="119" alt="">
                            <img onclick="change3()" class="choiximage border border-dark m-1" id="img3"
                                src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img3']); ?>" width="91"
                                height="119" alt="">
                            <?php if(!empty($row['img4'])) {?>
                            <img onclick="change4()" class="choiximage border border-dark m-1" id="img4"
                                src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img4']); ?>" width="91"
                                height="119" alt="">
                            <?php } ?>
                            <?php if(!empty($row['img5'])) {?>
                            <img onclick="change5()" class="choiximage border border-dark m-1" id="img5"
                                src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img5']); ?>" width="91"
                                height="119" alt="">
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="productInfo col" style="display:grid;justify-content:center;align-items:center">
                    <form action="ajouterPannier.php">
                        <h3 style="font-weight:bold"><?php echo $row['titre'];?></h3>
                        <p><?php echo $row['description'];?>
                            <br> 
                            <input style="border:0;display:none;" type="text" readonly value="<?php echo $row['Ref'];?>" name="ref">
                            <input style="display:none" type="text" readonly value="<?php echo $_SESSION["Reff"];?>"
                                name="refclient">
                        </p>
                        <div class="row">
                            <div class="ml-2">
                                <p>Taille</p>
                                <p
                                    style="margin-bottom:0!important;display:flex;justify-content:center;align-items:center">
                                    <?php 
                                            $taille = explode("-", $row['taille']);
                                            for ($x = 0; $x <= count($taille)-2; $x++) {
                                                echo ' '.$taille[$x].' ';
                                            }?>
                                </p>
                            </div>
                            <div style="margin-left:100px!important" class="mx-4">

                                 <p></p>
                                <?php 
                                        $Ref=$row['Ref'];
                                        $sql1="SELECT * FROM `produits` p  WHERE  LOCATE('".substr($Ref,0,5)."', p.Ref ) AND `Ref`<>'".$Ref."'   ORDER BY `date` DESC ";
                                        $result1 =$cnx->query($sql1);
                                        while($row1=$result1->fetch_assoc()){
                                         $nvprix=$row['prix']-$row['prix']*($row['remis']/100);
                                    ?>
                                <a class="colorImg" href="product-details.php?id=<?php echo $row1['id']; ?>"><img
                                        src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row1['img1']); ?>"
                                        alt=""></a>
                                <?php } ?>
                            </div>
                        </div>
                        <div>
                            <p>Prix :</p>
                            <div class="row">
                                <?php  if($row['remis']!= 0){?>
                                <h3 class="mx-2" style="color:gray"><del><?php echo $row['prix']; ?> DH</del></h3>
                                <h3 class="mx-2" style="color:red"><?php echo $nvprix?> DH</h3>
                                <?php }else{?>
                                <h3 class="mx-2"><?php echo $row['prix']; ?> DH</h3>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="my-4">
                            <input type="submit" onclick="confirm('Voulez-vous ajouter ce produit au panier ?')"
                                class="shopnow" value="SHOP NOW" name="" id="">
                            <?php 
                                $reff=$row['Ref'];
                                $sqlF="SELECT * FROM `favor` WHERE `RefProd` ='$reff'";
                                $resultF = $cnx->query($sqlF);      
                                if ($rowF = $resultF->fetch_assoc()) {
                            ?>
                            <a class="lienfav p-1"
                                href="deletfavor.php?ref=<?php echo $row['Ref'] ;?>&refclient=<?php echo  $_SESSION["Reff"] ;?>">
                                <i class="fa fa-heart" aria-hidden="true"></i></a>
                            <?php }else{ ?>
                            <a class="lienfav p-1"
                                href="ajouterfavor.php?ref=<?php echo $row['Ref'] ;?>&refclient=<?php echo  $_SESSION["Reff"] ;?>">
                                <i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            <?php } ?>
                        </div>
                        <div class="p-3" style="background-color:#f5f7fb">
                            <img class="mx-2" src="image/icone/livraison.png" width="15" height="10" alt=""><span
                                name="" style="font-weight:bold">livraison</span>
                            <p class="ml-5" style="font-size:12px">Les frais de livraison sont calculés une fois la
                                commande finalisée. Délai de réception = Délai de processus + Délai de livraison</p>
                            <img class="mx-2" src="image/icone/political.png" width="15" height="10" alt=""><span
                                style="font-weight:bold">livraison</span>
                            <p class="ml-5" style="font-size:12px">Notre Garantie Retour Ou Echange Dans 30 Jours A
                                Partir De La Date De Livraison.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
    function change1() {
        document.getElementById("grandImg").src = document.getElementById("img1").src;
        document.getElementById('loupe').style.backgroundImage = "url('" + document.getElementById('img1').src + "')";
    }

    function change2() {
        document.getElementById("grandImg").src = document.getElementById("img2").src;
        document.getElementById('loupe').style.backgroundImage = "url('" + document.getElementById('img2').src + "')";
    }

    function change3() {
        document.getElementById("grandImg").src = document.getElementById("img3").src;
        document.getElementById('loupe').style.backgroundImage = "url('" + document.getElementById('img3').src + "')";
    }

    function change4() {
        document.getElementById("grandImg").src = document.getElementById("img4").src;
        document.getElementById('loupe').style.backgroundImage = "url('" + document.getElementById('img4').src + "')";
    }

    function change5() {
        document.getElementById("grandImg").src = document.getElementById("img5").src;
        document.getElementById('loupe').style.backgroundImage = "url('" + document.getElementById('img5').src + "')";
    };
    </script>
    <script>
    zoom = 1.5;
    document.getElementById('divgrandImg').onmousemove = function() {
        loupe = document.getElementById('loupe');
        var bounding = document.getElementById('divgrandImg').getBoundingClientRect();
        loupe.style.left = (event.clientX - bounding.left - 100) + "px";
        loupe.style.top = (event.clientY - bounding.top - 100) + "px";
        loupe.style.backgroundSize = (498 * zoom) + "px";
        loupe.style.backgroundPosition =
            (-loupe.offsetLeft * zoom) + "px " +
            (-loupe.offsetTop * zoom) + "px";

    }

    function afficherloupe() {
        document.getElementById('loupe').style.display = 'block';
    }

    function fermerloupe() {
        document.getElementById('loupe').style.display = 'none';
    }
    </script>
</body>