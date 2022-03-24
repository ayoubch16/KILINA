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
    /* width: 40px;
        height: 40px; */
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

.shopnow {
    background-color: #e1d106;
    color: #000;
    text-decoration: none;
    padding: 10px;
    margin: auto;
    text-align: center;
    font-size: 1rem;
    border: none;
    border-radius: 4px;
    width: 200px;
}

.shopnow:hover {
    background-color: #000;
    color: #e1d106;

}

.fa {
    color: red;
    font-size: 30px;
}
</style>
<?php 
$titreProd=$row['titre'];
    echo "   <script>
    document.title = '$titreProd';
    </script>";
  
?>

<body>
    <!-- product-details -->
    <div id="page">
        <div style="background-color: #fff;" class="product-details container p-4">
            <div class="row p-3">
                <div class="col-sm">
                    <div class="row">
                        <div class="col-3" style="display: grid;justify-content: center;align-items: center;">
                            <img onclick="change1()" class="choiximage" id="img1"
                                src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img1']); ?>" width="91"
                                height="119" alt="">
                            <img onclick="change2()" class="choiximage" id="img2"
                                src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img2']); ?>" width="91"
                                height="119" alt="">
                            <img onclick="change3()" class="choiximage" id="img3"
                                src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img3']); ?>" width="91"
                                height="119" alt="">
                            <?php if(!empty($row['img4'])) {?>
                            <img onclick="change4()" class="choiximage" id="img4"
                                src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img4']); ?>" width="91"
                                height="119" alt="">
                            <?php } ?>
                            <?php if(!empty($row['img5'])) {?>
                            <img onclick="change5()" class="choiximage" id="img5"
                                src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img5']); ?>" width="91"
                                height="119" alt="">
                            <?php } ?>
                        </div>
                        <div class="col">
                            <img id="grandImg"
                                src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img1']); ?>" width="489"
                                height="618" alt="">
                        </div>
                    </div>

                </div>

                <div class="productInfo col" style="display: grid;justify-content: center;align-items: center;">
                    <form action="ajouterPannier.php">
                        <h3 style="font-weight: bold;"><?php echo $row['titre'];?></h3>
                        <p><?php echo $row['description'];?>
                            <br> Refe :
                            <input style="border: none;" type="text" readonly value="<?php echo $row['Ref'];?>"
                                name="ref">
                            <input style="display: none;" type="text" readonly value="<?php echo $_SESSION["Reff"];?>"
                                name="refclient">
                        </p>

                        <div class="row">
                            <div class="ml-2">
                                <p>Coleur</p>
                                <?php 
                                        $categorie=$row['categorie'];
                                        $sql1="SELECT * FROM `produits` WHERE `categorie`='$categorie' ORDER BY `date` DESC LIMIT 3";
                                        $result1 =$cnx->query($sql1);
                                        while($row1=$result1->fetch_assoc()){
                                         $nvprix=$row['prix']-$row['prix']*($row['remis']/100);
                                    ?>
                                <a class="colorImg" href="product-details.php?id=<?php echo $row1['id']; ?>"><img
                                        src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row1['img1']); ?>"
                                        alt=""></a>

                                <?php } ?>
                            </div>
                            <div style="margin-left: 100px !important;" class="mx-4">
                                <p>Taille</p>
                                <p style="margin-bottom: 0 !important;display: flex;justify-content: center;align-items: center;">
                                    <?php 
                                            $taille = explode("-", $row['taille']);
                                            for ($x = 0; $x <= count($taille)-2; $x++) {
                                                echo ' '.$taille[$x].' ';
                                            }?>
                                </p>
                            </div>

                        </div>
                        <div>
                            <p>Prix :</p>
                            <!-- <h1><?php echo $row['prix'];?> DH</h1> -->
                            <div class="row">
                                <?php  if($row['remis']!= 0){?>
                                <h3 class="mx-2" style="color: gray;"><del><?php echo $row['prix']; ?> DH</del></h3>
                                <h3 class="mx-2" style="color: red;"><?php echo $nvprix?> DH</h3>
                                
                                <?php }else{?>
                                <h3 class="mx-2"><?php echo $row['prix']; ?> DH</h3>
                                <?php } ?>
                            </div>
                        </div>


                        <div class="  my-4">
                            <!-- <a class="px-5 mr-3" href="">SHOP NOW</a> -->
                            <input type="submit" onclick="confirm('Voulez-vous ajouter ce produit au panier ?');"
                                class="shopnow" value="SHOP NOW" name="" id="">

                            <?php 
                                $reff=$row['Ref'];
                                $sqlF="SELECT * FROM `favor` WHERE `RefProd` ='$reff'";
                                $resultF = $cnx->query($sqlF);      
                                if ($rowF = $resultF->fetch_assoc()) {
                            ?>
                            <a class="lienfav p-1"
                                href="deletfavor.php?ref=<?php echo $row['Ref'] ;?>&refclient=<?php echo  $_SESSION["Reff"] ;?>">
                                <i  class="fa fa-heart" aria-hidden="true"></i></a>
                            <?php }else{ ?>
                            <a class="lienfav p-1"
                                href="ajouterfavor.php?ref=<?php echo $row['Ref'] ;?>&refclient=<?php echo  $_SESSION["Reff"] ;?>">
                                <i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            <?php } ?>
                        </div>
                        <div class="p-3" style="background-color: #F5F7FB;">
                            <img class="mx-2" src="image/icone/livraison.png" width="15" height="10" alt=""><span
                                name="" style="font-weight: bold;">livraison</span>
                            <p class="ml-5" style="font-size: 12px;">Les frais de livraison sont calculés une fois la
                                commande finalisée. Délai de réception = Délai de processus + Délai de livraison</p>
                            <img class="mx-2" src="image/icone/political.png" width="15" height="10" alt=""><span
                                style="font-weight: bold;">livraison</span>
                            <p class="ml-5" style="font-size: 12px;">Notre Garantie Retour Ou Echange Dans 30 Jours A
                                Partir De La Date De Livraison.</p>

                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
    <script>
    function change1() {
        document.getElementById('grandImg').src = document.getElementById('img1').src;
    }

    function change2() {
        document.getElementById('grandImg').src = document.getElementById('img2').src;
    }

    function change3() {
        document.getElementById('grandImg').src = document.getElementById('img3').src;
    }

    function change4() {
        document.getElementById('grandImg').src = document.getElementById('img4').src;
    }

    function change5() {
        document.getElementById('grandImg').src = document.getElementById('img5').src;
    }
    </script>


</body>