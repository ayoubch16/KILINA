<?php include 'header.php';
      $id=$_GET['id'];
     
      $sql="SELECT * FROM `produits` WHERE `id`='$id'";
      $result = $cnx->query($sql);
      if ($row = $result->fetch_assoc()) {
                
      }
?>

<body>
    <style>
    .dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
    }

    input[type="text"],
    select {
        border: none;
        background-color: #e6e6e6;
        border-radius: 5px;
        width: 100%;
        height: 50px;
    }

    .txtinput {
        width: 100%;
        background-color: #e6e6e6;
        border-radius: 10px;
        border: none;
        padding: 10px;
        resize: none;
    }

    input[type="checkbox"].pointure,
    input[type="checkbox"].tailleV,
    input[type="checkbox"].tailleS,
    input[type="checkbox"].tailleA {
        display: none;
    }

    input[type="checkbox"].pointure+label,
    input[type="checkbox"].tailleV+label,
    input[type="checkbox"].tailleS+label,
    input[type="checkbox"].tailleA+label {
        text-align: center;
        color: gray;
        min-width: 50px;
        max-width: 100px;
        height: 20px;
    }

    input[type="checkbox"].pointure+label:hover,
    input[type="checkbox"].tailleV+label:hover,
    input[type="checkbox"].tailleS+label:hover,
    input[type="checkbox"].tailleA+label:hover {
        background-color: #e1d106;
        cursor: pointer;
        color: #000;
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
        border-radius: 3px;
    }

    .barRech input[type="text"] {
        border: none;
        background-color: #fff;
        width: 400px;
        height: 50px;
        border-radius: 10px;
        box-shadow: 0px 6px 44px -20px #000000;
        margin-bottom: 20px;
        padding-left: 20px;

    }

    .btnE {
        background-color: #fcea01;
        border-radius: 10px;
        border: none;
        height: 50px;
        width: 100px;
    }

    .btnE:hover {
        color: #fcea01;
        background-color: #000;
    }

    .btnA {
        background-color: #fff;
        border: 1px solid #fffcdd;
        border-radius: 10px;
        color: #000;
        height: 50px;
        width: 100px;
    }

    .btnA:hover {
        border-color: #000;
    }

    .inputfile {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 2px dashed #9d9d9d;
    }

    .inputfile:hover {
        cursor: pointer;
        border: 2px dashed #7456e7;
    }

    #inputImg1,
    #inputImg2,
    #inputImg3,
    #inputImg4,
    #inputImg5 {
        display: none;
    }

    .inputfile1 {

        height: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 2px dashed #9d9d9d;
    }

    .inputfile1:hover {
        cursor: pointer;
        border: 2px dashed #7456e7;
    }

    #Taillechaussure,
    #Taillevetement,
    #Taillesac,
    #Tailleaccessoires {
        display: none;
    }
    </style>

    <script>
    var pointure = document.querySelectorAll('.pointure');
    for (var i = 0; i < pointure.length; i++) {
        pointure[i].checked = false;
    }
    var tailleV = document.querySelectorAll('.tailleV');
    for (var i = 0; i < tailleV.length; i++) {
        tailleV[i].checked = false;
    }
    var tailleS = document.querySelectorAll('.tailleS');
    for (var i = 0; i < tailleS.length; i++) {
        tailleS[i].checked = false;
    }
    </script>
    <script>
    document.title = 'Modifier Produits';
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
                                <input class="" type="text" name="Ref" placeholder="Ref" readonly
                                    value="<?php echo $row['Ref'];?>" />
                            </div>
                            <div class="col-4 row"
                                style="display: flex;justify-content: end;align-items: center;margin-bottom: 20px;">
                                <div class="col"><input class="btnE" type="submit"
                                        onclick="confirm('Voulez-vous confirmer les modifications!');"
                                        value="Modifier" /></div>
                                <div class="col"><input class="btnA" type="reset" value="Annuler" /></div>
                            </div>
                        </div>
                        <div class="col-xl col-xxl ">
                            <div class="w-100">
                                <div class="col-sm">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-sm">
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
                                                        });
                                                        $(".vetement").click(function() {
                                                            $("#Taillechaussure").hide();
                                                            $("#Taillevetement").show();
                                                            $("#Taillesac").hide();
                                                            $("#Tailleaccessoires").hide();
                                                        });
                                                        $(".sac").click(function() {
                                                            $("#Taillechaussure").hide();
                                                            $("#Taillevetement").hide();
                                                            $("#Taillesac").show();
                                                            $("#Tailleaccessoires").hide();
                                                        });
                                                        $(".accessoires").click(function() {
                                                            $("#Taillechaussure").hide();
                                                            $("#Taillevetement").hide();
                                                            $("#Taillesac").hide();
                                                            $("#Tailleaccessoires").show();
                                                        });
                                                    });
                                                    </script>
                                                </div>
                                                <div class="col-sm">
                                                    <h5 class="m-2">Prix d'achat :</h5>
                                                    <input type="text" name="prixa" id=""
                                                        value="<?php echo $row['prixa'];?>" required />
                                                </div>
                                                <div class="col-sm">
                                                    <h5 class="m-2">Prix de Vente:</h5>
                                                    <input type="text" name="prix" id=""
                                                        value="<?php echo $row['prix'];?>" required />
                                                </div>
                                                <div class="col-sm">
                                                    <h5 class="m-2">Remis :</h5>
                                                    <input type="text" name="remis" id=""
                                                        value="<?php echo $row['remis'];?>" required />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm">

                                                    <h5 class="m-2">Titre :</h5>
                                                    <input type="text" name="titre" value="<?php echo $row['titre'];?>"
                                                        required>

                                                    <h5 class="m-2">Description :</h5>
                                                    <textarea class="txtinput" name="description" id="" required
                                                        rows="10"><?php echo $row['description'];?></textarea>
                                                    <div class="row">
                                                        <div id="Taillechaussure" class="col-sm">
                                                            <h5 class="m-2">Ajouter Pointure</h5>
                                                            <input type="checkbox" name="chkl[ ]" value="25"
                                                                class="pointure " id="pointure1">
                                                            <label class="labelponture" for="pointure1">25</label>
                                                            <input type="checkbox" name="chkl[ ]" value="26"
                                                                class="pointure " id="pointure2">
                                                            <label class="labelponture" for="pointure2">26</label>
                                                            <input type="checkbox" name="chkl[ ]" value="27"
                                                                class="pointure " id="pointure3">
                                                            <label class="labelponture" for="pointure3">27</label>
                                                            <input type="checkbox" name="chkl[ ]" value="28"
                                                                class="pointure " id="pointure4">
                                                            <label class="labelponture" for="pointure4">28</label>
                                                            <input type="checkbox" name="chkl[ ]" value="29"
                                                                class="pointure " id="pointure5">
                                                            <label class="labelponture" for="pointure5">29</label>
                                                            <input type="checkbox" name="chkl[ ]" value="30"
                                                                class="pointure " id="pointure6">
                                                            <label class="labelponture" for="pointure6">30</label>
                                                            <input type="checkbox" name="chkl[ ]" value="31"
                                                                class="pointure " id="pointure7">
                                                            <label class="labelponture" for="pointure7">31</label>
                                                            <input type="checkbox" name="chkl[ ]" value="32"
                                                                class="pointure " id="pointure8">
                                                            <label class="labelponture" for="pointure8">32</label>
                                                            <input type="checkbox" name="chkl[ ]" value="33"
                                                                class="pointure " id="pointure9">
                                                            <label class="labelponture" for="pointure9">33</label>
                                                            <input type="checkbox" name="chkl[ ]" value="34"
                                                                class="pointure " id="pointure10">
                                                            <label class="labelponture" for="pointure10">34</label>
                                                            <input type="checkbox" name="chkl[ ]" value="35"
                                                                class="pointure " id="pointure11">
                                                            <label class="labelponture" for="pointure11">35</label>
                                                            <input type="checkbox" name="chkl[ ]" value="36"
                                                                class="pointure " id="pointure12">
                                                            <label class="labelponture" for="pointure12">36</label>
                                                            <input type="checkbox" name="chkl[ ]" value="37"
                                                                class="pointure " id="pointure13">
                                                            <label class="labelponture" for="pointure13">37</label>
                                                            <input type="checkbox" name="chkl[ ]" value="38"
                                                                class="pointure " id="pointure14">
                                                            <label class="labelponture" for="pointure14">38</label>
                                                            <input type="checkbox" name="chkl[ ]" value="39"
                                                                class="pointure " id="pointure15">
                                                            <label class="labelponture" for="pointure15">39</label>
                                                            <input type="checkbox" name="chkl[ ]" value="40"
                                                                class="pointure " id="pointure16">
                                                            <label class="labelponture" for="pointure16">40</label>
                                                            <input type="checkbox" name="chkl[ ]" value="41"
                                                                class="pointure " id="pointure17">
                                                            <label class="labelponture" for="pointure17">41</label>
                                                            <input type="checkbox" name="chkl[ ]" value="42"
                                                                class="pointure " id="pointure18">
                                                            <label class="labelponture" for="pointure18">42</label>
                                                            <input type="checkbox" name="chkl[ ]" value="43"
                                                                class="pointure " id="pointure19">
                                                            <label class="labelponture" for="pointure19">43</label>
                                                            <input type="checkbox" name="chkl[ ]" value="44"
                                                                class="pointure " id="pointure20">
                                                            <label class="labelponture" for="pointure20">44</label>
                                                            <input type="checkbox" name="chkl[ ]" value="45"
                                                                class="pointure " id="pointure21">
                                                            <label class="labelponture" for="pointure21">45</label>

                                                        </div>
                                                        <div id="Taillevetement" class="col-sm">
                                                            <h5 class="m-2">Ajouter Taille</h5>
                                                            <input type="checkbox" name="chkl[ ]" value="XS"
                                                                class="tailleV" id="tailleV1">
                                                            <label for="tailleV1">XS</label>
                                                            <input type="checkbox" name="chkl[ ]" value="S"
                                                                class="tailleV" id="tailleV2">
                                                            <label for="tailleV2">S</label>
                                                            <input type="checkbox" name="chkl[ ]" value="M"
                                                                class="tailleV" id="tailleV3">
                                                            <label for="tailleV3">M</label>
                                                            <input type="checkbox" name="chkl[ ]" value="L"
                                                                class="tailleV" id="tailleV4">
                                                            <label for="tailleV4">L</label>
                                                            <input type="checkbox" name="chkl[ ]" value="XL"
                                                                class="tailleV" id="tailleV5">
                                                            <label for="tailleV5">XL</label>
                                                            <input type="checkbox" name="chkl[ ]" value="2XL"
                                                                class="tailleV" id="tailleV6">
                                                            <label for="tailleV6">2XL</label>
                                                            <input type="checkbox" name="chkl[ ]" value="3XL"
                                                                class="tailleV" id="tailleV7">
                                                            <label for="tailleV7">3XL</label>
                                                            <input type="checkbox" name="chkl[ ]" value="4XL"
                                                                class="tailleV" id="tailleV8">
                                                            <label for="tailleV8">4XL</label>
                                                            <input type="checkbox" name="chkl[ ]" value="5XL"
                                                                class="tailleV" id="tailleV9">
                                                            <label for="tailleV9">5XL</label>
                                                            <input type="checkbox" name="chkl[ ]" value="6XL"
                                                                class="tailleV" id="tailleV10">
                                                            <label for="tailleV10">6XL</label>
                                                        </div>
                                                        <div id="Taillesac" class="col-sm">
                                                            <h5 class="m-2">Ajouter Taille</h5>
                                                            <input type="checkbox" name="chkl[ ]" value="Petite"
                                                                class="tailleS" id="tailleS1">
                                                            <label for="tailleS1">Petite</label>
                                                            <input type="checkbox" name="chkl[ ]" value="Moyenne"
                                                                class="tailleS" id="tailleS2">
                                                            <label for="tailleS2">Moyenne</label>
                                                            <input type="checkbox" name="chkl[ ]" value="Grande"
                                                                class="tailleS" id="tailleS3">
                                                            <label for="tailleS3">Grande</label>
                                                        </div>
                                                        <div id="Tailleaccessoires" class="col-sm">
                                                            <h5 class="m-2">Ajouter Taille</h5>
                                                            <input type="checkbox" name="chkl[ ]" value="42"
                                                                class="tailleA" id="tailleA1">
                                                            <label for="tailleA1">42</label>
                                                            <input type="checkbox" name="chkl[ ]" value="44"
                                                                class="tailleA" id="tailleA2">
                                                            <label for="tailleA2">44</label>
                                                            <input type="checkbox" name="chkl[ ]" value="46"
                                                                class="tailleA" id="tailleA3">
                                                            <label for="tailleA3">46</label>
                                                            <input type="checkbox" name="chkl[ ]" value="48"
                                                                class="tailleA" id="tailleA4">
                                                            <label for="tailleA4">48</label>
                                                            <input type="checkbox" name="chkl[ ]" value="50"
                                                                class="tailleA" id="tailleA5">
                                                            <label for="tailleA5">50</label>
                                                            <input type="checkbox" name="chkl[ ]" value="52"
                                                                class="tailleA" id="tailleA6">
                                                            <label for="tailleA6">52</label>
                                                            <input type="checkbox" name="chkl[ ]" value="54"
                                                                class="tailleA" id="tailleA7">
                                                            <label for="tailleA7">54</label>
                                                            <input type="checkbox" name="chkl[ ]" value="56"
                                                                class="tailleA" id="tailleA8">
                                                            <label for="tailleA8">56</label>
                                                            <input type="checkbox" name="chkl[ ]" value="58"
                                                                class="tailleA" id="tailleA9">
                                                            <label for="tailleA9">58</label>
                                                            <input type="checkbox" name="chkl[ ]" value="60"
                                                                class="tailleA" id="tailleA10">
                                                            <label for="tailleA10">60</label>
                                                            <input type="checkbox" name="chkl[ ]" value="62"
                                                                class="tailleA" id="tailleA11">
                                                            <label for="tailleA11">62</label>
                                                            <input type="checkbox" name="chkl[ ]" value="64"
                                                                class="tailleA" id="tailleA12">
                                                            <label for="tailleA12">64</label>
                                                            <input type="checkbox" name="chkl[ ]" value="66"
                                                                class="tailleA" id="tailleA13">
                                                            <label for="tailleA13">66</label>
                                                            <input type="checkbox" name="chkl[ ]" value="68"
                                                                class="tailleA" id="tailleA14">
                                                            <label for="tailleA14">68</label>
                                                            <input type="checkbox" name="chkl[ ]" value="70"
                                                                class="tailleA" id="tailleA15">
                                                            <label for="tailleA15"></label>
                                                        </div>
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
                                                                value="<?php echo date('d-m-Y H:i:s ', time());?>" />
                                                        </div>
                                                    </div>
                                                    <h5 class="m-2">Image de produit :</h5>
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <input type="file" onchange="loadFile1(event)"
                                                                accept="image/*" name="img1" id="inputImg1">
                                                            <label class="inputfile" for="inputImg1"
                                                                style="min-height: 200px;">
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
                                                            <label class=" inputfile1" for="inputImg5">
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
    var loadFile1 = function(event) {
        var image = document.getElementById('output1');
        image.style.width = "100%";
        image.style.height = "100%";
        image.src = URL.createObjectURL(event.target.files[0]);
    };

    var loadFile2 = function(event) {
        var image = document.getElementById('output2');
        image.style.width = "100%";
        image.style.height = "100%";
        image.src = URL.createObjectURL(event.target.files[0]);
    };

    var loadFile3 = function(event) {
        var image = document.getElementById('output3');
        image.style.width = "100%";
        image.style.height = "100%";
        image.src = URL.createObjectURL(event.target.files[0]);
    };

    var loadFile4 = function(event) {
        var image = document.getElementById('output4');
        image.style.width = "100%";
        image.style.height = "100%";
        image.src = URL.createObjectURL(event.target.files[0]);
    };

    var loadFile5 = function(event) {
        var image = document.getElementById('output5');
        image.style.width = "100%";
        image.style.height = "100%";
        image.src = URL.createObjectURL(event.target.files[0]);
    };
    </script>



</body>

</html>