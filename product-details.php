<?php include 'header.php';?>
<?php include 'navbar.php';?>
<?php $id=$_GET['id'];
$sql="SELECT * FROM `produits` WHERE id='$id' ";
$result = $cnx->query($sql);
if ($row = $result->fetch_assoc()) {
}
?>
<style>
    .choiximage{
        filter: grayscale(100%);
        cursor: pointer;
    }
</style>
<body>
<!-- product-details -->
<div id="page">
    <div style="background-color: #fff;" class="product-details container p-4" >
        <div class="row p-3">
            <div class="col-sm">
                <div class="row">
                    <div class="col-3" style="display: grid;justify-content: center;align-items: center;">
                        <img  onclick="change1()" class="choiximage" id="img1" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img1']); ?>" width="91" height="119" alt="">
                        <img  onclick="change2()" class="choiximage" id="img2" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img2']); ?>" width="91" height="119" alt="">
                        <img  onclick="change3()" class="choiximage" id="img3" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img3']); ?>" width="91" height="119" alt="">
                        <img  onclick="change4()" class="choiximage" id="img4" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img4']); ?>" width="91" height="119" alt="">
                        <img  onclick="change5()" class="choiximage" id="img5" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img5']); ?>" width="91" height="119" alt="">
                    </div>
                    <div class="col">
                        <img id="grandImg" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img1']); ?>" width="489" height="618"  alt="">
                    </div>
                </div>

            </div>
            <div class="productInfo col" style="display: grid;justify-content: center;align-items: center;">
                <h3 style="font-weight: bold;"><?php echo $row['titre'];?></h3>
                <p><?php echo $row['description'];?> 
                <br> Refe : <?php echo $row['Ref'];?> </p>
                
                <div class="row">
                                <div class="ml-2">
                                    <p>Coleur</p>
                                    <p>
                                        <input  name="color" type="radio">
                                        <input  name="color" type="radio">
                                        <input  name="color" type="radio">
                                    
                                    </p>
                                </div>
                                <div class="mx-4">
                                    <p>Taille</p>
                                    <p>
                                        <a href=""><?php echo $row['taille'];?> </a>
                                        <!-- <a href="">S</a>
                                        <a href="">M</a>
                                        <a href="">L</a>
                                        <a href="">XL</a>
                                        <a href="">XXL</a> -->
                                    </p>
                                </div>
                                <div class="mx-4">
                                    <p>Quantité :</p>
                                    <h5><?php echo $row['quantite'];?> </h5>
                                </div>
                </div>
                <div>
                    <p>Prix :</p>
                    <h1><?php echo $row['prix'];?> DH </h1>
                </div>
                
                
                <div class=" shop m-4">
                            <a class="px-5 mr-3" href="">SHOP NOW</a>
                            <a href="" style="background-color: #fff;"><img src="image/likerouge.png"/></a>
                </div>
                <div class="p-3" style="background-color: #F5F7FB;">
                    <img class="mx-2" src="image/icone/livraison.png" width="15" height="10" alt=""><span style="font-weight: bold;">livraison</span>
                    <p class="ml-5" style="font-size: 12px;">Les frais de livraison sont calculés une fois la commande finalisée. Délai de réception = Délai de processus + Délai de livraison</p>
                    <img class="mx-2" src="image/icone/political.png" width="15" height="10" alt=""><span style="font-weight: bold;">livraison</span>
                    <p class="ml-5" style="font-size: 12px;">Notre Garantie Retour Ou Echange Dans 30 Jours A Partir De La Date De Livraison.</p>

                </div>
            </div>

        </div>
    </div>
</div>
<script>
    function change1(){
        
        document.getElementById('grandImg').src=document.getElementById('img1').src;
        document.getElementById('img1').style.filter="grayscale(0%)";
        document.getElementById('img2').style.filter="grayscale(100%)";
        document.getElementById('img3').style.filter="grayscale(100%)";
        document.getElementById('img4').style.filter="grayscale(100%)";
        document.getElementById('img5').style.filter="grayscale(100%)";
    }
    function change2(){
        
        document.getElementById('grandImg').src=document.getElementById('img2').src;
        document.getElementById('img1').style.filter="grayscale(100%)";
        document.getElementById('img2').style.filter="grayscale(0%)";
        document.getElementById('img3').style.filter="grayscale(100%)";
        document.getElementById('img4').style.filter="grayscale(100%)";
        document.getElementById('img5').style.filter="grayscale(100%)";

    }
    function change3(){
        document.getElementById('grandImg').src=document.getElementById('img3').src;
        document.getElementById('img1').style.filter="grayscale(100%)";
        document.getElementById('img2').style.filter="grayscale(100%)";
        document.getElementById('img3').style.filter="grayscale(0%)";
        document.getElementById('img4').style.filter="grayscale(100%)";
        document.getElementById('img5').style.filter="grayscale(100%)";
    }
    function change4(){
        document.getElementById('grandImg').src=document.getElementById('img4').src;
        document.getElementById('img1').style.filter="grayscale(100%)";
        document.getElementById('img2').style.filter="grayscale(100%)";
        document.getElementById('img3').style.filter="grayscale(100%)";
        document.getElementById('img4').style.filter="grayscale(0%)";
        document.getElementById('img5').style.filter="grayscale(100%)";
    }
    function change5(){
        document.getElementById('grandImg').src=document.getElementById('img5').src;
        document.getElementById('img1').style.filter="grayscale(100%)";
        document.getElementById('img2').style.filter="grayscale(100%)";
        document.getElementById('img3').style.filter="grayscale(100%)";
        document.getElementById('img4').style.filter="grayscale(100%)";
        document.getElementById('img5').style.filter="grayscale(0%)";
    }
</script>

    
</body>