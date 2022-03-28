<?php include 'header.php';?>
<?php include 'navbar.php';?>
<body>
<script>document.title="Inscription ";</script>
<style>p{margin:0!important}.btnP{width:150px;height:35px;color:#000;display:flex;justify-content:center;align-items:center;background-color:#000;color:#fff;border:2px solid #000;text-align:center;font-size:20px;margin:0 20px}.btnP:hover{text-decoration:none;background-color:#fff;border:2px solid #000;color:#000}.btnP1{width:150px;height:35px;color:#000;display:flex;justify-content:center;align-items:center;background-color:#fff;border:2px solid #000;color:#000;text-align:center;font-size:20px;margin:0 20px}.btnP1:hover{text-decoration:none;background-color:#000;color:#fff;border:2px solid #000}.panier{text-align:center}.panier h1{font-size:42px;font-weight:bold}.flex-container{display:-ms-flexbox;display:-webkit-flex;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-align-content:center;-ms-flex-line-pack:center;align-content:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.flex-item:nth-child(1){-webkit-order:0;-ms-flex-order:0;order:0;-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto;-webkit-align-self:auto;-ms-flex-item-align:auto;align-self:auto}.flex-item:nth-child(2){-webkit-order:0;-ms-flex-order:0;order:0;-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto;-webkit-align-self:auto;-ms-flex-item-align:auto;align-self:auto}.flex-item:nth-child(3){-webkit-order:0;-ms-flex-order:0;order:0;-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto;-webkit-align-self:auto;-ms-flex-item-align:auto;align-self:auto}input[type="text"],input[type="password"],input[type="tele"],input[type="email"],textarea{width:300px;height:40px;border-radius:10px;border:1px solid #d9d9d9;background-color:#f7f7f7;margin-bottom:20px}</style>
<div id="page">
<div class="panier bg-white container rounded p-4">
<form method="GET" action="insere.php">
<div id="panier1" class="flex-container">
<div class="flex-item my-2"> <h1>Inscription</h1></div>
<div id="infoPanier" class="bg-white">
<div class="row">
<div class="col-sm text-left mx-2">
<p style="font-size:15px">Nom :</p>
<input class="text-center" required type="text" name="nom">
<p style="font-size:15px">Tele :</p>
<input class="text-center" required type="tele" name="tele">
<p style="font-size:15px">Ville :</p>
<input class="text-center" required type="text" name="ville">
<p style="font-size:15px">Mot de passe :</p>
<input id="password" type="password" required name="mdp" onkeyup='check()'>
<p style="font-size:15px">Confirmer Mot de passe :</p>
<input id="confirm_password" type="password" required name="" onkeyup='check()'> <br>
<span id='message'></span>
</div>
<div class="col-sm text-left mx-2">
<p style="font-size:15px">Prenom :</p>
<input class="text-center" required type="text" name="prenom">
<p style="font-size:15px">Adresse Email :</p>
<input class="text-center" required type="email" name="email">
<p style="font-size:15px">Adresse :</p>
<textarea style="height:210px;resize:none" required name="adresse"></textarea>
</div>
</div>
</div>
<div class="flex-item my-2 row">
<input class="btnP rounded" type="submit" value="Inscrire" />
<input class="btnP1 rounded" type="reset" value="Inscrire" />
</div>
</div>
</form>
</div>
<script>var check=function(){if(document.getElementById("password").value==document.getElementById("confirm_password").value){document.getElementById("message").style.color="green";document.getElementById("message").innerHTML="matching"}else{document.getElementById("message").style.color="red";document.getElementById("message").innerHTML="not matching"}};</script>
</div>
</body>
<?php include 'footer.php';?>