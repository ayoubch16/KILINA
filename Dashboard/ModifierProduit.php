<?php 
include 'header.php';$id=$_GET['id'];$sql="SELECT * FROM `produits` WHERE `id`='$id'";$result=$cnx->query($sql);if($row=$result->fetch_assoc()){}
?>
<body>
    <style>
            .dot {
                width: 10px;
                height: 10px;
                border-radius: 50%
            }

            input[type="text"],
            select {
                border: 0;
                background-color: #e6e6e6;
                border-radius: 5px;
                width: 100%;
                height: 50px
            }

            .txtinput {
                width: 100%;
                background-color: #e6e6e6;
                border-radius: 10px;
                border: 0;
                padding: 10px;
                resize: none
            }

            input[type="checkbox"].pointure,
            input[type="checkbox"].tailleV,
            input[type="checkbox"].tailleS,
            input[type="checkbox"].tailleA {
                display: none
            }

            input[type="checkbox"].pointure+label,
            input[type="checkbox"].tailleV+label,
            input[type="checkbox"].tailleS+label,
            input[type="checkbox"].tailleA+label {
                text-align: center;
                color: gray;
                min-width: 50px;
                max-width: 100px;
                height: 20px
            }

            input[type="checkbox"].pointure+label:hover,
            input[type="checkbox"].tailleV+label:hover,
            input[type="checkbox"].tailleS+label:hover,
            input[type="checkbox"].tailleA+label:hover {
                background-color: #e1d106;
                cursor: pointer;
                color: #000
            }

            input[type="checkbox"]#pointure1:checked+label,
            input[type="checkbox"]#pointure2:checked+label,
            input[type="checkbox"]#pointure3:checked+label,
            input[type="checkbox"]#pointure4:checked+label,
            input[type="checkbox"]#pointure5:checked+label,
            input[type="checkbox"]#pointure6:checked+label,
            input[type="checkbox"]#pointure7:checked+label,
            input[type="checkbox"]#pointure8:checked+label,
            input[type="checkbox"]#pointure9:checked+label,
            input[type="checkbox"]#pointure10:checked+label,
            input[type="checkbox"]#pointure11:checked+label,
            input[type="checkbox"]#pointure12:checked+label,
            input[type="checkbox"]#pointure13:checked+label,
            input[type="checkbox"]#pointure14:checked+label,
            input[type="checkbox"]#pointure15:checked+label,
            input[type="checkbox"]#pointure16:checked+label,
            input[type="checkbox"]#pointure17:checked+label,
            input[type="checkbox"]#pointure18:checked+label,
            input[type="checkbox"]#pointure19:checked+label,
            input[type="checkbox"]#pointure20:checked+label,
            input[type="checkbox"]#pointure21:checked+label,
            input[type="checkbox"]#tailleV1:checked+label,
            input[type="checkbox"]#tailleV2:checked+label,
            input[type="checkbox"]#tailleV3:checked+label,
            input[type="checkbox"]#tailleV4:checked+label,
            input[type="checkbox"]#tailleV5:checked+label,
            input[type="checkbox"]#tailleV6:checked+label,
            input[type="checkbox"]#tailleV7:checked+label,
            input[type="checkbox"]#tailleV8:checked+label,
            input[type="checkbox"]#tailleV9:checked+label,
            input[type="checkbox"]#tailleV10:checked+label,
            input[type="checkbox"]#tailleS1:checked+label,
            input[type="checkbox"]#tailleS2:checked+label,
            input[type="checkbox"]#tailleS3:checked+label,
            input[type="checkbox"]#tailleA1:checked+label,
            input[type="checkbox"]#tailleA2:checked+label,
            input[type="checkbox"]#tailleA3:checked+label,
            input[type="checkbox"]#tailleA4:checked+label,
            input[type="checkbox"]#tailleA5:checked+label,
            input[type="checkbox"]#tailleA6:checked+label,
            input[type="checkbox"]#tailleA7:checked+label,
            input[type="checkbox"]#tailleA8:checked+label,
            input[type="checkbox"]#tailleA9:checked+label,
            input[type="checkbox"]#tailleA10:checked+label,
            input[type="checkbox"]#tailleA11:checked+label,
            input[type="checkbox"]#tailleA12:checked+label,
            input[type="checkbox"]#tailleA13:checked+label,
            input[type="checkbox"]#tailleA14:checked+label,
            input[type="checkbox"]#tailleA15:checked+label {
                color: #000;
                background-color: #e1d106;
                border-radius: 3px
            }

            .barRech input[type="text"] {
                border: 0;
                background-color: #fff;
                width: 400px;
                height: 50px;
                border-radius: 10px;
                box-shadow: 0 6px 44px -20px #000;
                margin-bottom: 20px;
                padding-left: 20px
            }

            .btnE {
                background-color: #fcea01;
                border-radius: 10px;
                border: 0;
                height: 50px;
                width: 100px
            }

            .btnE:hover {
                color: #fcea01;
                background-color: #000
            }

            .btnA {
                background-color: #fff;
                border: 1px solid #fffcdd;
                border-radius: 10px;
                color: #000;
                height: 50px;
                width: 100px
            }

            .btnA:hover {
                border-color: #000
            }

            .inputfile {
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                border: 2px dashed #9d9d9d
            }

            .inputfile:hover {
                cursor: pointer;
                border: 2px dashed #7456e7
            }

            #inputImg1,
            #inputImg2,
            #inputImg3,
            #inputImg4,
            #inputImg5,#inputImg6,#inputImg7,#inputImg8,#inputImg9,#inputImg10,#inputImg11,#inputImg12,#inputImg13,#inputImg14,#inputImg15 {
                display: none
            }

            .inputfile1 {
                height: 100px;
                display: flex;
                justify-content: center;
                align-items: center;
                border: 2px dashed #9d9d9d
            }

            .inputfile1:hover {
                cursor: pointer;
                border: 2px dashed #7456e7
            }
            .inputfile2 {
                height: 30px;
                width: 30px;
                display: flex;
                justify-content: center;
                align-items: center;
                border: 2px dashed #9d9d9d
            }

            .inputfile2:hover {
                cursor: pointer;
                border: 2px dashed #7456e7
            }

            /* #Taillechaussure,
            #Taillevetement,
            #Taillesac,
            #Tailleaccessoires {
                display: none
            } */
    </style>
    <script>
    /*<![CDATA[*/
    var pointure = document.querySelectorAll(".pointure");
    for (var i = 0; i < pointure.length; i++) {
        pointure[i].checked = false
    }
    var tailleV = document.querySelectorAll(".tailleV");
    for (var i = 0; i < tailleV.length; i++) {
        tailleV[i].checked = false
    }
    var tailleS = document.querySelectorAll(".tailleS");
    for (var i = 0; i < tailleS.length; i++) {
        tailleS[i].checked = false
    } /*]]>*/
    </script>
    <script>
    document.title = "Modifier Produits";
    </script>
    <div class="wrapper">
        <?php include 'menu.php';?>
        <div class="main">
            <?php include 'Top.php';?>
            <form action="modifier.php" method="POST" enctype="multipart/form-data">
                <main class="content">
                    <div class="container-fluid p-0">
                        <h1 class="h3 mb-3"><strong>Modifier Produits</strong></h1>
                        <div class="row">
                            <div class="col barRech">
                                <input class="" type="text" name="Ref" placeholder="Ref" 
                                    value="<?php echo $row['Ref'];?>" />
                            </div>
                            <div class="col-4 row"
                                style="display:flex;justify-content:end;align-items:center;margin-bottom:20px">
                                <div class="col"><input class="btnE" type="submit" value="Enregistrer" /></div>
                                <div class="col"><input class="btnA" type="reset" value="Annuler" /></div>
                            </div>
                        </div>
                        <div class="col-xl col-xxl">
                            <div class="w-100">
                                <div class="col-sm">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-sm">
                                                <input id="group" type="text" name="group" value="<?php echo $row['group'];?>" style="display: none ;"/>
                                                    <h5 class="m-2">Catégorie :</h5>
                                                    <select name="categorie" id="categorie" required>
                                                        <optgroup label="Sac">
                                                            <option class="sac"
                                                                <?php if($row['categorie'] =='Cartables'){ echo 'selected';} ?>
                                                                value="Cartables">Cartables</option>
                                                            <option class="sac"
                                                                <?php if($row['categorie'] =='Sacs à Dos'){ echo 'selected';} ?>
                                                                value="Sacs à Dos">Sacs à Dos</option>
                                                            <option class="sac"
                                                                <?php if($row['categorie'] =='Portefeuilles'){ echo 'selected';} ?>
                                                                value="Portefeuilles">Portefeuilles</option>
                                                            <option class="sac"
                                                                <?php if($row['categorie'] =='Sacs à main'){ echo 'selected';} ?>
                                                                value="Sacs à main">Sacs à main</option>
                                                            <option class="sac"
                                                                <?php if($row['categorie'] =='Sacs à main'){ echo 'selected';} ?>
                                                                value="Sacs de soirée">Sacs de soirée </option>
                                                            <option class="sac"
                                                                <?php if($row['categorie'] =='Pochettes'){ echo 'selected';} ?>
                                                                value="Pochettes">Pochettes</option>
                                                        </optgroup>
                                                        <optgroup label="chaussure">
                                                            <option class="chaussure"
                                                                <?php if($row['categorie'] =='Baskets'){ echo 'selected';} ?>
                                                                value="Baskets">Baskets</option>
                                                            <option class="chaussure"
                                                                <?php if($row['categorie'] =='Escarpins'){ echo 'selected';} ?>
                                                                value="Escarpins">Escarpins</option>
                                                            <option class="chaussure"
                                                                <?php if($row['categorie'] =='Mocassins'){ echo 'selected';} ?>
                                                                value="Mocassins">Mocassins</option>
                                                            <option class="chaussure"
                                                                <?php if($row['categorie'] =='Sandales'){ echo 'selected';} ?>
                                                                value="Sandales">Sandales</option>
                                                            <option class="chaussure"
                                                                <?php if($row['categorie'] =='Ballerines'){ echo 'selected';} ?>
                                                                value="Ballerines">Ballerines</option>
                                                            <option class="chaussure"
                                                                <?php if($row['categorie'] =='Espadrilles'){ echo 'selected';} ?>
                                                                value="Espadrilles">Espadrilles</option>
                                                            <option class="chaussure"
                                                                <?php if($row['categorie'] =='Bottines'){ echo 'selected';} ?>
                                                                value="Bottines">Bottines</option>
                                                            <option class="chaussure"
                                                                <?php if($row['categorie'] =='Pantoufles'){ echo 'selected';} ?>
                                                                value="Pantoufles">Pantoufles</option>
                                                            <option class="chaussure"
                                                                <?php if($row['categorie'] =='Sabots'){ echo 'selected';} ?>
                                                                value="Sabots">Sabots</option>
                                                        </optgroup>
                                                        <optgroup label="accessoires">
                                                            <option class="accessoires"
                                                                <?php if($row['categorie'] =='Ceintures'){ echo 'selected';} ?>
                                                                value="Ceintures">Ceintures</option>
                                                            <option class="accessoires"
                                                                <?php if($row['categorie'] =='Echarpes'){ echo 'selected';} ?>
                                                                value="Echarpes">Echarpes</option>
                                                            <option class="accessoires"
                                                                <?php if($row['categorie'] =='Portes clés'){ echo 'selected';} ?>
                                                                value="Portes clés">Portes clés </option>
                                                            <option class="accessoires"
                                                                <?php if($row['categorie'] =='Casquettes'){ echo 'selected';} ?>
                                                                value="Casquettes">Casquettes</option>
                                                            <option class="accessoires"
                                                                <?php if($row['categorie'] =='Chapeaux'){ echo 'selected';} ?>
                                                                value="Chapeaux">Chapeaux</option>
                                                        </optgroup>
                                                        <optgroup label="vetement">
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='T-Shirts'){ echo 'selected';} ?>
                                                                value="T-Shirts">T-Shirts</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Monteaux'){ echo 'selected';} ?>
                                                                value="Monteaux">Monteaux</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Vestes'){ echo 'selected';} ?>
                                                                value="Vestes">Vestes</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Robes'){ echo 'selected';} ?>
                                                                value="Robes">Robes</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Chemise'){ echo 'selected';} ?>
                                                                value="Chemise">Chemise</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Tops'){ echo 'selected';} ?>
                                                                value="Tops">Tops</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Débardeurs'){ echo 'selected';} ?>
                                                                value="Débardeurs">Débardeurs</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Costumes'){ echo 'selected';} ?>
                                                                value="Costumes">Costumes</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Tricot'){ echo 'selected';} ?>
                                                                value="Tricot">Tricot</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Sweat'){ echo 'selected';} ?>
                                                                value="Sweat">Sweat</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Bodys'){ echo 'selected';} ?>
                                                                value="Bodys">Bodys</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Ensembles 2 piéces'){ echo 'selected';} ?>
                                                                value="Ensembles 2 piéces">Ensembles 2 piéces </option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Ensembles 3 piéces'){ echo 'selected';} ?>
                                                                value="Ensembles 3 piéces">Ensembles 3 piéces </option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Combinaisons'){ echo 'selected';} ?>
                                                                value="Combinaisons">Combinaisons</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Jupes'){ echo 'selected';} ?>
                                                                value="Jupes">Jupes</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Shorts'){ echo 'selected';} ?>
                                                                value="Shorts">Shorts</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Pantalons'){ echo 'selected';} ?>
                                                                value="Pantalons">Pantalons</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Jeans'){ echo 'selected';} ?>
                                                                value="Jeans">Jeans</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Leggings'){ echo 'selected';} ?>
                                                                value="Leggings">Leggings</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Collants sport'){ echo 'selected';} ?>
                                                                value="Collants sport">Collants sport</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Maillots de Bain'){ echo 'selected';} ?>
                                                                value="Maillots de Bain">Maillots de Bain</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Cap'){ echo 'selected';} ?>
                                                                value="Cap">Cap</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Borkinis'){ echo 'selected';} ?>
                                                                value="Borkinis">Borkinis</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Survettes'){ echo 'selected';} ?>
                                                                value="Survettes">Survettes</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Capuchon'){ echo 'selected';} ?>
                                                                value="Capuchon">Capuchon</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='CALECON'){ echo 'selected';} ?>
                                                                value="CALECON">CALECON</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='DOUDOUNE'){ echo 'selected';} ?>
                                                                value="DOUDOUNE">DOUDOUNE</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='DJELLABA'){ echo 'selected';} ?>
                                                                value="DJELLABA">DJELLABA</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='Jaket'){ echo 'selected';} ?>
                                                                value="Jaket">Jaket</option>
                                                            <option class="vetement"
                                                                <?php if($row['categorie'] =='SALOPETTE'){ echo 'selected';} ?>
                                                                value="SALOPETTE">SALOPETTE</option>
                                                        </optgroup>
                                                    </select>
                                                    <script
                                                        src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
                                                    </script>
                                                    <script>
                                                        $(document).ready(function() {
                                                                 $(".chaussure").click(function() {
                                                                    $("#Taillechaussure").show();
                                                                    $("#Taillevetement").hide();
                                                                    $("#Taillesac").hide();
                                                                    $("#Tailleaccessoires").hide();
                                                                    $("#group").val('2');
                                                                    });
                                                                 $(".vetement").click(function() {
                                                                        $("#Taillechaussure").hide();
                                                                        $("#Taillevetement").show();
                                                                        $("#Taillesac").hide();
                                                                        $("#Tailleaccessoires").hide();
                                                                        $("#group").val('4');
                                                                    });
                                                                 $(".sac").click(function() {
                                                                        $("#Taillechaussure").hide();
                                                                        $("#Taillevetement").hide();
                                                                        $("#Taillesac").show();
                                                                        $("#Tailleaccessoires").hide();
                                                                        $("#group").val('1');
                                                                    });
                                                                 $(".accessoires").click(function() {
                                                                        $("#Taillechaussure").hide();
                                                                        $("#Taillevetement").hide();
                                                                        $("#Taillesac").hide();
                                                                        $("#Tailleaccessoires").show();
                                                                        $("#group").val('3');
                                                                    })
                                                        });
                                                           
                                                   
                                                    </script>
                                                </div>
                                                <div class="col-sm">
                                                    <h5 class="m-2">Prix d'achat :</h5>
                                                    <input type="text" name="prixa" id="" value="<?php echo $row['prixa'];?>"  />
                                                </div>
                                                <div class="col-sm">
                                                    <h5 class="m-2">Prix de Vente:</h5>
                                                    <input type="text" name="prix" id="" value="<?php echo $row['prix'];?>"  />
                                                </div>
                                                <div class="col-sm">
                                                    <h5 class="m-2">Remis :</h5>
                                                    <input type="text" name="remis" id="" value="<?php echo $row['remis'];?>"  />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm">
                                                    <h5 class="m-2">Titre :</h5>
                                                    <input type="text" name="titre" value="<?php echo $row['titre'];?>" >
                                                    <h5 class="m-2">Description :</h5>
                                                    <textarea class="txtinput" name="description" id="" required
                                                        rows="10"><?php echo $row['description'];?></textarea>
                                                    <h5 class="m-2">Couleurs :</h5>
                                                <div class="row">
                                                    
                                                    <div class="row col border border-dark m-1 p-1">
                                                        <div class="col-sm">
                                                            <input type="color" name="couleur1" style="width: 30px;height: 30px;" value="<?php echo $row['couleur1']?>">
                                                        </div>
                                                        <div class="col-sm">
                                                            <input type="file" onchange="loadFile6(event)"
                                                                        accept="image/*" name="imgColor1" id="inputImg6">
                                                            <label class="mb-2 inputfile2" for="inputImg6">
                                                            <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['Imgcouleur1']); ?>" id="output6" width="20" height="15" alt="">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row col border border-dark m-1 p-1">
                                                        <div class="col-sm">
                                                            <input type="color" name="couleur2" style="width: 30px;height: 30px;" value="<?php echo $row['couleur2']?>">
                                                        </div>
                                                        <div class="col-sm">
                                                            <input type="file" onchange="loadFile7(event)"
                                                                        accept="image/*" name="imgColor2" id="inputImg7">
                                                            <label class="mb-2 inputfile2" for="inputImg7">
                                                            <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['Imgcouleur2']); ?>" id="output7" width="20" height="15" alt="">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="row col border border-dark m-1 p-1">
                                                        <div class="col-sm">
                                                            <input type="color" name="couleur3" style="width: 30px;height: 30px;" value="<?php echo $row['couleur3']?>">
                                                        </div>
                                                        <div class="col-sm">
                                                            <input type="file" onchange="loadFile8(event)"
                                                                        accept="image/*" name="imgColor3" id="inputImg8">
                                                            <label class="mb-2 inputfile2" for="inputImg8">
                                                            <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['Imgcouleur3']); ?>" id="output8" width="20" height="15" alt="">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="row col border border-dark m-1 p-1">
                                                        <div class="col-sm">
                                                            <input type="color" name="couleur4" style="width: 30px;height: 30px;" value="<?php echo $row['couleur4']?>">
                                                        </div>
                                                        <div class="col-sm">
                                                            <input type="file" onchange="loadFile9(event)"
                                                                        accept="image/*" name="imgColor4" id="inputImg9">
                                                            <label class="mb-2 inputfile2" for="inputImg9">
                                                            <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['Imgcouleur4']); ?>" id="output9" width="20" height="15" alt="">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="row col border border-dark m-1 p-1">
                                                        <div class="col-sm">
                                                            <input type="color" name="couleur5" style="width: 30px;height: 30px;" value="<?php echo $row['couleur5']?>">
                                                        </div>
                                                        <div class="col-sm">
                                                            <input type="file" onchange="loadFile10(event)"
                                                                        accept="image/*" name="imgColor5" id="inputImg10">
                                                            <label class="mb-2 inputfile2" for="inputImg10">
                                                            <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['Imgcouleur5']); ?>" id="output10" width="20" height="15" alt="">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    
                                                    <div class="row col border border-dark m-1 p-1">
                                                        <div class="col-sm">
                                                            <input type="color" name="couleur6" style="width: 30px;height: 30px;" value="<?php echo $row['couleur6']?>">
                                                        </div>
                                                        <div class="col-sm">
                                                            <input type="file" onchange="loadFile11(event)"
                                                                        accept="image/*" name="imgColor6" id="inputImg11">
                                                            <label class="mb-2 inputfile2" for="inputImg11">
                                                            <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['Imgcouleur6']); ?>" id="output11" width="20" height="15" alt="">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row col border border-dark m-1 p-1">
                                                        <div class="col-sm">
                                                            <input type="color" name="couleur7" style="width: 30px;height: 30px;" value="<?php echo $row['couleur7']?>">
                                                        </div>
                                                        <div class="col-sm">
                                                            <input type="file" onchange="loadFile12(event)"
                                                                        accept="image/*" name="imgColor7" id="inputImg12">
                                                            <label class="mb-2 inputfile2" for="inputImg12">
                                                            <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['Imgcouleur7']); ?>" id="output12" width="20" height="15" alt="">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="row col border border-dark m-1 p-1">
                                                        <div class="col-sm">
                                                            <input type="color" name="couleur8" style="width: 30px;height: 30px;" value="<?php echo $row['couleur8']?>">
                                                        </div>
                                                        <div class="col-sm">
                                                            <input type="file" onchange="loadFile13(event)"
                                                                        accept="image/*" name="imgColor8" id="inputImg13">
                                                            <label class="mb-2 inputfile2" for="inputImg13">
                                                            <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['Imgcouleur8']); ?>" id="output13" width="20" height="15" alt="">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="row col border border-dark m-1 p-1">
                                                        <div class="col-sm">
                                                            <input type="color" name="couleur9" style="width: 30px;height: 30px;" value="<?php echo $row['couleur9']?>">
                                                        </div>
                                                        <div class="col-sm">
                                                            <input type="file" onchange="loadFile14(event)"
                                                                        accept="image/*" name="imgColor9" id="inputImg14">
                                                            <label class="mb-2 inputfile2" for="inputImg14">
                                                            <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['Imgcouleur9']); ?>" id="output14" width="20" height="15" alt="">
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="row col border border-dark m-1 p-1">
                                                        <div class="col-sm">
                                                            <input type="color" name="couleur10" style="width: 30px;height: 30px;" value="<?php echo $row['couleur10']?>">
                                                        </div>
                                                        <div class="col-sm">
                                                            <input type="file" onchange="loadFile15(event)"
                                                                        accept="image/*" name="imgColor10" id="inputImg15">
                                                            <label class="mb-2 inputfile2" for="inputImg15">
                                                            <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['Imgcouleur10']); ?>" id="output15" width="20" height="15" alt="">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                    <div class="row">
                                                        <?php   if($row['group'] =='2'){ ?>
                                                            <div id="Taillechaussure" class="col-sm">
                                                                <h5 class="m-2">Ajouter Pointure</h5>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'25')){echo ' checked ';}?> value="25"
                                                                    class="pointure" id="pointure1">
                                                                <label class="labelponture" for="pointure1">25</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'26')){echo ' checked ';}?> value="26"
                                                                    class="pointure" id="pointure2">
                                                                <label class="labelponture" for="pointure2">26</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'27')){echo ' checked ';}?> value="27"
                                                                    class="pointure" id="pointure3">
                                                                <label class="labelponture" for="pointure3">27</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'28')){echo ' checked ';}?> value="28"
                                                                    class="pointure" id="pointure4">
                                                                <label class="labelponture" for="pointure4">28</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'29')){echo ' checked ';}?> value="29"
                                                                    class="pointure" id="pointure5">
                                                                <label class="labelponture" for="pointure5">29</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'30')){echo ' checked ';}?> value="30"
                                                                    class="pointure" id="pointure6">
                                                                <label class="labelponture" for="pointure6">30</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'31')){echo ' checked ';}?> value="31"
                                                                    class="pointure" id="pointure7">
                                                                <label class="labelponture" for="pointure7">31</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'32')){echo ' checked ';}?> value="32"
                                                                    class="pointure" id="pointure8">
                                                                <label class="labelponture" for="pointure8">32</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'33')){echo ' checked ';}?> value="33"
                                                                    class="pointure" id="pointure9">
                                                                <label class="labelponture" for="pointure9">33</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'34')){echo ' checked ';}?> value="34"
                                                                    class="pointure" id="pointure10">
                                                                <label class="labelponture" for="pointure10">34</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'35')){echo ' checked ';}?> value="35"
                                                                    class="pointure" id="pointure11">
                                                                <label class="labelponture" for="pointure11">35</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'36')){echo ' checked ';}?> value="36"
                                                                    class="pointure" id="pointure12">
                                                                <label class="labelponture" for="pointure12">36</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'37')){echo ' checked ';}?> value="37"
                                                                    class="pointure" id="pointure13">
                                                                <label class="labelponture" for="pointure13">37</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'38')){echo ' checked ';}?> value="38"
                                                                    class="pointure" id="pointure14">
                                                                <label class="labelponture" for="pointure14">38</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'39')){echo ' checked ';}?> value="39"
                                                                    class="pointure" id="pointure15">
                                                                <label class="labelponture" for="pointure15">39</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'40')){echo ' checked ';}?> value="40"
                                                                    class="pointure" id="pointure16">
                                                                <label class="labelponture" for="pointure16">40</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'41')){echo ' checked ';}?> value="41"
                                                                    class="pointure" id="pointure17">
                                                                <label class="labelponture" for="pointure17">41</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'42')){echo ' checked ';}?> value="42"
                                                                    class="pointure" id="pointure18">
                                                                <label class="labelponture" for="pointure18">42</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'43')){echo ' checked ';}?> value="43"
                                                                    class="pointure" id="pointure19">
                                                                <label class="labelponture" for="pointure19">43</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'44')){echo ' checked ';}?> value="44"
                                                                    class="pointure" id="pointure20">
                                                                <label class="labelponture" for="pointure20">44</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'45')){echo ' checked ';}?> value="45"
                                                                    class="pointure" id="pointure21">
                                                                <label class="labelponture" for="pointure21">45</label>
                                                            </div>
                                                        <?php } if($row['group'] =='4'){  ?>
                                                            <div id="Taillevetement" class="col-sm">
                                                                <h5 class="m-2">Ajouter Taille</h5>
                                                                <input type="checkbox" name="chkl[ ]" <?php if(strpos($row['taille'],'XS')){echo ' checked ';}?> value="XS"
                                                                    class="tailleV" id="tailleV1">
                                                                <label for="tailleV1">XS</label>
                                                                <input type="checkbox" name="chkl[ ]" <?php if(strpos($row['taille'],'S')){echo ' checked ';}?> value="S"
                                                                    class="tailleV" id="tailleV2">
                                                                <label for="tailleV2">S</label>
                                                                <input type="checkbox" name="chkl[ ]" <?php if(strpos($row['taille'],'M')){echo ' checked ';}?> value="M"
                                                                    class="tailleV" id="tailleV3">
                                                                <label for="tailleV3">M</label>
                                                                <input type="checkbox" name="chkl[ ]" <?php if(strpos($row['taille'],'L')){echo ' checked ';}?> value="L"
                                                                    class="tailleV" id="tailleV4">
                                                                <label for="tailleV4">L</label>
                                                                <input type="checkbox" name="chkl[ ]" <?php if(strpos($row['taille'],'XL')){echo ' checked ';}?> value="XL"
                                                                    class="tailleV" id="tailleV5">
                                                                <label for="tailleV5">XL</label>
                                                                <input type="checkbox" name="chkl[ ]" <?php if(strpos($row['taille'],'2XL')){echo ' checked ';}?> value="2XL"
                                                                    class="tailleV" id="tailleV6">
                                                                <label for="tailleV6">2XL</label>
                                                                <input type="checkbox" name="chkl[ ]" <?php if(strpos($row['taille'],'3XL')){echo ' checked ';}?> value="3XL"
                                                                    class="tailleV" id="tailleV7">
                                                                <label for="tailleV7">3XL</label>
                                                                <input type="checkbox" name="chkl[ ]" <?php if(strpos($row['taille'],'4XL')){echo ' checked ';}?> value="4XL"
                                                                    class="tailleV" id="tailleV8">
                                                                <label for="tailleV8">4XL</label>
                                                                <input type="checkbox" name="chkl[ ]" <?php if(strpos($row['taille'],'5XL')){echo ' checked ';}?> value="5XL"
                                                                    class="tailleV" id="tailleV9">
                                                                <label for="tailleV9">5XL</label>
                                                                <input type="checkbox" name="chkl[ ]" <?php if(strpos($row['taille'],'6XL')){echo ' checked ';}?> value="6XL"
                                                                    class="tailleV" id="tailleV10">
                                                                <label for="tailleV10">6XL</label>
                                                            </div>
                                                        <?php } if($row['group'] =='1'){  ?>
                                                            <div id="Taillesac" class="col-sm">
                                                                <h5 class="m-2">Ajouter Taille</h5>
                                                                <input type="checkbox" name="chkl[ ]" <?php if(strpos($row['taille'],'Petite')){echo ' checked ';}?>  value="Petite"
                                                                    class="tailleS" id="tailleS1">
                                                                <label for="tailleS1">Petite</label>
                                                                <input type="checkbox" name="chkl[ ]" <?php if(strpos($row['taille'],'Moyenne')){echo ' checked ';}?>  value="Moyenne"
                                                                    class="tailleS" id="tailleS2">
                                                                <label for="tailleS2">Moyenne</label>
                                                                <input type="checkbox" name="chkl[ ]" <?php if(strpos($row['taille'],'Grande')){echo ' checked ';}?>  value="Grande"
                                                                    class="tailleS" id="tailleS3">
                                                                <label for="tailleS3">Grande</label>
                                                            </div>
                                                        <?php } if($row['group'] =='3'){  ?>
                                                            <div id="Tailleaccessoires" class="col-sm">
                                                                <h5 class="m-2">Ajouter Taille</h5>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'42')){echo ' checked ';}?>  value="42"
                                                                    class="tailleA" id="tailleA1">
                                                                <label for="tailleA1">42</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'44')){echo ' checked ';}?>  value="44"
                                                                    class="tailleA" id="tailleA2">
                                                                <label for="tailleA2">44</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'46')){echo ' checked ';}?>  value="46"
                                                                    class="tailleA" id="tailleA3">
                                                                <label for="tailleA3">46</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'48')){echo ' checked ';}?>  value="48"
                                                                    class="tailleA" id="tailleA4">
                                                                <label for="tailleA4">48</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'50')){echo ' checked ';}?>  value="50"
                                                                    class="tailleA" id="tailleA5">
                                                                <label for="tailleA5">50</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'52')){echo ' checked ';}?>  value="52"
                                                                    class="tailleA" id="tailleA6">
                                                                <label for="tailleA6">52</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'54')){echo ' checked ';}?>  value="54"
                                                                    class="tailleA" id="tailleA7">
                                                                <label for="tailleA7">54</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'56')){echo ' checked ';}?>  value="56"
                                                                    class="tailleA" id="tailleA8">
                                                                <label for="tailleA8">56</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'58')){echo ' checked ';}?>  value="58"
                                                                    class="tailleA" id="tailleA9">
                                                                <label for="tailleA9">58</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'60')){echo ' checked ';}?>  value="60"
                                                                    class="tailleA" id="tailleA10">
                                                                <label for="tailleA10">60</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'62')){echo ' checked ';}?>  value="62"
                                                                    class="tailleA" id="tailleA11">
                                                                <label for="tailleA11">62</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'64')){echo ' checked ';}?>  value="64"
                                                                    class="tailleA" id="tailleA12">
                                                                <label for="tailleA12">64</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'66')){echo ' checked ';}?>  value="66"
                                                                    class="tailleA" id="tailleA13">
                                                                <label for="tailleA13">66</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'68')){echo ' checked ';}?>  value="68"
                                                                    class="tailleA" id="tailleA14">
                                                                <label for="tailleA14">68</label>
                                                                <input type="checkbox" name="chkl[ ]"  <?php if(strpos($row['taille'],'70')){echo ' checked ';}?>  value="70"
                                                                    class="tailleA" id="tailleA15">
                                                                <label for="tailleA15"></label>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                                <div class="col-sm">
                                                    <div class="row mb-3">
                                                        <div class="col-sm">
                                                            <h5 class="m-2">Genre :</h5>
                                                            <select name="genre" id="">
                                                                <option
                                                                    <?php if($row['genre'] =='Femme'){ echo 'selected';} ?>
                                                                    value="Femme">Femme</option>
                                                                <option
                                                                    <?php if($row['genre'] =='Homme'){ echo 'selected';} ?>
                                                                    value="Homme" disabled>Homme</option>
                                                                <option
                                                                    <?php if($row['genre'] =='Enfant'){ echo 'selected';}?>
                                                                    value="Enfant" disabled>Enfant</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm">
                                                            <h5 class="m-2">Quantite :</h5>
                                                            <input class="text-center" type="text"
                                                                value="<?php echo $row['quantite'];?>" required
                                                                name="quantite" />
                                                        </div>
                                                        <div class="col-sm">
                                                            <h5 class="m-2">Date :</h5>
                                                            <input class="text-center" type="text" name="date"
                                                                value="<?php echo $row['date'];?>" />
                                                        </div>
                                                    </div>
                                                    <h5 class="m-2">Image de produit :</h5>
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <input type="file" onchange="loadFile1(event)"
                                                                accept="image/*" name="img1" id="inputImg1">
                                                            <label class="inputfile" for="inputImg1"
                                                                style="min-height:200px">
                                                                <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img1']); ?>"
                                                                    id="output1" width="200" height="250" alt="">
                                                            </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <input type="file" onchange="loadFile2(event)"
                                                                accept="image/*" name="img2" id="inputImg2">
                                                            <label class="mb-2 inputfile1" for="inputImg2">
                                                                <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img2']); ?>"
                                                                    id="output2" width="35" height="30" alt="">
                                                            </label>
                                                            <input type="file" onchange="loadFile3(event)"
                                                                accept="image/*" name="img3" id="inputImg3">
                                                            <label class="mb-2 inputfile1" for="inputImg3">
                                                                <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img3']); ?>"
                                                                    id="output3" width="35" height="30" alt="">
                                                            </label>
                                                            <input type="file" onchange="loadFile4(event)"
                                                                accept="image/*" name="img4" id="inputImg4">
                                                            <label class="mb-2 inputfile1" for="inputImg4">
                                                                <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img4']); ?>"
                                                                    id="output4" width="35" height="30" alt="">
                                                            </label>
                                                            <input type="file" onchange="loadFile5(event)"
                                                                accept="image/*" name="img5" id="inputImg5">
                                                            <label class="inputfile1" for="inputImg5">
                                                                <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($row['img5']); ?>"
                                                                    id="output5" width="35" height="30" alt="">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </form>
        </div>
    </div>
    <?php include 'script.php';?>
    <script>
    var loadFile1 = function(a) {
        var b = document.getElementById("output1");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };
    var loadFile2 = function(a) {
        var b = document.getElementById("output2");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };
    var loadFile3 = function(a) {
        var b = document.getElementById("output3");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };
    var loadFile4 = function(a) {
        var b = document.getElementById("output4");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };
    var loadFile5 = function(a) {
        var b = document.getElementById("output5");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };
    var loadFile6 = function(a) {
        var b = document.getElementById("output6");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };
    var loadFile7 = function(a) {
        var b = document.getElementById("output7");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };
    var loadFile8 = function(a) {
        var b = document.getElementById("output8");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };
    var loadFile9 = function(a) {
        var b = document.getElementById("output9");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };
    var loadFile10 = function(a) {
        var b = document.getElementById("output10");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };
    var loadFile11 = function(a) {
        var b = document.getElementById("output11");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };    
    var loadFile12 = function(a) {
        var b = document.getElementById("output12");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };    
    var loadFile13 = function(a) {
        var b = document.getElementById("output13");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };    
    var loadFile14 = function(a) {
        var b = document.getElementById("output14");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };    
    var loadFile15 = function(a) {
        var b = document.getElementById("output15");
        b.style.width = "100%";
        b.style.height = "100%";
        b.src = URL.createObjectURL(a.target.files[0])
    };
    </script>
</body>

</html>