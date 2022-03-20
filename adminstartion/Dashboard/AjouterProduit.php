<?php include 'header.php';?>
<body>
    <style>
        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }
        input[type="text"],select{
                border: none;
                background-color: #f6f6f6;
                border-radius: 10px;
                width: 100%;
                height: 50px;
        }
        .txtinput{
            width: 100%;
            background-color: #f6f6f6;
            border-radius: 10px;
            border: none;
            padding: 10px;
            resize: none;
        }
        input[type="checkbox"].taille,input[type="checkbox"].tailleS {
             display: none;
        }
        input[type="checkbox"].taille+label {
                    text-align: center;
                    color: gray;
                    width: 50px;
                    height: 20px;
        }
        input[type="checkbox"].tailleS+label {
                    text-align: center;
                    color: gray;
                    width: 100px;
                    height: 50px;
        }
        input[type="checkbox"].taille+label:hover {
                    background-color: #fffcdd;
                    cursor: pointer;
        }
        input[type="checkbox"].taille1:checked+label {
                    color: #000;background-color: #fffcdd;
        }
        input[type="checkbox"].taille2:checked+label {
                    color: #000;background-color: #fffcdd;
        }
        input[type="checkbox"].taille3:checked+label {
                    color: #000;background-color: #fffcdd;
        }
        input[type="checkbox"].taille4:checked+label {
                    color: #000;background-color: #fffcdd;
        }
        input[type="checkbox"].taille5:checked+label {
                    color: #000;background-color: #fffcdd;
        }

        input[type="checkbox"].pointure {
             display: none;
        }
        input[type="checkbox"].pointure+label {
                    text-align: center;
                    color: gray;
                    width: 50px;
                    height: 20px;
        }
        input[type="checkbox"].pointure+label:hover {
                    background-color: #eed9ff;
                    cursor: pointer;
        }
        input[type="checkbox"].pointure1:checked+label {
                    color: #000;background-color: #eed9ff;
        }
        input[type="checkbox"].pointure2:checked+label {
                    color: #000;background-color: #eed9ff;
        }
        input[type="checkbox"].pointure3:checked+label {
                    color: #000;background-color: #eed9ff;
        }
        input[type="checkbox"].pointure4:checked+label {
                    color: #000;background-color: #eed9ff;
        }
        input[type="checkbox"].pointure5:checked+label {
                    color: #000;background-color: #eed9ff;
        }
        input[type="checkbox"].pointure6:checked+label {
                    color: #000;background-color: #eed9ff;
        }
        input[type="checkbox"].pointure7:checked+label {
                    color: #000;background-color: #eed9ff;
        }
        input[type="checkbox"].pointure8:checked+label {
                    color: #000;background-color: #eed9ff;
        }
        input[type="checkbox"].pointure9:checked+label {
                    color: #000;background-color: #eed9ff;
        }
        .barRech  input[type="text"] {
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
        .btnA:hover{
            border-color:#000 ;
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
        #inputImg1,#inputImg2,#inputImg3,#inputImg4,#inputImg5{
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
        #chaussure,#sac {
            display: none;
        }

    </style>

    <script>
    document.title = 'Ajouter Produits';
    </script>
<div class="wrapper">
        <?php include 'menu.php';?>
		<div class="main">
          <?php include 'Top.php';?>
        <form action="ajoute.php" method="POST" enctype="multipart/form-data">
			<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"><strong>Ajouter Produits</strong></h1>
                    <div class="row">
                        <div class="col barRech">
                            <input class="" type="text" name="Ref" placeholder="Ref" />
                        </div>
                        <div class="col-4 row" style="display: flex;justify-content: end;align-items: center;margin-bottom: 20px;">
                            <div class="col"><input class="btnE" type="submit" value="Enregistrer" /></div>
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
                                                                <select name="categorie" id="categorie">
                                                                    <option class="sac" value="Cartables">Cartables</option>
                                                                    <option class="sac" value="Sacs à Dos">Sacs à Dos</option>
                                                                    <option class="sac" value="Portefeuilles">Portefeuilles</option>
                                                                    <option class="sac" value="Sacs à main">Sacs à main</option>
                                                                    <option class="sac" value="Sacs de soirée ">Sacs de soirée </option>
                                                                    <option class="sac" value="Pochettes">Pochettes</option>
                                                                    <option class="choix3" value="Djean">Djean</option>
                                                                    <option class="choix3" value="Chemise">Chemise</option>
                                                                    <option class="choix3" value="Robe">Robe</option>
                                                                    <option class="choix3" value="Survette">Survette</option>
                                                                    <option class="choix3" value="Manteaux">Manteaux</option>
                                                                    <option class="choix3" value="Pantalon">Pantalon</option>
                                                                    <option id="choix1" value="Chaussure">Chaussure</option>
                                                                    <option id="choix2" value="Sac">Sac</option>
                                                                    <option class="choix3" value="Accessoires">Accessoires</option>
                                                                    <option class="choix3" value="Bodie">Bodie</option>
                                                                    <option class="choix3" value="Jupe">Jupe</option>
                                                                </select>
                                                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                                                    <script>
                                                                        $(document).ready(function(){
                                                                        $("#choix1").click(function(){
                                                                            $("#chaussure").show();
                                                                            $("#vetement").hide();
                                                                            $("#sac").hide();
                                                                        });
                                                                        $("#choix2").click(function(){
                                                                            $("#chaussure").hide();
                                                                            $("#vetement").hide();
                                                                            $("#sac").show();
                                                                        });
                                                                        $(".choix3").click(function(){
                                                                            $("#chaussure").hide();
                                                                            $("#vetement").show();
                                                                            $("#sac").hide();
                                                                        });
                                                                        });
                                                                    </script>
                                                            </div>
                                                            <div class="col-sm">
                                                                <h5 class="m-2">Prix d'achat :</h5>
                                                                <input type="text" name="prix" id="" />
                                                            </div>
                                                            <div class="col-sm">
                                                                <h5 class="m-2">Prix de Vente:</h5>
                                                                <input type="text" name="prix" id="" />
                                                            </div>
                                                            <div class="col-sm">
                                                                <h5 class="m-2">Remis :</h5>
                                                                <input type="text" name="remis" id="" />
                                                            </div>
                                                        </div>
                                                <div class="row">
                                                    <div class="col-sm">

                                                        <h5 class="m-2">Titre :</h5>
                                                        <input type="text" name="titre">

                                                        <h5 class="m-2">Description :</h5>
                                                        <textarea class="txtinput" name="description" id=""  rows="10"></textarea>
                                                        <div class="row">
                                                            <div id="chaussure" class="col-sm">
                                                                <h5 class="m-2">Ajouter Pointure</h5>
                                                                <input type="checkbox" name="chkl[ ]" value="S" class="pointure pointure1" id="pointure1">
                                                                <label for="pointure1">35-36</label>
                                                                <input type="checkbox" name="chkl[ ]" value="M" class="pointure pointure2" id="pointure2">
                                                                <label for="pointure2">36-37</label>
                                                                <input type="checkbox" name="chkl[ ]" value="L" class="pointure pointure3" id="pointure3">
                                                                <label for="pointure3">37-38</label> 
                                                                <input type="checkbox" name="chkl[ ]" value="XL" class="pointure pointure4" id="pointure4">
                                                                <label for="pointure4">38-39</label> 
                                                                <input type="checkbox" name="chkl[ ]" value="XXL" class="pointure pointure5" id="pointure5">
                                                                <label for="pointure5">39-40</label> 
                                                                <input type="checkbox" name="chkl[ ]" value="XXL" class="pointure pointure6" id="pointure6">
                                                                <label for="pointure6">40-41</label> 
                                                                <input type="checkbox" name="chkl[ ]" value="XXL" class="pointure pointure7" id="pointure7">
                                                                <label for="pointure7">41-42</label> 
                                                                <input type="checkbox" name="chkl[ ]" value="XXL" class="pointure pointure8" id="pointure8">
                                                                <label for="pointure8">42-43</label> 
                                                                <input type="checkbox" name="chkl[ ]" value="XXL" class="pointure pointure9" id="pointure9">
                                                                <label for="pointure9">43-44</label> 

                                                            </div>
                                                            <div id="vetement" class="col-sm">
                                                                <h5 class="m-2">Ajouter Taille</h5>
                                                                <input type="checkbox" name="chkl[ ]" value="S" class="taille taille1" id="taille1">
                                                                <label for="taille1">S</label>
                                                                <input type="checkbox" name="chkl[ ]" value="M" class="taille taille1" id="taille2">
                                                                <label for="taille2">L</label>
                                                                <input type="checkbox" name="chkl[ ]" value="L" class="taille taille1" id="taille3">
                                                                <label for="taille3">M</label> 
                                                                <input type="checkbox" name="chkl[ ]" value="XL" class="taille taille1" id="taille4">
                                                                <label for="taille4">XL</label> 
                                                                <input type="checkbox" name="chkl[ ]" value="XXL" class="taille taille1" id="taille5">
                                                                <label for="taille5">XXL</label> 
                                                            </div>
                                                            <div id="sac" class="col-sm">
                                                                <h5 class="m-2">Ajouter Taille</h5>
                                                                <input type="checkbox" name="chkl[ ]" value="Petite" class="tailleS taille1" id="taille6">
                                                                <label for="taille6">Petite</label>
                                                                <input type="checkbox" name="chkl[ ]" value="Moyenne" class="tailleS taille1" id="taille7">
                                                                <label for="taille7">Moyenne</label>
                                                                <input type="checkbox" name="chkl[ ]" value="Grande" class="tailleS taille1" id="taille8">
                                                                <label for="taille8">Grande</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm">
                                                        <div class="row mb-3">
                                                            <div class="col-sm">
                                                                <h5 class="m-2">Genre :</h5>
                                                                <select name="genre" id="">
                                                                    <option value="Femme">Femme</option>
                                                                    <option value="Homme" disabled>Homme</option>
                                                                    <option value="Enfant" disabled>Enfant</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm">
                                                                <h5 class="m-2">Quantite :</h5>

                                                                        <input class="text-center" type="text" name="quantite"  />
                                                                
                                                            </div>
                                                            <div class="col-sm">
                                                                <h5 class="m-2">Date :</h5>
                                                                <input class="text-center" type="text" name="date"  value="<?php echo date('d-m-Y H:i:s ', time());?>" />
                                                            </div>
                                                        </div>
                                                        <h5 class="m-2">Image de produit :</h5>
                                                        <div class="row">
                                                            <div class="col-sm">
                                                                    <input type="file" onchange="loadFile1(event)"  name="img1" id="inputImg1">
                                                                    <label class="inputfile" for="inputImg1" style="min-height: 200px;">
                                                                        <img src="img/icons/upload.png" id="output1" width="55" height="50" alt="">
                                                                    </label>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <input type="file" onchange="loadFile2(event)" accept="image/*" name="img2" id="inputImg2">
                                                                <label class="mb-2 inputfile1" for="inputImg2">
                                                                    <img src="img/icons/upload.png" id="output2" width="35" height="30" alt="">
                                                                </label>
                                                                <input type="file" onchange="loadFile3(event)" accept="image/*" name="img3" id="inputImg3">
                                                                <label class="mb-2 inputfile1" for="inputImg3">
                                                                    <img src="img/icons/upload.png" id="output3" width="35" height="30" alt="">
                                                                </label>
                                                                <input type="file" onchange="loadFile4(event)" accept="image/*" name="img4" id="inputImg4">
                                                                <label class="mb-2 inputfile1" for="inputImg4">
                                                                    <img src="img/icons/upload.png" id="output4" width="35" height="30" alt="">
                                                                </label>
                                                                <input type="file" onchange="loadFile5(event)" accept="image/*" name="img5" id="inputImg5">
                                                                <label class=" inputfile1" for="inputImg5">
                                                                    <img src="img/icons/upload.png" id="output5" width="35" height="30" alt="">
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