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
            .choixcolor{
                height: 25px;
                width: 25px;
                border-radius: 50%;
                display: inline-block;
            }
            .choixcolor:hover{
                transform: scale(1.1);
                transition: 1s;
                cursor: pointer;
            }
            
            
            @media only screen and (max-width: 700px) {
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
                .choixcolor{
                    height: 15px;
                    width: 15px;
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
                            <img id="grandImg imgProd" class="border border-dark"
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
                    <!-- <form action="addPanier.php"> -->
                    <form action="">
                        <h3 style="font-weight:bold"><?php echo $row['titre'];?></h3>
                        <p><?php echo $row['description'];?>
                            <br> 
                            <input style="border:0;display:none;" type="text" id="id" required value="<?php echo $row['id'];?>" name="id">
                            <!-- <input style="display:none" type="text" readonly value="<?php echo $_SESSION["Reff"];?>"
                                name="refclient"> -->
                        </p>
                        <div class="row">
                              <div class="col">
                                  <p>Taille :</p>
                              </div>
                              <div class="col text-right">
                                  <p style="margin-bottom:0!important;display:flex;justify-content:end;align-items:center;">
                                      <?php 
                                              $taille = explode("-", $row['taille']);
                                              for ($x = 0; $x <= count($taille)-2; $x++) {?>
                                                  <!-- echo ' '.$taille[$x].' '; -->
                                                  <input required name="taille" type="radio"  value="<?php echo $taille[$x];?>"><?php echo ' '.$taille[$x].' ';?>
                                             <?php   } ?>
                                  </p>
                              </div>
                        </div>
                        <div class="row">
                              <div class="col">
                                  <p>Coleur :</p>
                              </div>
                              <div class="col text-right">
                                  <?php for ($x = 1; $x <= 10; $x++) {
                                          if( $row['couleur'.$x]!='#f2f2f2'){?>
                                          <span onclick="<?php echo 'changeColor'.$x.'()';?>" class="choixcolor" style="background-color: <?php echo $row['couleur'.$x]?>;"></span> 
                                          <img id="Imgcouleur<?php echo $x?>" style="width:15px;height:15px;display:none" src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['Imgcouleur'.$x]); ?>" alt="">   
                                  <?php } } ?>

                              </div>
                        </div>
                        <div class="row">
                              <div class="col">
                                  <p>Quantite :</p>
                              </div>
                              <div class="col text-right">
                                                <select name="quantite" id="quantite" required>
                                                    <option value="1" selected>1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                              </div>
                        </div>
                        <div class="row">
                              <div class="col">
                                  <p>Prix :</p>
                              </div>
                              <div class="col row text-right">
                                  <?php 
                                  $nvprix=$row['prix']-$row['prix']*($row['remis']/100)
                                  ?>
                                <input type="text" required id="prix" style="display: none;" value="<?php echo $nvprix;?>">
                                <h3 class="mx-2" style="color:red"><?php echo $nvprix;?> DH</h3>
                                
                            </div>
                        </div>
   
                        <div class="my-4">
                                <!-- <button onclick="shop(<?php echo $row['id'];?>,<?php echo $row['prix'];?>)" class="shopnow"  >SHOP NOW</button> -->
                                <button  class="shopnow" name="shop" onclick="addPanier()"  >SHOP NOW</button>
                            <?php 
                                $reff=$row['Ref'];
                                $sqlF="SELECT * FROM `favor` WHERE `RefProd` ='$reff'";
                                $resultF = $cnx->query($sqlF);      
                                if ($rowF = $resultF->fetch_assoc()) {
                            ?>
                            <a  class="lienfav p-1"
                                href="deletfavor.php?ref=<?php echo $row['Ref'] ;?>&refclient=<?php echo  $_SESSION["Reff"] ;?>">
                                <i class="fa fa-heart" aria-hidden="true"></i></a>
                            <?php }else{ ?>
                            <a class="lienfav p-1"
                                href="ajouterfavor.php?ref=<?php echo $row['Ref'] ;?>&refclient=<?php echo  $_SESSION["Reff"] ;?>">
                                <i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            <?php } ?>
                        </div>
   
                        <div class="p-3" style="background-color:#f5f7fb">
                            <img class="mx-2 " src="image/icone/livraison.png" width="15" height="10" alt=""><span
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
        function addPanier() {  
            let id=document.getElementById('id').value;
            let quantite=document.getElementById('quantite').value;
            // let taille=document.getElementsByClassName('taille').value;
            let taille=document.querySelector('input[name="taille"]:checked').value;
            let prix=document.getElementById('prix').value;
            let image=document.getElementById('imgProd').src;
            let obj;
           
            // create an object
            const arr = {
                id:id,
                quantite:quantite,
                taille:taille,
                prix:prix,
                image:image
            };
            if(localStorage.getItem('panier2') === null){
                 obj=[{
                        id:0,
                        quantite:0,
                        taille:'0',
                        prix:0,
                        image:''
                    }];
            }else{
                 const str1 = localStorage.getItem("panier2");
                 obj = JSON.parse(str1);
            }

            obj.push(arr);
            // convert object to JSON string
            const jsonObj = JSON.stringify(obj);
            // save to localStorage
            localStorage.setItem("panier2", jsonObj);
            // alert('id='+id+' quantite='+quantite+' taille='+taille);
            

        }
    </script>
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
        }
        function changeColor1(){
            document.getElementById("grandImg").src = document.getElementById("Imgcouleur1").src;
            document.getElementById('loupe').style.backgroundImage = "url('" + document.getElementById('Imgcouleur1').src + "')";
        }
        function changeColor2(){
            document.getElementById("grandImg").src = document.getElementById("Imgcouleur2").src;
            document.getElementById('loupe').style.backgroundImage = "url('" + document.getElementById('Imgcouleur2').src + "')";
        }
        function changeColor3(){
            document.getElementById("grandImg").src = document.getElementById("Imgcouleur3").src;
            document.getElementById('loupe').style.backgroundImage = "url('" + document.getElementById('Imgcouleur3').src + "')";
        }
        function changeColor4(){
            document.getElementById("grandImg").src = document.getElementById("Imgcouleur4").src;
            document.getElementById('loupe').style.backgroundImage = "url('" + document.getElementById('Imgcouleur4').src + "')";
        }
        function changeColor5(){
            document.getElementById("grandImg").src = document.getElementById("Imgcouleur5").src;
            document.getElementById('loupe').style.backgroundImage = "url('" + document.getElementById('Imgcouleur5').src + "')";
        }
        function changeColor6(){
            document.getElementById("grandImg").src = document.getElementById("Imgcouleur6").src;
            document.getElementById('loupe').style.backgroundImage = "url('" + document.getElementById('Imgcouleur6').src + "')";
        }
        function changeColor7(){
            document.getElementById("grandImg").src = document.getElementById("Imgcouleur7").src;
            document.getElementById('loupe').style.backgroundImage = "url('" + document.getElementById('Imgcouleur7').src + "')";
        }
        function changeColor8(){
            document.getElementById("grandImg").src = document.getElementById("Imgcouleur8").src;
            document.getElementById('loupe').style.backgroundImage = "url('" + document.getElementById('Imgcouleur8').src + "')";
        }
        function changeColor9(){
            document.getElementById("grandImg").src = document.getElementById("Imgcouleur9").src;
            document.getElementById('loupe').style.backgroundImage = "url('" + document.getElementById('Imgcouleur9').src + "')";
        }
        function changeColor10(){
            document.getElementById("grandImg").src = document.getElementById("Imgcouleur10").src;
            document.getElementById('loupe').style.backgroundImage = "url('" + document.getElementById('Imgcouleur10').src + "')";
        }
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