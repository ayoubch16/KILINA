<?php include 'header.php';?>
<body>
<style>.dot{width:10px;height:10px;border-radius:50%}input[type="text"],select{border:0;background-color:#e6e6e6;border-radius:5px;width:100%;height:50px}.txtinput{width:100%;background-color:#e6e6e6;border-radius:10px;border:0;padding:10px;resize:none}input[type="checkbox"].pointure,input[type="checkbox"].tailleV,input[type="checkbox"].tailleS,input[type="checkbox"].tailleA{display:none}input[type="checkbox"].pointure+label,input[type="checkbox"].tailleV+label,input[type="checkbox"].tailleS+label,input[type="checkbox"].tailleA+label{text-align:center;color:gray;min-width:50px;max-width:100px;height:20px}input[type="checkbox"].pointure+label:hover,input[type="checkbox"].tailleV+label:hover,input[type="checkbox"].tailleS+label:hover,input[type="checkbox"].tailleA+label:hover{background-color:#e1d106;cursor:pointer;color:#000}input[type="checkbox"]#pointure1:checked+label,input[type="checkbox"]#pointure2:checked+label,input[type="checkbox"]#pointure3:checked+label,input[type="checkbox"]#pointure4:checked+label,input[type="checkbox"]#pointure5:checked+label,input[type="checkbox"]#pointure6:checked+label,input[type="checkbox"]#pointure7:checked+label,input[type="checkbox"]#pointure8:checked+label,input[type="checkbox"]#pointure9:checked+label,input[type="checkbox"]#pointure10:checked+label,input[type="checkbox"]#pointure11:checked+label,input[type="checkbox"]#pointure12:checked+label,input[type="checkbox"]#pointure13:checked+label,input[type="checkbox"]#pointure14:checked+label,input[type="checkbox"]#pointure15:checked+label,input[type="checkbox"]#pointure16:checked+label,input[type="checkbox"]#pointure17:checked+label,input[type="checkbox"]#pointure18:checked+label,input[type="checkbox"]#pointure19:checked+label,input[type="checkbox"]#pointure20:checked+label,input[type="checkbox"]#pointure21:checked+label,input[type="checkbox"]#tailleV1:checked+label,input[type="checkbox"]#tailleV2:checked+label,input[type="checkbox"]#tailleV3:checked+label,input[type="checkbox"]#tailleV4:checked+label,input[type="checkbox"]#tailleV5:checked+label,input[type="checkbox"]#tailleV6:checked+label,input[type="checkbox"]#tailleV7:checked+label,input[type="checkbox"]#tailleV8:checked+label,input[type="checkbox"]#tailleV9:checked+label,input[type="checkbox"]#tailleV10:checked+label,input[type="checkbox"]#tailleS1:checked+label,input[type="checkbox"]#tailleS2:checked+label,input[type="checkbox"]#tailleS3:checked+label,input[type="checkbox"]#tailleA1:checked+label,input[type="checkbox"]#tailleA2:checked+label,input[type="checkbox"]#tailleA3:checked+label,input[type="checkbox"]#tailleA4:checked+label,input[type="checkbox"]#tailleA5:checked+label,input[type="checkbox"]#tailleA6:checked+label,input[type="checkbox"]#tailleA7:checked+label,input[type="checkbox"]#tailleA8:checked+label,input[type="checkbox"]#tailleA9:checked+label,input[type="checkbox"]#tailleA10:checked+label,input[type="checkbox"]#tailleA11:checked+label,input[type="checkbox"]#tailleA12:checked+label,input[type="checkbox"]#tailleA13:checked+label,input[type="checkbox"]#tailleA14:checked+label,input[type="checkbox"]#tailleA15:checked+label{color:#000;background-color:#e1d106;border-radius:3px}.barRech input[type="text"]{border:0;background-color:#fff;width:400px;height:50px;border-radius:10px;box-shadow:0 6px 44px -20px #000;margin-bottom:20px;padding-left:20px}.btnE{background-color:#fcea01;border-radius:10px;border:0;height:50px;width:100px}.btnE:hover{color:#fcea01;background-color:#000}.btnA{background-color:#fff;border:1px solid #fffcdd;border-radius:10px;color:#000;height:50px;width:100px}.btnA:hover{border-color:#000}.inputfile{width:100%;height:100%;display:flex;justify-content:center;align-items:center;border:2px dashed #9d9d9d}.inputfile:hover{cursor:pointer;border:2px dashed #7456e7}#inputImg1,#inputImg2,#inputImg3,#inputImg4,#inputImg5{display:none}.inputfile1{height:100px;display:flex;justify-content:center;align-items:center;border:2px dashed #9d9d9d}.inputfile1:hover{cursor:pointer;border:2px dashed #7456e7}#Taillechaussure,#Taillevetement,#Taillesac,#Tailleaccessoires{display:none}</style>
<script>/*<![CDATA[*/var pointure=document.querySelectorAll(".pointure");for(var i=0;i<pointure.length;i++){pointure[i].checked=false}var tailleV=document.querySelectorAll(".tailleV");for(var i=0;i<tailleV.length;i++){tailleV[i].checked=false}var tailleS=document.querySelectorAll(".tailleS");for(var i=0;i<tailleS.length;i++){tailleS[i].checked=false}/*]]>*/</script>
<script>document.title="Ajouter Produits";</script>
<div class="wrapper">
<?php include 'menu.php';?>
<div class="main">
<?php include 'Top.php';?>
<form action="ajoute.php" method="POST" enctype="multipart/form-data">
<main class="content">
<div class="container-fluid p-0">
<h1 class="h3 mb-3"><strong>Ajouter Produits</strong></h1>
<div class="row">
<div class="col barRech row">
<input class="col" type="text" name="Ref" placeholder="Ref" required  value="" />
<input class="col" type="text" name="Ref" placeholder="Ref" required  value="" />
</div>
<div class="col-4 row" style="display:flex;justify-content:end;align-items:center;margin-bottom:20px">
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
<h5 class="m-2">Catégorie :</h5>
<select name="categorie" id="categorie" required>
<optgroup label="Sac">
<option class="sac" value="Cartables">Cartables</option>
<option class="sac" value="Sacs à Dos">Sacs à Dos</option>
<option class="sac" value="Portefeuilles">Portefeuilles</option>
<option class="sac" value="Sacs à main">Sacs à main</option>
<option class="sac" value="Sacs de soirée ">Sacs de soirée </option>
<option class="sac" value="Pochettes">Pochettes</option>
</optgroup>
<optgroup label="chaussure">
<option class="chaussure" value="Baskets">Baskets</option>
<option class="chaussure" value="Escarpins">Escarpins</option>
<option class="chaussure" value="Mocassins">Mocassins</option>
<option class="chaussure" value="Sandales">Sandales</option>
<option class="chaussure" value="Ballerines">Ballerines</option>
<option class="chaussure" value="Espadrilles">Espadrilles</option>
<option class="chaussure" value="Bottines">Bottines</option>
<option class="chaussure" value="Pantoufles">Pantoufles</option>
<option class="chaussure" value="Sabots">Sabots</option>
</optgroup>
<optgroup label="accessoires">
<option class="accessoires" value="Ceintures">Ceintures</option>
<option class="accessoires" value="Echarpes">Echarpes</option>
<option class="accessoires" value="Portes clés ">Portes clés </option>
<option class="accessoires" value="Casquettes">Casquettes</option>
<option class="accessoires" value="Chapeaux">Chapeaux</option>
</optgroup>
<optgroup label="vetement">
<option class="vetement" value="T-Shirts">T-Shirts</option>
<option class="vetement" value="Monteaux">Monteaux</option>
<option class="vetement" value="Vestes">Vestes</option>
<option class="vetement" value="Robes">Robes</option>
<option class="vetement" value="Chemise">Chemise</option>
<option class="vetement" value="Tops">Tops</option>
<option class="vetement" value="Débardeurs">Débardeurs</option>
<option class="vetement" value="Costumes">Costumes</option>
<option class="vetement" value="Tricot">Tricot</option>
<option class="vetement" value="Sweat">Sweat</option>
<option class="vetement" value="Bodys">Bodys</option>
<option class="vetement" value="Ensembles 2 piéces ">Ensembles 2 piéces </option>
<option class="vetement" value="Ensembles 3 piéces ">Ensembles 3 piéces </option>
<option class="vetement" value="Combinaisons">Combinaisons</option>
<option class="vetement" value="Jupes">Jupes</option>
<option class="vetement" value="Shorts">Shorts</option>
<option class="vetement" value="Pantalons">Pantalons</option>
<option class="vetement" value="Jeans">Jeans</option>
<option class="vetement" value="Leggings">Leggings</option>
<option class="vetement" value="Collants sport">Collants sport</option>
<option class="vetement" value="Maillots de Bain">Maillots de Bain</option>
<option class="vetement" value="Cap">Cap</option>
<option class="vetement" value="Borkinis">Borkinis</option>
<option class="vetement" value="Survettes">Survettes</option>
<option class="vetement" value="Capuchon">Capuchon</option>
<option class="vetement" value="CALECON">CALECON</option>
<option class="vetement" value="DOUDOUNE">DOUDOUNE</option>
<option class="vetement" value="DJELLABA">DJELLABA</option>
<option class="vetement" value="Jaket">Jaket</option>
<option class="vetement" value="SALOPETTE">SALOPETTE</option>
</optgroup>
</select>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script type="text/javascript" src="js/jquery.js"></script>
<script>$(document).ready(function(){$(".chaussure").click(function(){$("#Taillechaussure").show();$("#Taillevetement").hide();$("#Taillesac").hide();$("#Tailleaccessoires").hide()});$(".vetement").click(function(){$("#Taillechaussure").hide();$("#Taillevetement").show();$("#Taillesac").hide();$("#Tailleaccessoires").hide()});$(".sac").click(function(){$("#Taillechaussure").hide();$("#Taillevetement").hide();$("#Taillesac").show();$("#Tailleaccessoires").hide()});$(".accessoires").click(function(){$("#Taillechaussure").hide();$("#Taillevetement").hide();$("#Taillesac").hide();$("#Tailleaccessoires").show()})});</script>
</div>
<div class="col-sm">
<h5 class="m-2">Prix d'achat :</h5>
<input type="text" name="prixa" id="" required />
</div>
<div class="col-sm">
<h5 class="m-2">Prix de Vente:</h5>
<input type="text" name="prix" id="" required />
</div>
<div class="col-sm">
<h5 class="m-2">Remis :</h5>
<input type="text" name="remis" id="" required />
</div>
</div>
<div class="row">
<div class="col-sm">
<h5 class="m-2">Titre :</h5>
<input type="text" name="titre" required>
<h5 class="m-2">Description :</h5>
<textarea class="txtinput" name="description" id="" required rows="10"></textarea>
<div class="row">
<div id="Taillechaussure" class="col-sm">
<h5 class="m-2">Ajouter Pointure</h5>
<input type="checkbox" name="chkl[ ]" value="25" class="pointure" id="pointure1">
<label class="labelponture" for="pointure1">25</label>
<input type="checkbox" name="chkl[ ]" value="26" class="pointure" id="pointure2">
<label class="labelponture" for="pointure2">26</label>
<input type="checkbox" name="chkl[ ]" value="27" class="pointure" id="pointure3">
<label class="labelponture" for="pointure3">27</label>
<input type="checkbox" name="chkl[ ]" value="28" class="pointure" id="pointure4">
<label class="labelponture" for="pointure4">28</label>
<input type="checkbox" name="chkl[ ]" value="29" class="pointure" id="pointure5">
<label class="labelponture" for="pointure5">29</label>
<input type="checkbox" name="chkl[ ]" value="30" class="pointure" id="pointure6">
<label class="labelponture" for="pointure6">30</label>
<input type="checkbox" name="chkl[ ]" value="31" class="pointure" id="pointure7">
<label class="labelponture" for="pointure7">31</label>
<input type="checkbox" name="chkl[ ]" value="32" class="pointure" id="pointure8">
<label class="labelponture" for="pointure8">32</label>
<input type="checkbox" name="chkl[ ]" value="33" class="pointure" id="pointure9">
<label class="labelponture" for="pointure9">33</label>
<input type="checkbox" name="chkl[ ]" value="34" class="pointure" id="pointure10">
<label class="labelponture" for="pointure10">34</label>
<input type="checkbox" name="chkl[ ]" value="35" class="pointure" id="pointure11">
<label class="labelponture" for="pointure11">35</label>
<input type="checkbox" name="chkl[ ]" value="36" class="pointure" id="pointure12">
<label class="labelponture" for="pointure12">36</label>
<input type="checkbox" name="chkl[ ]" value="37" class="pointure" id="pointure13">
<label class="labelponture" for="pointure13">37</label>
<input type="checkbox" name="chkl[ ]" value="38" class="pointure" id="pointure14">
<label class="labelponture" for="pointure14">38</label>
<input type="checkbox" name="chkl[ ]" value="39" class="pointure" id="pointure15">
<label class="labelponture" for="pointure15">39</label>
<input type="checkbox" name="chkl[ ]" value="40" class="pointure" id="pointure16">
<label class="labelponture" for="pointure16">40</label>
<input type="checkbox" name="chkl[ ]" value="41" class="pointure" id="pointure17">
<label class="labelponture" for="pointure17">41</label>
<input type="checkbox" name="chkl[ ]" value="42" class="pointure" id="pointure18">
<label class="labelponture" for="pointure18">42</label>
<input type="checkbox" name="chkl[ ]" value="43" class="pointure" id="pointure19">
<label class="labelponture" for="pointure19">43</label>
<input type="checkbox" name="chkl[ ]" value="44" class="pointure" id="pointure20">
<label class="labelponture" for="pointure20">44</label>
<input type="checkbox" name="chkl[ ]" value="45" class="pointure" id="pointure21">
<label class="labelponture" for="pointure21">45</label>
</div>
<div id="Taillevetement" class="col-sm">
<h5 class="m-2">Ajouter Taille</h5>
<input type="checkbox" name="chkl[ ]" value="XS" class="tailleV" id="tailleV1">
<label for="tailleV1">XS</label>
<input type="checkbox" name="chkl[ ]" value="S" class="tailleV" id="tailleV2">
<label for="tailleV2">S</label>
<input type="checkbox" name="chkl[ ]" value="M" class="tailleV" id="tailleV3">
<label for="tailleV3">M</label>
<input type="checkbox" name="chkl[ ]" value="L" class="tailleV" id="tailleV4">
<label for="tailleV4">L</label>
<input type="checkbox" name="chkl[ ]" value="XL" class="tailleV" id="tailleV5">
<label for="tailleV5">XL</label>
<input type="checkbox" name="chkl[ ]" value="2XL" class="tailleV" id="tailleV6">
<label for="tailleV6">2XL</label>
<input type="checkbox" name="chkl[ ]" value="3XL" class="tailleV" id="tailleV7">
<label for="tailleV7">3XL</label>
<input type="checkbox" name="chkl[ ]" value="4XL" class="tailleV" id="tailleV8">
<label for="tailleV8">4XL</label>
<input type="checkbox" name="chkl[ ]" value="5XL" class="tailleV" id="tailleV9">
<label for="tailleV9">5XL</label>
<input type="checkbox" name="chkl[ ]" value="6XL" class="tailleV" id="tailleV10">
<label for="tailleV10">6XL</label>
</div>
<div id="Taillesac" class="col-sm">
<h5 class="m-2">Ajouter Taille</h5>
<input type="checkbox" name="chkl[ ]" value="Petite" class="tailleS" id="tailleS1">
<label for="tailleS1">Petite</label>
<input type="checkbox" name="chkl[ ]" value="Moyenne" class="tailleS" id="tailleS2">
<label for="tailleS2">Moyenne</label>
<input type="checkbox" name="chkl[ ]" value="Grande" class="tailleS" id="tailleS3">
<label for="tailleS3">Grande</label>
</div>
<div id="Tailleaccessoires" class="col-sm">
<h5 class="m-2">Ajouter Taille</h5>
<input type="checkbox" name="chkl[ ]" value="42" class="tailleA" id="tailleA1">
<label for="tailleA1">42</label>
<input type="checkbox" name="chkl[ ]" value="44" class="tailleA" id="tailleA2">
<label for="tailleA2">44</label>
<input type="checkbox" name="chkl[ ]" value="46" class="tailleA" id="tailleA3">
<label for="tailleA3">46</label>
<input type="checkbox" name="chkl[ ]" value="48" class="tailleA" id="tailleA4">
<label for="tailleA4">48</label>
<input type="checkbox" name="chkl[ ]" value="50" class="tailleA" id="tailleA5">
<label for="tailleA5">50</label>
<input type="checkbox" name="chkl[ ]" value="52" class="tailleA" id="tailleA6">
<label for="tailleA6">52</label>
<input type="checkbox" name="chkl[ ]" value="54" class="tailleA" id="tailleA7">
<label for="tailleA7">54</label>
<input type="checkbox" name="chkl[ ]" value="56" class="tailleA" id="tailleA8">
<label for="tailleA8">56</label>
<input type="checkbox" name="chkl[ ]" value="58" class="tailleA" id="tailleA9">
<label for="tailleA9">58</label>
<input type="checkbox" name="chkl[ ]" value="60" class="tailleA" id="tailleA10">
<label for="tailleA10">60</label>
<input type="checkbox" name="chkl[ ]" value="62" class="tailleA" id="tailleA11">
<label for="tailleA11">62</label>
<input type="checkbox" name="chkl[ ]" value="64" class="tailleA" id="tailleA12">
<label for="tailleA12">64</label>
<input type="checkbox" name="chkl[ ]" value="66" class="tailleA" id="tailleA13">
<label for="tailleA13">66</label>
<input type="checkbox" name="chkl[ ]" value="68" class="tailleA" id="tailleA14">
<label for="tailleA14">68</label>
<input type="checkbox" name="chkl[ ]" value="70" class="tailleA" id="tailleA15">
<label for="tailleA15"></label>
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
<input class="text-center" type="text" name="quantite" required />
</div>
<div class="col-sm">
<h5 class="m-2">Date :</h5>
<input class="text-center" type="text" name="date" value="<?php echo date('d-m-Y H:i:s ', time());?>" />
</div>
</div>
<h5 class="m-2">Image de produit :</h5>
<div class="row">
<div class="col-sm">
<input type="file" onchange="loadFile1(event)" name="img1" required id="inputImg1">
<label class="inputfile" for="inputImg1" style="min-height:200px">
<img src="img/icons/upload.png" id="output1" width="55" height="50" alt="">
</label>
</div>
<div class="col-sm-4">
<input type="file" onchange="loadFile2(event)" accept="image/*" name="img2" required id="inputImg2">
<label class="mb-2 inputfile1" for="inputImg2">
<img src="img/icons/upload.png" id="output2" width="35" height="30" alt="">
</label>
<input type="file" onchange="loadFile3(event)" accept="image/*" name="img3" required id="inputImg3">
<label class="mb-2 inputfile1" for="inputImg3">
<img src="img/icons/upload.png" id="output3" width="35" height="30" alt="">
</label>
<input type="file" onchange="loadFile4(event)" accept="image/*" name="img4" required id="inputImg4">
<label class="mb-2 inputfile1" for="inputImg4">
<img src="img/icons/upload.png" id="output4" width="35" height="30" alt="">
</label>
<input type="file" onchange="loadFile5(event)" accept="image/*" name="img5" required id="inputImg5">
<label class="inputfile1" for="inputImg5">
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
<script>var loadFile1=function(a){var b=document.getElementById("output1");b.style.width="100%";b.style.height="100%";b.src=URL.createObjectURL(a.target.files[0])};var loadFile2=function(a){var b=document.getElementById("output2");b.style.width="100%";b.style.height="100%";b.src=URL.createObjectURL(a.target.files[0])};var loadFile3=function(a){var b=document.getElementById("output3");b.style.width="100%";b.style.height="100%";b.src=URL.createObjectURL(a.target.files[0])};var loadFile4=function(a){var b=document.getElementById("output4");b.style.width="100%";b.style.height="100%";b.src=URL.createObjectURL(a.target.files[0])};var loadFile5=function(a){var b=document.getElementById("output5");b.style.width="100%";b.style.height="100%";b.src=URL.createObjectURL(a.target.files[0])};</script>
</body>
</html>