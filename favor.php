
<?php include 'header.php';?>

<?php include 'navbar.php';?>
<body>
    <script>
        document.title = 'Favorite ';
    </script>
    <style>
        p {
            margin: 0 !important;
        }
        .btnP{
            width: 200px;
            height: 35px;
            color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #E1D106;
            text-align: center;
            font-size: 20px;
        }
        .btnP:hover {
            text-decoration: none;
            background-color: #000;
            color: #E1D106;
        }
        .fa {
            color: red;
        }
        .flex-container {
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-flex-wrap: nowrap;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-align-content: center;
            -ms-flex-line-pack: center;
            align-content: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            }

        .flex-item:nth-child(1) {
            -webkit-order: 0;
            -ms-flex-order: 0;
            order: 0;
            -webkit-flex: 0 1 auto;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            -webkit-align-self: auto;
            -ms-flex-item-align: auto;
            align-self: auto;
            }

        .flex-item:nth-child(2) {
            -webkit-order: 0;
            -ms-flex-order: 0;
            order: 0;
            -webkit-flex: 0 1 auto;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            -webkit-align-self: auto;
            -ms-flex-item-align: auto;
            align-self: auto;
        }

        .flex-item:nth-child(3) {
            -webkit-order: 0;
            -ms-flex-order: 0;
            order: 0;
            -webkit-flex: 0 1 auto;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            -webkit-align-self: auto;
            -ms-flex-item-align: auto;
            align-self: auto;
            }
            .flex-item:nth-child(4) {
            -webkit-order: 0;
            -ms-flex-order: 0;
            order: 0;
            -webkit-flex: 0 1 auto;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            -webkit-align-self: auto;
            -ms-flex-item-align: auto;
            align-self: auto;
            }


    </style>
<div id="page">
<div class="  container">
        <div class="listeproduct">
                <?php $refClient=$_SESSION["Reff"];
                      $sql="SELECT * FROM `favor` WHERE `RefClient`='$refClient' AND `etat`='V'";
                      $result = $cnx->query($sql);
                      $cpt=1;
                      while ($row = $result->fetch_assoc()) {
                          $refProd=$row['RefProd'];
                          $sql1="SELECT * FROM `produits` WHERE `Ref`='$refProd'";
                          $result1 = $cnx->query($sql1);
                          $cpt++;
                          while ($row1 = $result1->fetch_assoc()) {
                              
                      
                ?>
            <div class="row">
                <div class="col bg-white rounded p-4 my-1 mx-2">
                    <div class="row">
                        <div class="col-4">
                            <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row1['img1']); ?>" width="200" height="300" alt="">
                        </div>
                        <div class="col text-left">
                            <h3 class="mb-3" style="font-size: 25px;"><?php  echo $row1['titre']; ?></h3>
                            <p style="font-size: 10px;"><?php  echo $row1['description']; ?>
                            </p>
                            <p style="font-size: 10px;">Réfe : <?php  echo $row1['Ref']; ?></p>
                            <div class="row my-3">

                                <div class="col">
                                    <p style="font-size: 10px;">Taille :</p>
                                    <h6>
                                    <?php 
                                            $taille = explode("-", $row1['taille']);
                                            for ($x = 0; $x <= count($taille)-2; $x++) {
                                                echo ' '.$taille[$x].' ';
                                            }?>
                                    </h6>
                                </div>

                                <div class="col">
                                    <p style="font-size: 10px;">Prix :</p>
                                    <p style="font-size: 20px;"><?php  echo $row1['prix']; ?> DH</p>
                                </div>
                            </div>
                          
                            <div class="text-center mx-2 my-3 row">
                                <!-- <button class="btnP rounded mx-4">SHOP NOW</button> -->
                               <a class="btnP rounded mx-4" href="ajouterPannier.php?ref=<?php echo $row1['Ref'];?>&refclient=<?php echo $_SESSION["Reff"];?>">SHOP NOW</a>
                               <a class="btnP rounded mx-4" style="width: 40px;" href="deletfavor.php?ref=<?php echo $row1['Ref'] ;?>&refclient=<?php echo  $_SESSION["Reff"] ;?>"><img width="20" height="20" src="image/icone/trash.png" alt=""> </a>                 
                                    
                                
                                   
                               
                            </div>
                        </div>
                    </div>
                    <hr>

                </div>
            </div>


            <?php } } ?>
<?php if($cpt==1){?>
<div id="vide" class="panier bg-white container rounded p-4">
    <!-- panier vide -->
    <div id="panier1" class="flex-container">
        <div class="flex-item my-2"><img src="image/icone/panier.png" width="250" height="250" alt=""></div>
        <div class="flex-item my-2"> <h1>Votre panier est vide</h1></div>
        <div class="flex-item my-2"><button class="btnP rounded">RETOUR</button></div>
    </div>
</div>
<?php }  ?>        

         
        </div>
</div>
</div>



   

</body>
<?php include 'footer.php';?>
