<?php include 'header.php';?>
<body>
    <style>
        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }
        input[type="text"]{
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
        input[type="checkbox"].taille {
             display: none;
        }
        input[type="checkbox"].taille+label {
                    text-align: center;
                    color: gray;
                    width: 50px;
                    height: 20px;
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
    </style>
    <script>
    document.title = 'Ajouter Produits';
    </script>
<div class="wrapper">
        <?php include 'menu.php';?>
		

		<div class="main">
          <?php include 'Top.php';?>
        <form action="">
			<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"><strong>Ajouter Produits</strong></h1>
                    <div class="row">
                        <div class="col barRech">
                            <input class="" type="text" name="Ref" readonly  value="JHJ5556"/>
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
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="row">
                                                            <div class="col-sm">
                                                                <h5 class="m-2">Catégorie :</h5>
                                                                <input type="text" name="categorie" id="" />
                                                            </div>
                                                            <div class="col-sm">
                                                                <h5 class="m-2">Prix :</h5>
                                                                <input type="text" name="prix" id="" />
                                                            </div>
                                                        </div>
                                                        <h5 class="m-2">Description :</h5>
                                                        <textarea class="txtinput" name="description" id=""  rows="7"></textarea>

                                                        <h5 class="m-2">Ajouter Couleur :</h5>
                                                        <input type="color" name="color">

                                                        <div class="row">
                                                            <div class="col-sm">
                                                                <h5 class="m-2">Ajouter Pointure</h5>
                                                                <input type="checkbox" name="pointure" value="S" class="pointure pointure1" id="pointure1">
                                                                <label for="pointure1">35-36</label>
                                                                <input type="checkbox" name="pointure" value="M" class="pointure pointure2" id="pointure2">
                                                                <label for="pointure2">36-37</label>
                                                                <input type="checkbox" name="pointure" value="L" class="pointure pointure3" id="pointure3">
                                                                <label for="pointure3">37-38</label> <br>
                                                                <input type="checkbox" name="pointure" value="XL" class="pointure pointure4" id="pointure4">
                                                                <label for="pointure4">38-39</label> 
                                                                <input type="checkbox" name="pointure" value="XXL" class="pointure pointure5" id="pointure5">
                                                                <label for="pointure5">39-40</label> 
                                                                <input type="checkbox" name="pointure" value="XXL" class="pointure pointure6" id="pointure6">
                                                                <label for="pointure6">40-41</label> <br>
                                                                <input type="checkbox" name="pointure" value="XXL" class="pointure pointure7" id="pointure7">
                                                                <label for="pointure7">41-42</label> 
                                                                <input type="checkbox" name="pointure" value="XXL" class="pointure pointure8" id="pointure8">
                                                                <label for="pointure8">42-43</label> 
                                                                <input type="checkbox" name="pointure" value="XXL" class="pointure pointure9" id="pointure9">
                                                                <label for="pointure9">43-44</label> 

                                                            </div>
                                                            <div class="col-sm">
                                                            <h5 class="m-2">Ajouter Taille</h5>
                                                                <input type="checkbox" name="taille" value="S" class="taille taille1" id="taille1">
                                                                <label for="taille1">S</label>
                                                                <input type="checkbox" name="taille" value="M" class="taille taille2" id="taille2">
                                                                <label for="taille2">L</label>
                                                                <input type="checkbox" name="taille" value="L" class="taille taille3" id="taille3">
                                                                <label for="taille3">M</label> <br>
                                                                <input type="checkbox" name="taille" value="XL" class="taille taille4" id="taille4">
                                                                <label for="taille4">XL</label> 
                                                                <input type="checkbox" name="taille" value="XXL" class="taille taille5" id="taille5">
                                                                <label for="taille5">XXL</label> 
                                                            </div>

                                                        </div>


                                                        
                                                    </div>
                                                    <div class="col-sm">
                                                        <div class="row">
                                                            <div class="col-sm">
                                                                <h5 class="m-2">Genre :</h5>
                                                                <input type="text" name="genre" id="" />
                                                            </div>
                                                            <div class="col-sm">
                                                                <h5 class="m-2">Date :</h5>
                                                                <input type="text" name="date" id="" />
                                                            </div>
                                                        </div>
                                                        <h5 class="m-2">Image de produit :</h5>
                                                        <div class="row">
                                                            <div class="col-sm">
                                                                <input type="file" name="img1">
                                                            </div>
                                                            <div class="col-sm">
                                                                <input type="file" name="img2">
                                                                <input type="file" name="img3">
                                                                <input type="file" name="img4">
                                                                <input type="file" name="img5">

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



</body>

</html>